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

namespace Google\Service\CustomerEngagementSuite\Resource;

use Google\Service\CustomerEngagementSuite\CesEmpty;
use Google\Service\CustomerEngagementSuite\ListToolsetsResponse;
use Google\Service\CustomerEngagementSuite\RetrieveToolsRequest;
use Google\Service\CustomerEngagementSuite\RetrieveToolsResponse;
use Google\Service\CustomerEngagementSuite\Toolset;

/**
 * The "toolsets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cesService = new Google\Service\CustomerEngagementSuite(...);
 *   $toolsets = $cesService->projects_locations_apps_toolsets;
 *  </code>
 */
class ProjectsLocationsAppsToolsets extends \Google\Service\Resource
{
  /**
   * Creates a new toolset in the given app. (toolsets.create)
   *
   * @param string $parent Required. The resource name of the app to create a
   * toolset in.
   * @param Toolset $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string toolsetId Optional. The ID to use for the toolset, which
   * will become the final component of the toolset's resource name. If not
   * provided, a unique ID will be automatically assigned for the toolset.
   * @return Toolset
   * @throws \Google\Service\Exception
   */
  public function create($parent, Toolset $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Toolset::class);
  }
  /**
   * Deletes the specified toolset. (toolsets.delete)
   *
   * @param string $name Required. The resource name of the toolset to delete.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The current etag of the toolset. If an etag
   * is not provided, the deletion will overwrite any concurrent changes. If an
   * etag is provided and does not match the current etag of the toolset, deletion
   * will be blocked and an ABORTED error will be returned.
   * @opt_param bool force Optional. Indicates whether to forcefully delete the
   * toolset, even if it is still referenced by app/agents. * If `force = false`,
   * the deletion fails if any agents still reference the toolset. * If `force =
   * true`, all existing references from agents will be removed and the toolset
   * will be deleted.
   * @return CesEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], CesEmpty::class);
  }
  /**
   * Gets details of the specified toolset. (toolsets.get)
   *
   * @param string $name Required. The resource name of the toolset to retrieve.
   * @param array $optParams Optional parameters.
   * @return Toolset
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Toolset::class);
  }
  /**
   * Lists toolsets in the given app. (toolsets.listProjectsLocationsAppsToolsets)
   *
   * @param string $parent Required. The resource name of the app to list toolsets
   * from.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter to be applied when listing the
   * toolsets. See https://google.aip.dev/160 for more details.
   * @opt_param string orderBy Optional. Field to sort by. Only "name" and
   * "create_time" is supported. See https://google.aip.dev/132#ordering for more
   * details.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous list AgentService.ListToolsets call.
   * @return ListToolsetsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAppsToolsets($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListToolsetsResponse::class);
  }
  /**
   * Updates the specified toolset. (toolsets.patch)
   *
   * @param string $name Identifier. The unique identifier of the toolset. Format:
   * `projects/{project}/locations/{location}/apps/{app}/toolsets/{toolset}`
   * @param Toolset $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Field mask is used to control which
   * fields get updated. If the mask is not present, all fields will be updated.
   * @return Toolset
   * @throws \Google\Service\Exception
   */
  public function patch($name, Toolset $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Toolset::class);
  }
  /**
   * Retrieve the list of tools included in the specified toolset.
   * (toolsets.retrieveTools)
   *
   * @param string $toolset Required. The name of the toolset to retrieve the
   * tools for. Format:
   * `projects/{project}/locations/{location}/apps/{app}/toolsets/{toolset}`
   * @param RetrieveToolsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return RetrieveToolsResponse
   * @throws \Google\Service\Exception
   */
  public function retrieveTools($toolset, RetrieveToolsRequest $postBody, $optParams = [])
  {
    $params = ['toolset' => $toolset, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('retrieveTools', [$params], RetrieveToolsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAppsToolsets::class, 'Google_Service_CustomerEngagementSuite_Resource_ProjectsLocationsAppsToolsets');
