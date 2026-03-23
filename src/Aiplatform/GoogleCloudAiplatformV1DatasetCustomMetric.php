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

class GoogleCloudAiplatformV1DatasetCustomMetric extends \Google\Model
{
  /**
   * Required. The Python code string containing the aggregation function.
   * Expected function signature: `def aggregate(instances: list[dict[str,
   * Any]]) -> dict[str, float]:` The `instances` argument is a list of
   * dictionaries, where each dictionary represents a single evaluation result
   * item. The structure of each dictionary corresponds to the fields in the
   * `EvaluationResult` message. This includes: - `"request"`: Contains the
   * original input data and model inputs (from
   * `EvaluationResult.EvaluationRequest`). - `"candidate_results"`: Contains
   * the results of any instance-level metrics (from
   * `EvaluationResult.CandidateResults`). Example of a single item in the
   * `instances` list: { "request": { "prompt": {"text": "What is the capital of
   * France?"}, "golden_response": {"text": "Paris"}, "candidate_responses":
   * [{"candidate": "model-v1", "text": "Paris"}] }, "candidate_results": [
   * {"metric": "exact_match", "score": 1.0}, {"metric": "bleu", "score": 0.9} ]
   * }
   *
   * @var string
   */
  public $aggregationFunction;
  /**
   * Optional. A display name for this custom summary metric. Used to prefix
   * keys in the output summaryMetrics map. If not provided, a default name like
   * "dataset_custom_metric_1", "dataset_custom_metric_2", etc., will be
   * generated based on the order in the repeated field.
   *
   * @var string
   */
  public $displayName;

  /**
   * Required. The Python code string containing the aggregation function.
   * Expected function signature: `def aggregate(instances: list[dict[str,
   * Any]]) -> dict[str, float]:` The `instances` argument is a list of
   * dictionaries, where each dictionary represents a single evaluation result
   * item. The structure of each dictionary corresponds to the fields in the
   * `EvaluationResult` message. This includes: - `"request"`: Contains the
   * original input data and model inputs (from
   * `EvaluationResult.EvaluationRequest`). - `"candidate_results"`: Contains
   * the results of any instance-level metrics (from
   * `EvaluationResult.CandidateResults`). Example of a single item in the
   * `instances` list: { "request": { "prompt": {"text": "What is the capital of
   * France?"}, "golden_response": {"text": "Paris"}, "candidate_responses":
   * [{"candidate": "model-v1", "text": "Paris"}] }, "candidate_results": [
   * {"metric": "exact_match", "score": 1.0}, {"metric": "bleu", "score": 0.9} ]
   * }
   *
   * @param string $aggregationFunction
   */
  public function setAggregationFunction($aggregationFunction)
  {
    $this->aggregationFunction = $aggregationFunction;
  }
  /**
   * @return string
   */
  public function getAggregationFunction()
  {
    return $this->aggregationFunction;
  }
  /**
   * Optional. A display name for this custom summary metric. Used to prefix
   * keys in the output summaryMetrics map. If not provided, a default name like
   * "dataset_custom_metric_1", "dataset_custom_metric_2", etc., will be
   * generated based on the order in the repeated field.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1DatasetCustomMetric::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1DatasetCustomMetric');
