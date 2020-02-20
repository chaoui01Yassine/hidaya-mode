<?php

namespace Mollie\Api\Endpoints;

use Mollie\Api\Exceptions\ApiException;
use Mollie\Api\Resources\BaseCollection;
use Mollie\Api\Resources\BaseResource;
use Mollie\Api\Resources\Permission;
use Mollie\Api\Resources\PermissionCollection;

class PermissionEndpoint extends EndpointAbstract
{
    protected $resourcePath = "permissions";

    /**
     * Get the object that is used by this API endpoint. Every API endpoint uses one
     * type of object.
     *
     * @return Permission
     */
    protected function getResourceObject()
    {
        return new Permission($this->client);
    }

    /**
     * Get the collection object that is used by this API endpoint. Every API
     * endpoint uses one type of collection object.
     *
     * @param int      $count
     * @param object[] $_links
     *
     * @return PermissionCollection
     */
    protected function getResourceCollectionObject($count, $_links)
    {
        return new PermissionCollection($count, $_links);
    }

    /**
     * Retrieve a single Permission from Mollie.
     *
     * Will throw an ApiException if the permission id is invalid.
     *
     * @param string $permissionId
     * @param array  $parameters
     *
     * @return BaseResource|Permission
     * @throws ApiException
     */
    public function get($permissionId, array $parameters = array())
    {
        return $this->rest_read($permissionId, $parameters);
    }

    /**
     * Retrieve all permissions.
     *
     * @param array $parameters
     *
     * @return BaseCollection|PermissionCollection
     * @throws ApiException
     */
    public function all(array $parameters = array())
    {
        return parent::rest_list(null, null, $parameters);
    }
}
