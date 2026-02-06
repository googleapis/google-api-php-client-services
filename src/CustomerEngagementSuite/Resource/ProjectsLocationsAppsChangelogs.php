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

use Google\Service\CustomerEngagementSuite\Changelog;
use Google\Service\CustomerEngagementSuite\ListChangelogsResponse;

/**
 * The "changelogs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cesService = new Google\Service\CustomerEngagementSuite(...);
 *   $changelogs = $cesService->projects_locations_apps_changelogs;
 *  </code>
 */
class ProjectsLocationsAppsChangelogs extends \Google\Service\Resource
{
  /**
   * Gets the specified changelog. (changelogs.get)
   *
   * @param string $name Required. The resource name of the changelog to retrieve.
   * @param array $optParams Optional parameters.
   * @return Changelog
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Changelog::class);
  }
  /**
   * Lists the changelogs of the specified app.
   * (changelogs.listProjectsLocationsAppsChangelogs)
   *
   * @param string $parent Required. The resource name of the app to list
   * changelogs from.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter to be applied when listing the
   * changelogs. See https://google.aip.dev/160 for more details. The filter
   * string can be used to filter by `action`, `resource_type`, `resource_name`,
   * `author`, and `create_time`. The `:` comparator can be used for case-
   * insensitive partial matching on string fields, while `=` performs an exact
   * case-sensitive match. Examples: * `action:update` (case-insensitive partial
   * match) * `action="Create"` (case-sensitive exact match) *
   * `resource_type:agent` * `resource_name:my-agent` * `author:me@example.com` *
   * `create_time > "2025-01-01T00:00:00Z"` * `create_time <=
   * "2025-01-01T00:00:00Z" AND resource_type:tool`
   * @opt_param string orderBy Optional. Field to sort by. Only "name" and
   * "create_time" is supported. See https://google.aip.dev/132#ordering for more
   * details.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous list AgentService.ListChangelogs call.
   * @return ListChangelogsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAppsChangelogs($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListChangelogsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAppsChangelogs::class, 'Google_Service_CustomerEngagementSuite_Resource_ProjectsLocationsAppsChangelogs');
