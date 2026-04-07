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

class DailyVO2Max extends \Google\Model
{
  /**
   * Unspecified cardio fitness level.
   */
  public const CARDIO_FITNESS_LEVEL_CARDIO_FITNESS_LEVEL_UNSPECIFIED = 'CARDIO_FITNESS_LEVEL_UNSPECIFIED';
  /**
   * Poor cardio fitness level.
   */
  public const CARDIO_FITNESS_LEVEL_POOR = 'POOR';
  /**
   * Fair cardio fitness level.
   */
  public const CARDIO_FITNESS_LEVEL_FAIR = 'FAIR';
  /**
   * Average cardio fitness level.
   */
  public const CARDIO_FITNESS_LEVEL_AVERAGE = 'AVERAGE';
  /**
   * Good cardio fitness level.
   */
  public const CARDIO_FITNESS_LEVEL_GOOD = 'GOOD';
  /**
   * Very good cardio fitness level.
   */
  public const CARDIO_FITNESS_LEVEL_VERY_GOOD = 'VERY_GOOD';
  /**
   * Excellent cardio fitness level.
   */
  public const CARDIO_FITNESS_LEVEL_EXCELLENT = 'EXCELLENT';
  /**
   * Optional. Represents the user's cardio fitness level based on their VO2
   * max.
   *
   * @var string
   */
  public $cardioFitnessLevel;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  /**
   * Optional. An estimated field is added to indicate when the confidence has
   * decreased sufficiently to consider the value an estimation.
   *
   * @var bool
   */
  public $estimated;
  /**
   * Required. Daily VO2 max value measured as in ml consumed oxygen / kg of
   * body weight / min.
   *
   * @var 
   */
  public $vo2Max;
  /**
   * Optional. The covariance of the VO2 max value.
   *
   * @var 
   */
  public $vo2MaxCovariance;

  /**
   * Optional. Represents the user's cardio fitness level based on their VO2
   * max.
   *
   * Accepted values: CARDIO_FITNESS_LEVEL_UNSPECIFIED, POOR, FAIR, AVERAGE,
   * GOOD, VERY_GOOD, EXCELLENT
   *
   * @param self::CARDIO_FITNESS_LEVEL_* $cardioFitnessLevel
   */
  public function setCardioFitnessLevel($cardioFitnessLevel)
  {
    $this->cardioFitnessLevel = $cardioFitnessLevel;
  }
  /**
   * @return self::CARDIO_FITNESS_LEVEL_*
   */
  public function getCardioFitnessLevel()
  {
    return $this->cardioFitnessLevel;
  }
  /**
   * Required. The date for which the Daily VO2 max was measured.
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
  /**
   * Optional. An estimated field is added to indicate when the confidence has
   * decreased sufficiently to consider the value an estimation.
   *
   * @param bool $estimated
   */
  public function setEstimated($estimated)
  {
    $this->estimated = $estimated;
  }
  /**
   * @return bool
   */
  public function getEstimated()
  {
    return $this->estimated;
  }
  public function setVo2Max($vo2Max)
  {
    $this->vo2Max = $vo2Max;
  }
  public function getVo2Max()
  {
    return $this->vo2Max;
  }
  public function setVo2MaxCovariance($vo2MaxCovariance)
  {
    $this->vo2MaxCovariance = $vo2MaxCovariance;
  }
  public function getVo2MaxCovariance()
  {
    return $this->vo2MaxCovariance;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DailyVO2Max::class, 'Google_Service_GoogleHealthAPI_DailyVO2Max');
