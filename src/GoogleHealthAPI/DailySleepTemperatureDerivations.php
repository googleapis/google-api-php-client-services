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

class DailySleepTemperatureDerivations extends \Google\Model
{
  /**
   * Optional. The user's baseline skin temperature. It is the median of the
   * user's nightly skin temperature over the past 30 days.
   *
   * @var 
   */
  public $baselineTemperatureCelsius;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  /**
   * Required. The user's nightly skin temperature. It is the mean of skin
   * temperature samples taken from the user’s sleep.
   *
   * @var 
   */
  public $nightlyTemperatureCelsius;
  /**
   * Optional. The standard deviation of the user’s relative nightly skin
   * temperature (temperature - baseline) over the past 30 days.
   *
   * @var 
   */
  public $relativeNightlyStddev30dCelsius;

  public function setBaselineTemperatureCelsius($baselineTemperatureCelsius)
  {
    $this->baselineTemperatureCelsius = $baselineTemperatureCelsius;
  }
  public function getBaselineTemperatureCelsius()
  {
    return $this->baselineTemperatureCelsius;
  }
  /**
   * Required. Date for which the sleep temperature derivations are calculated.
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
  public function setNightlyTemperatureCelsius($nightlyTemperatureCelsius)
  {
    $this->nightlyTemperatureCelsius = $nightlyTemperatureCelsius;
  }
  public function getNightlyTemperatureCelsius()
  {
    return $this->nightlyTemperatureCelsius;
  }
  public function setRelativeNightlyStddev30dCelsius($relativeNightlyStddev30dCelsius)
  {
    $this->relativeNightlyStddev30dCelsius = $relativeNightlyStddev30dCelsius;
  }
  public function getRelativeNightlyStddev30dCelsius()
  {
    return $this->relativeNightlyStddev30dCelsius;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DailySleepTemperatureDerivations::class, 'Google_Service_GoogleHealthAPI_DailySleepTemperatureDerivations');
