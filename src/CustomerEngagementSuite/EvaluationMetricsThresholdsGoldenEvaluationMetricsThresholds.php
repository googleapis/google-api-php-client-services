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

namespace Google\Service\CustomerEngagementSuite;

class EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholds extends \Google\Model
{
  protected $expectationLevelMetricsThresholdsType = EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholdsExpectationLevelMetricsThresholds::class;
  protected $expectationLevelMetricsThresholdsDataType = '';
  protected $turnLevelMetricsThresholdsType = EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholdsTurnLevelMetricsThresholds::class;
  protected $turnLevelMetricsThresholdsDataType = '';

  /**
   * Optional. The expectation level metrics thresholds.
   *
   * @param EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholdsExpectationLevelMetricsThresholds $expectationLevelMetricsThresholds
   */
  public function setExpectationLevelMetricsThresholds(EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholdsExpectationLevelMetricsThresholds $expectationLevelMetricsThresholds)
  {
    $this->expectationLevelMetricsThresholds = $expectationLevelMetricsThresholds;
  }
  /**
   * @return EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholdsExpectationLevelMetricsThresholds
   */
  public function getExpectationLevelMetricsThresholds()
  {
    return $this->expectationLevelMetricsThresholds;
  }
  /**
   * Optional. The turn level metrics thresholds.
   *
   * @param EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholdsTurnLevelMetricsThresholds $turnLevelMetricsThresholds
   */
  public function setTurnLevelMetricsThresholds(EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholdsTurnLevelMetricsThresholds $turnLevelMetricsThresholds)
  {
    $this->turnLevelMetricsThresholds = $turnLevelMetricsThresholds;
  }
  /**
   * @return EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholdsTurnLevelMetricsThresholds
   */
  public function getTurnLevelMetricsThresholds()
  {
    return $this->turnLevelMetricsThresholds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholds::class, 'Google_Service_CustomerEngagementSuite_EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholds');
