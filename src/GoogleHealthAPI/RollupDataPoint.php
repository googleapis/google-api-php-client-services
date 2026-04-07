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

class RollupDataPoint extends \Google\Model
{
  protected $activeMinutesType = ActiveMinutesRollupValue::class;
  protected $activeMinutesDataType = '';
  protected $activeZoneMinutesType = ActiveZoneMinutesRollupValue::class;
  protected $activeZoneMinutesDataType = '';
  protected $activityLevelType = ActivityLevelRollupValue::class;
  protected $activityLevelDataType = '';
  protected $altitudeType = AltitudeRollupValue::class;
  protected $altitudeDataType = '';
  protected $bodyFatType = BodyFatRollupValue::class;
  protected $bodyFatDataType = '';
  protected $caloriesInHeartRateZoneType = CaloriesInHeartRateZoneRollupValue::class;
  protected $caloriesInHeartRateZoneDataType = '';
  protected $distanceType = DistanceRollupValue::class;
  protected $distanceDataType = '';
  /**
   * End time of the window this value aggregates over
   *
   * @var string
   */
  public $endTime;
  protected $floorsType = FloorsRollupValue::class;
  protected $floorsDataType = '';
  protected $heartRateType = HeartRateRollupValue::class;
  protected $heartRateDataType = '';
  protected $hydrationLogType = HydrationLogRollupValue::class;
  protected $hydrationLogDataType = '';
  protected $runVo2MaxType = RunVO2MaxRollupValue::class;
  protected $runVo2MaxDataType = '';
  protected $sedentaryPeriodType = SedentaryPeriodRollupValue::class;
  protected $sedentaryPeriodDataType = '';
  /**
   * Start time of the window this value aggregates over
   *
   * @var string
   */
  public $startTime;
  protected $stepsType = StepsRollupValue::class;
  protected $stepsDataType = '';
  protected $timeInHeartRateZoneType = TimeInHeartRateZoneRollupValue::class;
  protected $timeInHeartRateZoneDataType = '';
  protected $totalCaloriesType = TotalCaloriesRollupValue::class;
  protected $totalCaloriesDataType = '';
  protected $weightType = WeightRollupValue::class;
  protected $weightDataType = '';

  /**
   * Returned by default when rolling up data points from the `active-minutes`
   * data type, or when requested explicitly using the `active-minutes` rollup
   * type identifier.
   *
   * @param ActiveMinutesRollupValue $activeMinutes
   */
  public function setActiveMinutes(ActiveMinutesRollupValue $activeMinutes)
  {
    $this->activeMinutes = $activeMinutes;
  }
  /**
   * @return ActiveMinutesRollupValue
   */
  public function getActiveMinutes()
  {
    return $this->activeMinutes;
  }
  /**
   * Returned by default when rolling up data points from the `active-zone-
   * minutes` data type, or when requested explicitly using the `active-zone-
   * minutes` rollup type identifier.
   *
   * @param ActiveZoneMinutesRollupValue $activeZoneMinutes
   */
  public function setActiveZoneMinutes(ActiveZoneMinutesRollupValue $activeZoneMinutes)
  {
    $this->activeZoneMinutes = $activeZoneMinutes;
  }
  /**
   * @return ActiveZoneMinutesRollupValue
   */
  public function getActiveZoneMinutes()
  {
    return $this->activeZoneMinutes;
  }
  /**
   * Returned by default when rolling up data points from the `activity-level`
   * data type, or when requested explicitly using the `activity-level` rollup
   * type identifier.
   *
   * @param ActivityLevelRollupValue $activityLevel
   */
  public function setActivityLevel(ActivityLevelRollupValue $activityLevel)
  {
    $this->activityLevel = $activityLevel;
  }
  /**
   * @return ActivityLevelRollupValue
   */
  public function getActivityLevel()
  {
    return $this->activityLevel;
  }
  /**
   * Returned by default when rolling up data points from the `altitude` data
   * type, or when requested explicitly using the `altitude` rollup type
   * identifier.
   *
   * @param AltitudeRollupValue $altitude
   */
  public function setAltitude(AltitudeRollupValue $altitude)
  {
    $this->altitude = $altitude;
  }
  /**
   * @return AltitudeRollupValue
   */
  public function getAltitude()
  {
    return $this->altitude;
  }
  /**
   * Returned by default when rolling up data points from the `body-fat` data
   * type, or when requested explicitly using the `body-fat` rollup type
   * identifier.
   *
   * @param BodyFatRollupValue $bodyFat
   */
  public function setBodyFat(BodyFatRollupValue $bodyFat)
  {
    $this->bodyFat = $bodyFat;
  }
  /**
   * @return BodyFatRollupValue
   */
  public function getBodyFat()
  {
    return $this->bodyFat;
  }
  /**
   * Returned by default when rolling up data points from the `calories-in-
   * heart-rate-zone` data type, or when requested explicitly using the
   * `calories-in-heart-rate-zone` rollup type identifier.
   *
   * @param CaloriesInHeartRateZoneRollupValue $caloriesInHeartRateZone
   */
  public function setCaloriesInHeartRateZone(CaloriesInHeartRateZoneRollupValue $caloriesInHeartRateZone)
  {
    $this->caloriesInHeartRateZone = $caloriesInHeartRateZone;
  }
  /**
   * @return CaloriesInHeartRateZoneRollupValue
   */
  public function getCaloriesInHeartRateZone()
  {
    return $this->caloriesInHeartRateZone;
  }
  /**
   * Returned by default when rolling up data points from the `distance` data
   * type, or when requested explicitly using the `distance` rollup type
   * identifier.
   *
   * @param DistanceRollupValue $distance
   */
  public function setDistance(DistanceRollupValue $distance)
  {
    $this->distance = $distance;
  }
  /**
   * @return DistanceRollupValue
   */
  public function getDistance()
  {
    return $this->distance;
  }
  /**
   * End time of the window this value aggregates over
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * Returned by default when rolling up data points from the `floors` data
   * type, or when requested explicitly using the `floors` rollup type
   * identifier.
   *
   * @param FloorsRollupValue $floors
   */
  public function setFloors(FloorsRollupValue $floors)
  {
    $this->floors = $floors;
  }
  /**
   * @return FloorsRollupValue
   */
  public function getFloors()
  {
    return $this->floors;
  }
  /**
   * Returned by default when rolling up data points from the `heart-rate` data
   * type, or when requested explicitly using the `heart-rate` rollup type
   * identifier.
   *
   * @param HeartRateRollupValue $heartRate
   */
  public function setHeartRate(HeartRateRollupValue $heartRate)
  {
    $this->heartRate = $heartRate;
  }
  /**
   * @return HeartRateRollupValue
   */
  public function getHeartRate()
  {
    return $this->heartRate;
  }
  /**
   * Returned by default when rolling up data points from the `hydration-log`
   * data type, or when requested explicitly using the `hydration-log` rollup
   * type identifier.
   *
   * @param HydrationLogRollupValue $hydrationLog
   */
  public function setHydrationLog(HydrationLogRollupValue $hydrationLog)
  {
    $this->hydrationLog = $hydrationLog;
  }
  /**
   * @return HydrationLogRollupValue
   */
  public function getHydrationLog()
  {
    return $this->hydrationLog;
  }
  /**
   * Returned by default when rolling up data points from the `run-vo2-max` data
   * type, or when requested explicitly using the `run-vo2-max` rollup type
   * identifier.
   *
   * @param RunVO2MaxRollupValue $runVo2Max
   */
  public function setRunVo2Max(RunVO2MaxRollupValue $runVo2Max)
  {
    $this->runVo2Max = $runVo2Max;
  }
  /**
   * @return RunVO2MaxRollupValue
   */
  public function getRunVo2Max()
  {
    return $this->runVo2Max;
  }
  /**
   * Returned by default when rolling up data points from the `sedentary-period`
   * data type, or when requested explicitly using the `sedentary-period` rollup
   * type identifier.
   *
   * @param SedentaryPeriodRollupValue $sedentaryPeriod
   */
  public function setSedentaryPeriod(SedentaryPeriodRollupValue $sedentaryPeriod)
  {
    $this->sedentaryPeriod = $sedentaryPeriod;
  }
  /**
   * @return SedentaryPeriodRollupValue
   */
  public function getSedentaryPeriod()
  {
    return $this->sedentaryPeriod;
  }
  /**
   * Start time of the window this value aggregates over
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /**
   * Returned by default when rolling up data points from the `steps` data type,
   * or when requested explicitly using the `steps` rollup type identifier.
   *
   * @param StepsRollupValue $steps
   */
  public function setSteps(StepsRollupValue $steps)
  {
    $this->steps = $steps;
  }
  /**
   * @return StepsRollupValue
   */
  public function getSteps()
  {
    return $this->steps;
  }
  /**
   * Returned by default when rolling up data points from the `time-in-heart-
   * rate-zone` data type, or when requested explicitly using the `time-in-
   * heart-rate-zone` rollup type identifier.
   *
   * @param TimeInHeartRateZoneRollupValue $timeInHeartRateZone
   */
  public function setTimeInHeartRateZone(TimeInHeartRateZoneRollupValue $timeInHeartRateZone)
  {
    $this->timeInHeartRateZone = $timeInHeartRateZone;
  }
  /**
   * @return TimeInHeartRateZoneRollupValue
   */
  public function getTimeInHeartRateZone()
  {
    return $this->timeInHeartRateZone;
  }
  /**
   * Returned by default when rolling up data points from the `total-calories`
   * data type, or when requested explicitly using the `total-calories` rollup
   * type identifier.
   *
   * @param TotalCaloriesRollupValue $totalCalories
   */
  public function setTotalCalories(TotalCaloriesRollupValue $totalCalories)
  {
    $this->totalCalories = $totalCalories;
  }
  /**
   * @return TotalCaloriesRollupValue
   */
  public function getTotalCalories()
  {
    return $this->totalCalories;
  }
  /**
   * Returned by default when rolling up data points from the `weight` data
   * type, or when requested explicitly using the `weight` rollup type
   * identifier.
   *
   * @param WeightRollupValue $weight
   */
  public function setWeight(WeightRollupValue $weight)
  {
    $this->weight = $weight;
  }
  /**
   * @return WeightRollupValue
   */
  public function getWeight()
  {
    return $this->weight;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RollupDataPoint::class, 'Google_Service_GoogleHealthAPI_RollupDataPoint');
