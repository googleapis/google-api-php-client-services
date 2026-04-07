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

class ActiveZoneMinutes extends \Google\Model
{
  /**
   * Unspecified heart rate zone.
   */
  public const HEART_RATE_ZONE_HEART_RATE_ZONE_UNSPECIFIED = 'HEART_RATE_ZONE_UNSPECIFIED';
  /**
   * The fat burn heart rate zone.
   */
  public const HEART_RATE_ZONE_FAT_BURN = 'FAT_BURN';
  /**
   * The cardio heart rate zone.
   */
  public const HEART_RATE_ZONE_CARDIO = 'CARDIO';
  /**
   * The peak heart rate zone.
   */
  public const HEART_RATE_ZONE_PEAK = 'PEAK';
  /**
   * Required. Number of Active Zone Minutes earned in the given time interval.
   * Note: active_zone_minutes equals to 1 for low intensity (fat burn) zones or
   * 2 for high intensity zones (cardio, peak).
   *
   * @var string
   */
  public $activeZoneMinutes;
  /**
   * Required. Heart rate zone in which the active zone minutes have been
   * earned, in the given time interval.
   *
   * @var string
   */
  public $heartRateZone;
  protected $intervalType = ObservationTimeInterval::class;
  protected $intervalDataType = '';

  /**
   * Required. Number of Active Zone Minutes earned in the given time interval.
   * Note: active_zone_minutes equals to 1 for low intensity (fat burn) zones or
   * 2 for high intensity zones (cardio, peak).
   *
   * @param string $activeZoneMinutes
   */
  public function setActiveZoneMinutes($activeZoneMinutes)
  {
    $this->activeZoneMinutes = $activeZoneMinutes;
  }
  /**
   * @return string
   */
  public function getActiveZoneMinutes()
  {
    return $this->activeZoneMinutes;
  }
  /**
   * Required. Heart rate zone in which the active zone minutes have been
   * earned, in the given time interval.
   *
   * Accepted values: HEART_RATE_ZONE_UNSPECIFIED, FAT_BURN, CARDIO, PEAK
   *
   * @param self::HEART_RATE_ZONE_* $heartRateZone
   */
  public function setHeartRateZone($heartRateZone)
  {
    $this->heartRateZone = $heartRateZone;
  }
  /**
   * @return self::HEART_RATE_ZONE_*
   */
  public function getHeartRateZone()
  {
    return $this->heartRateZone;
  }
  /**
   * Required. Observed interval.
   *
   * @param ObservationTimeInterval $interval
   */
  public function setInterval(ObservationTimeInterval $interval)
  {
    $this->interval = $interval;
  }
  /**
   * @return ObservationTimeInterval
   */
  public function getInterval()
  {
    return $this->interval;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ActiveZoneMinutes::class, 'Google_Service_GoogleHealthAPI_ActiveZoneMinutes');
