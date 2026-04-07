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

class MetricsSummary extends \Google\Model
{
  /**
   * Optional. Total active zone minutes for the exercise.
   *
   * @var string
   */
  public $activeZoneMinutes;
  /**
   * Optional. Average heart rate during the exercise.
   *
   * @var string
   */
  public $averageHeartRateBeatsPerMinute;
  /**
   * Optional. Average pace in seconds per meter.
   *
   * @var 
   */
  public $averagePaceSecondsPerMeter;
  /**
   * Optional. Average speed in millimeters per second.
   *
   * @var 
   */
  public $averageSpeedMillimetersPerSecond;
  /**
   * Optional. Total calories burned by the user during the exercise.
   *
   * @var 
   */
  public $caloriesKcal;
  /**
   * Optional. Total distance covered by the user during the exercise.
   *
   * @var 
   */
  public $distanceMillimeters;
  /**
   * Optional. Total elevation gain during the exercise.
   *
   * @var 
   */
  public $elevationGainMillimeters;
  protected $heartRateZoneDurationsType = TimeInHeartRateZones::class;
  protected $heartRateZoneDurationsDataType = '';
  protected $mobilityMetricsType = MobilityMetrics::class;
  protected $mobilityMetricsDataType = '';
  /**
   * Optional. Run VO2 max value for the exercise. Only present in the running
   * exercises at the top level as in the summary of the whole exercise.
   *
   * @var 
   */
  public $runVo2Max;
  /**
   * Optional. Total steps taken during the exercise.
   *
   * @var string
   */
  public $steps;
  /**
   * Optional. Number of full pool lengths completed during the exercise. Only
   * present in the swimming exercises at the top level as in the summary of the
   * whole exercise.
   *
   * @var 
   */
  public $totalSwimLengths;

  /**
   * Optional. Total active zone minutes for the exercise.
   *
   * @param string $activeZoneMinutes
   */
  public function setActiveZoneMinutes($activeZoneMinutes)
  {
    $this->activeZoneMinutes = $activeZoneMinutes;
  }
  /**
   * @return string
   */
  public function getActiveZoneMinutes()
  {
    return $this->activeZoneMinutes;
  }
  /**
   * Optional. Average heart rate during the exercise.
   *
   * @param string $averageHeartRateBeatsPerMinute
   */
  public function setAverageHeartRateBeatsPerMinute($averageHeartRateBeatsPerMinute)
  {
    $this->averageHeartRateBeatsPerMinute = $averageHeartRateBeatsPerMinute;
  }
  /**
   * @return string
   */
  public function getAverageHeartRateBeatsPerMinute()
  {
    return $this->averageHeartRateBeatsPerMinute;
  }
  public function setAveragePaceSecondsPerMeter($averagePaceSecondsPerMeter)
  {
    $this->averagePaceSecondsPerMeter = $averagePaceSecondsPerMeter;
  }
  public function getAveragePaceSecondsPerMeter()
  {
    return $this->averagePaceSecondsPerMeter;
  }
  public function setAverageSpeedMillimetersPerSecond($averageSpeedMillimetersPerSecond)
  {
    $this->averageSpeedMillimetersPerSecond = $averageSpeedMillimetersPerSecond;
  }
  public function getAverageSpeedMillimetersPerSecond()
  {
    return $this->averageSpeedMillimetersPerSecond;
  }
  public function setCaloriesKcal($caloriesKcal)
  {
    $this->caloriesKcal = $caloriesKcal;
  }
  public function getCaloriesKcal()
  {
    return $this->caloriesKcal;
  }
  public function setDistanceMillimeters($distanceMillimeters)
  {
    $this->distanceMillimeters = $distanceMillimeters;
  }
  public function getDistanceMillimeters()
  {
    return $this->distanceMillimeters;
  }
  public function setElevationGainMillimeters($elevationGainMillimeters)
  {
    $this->elevationGainMillimeters = $elevationGainMillimeters;
  }
  public function getElevationGainMillimeters()
  {
    return $this->elevationGainMillimeters;
  }
  /**
   * Optional. Time spent in each heart rate zone.
   *
   * @param TimeInHeartRateZones $heartRateZoneDurations
   */
  public function setHeartRateZoneDurations(TimeInHeartRateZones $heartRateZoneDurations)
  {
    $this->heartRateZoneDurations = $heartRateZoneDurations;
  }
  /**
   * @return TimeInHeartRateZones
   */
  public function getHeartRateZoneDurations()
  {
    return $this->heartRateZoneDurations;
  }
  /**
   * Optional. Mobility workouts specific metrics. Only present in the advanced
   * running exercises.
   *
   * @param MobilityMetrics $mobilityMetrics
   */
  public function setMobilityMetrics(MobilityMetrics $mobilityMetrics)
  {
    $this->mobilityMetrics = $mobilityMetrics;
  }
  /**
   * @return MobilityMetrics
   */
  public function getMobilityMetrics()
  {
    return $this->mobilityMetrics;
  }
  public function setRunVo2Max($runVo2Max)
  {
    $this->runVo2Max = $runVo2Max;
  }
  public function getRunVo2Max()
  {
    return $this->runVo2Max;
  }
  /**
   * Optional. Total steps taken during the exercise.
   *
   * @param string $steps
   */
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  /**
   * @return string
   */
  public function getSteps()
  {
    return $this->steps;
  }
  public function setTotalSwimLengths($totalSwimLengths)
  {
    $this->totalSwimLengths = $totalSwimLengths;
  }
  public function getTotalSwimLengths()
  {
    return $this->totalSwimLengths;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MetricsSummary::class, 'Google_Service_GoogleHealthAPI_MetricsSummary');
