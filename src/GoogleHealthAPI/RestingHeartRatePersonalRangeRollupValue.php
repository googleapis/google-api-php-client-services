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

class RestingHeartRatePersonalRangeRollupValue extends \Google\Model
{
  /**
   * The upper bound of the user's daily resting heart rate personal range.
   *
   * @var 
   */
  public $beatsPerMinuteMax;
  /**
   * The lower bound of the user's daily resting heart rate personal range.
   *
   * @var 
   */
  public $beatsPerMinuteMin;

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
class_alias(RestingHeartRatePersonalRangeRollupValue::class, 'Google_Service_GoogleHealthAPI_RestingHeartRatePersonalRangeRollupValue');
