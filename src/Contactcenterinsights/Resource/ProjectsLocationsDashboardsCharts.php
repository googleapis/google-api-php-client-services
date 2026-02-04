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

use Google\Service\Contactcenterinsights\GoogleCloudContactcenterinsightsV1Chart;
use Google\Service\Contactcenterinsights\GoogleCloudContactcenterinsightsV1ListChartsResponse;
use Google\Service\Contactcenterinsights\GoogleProtobufEmpty;

/**
 * The "charts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $contactcenterinsightsService = new Google\Service\Contactcenterinsights(...);
 *   $charts = $contactcenterinsightsService->projects_locations_dashboards_charts;
 *  </code>
 */
class ProjectsLocationsDashboardsCharts extends \Google\Service\Resource
{
  /**
   * Creates a Chart. (charts.create)
   *
   * @param string $parent Required. The parent resource of the chart.
   * @param GoogleCloudContactcenterinsightsV1Chart $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string chartId Optional. A unique ID for the new Chart. This ID
   * will become the final component of the Chart's resource name. If no ID is
   * specified, a server-generated ID will be used. This value should be 4-64
   * characters and must match the regular expression
   * `^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$`.
   * @return GoogleCloudContactcenterinsightsV1Chart
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudContactcenterinsightsV1Chart $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleCloudContactcenterinsightsV1Chart::class);
  }
  /**
   * Deletes a Chart. (charts.delete)
   *
   * @param string $name Required. The name of the chart to delete.
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
   * Gets a Chart. (charts.get)
   *
   * @param string $name Required. The name of the chart to get.
   * @param array $optParams Optional parameters.
   * @return GoogleCloudContactcenterinsightsV1Chart
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudContactcenterinsightsV1Chart::class);
  }
  /**
   * Lists Charts. (charts.listProjectsLocationsDashboardsCharts)
   *
   * @param string $parent Required. The parent resource of the charts.
   * @param array $optParams Optional parameters.
   * @return GoogleCloudContactcenterinsightsV1ListChartsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsDashboardsCharts($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudContactcenterinsightsV1ListChartsResponse::class);
  }
  /**
   * Updates a Chart. (charts.patch)
   *
   * @param string $name Identifier. Chart resource name. Format:
   * projects/{project}/locations/{location}/dashboards/{dashboard}/charts/{chart}
   * @param GoogleCloudContactcenterinsightsV1Chart $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. List of fields to be updated. All
   * possible fields can be updated by passing `*`, or a subset of the following
   * updateable fields can be provided: * `display_name`
   * @return GoogleCloudContactcenterinsightsV1Chart
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudContactcenterinsightsV1Chart $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudContactcenterinsightsV1Chart::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsDashboardsCharts::class, 'Google_Service_Contactcenterinsights_Resource_ProjectsLocationsDashboardsCharts');
