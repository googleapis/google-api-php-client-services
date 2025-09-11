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

class GoogleCloudAiplatformV1EvaluationRunEvaluationConfig extends \Google\Collection
{
  protected $collection_key = 'rubricConfigs';
  protected $autoraterConfigType = GoogleCloudAiplatformV1EvaluationRunEvaluationConfigAutoraterConfig::class;
  protected $autoraterConfigDataType = '';
  protected $metricsType = GoogleCloudAiplatformV1EvaluationRunMetric::class;
  protected $metricsDataType = 'array';
  protected $outputConfigType = GoogleCloudAiplatformV1EvaluationRunEvaluationConfigOutputConfig::class;
  protected $outputConfigDataType = '';
  protected $promptTemplateType = GoogleCloudAiplatformV1EvaluationRunEvaluationConfigPromptTemplate::class;
  protected $promptTemplateDataType = '';
  protected $rubricConfigsType = GoogleCloudAiplatformV1EvaluationRubricConfig::class;
  protected $rubricConfigsDataType = 'array';

  /**
   * @param GoogleCloudAiplatformV1EvaluationRunEvaluationConfigAutoraterConfig
   */
  public function setAutoraterConfig(GoogleCloudAiplatformV1EvaluationRunEvaluationConfigAutoraterConfig $autoraterConfig)
  {
    $this->autoraterConfig = $autoraterConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationRunEvaluationConfigAutoraterConfig
   */
  public function getAutoraterConfig()
  {
    return $this->autoraterConfig;
  }
  /**
   * @param GoogleCloudAiplatformV1EvaluationRunMetric[]
   */
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationRunMetric[]
   */
  public function getMetrics()
  {
    return $this->metrics;
  }
  /**
   * @param GoogleCloudAiplatformV1EvaluationRunEvaluationConfigOutputConfig
   */
  public function setOutputConfig(GoogleCloudAiplatformV1EvaluationRunEvaluationConfigOutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationRunEvaluationConfigOutputConfig
   */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
  /**
   * @param GoogleCloudAiplatformV1EvaluationRunEvaluationConfigPromptTemplate
   */
  public function setPromptTemplate(GoogleCloudAiplatformV1EvaluationRunEvaluationConfigPromptTemplate $promptTemplate)
  {
    $this->promptTemplate = $promptTemplate;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationRunEvaluationConfigPromptTemplate
   */
  public function getPromptTemplate()
  {
    return $this->promptTemplate;
  }
  /**
   * @param GoogleCloudAiplatformV1EvaluationRubricConfig[]
   */
  public function setRubricConfigs($rubricConfigs)
  {
    $this->rubricConfigs = $rubricConfigs;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationRubricConfig[]
   */
  public function getRubricConfigs()
  {
    return $this->rubricConfigs;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1EvaluationRunEvaluationConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1EvaluationRunEvaluationConfig');
