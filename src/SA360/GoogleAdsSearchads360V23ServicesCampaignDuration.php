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

class GoogleAdsSearchads360V23ServicesCampaignDuration extends \Google\Model
{
  protected $dateRangeType = GoogleAdsSearchads360V23CommonDateRange::class;
  protected $dateRangeDataType = '';
  /**
   * The duration value in days. This field cannot be combined with the
   * date_range field.
   *
   * @var int
   */
  public $durationInDays;

  /**
   * Date range of the campaign. Dates are in the yyyy-mm-dd format and
   * inclusive. The end date must be < 1 year in the future and the date range
   * must be <= 92 days long. This field cannot be combined with the
   * duration_in_days field.
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
  /**
   * The duration value in days. This field cannot be combined with the
   * date_range field.
   *
   * @param int $durationInDays
   */
  public function setDurationInDays($durationInDays)
  {
    $this->durationInDays = $durationInDays;
  }
  /**
   * @return int
   */
  public function getDurationInDays()
  {
    return $this->durationInDays;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesCampaignDuration::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesCampaignDuration');
