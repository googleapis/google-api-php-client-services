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

class HeartRate extends \Google\Model
{
  /**
   * Required. The heart rate value in beats per minute.
   *
   * @var string
   */
  public $beatsPerMinute;
  protected $metadataType = HeartRateMetadata::class;
  protected $metadataDataType = '';
  protected $sampleTimeType = ObservationSampleTime::class;
  protected $sampleTimeDataType = '';

  /**
   * Required. The heart rate value in beats per minute.
   *
   * @param string $beatsPerMinute
   */
  public function setBeatsPerMinute($beatsPerMinute)
  {
    $this->beatsPerMinute = $beatsPerMinute;
  }
  /**
   * @return string
   */
  public function getBeatsPerMinute()
  {
    return $this->beatsPerMinute;
  }
  /**
   * Optional. Metadata about the heart rate sample.
   *
   * @param HeartRateMetadata $metadata
   */
  public function setMetadata(HeartRateMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return HeartRateMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * Required. Observation time
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
class_alias(HeartRate::class, 'Google_Service_GoogleHealthAPI_HeartRate');
