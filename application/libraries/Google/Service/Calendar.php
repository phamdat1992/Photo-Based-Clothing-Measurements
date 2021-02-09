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
 * Service definition for Calendar (v3).
 *
 * <p>
 * Lets you manipulate events and other calendar data.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/google-apps/calendar/firstapp" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Calendar extends Google_Service
{
    /** Manage your calendars. */
    const CALENDAR =
        "https://www.googleapis.com/auth/calendar";
    /** View your calendars. */
    const CALENDAR_READONLY =
        "https://www.googleapis.com/auth/calendar.readonly";

    public $acl;
    public $calendarList;
    public $calendars;
    public $channels;
    public $colors;
    public $events;
    public $freebusy;
    public $settings;


    /**
     * Constructs the internal representation of the Calendar service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        parent::__construct($client);
        $this->servicePath = 'calendar/v3/';
        $this->version = 'v3';
        $this->serviceName = 'calendar';

        $this->acl = new Google_Service_Calendar_Acl_Resource(
            $this,
            $this->serviceName,
            'acl',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'calendars/{calendarId}/acl/{ruleId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'ruleId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'calendars/{calendarId}/acl/{ruleId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'ruleId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'calendars/{calendarId}/acl',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'calendars/{calendarId}/acl',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'syncToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'showDeleted' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ), 'patch' => array(
                        'path' => 'calendars/{calendarId}/acl/{ruleId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'ruleId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'calendars/{calendarId}/acl/{ruleId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'ruleId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'watch' => array(
                        'path' => 'calendars/{calendarId}/acl/watch',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'syncToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'showDeleted' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->calendarList = new Google_Service_Calendar_CalendarList_Resource(
            $this,
            $this->serviceName,
            'calendarList',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'users/me/calendarList/{calendarId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'users/me/calendarList/{calendarId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'users/me/calendarList',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'colorRgbFormat' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'users/me/calendarList',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'syncToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'showDeleted' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'minAccessRole' => array(
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
                            'showHidden' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ), 'patch' => array(
                        'path' => 'users/me/calendarList/{calendarId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'colorRgbFormat' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'users/me/calendarList/{calendarId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'colorRgbFormat' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ), 'watch' => array(
                        'path' => 'users/me/calendarList/watch',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'syncToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'showDeleted' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'minAccessRole' => array(
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
                            'showHidden' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->calendars = new Google_Service_Calendar_Calendars_Resource(
            $this,
            $this->serviceName,
            'calendars',
            array(
                'methods' => array(
                    'clear' => array(
                        'path' => 'calendars/{calendarId}/clear',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'delete' => array(
                        'path' => 'calendars/{calendarId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'calendars/{calendarId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'calendars',
                        'httpMethod' => 'POST',
                        'parameters' => [],
                    ), 'patch' => array(
                        'path' => 'calendars/{calendarId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'calendars/{calendarId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            )
        );
        $this->channels = new Google_Service_Calendar_Channels_Resource(
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
        $this->colors = new Google_Service_Calendar_Colors_Resource(
            $this,
            $this->serviceName,
            'colors',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'colors',
                        'httpMethod' => 'GET',
                        'parameters' => [],
                    ),
                )
            )
        );
        $this->events = new Google_Service_Calendar_Events_Resource(
            $this,
            $this->serviceName,
            'events',
            array(
                'methods' => array(
                    'delete' => array(
                        'path' => 'calendars/{calendarId}/events/{eventId}',
                        'httpMethod' => 'DELETE',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'eventId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'sendNotifications' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ), 'get' => array(
                        'path' => 'calendars/{calendarId}/events/{eventId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'eventId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'timeZone' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'alwaysIncludeEmail' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'maxAttendees' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ), 'import' => array(
                        'path' => 'calendars/{calendarId}/events/import',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'insert' => array(
                        'path' => 'calendars/{calendarId}/events',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'sendNotifications' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'maxAttendees' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ), 'instances' => array(
                        'path' => 'calendars/{calendarId}/events/{eventId}/instances',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'eventId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'showDeleted' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'timeMax' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'alwaysIncludeEmail' => array(
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
                            'timeMin' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'timeZone' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'originalStart' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxAttendees' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'calendars/{calendarId}/events',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'orderBy' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'showHiddenInvitations' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'syncToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'showDeleted' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'iCalUID' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'updatedMin' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'singleEvents' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'timeMax' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'alwaysIncludeEmail' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'q' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'timeMin' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'timeZone' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'privateExtendedProperty' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'repeated' => true,
                            ),
                            'sharedExtendedProperty' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'repeated' => true,
                            ),
                            'maxAttendees' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ), 'move' => array(
                        'path' => 'calendars/{calendarId}/events/{eventId}/move',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'eventId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'destination' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'sendNotifications' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ), 'patch' => array(
                        'path' => 'calendars/{calendarId}/events/{eventId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'eventId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'sendNotifications' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'alwaysIncludeEmail' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'maxAttendees' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ), 'quickAdd' => array(
                        'path' => 'calendars/{calendarId}/events/quickAdd',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'text' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'sendNotifications' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                        ),
                    ), 'update' => array(
                        'path' => 'calendars/{calendarId}/events/{eventId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'eventId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'sendNotifications' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'alwaysIncludeEmail' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'maxAttendees' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ), 'watch' => array(
                        'path' => 'calendars/{calendarId}/events/watch',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'calendarId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                            'orderBy' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'showHiddenInvitations' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'syncToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'showDeleted' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'iCalUID' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'updatedMin' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'singleEvents' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'timeMax' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'alwaysIncludeEmail' => array(
                                'location' => 'query',
                                'type' => 'boolean',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'q' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'timeMin' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'timeZone' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'privateExtendedProperty' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'repeated' => true,
                            ),
                            'sharedExtendedProperty' => array(
                                'location' => 'query',
                                'type' => 'string',
                                'repeated' => true,
                            ),
                            'maxAttendees' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),
                )
            )
        );
        $this->freebusy = new Google_Service_Calendar_Freebusy_Resource(
            $this,
            $this->serviceName,
            'freebusy',
            array(
                'methods' => array(
                    'query' => array(
                        'path' => 'freeBusy',
                        'httpMethod' => 'POST',
                        'parameters' => [],
                    ),
                )
            )
        );
        $this->settings = new Google_Service_Calendar_Settings_Resource(
            $this,
            $this->serviceName,
            'settings',
            array(
                'methods' => array(
                    'get' => array(
                        'path' => 'users/me/settings/{setting}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'setting' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ), 'list' => array(
                        'path' => 'users/me/settings',
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
                            'syncToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                        ),
                    ), 'watch' => array(
                        'path' => 'users/me/settings/watch',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'pageToken' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                            'syncToken' => array(
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
 * The "acl" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $acl = $calendarService->acl;
 *  </code>
 */
class Google_Service_Calendar_Acl_Resource extends Google_Service_Resource
{

    /**
     * Deletes an access control rule. (acl.delete)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $ruleId ACL rule identifier.
     * @param array $optParams Optional parameters.
     */
    public function delete($calendarId, $ruleId, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Returns an access control rule. (acl.get)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $ruleId ACL rule identifier.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Calendar_AclRule
     */
    public function get($calendarId, $ruleId, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Calendar_AclRule");
    }

    /**
     * Creates an access control rule. (acl.insert)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_AclRule $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Calendar_AclRule
     */
    public function insert($calendarId, Google_Service_Calendar_AclRule $postBody, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Calendar_AclRule");
    }

    /**
     * Returns the rules in the access control list for the calendar. (acl.listAcl)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Token specifying which result page to return.
     * Optional.
     * @opt_param string syncToken Token obtained from the nextSyncToken field
     * returned on the last page of results from the previous list request. It makes
     * the result of this list request contain only entries that have changed since
     * then. All entries deleted since the previous list request will always be in
     * the result set and it is not allowed to set showDeleted to False. If the
     * syncToken expires, the server will respond with a 410 GONE response code and
     * the client should clear its storage and perform a full synchronization
     * without any syncToken. Learn more about incremental synchronization.
     * Optional. The default is to return all entries.
     * @opt_param int maxResults Maximum number of entries returned on one result
     * page. By default the value is 100 entries. The page size can never be larger
     * than 250 entries. Optional.
     * @opt_param bool showDeleted Whether to include deleted ACLs in the result.
     * Deleted ACLs are represented by role equal to "none". Deleted ACLs will
     * always be included if syncToken is provided. Optional. The default is False.
     * @return Google_Service_Calendar_Acl
     */
    public function listAcl($calendarId, $optParams = [])
    {
        $params = array('calendarId' => $calendarId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Calendar_Acl");
    }

    /**
     * Updates an access control rule. This method supports patch semantics.
     * (acl.patch)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $ruleId ACL rule identifier.
     * @param Google_AclRule $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Calendar_AclRule
     */
    public function patch($calendarId, $ruleId, Google_Service_Calendar_AclRule $postBody, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Calendar_AclRule");
    }

    /**
     * Updates an access control rule. (acl.update)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $ruleId ACL rule identifier.
     * @param Google_AclRule $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Calendar_AclRule
     */
    public function update($calendarId, $ruleId, Google_Service_Calendar_AclRule $postBody, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'ruleId' => $ruleId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Calendar_AclRule");
    }

    /**
     * Watch for changes to ACL resources. (acl.watch)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Token specifying which result page to return.
     * Optional.
     * @opt_param string syncToken Token obtained from the nextSyncToken field
     * returned on the last page of results from the previous list request. It makes
     * the result of this list request contain only entries that have changed since
     * then. All entries deleted since the previous list request will always be in
     * the result set and it is not allowed to set showDeleted to False. If the
     * syncToken expires, the server will respond with a 410 GONE response code and
     * the client should clear its storage and perform a full synchronization
     * without any syncToken. Learn more about incremental synchronization.
     * Optional. The default is to return all entries.
     * @opt_param int maxResults Maximum number of entries returned on one result
     * page. By default the value is 100 entries. The page size can never be larger
     * than 250 entries. Optional.
     * @opt_param bool showDeleted Whether to include deleted ACLs in the result.
     * Deleted ACLs are represented by role equal to "none". Deleted ACLs will
     * always be included if syncToken is provided. Optional. The default is False.
     * @return Google_Service_Calendar_Channel
     */
    public function watch($calendarId, Google_Service_Calendar_Channel $postBody, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('watch', array($params), "Google_Service_Calendar_Channel");
    }
}

/**
 * The "calendarList" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $calendarList = $calendarService->calendarList;
 *  </code>
 */
class Google_Service_Calendar_CalendarList_Resource extends Google_Service_Resource
{

    /**
     * Deletes an entry on the user's calendar list. (calendarList.delete)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     */
    public function delete($calendarId, $optParams = [])
    {
        $params = array('calendarId' => $calendarId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Returns an entry on the user's calendar list. (calendarList.get)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Calendar_CalendarListEntry
     */
    public function get($calendarId, $optParams = [])
    {
        $params = array('calendarId' => $calendarId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Calendar_CalendarListEntry");
    }

    /**
     * Adds an entry to the user's calendar list. (calendarList.insert)
     *
     * @param Google_CalendarListEntry $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool colorRgbFormat Whether to use the foregroundColor and
     * backgroundColor fields to write the calendar colors (RGB). If this feature is
     * used, the index-based colorId field will be set to the best matching option
     * automatically. Optional. The default is False.
     * @return Google_Service_Calendar_CalendarListEntry
     */
    public function insert(Google_Service_Calendar_CalendarListEntry $postBody, $optParams = [])
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Calendar_CalendarListEntry");
    }

    /**
     * Returns entries on the user's calendar list. (calendarList.listCalendarList)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string syncToken Token obtained from the nextSyncToken field
     * returned on the last page of results from the previous list request. It makes
     * the result of this list request contain only entries that have changed since
     * then. If only read-only fields such as calendar properties or ACLs have
     * changed, the entry won't be returned. All entries deleted and hidden since
     * the previous list request will always be in the result set and it is not
     * allowed to set showDeleted neither showHidden to False. To ensure client
     * state consistency minAccessRole query parameter cannot be specified together
     * with nextSyncToken. If the syncToken expires, the server will respond with a
     * 410 GONE response code and the client should clear its storage and perform a
     * full synchronization without any syncToken. Learn more about incremental
     * synchronization. Optional. The default is to return all entries.
     * @opt_param bool showDeleted Whether to include deleted calendar list entries
     * in the result. Optional. The default is False.
     * @opt_param string minAccessRole The minimum access role for the user in the
     * returned entires. Optional. The default is no restriction.
     * @opt_param int maxResults Maximum number of entries returned on one result
     * page. By default the value is 100 entries. The page size can never be larger
     * than 250 entries. Optional.
     * @opt_param string pageToken Token specifying which result page to return.
     * Optional.
     * @opt_param bool showHidden Whether to show hidden entries. Optional. The
     * default is False.
     * @return Google_Service_Calendar_CalendarList
     */
    public function listCalendarList($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Calendar_CalendarList");
    }

    /**
     * Updates an entry on the user's calendar list. This method supports patch
     * semantics. (calendarList.patch)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_CalendarListEntry $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool colorRgbFormat Whether to use the foregroundColor and
     * backgroundColor fields to write the calendar colors (RGB). If this feature is
     * used, the index-based colorId field will be set to the best matching option
     * automatically. Optional. The default is False.
     * @return Google_Service_Calendar_CalendarListEntry
     */
    public function patch($calendarId, Google_Service_Calendar_CalendarListEntry $postBody, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Calendar_CalendarListEntry");
    }

    /**
     * Updates an entry on the user's calendar list. (calendarList.update)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_CalendarListEntry $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool colorRgbFormat Whether to use the foregroundColor and
     * backgroundColor fields to write the calendar colors (RGB). If this feature is
     * used, the index-based colorId field will be set to the best matching option
     * automatically. Optional. The default is False.
     * @return Google_Service_Calendar_CalendarListEntry
     */
    public function update($calendarId, Google_Service_Calendar_CalendarListEntry $postBody, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Calendar_CalendarListEntry");
    }

    /**
     * Watch for changes to CalendarList resources. (calendarList.watch)
     *
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string syncToken Token obtained from the nextSyncToken field
     * returned on the last page of results from the previous list request. It makes
     * the result of this list request contain only entries that have changed since
     * then. If only read-only fields such as calendar properties or ACLs have
     * changed, the entry won't be returned. All entries deleted and hidden since
     * the previous list request will always be in the result set and it is not
     * allowed to set showDeleted neither showHidden to False. To ensure client
     * state consistency minAccessRole query parameter cannot be specified together
     * with nextSyncToken. If the syncToken expires, the server will respond with a
     * 410 GONE response code and the client should clear its storage and perform a
     * full synchronization without any syncToken. Learn more about incremental
     * synchronization. Optional. The default is to return all entries.
     * @opt_param bool showDeleted Whether to include deleted calendar list entries
     * in the result. Optional. The default is False.
     * @opt_param string minAccessRole The minimum access role for the user in the
     * returned entires. Optional. The default is no restriction.
     * @opt_param int maxResults Maximum number of entries returned on one result
     * page. By default the value is 100 entries. The page size can never be larger
     * than 250 entries. Optional.
     * @opt_param string pageToken Token specifying which result page to return.
     * Optional.
     * @opt_param bool showHidden Whether to show hidden entries. Optional. The
     * default is False.
     * @return Google_Service_Calendar_Channel
     */
    public function watch(Google_Service_Calendar_Channel $postBody, $optParams = [])
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('watch', array($params), "Google_Service_Calendar_Channel");
    }
}

/**
 * The "calendars" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $calendars = $calendarService->calendars;
 *  </code>
 */
class Google_Service_Calendar_Calendars_Resource extends Google_Service_Resource
{

    /**
     * Clears a primary calendar. This operation deletes all events associated with
     * the primary calendar of an account. (calendars.clear)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     */
    public function clear($calendarId, $optParams = [])
    {
        $params = array('calendarId' => $calendarId);
        $params = array_merge($params, $optParams);
        return $this->call('clear', array($params));
    }

    /**
     * Deletes a secondary calendar. Use calendars.clear for clearing all events on
     * primary calendars. (calendars.delete)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     */
    public function delete($calendarId, $optParams = [])
    {
        $params = array('calendarId' => $calendarId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Returns metadata for a calendar. (calendars.get)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Calendar_Calendar
     */
    public function get($calendarId, $optParams = [])
    {
        $params = array('calendarId' => $calendarId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Calendar_Calendar");
    }

    /**
     * Creates a secondary calendar. (calendars.insert)
     *
     * @param Google_Calendar $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Calendar_Calendar
     */
    public function insert(Google_Service_Calendar_Calendar $postBody, $optParams = [])
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Calendar_Calendar");
    }

    /**
     * Updates metadata for a calendar. This method supports patch semantics.
     * (calendars.patch)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_Calendar $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Calendar_Calendar
     */
    public function patch($calendarId, Google_Service_Calendar_Calendar $postBody, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Calendar_Calendar");
    }

    /**
     * Updates metadata for a calendar. (calendars.update)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_Calendar $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Calendar_Calendar
     */
    public function update($calendarId, Google_Service_Calendar_Calendar $postBody, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Calendar_Calendar");
    }
}

/**
 * The "channels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $channels = $calendarService->channels;
 *  </code>
 */
class Google_Service_Calendar_Channels_Resource extends Google_Service_Resource
{

    /**
     * Stop watching resources through this channel (channels.stop)
     *
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     */
    public function stop(Google_Service_Calendar_Channel $postBody, $optParams = [])
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('stop', array($params));
    }
}

/**
 * The "colors" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $colors = $calendarService->colors;
 *  </code>
 */
class Google_Service_Calendar_Colors_Resource extends Google_Service_Resource
{

    /**
     * Returns the color definitions for calendars and events. (colors.get)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Service_Calendar_Colors
     */
    public function get($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Calendar_Colors");
    }
}

/**
 * The "events" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $events = $calendarService->events;
 *  </code>
 */
class Google_Service_Calendar_Events_Resource extends Google_Service_Resource
{

    /**
     * Deletes an event. (events.delete)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $eventId Event identifier.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool sendNotifications Whether to send notifications about the
     * deletion of the event. Optional. The default is False.
     */
    public function delete($calendarId, $eventId, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'eventId' => $eventId);
        $params = array_merge($params, $optParams);
        return $this->call('delete', array($params));
    }

    /**
     * Returns an event. (events.get)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $eventId Event identifier.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string timeZone Time zone used in the response. Optional. The
     * default is the time zone of the calendar.
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the
     * email field for the organizer, creator and attendees, even if no real email
     * is available (i.e. a generated, non-working value will be provided). The use
     * of this option is discouraged and should only be used by clients which cannot
     * handle the absence of an email address value in the mentioned places.
     * Optional. The default is False.
     * @opt_param int maxAttendees The maximum number of attendees to include in the
     * response. If there are more than the specified number of attendees, only the
     * participant is returned. Optional.
     * @return Google_Service_Calendar_Event
     */
    public function get($calendarId, $eventId, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'eventId' => $eventId);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Calendar_Event");
    }

    /**
     * Imports an event. This operation is used to add a private copy of an existing
     * event to a calendar. (events.import)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_Event $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Calendar_Event
     */
    public function import($calendarId, Google_Service_Calendar_Event $postBody, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('import', array($params), "Google_Service_Calendar_Event");
    }

    /**
     * Creates an event. (events.insert)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_Event $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool sendNotifications Whether to send notifications about the
     * creation of the new event. Optional. The default is False.
     * @opt_param int maxAttendees The maximum number of attendees to include in the
     * response. If there are more than the specified number of attendees, only the
     * participant is returned. Optional.
     * @return Google_Service_Calendar_Event
     */
    public function insert($calendarId, Google_Service_Calendar_Event $postBody, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('insert', array($params), "Google_Service_Calendar_Event");
    }

    /**
     * Returns instances of the specified recurring event. (events.instances)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $eventId Recurring event identifier.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool showDeleted Whether to include deleted events (with status
     * equals "cancelled") in the result. Cancelled instances of recurring events
     * will still be included if singleEvents is False. Optional. The default is
     * False.
     * @opt_param string timeMax Upper bound (exclusive) for an event's start time
     * to filter by. Optional. The default is not to filter by start time.
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the
     * email field for the organizer, creator and attendees, even if no real email
     * is available (i.e. a generated, non-working value will be provided). The use
     * of this option is discouraged and should only be used by clients which cannot
     * handle the absence of an email address value in the mentioned places.
     * Optional. The default is False.
     * @opt_param int maxResults Maximum number of events returned on one result
     * page. By default the value is 250 events. The page size can never be larger
     * than 2500 events. Optional.
     * @opt_param string pageToken Token specifying which result page to return.
     * Optional.
     * @opt_param string timeMin Lower bound (inclusive) for an event's end time to
     * filter by. Optional. The default is not to filter by end time.
     * @opt_param string timeZone Time zone used in the response. Optional. The
     * default is the time zone of the calendar.
     * @opt_param string originalStart The original start time of the instance in
     * the result. Optional.
     * @opt_param int maxAttendees The maximum number of attendees to include in the
     * response. If there are more than the specified number of attendees, only the
     * participant is returned. Optional.
     * @return Google_Service_Calendar_Events
     */
    public function instances($calendarId, $eventId, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'eventId' => $eventId);
        $params = array_merge($params, $optParams);
        return $this->call('instances', array($params), "Google_Service_Calendar_Events");
    }

    /**
     * Returns events on the specified calendar. (events.listEvents)
     *
     * @param string $calendarId Calendar identifier.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string orderBy The order of the events returned in the result.
     * Optional. The default is an unspecified, stable order.
     * @opt_param bool showHiddenInvitations Whether to include hidden invitations
     * in the result. Optional. The default is False.
     * @opt_param string syncToken Token obtained from the nextSyncToken field
     * returned on the last page of results from the previous list request. It makes
     * the result of this list request contain only entries that have changed since
     * then. All events deleted since the previous list request will always be in
     * the result set and it is not allowed to set showDeleted to False. There are
     * several query parameters that cannot be specified together with nextSyncToken
     * to ensure consistency of the client state.
     *
     * These are:  - iCalUID  - orderBy  - privateExtendedProperty  - q  -
     * sharedExtendedProperty  - timeMin  - timeMax  - updatedMin If the syncToken
     * expires, the server will respond with a 410 GONE response code and the client
     * should clear its storage and perform a full synchronization without any
     * syncToken. Learn more about incremental synchronization. Optional. The
     * default is to return all entries.
     * @opt_param bool showDeleted Whether to include deleted events (with status
     * equals "cancelled") in the result. Cancelled instances of recurring events
     * (but not the underlying recurring event) will still be included if
     * showDeleted and singleEvents are both False. If showDeleted and singleEvents
     * are both True, only single instances of deleted events (but not the
     * underlying recurring events) are returned. Optional. The default is False.
     * @opt_param string iCalUID Specifies event ID in the iCalendar format to be
     * included in the response. Optional.
     * @opt_param string updatedMin Lower bound for an event's last modification
     * time (as a RFC 3339 timestamp) to filter by. When specified, entries deleted
     * since this time will always be included regardless of showDeleted. Optional.
     * The default is not to filter by last modification time.
     * @opt_param bool singleEvents Whether to expand recurring events into
     * instances and only return single one-off events and instances of recurring
     * events, but not the underlying recurring events themselves. Optional. The
     * default is False.
     * @opt_param string timeMax Upper bound (exclusive) for an event's start time
     * to filter by. Optional. The default is not to filter by start time.
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the
     * email field for the organizer, creator and attendees, even if no real email
     * is available (i.e. a generated, non-working value will be provided). The use
     * of this option is discouraged and should only be used by clients which cannot
     * handle the absence of an email address value in the mentioned places.
     * Optional. The default is False.
     * @opt_param int maxResults Maximum number of events returned on one result
     * page. By default the value is 250 events. The page size can never be larger
     * than 2500 events. Optional.
     * @opt_param string q Free text search terms to find events that match these
     * terms in any field, except for extended properties. Optional.
     * @opt_param string pageToken Token specifying which result page to return.
     * Optional.
     * @opt_param string timeMin Lower bound (inclusive) for an event's end time to
     * filter by. Optional. The default is not to filter by end time.
     * @opt_param string timeZone Time zone used in the response. Optional. The
     * default is the time zone of the calendar.
     * @opt_param string privateExtendedProperty Extended properties constraint
     * specified as propertyName=value. Matches only private properties. This
     * parameter might be repeated multiple times to return events that match all
     * given constraints.
     * @opt_param string sharedExtendedProperty Extended properties constraint
     * specified as propertyName=value. Matches only shared properties. This
     * parameter might be repeated multiple times to return events that match all
     * given constraints.
     * @opt_param int maxAttendees The maximum number of attendees to include in the
     * response. If there are more than the specified number of attendees, only the
     * participant is returned. Optional.
     * @return Google_Service_Calendar_Events
     */
    public function listEvents($calendarId, $optParams = [])
    {
        $params = array('calendarId' => $calendarId);
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Calendar_Events");
    }

    /**
     * Moves an event to another calendar, i.e. changes an event's organizer.
     * (events.move)
     *
     * @param string $calendarId Calendar identifier of the source calendar where
     * the event currently is on.
     * @param string $eventId Event identifier.
     * @param string $destination Calendar identifier of the target calendar where
     * the event is to be moved to.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool sendNotifications Whether to send notifications about the
     * change of the event's organizer. Optional. The default is False.
     * @return Google_Service_Calendar_Event
     */
    public function move($calendarId, $eventId, $destination, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'eventId' => $eventId, 'destination' => $destination);
        $params = array_merge($params, $optParams);
        return $this->call('move', array($params), "Google_Service_Calendar_Event");
    }

    /**
     * Updates an event. This method supports patch semantics. (events.patch)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $eventId Event identifier.
     * @param Google_Event $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool sendNotifications Whether to send notifications about the
     * event update (e.g. attendee's responses, title changes, etc.). Optional. The
     * default is False.
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the
     * email field for the organizer, creator and attendees, even if no real email
     * is available (i.e. a generated, non-working value will be provided). The use
     * of this option is discouraged and should only be used by clients which cannot
     * handle the absence of an email address value in the mentioned places.
     * Optional. The default is False.
     * @opt_param int maxAttendees The maximum number of attendees to include in the
     * response. If there are more than the specified number of attendees, only the
     * participant is returned. Optional.
     * @return Google_Service_Calendar_Event
     */
    public function patch($calendarId, $eventId, Google_Service_Calendar_Event $postBody, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'eventId' => $eventId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('patch', array($params), "Google_Service_Calendar_Event");
    }

    /**
     * Creates an event based on a simple text string. (events.quickAdd)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $text The text describing the event to be created.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool sendNotifications Whether to send notifications about the
     * creation of the event. Optional. The default is False.
     * @return Google_Service_Calendar_Event
     */
    public function quickAdd($calendarId, $text, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'text' => $text);
        $params = array_merge($params, $optParams);
        return $this->call('quickAdd', array($params), "Google_Service_Calendar_Event");
    }

    /**
     * Updates an event. (events.update)
     *
     * @param string $calendarId Calendar identifier.
     * @param string $eventId Event identifier.
     * @param Google_Event $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool sendNotifications Whether to send notifications about the
     * event update (e.g. attendee's responses, title changes, etc.). Optional. The
     * default is False.
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the
     * email field for the organizer, creator and attendees, even if no real email
     * is available (i.e. a generated, non-working value will be provided). The use
     * of this option is discouraged and should only be used by clients which cannot
     * handle the absence of an email address value in the mentioned places.
     * Optional. The default is False.
     * @opt_param int maxAttendees The maximum number of attendees to include in the
     * response. If there are more than the specified number of attendees, only the
     * participant is returned. Optional.
     * @return Google_Service_Calendar_Event
     */
    public function update($calendarId, $eventId, Google_Service_Calendar_Event $postBody, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'eventId' => $eventId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('update', array($params), "Google_Service_Calendar_Event");
    }

    /**
     * Watch for changes to Events resources. (events.watch)
     *
     * @param string $calendarId Calendar identifier.
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string orderBy The order of the events returned in the result.
     * Optional. The default is an unspecified, stable order.
     * @opt_param bool showHiddenInvitations Whether to include hidden invitations
     * in the result. Optional. The default is False.
     * @opt_param string syncToken Token obtained from the nextSyncToken field
     * returned on the last page of results from the previous list request. It makes
     * the result of this list request contain only entries that have changed since
     * then. All events deleted since the previous list request will always be in
     * the result set and it is not allowed to set showDeleted to False. There are
     * several query parameters that cannot be specified together with nextSyncToken
     * to ensure consistency of the client state.
     *
     * These are:  - iCalUID  - orderBy  - privateExtendedProperty  - q  -
     * sharedExtendedProperty  - timeMin  - timeMax  - updatedMin If the syncToken
     * expires, the server will respond with a 410 GONE response code and the client
     * should clear its storage and perform a full synchronization without any
     * syncToken. Learn more about incremental synchronization. Optional. The
     * default is to return all entries.
     * @opt_param bool showDeleted Whether to include deleted events (with status
     * equals "cancelled") in the result. Cancelled instances of recurring events
     * (but not the underlying recurring event) will still be included if
     * showDeleted and singleEvents are both False. If showDeleted and singleEvents
     * are both True, only single instances of deleted events (but not the
     * underlying recurring events) are returned. Optional. The default is False.
     * @opt_param string iCalUID Specifies event ID in the iCalendar format to be
     * included in the response. Optional.
     * @opt_param string updatedMin Lower bound for an event's last modification
     * time (as a RFC 3339 timestamp) to filter by. When specified, entries deleted
     * since this time will always be included regardless of showDeleted. Optional.
     * The default is not to filter by last modification time.
     * @opt_param bool singleEvents Whether to expand recurring events into
     * instances and only return single one-off events and instances of recurring
     * events, but not the underlying recurring events themselves. Optional. The
     * default is False.
     * @opt_param string timeMax Upper bound (exclusive) for an event's start time
     * to filter by. Optional. The default is not to filter by start time.
     * @opt_param bool alwaysIncludeEmail Whether to always include a value in the
     * email field for the organizer, creator and attendees, even if no real email
     * is available (i.e. a generated, non-working value will be provided). The use
     * of this option is discouraged and should only be used by clients which cannot
     * handle the absence of an email address value in the mentioned places.
     * Optional. The default is False.
     * @opt_param int maxResults Maximum number of events returned on one result
     * page. By default the value is 250 events. The page size can never be larger
     * than 2500 events. Optional.
     * @opt_param string q Free text search terms to find events that match these
     * terms in any field, except for extended properties. Optional.
     * @opt_param string pageToken Token specifying which result page to return.
     * Optional.
     * @opt_param string timeMin Lower bound (inclusive) for an event's end time to
     * filter by. Optional. The default is not to filter by end time.
     * @opt_param string timeZone Time zone used in the response. Optional. The
     * default is the time zone of the calendar.
     * @opt_param string privateExtendedProperty Extended properties constraint
     * specified as propertyName=value. Matches only private properties. This
     * parameter might be repeated multiple times to return events that match all
     * given constraints.
     * @opt_param string sharedExtendedProperty Extended properties constraint
     * specified as propertyName=value. Matches only shared properties. This
     * parameter might be repeated multiple times to return events that match all
     * given constraints.
     * @opt_param int maxAttendees The maximum number of attendees to include in the
     * response. If there are more than the specified number of attendees, only the
     * participant is returned. Optional.
     * @return Google_Service_Calendar_Channel
     */
    public function watch($calendarId, Google_Service_Calendar_Channel $postBody, $optParams = [])
    {
        $params = array('calendarId' => $calendarId, 'postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('watch', array($params), "Google_Service_Calendar_Channel");
    }
}

/**
 * The "freebusy" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $freebusy = $calendarService->freebusy;
 *  </code>
 */
class Google_Service_Calendar_Freebusy_Resource extends Google_Service_Resource
{

    /**
     * Returns free/busy information for a set of calendars. (freebusy.query)
     *
     * @param Google_FreeBusyRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Calendar_FreeBusyResponse
     */
    public function query(Google_Service_Calendar_FreeBusyRequest $postBody, $optParams = [])
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('query', array($params), "Google_Service_Calendar_FreeBusyResponse");
    }
}

/**
 * The "settings" collection of methods.
 * Typical usage is:
 *  <code>
 *   $calendarService = new Google_Service_Calendar(...);
 *   $settings = $calendarService->settings;
 *  </code>
 */
class Google_Service_Calendar_Settings_Resource extends Google_Service_Resource
{

    /**
     * Returns a single user setting. (settings.get)
     *
     * @param string $setting The id of the user setting.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Calendar_Setting
     */
    public function get($setting, $optParams = [])
    {
        $params = array('setting' => $setting);
        $params = array_merge($params, $optParams);
        return $this->call('get', array($params), "Google_Service_Calendar_Setting");
    }

    /**
     * Returns all user settings for the authenticated user. (settings.listSettings)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Token specifying which result page to return.
     * Optional.
     * @opt_param int maxResults Maximum number of entries returned on one result
     * page. By default the value is 100 entries. The page size can never be larger
     * than 250 entries. Optional.
     * @opt_param string syncToken Token obtained from the nextSyncToken field
     * returned on the last page of results from the previous list request. It makes
     * the result of this list request contain only entries that have changed since
     * then. If the syncToken expires, the server will respond with a 410 GONE
     * response code and the client should clear its storage and perform a full
     * synchronization without any syncToken. Learn more about incremental
     * synchronization. Optional. The default is to return all entries.
     * @return Google_Service_Calendar_Settings
     */
    public function listSettings($optParams = [])
    {
        $params = [];
        $params = array_merge($params, $optParams);
        return $this->call('list', array($params), "Google_Service_Calendar_Settings");
    }

    /**
     * Watch for changes to Settings resources. (settings.watch)
     *
     * @param Google_Channel $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Token specifying which result page to return.
     * Optional.
     * @opt_param int maxResults Maximum number of entries returned on one result
     * page. By default the value is 100 entries. The page size can never be larger
     * than 250 entries. Optional.
     * @opt_param string syncToken Token obtained from the nextSyncToken field
     * returned on the last page of results from the previous list request. It makes
     * the result of this list request contain only entries that have changed since
     * then. If the syncToken expires, the server will respond with a 410 GONE
     * response code and the client should clear its storage and perform a full
     * synchronization without any syncToken. Learn more about incremental
     * synchronization. Optional. The default is to return all entries.
     * @return Google_Service_Calendar_Channel
     */
    public function watch(Google_Service_Calendar_Channel $postBody, $optParams = [])
    {
        $params = array('postBody' => $postBody);
        $params = array_merge($params, $optParams);
        return $this->call('watch', array($params), "Google_Service_Calendar_Channel");
    }
}


class Google_Service_Calendar_Acl extends Google_Collection
{
    public $etag;
    public $kind;
    public $nextPageToken;
    public $nextSyncToken;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Calendar_AclRule';
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

    public function getNextSyncToken()
    {
        return $this->nextSyncToken;
    }

    public function setNextSyncToken($nextSyncToken)
    {
        $this->nextSyncToken = $nextSyncToken;
    }
}

class Google_Service_Calendar_AclRule extends Google_Model
{
    public $etag;
    public $id;
    public $kind;
    public $role;
    protected $internal_gapi_mappings = [];
    protected $scopeType = 'Google_Service_Calendar_AclRuleScope';
    protected $scopeDataType = '';

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

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function setScope(Google_Service_Calendar_AclRuleScope $scope)
    {
        $this->scope = $scope;
    }

    public function getScope()
    {
        return $this->scope;
    }
}

class Google_Service_Calendar_AclRuleScope extends Google_Model
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

class Google_Service_Calendar_Calendar extends Google_Model
{
    public $description;
    public $etag;
    public $id;
    public $kind;
    public $location;
    public $summary;
    public $timeZone;
    protected $internal_gapi_mappings = [];

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

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function getTimeZone()
    {
        return $this->timeZone;
    }

    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }
}

class Google_Service_Calendar_CalendarList extends Google_Collection
{
    public $etag;
    public $kind;
    public $nextPageToken;
    public $nextSyncToken;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Calendar_CalendarListEntry';
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

    public function getNextSyncToken()
    {
        return $this->nextSyncToken;
    }

    public function setNextSyncToken($nextSyncToken)
    {
        $this->nextSyncToken = $nextSyncToken;
    }
}

class Google_Service_Calendar_CalendarListEntry extends Google_Collection
{
    public $accessRole;
    public $backgroundColor;
    public $colorId;
    public $deleted;
    public $description;
    public $etag;
    public $foregroundColor;
    public $hidden;
    public $id;
    public $kind;
    public $location;
    public $primary;
    public $selected;
    public $summary;
    public $summaryOverride;
    public $timeZone;
    protected $collection_key = 'defaultReminders';
    protected $internal_gapi_mappings = [];
    protected $defaultRemindersType = 'Google_Service_Calendar_EventReminder';
    protected $defaultRemindersDataType = 'array';
    protected $notificationSettingsType = 'Google_Service_Calendar_CalendarListEntryNotificationSettings';
    protected $notificationSettingsDataType = '';

    public function getAccessRole()
    {
        return $this->accessRole;
    }

    public function setAccessRole($accessRole)
    {
        $this->accessRole = $accessRole;
    }

    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }

    public function getColorId()
    {
        return $this->colorId;
    }

    public function setColorId($colorId)
    {
        $this->colorId = $colorId;
    }

    public function setDefaultReminders($defaultReminders)
    {
        $this->defaultReminders = $defaultReminders;
    }

    public function getDefaultReminders()
    {
        return $this->defaultReminders;
    }

    public function getDeleted()
    {
        return $this->deleted;
    }

    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
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

    public function getForegroundColor()
    {
        return $this->foregroundColor;
    }

    public function setForegroundColor($foregroundColor)
    {
        $this->foregroundColor = $foregroundColor;
    }

    public function getHidden()
    {
        return $this->hidden;
    }

    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
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

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function setNotificationSettings(Google_Service_Calendar_CalendarListEntryNotificationSettings $notificationSettings)
    {
        $this->notificationSettings = $notificationSettings;
    }

    public function getNotificationSettings()
    {
        return $this->notificationSettings;
    }

    public function getPrimary()
    {
        return $this->primary;
    }

    public function setPrimary($primary)
    {
        $this->primary = $primary;
    }

    public function getSelected()
    {
        return $this->selected;
    }

    public function setSelected($selected)
    {
        $this->selected = $selected;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function getSummaryOverride()
    {
        return $this->summaryOverride;
    }

    public function setSummaryOverride($summaryOverride)
    {
        $this->summaryOverride = $summaryOverride;
    }

    public function getTimeZone()
    {
        return $this->timeZone;
    }

    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }
}

class Google_Service_Calendar_CalendarListEntryNotificationSettings extends Google_Collection
{
    protected $collection_key = 'notifications';
    protected $internal_gapi_mappings = [];
    protected $notificationsType = 'Google_Service_Calendar_CalendarNotification';
    protected $notificationsDataType = 'array';


    public function setNotifications($notifications)
    {
        $this->notifications = $notifications;
    }

    public function getNotifications()
    {
        return $this->notifications;
    }
}

class Google_Service_Calendar_CalendarNotification extends Google_Model
{
    public $method;
    public $type;
    protected $internal_gapi_mappings = [];

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod($method)
    {
        $this->method = $method;
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

class Google_Service_Calendar_Channel extends Google_Model
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

class Google_Service_Calendar_ChannelParams extends Google_Model
{
}

class Google_Service_Calendar_ColorDefinition extends Google_Model
{
    public $background;
    public $foreground;
    protected $internal_gapi_mappings = [];

    public function getBackground()
    {
        return $this->background;
    }

    public function setBackground($background)
    {
        $this->background = $background;
    }

    public function getForeground()
    {
        return $this->foreground;
    }

    public function setForeground($foreground)
    {
        $this->foreground = $foreground;
    }
}

class Google_Service_Calendar_Colors extends Google_Model
{
    public $kind;
    public $updated;
    protected $internal_gapi_mappings = [];
    protected $calendarType = 'Google_Service_Calendar_ColorDefinition';
    protected $calendarDataType = 'map';
    protected $eventType = 'Google_Service_Calendar_ColorDefinition';
    protected $eventDataType = 'map';

    public function setCalendar($calendar)
    {
        $this->calendar = $calendar;
    }

    public function getCalendar()
    {
        return $this->calendar;
    }

    public function setEvent($event)
    {
        $this->event = $event;
    }

    public function getEvent()
    {
        return $this->event;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
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

class Google_Service_Calendar_ColorsCalendar extends Google_Model
{
}

class Google_Service_Calendar_ColorsEvent extends Google_Model
{
}

class Google_Service_Calendar_Error extends Google_Model
{
    public $domain;
    public $reason;
    protected $internal_gapi_mappings = [];

    public function getDomain()
    {
        return $this->domain;
    }

    public function setDomain($domain)
    {
        $this->domain = $domain;
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

class Google_Service_Calendar_Event extends Google_Collection
{
    public $anyoneCanAddSelf;
    public $attendeesOmitted;
    public $colorId;
    public $created;
    public $description;
    public $endTimeUnspecified;
    public $etag;
    public $guestsCanInviteOthers;
    public $guestsCanModify;
    public $guestsCanSeeOtherGuests;
    public $hangoutLink;
    public $htmlLink;
    public $iCalUID;
    public $id;
    public $kind;
    public $location;
    public $locked;
    public $privateCopy;
    public $recurrence;
    public $recurringEventId;
    public $sequence;
    public $status;
    public $summary;
    public $transparency;
    public $updated;
    public $visibility;
    protected $collection_key = 'recurrence';
    protected $internal_gapi_mappings = [];
    protected $attendeesType = 'Google_Service_Calendar_EventAttendee';
    protected $attendeesDataType = 'array';
    protected $creatorType = 'Google_Service_Calendar_EventCreator';
    protected $creatorDataType = '';
    protected $endType = 'Google_Service_Calendar_EventDateTime';
    protected $endDataType = '';
    protected $extendedPropertiesType = 'Google_Service_Calendar_EventExtendedProperties';
    protected $extendedPropertiesDataType = '';
    protected $gadgetType = 'Google_Service_Calendar_EventGadget';
    protected $gadgetDataType = '';
    protected $organizerType = 'Google_Service_Calendar_EventOrganizer';
    protected $organizerDataType = '';
    protected $originalStartTimeType = 'Google_Service_Calendar_EventDateTime';
    protected $originalStartTimeDataType = '';
    protected $remindersType = 'Google_Service_Calendar_EventReminders';
    protected $remindersDataType = '';
    protected $sourceType = 'Google_Service_Calendar_EventSource';
    protected $sourceDataType = '';
    protected $startType = 'Google_Service_Calendar_EventDateTime';
    protected $startDataType = '';

    public function getAnyoneCanAddSelf()
    {
        return $this->anyoneCanAddSelf;
    }

    public function setAnyoneCanAddSelf($anyoneCanAddSelf)
    {
        $this->anyoneCanAddSelf = $anyoneCanAddSelf;
    }

    public function setAttendees($attendees)
    {
        $this->attendees = $attendees;
    }

    public function getAttendees()
    {
        return $this->attendees;
    }

    public function getAttendeesOmitted()
    {
        return $this->attendeesOmitted;
    }

    public function setAttendeesOmitted($attendeesOmitted)
    {
        $this->attendeesOmitted = $attendeesOmitted;
    }

    public function getColorId()
    {
        return $this->colorId;
    }

    public function setColorId($colorId)
    {
        $this->colorId = $colorId;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;
    }

    public function setCreator(Google_Service_Calendar_EventCreator $creator)
    {
        $this->creator = $creator;
    }

    public function getCreator()
    {
        return $this->creator;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setEnd(Google_Service_Calendar_EventDateTime $end)
    {
        $this->end = $end;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function getEndTimeUnspecified()
    {
        return $this->endTimeUnspecified;
    }

    public function setEndTimeUnspecified($endTimeUnspecified)
    {
        $this->endTimeUnspecified = $endTimeUnspecified;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function setExtendedProperties(Google_Service_Calendar_EventExtendedProperties $extendedProperties)
    {
        $this->extendedProperties = $extendedProperties;
    }

    public function getExtendedProperties()
    {
        return $this->extendedProperties;
    }

    public function setGadget(Google_Service_Calendar_EventGadget $gadget)
    {
        $this->gadget = $gadget;
    }

    public function getGadget()
    {
        return $this->gadget;
    }

    public function getGuestsCanInviteOthers()
    {
        return $this->guestsCanInviteOthers;
    }

    public function setGuestsCanInviteOthers($guestsCanInviteOthers)
    {
        $this->guestsCanInviteOthers = $guestsCanInviteOthers;
    }

    public function getGuestsCanModify()
    {
        return $this->guestsCanModify;
    }

    public function setGuestsCanModify($guestsCanModify)
    {
        $this->guestsCanModify = $guestsCanModify;
    }

    public function getGuestsCanSeeOtherGuests()
    {
        return $this->guestsCanSeeOtherGuests;
    }

    public function setGuestsCanSeeOtherGuests($guestsCanSeeOtherGuests)
    {
        $this->guestsCanSeeOtherGuests = $guestsCanSeeOtherGuests;
    }

    public function getHangoutLink()
    {
        return $this->hangoutLink;
    }

    public function setHangoutLink($hangoutLink)
    {
        $this->hangoutLink = $hangoutLink;
    }

    public function getHtmlLink()
    {
        return $this->htmlLink;
    }

    public function setHtmlLink($htmlLink)
    {
        $this->htmlLink = $htmlLink;
    }

    public function getICalUID()
    {
        return $this->iCalUID;
    }

    public function setICalUID($iCalUID)
    {
        $this->iCalUID = $iCalUID;
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

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getLocked()
    {
        return $this->locked;
    }

    public function setLocked($locked)
    {
        $this->locked = $locked;
    }

    public function setOrganizer(Google_Service_Calendar_EventOrganizer $organizer)
    {
        $this->organizer = $organizer;
    }

    public function getOrganizer()
    {
        return $this->organizer;
    }

    public function setOriginalStartTime(Google_Service_Calendar_EventDateTime $originalStartTime)
    {
        $this->originalStartTime = $originalStartTime;
    }

    public function getOriginalStartTime()
    {
        return $this->originalStartTime;
    }

    public function getPrivateCopy()
    {
        return $this->privateCopy;
    }

    public function setPrivateCopy($privateCopy)
    {
        $this->privateCopy = $privateCopy;
    }

    public function getRecurrence()
    {
        return $this->recurrence;
    }

    public function setRecurrence($recurrence)
    {
        $this->recurrence = $recurrence;
    }

    public function getRecurringEventId()
    {
        return $this->recurringEventId;
    }

    public function setRecurringEventId($recurringEventId)
    {
        $this->recurringEventId = $recurringEventId;
    }

    public function setReminders(Google_Service_Calendar_EventReminders $reminders)
    {
        $this->reminders = $reminders;
    }

    public function getReminders()
    {
        return $this->reminders;
    }

    public function getSequence()
    {
        return $this->sequence;
    }

    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
    }

    public function setSource(Google_Service_Calendar_EventSource $source)
    {
        $this->source = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setStart(Google_Service_Calendar_EventDateTime $start)
    {
        $this->start = $start;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function getTransparency()
    {
        return $this->transparency;
    }

    public function setTransparency($transparency)
    {
        $this->transparency = $transparency;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setUpdated($updated)
    {
        $this->updated = $updated;
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

class Google_Service_Calendar_EventAttachment extends Google_Model
{
}

class Google_Service_Calendar_EventAttendee extends Google_Model
{
    public $additionalGuests;
    public $comment;
    public $displayName;
    public $email;
    public $id;
    public $optional;
    public $organizer;
    public $resource;
    public $responseStatus;
    public $self;
    protected $internal_gapi_mappings = [];

    public function getAdditionalGuests()
    {
        return $this->additionalGuests;
    }

    public function setAdditionalGuests($additionalGuests)
    {
        $this->additionalGuests = $additionalGuests;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getOptional()
    {
        return $this->optional;
    }

    public function setOptional($optional)
    {
        $this->optional = $optional;
    }

    public function getOrganizer()
    {
        return $this->organizer;
    }

    public function setOrganizer($organizer)
    {
        $this->organizer = $organizer;
    }

    public function getResource()
    {
        return $this->resource;
    }

    public function setResource($resource)
    {
        $this->resource = $resource;
    }

    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    public function setResponseStatus($responseStatus)
    {
        $this->responseStatus = $responseStatus;
    }

    public function getSelf()
    {
        return $this->self;
    }

    public function setSelf($self)
    {
        $this->self = $self;
    }
}

class Google_Service_Calendar_EventCreator extends Google_Model
{
    public $displayName;
    public $email;
    public $id;
    public $self;
    protected $internal_gapi_mappings = [];

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSelf()
    {
        return $this->self;
    }

    public function setSelf($self)
    {
        $this->self = $self;
    }
}

class Google_Service_Calendar_EventDateTime extends Google_Model
{
    public $date;
    public $dateTime;
    public $timeZone;
    protected $internal_gapi_mappings = [];

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDateTime()
    {
        return $this->dateTime;
    }

    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    }

    public function getTimeZone()
    {
        return $this->timeZone;
    }

    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }
}

class Google_Service_Calendar_EventExtendedProperties extends Google_Model
{
    public $private;
    public $shared;
    protected $internal_gapi_mappings = [];

    public function getPrivate()
    {
        return $this->private;
    }

    public function setPrivate($private)
    {
        $this->private = $private;
    }

    public function getShared()
    {
        return $this->shared;
    }

    public function setShared($shared)
    {
        $this->shared = $shared;
    }
}

class Google_Service_Calendar_EventExtendedPropertiesPrivate extends Google_Model
{
}

class Google_Service_Calendar_EventExtendedPropertiesShared extends Google_Model
{
}

class Google_Service_Calendar_EventGadget extends Google_Model
{
    public $display;
    public $height;
    public $iconLink;
    public $link;
    public $preferences;
    public $title;
    public $type;
    public $width;
    protected $internal_gapi_mappings = [];

    public function getDisplay()
    {
        return $this->display;
    }

    public function setDisplay($display)
    {
        $this->display = $display;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getIconLink()
    {
        return $this->iconLink;
    }

    public function setIconLink($iconLink)
    {
        $this->iconLink = $iconLink;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getPreferences()
    {
        return $this->preferences;
    }

    public function setPreferences($preferences)
    {
        $this->preferences = $preferences;
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

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }
}

class Google_Service_Calendar_EventGadgetPreferences extends Google_Model
{
}

class Google_Service_Calendar_EventOrganizer extends Google_Model
{
    public $displayName;
    public $email;
    public $id;
    public $self;
    protected $internal_gapi_mappings = [];

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSelf()
    {
        return $this->self;
    }

    public function setSelf($self)
    {
        $this->self = $self;
    }
}

class Google_Service_Calendar_EventReminder extends Google_Model
{
    public $method;
    public $minutes;
    protected $internal_gapi_mappings = [];

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function getMinutes()
    {
        return $this->minutes;
    }

    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;
    }
}

class Google_Service_Calendar_EventReminders extends Google_Collection
{
    public $useDefault;
    protected $collection_key = 'overrides';
    protected $internal_gapi_mappings = [];
    protected $overridesType = 'Google_Service_Calendar_EventReminder';
    protected $overridesDataType = 'array';

    public function setOverrides($overrides)
    {
        $this->overrides = $overrides;
    }

    public function getOverrides()
    {
        return $this->overrides;
    }

    public function getUseDefault()
    {
        return $this->useDefault;
    }

    public function setUseDefault($useDefault)
    {
        $this->useDefault = $useDefault;
    }
}

class Google_Service_Calendar_EventSource extends Google_Model
{
    public $title;
    public $url;
    protected $internal_gapi_mappings = [];

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
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

class Google_Service_Calendar_Events extends Google_Collection
{
    public $accessRole;
    public $description;
    public $etag;
    public $kind;
    public $nextPageToken;
    public $nextSyncToken;
    public $summary;
    public $timeZone;
    public $updated;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $defaultRemindersType = 'Google_Service_Calendar_EventReminder';
    protected $defaultRemindersDataType = 'array';
    protected $itemsType = 'Google_Service_Calendar_Event';
    protected $itemsDataType = 'array';

    public function getAccessRole()
    {
        return $this->accessRole;
    }

    public function setAccessRole($accessRole)
    {
        $this->accessRole = $accessRole;
    }

    public function setDefaultReminders($defaultReminders)
    {
        $this->defaultReminders = $defaultReminders;
    }

    public function getDefaultReminders()
    {
        return $this->defaultReminders;
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

    public function getNextSyncToken()
    {
        return $this->nextSyncToken;
    }

    public function setNextSyncToken($nextSyncToken)
    {
        $this->nextSyncToken = $nextSyncToken;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function getTimeZone()
    {
        return $this->timeZone;
    }

    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
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

class Google_Service_Calendar_FreeBusyCalendar extends Google_Collection
{
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = [];
    protected $busyType = 'Google_Service_Calendar_TimePeriod';
    protected $busyDataType = 'array';
    protected $errorsType = 'Google_Service_Calendar_Error';
    protected $errorsDataType = 'array';


    public function setBusy($busy)
    {
        $this->busy = $busy;
    }

    public function getBusy()
    {
        return $this->busy;
    }

    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}

class Google_Service_Calendar_FreeBusyGroup extends Google_Collection
{
    public $calendars;
    protected $collection_key = 'errors';
    protected $internal_gapi_mappings = [];
    protected $errorsType = 'Google_Service_Calendar_Error';
    protected $errorsDataType = 'array';

    public function getCalendars()
    {
        return $this->calendars;
    }

    public function setCalendars($calendars)
    {
        $this->calendars = $calendars;
    }

    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}

class Google_Service_Calendar_FreeBusyRequest extends Google_Collection
{
    public $calendarExpansionMax;
    public $groupExpansionMax;
    public $timeMax;
    public $timeMin;
    public $timeZone;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Calendar_FreeBusyRequestItem';
    protected $itemsDataType = 'array';

    public function getCalendarExpansionMax()
    {
        return $this->calendarExpansionMax;
    }

    public function setCalendarExpansionMax($calendarExpansionMax)
    {
        $this->calendarExpansionMax = $calendarExpansionMax;
    }

    public function getGroupExpansionMax()
    {
        return $this->groupExpansionMax;
    }

    public function setGroupExpansionMax($groupExpansionMax)
    {
        $this->groupExpansionMax = $groupExpansionMax;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function getTimeMax()
    {
        return $this->timeMax;
    }

    public function setTimeMax($timeMax)
    {
        $this->timeMax = $timeMax;
    }

    public function getTimeMin()
    {
        return $this->timeMin;
    }

    public function setTimeMin($timeMin)
    {
        $this->timeMin = $timeMin;
    }

    public function getTimeZone()
    {
        return $this->timeZone;
    }

    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }
}

class Google_Service_Calendar_FreeBusyRequestItem extends Google_Model
{
    public $id;
    protected $internal_gapi_mappings = [];

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}

class Google_Service_Calendar_FreeBusyResponse extends Google_Model
{
    public $kind;
    public $timeMax;
    public $timeMin;
    protected $internal_gapi_mappings = [];
    protected $calendarsType = 'Google_Service_Calendar_FreeBusyCalendar';
    protected $calendarsDataType = 'map';
    protected $groupsType = 'Google_Service_Calendar_FreeBusyGroup';
    protected $groupsDataType = 'map';

    public function setCalendars($calendars)
    {
        $this->calendars = $calendars;
    }

    public function getCalendars()
    {
        return $this->calendars;
    }

    public function setGroups($groups)
    {
        $this->groups = $groups;
    }

    public function getGroups()
    {
        return $this->groups;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getTimeMax()
    {
        return $this->timeMax;
    }

    public function setTimeMax($timeMax)
    {
        $this->timeMax = $timeMax;
    }

    public function getTimeMin()
    {
        return $this->timeMin;
    }

    public function setTimeMin($timeMin)
    {
        $this->timeMin = $timeMin;
    }
}

class Google_Service_Calendar_FreeBusyResponseCalendars extends Google_Model
{
}

class Google_Service_Calendar_FreeBusyResponseGroups extends Google_Model
{
}

class Google_Service_Calendar_Setting extends Google_Model
{
    public $etag;
    public $id;
    public $kind;
    public $value;
    protected $internal_gapi_mappings = [];

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

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_Service_Calendar_Settings extends Google_Collection
{
    public $etag;
    public $kind;
    public $nextPageToken;
    public $nextSyncToken;
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [];
    protected $itemsType = 'Google_Service_Calendar_Setting';
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

    public function getNextSyncToken()
    {
        return $this->nextSyncToken;
    }

    public function setNextSyncToken($nextSyncToken)
    {
        $this->nextSyncToken = $nextSyncToken;
    }
}

class Google_Service_Calendar_TimePeriod extends Google_Model
{
    public $end;
    public $start;
    protected $internal_gapi_mappings = [];

    public function getEnd()
    {
        return $this->end;
    }

    public function setEnd($end)
    {
        $this->end = $end;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function setStart($start)
    {
        $this->start = $start;
    }
}
