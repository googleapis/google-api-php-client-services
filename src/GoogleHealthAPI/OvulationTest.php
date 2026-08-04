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

class OvulationTest extends \Google\Model
{
  /**
   * Unspecified result.
   */
  public const RESULT_OVULATION_TEST_RESULT_UNSPECIFIED = 'OVULATION_TEST_RESULT_UNSPECIFIED';
  /**
   * Negative result.
   */
  public const RESULT_NEGATIVE = 'NEGATIVE';
  /**
   * Luteinizing hormone surge.
   */
  public const RESULT_LUTEINIZING_HORMONE_SURGE = 'LUTEINIZING_HORMONE_SURGE';
  /**
   * Estrogen surge.
   */
  public const RESULT_ESTROGEN_SURGE = 'ESTROGEN_SURGE';
  /**
   * Positive result.
   */
  public const RESULT_POSITIVE = 'POSITIVE';
  /**
   * Indeterminate result.
   */
  public const RESULT_INDETERMINATE = 'INDETERMINATE';
  /**
   * Required. The result of the ovulation test.
   *
   * @var string
   */
  public $result;
  protected $sampleTimeType = ObservationSampleTime::class;
  protected $sampleTimeDataType = '';

  /**
   * Required. The result of the ovulation test.
   *
   * Accepted values: OVULATION_TEST_RESULT_UNSPECIFIED, NEGATIVE,
   * LUTEINIZING_HORMONE_SURGE, ESTROGEN_SURGE, POSITIVE, INDETERMINATE
   *
   * @param self::RESULT_* $result
   */
  public function setResult($result)
  {
    $this->result = $result;
  }
  /**
   * @return self::RESULT_*
   */
  public function getResult()
  {
    return $this->result;
  }
  /**
   * Required. The time at which ovulation test was measured.
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
class_alias(OvulationTest::class, 'Google_Service_GoogleHealthAPI_OvulationTest');
