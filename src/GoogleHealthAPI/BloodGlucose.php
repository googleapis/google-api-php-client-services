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

class BloodGlucose extends \Google\Model
{
  /**
   * Unspecified meal type.
   */
  public const MEAL_TYPE_MEAL_TYPE_UNSPECIFIED = 'MEAL_TYPE_UNSPECIFIED';
  /**
   * Breakfast.
   */
  public const MEAL_TYPE_BREAKFAST = 'BREAKFAST';
  /**
   * Lunch.
   */
  public const MEAL_TYPE_LUNCH = 'LUNCH';
  /**
   * Dinner.
   */
  public const MEAL_TYPE_DINNER = 'DINNER';
  /**
   * Snack.
   */
  public const MEAL_TYPE_SNACK = 'SNACK';
  /**
   * Unspecified measurement source.
   */
  public const MEASUREMENT_SOURCE_MEASUREMENT_SOURCE_UNSPECIFIED = 'MEASUREMENT_SOURCE_UNSPECIFIED';
  /**
   * Self-monitoring of blood glucose (Blood glucose meter)
   */
  public const MEASUREMENT_SOURCE_SELF_MONITORING_BLOOD_GLUCOSE = 'SELF_MONITORING_BLOOD_GLUCOSE';
  /**
   * Continuous glucose monitoring device
   */
  public const MEASUREMENT_SOURCE_CONTINUOUS_GLUCOSE_MONITORING = 'CONTINUOUS_GLUCOSE_MONITORING';
  /**
   * Laboratory test
   */
  public const MEASUREMENT_SOURCE_LAB_TEST = 'LAB_TEST';
  /**
   * Unspecified measurement timing.
   */
  public const MEASUREMENT_TIMING_MEASUREMENT_TIMING_UNSPECIFIED = 'MEASUREMENT_TIMING_UNSPECIFIED';
  /**
   * Measurement taken after meal.
   */
  public const MEASUREMENT_TIMING_AFTER_MEAL = 'AFTER_MEAL';
  /**
   * Measurement taken before meal.
   */
  public const MEASUREMENT_TIMING_BEFORE_MEAL = 'BEFORE_MEAL';
  /**
   * Measurement taken while fasting.
   */
  public const MEASUREMENT_TIMING_FASTING = 'FASTING';
  /**
   * General measurement (not associated with a meal or time of day).
   */
  public const MEASUREMENT_TIMING_GENERAL = 'GENERAL';
  /**
   * Measurement taken before bed.
   */
  public const MEASUREMENT_TIMING_BEFORE_BED = 'BEFORE_BED';
  /**
   * Measurement taken over night.
   */
  public const MEASUREMENT_TIMING_OVER_NIGHT = 'OVER_NIGHT';
  /**
   * Unspecified specimen.
   */
  public const SPECIMEN_SPECIMEN_UNSPECIFIED = 'SPECIMEN_UNSPECIFIED';
  /**
   * Capillary blood.
   */
  public const SPECIMEN_CAPILLARY_BLOOD = 'CAPILLARY_BLOOD';
  /**
   * Interstitial fluid.
   */
  public const SPECIMEN_INTERSTITIAL_FLUID = 'INTERSTITIAL_FLUID';
  /**
   * Plasma.
   */
  public const SPECIMEN_PLASMA = 'PLASMA';
  /**
   * Serum.
   */
  public const SPECIMEN_SERUM = 'SERUM';
  /**
   * Tears.
   */
  public const SPECIMEN_TEARS = 'TEARS';
  /**
   * Whole blood.
   */
  public const SPECIMEN_WHOLE_BLOOD = 'WHOLE_BLOOD';
  /**
   * Required. Blood glucose level concentration in mg/dL.
   *
   * @var 
   */
  public $bloodGlucoseMilligramsPerDeciliter;
  /**
   * Optional. Meal type of the measurement.
   *
   * @var string
   */
  public $mealType;
  /**
   * Optional. Source of the measurement.
   *
   * @var string
   */
  public $measurementSource;
  /**
   * Optional. Timing of the measurement.
   *
   * @var string
   */
  public $measurementTiming;
  /**
   * Optional. Standard free-form notes captured at manual logging.
   *
   * @var string
   */
  public $notes;
  protected $sampleTimeType = ObservationSampleTime::class;
  protected $sampleTimeDataType = '';
  /**
   * Optional. Type of body fluid used to measure the blood glucose.
   *
   * @var string
   */
  public $specimen;

  public function setBloodGlucoseMilligramsPerDeciliter($bloodGlucoseMilligramsPerDeciliter)
  {
    $this->bloodGlucoseMilligramsPerDeciliter = $bloodGlucoseMilligramsPerDeciliter;
  }
  public function getBloodGlucoseMilligramsPerDeciliter()
  {
    return $this->bloodGlucoseMilligramsPerDeciliter;
  }
  /**
   * Optional. Meal type of the measurement.
   *
   * Accepted values: MEAL_TYPE_UNSPECIFIED, BREAKFAST, LUNCH, DINNER, SNACK
   *
   * @param self::MEAL_TYPE_* $mealType
   */
  public function setMealType($mealType)
  {
    $this->mealType = $mealType;
  }
  /**
   * @return self::MEAL_TYPE_*
   */
  public function getMealType()
  {
    return $this->mealType;
  }
  /**
   * Optional. Source of the measurement.
   *
   * Accepted values: MEASUREMENT_SOURCE_UNSPECIFIED,
   * SELF_MONITORING_BLOOD_GLUCOSE, CONTINUOUS_GLUCOSE_MONITORING, LAB_TEST
   *
   * @param self::MEASUREMENT_SOURCE_* $measurementSource
   */
  public function setMeasurementSource($measurementSource)
  {
    $this->measurementSource = $measurementSource;
  }
  /**
   * @return self::MEASUREMENT_SOURCE_*
   */
  public function getMeasurementSource()
  {
    return $this->measurementSource;
  }
  /**
   * Optional. Timing of the measurement.
   *
   * Accepted values: MEASUREMENT_TIMING_UNSPECIFIED, AFTER_MEAL, BEFORE_MEAL,
   * FASTING, GENERAL, BEFORE_BED, OVER_NIGHT
   *
   * @param self::MEASUREMENT_TIMING_* $measurementTiming
   */
  public function setMeasurementTiming($measurementTiming)
  {
    $this->measurementTiming = $measurementTiming;
  }
  /**
   * @return self::MEASUREMENT_TIMING_*
   */
  public function getMeasurementTiming()
  {
    return $this->measurementTiming;
  }
  /**
   * Optional. Standard free-form notes captured at manual logging.
   *
   * @param string $notes
   */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /**
   * @return string
   */
  public function getNotes()
  {
    return $this->notes;
  }
  /**
   * Required. The time at which blood glucose was measured.
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
  /**
   * Optional. Type of body fluid used to measure the blood glucose.
   *
   * Accepted values: SPECIMEN_UNSPECIFIED, CAPILLARY_BLOOD, INTERSTITIAL_FLUID,
   * PLASMA, SERUM, TEARS, WHOLE_BLOOD
   *
   * @param self::SPECIMEN_* $specimen
   */
  public function setSpecimen($specimen)
  {
    $this->specimen = $specimen;
  }
  /**
   * @return self::SPECIMEN_*
   */
  public function getSpecimen()
  {
    return $this->specimen;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BloodGlucose::class, 'Google_Service_GoogleHealthAPI_BloodGlucose');
