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

class RollUpDataPointsRequest extends \Google\Model
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
   * Optional. The next_page_token from a previous request, if any. All other
   * request fields need to be the same as in the initial request when the page
   * token is specified.
   *
   * @var string
   */
  public $pageToken;
  protected $rangeType = Interval::class;
  protected $rangeDataType = '';
  /**
   * Required. The size of the time window to group data points into before
   * applying the aggregation functions.
   *
   * @var string
   */
  public $windowSize;

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
   * Optional. The next_page_token from a previous request, if any. All other
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
   * maximum range for `calories-in-heart-rate-zone`, `heart-rate`, `active-
   * minutes` and `total-calories` is 14 days. The maximum range for all other
   * data types is 90 days.
   *
   * @param Interval $range
   */
  public function setRange(Interval $range)
  {
    $this->range = $range;
  }
  /**
   * @return Interval
   */
  public function getRange()
  {
    return $this->range;
  }
  /**
   * Required. The size of the time window to group data points into before
   * applying the aggregation functions.
   *
   * @param string $windowSize
   */
  public function setWindowSize($windowSize)
  {
    $this->windowSize = $windowSize;
  }
  /**
   * @return string
   */
  public function getWindowSize()
  {
    return $this->windowSize;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RollUpDataPointsRequest::class, 'Google_Service_GoogleHealthAPI_RollUpDataPointsRequest');
