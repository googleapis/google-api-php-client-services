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

class GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponseMetrics extends \Google\Model
{
  /**
   * The estimated max daily clicks.
   *
   * @var string
   */
  public $maxDailyClicks;
  /**
   * The estimated min daily clicks.
   *
   * @var string
   */
  public $minDailyClicks;

  /**
   * The estimated max daily clicks.
   *
   * @param string $maxDailyClicks
   */
  public function setMaxDailyClicks($maxDailyClicks)
  {
    $this->maxDailyClicks = $maxDailyClicks;
  }
  /**
   * @return string
   */
  public function getMaxDailyClicks()
  {
    return $this->maxDailyClicks;
  }
  /**
   * The estimated min daily clicks.
   *
   * @param string $minDailyClicks
   */
  public function setMinDailyClicks($minDailyClicks)
  {
    $this->minDailyClicks = $minDailyClicks;
  }
  /**
   * @return string
   */
  public function getMinDailyClicks()
  {
    return $this->minDailyClicks;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponseMetrics::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponseMetrics');
