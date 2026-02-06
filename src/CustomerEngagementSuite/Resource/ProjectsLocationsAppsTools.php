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
use Google\Service\CustomerEngagementSuite\ListToolsResponse;
use Google\Service\CustomerEngagementSuite\Tool;

/**
 * The "tools" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cesService = new Google\Service\CustomerEngagementSuite(...);
 *   $tools = $cesService->projects_locations_apps_tools;
 *  </code>
 */
class ProjectsLocationsAppsTools extends \Google\Service\Resource
{
  /**
   * Creates a new tool in the given app. (tools.create)
   *
   * @param string $parent Required. The resource name of the app to create a tool
   * in.
   * @param Tool $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string toolId Optional. The ID to use for the tool, which will
   * become the final component of the tool's resource name. If not provided, a
   * unique ID will be automatically assigned for the tool.
   * @return Tool
   * @throws \Google\Service\Exception
   */
  public function create($parent, Tool $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Tool::class);
  }
  /**
   * Deletes the specified tool. (tools.delete)
   *
   * @param string $name Required. The resource name of the tool to delete.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The current etag of the tool. If an etag is
   * not provided, the deletion will overwrite any concurrent changes. If an etag
   * is provided and does not match the current etag of the tool, deletion will be
   * blocked and an ABORTED error will be returned.
   * @opt_param bool force Optional. Indicates whether to forcefully delete the
   * tool, even if it is still referenced by agents/examples. * If `force =
   * false`, the deletion will fail if any agents still reference the tool. * If
   * `force = true`, all existing references from agents will be removed and the
   * tool will be deleted.
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
   * Gets details of the specified tool. (tools.get)
   *
   * @param string $name Required. The resource name of the tool to retrieve.
   * @param array $optParams Optional parameters.
   * @return Tool
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Tool::class);
  }
  /**
   * Lists tools in the given app. (tools.listProjectsLocationsAppsTools)
   *
   * @param string $parent Required. The resource name of the app to list tools
   * from.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter to be applied when listing the
   * tools. Use "include_system_tools=true" to include system tools in the
   * response. See https://google.aip.dev/160 for more details.
   * @opt_param string orderBy Optional. Field to sort by. Only "name" and
   * "create_time" is supported. See https://google.aip.dev/132#ordering for more
   * details.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous list AgentService.ListTools call.
   * @return ListToolsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAppsTools($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListToolsResponse::class);
  }
  /**
   * Updates the specified tool. (tools.patch)
   *
   * @param string $name Identifier. The unique identifier of the tool. Format: -
   * `projects/{project}/locations/{location}/apps/{app}/tools/{tool}` for ##
   * standalone tools. `projects/{project}/locations/{location}/apps/{app}/toolset
   * s/{toolset}/tools/{tool}` for tools retrieved from a toolset. These tools are
   * dynamic and output-only, they cannot be referenced directly where a tool is
   * expected.
   * @param Tool $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Field mask is used to control which
   * fields get updated. If the mask is not present, all fields will be updated.
   * @return Tool
   * @throws \Google\Service\Exception
   */
  public function patch($name, Tool $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Tool::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAppsTools::class, 'Google_Service_CustomerEngagementSuite_Resource_ProjectsLocationsAppsTools');
