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
 * Service definition for Autoscaler (v1beta2).
 *
 * <p>
 * The Google Compute Engine Autoscaler API provides autoscaling for groups of
 * Cloud VMs.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="http://developers.google.com/compute/docs/autoscaler" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Autoscaler extends Google_Service
{
    /** View and manage your Google Compute Engine resources. */
    const COMPUTE =
        "https://www.googleapis.com/auth/compute";
    /** View your Google Compute Engine resources. */
    const COMPUTE_READONLY =
        "https://www.googleapis.com/auth/compute.readonly";

    public $autoscalers;
    public $zoneOperations;
    public $zones;


    /**
     * Constructs the internal representation of the Autoscaler service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = 'autoscaler/v1beta2/';
        $this->version = 'v1beta2';
        $this->serviceName = 'autoscaler';

        $this->autoscalers = new Google_Service_Autoscaler_Autoscalers_Resource(
            $this,
            $this->serviceName,
            'autoscalers',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'projects/{project}/zones/{zone}/autoscalers/{autoscaler}',
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
                            'autoscaler' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'projects/{project}/zones/{zone}/autoscalers/{autoscaler}',
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
                            'autoscaler' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'projects/{project}/zones/{zone}/autoscalers',
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
                        'path' => 'projects/{project}/zones/{zone}/autoscalers',
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
                    ), 'patch' => array(
                        'path' => 'projects/{project}/zones/{zone}/autoscalers/{autoscaler}',
                        'httpMethod' => 'PATCH',
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
                            'autoscaler' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'projects/{project}/zones/{zone}/autoscalers/{autoscaler}',
                        'httpMethod' => 'PUT',
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
                            'autoscaler' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->zoneOperations = new Google_Service_Autoscaler_ZoneOperations_Resource(
            $this,
            $this->serviceName,
            'zoneOperations',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => '{project}/zones/{zone}/operations/{operation}',
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
                            'operation' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
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
        $this->zones = new Google_Service_Autoscaler_Zones_Resource(
            $this,
            $this->serviceName,
            'zones',
            array(
                'methods' => array(
                    'list' => array(
                        'path' => '{project}/zones',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
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
    }
}


/**
 * The "autoscalers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $autoscalerService = new Google_Service_Autoscaler(...);
 *   $autoscalers = $autoscalerService->autoscalers;
 *  </code>
 */
class Google_Service_Autoscaler_Autoscalers_Resource extends Google_Service_Resource
{

    /**
     * Deletes the specified Autoscaler resource. (autoscalers.delete)
     *
     * @param string $project Project ID of Autoscaler resource.
     * @param string $zone Zone name of Autoscaler resource.
     * @param string $autoscaler Name of the Autoscaler resource.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Autoscaler_Operation
     */
    public function delete($project, $zone, $autoscaler, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'autoscaler' => $autoscaler);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_Autoscaler_Operation");
    }

    /**
     * Gets the specified Autoscaler resource. (autoscalers.get)
     *
     * @param string $project Project ID of Autoscaler resource.
     * @param string $zone Zone name of Autoscaler resource.
     * @param string $autoscaler Name of the Autoscaler resource.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Autoscaler_Autoscaler
     */
    public function get($project, $zone, $autoscaler, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'autoscaler' => $autoscaler);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Autoscaler_Autoscaler");
    }

    /**
     * Adds new Autoscaler resource. (autoscalers.insert)
     *
     * @param string $project Project ID of Autoscaler resource.
     * @param string $zone Zone name of Autoscaler resource.
     * @param Google_Autoscaler $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Autoscaler_Operation
     */
    public function insert($project, $zone, Google_Service_Autoscaler_Autoscaler $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Autoscaler_Operation");
    }

    /**
     * Lists all Autoscaler resources in this zone. (autoscalers.listAutoscalers)
     *
     * @param string $project Project ID of Autoscaler resource.
     * @param string $zone Zone name of Autoscaler resource.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter
     * @opt_param string pageToken
     * @opt_param string maxResults
     * @return Google_Service_Autoscaler_AutoscalerListResponse
     */
    public function listAutoscalers($project, $zone, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Autoscaler_AutoscalerListResponse");
    }

    /**
     * Update the entire content of the Autoscaler resource. This method supports
     * patch semantics. (autoscalers.patch)
     *
     * @param string $project Project ID of Autoscaler resource.
     * @param string $zone Zone name of Autoscaler resource.
     * @param string $autoscaler Name of the Autoscaler resource.
     * @param Google_Autoscaler $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Autoscaler_Operation
     */
    public function patch($project, $zone, $autoscaler, Google_Service_Autoscaler_Autoscaler $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'autoscaler' => $autoscaler, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Autoscaler_Operation");
    }

    /**
     * Update the entire content of the Autoscaler resource. (autoscalers.update)
     *
     * @param string $project Project ID of Autoscaler resource.
     * @param string $zone Zone name of Autoscaler resource.
     * @param string $autoscaler Name of the Autoscaler resource.
     * @param Google_Autoscaler $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Autoscaler_Operation
     */
    public function update($project, $zone, $autoscaler, Google_Service_Autoscaler_Autoscaler $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'autoscaler' => $autoscaler, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Autoscaler_Operation");
    }
}

/**
 * The "zoneOperations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $autoscalerService = new Google_Service_Autoscaler(...);
 *   $zoneOperations = $autoscalerService->zoneOperations;
 *  </code>
 */
class Google_Service_Autoscaler_ZoneOperations_Resource extends Google_Service_Resource
{

    /**
     * Deletes the specified zone-specific operation resource.
     * (zoneOperations.delete)
     *
     * @param string $project
     * @param string $zone
     * @param string $operation
     * @param array $optParams Optional parameters.
     */
    public function delete($project, $zone, $operation, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'operation' => $operation);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Retrieves the specified zone-specific operation resource.
     * (zoneOperations.get)
     *
     * @param string $project
     * @param string $zone
     * @param string $operation
     * @param array $optParams Optional parameters.
     * @return Google_Service_Autoscaler_Operation
     */
    public function get($project, $zone, $operation, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone, 'operation' => $operation);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Autoscaler_Operation");
    }

    /**
     * Retrieves the list of operation resources contained within the specified
     * zone. (zoneOperations.listZoneOperations)
     *
     * @param string $project
     * @param string $zone
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter
     * @opt_param string pageToken
     * @opt_param string maxResults
     * @return Google_Service_Autoscaler_OperationList
     */
    public function listZoneOperations($project, $zone, $optParams = [])
    {
        $params = array('project' => $project, 'zone' => $zone);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Autoscaler_OperationList");
    }
}

/**
 * The "zones" collection of methods.
 * Typical usage is:
 *  <code>
 *   $autoscalerService = new Google_Service_Autoscaler(...);
 *   $zones = $autoscalerService->zones;
 *  </code>
 */
class Google_Service_Autoscaler_Zones_Resource extends Google_Service_Resource
{

    /**
     * (zones.listZones)
     *
     * @param string $project
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter
     * @opt_param string pageToken
     * @opt_param string maxResults
     * @return Google_Service_Autoscaler_ZoneList
     */
    public function listZones($project, $optParams = [])
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Autoscaler_ZoneList");
    }
}


class Google_Service_Autoscaler_Autoscaler extends Google_Model
{
    public $creationTimestamp;
    public $description;
    public $id;
    public $kind;
    public $name;
    public $selfLink;
    public $target;
    protected $internal_gapi_mappings = [];
    protected $autoscalingPolicyType = 'Google_Service_Autoscaler_AutoscalingPolicy';
    protected $autoscalingPolicyDataType = '';

    public function setAutoscalingPolicy(Google_Service_Autoscaler_AutoscalingPolicy $autoscalingPolicy)
    {
        $this->autoscalingPolicy = $autoscalingPolicy;
    }

    public function getAutoscalingPolicy()
    {
        return $this->autoscalingPolicy;
    }

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

    public function getTarget()
    {
        return $this->target;
    }

    public function setTarget($target)
    {
        $this->target = $target;
    }
}

class Google_Service_Autoscaler_AutoscalerListResponse extends Google_Collection
{
    public $kind;
    public $nextPageToken;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Autoscaler_Autoscaler';
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
}

class Google_Service_Autoscaler_AutoscalingPolicy extends Google_Collection
{
    public $coolDownPeriodSec;
    public $maxNumReplicas;
    public $minNumReplicas;
    protected $collection_key = 'customMetricUtilizations';
    protected $internal_gapi_mappings = [];
    protected $cpuUtilizationType = 'Google_Service_Autoscaler_AutoscalingPolicyCpuUtilization';
    protected $cpuUtilizationDataType = '';
    protected $customMetricUtilizationsType = 'Google_Service_Autoscaler_AutoscalingPolicyCustomMetricUtilization';
    protected $customMetricUtilizationsDataType = 'array';
    protected $loadBalancingUtilizationType = 'Google_Service_Autoscaler_AutoscalingPolicyLoadBalancingUtilization';
    protected $loadBalancingUtilizationDataType = '';

    public function getCoolDownPeriodSec()
    {
        return $this->coolDownPeriodSec;
    }

    public function setCoolDownPeriodSec($coolDownPeriodSec)
    {
        $this->coolDownPeriodSec = $coolDownPeriodSec;
    }

    public function setCpuUtilization(Google_Service_Autoscaler_AutoscalingPolicyCpuUtilization $cpuUtilization)
    {
        $this->cpuUtilization = $cpuUtilization;
    }

    public function getCpuUtilization()
    {
        return $this->cpuUtilization;
    }

    public function setCustomMetricUtilizations($customMetricUtilizations)
    {
        $this->customMetricUtilizations = $customMetricUtilizations;
    }

    public function getCustomMetricUtilizations()
    {
        return $this->customMetricUtilizations;
    }

    public function setLoadBalancingUtilization(Google_Service_Autoscaler_AutoscalingPolicyLoadBalancingUtilization $loadBalancingUtilization)
    {
        $this->loadBalancingUtilization = $loadBalancingUtilization;
    }

    public function getLoadBalancingUtilization()
    {
        return $this->loadBalancingUtilization;
    }

    public function getMaxNumReplicas()
    {
        return $this->maxNumReplicas;
    }

    public function setMaxNumReplicas($maxNumReplicas)
    {
        $this->maxNumReplicas = $maxNumReplicas;
    }

    public function getMinNumReplicas()
    {
        return $this->minNumReplicas;
    }

    public function setMinNumReplicas($minNumReplicas)
    {
        $this->minNumReplicas = $minNumReplicas;
    }
}

class Google_Service_Autoscaler_AutoscalingPolicyCpuUtilization extends Google_Model
{
    public $utilizationTarget;
    protected $internal_gapi_mappings = [];

    public function getUtilizationTarget()
    {
        return $this->utilizationTarget;
    }

    public function setUtilizationTarget($utilizationTarget)
    {
        $this->utilizationTarget = $utilizationTarget;
    }
}

class Google_Service_Autoscaler_AutoscalingPolicyCustomMetricUtilization extends Google_Model
{
    public $metric;
    public $utilizationTarget;
    public $utilizationTargetType;
    protected $internal_gapi_mappings = [];

    public function getMetric()
    {
        return $this->metric;
    }

    public function setMetric($metric)
    {
        $this->metric = $metric;
    }

    public function getUtilizationTarget()
    {
        return $this->utilizationTarget;
    }

    public function setUtilizationTarget($utilizationTarget)
    {
        $this->utilizationTarget = $utilizationTarget;
    }

    public function getUtilizationTargetType()
    {
        return $this->utilizationTargetType;
    }

    public function setUtilizationTargetType($utilizationTargetType)
    {
        $this->utilizationTargetType = $utilizationTargetType;
    }
}

class Google_Service_Autoscaler_AutoscalingPolicyLoadBalancingUtilization extends Google_Model
{
    public $utilizationTarget;
    protected $internal_gapi_mappings = [];

    public function getUtilizationTarget()
    {
        return $this->utilizationTarget;
    }

    public function setUtilizationTarget($utilizationTarget)
    {
        $this->utilizationTarget = $utilizationTarget;
    }
}

class Google_Service_Autoscaler_DeprecationStatus extends Google_Model
{
    public $deleted;
    public $deprecated;
    public $obsolete;
    public $replacement;
    public $state;
    protected $internal_gapi_mappings = [];

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    public function getDeprecated()
    {
        return $this->deprecated;
    }

    public function setDeprecated($deprecated)
    {
        $this->deprecated = $deprecated;
    }

    public function getObsolete()
    {
        return $this->obsolete;
    }

    public function setObsolete($obsolete)
    {
        $this->obsolete = $obsolete;
    }

    public function getReplacement()
    {
        return $this->replacement;
    }

    public function setReplacement($replacement)
    {
        $this->replacement = $replacement;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }
}

class Google_Service_Autoscaler_Operation extends Google_Collection
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
    protected $errorType = 'Google_Service_Autoscaler_OperationError';
    protected $errorDataType = '';
    protected $warningsType = 'Google_Service_Autoscaler_OperationWarnings';
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

    public function setError(Google_Service_Autoscaler_OperationError $error)
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

class Google_Service_Autoscaler_OperationError extends Google_Collection
{
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = [];
    protected $errorsType = 'Google_Service_Autoscaler_OperationErrorErrors';
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

class Google_Service_Autoscaler_OperationErrorErrors extends Google_Model
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

class Google_Service_Autoscaler_OperationList extends Google_Collection
{
    public $id;
    public $kind;
    public $nextPageToken;
    public $selfLink;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Autoscaler_Operation';
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

class Google_Service_Autoscaler_OperationWarnings extends Google_Collection
{
    public $code;
    public $message;
    protected $collection_key = 'data';
    protected $internal_gapi_mappings = [];
    protected $dataType = 'Google_Service_Autoscaler_OperationWarningsData';
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

class Google_Service_Autoscaler_OperationWarningsData extends Google_Model
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

class Google_Service_Autoscaler_Zone extends Google_Collection
{
    public $creationTimestamp;
    public $description;
    public $id;
    public $kind;
    public $name;
    public $region;
    public $selfLink;
    public $status;
    protected $collection_key = 'maintenanceWindows';
    protected $internal_gapi_mappings = [];
    protected $deprecatedType = 'Google_Service_Autoscaler_DeprecationStatus';
    protected $deprecatedDataType = '';
    protected $maintenanceWindowsType = 'Google_Service_Autoscaler_ZoneMaintenanceWindows';
    protected $maintenanceWindowsDataType = 'array';

    public function getCreationTimestamp()
    {
        return $this->creationTimestamp;
    }

    public function setCreationTimestamp($creationTimestamp)
    {
        $this->creationTimestamp = $creationTimestamp;
    }

    public function setDeprecated(Google_Service_Autoscaler_DeprecationStatus $deprecated)
    {
        $this->deprecated = $deprecated;
    }

    public function getDeprecated()
    {
        return $this->deprecated;
    }

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

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setMaintenanceWindows($maintenanceWindows)
    {
        $this->maintenanceWindows = $maintenanceWindows;
    }

    public function getMaintenanceWindows()
    {
        return $this->maintenanceWindows;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
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

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}

class Google_Service_Autoscaler_ZoneList extends Google_Collection
{
    public $id;
    public $kind;
    public $nextPageToken;
    public $selfLink;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Autoscaler_Zone';
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

class Google_Service_Autoscaler_ZoneMaintenanceWindows extends Google_Model
{
    public $beginTime;
    public $description;
    public $endTime;
    public $name;
    protected $internal_gapi_mappings = [];

    public function getBeginTime()
    {
        return $this->beginTime;
    }

    public function setBeginTime($beginTime)
    {
        $this->beginTime = $beginTime;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
