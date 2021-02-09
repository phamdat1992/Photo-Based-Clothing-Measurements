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
 * Service definition for SQLAdmin (v1beta4).
 *
 * <p>
 * API for Cloud SQL database instance management.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/cloud-sql/docs/admin-api/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_SQLAdmin extends Google_Service
{
    /** View and manage your data across Google Cloud Platform services. */
    const CLOUD_PLATFORM =
        "https://www.googleapis.com/auth/cloud-platform";
    /** Manage your Google SQL Service instances. */
    const SQLSERVICE_ADMIN =
        "https://www.googleapis.com/auth/sqlservice.admin";

    public $backupRuns;
    public $databases;
    public $flags;
    public $instances;
    public $operations;
    public $sslCerts;
    public $tiers;
    public $users;


    /**
     * Constructs the internal representation of the SQLAdmin service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = 'sql/v1beta4/';
        $this->version = 'v1beta4';
        $this->serviceName = 'sqladmin';

        $this->backupRuns = new Google_Service_SQLAdmin_BackupRuns_Resource(
            $this,
            $this->serviceName,
            'backupRuns',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'projects/{project}/instances/{instance}/backupRuns/{id}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'id' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'projects/{project}/instances/{instance}/backupRuns',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->databases = new Google_Service_SQLAdmin_Databases_Resource(
            $this,
            $this->serviceName,
            'databases',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'projects/{project}/instances/{instance}/databases/{database}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'database' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'projects/{project}/instances/{instance}/databases/{database}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'database' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'projects/{project}/instances/{instance}/databases',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'projects/{project}/instances/{instance}/databases',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'patch' => array(
                        'path' => 'projects/{project}/instances/{instance}/databases/{database}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'database' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'projects/{project}/instances/{instance}/databases/{database}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'database' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->flags = new Google_Service_SQLAdmin_Flags_Resource(
            $this,
            $this->serviceName,
            'flags',
            array(
                'methods' => array(
                    'list' => array(
                        'path' => 'flags',
                        'httpMethod' => 'GET',
                        'parameters' => [],
                    ),
                )
            )
        );
        $this->instances = new Google_Service_SQLAdmin_Instances_Resource(
            $this,
            $this->serviceName,
            'instances',
            array(
                'methods' => array(
                    'clone' => array(
                        'path' => 'projects/{project}/instances/{instance}/clone',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'delete' => array(
                        'path' => 'projects/{project}/instances/{instance}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'export' => array(
                        'path' => 'projects/{project}/instances/{instance}/export',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'projects/{project}/instances/{instance}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'import' => array(
                        'path' => 'projects/{project}/instances/{instance}/import',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'projects/{project}/instances',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'projects/{project}/instances',
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
                    ), 'patch' => array(
                        'path' => 'projects/{project}/instances/{instance}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'promoteReplica' => array(
                        'path' => 'projects/{project}/instances/{instance}/promoteReplica',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'resetSslConfig' => array(
                        'path' => 'projects/{project}/instances/{instance}/resetSslConfig',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'restart' => array(
                        'path' => 'projects/{project}/instances/{instance}/restart',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'restoreBackup' => array(
                        'path' => 'projects/{project}/instances/{instance}/restoreBackup',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'startReplica' => array(
                        'path' => 'projects/{project}/instances/{instance}/startReplica',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'stopReplica' => array(
                        'path' => 'projects/{project}/instances/{instance}/stopReplica',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'projects/{project}/instances/{instance}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->operations = new Google_Service_SQLAdmin_Operations_Resource(
            $this,
            $this->serviceName,
            'operations',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'projects/{project}/operations/{operation}',
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
                        'path' => 'projects/{project}/operations',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->sslCerts = new Google_Service_SQLAdmin_SslCerts_Resource(
            $this,
            $this->serviceName,
            'sslCerts',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'projects/{project}/instances/{instance}/sslCerts/{sha1Fingerprint}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'sha1Fingerprint' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'projects/{project}/instances/{instance}/sslCerts/{sha1Fingerprint}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'sha1Fingerprint' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'projects/{project}/instances/{instance}/sslCerts',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'projects/{project}/instances/{instance}/sslCerts',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->tiers = new Google_Service_SQLAdmin_Tiers_Resource(
            $this,
            $this->serviceName,
            'tiers',
            array(
                'methods' => array(
                    'list' => array(
                        'path' => 'projects/{project}/tiers',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->users = new Google_Service_SQLAdmin_Users_Resource(
            $this,
            $this->serviceName,
            'users',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'projects/{project}/instances/{instance}/users',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'host' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'name' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'projects/{project}/instances/{instance}/users',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'projects/{project}/instances/{instance}/users',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'projects/{project}/instances/{instance}/users',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'project' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'instance' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'host' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'name' => array(
                                'location' => 'query',
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
 * The "backupRuns" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google_Service_SQLAdmin(...);
 *   $backupRuns = $sqladminService->backupRuns;
 *  </code>
 */
class Google_Service_SQLAdmin_BackupRuns_Resource extends Google_Service_Resource
{

    /**
     * Retrieves a resource containing information about a backup run.
     * (backupRuns.get)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param string $id The ID of this Backup Run.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_BackupRun
     */
    public function get($project, $instance, $id, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_SQLAdmin_BackupRun");
    }

    /**
     * Lists all backup runs associated with a given instance and configuration in
     * the reverse chronological order of the enqueued time.
     * (backupRuns.listBackupRuns)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Maximum number of backup runs per response.
     * @opt_param string pageToken A previously-returned page token representing
     * part of the larger set of results to view.
     * @return Google_Service_SQLAdmin_BackupRunsListResponse
     */
    public function listBackupRuns($project, $instance, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_SQLAdmin_BackupRunsListResponse");
    }
}

/**
 * The "databases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google_Service_SQLAdmin(...);
 *   $databases = $sqladminService->databases;
 *  </code>
 */
class Google_Service_SQLAdmin_Databases_Resource extends Google_Service_Resource
{

    /**
     * Deletes a resource containing information about a database inside a Cloud SQL
     * instance. (databases.delete)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Database instance ID. This does not include the
     * project ID.
     * @param string $database Name of the database to be deleted in the instance.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function delete($project, $instance, $database, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'database' => $database);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Retrieves a resource containing information about a database inside a Cloud
     * SQL instance. (databases.get)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Database instance ID. This does not include the
     * project ID.
     * @param string $database Name of the database in the instance.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Database
     */
    public function get($project, $instance, $database, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'database' => $database);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_SQLAdmin_Database");
    }

    /**
     * Inserts a resource containing information about a database inside a Cloud SQL
     * instance. (databases.insert)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Database instance ID. This does not include the
     * project ID.
     * @param Google_Database $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function insert($project, $instance, Google_Service_SQLAdmin_Database $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Lists databases in the specified Cloud SQL instance.
     * (databases.listDatabases)
     *
     * @param string $project Project ID of the project for which to list Cloud SQL
     * instances.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_DatabasesListResponse
     */
    public function listDatabases($project, $instance, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_SQLAdmin_DatabasesListResponse");
    }

    /**
     * Updates a resource containing information about a database inside a Cloud SQL
     * instance. This method supports patch semantics. (databases.patch)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Database instance ID. This does not include the
     * project ID.
     * @param string $database Name of the database to be updated in the instance.
     * @param Google_Database $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function patch($project, $instance, $database, Google_Service_SQLAdmin_Database $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'database' => $database, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Updates a resource containing information about a database inside a Cloud SQL
     * instance. (databases.update)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Database instance ID. This does not include the
     * project ID.
     * @param string $database Name of the database to be updated in the instance.
     * @param Google_Database $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function update($project, $instance, $database, Google_Service_SQLAdmin_Database $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'database' => $database, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_SQLAdmin_Operation");
    }
}

/**
 * The "flags" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google_Service_SQLAdmin(...);
 *   $flags = $sqladminService->flags;
 *  </code>
 */
class Google_Service_SQLAdmin_Flags_Resource extends Google_Service_Resource
{

    /**
     * List all available database flags for Google Cloud SQL instances.
     * (flags.listFlags)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_FlagsListResponse
     */
    public function listFlags($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_SQLAdmin_FlagsListResponse");
    }
}

/**
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google_Service_SQLAdmin(...);
 *   $instances = $sqladminService->instances;
 *  </code>
 */
class Google_Service_SQLAdmin_Instances_Resource extends Google_Service_Resource
{

    /**
     * Creates a Cloud SQL instance as a clone of the source instance.
     * (instances.cloneInstances)
     *
     * @param string $project Project ID of the source as well as the clone Cloud
     * SQL instance.
     * @param string $instance The ID of the Cloud SQL instance to be cloned
     * (source). This does not include the project ID.
     * @param Google_InstancesCloneRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function cloneInstances($project, $instance, Google_Service_SQLAdmin_InstancesCloneRequest $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('clone', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Deletes a Cloud SQL instance. (instances.delete)
     *
     * @param string $project Project ID of the project that contains the instance
     * to be deleted.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function delete($project, $instance, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Exports data from a Cloud SQL instance to a Google Cloud Storage bucket as a
     * MySQL dump file. (instances.export)
     *
     * @param string $project Project ID of the project that contains the instance
     * to be exported.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param Google_InstancesExportRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function export($project, $instance, Google_Service_SQLAdmin_InstancesExportRequest $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('export', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Retrieves a resource containing information about a Cloud SQL instance.
     * (instances.get)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Database instance ID. This does not include the
     * project ID.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_DatabaseInstance
     */
    public function get($project, $instance, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_SQLAdmin_DatabaseInstance");
    }

    /**
     * Imports data into a Cloud SQL instance from a MySQL dump file in Google Cloud
     * Storage. (instances.import)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param Google_InstancesImportRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function import($project, $instance, Google_Service_SQLAdmin_InstancesImportRequest $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('import', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Creates a new Cloud SQL instance. (instances.insert)
     *
     * @param string $project Project ID of the project to which the newly created
     * Cloud SQL instances should belong.
     * @param Google_DatabaseInstance $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function insert($project, Google_Service_SQLAdmin_DatabaseInstance $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Lists instances under a given project in the alphabetical order of the
     * instance name. (instances.listInstances)
     *
     * @param string $project Project ID of the project for which to list Cloud SQL
     * instances.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken A previously-returned page token representing
     * part of the larger set of results to view.
     * @opt_param string maxResults The maximum number of results to return per
     * response.
     * @return Google_Service_SQLAdmin_InstancesListResponse
     */
    public function listInstances($project, $optParams = [])
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_SQLAdmin_InstancesListResponse");
    }

    /**
     * Updates settings of a Cloud SQL instance. Caution: This is not a partial
     * update, so you must include values for all the settings that you want to
     * retain. For partial updates, use patch.. This method supports patch
     * semantics. (instances.patch)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param Google_DatabaseInstance $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function patch($project, $instance, Google_Service_SQLAdmin_DatabaseInstance $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Promotes the read replica instance to be a stand-alone Cloud SQL instance.
     * (instances.promoteReplica)
     *
     * @param string $project ID of the project that contains the read replica.
     * @param string $instance Cloud SQL read replica instance name.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function promoteReplica($project, $instance, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('promoteReplica', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Deletes all client certificates and generates a new server SSL certificate
     * for the instance. The changes will not take effect until the instance is
     * restarted. Existing instances without a server certificate will need to call
     * this once to set a server certificate. (instances.resetSslConfig)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function resetSslConfig($project, $instance, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('resetSslConfig', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Restarts a Cloud SQL instance. (instances.restart)
     *
     * @param string $project Project ID of the project that contains the instance
     * to be restarted.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function restart($project, $instance, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('restart', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Restores a backup of a Cloud SQL instance. (instances.restoreBackup)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param Google_InstancesRestoreBackupRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function restoreBackup($project, $instance, Google_Service_SQLAdmin_InstancesRestoreBackupRequest $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('restoreBackup', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Starts the replication in the read replica instance. (instances.startReplica)
     *
     * @param string $project ID of the project that contains the read replica.
     * @param string $instance Cloud SQL read replica instance name.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function startReplica($project, $instance, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('startReplica', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Stops the replication in the read replica instance. (instances.stopReplica)
     *
     * @param string $project ID of the project that contains the read replica.
     * @param string $instance Cloud SQL read replica instance name.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function stopReplica($project, $instance, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('stopReplica', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Updates settings of a Cloud SQL instance. Caution: This is not a partial
     * update, so you must include values for all the settings that you want to
     * retain. For partial updates, use patch. (instances.update)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param Google_DatabaseInstance $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function update($project, $instance, Google_Service_SQLAdmin_DatabaseInstance $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_SQLAdmin_Operation");
    }
}

/**
 * The "operations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google_Service_SQLAdmin(...);
 *   $operations = $sqladminService->operations;
 *  </code>
 */
class Google_Service_SQLAdmin_Operations_Resource extends Google_Service_Resource
{

    /**
     * Retrieves an instance operation that has been performed on an instance.
     * (operations.get)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $operation Instance operation ID.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function get($project, $operation, $optParams = [])
    {
        $params = array('project' => $project, 'operation' => $operation);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Lists all instance operations that have been performed on the given Cloud SQL
     * instance in the reverse chronological order of the start time.
     * (operations.listOperations)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of operations per response.
     * @opt_param string pageToken A previously-returned page token representing
     * part of the larger set of results to view.
     * @return Google_Service_SQLAdmin_OperationsListResponse
     */
    public function listOperations($project, $instance, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_SQLAdmin_OperationsListResponse");
    }
}

/**
 * The "sslCerts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google_Service_SQLAdmin(...);
 *   $sslCerts = $sqladminService->sslCerts;
 *  </code>
 */
class Google_Service_SQLAdmin_SslCerts_Resource extends Google_Service_Resource
{

    /**
     * Deletes the SSL certificate. The change will not take effect until the
     * instance is restarted. (sslCerts.delete)
     *
     * @param string $project Project ID of the project that contains the instance
     * to be deleted.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param string $sha1Fingerprint Sha1 FingerPrint.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function delete($project, $instance, $sha1Fingerprint, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'sha1Fingerprint' => $sha1Fingerprint);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Retrieves a particular SSL certificate. Does not include the private key
     * (required for usage). The private key must be saved from the response to
     * initial creation. (sslCerts.get)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param string $sha1Fingerprint Sha1 FingerPrint.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_SslCert
     */
    public function get($project, $instance, $sha1Fingerprint, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'sha1Fingerprint' => $sha1Fingerprint);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_SQLAdmin_SslCert");
    }

    /**
     * Creates an SSL certificate and returns it along with the private key and
     * server certificate authority. The new certificate will not be usable until
     * the instance is restarted. (sslCerts.insert)
     *
     * @param string $project Project ID of the project to which the newly created
     * Cloud SQL instances should belong.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param Google_SslCertsInsertRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_SslCertsInsertResponse
     */
    public function insert($project, $instance, Google_Service_SQLAdmin_SslCertsInsertRequest $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_SQLAdmin_SslCertsInsertResponse");
    }

    /**
     * Lists all of the current SSL certificates for the instance.
     * (sslCerts.listSslCerts)
     *
     * @param string $project Project ID of the project for which to list Cloud SQL
     * instances.
     * @param string $instance Cloud SQL instance ID. This does not include the
     * project ID.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_SslCertsListResponse
     */
    public function listSslCerts($project, $instance, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_SQLAdmin_SslCertsListResponse");
    }
}

/**
 * The "tiers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google_Service_SQLAdmin(...);
 *   $tiers = $sqladminService->tiers;
 *  </code>
 */
class Google_Service_SQLAdmin_Tiers_Resource extends Google_Service_Resource
{

    /**
     * Lists all available service tiers for Google Cloud SQL, for example D1, D2.
     * For related information, see Pricing. (tiers.listTiers)
     *
     * @param string $project Project ID of the project for which to list tiers.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_TiersListResponse
     */
    public function listTiers($project, $optParams = [])
    {
        $params = array('project' => $project);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_SQLAdmin_TiersListResponse");
    }
}

/**
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google_Service_SQLAdmin(...);
 *   $users = $sqladminService->users;
 *  </code>
 */
class Google_Service_SQLAdmin_Users_Resource extends Google_Service_Resource
{

    /**
     * Deletes a user from a Cloud SQL instance. (users.delete)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Database instance ID. This does not include the
     * project ID.
     * @param string $host Host of the user in the instance.
     * @param string $name Name of the user in the instance.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function delete($project, $instance, $host, $name, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'host' => $host, 'name' => $name);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Creates a new user in a Cloud SQL instance. (users.insert)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Database instance ID. This does not include the
     * project ID.
     * @param Google_User $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function insert($project, $instance, Google_Service_SQLAdmin_User $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_SQLAdmin_Operation");
    }

    /**
     * Lists users in the specified Cloud SQL instance. (users.listUsers)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Database instance ID. This does not include the
     * project ID.
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_UsersListResponse
     */
    public function listUsers($project, $instance, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_SQLAdmin_UsersListResponse");
    }

    /**
     * Updates an existing user in a Cloud SQL instance. (users.update)
     *
     * @param string $project Project ID of the project that contains the instance.
     * @param string $instance Database instance ID. This does not include the
     * project ID.
     * @param string $host Host of the user in the instance.
     * @param string $name Name of the user in the instance.
     * @param Google_User $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_SQLAdmin_Operation
     */
    public function update($project, $instance, $host, $name, Google_Service_SQLAdmin_User $postBody, $optParams = [])
    {
        $params = array('project' => $project, 'instance' => $instance, 'host' => $host, 'name' => $name, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_SQLAdmin_Operation");
    }
}


class Google_Service_SQLAdmin_AclEntry extends Google_Model
{
    public $expirationTime;
    public $kind;
    public $name;
    public $value;
    protected $internal_gapi_mappings = [];

    public function getExpirationTime()
    {
        return $this->expirationTime;
    }

    public function setExpirationTime($expirationTime)
    {
        $this->expirationTime = $expirationTime;
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

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_Service_SQLAdmin_BackupConfiguration extends Google_Model
{
    public $binaryLogEnabled;
    public $enabled;
    public $kind;
    public $startTime;
    protected $internal_gapi_mappings = [];

    public function getBinaryLogEnabled()
    {
        return $this->binaryLogEnabled;
    }

    public function setBinaryLogEnabled($binaryLogEnabled)
    {
        $this->binaryLogEnabled = $binaryLogEnabled;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }
}

class Google_Service_SQLAdmin_BackupRun extends Google_Model
{
    public $endTime;
    public $enqueuedTime;
    public $id;
    public $instance;
    public $kind;
    public $selfLink;
    public $startTime;
    public $status;
    public $windowStartTime;
    protected $internal_gapi_mappings = [];
    protected $errorType = 'Google_Service_SQLAdmin_OperationError';
    protected $errorDataType = '';

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    public function getEnqueuedTime()
    {
        return $this->enqueuedTime;
    }

    public function setEnqueuedTime($enqueuedTime)
    {
        $this->enqueuedTime = $enqueuedTime;
    }

    public function setError(Google_Service_SQLAdmin_OperationError $error)
    {
        $this->error = $error;
    }

    public function getError()
    {
        return $this->error;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getInstance()
    {
        return $this->instance;
    }

    public function setInstance($instance)
    {
        $this->instance = $instance;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
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

    public function getWindowStartTime()
    {
        return $this->windowStartTime;
    }

    public function setWindowStartTime($windowStartTime)
    {
        $this->windowStartTime = $windowStartTime;
    }
}

class Google_Service_SQLAdmin_BackupRunsListResponse extends Google_Collection
{
    public $kind;
    public $nextPageToken;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_SQLAdmin_BackupRun';
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

class Google_Service_SQLAdmin_BinLogCoordinates extends Google_Model
{
    public $binLogFileName;
    public $binLogPosition;
    public $kind;
    protected $internal_gapi_mappings = [];

    public function getBinLogFileName()
    {
        return $this->binLogFileName;
    }

    public function setBinLogFileName($binLogFileName)
    {
        $this->binLogFileName = $binLogFileName;
    }

    public function getBinLogPosition()
    {
        return $this->binLogPosition;
    }

    public function setBinLogPosition($binLogPosition)
    {
        $this->binLogPosition = $binLogPosition;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}

class Google_Service_SQLAdmin_CloneContext extends Google_Model
{
    public $destinationInstanceName;
    public $kind;
    protected $internal_gapi_mappings = [];
    protected $binLogCoordinatesType = 'Google_Service_SQLAdmin_BinLogCoordinates';
    protected $binLogCoordinatesDataType = '';

    public function setBinLogCoordinates(Google_Service_SQLAdmin_BinLogCoordinates $binLogCoordinates)
    {
        $this->binLogCoordinates = $binLogCoordinates;
    }

    public function getBinLogCoordinates()
    {
        return $this->binLogCoordinates;
    }

    public function getDestinationInstanceName()
    {
        return $this->destinationInstanceName;
    }

    public function setDestinationInstanceName($destinationInstanceName)
    {
        $this->destinationInstanceName = $destinationInstanceName;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}

class Google_Service_SQLAdmin_Database extends Google_Model
{
    public $charset;
    public $collation;
    public $etag;
    public $instance;
    public $kind;
    public $name;
    public $project;
    public $selfLink;
    protected $internal_gapi_mappings = [];

    public function getCharset()
    {
        return $this->charset;
    }

    public function setCharset($charset)
    {
        $this->charset = $charset;
    }

    public function getCollation()
    {
        return $this->collation;
    }

    public function setCollation($collation)
    {
        $this->collation = $collation;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getInstance()
    {
        return $this->instance;
    }

    public function setInstance($instance)
    {
        $this->instance = $instance;
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

    public function getProject()
    {
        return $this->project;
    }

    public function setProject($project)
    {
        $this->project = $project;
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

class Google_Service_SQLAdmin_DatabaseFlags extends Google_Model
{
    public $name;
    public $value;
    protected $internal_gapi_mappings = [];

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
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

class Google_Service_SQLAdmin_DatabaseInstance extends Google_Collection
{
    public $currentDiskSize;
    public $databaseVersion;
    public $etag;
    public $instanceType;
    public $ipv6Address;
    public $kind;
    public $masterInstanceName;
    public $maxDiskSize;
    public $name;
    public $project;
    public $region;
    public $replicaNames;
    public $selfLink;
    public $serviceAccountEmailAddress;
    public $state;
    protected $collection_key = 'replicaNames';
    protected $internal_gapi_mappings = [];
    protected $ipAddressesType = 'Google_Service_SQLAdmin_IpMapping';
    protected $ipAddressesDataType = 'array';
    protected $onPremisesConfigurationType = 'Google_Service_SQLAdmin_OnPremisesConfiguration';
    protected $onPremisesConfigurationDataType = '';
    protected $replicaConfigurationType = 'Google_Service_SQLAdmin_ReplicaConfiguration';
    protected $replicaConfigurationDataType = '';
    protected $serverCaCertType = 'Google_Service_SQLAdmin_SslCert';
    protected $serverCaCertDataType = '';
    protected $settingsType = 'Google_Service_SQLAdmin_Settings';
    protected $settingsDataType = '';

    public function getCurrentDiskSize()
    {
        return $this->currentDiskSize;
    }

    public function setCurrentDiskSize($currentDiskSize)
    {
        $this->currentDiskSize = $currentDiskSize;
    }

    public function getDatabaseVersion()
    {
        return $this->databaseVersion;
    }

    public function setDatabaseVersion($databaseVersion)
    {
        $this->databaseVersion = $databaseVersion;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getInstanceType()
    {
        return $this->instanceType;
    }

    public function setInstanceType($instanceType)
    {
        $this->instanceType = $instanceType;
    }

    public function setIpAddresses($ipAddresses)
    {
        $this->ipAddresses = $ipAddresses;
    }

    public function getIpAddresses()
    {
        return $this->ipAddresses;
    }

    public function getIpv6Address()
    {
        return $this->ipv6Address;
    }

    public function setIpv6Address($ipv6Address)
    {
        $this->ipv6Address = $ipv6Address;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getMasterInstanceName()
    {
        return $this->masterInstanceName;
    }

    public function setMasterInstanceName($masterInstanceName)
    {
        $this->masterInstanceName = $masterInstanceName;
    }

    public function getMaxDiskSize()
    {
        return $this->maxDiskSize;
    }

    public function setMaxDiskSize($maxDiskSize)
    {
        $this->maxDiskSize = $maxDiskSize;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setOnPremisesConfiguration(Google_Service_SQLAdmin_OnPremisesConfiguration $onPremisesConfiguration)
    {
        $this->onPremisesConfiguration = $onPremisesConfiguration;
    }

    public function getOnPremisesConfiguration()
    {
        return $this->onPremisesConfiguration;
    }

    public function getProject()
    {
        return $this->project;
    }

    public function setProject($project)
    {
        $this->project = $project;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($region)
    {
        $this->region = $region;
    }

    public function setReplicaConfiguration(Google_Service_SQLAdmin_ReplicaConfiguration $replicaConfiguration)
    {
        $this->replicaConfiguration = $replicaConfiguration;
    }

    public function getReplicaConfiguration()
    {
        return $this->replicaConfiguration;
    }

    public function getReplicaNames()
    {
        return $this->replicaNames;
    }

    public function setReplicaNames($replicaNames)
    {
        $this->replicaNames = $replicaNames;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function setServerCaCert(Google_Service_SQLAdmin_SslCert $serverCaCert)
    {
        $this->serverCaCert = $serverCaCert;
    }

    public function getServerCaCert()
    {
        return $this->serverCaCert;
    }

    public function getServiceAccountEmailAddress()
    {
        return $this->serviceAccountEmailAddress;
    }

    public function setServiceAccountEmailAddress($serviceAccountEmailAddress)
    {
        $this->serviceAccountEmailAddress = $serviceAccountEmailAddress;
    }

    public function setSettings(Google_Service_SQLAdmin_Settings $settings)
    {
        $this->settings = $settings;
    }

    public function getSettings()
    {
        return $this->settings;
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

class Google_Service_SQLAdmin_DatabasesListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_SQLAdmin_Database';
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
}

class Google_Service_SQLAdmin_ExportContext extends Google_Collection
{
    public $databases;
    public $fileType;
    public $kind;
    public $uri;
    protected $collection_key = 'databases';
    protected $internal_gapi_mappings = [];
    protected $csvExportOptionsType = 'Google_Service_SQLAdmin_ExportContextCsvExportOptions';
    protected $csvExportOptionsDataType = '';
    protected $sqlExportOptionsType = 'Google_Service_SQLAdmin_ExportContextSqlExportOptions';
    protected $sqlExportOptionsDataType = '';

    public function setCsvExportOptions(Google_Service_SQLAdmin_ExportContextCsvExportOptions $csvExportOptions)
    {
        $this->csvExportOptions = $csvExportOptions;
    }

    public function getCsvExportOptions()
    {
        return $this->csvExportOptions;
    }

    public function getDatabases()
    {
        return $this->databases;
    }

    public function setDatabases($databases)
    {
        $this->databases = $databases;
    }

    public function getFileType()
    {
        return $this->fileType;
    }

    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setSqlExportOptions(Google_Service_SQLAdmin_ExportContextSqlExportOptions $sqlExportOptions)
    {
        $this->sqlExportOptions = $sqlExportOptions;
    }

    public function getSqlExportOptions()
    {
        return $this->sqlExportOptions;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function setUri($uri)
    {
        $this->uri = $uri;
    }
}

class Google_Service_SQLAdmin_ExportContextCsvExportOptions extends Google_Model
{
    public $selectQuery;
    protected $internal_gapi_mappings = [];

    public function getSelectQuery()
    {
        return $this->selectQuery;
    }

    public function setSelectQuery($selectQuery)
    {
        $this->selectQuery = $selectQuery;
    }
}

class Google_Service_SQLAdmin_ExportContextSqlExportOptions extends Google_Collection
{
    public $tables;
    protected $collection_key = 'tables';
    protected $internal_gapi_mappings = [];

    public function getTables()
    {
        return $this->tables;
    }

    public function setTables($tables)
    {
        $this->tables = $tables;
    }
}

class Google_Service_SQLAdmin_Flag extends Google_Collection
{
    public $allowedStringValues;
    public $appliesTo;
    public $kind;
    public $maxValue;
    public $minValue;
    public $name;
    public $type;
    protected $collection_key = 'appliesTo';
    protected $internal_gapi_mappings = [];

    public function getAllowedStringValues()
    {
        return $this->allowedStringValues;
    }

    public function setAllowedStringValues($allowedStringValues)
    {
        $this->allowedStringValues = $allowedStringValues;
    }

    public function getAppliesTo()
    {
        return $this->appliesTo;
    }

    public function setAppliesTo($appliesTo)
    {
        $this->appliesTo = $appliesTo;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getMaxValue()
    {
        return $this->maxValue;
    }

    public function setMaxValue($maxValue)
    {
        $this->maxValue = $maxValue;
    }

    public function getMinValue()
    {
        return $this->minValue;
    }

    public function setMinValue($minValue)
    {
        $this->minValue = $minValue;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
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

class Google_Service_SQLAdmin_FlagsListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_SQLAdmin_Flag';
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
}

class Google_Service_SQLAdmin_ImportContext extends Google_Model
{
    public $database;
    public $fileType;
    public $kind;
    public $uri;
    protected $internal_gapi_mappings = [];
    protected $csvImportOptionsType = 'Google_Service_SQLAdmin_ImportContextCsvImportOptions';
    protected $csvImportOptionsDataType = '';

    public function setCsvImportOptions(Google_Service_SQLAdmin_ImportContextCsvImportOptions $csvImportOptions)
    {
        $this->csvImportOptions = $csvImportOptions;
    }

    public function getCsvImportOptions()
    {
        return $this->csvImportOptions;
    }

    public function getDatabase()
    {
        return $this->database;
    }

    public function setDatabase($database)
    {
        $this->database = $database;
    }

    public function getFileType()
    {
        return $this->fileType;
    }

    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function setUri($uri)
    {
        $this->uri = $uri;
    }
}

class Google_Service_SQLAdmin_ImportContextCsvImportOptions extends Google_Collection
{
    public $columns;
    public $table;
    protected $collection_key = 'columns';
    protected $internal_gapi_mappings = [];

    public function getColumns()
    {
        return $this->columns;
    }

    public function setColumns($columns)
    {
        $this->columns = $columns;
    }

    public function getTable()
    {
        return $this->table;
    }

    public function setTable($table)
    {
        $this->table = $table;
    }
}

class Google_Service_SQLAdmin_InstancesCloneRequest extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $cloneContextType = 'Google_Service_SQLAdmin_CloneContext';
    protected $cloneContextDataType = '';


    public function setCloneContext(Google_Service_SQLAdmin_CloneContext $cloneContext)
    {
        $this->cloneContext = $cloneContext;
    }

    public function getCloneContext()
    {
        return $this->cloneContext;
    }
}

class Google_Service_SQLAdmin_InstancesExportRequest extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $exportContextType = 'Google_Service_SQLAdmin_ExportContext';
    protected $exportContextDataType = '';


    public function setExportContext(Google_Service_SQLAdmin_ExportContext $exportContext)
    {
        $this->exportContext = $exportContext;
    }

    public function getExportContext()
    {
        return $this->exportContext;
    }
}

class Google_Service_SQLAdmin_InstancesImportRequest extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $importContextType = 'Google_Service_SQLAdmin_ImportContext';
    protected $importContextDataType = '';


    public function setImportContext(Google_Service_SQLAdmin_ImportContext $importContext)
    {
        $this->importContext = $importContext;
    }

    public function getImportContext()
    {
        return $this->importContext;
    }
}

class Google_Service_SQLAdmin_InstancesListResponse extends Google_Collection
{
    public $kind;
    public $nextPageToken;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_SQLAdmin_DatabaseInstance';
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

class Google_Service_SQLAdmin_InstancesRestoreBackupRequest extends Google_Model
{
    protected $internal_gapi_mappings = [];
    protected $restoreBackupContextType = 'Google_Service_SQLAdmin_RestoreBackupContext';
    protected $restoreBackupContextDataType = '';


    public function setRestoreBackupContext(Google_Service_SQLAdmin_RestoreBackupContext $restoreBackupContext)
    {
        $this->restoreBackupContext = $restoreBackupContext;
    }

    public function getRestoreBackupContext()
    {
        return $this->restoreBackupContext;
    }
}

class Google_Service_SQLAdmin_IpConfiguration extends Google_Collection
{
    public $ipv4Enabled;
    public $requireSsl;
    protected $collection_key = 'authorizedNetworks';
    protected $internal_gapi_mappings = [];
    protected $authorizedNetworksType = 'Google_Service_SQLAdmin_AclEntry';
    protected $authorizedNetworksDataType = 'array';

    public function setAuthorizedNetworks($authorizedNetworks)
    {
        $this->authorizedNetworks = $authorizedNetworks;
    }

    public function getAuthorizedNetworks()
    {
        return $this->authorizedNetworks;
    }

    public function getIpv4Enabled()
    {
        return $this->ipv4Enabled;
    }

    public function setIpv4Enabled($ipv4Enabled)
    {
        $this->ipv4Enabled = $ipv4Enabled;
    }

    public function getRequireSsl()
    {
        return $this->requireSsl;
    }

    public function setRequireSsl($requireSsl)
    {
        $this->requireSsl = $requireSsl;
    }
}

class Google_Service_SQLAdmin_IpMapping extends Google_Model
{
    public $ipAddress;
    public $timeToRetire;
    protected $internal_gapi_mappings = [];

    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    public function getTimeToRetire()
    {
        return $this->timeToRetire;
    }

    public function setTimeToRetire($timeToRetire)
    {
        $this->timeToRetire = $timeToRetire;
    }
}

class Google_Service_SQLAdmin_LocationPreference extends Google_Model
{
    public $followGaeApplication;
    public $kind;
    public $zone;
    protected $internal_gapi_mappings = [];

    public function getFollowGaeApplication()
    {
        return $this->followGaeApplication;
    }

    public function setFollowGaeApplication($followGaeApplication)
    {
        $this->followGaeApplication = $followGaeApplication;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
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

class Google_Service_SQLAdmin_MySqlReplicaConfiguration extends Google_Model
{
    public $caCertificate;
    public $clientCertificate;
    public $clientKey;
    public $connectRetryInterval;
    public $dumpFilePath;
    public $kind;
    public $masterHeartbeatPeriod;
    public $password;
    public $sslCipher;
    public $username;
    public $verifyServerCertificate;
    protected $internal_gapi_mappings = [];

    public function getCaCertificate()
    {
        return $this->caCertificate;
    }

    public function setCaCertificate($caCertificate)
    {
        $this->caCertificate = $caCertificate;
    }

    public function getClientCertificate()
    {
        return $this->clientCertificate;
    }

    public function setClientCertificate($clientCertificate)
    {
        $this->clientCertificate = $clientCertificate;
    }

    public function getClientKey()
    {
        return $this->clientKey;
    }

    public function setClientKey($clientKey)
    {
        $this->clientKey = $clientKey;
    }

    public function getConnectRetryInterval()
    {
        return $this->connectRetryInterval;
    }

    public function setConnectRetryInterval($connectRetryInterval)
    {
        $this->connectRetryInterval = $connectRetryInterval;
    }

    public function getDumpFilePath()
    {
        return $this->dumpFilePath;
    }

    public function setDumpFilePath($dumpFilePath)
    {
        $this->dumpFilePath = $dumpFilePath;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getMasterHeartbeatPeriod()
    {
        return $this->masterHeartbeatPeriod;
    }

    public function setMasterHeartbeatPeriod($masterHeartbeatPeriod)
    {
        $this->masterHeartbeatPeriod = $masterHeartbeatPeriod;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getSslCipher()
    {
        return $this->sslCipher;
    }

    public function setSslCipher($sslCipher)
    {
        $this->sslCipher = $sslCipher;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getVerifyServerCertificate()
    {
        return $this->verifyServerCertificate;
    }

    public function setVerifyServerCertificate($verifyServerCertificate)
    {
        $this->verifyServerCertificate = $verifyServerCertificate;
    }
}

class Google_Service_SQLAdmin_OnPremisesConfiguration extends Google_Model
{
    public $hostPort;
    public $kind;
    protected $internal_gapi_mappings = [];

    public function getHostPort()
    {
        return $this->hostPort;
    }

    public function setHostPort($hostPort)
    {
        $this->hostPort = $hostPort;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}

class Google_Service_SQLAdmin_Operation extends Google_Model
{
    public $endTime;
    public $insertTime;
    public $kind;
    public $name;
    public $operationType;
    public $selfLink;
    public $startTime;
    public $status;
    public $targetId;
    public $targetLink;
    public $targetProject;
    public $user;
    protected $internal_gapi_mappings = [];
    protected $errorType = 'Google_Service_SQLAdmin_OperationErrors';
    protected $errorDataType = '';
    protected $exportContextType = 'Google_Service_SQLAdmin_ExportContext';
    protected $exportContextDataType = '';
    protected $importContextType = 'Google_Service_SQLAdmin_ImportContext';
    protected $importContextDataType = '';

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    public function setError(Google_Service_SQLAdmin_OperationErrors $error)
    {
        $this->error = $error;
    }

    public function getError()
    {
        return $this->error;
    }

    public function setExportContext(Google_Service_SQLAdmin_ExportContext $exportContext)
    {
        $this->exportContext = $exportContext;
    }

    public function getExportContext()
    {
        return $this->exportContext;
    }

    public function setImportContext(Google_Service_SQLAdmin_ImportContext $importContext)
    {
        $this->importContext = $importContext;
    }

    public function getImportContext()
    {
        return $this->importContext;
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

    public function getTargetProject()
    {
        return $this->targetProject;
    }

    public function setTargetProject($targetProject)
    {
        $this->targetProject = $targetProject;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }
}

class Google_Service_SQLAdmin_OperationError extends Google_Model
{
    public $code;
    public $kind;
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

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
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

class Google_Service_SQLAdmin_OperationErrors extends Google_Collection
{
    public $kind;
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = [];
    protected $errorsType = 'Google_Service_SQLAdmin_OperationError';
    protected $errorsDataType = 'array';

    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}

class Google_Service_SQLAdmin_OperationsListResponse extends Google_Collection
{
    public $kind;
    public $nextPageToken;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_SQLAdmin_Operation';
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

class Google_Service_SQLAdmin_ReplicaConfiguration extends Google_Model
{
    public $kind;
    protected $internal_gapi_mappings = [];
    protected $mysqlReplicaConfigurationType = 'Google_Service_SQLAdmin_MySqlReplicaConfiguration';
    protected $mysqlReplicaConfigurationDataType = '';

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setMysqlReplicaConfiguration(Google_Service_SQLAdmin_MySqlReplicaConfiguration $mysqlReplicaConfiguration)
    {
        $this->mysqlReplicaConfiguration = $mysqlReplicaConfiguration;
    }

    public function getMysqlReplicaConfiguration()
    {
        return $this->mysqlReplicaConfiguration;
    }
}

class Google_Service_SQLAdmin_RestoreBackupContext extends Google_Model
{
    public $backupRunId;
    public $kind;
    protected $internal_gapi_mappings = [];

    public function getBackupRunId()
    {
        return $this->backupRunId;
    }

    public function setBackupRunId($backupRunId)
    {
        $this->backupRunId = $backupRunId;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }
}

class Google_Service_SQLAdmin_Settings extends Google_Collection
{
    public $activationPolicy;
    public $authorizedGaeApplications;
    public $crashSafeReplicationEnabled;
    public $databaseReplicationEnabled;
    public $kind;
    public $pricingPlan;
    public $replicationType;
    public $settingsVersion;
    public $tier;
    protected $collection_key = 'databaseFlags';
    protected $internal_gapi_mappings = [];
    protected $backupConfigurationType = 'Google_Service_SQLAdmin_BackupConfiguration';
    protected $backupConfigurationDataType = '';
    protected $databaseFlagsType = 'Google_Service_SQLAdmin_DatabaseFlags';
    protected $databaseFlagsDataType = 'array';
    protected $ipConfigurationType = 'Google_Service_SQLAdmin_IpConfiguration';
    protected $ipConfigurationDataType = '';
    protected $locationPreferenceType = 'Google_Service_SQLAdmin_LocationPreference';
    protected $locationPreferenceDataType = '';

    public function getActivationPolicy()
    {
        return $this->activationPolicy;
    }

    public function setActivationPolicy($activationPolicy)
    {
        $this->activationPolicy = $activationPolicy;
    }

    public function getAuthorizedGaeApplications()
    {
        return $this->authorizedGaeApplications;
    }

    public function setAuthorizedGaeApplications($authorizedGaeApplications)
    {
        $this->authorizedGaeApplications = $authorizedGaeApplications;
    }

    public function setBackupConfiguration(Google_Service_SQLAdmin_BackupConfiguration $backupConfiguration)
    {
        $this->backupConfiguration = $backupConfiguration;
    }

    public function getBackupConfiguration()
    {
        return $this->backupConfiguration;
    }

    public function getCrashSafeReplicationEnabled()
    {
        return $this->crashSafeReplicationEnabled;
    }

    public function setCrashSafeReplicationEnabled($crashSafeReplicationEnabled)
    {
        $this->crashSafeReplicationEnabled = $crashSafeReplicationEnabled;
    }

    public function setDatabaseFlags($databaseFlags)
    {
        $this->databaseFlags = $databaseFlags;
    }

    public function getDatabaseFlags()
    {
        return $this->databaseFlags;
    }

    public function getDatabaseReplicationEnabled()
    {
        return $this->databaseReplicationEnabled;
    }

    public function setDatabaseReplicationEnabled($databaseReplicationEnabled)
    {
        $this->databaseReplicationEnabled = $databaseReplicationEnabled;
    }

    public function setIpConfiguration(Google_Service_SQLAdmin_IpConfiguration $ipConfiguration)
    {
        $this->ipConfiguration = $ipConfiguration;
    }

    public function getIpConfiguration()
    {
        return $this->ipConfiguration;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setLocationPreference(Google_Service_SQLAdmin_LocationPreference $locationPreference)
    {
        $this->locationPreference = $locationPreference;
    }

    public function getLocationPreference()
    {
        return $this->locationPreference;
    }

    public function getPricingPlan()
    {
        return $this->pricingPlan;
    }

    public function setPricingPlan($pricingPlan)
    {
        $this->pricingPlan = $pricingPlan;
    }

    public function getReplicationType()
    {
        return $this->replicationType;
    }

    public function setReplicationType($replicationType)
    {
        $this->replicationType = $replicationType;
    }

    public function getSettingsVersion()
    {
        return $this->settingsVersion;
    }

    public function setSettingsVersion($settingsVersion)
    {
        $this->settingsVersion = $settingsVersion;
    }

    public function getTier()
    {
        return $this->tier;
    }

    public function setTier($tier)
    {
        $this->tier = $tier;
    }
}

class Google_Service_SQLAdmin_SslCert extends Google_Model
{
    public $cert;
    public $certSerialNumber;
    public $commonName;
    public $createTime;
    public $expirationTime;
    public $instance;
    public $kind;
    public $selfLink;
    public $sha1Fingerprint;
    protected $internal_gapi_mappings = [];

    public function getCert()
    {
        return $this->cert;
    }

    public function setCert($cert)
    {
        $this->cert = $cert;
    }

    public function getCertSerialNumber()
    {
        return $this->certSerialNumber;
    }

    public function setCertSerialNumber($certSerialNumber)
    {
        $this->certSerialNumber = $certSerialNumber;
    }

    public function getCommonName()
    {
        return $this->commonName;
    }

    public function setCommonName($commonName)
    {
        $this->commonName = $commonName;
    }

    public function getCreateTime()
    {
        return $this->createTime;
    }

    public function setCreateTime($createTime)
    {
        $this->createTime = $createTime;
    }

    public function getExpirationTime()
    {
        return $this->expirationTime;
    }

    public function setExpirationTime($expirationTime)
    {
        $this->expirationTime = $expirationTime;
    }

    public function getInstance()
    {
        return $this->instance;
    }

    public function setInstance($instance)
    {
        $this->instance = $instance;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getSha1Fingerprint()
    {
        return $this->sha1Fingerprint;
    }

    public function setSha1Fingerprint($sha1Fingerprint)
    {
        $this->sha1Fingerprint = $sha1Fingerprint;
    }
}

class Google_Service_SQLAdmin_SslCertDetail extends Google_Model
{
    public $certPrivateKey;
    protected $internal_gapi_mappings = [];
    protected $certInfoType = 'Google_Service_SQLAdmin_SslCert';
    protected $certInfoDataType = '';

    public function setCertInfo(Google_Service_SQLAdmin_SslCert $certInfo)
    {
        $this->certInfo = $certInfo;
    }

    public function getCertInfo()
    {
        return $this->certInfo;
    }

    public function getCertPrivateKey()
    {
        return $this->certPrivateKey;
    }

    public function setCertPrivateKey($certPrivateKey)
    {
        $this->certPrivateKey = $certPrivateKey;
    }
}

class Google_Service_SQLAdmin_SslCertsInsertRequest extends Google_Model
{
    public $commonName;
    protected $internal_gapi_mappings = [];

    public function getCommonName()
    {
        return $this->commonName;
    }

    public function setCommonName($commonName)
    {
        $this->commonName = $commonName;
    }
}

class Google_Service_SQLAdmin_SslCertsInsertResponse extends Google_Model
{
    public $kind;
    protected $internal_gapi_mappings = [];
    protected $clientCertType = 'Google_Service_SQLAdmin_SslCertDetail';
    protected $clientCertDataType = '';
    protected $serverCaCertType = 'Google_Service_SQLAdmin_SslCert';
    protected $serverCaCertDataType = '';


    public function setClientCert(Google_Service_SQLAdmin_SslCertDetail $clientCert)
    {
        $this->clientCert = $clientCert;
    }

    public function getClientCert()
    {
        return $this->clientCert;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setServerCaCert(Google_Service_SQLAdmin_SslCert $serverCaCert)
    {
        $this->serverCaCert = $serverCaCert;
    }

    public function getServerCaCert()
    {
        return $this->serverCaCert;
    }
}

class Google_Service_SQLAdmin_SslCertsListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_SQLAdmin_SslCert';
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
}

class Google_Service_SQLAdmin_Tier extends Google_Collection
{
    public $diskQuota;
    public $rAM;
    public $kind;
    public $region;
    public $tier;
    protected $collection_key = 'region';
    protected $internal_gapi_mappings = array(
        "diskQuota" => "DiskQuota",
        "rAM" => "RAM",
    );

    public function getDiskQuota()
    {
        return $this->diskQuota;
    }

    public function setDiskQuota($diskQuota)
    {
        $this->diskQuota = $diskQuota;
    }

    public function getRAM()
    {
        return $this->rAM;
    }

    public function setRAM($rAM)
    {
        $this->rAM = $rAM;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setRegion($region)
    {
        $this->region = $region;
    }

    public function getTier()
    {
        return $this->tier;
    }

    public function setTier($tier)
    {
        $this->tier = $tier;
    }
}

class Google_Service_SQLAdmin_TiersListResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_SQLAdmin_Tier';
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
}

class Google_Service_SQLAdmin_User extends Google_Model
{
    public $etag;
    public $host;
    public $instance;
    public $kind;
    public $name;
    public $password;
    public $project;
    protected $internal_gapi_mappings = [];

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function setHost($host)
    {
        $this->host = $host;
    }

    public function getInstance()
    {
        return $this->instance;
    }

    public function setInstance($instance)
    {
        $this->instance = $instance;
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

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getProject()
    {
        return $this->project;
    }

    public function setProject($project)
    {
        $this->project = $project;
    }
}

class Google_Service_SQLAdmin_UsersListResponse extends Google_Collection
{
    public $kind;
    public $nextPageToken;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_SQLAdmin_User';
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
