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

class ActiveZoneMinutesRollupValue extends \Google\Model
{
  /**
   * Active zone minutes in `HeartRateZone.CARDIO`.
   *
   * @var string
   */
  public $sumInCardioHeartZone;
  /**
   * Active zone minutes in `HeartRateZone.FAT_BURN`.
   *
   * @var string
   */
  public $sumInFatBurnHeartZone;
  /**
   * Active zone minutes in `HeartRateZone.PEAK`.
   *
   * @var string
   */
  public $sumInPeakHeartZone;

  /**
   * Active zone minutes in `HeartRateZone.CARDIO`.
   *
   * @param string $sumInCardioHeartZone
   */
  public function setSumInCardioHeartZone($sumInCardioHeartZone)
  {
    $this->sumInCardioHeartZone = $sumInCardioHeartZone;
  }
  /**
   * @return string
   */
  public function getSumInCardioHeartZone()
  {
    return $this->sumInCardioHeartZone;
  }
  /**
   * Active zone minutes in `HeartRateZone.FAT_BURN`.
   *
   * @param string $sumInFatBurnHeartZone
   */
  public function setSumInFatBurnHeartZone($sumInFatBurnHeartZone)
  {
    $this->sumInFatBurnHeartZone = $sumInFatBurnHeartZone;
  }
  /**
   * @return string
   */
  public function getSumInFatBurnHeartZone()
  {
    return $this->sumInFatBurnHeartZone;
  }
  /**
   * Active zone minutes in `HeartRateZone.PEAK`.
   *
   * @param string $sumInPeakHeartZone
   */
  public function setSumInPeakHeartZone($sumInPeakHeartZone)
  {
    $this->sumInPeakHeartZone = $sumInPeakHeartZone;
  }
  /**
   * @return string
   */
  public function getSumInPeakHeartZone()
  {
    return $this->sumInPeakHeartZone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ActiveZoneMinutesRollupValue::class, 'Google_Service_GoogleHealthAPI_ActiveZoneMinutesRollupValue');
