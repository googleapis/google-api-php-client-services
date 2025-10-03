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
   * @var string
   */
  public $day;
  /**
   * @var string
   */
  public $phase;
  protected $timeType = GoogleTypeTimeOfDay::class;
  protected $timeDataType = '';

  /**
   * @param string
   */
  public function setDay($day)
  {
    $this->day = $day;
  }
  /**
   * @return string
   */
  public function getDay()
  {
    return $this->day;
  }
  /**
   * @param string
   */
  public function setPhase($phase)
  {
    $this->phase = $phase;
  }
  /**
   * @return string
   */
  public function getPhase()
  {
    return $this->phase;
  }
  /**
   * @param GoogleTypeTimeOfDay
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
