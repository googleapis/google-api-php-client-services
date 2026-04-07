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

namespace Google\Service\GoogleHealthAPI;

class DailyRespiratoryRate extends \Google\Model
{
  /**
   * Required. The average number of breaths taken per minute.
   *
   * @var 
   */
  public $breathsPerMinute;
  protected $dateType = Date::class;
  protected $dateDataType = '';

  public function setBreathsPerMinute($breathsPerMinute)
  {
    $this->breathsPerMinute = $breathsPerMinute;
  }
  public function getBreathsPerMinute()
  {
    return $this->breathsPerMinute;
  }
  /**
   * Required. The date on which the respiratory rate was measured.
   *
   * @param Date $date
   */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /**
   * @return Date
   */
  public function getDate()
  {
    return $this->date;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DailyRespiratoryRate::class, 'Google_Service_GoogleHealthAPI_DailyRespiratoryRate');
