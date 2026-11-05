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

class CalendarWorkingHoursAvailableTimes extends \Google\Model
{
  /**
   * Day of the week. Required. Possible values are: - "monday" - "tuesday" -
   * "wednesday" - "thursday" - "friday" - "saturday" - "sunday"
   *
   * @var string
   */
  public $dayOfWeek;
  /**
   * Period end, in minutes from the start of the day, exclusive. Required.
   *
   * @var int
   */
  public $periodEnd;
  /**
   * Period start, in minutes from the start of the day, inclusive. Required.
   *
   * @var int
   */
  public $periodStart;

  /**
   * Day of the week. Required. Possible values are: - "monday" - "tuesday" -
   * "wednesday" - "thursday" - "friday" - "saturday" - "sunday"
   *
   * @param string $dayOfWeek
   */
  public function setDayOfWeek($dayOfWeek)
  {
    $this->dayOfWeek = $dayOfWeek;
  }
  /**
   * @return string
   */
  public function getDayOfWeek()
  {
    return $this->dayOfWeek;
  }
  /**
   * Period end, in minutes from the start of the day, exclusive. Required.
   *
   * @param int $periodEnd
   */
  public function setPeriodEnd($periodEnd)
  {
    $this->periodEnd = $periodEnd;
  }
  /**
   * @return int
   */
  public function getPeriodEnd()
  {
    return $this->periodEnd;
  }
  /**
   * Period start, in minutes from the start of the day, inclusive. Required.
   *
   * @param int $periodStart
   */
  public function setPeriodStart($periodStart)
  {
    $this->periodStart = $periodStart;
  }
  /**
   * @return int
   */
  public function getPeriodStart()
  {
    return $this->periodStart;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CalendarWorkingHoursAvailableTimes::class, 'Google_Service_Calendar_CalendarWorkingHoursAvailableTimes');
