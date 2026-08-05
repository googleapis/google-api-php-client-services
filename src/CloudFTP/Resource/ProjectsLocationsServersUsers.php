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

namespace Google\Service\CloudFTP\Resource;

use Google\Service\CloudFTP\ListUsersResponse;
use Google\Service\CloudFTP\Operation;
use Google\Service\CloudFTP\User;

/**
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $ftpService = new Google\Service\CloudFTP(...);
 *   $users = $ftpService->projects_locations_servers_users;
 *  </code>
 */
class ProjectsLocationsServersUsers extends \Google\Service\Resource
{
  /**
   * Creates a new User in a given project and location and Server. (users.create)
   *
   * @param string $parent Required. Value for parent.
   * @param User $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The server will guarantee that for at least 60 minutes since the first
   * request. For example, consider a situation where you make an initial request
   * and the request times out. If you make the request again with the same
   * request ID, the server can check if original operation with the same request
   * ID was received, and if so, will ignore the second request. This prevents
   * clients from accidentally creating duplicate commitments. The request ID must
   * be a valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
   * @opt_param string userId Required. Id of the requesting object If auto-
   * generating Id server-side, remove this field and server_id from the
   * method_signature of Create RPC
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, User $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single User. (users.delete)
   *
   * @param string $name Required. Name of the resource
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force Optional. If set to true, the request will force the
   * deletion of the User.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], Operation::class);
  }
  /**
   * Gets details of a single User. (users.get)
   *
   * @param string $name Required. Name of the resource
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Optional. The view of the User resource to return.
   * @return User
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], User::class);
  }
  /**
   * Lists Users in a given project and location.
   * (users.listProjectsLocationsServersUsers)
   *
   * @param string $parent Required. Parent value for ListUsersRequest
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filtering results
   * @opt_param string orderBy Optional. Hint for how to order the results
   * @opt_param int pageSize Optional. Requested page size. User may return fewer
   * items than requested. The maximum value is 1000; The default value is 50 if
   * the field is omitted (or set to 0).
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the user should return.
   * @opt_param string view Optional. The view of the User resource to return.
   * @return ListUsersResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsServersUsers($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListUsersResponse::class);
  }
  /**
   * Updates the parameters of a single User. (users.patch)
   *
   * @param string $name Identifier. User-friendly name via which User will be
   * identified.
   * projects/{project}/locations/{location}/servers/{server}/users/{user}
   * @param User $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Field mask is used to specify the
   * fields to be overwritten in the User resource by the update. The fields
   * specified in the update_mask are relative to the resource, not the full
   * request. A field will be overwritten if it is in the mask. If the user does
   * not provide a mask then all fields present in the request will be
   * overwritten.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, User $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsServersUsers::class, 'Google_Service_CloudFTP_Resource_ProjectsLocationsServersUsers');
