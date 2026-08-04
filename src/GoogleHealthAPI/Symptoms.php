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

class Symptoms extends \Google\Collection
{
  protected $collection_key = 'symptoms';
  protected $sampleTimeType = ObservationSampleTime::class;
  protected $sampleTimeDataType = '';
  /**
   * Required. List of symptoms experienced.
   *
   * @var string[]
   */
  public $symptoms;

  /**
   * Required. Time when the symptoms were logged.
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
  /**
   * Required. List of symptoms experienced.
   *
   * @param string[] $symptoms
   */
  public function setSymptoms($symptoms)
  {
    $this->symptoms = $symptoms;
  }
  /**
   * @return string[]
   */
  public function getSymptoms()
  {
    return $this->symptoms;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Symptoms::class, 'Google_Service_GoogleHealthAPI_Symptoms');
