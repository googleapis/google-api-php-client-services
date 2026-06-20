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

namespace Google\Service\DatabaseCenter\Resource;

use Google\Service\DatabaseCenter\AggregateFleetResponse;
use Google\Service\DatabaseCenter\AggregateIssueStatsRequest;
use Google\Service\DatabaseCenter\AggregateIssueStatsResponse;
use Google\Service\DatabaseCenter\QueryDatabaseResourceGroupsRequest;
use Google\Service\DatabaseCenter\QueryDatabaseResourceGroupsResponse;
use Google\Service\DatabaseCenter\QueryIssuesRequest;
use Google\Service\DatabaseCenter\QueryIssuesResponse;
use Google\Service\DatabaseCenter\QueryProductsResponse;

/**
 * The "v1beta" collection of methods.
 * Typical usage is:
 *  <code>
 *   $databasecenterService = new Google\Service\DatabaseCenter(...);
 *   $v1beta = $databasecenterService->v1beta;
 *  </code>
 */
class V1beta extends \Google\Service\Resource
{
  /**
   * AggregateFleet provides statistics about the fleet grouped by various fields.
   * (v1beta.aggregateFleet)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param int baselineDate.day Day of a month. Must be from 1 to 31 and
   * valid for the year and month, or 0 to specify a year by itself or a year and
   * month where the day isn't significant.
   * @opt_param int baselineDate.month Month of a year. Must be from 1 to 12, or 0
   * to specify a year without a month and day.
   * @opt_param int baselineDate.year Year of the date. Must be from 1 to 9999, or
   * 0 to specify a date without a year.
   * @opt_param string filter Optional. The expression to filter resources.
   * Supported fields are: `full_resource_name`, `resource_type`, `container`,
   * `product.type`, `product.engine`, `product.version`, `location`, `labels`,
   * `issues`, fields of availability_info, data_protection_info, 'resource_name',
   * etc. The expression is a list of zero or more restrictions combined via
   * logical operators `AND` and `OR`. When `AND` and `OR` are both used in the
   * expression, parentheses must be appropriately used to group the combinations.
   * Example: `location="us-east1"` Example: `container="projects/123" OR
   * container="projects/456"` Example: `(container="projects/123" OR
   * container="projects/456") AND location="us-east1"`
   * @opt_param string groupBy Optional. A field that statistics are grouped by.
   * Valid values are any combination of the following: * container * product.type
   * * product.engine * product.version * location * sub_resource_type *
   * management_type * tag.key * tag.value * tag.source * tag.inherited *
   * label.key * label.value * label.source * has_maintenance_schedule *
   * has_deny_maintenance_schedules Comma separated list.
   * @opt_param string orderBy Optional. Valid values to order by are: *
   * resource_groups_count * resources_count * and all fields supported by
   * `group_by` The default order is ascending. Add "DESC" after the field name to
   * indicate descending order. Add "ASC" after the field name to indicate
   * ascending order. It supports ordering using multiple fields. For example:
   * `order_by = "resource_groups_count"` sorts response in ascending order
   * `order_by = "resource_groups_count DESC"` sorts response in descending order
   * `order_by = "product.type, product.version DESC, location"` orders by type in
   * ascending order, version in descending order and location in ascending order
   * @opt_param int pageSize Optional. If unspecified, at most 50 items will be
   * returned. The maximum value is 1000; values above 1000 will be coerced to
   * 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `AggregateFleet` call. Provide this to retrieve the subsequent page. All
   * other parameters should match the parameters in the call that provided the
   * page token except for page_size which can be different.
   * @opt_param string parent Required. Parent can be a project, a folder, or an
   * organization. The search is limited to the resources within the `scope`. The
   * allowed values are: * projects/{PROJECT_ID} (e.g., "projects/foo-bar") *
   * projects/{PROJECT_NUMBER} (e.g., "projects/12345678") *
   * folders/{FOLDER_NUMBER} (e.g., "folders/1234567") *
   * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
   * @return AggregateFleetResponse
   * @throws \Google\Service\Exception
   */
  public function aggregateFleet($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('aggregateFleet', [$params], AggregateFleetResponse::class);
  }
  /**
   * AggregateIssueStats provides database resource issues statistics.
   * (v1beta.aggregateIssueStats)
   *
   * @param AggregateIssueStatsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return AggregateIssueStatsResponse
   * @throws \Google\Service\Exception
   */
  public function aggregateIssueStats(AggregateIssueStatsRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('aggregateIssueStats', [$params], AggregateIssueStatsResponse::class);
  }
  /**
   * QueryDatabaseResourceGroups returns paginated results of database groups.
   * (v1beta.queryDatabaseResourceGroups)
   *
   * @param QueryDatabaseResourceGroupsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return QueryDatabaseResourceGroupsResponse
   * @throws \Google\Service\Exception
   */
  public function queryDatabaseResourceGroups(QueryDatabaseResourceGroupsRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('queryDatabaseResourceGroups', [$params], QueryDatabaseResourceGroupsResponse::class);
  }
  /**
   * QueryIssues provides a list of issues and recommendations that a user has
   * access to and that are within the requested scope. (v1beta.queryIssues)
   *
   * @param QueryIssuesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return QueryIssuesResponse
   * @throws \Google\Service\Exception
   */
  public function queryIssues(QueryIssuesRequest $postBody, $optParams = [])
  {
    $params = ['postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('queryIssues', [$params], QueryIssuesResponse::class);
  }
  /**
   * QueryProducts provides a list of all possible products which can be used to
   * filter database resources. (v1beta.queryProducts)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. If unspecified, at most 50 products will be
   * returned. The maximum value is 1000; values above 1000 will be coerced to
   * 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListLocations` call. Provide this to retrieve the subsequent page. All other
   * parameters except page size should match the call that provided the page page
   * token.
   * @opt_param string parent Required. Parent can be a project, a folder, or an
   * organization. The allowed values are: *
   * projects/{PROJECT_ID}/locations/{LOCATION} (e.g.,"projects/foo-
   * bar/locations/us-central1") * projects/{PROJECT_NUMBER}/locations/{LOCATION}
   * (e.g.,"projects/12345678/locations/us-central1") *
   * folders/{FOLDER_NUMBER}/locations/{LOCATION}
   * (e.g.,"folders/1234567/locations/us-central1") *
   * organizations/{ORGANIZATION_NUMBER}/locations/{LOCATION}
   * (e.g.,"organizations/123456/locations/us-central1") * projects/{PROJECT_ID}
   * (e.g., "projects/foo-bar") * projects/{PROJECT_NUMBER} (e.g.,
   * "projects/12345678") * folders/{FOLDER_NUMBER} (e.g., "folders/1234567") *
   * organizations/{ORGANIZATION_NUMBER} (e.g., "organizations/123456")
   * @return QueryProductsResponse
   * @throws \Google\Service\Exception
   */
  public function queryProducts($optParams = [])
  {
    $params = [];
    $params = array_merge($params, $optParams);
    return $this->call('queryProducts', [$params], QueryProductsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(V1beta::class, 'Google_Service_DatabaseCenter_Resource_V1beta');
