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

namespace Google\Service\NetworkSecurity\Resource;

use Google\Service\NetworkSecurity\ListSACRealmsResponse;
use Google\Service\NetworkSecurity\Operation;
use Google\Service\NetworkSecurity\SACRealm;

/**
 * The "sacRealms" collection of methods.
 * Typical usage is:
 *  <code>
 *   $networksecurityService = new Google\Service\NetworkSecurity(...);
 *   $sacRealms = $networksecurityService->projects_locations_sacRealms;
 *  </code>
 */
class ProjectsLocationsSacRealms extends \Google\Service\Resource
{
  /**
   * Creates a new SACRealm in a given project. (sacRealms.create)
   *
   * @param string $parent Required. The parent, in the form
   * `projects/{project}/locations/global`.
   * @param SACRealm $postBody
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
   * @opt_param string sacRealmId Required. ID of the created realm. The ID must
   * be 1-63 characters long, and comply with RFC1035. Specifically, it must be
   * 1-63 characters long and match the regular expression
   * `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a
   * lowercase letter, and all following characters must be a dash, lowercase
   * letter, or digit, except the last character, which cannot be a dash.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, SACRealm $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes the specified realm. (sacRealms.delete)
   *
   * @param string $name Required. Name of the resource, in the form
   * `projects/{project}/locations/global/sacRealms/{sacRealm}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The server will guarantee that for at least 60 minutes after the first
   * request. For example, consider a situation where you make an initial request
   * and the request times out. If you make the request again with the same
   * request ID, the server can check if original operation with the same request
   * ID was received, and if so, will ignore the second request. This prevents
   * clients from accidentally creating duplicate commitments. The request ID must
   * be a valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
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
   * Returns the specified realm. (sacRealms.get)
   *
   * @param string $name Required. Name of the resource, in the form
   * `projects/{project}/locations/global/sacRealms/{sacRealm}`.
   * @param array $optParams Optional parameters.
   * @return SACRealm
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], SACRealm::class);
  }
  /**
   * Lists SACRealms in a given project.
   * (sacRealms.listProjectsLocationsSacRealms)
   *
   * @param string $parent Required. The parent, in the form
   * `projects/{project}/locations/global`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. An expression that filters the list of
   * results.
   * @opt_param string orderBy Optional. Sort the results by a certain order.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return.
   * @return ListSACRealmsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsSacRealms($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSACRealmsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsSacRealms::class, 'Google_Service_NetworkSecurity_Resource_ProjectsLocationsSacRealms');
