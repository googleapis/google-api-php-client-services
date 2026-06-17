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

use Google\Service\OracleDatabase\ListGoldengateDeploymentTypesResponse;

/**
 * The "goldengateDeploymentTypes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $oracledatabaseService = new Google\Service\OracleDatabase(...);
 *   $goldengateDeploymentTypes = $oracledatabaseService->projects_locations_goldengateDeploymentTypes;
 *  </code>
 */
class ProjectsLocationsGoldengateDeploymentTypes extends \Google\Service\Resource
{
  /**
   * Lists GoldenGateDeploymentTypes in a given project and location.
   * (goldengateDeploymentTypes.listProjectsLocationsGoldengateDeploymentTypes)
   *
   * @param string $parent Required. The parent resource. Format:
   * projects/{project}/locations/{location}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. An expression for filtering the results of
   * the request. Either the deployment_type and ogg_version fields must be
   * specified in the format: `deployment_type="DATABASE_ORACLE"` or
   * `ogg_version="version"`. Allowed values for deployment_type are:
   * `DATABASE_ORACLE`, `BIGDATA`, `DATABASE_MICROSOFT_SQLSERVER`,
   * `DATABASE_MYSQL`, `DATABASE_POSTGRESQL`, `DATABASE_DB2ZOS`, `DATABASE_DB2I`,
   * `GGSA`, `DATA_TRANSFORMS`.
   * @opt_param string orderBy Optional. Hint for how to order the results
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return.
   * @return ListGoldengateDeploymentTypesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsGoldengateDeploymentTypes($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListGoldengateDeploymentTypesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsGoldengateDeploymentTypes::class, 'Google_Service_OracleDatabase_Resource_ProjectsLocationsGoldengateDeploymentTypes');
