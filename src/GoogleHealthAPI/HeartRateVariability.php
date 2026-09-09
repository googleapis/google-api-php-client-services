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

class HeartRateVariability extends \Google\Model
{
  protected $metadataType = HeartRateVariabilityMetadata::class;
  protected $metadataDataType = '';
  /**
   * Optional. The root mean square of successive differences between normal
   * heartbeats. This is a measure of heart rate variability used by Google
   * Health.
   *
   * @var 
   */
  public $rootMeanSquareOfSuccessiveDifferencesMilliseconds;
  protected $sampleTimeType = ObservationSampleTime::class;
  protected $sampleTimeDataType = '';
  /**
   * Optional. The standard deviation of the heart rate variability measurement.
   *
   * @var 
   */
  public $standardDeviationMilliseconds;

  /**
   * Optional. Metadata used in 1P surfaces.
   *
   * @param HeartRateVariabilityMetadata $metadata
   */
  public function setMetadata(HeartRateVariabilityMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return HeartRateVariabilityMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setRootMeanSquareOfSuccessiveDifferencesMilliseconds($rootMeanSquareOfSuccessiveDifferencesMilliseconds)
  {
    $this->rootMeanSquareOfSuccessiveDifferencesMilliseconds = $rootMeanSquareOfSuccessiveDifferencesMilliseconds;
  }
  public function getRootMeanSquareOfSuccessiveDifferencesMilliseconds()
  {
    return $this->rootMeanSquareOfSuccessiveDifferencesMilliseconds;
  }
  /**
   * Required. The time of the heart rate variability measurement.
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
  public function setStandardDeviationMilliseconds($standardDeviationMilliseconds)
  {
    $this->standardDeviationMilliseconds = $standardDeviationMilliseconds;
  }
  public function getStandardDeviationMilliseconds()
  {
    return $this->standardDeviationMilliseconds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HeartRateVariability::class, 'Google_Service_GoogleHealthAPI_HeartRateVariability');
