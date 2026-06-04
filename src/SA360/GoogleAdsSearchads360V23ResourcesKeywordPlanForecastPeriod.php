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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesKeywordPlanForecastPeriod extends \Google\Model
{
  /**
   * Not specified.
   */
  public const DATE_INTERVAL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const DATE_INTERVAL_UNKNOWN = 'UNKNOWN';
  /**
   * The next week date range for keyword plan. The next week is based on the
   * default locale of the user's account and is mostly SUN-SAT or MON-SUN. This
   * can be different from next-7 days.
   */
  public const DATE_INTERVAL_NEXT_WEEK = 'NEXT_WEEK';
  /**
   * The next month date range for keyword plan.
   */
  public const DATE_INTERVAL_NEXT_MONTH = 'NEXT_MONTH';
  /**
   * The next quarter date range for keyword plan.
   */
  public const DATE_INTERVAL_NEXT_QUARTER = 'NEXT_QUARTER';
  /**
   * A future date range relative to the current date used for forecasting.
   *
   * @var string
   */
  public $dateInterval;
  protected $dateRangeType = GoogleAdsSearchads360V23CommonDateRange::class;
  protected $dateRangeDataType = '';

  /**
   * A future date range relative to the current date used for forecasting.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NEXT_WEEK, NEXT_MONTH, NEXT_QUARTER
   *
   * @param self::DATE_INTERVAL_* $dateInterval
   */
  public function setDateInterval($dateInterval)
  {
    $this->dateInterval = $dateInterval;
  }
  /**
   * @return self::DATE_INTERVAL_*
   */
  public function getDateInterval()
  {
    return $this->dateInterval;
  }
  /**
   * The custom date range used for forecasting. It cannot be greater than a
   * year. The start and end dates must be in the future. Otherwise, an error
   * will be returned when the forecasting action is performed. The start and
   * end dates are inclusive.
   *
   * @param GoogleAdsSearchads360V23CommonDateRange $dateRange
   */
  public function setDateRange(GoogleAdsSearchads360V23CommonDateRange $dateRange)
  {
    $this->dateRange = $dateRange;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDateRange
   */
  public function getDateRange()
  {
    return $this->dateRange;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesKeywordPlanForecastPeriod::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesKeywordPlanForecastPeriod');
