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

class GoogleAdsSearchads360V23ServicesListInsightsEligibleDatesResponse extends \Google\Collection
{
  protected $collection_key = 'dataMonths';
  /**
   * The months for which AudienceInsights data is currently available, each
   * represented as a string in the form "YYYY-MM".
   *
   * @var string[]
   */
  public $dataMonths;
  protected $lastThirtyDaysType = GoogleAdsSearchads360V23CommonDateRange::class;
  protected $lastThirtyDaysDataType = '';

  /**
   * The months for which AudienceInsights data is currently available, each
   * represented as a string in the form "YYYY-MM".
   *
   * @param string[] $dataMonths
   */
  public function setDataMonths($dataMonths)
  {
    $this->dataMonths = $dataMonths;
  }
  /**
   * @return string[]
   */
  public function getDataMonths()
  {
    return $this->dataMonths;
  }
  /**
   * The actual dates covered by the "last 30 days" date range that will be used
   * implicitly for AudienceInsightsService.GenerateAudienceCompositionInsights
   * requests that have no data_month set.
   *
   * @param GoogleAdsSearchads360V23CommonDateRange $lastThirtyDays
   */
  public function setLastThirtyDays(GoogleAdsSearchads360V23CommonDateRange $lastThirtyDays)
  {
    $this->lastThirtyDays = $lastThirtyDays;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDateRange
   */
  public function getLastThirtyDays()
  {
    return $this->lastThirtyDays;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesListInsightsEligibleDatesResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesListInsightsEligibleDatesResponse');
