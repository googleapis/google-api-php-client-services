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

use Google\Service\HangoutsChat\ChatEmpty;
use Google\Service\HangoutsChat\ListSpacesResponse;
use Google\Service\HangoutsChat\SetUpSpaceRequest;
use Google\Service\HangoutsChat\Space;

/**
 * The "spaces" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chatService = new Google\Service\HangoutsChat(...);
 *   $spaces = $chatService->spaces;
 *  </code>
 */
class Spaces extends \Google\Service\Resource
{
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Creates
   * a named space. Spaces grouped by topics or that have guest access aren't
   * supported. Requires [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users) and
   * the `chat.spaces.create` or `chat.spaces` scope. (spaces.create)
   *
   * @param Space $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. A unique identifier for this request. A
   * random UUID is recommended. Specifying an existing request ID returns the
   * space created with that ID instead of creating a new space. Specifying an
   * existing request ID from the same Chat app with a different authenticated
   * user returns an error.
   * @return Space
   */
  public function create(Space $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Space::class);
  }
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Deletes
   * a named space. Always performs a cascading delete, which means that the
   * space's child resources—like messages posted in the space and memberships in
   * the space—are also deleted. Requires [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users)
   * from a user who has permission to delete the space, and the `chat.delete`
   * scope. (spaces.delete)
   *
   * @param string $name Required. Resource name of the space to delete. Format:
   * `spaces/{space}`
   * @param array $optParams Optional parameters.
   * @return ChatEmpty
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], ChatEmpty::class);
  }
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Returns
   * the existing direct message with the specified user. With [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users),
   * returns the direct message space between the specified user and the
   * authenticated user. With [service account
   * authentication](https://developers.google.com/chat/api/guides/auth/service-
   * accounts), returns the direct message space between the specified user and
   * the calling Chat app. If no direct message space is found, returns a `404
   * NOT_FOUND` error. Requires [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users) or
   * [service account
   * authentication](https://developers.google.com/chat/api/guides/auth/service-
   * accounts). (spaces.findDirectMessage)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string name Required. Resource name of the user to find direct
   * message with. Format: `users/{user}`, where `{user}` is either the
   * `{person_id}` for the
   * [person](https://developers.google.com/people/api/rest/v1/people) from the
   * People API, or the `id` for the [user](https://developers.google.com/admin-
   * sdk/directory/reference/rest/v1/users) in the Directory API. For example, if
   * the People API `Person.resourceName` is `people/123456789`, you can find a
   * direct message with that person by using `users/123456789` as the `name`.
   * @return Space
   */
  public function findDirectMessage($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('findDirectMessage', [$params], Space::class);
  }
  /**
   * Returns a space. Requires
   * [authentication](https://developers.google.com/chat/api/guides/auth). Fully
   * supports [service account
   * authentication](https://developers.google.com/chat/api/guides/auth/service-
   * accounts). Supports [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users) as
   * part of the [Google Workspace Developer Preview
   * Program](https://developers.google.com/workspace/preview), which grants early
   * access to certain features. [User
   * authentication](https://developers.google.com/chat/api/guides/auth/users)
   * requires the `chat.spaces` or `chat.spaces.readonly` authorization scope.
   * (spaces.get)
   *
   * @param string $name Required. Resource name of the space, in the form
   * "spaces". Format: `spaces/{space}`
   * @param array $optParams Optional parameters.
   * @return Space
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Space::class);
  }
  /**
   * Lists spaces the caller is a member of. Requires
   * [authentication](https://developers.google.com/chat/api/guides/auth). Fully
   * supports [service account
   * authentication](https://developers.google.com/chat/api/guides/auth/service-
   * accounts). Supports [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users) as
   * part of the [Google Workspace Developer Preview
   * Program](https://developers.google.com/workspace/preview), which grants early
   * access to certain features. [User
   * authentication](https://developers.google.com/chat/api/guides/auth/users)
   * requires the `chat.spaces` or `chat.spaces.readonly` authorization scope.
   * Lists spaces visible to the caller or authenticated user. Group chats and DMs
   * aren't listed until the first message is sent. (spaces.listSpaces)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A query filter. Requires [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users).
   * You can filter spaces by the space type ([`space_type`](https://developers.go
   * ogle.com/chat/api/reference/rest/v1/spaces#spacetype)). To filter by space
   * type, you must specify valid enum value, such as `SPACE` or `GROUP_CHAT` (the
   * `space_type` can't be `SPACE_TYPE_UNSPECIFIED`). To query for multiple space
   * types, use the `OR` operator. For example, the following queries are valid:
   * ``` space_type = "SPACE" spaceType = "GROUP_CHAT" OR spaceType =
   * "DIRECT_MESSAGE" ``` Invalid queries are rejected by the server with an
   * `INVALID_ARGUMENT` error. With [service account
   * authentication](https://developers.google.com/chat/api/guides/auth/service-
   * accounts), this field is ignored and the query always returns all spaces. But
   * the Chat API still validates the query syntax with service accounts, so
   * invalid queries are still rejected. [Developer
   * Preview](https://developers.google.com/workspace/preview).
   * @opt_param int pageSize Optional. The maximum number of spaces to return. The
   * service might return fewer than this value. If unspecified, at most 100
   * spaces are returned. The maximum value is 1,000. If you use a value more than
   * 1,000, it's automatically changed to 1,000. Negative values return an
   * `INVALID_ARGUMENT` error.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * list spaces call. Provide this parameter to retrieve the subsequent page.
   * When paginating, the filter value should match the call that provided the
   * page token. Passing a different value may lead to unexpected results.
   * @return ListSpacesResponse
   */
  public function listSpaces($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSpacesResponse::class);
  }
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Updates
   * a space. Requires [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users) and
   * the `chat.spaces` scope. (spaces.patch)
   *
   * @param string $name Resource name of the space. Format: `spaces/{space}`
   * @param Space $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The updated field paths, comma
   * separated if there are multiple. Currently supported field paths: -
   * `display_name` (Only supports changing the display name of a space with the
   * `SPACE` type, or when also including the `space_type` mask to change a
   * `GROUP_CHAT` space type to `SPACE`. Trying to update the display name of a
   * `GROUP_CHAT` or a `DIRECT_MESSAGE` space results in an invalid argument
   * error.) - `space_type` (Only supports changing a `GROUP_CHAT` space type to
   * `SPACE`. Include `display_name` together with `space_type` in the update mask
   * and ensure that the specified space has a non-empty display name and the
   * `SPACE` space type. Including the `space_type` mask and the `SPACE` type in
   * the specified space when updating the display name is optional if the
   * existing space already has the `SPACE` type. Trying to update the space type
   * in other ways results in an invalid argument error). - `space_details` -
   * `space_history_state` (Supports [turning history on or off for the
   * space](https://support.google.com/chat/answer/7664687) if [the organization
   * allows users to change their history
   * setting](https://support.google.com/a/answer/7664184). Warning: mutually
   * exclusive with all other field paths.)
   * @return Space
   */
  public function patch($name, Space $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Space::class);
  }
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Creates
   * a space and adds specified users to it. The calling user is automatically
   * added to the space, and shouldn't be specified as a membership in the
   * request. To specify the human members to add, add memberships with the
   * appropriate `member.name` in the `SetUpSpaceRequest`. To add a human user,
   * use `users/{user}`, where `{user}` is either the `{person_id}` for the
   * [person](https://developers.google.com/people/api/rest/v1/people) from the
   * People API, or the `id` for the [user](https://developers.google.com/admin-
   * sdk/directory/reference/rest/v1/users) in the Admin SDK Directory API. For
   * example, if the People API `Person` `resourceName` is `people/123456789`, you
   * can add the user to the space by including a membership with
   * `users/123456789` as the `member.name`. For a space or group chat, if the
   * caller blocks or is blocked by some members, then those members aren't added
   * to the created space. To create a direct message (DM) between the calling
   * user and another human user, specify exactly one membership to represent the
   * human user. If one user blocks the other, the request fails and the DM isn't
   * created. To create a DM between the calling user and the calling app, set
   * `Space.singleUserBotDm` to true and don't specify any memberships. You can
   * only use this method to add app memberships to DMs. To add the calling app as
   * a member of other space types, use [create membership](https://developers.goo
   * gle.com/chat/api/reference/rest/v1/spaces.members/create) If a DM already
   * exists between two users, even when one user blocks the other at the time a
   * request is made, then the existing DM is returned. Spaces with threaded
   * replies or guest access aren't supported. Requires [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users) and
   * the `chat.spaces.create` or `chat.spaces` scope. (spaces.setup)
   *
   * @param SetUpSpaceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Space
   */
  public function setup(SetUpSpaceRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('setup', [$params], Space::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Spaces::class, 'Google_Service_HangoutsChat_Resource_Spaces');
