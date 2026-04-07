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

class VO2Max extends \Google\Model
{
  /**
   * Unspecified measurement method.
   */
  public const MEASUREMENT_METHOD_MEASUREMENT_METHOD_UNSPECIFIED = 'MEASUREMENT_METHOD_UNSPECIFIED';
  /**
   * Fitbit specific, measures VO2 max rate during a run.
   */
  public const MEASUREMENT_METHOD_FITBIT_RUN = 'FITBIT_RUN';
  /**
   * Google specific, measures VO2 max rate for a user based on their
   * demographic data.
   */
  public const MEASUREMENT_METHOD_GOOGLE_DEMOGRAPHIC = 'GOOGLE_DEMOGRAPHIC';
  /**
   * Run as far as possible for 12 minutes. Distance correlated with age and
   * gender translates to a VO2 max value.
   */
  public const MEASUREMENT_METHOD_COOPER_TEST = 'COOPER_TEST';
  /**
   * Maximum heart rate divided by the resting heart rate, with a multiplier
   * applied. Does not require any exercise.
   */
  public const MEASUREMENT_METHOD_HEART_RATE_RATIO = 'HEART_RATE_RATIO';
  /**
   * Measured by a medical device called metabolic cart.
   */
  public const MEASUREMENT_METHOD_METABOLIC_CART = 'METABOLIC_CART';
  /**
   * Continuous 20m back-and-forth runs with increasing difficulty, until
   * exhaustion.
   */
  public const MEASUREMENT_METHOD_MULTISTAGE_FITNESS_TEST = 'MULTISTAGE_FITNESS_TEST';
  /**
   * Measured using walking exercise.
   */
  public const MEASUREMENT_METHOD_ROCKPORT_FITNESS_TEST = 'ROCKPORT_FITNESS_TEST';
  /**
   * Healthkit specific, measures VO2 max rate by monitoring exercise to the
   * user’s physical limit. Similar to COOPER_TEST or MULTISTAGE_FITNESS_TEST.
   */
  public const MEASUREMENT_METHOD_MAX_EXERCISE = 'MAX_EXERCISE';
  /**
   * Healthkit specific, estimates VO2 max rate based on low-intensity exercise.
   * Similar to ROCKPORT_FITNESS_TEST.
   */
  public const MEASUREMENT_METHOD_PREDICTION_SUB_MAX_EXERCISE = 'PREDICTION_SUB_MAX_EXERCISE';
  /**
   * Healthkit specific, estimates VO2 max rate without any exercise. Similar to
   * HEART_RATE_RATIO.
   */
  public const MEASUREMENT_METHOD_PREDICTION_NON_EXERCISE = 'PREDICTION_NON_EXERCISE';
  /**
   * Use when the method is not covered in this enum.
   */
  public const MEASUREMENT_METHOD_OTHER = 'OTHER';
  /**
   * Optional. The method used to measure the VO2 max value.
   *
   * @var string
   */
  public $measurementMethod;
  protected $sampleTimeType = ObservationSampleTime::class;
  protected $sampleTimeDataType = '';
  /**
   * Required. VO2 max value measured as in ml consumed oxygen / kg of body
   * weight / min.
   *
   * @var 
   */
  public $vo2Max;

  /**
   * Optional. The method used to measure the VO2 max value.
   *
   * Accepted values: MEASUREMENT_METHOD_UNSPECIFIED, FITBIT_RUN,
   * GOOGLE_DEMOGRAPHIC, COOPER_TEST, HEART_RATE_RATIO, METABOLIC_CART,
   * MULTISTAGE_FITNESS_TEST, ROCKPORT_FITNESS_TEST, MAX_EXERCISE,
   * PREDICTION_SUB_MAX_EXERCISE, PREDICTION_NON_EXERCISE, OTHER
   *
   * @param self::MEASUREMENT_METHOD_* $measurementMethod
   */
  public function setMeasurementMethod($measurementMethod)
  {
    $this->measurementMethod = $measurementMethod;
  }
  /**
   * @return self::MEASUREMENT_METHOD_*
   */
  public function getMeasurementMethod()
  {
    return $this->measurementMethod;
  }
  /**
   * Required. The time at which VO2 max was measured.
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
  public function setVo2Max($vo2Max)
  {
    $this->vo2Max = $vo2Max;
  }
  public function getVo2Max()
  {
    return $this->vo2Max;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VO2Max::class, 'Google_Service_GoogleHealthAPI_VO2Max');
