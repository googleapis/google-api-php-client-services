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

class RunVO2MaxRollupValue extends \Google\Model
{
  /**
   * Average value of run VO2 max in the interval.
   *
   * @var 
   */
  public $rateAvg;
  /**
   * Maximum value of run VO2 max in the interval.
   *
   * @var 
   */
  public $rateMax;
  /**
   * Minimum value of run VO2 max in the interval..
   *
   * @var 
   */
  public $rateMin;

  public function setRateAvg($rateAvg)
  {
    $this->rateAvg = $rateAvg;
  }
  public function getRateAvg()
  {
    return $this->rateAvg;
  }
  public function setRateMax($rateMax)
  {
    $this->rateMax = $rateMax;
  }
  public function getRateMax()
  {
    return $this->rateMax;
  }
  public function setRateMin($rateMin)
  {
    $this->rateMin = $rateMin;
  }
  public function getRateMin()
  {
    return $this->rateMin;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RunVO2MaxRollupValue::class, 'Google_Service_GoogleHealthAPI_RunVO2MaxRollupValue');
