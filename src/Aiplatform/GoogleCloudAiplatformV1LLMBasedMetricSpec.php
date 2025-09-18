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

class GoogleCloudAiplatformV1LLMBasedMetricSpec extends \Google\Model
{
  /**
   * @var array[]
   */
  public $additionalConfig;
  protected $judgeAutoraterConfigType = GoogleCloudAiplatformV1AutoraterConfig::class;
  protected $judgeAutoraterConfigDataType = '';
  /**
   * @var string
   */
  public $metricPromptTemplate;
  protected $predefinedRubricGenerationSpecType = GoogleCloudAiplatformV1PredefinedMetricSpec::class;
  protected $predefinedRubricGenerationSpecDataType = '';
  protected $rubricGenerationSpecType = GoogleCloudAiplatformV1RubricGenerationSpec::class;
  protected $rubricGenerationSpecDataType = '';
  /**
   * @var string
   */
  public $rubricGroupKey;
  /**
   * @var string
   */
  public $systemInstruction;

  /**
   * @param array[]
   */
  public function setAdditionalConfig($additionalConfig)
  {
    $this->additionalConfig = $additionalConfig;
  }
  /**
   * @return array[]
   */
  public function getAdditionalConfig()
  {
    return $this->additionalConfig;
  }
  /**
   * @param GoogleCloudAiplatformV1AutoraterConfig
   */
  public function setJudgeAutoraterConfig(GoogleCloudAiplatformV1AutoraterConfig $judgeAutoraterConfig)
  {
    $this->judgeAutoraterConfig = $judgeAutoraterConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1AutoraterConfig
   */
  public function getJudgeAutoraterConfig()
  {
    return $this->judgeAutoraterConfig;
  }
  /**
   * @param string
   */
  public function setMetricPromptTemplate($metricPromptTemplate)
  {
    $this->metricPromptTemplate = $metricPromptTemplate;
  }
  /**
   * @return string
   */
  public function getMetricPromptTemplate()
  {
    return $this->metricPromptTemplate;
  }
  /**
   * @param GoogleCloudAiplatformV1PredefinedMetricSpec
   */
  public function setPredefinedRubricGenerationSpec(GoogleCloudAiplatformV1PredefinedMetricSpec $predefinedRubricGenerationSpec)
  {
    $this->predefinedRubricGenerationSpec = $predefinedRubricGenerationSpec;
  }
  /**
   * @return GoogleCloudAiplatformV1PredefinedMetricSpec
   */
  public function getPredefinedRubricGenerationSpec()
  {
    return $this->predefinedRubricGenerationSpec;
  }
  /**
   * @param GoogleCloudAiplatformV1RubricGenerationSpec
   */
  public function setRubricGenerationSpec(GoogleCloudAiplatformV1RubricGenerationSpec $rubricGenerationSpec)
  {
    $this->rubricGenerationSpec = $rubricGenerationSpec;
  }
  /**
   * @return GoogleCloudAiplatformV1RubricGenerationSpec
   */
  public function getRubricGenerationSpec()
  {
    return $this->rubricGenerationSpec;
  }
  /**
   * @param string
   */
  public function setRubricGroupKey($rubricGroupKey)
  {
    $this->rubricGroupKey = $rubricGroupKey;
  }
  /**
   * @return string
   */
  public function getRubricGroupKey()
  {
    return $this->rubricGroupKey;
  }
  /**
   * @param string
   */
  public function setSystemInstruction($systemInstruction)
  {
    $this->systemInstruction = $systemInstruction;
  }
  /**
   * @return string
   */
  public function getSystemInstruction()
  {
    return $this->systemInstruction;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1LLMBasedMetricSpec::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1LLMBasedMetricSpec');
