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

class GoogleCloudAiplatformV1EvaluationRunInferenceConfig extends \Google\Model
{
  protected $agentRunConfigType = GoogleCloudAiplatformV1EvaluationRunInferenceConfigAgentRunConfig::class;
  protected $agentRunConfigDataType = '';
  protected $agentsType = GoogleCloudAiplatformV1AgentConfig::class;
  protected $agentsDataType = 'map';
  protected $generationConfigType = GoogleCloudAiplatformV1GenerationConfig::class;
  protected $generationConfigDataType = '';
  /**
   * Optional. The fully qualified name of the publisher model or endpoint to
   * use. Anthropic and Llama third-party models are also supported through
   * Model Garden. Publisher model format:
   * `projects/{project}/locations/{location}/publishers/models` Third-party
   * model formats: `projects/{project}/locations/{location}/publishers/anthropi
   * c/models/{model}` or
   * `projects/{project}/locations/{location}/publishers/llama/models/{model}`
   * Endpoint format:
   * `projects/{project}/locations/{location}/endpoints/{endpoint}`
   *
   * @var string
   */
  public $model;
  /**
   * Optional. The parallelism of the evaluation run for the inference step. If
   * not specified, the default parallelism will be used.
   *
   * @var int
   */
  public $parallelism;
  protected $promptTemplateType = GoogleCloudAiplatformV1EvaluationRunEvaluationConfigPromptTemplate::class;
  protected $promptTemplateDataType = '';

  /**
   * Optional. Agent run config.
   *
   * @param GoogleCloudAiplatformV1EvaluationRunInferenceConfigAgentRunConfig $agentRunConfig
   */
  public function setAgentRunConfig(GoogleCloudAiplatformV1EvaluationRunInferenceConfigAgentRunConfig $agentRunConfig)
  {
    $this->agentRunConfig = $agentRunConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationRunInferenceConfigAgentRunConfig
   */
  public function getAgentRunConfig()
  {
    return $this->agentRunConfig;
  }
  /**
   * Optional. Contains the static configurations for each agent in the system.
   * Key: agent_id (matches the `author` field in events). Value: The static
   * configuration of the agent.
   *
   * @param GoogleCloudAiplatformV1AgentConfig[] $agents
   */
  public function setAgents($agents)
  {
    $this->agents = $agents;
  }
  /**
   * @return GoogleCloudAiplatformV1AgentConfig[]
   */
  public function getAgents()
  {
    return $this->agents;
  }
  /**
   * Optional. Generation config.
   *
   * @param GoogleCloudAiplatformV1GenerationConfig $generationConfig
   */
  public function setGenerationConfig(GoogleCloudAiplatformV1GenerationConfig $generationConfig)
  {
    $this->generationConfig = $generationConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1GenerationConfig
   */
  public function getGenerationConfig()
  {
    return $this->generationConfig;
  }
  /**
   * Optional. The fully qualified name of the publisher model or endpoint to
   * use. Anthropic and Llama third-party models are also supported through
   * Model Garden. Publisher model format:
   * `projects/{project}/locations/{location}/publishers/models` Third-party
   * model formats: `projects/{project}/locations/{location}/publishers/anthropi
   * c/models/{model}` or
   * `projects/{project}/locations/{location}/publishers/llama/models/{model}`
   * Endpoint format:
   * `projects/{project}/locations/{location}/endpoints/{endpoint}`
   *
   * @param string $model
   */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /**
   * @return string
   */
  public function getModel()
  {
    return $this->model;
  }
  /**
   * Optional. The parallelism of the evaluation run for the inference step. If
   * not specified, the default parallelism will be used.
   *
   * @param int $parallelism
   */
  public function setParallelism($parallelism)
  {
    $this->parallelism = $parallelism;
  }
  /**
   * @return int
   */
  public function getParallelism()
  {
    return $this->parallelism;
  }
  /**
   * Optional. The prompt template used for inference. The values for variables
   * in the prompt template are defined in
   * EvaluationItem.EvaluationPrompt.PromptTemplateData.values. If not
   * specified, the prompt template in the EvaluationConfig will be used.
   *
   * @param GoogleCloudAiplatformV1EvaluationRunEvaluationConfigPromptTemplate $promptTemplate
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1EvaluationRunInferenceConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1EvaluationRunInferenceConfig');
