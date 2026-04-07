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

class HeartRateZone extends \Google\Model
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
   * Required. The heart rate zone type.
   *
   * @var string
   */
  public $heartRateZoneType;
  /**
   * Required. Maximum heart rate for this zone in beats per minute.
   *
   * @var string
   */
  public $maxBeatsPerMinute;
  /**
   * Required. Minimum heart rate for this zone in beats per minute.
   *
   * @var string
   */
  public $minBeatsPerMinute;

  /**
   * Required. The heart rate zone type.
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
   * Required. Maximum heart rate for this zone in beats per minute.
   *
   * @param string $maxBeatsPerMinute
   */
  public function setMaxBeatsPerMinute($maxBeatsPerMinute)
  {
    $this->maxBeatsPerMinute = $maxBeatsPerMinute;
  }
  /**
   * @return string
   */
  public function getMaxBeatsPerMinute()
  {
    return $this->maxBeatsPerMinute;
  }
  /**
   * Required. Minimum heart rate for this zone in beats per minute.
   *
   * @param string $minBeatsPerMinute
   */
  public function setMinBeatsPerMinute($minBeatsPerMinute)
  {
    $this->minBeatsPerMinute = $minBeatsPerMinute;
  }
  /**
   * @return string
   */
  public function getMinBeatsPerMinute()
  {
    return $this->minBeatsPerMinute;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HeartRateZone::class, 'Google_Service_GoogleHealthAPI_HeartRateZone');
