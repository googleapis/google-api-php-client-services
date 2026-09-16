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

namespace Google\Service\Meet\Resource;

use Google\Service\Meet\BatchUpdateMembersRequest;
use Google\Service\Meet\BatchUpdateMembersResponse;
use Google\Service\Meet\ListMembersResponse;
use Google\Service\Meet\MeetEmpty;
use Google\Service\Meet\Member;

/**
 * The "members" collection of methods.
 * Typical usage is:
 *  <code>
 *   $meetService = new Google\Service\Meet(...);
 *   $members = $meetService->spaces_members;
 *  </code>
 */
class SpacesMembers extends \Google\Service\Resource
{
  /**
   * Updates members of one space within a batch. (members.batchUpdate)
   *
   * @param string $parent Required. The parent resource shared by all Members
   * being updated. Format: spaces/{space}
   * @param BatchUpdateMembersRequest $postBody
   * @param array $optParams Optional parameters.
   * @return BatchUpdateMembersResponse
   * @throws \Google\Service\Exception
   */
  public function batchUpdate($parent, BatchUpdateMembersRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('batchUpdate', [$params], BatchUpdateMembersResponse::class);
  }
  /**
   * Creates a member. This API supports the `fields` parameter in
   * [SystemParameterContext](https://cloud.google.com/apis/docs/system-
   * parameters). When the `fields` parameter is omitted, this API response will
   * default to "name,email,role,user". (members.create)
   *
   * @param string $parent Required. Format: spaces/{space}
   * @param Member $postBody
   * @param array $optParams Optional parameters.
   * @return Member
   * @throws \Google\Service\Exception
   */
  public function create($parent, Member $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Member::class);
  }
  /**
   * Deletes the member who was previously assigned roles in the space.
   * (members.delete)
   *
   * @param string $name Required. Format: “spaces/{space}/members/{member}”
   * @param array $optParams Optional parameters.
   * @return MeetEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], MeetEmpty::class);
  }
  /**
   * Gets a member. This API supports the `fields` parameter in
   * [SystemParameterContext](https://cloud.google.com/apis/docs/system-
   * parameters). When the `fields` parameter is omitted, this API response will
   * default to "name,email,role,user". (members.get)
   *
   * @param string $name Required. Format: “spaces/{space}/members/{member}”
   * @param array $optParams Optional parameters.
   * @return Member
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Member::class);
  }
  /**
   * Lists members. This API supports the `fields` parameter in
   * [SystemParameterContext](https://cloud.google.com/apis/docs/system-
   * parameters). When the `fields` parameter is omitted this API response will
   * default to "name,email,role,user". (members.listSpacesMembers)
   *
   * @param string $parent Required. Format: spaces/{space}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Maximum number of members to return. The
   * service might return fewer than this value. If unspecified or set to 0, at
   * most 250 members are returned. The maximum value is 500; values above 500 are
   * coerced to 500. Maximum might change in the future.
   * @opt_param string pageToken Optional. Page token returned from previous List
   * Call.
   * @return ListMembersResponse
   * @throws \Google\Service\Exception
   */
  public function listSpacesMembers($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListMembersResponse::class);
  }
  /**
   * Updates a member. (members.patch)
   *
   * @param string $name Identifier. Resource name of the member. Format:
   * spaces/{space}/members/{member}
   * @param Member $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Field mask used to specify the fields
   * to be updated in the member. If update_mask isn't provided(not set, set with
   * empty paths, or only has "" as paths), it defaults to update all fields
   * provided with values in the request. Using "*" as update_mask will update all
   * fields, including deleting fields not set in the request. In case of
   * BatchUpdate, it must be absent or the same as the update_mask in
   * BatchUpdateMembersRequest when UpdateMemberRequest is built as a child
   * request of BatchUpdateMembersRequest.
   * @return Member
   * @throws \Google\Service\Exception
   */
  public function patch($name, Member $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Member::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SpacesMembers::class, 'Google_Service_Meet_Resource_SpacesMembers');
