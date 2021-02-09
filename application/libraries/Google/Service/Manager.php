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
 * Service definition for Manager (v1beta2).
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
class Google_Service_Manager extends Google_Service
{
    /** View and manage your applications deployed on Google App Engine. */
    const APPENGINE_ADMIN =
        "https://www.googleapis.com/auth/appengine.admin";
    /** View and manage your data across Google Cloud Platform services. */
    const CLOUD_PLATFORM =
        "https://www.googleapis.com/auth/cloud-platform";
    /** View and manage your Google Compute Engine resources. */
    const COMPUTE =
        "https://www.googleapis.com/auth/compute";
    /** Manage your data in Google Cloud Storage. */
    const DEVSTORAGE_READ_WRITE =
        "https://www.googleapis.com/auth/devstorage.read_write";
    /** View and manage your Google Cloud Platform management resources and deployment status information. */
    const NDEV_CLOUDMAN =
        "https://www.googleapis.com/auth/ndev.cloudman";
    /** View your Google Cloud Platform management resources and deployment status information. */
    const NDEV_CLOUDMAN_READONLY =
        "https://www.googleapis.com/auth/ndev.cloudman.readonly";

    public $deployments;
    public $templates;


    /**
     * Constructs the internal representation of the Manager service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = 'manager/v1beta2/projects/';
        $this->version = 'v1beta2';
        $this->serviceName = 'manager';

        $this->deployments = new Google_Service_Manager_Deployments_Resource(
            $this,
            $this->serviceName,
            'deployments',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => '{projectId}/regions/{region}/deployments/{deploymentName}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'region' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'deploymentName' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => '{projectId}/regions/{region}/deployments/{deploymentName}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'region' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'deploymentName' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => '{projectId}/regions/{region}/deployments',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'region' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => '{projectId}/regions/{region}/deployments',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'region' => array(
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
        $this->templates = new Google_Service_Manager_Templates_Resource(
            $this,
            $this->serviceName,
            'templates',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => '{projectId}/templates/{templateName}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'templateName' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => '{projectId}/templates/{templateName}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'templateName' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => '{projectId}/templates',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => '{projectId}/templates',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectId' => array(
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
 *   $managerService = new Google_Service_Manager(...);
 *   $deployments = $managerService->deployments;
 *  </code>
 */
class Google_Service_Manager_Deployments_Resource extends Google_Service_Resource
{

    /**
     * (deployments.delete)
     *
     * @param string $projectId
     * @param string $region
     * @param string $deploymentName
     * @param array $optParams Optional parameters.
     */
    public function delete($projectId, $region, $deploymentName, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'region' => $region, 'deploymentName' => $deploymentName);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * (deployments.get)
     *
     * @param string $projectId
     * @param string $region
     * @param string $deploymentName
     * @param array $optParams Optional parameters.
     * @return Google_Service_Manager_Deployment
     */
    public function get($projectId, $region, $deploymentName, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'region' => $region, 'deploymentName' => $deploymentName);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Manager_Deployment");
    }

    /**
     * (deployments.insert)
     *
     * @param string $projectId
     * @param string $region
     * @param Google_Deployment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Manager_Deployment
     */
    public function insert($projectId, $region, Google_Service_Manager_Deployment $postBody, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'region' => $region, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Manager_Deployment");
    }

    /**
     * (deployments.listDeployments)
     *
     * @param string $projectId
     * @param string $region
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Specifies a nextPageToken returned by a previous
     * list request. This token can be used to request the next page of results from
     * a previous list request.
     * @opt_param int maxResults Maximum count of results to be returned. Acceptable
     * values are 0 to 100, inclusive. (Default: 50)
     * @return Google_Service_Manager_DeploymentsListResponse
     */
    public function listDeployments($projectId, $region, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'region' => $region);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Manager_DeploymentsListResponse");
    }
}

/**
 * The "templates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $managerService = new Google_Service_Manager(...);
 *   $templates = $managerService->templates;
 *  </code>
 */
class Google_Service_Manager_Templates_Resource extends Google_Service_Resource
{

    /**
     * (templates.delete)
     *
     * @param string $projectId
     * @param string $templateName
     * @param array $optParams Optional parameters.
     */
    public function delete($projectId, $templateName, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'templateName' => $templateName);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * (templates.get)
     *
     * @param string $projectId
     * @param string $templateName
     * @param array $optParams Optional parameters.
     * @return Google_Service_Manager_Template
     */
    public function get($projectId, $templateName, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'templateName' => $templateName);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Manager_Template");
    }

    /**
     * (templates.insert)
     *
     * @param string $projectId
     * @param Google_Template $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Manager_Template
     */
    public function insert($projectId, Google_Service_Manager_Template $postBody, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Manager_Template");
    }

    /**
     * (templates.listTemplates)
     *
     * @param string $projectId
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Specifies a nextPageToken returned by a previous
     * list request. This token can be used to request the next page of results from
     * a previous list request.
     * @opt_param int maxResults Maximum count of results to be returned. Acceptable
     * values are 0 to 100, inclusive. (Default: 50)
     * @return Google_Service_Manager_TemplatesListResponse
     */
    public function listTemplates($projectId, $optParams = [])
    {
        $params = array('projectId' => $projectId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Manager_TemplatesListResponse");
    }
}


class Google_Service_Manager_AccessConfig extends Google_Model
{
    public $name;
    public $natIp;
    public $type;
    protected $internal_gapi_mappings = [];

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getNatIp()
    {
        return $this->natIp;
    }

    public function setNatIp($natIp)
    {
        $this->natIp = $natIp;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}

class Google_Service_Manager_Action extends Google_Collection
{
    public $commands;
    public $timeoutMs;
    protected $collection_key = 'commands';
    protected $internal_gapi_mappings = [];

    public function getCommands()
    {
        return $this->commands;
    }

    public function setCommands($commands)
    {
        $this->commands = $commands;
    }

    public function getTimeoutMs()
    {
        return $this->timeoutMs;
    }

    public function setTimeoutMs($timeoutMs)
    {
        $this->timeoutMs = $timeoutMs;
    }
}

class Google_Service_Manager_AllowedRule extends Google_Collection
{
    public $iPProtocol;
    public $ports;
    protected $collection_key = 'ports';
    protected $internal_gapi_mappings = array(
        "iPProtocol" => "IPProtocol",
    );

    public function getIPProtocol()
    {
        return $this->iPProtocol;
    }

    public function setIPProtocol($iPProtocol)
    {
        $this->iPProtocol = $iPProtocol;
    }

    public function getPorts()
    {
        return $this->ports;
    }

    public function setPorts($ports)
    {
        $this->ports = $ports;
    }
}

class Google_Service_Manager_AutoscalingModule extends Google_Model
{
    public $coolDownPeriodSec;
    public $description;
    public $maxNumReplicas;
    public $minNumReplicas;
    public $signalType;
    public $targetModule;
    public $targetUtilization;
    protected $internal_gapi_mappings = [];

    public function getCoolDownPeriodSec()
    {
        return $this->coolDownPeriodSec;
    }

    public function setCoolDownPeriodSec($coolDownPeriodSec)
    {
        $this->coolDownPeriodSec = $coolDownPeriodSec;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
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

    public function getSignalType()
    {
        return $this->signalType;
    }

    public function setSignalType($signalType)
    {
        $this->signalType = $signalType;
    }

    public function getTargetModule()
    {
        return $this->targetModule;
    }

    public function setTargetModule($targetModule)
    {
        $this->targetModule = $targetModule;
    }

    public function getTargetUtilization()
    {
        return $this->targetUtilization;
    }

    public function setTargetUtilization($targetUtilization)
    {
        $this->targetUtilization = $targetUtilization;
    }
}

class Google_Service_Manager_AutoscalingModuleStatus extends Google_Model
{
    public $autoscalingConfigUrl;
    protected $internal_gapi_mappings = [];

    public function getAutoscalingConfigUrl()
    {
        return $this->autoscalingConfigUrl;
    }

    public function setAutoscalingConfigUrl($autoscalingConfigUrl)
    {
        $this->autoscalingConfigUrl = $autoscalingConfigUrl;
    }
}

class Google_Service_Manager_DeployState extends Google_Model
{
    public $details;
    public $status;
    protected $internal_gapi_mappings = [];

    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails($details)
    {
        $this->details = $details;
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

class Google_Service_Manager_Deployment extends Google_Collection
{
    public $creationDate;
    public $description;
    public $name;
    public $templateName;
    protected $collection_key = 'overrides';
    protected $internal_gapi_mappings = [];
    protected $modulesType = 'Google_Service_Manager_ModuleStatus';
    protected $modulesDataType = 'map';
    protected $overridesType = 'Google_Service_Manager_ParamOverride';
    protected $overridesDataType = 'array';
    protected $stateType = 'Google_Service_Manager_DeployState';
    protected $stateDataType = '';

    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setModules($modules)
    {
        $this->modules = $modules;
    }

    public function getModules()
    {
        return $this->modules;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setOverrides($overrides)
    {
        $this->overrides = $overrides;
    }

    public function getOverrides()
    {
        return $this->overrides;
    }

    public function setState(Google_Service_Manager_DeployState $state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getTemplateName()
    {
        return $this->templateName;
    }

    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
    }
}

class Google_Service_Manager_DeploymentModules extends Google_Model
{
}

class Google_Service_Manager_DeploymentsListResponse extends Google_Collection
{
    public $nextPageToken;
    protected $collection_key = 'resources';
    protected $internal_gapi_mappings = [];
    protected $resourcesType = 'Google_Service_Manager_Deployment';
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

class Google_Service_Manager_DiskAttachment extends Google_Model
{
    public $deviceName;
    public $index;
    protected $internal_gapi_mappings = [];

    public function getDeviceName()
    {
        return $this->deviceName;
    }

    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
    }

    public function getIndex()
    {
        return $this->index;
    }

    public function setIndex($index)
    {
        $this->index = $index;
    }
}

class Google_Service_Manager_EnvVariable extends Google_Model
{
    public $hidden;
    public $value;
    protected $internal_gapi_mappings = [];

    public function getHidden()
    {
        return $this->hidden;
    }

    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
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

class Google_Service_Manager_ExistingDisk extends Google_Model
{
    public $source;
    protected $internal_gapi_mappings = [];
    protected $attachmentType = 'Google_Service_Manager_DiskAttachment';
    protected $attachmentDataType = '';

    public function setAttachment(Google_Service_Manager_DiskAttachment $attachment)
    {
        $this->attachment = $attachment;
    }

    public function getAttachment()
    {
        return $this->attachment;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
    {
        $this->source = $source;
    }
}

class Google_Service_Manager_FirewallModule extends Google_Collection
{
    public $description;
    public $network;
    public $sourceRanges;
    public $sourceTags;
    public $targetTags;
    protected $collection_key = 'targetTags';
    protected $internal_gapi_mappings = [];
    protected $allowedType = 'Google_Service_Manager_AllowedRule';
    protected $allowedDataType = 'array';

    public function setAllowed($allowed)
    {
        $this->allowed = $allowed;
    }

    public function getAllowed()
    {
        return $this->allowed;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getNetwork()
    {
        return $this->network;
    }

    public function setNetwork($network)
    {
        $this->network = $network;
    }

    public function getSourceRanges()
    {
        return $this->sourceRanges;
    }

    public function setSourceRanges($sourceRanges)
    {
        $this->sourceRanges = $sourceRanges;
    }

    public function getSourceTags()
    {
        return $this->sourceTags;
    }

    public function setSourceTags($sourceTags)
    {
        $this->sourceTags = $sourceTags;
    }

    public function getTargetTags()
    {
        return $this->targetTags;
    }

    public function setTargetTags($targetTags)
    {
        $this->targetTags = $targetTags;
    }
}

class Google_Service_Manager_FirewallModuleStatus extends Google_Model
{
    public $firewallUrl;
    protected $internal_gapi_mappings = [];

    public function getFirewallUrl()
    {
        return $this->firewallUrl;
    }

    public function setFirewallUrl($firewallUrl)
    {
        $this->firewallUrl = $firewallUrl;
    }
}

class Google_Service_Manager_HealthCheckModule extends Google_Model
{
    public $checkIntervalSec;
    public $description;
    public $healthyThreshold;
    public $host;
    public $path;
    public $port;
    public $timeoutSec;
    public $unhealthyThreshold;
    protected $internal_gapi_mappings = [];

    public function getCheckIntervalSec()
    {
        return $this->checkIntervalSec;
    }

    public function setCheckIntervalSec($checkIntervalSec)
    {
        $this->checkIntervalSec = $checkIntervalSec;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getHealthyThreshold()
    {
        return $this->healthyThreshold;
    }

    public function setHealthyThreshold($healthyThreshold)
    {
        $this->healthyThreshold = $healthyThreshold;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function setHost($host)
    {
        $this->host = $host;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function setPort($port)
    {
        $this->port = $port;
    }

    public function getTimeoutSec()
    {
        return $this->timeoutSec;
    }

    public function setTimeoutSec($timeoutSec)
    {
        $this->timeoutSec = $timeoutSec;
    }

    public function getUnhealthyThreshold()
    {
        return $this->unhealthyThreshold;
    }

    public function setUnhealthyThreshold($unhealthyThreshold)
    {
        $this->unhealthyThreshold = $unhealthyThreshold;
    }
}

class Google_Service_Manager_HealthCheckModuleStatus extends Google_Model
{
    public $healthCheckUrl;
    protected $internal_gapi_mappings = [];

    public function getHealthCheckUrl()
    {
        return $this->healthCheckUrl;
    }

    public function setHealthCheckUrl($healthCheckUrl)
    {
        $this->healthCheckUrl = $healthCheckUrl;
    }
}

class Google_Service_Manager_LbModule extends Google_Collection
{
    public $description;
    public $healthChecks;
    public $ipAddress;
    public $ipProtocol;
    public $portRange;
    public $sessionAffinity;
    public $targetModules;
    protected $collection_key = 'targetModules';
    protected $internal_gapi_mappings = [];

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getHealthChecks()
    {
        return $this->healthChecks;
    }

    public function setHealthChecks($healthChecks)
    {
        $this->healthChecks = $healthChecks;
    }

    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    public function getIpProtocol()
    {
        return $this->ipProtocol;
    }

    public function setIpProtocol($ipProtocol)
    {
        $this->ipProtocol = $ipProtocol;
    }

    public function getPortRange()
    {
        return $this->portRange;
    }

    public function setPortRange($portRange)
    {
        $this->portRange = $portRange;
    }

    public function getSessionAffinity()
    {
        return $this->sessionAffinity;
    }

    public function setSessionAffinity($sessionAffinity)
    {
        $this->sessionAffinity = $sessionAffinity;
    }

    public function getTargetModules()
    {
        return $this->targetModules;
    }

    public function setTargetModules($targetModules)
    {
        $this->targetModules = $targetModules;
    }
}

class Google_Service_Manager_LbModuleStatus extends Google_Model
{
    public $forwardingRuleUrl;
    public $targetPoolUrl;
    protected $internal_gapi_mappings = [];

    public function getForwardingRuleUrl()
    {
        return $this->forwardingRuleUrl;
    }

    public function setForwardingRuleUrl($forwardingRuleUrl)
    {
        $this->forwardingRuleUrl = $forwardingRuleUrl;
    }

    public function getTargetPoolUrl()
    {
        return $this->targetPoolUrl;
    }

    public function setTargetPoolUrl($targetPoolUrl)
    {
        $this->targetPoolUrl = $targetPoolUrl;
    }
}

class Google_Service_Manager_Metadata extends Google_Collection
{
    public $fingerPrint;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Manager_MetadataItem';
    protected $itemsDataType = 'array';

    public function getFingerPrint()
    {
        return $this->fingerPrint;
    }

    public function setFingerPrint($fingerPrint)
    {
        $this->fingerPrint = $fingerPrint;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }
}

class Google_Service_Manager_MetadataItem extends Google_Model
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

class Google_Service_Manager_Module extends Google_Model
{
    public $type;
    protected $internal_gapi_mappings = [];
    protected $autoscalingModuleType = 'Google_Service_Manager_AutoscalingModule';
    protected $autoscalingModuleDataType = '';
    protected $firewallModuleType = 'Google_Service_Manager_FirewallModule';
    protected $firewallModuleDataType = '';
    protected $healthCheckModuleType = 'Google_Service_Manager_HealthCheckModule';
    protected $healthCheckModuleDataType = '';
    protected $lbModuleType = 'Google_Service_Manager_LbModule';
    protected $lbModuleDataType = '';
    protected $networkModuleType = 'Google_Service_Manager_NetworkModule';
    protected $networkModuleDataType = '';
    protected $replicaPoolModuleType = 'Google_Service_Manager_ReplicaPoolModule';
    protected $replicaPoolModuleDataType = '';

    public function setAutoscalingModule(Google_Service_Manager_AutoscalingModule $autoscalingModule)
    {
        $this->autoscalingModule = $autoscalingModule;
    }

    public function getAutoscalingModule()
    {
        return $this->autoscalingModule;
    }

    public function setFirewallModule(Google_Service_Manager_FirewallModule $firewallModule)
    {
        $this->firewallModule = $firewallModule;
    }

    public function getFirewallModule()
    {
        return $this->firewallModule;
    }

    public function setHealthCheckModule(Google_Service_Manager_HealthCheckModule $healthCheckModule)
    {
        $this->healthCheckModule = $healthCheckModule;
    }

    public function getHealthCheckModule()
    {
        return $this->healthCheckModule;
    }

    public function setLbModule(Google_Service_Manager_LbModule $lbModule)
    {
        $this->lbModule = $lbModule;
    }

    public function getLbModule()
    {
        return $this->lbModule;
    }

    public function setNetworkModule(Google_Service_Manager_NetworkModule $networkModule)
    {
        $this->networkModule = $networkModule;
    }

    public function getNetworkModule()
    {
        return $this->networkModule;
    }

    public function setReplicaPoolModule(Google_Service_Manager_ReplicaPoolModule $replicaPoolModule)
    {
        $this->replicaPoolModule = $replicaPoolModule;
    }

    public function getReplicaPoolModule()
    {
        return $this->replicaPoolModule;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}

class Google_Service_Manager_ModuleStatus extends Google_Model
{
    public $type;
    protected $internal_gapi_mappings = [];
    protected $autoscalingModuleStatusType = 'Google_Service_Manager_AutoscalingModuleStatus';
    protected $autoscalingModuleStatusDataType = '';
    protected $firewallModuleStatusType = 'Google_Service_Manager_FirewallModuleStatus';
    protected $firewallModuleStatusDataType = '';
    protected $healthCheckModuleStatusType = 'Google_Service_Manager_HealthCheckModuleStatus';
    protected $healthCheckModuleStatusDataType = '';
    protected $lbModuleStatusType = 'Google_Service_Manager_LbModuleStatus';
    protected $lbModuleStatusDataType = '';
    protected $networkModuleStatusType = 'Google_Service_Manager_NetworkModuleStatus';
    protected $networkModuleStatusDataType = '';
    protected $replicaPoolModuleStatusType = 'Google_Service_Manager_ReplicaPoolModuleStatus';
    protected $replicaPoolModuleStatusDataType = '';
    protected $stateType = 'Google_Service_Manager_DeployState';
    protected $stateDataType = '';

    public function setAutoscalingModuleStatus(Google_Service_Manager_AutoscalingModuleStatus $autoscalingModuleStatus)
    {
        $this->autoscalingModuleStatus = $autoscalingModuleStatus;
    }

    public function getAutoscalingModuleStatus()
    {
        return $this->autoscalingModuleStatus;
    }

    public function setFirewallModuleStatus(Google_Service_Manager_FirewallModuleStatus $firewallModuleStatus)
    {
        $this->firewallModuleStatus = $firewallModuleStatus;
    }

    public function getFirewallModuleStatus()
    {
        return $this->firewallModuleStatus;
    }

    public function setHealthCheckModuleStatus(Google_Service_Manager_HealthCheckModuleStatus $healthCheckModuleStatus)
    {
        $this->healthCheckModuleStatus = $healthCheckModuleStatus;
    }

    public function getHealthCheckModuleStatus()
    {
        return $this->healthCheckModuleStatus;
    }

    public function setLbModuleStatus(Google_Service_Manager_LbModuleStatus $lbModuleStatus)
    {
        $this->lbModuleStatus = $lbModuleStatus;
    }

    public function getLbModuleStatus()
    {
        return $this->lbModuleStatus;
    }

    public function setNetworkModuleStatus(Google_Service_Manager_NetworkModuleStatus $networkModuleStatus)
    {
        $this->networkModuleStatus = $networkModuleStatus;
    }

    public function getNetworkModuleStatus()
    {
        return $this->networkModuleStatus;
    }

    public function setReplicaPoolModuleStatus(Google_Service_Manager_ReplicaPoolModuleStatus $replicaPoolModuleStatus)
    {
        $this->replicaPoolModuleStatus = $replicaPoolModuleStatus;
    }

    public function getReplicaPoolModuleStatus()
    {
        return $this->replicaPoolModuleStatus;
    }

    public function setState(Google_Service_Manager_DeployState $state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}

class Google_Service_Manager_NetworkInterface extends Google_Collection
{
    public $name;
    public $network;
    public $networkIp;
    protected $collection_key = 'accessConfigs';
    protected $internal_gapi_mappings = [];
    protected $accessConfigsType = 'Google_Service_Manager_AccessConfig';
    protected $accessConfigsDataType = 'array';

    public function setAccessConfigs($accessConfigs)
    {
        $this->accessConfigs = $accessConfigs;
    }

    public function getAccessConfigs()
    {
        return $this->accessConfigs;
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

    public function getNetworkIp()
    {
        return $this->networkIp;
    }

    public function setNetworkIp($networkIp)
    {
        $this->networkIp = $networkIp;
    }
}

class Google_Service_Manager_NetworkModule extends Google_Model
{
    public $iPv4Range;
    public $description;
    public $gatewayIPv4;
    protected $internal_gapi_mappings = array(
        "iPv4Range" => "IPv4Range",
    );

    public function getIPv4Range()
    {
        return $this->iPv4Range;
    }

    public function setIPv4Range($iPv4Range)
    {
        $this->iPv4Range = $iPv4Range;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getGatewayIPv4()
    {
        return $this->gatewayIPv4;
    }

    public function setGatewayIPv4($gatewayIPv4)
    {
        $this->gatewayIPv4 = $gatewayIPv4;
    }
}

class Google_Service_Manager_NetworkModuleStatus extends Google_Model
{
    public $networkUrl;
    protected $internal_gapi_mappings = [];

    public function getNetworkUrl()
    {
        return $this->networkUrl;
    }

    public function setNetworkUrl($networkUrl)
    {
        $this->networkUrl = $networkUrl;
    }
}

class Google_Service_Manager_NewDisk extends Google_Model
{
    public $autoDelete;
    public $boot;
    protected $internal_gapi_mappings = [];
    protected $attachmentType = 'Google_Service_Manager_DiskAttachment';
    protected $attachmentDataType = '';
    protected $initializeParamsType = 'Google_Service_Manager_NewDiskInitializeParams';
    protected $initializeParamsDataType = '';


    public function setAttachment(Google_Service_Manager_DiskAttachment $attachment)
    {
        $this->attachment = $attachment;
    }

    public function getAttachment()
    {
        return $this->attachment;
    }

    public function getAutoDelete()
    {
        return $this->autoDelete;
    }

    public function setAutoDelete($autoDelete)
    {
        $this->autoDelete = $autoDelete;
    }

    public function getBoot()
    {
        return $this->boot;
    }

    public function setBoot($boot)
    {
        $this->boot = $boot;
    }

    public function setInitializeParams(Google_Service_Manager_NewDiskInitializeParams $initializeParams)
    {
        $this->initializeParams = $initializeParams;
    }

    public function getInitializeParams()
    {
        return $this->initializeParams;
    }
}

class Google_Service_Manager_NewDiskInitializeParams extends Google_Model
{
    public $diskSizeGb;
    public $diskType;
    public $sourceImage;
    protected $internal_gapi_mappings = [];

    public function getDiskSizeGb()
    {
        return $this->diskSizeGb;
    }

    public function setDiskSizeGb($diskSizeGb)
    {
        $this->diskSizeGb = $diskSizeGb;
    }

    public function getDiskType()
    {
        return $this->diskType;
    }

    public function setDiskType($diskType)
    {
        $this->diskType = $diskType;
    }

    public function getSourceImage()
    {
        return $this->sourceImage;
    }

    public function setSourceImage($sourceImage)
    {
        $this->sourceImage = $sourceImage;
    }
}

class Google_Service_Manager_ParamOverride extends Google_Model
{
    public $path;
    public $value;
    protected $internal_gapi_mappings = [];

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;
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

class Google_Service_Manager_ReplicaPoolModule extends Google_Collection
{
    public $healthChecks;
    public $numReplicas;
    public $resourceView;
    protected $collection_key = 'healthChecks';
    protected $internal_gapi_mappings = [];
    protected $envVariablesType = 'Google_Service_Manager_EnvVariable';
    protected $envVariablesDataType = 'map';
    protected $replicaPoolParamsType = 'Google_Service_Manager_ReplicaPoolParams';
    protected $replicaPoolParamsDataType = '';

    public function setEnvVariables($envVariables)
    {
        $this->envVariables = $envVariables;
    }

    public function getEnvVariables()
    {
        return $this->envVariables;
    }

    public function getHealthChecks()
    {
        return $this->healthChecks;
    }

    public function setHealthChecks($healthChecks)
    {
        $this->healthChecks = $healthChecks;
    }

    public function getNumReplicas()
    {
        return $this->numReplicas;
    }

    public function setNumReplicas($numReplicas)
    {
        $this->numReplicas = $numReplicas;
    }

    public function setReplicaPoolParams(Google_Service_Manager_ReplicaPoolParams $replicaPoolParams)
    {
        $this->replicaPoolParams = $replicaPoolParams;
    }

    public function getReplicaPoolParams()
    {
        return $this->replicaPoolParams;
    }

    public function getResourceView()
    {
        return $this->resourceView;
    }

    public function setResourceView($resourceView)
    {
        $this->resourceView = $resourceView;
    }
}

class Google_Service_Manager_ReplicaPoolModuleEnvVariables extends Google_Model
{
}

class Google_Service_Manager_ReplicaPoolModuleStatus extends Google_Model
{
    public $replicaPoolUrl;
    public $resourceViewUrl;
    protected $internal_gapi_mappings = [];

    public function getReplicaPoolUrl()
    {
        return $this->replicaPoolUrl;
    }

    public function setReplicaPoolUrl($replicaPoolUrl)
    {
        $this->replicaPoolUrl = $replicaPoolUrl;
    }

    public function getResourceViewUrl()
    {
        return $this->resourceViewUrl;
    }

    public function setResourceViewUrl($resourceViewUrl)
    {
        $this->resourceViewUrl = $resourceViewUrl;
    }
}

class Google_Service_Manager_ReplicaPoolParams extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $v1beta1Type = 'Google_Service_Manager_ReplicaPoolParamsV1Beta1';
    protected $v1beta1DataType = '';


    public function setV1beta1(Google_Service_Manager_ReplicaPoolParamsV1Beta1 $v1beta1)
    {
        $this->v1beta1 = $v1beta1;
    }

    public function getV1beta1()
    {
        return $this->v1beta1;
    }
}

class Google_Service_Manager_ReplicaPoolParamsV1Beta1 extends Google_Collection
{
    public $autoRestart;
    public $baseInstanceName;
    public $canIpForward;
    public $description;
    public $initAction;
    public $machineType;
    public $onHostMaintenance;
    public $zone;
    protected $collection_key = 'serviceAccounts';
    protected $internal_gapi_mappings = [];
    protected $disksToAttachType = 'Google_Service_Manager_ExistingDisk';
    protected $disksToAttachDataType = 'array';
    protected $disksToCreateType = 'Google_Service_Manager_NewDisk';
    protected $disksToCreateDataType = 'array';
    protected $metadataType = 'Google_Service_Manager_Metadata';
    protected $metadataDataType = '';
    protected $networkInterfacesType = 'Google_Service_Manager_NetworkInterface';
    protected $networkInterfacesDataType = 'array';
    protected $serviceAccountsType = 'Google_Service_Manager_ServiceAccount';
    protected $serviceAccountsDataType = 'array';
    protected $tagsType = 'Google_Service_Manager_Tag';
    protected $tagsDataType = '';

    public function getAutoRestart()
    {
        return $this->autoRestart;
    }

    public function setAutoRestart($autoRestart)
    {
        $this->autoRestart = $autoRestart;
    }

    public function getBaseInstanceName()
    {
        return $this->baseInstanceName;
    }

    public function setBaseInstanceName($baseInstanceName)
    {
        $this->baseInstanceName = $baseInstanceName;
    }

    public function getCanIpForward()
    {
        return $this->canIpForward;
    }

    public function setCanIpForward($canIpForward)
    {
        $this->canIpForward = $canIpForward;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setDisksToAttach($disksToAttach)
    {
        $this->disksToAttach = $disksToAttach;
    }

    public function getDisksToAttach()
    {
        return $this->disksToAttach;
    }

    public function setDisksToCreate($disksToCreate)
    {
        $this->disksToCreate = $disksToCreate;
    }

    public function getDisksToCreate()
    {
        return $this->disksToCreate;
    }

    public function getInitAction()
    {
        return $this->initAction;
    }

    public function setInitAction($initAction)
    {
        $this->initAction = $initAction;
    }

    public function getMachineType()
    {
        return $this->machineType;
    }

    public function setMachineType($machineType)
    {
        $this->machineType = $machineType;
    }

    public function setMetadata(Google_Service_Manager_Metadata $metadata)
    {
        $this->metadata = $metadata;
    }

    public function getMetadata()
    {
        return $this->metadata;
    }

    public function setNetworkInterfaces($networkInterfaces)
    {
        $this->networkInterfaces = $networkInterfaces;
    }

    public function getNetworkInterfaces()
    {
        return $this->networkInterfaces;
    }

    public function getOnHostMaintenance()
    {
        return $this->onHostMaintenance;
    }

    public function setOnHostMaintenance($onHostMaintenance)
    {
        $this->onHostMaintenance = $onHostMaintenance;
    }

    public function setServiceAccounts($serviceAccounts)
    {
        $this->serviceAccounts = $serviceAccounts;
    }

    public function getServiceAccounts()
    {
        return $this->serviceAccounts;
    }

    public function setTags(Google_Service_Manager_Tag $tags)
    {
        $this->tags = $tags;
    }

    public function getTags()
    {
        return $this->tags;
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

class Google_Service_Manager_ServiceAccount extends Google_Collection
{
    public $email;
    public $scopes;
    protected $collection_key = 'scopes';
    protected $internal_gapi_mappings = [];

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getScopes()
    {
        return $this->scopes;
    }

    public function setScopes($scopes)
    {
        $this->scopes = $scopes;
    }
}

class Google_Service_Manager_Tag extends Google_Collection
{
    public $fingerPrint;
    public $items;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];

    public function getFingerPrint()
    {
        return $this->fingerPrint;
    }

    public function setFingerPrint($fingerPrint)
    {
        $this->fingerPrint = $fingerPrint;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }
}

class Google_Service_Manager_Template extends Google_Model
{
    public $description;
    public $name;
    protected $internal_gapi_mappings = [];
    protected $actionsType = 'Google_Service_Manager_Action';
    protected $actionsDataType = 'map';
    protected $modulesType = 'Google_Service_Manager_Module';
    protected $modulesDataType = 'map';

    public function setActions($actions)
    {
        $this->actions = $actions;
    }

    public function getActions()
    {
        return $this->actions;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setModules($modules)
    {
        $this->modules = $modules;
    }

    public function getModules()
    {
        return $this->modules;
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

class Google_Service_Manager_TemplateActions extends Google_Model
{
}

class Google_Service_Manager_TemplateModules extends Google_Model
{
}

class Google_Service_Manager_TemplatesListResponse extends Google_Collection
{
    public $nextPageToken;
    protected $collection_key = 'resources';
    protected $internal_gapi_mappings = [];
    protected $resourcesType = 'Google_Service_Manager_Template';
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
