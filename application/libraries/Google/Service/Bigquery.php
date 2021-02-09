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
 * Service definition for Bigquery (v2).
 *
 * <p>
 * A data platform for customers to create, manage, share and query data.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/bigquery/docs/overview" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Bigquery extends Google_Service
{
    /** View and manage your data in Google BigQuery. */
    const BIGQUERY =
        "https://www.googleapis.com/auth/bigquery";
    /** Insert data into Google BigQuery. */
    const BIGQUERY_INSERTDATA =
        "https://www.googleapis.com/auth/bigquery.insertdata";
    /** View and manage your data across Google Cloud Platform services. */
    const CLOUD_PLATFORM =
        "https://www.googleapis.com/auth/cloud-platform";
    /** Manage your data and permissions in Google Cloud Storage. */
    const DEVSTORAGE_FULL_CONTROL =
        "https://www.googleapis.com/auth/devstorage.full_control";
    /** View your data in Google Cloud Storage. */
    const DEVSTORAGE_READ_ONLY =
        "https://www.googleapis.com/auth/devstorage.read_only";
    /** Manage your data in Google Cloud Storage. */
    const DEVSTORAGE_READ_WRITE =
        "https://www.googleapis.com/auth/devstorage.read_write";

    public $datasets;
    public $jobs;
    public $projects;
    public $tabledata;
    public $tables;


    /**
     * Constructs the internal representation of the Bigquery service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = 'bigquery/v2/';
        $this->version = 'v2';
        $this->serviceName = 'bigquery';

        $this->datasets = new Google_Service_Bigquery_Datasets_Resource(
            $this,
            $this->serviceName,
            'datasets',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'projects/{projectId}/datasets/{datasetId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'datasetId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'deleteContents' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'projects/{projectId}/datasets/{datasetId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'datasetId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'projects/{projectId}/datasets',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'projects/{projectId}/datasets',
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
                            'all' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ), 'patch' => array(
                        'path' => 'projects/{projectId}/datasets/{datasetId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'datasetId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'projects/{projectId}/datasets/{datasetId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'datasetId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->jobs = new Google_Service_Bigquery_Jobs_Resource(
            $this,
            $this->serviceName,
            'jobs',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'projects/{projectId}/jobs/{jobId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'jobId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'getQueryResults' => array(
                        'path' => 'projects/{projectId}/queries/{jobId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'jobId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'timeoutMs' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'startIndex' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'projects/{projectId}/jobs',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'projects/{projectId}/jobs',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'projection' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'stateFilter' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'repeated' => true,
                            ),
                            'allUsers' => array(
                                'location' => 'query',
                                'type' => 'boolean',
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
                    ), 'query' => array(
                        'path' => 'projects/{projectId}/queries',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->projects = new Google_Service_Bigquery_Projects_Resource(
            $this,
            $this->serviceName,
            'projects',
            array(
                'methods' => array(
                    'list' => array(
                        'path' => 'projects',
                        'httpMethod' => 'GET',
                        'parameters' => array(
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
        $this->tabledata = new Google_Service_Bigquery_Tabledata_Resource(
            $this,
            $this->serviceName,
            'tabledata',
            array(
                'methods' => array(
                    'insertAll' => array(
                        'path' => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}/insertAll',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'datasetId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'tableId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}/data',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'datasetId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'tableId' => array(
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
                            'startIndex' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->tables = new Google_Service_Bigquery_Tables_Resource(
            $this,
            $this->serviceName,
            'tables',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'datasetId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'tableId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'datasetId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'tableId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'projects/{projectId}/datasets/{datasetId}/tables',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'datasetId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'projects/{projectId}/datasets/{datasetId}/tables',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'datasetId' => array(
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
                        'path' => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'datasetId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'tableId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'projectId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'datasetId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'tableId' => array(
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
 * The "datasets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $datasets = $bigqueryService->datasets;
 *  </code>
 */
class Google_Service_Bigquery_Datasets_Resource extends Google_Service_Resource
{

    /**
     * Deletes the dataset specified by the datasetId value. Before you can delete a
     * dataset, you must delete all its tables, either manually or by specifying
     * deleteContents. Immediately after deletion, you can create another dataset
     * with the same name. (datasets.delete)
     *
     * @param string $projectId Project ID of the dataset being deleted
     * @param string $datasetId Dataset ID of dataset being deleted
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool deleteContents If True, delete all the tables in the dataset.
     * If False and the dataset contains tables, the request will fail. Default is
     * False
     */
    public function delete($projectId, $datasetId, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Returns the dataset specified by datasetID. (datasets.get)
     *
     * @param string $projectId Project ID of the requested dataset
     * @param string $datasetId Dataset ID of the requested dataset
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Dataset
     */
    public function get($projectId, $datasetId, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Bigquery_Dataset");
    }

    /**
     * Creates a new empty dataset. (datasets.insert)
     *
     * @param string $projectId Project ID of the new dataset
     * @param Google_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Dataset
     */
    public function insert($projectId, Google_Service_Bigquery_Dataset $postBody, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Bigquery_Dataset");
    }

    /**
     * Lists all the datasets in the specified project to which the caller has read
     * access; however, a project owner can list (but not necessarily get) all
     * datasets in his project. (datasets.listDatasets)
     *
     * @param string $projectId Project ID of the datasets to be listed
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Page token, returned by a previous call, to
     * request the next page of results
     * @opt_param bool all Whether to list all datasets, including hidden ones
     * @opt_param string maxResults The maximum number of results to return
     * @return Google_Service_Bigquery_DatasetList
     */
    public function listDatasets($projectId, $optParams = [])
    {
        $params = array('projectId' => $projectId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Bigquery_DatasetList");
    }

    /**
     * Updates information in an existing dataset. The update method replaces the
     * entire dataset resource, whereas the patch method only replaces fields that
     * are provided in the submitted dataset resource. This method supports patch
     * semantics. (datasets.patch)
     *
     * @param string $projectId Project ID of the dataset being updated
     * @param string $datasetId Dataset ID of the dataset being updated
     * @param Google_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Dataset
     */
    public function patch($projectId, $datasetId, Google_Service_Bigquery_Dataset $postBody, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Bigquery_Dataset");
    }

    /**
     * Updates information in an existing dataset. The update method replaces the
     * entire dataset resource, whereas the patch method only replaces fields that
     * are provided in the submitted dataset resource. (datasets.update)
     *
     * @param string $projectId Project ID of the dataset being updated
     * @param string $datasetId Dataset ID of the dataset being updated
     * @param Google_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Dataset
     */
    public function update($projectId, $datasetId, Google_Service_Bigquery_Dataset $postBody, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Bigquery_Dataset");
    }
}

/**
 * The "jobs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $jobs = $bigqueryService->jobs;
 *  </code>
 */
class Google_Service_Bigquery_Jobs_Resource extends Google_Service_Resource
{

    /**
     * Retrieves the specified job by ID. (jobs.get)
     *
     * @param string $projectId Project ID of the requested job
     * @param string $jobId Job ID of the requested job
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Job
     */
    public function get($projectId, $jobId, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'jobId' => $jobId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Bigquery_Job");
    }

    /**
     * Retrieves the results of a query job. (jobs.getQueryResults)
     *
     * @param string $projectId Project ID of the query job
     * @param string $jobId Job ID of the query job
     * @param array $optParams Optional parameters.
     *
     * @opt_param string timeoutMs How long to wait for the query to complete, in
     * milliseconds, before returning. Default is to return immediately. If the
     * timeout passes before the job completes, the request will fail with a TIMEOUT
     * error
     * @opt_param string maxResults Maximum number of results to read
     * @opt_param string pageToken Page token, returned by a previous call, to
     * request the next page of results
     * @opt_param string startIndex Zero-based index of the starting row
     * @return Google_Service_Bigquery_GetQueryResultsResponse
     */
    public function getQueryResults($projectId, $jobId, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'jobId' => $jobId);
        $params = array_merge($params, $optParams);
        return $this->call('getQueryResults', array($params), "Google_Service_Bigquery_GetQueryResultsResponse");
    }

    /**
     * Starts a new asynchronous job. (jobs.insert)
     *
     * @param string $projectId Project ID of the project that will be billed for
     * the job
     * @param Google_Job $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Job
     */
    public function insert($projectId, Google_Service_Bigquery_Job $postBody, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Bigquery_Job");
    }

    /**
     * Lists all the Jobs in the specified project that were started by the user.
     * The job list returns in reverse chronological order of when the jobs were
     * created, starting with the most recent job created. (jobs.listJobs)
     *
     * @param string $projectId Project ID of the jobs to list
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection Restrict information returned to a set of
     * selected fields
     * @opt_param string stateFilter Filter for job state
     * @opt_param bool allUsers Whether to display jobs owned by all users in the
     * project. Default false
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call, to
     * request the next page of results
     * @return Google_Service_Bigquery_JobList
     */
    public function listJobs($projectId, $optParams = [])
    {
        $params = array('projectId' => $projectId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Bigquery_JobList");
    }

    /**
     * Runs a BigQuery SQL query synchronously and returns query results if the
     * query completes within a specified timeout. (jobs.query)
     *
     * @param string $projectId Project ID of the project billed for the query
     * @param Google_QueryRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_QueryResponse
     */
    public function query($projectId, Google_Service_Bigquery_QueryRequest $postBody, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('query', array($params), "Google_Service_Bigquery_QueryResponse");
    }
}

/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $projects = $bigqueryService->projects;
 *  </code>
 */
class Google_Service_Bigquery_Projects_Resource extends Google_Service_Resource
{

    /**
     * Lists the projects to which you have at least read access.
     * (projects.listProjects)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Page token, returned by a previous call, to
     * request the next page of results
     * @opt_param string maxResults Maximum number of results to return
     * @return Google_Service_Bigquery_ProjectList
     */
    public function listProjects($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Bigquery_ProjectList");
    }
}

/**
 * The "tabledata" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $tabledata = $bigqueryService->tabledata;
 *  </code>
 */
class Google_Service_Bigquery_Tabledata_Resource extends Google_Service_Resource
{

    /**
     * Streams data into BigQuery one record at a time without needing to run a load
     * job. (tabledata.insertAll)
     *
     * @param string $projectId Project ID of the destination table.
     * @param string $datasetId Dataset ID of the destination table.
     * @param string $tableId Table ID of the destination table.
     * @param Google_TableDataInsertAllRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_TableDataInsertAllResponse
     */
    public function insertAll($projectId, $datasetId, $tableId, Google_Service_Bigquery_TableDataInsertAllRequest $postBody, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insertAll', array($params), "Google_Service_Bigquery_TableDataInsertAllResponse");
    }

    /**
     * Retrieves table data from a specified set of rows. (tabledata.listTabledata)
     *
     * @param string $projectId Project ID of the table to read
     * @param string $datasetId Dataset ID of the table to read
     * @param string $tableId Table ID of the table to read
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call,
     * identifying the result set
     * @opt_param string startIndex Zero-based index of the starting row to read
     * @return Google_Service_Bigquery_TableDataList
     */
    public function listTabledata($projectId, $datasetId, $tableId, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Bigquery_TableDataList");
    }
}

/**
 * The "tables" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bigqueryService = new Google_Service_Bigquery(...);
 *   $tables = $bigqueryService->tables;
 *  </code>
 */
class Google_Service_Bigquery_Tables_Resource extends Google_Service_Resource
{

    /**
     * Deletes the table specified by tableId from the dataset. If the table
     * contains data, all the data will be deleted. (tables.delete)
     *
     * @param string $projectId Project ID of the table to delete
     * @param string $datasetId Dataset ID of the table to delete
     * @param string $tableId Table ID of the table to delete
     * @param array $optParams Optional parameters.
     */
    public function delete($projectId, $datasetId, $tableId, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets the specified table resource by table ID. This method does not return
     * the data in the table, it only returns the table resource, which describes
     * the structure of this table. (tables.get)
     *
     * @param string $projectId Project ID of the requested table
     * @param string $datasetId Dataset ID of the requested table
     * @param string $tableId Table ID of the requested table
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Table
     */
    public function get($projectId, $datasetId, $tableId, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Bigquery_Table");
    }

    /**
     * Creates a new, empty table in the dataset. (tables.insert)
     *
     * @param string $projectId Project ID of the new table
     * @param string $datasetId Dataset ID of the new table
     * @param Google_Table $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Table
     */
    public function insert($projectId, $datasetId, Google_Service_Bigquery_Table $postBody, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Bigquery_Table");
    }

    /**
     * Lists all tables in the specified dataset. (tables.listTables)
     *
     * @param string $projectId Project ID of the tables to list
     * @param string $datasetId Dataset ID of the tables to list
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Page token, returned by a previous call, to
     * request the next page of results
     * @opt_param string maxResults Maximum number of results to return
     * @return Google_Service_Bigquery_TableList
     */
    public function listTables($projectId, $datasetId, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Bigquery_TableList");
    }

    /**
     * Updates information in an existing table. The update method replaces the
     * entire table resource, whereas the patch method only replaces fields that are
     * provided in the submitted table resource. This method supports patch
     * semantics. (tables.patch)
     *
     * @param string $projectId Project ID of the table to update
     * @param string $datasetId Dataset ID of the table to update
     * @param string $tableId Table ID of the table to update
     * @param Google_Table $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Table
     */
    public function patch($projectId, $datasetId, $tableId, Google_Service_Bigquery_Table $postBody, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Bigquery_Table");
    }

    /**
     * Updates information in an existing table. The update method replaces the
     * entire table resource, whereas the patch method only replaces fields that are
     * provided in the submitted table resource. (tables.update)
     *
     * @param string $projectId Project ID of the table to update
     * @param string $datasetId Dataset ID of the table to update
     * @param string $tableId Table ID of the table to update
     * @param Google_Table $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Bigquery_Table
     */
    public function update($projectId, $datasetId, $tableId, Google_Service_Bigquery_Table $postBody, $optParams = [])
    {
        $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Bigquery_Table");
    }
}


class Google_Service_Bigquery_CsvOptions extends Google_Model
{
    public $allowJaggedRows;
    public $allowQuotedNewlines;
    public $encoding;
    public $fieldDelimiter;
    public $quote;
    public $skipLeadingRows;
    protected $internal_gapi_mappings = [];

    public function getAllowJaggedRows()
    {
        return $this->allowJaggedRows;
    }

    public function setAllowJaggedRows($allowJaggedRows)
    {
        $this->allowJaggedRows = $allowJaggedRows;
    }

    public function getAllowQuotedNewlines()
    {
        return $this->allowQuotedNewlines;
    }

    public function setAllowQuotedNewlines($allowQuotedNewlines)
    {
        $this->allowQuotedNewlines = $allowQuotedNewlines;
    }

    public function getEncoding()
    {
        return $this->encoding;
    }

    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
    }

    public function getFieldDelimiter()
    {
        return $this->fieldDelimiter;
    }

    public function setFieldDelimiter($fieldDelimiter)
    {
        $this->fieldDelimiter = $fieldDelimiter;
    }

    public function getQuote()
    {
        return $this->quote;
    }

    public function setQuote($quote)
    {
        $this->quote = $quote;
    }

    public function getSkipLeadingRows()
    {
        return $this->skipLeadingRows;
    }

    public function setSkipLeadingRows($skipLeadingRows)
    {
        $this->skipLeadingRows = $skipLeadingRows;
    }
}

class Google_Service_Bigquery_Dataset extends Google_Collection
{
    public $creationTime;
    public $defaultTableExpirationMs;
    public $description;
    public $etag;
    public $friendlyName;
    public $id;
    public $kind;
    public $lastModifiedTime;
    public $selfLink;
    protected $collection_key = 'access';
    protected $internal_gapi_mappings = [];
    protected $accessType = 'Google_Service_Bigquery_DatasetAccess';
    protected $accessDataType = 'array';
    protected $datasetReferenceType = 'Google_Service_Bigquery_DatasetReference';
    protected $datasetReferenceDataType = '';

    public function setAccess($access)
    {
        $this->access = $access;
    }

    public function getAccess()
    {
        return $this->access;
    }

    public function getCreationTime()
    {
        return $this->creationTime;
    }

    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }

    public function setDatasetReference(Google_Service_Bigquery_DatasetReference $datasetReference)
    {
        $this->datasetReference = $datasetReference;
    }

    public function getDatasetReference()
    {
        return $this->datasetReference;
    }

    public function getDefaultTableExpirationMs()
    {
        return $this->defaultTableExpirationMs;
    }

    public function setDefaultTableExpirationMs($defaultTableExpirationMs)
    {
        $this->defaultTableExpirationMs = $defaultTableExpirationMs;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getFriendlyName()
    {
        return $this->friendlyName;
    }

    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
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

    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }

    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->lastModifiedTime = $lastModifiedTime;
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

class Google_Service_Bigquery_DatasetAccess extends Google_Model
{
    public $domain;
    public $groupByEmail;
    public $role;
    public $specialGroup;
    public $userByEmail;
    protected $internal_gapi_mappings = [];
    protected $viewType = 'Google_Service_Bigquery_TableReference';
    protected $viewDataType = '';

    public function getDomain()
    {
        return $this->domain;
    }

    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    public function getGroupByEmail()
    {
        return $this->groupByEmail;
    }

    public function setGroupByEmail($groupByEmail)
    {
        $this->groupByEmail = $groupByEmail;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getSpecialGroup()
    {
        return $this->specialGroup;
    }

    public function setSpecialGroup($specialGroup)
    {
        $this->specialGroup = $specialGroup;
    }

    public function getUserByEmail()
    {
        return $this->userByEmail;
    }

    public function setUserByEmail($userByEmail)
    {
        $this->userByEmail = $userByEmail;
    }

    public function setView(Google_Service_Bigquery_TableReference $view)
    {
        $this->view = $view;
    }

    public function getView()
    {
        return $this->view;
    }
}

class Google_Service_Bigquery_DatasetList extends Google_Collection
{
    public $etag;
    public $kind;
    public $nextPageToken;
    protected $collection_key = 'datasets';
    protected $internal_gapi_mappings = [];
    protected $datasetsType = 'Google_Service_Bigquery_DatasetListDatasets';
    protected $datasetsDataType = 'array';

    public function setDatasets($datasets)
    {
        $this->datasets = $datasets;
    }

    public function getDatasets()
    {
        return $this->datasets;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
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

class Google_Service_Bigquery_DatasetListDatasets extends Google_Model
{
    public $friendlyName;
    public $id;
    public $kind;
    protected $internal_gapi_mappings = [];
    protected $datasetReferenceType = 'Google_Service_Bigquery_DatasetReference';
    protected $datasetReferenceDataType = '';

    public function setDatasetReference(Google_Service_Bigquery_DatasetReference $datasetReference)
    {
        $this->datasetReference = $datasetReference;
    }

    public function getDatasetReference()
    {
        return $this->datasetReference;
    }

    public function getFriendlyName()
    {
        return $this->friendlyName;
    }

    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
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
}

class Google_Service_Bigquery_DatasetReference extends Google_Model
{
    public $datasetId;
    public $projectId;
    protected $internal_gapi_mappings = [];

    public function getDatasetId()
    {
        return $this->datasetId;
    }

    public function setDatasetId($datasetId)
    {
        $this->datasetId = $datasetId;
    }

    public function getProjectId()
    {
        return $this->projectId;
    }

    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
}

class Google_Service_Bigquery_ErrorProto extends Google_Model
{
    public $debugInfo;
    public $location;
    public $message;
    public $reason;
    protected $internal_gapi_mappings = [];

    public function getDebugInfo()
    {
        return $this->debugInfo;
    }

    public function setDebugInfo($debugInfo)
    {
        $this->debugInfo = $debugInfo;
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

    public function getReason()
    {
        return $this->reason;
    }

    public function setReason($reason)
    {
        $this->reason = $reason;
    }
}

class Google_Service_Bigquery_ExternalDataConfiguration extends Google_Collection
{
    public $compression;
    public $ignoreUnknownValues;
    public $maxBadRecords;
    public $sourceFormat;
    public $sourceUris;
    protected $collection_key = 'sourceUris';
    protected $internal_gapi_mappings = [];
    protected $csvOptionsType = 'Google_Service_Bigquery_CsvOptions';
    protected $csvOptionsDataType = '';
    protected $schemaType = 'Google_Service_Bigquery_TableSchema';
    protected $schemaDataType = '';

    public function getCompression()
    {
        return $this->compression;
    }

    public function setCompression($compression)
    {
        $this->compression = $compression;
    }

    public function setCsvOptions(Google_Service_Bigquery_CsvOptions $csvOptions)
    {
        $this->csvOptions = $csvOptions;
    }

    public function getCsvOptions()
    {
        return $this->csvOptions;
    }

    public function getIgnoreUnknownValues()
    {
        return $this->ignoreUnknownValues;
    }

    public function setIgnoreUnknownValues($ignoreUnknownValues)
    {
        $this->ignoreUnknownValues = $ignoreUnknownValues;
    }

    public function getMaxBadRecords()
    {
        return $this->maxBadRecords;
    }

    public function setMaxBadRecords($maxBadRecords)
    {
        $this->maxBadRecords = $maxBadRecords;
    }

    public function setSchema(Google_Service_Bigquery_TableSchema $schema)
    {
        $this->schema = $schema;
    }

    public function getSchema()
    {
        return $this->schema;
    }

    public function getSourceFormat()
    {
        return $this->sourceFormat;
    }

    public function setSourceFormat($sourceFormat)
    {
        $this->sourceFormat = $sourceFormat;
    }

    public function getSourceUris()
    {
        return $this->sourceUris;
    }

    public function setSourceUris($sourceUris)
    {
        $this->sourceUris = $sourceUris;
    }
}

class Google_Service_Bigquery_GetQueryResultsResponse extends Google_Collection
{
    public $cacheHit;
    public $etag;
    public $jobComplete;
    public $kind;
    public $pageToken;
    public $totalBytesProcessed;
    public $totalRows;
    protected $collection_key = 'rows';
    protected $internal_gapi_mappings = [];
    protected $jobReferenceType = 'Google_Service_Bigquery_JobReference';
    protected $jobReferenceDataType = '';
    protected $rowsType = 'Google_Service_Bigquery_TableRow';
    protected $rowsDataType = 'array';
    protected $schemaType = 'Google_Service_Bigquery_TableSchema';
    protected $schemaDataType = '';

    public function getCacheHit()
    {
        return $this->cacheHit;
    }

    public function setCacheHit($cacheHit)
    {
        $this->cacheHit = $cacheHit;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getJobComplete()
    {
        return $this->jobComplete;
    }

    public function setJobComplete($jobComplete)
    {
        $this->jobComplete = $jobComplete;
    }

    public function setJobReference(Google_Service_Bigquery_JobReference $jobReference)
    {
        $this->jobReference = $jobReference;
    }

    public function getJobReference()
    {
        return $this->jobReference;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getPageToken()
    {
        return $this->pageToken;
    }

    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }

    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function setSchema(Google_Service_Bigquery_TableSchema $schema)
    {
        $this->schema = $schema;
    }

    public function getSchema()
    {
        return $this->schema;
    }

    public function getTotalBytesProcessed()
    {
        return $this->totalBytesProcessed;
    }

    public function setTotalBytesProcessed($totalBytesProcessed)
    {
        $this->totalBytesProcessed = $totalBytesProcessed;
    }

    public function getTotalRows()
    {
        return $this->totalRows;
    }

    public function setTotalRows($totalRows)
    {
        $this->totalRows = $totalRows;
    }
}

class Google_Service_Bigquery_Job extends Google_Model
{
    public $etag;
    public $id;
    public $kind;
    public $selfLink;
    public $userEmail;
    protected $internal_gapi_mappings = array(
        "userEmail" => "user_email",
    );
    protected $configurationType = 'Google_Service_Bigquery_JobConfiguration';
    protected $configurationDataType = '';
    protected $jobReferenceType = 'Google_Service_Bigquery_JobReference';
    protected $jobReferenceDataType = '';
    protected $statisticsType = 'Google_Service_Bigquery_JobStatistics';
    protected $statisticsDataType = '';
    protected $statusType = 'Google_Service_Bigquery_JobStatus';
    protected $statusDataType = '';

    public function setConfiguration(Google_Service_Bigquery_JobConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getConfiguration()
    {
        return $this->configuration;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setJobReference(Google_Service_Bigquery_JobReference $jobReference)
    {
        $this->jobReference = $jobReference;
    }

    public function getJobReference()
    {
        return $this->jobReference;
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

    public function setStatistics(Google_Service_Bigquery_JobStatistics $statistics)
    {
        $this->statistics = $statistics;
    }

    public function getStatistics()
    {
        return $this->statistics;
    }

    public function setStatus(Google_Service_Bigquery_JobStatus $status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getUserEmail()
    {
        return $this->userEmail;
    }

    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }
}

class Google_Service_Bigquery_JobConfiguration extends Google_Model
{
    public $dryRun;
    protected $internal_gapi_mappings = [];
    protected $copyType = 'Google_Service_Bigquery_JobConfigurationTableCopy';
    protected $copyDataType = '';
    protected $extractType = 'Google_Service_Bigquery_JobConfigurationExtract';
    protected $extractDataType = '';
    protected $linkType = 'Google_Service_Bigquery_JobConfigurationLink';
    protected $linkDataType = '';
    protected $loadType = 'Google_Service_Bigquery_JobConfigurationLoad';
    protected $loadDataType = '';
    protected $queryType = 'Google_Service_Bigquery_JobConfigurationQuery';
    protected $queryDataType = '';


    public function setCopy(Google_Service_Bigquery_JobConfigurationTableCopy $copy)
    {
        $this->copy = $copy;
    }

    public function getCopy()
    {
        return $this->copy;
    }

    public function getDryRun()
    {
        return $this->dryRun;
    }

    public function setDryRun($dryRun)
    {
        $this->dryRun = $dryRun;
    }

    public function setExtract(Google_Service_Bigquery_JobConfigurationExtract $extract)
    {
        $this->extract = $extract;
    }

    public function getExtract()
    {
        return $this->extract;
    }

    public function setLink(Google_Service_Bigquery_JobConfigurationLink $link)
    {
        $this->link = $link;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLoad(Google_Service_Bigquery_JobConfigurationLoad $load)
    {
        $this->load = $load;
    }

    public function getLoad()
    {
        return $this->load;
    }

    public function setQuery(Google_Service_Bigquery_JobConfigurationQuery $query)
    {
        $this->query = $query;
    }

    public function getQuery()
    {
        return $this->query;
    }
}

class Google_Service_Bigquery_JobConfigurationExtract extends Google_Collection
{
    public $compression;
    public $destinationFormat;
    public $destinationUri;
    public $destinationUris;
    public $fieldDelimiter;
    public $printHeader;
    protected $collection_key = 'destinationUris';
    protected $internal_gapi_mappings = [];
    protected $sourceTableType = 'Google_Service_Bigquery_TableReference';
    protected $sourceTableDataType = '';

    public function getCompression()
    {
        return $this->compression;
    }

    public function setCompression($compression)
    {
        $this->compression = $compression;
    }

    public function getDestinationFormat()
    {
        return $this->destinationFormat;
    }

    public function setDestinationFormat($destinationFormat)
    {
        $this->destinationFormat = $destinationFormat;
    }

    public function getDestinationUri()
    {
        return $this->destinationUri;
    }

    public function setDestinationUri($destinationUri)
    {
        $this->destinationUri = $destinationUri;
    }

    public function getDestinationUris()
    {
        return $this->destinationUris;
    }

    public function setDestinationUris($destinationUris)
    {
        $this->destinationUris = $destinationUris;
    }

    public function getFieldDelimiter()
    {
        return $this->fieldDelimiter;
    }

    public function setFieldDelimiter($fieldDelimiter)
    {
        $this->fieldDelimiter = $fieldDelimiter;
    }

    public function getPrintHeader()
    {
        return $this->printHeader;
    }

    public function setPrintHeader($printHeader)
    {
        $this->printHeader = $printHeader;
    }

    public function setSourceTable(Google_Service_Bigquery_TableReference $sourceTable)
    {
        $this->sourceTable = $sourceTable;
    }

    public function getSourceTable()
    {
        return $this->sourceTable;
    }
}

class Google_Service_Bigquery_JobConfigurationLink extends Google_Collection
{
    public $createDisposition;
    public $sourceUri;
    public $writeDisposition;
    protected $collection_key = 'sourceUri';
    protected $internal_gapi_mappings = [];
    protected $destinationTableType = 'Google_Service_Bigquery_TableReference';
    protected $destinationTableDataType = '';

    public function getCreateDisposition()
    {
        return $this->createDisposition;
    }

    public function setCreateDisposition($createDisposition)
    {
        $this->createDisposition = $createDisposition;
    }

    public function setDestinationTable(Google_Service_Bigquery_TableReference $destinationTable)
    {
        $this->destinationTable = $destinationTable;
    }

    public function getDestinationTable()
    {
        return $this->destinationTable;
    }

    public function getSourceUri()
    {
        return $this->sourceUri;
    }

    public function setSourceUri($sourceUri)
    {
        $this->sourceUri = $sourceUri;
    }

    public function getWriteDisposition()
    {
        return $this->writeDisposition;
    }

    public function setWriteDisposition($writeDisposition)
    {
        $this->writeDisposition = $writeDisposition;
    }
}

class Google_Service_Bigquery_JobConfigurationLoad extends Google_Collection
{
    public $allowJaggedRows;
    public $allowQuotedNewlines;
    public $createDisposition;
    public $encoding;
    public $fieldDelimiter;
    public $ignoreUnknownValues;
    public $maxBadRecords;
    public $projectionFields;
    public $quote;
    public $schemaInline;
    public $schemaInlineFormat;
    public $skipLeadingRows;
    public $sourceFormat;
    public $sourceUris;
    public $writeDisposition;
    protected $collection_key = 'sourceUris';
    protected $internal_gapi_mappings = [];
    protected $destinationTableType = 'Google_Service_Bigquery_TableReference';
    protected $destinationTableDataType = '';
    protected $schemaType = 'Google_Service_Bigquery_TableSchema';
    protected $schemaDataType = '';

    public function getAllowJaggedRows()
    {
        return $this->allowJaggedRows;
    }

    public function setAllowJaggedRows($allowJaggedRows)
    {
        $this->allowJaggedRows = $allowJaggedRows;
    }

    public function getAllowQuotedNewlines()
    {
        return $this->allowQuotedNewlines;
    }

    public function setAllowQuotedNewlines($allowQuotedNewlines)
    {
        $this->allowQuotedNewlines = $allowQuotedNewlines;
    }

    public function getCreateDisposition()
    {
        return $this->createDisposition;
    }

    public function setCreateDisposition($createDisposition)
    {
        $this->createDisposition = $createDisposition;
    }

    public function setDestinationTable(Google_Service_Bigquery_TableReference $destinationTable)
    {
        $this->destinationTable = $destinationTable;
    }

    public function getDestinationTable()
    {
        return $this->destinationTable;
    }

    public function getEncoding()
    {
        return $this->encoding;
    }

    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
    }

    public function getFieldDelimiter()
    {
        return $this->fieldDelimiter;
    }

    public function setFieldDelimiter($fieldDelimiter)
    {
        $this->fieldDelimiter = $fieldDelimiter;
    }

    public function getIgnoreUnknownValues()
    {
        return $this->ignoreUnknownValues;
    }

    public function setIgnoreUnknownValues($ignoreUnknownValues)
    {
        $this->ignoreUnknownValues = $ignoreUnknownValues;
    }

    public function getMaxBadRecords()
    {
        return $this->maxBadRecords;
    }

    public function setMaxBadRecords($maxBadRecords)
    {
        $this->maxBadRecords = $maxBadRecords;
    }

    public function getProjectionFields()
    {
        return $this->projectionFields;
    }

    public function setProjectionFields($projectionFields)
    {
        $this->projectionFields = $projectionFields;
    }

    public function getQuote()
    {
        return $this->quote;
    }

    public function setQuote($quote)
    {
        $this->quote = $quote;
    }

    public function setSchema(Google_Service_Bigquery_TableSchema $schema)
    {
        $this->schema = $schema;
    }

    public function getSchema()
    {
        return $this->schema;
    }

    public function getSchemaInline()
    {
        return $this->schemaInline;
    }

    public function setSchemaInline($schemaInline)
    {
        $this->schemaInline = $schemaInline;
    }

    public function getSchemaInlineFormat()
    {
        return $this->schemaInlineFormat;
    }

    public function setSchemaInlineFormat($schemaInlineFormat)
    {
        $this->schemaInlineFormat = $schemaInlineFormat;
    }

    public function getSkipLeadingRows()
    {
        return $this->skipLeadingRows;
    }

    public function setSkipLeadingRows($skipLeadingRows)
    {
        $this->skipLeadingRows = $skipLeadingRows;
    }

    public function getSourceFormat()
    {
        return $this->sourceFormat;
    }

    public function setSourceFormat($sourceFormat)
    {
        $this->sourceFormat = $sourceFormat;
    }

    public function getSourceUris()
    {
        return $this->sourceUris;
    }

    public function setSourceUris($sourceUris)
    {
        $this->sourceUris = $sourceUris;
    }

    public function getWriteDisposition()
    {
        return $this->writeDisposition;
    }

    public function setWriteDisposition($writeDisposition)
    {
        $this->writeDisposition = $writeDisposition;
    }
}

class Google_Service_Bigquery_JobConfigurationQuery extends Google_Model
{
    public $allowLargeResults;
    public $createDisposition;
    public $flattenResults;
    public $preserveNulls;
    public $priority;
    public $query;
    public $useQueryCache;
    public $writeDisposition;
    protected $internal_gapi_mappings = [];
    protected $defaultDatasetType = 'Google_Service_Bigquery_DatasetReference';
    protected $defaultDatasetDataType = '';
    protected $destinationTableType = 'Google_Service_Bigquery_TableReference';
    protected $destinationTableDataType = '';
    protected $tableDefinitionsType = 'Google_Service_Bigquery_ExternalDataConfiguration';
    protected $tableDefinitionsDataType = 'map';

    public function getAllowLargeResults()
    {
        return $this->allowLargeResults;
    }

    public function setAllowLargeResults($allowLargeResults)
    {
        $this->allowLargeResults = $allowLargeResults;
    }

    public function getCreateDisposition()
    {
        return $this->createDisposition;
    }

    public function setCreateDisposition($createDisposition)
    {
        $this->createDisposition = $createDisposition;
    }

    public function setDefaultDataset(Google_Service_Bigquery_DatasetReference $defaultDataset)
    {
        $this->defaultDataset = $defaultDataset;
    }

    public function getDefaultDataset()
    {
        return $this->defaultDataset;
    }

    public function setDestinationTable(Google_Service_Bigquery_TableReference $destinationTable)
    {
        $this->destinationTable = $destinationTable;
    }

    public function getDestinationTable()
    {
        return $this->destinationTable;
    }

    public function getFlattenResults()
    {
        return $this->flattenResults;
    }

    public function setFlattenResults($flattenResults)
    {
        $this->flattenResults = $flattenResults;
    }

    public function getPreserveNulls()
    {
        return $this->preserveNulls;
    }

    public function setPreserveNulls($preserveNulls)
    {
        $this->preserveNulls = $preserveNulls;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    public function getQuery()
    {
        return $this->query;
    }

    public function setQuery($query)
    {
        $this->query = $query;
    }

    public function setTableDefinitions($tableDefinitions)
    {
        $this->tableDefinitions = $tableDefinitions;
    }

    public function getTableDefinitions()
    {
        return $this->tableDefinitions;
    }

    public function getUseQueryCache()
    {
        return $this->useQueryCache;
    }

    public function setUseQueryCache($useQueryCache)
    {
        $this->useQueryCache = $useQueryCache;
    }

    public function getWriteDisposition()
    {
        return $this->writeDisposition;
    }

    public function setWriteDisposition($writeDisposition)
    {
        $this->writeDisposition = $writeDisposition;
    }
}

class Google_Service_Bigquery_JobConfigurationQueryTableDefinitions extends Google_Model
{
}

class Google_Service_Bigquery_JobConfigurationTableCopy extends Google_Collection
{
    public $createDisposition;
    public $writeDisposition;
    protected $collection_key = 'sourceTables';
    protected $internal_gapi_mappings = [];
    protected $destinationTableType = 'Google_Service_Bigquery_TableReference';
    protected $destinationTableDataType = '';
    protected $sourceTableType = 'Google_Service_Bigquery_TableReference';
    protected $sourceTableDataType = '';
    protected $sourceTablesType = 'Google_Service_Bigquery_TableReference';
    protected $sourceTablesDataType = 'array';

    public function getCreateDisposition()
    {
        return $this->createDisposition;
    }

    public function setCreateDisposition($createDisposition)
    {
        $this->createDisposition = $createDisposition;
    }

    public function setDestinationTable(Google_Service_Bigquery_TableReference $destinationTable)
    {
        $this->destinationTable = $destinationTable;
    }

    public function getDestinationTable()
    {
        return $this->destinationTable;
    }

    public function setSourceTable(Google_Service_Bigquery_TableReference $sourceTable)
    {
        $this->sourceTable = $sourceTable;
    }

    public function getSourceTable()
    {
        return $this->sourceTable;
    }

    public function setSourceTables($sourceTables)
    {
        $this->sourceTables = $sourceTables;
    }

    public function getSourceTables()
    {
        return $this->sourceTables;
    }

    public function getWriteDisposition()
    {
        return $this->writeDisposition;
    }

    public function setWriteDisposition($writeDisposition)
    {
        $this->writeDisposition = $writeDisposition;
    }
}

class Google_Service_Bigquery_JobList extends Google_Collection
{
    public $etag;
    public $kind;
    public $nextPageToken;
    public $totalItems;
    protected $collection_key = 'jobs';
    protected $internal_gapi_mappings = [];
    protected $jobsType = 'Google_Service_Bigquery_JobListJobs';
    protected $jobsDataType = 'array';

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function setJobs($jobs)
    {
        $this->jobs = $jobs;
    }

    public function getJobs()
    {
        return $this->jobs;
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

    public function getTotalItems()
    {
        return $this->totalItems;
    }

    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
}

class Google_Service_Bigquery_JobListJobs extends Google_Model
{
    public $id;
    public $kind;
    public $state;
    public $userEmail;
    protected $internal_gapi_mappings = array(
        "userEmail" => "user_email",
    );
    protected $configurationType = 'Google_Service_Bigquery_JobConfiguration';
    protected $configurationDataType = '';
    protected $errorResultType = 'Google_Service_Bigquery_ErrorProto';
    protected $errorResultDataType = '';
    protected $jobReferenceType = 'Google_Service_Bigquery_JobReference';
    protected $jobReferenceDataType = '';
    protected $statisticsType = 'Google_Service_Bigquery_JobStatistics';
    protected $statisticsDataType = '';
    protected $statusType = 'Google_Service_Bigquery_JobStatus';
    protected $statusDataType = '';

    public function setConfiguration(Google_Service_Bigquery_JobConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getConfiguration()
    {
        return $this->configuration;
    }

    public function setErrorResult(Google_Service_Bigquery_ErrorProto $errorResult)
    {
        $this->errorResult = $errorResult;
    }

    public function getErrorResult()
    {
        return $this->errorResult;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setJobReference(Google_Service_Bigquery_JobReference $jobReference)
    {
        $this->jobReference = $jobReference;
    }

    public function getJobReference()
    {
        return $this->jobReference;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function setStatistics(Google_Service_Bigquery_JobStatistics $statistics)
    {
        $this->statistics = $statistics;
    }

    public function getStatistics()
    {
        return $this->statistics;
    }

    public function setStatus(Google_Service_Bigquery_JobStatus $status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getUserEmail()
    {
        return $this->userEmail;
    }

    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }
}

class Google_Service_Bigquery_JobReference extends Google_Model
{
    public $jobId;
    public $projectId;
    protected $internal_gapi_mappings = [];

    public function getJobId()
    {
        return $this->jobId;
    }

    public function setJobId($jobId)
    {
        $this->jobId = $jobId;
    }

    public function getProjectId()
    {
        return $this->projectId;
    }

    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
}

class Google_Service_Bigquery_JobStatistics extends Google_Model
{
    public $creationTime;
    public $endTime;
    public $startTime;
    public $totalBytesProcessed;
    protected $internal_gapi_mappings = [];
    protected $extractType = 'Google_Service_Bigquery_JobStatistics4';
    protected $extractDataType = '';
    protected $loadType = 'Google_Service_Bigquery_JobStatistics3';
    protected $loadDataType = '';
    protected $queryType = 'Google_Service_Bigquery_JobStatistics2';
    protected $queryDataType = '';

    public function getCreationTime()
    {
        return $this->creationTime;
    }

    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    public function setExtract(Google_Service_Bigquery_JobStatistics4 $extract)
    {
        $this->extract = $extract;
    }

    public function getExtract()
    {
        return $this->extract;
    }

    public function setLoad(Google_Service_Bigquery_JobStatistics3 $load)
    {
        $this->load = $load;
    }

    public function getLoad()
    {
        return $this->load;
    }

    public function setQuery(Google_Service_Bigquery_JobStatistics2 $query)
    {
        $this->query = $query;
    }

    public function getQuery()
    {
        return $this->query;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    public function getTotalBytesProcessed()
    {
        return $this->totalBytesProcessed;
    }

    public function setTotalBytesProcessed($totalBytesProcessed)
    {
        $this->totalBytesProcessed = $totalBytesProcessed;
    }
}

class Google_Service_Bigquery_JobStatistics2 extends Google_Model
{
    public $cacheHit;
    public $totalBytesProcessed;
    protected $internal_gapi_mappings = [];

    public function getCacheHit()
    {
        return $this->cacheHit;
    }

    public function setCacheHit($cacheHit)
    {
        $this->cacheHit = $cacheHit;
    }

    public function getTotalBytesProcessed()
    {
        return $this->totalBytesProcessed;
    }

    public function setTotalBytesProcessed($totalBytesProcessed)
    {
        $this->totalBytesProcessed = $totalBytesProcessed;
    }
}

class Google_Service_Bigquery_JobStatistics3 extends Google_Model
{
    public $inputFileBytes;
    public $inputFiles;
    public $outputBytes;
    public $outputRows;
    protected $internal_gapi_mappings = [];

    public function getInputFileBytes()
    {
        return $this->inputFileBytes;
    }

    public function setInputFileBytes($inputFileBytes)
    {
        $this->inputFileBytes = $inputFileBytes;
    }

    public function getInputFiles()
    {
        return $this->inputFiles;
    }

    public function setInputFiles($inputFiles)
    {
        $this->inputFiles = $inputFiles;
    }

    public function getOutputBytes()
    {
        return $this->outputBytes;
    }

    public function setOutputBytes($outputBytes)
    {
        $this->outputBytes = $outputBytes;
    }

    public function getOutputRows()
    {
        return $this->outputRows;
    }

    public function setOutputRows($outputRows)
    {
        $this->outputRows = $outputRows;
    }
}

class Google_Service_Bigquery_JobStatistics4 extends Google_Collection
{
    public $destinationUriFileCounts;
    protected $collection_key = 'destinationUriFileCounts';
    protected $internal_gapi_mappings = [];

    public function getDestinationUriFileCounts()
    {
        return $this->destinationUriFileCounts;
    }

    public function setDestinationUriFileCounts($destinationUriFileCounts)
    {
        $this->destinationUriFileCounts = $destinationUriFileCounts;
    }
}

class Google_Service_Bigquery_JobStatus extends Google_Collection
{
    public $state;
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = [];
    protected $errorResultType = 'Google_Service_Bigquery_ErrorProto';
    protected $errorResultDataType = '';
    protected $errorsType = 'Google_Service_Bigquery_ErrorProto';
    protected $errorsDataType = 'array';

    public function setErrorResult(Google_Service_Bigquery_ErrorProto $errorResult)
    {
        $this->errorResult = $errorResult;
    }

    public function getErrorResult()
    {
        return $this->errorResult;
    }

    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
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

class Google_Service_Bigquery_JsonObject extends Google_Model
{
}

class Google_Service_Bigquery_ProjectList extends Google_Collection
{
    public $etag;
    public $kind;
    public $nextPageToken;
    public $totalItems;
    protected $collection_key = 'projects';
    protected $internal_gapi_mappings = [];
    protected $projectsType = 'Google_Service_Bigquery_ProjectListProjects';
    protected $projectsDataType = 'array';

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
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

    public function setProjects($projects)
    {
        $this->projects = $projects;
    }

    public function getProjects()
    {
        return $this->projects;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }

    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
}

class Google_Service_Bigquery_ProjectListProjects extends Google_Model
{
    public $friendlyName;
    public $id;
    public $kind;
    public $numericId;
    protected $internal_gapi_mappings = [];
    protected $projectReferenceType = 'Google_Service_Bigquery_ProjectReference';
    protected $projectReferenceDataType = '';

    public function getFriendlyName()
    {
        return $this->friendlyName;
    }

    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
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

    public function getNumericId()
    {
        return $this->numericId;
    }

    public function setNumericId($numericId)
    {
        $this->numericId = $numericId;
    }

    public function setProjectReference(Google_Service_Bigquery_ProjectReference $projectReference)
    {
        $this->projectReference = $projectReference;
    }

    public function getProjectReference()
    {
        return $this->projectReference;
    }
}

class Google_Service_Bigquery_ProjectReference extends Google_Model
{
    public $projectId;
    protected $internal_gapi_mappings = [];

    public function getProjectId()
    {
        return $this->projectId;
    }

    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
}

class Google_Service_Bigquery_QueryRequest extends Google_Model
{
    public $dryRun;
    public $kind;
    public $maxResults;
    public $preserveNulls;
    public $query;
    public $timeoutMs;
    public $useQueryCache;
    protected $internal_gapi_mappings = [];
    protected $defaultDatasetType = 'Google_Service_Bigquery_DatasetReference';
    protected $defaultDatasetDataType = '';

    public function setDefaultDataset(Google_Service_Bigquery_DatasetReference $defaultDataset)
    {
        $this->defaultDataset = $defaultDataset;
    }

    public function getDefaultDataset()
    {
        return $this->defaultDataset;
    }

    public function getDryRun()
    {
        return $this->dryRun;
    }

    public function setDryRun($dryRun)
    {
        $this->dryRun = $dryRun;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getMaxResults()
    {
        return $this->maxResults;
    }

    public function setMaxResults($maxResults)
    {
        $this->maxResults = $maxResults;
    }

    public function getPreserveNulls()
    {
        return $this->preserveNulls;
    }

    public function setPreserveNulls($preserveNulls)
    {
        $this->preserveNulls = $preserveNulls;
    }

    public function getQuery()
    {
        return $this->query;
    }

    public function setQuery($query)
    {
        $this->query = $query;
    }

    public function getTimeoutMs()
    {
        return $this->timeoutMs;
    }

    public function setTimeoutMs($timeoutMs)
    {
        $this->timeoutMs = $timeoutMs;
    }

    public function getUseQueryCache()
    {
        return $this->useQueryCache;
    }

    public function setUseQueryCache($useQueryCache)
    {
        $this->useQueryCache = $useQueryCache;
    }
}

class Google_Service_Bigquery_QueryResponse extends Google_Collection
{
    public $cacheHit;
    public $jobComplete;
    public $kind;
    public $pageToken;
    public $totalBytesProcessed;
    public $totalRows;
    protected $collection_key = 'rows';
    protected $internal_gapi_mappings = [];
    protected $jobReferenceType = 'Google_Service_Bigquery_JobReference';
    protected $jobReferenceDataType = '';
    protected $rowsType = 'Google_Service_Bigquery_TableRow';
    protected $rowsDataType = 'array';
    protected $schemaType = 'Google_Service_Bigquery_TableSchema';
    protected $schemaDataType = '';

    public function getCacheHit()
    {
        return $this->cacheHit;
    }

    public function setCacheHit($cacheHit)
    {
        $this->cacheHit = $cacheHit;
    }

    public function getJobComplete()
    {
        return $this->jobComplete;
    }

    public function setJobComplete($jobComplete)
    {
        $this->jobComplete = $jobComplete;
    }

    public function setJobReference(Google_Service_Bigquery_JobReference $jobReference)
    {
        $this->jobReference = $jobReference;
    }

    public function getJobReference()
    {
        return $this->jobReference;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getPageToken()
    {
        return $this->pageToken;
    }

    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }

    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function setSchema(Google_Service_Bigquery_TableSchema $schema)
    {
        $this->schema = $schema;
    }

    public function getSchema()
    {
        return $this->schema;
    }

    public function getTotalBytesProcessed()
    {
        return $this->totalBytesProcessed;
    }

    public function setTotalBytesProcessed($totalBytesProcessed)
    {
        $this->totalBytesProcessed = $totalBytesProcessed;
    }

    public function getTotalRows()
    {
        return $this->totalRows;
    }

    public function setTotalRows($totalRows)
    {
        $this->totalRows = $totalRows;
    }
}

class Google_Service_Bigquery_Table extends Google_Model
{
    public $creationTime;
    public $description;
    public $etag;
    public $expirationTime;
    public $friendlyName;
    public $id;
    public $kind;
    public $lastModifiedTime;
    public $numBytes;
    public $numRows;
    public $selfLink;
    public $type;
    protected $internal_gapi_mappings = [];
    protected $schemaType = 'Google_Service_Bigquery_TableSchema';
    protected $schemaDataType = '';
    protected $tableReferenceType = 'Google_Service_Bigquery_TableReference';
    protected $tableReferenceDataType = '';
    protected $viewType = 'Google_Service_Bigquery_ViewDefinition';
    protected $viewDataType = '';

    public function getCreationTime()
    {
        return $this->creationTime;
    }

    public function setCreationTime($creationTime)
    {
        $this->creationTime = $creationTime;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getExpirationTime()
    {
        return $this->expirationTime;
    }

    public function setExpirationTime($expirationTime)
    {
        $this->expirationTime = $expirationTime;
    }

    public function getFriendlyName()
    {
        return $this->friendlyName;
    }

    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
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

    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }

    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->lastModifiedTime = $lastModifiedTime;
    }

    public function getNumBytes()
    {
        return $this->numBytes;
    }

    public function setNumBytes($numBytes)
    {
        $this->numBytes = $numBytes;
    }

    public function getNumRows()
    {
        return $this->numRows;
    }

    public function setNumRows($numRows)
    {
        $this->numRows = $numRows;
    }

    public function setSchema(Google_Service_Bigquery_TableSchema $schema)
    {
        $this->schema = $schema;
    }

    public function getSchema()
    {
        return $this->schema;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function setTableReference(Google_Service_Bigquery_TableReference $tableReference)
    {
        $this->tableReference = $tableReference;
    }

    public function getTableReference()
    {
        return $this->tableReference;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setView(Google_Service_Bigquery_ViewDefinition $view)
    {
        $this->view = $view;
    }

    public function getView()
    {
        return $this->view;
    }
}

class Google_Service_Bigquery_TableCell extends Google_Model
{
    public $v;
    protected $internal_gapi_mappings = [];

    public function getV()
    {
        return $this->v;
    }

    public function setV($v)
    {
        $this->v = $v;
    }
}

class Google_Service_Bigquery_TableDataInsertAllRequest extends Google_Collection
{
    public $ignoreUnknownValues;
    public $kind;
    public $skipInvalidRows;
    protected $collection_key = 'rows';
    protected $internal_gapi_mappings = [];
    protected $rowsType = 'Google_Service_Bigquery_TableDataInsertAllRequestRows';
    protected $rowsDataType = 'array';

    public function getIgnoreUnknownValues()
    {
        return $this->ignoreUnknownValues;
    }

    public function setIgnoreUnknownValues($ignoreUnknownValues)
    {
        $this->ignoreUnknownValues = $ignoreUnknownValues;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function getSkipInvalidRows()
    {
        return $this->skipInvalidRows;
    }

    public function setSkipInvalidRows($skipInvalidRows)
    {
        $this->skipInvalidRows = $skipInvalidRows;
    }
}

class Google_Service_Bigquery_TableDataInsertAllRequestRows extends Google_Model
{
    public $insertId;
    public $json;
    protected $internal_gapi_mappings = [];

    public function getInsertId()
    {
        return $this->insertId;
    }

    public function setInsertId($insertId)
    {
        $this->insertId = $insertId;
    }

    public function getJson()
    {
        return $this->json;
    }

    public function setJson($json)
    {
        $this->json = $json;
    }
}

class Google_Service_Bigquery_TableDataInsertAllResponse extends Google_Collection
{
    public $kind;
    protected $collection_key = 'insertErrors';
    protected $internal_gapi_mappings = [];
    protected $insertErrorsType = 'Google_Service_Bigquery_TableDataInsertAllResponseInsertErrors';
    protected $insertErrorsDataType = 'array';

    public function setInsertErrors($insertErrors)
    {
        $this->insertErrors = $insertErrors;
    }

    public function getInsertErrors()
    {
        return $this->insertErrors;
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

class Google_Service_Bigquery_TableDataInsertAllResponseInsertErrors extends Google_Collection
{
    public $index;
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = [];
    protected $errorsType = 'Google_Service_Bigquery_ErrorProto';
    protected $errorsDataType = 'array';

    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
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

class Google_Service_Bigquery_TableDataList extends Google_Collection
{
    public $etag;
    public $kind;
    public $pageToken;
    public $totalRows;
    protected $collection_key = 'rows';
    protected $internal_gapi_mappings = [];
    protected $rowsType = 'Google_Service_Bigquery_TableRow';
    protected $rowsDataType = 'array';

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getPageToken()
    {
        return $this->pageToken;
    }

    public function setPageToken($pageToken)
    {
        $this->pageToken = $pageToken;
    }

    public function setRows($rows)
    {
        $this->rows = $rows;
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function getTotalRows()
    {
        return $this->totalRows;
    }

    public function setTotalRows($totalRows)
    {
        $this->totalRows = $totalRows;
    }
}

class Google_Service_Bigquery_TableFieldSchema extends Google_Collection
{
    public $description;
    public $mode;
    public $name;
    public $type;
    protected $collection_key = 'fields';
    protected $internal_gapi_mappings = [];
    protected $fieldsType = 'Google_Service_Bigquery_TableFieldSchema';
    protected $fieldsDataType = 'array';

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function getMode()
    {
        return $this->mode;
    }

    public function setMode($mode)
    {
        $this->mode = $mode;
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

class Google_Service_Bigquery_TableList extends Google_Collection
{
    public $etag;
    public $kind;
    public $nextPageToken;
    public $totalItems;
    protected $collection_key = 'tables';
    protected $internal_gapi_mappings = [];
    protected $tablesType = 'Google_Service_Bigquery_TableListTables';
    protected $tablesDataType = 'array';

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
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

    public function setTables($tables)
    {
        $this->tables = $tables;
    }

    public function getTables()
    {
        return $this->tables;
    }

    public function getTotalItems()
    {
        return $this->totalItems;
    }

    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
}

class Google_Service_Bigquery_TableListTables extends Google_Model
{
    public $friendlyName;
    public $id;
    public $kind;
    public $type;
    protected $internal_gapi_mappings = [];
    protected $tableReferenceType = 'Google_Service_Bigquery_TableReference';
    protected $tableReferenceDataType = '';

    public function getFriendlyName()
    {
        return $this->friendlyName;
    }

    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
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

    public function setTableReference(Google_Service_Bigquery_TableReference $tableReference)
    {
        $this->tableReference = $tableReference;
    }

    public function getTableReference()
    {
        return $this->tableReference;
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

class Google_Service_Bigquery_TableReference extends Google_Model
{
    public $datasetId;
    public $projectId;
    public $tableId;
    protected $internal_gapi_mappings = [];

    public function getDatasetId()
    {
        return $this->datasetId;
    }

    public function setDatasetId($datasetId)
    {
        $this->datasetId = $datasetId;
    }

    public function getProjectId()
    {
        return $this->projectId;
    }

    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }

    public function getTableId()
    {
        return $this->tableId;
    }

    public function setTableId($tableId)
    {
        $this->tableId = $tableId;
    }
}

class Google_Service_Bigquery_TableRow extends Google_Collection
{
    protected $collection_key = 'f';
    protected $internal_gapi_mappings = [];
    protected $fType = 'Google_Service_Bigquery_TableCell';
    protected $fDataType = 'array';


    public function setF($f)
    {
        $this->f = $f;
    }

    public function getF()
    {
        return $this->f;
    }
}

class Google_Service_Bigquery_TableSchema extends Google_Collection
{
    protected $collection_key = 'fields';
    protected $internal_gapi_mappings = [];
    protected $fieldsType = 'Google_Service_Bigquery_TableFieldSchema';
    protected $fieldsDataType = 'array';


    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }
}

class Google_Service_Bigquery_ViewDefinition extends Google_Model
{
    public $query;
    protected $internal_gapi_mappings = [];

    public function getQuery()
    {
        return $this->query;
    }

    public function setQuery($query)
    {
        $this->query = $query;
    }
}
