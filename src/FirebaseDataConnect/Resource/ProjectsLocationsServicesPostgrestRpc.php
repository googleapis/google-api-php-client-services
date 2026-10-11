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

namespace Google\Service\FirebaseDataConnect\Resource;

use Google\Service\FirebaseDataConnect\HttpBody;

/**
 * The "rpc" collection of methods.
 * Typical usage is:
 *  <code>
 *   $firebasedataconnectService = new Google\Service\FirebaseDataConnect(...);
 *   $rpc = $firebasedataconnectService->projects_locations_services_postgrest_rpc;
 *  </code>
 */
class ProjectsLocationsServicesPostgrestRpc extends \Google\Service\Resource
{
  /**
   * Executes a PostgreSQL database function. (rpc.postgrestCallFunction)
   *
   * @param string $firebasedataconnectService Required. The resource name of the
   * service, in the format:
   * `projects/{project}/locations/{location}/services/{service}`
   * @param string $firebasedataconnectFunction Required. The name of the database
   * function.
   * @param HttpBody $postBody
   * @param array $optParams Optional parameters.
   * @return HttpBody
   * @throws \Google\Service\Exception
   */
  public function postgrestCallFunction($firebasedataconnectService, $firebasedataconnectFunction, HttpBody $postBody, $optParams = [])
  {
    $params = ['firebasedataconnectService' => $firebasedataconnectService, 'firebasedataconnectFunction' => $firebasedataconnectFunction, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('postgrestCallFunction', [$params], HttpBody::class);
  }
  /**
   * Executes a read-only PostgreSQL database function.
   * (rpc.postgrestQueryFunction)
   *
   * @param string $firebasedataconnectService Required. The resource name of the
   * service, in the format:
   * `projects/{project}/locations/{location}/services/{service}`
   * @param string $firebasedataconnectFunction Required. The name of the database
   * function.
   * @param array $optParams Optional parameters.
   * @return HttpBody
   * @throws \Google\Service\Exception
   */
  public function postgrestQueryFunction($firebasedataconnectService, $firebasedataconnectFunction, $optParams = [])
  {
    $params = ['firebasedataconnectService' => $firebasedataconnectService, 'firebasedataconnectFunction' => $firebasedataconnectFunction];
    $params = array_merge($params, $optParams);
    return $this->call('postgrestQueryFunction', [$params], HttpBody::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsServicesPostgrestRpc::class, 'Google_Service_FirebaseDataConnect_Resource_ProjectsLocationsServicesPostgrestRpc');
