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

class Electrocardiogram extends \Google\Collection
{
  /**
   * Unspecified result classification.
   */
  public const RESULT_CLASSIFICATION_RESULT_CLASSIFICATION_UNSPECIFIED = 'RESULT_CLASSIFICATION_UNSPECIFIED';
  /**
   * Heart rhythm appears normal. Corresponds to result "Normal Sinus Rhythm".
   */
  public const RESULT_CLASSIFICATION_NORMAL_SINUS_RHYTHM = 'NORMAL_SINUS_RHYTHM';
  /**
   * Signs of Atrial Fibrillation detected. Corresponds to result "Atrial
   * Fibrillation".
   */
  public const RESULT_CLASSIFICATION_ATRIAL_FIBRILLATION = 'ATRIAL_FIBRILLATION';
  /**
   * The reading is inconclusive as it could not be classified. Corresponds to
   * result "Inconclusive".
   */
  public const RESULT_CLASSIFICATION_INCONCLUSIVE = 'INCONCLUSIVE';
  /**
   * The reading is inconclusive as it could not be classified because heart
   * rate is high (>120bpm). Corresponds to result "Inconclusive: High heart
   * rate".
   */
  public const RESULT_CLASSIFICATION_INCONCLUSIVE_HIGH_HEART_RATE = 'INCONCLUSIVE_HIGH_HEART_RATE';
  /**
   * The reading is inconclusive as it could not be classified because heart
   * rate is low (<50bpm). Corresponds to result "Inconclusive: Low heart rate".
   */
  public const RESULT_CLASSIFICATION_INCONCLUSIVE_LOW_HEART_RATE = 'INCONCLUSIVE_LOW_HEART_RATE';
  /**
   * The reading is unreadable.
   */
  public const RESULT_CLASSIFICATION_UNREADABLE = 'UNREADABLE';
  /**
   * The reading was not analyzed.
   */
  public const RESULT_CLASSIFICATION_NOT_ANALYZED = 'NOT_ANALYZED';
  protected $collection_key = 'waveformSamples';
  /**
   * Optional. Average heart rate recorded during ECG reading in beats per
   * minute.
   *
   * @var string
   */
  public $beatsPerMinuteAvg;
  protected $intervalType = SessionTimeInterval::class;
  protected $intervalDataType = '';
  /**
   * Optional. The number of leads used for ECG reading.
   *
   * @var int
   */
  public $leadNumber;
  protected $medicalDeviceInfoType = MedicalDeviceInfo::class;
  protected $medicalDeviceInfoDataType = '';
  /**
   * Optional. The factor by which to divide waveform samples to get voltage in
   * millivolts: millivolts = waveform_sample / millivolts_scaling_factor.
   *
   * @var int
   */
  public $millivoltsScalingFactor;
  /**
   * Optional. The result classification of the ECG reading.
   *
   * @var string
   */
  public $resultClassification;
  /**
   * Optional. The sampling frequency of waveform samples in hertz.
   *
   * @var int
   */
  public $samplingFrequencyHertz;
  /**
   * Optional. An array of voltage values representing lead I ECG values. Each
   * sample represents voltage difference in ECG graph. The first value in array
   * corresponds to the start of the reading.
   *
   * @var int[]
   */
  public $waveformSamples;

  /**
   * Optional. Average heart rate recorded during ECG reading in beats per
   * minute.
   *
   * @param string $beatsPerMinuteAvg
   */
  public function setBeatsPerMinuteAvg($beatsPerMinuteAvg)
  {
    $this->beatsPerMinuteAvg = $beatsPerMinuteAvg;
  }
  /**
   * @return string
   */
  public function getBeatsPerMinuteAvg()
  {
    return $this->beatsPerMinuteAvg;
  }
  /**
   * Required. Observed interval. NOTE: Historical ECG data lacks timezone
   * offsets, so `start_utc_offset` and `end_utc_offset` will be missing or
   * default to zero. As a result, the civil time fields within this interval
   * will default to UTC. It is recommended to use physical time fields instead
   * for accurate time referencing. NOTE: The `start_time` and `end_time` of the
   * interval are equal, representing the reading time.
   *
   * @param SessionTimeInterval $interval
   */
  public function setInterval(SessionTimeInterval $interval)
  {
    $this->interval = $interval;
  }
  /**
   * @return SessionTimeInterval
   */
  public function getInterval()
  {
    return $this->interval;
  }
  /**
   * Optional. The number of leads used for ECG reading.
   *
   * @param int $leadNumber
   */
  public function setLeadNumber($leadNumber)
  {
    $this->leadNumber = $leadNumber;
  }
  /**
   * @return int
   */
  public function getLeadNumber()
  {
    return $this->leadNumber;
  }
  /**
   * Output only. The meta information for the compatible device used to conduct
   * the measurement. ECG measurements typically populate `firmware_version`,
   * `feature_version`, and `device_model`.
   *
   * @param MedicalDeviceInfo $medicalDeviceInfo
   */
  public function setMedicalDeviceInfo(MedicalDeviceInfo $medicalDeviceInfo)
  {
    $this->medicalDeviceInfo = $medicalDeviceInfo;
  }
  /**
   * @return MedicalDeviceInfo
   */
  public function getMedicalDeviceInfo()
  {
    return $this->medicalDeviceInfo;
  }
  /**
   * Optional. The factor by which to divide waveform samples to get voltage in
   * millivolts: millivolts = waveform_sample / millivolts_scaling_factor.
   *
   * @param int $millivoltsScalingFactor
   */
  public function setMillivoltsScalingFactor($millivoltsScalingFactor)
  {
    $this->millivoltsScalingFactor = $millivoltsScalingFactor;
  }
  /**
   * @return int
   */
  public function getMillivoltsScalingFactor()
  {
    return $this->millivoltsScalingFactor;
  }
  /**
   * Optional. The result classification of the ECG reading.
   *
   * Accepted values: RESULT_CLASSIFICATION_UNSPECIFIED, NORMAL_SINUS_RHYTHM,
   * ATRIAL_FIBRILLATION, INCONCLUSIVE, INCONCLUSIVE_HIGH_HEART_RATE,
   * INCONCLUSIVE_LOW_HEART_RATE, UNREADABLE, NOT_ANALYZED
   *
   * @param self::RESULT_CLASSIFICATION_* $resultClassification
   */
  public function setResultClassification($resultClassification)
  {
    $this->resultClassification = $resultClassification;
  }
  /**
   * @return self::RESULT_CLASSIFICATION_*
   */
  public function getResultClassification()
  {
    return $this->resultClassification;
  }
  /**
   * Optional. The sampling frequency of waveform samples in hertz.
   *
   * @param int $samplingFrequencyHertz
   */
  public function setSamplingFrequencyHertz($samplingFrequencyHertz)
  {
    $this->samplingFrequencyHertz = $samplingFrequencyHertz;
  }
  /**
   * @return int
   */
  public function getSamplingFrequencyHertz()
  {
    return $this->samplingFrequencyHertz;
  }
  /**
   * Optional. An array of voltage values representing lead I ECG values. Each
   * sample represents voltage difference in ECG graph. The first value in array
   * corresponds to the start of the reading.
   *
   * @param int[] $waveformSamples
   */
  public function setWaveformSamples($waveformSamples)
  {
    $this->waveformSamples = $waveformSamples;
  }
  /**
   * @return int[]
   */
  public function getWaveformSamples()
  {
    return $this->waveformSamples;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Electrocardiogram::class, 'Google_Service_GoogleHealthAPI_Electrocardiogram');
