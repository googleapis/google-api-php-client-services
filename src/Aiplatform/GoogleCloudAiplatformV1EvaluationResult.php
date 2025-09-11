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

class GoogleCloudAiplatformV1EvaluationResult extends \Google\Collection
{
  protected $collection_key = 'candidateResults';
  protected $candidateResultsType = GoogleCloudAiplatformV1CandidateResult::class;
  protected $candidateResultsDataType = 'array';
  /**
   * @var string
   */
  public $evaluationRequest;
  /**
   * @var string
   */
  public $evaluationRun;
  /**
   * @var array
   */
  public $metadata;
  /**
   * @var string
   */
  public $metric;
  protected $requestType = GoogleCloudAiplatformV1EvaluationRequest::class;
  protected $requestDataType = '';

  /**
   * @param GoogleCloudAiplatformV1CandidateResult[]
   */
  public function setCandidateResults($candidateResults)
  {
    $this->candidateResults = $candidateResults;
  }
  /**
   * @return GoogleCloudAiplatformV1CandidateResult[]
   */
  public function getCandidateResults()
  {
    return $this->candidateResults;
  }
  /**
   * @param string
   */
  public function setEvaluationRequest($evaluationRequest)
  {
    $this->evaluationRequest = $evaluationRequest;
  }
  /**
   * @return string
   */
  public function getEvaluationRequest()
  {
    return $this->evaluationRequest;
  }
  /**
   * @param string
   */
  public function setEvaluationRun($evaluationRun)
  {
    $this->evaluationRun = $evaluationRun;
  }
  /**
   * @return string
   */
  public function getEvaluationRun()
  {
    return $this->evaluationRun;
  }
  /**
   * @param array
   */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return array
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * @param string
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
  /**
   * @param GoogleCloudAiplatformV1EvaluationRequest
   */
  public function setRequest(GoogleCloudAiplatformV1EvaluationRequest $request)
  {
    $this->request = $request;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationRequest
   */
  public function getRequest()
  {
    return $this->request;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1EvaluationResult::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1EvaluationResult');
