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

class HeartRateVariabilityPersonalRangeRollupValue extends \Google\Model
{
  /**
   * The upper bound of the user's average heart rate variability personal
   * range.
   *
   * @var 
   */
  public $averageHeartRateVariabilityMillisecondsMax;
  /**
   * The lower bound of the user's average heart rate variability personal
   * range.
   *
   * @var 
   */
  public $averageHeartRateVariabilityMillisecondsMin;

  public function setAverageHeartRateVariabilityMillisecondsMax($averageHeartRateVariabilityMillisecondsMax)
  {
    $this->averageHeartRateVariabilityMillisecondsMax = $averageHeartRateVariabilityMillisecondsMax;
  }
  public function getAverageHeartRateVariabilityMillisecondsMax()
  {
    return $this->averageHeartRateVariabilityMillisecondsMax;
  }
  public function setAverageHeartRateVariabilityMillisecondsMin($averageHeartRateVariabilityMillisecondsMin)
  {
    $this->averageHeartRateVariabilityMillisecondsMin = $averageHeartRateVariabilityMillisecondsMin;
  }
  public function getAverageHeartRateVariabilityMillisecondsMin()
  {
    return $this->averageHeartRateVariabilityMillisecondsMin;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HeartRateVariabilityPersonalRangeRollupValue::class, 'Google_Service_GoogleHealthAPI_HeartRateVariabilityPersonalRangeRollupValue');
