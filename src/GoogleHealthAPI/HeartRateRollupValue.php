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

class HeartRateRollupValue extends \Google\Model
{
  /**
   * The average heart rate value in the interval.
   *
   * @var 
   */
  public $beatsPerMinuteAvg;
  /**
   * The maximum heart rate value in the interval.
   *
   * @var 
   */
  public $beatsPerMinuteMax;
  /**
   * The minimum heart rate value in the interval.
   *
   * @var 
   */
  public $beatsPerMinuteMin;

  public function setBeatsPerMinuteAvg($beatsPerMinuteAvg)
  {
    $this->beatsPerMinuteAvg = $beatsPerMinuteAvg;
  }
  public function getBeatsPerMinuteAvg()
  {
    return $this->beatsPerMinuteAvg;
  }
  public function setBeatsPerMinuteMax($beatsPerMinuteMax)
  {
    $this->beatsPerMinuteMax = $beatsPerMinuteMax;
  }
  public function getBeatsPerMinuteMax()
  {
    return $this->beatsPerMinuteMax;
  }
  public function setBeatsPerMinuteMin($beatsPerMinuteMin)
  {
    $this->beatsPerMinuteMin = $beatsPerMinuteMin;
  }
  public function getBeatsPerMinuteMin()
  {
    return $this->beatsPerMinuteMin;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HeartRateRollupValue::class, 'Google_Service_GoogleHealthAPI_HeartRateRollupValue');
