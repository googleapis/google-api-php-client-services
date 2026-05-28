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

class HeartBeat extends \Google\Model
{
  /**
   * Required. The beats-per-minute value extrapolated from the time before the
   * following heart beat. This is calculated as 60000 / rr, where rr is the gap
   * between heart beats in milliseconds (IBI - Interbeat Interval).
   *
   * @var int
   */
  public $beatsPerMinute;
  protected $civilTimeType = CivilDateTime::class;
  protected $civilTimeDataType = '';
  /**
   * Required. The time of the heart beat measurement.
   *
   * @var string
   */
  public $physicalTime;
  /**
   * Required. The UTC offset of the user's timezone when the heart beat
   * measurement occurred.
   *
   * @var string
   */
  public $utcOffset;

  /**
   * Required. The beats-per-minute value extrapolated from the time before the
   * following heart beat. This is calculated as 60000 / rr, where rr is the gap
   * between heart beats in milliseconds (IBI - Interbeat Interval).
   *
   * @param int $beatsPerMinute
   */
  public function setBeatsPerMinute($beatsPerMinute)
  {
    $this->beatsPerMinute = $beatsPerMinute;
  }
  /**
   * @return int
   */
  public function getBeatsPerMinute()
  {
    return $this->beatsPerMinute;
  }
  /**
   * Output only. The civil time in the timezone the subject is in at the time
   * of the observation.
   *
   * @param CivilDateTime $civilTime
   */
  public function setCivilTime(CivilDateTime $civilTime)
  {
    $this->civilTime = $civilTime;
  }
  /**
   * @return CivilDateTime
   */
  public function getCivilTime()
  {
    return $this->civilTime;
  }
  /**
   * Required. The time of the heart beat measurement.
   *
   * @param string $physicalTime
   */
  public function setPhysicalTime($physicalTime)
  {
    $this->physicalTime = $physicalTime;
  }
  /**
   * @return string
   */
  public function getPhysicalTime()
  {
    return $this->physicalTime;
  }
  /**
   * Required. The UTC offset of the user's timezone when the heart beat
   * measurement occurred.
   *
   * @param string $utcOffset
   */
  public function setUtcOffset($utcOffset)
  {
    $this->utcOffset = $utcOffset;
  }
  /**
   * @return string
   */
  public function getUtcOffset()
  {
    return $this->utcOffset;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HeartBeat::class, 'Google_Service_GoogleHealthAPI_HeartBeat');
