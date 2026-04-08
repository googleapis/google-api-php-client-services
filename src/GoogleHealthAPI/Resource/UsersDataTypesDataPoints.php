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

namespace Google\Service\GoogleHealthAPI\Resource;

use Google\Service\GoogleHealthAPI\BatchDeleteDataPointsRequest;
use Google\Service\GoogleHealthAPI\DailyRollUpDataPointsRequest;
use Google\Service\GoogleHealthAPI\DailyRollUpDataPointsResponse;
use Google\Service\GoogleHealthAPI\DataPoint;
use Google\Service\GoogleHealthAPI\ExportExerciseTcxResponse;
use Google\Service\GoogleHealthAPI\ListDataPointsResponse;
use Google\Service\GoogleHealthAPI\Operation;
use Google\Service\GoogleHealthAPI\ReconcileDataPointsResponse;
use Google\Service\GoogleHealthAPI\RollUpDataPointsRequest;
use Google\Service\GoogleHealthAPI\RollUpDataPointsResponse;

/**
 * The "dataPoints" collection of methods.
 * Typical usage is:
 *  <code>
 *   $healthService = new Google\Service\GoogleHealthAPI(...);
 *   $dataPoints = $healthService->users_dataTypes_dataPoints;
 *  </code>
 */
class UsersDataTypesDataPoints extends \Google\Service\Resource
{
  /**
   * Delete a batch of identifyable data points. (dataPoints.batchDelete)
   *
   * @param string $parent Optional. Parent (data type) for the Data Point
   * collection Format: `users/me/dataTypes/{data_type}`, e.g.: -
   * `users/me/dataTypes/steps` - `users/me/dataTypes/-` For a list of the
   * supported data types see the DataPoint data union field. Deleting data points
   * across multiple data type collections is supported following
   * https://aip.dev/159. If this is set, the parent of all of the data points
   * specified in `names` must match this field.
   * @param BatchDeleteDataPointsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function batchDelete($parent, BatchDeleteDataPointsRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('batchDelete', [$params], Operation::class);
  }
  /**
   * Creates a single identifiable data point. (dataPoints.create)
   *
   * @param string $parent Required. The parent resource name where the data point
   * will be created. Format: `users/{user}/dataTypes/{data_type}`
   * @param DataPoint $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, DataPoint $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Roll up data points over civil time intervals for supported data types.
   * (dataPoints.dailyRollUp)
   *
   * @param string $parent Required. Parent data type of the Data Point
   * collection. Format: `users/{user}/dataTypes/{data_type}`, e.g.: -
   * `users/me/dataTypes/steps` - `users/me/dataTypes/distance` For a list of the
   * supported data types see the DailyRollupDataPoint value union field.
   * @param DailyRollUpDataPointsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return DailyRollUpDataPointsResponse
   * @throws \Google\Service\Exception
   */
  public function dailyRollUp($parent, DailyRollUpDataPointsRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('dailyRollUp', [$params], DailyRollUpDataPointsResponse::class);
  }
  /**
   * Exports exercise data in TCX format. Note: While the Authorization section
   * below states that any one of the listed scopes is accepted, this specific
   * method requires the user to provide both one of the `activity_and_fitness`
   * scopes (`normal` or `readonly`) AND one of the `location` scopes (`normal` or
   * `readonly`) in their access token to succeed. (dataPoints.exportExerciseTcx)
   *
   * @param string $name Required. The resource name of the exercise data point to
   * export. Format: `users/{user}/dataTypes/exercise/dataPoints/{data_point}`
   * Example: `users/me/dataTypes/exercise/dataPoints/2026443605080188808` The
   * `{user}` is the alias `"me"` currently. Future versions may support user IDs.
   * The `{data_point}` ID maps to the exercise ID, which is a long integer.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool partialData Optional. Indicates whether to include the TCX
   * data points when the GPS data is not available. If not specified, defaults to
   * `false` and partial data will not be included.
   * @return ExportExerciseTcxResponse
   * @throws \Google\Service\Exception
   */
  public function exportExerciseTcx($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('exportExerciseTcx', [$params], ExportExerciseTcxResponse::class);
  }
  /**
   * Query user health and fitness data points.
   * (dataPoints.listUsersDataTypesDataPoints)
   *
   * @param string $parent Required. Parent data type of the Data Point
   * collection. Format: `users/me/dataTypes/{data_type}`, e.g.: -
   * `users/me/dataTypes/steps` - `users/me/dataTypes/weight` For a list of the
   * supported data types see the DataPoint data union field.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter expression following
   * https://google.aip.dev/160. A time range (either physical or civil) can be
   * specified. The supported filter fields are: - Interval start time: - Pattern:
   * `{interval_data_type}.interval.start_time` - Supported comparison operators:
   * `>=`, `<` - Timestamp literal expected in RFC-3339 format - Supported logical
   * operators: `AND` - Example: - `steps.interval.start_time >=
   * "2023-11-24T00:00:00Z" AND steps.interval.start_time <
   * "2023-11-25T00:00:00Z"` - `distance.interval.start_time >=
   * "2024-08-14T12:34:56Z"` - Interval civil start time: - Pattern:
   * `{interval_data_type}.interval.civil_start_time` - Supported comparison
   * operators: `>=`, `<` - Date with optional time literal expected in ISO 8601
   * `YYYY-MM-DD[THH:mm:ss]` format - Supported logical operators: `AND` -
   * Example: - `steps.interval.civil_start_time >= "2023-11-24" AND
   * steps.interval.civil_start_time < "2023-11-25"` -
   * `distance.interval.civil_start_time >= "2024-08-14T12:34:56"` - Sample
   * observation physical time: - Pattern:
   * `{sample_data_type}.sample_time.physical_time` - Supported comparison
   * operators: `>=`, `<` - Timestamp literal expected in RFC-3339 format -
   * Supported logical operators: `AND` - Example: -
   * `weight.sample_time.physical_time >= "2023-11-24T00:00:00Z" AND
   * weight.sample_time.physical_time < "2023-11-25T00:00:00Z"` -
   * `weight.sample_time.physical_time >= "2024-08-14T12:34:56Z"` - Sample
   * observation civil time: - Pattern:
   * `{sample_data_type}.sample_time.civil_time` - Supported comparison operators:
   * `>=`, `<` - Date with optional time literal expected in ISO 8601 `YYYY-MM-
   * DD[THH:mm:ss]` format - Supported logical operators: `AND` - Example: -
   * `weight.sample_time.civil_time >= "2023-11-24" AND
   * weight.sample_time.civil_time < "2023-11-25"` -
   * `weight.sample_time.civil_time >= "2024-08-14T12:34:56"` - Daily summary
   * date: - Pattern: `{daily_summary_data_type}.date` - Supported comparison
   * operators: `>=`, `<` - Date literal expected in ISO 8601 `YYYY-MM-DD` format
   * - Supported logical operators: `AND` - Example: -
   * `daily_resting_heart_rate.date >= "2024-08-14"` -
   * `daily_heart_rate_variability.date < "2024-08-15"` - Session civil start time
   * (**Excluding Sleep**): - Pattern:
   * `{session_data_type}.interval.civil_start_time` - Supported comparison
   * operators: `>=`, `<` - Date with optional time literal expected in ISO 8601
   * `YYYY-MM-DD[THH:mm:ss]` format - Supported logical operators: `AND` -
   * Example: - `exercise.interval.civil_start_time >= "2023-11-24" AND
   * exercise.interval.civil_start_time < "2023-11-25"` -
   * `exercise.interval.civil_start_time >= "2024-08-14T12:34:56"` - Session end
   * time (**Sleep specific**): - Pattern: `sleep.interval.end_time` - Supported
   * comparison operators: `>=`, `<` - Timestamp literal expected in RFC-3339
   * format - Supported logical operators: `AND`, `OR` - Example: -
   * `sleep.interval.end_time >= "2023-11-24T00:00:00Z" AND
   * sleep.interval.end_time < "2023-11-25T00:00:00Z"` - Session civil end time
   * (**Sleep specific**): - Pattern: `sleep.interval.civil_end_time` - Supported
   * comparison operators: `>=`, `<` - Date with optional time literal expected in
   * ISO 8601 `YYYY-MM-DD[THH:mm:ss]` format - Supported logical operators: `AND`,
   * `OR` - Example: - `sleep.interval.civil_end_time >= "2023-11-24" AND
   * sleep.interval.civil_end_time < "2023-11-25"` Data points in the response
   * will be ordered by the interval start time in descending order.
   * @opt_param int pageSize Optional. The maximum number of data points to
   * return. If unspecified, at most 1440 data points will be returned. The
   * maximum page size is 10000; values above that will be truncated accordingly.
   * For `exercise` and `sleep` the default page size is 25. The maximum page size
   * for `exercise` and `sleep` is 25.
   * @opt_param string pageToken Optional. The `next_page_token` from a previous
   * request, if any.
   * @return ListDataPointsResponse
   * @throws \Google\Service\Exception
   */
  public function listUsersDataTypesDataPoints($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListDataPointsResponse::class);
  }
  /**
   * Updates a single identifiable data point. If a data point with the specified
   * `name` is not found, the request will fail. (dataPoints.patch)
   *
   * @param string $name Identifier. Data point name, only supported for the
   * subset of identifiable data types. For the majority of the data types,
   * individual data points do not need to be identified and this field would be
   * empty. Format: `users/{user}/dataTypes/{data_type}/dataPoints/{data_point}`
   * Example: `users/abcd1234/dataTypes/sleep/dataPoints/a1b2c3d4-e5f6-7890-1234-
   * 567890abcdef` The `{user}` ID is a system-generated identifier, as described
   * in Identity.health_user_id. The `{data_type}` ID corresponds to the kebab-
   * case version of the field names in the DataPoint data union field, e.g.
   * `total-calories` for the `total_calories` field. The `{data_point}` ID can be
   * client-provided or system-generated. If client-provided, it must be a string
   * of 4-63 characters, containing only lowercase letters, numbers, and hyphens.
   * @param DataPoint $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, DataPoint $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
  /**
   * Reconcile data points from multiple data sources into a single data stream.
   * (dataPoints.reconcile)
   *
   * @param string $parent Required. Parent data type of the Data Point
   * collection. Format: `users/me/dataTypes/{data_type}`, e.g.: -
   * `users/me/dataTypes/steps` - `users/me/dataTypes/heart-rate` For a list of
   * the supported data types see the DataPoint data union field.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string dataSourceFamily Optional. The data source family name to
   * reconcile. If empty, data points from all data sources will be reconciled.
   * Format: `users/me/dataSourceFamilies/{data_source_family}` The supported
   * values are: - `users/me/dataSourceFamilies/all-sources` - default value -
   * `users/me/dataSourceFamilies/google-wearables` - tracker devices -
   * `users/me/dataSourceFamilies/google-sources` - Google first party sources
   * @opt_param string filter Optional. Filter expression based on
   * https://aip.dev/160. A time range, either physical or civil, can be
   * specified. See the ListDataPointsRequest.filter for the supported fields and
   * syntax.
   * @opt_param int pageSize Optional. The maximum number of data points to
   * return. If unspecified, at most 1440 data points will be returned. The
   * maximum page size is 10000; values above that will be truncated accordingly.
   * For `exercise` and `sleep` the default page size is 25. The maximum page size
   * for `exercise` and `sleep` is 25.
   * @opt_param string pageToken Optional. The `next_page_token` from a previous
   * request, if any.
   * @return ReconcileDataPointsResponse
   * @throws \Google\Service\Exception
   */
  public function reconcile($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('reconcile', [$params], ReconcileDataPointsResponse::class);
  }
  /**
   * Roll up data points over physical time intervals for supported data types.
   * (dataPoints.rollUp)
   *
   * @param string $parent Required. Parent data type of the Data Point
   * collection. Format: `users/{user}/dataTypes/{data_type}`, e.g.: -
   * `users/me/dataTypes/steps` - `users/me/dataTypes/distance` For a list of the
   * supported data types see the RollupDataPoint value union field.
   * @param RollUpDataPointsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return RollUpDataPointsResponse
   * @throws \Google\Service\Exception
   */
  public function rollUp($parent, RollUpDataPointsRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('rollUp', [$params], RollUpDataPointsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UsersDataTypesDataPoints::class, 'Google_Service_GoogleHealthAPI_Resource_UsersDataTypesDataPoints');
