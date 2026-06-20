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

class GoogleCloudAiplatformV1GenerateLossClustersRequest extends \Google\Collection
{
  protected $collection_key = 'configs';
  protected $configsType = GoogleCloudAiplatformV1LossAnalysisConfig::class;
  protected $configsDataType = 'array';
  /**
   * Reference to a persisted EvaluationSet. The service will read items from
   * this set.
   *
   * @var string
   */
  public $evaluationSet;
  protected $inlineResultsType = GoogleCloudAiplatformV1GenerateLossClustersRequestEvaluationResultList::class;
  protected $inlineResultsDataType = '';

  /**
   * Required. Configuration for the analysis algorithm. Analysis for multiple
   * metrics and multiple candidates could be specified.
   *
   * @param GoogleCloudAiplatformV1LossAnalysisConfig[] $configs
   */
  public function setConfigs($configs)
  {
    $this->configs = $configs;
  }
  /**
   * @return GoogleCloudAiplatformV1LossAnalysisConfig[]
   */
  public function getConfigs()
  {
    return $this->configs;
  }
  /**
   * Reference to a persisted EvaluationSet. The service will read items from
   * this set.
   *
   * @param string $evaluationSet
   */
  public function setEvaluationSet($evaluationSet)
  {
    $this->evaluationSet = $evaluationSet;
  }
  /**
   * @return string
   */
  public function getEvaluationSet()
  {
    return $this->evaluationSet;
  }
  /**
   * Inline evaluation results. Useful for ephemeral analysis in notebooks/SDKs
   * where data isn't persisted.
   *
   * @param GoogleCloudAiplatformV1GenerateLossClustersRequestEvaluationResultList $inlineResults
   */
  public function setInlineResults(GoogleCloudAiplatformV1GenerateLossClustersRequestEvaluationResultList $inlineResults)
  {
    $this->inlineResults = $inlineResults;
  }
  /**
   * @return GoogleCloudAiplatformV1GenerateLossClustersRequestEvaluationResultList
   */
  public function getInlineResults()
  {
    return $this->inlineResults;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1GenerateLossClustersRequest::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1GenerateLossClustersRequest');
