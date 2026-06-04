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

class GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryTravelStartDay extends \Google\Model
{
  /**
   * The travel can start on Friday.
   *
   * @var bool
   */
  public $friday;
  /**
   * The travel can start on Monday.
   *
   * @var bool
   */
  public $monday;
  /**
   * The travel can start on Saturday.
   *
   * @var bool
   */
  public $saturday;
  /**
   * The travel can start on Sunday.
   *
   * @var bool
   */
  public $sunday;
  /**
   * The travel can start on Thursday.
   *
   * @var bool
   */
  public $thursday;
  /**
   * The travel can start on Tuesday.
   *
   * @var bool
   */
  public $tuesday;
  /**
   * The travel can start on Wednesday.
   *
   * @var bool
   */
  public $wednesday;

  /**
   * The travel can start on Friday.
   *
   * @param bool $friday
   */
  public function setFriday($friday)
  {
    $this->friday = $friday;
  }
  /**
   * @return bool
   */
  public function getFriday()
  {
    return $this->friday;
  }
  /**
   * The travel can start on Monday.
   *
   * @param bool $monday
   */
  public function setMonday($monday)
  {
    $this->monday = $monday;
  }
  /**
   * @return bool
   */
  public function getMonday()
  {
    return $this->monday;
  }
  /**
   * The travel can start on Saturday.
   *
   * @param bool $saturday
   */
  public function setSaturday($saturday)
  {
    $this->saturday = $saturday;
  }
  /**
   * @return bool
   */
  public function getSaturday()
  {
    return $this->saturday;
  }
  /**
   * The travel can start on Sunday.
   *
   * @param bool $sunday
   */
  public function setSunday($sunday)
  {
    $this->sunday = $sunday;
  }
  /**
   * @return bool
   */
  public function getSunday()
  {
    return $this->sunday;
  }
  /**
   * The travel can start on Thursday.
   *
   * @param bool $thursday
   */
  public function setThursday($thursday)
  {
    $this->thursday = $thursday;
  }
  /**
   * @return bool
   */
  public function getThursday()
  {
    return $this->thursday;
  }
  /**
   * The travel can start on Tuesday.
   *
   * @param bool $tuesday
   */
  public function setTuesday($tuesday)
  {
    $this->tuesday = $tuesday;
  }
  /**
   * @return bool
   */
  public function getTuesday()
  {
    return $this->tuesday;
  }
  /**
   * The travel can start on Wednesday.
   *
   * @param bool $wednesday
   */
  public function setWednesday($wednesday)
  {
    $this->wednesday = $wednesday;
  }
  /**
   * @return bool
   */
  public function getWednesday()
  {
    return $this->wednesday;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryTravelStartDay::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleItineraryTravelStartDay');
