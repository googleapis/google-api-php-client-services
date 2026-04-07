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

class RespiratoryRateSleepSummary extends \Google\Model
{
  protected $deepSleepStatsType = RespiratoryRateSleepSummaryStatistics::class;
  protected $deepSleepStatsDataType = '';
  protected $fullSleepStatsType = RespiratoryRateSleepSummaryStatistics::class;
  protected $fullSleepStatsDataType = '';
  protected $lightSleepStatsType = RespiratoryRateSleepSummaryStatistics::class;
  protected $lightSleepStatsDataType = '';
  protected $remSleepStatsType = RespiratoryRateSleepSummaryStatistics::class;
  protected $remSleepStatsDataType = '';
  protected $sampleTimeType = ObservationSampleTime::class;
  protected $sampleTimeDataType = '';

  /**
   * Optional. Respiratory rate statistics for deep sleep.
   *
   * @param RespiratoryRateSleepSummaryStatistics $deepSleepStats
   */
  public function setDeepSleepStats(RespiratoryRateSleepSummaryStatistics $deepSleepStats)
  {
    $this->deepSleepStats = $deepSleepStats;
  }
  /**
   * @return RespiratoryRateSleepSummaryStatistics
   */
  public function getDeepSleepStats()
  {
    return $this->deepSleepStats;
  }
  /**
   * Required. Full respiratory rate statistics.
   *
   * @param RespiratoryRateSleepSummaryStatistics $fullSleepStats
   */
  public function setFullSleepStats(RespiratoryRateSleepSummaryStatistics $fullSleepStats)
  {
    $this->fullSleepStats = $fullSleepStats;
  }
  /**
   * @return RespiratoryRateSleepSummaryStatistics
   */
  public function getFullSleepStats()
  {
    return $this->fullSleepStats;
  }
  /**
   * Optional. Respiratory rate statistics for light sleep.
   *
   * @param RespiratoryRateSleepSummaryStatistics $lightSleepStats
   */
  public function setLightSleepStats(RespiratoryRateSleepSummaryStatistics $lightSleepStats)
  {
    $this->lightSleepStats = $lightSleepStats;
  }
  /**
   * @return RespiratoryRateSleepSummaryStatistics
   */
  public function getLightSleepStats()
  {
    return $this->lightSleepStats;
  }
  /**
   * Optional. Respiratory rate statistics for REM sleep.
   *
   * @param RespiratoryRateSleepSummaryStatistics $remSleepStats
   */
  public function setRemSleepStats(RespiratoryRateSleepSummaryStatistics $remSleepStats)
  {
    $this->remSleepStats = $remSleepStats;
  }
  /**
   * @return RespiratoryRateSleepSummaryStatistics
   */
  public function getRemSleepStats()
  {
    return $this->remSleepStats;
  }
  /**
   * Required. The time at which respiratory rate was measured.
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
class_alias(RespiratoryRateSleepSummary::class, 'Google_Service_GoogleHealthAPI_RespiratoryRateSleepSummary');
