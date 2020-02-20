<?php

namespace Mollie\Api\Resources;

use Mollie\Api\Exceptions\ApiException;
use Mollie\Api\MollieApiClient;

class Profile extends BaseResource
{
    /**
     * @var string
     */
    public $resource;
    /**
     * @var string
     */
    public $id;
    /**
     * Test or live mode
     *
     * @var string
     */
    public $mode;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $website;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $phone;
    /**
     * See https://docs.mollie.com/reference/v2/profiles-api/get-profile
     *
     * @var int
     */
    public $categoryCode;
    /**
     * @var string
     */
    public $status;
    /**
     * @var object
     */
    public $review;
    /**
     * UTC datetime the profile was created in ISO-8601 format.
     *
     * @example "2013-12-25T10:30:54+00:00"
     * @var string
     */
    public $createdAt;
    /**
     * @var object[]
     */
    public $_links;

    /**
     * @return bool
     */
    public function isUnverified()
    {
        return $this->status == \Mollie\Api\Types\ProfileStatus::STATUS_UNVERIFIED;
    }

    /**
     * @return bool
     */
    public function isVerified()
    {
        return $this->status == \Mollie\Api\Types\ProfileStatus::STATUS_VERIFIED;
    }

    /**
     * @return bool
     */
    public function isBlocked()
    {
        return $this->status == \Mollie\Api\Types\ProfileStatus::STATUS_BLOCKED;
    }

    /**
     * @return Profile
     *
     * @throws ApiException
     */
    public function update()
    {
        /** @noinspection PhpUndefinedFieldInspection */
        if (!isset($this->_links->self->href)) {
            return $this;
        }
        $body = \json_encode(array("name" => $this->name, "website" => $this->website, "email" => $this->email, "phone" => $this->phone, "categoryCode" => $this->categoryCode, "mode" => $this->mode));
        /** @noinspection PhpUndefinedFieldInspection */
        $result = $this->client->performHttpCallToFullUrl(MollieApiClient::HTTP_PATCH, $this->_links->self->href, $body);

        return ResourceFactory::createFromApiResult($result, new Profile($this->client));
    }

    /**
     * Retrieves all chargebacks associated with this profile
     *
     * @return ChargebackCollection
     * @throws ApiException
     */
    public function chargebacks()
    {
        /** @noinspection PhpUndefinedFieldInspection */
        if (!isset($this->_links->chargebacks->href)) {
            return new ChargebackCollection($this->client, 0, null);
        }
        /** @noinspection PhpUndefinedFieldInspection */
        $result = $this->client->performHttpCallToFullUrl(MollieApiClient::HTTP_GET, $this->_links->chargebacks->href);

        return ResourceFactory::createCursorResourceCollection(
            $this->client,
            $result->_embedded->chargebacks,
            'Mollie\\Api\\Resources\\Chargeback',
            $result->_links
        );
    }

    /**
     * Retrieves all methods activated on this profile
     *
     * @return MethodCollection
     * @throws ApiException
     */
    public function methods()
    {
        /** @noinspection PhpUndefinedFieldInspection */
        if (!isset($this->_links->methods->href)) {
            return new MethodCollection(0, null);
        }
        /** @noinspection PhpUndefinedFieldInspection */
        $result = $this->client->performHttpCallToFullUrl(MollieApiClient::HTTP_GET, $this->_links->methods->href);

        return ResourceFactory::createCursorResourceCollection(
            $this->client,
            $result->_embedded->methods,
            'Mollie\\Api\\Resources\\Method',
            $result->_links
        );
    }

    /**
     * Enable a payment method for this profile.
     *
     * @param string $methodId
     * @param array $data
     * @return Method
     * @throws ApiException
     */
    public function enableMethod($methodId, array $data = array())
    {
        return $this->client->profileMethods->createFor($this, $methodId, $data);
    }

    /**
     * Disable a payment method for this profile.
     *
     * @param string $methodId
     * @param array $data
     * @return Method
     * @throws ApiException
     */
    public function disableMethod($methodId, array $data = array())
    {
        return $this->client->profileMethods->deleteFor($this, $methodId, $data);
    }

    /**
     * Retrieves all payments associated with this profile
     *
     * @return PaymentCollection
     * @throws ApiException
     */
    public function payments()
    {
        /** @noinspection PhpUndefinedFieldInspection */
        if (!isset($this->_links->payments->href)) {
            return new PaymentCollection($this->client, 0, null);
        }
        /** @noinspection PhpUndefinedFieldInspection */
        $result = $this->client->performHttpCallToFullUrl(MollieApiClient::HTTP_GET, $this->_links->payments->href);

        return ResourceFactory::createCursorResourceCollection(
            $this->client,
            $result->_embedded->methods,
            'Mollie\\Api\\Resources\\Method',
            $result->_links
        );
    }

    /**
     * Retrieves all refunds associated with this profile
     *
     * @return RefundCollection
     * @throws ApiException
     */
    public function refunds()
    {
        /** @noinspection PhpUndefinedFieldInspection */
        if (!isset($this->_links->refunds->href)) {
            return new RefundCollection($this->client, 0, null);
        }
        /** @noinspection PhpUndefinedFieldInspection */
        $result = $this->client->performHttpCallToFullUrl(MollieApiClient::HTTP_GET, $this->_links->refunds->href);

        return ResourceFactory::createCursorResourceCollection(
            $this->client,
            $result->_embedded->refunds,
            'Mollie\\Api\\Resources\\Refund',
            $result->_links
        );
    }
}
