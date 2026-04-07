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

class DailyRestingHeartRateMetadata extends \Google\Model
{
  /**
   * The calculation method is unspecified.
   */
  public const CALCULATION_METHOD_CALCULATION_METHOD_UNSPECIFIED = 'CALCULATION_METHOD_UNSPECIFIED';
  /**
   * The resting heart rate is calculated using the sleep data.
   */
  public const CALCULATION_METHOD_WITH_SLEEP = 'WITH_SLEEP';
  /**
   * The resting heart rate is calculated using only awake data.
   */
  public const CALCULATION_METHOD_ONLY_WITH_AWAKE_DATA = 'ONLY_WITH_AWAKE_DATA';
  /**
   * Required. The method used to calculate the resting heart rate.
   *
   * @var string
   */
  public $calculationMethod;

  /**
   * Required. The method used to calculate the resting heart rate.
   *
   * Accepted values: CALCULATION_METHOD_UNSPECIFIED, WITH_SLEEP,
   * ONLY_WITH_AWAKE_DATA
   *
   * @param self::CALCULATION_METHOD_* $calculationMethod
   */
  public function setCalculationMethod($calculationMethod)
  {
    $this->calculationMethod = $calculationMethod;
  }
  /**
   * @return self::CALCULATION_METHOD_*
   */
  public function getCalculationMethod()
  {
    return $this->calculationMethod;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DailyRestingHeartRateMetadata::class, 'Google_Service_GoogleHealthAPI_DailyRestingHeartRateMetadata');
