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

class DailyHeartRateVariability extends \Google\Model
{
  /**
   * Optional. A user's average heart rate variability calculated using the root
   * mean square of successive differences (RMSSD) in times between heartbeats.
   *
   * @var 
   */
  public $averageHeartRateVariabilityMilliseconds;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  /**
   * Optional. The root mean square of successive differences (RMSSD) value
   * during deep sleep.
   *
   * @var 
   */
  public $deepSleepRootMeanSquareOfSuccessiveDifferencesMilliseconds;
  /**
   * Optional. The Shanon entropy of heartbeat intervals. Entropy quantifies
   * randomness or disorder in a system. High entropy indicates high HRV.
   * Entropy is measured from the histogram of time interval between successive
   * heart beats values measured during sleep.
   *
   * @var 
   */
  public $entropy;
  /**
   * Optional. Non-REM heart rate
   *
   * @var string
   */
  public $nonRemHeartRateBeatsPerMinute;

  public function setAverageHeartRateVariabilityMilliseconds($averageHeartRateVariabilityMilliseconds)
  {
    $this->averageHeartRateVariabilityMilliseconds = $averageHeartRateVariabilityMilliseconds;
  }
  public function getAverageHeartRateVariabilityMilliseconds()
  {
    return $this->averageHeartRateVariabilityMilliseconds;
  }
  /**
   * Required. Date (in the user's timezone) of heart rate variability
   * measurement.
   *
   * @param Date $date
   */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /**
   * @return Date
   */
  public function getDate()
  {
    return $this->date;
  }
  public function setDeepSleepRootMeanSquareOfSuccessiveDifferencesMilliseconds($deepSleepRootMeanSquareOfSuccessiveDifferencesMilliseconds)
  {
    $this->deepSleepRootMeanSquareOfSuccessiveDifferencesMilliseconds = $deepSleepRootMeanSquareOfSuccessiveDifferencesMilliseconds;
  }
  public function getDeepSleepRootMeanSquareOfSuccessiveDifferencesMilliseconds()
  {
    return $this->deepSleepRootMeanSquareOfSuccessiveDifferencesMilliseconds;
  }
  public function setEntropy($entropy)
  {
    $this->entropy = $entropy;
  }
  public function getEntropy()
  {
    return $this->entropy;
  }
  /**
   * Optional. Non-REM heart rate
   *
   * @param string $nonRemHeartRateBeatsPerMinute
   */
  public function setNonRemHeartRateBeatsPerMinute($nonRemHeartRateBeatsPerMinute)
  {
    $this->nonRemHeartRateBeatsPerMinute = $nonRemHeartRateBeatsPerMinute;
  }
  /**
   * @return string
   */
  public function getNonRemHeartRateBeatsPerMinute()
  {
    return $this->nonRemHeartRateBeatsPerMinute;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DailyHeartRateVariability::class, 'Google_Service_GoogleHealthAPI_DailyHeartRateVariability');
