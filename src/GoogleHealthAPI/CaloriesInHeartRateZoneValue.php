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

class CaloriesInHeartRateZoneValue extends \Google\Model
{
  /**
   * Unspecified heart rate zone.
   */
  public const HEART_RATE_ZONE_HEART_RATE_ZONE_TYPE_UNSPECIFIED = 'HEART_RATE_ZONE_TYPE_UNSPECIFIED';
  /**
   * The light heart rate zone.
   */
  public const HEART_RATE_ZONE_LIGHT = 'LIGHT';
  /**
   * The moderate heart rate zone.
   */
  public const HEART_RATE_ZONE_MODERATE = 'MODERATE';
  /**
   * The vigorous heart rate zone.
   */
  public const HEART_RATE_ZONE_VIGOROUS = 'VIGOROUS';
  /**
   * The peak heart rate zone.
   */
  public const HEART_RATE_ZONE_PEAK = 'PEAK';
  /**
   * The heart rate zone.
   *
   * @var string
   */
  public $heartRateZone;
  /**
   * The amount of kilocalories burned in the specified heart rate zone.
   *
   * @var 
   */
  public $kcal;

  /**
   * The heart rate zone.
   *
   * Accepted values: HEART_RATE_ZONE_TYPE_UNSPECIFIED, LIGHT, MODERATE,
   * VIGOROUS, PEAK
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
  public function setKcal($kcal)
  {
    $this->kcal = $kcal;
  }
  public function getKcal()
  {
    return $this->kcal;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CaloriesInHeartRateZoneValue::class, 'Google_Service_GoogleHealthAPI_CaloriesInHeartRateZoneValue');
