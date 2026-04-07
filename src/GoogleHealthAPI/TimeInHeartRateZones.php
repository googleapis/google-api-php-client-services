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

class TimeInHeartRateZones extends \Google\Model
{
  /**
   * Optional. Time spent in light heart rate zone.
   *
   * @var string
   */
  public $lightTime;
  /**
   * Optional. Time spent in moderate heart rate zone.
   *
   * @var string
   */
  public $moderateTime;
  /**
   * Optional. Time spent in peak heart rate zone.
   *
   * @var string
   */
  public $peakTime;
  /**
   * Optional. Time spent in vigorous heart rate zone.
   *
   * @var string
   */
  public $vigorousTime;

  /**
   * Optional. Time spent in light heart rate zone.
   *
   * @param string $lightTime
   */
  public function setLightTime($lightTime)
  {
    $this->lightTime = $lightTime;
  }
  /**
   * @return string
   */
  public function getLightTime()
  {
    return $this->lightTime;
  }
  /**
   * Optional. Time spent in moderate heart rate zone.
   *
   * @param string $moderateTime
   */
  public function setModerateTime($moderateTime)
  {
    $this->moderateTime = $moderateTime;
  }
  /**
   * @return string
   */
  public function getModerateTime()
  {
    return $this->moderateTime;
  }
  /**
   * Optional. Time spent in peak heart rate zone.
   *
   * @param string $peakTime
   */
  public function setPeakTime($peakTime)
  {
    $this->peakTime = $peakTime;
  }
  /**
   * @return string
   */
  public function getPeakTime()
  {
    return $this->peakTime;
  }
  /**
   * Optional. Time spent in vigorous heart rate zone.
   *
   * @param string $vigorousTime
   */
  public function setVigorousTime($vigorousTime)
  {
    $this->vigorousTime = $vigorousTime;
  }
  /**
   * @return string
   */
  public function getVigorousTime()
  {
    return $this->vigorousTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TimeInHeartRateZones::class, 'Google_Service_GoogleHealthAPI_TimeInHeartRateZones');
