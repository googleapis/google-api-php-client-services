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

use Google\Service\HangoutsChat\ListMembershipsResponse;
use Google\Service\HangoutsChat\Membership;

/**
 * The "members" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chatService = new Google\Service\HangoutsChat(...);
 *   $members = $chatService->spaces_members;
 *  </code>
 */
class SpacesMembers extends \Google\Service\Resource
{
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Creates
   * a human membership or app membership for the calling app. Creating
   * memberships for other apps isn't supported. Requires [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users) and
   * the `chat.memberships` (for human membership) or `chat.memberships.app` (for
   * app membership) scope. To specify the member to add, set the
   * `membership.member.name` in the `CreateMembershipRequest`: - To add the
   * calling app to the space, use `users/app`. - To add a human user, use
   * `users/{user}`, where `{user}` is either the `{person_id}` for the
   * [person](https://developers.google.com/people/api/rest/v1/people) from the
   * People API, or the `id` for the [user](https://developers.google.com/admin-
   * sdk/directory/reference/rest/v1/users) in the Directory API. For example, if
   * the People API `Person` `resourceName` is `people/123456789`, you can add the
   * user to the space by setting the `membership.member.name` to
   * `users/123456789`. (members.create)
   *
   * @param string $parent Required. The resource name of the space for which to
   * create the membership. Format: spaces/{space}
   * @param Membership $postBody
   * @param array $optParams Optional parameters.
   * @return Membership
   */
  public function create($parent, Membership $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Membership::class);
  }
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Deletes
   * a membership. Requires [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users) and
   * the `chat.memberships` or `chat.memberships.app` authorization scope.
   * (members.delete)
   *
   * @param string $name Required. Resource name of the membership to delete. Chat
   * apps can delete human users' or their own memberships. Chat apps can't delete
   * other apps' memberships. When deleting a human membership, requires the
   * `chat.memberships` scope and `spaces/{space}/members/{member}` format. When
   * deleting an app membership, requires the `chat.memberships.app` scope and
   * `spaces/{space}/members/app` format. Format:
   * `spaces/{space}/members/{member}` or `spaces/{space}/members/app`
   * @param array $optParams Optional parameters.
   * @return Membership
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], Membership::class);
  }
  /**
   * Returns a membership. Requires
   * [authentication](https://developers.google.com/chat/api/guides/auth/). Fully
   * supports [service account
   * authentication](https://developers.google.com/chat/api/guides/auth/service-
   * accounts). Supports [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users) as
   * part of the [Google Workspace Developer Preview
   * Program](https://developers.google.com/workspace/preview), which grants early
   * access to certain features. [User
   * authentication](https://developers.google.com/chat/api/guides/auth/users)
   * requires the `chat.memberships` or `chat.memberships.readonly` authorization
   * scope. (members.get)
   *
   * @param string $name Required. Resource name of the membership to retrieve.
   * Format: `spaces/{space}/members/{member}`
   * @param array $optParams Optional parameters.
   * @return Membership
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Membership::class);
  }
  /**
   * Lists memberships in a space. Requires
   * [authentication](https://developers.google.com/chat/api/guides/auth/). Fully
   * supports [service account
   * authentication](https://developers.google.com/chat/api/guides/auth/service-
   * accounts). Supports [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users) as
   * part of the [Google Workspace Developer Preview
   * Program](https://developers.google.com/workspace/preview), which grants early
   * access to certain features. [User
   * authentication](https://developers.google.com/chat/api/guides/auth/users)
   * requires the `chat.memberships` or `chat.memberships.readonly` authorization
   * scope. (members.listSpacesMembers)
   *
   * @param string $parent Required. The resource name of the space for which to
   * fetch a membership list. Format: spaces/{space}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A query filter. You can filter memberships
   * by a member's role ([`role`](https://developers.google.com/chat/api/reference
   * /rest/v1/spaces.members#membershiprole)) and type ([`member.type`](https://de
   * velopers.google.com/chat/api/reference/rest/v1/User#type)). To filter by
   * role, set `role` to `ROLE_MEMBER` or `ROLE_MANAGER`. To filter by type, set
   * `member.type` to `HUMAN` or `BOT`. To filter by both role and type, use the
   * `AND` operator. To filter by either role or type, use the `OR` operator. For
   * example, the following queries are valid: ``` role = "ROLE_MANAGER" OR role =
   * "ROLE_MEMBER" member.type = "HUMAN" AND role = "ROLE_MANAGER" ``` The
   * following queries are invalid: ``` member.type = "HUMAN" AND member.type =
   * "BOT" role = "ROLE_MANAGER" AND role = "ROLE_MEMBER" ``` Invalid queries are
   * rejected by the server with an `INVALID_ARGUMENT` error.
   * @opt_param int pageSize The maximum number of memberships to return. The
   * service might return fewer than this value. If unspecified, at most 100
   * memberships are returned. The maximum value is 1,000. If you use a value more
   * than 1,000, it's automatically changed to 1,000. Negative values return an
   * `INVALID_ARGUMENT` error.
   * @opt_param string pageToken A page token, received from a previous call to
   * list memberships. Provide this parameter to retrieve the subsequent page.
   * When paginating, all other parameters provided should match the call that
   * provided the page token. Passing different values to the other parameters
   * might lead to unexpected results.
   * @opt_param bool showInvited Optional. When `true`, also returns memberships
   * associated with invited members, in addition to other types of memberships.
   * If a filter is set, invited memberships that don't match the filter criteria
   * aren't returned. Currently requires [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users).
   * @return ListMembershipsResponse
   */
  public function listSpacesMembers($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListMembershipsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SpacesMembers::class, 'Google_Service_HangoutsChat_Resource_SpacesMembers');
