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

class EvaluationMetricsThresholds extends \Google\Model
{
  /**
   * Unspecified hallucination metric behavior.
   */
  public const GOLDEN_HALLUCINATION_METRIC_BEHAVIOR_HALLUCINATION_METRIC_BEHAVIOR_UNSPECIFIED = 'HALLUCINATION_METRIC_BEHAVIOR_UNSPECIFIED';
  /**
   * Disable hallucination metric.
   */
  public const GOLDEN_HALLUCINATION_METRIC_BEHAVIOR_DISABLED = 'DISABLED';
  /**
   * Enable hallucination metric.
   */
  public const GOLDEN_HALLUCINATION_METRIC_BEHAVIOR_ENABLED = 'ENABLED';
  /**
   * Unspecified hallucination metric behavior.
   */
  public const HALLUCINATION_METRIC_BEHAVIOR_HALLUCINATION_METRIC_BEHAVIOR_UNSPECIFIED = 'HALLUCINATION_METRIC_BEHAVIOR_UNSPECIFIED';
  /**
   * Disable hallucination metric.
   */
  public const HALLUCINATION_METRIC_BEHAVIOR_DISABLED = 'DISABLED';
  /**
   * Enable hallucination metric.
   */
  public const HALLUCINATION_METRIC_BEHAVIOR_ENABLED = 'ENABLED';
  /**
   * Unspecified hallucination metric behavior.
   */
  public const SCENARIO_HALLUCINATION_METRIC_BEHAVIOR_HALLUCINATION_METRIC_BEHAVIOR_UNSPECIFIED = 'HALLUCINATION_METRIC_BEHAVIOR_UNSPECIFIED';
  /**
   * Disable hallucination metric.
   */
  public const SCENARIO_HALLUCINATION_METRIC_BEHAVIOR_DISABLED = 'DISABLED';
  /**
   * Enable hallucination metric.
   */
  public const SCENARIO_HALLUCINATION_METRIC_BEHAVIOR_ENABLED = 'ENABLED';
  protected $goldenEvaluationMetricsThresholdsType = EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholds::class;
  protected $goldenEvaluationMetricsThresholdsDataType = '';
  /**
   * Optional. The hallucination metric behavior for golden evaluations.
   *
   * @var string
   */
  public $goldenHallucinationMetricBehavior;
  /**
   * Optional. Deprecated: Use `golden_hallucination_metric_behavior` instead.
   * The hallucination metric behavior is currently used for golden evaluations.
   *
   * @deprecated
   * @var string
   */
  public $hallucinationMetricBehavior;
  /**
   * Optional. The hallucination metric behavior for scenario evaluations.
   *
   * @var string
   */
  public $scenarioHallucinationMetricBehavior;

  /**
   * Optional. The golden evaluation metrics thresholds.
   *
   * @param EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholds $goldenEvaluationMetricsThresholds
   */
  public function setGoldenEvaluationMetricsThresholds(EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholds $goldenEvaluationMetricsThresholds)
  {
    $this->goldenEvaluationMetricsThresholds = $goldenEvaluationMetricsThresholds;
  }
  /**
   * @return EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholds
   */
  public function getGoldenEvaluationMetricsThresholds()
  {
    return $this->goldenEvaluationMetricsThresholds;
  }
  /**
   * Optional. The hallucination metric behavior for golden evaluations.
   *
   * Accepted values: HALLUCINATION_METRIC_BEHAVIOR_UNSPECIFIED, DISABLED,
   * ENABLED
   *
   * @param self::GOLDEN_HALLUCINATION_METRIC_BEHAVIOR_* $goldenHallucinationMetricBehavior
   */
  public function setGoldenHallucinationMetricBehavior($goldenHallucinationMetricBehavior)
  {
    $this->goldenHallucinationMetricBehavior = $goldenHallucinationMetricBehavior;
  }
  /**
   * @return self::GOLDEN_HALLUCINATION_METRIC_BEHAVIOR_*
   */
  public function getGoldenHallucinationMetricBehavior()
  {
    return $this->goldenHallucinationMetricBehavior;
  }
  /**
   * Optional. Deprecated: Use `golden_hallucination_metric_behavior` instead.
   * The hallucination metric behavior is currently used for golden evaluations.
   *
   * Accepted values: HALLUCINATION_METRIC_BEHAVIOR_UNSPECIFIED, DISABLED,
   * ENABLED
   *
   * @deprecated
   * @param self::HALLUCINATION_METRIC_BEHAVIOR_* $hallucinationMetricBehavior
   */
  public function setHallucinationMetricBehavior($hallucinationMetricBehavior)
  {
    $this->hallucinationMetricBehavior = $hallucinationMetricBehavior;
  }
  /**
   * @deprecated
   * @return self::HALLUCINATION_METRIC_BEHAVIOR_*
   */
  public function getHallucinationMetricBehavior()
  {
    return $this->hallucinationMetricBehavior;
  }
  /**
   * Optional. The hallucination metric behavior for scenario evaluations.
   *
   * Accepted values: HALLUCINATION_METRIC_BEHAVIOR_UNSPECIFIED, DISABLED,
   * ENABLED
   *
   * @param self::SCENARIO_HALLUCINATION_METRIC_BEHAVIOR_* $scenarioHallucinationMetricBehavior
   */
  public function setScenarioHallucinationMetricBehavior($scenarioHallucinationMetricBehavior)
  {
    $this->scenarioHallucinationMetricBehavior = $scenarioHallucinationMetricBehavior;
  }
  /**
   * @return self::SCENARIO_HALLUCINATION_METRIC_BEHAVIOR_*
   */
  public function getScenarioHallucinationMetricBehavior()
  {
    return $this->scenarioHallucinationMetricBehavior;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EvaluationMetricsThresholds::class, 'Google_Service_CustomerEngagementSuite_EvaluationMetricsThresholds');
