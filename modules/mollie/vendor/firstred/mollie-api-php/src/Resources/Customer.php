<?php

namespace Mollie\Api\Resources;

use Mollie\Api\Exceptions\ApiException;
use Mollie\Api\MollieApiClient;

class Customer extends BaseResource
{
    /**
     * @var string
     */
    public $resource;
    /**
     * Id of the customer.
     *
     * @var string
     */
    public $id;
    /**
     * Either "live" or "test". Indicates this being a test or a live (verified) customer.
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
    public $email;
    /**
     * @var string|null
     */
    public $locale;
    /**
     * @var object|mixed|null
     */
    public $metadata;
    /**
     * @var string[]|array
     */
    public $recentlyUsedMethods;
    /**
     * @var string
     */
    public $createdAt;
    /**
     * @var object[]
     */
    public $_links;

    /**
     * @return BaseResource|Customer
     * @throws ApiException
     * @throws \ErrorException
     */
    public function update()
    {
        /** @noinspection PhpUndefinedFieldInspection */
        if (!isset($this->_links->self->href)) {
            return $this;
        }
        $body = \json_encode(array("name" => $this->name, "email" => $this->email, "locale" => $this->locale, "metadata" => $this->metadata));
        /** @noinspection PhpUndefinedFieldInspection */
        $result = $this->client->performHttpCallToFullUrl(MollieApiClient::HTTP_PATCH, $this->_links->self->href, $body);

        return ResourceFactory::createFromApiResult($result, new Customer($this->client));
    }

    /**
     * @param array $options
     * @param array $filters
     *
     * @return Payment
     * @throws ApiException
     */
    public function createPayment(array $options = array(), array $filters = array())
    {
        return $this->client->customerPayments->createFor($this, $options, $filters);
    }

    /**
     * Get all payments for this customer
     *
     * @return PaymentCollection
     * @throws ApiException
     */
    public function payments()
    {
        return $this->client->customerPayments->listFor($this, null, null, $this->getPresetOptions());
    }

    /**
     * When accessed by oAuth we want to pass the testmode by default
     *
     * @return array
     */
    private function getPresetOptions()
    {
        $options = array();
        if ($this->client->usesOAuth()) {
            $options["testmode"] = $this->mode === "test" ? \true : \false;
        }

        return $options;
    }

    /**
     * @param array $options
     * @param array $filters
     *
     * @return Subscription
     * @throws ApiException
     */
    public function createSubscription(array $options = array(), array $filters = array())
    {
        return $this->client->subscriptions->createFor($this, $options, $filters);
    }

    /**
     * @param string $subscriptionId
     * @param array  $parameters
     *
     * @return Subscription
     * @throws ApiException
     */
    public function getSubscription($subscriptionId, array $parameters = array())
    {
        return $this->client->subscriptions->getFor($this, $subscriptionId, $parameters);
    }

    /**
     * @param string $subscriptionId
     *
     * @return null
     * @throws ApiException
     */
    public function cancelSubscription($subscriptionId)
    {
        return $this->client->subscriptions->cancelFor($this, $subscriptionId, $this->getPresetOptions());
    }

    /**
     * Get all subscriptions for this customer
     *
     * @return SubscriptionCollection
     * @throws ApiException
     */
    public function subscriptions()
    {
        return $this->client->subscriptions->listFor($this, null, null, $this->getPresetOptions());
    }

    /**
     * @param array $options
     * @param array $filters
     *
     * @return Mandate
     * @throws ApiException
     */
    public function createMandate(array $options = array(), array $filters = array())
    {
        return $this->client->mandates->createFor($this, $options, $filters);
    }

    /**
     * @param string $mandateId
     * @param array  $parameters
     *
     * @return Mandate
     * @throws ApiException
     */
    public function getMandate($mandateId, array $parameters = array())
    {
        return $this->client->mandates->getFor($this, $mandateId, $parameters);
    }

    /**
     * @param string $mandateId
     *
     * @return null
     * @throws ApiException
     */
    public function revokeMandate($mandateId)
    {
        return $this->client->mandates->revokeFor($this, $mandateId, $this->getPresetOptions());
    }

    /**
     * Get all mandates for this customer
     *
     * @return MandateCollection
     * @throws ApiException
     */
    public function mandates()
    {
        return $this->client->mandates->listFor($this, null, null, $this->getPresetOptions());
    }

    /**
     * Helper function to check for mandate with status valid
     *
     * @return bool
     * @throws ApiException
     */
    public function hasValidMandate()
    {
        $mandates = $this->client->mandates->listFor($this, null, null, $this->getPresetOptions());
        foreach ($mandates as $mandate) {
            if ($mandate->isValid()) {
                return \true;
            }
        }

        return \false;
    }
}
