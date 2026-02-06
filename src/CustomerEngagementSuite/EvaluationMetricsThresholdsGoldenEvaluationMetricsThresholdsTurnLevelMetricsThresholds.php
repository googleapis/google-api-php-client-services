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

class EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholdsTurnLevelMetricsThresholds extends \Google\Model
{
  /**
   * Metric unspecified. Defaults to TEXT.
   */
  public const SEMANTIC_SIMILARITY_CHANNEL_SEMANTIC_SIMILARITY_CHANNEL_UNSPECIFIED = 'SEMANTIC_SIMILARITY_CHANNEL_UNSPECIFIED';
  /**
   * Use text semantic similarity.
   */
  public const SEMANTIC_SIMILARITY_CHANNEL_TEXT = 'TEXT';
  /**
   * Use audio semantic similarity.
   */
  public const SEMANTIC_SIMILARITY_CHANNEL_AUDIO = 'AUDIO';
  /**
   * Optional. The success threshold for overall tool invocation correctness.
   * Must be a float between 0 and 1. Default is 1.0.
   *
   * @var float
   */
  public $overallToolInvocationCorrectnessThreshold;
  /**
   * Optional. The semantic similarity channel to use for evaluation.
   *
   * @var string
   */
  public $semanticSimilarityChannel;
  /**
   * Optional. The success threshold for semantic similarity. Must be an integer
   * between 0 and 4. Default is >= 3.
   *
   * @var int
   */
  public $semanticSimilaritySuccessThreshold;

  /**
   * Optional. The success threshold for overall tool invocation correctness.
   * Must be a float between 0 and 1. Default is 1.0.
   *
   * @param float $overallToolInvocationCorrectnessThreshold
   */
  public function setOverallToolInvocationCorrectnessThreshold($overallToolInvocationCorrectnessThreshold)
  {
    $this->overallToolInvocationCorrectnessThreshold = $overallToolInvocationCorrectnessThreshold;
  }
  /**
   * @return float
   */
  public function getOverallToolInvocationCorrectnessThreshold()
  {
    return $this->overallToolInvocationCorrectnessThreshold;
  }
  /**
   * Optional. The semantic similarity channel to use for evaluation.
   *
   * Accepted values: SEMANTIC_SIMILARITY_CHANNEL_UNSPECIFIED, TEXT, AUDIO
   *
   * @param self::SEMANTIC_SIMILARITY_CHANNEL_* $semanticSimilarityChannel
   */
  public function setSemanticSimilarityChannel($semanticSimilarityChannel)
  {
    $this->semanticSimilarityChannel = $semanticSimilarityChannel;
  }
  /**
   * @return self::SEMANTIC_SIMILARITY_CHANNEL_*
   */
  public function getSemanticSimilarityChannel()
  {
    return $this->semanticSimilarityChannel;
  }
  /**
   * Optional. The success threshold for semantic similarity. Must be an integer
   * between 0 and 4. Default is >= 3.
   *
   * @param int $semanticSimilaritySuccessThreshold
   */
  public function setSemanticSimilaritySuccessThreshold($semanticSimilaritySuccessThreshold)
  {
    $this->semanticSimilaritySuccessThreshold = $semanticSimilaritySuccessThreshold;
  }
  /**
   * @return int
   */
  public function getSemanticSimilaritySuccessThreshold()
  {
    return $this->semanticSimilaritySuccessThreshold;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholdsTurnLevelMetricsThresholds::class, 'Google_Service_CustomerEngagementSuite_EvaluationMetricsThresholdsGoldenEvaluationMetricsThresholdsTurnLevelMetricsThresholds');
