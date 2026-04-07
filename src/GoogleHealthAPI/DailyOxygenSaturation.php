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

class DailyOxygenSaturation extends \Google\Model
{
  /**
   * Required. The average value of the oxygen saturation samples during the
   * sleep.
   *
   * @var 
   */
  public $averagePercentage;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  /**
   * Required. The lower bound of the confidence interval of oxygen saturation
   * samples during sleep.
   *
   * @var 
   */
  public $lowerBoundPercentage;
  /**
   * Optional. Standard deviation of the daily oxygen saturation averages from
   * the past 7-30 days.
   *
   * @var 
   */
  public $standardDeviationPercentage;
  /**
   * Required. The upper bound of the confidence interval of oxygen saturation
   * samples during sleep.
   *
   * @var 
   */
  public $upperBoundPercentage;

  public function setAveragePercentage($averagePercentage)
  {
    $this->averagePercentage = $averagePercentage;
  }
  public function getAveragePercentage()
  {
    return $this->averagePercentage;
  }
  /**
   * Required. Date (in user's timezone) of the daily oxygen saturation record.
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
  public function setLowerBoundPercentage($lowerBoundPercentage)
  {
    $this->lowerBoundPercentage = $lowerBoundPercentage;
  }
  public function getLowerBoundPercentage()
  {
    return $this->lowerBoundPercentage;
  }
  public function setStandardDeviationPercentage($standardDeviationPercentage)
  {
    $this->standardDeviationPercentage = $standardDeviationPercentage;
  }
  public function getStandardDeviationPercentage()
  {
    return $this->standardDeviationPercentage;
  }
  public function setUpperBoundPercentage($upperBoundPercentage)
  {
    $this->upperBoundPercentage = $upperBoundPercentage;
  }
  public function getUpperBoundPercentage()
  {
    return $this->upperBoundPercentage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DailyOxygenSaturation::class, 'Google_Service_GoogleHealthAPI_DailyOxygenSaturation');
