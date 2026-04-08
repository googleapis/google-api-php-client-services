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

class DataPoint extends \Google\Model
{
  protected $activeMinutesType = ActiveMinutes::class;
  protected $activeMinutesDataType = '';
  protected $activeZoneMinutesType = ActiveZoneMinutes::class;
  protected $activeZoneMinutesDataType = '';
  protected $activityLevelType = ActivityLevel::class;
  protected $activityLevelDataType = '';
  protected $altitudeType = Altitude::class;
  protected $altitudeDataType = '';
  protected $bodyFatType = BodyFat::class;
  protected $bodyFatDataType = '';
  protected $dailyHeartRateVariabilityType = DailyHeartRateVariability::class;
  protected $dailyHeartRateVariabilityDataType = '';
  protected $dailyHeartRateZonesType = DailyHeartRateZones::class;
  protected $dailyHeartRateZonesDataType = '';
  protected $dailyOxygenSaturationType = DailyOxygenSaturation::class;
  protected $dailyOxygenSaturationDataType = '';
  protected $dailyRespiratoryRateType = DailyRespiratoryRate::class;
  protected $dailyRespiratoryRateDataType = '';
  protected $dailyRestingHeartRateType = DailyRestingHeartRate::class;
  protected $dailyRestingHeartRateDataType = '';
  protected $dailySleepTemperatureDerivationsType = DailySleepTemperatureDerivations::class;
  protected $dailySleepTemperatureDerivationsDataType = '';
  protected $dailyVo2MaxType = DailyVO2Max::class;
  protected $dailyVo2MaxDataType = '';
  protected $dataSourceType = DataSource::class;
  protected $dataSourceDataType = '';
  protected $distanceType = Distance::class;
  protected $distanceDataType = '';
  protected $exerciseType = Exercise::class;
  protected $exerciseDataType = '';
  protected $floorsType = Floors::class;
  protected $floorsDataType = '';
  protected $heartRateType = HeartRate::class;
  protected $heartRateDataType = '';
  protected $heartRateVariabilityType = HeartRateVariability::class;
  protected $heartRateVariabilityDataType = '';
  protected $hydrationLogType = HydrationLog::class;
  protected $hydrationLogDataType = '';
  /**
   * Identifier. Data point name, only supported for the subset of identifiable
   * data types. For the majority of the data types, individual data points do
   * not need to be identified and this field would be empty. Format:
   * `users/{user}/dataTypes/{data_type}/dataPoints/{data_point}` Example: `user
   * s/abcd1234/dataTypes/sleep/dataPoints/a1b2c3d4-e5f6-7890-1234-567890abcdef`
   * The `{user}` ID is a system-generated identifier, as described in
   * Identity.health_user_id. The `{data_type}` ID corresponds to the kebab-case
   * version of the field names in the DataPoint data union field, e.g. `total-
   * calories` for the `total_calories` field. The `{data_point}` ID can be
   * client-provided or system-generated. If client-provided, it must be a
   * string of 4-63 characters, containing only lowercase letters, numbers, and
   * hyphens.
   *
   * @var string
   */
  public $name;
  protected $oxygenSaturationType = OxygenSaturation::class;
  protected $oxygenSaturationDataType = '';
  protected $respiratoryRateSleepSummaryType = RespiratoryRateSleepSummary::class;
  protected $respiratoryRateSleepSummaryDataType = '';
  protected $runVo2MaxType = RunVO2Max::class;
  protected $runVo2MaxDataType = '';
  protected $sedentaryPeriodType = SedentaryPeriod::class;
  protected $sedentaryPeriodDataType = '';
  protected $sleepType = Sleep::class;
  protected $sleepDataType = '';
  protected $stepsType = Steps::class;
  protected $stepsDataType = '';
  protected $timeInHeartRateZoneType = TimeInHeartRateZone::class;
  protected $timeInHeartRateZoneDataType = '';
  protected $vo2MaxType = VO2Max::class;
  protected $vo2MaxDataType = '';
  protected $weightType = Weight::class;
  protected $weightDataType = '';

  /**
   * Optional. Data for points in the `active-minutes` interval data type
   * collection.
   *
   * @param ActiveMinutes $activeMinutes
   */
  public function setActiveMinutes(ActiveMinutes $activeMinutes)
  {
    $this->activeMinutes = $activeMinutes;
  }
  /**
   * @return ActiveMinutes
   */
  public function getActiveMinutes()
  {
    return $this->activeMinutes;
  }
  /**
   * Optional. Data for points in the `active-zone-minutes` interval data type
   * collection, measured in minutes.
   *
   * @param ActiveZoneMinutes $activeZoneMinutes
   */
  public function setActiveZoneMinutes(ActiveZoneMinutes $activeZoneMinutes)
  {
    $this->activeZoneMinutes = $activeZoneMinutes;
  }
  /**
   * @return ActiveZoneMinutes
   */
  public function getActiveZoneMinutes()
  {
    return $this->activeZoneMinutes;
  }
  /**
   * Optional. Data for points in the `activity-level` daily data type
   * collection.
   *
   * @param ActivityLevel $activityLevel
   */
  public function setActivityLevel(ActivityLevel $activityLevel)
  {
    $this->activityLevel = $activityLevel;
  }
  /**
   * @return ActivityLevel
   */
  public function getActivityLevel()
  {
    return $this->activityLevel;
  }
  /**
   * Optional. Data for points in the `altitude` interval data type collection.
   *
   * @param Altitude $altitude
   */
  public function setAltitude(Altitude $altitude)
  {
    $this->altitude = $altitude;
  }
  /**
   * @return Altitude
   */
  public function getAltitude()
  {
    return $this->altitude;
  }
  /**
   * Optional. Data for points in the `body-fat` sample data type collection.
   *
   * @param BodyFat $bodyFat
   */
  public function setBodyFat(BodyFat $bodyFat)
  {
    $this->bodyFat = $bodyFat;
  }
  /**
   * @return BodyFat
   */
  public function getBodyFat()
  {
    return $this->bodyFat;
  }
  /**
   * Optional. Data for points in the `daily-heart-rate-variability` daily data
   * type collection.
   *
   * @param DailyHeartRateVariability $dailyHeartRateVariability
   */
  public function setDailyHeartRateVariability(DailyHeartRateVariability $dailyHeartRateVariability)
  {
    $this->dailyHeartRateVariability = $dailyHeartRateVariability;
  }
  /**
   * @return DailyHeartRateVariability
   */
  public function getDailyHeartRateVariability()
  {
    return $this->dailyHeartRateVariability;
  }
  /**
   * Optional. Data for points in the `daily-heart-rate-zones` daily data type
   * collection.
   *
   * @param DailyHeartRateZones $dailyHeartRateZones
   */
  public function setDailyHeartRateZones(DailyHeartRateZones $dailyHeartRateZones)
  {
    $this->dailyHeartRateZones = $dailyHeartRateZones;
  }
  /**
   * @return DailyHeartRateZones
   */
  public function getDailyHeartRateZones()
  {
    return $this->dailyHeartRateZones;
  }
  /**
   * Optional. Data for points in the `daily-oxygen-saturation` daily data type
   * collection.
   *
   * @param DailyOxygenSaturation $dailyOxygenSaturation
   */
  public function setDailyOxygenSaturation(DailyOxygenSaturation $dailyOxygenSaturation)
  {
    $this->dailyOxygenSaturation = $dailyOxygenSaturation;
  }
  /**
   * @return DailyOxygenSaturation
   */
  public function getDailyOxygenSaturation()
  {
    return $this->dailyOxygenSaturation;
  }
  /**
   * Optional. Data for points in the `daily-respiratory-rate` daily data type
   * collection.
   *
   * @param DailyRespiratoryRate $dailyRespiratoryRate
   */
  public function setDailyRespiratoryRate(DailyRespiratoryRate $dailyRespiratoryRate)
  {
    $this->dailyRespiratoryRate = $dailyRespiratoryRate;
  }
  /**
   * @return DailyRespiratoryRate
   */
  public function getDailyRespiratoryRate()
  {
    return $this->dailyRespiratoryRate;
  }
  /**
   * Optional. Data for points in the `daily-resting-heart-rate` daily data type
   * collection.
   *
   * @param DailyRestingHeartRate $dailyRestingHeartRate
   */
  public function setDailyRestingHeartRate(DailyRestingHeartRate $dailyRestingHeartRate)
  {
    $this->dailyRestingHeartRate = $dailyRestingHeartRate;
  }
  /**
   * @return DailyRestingHeartRate
   */
  public function getDailyRestingHeartRate()
  {
    return $this->dailyRestingHeartRate;
  }
  /**
   * Optional. Data for points in the `daily-sleep-temperature-derivations`
   * daily data type collection.
   *
   * @param DailySleepTemperatureDerivations $dailySleepTemperatureDerivations
   */
  public function setDailySleepTemperatureDerivations(DailySleepTemperatureDerivations $dailySleepTemperatureDerivations)
  {
    $this->dailySleepTemperatureDerivations = $dailySleepTemperatureDerivations;
  }
  /**
   * @return DailySleepTemperatureDerivations
   */
  public function getDailySleepTemperatureDerivations()
  {
    return $this->dailySleepTemperatureDerivations;
  }
  /**
   * Optional. Data for points in the `daily-vo2-max` daily data type
   * collection.
   *
   * @param DailyVO2Max $dailyVo2Max
   */
  public function setDailyVo2Max(DailyVO2Max $dailyVo2Max)
  {
    $this->dailyVo2Max = $dailyVo2Max;
  }
  /**
   * @return DailyVO2Max
   */
  public function getDailyVo2Max()
  {
    return $this->dailyVo2Max;
  }
  /**
   * Optional. Data source information for the metric
   *
   * @param DataSource $dataSource
   */
  public function setDataSource(DataSource $dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /**
   * @return DataSource
   */
  public function getDataSource()
  {
    return $this->dataSource;
  }
  /**
   * Optional. Data for points in the `distance` interval data type collection.
   *
   * @param Distance $distance
   */
  public function setDistance(Distance $distance)
  {
    $this->distance = $distance;
  }
  /**
   * @return Distance
   */
  public function getDistance()
  {
    return $this->distance;
  }
  /**
   * Optional. Data for points in the `exercise` session data type collection.
   *
   * @param Exercise $exercise
   */
  public function setExercise(Exercise $exercise)
  {
    $this->exercise = $exercise;
  }
  /**
   * @return Exercise
   */
  public function getExercise()
  {
    return $this->exercise;
  }
  /**
   * Optional. Data for points in the `floors` interval data type collection.
   *
   * @param Floors $floors
   */
  public function setFloors(Floors $floors)
  {
    $this->floors = $floors;
  }
  /**
   * @return Floors
   */
  public function getFloors()
  {
    return $this->floors;
  }
  /**
   * Optional. Data for points in the `heart-rate` sample data type collection.
   *
   * @param HeartRate $heartRate
   */
  public function setHeartRate(HeartRate $heartRate)
  {
    $this->heartRate = $heartRate;
  }
  /**
   * @return HeartRate
   */
  public function getHeartRate()
  {
    return $this->heartRate;
  }
  /**
   * Optional. Data for points in the `heart-rate-variability` sample data type
   * collection.
   *
   * @param HeartRateVariability $heartRateVariability
   */
  public function setHeartRateVariability(HeartRateVariability $heartRateVariability)
  {
    $this->heartRateVariability = $heartRateVariability;
  }
  /**
   * @return HeartRateVariability
   */
  public function getHeartRateVariability()
  {
    return $this->heartRateVariability;
  }
  /**
   * Optional. Data for points in the `hydration-log` session data type
   * collection.
   *
   * @param HydrationLog $hydrationLog
   */
  public function setHydrationLog(HydrationLog $hydrationLog)
  {
    $this->hydrationLog = $hydrationLog;
  }
  /**
   * @return HydrationLog
   */
  public function getHydrationLog()
  {
    return $this->hydrationLog;
  }
  /**
   * Identifier. Data point name, only supported for the subset of identifiable
   * data types. For the majority of the data types, individual data points do
   * not need to be identified and this field would be empty. Format:
   * `users/{user}/dataTypes/{data_type}/dataPoints/{data_point}` Example: `user
   * s/abcd1234/dataTypes/sleep/dataPoints/a1b2c3d4-e5f6-7890-1234-567890abcdef`
   * The `{user}` ID is a system-generated identifier, as described in
   * Identity.health_user_id. The `{data_type}` ID corresponds to the kebab-case
   * version of the field names in the DataPoint data union field, e.g. `total-
   * calories` for the `total_calories` field. The `{data_point}` ID can be
   * client-provided or system-generated. If client-provided, it must be a
   * string of 4-63 characters, containing only lowercase letters, numbers, and
   * hyphens.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Optional. Data for points in the `oxygen-saturation` sample data type
   * collection.
   *
   * @param OxygenSaturation $oxygenSaturation
   */
  public function setOxygenSaturation(OxygenSaturation $oxygenSaturation)
  {
    $this->oxygenSaturation = $oxygenSaturation;
  }
  /**
   * @return OxygenSaturation
   */
  public function getOxygenSaturation()
  {
    return $this->oxygenSaturation;
  }
  /**
   * Optional. Data for points in the `respiratory-rate-sleep-summary` sample
   * data type collection.
   *
   * @param RespiratoryRateSleepSummary $respiratoryRateSleepSummary
   */
  public function setRespiratoryRateSleepSummary(RespiratoryRateSleepSummary $respiratoryRateSleepSummary)
  {
    $this->respiratoryRateSleepSummary = $respiratoryRateSleepSummary;
  }
  /**
   * @return RespiratoryRateSleepSummary
   */
  public function getRespiratoryRateSleepSummary()
  {
    return $this->respiratoryRateSleepSummary;
  }
  /**
   * Optional. Data for points in the `run-vo2-max` sample data type collection.
   *
   * @param RunVO2Max $runVo2Max
   */
  public function setRunVo2Max(RunVO2Max $runVo2Max)
  {
    $this->runVo2Max = $runVo2Max;
  }
  /**
   * @return RunVO2Max
   */
  public function getRunVo2Max()
  {
    return $this->runVo2Max;
  }
  /**
   * Optional. Data for points in the `sedentary-period` interval data type
   * collection.
   *
   * @param SedentaryPeriod $sedentaryPeriod
   */
  public function setSedentaryPeriod(SedentaryPeriod $sedentaryPeriod)
  {
    $this->sedentaryPeriod = $sedentaryPeriod;
  }
  /**
   * @return SedentaryPeriod
   */
  public function getSedentaryPeriod()
  {
    return $this->sedentaryPeriod;
  }
  /**
   * Optional. Data for points in the `sleep` session data type collection.
   *
   * @param Sleep $sleep
   */
  public function setSleep(Sleep $sleep)
  {
    $this->sleep = $sleep;
  }
  /**
   * @return Sleep
   */
  public function getSleep()
  {
    return $this->sleep;
  }
  /**
   * Optional. Data for points in the `steps` interval data type collection.
   *
   * @param Steps $steps
   */
  public function setSteps(Steps $steps)
  {
    $this->steps = $steps;
  }
  /**
   * @return Steps
   */
  public function getSteps()
  {
    return $this->steps;
  }
  /**
   * Optional. Data for points in the `time-in-heart-rate-zone` interval data
   * type collection.
   *
   * @param TimeInHeartRateZone $timeInHeartRateZone
   */
  public function setTimeInHeartRateZone(TimeInHeartRateZone $timeInHeartRateZone)
  {
    $this->timeInHeartRateZone = $timeInHeartRateZone;
  }
  /**
   * @return TimeInHeartRateZone
   */
  public function getTimeInHeartRateZone()
  {
    return $this->timeInHeartRateZone;
  }
  /**
   * Optional. Data for points in the `vo2-max` sample data type collection.
   *
   * @param VO2Max $vo2Max
   */
  public function setVo2Max(VO2Max $vo2Max)
  {
    $this->vo2Max = $vo2Max;
  }
  /**
   * @return VO2Max
   */
  public function getVo2Max()
  {
    return $this->vo2Max;
  }
  /**
   * Optional. Data for points in the `weight` sample data type collection.
   *
   * @param Weight $weight
   */
  public function setWeight(Weight $weight)
  {
    $this->weight = $weight;
  }
  /**
   * @return Weight
   */
  public function getWeight()
  {
    return $this->weight;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DataPoint::class, 'Google_Service_GoogleHealthAPI_DataPoint');
