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

class DailyRestingHeartRate extends \Google\Model
{
  /**
   * Required. The resting heart rate value in beats per minute.
   *
   * @var string
   */
  public $beatsPerMinute;
  protected $dailyRestingHeartRateMetadataType = DailyRestingHeartRateMetadata::class;
  protected $dailyRestingHeartRateMetadataDataType = '';
  protected $dateType = Date::class;
  protected $dateDataType = '';

  /**
   * Required. The resting heart rate value in beats per minute.
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
   * Optional. Metadata for the daily resting heart rate.
   *
   * @param DailyRestingHeartRateMetadata $dailyRestingHeartRateMetadata
   */
  public function setDailyRestingHeartRateMetadata(DailyRestingHeartRateMetadata $dailyRestingHeartRateMetadata)
  {
    $this->dailyRestingHeartRateMetadata = $dailyRestingHeartRateMetadata;
  }
  /**
   * @return DailyRestingHeartRateMetadata
   */
  public function getDailyRestingHeartRateMetadata()
  {
    return $this->dailyRestingHeartRateMetadata;
  }
  /**
   * Required. Date (in the user's timezone) of the resting heart rate
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DailyRestingHeartRate::class, 'Google_Service_GoogleHealthAPI_DailyRestingHeartRate');
