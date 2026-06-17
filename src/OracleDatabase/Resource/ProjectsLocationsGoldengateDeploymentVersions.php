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

namespace Google\Service\OracleDatabase\Resource;

use Google\Service\OracleDatabase\ListGoldengateDeploymentVersionsResponse;

/**
 * The "goldengateDeploymentVersions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $oracledatabaseService = new Google\Service\OracleDatabase(...);
 *   $goldengateDeploymentVersions = $oracledatabaseService->projects_locations_goldengateDeploymentVersions;
 *  </code>
 */
class ProjectsLocationsGoldengateDeploymentVersions extends \Google\Service\Resource
{
  /**
   * Lists GoldengateDeploymentVersions in a given project and location. (goldenga
   * teDeploymentVersions.listProjectsLocationsGoldengateDeploymentVersions)
   *
   * @param string $parent Required. Parent value for
   * ListGoldengateDeploymentVersionsRequest Format:
   * projects/{project}/locations/{location}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. An expression for filtering the results of
   * the request. Either the deployment_id and deployment_type fields must be
   * specified in the format: `deployment_id="id"` or
   * `deployment_type="DATABASE_ORACLE"`.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default. The maximum value is 1000; values above 1000 will be coerced to
   * 1000.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return.
   * @return ListGoldengateDeploymentVersionsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsGoldengateDeploymentVersions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListGoldengateDeploymentVersionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsGoldengateDeploymentVersions::class, 'Google_Service_OracleDatabase_Resource_ProjectsLocationsGoldengateDeploymentVersions');
