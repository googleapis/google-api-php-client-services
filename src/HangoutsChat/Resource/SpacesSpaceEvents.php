<?php
/*
 * Copyright 2014 Google Inc.
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

namespace Google\Service\HangoutsChat\Resource;

use Google\Service\HangoutsChat\ListSpaceEventsResponse;
use Google\Service\HangoutsChat\SpaceEvent;

/**
 * The "spaceEvents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chatService = new Google\Service\HangoutsChat(...);
 *   $spaceEvents = $chatService->spaces_spaceEvents;
 *  </code>
 */
class SpacesSpaceEvents extends \Google\Service\Resource
{
  /**
   * Returns a SpaceEvent. You can request events from up to 28 days before the
   * time of the request. The server will return the most recent version of the
   * resource. For example, if a `google.workspace.chat.message.v1.created` event
   * is requested and the message has since been deleted, the returned event will
   * contain the deleted message resource in the payload. Requires [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users).
   * (spaceEvents.get)
   *
   * @param string $name Required. The resource name of the event. Format:
   * `spaces/{space}/spaceEvents/{spaceEvent}`
   * @param array $optParams Optional parameters.
   * @return SpaceEvent
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], SpaceEvent::class);
  }
  /**
   * Lists SpaceEvents in a space that the caller is a member of. You can request
   * events from up to 28 days before the time of the request. The server will
   * return the most recent version of the resources. For example, if a
   * `google.workspace.chat.message.v1.created` event is requested and the message
   * has since been deleted, the returned event will contain the deleted message
   * resource in the payload. Requires [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users).
   * (spaceEvents.listSpacesSpaceEvents)
   *
   * @param string $parent Required. The resource name of the space from which to
   * list events. Format: `spaces/{space}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Required. A query filter. This method supports
   * filtering by: `event_types`, `start_time`, and `end_time`. `event_types`: You
   * must specify at least one event type in your query. `event_types` supports
   * the has `:` operator. To filter by multiple event types, use the `OR`
   * operator. To see the list of currently supported event types, see
   * google.chat.v1.SpaceEvent.event_type `start_time`: Exclusive timestamp from
   * which to start listing space events. You can list events that occurred up to
   * 28 days ago. If unspecified, lists space events from the 28 days ago up to
   * end time. `end_time`: Inclusive timestamp up to which space events are
   * listed. Default value is the present. `start_time` and `end_time` accept a
   * timestamp in [RFC-3339](https://www.rfc-editor.org/rfc/rfc3339) format and
   * support the equals `=` comparison operator. To filter by both `start_time`
   * and `end_time`, use the `AND` operator. For example, the following queries
   * are valid: ``` start_time="2023-08-23T19:20:33+00:00" AND
   * end_time="2023-08-23T19:21:54+00:00" ``` ```
   * start_time="2023-08-23T19:20:33+00:00" AND
   * (event_types:"google.workspace.chat.space.v1.updated" OR
   * event_types:"google.workspace.chat.message.v1.created") ``` The following
   * queries are invalid: ``` start_time="2023-08-23T19:20:33+00:00" OR
   * end_time="2023-08-23T19:21:54+00:00" ``` ```
   * event_types:"google.workspace.chat.space.v1.updated" AND
   * event_types:"google.workspace.chat.message.v1.created" ``` Invalid queries
   * are rejected by the server with an `INVALID_ARGUMENT` error.
   * @opt_param int pageSize Optional. The maximum number of space events
   * returned. The service may return fewer than this value. Negative values
   * return an `INVALID_ARGUMENT` error.
   * @opt_param string pageToken A page token, received from a previous list space
   * events call. Provide this to retrieve the subsequent page. When paginating,
   * all other parameters provided to list space events must match the call that
   * provided the page token. Passing different values to the other parameters
   * might lead to unexpected results.
   * @return ListSpaceEventsResponse
   * @throws \Google\Service\Exception
   */
  public function listSpacesSpaceEvents($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSpaceEventsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SpacesSpaceEvents::class, 'Google_Service_HangoutsChat_Resource_SpacesSpaceEvents');
