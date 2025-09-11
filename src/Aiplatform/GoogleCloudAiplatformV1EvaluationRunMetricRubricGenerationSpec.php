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

class GoogleCloudAiplatformV1EvaluationRunMetricRubricGenerationSpec extends \Google\Collection
{
  protected $collection_key = 'rubricTypeOntology';
  protected $modelConfigType = GoogleCloudAiplatformV1EvaluationRunEvaluationConfigAutoraterConfig::class;
  protected $modelConfigDataType = '';
  /**
   * @var string
   */
  public $promptTemplate;
  /**
   * @var string
   */
  public $rubricContentType;
  /**
   * @var string[]
   */
  public $rubricTypeOntology;

  /**
   * @param GoogleCloudAiplatformV1EvaluationRunEvaluationConfigAutoraterConfig
   */
  public function setModelConfig(GoogleCloudAiplatformV1EvaluationRunEvaluationConfigAutoraterConfig $modelConfig)
  {
    $this->modelConfig = $modelConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationRunEvaluationConfigAutoraterConfig
   */
  public function getModelConfig()
  {
    return $this->modelConfig;
  }
  /**
   * @param string
   */
  public function setPromptTemplate($promptTemplate)
  {
    $this->promptTemplate = $promptTemplate;
  }
  /**
   * @return string
   */
  public function getPromptTemplate()
  {
    return $this->promptTemplate;
  }
  /**
   * @param string
   */
  public function setRubricContentType($rubricContentType)
  {
    $this->rubricContentType = $rubricContentType;
  }
  /**
   * @return string
   */
  public function getRubricContentType()
  {
    return $this->rubricContentType;
  }
  /**
   * @param string[]
   */
  public function setRubricTypeOntology($rubricTypeOntology)
  {
    $this->rubricTypeOntology = $rubricTypeOntology;
  }
  /**
   * @return string[]
   */
  public function getRubricTypeOntology()
  {
    return $this->rubricTypeOntology;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1EvaluationRunMetricRubricGenerationSpec::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1EvaluationRunMetricRubricGenerationSpec');
