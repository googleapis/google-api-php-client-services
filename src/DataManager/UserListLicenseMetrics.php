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

namespace Google\Service\DataManager;

class UserListLicenseMetrics extends \Google\Model
{
  /**
   * Output only. The number of clicks for the user list license.
   *
   * @var string
   */
  public $clickCount;
  /**
   * Output only. The end date (inclusive) of the metrics in the format
   * YYYYMMDD. For example, 20260102 represents January 2, 2026. If `start_date`
   * is used in the filter, `end_date` is also required. If neither `start_date`
   * nor `end_date` are included in the filter, the UserListLicenseMetrics
   * fields will not be populated in the response.
   *
   * @var string
   */
  public $endDate;
  /**
   * Output only. The number of impressions for the user list license.
   *
   * @var string
   */
  public $impressionCount;
  /**
   * Output only. The revenue for the user list license in USD micros.
   *
   * @var string
   */
  public $revenueUsdMicros;
  /**
   * Output only. The start date (inclusive) of the metrics in the format
   * YYYYMMDD. For example, 20260102 represents January 2, 2026. If `end_date`
   * is used in the filter, `start_date` is also required. If neither
   * `start_date` nor `end_date` are included in the filter, the
   * UserListLicenseMetrics fields will not be populated in the response.
   *
   * @var string
   */
  public $startDate;

  /**
   * Output only. The number of clicks for the user list license.
   *
   * @param string $clickCount
   */
  public function setClickCount($clickCount)
  {
    $this->clickCount = $clickCount;
  }
  /**
   * @return string
   */
  public function getClickCount()
  {
    return $this->clickCount;
  }
  /**
   * Output only. The end date (inclusive) of the metrics in the format
   * YYYYMMDD. For example, 20260102 represents January 2, 2026. If `start_date`
   * is used in the filter, `end_date` is also required. If neither `start_date`
   * nor `end_date` are included in the filter, the UserListLicenseMetrics
   * fields will not be populated in the response.
   *
   * @param string $endDate
   */
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  /**
   * @return string
   */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /**
   * Output only. The number of impressions for the user list license.
   *
   * @param string $impressionCount
   */
  public function setImpressionCount($impressionCount)
  {
    $this->impressionCount = $impressionCount;
  }
  /**
   * @return string
   */
  public function getImpressionCount()
  {
    return $this->impressionCount;
  }
  /**
   * Output only. The revenue for the user list license in USD micros.
   *
   * @param string $revenueUsdMicros
   */
  public function setRevenueUsdMicros($revenueUsdMicros)
  {
    $this->revenueUsdMicros = $revenueUsdMicros;
  }
  /**
   * @return string
   */
  public function getRevenueUsdMicros()
  {
    return $this->revenueUsdMicros;
  }
  /**
   * Output only. The start date (inclusive) of the metrics in the format
   * YYYYMMDD. For example, 20260102 represents January 2, 2026. If `end_date`
   * is used in the filter, `start_date` is also required. If neither
   * `start_date` nor `end_date` are included in the filter, the
   * UserListLicenseMetrics fields will not be populated in the response.
   *
   * @param string $startDate
   */
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /**
   * @return string
   */
  public function getStartDate()
  {
    return $this->startDate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserListLicenseMetrics::class, 'Google_Service_DataManager_UserListLicenseMetrics');
