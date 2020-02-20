<?php

namespace Mollie\Api\Http;

use Composer\CaBundle\CaBundle;
use Curl\Curl;
use Mollie\Api\Exceptions\RequestException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class Client extends Curl implements ClientInterface
{
    private $options = array();
    /** @var float $minDelay */
    public $minDelay = 0.5;
    /** @var float $maxDelay */
    public $maxDelay = 4.0;
    /** @var int $maxRetries */
    public $maxRetries = 3;
    /** @var int $remainingRetries */
    public $remainingRetries = 3;

    public function __construct($base_url = null)
    {
        parent::__construct($base_url);

        $caPathOrFile = CaBundle::getSystemCaRootBundlePath();
        if (is_dir($caPathOrFile) || (is_link($caPathOrFile) && is_dir(readlink($caPathOrFile)))) {
            $this->setOpt(CURLOPT_CAPATH, $caPathOrFile);
        } else {
            $this->setOpt(CURLOPT_CAINFO, $caPathOrFile);
        }

    }

    /**
     * Send an HTTP request.
     *
     * @param RequestInterface $request Request to send
     * @param array            $options Request options to apply to the given
     *                                  request and to the transfer.
     *
     * @return ResponseInterface
     *
     * @throws RequestException
     * @throws \ErrorException
     */
    public function send(RequestInterface $request, array $options = array())
    {
        foreach ($request->getHeaders() as $key => $value) {
            $this->setHeader($key, $value[0]);
        }
        if (static::isJson((string) $request->getBody())) {
            $this->setHeader('Content-Type', 'application/json;charset=UTF-8');
        }

        switch (strtolower($request->getMethod())) {
            case 'get':
                $response = $this->get((string) $request->getUri());
                break;
            case 'post':
                $response = $this->post((string) $request->getUri(), (string) $request->getBody());
                break;
            case 'delete':
                $response = $this->delete((string) $request->getUri(), array(), (string) $request->getBody());
                break;
            default:
                throw new \InvalidArgumentException("Method not supported");
        }

        $responseHeaders = array();
        foreach ($this->responseHeaders as $key => $value) {
            $responseHeaders[$key] = $value;
        }

        if ($this->httpStatusCode < 200 || $this->httpStatusCode >= 300) {
            throw new RequestException('', $request, new \Hough\Psr7\Response(
                $this->httpStatusCode,
                $responseHeaders,
                is_array($response) || is_object($response) ? json_encode($response) : $response,
                '1.1'
            ));
        }

        return new \Hough\Psr7\Response(
            $this->httpStatusCode,
            $responseHeaders,
            is_array($response) || is_object($response) ? json_encode($response) : $response,
            '1.1'
        );
    }

    /**
     * Check if the given string is valid JSON
     *
     * @param string $string
     *
     * @return bool
     */
    private static function isJson($string)
    {
        json_decode($string);

        return (json_last_error() == JSON_ERROR_NONE);
    }

    /**
     * Get a client configuration option.
     *
     * These options include default request options of the client, a "handler"
     * (if utilized by the concrete client), and a "base_uri" if utilized by
     * the concrete client.
     *
     * @param string|null $option The config option to retrieve.
     *
     * @return mixed
     */
    public function getConfig($option = null)
    {
        return $this->options;
    }

    /**
     * @return \Closure|null
     */
    public function getRetryDecider() {
        return function (Client $curl) {
            if ($curl->remainingRetries <= 0) {
                return false;
            }

            // Certificate problems, do not decrement retry counter
            /* 77 = CURLE_SSL_CACERT_BADFILE (constant not defined in PHP though). */
            if ($curl->curlErrorCode === CURLE_SSL_CACERT
                || $curl->curlErrorCode === CURLE_SSL_PEER_CERTIFICATE
                || $curl->curlErrorCode === 77
            ) {
                /*
                 * On some servers, the list of installed certificates is outdated or not present at all (the ca-bundle.crt
                 * is not installed). So we tell cURL which certificates we trust. Then we retry the requests.
                 */
                $curl->setOpt(CURLOPT_CAINFO, CaBundle::getBundledCaBundlePath());

                return true;
            }

            /*
             * On some servers, the wildcard SSL certificate is not processed correctly. This happens with OpenSSL 0.9.7
             * from 2003.
             */
            if (strpos($curl->curlErrorMessage, "certificate subject name 'mollie.nl' does not match target host") !== false) {
                $curl->setOpt(CURLOPT_SSL_VERIFYHOST, false);

                return true;
            }

            // Generic 5xx error, exponential backoff and decrement retry counter
            if ($curl->curlErrorCode || $curl->httpStatusCode >= 500) {
                // Exponential back off
                sleep(min($curl->minDelay * pow(2, $curl->maxRetries - --$curl->remainingRetries), $curl->maxDelay));

                return true;
            }

            return false;
        };
    }
}
