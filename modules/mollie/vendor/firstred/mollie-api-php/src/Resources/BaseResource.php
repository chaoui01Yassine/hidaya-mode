<?php

namespace Mollie\Api\Resources;

use Mollie\Api\MollieApiClient;

/**
 * @property string id
 * @property string amount
 * @property string status
 * @property string  createdAt
 * @property string  description
 * @property string  paymentId
 * @property \stdClass settlementAmount
 * @property array _links
 */
abstract class BaseResource
{
    /**
     * @var MollieApiClient
     */
    protected $client;

    /**
     * @param $client
     */
    public function __construct(MollieApiClient $client)
    {
        $this->client = $client;
    }
}
