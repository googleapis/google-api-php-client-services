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

namespace Google\Service\GoogleHealthAPI;

class DailyRollUpDataPointsRequest extends \Google\Model
{
  /**
   * Optional. The data source family name to roll up. If empty, data points
   * from all available data sources will be rolled up. Format:
   * `users/me/dataSourceFamilies/{data_source_family}` The supported values
   * are: - `users/me/dataSourceFamilies/all-sources` - default value -
   * `users/me/dataSourceFamilies/google-wearables` - tracker devices -
   * `users/me/dataSourceFamilies/google-sources` - Google first party sources
   *
   * @var string
   */
  public $dataSourceFamily;
  /**
   * Optional. The maximum number of data points to return. If unspecified, at
   * most 1440 data points will be returned. The maximum page size is 10000;
   * values above that will be truncated accordingly.
   *
   * @var int
   */
  public $pageSize;
  /**
   * Optional. The `next_page_token` from a previous request, if any. All other
   * request fields need to be the same as in the initial request when the page
   * token is specified.
   *
   * @var string
   */
  public $pageToken;
  protected $rangeType = CivilTimeInterval::class;
  protected $rangeDataType = '';
  /**
   * Optional. Aggregation window size, in number of days. Defaults to 1 if not
   * specified.
   *
   * @var int
   */
  public $windowSizeDays;

  /**
   * Optional. The data source family name to roll up. If empty, data points
   * from all available data sources will be rolled up. Format:
   * `users/me/dataSourceFamilies/{data_source_family}` The supported values
   * are: - `users/me/dataSourceFamilies/all-sources` - default value -
   * `users/me/dataSourceFamilies/google-wearables` - tracker devices -
   * `users/me/dataSourceFamilies/google-sources` - Google first party sources
   *
   * @param string $dataSourceFamily
   */
  public function setDataSourceFamily($dataSourceFamily)
  {
    $this->dataSourceFamily = $dataSourceFamily;
  }
  /**
   * @return string
   */
  public function getDataSourceFamily()
  {
    return $this->dataSourceFamily;
  }
  /**
   * Optional. The maximum number of data points to return. If unspecified, at
   * most 1440 data points will be returned. The maximum page size is 10000;
   * values above that will be truncated accordingly.
   *
   * @param int $pageSize
   */
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  /**
   * @return int
   */
  public function getPageSize()
  {
    return $this->pageSize;
  }
  /**
   * Optional. The `next_page_token` from a previous request, if any. All other
   * request fields need to be the same as in the initial request when the page
   * token is specified.
   *
   * @param string $pageToken
   */
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  /**
   * @return string
   */
  public function getPageToken()
  {
    return $this->pageToken;
  }
  /**
   * Required. Closed-open range of data points that will be rolled up. The
   * start time must be aligned with the aggregation window. The maximum range
   * for `calories-in-heart-rate-zone`, `heart-rate`, `active-minutes` and
   * `total-calories` is 14 days. The maximum range for all other data types is
   * 90 days.
   *
   * @param CivilTimeInterval $range
   */
  public function setRange(CivilTimeInterval $range)
  {
    $this->range = $range;
  }
  /**
   * @return CivilTimeInterval
   */
  public function getRange()
  {
    return $this->range;
  }
  /**
   * Optional. Aggregation window size, in number of days. Defaults to 1 if not
   * specified.
   *
   * @param int $windowSizeDays
   */
  public function setWindowSizeDays($windowSizeDays)
  {
    $this->windowSizeDays = $windowSizeDays;
  }
  /**
   * @return int
   */
  public function getWindowSizeDays()
  {
    return $this->windowSizeDays;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DailyRollUpDataPointsRequest::class, 'Google_Service_GoogleHealthAPI_DailyRollUpDataPointsRequest');
