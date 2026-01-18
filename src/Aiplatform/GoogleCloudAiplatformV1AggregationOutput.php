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

class GoogleCloudAiplatformV1AggregationOutput extends \Google\Collection
{
  protected $collection_key = 'aggregationResults';
  protected $aggregationResultsType = GoogleCloudAiplatformV1AggregationResult::class;
  protected $aggregationResultsDataType = 'array';
  protected $datasetType = GoogleCloudAiplatformV1EvaluationDataset::class;
  protected $datasetDataType = '';

  /**
   * One AggregationResult per metric.
   *
   * @param GoogleCloudAiplatformV1AggregationResult[] $aggregationResults
   */
  public function setAggregationResults($aggregationResults)
  {
    $this->aggregationResults = $aggregationResults;
  }
  /**
   * @return GoogleCloudAiplatformV1AggregationResult[]
   */
  public function getAggregationResults()
  {
    return $this->aggregationResults;
  }
  /**
   * The dataset used for evaluation & aggregation.
   *
   * @param GoogleCloudAiplatformV1EvaluationDataset $dataset
   */
  public function setDataset(GoogleCloudAiplatformV1EvaluationDataset $dataset)
  {
    $this->dataset = $dataset;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationDataset
   */
  public function getDataset()
  {
    return $this->dataset;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AggregationOutput::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AggregationOutput');
