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

class RunVO2Max extends \Google\Model
{
  /**
   * Required. Run VO2 max value in ml/kg/min.
   *
   * @var 
   */
  public $runVo2Max;
  protected $sampleTimeType = ObservationSampleTime::class;
  protected $sampleTimeDataType = '';

  public function setRunVo2Max($runVo2Max)
  {
    $this->runVo2Max = $runVo2Max;
  }
  public function getRunVo2Max()
  {
    return $this->runVo2Max;
  }
  /**
   * Required. The time at which the metric was measured.
   *
   * @param ObservationSampleTime $sampleTime
   */
  public function setSampleTime(ObservationSampleTime $sampleTime)
  {
    $this->sampleTime = $sampleTime;
  }
  /**
   * @return ObservationSampleTime
   */
  public function getSampleTime()
  {
    return $this->sampleTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RunVO2Max::class, 'Google_Service_GoogleHealthAPI_RunVO2Max');
