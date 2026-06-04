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

class GoogleAdsSearchads360V23CommonHistoricalMetricsOptions extends \Google\Model
{
  /**
   * Indicates whether to include average cost per click value. Average CPC is
   * provided only for legacy support.
   *
   * @var bool
   */
  public $includeAverageCpc;
  protected $yearMonthRangeType = GoogleAdsSearchads360V23CommonYearMonthRange::class;
  protected $yearMonthRangeDataType = '';

  /**
   * Indicates whether to include average cost per click value. Average CPC is
   * provided only for legacy support.
   *
   * @param bool $includeAverageCpc
   */
  public function setIncludeAverageCpc($includeAverageCpc)
  {
    $this->includeAverageCpc = $includeAverageCpc;
  }
  /**
   * @return bool
   */
  public function getIncludeAverageCpc()
  {
    return $this->includeAverageCpc;
  }
  /**
   * The year month range for historical metrics. If not specified, metrics for
   * the past 12 months are returned. Search metrics are available for the past
   * 4 years. If the search volume is not available for the entire
   * year_month_range provided, the subset of the year month range for which
   * search volume is available are returned.
   *
   * @param GoogleAdsSearchads360V23CommonYearMonthRange $yearMonthRange
   */
  public function setYearMonthRange(GoogleAdsSearchads360V23CommonYearMonthRange $yearMonthRange)
  {
    $this->yearMonthRange = $yearMonthRange;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonYearMonthRange
   */
  public function getYearMonthRange()
  {
    return $this->yearMonthRange;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonHistoricalMetricsOptions::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonHistoricalMetricsOptions');
