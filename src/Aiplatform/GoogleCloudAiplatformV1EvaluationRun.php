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

class GoogleCloudAiplatformV1EvaluationRun extends \Google\Model
{
  /**
   * @var string
   */
  public $completionTime;
  /**
   * @var string
   */
  public $createTime;
  protected $dataSourceType = GoogleCloudAiplatformV1EvaluationRunDataSource::class;
  protected $dataSourceDataType = '';
  /**
   * @var string
   */
  public $displayName;
  protected $errorType = GoogleRpcStatus::class;
  protected $errorDataType = '';
  protected $evaluationConfigType = GoogleCloudAiplatformV1EvaluationRunEvaluationConfig::class;
  protected $evaluationConfigDataType = '';
  protected $evaluationResultsType = GoogleCloudAiplatformV1EvaluationResults::class;
  protected $evaluationResultsDataType = '';
  /**
   * @var string
   */
  public $evaluationSetSnapshot;
  protected $inferenceConfigsType = GoogleCloudAiplatformV1EvaluationRunInferenceConfig::class;
  protected $inferenceConfigsDataType = 'map';
  /**
   * @var string[]
   */
  public $labels;
  /**
   * @var array
   */
  public $metadata;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $state;

  /**
   * @param string
   */
  public function setCompletionTime($completionTime)
  {
    $this->completionTime = $completionTime;
  }
  /**
   * @return string
   */
  public function getCompletionTime()
  {
    return $this->completionTime;
  }
  /**
   * @param string
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param GoogleCloudAiplatformV1EvaluationRunDataSource
   */
  public function setDataSource(GoogleCloudAiplatformV1EvaluationRunDataSource $dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationRunDataSource
   */
  public function getDataSource()
  {
    return $this->dataSource;
  }
  /**
   * @param string
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
  /**
   * @param GoogleRpcStatus
   */
  public function setError(GoogleRpcStatus $error)
  {
    $this->error = $error;
  }
  /**
   * @return GoogleRpcStatus
   */
  public function getError()
  {
    return $this->error;
  }
  /**
   * @param GoogleCloudAiplatformV1EvaluationRunEvaluationConfig
   */
  public function setEvaluationConfig(GoogleCloudAiplatformV1EvaluationRunEvaluationConfig $evaluationConfig)
  {
    $this->evaluationConfig = $evaluationConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationRunEvaluationConfig
   */
  public function getEvaluationConfig()
  {
    return $this->evaluationConfig;
  }
  /**
   * @param GoogleCloudAiplatformV1EvaluationResults
   */
  public function setEvaluationResults(GoogleCloudAiplatformV1EvaluationResults $evaluationResults)
  {
    $this->evaluationResults = $evaluationResults;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationResults
   */
  public function getEvaluationResults()
  {
    return $this->evaluationResults;
  }
  /**
   * @param string
   */
  public function setEvaluationSetSnapshot($evaluationSetSnapshot)
  {
    $this->evaluationSetSnapshot = $evaluationSetSnapshot;
  }
  /**
   * @return string
   */
  public function getEvaluationSetSnapshot()
  {
    return $this->evaluationSetSnapshot;
  }
  /**
   * @param GoogleCloudAiplatformV1EvaluationRunInferenceConfig[]
   */
  public function setInferenceConfigs($inferenceConfigs)
  {
    $this->inferenceConfigs = $inferenceConfigs;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationRunInferenceConfig[]
   */
  public function getInferenceConfigs()
  {
    return $this->inferenceConfigs;
  }
  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
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
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1EvaluationRun::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1EvaluationRun');
