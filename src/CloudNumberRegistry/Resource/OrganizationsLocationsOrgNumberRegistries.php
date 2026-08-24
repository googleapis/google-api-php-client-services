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

namespace Google\Service\CloudNumberRegistry\Resource;

use Google\Service\CloudNumberRegistry\ListOrgNumberRegistriesResponse;
use Google\Service\CloudNumberRegistry\Operation;
use Google\Service\CloudNumberRegistry\OrgNumberRegistry;

/**
 * The "orgNumberRegistries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudnumberregistryService = new Google\Service\CloudNumberRegistry(...);
 *   $orgNumberRegistries = $cloudnumberregistryService->organizations_locations_orgNumberRegistries;
 *  </code>
 */
class OrganizationsLocationsOrgNumberRegistries extends \Google\Service\Resource
{
  /**
   * Creates a new OrgNumberRegistry in a given organization and location.
   * (orgNumberRegistries.create)
   *
   * @param string $parent Required. The parent resource name where the
   * OrgNumberRegistry will be created.
   * @param OrgNumberRegistry $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orgNumberRegistryId Required. The ID to use for the
   * OrgNumberRegistry, which will become the final segment of the resource name.
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
  public function create($parent, OrgNumberRegistry $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single OrgNumberRegistry. (orgNumberRegistries.delete)
   *
   * @param string $name Required. The resource name of the OrgNumberRegistry to
   * delete.
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
   * Gets details of a single OrgNumberRegistry. (orgNumberRegistries.get)
   *
   * @param string $name Required. The resource name of the OrgNumberRegistry to
   * retrieve.
   * @param array $optParams Optional parameters.
   * @return OrgNumberRegistry
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], OrgNumberRegistry::class);
  }
  /**
   * Lists OrgNumberRegistries in a given organization and location.
   * (orgNumberRegistries.listOrganizationsLocationsOrgNumberRegistries)
   *
   * @param string $parent Required. The parent resource name, for example
   * `organizations/locations`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter expression to filter the results.
   * @opt_param string orderBy Optional. Hint for how to order the results.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return.
   * @return ListOrgNumberRegistriesResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsLocationsOrgNumberRegistries($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListOrgNumberRegistriesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsLocationsOrgNumberRegistries::class, 'Google_Service_CloudNumberRegistry_Resource_OrganizationsLocationsOrgNumberRegistries');
