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

class Moods extends \Google\Collection
{
  protected $collection_key = 'valences';
  /**
   * Required. The moods logged.
   *
   * @var string[]
   */
  public $moods;
  protected $sampleTimeType = ObservationSampleTime::class;
  protected $sampleTimeDataType = '';
  /**
   * Optional. The valences.
   *
   * @var string[]
   */
  public $valences;

  /**
   * Required. The moods logged.
   *
   * @param string[] $moods
   */
  public function setMoods($moods)
  {
    $this->moods = $moods;
  }
  /**
   * @return string[]
   */
  public function getMoods()
  {
    return $this->moods;
  }
  /**
   * Required. The time at which moods were measured.
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
   * Optional. The valences.
   *
   * @param string[] $valences
   */
  public function setValences($valences)
  {
    $this->valences = $valences;
  }
  /**
   * @return string[]
   */
  public function getValences()
  {
    return $this->valences;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Moods::class, 'Google_Service_GoogleHealthAPI_Moods');
