<?php

namespace Mollie\Api\Endpoints;

use Mollie\Api\Exceptions\ApiException;
use Mollie\Api\Resources\Order;
use Mollie\Api\Resources\OrderCollection;

class OrderEndpoint extends EndpointAbstract
{
    protected $resourcePath = "orders";

    /**
     * @var string
     */
    const RESOURCE_ID_PREFIX = 'ord_';

    /**
     * Get the object that is used by this API endpoint. Every API endpoint uses one
     * type of object.
     *
     * @return Order
     */
    protected function getResourceObject()
    {
        return new Order($this->client);
    }

    /**
     * Get the collection object that is used by this API endpoint. Every API
     * endpoint uses one type of collection object.
     *
     * @param int      $count
     * @param object[] $_links
     *
     * @return OrderCollection
     */
    protected function getResourceCollectionObject($count, $_links)
    {
        return new OrderCollection($this->client, $count, $_links);
    }

    /**
     * Creates a order in Mollie.
     *
     * @param array $data An array containing details on the order.
     * @param array $filters
     *
     * @return \Mollie\Api\Resources\BaseResource|Order
     * @throws ApiException
     */
    public function create(array $data = array(), array $filters = array())
    {
        return $this->rest_create($data, $filters);
    }

    /**
     * Retrieve a single order from Mollie.
     *
     * Will throw a ApiException if the order id is invalid or the resource cannot
     * be found.
     *
     * @param string $orderId
     * @param array  $parameters
     *
     * @return \Mollie\Api\Resources\BaseResource|Order
     * @throws ApiException
     */
    public function get($orderId, array $parameters = array())
    {
        if (empty($orderId) || \strpos($orderId, self::RESOURCE_ID_PREFIX) !== 0) {
            throw new ApiException("Invalid order ID: '{$orderId}'. An order ID should start with '".self::RESOURCE_ID_PREFIX."'.");
        }

        return parent::rest_read($orderId, $parameters);
    }

    /**
     * Cancel the given Order.
     *
     * If the order was partially shipped, the status will be "completed" instead of
     * "canceled".
     * Will throw a ApiException if the order id is invalid or the resource cannot
     * be found.
     * Returns the canceled order with HTTP status 200.
     *
     * @param string $orderId
     *
     * @return \Mollie\Api\Resources\BaseResource|Order
     * @throws ApiException
     */
    public function cancel($orderId)
    {
        return $this->rest_delete($orderId);
    }

    /**
     * Retrieves a collection of Orders from Mollie.
     *
     * @param string $from The first order ID you want to include in your list.
     * @param int    $limit
     * @param array  $parameters
     *
     * @return \Mollie\Api\Resources\BaseCollection|OrderCollection
     * @throws ApiException
     */
    public function page($from = null, $limit = null, array $parameters = array())
    {
        return $this->rest_list($from, $limit, $parameters);
    }
}
