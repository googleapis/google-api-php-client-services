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

class GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryAdvanceBookingWindow extends \Google\Model
{
  /**
   * Maximum number of days between the date of the booking the start date.
   *
   * @var int
   */
  public $maxDays;
  /**
   * Minimum number of days between the date of the booking the start date.
   *
   * @var int
   */
  public $minDays;

  /**
   * Maximum number of days between the date of the booking the start date.
   *
   * @param int $maxDays
   */
  public function setMaxDays($maxDays)
  {
    $this->maxDays = $maxDays;
  }
  /**
   * @return int
   */
  public function getMaxDays()
  {
    return $this->maxDays;
  }
  /**
   * Minimum number of days between the date of the booking the start date.
   *
   * @param int $minDays
   */
  public function setMinDays($minDays)
  {
    $this->minDays = $minDays;
  }
  /**
   * @return int
   */
  public function getMinDays()
  {
    return $this->minDays;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryAdvanceBookingWindow::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryAdvanceBookingWindow');
