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

namespace Google\Service\Calendar;

class CalendarWorkingHours extends \Google\Collection
{
  protected $collection_key = 'availableTimes';
  protected $availableTimesType = CalendarWorkingHoursAvailableTimes::class;
  protected $availableTimesDataType = 'array';
  /**
   * Whether the working hours are enabled for this calendar. Cannot be set to
   * true when availableTimes is empty.
   *
   * @var bool
   */
  public $workingHoursEnabled;

  /**
   * Working hours. Each availability period represents the user's working hours
   * block during one day.
   *
   * @param CalendarWorkingHoursAvailableTimes[] $availableTimes
   */
  public function setAvailableTimes($availableTimes)
  {
    $this->availableTimes = $availableTimes;
  }
  /**
   * @return CalendarWorkingHoursAvailableTimes[]
   */
  public function getAvailableTimes()
  {
    return $this->availableTimes;
  }
  /**
   * Whether the working hours are enabled for this calendar. Cannot be set to
   * true when availableTimes is empty.
   *
   * @param bool $workingHoursEnabled
   */
  public function setWorkingHoursEnabled($workingHoursEnabled)
  {
    $this->workingHoursEnabled = $workingHoursEnabled;
  }
  /**
   * @return bool
   */
  public function getWorkingHoursEnabled()
  {
    return $this->workingHoursEnabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CalendarWorkingHours::class, 'Google_Service_Calendar_CalendarWorkingHours');
