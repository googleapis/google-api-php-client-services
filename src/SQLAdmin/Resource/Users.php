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

namespace Google\Service\SQLAdmin\Resource;

use Google\Service\SQLAdmin\Operation;
use Google\Service\SQLAdmin\User;
use Google\Service\SQLAdmin\UsersListResponse;

/**
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google\Service\SQLAdmin(...);
 *   $users = $sqladminService->users;
 *  </code>
 */
class Users extends \Google\Service\Resource
{
  /**
   * Deletes a user from a Cloud SQL instance. (users.delete)
   *
   * @param string $project Project ID of the project that contains the instance.
   * @param string $instance Database instance ID. This does not include the
   * project ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string host Host of the user in the instance.
   * @opt_param string name Name of the user in the instance.
   * @return Operation
   */
  public function delete($project, $instance, $optParams = [])
  {
    $params = ['project' => $project, 'instance' => $instance];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], Operation::class);
  }
  /**
   * Creates a new user in a Cloud SQL instance. (users.insert)
   *
   * @param string $project Project ID of the project that contains the instance.
   * @param string $instance Database instance ID. This does not include the
   * project ID.
   * @param User $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   */
  public function insert($project, $instance, User $postBody, $optParams = [])
  {
    $params = ['project' => $project, 'instance' => $instance, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('insert', [$params], Operation::class);
  }
  /**
   * Lists users in the specified Cloud SQL instance. (users.listUsers)
   *
   * @param string $project Project ID of the project that contains the instance.
   * @param string $instance Database instance ID. This does not include the
   * project ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string body.etag This field is deprecated and will be removed from
   * a future version of the API.
   * @opt_param string body.host The host name from which the user can connect.
   * For *insert* operations, host defaults to an empty string. For *update*
   * operations, host is specified as part of the request URL. The host name
   * cannot be updated after insertion.
   * @opt_param string body.instance The name of the Cloud SQL instance. This does
   * not include the project ID. Can be omitted for *update* since it is already
   * specified on the URL.
   * @opt_param string body.kind This is always *sql#user*.
   * @opt_param string body.name The name of the user in the Cloud SQL instance.
   * Can be omitted for *update* since it is already specified in the URL.
   * @opt_param string body.password The password for the user.
   * @opt_param string body.project The project ID of the project containing the
   * Cloud SQL database. The Google apps domain is prefixed if applicable. Can be
   * omitted for *update* since it is already specified on the URL.
   * @opt_param bool body.sqlserverUserDetails.disabled If the user has been
   * disabled
   * @opt_param string body.sqlserverUserDetails.serverRoles The server roles for
   * this user
   * @opt_param string body.type The user type. It determines the method to
   * authenticate the user during login. The default is the database's built-in
   * user type.
   * @return UsersListResponse
   */
  public function listUsers($project, $instance, $optParams = [])
  {
    $params = ['project' => $project, 'instance' => $instance];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], UsersListResponse::class);
  }
  /**
   * Updates an existing user in a Cloud SQL instance. (users.update)
   *
   * @param string $project Project ID of the project that contains the instance.
   * @param string $instance Database instance ID. This does not include the
   * project ID.
   * @param User $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string host Optional. Host of the user in the instance.
   * @opt_param string name Name of the user in the instance.
   * @return Operation
   */
  public function update($project, $instance, User $postBody, $optParams = [])
  {
    $params = ['project' => $project, 'instance' => $instance, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('update', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Users::class, 'Google_Service_SQLAdmin_Resource_Users');
