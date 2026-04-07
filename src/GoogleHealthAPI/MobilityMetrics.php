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

class MobilityMetrics extends \Google\Model
{
  /**
   * Optional. Cadence is a measure of the frequency of your foot strikes. Steps
   * / min in real time during workout.
   *
   * @var 
   */
  public $avgCadenceStepsPerMinute;
  /**
   * Optional. The ground contact time for a particular stride is the amount of
   * time for which the foot was in contact with the ground on that stride
   *
   * @var string
   */
  public $avgGroundContactTimeDuration;
  /**
   * Optional. Stride length is a measure of the distance covered by a single
   * stride
   *
   * @var string
   */
  public $avgStrideLengthMillimeters;
  /**
   * Optional. Distance off the ground your center of mass moves with each
   * stride while running
   *
   * @var string
   */
  public $avgVerticalOscillationMillimeters;
  /**
   * Optional. Vertical oscillation/stride length between [5.0, 11.0].
   *
   * @var 
   */
  public $avgVerticalRatio;

  public function setAvgCadenceStepsPerMinute($avgCadenceStepsPerMinute)
  {
    $this->avgCadenceStepsPerMinute = $avgCadenceStepsPerMinute;
  }
  public function getAvgCadenceStepsPerMinute()
  {
    return $this->avgCadenceStepsPerMinute;
  }
  /**
   * Optional. The ground contact time for a particular stride is the amount of
   * time for which the foot was in contact with the ground on that stride
   *
   * @param string $avgGroundContactTimeDuration
   */
  public function setAvgGroundContactTimeDuration($avgGroundContactTimeDuration)
  {
    $this->avgGroundContactTimeDuration = $avgGroundContactTimeDuration;
  }
  /**
   * @return string
   */
  public function getAvgGroundContactTimeDuration()
  {
    return $this->avgGroundContactTimeDuration;
  }
  /**
   * Optional. Stride length is a measure of the distance covered by a single
   * stride
   *
   * @param string $avgStrideLengthMillimeters
   */
  public function setAvgStrideLengthMillimeters($avgStrideLengthMillimeters)
  {
    $this->avgStrideLengthMillimeters = $avgStrideLengthMillimeters;
  }
  /**
   * @return string
   */
  public function getAvgStrideLengthMillimeters()
  {
    return $this->avgStrideLengthMillimeters;
  }
  /**
   * Optional. Distance off the ground your center of mass moves with each
   * stride while running
   *
   * @param string $avgVerticalOscillationMillimeters
   */
  public function setAvgVerticalOscillationMillimeters($avgVerticalOscillationMillimeters)
  {
    $this->avgVerticalOscillationMillimeters = $avgVerticalOscillationMillimeters;
  }
  /**
   * @return string
   */
  public function getAvgVerticalOscillationMillimeters()
  {
    return $this->avgVerticalOscillationMillimeters;
  }
  public function setAvgVerticalRatio($avgVerticalRatio)
  {
    $this->avgVerticalRatio = $avgVerticalRatio;
  }
  public function getAvgVerticalRatio()
  {
    return $this->avgVerticalRatio;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MobilityMetrics::class, 'Google_Service_GoogleHealthAPI_MobilityMetrics');
