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

namespace Google\Service\CloudAlloyDBAdmin;

class StorageDatabasecenterPartnerapiV1mainResourceMaintenanceSchedule extends \Google\Model
{
  /**
   * The day of the week is unspecified.
   */
  public const DAY_DAY_OF_WEEK_UNSPECIFIED = 'DAY_OF_WEEK_UNSPECIFIED';
  /**
   * Monday
   */
  public const DAY_MONDAY = 'MONDAY';
  /**
   * Tuesday
   */
  public const DAY_TUESDAY = 'TUESDAY';
  /**
   * Wednesday
   */
  public const DAY_WEDNESDAY = 'WEDNESDAY';
  /**
   * Thursday
   */
  public const DAY_THURSDAY = 'THURSDAY';
  /**
   * Friday
   */
  public const DAY_FRIDAY = 'FRIDAY';
  /**
   * Saturday
   */
  public const DAY_SATURDAY = 'SATURDAY';
  /**
   * Sunday
   */
  public const DAY_SUNDAY = 'SUNDAY';
  /**
   * Disable validation warnings
   */
  public const PHASE_PHASE_UNSPECIFIED = 'PHASE_UNSPECIFIED';
  /**
   * Disable validation warnings
   */
  public const PHASE_ANY = 'ANY';
  /**
   * Disable validation warnings
   */
  public const PHASE_WEEK1 = 'WEEK1';
  /**
   * Disable validation warnings
   */
  public const PHASE_WEEK2 = 'WEEK2';
  /**
   * Disable validation warnings
   */
  public const PHASE_WEEK5 = 'WEEK5';
  /**
   * Optional. Disable validation warnings
   *
   * @var string
   */
  public $day;
  /**
   * Optional. Disable validation warnings
   *
   * @var string
   */
  public $phase;
  protected $timeType = GoogleTypeTimeOfDay::class;
  protected $timeDataType = '';

  /**
   * Optional. Disable validation warnings
   *
   * Accepted values: DAY_OF_WEEK_UNSPECIFIED, MONDAY, TUESDAY, WEDNESDAY,
   * THURSDAY, FRIDAY, SATURDAY, SUNDAY
   *
   * @param self::DAY_* $day
   */
  public function setDay($day)
  {
    $this->day = $day;
  }
  /**
   * @return self::DAY_*
   */
  public function getDay()
  {
    return $this->day;
  }
  /**
   * Optional. Disable validation warnings
   *
   * Accepted values: PHASE_UNSPECIFIED, ANY, WEEK1, WEEK2, WEEK5
   *
   * @param self::PHASE_* $phase
   */
  public function setPhase($phase)
  {
    $this->phase = $phase;
  }
  /**
   * @return self::PHASE_*
   */
  public function getPhase()
  {
    return $this->phase;
  }
  /**
   * Optional. Disable validation warnings
   *
   * @param GoogleTypeTimeOfDay $time
   */
  public function setTime(GoogleTypeTimeOfDay $time)
  {
    $this->time = $time;
  }
  /**
   * @return GoogleTypeTimeOfDay
   */
  public function getTime()
  {
    return $this->time;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StorageDatabasecenterPartnerapiV1mainResourceMaintenanceSchedule::class, 'Google_Service_CloudAlloyDBAdmin_StorageDatabasecenterPartnerapiV1mainResourceMaintenanceSchedule');
