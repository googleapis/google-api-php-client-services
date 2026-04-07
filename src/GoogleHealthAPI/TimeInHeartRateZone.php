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

class TimeInHeartRateZone extends \Google\Model
{
  /**
   * Unspecified heart rate zone.
   */
  public const HEART_RATE_ZONE_TYPE_HEART_RATE_ZONE_TYPE_UNSPECIFIED = 'HEART_RATE_ZONE_TYPE_UNSPECIFIED';
  /**
   * The light heart rate zone.
   */
  public const HEART_RATE_ZONE_TYPE_LIGHT = 'LIGHT';
  /**
   * The moderate heart rate zone.
   */
  public const HEART_RATE_ZONE_TYPE_MODERATE = 'MODERATE';
  /**
   * The vigorous heart rate zone.
   */
  public const HEART_RATE_ZONE_TYPE_VIGOROUS = 'VIGOROUS';
  /**
   * The peak heart rate zone.
   */
  public const HEART_RATE_ZONE_TYPE_PEAK = 'PEAK';
  /**
   * Required. Heart rate zone type.
   *
   * @var string
   */
  public $heartRateZoneType;
  protected $intervalType = ObservationTimeInterval::class;
  protected $intervalDataType = '';

  /**
   * Required. Heart rate zone type.
   *
   * Accepted values: HEART_RATE_ZONE_TYPE_UNSPECIFIED, LIGHT, MODERATE,
   * VIGOROUS, PEAK
   *
   * @param self::HEART_RATE_ZONE_TYPE_* $heartRateZoneType
   */
  public function setHeartRateZoneType($heartRateZoneType)
  {
    $this->heartRateZoneType = $heartRateZoneType;
  }
  /**
   * @return self::HEART_RATE_ZONE_TYPE_*
   */
  public function getHeartRateZoneType()
  {
    return $this->heartRateZoneType;
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
class_alias(TimeInHeartRateZone::class, 'Google_Service_GoogleHealthAPI_TimeInHeartRateZone');
