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

class BasalEnergyBurned extends \Google\Model
{
  protected $intervalType = ObservationTimeInterval::class;
  protected $intervalDataType = '';
  /**
   * Required. Number of calories burned due to basal metabolic rate in
   * kilocalories over the observed interval.
   *
   * @var 
   */
  public $kcal;

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
class_alias(BasalEnergyBurned::class, 'Google_Service_GoogleHealthAPI_BasalEnergyBurned');
