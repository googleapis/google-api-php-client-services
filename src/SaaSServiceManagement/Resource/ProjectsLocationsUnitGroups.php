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

namespace Google\Service\SaaSServiceManagement\Resource;

use Google\Service\SaaSServiceManagement\ListUnitGroupsResponse;
use Google\Service\SaaSServiceManagement\SaasservicemgmtEmpty;
use Google\Service\SaaSServiceManagement\UnitGroup;

/**
 * The "unitGroups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $saasservicemgmtService = new Google\Service\SaaSServiceManagement(...);
 *   $unitGroups = $saasservicemgmtService->projects_locations_unitGroups;
 *  </code>
 */
class ProjectsLocationsUnitGroups extends \Google\Service\Resource
{
  /**
   * Create a new unit group. (unitGroups.create)
   *
   * @param string $parent Required. The parent of the unit group.
   * @param UnitGroup $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId An optional request ID to identify requests.
   * @opt_param string unitGroupId Required. The ID value for the new unit group.
   * @opt_param bool validateOnly If "validate_only" is set to true, the service
   * will try to validate that this request would succeed, but will not actually
   * make changes.
   * @return UnitGroup
   * @throws \Google\Service\Exception
   */
  public function create($parent, UnitGroup $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], UnitGroup::class);
  }
  /**
   * Delete a single unit group. (unitGroups.delete)
   *
   * @param string $name Required. The resource name of the resource within a
   * service.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag The etag known to the client for the expected state of
   * the unit group.
   * @opt_param string requestId An optional request ID to identify requests.
   * @opt_param bool validateOnly If "validate_only" is set to true, the service
   * will try to validate that this request would succeed, but will not actually
   * make changes.
   * @return SaasservicemgmtEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], SaasservicemgmtEmpty::class);
  }
  /**
   * Retrieve a single unit group. (unitGroups.get)
   *
   * @param string $name Required. The resource name of the resource within a
   * service.
   * @param array $optParams Optional parameters.
   * @return UnitGroup
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], UnitGroup::class);
  }
  /**
   * Retrieve a collection of unit groups.
   * (unitGroups.listProjectsLocationsUnitGroups)
   *
   * @param string $parent Required. The parent of the unit group.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Filter the list as specified in
   * https://google.aip.dev/160.
   * @opt_param string orderBy Order results as specified in
   * https://google.aip.dev/132.
   * @opt_param int pageSize The maximum number of unit groups to send per page.
   * @opt_param string pageToken The page token: If the next_page_token from a
   * previous response is provided, this request will send the subsequent page.
   * @return ListUnitGroupsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsUnitGroups($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListUnitGroupsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsUnitGroups::class, 'Google_Service_SaaSServiceManagement_Resource_ProjectsLocationsUnitGroups');
