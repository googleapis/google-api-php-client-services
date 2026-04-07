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

class OxygenSaturation extends \Google\Model
{
  /**
   * Required. The oxygen saturation percentage. Valid values are from 0 to 100.
   *
   * @var 
   */
  public $percentage;
  protected $sampleTimeType = ObservationSampleTime::class;
  protected $sampleTimeDataType = '';

  public function setPercentage($percentage)
  {
    $this->percentage = $percentage;
  }
  public function getPercentage()
  {
    return $this->percentage;
  }
  /**
   * Required. The time at which oxygen saturation was measured.
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
class_alias(OxygenSaturation::class, 'Google_Service_GoogleHealthAPI_OxygenSaturation');
