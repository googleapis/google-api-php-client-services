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

class GoogleCloudAiplatformV1GenerateInstanceRubricsRequest extends \Google\Collection
{
  protected $collection_key = 'contents';
  protected $agentConfigType = GoogleCloudAiplatformV1EvaluationInstanceDeprecatedAgentConfig::class;
  protected $agentConfigDataType = '';
  protected $contentsType = GoogleCloudAiplatformV1Content::class;
  protected $contentsDataType = 'array';
  /**
   * Required. The resource name of the Location to generate rubrics from.
   * Format: `projects/{project}/locations/{location}`
   *
   * @var string
   */
  public $location;
  /**
   * Optional. The resource name of a registered metric. Rubric generation using
   * predefined metric spec or LLMBasedMetricSpec is supported. If this field is
   * set, the configuration provided in this field is used for rubric
   * generation. The `predefined_rubric_generation_spec` and
   * `rubric_generation_spec` fields will be ignored.
   *
   * @var string
   */
  public $metricResourceName;
  protected $predefinedRubricGenerationSpecType = GoogleCloudAiplatformV1PredefinedMetricSpec::class;
  protected $predefinedRubricGenerationSpecDataType = '';
  protected $rubricGenerationSpecType = GoogleCloudAiplatformV1RubricGenerationSpec::class;
  protected $rubricGenerationSpecDataType = '';

  /**
   * Optional. Agent configuration, required for agent-based rubric generation.
   *
   * @param GoogleCloudAiplatformV1EvaluationInstanceDeprecatedAgentConfig $agentConfig
   */
  public function setAgentConfig(GoogleCloudAiplatformV1EvaluationInstanceDeprecatedAgentConfig $agentConfig)
  {
    $this->agentConfig = $agentConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationInstanceDeprecatedAgentConfig
   */
  public function getAgentConfig()
  {
    return $this->agentConfig;
  }
  /**
   * Required. The prompt to generate rubrics from. For single-turn queries,
   * this is a single instance. For multi-turn queries, this is a repeated field
   * that contains conversation history + latest request.
   *
   * @param GoogleCloudAiplatformV1Content[] $contents
   */
  public function setContents($contents)
  {
    $this->contents = $contents;
  }
  /**
   * @return GoogleCloudAiplatformV1Content[]
   */
  public function getContents()
  {
    return $this->contents;
  }
  /**
   * Required. The resource name of the Location to generate rubrics from.
   * Format: `projects/{project}/locations/{location}`
   *
   * @param string $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Optional. The resource name of a registered metric. Rubric generation using
   * predefined metric spec or LLMBasedMetricSpec is supported. If this field is
   * set, the configuration provided in this field is used for rubric
   * generation. The `predefined_rubric_generation_spec` and
   * `rubric_generation_spec` fields will be ignored.
   *
   * @param string $metricResourceName
   */
  public function setMetricResourceName($metricResourceName)
  {
    $this->metricResourceName = $metricResourceName;
  }
  /**
   * @return string
   */
  public function getMetricResourceName()
  {
    return $this->metricResourceName;
  }
  /**
   * Optional. Specification for using the rubric generation configs of a pre-
   * defined metric, e.g. "generic_quality_v1" and "instruction_following_v1".
   * Some of the configs may be only used in rubric generation and not
   * supporting evaluation, e.g. "fully_customized_generic_quality_v1". If this
   * field is set, the `rubric_generation_spec` field will be ignored.
   *
   * @param GoogleCloudAiplatformV1PredefinedMetricSpec $predefinedRubricGenerationSpec
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
   * Optional. Specification for how the rubrics should be generated.
   *
   * @param GoogleCloudAiplatformV1RubricGenerationSpec $rubricGenerationSpec
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1GenerateInstanceRubricsRequest::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1GenerateInstanceRubricsRequest');
