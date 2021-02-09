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
 * Service definition for Deploymentmanager (v2beta1).
 *
 * <p>
 * The Deployment Manager API allows users to declaratively configure, deploy
 * and run complex solutions on the Google Cloud Platform.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/deployment-manager/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Deploymentmanager extends Google_Service
{
    /** View and manage your data across Google Cloud Platform services. */
    const CLOUD_PLATFORM =
        "https://www.googleapis.com/auth/cloud-platform";
    /** View and manage your Google Cloud Platform management resources and deployment status information. */
    const NDEV_CLOUDMAN =
        "https://www.googleapis.com/auth/ndev.cloudman";
    /** View your Google Cloud Platform management resources and deployment status information. */
    const NDEV_CLOUDMAN_READONLY =
        "https://www.googleapis.com/auth/ndev.cloudman.readonly";

    public $deployments;
    public $manifests;
    public $operations;
    public $resources;
    public $types;


    /**
     * Constructs the internal representation of the Deploymentmanager service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = 'deploymentmanager/v2beta1/projects/';
        $this->version = 'v2beta1';
        $this->serviceName = 'deploymentmanager';

        $this->deployments = new Google_Service_Deploymentmanager_Deployments_Resource(
            $this,
            $this->serviceName,
            'deployments',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => '{project}/global/deployments/{deployment}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'deployment' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => '{project}/global/deployments/{deployment}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'deployment' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => '{project}/global/deployments',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => '{project}/global/deployments',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
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
                    ),
                )
            )
        );
        $this->manifests = new Google_Service_Deploymentmanager_Manifests_Resource(
            $this,
            $this->serviceName,
            'manifests',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => '{project}/global/deployments/{deployment}/manifests/{manifest}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'deployment' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'manifest' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => '{project}/global/deployments/{deployment}/manifests',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'deployment' => array(
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
                    ),
                )
            )
        );
        $this->operations = new Google_Service_Deploymentmanager_Operations_Resource(
            $this,
            $this->serviceName,
            'operations',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => '{project}/global/operations/{operation}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
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
                        'path' => '{project}/global/operations',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
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
                    ),
                )
            )
        );
        $this->resources = new Google_Service_Deploymentmanager_Resources_Resource(
            $this,
            $this->serviceName,
            'resources',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => '{project}/global/deployments/{deployment}/resources/{resource}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'deployment' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'resource' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => '{project}/global/deployments/{deployment}/resources',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'deployment' => array(
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
                    ),
                )
            )
        );
        $this->types = new Google_Service_Deploymentmanager_Types_Resource(
            $this,
            $this->serviceName,
            'types',
            array(
                'methods' => array(
                    'list' => array(
                        'path' => '{project}/global/types',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
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
                    ),
                )
            )
        );
    }
}


/**
 * The "deployments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $deploymentmanagerService = new Google_Service_Deploymentmanager(...);
 *   $deployments = $deploymentmanagerService->deployments;
 *  </code>
 */
class Google_Service_Deploymentmanager_Deployments_Resource extends Google_Service_Resource
{

    /**
     * ! Deletes a deployment and all of the resources in the deployment.
     * (deployments.delete)
     *
     * @param string $project ! The project ID for this request.
     * @param string $deployment ! The name of the deployment for this request.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Deploymentmanager_Operation
     */
    public function delete($project, $deployment, $optParams = [])
    {
        $params = array('project' => $project, 'deployment' => $deployment);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Deploymentmanager_Operation");
    }

    /**
     * ! Gets information about a specific deployment. (deployments.get)
     *
     * @param string $project ! The project ID for this request.
     * @param string $deployment ! The name of the deployment for this request.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Deploymentmanager_Deployment
     */
    public function get($project, $deployment, $optParams = [])
    {
        $params = array('project' => $project, 'deployment' => $deployment);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Deploymentmanager_Deployment");
    }

    /**
     * ! Creates a deployment and all of the resources described by the ! deployment
     * manifest. (deployments.insert)
     *
     * @param string $project ! The project ID for this request.
     * @param Google_Deployment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Deploymentmanager_Operation
     */
    public function insert($project, Google_Service_Deploymentmanager_Deployment $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Deploymentmanager_Operation");
    }

    /**
     * ! Lists all deployments for a given project. (deployments.listDeployments)
     *
     * @param string $project ! The project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken ! Specifies a nextPageToken returned by a
     * previous list request. This ! token can be used to request the next page of
     * results from a previous ! list request.
     * @opt_param int maxResults ! Maximum count of results to be returned. !
     * Acceptable values are 0 to 100, inclusive. (Default: 50)
     * @return Google_Service_Deploymentmanager_DeploymentsListResponse
     */
    public function listDeployments($project, $optParams = [])
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Deploymentmanager_DeploymentsListResponse");
    }
}

/**
 * The "manifests" collection of methods.
 * Typical usage is:
 *  <code>
 *   $deploymentmanagerService = new Google_Service_Deploymentmanager(...);
 *   $manifests = $deploymentmanagerService->manifests;
 *  </code>
 */
class Google_Service_Deploymentmanager_Manifests_Resource extends Google_Service_Resource
{

    /**
     * ! Gets information about a specific manifest. (manifests.get)
     *
     * @param string $project ! The project ID for this request.
     * @param string $deployment ! The name of the deployment for this request.
     * @param string $manifest ! The name of the manifest for this request.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Deploymentmanager_Manifest
     */
    public function get($project, $deployment, $manifest, $optParams = [])
    {
        $params = array('project' => $project, 'deployment' => $deployment, 'manifest' => $manifest);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Deploymentmanager_Manifest");
    }

    /**
     * ! Lists all manifests for a given deployment. (manifests.listManifests)
     *
     * @param string $project ! The project ID for this request.
     * @param string $deployment ! The name of the deployment for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken ! Specifies a nextPageToken returned by a
     * previous list request. This ! token can be used to request the next page of
     * results from a previous ! list request.
     * @opt_param int maxResults ! Maximum count of results to be returned. !
     * Acceptable values are 0 to 100, inclusive. (Default: 50)
     * @return Google_Service_Deploymentmanager_ManifestsListResponse
     */
    public function listManifests($project, $deployment, $optParams = [])
    {
        $params = array('project' => $project, 'deployment' => $deployment);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Deploymentmanager_ManifestsListResponse");
    }
}

/**
 * The "operations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $deploymentmanagerService = new Google_Service_Deploymentmanager(...);
 *   $operations = $deploymentmanagerService->operations;
 *  </code>
 */
class Google_Service_Deploymentmanager_Operations_Resource extends Google_Service_Resource
{

    /**
     * ! Gets information about a specific Operation. (operations.get)
     *
     * @param string $project ! The project ID for this request.
     * @param string $operation ! The name of the operation for this request.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Deploymentmanager_Operation
     */
    public function get($project, $operation, $optParams = [])
    {
        $params = array('project' => $project, 'operation' => $operation);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Deploymentmanager_Operation");
    }

    /**
     * ! Lists all Operations for a project. (operations.listOperations)
     *
     * @param string $project ! The project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken ! Specifies a nextPageToken returned by a
     * previous list request. This ! token can be used to request the next page of
     * results from a previous ! list request.
     * @opt_param int maxResults ! Maximum count of results to be returned. !
     * Acceptable values are 0 to 100, inclusive. (Default: 50)
     * @return Google_Service_Deploymentmanager_OperationsListResponse
     */
    public function listOperations($project, $optParams = [])
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Deploymentmanager_OperationsListResponse");
    }
}

/**
 * The "resources" collection of methods.
 * Typical usage is:
 *  <code>
 *   $deploymentmanagerService = new Google_Service_Deploymentmanager(...);
 *   $resources = $deploymentmanagerService->resources;
 *  </code>
 */
class Google_Service_Deploymentmanager_Resources_Resource extends Google_Service_Resource
{

    /**
     * ! Gets information about a single resource. (resources.get)
     *
     * @param string $project ! The project ID for this request.
     * @param string $deployment ! The name of the deployment for this request.
     * @param string $resource ! The name of the resource for this request.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Deploymentmanager_DeploymentmanagerResource
     */
    public function get($project, $deployment, $resource, $optParams = [])
    {
        $params = array('project' => $project, 'deployment' => $deployment, 'resource' => $resource);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Deploymentmanager_DeploymentmanagerResource");
    }

    /**
     * ! Lists all resources in a given deployment. (resources.listResources)
     *
     * @param string $project ! The project ID for this request.
     * @param string $deployment ! The name of the deployment for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken ! Specifies a nextPageToken returned by a
     * previous list request. This ! token can be used to request the next page of
     * results from a previous ! list request.
     * @opt_param int maxResults ! Maximum count of results to be returned. !
     * Acceptable values are 0 to 100, inclusive. (Default: 50)
     * @return Google_Service_Deploymentmanager_ResourcesListResponse
     */
    public function listResources($project, $deployment, $optParams = [])
    {
        $params = array('project' => $project, 'deployment' => $deployment);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Deploymentmanager_ResourcesListResponse");
    }
}

/**
 * The "types" collection of methods.
 * Typical usage is:
 *  <code>
 *   $deploymentmanagerService = new Google_Service_Deploymentmanager(...);
 *   $types = $deploymentmanagerService->types;
 *  </code>
 */
class Google_Service_Deploymentmanager_Types_Resource extends Google_Service_Resource
{

    /**
     * ! Lists all Types for Deployment Manager. (types.listTypes)
     *
     * @param string $project ! The project ID for this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken ! Specifies a nextPageToken returned by a
     * previous list request. This ! token can be used to request the next page of
     * results from a previous ! list request.
     * @opt_param int maxResults ! Maximum count of results to be returned. !
     * Acceptable values are 0 to 100, inclusive. (Default: 50)
     * @return Google_Service_Deploymentmanager_TypesListResponse
     */
    public function listTypes($project, $optParams = [])
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Deploymentmanager_TypesListResponse");
    }
}


class Google_Service_Deploymentmanager_Deployment extends Google_Model
{
    public $description;
    public $id;
    public $manifest;
    public $name;
    public $targetConfig;
    protected $internal_gapi_mappings = [];

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getManifest()
    {
        return $this->manifest;
    }

    public function setManifest($manifest)
    {
        $this->manifest = $manifest;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getTargetConfig()
    {
        return $this->targetConfig;
    }

    public function setTargetConfig($targetConfig)
    {
        $this->targetConfig = $targetConfig;
    }
}

class Google_Service_Deploymentmanager_DeploymentmanagerResource extends Google_Collection
{
    public $errors;
    public $id;
    public $intent;
    public $manifest;
    public $name;
    public $state;
    public $type;
    public $url;
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = [];

    public function getErrors()
    {
        return $this->errors;
    }

    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIntent()
    {
        return $this->intent;
    }

    public function setIntent($intent)
    {
        $this->intent = $intent;
    }

    public function getManifest()
    {
        return $this->manifest;
    }

    public function setManifest($manifest)
    {
        $this->manifest = $manifest;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }
}

class Google_Service_Deploymentmanager_DeploymentsListResponse extends Google_Collection
{
    public $nextPageToken;
    protected $collection_key = 'deployments';
    protected $internal_gapi_mappings = [];
    protected $deploymentsType = 'Google_Service_Deploymentmanager_Deployment';
    protected $deploymentsDataType = 'array';

    public function setDeployments($deployments)
    {
        $this->deployments = $deployments;
    }

    public function getDeployments()
    {
        return $this->deployments;
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

class Google_Service_Deploymentmanager_Manifest extends Google_Model
{
    public $config;
    public $evaluatedConfig;
    public $id;
    public $name;
    public $selfLink;
    protected $internal_gapi_mappings = [];

    public function getConfig()
    {
        return $this->config;
    }

    public function setConfig($config)
    {
        $this->config = $config;
    }

    public function getEvaluatedConfig()
    {
        return $this->evaluatedConfig;
    }

    public function setEvaluatedConfig($evaluatedConfig)
    {
        $this->evaluatedConfig = $evaluatedConfig;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
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

class Google_Service_Deploymentmanager_ManifestsListResponse extends Google_Collection
{
    public $nextPageToken;
    protected $collection_key = 'manifests';
    protected $internal_gapi_mappings = [];
    protected $manifestsType = 'Google_Service_Deploymentmanager_Manifest';
    protected $manifestsDataType = 'array';

    public function setManifests($manifests)
    {
        $this->manifests = $manifests;
    }

    public function getManifests()
    {
        return $this->manifests;
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

class Google_Service_Deploymentmanager_Operation extends Google_Collection
{
    public $creationTimestamp;
    public $endTime;
    public $httpErrorMessage;
    public $httpErrorStatusCode;
    public $id;
    public $insertTime;
    public $name;
    public $operationType;
    public $progress;
    public $selfLink;
    public $startTime;
    public $status;
    public $statusMessage;
    public $targetId;
    public $targetLink;
    public $user;
    protected $collection_key = 'warnings';
    protected $internal_gapi_mappings = [];
    protected $errorType = 'Google_Service_Deploymentmanager_OperationError';
    protected $errorDataType = '';
    protected $warningsType = 'Google_Service_Deploymentmanager_OperationWarnings';
    protected $warningsDataType = 'array';

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

    public function setError(Google_Service_Deploymentmanager_OperationError $error)
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
}

class Google_Service_Deploymentmanager_OperationError extends Google_Collection
{
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = [];
    protected $errorsType = 'Google_Service_Deploymentmanager_OperationErrorErrors';
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

class Google_Service_Deploymentmanager_OperationErrorErrors extends Google_Model
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

class Google_Service_Deploymentmanager_OperationWarnings extends Google_Collection
{
    public $code;
    public $message;
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = [];
    protected $dataType = 'Google_Service_Deploymentmanager_OperationWarningsData';
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

class Google_Service_Deploymentmanager_OperationWarningsData extends Google_Model
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

class Google_Service_Deploymentmanager_OperationsListResponse extends Google_Collection
{
    public $nextPageToken;
    protected $collection_key = 'operations';
    protected $internal_gapi_mappings = [];
    protected $operationsType = 'Google_Service_Deploymentmanager_Operation';
    protected $operationsDataType = 'array';

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function setOperations($operations)
    {
        $this->operations = $operations;
    }

    public function getOperations()
    {
        return $this->operations;
    }
}

class Google_Service_Deploymentmanager_ResourcesListResponse extends Google_Collection
{
    public $nextPageToken;
    protected $collection_key = 'resources';
    protected $internal_gapi_mappings = [];
    protected $resourcesType = 'Google_Service_Deploymentmanager_DeploymentmanagerResource';
    protected $resourcesDataType = 'array';

    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }

    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }

    public function setResources($resources)
    {
        $this->resources = $resources;
    }

    public function getResources()
    {
        return $this->resources;
    }
}

class Google_Service_Deploymentmanager_Type extends Google_Model
{
    public $name;
    protected $internal_gapi_mappings = [];

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

class Google_Service_Deploymentmanager_TypesListResponse extends Google_Collection
{
    protected $collection_key = 'types';
    protected $internal_gapi_mappings = [];
    protected $typesType = 'Google_Service_Deploymentmanager_Type';
    protected $typesDataType = 'array';


    public function setTypes($types)
    {
        $this->types = $types;
    }

    public function getTypes()
    {
        return $this->types;
    }
}
