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

use Google\Service\OracleDatabase\ListFlexComponentsResponse;

/**
 * The "flexComponents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $oracledatabaseService = new Google\Service\OracleDatabase(...);
 *   $flexComponents = $oracledatabaseService->projects_locations_flexComponents;
 *  </code>
 */
class ProjectsLocationsFlexComponents extends \Google\Service\Resource
{
  /**
   * Lists Flex Components in a given project and location.
   * (flexComponents.listProjectsLocationsFlexComponents)
   *
   * @param string $parent Required. Parent value for ListFlexComponentsRequest
   * Format: projects/{project}/locations/{location}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. An expression for filtering the results of
   * the request. Only the `shape` field is supported in the following format:
   * `shape="{shape}"`.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return.
   * @return ListFlexComponentsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsFlexComponents($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListFlexComponentsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsFlexComponents::class, 'Google_Service_OracleDatabase_Resource_ProjectsLocationsFlexComponents');
