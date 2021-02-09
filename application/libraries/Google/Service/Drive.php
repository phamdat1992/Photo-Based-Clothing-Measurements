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
 * Service definition for Drive (v2).
 *
 * <p>
 * The API to interact with Drive.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/drive/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Drive extends Google_Service
{
    /** View and manage the files in your Google Drive. */
    const DRIVE =
        "https://www.googleapis.com/auth/drive";
    /** View and manage its own configuration data in your Google Drive. */
    const DRIVE_APPDATA =
        "https://www.googleapis.com/auth/drive.appdata";
    /** View your Google Drive apps. */
    const DRIVE_APPS_READONLY =
        "https://www.googleapis.com/auth/drive.apps.readonly";
    /** View and manage Google Drive files that you have opened or created with this app. */
    const DRIVE_FILE =
        "https://www.googleapis.com/auth/drive.file";
    /** View metadata for files in your Google Drive. */
    const DRIVE_METADATA_READONLY =
        "https://www.googleapis.com/auth/drive.metadata.readonly";
    /** View the files in your Google Drive. */
    const DRIVE_READONLY =
        "https://www.googleapis.com/auth/drive.readonly";
    /** Modify your Google Apps Script scripts' behavior. */
    const DRIVE_SCRIPTS =
        "https://www.googleapis.com/auth/drive.scripts";

    public $about;
    public $apps;
    public $changes;
    public $channels;
    public $children;
    public $comments;
    public $files;
    public $parents;
    public $permissions;
    public $properties;
    public $realtime;
    public $replies;
    public $revisions;


    /**
     * Constructs the internal representation of the Drive service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = 'drive/v2/';
        $this->version = 'v2';
        $this->serviceName = 'drive';

        $this->about = new Google_Service_Drive_About_Resource(
            $this,
            $this->serviceName,
            'about',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'about',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'includeSubscribed' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'maxChangeIdCount' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'startChangeId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->apps = new Google_Service_Drive_Apps_Resource(
            $this,
            $this->serviceName,
            'apps',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'apps/{appId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'appId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'apps',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'languageCode' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'appFilterExtensions' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'appFilterMimeTypes' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->changes = new Google_Service_Drive_Changes_Resource(
            $this,
            $this->serviceName,
            'changes',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'changes/{changeId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'changeId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'changes',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'includeSubscribed' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'startChangeId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'includeDeleted' => array(
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
                    ), 'watch' => array(
                        'path' => 'changes/watch',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'includeSubscribed' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'startChangeId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'includeDeleted' => array(
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
                    ),
                )
            )
        );
        $this->channels = new Google_Service_Drive_Channels_Resource(
            $this,
            $this->serviceName,
            'channels',
            array(
                'methods' => array(
                    'stop' => array(
                        'path' => 'channels/stop',
                        'httpMethod' => 'POST',
                        'parameters' => [],
                    ),
                )
            )
        );
        $this->children = new Google_Service_Drive_Children_Resource(
            $this,
            $this->serviceName,
            'children',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'files/{folderId}/children/{childId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'folderId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'childId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'files/{folderId}/children/{childId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'folderId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'childId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'files/{folderId}/children',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'folderId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'files/{folderId}/children',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'folderId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'q' => array(
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
        $this->comments = new Google_Service_Drive_Comments_Resource(
            $this,
            $this->serviceName,
            'comments',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'files/{fileId}/comments/{commentId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'commentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'files/{fileId}/comments/{commentId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'commentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'includeDeleted' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'files/{fileId}/comments',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'files/{fileId}/comments',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'updatedMin' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'includeDeleted' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ), 'patch' => array(
                        'path' => 'files/{fileId}/comments/{commentId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'commentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'files/{fileId}/comments/{commentId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'commentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->files = new Google_Service_Drive_Files_Resource(
            $this,
            $this->serviceName,
            'files',
            array(
                'methods' => array(
                    'copy' => array(
                        'path' => 'files/{fileId}/copy',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'convert' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'ocrLanguage' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'visibility' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pinned' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'ocr' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'timedTextTrackName' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'timedTextLanguage' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ), 'delete' => array(
                        'path' => 'files/{fileId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'emptyTrash' => array(
                        'path' => 'files/trash',
                        'httpMethod' => 'DELETE',
                        'parameters' => [],
                    ), 'get' => array(
                        'path' => 'files/{fileId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'projection' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'revisionId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'acknowledgeAbuse' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'updateViewedDate' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'files',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'convert' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'useContentAsIndexableText' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'ocrLanguage' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'visibility' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pinned' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'ocr' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'timedTextTrackName' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'timedTextLanguage' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'files',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'q' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'corpus' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'projection' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ), 'patch' => array(
                        'path' => 'files/{fileId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'addParents' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'updateViewedDate' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'removeParents' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'setModifiedDate' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'convert' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'useContentAsIndexableText' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'ocrLanguage' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pinned' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'newRevision' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'ocr' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'timedTextLanguage' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'timedTextTrackName' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ), 'touch' => array(
                        'path' => 'files/{fileId}/touch',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'trash' => array(
                        'path' => 'files/{fileId}/trash',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'untrash' => array(
                        'path' => 'files/{fileId}/untrash',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'files/{fileId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'addParents' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'updateViewedDate' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'removeParents' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'setModifiedDate' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'convert' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'useContentAsIndexableText' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'ocrLanguage' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pinned' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'newRevision' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'ocr' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'timedTextLanguage' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'timedTextTrackName' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ), 'watch' => array(
                        'path' => 'files/{fileId}/watch',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'projection' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'revisionId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'acknowledgeAbuse' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'updateViewedDate' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->parents = new Google_Service_Drive_Parents_Resource(
            $this,
            $this->serviceName,
            'parents',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'files/{fileId}/parents/{parentId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'parentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'files/{fileId}/parents/{parentId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'parentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'files/{fileId}/parents',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'files/{fileId}/parents',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->permissions = new Google_Service_Drive_Permissions_Resource(
            $this,
            $this->serviceName,
            'permissions',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'files/{fileId}/permissions/{permissionId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'permissionId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'files/{fileId}/permissions/{permissionId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'permissionId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'getIdForEmail' => array(
                        'path' => 'permissionIds/{email}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'email' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'files/{fileId}/permissions',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'emailMessage' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'sendNotificationEmails' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'files/{fileId}/permissions',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'patch' => array(
                        'path' => 'files/{fileId}/permissions/{permissionId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'permissionId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'transferOwnership' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'files/{fileId}/permissions/{permissionId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'permissionId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'transferOwnership' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->properties = new Google_Service_Drive_Properties_Resource(
            $this,
            $this->serviceName,
            'properties',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'files/{fileId}/properties/{propertyKey}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'propertyKey' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'visibility' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'files/{fileId}/properties/{propertyKey}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'propertyKey' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'visibility' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'files/{fileId}/properties',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'files/{fileId}/properties',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'patch' => array(
                        'path' => 'files/{fileId}/properties/{propertyKey}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'propertyKey' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'visibility' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'files/{fileId}/properties/{propertyKey}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'propertyKey' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'visibility' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->realtime = new Google_Service_Drive_Realtime_Resource(
            $this,
            $this->serviceName,
            'realtime',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'files/{fileId}/realtime',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'revision' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'files/{fileId}/realtime',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'baseRevision' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->replies = new Google_Service_Drive_Replies_Resource(
            $this,
            $this->serviceName,
            'replies',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'files/{fileId}/comments/{commentId}/replies/{replyId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'commentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'replyId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'files/{fileId}/comments/{commentId}/replies/{replyId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'commentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'replyId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'includeDeleted' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'files/{fileId}/comments/{commentId}/replies',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'commentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'files/{fileId}/comments/{commentId}/replies',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'commentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'includeDeleted' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ), 'patch' => array(
                        'path' => 'files/{fileId}/comments/{commentId}/replies/{replyId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'commentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'replyId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'files/{fileId}/comments/{commentId}/replies/{replyId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'commentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'replyId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->revisions = new Google_Service_Drive_Revisions_Resource(
            $this,
            $this->serviceName,
            'revisions',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'files/{fileId}/revisions/{revisionId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'revisionId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'files/{fileId}/revisions/{revisionId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'revisionId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'files/{fileId}/revisions',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'patch' => array(
                        'path' => 'files/{fileId}/revisions/{revisionId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'revisionId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'files/{fileId}/revisions/{revisionId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'fileId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'revisionId' => array(
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
 * The "about" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $about = $driveService->about;
 *  </code>
 */
class Google_Service_Drive_About_Resource extends Google_Service_Resource
{

    /**
     * Gets the information about the current user along with Drive API settings
     * (about.get)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeSubscribed When calculating the number of remaining
     * change IDs, whether to include public files the user has opened and shared
     * files. When set to false, this counts only change IDs for owned files and any
     * shared or public files that the user has explicitly added to a folder they
     * own.
     * @opt_param string maxChangeIdCount Maximum number of remaining change IDs to
     * count
     * @opt_param string startChangeId Change ID to start counting from when
     * calculating number of remaining change IDs
     * @return Google_Service_Drive_About
     */
    public function get($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_About");
    }
}

/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $apps = $driveService->apps;
 *  </code>
 */
class Google_Service_Drive_Apps_Resource extends Google_Service_Resource
{

    /**
     * Gets a specific app. (apps.get)
     *
     * @param string $appId The ID of the app.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_App
     */
    public function get($appId, $optParams = [])
    {
        $params = array('appId' => $appId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_App");
    }

    /**
     * Lists a user's installed apps. (apps.listApps)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string languageCode A language or locale code, as defined by BCP
     * 47, with some extensions from Unicode's LDML format
     * (http://www.unicode.org/reports/tr35/).
     * @opt_param string appFilterExtensions A comma-separated list of file
     * extensions for open with filtering. All apps within the given app query scope
     * which can open any of the given file extensions will be included in the
     * response. If appFilterMimeTypes are provided as well, the result is a union
     * of the two resulting app lists.
     * @opt_param string appFilterMimeTypes A comma-separated list of MIME types for
     * open with filtering. All apps within the given app query scope which can open
     * any of the given MIME types will be included in the response. If
     * appFilterExtensions are provided as well, the result is a union of the two
     * resulting app lists.
     * @return Google_Service_Drive_AppList
     */
    public function listApps($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_AppList");
    }
}

/**
 * The "changes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $changes = $driveService->changes;
 *  </code>
 */
class Google_Service_Drive_Changes_Resource extends Google_Service_Resource
{

    /**
     * Gets a specific change. (changes.get)
     *
     * @param string $changeId The ID of the change.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_Change
     */
    public function get($changeId, $optParams = [])
    {
        $params = array('changeId' => $changeId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_Change");
    }

    /**
     * Lists the changes for a user. (changes.listChanges)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeSubscribed Whether to include public files the user
     * has opened and shared files. When set to false, the list only includes owned
     * files plus any shared or public files the user has explicitly added to a
     * folder they own.
     * @opt_param string startChangeId Change ID to start listing changes from.
     * @opt_param bool includeDeleted Whether to include deleted items.
     * @opt_param int maxResults Maximum number of changes to return.
     * @opt_param string pageToken Page token for changes.
     * @return Google_Service_Drive_ChangeList
     */
    public function listChanges($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_ChangeList");
    }

    /**
     * Subscribe to changes for a user. (changes.watch)
     *
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeSubscribed Whether to include public files the user
     * has opened and shared files. When set to false, the list only includes owned
     * files plus any shared or public files the user has explicitly added to a
     * folder they own.
     * @opt_param string startChangeId Change ID to start listing changes from.
     * @opt_param bool includeDeleted Whether to include deleted items.
     * @opt_param int maxResults Maximum number of changes to return.
     * @opt_param string pageToken Page token for changes.
     * @return Google_Service_Drive_Channel
     */
    public function watch(Google_Service_Drive_Channel $postBody, $optParams = [])
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('watch', array($params), "Google_Service_Drive_Channel");
    }
}

/**
 * The "channels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $channels = $driveService->channels;
 *  </code>
 */
class Google_Service_Drive_Channels_Resource extends Google_Service_Resource
{

    /**
     * Stop watching resources through this channel (channels.stop)
     *
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     */
    public function stop(Google_Service_Drive_Channel $postBody, $optParams = [])
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('stop', array($params));
    }
}

/**
 * The "children" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $children = $driveService->children;
 *  </code>
 */
class Google_Service_Drive_Children_Resource extends Google_Service_Resource
{

    /**
     * Removes a child from a folder. (children.delete)
     *
     * @param string $folderId The ID of the folder.
     * @param string $childId The ID of the child.
     * @param array $optParams Optional parameters.
     */
    public function delete($folderId, $childId, $optParams = [])
    {
        $params = array('folderId' => $folderId, 'childId' => $childId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a specific child reference. (children.get)
     *
     * @param string $folderId The ID of the folder.
     * @param string $childId The ID of the child.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_ChildReference
     */
    public function get($folderId, $childId, $optParams = [])
    {
        $params = array('folderId' => $folderId, 'childId' => $childId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_ChildReference");
    }

    /**
     * Inserts a file into a folder. (children.insert)
     *
     * @param string $folderId The ID of the folder.
     * @param Google_ChildReference $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_ChildReference
     */
    public function insert($folderId, Google_Service_Drive_ChildReference $postBody, $optParams = [])
    {
        $params = array('folderId' => $folderId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Drive_ChildReference");
    }

    /**
     * Lists a folder's children. (children.listChildren)
     *
     * @param string $folderId The ID of the folder.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string q Query string for searching children.
     * @opt_param string pageToken Page token for children.
     * @opt_param int maxResults Maximum number of children to return.
     * @return Google_Service_Drive_ChildList
     */
    public function listChildren($folderId, $optParams = [])
    {
        $params = array('folderId' => $folderId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_ChildList");
    }
}

/**
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $comments = $driveService->comments;
 *  </code>
 */
class Google_Service_Drive_Comments_Resource extends Google_Service_Resource
{

    /**
     * Deletes a comment. (comments.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $commentId, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a comment by ID. (comments.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeDeleted If set, this will succeed when retrieving a
     * deleted comment, and will include any deleted replies.
     * @return Google_Service_Drive_Comment
     */
    public function get($fileId, $commentId, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_Comment");
    }

    /**
     * Creates a new comment on the given file. (comments.insert)
     *
     * @param string $fileId The ID of the file.
     * @param Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_Comment
     */
    public function insert($fileId, Google_Service_Drive_Comment $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Drive_Comment");
    }

    /**
     * Lists a file's comments. (comments.listComments)
     *
     * @param string $fileId The ID of the file.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken The continuation token, used to page through
     * large result sets. To get the next page of results, set this parameter to the
     * value of "nextPageToken" from the previous response.
     * @opt_param string updatedMin Only discussions that were updated after this
     * timestamp will be returned. Formatted as an RFC 3339 timestamp.
     * @opt_param bool includeDeleted If set, all comments and replies, including
     * deleted comments and replies (with content stripped) will be returned.
     * @opt_param int maxResults The maximum number of discussions to include in the
     * response, used for paging.
     * @return Google_Service_Drive_CommentList
     */
    public function listComments($fileId, $optParams = [])
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_CommentList");
    }

    /**
     * Updates an existing comment. This method supports patch semantics.
     * (comments.patch)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_Comment
     */
    public function patch($fileId, $commentId, Google_Service_Drive_Comment $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Drive_Comment");
    }

    /**
     * Updates an existing comment. (comments.update)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param Google_Comment $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_Comment
     */
    public function update($fileId, $commentId, Google_Service_Drive_Comment $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Drive_Comment");
    }
}

/**
 * The "files" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $files = $driveService->files;
 *  </code>
 */
class Google_Service_Drive_Files_Resource extends Google_Service_Resource
{

    /**
     * Creates a copy of the specified file. (files.copy)
     *
     * @param string $fileId The ID of the file to copy.
     * @param Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool convert Whether to convert this file to the corresponding
     * Google Docs format.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use.
     * Valid values are ISO 639-1 codes.
     * @opt_param string visibility The visibility of the new file. This parameter
     * is only relevant when the source is not a native Google Doc and
     * convert=false.
     * @opt_param bool pinned Whether to pin the head revision of the new copy. A
     * file can have a maximum of 200 pinned revisions.
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf
     * uploads.
     * @opt_param string timedTextTrackName The timed text track name.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @return Google_Service_Drive_DriveFile
     */
    public function copy($fileId, Google_Service_Drive_DriveFile $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('copy', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Permanently deletes a file by ID. Skips the trash. The currently
     * authenticated user must own the file. (files.delete)
     *
     * @param string $fileId The ID of the file to delete.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $optParams = [])
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Permanently deletes all of the user's trashed files. (files.emptyTrash)
     *
     * @param array $optParams Optional parameters.
     */
    public function emptyTrash($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        return $this->call('emptyTrash', array($params));
    }

    /**
     * Gets a file's metadata by ID. (files.get)
     *
     * @param string $fileId The ID for the file in question.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection This parameter is deprecated and has no
     * function.
     * @opt_param string revisionId Specifies the Revision ID that should be
     * downloaded. Ignored unless alt=media is specified.
     * @opt_param bool acknowledgeAbuse Whether the user is acknowledging the risk
     * of downloading known malware or other abusive files. Ignored unless alt=media
     * is specified.
     * @opt_param bool updateViewedDate Whether to update the view date after
     * successfully retrieving the file.
     * @return Google_Service_Drive_DriveFile
     */
    public function get($fileId, $optParams = [])
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Insert a new file. (files.insert)
     *
     * @param Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool convert Whether to convert this file to the corresponding
     * Google Docs format.
     * @opt_param bool useContentAsIndexableText Whether to use the content as
     * indexable text.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use.
     * Valid values are ISO 639-1 codes.
     * @opt_param string visibility The visibility of the new file. This parameter
     * is only relevant when convert=false.
     * @opt_param bool pinned Whether to pin the head revision of the uploaded file.
     * A file can have a maximum of 200 pinned revisions.
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf
     * uploads.
     * @opt_param string timedTextTrackName The timed text track name.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @return Google_Service_Drive_DriveFile
     */
    public function insert(Google_Service_Drive_DriveFile $postBody, $optParams = [])
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Lists the user's files. (files.listFiles)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string q Query string for searching files.
     * @opt_param string pageToken Page token for files.
     * @opt_param string corpus The body of items (files/documents) to which the
     * query applies.
     * @opt_param string projection This parameter is deprecated and has no
     * function.
     * @opt_param int maxResults Maximum number of files to return.
     * @return Google_Service_Drive_FileList
     */
    public function listFiles($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_FileList");
    }

    /**
     * Updates file metadata and/or content. This method supports patch semantics.
     * (files.patch)
     *
     * @param string $fileId The ID of the file to update.
     * @param Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string addParents Comma-separated list of parent IDs to add.
     * @opt_param bool updateViewedDate Whether to update the view date after
     * successfully updating the file.
     * @opt_param string removeParents Comma-separated list of parent IDs to remove.
     * @opt_param bool setModifiedDate Whether to set the modified date with the
     * supplied modified date.
     * @opt_param bool convert Whether to convert this file to the corresponding
     * Google Docs format.
     * @opt_param bool useContentAsIndexableText Whether to use the content as
     * indexable text.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use.
     * Valid values are ISO 639-1 codes.
     * @opt_param bool pinned Whether to pin the new revision. A file can have a
     * maximum of 200 pinned revisions.
     * @opt_param bool newRevision Whether a blob upload should create a new
     * revision. If false, the blob data in the current head revision is replaced.
     * If true or not set, a new blob is created as head revision, and previous
     * revisions are preserved (causing increased use of the user's data storage
     * quota).
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf
     * uploads.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @opt_param string timedTextTrackName The timed text track name.
     * @return Google_Service_Drive_DriveFile
     */
    public function patch($fileId, Google_Service_Drive_DriveFile $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Set the file's updated time to the current server time. (files.touch)
     *
     * @param string $fileId The ID of the file to update.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_DriveFile
     */
    public function touch($fileId, $optParams = [])
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('touch', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Moves a file to the trash. (files.trash)
     *
     * @param string $fileId The ID of the file to trash.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_DriveFile
     */
    public function trash($fileId, $optParams = [])
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('trash', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Restores a file from the trash. (files.untrash)
     *
     * @param string $fileId The ID of the file to untrash.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_DriveFile
     */
    public function untrash($fileId, $optParams = [])
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('untrash', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Updates file metadata and/or content. (files.update)
     *
     * @param string $fileId The ID of the file to update.
     * @param Google_DriveFile $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string addParents Comma-separated list of parent IDs to add.
     * @opt_param bool updateViewedDate Whether to update the view date after
     * successfully updating the file.
     * @opt_param string removeParents Comma-separated list of parent IDs to remove.
     * @opt_param bool setModifiedDate Whether to set the modified date with the
     * supplied modified date.
     * @opt_param bool convert Whether to convert this file to the corresponding
     * Google Docs format.
     * @opt_param bool useContentAsIndexableText Whether to use the content as
     * indexable text.
     * @opt_param string ocrLanguage If ocr is true, hints at the language to use.
     * Valid values are ISO 639-1 codes.
     * @opt_param bool pinned Whether to pin the new revision. A file can have a
     * maximum of 200 pinned revisions.
     * @opt_param bool newRevision Whether a blob upload should create a new
     * revision. If false, the blob data in the current head revision is replaced.
     * If true or not set, a new blob is created as head revision, and previous
     * revisions are preserved (causing increased use of the user's data storage
     * quota).
     * @opt_param bool ocr Whether to attempt OCR on .jpg, .png, .gif, or .pdf
     * uploads.
     * @opt_param string timedTextLanguage The language of the timed text.
     * @opt_param string timedTextTrackName The timed text track name.
     * @return Google_Service_Drive_DriveFile
     */
    public function update($fileId, Google_Service_Drive_DriveFile $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Drive_DriveFile");
    }

    /**
     * Subscribe to changes on a file (files.watch)
     *
     * @param string $fileId The ID for the file in question.
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection This parameter is deprecated and has no
     * function.
     * @opt_param string revisionId Specifies the Revision ID that should be
     * downloaded. Ignored unless alt=media is specified.
     * @opt_param bool acknowledgeAbuse Whether the user is acknowledging the risk
     * of downloading known malware or other abusive files. Ignored unless alt=media
     * is specified.
     * @opt_param bool updateViewedDate Whether to update the view date after
     * successfully retrieving the file.
     * @return Google_Service_Drive_Channel
     */
    public function watch($fileId, Google_Service_Drive_Channel $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('watch', array($params), "Google_Service_Drive_Channel");
    }
}

/**
 * The "parents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $parents = $driveService->parents;
 *  </code>
 */
class Google_Service_Drive_Parents_Resource extends Google_Service_Resource
{

    /**
     * Removes a parent from a file. (parents.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $parentId The ID of the parent.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $parentId, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'parentId' => $parentId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a specific parent reference. (parents.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $parentId The ID of the parent.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_ParentReference
     */
    public function get($fileId, $parentId, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'parentId' => $parentId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_ParentReference");
    }

    /**
     * Adds a parent folder for a file. (parents.insert)
     *
     * @param string $fileId The ID of the file.
     * @param Google_ParentReference $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_ParentReference
     */
    public function insert($fileId, Google_Service_Drive_ParentReference $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Drive_ParentReference");
    }

    /**
     * Lists a file's parents. (parents.listParents)
     *
     * @param string $fileId The ID of the file.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_ParentList
     */
    public function listParents($fileId, $optParams = [])
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_ParentList");
    }
}

/**
 * The "permissions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $permissions = $driveService->permissions;
 *  </code>
 */
class Google_Service_Drive_Permissions_Resource extends Google_Service_Resource
{

    /**
     * Deletes a permission from a file. (permissions.delete)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $permissionId, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'permissionId' => $permissionId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a permission by ID. (permissions.get)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_Permission
     */
    public function get($fileId, $permissionId, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'permissionId' => $permissionId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_Permission");
    }

    /**
     * Returns the permission ID for an email address. (permissions.getIdForEmail)
     *
     * @param string $email The email address for which to return a permission ID
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_PermissionId
     */
    public function getIdForEmail($email, $optParams = [])
    {
        $params = array('email' => $email);
        $params = array_merge($params, $optParams);
        return $this->call('getIdForEmail', array($params), "Google_Service_Drive_PermissionId");
    }

    /**
     * Inserts a permission for a file. (permissions.insert)
     *
     * @param string $fileId The ID for the file.
     * @param Google_Permission $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string emailMessage A custom message to include in notification
     * emails.
     * @opt_param bool sendNotificationEmails Whether to send notification emails
     * when sharing to users or groups. This parameter is ignored and an email is
     * sent if the role is owner.
     * @return Google_Service_Drive_Permission
     */
    public function insert($fileId, Google_Service_Drive_Permission $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Drive_Permission");
    }

    /**
     * Lists a file's permissions. (permissions.listPermissions)
     *
     * @param string $fileId The ID for the file.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_PermissionList
     */
    public function listPermissions($fileId, $optParams = [])
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_PermissionList");
    }

    /**
     * Updates a permission. This method supports patch semantics.
     * (permissions.patch)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param Google_Permission $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool transferOwnership Whether changing a role to 'owner'
     * downgrades the current owners to writers. Does nothing if the specified role
     * is not 'owner'.
     * @return Google_Service_Drive_Permission
     */
    public function patch($fileId, $permissionId, Google_Service_Drive_Permission $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'permissionId' => $permissionId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Drive_Permission");
    }

    /**
     * Updates a permission. (permissions.update)
     *
     * @param string $fileId The ID for the file.
     * @param string $permissionId The ID for the permission.
     * @param Google_Permission $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool transferOwnership Whether changing a role to 'owner'
     * downgrades the current owners to writers. Does nothing if the specified role
     * is not 'owner'.
     * @return Google_Service_Drive_Permission
     */
    public function update($fileId, $permissionId, Google_Service_Drive_Permission $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'permissionId' => $permissionId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Drive_Permission");
    }
}

/**
 * The "properties" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $properties = $driveService->properties;
 *  </code>
 */
class Google_Service_Drive_Properties_Resource extends Google_Service_Resource
{

    /**
     * Deletes a property. (properties.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $propertyKey The key of the property.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string visibility The visibility of the property.
     */
    public function delete($fileId, $propertyKey, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'propertyKey' => $propertyKey);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a property by its key. (properties.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $propertyKey The key of the property.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string visibility The visibility of the property.
     * @return Google_Service_Drive_Property
     */
    public function get($fileId, $propertyKey, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'propertyKey' => $propertyKey);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_Property");
    }

    /**
     * Adds a property to a file. (properties.insert)
     *
     * @param string $fileId The ID of the file.
     * @param Google_Property $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_Property
     */
    public function insert($fileId, Google_Service_Drive_Property $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Drive_Property");
    }

    /**
     * Lists a file's properties. (properties.listProperties)
     *
     * @param string $fileId The ID of the file.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_PropertyList
     */
    public function listProperties($fileId, $optParams = [])
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_PropertyList");
    }

    /**
     * Updates a property. This method supports patch semantics. (properties.patch)
     *
     * @param string $fileId The ID of the file.
     * @param string $propertyKey The key of the property.
     * @param Google_Property $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string visibility The visibility of the property.
     * @return Google_Service_Drive_Property
     */
    public function patch($fileId, $propertyKey, Google_Service_Drive_Property $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'propertyKey' => $propertyKey, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Drive_Property");
    }

    /**
     * Updates a property. (properties.update)
     *
     * @param string $fileId The ID of the file.
     * @param string $propertyKey The key of the property.
     * @param Google_Property $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string visibility The visibility of the property.
     * @return Google_Service_Drive_Property
     */
    public function update($fileId, $propertyKey, Google_Service_Drive_Property $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'propertyKey' => $propertyKey, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Drive_Property");
    }
}

/**
 * The "realtime" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $realtime = $driveService->realtime;
 *  </code>
 */
class Google_Service_Drive_Realtime_Resource extends Google_Service_Resource
{

    /**
     * Exports the contents of the Realtime API data model associated with this file
     * as JSON. (realtime.get)
     *
     * @param string $fileId The ID of the file that the Realtime API data model is
     * associated with.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int revision The revision of the Realtime API data model to
     * export. Revisions start at 1 (the initial empty data model) and are
     * incremented with each change. If this parameter is excluded, the most recent
     * data model will be returned.
     */
    public function get($fileId, $optParams = [])
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params));
    }

    /**
     * Overwrites the Realtime API data model associated with this file with the
     * provided JSON data model. (realtime.update)
     *
     * @param string $fileId The ID of the file that the Realtime API data model is
     * associated with.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string baseRevision The revision of the model to diff the uploaded
     * model against. If set, the uploaded model is diffed against the provided
     * revision and those differences are merged with any changes made to the model
     * after the provided revision. If not set, the uploaded model replaces the
     * current model on the server.
     */
    public function update($fileId, $optParams = [])
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params));
    }
}

/**
 * The "replies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $replies = $driveService->replies;
 *  </code>
 */
class Google_Service_Drive_Replies_Resource extends Google_Service_Resource
{

    /**
     * Deletes a reply. (replies.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $commentId, $replyId, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a reply. (replies.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeDeleted If set, this will succeed when retrieving a
     * deleted reply.
     * @return Google_Service_Drive_CommentReply
     */
    public function get($fileId, $commentId, $replyId, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_CommentReply");
    }

    /**
     * Creates a new reply to the given comment. (replies.insert)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param Google_CommentReply $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_CommentReply
     */
    public function insert($fileId, $commentId, Google_Service_Drive_CommentReply $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Drive_CommentReply");
    }

    /**
     * Lists all of the replies to a comment. (replies.listReplies)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken The continuation token, used to page through
     * large result sets. To get the next page of results, set this parameter to the
     * value of "nextPageToken" from the previous response.
     * @opt_param bool includeDeleted If set, all replies, including deleted replies
     * (with content stripped) will be returned.
     * @opt_param int maxResults The maximum number of replies to include in the
     * response, used for paging.
     * @return Google_Service_Drive_CommentReplyList
     */
    public function listReplies($fileId, $commentId, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_CommentReplyList");
    }

    /**
     * Updates an existing reply. This method supports patch semantics.
     * (replies.patch)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param Google_CommentReply $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_CommentReply
     */
    public function patch($fileId, $commentId, $replyId, Google_Service_Drive_CommentReply $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Drive_CommentReply");
    }

    /**
     * Updates an existing reply. (replies.update)
     *
     * @param string $fileId The ID of the file.
     * @param string $commentId The ID of the comment.
     * @param string $replyId The ID of the reply.
     * @param Google_CommentReply $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_CommentReply
     */
    public function update($fileId, $commentId, $replyId, Google_Service_Drive_CommentReply $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'commentId' => $commentId, 'replyId' => $replyId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Drive_CommentReply");
    }
}

/**
 * The "revisions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $driveService = new Google_Service_Drive(...);
 *   $revisions = $driveService->revisions;
 *  </code>
 */
class Google_Service_Drive_Revisions_Resource extends Google_Service_Resource
{

    /**
     * Removes a revision. (revisions.delete)
     *
     * @param string $fileId The ID of the file.
     * @param string $revisionId The ID of the revision.
     * @param array $optParams Optional parameters.
     */
    public function delete($fileId, $revisionId, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'revisionId' => $revisionId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Gets a specific revision. (revisions.get)
     *
     * @param string $fileId The ID of the file.
     * @param string $revisionId The ID of the revision.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_Revision
     */
    public function get($fileId, $revisionId, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'revisionId' => $revisionId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Drive_Revision");
    }

    /**
     * Lists a file's revisions. (revisions.listRevisions)
     *
     * @param string $fileId The ID of the file.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_RevisionList
     */
    public function listRevisions($fileId, $optParams = [])
    {
        $params = array('fileId' => $fileId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Drive_RevisionList");
    }

    /**
     * Updates a revision. This method supports patch semantics. (revisions.patch)
     *
     * @param string $fileId The ID for the file.
     * @param string $revisionId The ID for the revision.
     * @param Google_Revision $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_Revision
     */
    public function patch($fileId, $revisionId, Google_Service_Drive_Revision $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'revisionId' => $revisionId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Drive_Revision");
    }

    /**
     * Updates a revision. (revisions.update)
     *
     * @param string $fileId The ID for the file.
     * @param string $revisionId The ID for the revision.
     * @param Google_Revision $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Drive_Revision
     */
    public function update($fileId, $revisionId, Google_Service_Drive_Revision $postBody, $optParams = [])
    {
        $params = array('fileId' => $fileId, 'revisionId' => $revisionId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Drive_Revision");
    }
}


class Google_Service_Drive_About extends Google_Collection
{
    public $domainSharingPolicy;
    public $etag;
    public $folderColorPalette;
    public $isCurrentAppInstalled;
    public $kind;
    public $languageCode;
    public $largestChangeId;
    public $name;
    public $permissionId;
    public $quotaBytesTotal;
    public $quotaBytesUsed;
    public $quotaBytesUsedAggregate;
    public $quotaBytesUsedInTrash;
    public $quotaType;
    public $remainingChangeIds;
    public $rootFolderId;
    public $selfLink;
    protected $collection_key = 'quotaBytesByService';
    protected $internal_gapi_mappings = [];
    protected $additionalRoleInfoType = 'Google_Service_Drive_AboutAdditionalRoleInfo';
    protected $additionalRoleInfoDataType = 'array';
    protected $exportFormatsType = 'Google_Service_Drive_AboutExportFormats';
    protected $exportFormatsDataType = 'array';
    protected $featuresType = 'Google_Service_Drive_AboutFeatures';
    protected $featuresDataType = 'array';
    protected $importFormatsType = 'Google_Service_Drive_AboutImportFormats';
    protected $importFormatsDataType = 'array';
    protected $maxUploadSizesType = 'Google_Service_Drive_AboutMaxUploadSizes';
    protected $maxUploadSizesDataType = 'array';
    protected $quotaBytesByServiceType = 'Google_Service_Drive_AboutQuotaBytesByService';
    protected $quotaBytesByServiceDataType = 'array';
    protected $userType = 'Google_Service_Drive_User';
    protected $userDataType = '';


    public function setAdditionalRoleInfo($additionalRoleInfo)
    {
        $this->additionalRoleInfo = $additionalRoleInfo;
    }

    public function getAdditionalRoleInfo()
    {
        return $this->additionalRoleInfo;
    }

    public function getDomainSharingPolicy()
    {
        return $this->domainSharingPolicy;
    }

    public function setDomainSharingPolicy($domainSharingPolicy)
    {
        $this->domainSharingPolicy = $domainSharingPolicy;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function setExportFormats($exportFormats)
    {
        $this->exportFormats = $exportFormats;
    }

    public function getExportFormats()
    {
        return $this->exportFormats;
    }

    public function setFeatures($features)
    {
        $this->features = $features;
    }

    public function getFeatures()
    {
        return $this->features;
    }

    public function getFolderColorPalette()
    {
        return $this->folderColorPalette;
    }

    public function setFolderColorPalette($folderColorPalette)
    {
        $this->folderColorPalette = $folderColorPalette;
    }

    public function setImportFormats($importFormats)
    {
        $this->importFormats = $importFormats;
    }

    public function getImportFormats()
    {
        return $this->importFormats;
    }

    public function getIsCurrentAppInstalled()
    {
        return $this->isCurrentAppInstalled;
    }

    public function setIsCurrentAppInstalled($isCurrentAppInstalled)
    {
        $this->isCurrentAppInstalled = $isCurrentAppInstalled;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }

    public function getLargestChangeId()
    {
        return $this->largestChangeId;
    }

    public function setLargestChangeId($largestChangeId)
    {
        $this->largestChangeId = $largestChangeId;
    }

    public function setMaxUploadSizes($maxUploadSizes)
    {
        $this->maxUploadSizes = $maxUploadSizes;
    }

    public function getMaxUploadSizes()
    {
        return $this->maxUploadSizes;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPermissionId()
    {
        return $this->permissionId;
    }

    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;
    }

    public function setQuotaBytesByService($quotaBytesByService)
    {
        $this->quotaBytesByService = $quotaBytesByService;
    }

    public function getQuotaBytesByService()
    {
        return $this->quotaBytesByService;
    }

    public function getQuotaBytesTotal()
    {
        return $this->quotaBytesTotal;
    }

    public function setQuotaBytesTotal($quotaBytesTotal)
    {
        $this->quotaBytesTotal = $quotaBytesTotal;
    }

    public function getQuotaBytesUsed()
    {
        return $this->quotaBytesUsed;
    }

    public function setQuotaBytesUsed($quotaBytesUsed)
    {
        $this->quotaBytesUsed = $quotaBytesUsed;
    }

    public function getQuotaBytesUsedAggregate()
    {
        return $this->quotaBytesUsedAggregate;
    }

    public function setQuotaBytesUsedAggregate($quotaBytesUsedAggregate)
    {
        $this->quotaBytesUsedAggregate = $quotaBytesUsedAggregate;
    }

    public function getQuotaBytesUsedInTrash()
    {
        return $this->quotaBytesUsedInTrash;
    }

    public function setQuotaBytesUsedInTrash($quotaBytesUsedInTrash)
    {
        $this->quotaBytesUsedInTrash = $quotaBytesUsedInTrash;
    }

    public function getQuotaType()
    {
        return $this->quotaType;
    }

    public function setQuotaType($quotaType)
    {
        $this->quotaType = $quotaType;
    }

    public function getRemainingChangeIds()
    {
        return $this->remainingChangeIds;
    }

    public function setRemainingChangeIds($remainingChangeIds)
    {
        $this->remainingChangeIds = $remainingChangeIds;
    }

    public function getRootFolderId()
    {
        return $this->rootFolderId;
    }

    public function setRootFolderId($rootFolderId)
    {
        $this->rootFolderId = $rootFolderId;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function setUser(Google_Service_Drive_User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        return $this->user;
    }
}

class Google_Service_Drive_AboutAdditionalRoleInfo extends Google_Collection
{
    public $type;
    protected $collection_key = 'roleSets';
    protected $internal_gapi_mappings = [];
    protected $roleSetsType = 'Google_Service_Drive_AboutAdditionalRoleInfoRoleSets';
    protected $roleSetsDataType = 'array';

    public function setRoleSets($roleSets)
    {
        $this->roleSets = $roleSets;
    }

    public function getRoleSets()
    {
        return $this->roleSets;
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

class Google_Service_Drive_AboutAdditionalRoleInfoRoleSets extends Google_Collection
{
    public $additionalRoles;
    public $primaryRole;
    protected $collection_key = 'additionalRoles';
    protected $internal_gapi_mappings = [];

    public function getAdditionalRoles()
    {
        return $this->additionalRoles;
    }

    public function setAdditionalRoles($additionalRoles)
    {
        $this->additionalRoles = $additionalRoles;
    }

    public function getPrimaryRole()
    {
        return $this->primaryRole;
    }

    public function setPrimaryRole($primaryRole)
    {
        $this->primaryRole = $primaryRole;
    }
}

class Google_Service_Drive_AboutExportFormats extends Google_Collection
{
    public $source;
    public $targets;
    protected $collection_key = 'targets';
    protected $internal_gapi_mappings = [];

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
    {
        $this->source = $source;
    }

    public function getTargets()
    {
        return $this->targets;
    }

    public function setTargets($targets)
    {
        $this->targets = $targets;
    }
}

class Google_Service_Drive_AboutFeatures extends Google_Model
{
    public $featureName;
    public $featureRate;
    protected $internal_gapi_mappings = [];

    public function getFeatureName()
    {
        return $this->featureName;
    }

    public function setFeatureName($featureName)
    {
        $this->featureName = $featureName;
    }

    public function getFeatureRate()
    {
        return $this->featureRate;
    }

    public function setFeatureRate($featureRate)
    {
        $this->featureRate = $featureRate;
    }
}

class Google_Service_Drive_AboutImportFormats extends Google_Collection
{
    public $source;
    public $targets;
    protected $collection_key = 'targets';
    protected $internal_gapi_mappings = [];

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
    {
        $this->source = $source;
    }

    public function getTargets()
    {
        return $this->targets;
    }

    public function setTargets($targets)
    {
        $this->targets = $targets;
    }
}

class Google_Service_Drive_AboutMaxUploadSizes extends Google_Model
{
    public $size;
    public $type;
    protected $internal_gapi_mappings = [];

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
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

class Google_Service_Drive_AboutQuotaBytesByService extends Google_Model
{
    public $bytesUsed;
    public $serviceName;
    protected $internal_gapi_mappings = [];

    public function getBytesUsed()
    {
        return $this->bytesUsed;
    }

    public function setBytesUsed($bytesUsed)
    {
        $this->bytesUsed = $bytesUsed;
    }

    public function getServiceName()
    {
        return $this->serviceName;
    }

    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
    }
}

class Google_Service_Drive_App extends Google_Collection
{
    public $authorized;
    public $createInFolderTemplate;
    public $createUrl;
    public $hasDriveWideScope;
    public $id;
    public $installed;
    public $kind;
    public $longDescription;
    public $name;
    public $objectType;
    public $openUrlTemplate;
    public $primaryFileExtensions;
    public $primaryMimeTypes;
    public $productId;
    public $productUrl;
    public $secondaryFileExtensions;
    public $secondaryMimeTypes;
    public $shortDescription;
    public $supportsCreate;
    public $supportsImport;
    public $supportsMultiOpen;
    public $supportsOfflineCreate;
    public $useByDefault;
    protected $collection_key = 'secondaryMimeTypes';
    protected $internal_gapi_mappings = [];
    protected $iconsType = 'Google_Service_Drive_AppIcons';
    protected $iconsDataType = 'array';

    public function getAuthorized()
    {
        return $this->authorized;
    }

    public function setAuthorized($authorized)
    {
        $this->authorized = $authorized;
    }

    public function getCreateInFolderTemplate()
    {
        return $this->createInFolderTemplate;
    }

    public function setCreateInFolderTemplate($createInFolderTemplate)
    {
        $this->createInFolderTemplate = $createInFolderTemplate;
    }

    public function getCreateUrl()
    {
        return $this->createUrl;
    }

    public function setCreateUrl($createUrl)
    {
        $this->createUrl = $createUrl;
    }

    public function getHasDriveWideScope()
    {
        return $this->hasDriveWideScope;
    }

    public function setHasDriveWideScope($hasDriveWideScope)
    {
        $this->hasDriveWideScope = $hasDriveWideScope;
    }

    public function setIcons($icons)
    {
        $this->icons = $icons;
    }

    public function getIcons()
    {
        return $this->icons;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getInstalled()
    {
        return $this->installed;
    }

    public function setInstalled($installed)
    {
        $this->installed = $installed;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getLongDescription()
    {
        return $this->longDescription;
    }

    public function setLongDescription($longDescription)
    {
        $this->longDescription = $longDescription;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getObjectType()
    {
        return $this->objectType;
    }

    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    public function getOpenUrlTemplate()
    {
        return $this->openUrlTemplate;
    }

    public function setOpenUrlTemplate($openUrlTemplate)
    {
        $this->openUrlTemplate = $openUrlTemplate;
    }

    public function getPrimaryFileExtensions()
    {
        return $this->primaryFileExtensions;
    }

    public function setPrimaryFileExtensions($primaryFileExtensions)
    {
        $this->primaryFileExtensions = $primaryFileExtensions;
    }

    public function getPrimaryMimeTypes()
    {
        return $this->primaryMimeTypes;
    }

    public function setPrimaryMimeTypes($primaryMimeTypes)
    {
        $this->primaryMimeTypes = $primaryMimeTypes;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    public function getProductUrl()
    {
        return $this->productUrl;
    }

    public function setProductUrl($productUrl)
    {
        $this->productUrl = $productUrl;
    }

    public function getSecondaryFileExtensions()
    {
        return $this->secondaryFileExtensions;
    }

    public function setSecondaryFileExtensions($secondaryFileExtensions)
    {
        $this->secondaryFileExtensions = $secondaryFileExtensions;
    }

    public function getSecondaryMimeTypes()
    {
        return $this->secondaryMimeTypes;
    }

    public function setSecondaryMimeTypes($secondaryMimeTypes)
    {
        $this->secondaryMimeTypes = $secondaryMimeTypes;
    }

    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    }

    public function getSupportsCreate()
    {
        return $this->supportsCreate;
    }

    public function setSupportsCreate($supportsCreate)
    {
        $this->supportsCreate = $supportsCreate;
    }

    public function getSupportsImport()
    {
        return $this->supportsImport;
    }

    public function setSupportsImport($supportsImport)
    {
        $this->supportsImport = $supportsImport;
    }

    public function getSupportsMultiOpen()
    {
        return $this->supportsMultiOpen;
    }

    public function setSupportsMultiOpen($supportsMultiOpen)
    {
        $this->supportsMultiOpen = $supportsMultiOpen;
    }

    public function getSupportsOfflineCreate()
    {
        return $this->supportsOfflineCreate;
    }

    public function setSupportsOfflineCreate($supportsOfflineCreate)
    {
        $this->supportsOfflineCreate = $supportsOfflineCreate;
    }

    public function getUseByDefault()
    {
        return $this->useByDefault;
    }

    public function setUseByDefault($useByDefault)
    {
        $this->useByDefault = $useByDefault;
    }
}

class Google_Service_Drive_AppIcons extends Google_Model
{
    public $category;
    public $iconUrl;
    public $size;
    protected $internal_gapi_mappings = [];

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getIconUrl()
    {
        return $this->iconUrl;
    }

    public function setIconUrl($iconUrl)
    {
        $this->iconUrl = $iconUrl;
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

class Google_Service_Drive_AppList extends Google_Collection
{
    public $defaultAppIds;
    public $etag;
    public $kind;
    public $selfLink;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Drive_App';
    protected $itemsDataType = 'array';

    public function getDefaultAppIds()
    {
        return $this->defaultAppIds;
    }

    public function setDefaultAppIds($defaultAppIds)
    {
        $this->defaultAppIds = $defaultAppIds;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
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

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_Service_Drive_Change extends Google_Model
{
    public $deleted;
    public $fileId;
    public $id;
    public $kind;
    public $modificationDate;
    public $selfLink;
    protected $internal_gapi_mappings = [];
    protected $fileType = 'Google_Service_Drive_DriveFile';
    protected $fileDataType = '';

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    public function setFile(Google_Service_Drive_DriveFile $file)
    {
        $this->file = $file;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function getFileId()
    {
        return $this->fileId;
    }

    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
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

    public function getModificationDate()
    {
        return $this->modificationDate;
    }

    public function setModificationDate($modificationDate)
    {
        $this->modificationDate = $modificationDate;
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

class Google_Service_Drive_ChangeList extends Google_Collection
{
    public $etag;
    public $kind;
    public $largestChangeId;
    public $nextLink;
    public $nextPageToken;
    public $selfLink;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Drive_Change';
    protected $itemsDataType = 'array';

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
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

    public function getLargestChangeId()
    {
        return $this->largestChangeId;
    }

    public function setLargestChangeId($largestChangeId)
    {
        $this->largestChangeId = $largestChangeId;
    }

    public function getNextLink()
    {
        return $this->nextLink;
    }

    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
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

class Google_Service_Drive_Channel extends Google_Model
{
    public $address;
    public $expiration;
    public $id;
    public $kind;
    public $params;
    public $payload;
    public $resourceId;
    public $resourceUri;
    public $token;
    public $type;
    protected $internal_gapi_mappings = [];

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getExpiration()
    {
        return $this->expiration;
    }

    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
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

    public function getParams()
    {
        return $this->params;
    }

    public function setParams($params)
    {
        $this->params = $params;
    }

    public function getPayload()
    {
        return $this->payload;
    }

    public function setPayload($payload)
    {
        $this->payload = $payload;
    }

    public function getResourceId()
    {
        return $this->resourceId;
    }

    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
    }

    public function getResourceUri()
    {
        return $this->resourceUri;
    }

    public function setResourceUri($resourceUri)
    {
        $this->resourceUri = $resourceUri;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
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

class Google_Service_Drive_ChannelParams extends Google_Model
{
}

class Google_Service_Drive_ChildList extends Google_Collection
{
    public $etag;
    public $kind;
    public $nextLink;
    public $nextPageToken;
    public $selfLink;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Drive_ChildReference';
    protected $itemsDataType = 'array';

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
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

    public function getNextLink()
    {
        return $this->nextLink;
    }

    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
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

class Google_Service_Drive_ChildReference extends Google_Model
{
    public $childLink;
    public $id;
    public $kind;
    public $selfLink;
    protected $internal_gapi_mappings = [];

    public function getChildLink()
    {
        return $this->childLink;
    }

    public function setChildLink($childLink)
    {
        $this->childLink = $childLink;
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

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_Service_Drive_Comment extends Google_Collection
{
    public $anchor;
    public $commentId;
    public $content;
    public $createdDate;
    public $deleted;
    public $fileId;
    public $fileTitle;
    public $htmlContent;
    public $kind;
    public $modifiedDate;
    public $selfLink;
    public $status;
    protected $collection_key = 'replies';
    protected $internal_gapi_mappings = [];
    protected $authorType = 'Google_Service_Drive_User';
    protected $authorDataType = '';
    protected $contextType = 'Google_Service_Drive_CommentContext';
    protected $contextDataType = '';
    protected $repliesType = 'Google_Service_Drive_CommentReply';
    protected $repliesDataType = 'array';

    public function getAnchor()
    {
        return $this->anchor;
    }

    public function setAnchor($anchor)
    {
        $this->anchor = $anchor;
    }

    public function setAuthor(Google_Service_Drive_User $author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getCommentId()
    {
        return $this->commentId;
    }

    public function setCommentId($commentId)
    {
        $this->commentId = $commentId;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function setContext(Google_Service_Drive_CommentContext $context)
    {
        $this->context = $context;
    }

    public function getContext()
    {
        return $this->context;
    }

    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    public function getFileId()
    {
        return $this->fileId;
    }

    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
    }

    public function getFileTitle()
    {
        return $this->fileTitle;
    }

    public function setFileTitle($fileTitle)
    {
        $this->fileTitle = $fileTitle;
    }

    public function getHtmlContent()
    {
        return $this->htmlContent;
    }

    public function setHtmlContent($htmlContent)
    {
        $this->htmlContent = $htmlContent;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
    }

    public function setReplies($replies)
    {
        $this->replies = $replies;
    }

    public function getReplies()
    {
        return $this->replies;
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

class Google_Service_Drive_CommentContext extends Google_Model
{
    public $type;
    public $value;
    protected $internal_gapi_mappings = [];

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
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

class Google_Service_Drive_CommentList extends Google_Collection
{
    public $kind;
    public $nextLink;
    public $nextPageToken;
    public $selfLink;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Drive_Comment';
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

    public function getNextLink()
    {
        return $this->nextLink;
    }

    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
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

class Google_Service_Drive_CommentReply extends Google_Model
{
    public $content;
    public $createdDate;
    public $deleted;
    public $htmlContent;
    public $kind;
    public $modifiedDate;
    public $replyId;
    public $verb;
    protected $internal_gapi_mappings = [];
    protected $authorType = 'Google_Service_Drive_User';
    protected $authorDataType = '';

    public function setAuthor(Google_Service_Drive_User $author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    public function getHtmlContent()
    {
        return $this->htmlContent;
    }

    public function setHtmlContent($htmlContent)
    {
        $this->htmlContent = $htmlContent;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
    }

    public function getReplyId()
    {
        return $this->replyId;
    }

    public function setReplyId($replyId)
    {
        $this->replyId = $replyId;
    }

    public function getVerb()
    {
        return $this->verb;
    }

    public function setVerb($verb)
    {
        $this->verb = $verb;
    }
}

class Google_Service_Drive_CommentReplyList extends Google_Collection
{
    public $kind;
    public $nextLink;
    public $nextPageToken;
    public $selfLink;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Drive_CommentReply';
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

    public function getNextLink()
    {
        return $this->nextLink;
    }

    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
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

class Google_Service_Drive_DriveFile extends Google_Collection
{
    public $alternateLink;
    public $appDataContents;
    public $copyable;
    public $createdDate;
    public $defaultOpenWithLink;
    public $description;
    public $downloadUrl;
    public $editable;
    public $embedLink;
    public $etag;
    public $explicitlyTrashed;
    public $exportLinks;
    public $fileExtension;
    public $fileSize;
    public $folderColorRgb;
    public $headRevisionId;
    public $iconLink;
    public $id;
    public $kind;
    public $lastModifyingUserName;
    public $lastViewedByMeDate;
    public $markedViewedByMeDate;
    public $md5Checksum;
    public $mimeType;
    public $modifiedByMeDate;
    public $modifiedDate;
    public $openWithLinks;
    public $originalFilename;
    public $ownerNames;
    public $quotaBytesUsed;
    public $selfLink;
    public $shared;
    public $sharedWithMeDate;
    public $thumbnailLink;
    public $title;
    public $version;
    public $webContentLink;
    public $webViewLink;
    public $writersCanShare;
    protected $collection_key = 'properties';
    protected $internal_gapi_mappings = [];
    protected $imageMediaMetadataType = 'Google_Service_Drive_DriveFileImageMediaMetadata';
    protected $imageMediaMetadataDataType = '';
    protected $indexableTextType = 'Google_Service_Drive_DriveFileIndexableText';
    protected $indexableTextDataType = '';
    protected $labelsType = 'Google_Service_Drive_DriveFileLabels';
    protected $labelsDataType = '';
    protected $lastModifyingUserType = 'Google_Service_Drive_User';
    protected $lastModifyingUserDataType = '';
    protected $ownersType = 'Google_Service_Drive_User';
    protected $ownersDataType = 'array';
    protected $parentsType = 'Google_Service_Drive_ParentReference';
    protected $parentsDataType = 'array';
    protected $permissionsType = 'Google_Service_Drive_Permission';
    protected $permissionsDataType = 'array';
    protected $propertiesType = 'Google_Service_Drive_Property';
    protected $propertiesDataType = 'array';
    protected $sharingUserType = 'Google_Service_Drive_User';
    protected $sharingUserDataType = '';
    protected $thumbnailType = 'Google_Service_Drive_DriveFileThumbnail';
    protected $thumbnailDataType = '';
    protected $userPermissionType = 'Google_Service_Drive_Permission';
    protected $userPermissionDataType = '';
    protected $videoMediaMetadataType = 'Google_Service_Drive_DriveFileVideoMediaMetadata';
    protected $videoMediaMetadataDataType = '';

    public function getAlternateLink()
    {
        return $this->alternateLink;
    }

    public function setAlternateLink($alternateLink)
    {
        $this->alternateLink = $alternateLink;
    }

    public function getAppDataContents()
    {
        return $this->appDataContents;
    }

    public function setAppDataContents($appDataContents)
    {
        $this->appDataContents = $appDataContents;
    }

    public function getCopyable()
    {
        return $this->copyable;
    }

    public function setCopyable($copyable)
    {
        $this->copyable = $copyable;
    }

    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    public function getDefaultOpenWithLink()
    {
        return $this->defaultOpenWithLink;
    }

    public function setDefaultOpenWithLink($defaultOpenWithLink)
    {
        $this->defaultOpenWithLink = $defaultOpenWithLink;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }

    public function setDownloadUrl($downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;
    }

    public function getEditable()
    {
        return $this->editable;
    }

    public function setEditable($editable)
    {
        $this->editable = $editable;
    }

    public function getEmbedLink()
    {
        return $this->embedLink;
    }

    public function setEmbedLink($embedLink)
    {
        $this->embedLink = $embedLink;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getExplicitlyTrashed()
    {
        return $this->explicitlyTrashed;
    }

    public function setExplicitlyTrashed($explicitlyTrashed)
    {
        $this->explicitlyTrashed = $explicitlyTrashed;
    }

    public function getExportLinks()
    {
        return $this->exportLinks;
    }

    public function setExportLinks($exportLinks)
    {
        $this->exportLinks = $exportLinks;
    }

    public function getFileExtension()
    {
        return $this->fileExtension;
    }

    public function setFileExtension($fileExtension)
    {
        $this->fileExtension = $fileExtension;
    }

    public function getFileSize()
    {
        return $this->fileSize;
    }

    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
    }

    public function getFolderColorRgb()
    {
        return $this->folderColorRgb;
    }

    public function setFolderColorRgb($folderColorRgb)
    {
        $this->folderColorRgb = $folderColorRgb;
    }

    public function getHeadRevisionId()
    {
        return $this->headRevisionId;
    }

    public function setHeadRevisionId($headRevisionId)
    {
        $this->headRevisionId = $headRevisionId;
    }

    public function getIconLink()
    {
        return $this->iconLink;
    }

    public function setIconLink($iconLink)
    {
        $this->iconLink = $iconLink;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setImageMediaMetadata(Google_Service_Drive_DriveFileImageMediaMetadata $imageMediaMetadata)
    {
        $this->imageMediaMetadata = $imageMediaMetadata;
    }

    public function getImageMediaMetadata()
    {
        return $this->imageMediaMetadata;
    }

    public function setIndexableText(Google_Service_Drive_DriveFileIndexableText $indexableText)
    {
        $this->indexableText = $indexableText;
    }

    public function getIndexableText()
    {
        return $this->indexableText;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setLabels(Google_Service_Drive_DriveFileLabels $labels)
    {
        $this->labels = $labels;
    }

    public function getLabels()
    {
        return $this->labels;
    }

    public function setLastModifyingUser(Google_Service_Drive_User $lastModifyingUser)
    {
        $this->lastModifyingUser = $lastModifyingUser;
    }

    public function getLastModifyingUser()
    {
        return $this->lastModifyingUser;
    }

    public function getLastModifyingUserName()
    {
        return $this->lastModifyingUserName;
    }

    public function setLastModifyingUserName($lastModifyingUserName)
    {
        $this->lastModifyingUserName = $lastModifyingUserName;
    }

    public function getLastViewedByMeDate()
    {
        return $this->lastViewedByMeDate;
    }

    public function setLastViewedByMeDate($lastViewedByMeDate)
    {
        $this->lastViewedByMeDate = $lastViewedByMeDate;
    }

    public function getMarkedViewedByMeDate()
    {
        return $this->markedViewedByMeDate;
    }

    public function setMarkedViewedByMeDate($markedViewedByMeDate)
    {
        $this->markedViewedByMeDate = $markedViewedByMeDate;
    }

    public function getMd5Checksum()
    {
        return $this->md5Checksum;
    }

    public function setMd5Checksum($md5Checksum)
    {
        $this->md5Checksum = $md5Checksum;
    }

    public function getMimeType()
    {
        return $this->mimeType;
    }

    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }

    public function getModifiedByMeDate()
    {
        return $this->modifiedByMeDate;
    }

    public function setModifiedByMeDate($modifiedByMeDate)
    {
        $this->modifiedByMeDate = $modifiedByMeDate;
    }

    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
    }

    public function getOpenWithLinks()
    {
        return $this->openWithLinks;
    }

    public function setOpenWithLinks($openWithLinks)
    {
        $this->openWithLinks = $openWithLinks;
    }

    public function getOriginalFilename()
    {
        return $this->originalFilename;
    }

    public function setOriginalFilename($originalFilename)
    {
        $this->originalFilename = $originalFilename;
    }

    public function getOwnerNames()
    {
        return $this->ownerNames;
    }

    public function setOwnerNames($ownerNames)
    {
        $this->ownerNames = $ownerNames;
    }

    public function setOwners($owners)
    {
        $this->owners = $owners;
    }

    public function getOwners()
    {
        return $this->owners;
    }

    public function setParents($parents)
    {
        $this->parents = $parents;
    }

    public function getParents()
    {
        return $this->parents;
    }

    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
    }

    public function getPermissions()
    {
        return $this->permissions;
    }

    public function setProperties($properties)
    {
        $this->properties = $properties;
    }

    public function getProperties()
    {
        return $this->properties;
    }

    public function getQuotaBytesUsed()
    {
        return $this->quotaBytesUsed;
    }

    public function setQuotaBytesUsed($quotaBytesUsed)
    {
        $this->quotaBytesUsed = $quotaBytesUsed;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getShared()
    {
        return $this->shared;
    }

    public function setShared($shared)
    {
        $this->shared = $shared;
    }

    public function getSharedWithMeDate()
    {
        return $this->sharedWithMeDate;
    }

    public function setSharedWithMeDate($sharedWithMeDate)
    {
        $this->sharedWithMeDate = $sharedWithMeDate;
    }

    public function setSharingUser(Google_Service_Drive_User $sharingUser)
    {
        $this->sharingUser = $sharingUser;
    }

    public function getSharingUser()
    {
        return $this->sharingUser;
    }

    public function setThumbnail(Google_Service_Drive_DriveFileThumbnail $thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    public function getThumbnailLink()
    {
        return $this->thumbnailLink;
    }

    public function setThumbnailLink($thumbnailLink)
    {
        $this->thumbnailLink = $thumbnailLink;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setUserPermission(Google_Service_Drive_Permission $userPermission)
    {
        $this->userPermission = $userPermission;
    }

    public function getUserPermission()
    {
        return $this->userPermission;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function setVideoMediaMetadata(Google_Service_Drive_DriveFileVideoMediaMetadata $videoMediaMetadata)
    {
        $this->videoMediaMetadata = $videoMediaMetadata;
    }

    public function getVideoMediaMetadata()
    {
        return $this->videoMediaMetadata;
    }

    public function getWebContentLink()
    {
        return $this->webContentLink;
    }

    public function setWebContentLink($webContentLink)
    {
        $this->webContentLink = $webContentLink;
    }

    public function getWebViewLink()
    {
        return $this->webViewLink;
    }

    public function setWebViewLink($webViewLink)
    {
        $this->webViewLink = $webViewLink;
    }

    public function getWritersCanShare()
    {
        return $this->writersCanShare;
    }

    public function setWritersCanShare($writersCanShare)
    {
        $this->writersCanShare = $writersCanShare;
    }
}

class Google_Service_Drive_DriveFileExportLinks extends Google_Model
{
}

class Google_Service_Drive_DriveFileImageMediaMetadata extends Google_Model
{
    public $aperture;
    public $cameraMake;
    public $cameraModel;
    public $colorSpace;
    public $date;
    public $exposureBias;
    public $exposureMode;
    public $exposureTime;
    public $flashUsed;
    public $focalLength;
    public $height;
    public $isoSpeed;
    public $lens;
    public $maxApertureValue;
    public $meteringMode;
    public $rotation;
    public $sensor;
    public $subjectDistance;
    public $whiteBalance;
    public $width;
    protected $internal_gapi_mappings = [];
    protected $locationType = 'Google_Service_Drive_DriveFileImageMediaMetadataLocation';
    protected $locationDataType = '';

    public function getAperture()
    {
        return $this->aperture;
    }

    public function setAperture($aperture)
    {
        $this->aperture = $aperture;
    }

    public function getCameraMake()
    {
        return $this->cameraMake;
    }

    public function setCameraMake($cameraMake)
    {
        $this->cameraMake = $cameraMake;
    }

    public function getCameraModel()
    {
        return $this->cameraModel;
    }

    public function setCameraModel($cameraModel)
    {
        $this->cameraModel = $cameraModel;
    }

    public function getColorSpace()
    {
        return $this->colorSpace;
    }

    public function setColorSpace($colorSpace)
    {
        $this->colorSpace = $colorSpace;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getExposureBias()
    {
        return $this->exposureBias;
    }

    public function setExposureBias($exposureBias)
    {
        $this->exposureBias = $exposureBias;
    }

    public function getExposureMode()
    {
        return $this->exposureMode;
    }

    public function setExposureMode($exposureMode)
    {
        $this->exposureMode = $exposureMode;
    }

    public function getExposureTime()
    {
        return $this->exposureTime;
    }

    public function setExposureTime($exposureTime)
    {
        $this->exposureTime = $exposureTime;
    }

    public function getFlashUsed()
    {
        return $this->flashUsed;
    }

    public function setFlashUsed($flashUsed)
    {
        $this->flashUsed = $flashUsed;
    }

    public function getFocalLength()
    {
        return $this->focalLength;
    }

    public function setFocalLength($focalLength)
    {
        $this->focalLength = $focalLength;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getIsoSpeed()
    {
        return $this->isoSpeed;
    }

    public function setIsoSpeed($isoSpeed)
    {
        $this->isoSpeed = $isoSpeed;
    }

    public function getLens()
    {
        return $this->lens;
    }

    public function setLens($lens)
    {
        $this->lens = $lens;
    }

    public function setLocation(Google_Service_Drive_DriveFileImageMediaMetadataLocation $location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getMaxApertureValue()
    {
        return $this->maxApertureValue;
    }

    public function setMaxApertureValue($maxApertureValue)
    {
        $this->maxApertureValue = $maxApertureValue;
    }

    public function getMeteringMode()
    {
        return $this->meteringMode;
    }

    public function setMeteringMode($meteringMode)
    {
        $this->meteringMode = $meteringMode;
    }

    public function getRotation()
    {
        return $this->rotation;
    }

    public function setRotation($rotation)
    {
        $this->rotation = $rotation;
    }

    public function getSensor()
    {
        return $this->sensor;
    }

    public function setSensor($sensor)
    {
        $this->sensor = $sensor;
    }

    public function getSubjectDistance()
    {
        return $this->subjectDistance;
    }

    public function setSubjectDistance($subjectDistance)
    {
        $this->subjectDistance = $subjectDistance;
    }

    public function getWhiteBalance()
    {
        return $this->whiteBalance;
    }

    public function setWhiteBalance($whiteBalance)
    {
        $this->whiteBalance = $whiteBalance;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }
}

class Google_Service_Drive_DriveFileImageMediaMetadataLocation extends Google_Model
{
    public $altitude;
    public $latitude;
    public $longitude;
    protected $internal_gapi_mappings = [];

    public function getAltitude()
    {
        return $this->altitude;
    }

    public function setAltitude($altitude)
    {
        $this->altitude = $altitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }
}

class Google_Service_Drive_DriveFileIndexableText extends Google_Model
{
    public $text;
    protected $internal_gapi_mappings = [];

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }
}

class Google_Service_Drive_DriveFileLabels extends Google_Model
{
    public $hidden;
    public $restricted;
    public $starred;
    public $trashed;
    public $viewed;
    protected $internal_gapi_mappings = [];

    public function getHidden()
    {
        return $this->hidden;
    }

    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
    }

    public function getRestricted()
    {
        return $this->restricted;
    }

    public function setRestricted($restricted)
    {
        $this->restricted = $restricted;
    }

    public function getStarred()
    {
        return $this->starred;
    }

    public function setStarred($starred)
    {
        $this->starred = $starred;
    }

    public function getTrashed()
    {
        return $this->trashed;
    }

    public function setTrashed($trashed)
    {
        $this->trashed = $trashed;
    }

    public function getViewed()
    {
        return $this->viewed;
    }

    public function setViewed($viewed)
    {
        $this->viewed = $viewed;
    }
}

class Google_Service_Drive_DriveFileOpenWithLinks extends Google_Model
{
}

class Google_Service_Drive_DriveFileThumbnail extends Google_Model
{
    public $image;
    public $mimeType;
    protected $internal_gapi_mappings = [];

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getMimeType()
    {
        return $this->mimeType;
    }

    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }
}

class Google_Service_Drive_DriveFileVideoMediaMetadata extends Google_Model
{
    public $durationMillis;
    public $height;
    public $width;
    protected $internal_gapi_mappings = [];

    public function getDurationMillis()
    {
        return $this->durationMillis;
    }

    public function setDurationMillis($durationMillis)
    {
        $this->durationMillis = $durationMillis;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }
}

class Google_Service_Drive_FileList extends Google_Collection
{
    public $etag;
    public $kind;
    public $nextLink;
    public $nextPageToken;
    public $selfLink;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Drive_DriveFile';
    protected $itemsDataType = 'array';

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
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

    public function getNextLink()
    {
        return $this->nextLink;
    }

    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
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

class Google_Service_Drive_ParentList extends Google_Collection
{
    public $etag;
    public $kind;
    public $selfLink;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Drive_ParentReference';
    protected $itemsDataType = 'array';

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
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

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_Service_Drive_ParentReference extends Google_Model
{
    public $id;
    public $isRoot;
    public $kind;
    public $parentLink;
    public $selfLink;
    protected $internal_gapi_mappings = [];

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIsRoot()
    {
        return $this->isRoot;
    }

    public function setIsRoot($isRoot)
    {
        $this->isRoot = $isRoot;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getParentLink()
    {
        return $this->parentLink;
    }

    public function setParentLink($parentLink)
    {
        $this->parentLink = $parentLink;
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

class Google_Service_Drive_Permission extends Google_Collection
{
    public $additionalRoles;
    public $authKey;
    public $domain;
    public $emailAddress;
    public $etag;
    public $id;
    public $kind;
    public $name;
    public $photoLink;
    public $role;
    public $selfLink;
    public $type;
    public $value;
    public $withLink;
    protected $collection_key = 'additionalRoles';
    protected $internal_gapi_mappings = [];

    public function getAdditionalRoles()
    {
        return $this->additionalRoles;
    }

    public function setAdditionalRoles($additionalRoles)
    {
        $this->additionalRoles = $additionalRoles;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function setAuthKey($authKey)
    {
        $this->authKey = $authKey;
    }

    public function getDomain()
    {
        return $this->domain;
    }

    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
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

    public function getPhotoLink()
    {
        return $this->photoLink;
    }

    public function setPhotoLink($photoLink)
    {
        $this->photoLink = $photoLink;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getWithLink()
    {
        return $this->withLink;
    }

    public function setWithLink($withLink)
    {
        $this->withLink = $withLink;
    }
}

class Google_Service_Drive_PermissionId extends Google_Model
{
    public $id;
    public $kind;
    protected $internal_gapi_mappings = [];

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

class Google_Service_Drive_PermissionList extends Google_Collection
{
    public $etag;
    public $kind;
    public $selfLink;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Drive_Permission';
    protected $itemsDataType = 'array';

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
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

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_Service_Drive_Property extends Google_Model
{
    public $etag;
    public $key;
    public $kind;
    public $selfLink;
    public $value;
    public $visibility;
    protected $internal_gapi_mappings = [];

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function setKey($key)
    {
        $this->key = $key;
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

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getVisibility()
    {
        return $this->visibility;
    }

    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
    }
}

class Google_Service_Drive_PropertyList extends Google_Collection
{
    public $etag;
    public $kind;
    public $selfLink;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Drive_Property';
    protected $itemsDataType = 'array';

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
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

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_Service_Drive_Revision extends Google_Model
{
    public $downloadUrl;
    public $etag;
    public $exportLinks;
    public $fileSize;
    public $id;
    public $kind;
    public $lastModifyingUserName;
    public $md5Checksum;
    public $mimeType;
    public $modifiedDate;
    public $originalFilename;
    public $pinned;
    public $publishAuto;
    public $published;
    public $publishedLink;
    public $publishedOutsideDomain;
    public $selfLink;
    protected $internal_gapi_mappings = [];
    protected $lastModifyingUserType = 'Google_Service_Drive_User';
    protected $lastModifyingUserDataType = '';

    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }

    public function setDownloadUrl($downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getExportLinks()
    {
        return $this->exportLinks;
    }

    public function setExportLinks($exportLinks)
    {
        $this->exportLinks = $exportLinks;
    }

    public function getFileSize()
    {
        return $this->fileSize;
    }

    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
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

    public function setLastModifyingUser(Google_Service_Drive_User $lastModifyingUser)
    {
        $this->lastModifyingUser = $lastModifyingUser;
    }

    public function getLastModifyingUser()
    {
        return $this->lastModifyingUser;
    }

    public function getLastModifyingUserName()
    {
        return $this->lastModifyingUserName;
    }

    public function setLastModifyingUserName($lastModifyingUserName)
    {
        $this->lastModifyingUserName = $lastModifyingUserName;
    }

    public function getMd5Checksum()
    {
        return $this->md5Checksum;
    }

    public function setMd5Checksum($md5Checksum)
    {
        $this->md5Checksum = $md5Checksum;
    }

    public function getMimeType()
    {
        return $this->mimeType;
    }

    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }

    public function getModifiedDate()
    {
        return $this->modifiedDate;
    }

    public function setModifiedDate($modifiedDate)
    {
        $this->modifiedDate = $modifiedDate;
    }

    public function getOriginalFilename()
    {
        return $this->originalFilename;
    }

    public function setOriginalFilename($originalFilename)
    {
        $this->originalFilename = $originalFilename;
    }

    public function getPinned()
    {
        return $this->pinned;
    }

    public function setPinned($pinned)
    {
        $this->pinned = $pinned;
    }

    public function getPublishAuto()
    {
        return $this->publishAuto;
    }

    public function setPublishAuto($publishAuto)
    {
        $this->publishAuto = $publishAuto;
    }

    public function getPublished()
    {
        return $this->published;
    }

    public function setPublished($published)
    {
        $this->published = $published;
    }

    public function getPublishedLink()
    {
        return $this->publishedLink;
    }

    public function setPublishedLink($publishedLink)
    {
        $this->publishedLink = $publishedLink;
    }

    public function getPublishedOutsideDomain()
    {
        return $this->publishedOutsideDomain;
    }

    public function setPublishedOutsideDomain($publishedOutsideDomain)
    {
        $this->publishedOutsideDomain = $publishedOutsideDomain;
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

class Google_Service_Drive_RevisionExportLinks extends Google_Model
{
}

class Google_Service_Drive_RevisionList extends Google_Collection
{
    public $etag;
    public $kind;
    public $selfLink;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Drive_Revision';
    protected $itemsDataType = 'array';

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
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

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }
}

class Google_Service_Drive_User extends Google_Model
{
    public $displayName;
    public $emailAddress;
    public $isAuthenticatedUser;
    public $kind;
    public $permissionId;
    protected $internal_gapi_mappings = [];
    protected $pictureType = 'Google_Service_Drive_UserPicture';
    protected $pictureDataType = '';

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    public function getIsAuthenticatedUser()
    {
        return $this->isAuthenticatedUser;
    }

    public function setIsAuthenticatedUser($isAuthenticatedUser)
    {
        $this->isAuthenticatedUser = $isAuthenticatedUser;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getPermissionId()
    {
        return $this->permissionId;
    }

    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;
    }

    public function setPicture(Google_Service_Drive_UserPicture $picture)
    {
        $this->picture = $picture;
    }

    public function getPicture()
    {
        return $this->picture;
    }
}

class Google_Service_Drive_UserPicture extends Google_Model
{
    public $url;
    protected $internal_gapi_mappings = [];

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }
}
