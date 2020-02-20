<?php

namespace Mollie\Api\Endpoints;

use Mollie\Api\Exceptions\ApiException;
use Mollie\Api\Resources\Profile;
use Mollie\Api\Resources\ProfileCollection;

class ProfileEndpoint extends EndpointAbstract
{
    protected $resourcePath = "profiles";
    protected $resourceClass = 'Mollie\\Api\\Resources\\Profile';

    /**
     * Get the object that is used by this API endpoint. Every API endpoint uses one type of object.
     *
     * @return Profile
     */
    protected function getResourceObject()
    {
        return new $this->resourceClass($this->client);
    }

    /**
     * Get the collection object that is used by this API endpoint. Every API endpoint uses one type of collection object.
     *
     * @param int $count
     * @param object[] $_links
     *
     * @return ProfileCollection
     */
    protected function getResourceCollectionObject($count, $_links)
    {
        return new ProfileCollection($this->client, $count, $_links);
    }

    /**
     * Creates a Profile in Mollie.
     *
     * @param array $data An array containing details on the profile.
     * @param array $filters
     *
     * @return BaseResource|Profile
     * @return \Mollie\Api\Resources\BaseResource|\Mollie\Api\Resources\Profile
     * @throws ApiException
     */
    public function create(array $data = array(), array $filters = array())
    {
        return $this->rest_create($data, $filters);
    }

    /**
     * Retrieve a Profile from Mollie.
     *
     * Will throw an ApiException if the profile id is invalid or the resource cannot be found.
     *
     * @param string $profileId
     * @param array  $parameters
     *
     * @return \Mollie\Api\Resources\BaseResource|\Mollie\Api\Resources\Profile
     * @throws ApiException
     */
    public function get($profileId, array $parameters = array())
    {
        if($profileId === 'me') {
            return $this->getCurrent($parameters);
        }

        return $this->rest_read($profileId, $parameters);
    }

    /**
     * Retrieve the current Profile from Mollie.
     *
     * @param array $parameters
     *
     * @return \Mollie\Api\Resources\BaseResource|\Mollie\Api\Resources\CurrentProfile
     * @throws ApiException
     */
    public function getCurrent(array $parameters = array())
    {
        $this->resourceClass = 'Mollie\\Api\\Resources\\CurrentProfile';

        return $this->rest_read('me', $parameters);
    }

    /**
     * Delete a Profile from Mollie.
     *
     * Will throw a ApiException if the profile id is invalid or the resource cannot be found.
     * Returns with HTTP status No Content (204) if successful.
     *
     * @param string $profileId
     *
     * @param array $data
     * @return \Mollie\Api\Resources\BaseResource|\Mollie\Api\Resources\Profile
     * @throws ApiException
     */
    public function delete($profileId, array $data = array())
    {
        return $this->rest_delete($profileId, $data);
    }

    /**
     * Retrieves a collection of Profiles from Mollie.
     *
     * @param string $from The first profile ID you want to include in your list.
     * @param int    $limit
     * @param array  $parameters
     *
     * @return \Mollie\Api\Resources\BaseCollection|\Mollie\Api\Resources\ProfileCollection
     * @throws ApiException
     */
    public function page($from = null, $limit = null, array $parameters = array())
    {
        return $this->rest_list($from, $limit, $parameters);
    }
}
