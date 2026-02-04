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

namespace Google\Service\Contactcenterinsights\Resource;

use Google\Service\Contactcenterinsights\GoogleCloudContactcenterinsightsV1Dashboard;
use Google\Service\Contactcenterinsights\GoogleCloudContactcenterinsightsV1ListDashboardsResponse;
use Google\Service\Contactcenterinsights\GoogleProtobufEmpty;

/**
 * The "dashboards" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contactcenterinsightsService = new Google\Service\Contactcenterinsights(...);
 *   $dashboards = $contactcenterinsightsService->projects_locations_dashboards;
 *  </code>
 */
class ProjectsLocationsDashboards extends \Google\Service\Resource
{
  /**
   * Creates a Dashboard. (dashboards.create)
   *
   * @param string $parent Required. The parent resource of the dashboard.
   * @param GoogleCloudContactcenterinsightsV1Dashboard $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string dashboardId Optional. A unique ID for the new Dashboard.
   * This ID will become the final component of the Dashboard's resource name. If
   * no ID is specified, a server-generated ID will be used. This value should be
   * 4-64 characters and must match the regular expression
   * `^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$`.
   * @return GoogleCloudContactcenterinsightsV1Dashboard
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudContactcenterinsightsV1Dashboard $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleCloudContactcenterinsightsV1Dashboard::class);
  }
  /**
   * Deletes a Dashboard. (dashboards.delete)
   *
   * @param string $name Required. The name of the dashboard to delete.
   * @param array $optParams Optional parameters.
   * @return GoogleProtobufEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleProtobufEmpty::class);
  }
  /**
   * Gets a Dashboard. (dashboards.get)
   *
   * @param string $name Required. The name of the dashboard to get.
   * @param array $optParams Optional parameters.
   * @return GoogleCloudContactcenterinsightsV1Dashboard
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudContactcenterinsightsV1Dashboard::class);
  }
  /**
   * Lists Dashboards. (dashboards.listProjectsLocationsDashboards)
   *
   * @param string $parent Required. The parent resource of the dashboards.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. The filter expression to filter dashboards
   * listed in the response.
   * @opt_param string orderBy Optional. The order by expression to order
   * dashboards listed in the response.
   * @opt_param int pageSize Optional. The maximum number of dashboards to return.
   * The service may return fewer than this value. The default and maximum value
   * is 100.
   * @opt_param string pageToken Optional. The value returned by the last
   * `ListDashboardsResponse`. This value indicates that this is a continuation of
   * a prior `ListDashboards` call and that the system should return the next page
   * of data.
   * @return GoogleCloudContactcenterinsightsV1ListDashboardsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsDashboards($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudContactcenterinsightsV1ListDashboardsResponse::class);
  }
  /**
   * Updates a Dashboard. (dashboards.patch)
   *
   * @param string $name Identifier. Dashboard resource name. Format:
   * projects/{project}/locations/{location}/dashboards/{dashboard}
   * @param GoogleCloudContactcenterinsightsV1Dashboard $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. List of fields to be updated. All
   * possible fields can be updated by passing `*`, or a subset of the following
   * updateable fields can be provided: * `display_name` * `root_container`
   * @return GoogleCloudContactcenterinsightsV1Dashboard
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudContactcenterinsightsV1Dashboard $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudContactcenterinsightsV1Dashboard::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsDashboards::class, 'Google_Service_Contactcenterinsights_Resource_ProjectsLocationsDashboards');
