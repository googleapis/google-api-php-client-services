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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1alphaAlphaEvolveProgramEvaluation extends \Google\Model
{
  protected $insightsType = GoogleCloudDiscoveryengineV1alphaAlphaEvolveEvaluationInsights::class;
  protected $insightsDataType = '';
  protected $scoresType = GoogleCloudDiscoveryengineV1alphaAlphaEvolveEvaluationScores::class;
  protected $scoresDataType = '';

  /**
   * Optional. Represents various insights about the candidate, which are not
   * directly used as optimization target, but that can be used to improve
   * subsequent generations, and as such can be used to construct the evolution
   * prompt.
   *
   * @param GoogleCloudDiscoveryengineV1alphaAlphaEvolveEvaluationInsights $insights
   */
  public function setInsights(GoogleCloudDiscoveryengineV1alphaAlphaEvolveEvaluationInsights $insights)
  {
    $this->insights = $insights;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaAlphaEvolveEvaluationInsights
   */
  public function getInsights()
  {
    return $this->insights;
  }
  /**
   * Optional. Contains the evaluation scores for the target metrics to
   * optimize.
   *
   * @param GoogleCloudDiscoveryengineV1alphaAlphaEvolveEvaluationScores $scores
   */
  public function setScores(GoogleCloudDiscoveryengineV1alphaAlphaEvolveEvaluationScores $scores)
  {
    $this->scores = $scores;
  }
  /**
   * @return GoogleCloudDiscoveryengineV1alphaAlphaEvolveEvaluationScores
   */
  public function getScores()
  {
    return $this->scores;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1alphaAlphaEvolveProgramEvaluation::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1alphaAlphaEvolveProgramEvaluation');
