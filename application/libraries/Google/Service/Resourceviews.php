<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Resourceviews (v1beta2).
 *
 * <p>
 * The Resource View API allows users to create and manage logical sets of
 * Google Compute Engine instances.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/compute/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Resourceviews extends Google_Service
{
    /** View and manage your data across Google Cloud Platform services. */
    const CLOUD_PLATFORM =
        "https://www.googleapis.com/auth/cloud-platform";
    /** View and manage your Google Compute Engine resources. */
    const COMPUTE =
        "https://www.googleapis.com/auth/compute";
    /** View your Google Compute Engine resources. */
    const COMPUTE_READONLY =
        "https://www.googleapis.com/auth/compute.readonly";
    /** View and manage your Google Cloud Platform management resources and deployment status information. */
    const NDEV_CLOUDMAN =
        "https://www.googleapis.com/auth/ndev.cloudman";
    /** View your Google Cloud Platform management resources and deployment status information. */
    const NDEV_CLOUDMAN_READONLY =
        "https://www.googleapis.com/auth/ndev.cloudman.readonly";

    public $zoneOperations;
    public $zoneViews;


    /**
     * Constructs the internal representation of the Resourceviews service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = 'resourceviews/v1beta2/projects/';
        $this->version = 'v1beta2';
        $this->serviceName = 'resourceviews';

        $this->zoneOperations = new Google_Service_Resourceviews_ZoneOperations_Resource(
            $this,
            $this->serviceName,
            'zoneOperations',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => '{project}/zones/{zone}/operations/{operation}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'zone' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'operation' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => '{project}/zones/{zone}/operations',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'zone' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'filter' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->zoneViews = new Google_Service_Resourceviews_ZoneViews_Resource(
            $this,
            $this->serviceName,
            'zoneViews',
            array(
                'methods' => array(
                    'addResources' => array(
                        'path' => '{project}/zones/{zone}/resourceViews/{resourceView}/addResources',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'zone' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'resourceView' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'delete' => array(
                        'path' => '{project}/zones/{zone}/resourceViews/{resourceView}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'zone' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'resourceView' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => '{project}/zones/{zone}/resourceViews/{resourceView}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'zone' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'resourceView' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'getService' => array(
                        'path' => '{project}/zones/{zone}/resourceViews/{resourceView}/getService',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'zone' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'resourceView' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'resourceName' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => '{project}/zones/{zone}/resourceViews',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'zone' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => '{project}/zones/{zone}/resourceViews',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'zone' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ), 'listResources' => array(
                        'path' => '{project}/zones/{zone}/resourceViews/{resourceView}/resources',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'zone' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'resourceView' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'listState' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'format' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'serviceName' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ), 'removeResources' => array(
                        'path' => '{project}/zones/{zone}/resourceViews/{resourceView}/removeResources',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'zone' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'resourceView' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'setService' => array(
                        'path' => '{project}/zones/{zone}/resourceViews/{resourceView}/setService',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'zone' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'resourceView' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
    }
}


/**
 * The "zoneOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $resourceviewsService = new Google_Service_Resourceviews(...);
 *   $zoneOperations = $resourceviewsService->zoneOperations;
 *  </code>
 */
class Google_Service_Resourceviews_ZoneOperations_Resource extends Google_Service_Resource
{

    /**
     * Retrieves the specified zone-specific operation resource.
     * (zoneOperations.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $operation Name of the operation resource to return.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Resourceviews_Operation
     */
    public function get($project, $zone, $operation, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'operation' => $operation);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Resourceviews_Operation");
    }

    /**
     * Retrieves the list of operation resources contained within the specified
     * zone. (zoneOperations.listZoneOperations)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed
     * resources.
     * @opt_param string pageToken Optional. Tag returned by a previous list request
     * truncated by maxResults. Used to continue a previous list request.
     * @opt_param string maxResults Optional. Maximum count of results to be
     * returned. Maximum value is 500 and default value is 500.
     * @return Google_Service_Resourceviews_OperationList
     */
    public function listZoneOperations($project, $zone, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Resourceviews_OperationList");
    }
}

/**
 * The "zoneViews" collection of methods.
 * Typical usage is:
 *  <code>
 *   $resourceviewsService = new Google_Service_Resourceviews(...);
 *   $zoneViews = $resourceviewsService->zoneViews;
 *  </code>
 */
class Google_Service_Resourceviews_ZoneViews_Resource extends Google_Service_Resource
{

    /**
     * Add resources to the view. (zoneViews.addResources)
     *
     * @param string $project The project name of the resource view.
     * @param string $zone The zone name of the resource view.
     * @param string $resourceView The name of the resource view.
     * @param Google_ZoneViewsAddResourcesRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Resourceviews_Operation
     */
    public function addResources($project, $zone, $resourceView, Google_Service_Resourceviews_ZoneViewsAddResourcesRequest $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'resourceView' => $resourceView, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('addResources', array($params), "Google_Service_Resourceviews_Operation");
    }

    /**
     * Delete a resource view. (zoneViews.delete)
     *
     * @param string $project The project name of the resource view.
     * @param string $zone The zone name of the resource view.
     * @param string $resourceView The name of the resource view.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Resourceviews_Operation
     */
    public function delete($project, $zone, $resourceView, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'resourceView' => $resourceView);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Resourceviews_Operation");
    }

    /**
     * Get the information of a zonal resource view. (zoneViews.get)
     *
     * @param string $project The project name of the resource view.
     * @param string $zone The zone name of the resource view.
     * @param string $resourceView The name of the resource view.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Resourceviews_ResourceView
     */
    public function get($project, $zone, $resourceView, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'resourceView' => $resourceView);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Resourceviews_ResourceView");
    }

    /**
     * Get the service information of a resource view or a resource.
     * (zoneViews.getService)
     *
     * @param string $project The project name of the resource view.
     * @param string $zone The zone name of the resource view.
     * @param string $resourceView The name of the resource view.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string resourceName The name of the resource if user wants to get
     * the service information of the resource.
     * @return Google_Service_Resourceviews_ZoneViewsGetServiceResponse
     */
    public function getService($project, $zone, $resourceView, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'resourceView' => $resourceView);
        $params = array_merge($params, $optParams);
        return $this->call('getService', array($params), "Google_Service_Resourceviews_ZoneViewsGetServiceResponse");
    }

    /**
     * Create a resource view. (zoneViews.insert)
     *
     * @param string $project The project name of the resource view.
     * @param string $zone The zone name of the resource view.
     * @param Google_ResourceView $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Resourceviews_Operation
     */
    public function insert($project, $zone, Google_Service_Resourceviews_ResourceView $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Resourceviews_Operation");
    }

    /**
     * List resource views. (zoneViews.listZoneViews)
     *
     * @param string $project The project name of the resource view.
     * @param string $zone The zone name of the resource view.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Specifies a nextPageToken returned by a previous
     * list request. This token can be used to request the next page of results from
     * a previous list request.
     * @opt_param int maxResults Maximum count of results to be returned. Acceptable
     * values are 0 to 5000, inclusive. (Default: 5000)
     * @return Google_Service_Resourceviews_ZoneViewsList
     */
    public function listZoneViews($project, $zone, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Resourceviews_ZoneViewsList");
    }

    /**
     * List the resources of the resource view. (zoneViews.listResources)
     *
     * @param string $project The project name of the resource view.
     * @param string $zone The zone name of the resource view.
     * @param string $resourceView The name of the resource view.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string listState The state of the instance to list. By default, it
     * lists all instances.
     * @opt_param string format The requested format of the return value. It can be
     * URL or URL_PORT. A JSON object will be included in the response based on the
     * format. The default format is NONE, which results in no JSON in the response.
     * @opt_param int maxResults Maximum count of results to be returned. Acceptable
     * values are 0 to 5000, inclusive. (Default: 5000)
     * @opt_param string pageToken Specifies a nextPageToken returned by a previous
     * list request. This token can be used to request the next page of results from
     * a previous list request.
     * @opt_param string serviceName The service name to return in the response. It
     * is optional and if it is not set, all the service end points will be
     * returned.
     * @return Google_Service_Resourceviews_ZoneViewsListResourcesResponse
     */
    public function listResources($project, $zone, $resourceView, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'resourceView' => $resourceView);
        $params = array_merge($params, $optParams);
        return $this->call('listResources', array($params), "Google_Service_Resourceviews_ZoneViewsListResourcesResponse");
    }

    /**
     * Remove resources from the view. (zoneViews.removeResources)
     *
     * @param string $project The project name of the resource view.
     * @param string $zone The zone name of the resource view.
     * @param string $resourceView The name of the resource view.
     * @param Google_ZoneViewsRemoveResourcesRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Resourceviews_Operation
     */
    public function removeResources($project, $zone, $resourceView, Google_Service_Resourceviews_ZoneViewsRemoveResourcesRequest $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'resourceView' => $resourceView, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('removeResources', array($params), "Google_Service_Resourceviews_Operation");
    }

    /**
     * Update the service information of a resource view or a resource.
     * (zoneViews.setService)
     *
     * @param string $project The project name of the resource view.
     * @param string $zone The zone name of the resource view.
     * @param string $resourceView The name of the resource view.
     * @param Google_ZoneViewsSetServiceRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Resourceviews_Operation
     */
    public function setService($project, $zone, $resourceView, Google_Service_Resourceviews_ZoneViewsSetServiceRequest $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'resourceView' => $resourceView, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('setService', array($params), "Google_Service_Resourceviews_Operation");
    }
}


class Google_Service_Resourceviews_Label extends Google_Model
{
    public $key;
    public $value;
    protected $internal_gapi_mappings = [];

    public function getKey()
    {
        return $this->key;
    }

    public function setKey($key)
    {
        $this->key = $key;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_Service_Resourceviews_ListResourceResponseItem extends Google_Model
{
    public $endpoints;
    public $resource;
    protected $internal_gapi_mappings = [];

    public function getEndpoints()
    {
        return $this->endpoints;
    }

    public function setEndpoints($endpoints)
    {
        $this->endpoints = $endpoints;
    }

    public function getResource()
    {
        return $this->resource;
    }

    public function setResource($resource)
    {
        $this->resource = $resource;
    }
}

class Google_Service_Resourceviews_ListResourceResponseItemEndpoints extends Google_Model
{
}

class Google_Service_Resourceviews_Operation extends Google_Collection
{
    public $clientOperationId;
    public $creationTimestamp;
    public $endTime;
    public $httpErrorMessage;
    public $httpErrorStatusCode;
    public $id;
    public $insertTime;
    public $kind;
    public $name;
    public $operationType;
    public $progress;
    public $region;
    public $selfLink;
    public $startTime;
    public $status;
    public $statusMessage;
    public $targetId;
    public $targetLink;
    public $user;
    public $zone;
    protected $collection_key = 'warnings';
    protected $internal_gapi_mappings = [];
    protected $errorType = 'Google_Service_Resourceviews_OperationError';
    protected $errorDataType = '';
    protected $warningsType = 'Google_Service_Resourceviews_OperationWarnings';
    protected $warningsDataType = 'array';

    public function getClientOperationId()
    {
        return $this->clientOperationId;
    }

    public function setClientOperationId($clientOperationId)
    {
        $this->clientOperationId = $clientOperationId;
    }

    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }

    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    public function setError(Google_Service_Resourceviews_OperationError $error)
    {
        $this->error = $error;
    }

    public function getError()
    {
        return $this->error;
    }

    public function getHttpErrorMessage()
    {
        return $this->httpErrorMessage;
    }

    public function setHttpErrorMessage($httpErrorMessage)
    {
        $this->httpErrorMessage = $httpErrorMessage;
    }

    public function getHttpErrorStatusCode()
    {
        return $this->httpErrorStatusCode;
    }

    public function setHttpErrorStatusCode($httpErrorStatusCode)
    {
        $this->httpErrorStatusCode = $httpErrorStatusCode;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getInsertTime()
    {
        return $this->insertTime;
    }

    public function setInsertTime($insertTime)
    {
        $this->insertTime = $insertTime;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getOperationType()
    {
        return $this->operationType;
    }

    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
    }

    public function getProgress()
    {
        return $this->progress;
    }

    public function setProgress($progress)
    {
        $this->progress = $progress;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($region)
    {
        $this->region = $region;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatusMessage()
    {
        return $this->statusMessage;
    }

    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;
    }

    public function getTargetId()
    {
        return $this->targetId;
    }

    public function setTargetId($targetId)
    {
        $this->targetId = $targetId;
    }

    public function getTargetLink()
    {
        return $this->targetLink;
    }

    public function setTargetLink($targetLink)
    {
        $this->targetLink = $targetLink;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function setWarnings($warnings)
    {
        $this->warnings = $warnings;
    }

    public function getWarnings()
    {
        return $this->warnings;
    }

    public function getZone()
    {
        return $this->zone;
    }

    public function setZone($zone)
    {
        $this->zone = $zone;
    }
}

class Google_Service_Resourceviews_OperationError extends Google_Collection
{
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = [];
    protected $errorsType = 'Google_Service_Resourceviews_OperationErrorErrors';
    protected $errorsDataType = 'array';


    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}

class Google_Service_Resourceviews_OperationErrorErrors extends Google_Model
{
    public $code;
    public $location;
    public $message;
    protected $internal_gapi_mappings = [];

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
}

class Google_Service_Resourceviews_OperationList extends Google_Collection
{
    public $id;
    public $kind;
    public $nextPageToken;
    public $selfLink;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Resourceviews_Operation';
    protected $itemsDataType = 'array';

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_Service_Resourceviews_OperationWarnings extends Google_Collection
{
    public $code;
    public $message;
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = [];
    protected $dataType = 'Google_Service_Resourceviews_OperationWarningsData';
    protected $dataDataType = 'array';

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
}

class Google_Service_Resourceviews_OperationWarningsData extends Google_Model
{
    public $key;
    public $value;
    protected $internal_gapi_mappings = [];

    public function getKey()
    {
        return $this->key;
    }

    public function setKey($key)
    {
        $this->key = $key;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_Service_Resourceviews_ResourceView extends Google_Collection
{
    public $creationTimestamp;
    public $description;
    public $fingerprint;
    public $id;
    public $kind;
    public $name;
    public $network;
    public $resources;
    public $selfLink;
    public $size;
    protected $collection_key = 'resources';
    protected $internal_gapi_mappings = [];
    protected $endpointsType = 'Google_Service_Resourceviews_ServiceEndpoint';
    protected $endpointsDataType = 'array';
    protected $labelsType = 'Google_Service_Resourceviews_Label';
    protected $labelsDataType = 'array';

    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }

    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setEndpoints($endpoints)
    {
        $this->endpoints = $endpoints;
    }

    public function getEndpoints()
    {
        return $this->endpoints;
    }

    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setLabels($labels)
    {
        $this->labels = $labels;
    }

    public function getLabels()
    {
        return $this->labels;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getNetwork()
    {
        return $this->network;
    }

    public function setNetwork($network)
    {
        $this->network = $network;
    }

    public function getResources()
    {
        return $this->resources;
    }

    public function setResources($resources)
    {
        $this->resources = $resources;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }
}

class Google_Service_Resourceviews_ServiceEndpoint extends Google_Model
{
    public $name;
    public $port;
    protected $internal_gapi_mappings = [];

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function setPort($port)
    {
        $this->port = $port;
    }
}

class Google_Service_Resourceviews_ZoneViewsAddResourcesRequest extends Google_Collection
{
    public $resources;
    protected $collection_key = 'resources';
    protected $internal_gapi_mappings = [];

    public function getResources()
    {
        return $this->resources;
    }

    public function setResources($resources)
    {
        $this->resources = $resources;
    }
}

class Google_Service_Resourceviews_ZoneViewsGetServiceResponse extends Google_Collection
{
    public $fingerprint;
    protected $collection_key = 'endpoints';
    protected $internal_gapi_mappings = [];
    protected $endpointsType = 'Google_Service_Resourceviews_ServiceEndpoint';
    protected $endpointsDataType = 'array';

    public function setEndpoints($endpoints)
    {
        $this->endpoints = $endpoints;
    }

    public function getEndpoints()
    {
        return $this->endpoints;
    }

    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
    }
}

class Google_Service_Resourceviews_ZoneViewsList extends Google_Collection
{
    public $kind;
    public $nextPageToken;
    public $selfLink;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Resourceviews_ResourceView';
    protected $itemsDataType = 'array';

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_Service_Resourceviews_ZoneViewsListResourcesResponse extends Google_Collection
{
    public $network;
    public $nextPageToken;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Resourceviews_ListResourceResponseItem';
    protected $itemsDataType = 'array';

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getNetwork()
    {
        return $this->network;
    }

    public function setNetwork($network)
    {
        $this->network = $network;
    }

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
}

class Google_Service_Resourceviews_ZoneViewsRemoveResourcesRequest extends Google_Collection
{
    public $resources;
    protected $collection_key = 'resources';
    protected $internal_gapi_mappings = [];

    public function getResources()
    {
        return $this->resources;
    }

    public function setResources($resources)
    {
        $this->resources = $resources;
    }
}

class Google_Service_Resourceviews_ZoneViewsSetServiceRequest extends Google_Collection
{
    public $fingerprint;
    public $resourceName;
    protected $collection_key = 'endpoints';
    protected $internal_gapi_mappings = [];
    protected $endpointsType = 'Google_Service_Resourceviews_ServiceEndpoint';
    protected $endpointsDataType = 'array';

    public function setEndpoints($endpoints)
    {
        $this->endpoints = $endpoints;
    }

    public function getEndpoints()
    {
        return $this->endpoints;
    }

    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    public function setFingerprint($fingerprint)
    {
        $this->fingerprint = $fingerprint;
    }

    public function getResourceName()
    {
        return $this->resourceName;
    }

    public function setResourceName($resourceName)
    {
        $this->resourceName = $resourceName;
    }
}
