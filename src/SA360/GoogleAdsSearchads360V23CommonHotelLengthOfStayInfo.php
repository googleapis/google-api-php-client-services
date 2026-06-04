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

class GoogleAdsSearchads360V23CommonHotelLengthOfStayInfo extends \Google\Model
{
  /**
   * High end of the number of nights in the stay.
   *
   * @var string
   */
  public $maxNights;
  /**
   * Low end of the number of nights in the stay.
   *
   * @var string
   */
  public $minNights;

  /**
   * High end of the number of nights in the stay.
   *
   * @param string $maxNights
   */
  public function setMaxNights($maxNights)
  {
    $this->maxNights = $maxNights;
  }
  /**
   * @return string
   */
  public function getMaxNights()
  {
    return $this->maxNights;
  }
  /**
   * Low end of the number of nights in the stay.
   *
   * @param string $minNights
   */
  public function setMinNights($minNights)
  {
    $this->minNights = $minNights;
  }
  /**
   * @return string
   */
  public function getMinNights()
  {
    return $this->minNights;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonHotelLengthOfStayInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonHotelLengthOfStayInfo');
