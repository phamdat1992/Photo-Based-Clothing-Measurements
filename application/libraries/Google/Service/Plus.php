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
 * Service definition for Plus (v1).
 *
 * <p>
 * The Google+ API enables developers to build on top of the Google+ platform.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/+/api/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Plus extends Google_Service
{
    /** Know your basic profile info and list of people in your circles.. */
    const PLUS_LOGIN =
        "https://www.googleapis.com/auth/plus.login";
    /** Know who you are on Google. */
    const PLUS_ME =
        "https://www.googleapis.com/auth/plus.me";
    /** View your email address. */
    const USERINFO_EMAIL =
        "https://www.googleapis.com/auth/userinfo.email";
    /** View your basic profile info. */
    const USERINFO_PROFILE =
        "https://www.googleapis.com/auth/userinfo.profile";

    public $activities;
    public $comments;
    public $moments;
    public $people;


    /**
     * Constructs the internal representation of the Plus service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = 'plus/v1/';
        $this->version = 'v1';
        $this->serviceName = 'plus';

        $this->activities = new Google_Service_Plus_Activities_Resource(
            $this,
            $this->serviceName,
            'activities',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'activities/{activityId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'activityId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'people/{userId}/activities/{collection}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'userId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'collection' => array(
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
                    ), 'search' => array(
                        'path' => 'activities',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'query' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'orderBy' => array(
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
                            'language' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->comments = new Google_Service_Plus_Comments_Resource(
            $this,
            $this->serviceName,
            'comments',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'comments/{commentId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'commentId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'activities/{activityId}/comments',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'activityId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'sortOrder' => array(
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
        $this->moments = new Google_Service_Plus_Moments_Resource(
            $this,
            $this->serviceName,
            'moments',
            array(
                'methods' => array(
                    'insert' => array(
                        'path' => 'people/{userId}/moments/{collection}',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'userId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'collection' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'debug' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'people/{userId}/moments/{collection}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'userId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'collection' => array(
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
                            'targetUrl' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'type' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ), 'remove' => array(
                        'path' => 'moments/{id}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'id' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->people = new Google_Service_Plus_People_Resource(
            $this,
            $this->serviceName,
            'people',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'people/{userId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'userId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'people/{userId}/people/{collection}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'userId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'collection' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'orderBy' => array(
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
                    ), 'listByActivity' => array(
                        'path' => 'activities/{activityId}/people/{collection}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'activityId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'collection' => array(
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
                    ), 'search' => array(
                        'path' => 'people',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'query' => array(
                                'location' => 'query',
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
                            'language' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ),
                )
            )
        );
    }
}


/**
 * The "activities" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_Service_Plus(...);
 *   $activities = $plusService->activities;
 *  </code>
 */
class Google_Service_Plus_Activities_Resource extends Google_Service_Resource
{

    /**
     * Get an activity. (activities.get)
     *
     * @param string $activityId The ID of the activity to get.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Plus_Activity
     */
    public function get($activityId, $optParams = [])
    {
        $params = array('activityId' => $activityId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Plus_Activity");
    }

    /**
     * List all of the activities in the specified collection for a particular user.
     * (activities.listActivities)
     *
     * @param string $userId The ID of the user to get activities for. The special
     * value "me" can be used to indicate the authenticated user.
     * @param string $collection The collection of activities to list.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response.
     * @opt_param string maxResults The maximum number of activities to include in
     * the response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @return Google_Service_Plus_ActivityFeed
     */
    public function listActivities($userId, $collection, $optParams = [])
    {
        $params = array('userId' => $userId, 'collection' => $collection);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Plus_ActivityFeed");
    }

    /**
     * Search public activities. (activities.search)
     *
     * @param string $query Full-text search query string.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string orderBy Specifies how to order search results.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response. This
     * token can be of any length.
     * @opt_param string maxResults The maximum number of activities to include in
     * the response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @opt_param string language Specify the preferred language to search with. See
     * search language codes for available values.
     * @return Google_Service_Plus_ActivityFeed
     */
    public function search($query, $optParams = [])
    {
        $params = array('query' => $query);
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_Plus_ActivityFeed");
    }
}

/**
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_Service_Plus(...);
 *   $comments = $plusService->comments;
 *  </code>
 */
class Google_Service_Plus_Comments_Resource extends Google_Service_Resource
{

    /**
     * Get a comment. (comments.get)
     *
     * @param string $commentId The ID of the comment to get.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Plus_Comment
     */
    public function get($commentId, $optParams = [])
    {
        $params = array('commentId' => $commentId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Plus_Comment");
    }

    /**
     * List all of the comments for an activity. (comments.listComments)
     *
     * @param string $activityId The ID of the activity to get comments for.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response.
     * @opt_param string sortOrder The order in which to sort the list of comments.
     * @opt_param string maxResults The maximum number of comments to include in the
     * response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @return Google_Service_Plus_CommentFeed
     */
    public function listComments($activityId, $optParams = [])
    {
        $params = array('activityId' => $activityId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Plus_CommentFeed");
    }
}

/**
 * The "moments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_Service_Plus(...);
 *   $moments = $plusService->moments;
 *  </code>
 */
class Google_Service_Plus_Moments_Resource extends Google_Service_Resource
{

    /**
     * Record a moment representing a user's action such as making a purchase or
     * commenting on a blog. (moments.insert)
     *
     * @param string $userId The ID of the user to record actions for. The only
     * valid values are "me" and the ID of the authenticated user.
     * @param string $collection The collection to which to write moments.
     * @param Google_Moment $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool debug Return the moment as written. Should be used only for
     * debugging.
     * @return Google_Service_Plus_Moment
     */
    public function insert($userId, $collection, Google_Service_Plus_Moment $postBody, $optParams = [])
    {
        $params = array('userId' => $userId, 'collection' => $collection, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Plus_Moment");
    }

    /**
     * List all of the moments for a particular user. (moments.listMoments)
     *
     * @param string $userId The ID of the user to get moments for. The special
     * value "me" can be used to indicate the authenticated user.
     * @param string $collection The collection of moments to list.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of moments to include in the
     * response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response.
     * @opt_param string targetUrl Only moments containing this targetUrl will be
     * returned.
     * @opt_param string type Only moments of this type will be returned.
     * @return Google_Service_Plus_MomentsFeed
     */
    public function listMoments($userId, $collection, $optParams = [])
    {
        $params = array('userId' => $userId, 'collection' => $collection);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Plus_MomentsFeed");
    }

    /**
     * Delete a moment. (moments.remove)
     *
     * @param string $id The ID of the moment to delete.
     * @param array $optParams Optional parameters.
     */
    public function remove($id, $optParams = [])
    {
        $params = array('id' => $id);
        $params = array_merge($params, $optParams);
        return $this->call('remove', array($params));
    }
}

/**
 * The "people" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new Google_Service_Plus(...);
 *   $people = $plusService->people;
 *  </code>
 */
class Google_Service_Plus_People_Resource extends Google_Service_Resource
{

    /**
     * Get a person's profile. If your app uses scope
     * https://www.googleapis.com/auth/plus.login, this method is guaranteed to
     * return ageRange and language. (people.get)
     *
     * @param string $userId The ID of the person to get the profile for. The
     * special value "me" can be used to indicate the authenticated user.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Plus_Person
     */
    public function get($userId, $optParams = [])
    {
        $params = array('userId' => $userId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Plus_Person");
    }

    /**
     * List all of the people in the specified collection. (people.listPeople)
     *
     * @param string $userId Get the collection of people for the person identified.
     * Use "me" to indicate the authenticated user.
     * @param string $collection The collection of people to list.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string orderBy The order to return people in.
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response.
     * @opt_param string maxResults The maximum number of people to include in the
     * response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @return Google_Service_Plus_PeopleFeed
     */
    public function listPeople($userId, $collection, $optParams = [])
    {
        $params = array('userId' => $userId, 'collection' => $collection);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Plus_PeopleFeed");
    }

    /**
     * List all of the people in the specified collection for a particular activity.
     * (people.listByActivity)
     *
     * @param string $activityId The ID of the activity to get the list of people
     * for.
     * @param string $collection The collection of people to list.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response.
     * @opt_param string maxResults The maximum number of people to include in the
     * response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @return Google_Service_Plus_PeopleFeed
     */
    public function listByActivity($activityId, $collection, $optParams = [])
    {
        $params = array('activityId' => $activityId, 'collection' => $collection);
        $params = array_merge($params, $optParams);
        return $this->call('listByActivity', array($params), "Google_Service_Plus_PeopleFeed");
    }

    /**
     * Search all public profiles. (people.search)
     *
     * @param string $query Specify a query string for full text search of public
     * text in all profiles.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken The continuation token, which is used to page
     * through large result sets. To get the next page of results, set this
     * parameter to the value of "nextPageToken" from the previous response. This
     * token can be of any length.
     * @opt_param string maxResults The maximum number of people to include in the
     * response, which is used for paging. For any response, the actual number
     * returned might be less than the specified maxResults.
     * @opt_param string language Specify the preferred language to search with. See
     * search language codes for available values.
     * @return Google_Service_Plus_PeopleFeed
     */
    public function search($query, $optParams = [])
    {
        $params = array('query' => $query);
        $params = array_merge($params, $optParams);
        return $this->call('search', array($params), "Google_Service_Plus_PeopleFeed");
    }
}


class Google_Service_Plus_Acl extends Google_Collection
{
    public $description;
    public $kind;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Plus_PlusAclentryResource';
    protected $itemsDataType = 'array';

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
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
}

class Google_Service_Plus_Activity extends Google_Model
{
    public $address;
    public $annotation;
    public $crosspostSource;
    public $etag;
    public $geocode;
    public $id;
    public $kind;
    public $placeId;
    public $placeName;
    public $published;
    public $radius;
    public $title;
    public $updated;
    public $url;
    public $verb;
    protected $internal_gapi_mappings = [];
    protected $accessType = 'Google_Service_Plus_Acl';
    protected $accessDataType = '';
    protected $actorType = 'Google_Service_Plus_ActivityActor';
    protected $actorDataType = '';
    protected $locationType = 'Google_Service_Plus_Place';
    protected $locationDataType = '';
    protected $objectType = 'Google_Service_Plus_ActivityObject';
    protected $objectDataType = '';
    protected $providerType = 'Google_Service_Plus_ActivityProvider';
    protected $providerDataType = '';

    public function setAccess(Google_Service_Plus_Acl $access)
    {
        $this->access = $access;
    }

    public function getAccess()
    {
        return $this->access;
    }

    public function setActor(Google_Service_Plus_ActivityActor $actor)
    {
        $this->actor = $actor;
    }

    public function getActor()
    {
        return $this->actor;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAnnotation()
    {
        return $this->annotation;
    }

    public function setAnnotation($annotation)
    {
        $this->annotation = $annotation;
    }

    public function getCrosspostSource()
    {
        return $this->crosspostSource;
    }

    public function setCrosspostSource($crosspostSource)
    {
        $this->crosspostSource = $crosspostSource;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getGeocode()
    {
        return $this->geocode;
    }

    public function setGeocode($geocode)
    {
        $this->geocode = $geocode;
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

    public function setLocation(Google_Service_Plus_Place $location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setObject(Google_Service_Plus_ActivityObject $object)
    {
        $this->object = $object;
    }

    public function getObject()
    {
        return $this->object;
    }

    public function getPlaceId()
    {
        return $this->placeId;
    }

    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;
    }

    public function getPlaceName()
    {
        return $this->placeName;
    }

    public function setPlaceName($placeName)
    {
        $this->placeName = $placeName;
    }

    public function setProvider(Google_Service_Plus_ActivityProvider $provider)
    {
        $this->provider = $provider;
    }

    public function getProvider()
    {
        return $this->provider;
    }

    public function getPublished()
    {
        return $this->published;
    }

    public function setPublished($published)
    {
        $this->published = $published;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
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

class Google_Service_Plus_ActivityActor extends Google_Model
{
    public $displayName;
    public $id;
    public $url;
    protected $internal_gapi_mappings = [];
    protected $imageType = 'Google_Service_Plus_ActivityActorImage';
    protected $imageDataType = '';
    protected $nameType = 'Google_Service_Plus_ActivityActorName';
    protected $nameDataType = '';

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setImage(Google_Service_Plus_ActivityActorImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setName(Google_Service_Plus_ActivityActorName $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
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

class Google_Service_Plus_ActivityActorImage extends Google_Model
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

class Google_Service_Plus_ActivityActorName extends Google_Model
{
    public $familyName;
    public $givenName;
    protected $internal_gapi_mappings = [];

    public function getFamilyName()
    {
        return $this->familyName;
    }

    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    public function getGivenName()
    {
        return $this->givenName;
    }

    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }
}

class Google_Service_Plus_ActivityFeed extends Google_Collection
{
    public $etag;
    public $id;
    public $kind;
    public $nextLink;
    public $nextPageToken;
    public $selfLink;
    public $title;
    public $updated;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Plus_Activity';
    protected $itemsDataType = 'array';

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

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
}

class Google_Service_Plus_ActivityObject extends Google_Collection
{
    public $content;
    public $id;
    public $objectType;
    public $originalContent;
    public $url;
    protected $collection_key = 'attachments';
    protected $internal_gapi_mappings = [];
    protected $actorType = 'Google_Service_Plus_ActivityObjectActor';
    protected $actorDataType = '';
    protected $attachmentsType = 'Google_Service_Plus_ActivityObjectAttachments';
    protected $attachmentsDataType = 'array';
    protected $plusonersType = 'Google_Service_Plus_ActivityObjectPlusoners';
    protected $plusonersDataType = '';
    protected $repliesType = 'Google_Service_Plus_ActivityObjectReplies';
    protected $repliesDataType = '';
    protected $resharersType = 'Google_Service_Plus_ActivityObjectResharers';
    protected $resharersDataType = '';

    public function setActor(Google_Service_Plus_ActivityObjectActor $actor)
    {
        $this->actor = $actor;
    }

    public function getActor()
    {
        return $this->actor;
    }

    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
    }

    public function getAttachments()
    {
        return $this->attachments;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getObjectType()
    {
        return $this->objectType;
    }

    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    public function getOriginalContent()
    {
        return $this->originalContent;
    }

    public function setOriginalContent($originalContent)
    {
        $this->originalContent = $originalContent;
    }

    public function setPlusoners(Google_Service_Plus_ActivityObjectPlusoners $plusoners)
    {
        $this->plusoners = $plusoners;
    }

    public function getPlusoners()
    {
        return $this->plusoners;
    }

    public function setReplies(Google_Service_Plus_ActivityObjectReplies $replies)
    {
        $this->replies = $replies;
    }

    public function getReplies()
    {
        return $this->replies;
    }

    public function setResharers(Google_Service_Plus_ActivityObjectResharers $resharers)
    {
        $this->resharers = $resharers;
    }

    public function getResharers()
    {
        return $this->resharers;
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

class Google_Service_Plus_ActivityObjectActor extends Google_Model
{
    public $displayName;
    public $id;
    public $url;
    protected $internal_gapi_mappings = [];
    protected $imageType = 'Google_Service_Plus_ActivityObjectActorImage';
    protected $imageDataType = '';

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setImage(Google_Service_Plus_ActivityObjectActorImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
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

class Google_Service_Plus_ActivityObjectActorImage extends Google_Model
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

class Google_Service_Plus_ActivityObjectAttachments extends Google_Collection
{
    public $content;
    public $displayName;
    public $id;
    public $objectType;
    public $url;
    protected $collection_key = 'thumbnails';
    protected $internal_gapi_mappings = [];
    protected $embedType = 'Google_Service_Plus_ActivityObjectAttachmentsEmbed';
    protected $embedDataType = '';
    protected $fullImageType = 'Google_Service_Plus_ActivityObjectAttachmentsFullImage';
    protected $fullImageDataType = '';
    protected $imageType = 'Google_Service_Plus_ActivityObjectAttachmentsImage';
    protected $imageDataType = '';
    protected $thumbnailsType = 'Google_Service_Plus_ActivityObjectAttachmentsThumbnails';
    protected $thumbnailsDataType = 'array';

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function setEmbed(Google_Service_Plus_ActivityObjectAttachmentsEmbed $embed)
    {
        $this->embed = $embed;
    }

    public function getEmbed()
    {
        return $this->embed;
    }

    public function setFullImage(Google_Service_Plus_ActivityObjectAttachmentsFullImage $fullImage)
    {
        $this->fullImage = $fullImage;
    }

    public function getFullImage()
    {
        return $this->fullImage;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setImage(Google_Service_Plus_ActivityObjectAttachmentsImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getObjectType()
    {
        return $this->objectType;
    }

    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    public function setThumbnails($thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }

    public function getThumbnails()
    {
        return $this->thumbnails;
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

class Google_Service_Plus_ActivityObjectAttachmentsEmbed extends Google_Model
{
    public $type;
    public $url;
    protected $internal_gapi_mappings = [];

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

class Google_Service_Plus_ActivityObjectAttachmentsFullImage extends Google_Model
{
    public $height;
    public $type;
    public $url;
    public $width;
    protected $internal_gapi_mappings = [];

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
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

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }
}

class Google_Service_Plus_ActivityObjectAttachmentsImage extends Google_Model
{
    public $height;
    public $type;
    public $url;
    public $width;
    protected $internal_gapi_mappings = [];

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
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

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }
}

class Google_Service_Plus_ActivityObjectAttachmentsThumbnails extends Google_Model
{
    public $description;
    public $url;
    protected $internal_gapi_mappings = [];
    protected $imageType = 'Google_Service_Plus_ActivityObjectAttachmentsThumbnailsImage';
    protected $imageDataType = '';

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setImage(Google_Service_Plus_ActivityObjectAttachmentsThumbnailsImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
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

class Google_Service_Plus_ActivityObjectAttachmentsThumbnailsImage extends Google_Model
{
    public $height;
    public $type;
    public $url;
    public $width;
    protected $internal_gapi_mappings = [];

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
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

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }
}

class Google_Service_Plus_ActivityObjectPlusoners extends Google_Model
{
    public $selfLink;
    public $totalItems;
    protected $internal_gapi_mappings = [];

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
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

class Google_Service_Plus_ActivityObjectReplies extends Google_Model
{
    public $selfLink;
    public $totalItems;
    protected $internal_gapi_mappings = [];

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
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

class Google_Service_Plus_ActivityObjectResharers extends Google_Model
{
    public $selfLink;
    public $totalItems;
    protected $internal_gapi_mappings = [];

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
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

class Google_Service_Plus_ActivityProvider extends Google_Model
{
    public $title;
    protected $internal_gapi_mappings = [];

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}

class Google_Service_Plus_Comment extends Google_Collection
{
    public $etag;
    public $id;
    public $kind;
    public $published;
    public $selfLink;
    public $updated;
    public $verb;
    protected $collection_key = 'inReplyTo';
    protected $internal_gapi_mappings = [];
    protected $actorType = 'Google_Service_Plus_CommentActor';
    protected $actorDataType = '';
    protected $inReplyToType = 'Google_Service_Plus_CommentInReplyTo';
    protected $inReplyToDataType = 'array';
    protected $objectType = 'Google_Service_Plus_CommentObject';
    protected $objectDataType = '';
    protected $plusonersType = 'Google_Service_Plus_CommentPlusoners';
    protected $plusonersDataType = '';

    public function setActor(Google_Service_Plus_CommentActor $actor)
    {
        $this->actor = $actor;
    }

    public function getActor()
    {
        return $this->actor;
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

    public function setInReplyTo($inReplyTo)
    {
        $this->inReplyTo = $inReplyTo;
    }

    public function getInReplyTo()
    {
        return $this->inReplyTo;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function setObject(Google_Service_Plus_CommentObject $object)
    {
        $this->object = $object;
    }

    public function getObject()
    {
        return $this->object;
    }

    public function setPlusoners(Google_Service_Plus_CommentPlusoners $plusoners)
    {
        $this->plusoners = $plusoners;
    }

    public function getPlusoners()
    {
        return $this->plusoners;
    }

    public function getPublished()
    {
        return $this->published;
    }

    public function setPublished($published)
    {
        $this->published = $published;
    }

    public function getSelfLink()
    {
        return $this->selfLink;
    }

    public function setSelfLink($selfLink)
    {
        $this->selfLink = $selfLink;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
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

class Google_Service_Plus_CommentActor extends Google_Model
{
    public $displayName;
    public $id;
    public $url;
    protected $internal_gapi_mappings = [];
    protected $imageType = 'Google_Service_Plus_CommentActorImage';
    protected $imageDataType = '';

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setImage(Google_Service_Plus_CommentActorImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
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

class Google_Service_Plus_CommentActorImage extends Google_Model
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

class Google_Service_Plus_CommentFeed extends Google_Collection
{
    public $etag;
    public $id;
    public $kind;
    public $nextLink;
    public $nextPageToken;
    public $title;
    public $updated;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Plus_Comment';
    protected $itemsDataType = 'array';

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

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
}

class Google_Service_Plus_CommentInReplyTo extends Google_Model
{
    public $id;
    public $url;
    protected $internal_gapi_mappings = [];

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
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

class Google_Service_Plus_CommentObject extends Google_Model
{
    public $content;
    public $objectType;
    public $originalContent;
    protected $internal_gapi_mappings = [];

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getObjectType()
    {
        return $this->objectType;
    }

    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    public function getOriginalContent()
    {
        return $this->originalContent;
    }

    public function setOriginalContent($originalContent)
    {
        $this->originalContent = $originalContent;
    }
}

class Google_Service_Plus_CommentPlusoners extends Google_Model
{
    public $totalItems;
    protected $internal_gapi_mappings = [];

    public function getTotalItems()
    {
        return $this->totalItems;
    }

    public function setTotalItems($totalItems)
    {
        $this->totalItems = $totalItems;
    }
}

class Google_Service_Plus_ItemScope extends Google_Collection
{
    public $additionalName;
    public $addressCountry;
    public $addressLocality;
    public $addressRegion;
    public $attendeeCount;
    public $bestRating;
    public $birthDate;
    public $caption;
    public $contentSize;
    public $contentUrl;
    public $dateCreated;
    public $dateModified;
    public $datePublished;
    public $description;
    public $duration;
    public $embedUrl;
    public $endDate;
    public $familyName;
    public $gender;
    public $givenName;
    public $height;
    public $id;
    public $image;
    public $kind;
    public $latitude;
    public $longitude;
    public $name;
    public $playerType;
    public $postOfficeBoxNumber;
    public $postalCode;
    public $ratingValue;
    public $startDate;
    public $streetAddress;
    public $text;
    public $thumbnailUrl;
    public $tickerSymbol;
    public $type;
    public $url;
    public $width;
    public $worstRating;
    protected $collection_key = 'performers';
    protected $internal_gapi_mappings = array(
        "associatedMedia" => "associated_media",
    );
    protected $aboutType = 'Google_Service_Plus_ItemScope';
    protected $aboutDataType = '';
    protected $addressType = 'Google_Service_Plus_ItemScope';
    protected $addressDataType = '';
    protected $associatedMediaType = 'Google_Service_Plus_ItemScope';
    protected $associatedMediaDataType = 'array';
    protected $attendeesType = 'Google_Service_Plus_ItemScope';
    protected $attendeesDataType = 'array';
    protected $audioType = 'Google_Service_Plus_ItemScope';
    protected $audioDataType = '';
    protected $authorType = 'Google_Service_Plus_ItemScope';
    protected $authorDataType = 'array';
    protected $byArtistType = 'Google_Service_Plus_ItemScope';
    protected $byArtistDataType = '';
    protected $contributorType = 'Google_Service_Plus_ItemScope';
    protected $contributorDataType = 'array';
    protected $geoType = 'Google_Service_Plus_ItemScope';
    protected $geoDataType = '';
    protected $inAlbumType = 'Google_Service_Plus_ItemScope';
    protected $inAlbumDataType = '';
    protected $locationType = 'Google_Service_Plus_ItemScope';
    protected $locationDataType = '';
    protected $partOfTVSeriesType = 'Google_Service_Plus_ItemScope';
    protected $partOfTVSeriesDataType = '';
    protected $performersType = 'Google_Service_Plus_ItemScope';
    protected $performersDataType = 'array';
    protected $reviewRatingType = 'Google_Service_Plus_ItemScope';
    protected $reviewRatingDataType = '';
    protected $thumbnailType = 'Google_Service_Plus_ItemScope';
    protected $thumbnailDataType = '';

    public function setAbout(Google_Service_Plus_ItemScope $about)
    {
        $this->about = $about;
    }

    public function getAbout()
    {
        return $this->about;
    }

    public function getAdditionalName()
    {
        return $this->additionalName;
    }

    public function setAdditionalName($additionalName)
    {
        $this->additionalName = $additionalName;
    }

    public function setAddress(Google_Service_Plus_ItemScope $address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;
    }

    public function getAddressLocality()
    {
        return $this->addressLocality;
    }

    public function setAddressLocality($addressLocality)
    {
        $this->addressLocality = $addressLocality;
    }

    public function getAddressRegion()
    {
        return $this->addressRegion;
    }

    public function setAddressRegion($addressRegion)
    {
        $this->addressRegion = $addressRegion;
    }

    public function setAssociatedMedia($associatedMedia)
    {
        $this->associatedMedia = $associatedMedia;
    }

    public function getAssociatedMedia()
    {
        return $this->associatedMedia;
    }

    public function getAttendeeCount()
    {
        return $this->attendeeCount;
    }

    public function setAttendeeCount($attendeeCount)
    {
        $this->attendeeCount = $attendeeCount;
    }

    public function setAttendees($attendees)
    {
        $this->attendees = $attendees;
    }

    public function getAttendees()
    {
        return $this->attendees;
    }

    public function setAudio(Google_Service_Plus_ItemScope $audio)
    {
        $this->audio = $audio;
    }

    public function getAudio()
    {
        return $this->audio;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getBestRating()
    {
        return $this->bestRating;
    }

    public function setBestRating($bestRating)
    {
        $this->bestRating = $bestRating;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function setByArtist(Google_Service_Plus_ItemScope $byArtist)
    {
        $this->byArtist = $byArtist;
    }

    public function getByArtist()
    {
        return $this->byArtist;
    }

    public function getCaption()
    {
        return $this->caption;
    }

    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    public function getContentSize()
    {
        return $this->contentSize;
    }

    public function setContentSize($contentSize)
    {
        $this->contentSize = $contentSize;
    }

    public function getContentUrl()
    {
        return $this->contentUrl;
    }

    public function setContentUrl($contentUrl)
    {
        $this->contentUrl = $contentUrl;
    }

    public function setContributor($contributor)
    {
        $this->contributor = $contributor;
    }

    public function getContributor()
    {
        return $this->contributor;
    }

    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }

    public function getDateModified()
    {
        return $this->dateModified;
    }

    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;
    }

    public function getDatePublished()
    {
        return $this->datePublished;
    }

    public function setDatePublished($datePublished)
    {
        $this->datePublished = $datePublished;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function getEmbedUrl()
    {
        return $this->embedUrl;
    }

    public function setEmbedUrl($embedUrl)
    {
        $this->embedUrl = $embedUrl;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getFamilyName()
    {
        return $this->familyName;
    }

    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setGeo(Google_Service_Plus_ItemScope $geo)
    {
        $this->geo = $geo;
    }

    public function getGeo()
    {
        return $this->geo;
    }

    public function getGivenName()
    {
        return $this->givenName;
    }

    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setInAlbum(Google_Service_Plus_ItemScope $inAlbum)
    {
        $this->inAlbum = $inAlbum;
    }

    public function getInAlbum()
    {
        return $this->inAlbum;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function setLocation(Google_Service_Plus_ItemScope $location)
    {
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPartOfTVSeries(Google_Service_Plus_ItemScope $partOfTVSeries)
    {
        $this->partOfTVSeries = $partOfTVSeries;
    }

    public function getPartOfTVSeries()
    {
        return $this->partOfTVSeries;
    }

    public function setPerformers($performers)
    {
        $this->performers = $performers;
    }

    public function getPerformers()
    {
        return $this->performers;
    }

    public function getPlayerType()
    {
        return $this->playerType;
    }

    public function setPlayerType($playerType)
    {
        $this->playerType = $playerType;
    }

    public function getPostOfficeBoxNumber()
    {
        return $this->postOfficeBoxNumber;
    }

    public function setPostOfficeBoxNumber($postOfficeBoxNumber)
    {
        $this->postOfficeBoxNumber = $postOfficeBoxNumber;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function getRatingValue()
    {
        return $this->ratingValue;
    }

    public function setRatingValue($ratingValue)
    {
        $this->ratingValue = $ratingValue;
    }

    public function setReviewRating(Google_Service_Plus_ItemScope $reviewRating)
    {
        $this->reviewRating = $reviewRating;
    }

    public function getReviewRating()
    {
        return $this->reviewRating;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    public function setStreetAddress($streetAddress)
    {
        $this->streetAddress = $streetAddress;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function setThumbnail(Google_Service_Plus_ItemScope $thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    public function getThumbnailUrl()
    {
        return $this->thumbnailUrl;
    }

    public function setThumbnailUrl($thumbnailUrl)
    {
        $this->thumbnailUrl = $thumbnailUrl;
    }

    public function getTickerSymbol()
    {
        return $this->tickerSymbol;
    }

    public function setTickerSymbol($tickerSymbol)
    {
        $this->tickerSymbol = $tickerSymbol;
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

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getWorstRating()
    {
        return $this->worstRating;
    }

    public function setWorstRating($worstRating)
    {
        $this->worstRating = $worstRating;
    }
}

class Google_Service_Plus_Moment extends Google_Model
{
    public $id;
    public $kind;
    public $startDate;
    public $type;
    protected $internal_gapi_mappings = [];
    protected $objectType = 'Google_Service_Plus_ItemScope';
    protected $objectDataType = '';
    protected $resultType = 'Google_Service_Plus_ItemScope';
    protected $resultDataType = '';
    protected $targetType = 'Google_Service_Plus_ItemScope';
    protected $targetDataType = '';

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

    public function setObject(Google_Service_Plus_ItemScope $object)
    {
        $this->object = $object;
    }

    public function getObject()
    {
        return $this->object;
    }

    public function setResult(Google_Service_Plus_ItemScope $result)
    {
        $this->result = $result;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function setTarget(Google_Service_Plus_ItemScope $target)
    {
        $this->target = $target;
    }

    public function getTarget()
    {
        return $this->target;
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

class Google_Service_Plus_MomentsFeed extends Google_Collection
{
    public $etag;
    public $kind;
    public $nextLink;
    public $nextPageToken;
    public $selfLink;
    public $title;
    public $updated;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Plus_Moment';
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

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
}

class Google_Service_Plus_PeopleFeed extends Google_Collection
{
    public $etag;
    public $kind;
    public $nextPageToken;
    public $selfLink;
    public $title;
    public $totalItems;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Plus_Person';
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

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
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

class Google_Service_Plus_Person extends Google_Collection
{
    public $aboutMe;
    public $birthday;
    public $braggingRights;
    public $circledByCount;
    public $currentLocation;
    public $displayName;
    public $domain;
    public $etag;
    public $gender;
    public $id;
    public $isPlusUser;
    public $kind;
    public $language;
    public $nickname;
    public $objectType;
    public $occupation;
    public $plusOneCount;
    public $relationshipStatus;
    public $skills;
    public $tagline;
    public $url;
    public $verified;
    protected $collection_key = 'urls';
    protected $internal_gapi_mappings = [];
    protected $ageRangeType = 'Google_Service_Plus_PersonAgeRange';
    protected $ageRangeDataType = '';
    protected $coverType = 'Google_Service_Plus_PersonCover';
    protected $coverDataType = '';
    protected $emailsType = 'Google_Service_Plus_PersonEmails';
    protected $emailsDataType = 'array';
    protected $imageType = 'Google_Service_Plus_PersonImage';
    protected $imageDataType = '';
    protected $nameType = 'Google_Service_Plus_PersonName';
    protected $nameDataType = '';
    protected $organizationsType = 'Google_Service_Plus_PersonOrganizations';
    protected $organizationsDataType = 'array';
    protected $placesLivedType = 'Google_Service_Plus_PersonPlacesLived';
    protected $placesLivedDataType = 'array';
    protected $urlsType = 'Google_Service_Plus_PersonUrls';
    protected $urlsDataType = 'array';

    public function getAboutMe()
    {
        return $this->aboutMe;
    }

    public function setAboutMe($aboutMe)
    {
        $this->aboutMe = $aboutMe;
    }

    public function setAgeRange(Google_Service_Plus_PersonAgeRange $ageRange)
    {
        $this->ageRange = $ageRange;
    }

    public function getAgeRange()
    {
        return $this->ageRange;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    public function getBraggingRights()
    {
        return $this->braggingRights;
    }

    public function setBraggingRights($braggingRights)
    {
        $this->braggingRights = $braggingRights;
    }

    public function getCircledByCount()
    {
        return $this->circledByCount;
    }

    public function setCircledByCount($circledByCount)
    {
        $this->circledByCount = $circledByCount;
    }

    public function setCover(Google_Service_Plus_PersonCover $cover)
    {
        $this->cover = $cover;
    }

    public function getCover()
    {
        return $this->cover;
    }

    public function getCurrentLocation()
    {
        return $this->currentLocation;
    }

    public function setCurrentLocation($currentLocation)
    {
        $this->currentLocation = $currentLocation;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getDomain()
    {
        return $this->domain;
    }

    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    public function setEmails($emails)
    {
        $this->emails = $emails;
    }

    public function getEmails()
    {
        return $this->emails;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setImage(Google_Service_Plus_PersonImage $image)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getIsPlusUser()
    {
        return $this->isPlusUser;
    }

    public function setIsPlusUser($isPlusUser)
    {
        $this->isPlusUser = $isPlusUser;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function setName(Google_Service_Plus_PersonName $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    public function getObjectType()
    {
        return $this->objectType;
    }

    public function setObjectType($objectType)
    {
        $this->objectType = $objectType;
    }

    public function getOccupation()
    {
        return $this->occupation;
    }

    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;
    }

    public function setOrganizations($organizations)
    {
        $this->organizations = $organizations;
    }

    public function getOrganizations()
    {
        return $this->organizations;
    }

    public function setPlacesLived($placesLived)
    {
        $this->placesLived = $placesLived;
    }

    public function getPlacesLived()
    {
        return $this->placesLived;
    }

    public function getPlusOneCount()
    {
        return $this->plusOneCount;
    }

    public function setPlusOneCount($plusOneCount)
    {
        $this->plusOneCount = $plusOneCount;
    }

    public function getRelationshipStatus()
    {
        return $this->relationshipStatus;
    }

    public function setRelationshipStatus($relationshipStatus)
    {
        $this->relationshipStatus = $relationshipStatus;
    }

    public function getSkills()
    {
        return $this->skills;
    }

    public function setSkills($skills)
    {
        $this->skills = $skills;
    }

    public function getTagline()
    {
        return $this->tagline;
    }

    public function setTagline($tagline)
    {
        $this->tagline = $tagline;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function setUrls($urls)
    {
        $this->urls = $urls;
    }

    public function getUrls()
    {
        return $this->urls;
    }

    public function getVerified()
    {
        return $this->verified;
    }

    public function setVerified($verified)
    {
        $this->verified = $verified;
    }
}

class Google_Service_Plus_PersonAgeRange extends Google_Model
{
    public $max;
    public $min;
    protected $internal_gapi_mappings = [];

    public function getMax()
    {
        return $this->max;
    }

    public function setMax($max)
    {
        $this->max = $max;
    }

    public function getMin()
    {
        return $this->min;
    }

    public function setMin($min)
    {
        $this->min = $min;
    }
}

class Google_Service_Plus_PersonCover extends Google_Model
{
    public $layout;
    protected $internal_gapi_mappings = [];
    protected $coverInfoType = 'Google_Service_Plus_PersonCoverCoverInfo';
    protected $coverInfoDataType = '';
    protected $coverPhotoType = 'Google_Service_Plus_PersonCoverCoverPhoto';
    protected $coverPhotoDataType = '';

    public function setCoverInfo(Google_Service_Plus_PersonCoverCoverInfo $coverInfo)
    {
        $this->coverInfo = $coverInfo;
    }

    public function getCoverInfo()
    {
        return $this->coverInfo;
    }

    public function setCoverPhoto(Google_Service_Plus_PersonCoverCoverPhoto $coverPhoto)
    {
        $this->coverPhoto = $coverPhoto;
    }

    public function getCoverPhoto()
    {
        return $this->coverPhoto;
    }

    public function getLayout()
    {
        return $this->layout;
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
}

class Google_Service_Plus_PersonCoverCoverInfo extends Google_Model
{
    public $leftImageOffset;
    public $topImageOffset;
    protected $internal_gapi_mappings = [];

    public function getLeftImageOffset()
    {
        return $this->leftImageOffset;
    }

    public function setLeftImageOffset($leftImageOffset)
    {
        $this->leftImageOffset = $leftImageOffset;
    }

    public function getTopImageOffset()
    {
        return $this->topImageOffset;
    }

    public function setTopImageOffset($topImageOffset)
    {
        $this->topImageOffset = $topImageOffset;
    }
}

class Google_Service_Plus_PersonCoverCoverPhoto extends Google_Model
{
    public $height;
    public $url;
    public $width;
    protected $internal_gapi_mappings = [];

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
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

class Google_Service_Plus_PersonEmails extends Google_Model
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

class Google_Service_Plus_PersonImage extends Google_Model
{
    public $isDefault;
    public $url;
    protected $internal_gapi_mappings = [];

    public function getIsDefault()
    {
        return $this->isDefault;
    }

    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
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

class Google_Service_Plus_PersonName extends Google_Model
{
    public $familyName;
    public $formatted;
    public $givenName;
    public $honorificPrefix;
    public $honorificSuffix;
    public $middleName;
    protected $internal_gapi_mappings = [];

    public function getFamilyName()
    {
        return $this->familyName;
    }

    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    public function getFormatted()
    {
        return $this->formatted;
    }

    public function setFormatted($formatted)
    {
        $this->formatted = $formatted;
    }

    public function getGivenName()
    {
        return $this->givenName;
    }

    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    public function getHonorificPrefix()
    {
        return $this->honorificPrefix;
    }

    public function setHonorificPrefix($honorificPrefix)
    {
        $this->honorificPrefix = $honorificPrefix;
    }

    public function getHonorificSuffix()
    {
        return $this->honorificSuffix;
    }

    public function setHonorificSuffix($honorificSuffix)
    {
        $this->honorificSuffix = $honorificSuffix;
    }

    public function getMiddleName()
    {
        return $this->middleName;
    }

    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }
}

class Google_Service_Plus_PersonOrganizations extends Google_Model
{
    public $department;
    public $description;
    public $endDate;
    public $location;
    public $name;
    public $primary;
    public $startDate;
    public $title;
    public $type;
    protected $internal_gapi_mappings = [];

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getPrimary()
    {
        return $this->primary;
    }

    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
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

class Google_Service_Plus_PersonPlacesLived extends Google_Model
{
    public $primary;
    public $value;
    protected $internal_gapi_mappings = [];

    public function getPrimary()
    {
        return $this->primary;
    }

    public function setPrimary($primary)
    {
        $this->primary = $primary;
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

class Google_Service_Plus_PersonUrls extends Google_Model
{
    public $label;
    public $type;
    public $value;
    protected $internal_gapi_mappings = [];

    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel($label)
    {
        $this->label = $label;
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
}

class Google_Service_Plus_Place extends Google_Model
{
    public $displayName;
    public $id;
    public $kind;
    protected $internal_gapi_mappings = [];
    protected $addressType = 'Google_Service_Plus_PlaceAddress';
    protected $addressDataType = '';
    protected $positionType = 'Google_Service_Plus_PlacePosition';
    protected $positionDataType = '';


    public function setAddress(Google_Service_Plus_PlaceAddress $address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
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

    public function setPosition(Google_Service_Plus_PlacePosition $position)
    {
        $this->position = $position;
    }

    public function getPosition()
    {
        return $this->position;
    }
}

class Google_Service_Plus_PlaceAddress extends Google_Model
{
    public $formatted;
    protected $internal_gapi_mappings = [];

    public function getFormatted()
    {
        return $this->formatted;
    }

    public function setFormatted($formatted)
    {
        $this->formatted = $formatted;
    }
}

class Google_Service_Plus_PlacePosition extends Google_Model
{
    public $latitude;
    public $longitude;
    protected $internal_gapi_mappings = [];

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

class Google_Service_Plus_PlusAclentryResource extends Google_Model
{
    public $displayName;
    public $id;
    public $type;
    protected $internal_gapi_mappings = [];

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
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
