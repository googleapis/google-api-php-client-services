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

class GoogleAdsSearchads360V23CommonHotelAdvanceBookingWindowInfo extends \Google\Model
{
  /**
   * High end of the number of days prior to the stay.
   *
   * @var string
   */
  public $maxDays;
  /**
   * Low end of the number of days prior to the stay.
   *
   * @var string
   */
  public $minDays;

  /**
   * High end of the number of days prior to the stay.
   *
   * @param string $maxDays
   */
  public function setMaxDays($maxDays)
  {
    $this->maxDays = $maxDays;
  }
  /**
   * @return string
   */
  public function getMaxDays()
  {
    return $this->maxDays;
  }
  /**
   * Low end of the number of days prior to the stay.
   *
   * @param string $minDays
   */
  public function setMinDays($minDays)
  {
    $this->minDays = $minDays;
  }
  /**
   * @return string
   */
  public function getMinDays()
  {
    return $this->minDays;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonHotelAdvanceBookingWindowInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonHotelAdvanceBookingWindowInfo');
