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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1LossAnalysisConfig extends \Google\Model
{
  /**
   * Required. The candidate model/agent to analyze (e.g., "gemini-3.0-pro").
   * This targets the specific CandidateResult within the EvaluationResult.
   *
   * @var string
   */
  public $candidate;
  /**
   * Required. The metric to analyze (e.g., "tool_use_quality"). This filters
   * the EvaluationItems in the EvalSet to only those where
   * EvaluationResult.metric matches this value.
   *
   * @var string
   */
  public $metric;

  /**
   * Required. The candidate model/agent to analyze (e.g., "gemini-3.0-pro").
   * This targets the specific CandidateResult within the EvaluationResult.
   *
   * @param string $candidate
   */
  public function setCandidate($candidate)
  {
    $this->candidate = $candidate;
  }
  /**
   * @return string
   */
  public function getCandidate()
  {
    return $this->candidate;
  }
  /**
   * Required. The metric to analyze (e.g., "tool_use_quality"). This filters
   * the EvaluationItems in the EvalSet to only those where
   * EvaluationResult.metric matches this value.
   *
   * @param string $metric
   */
  public function setMetric($metric)
  {
    $this->metric = $metric;
  }
  /**
   * @return string
   */
  public function getMetric()
  {
    return $this->metric;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1LossAnalysisConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1LossAnalysisConfig');
