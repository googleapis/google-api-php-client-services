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

namespace Google\Service\Dfareporting;

class FeedSchedule extends \Google\Model
{
  /**
   * @var string
   */
  public $repeatValue;
  /**
   * @var bool
   */
  public $scheduleEnabled;
  /**
   * @var string
   */
  public $startHour;
  /**
   * @var string
   */
  public $startMinute;
  /**
   * @var string
   */
  public $timeZone;

  /**
   * @param string
   */
  public function setRepeatValue($repeatValue)
  {
    $this->repeatValue = $repeatValue;
  }
  /**
   * @return string
   */
  public function getRepeatValue()
  {
    return $this->repeatValue;
  }
  /**
   * @param bool
   */
  public function setScheduleEnabled($scheduleEnabled)
  {
    $this->scheduleEnabled = $scheduleEnabled;
  }
  /**
   * @return bool
   */
  public function getScheduleEnabled()
  {
    return $this->scheduleEnabled;
  }
  /**
   * @param string
   */
  public function setStartHour($startHour)
  {
    $this->startHour = $startHour;
  }
  /**
   * @return string
   */
  public function getStartHour()
  {
    return $this->startHour;
  }
  /**
   * @param string
   */
  public function setStartMinute($startMinute)
  {
    $this->startMinute = $startMinute;
  }
  /**
   * @return string
   */
  public function getStartMinute()
  {
    return $this->startMinute;
  }
  /**
   * @param string
   */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /**
   * @return string
   */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FeedSchedule::class, 'Google_Service_Dfareporting_FeedSchedule');
