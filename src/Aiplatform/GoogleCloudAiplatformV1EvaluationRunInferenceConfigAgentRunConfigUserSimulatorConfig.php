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

class GoogleCloudAiplatformV1EvaluationRunInferenceConfigAgentRunConfigUserSimulatorConfig extends \Google\Model
{
  /**
   * Maximum number of invocations allowed by the multi-turn agent scraping.
   * This property allows us to stop a run-off conversation, where the agent and
   * the user simulator get into a never ending loop. The initial fixed prompt
   * is also counted as an invocation.
   *
   * @var int
   */
  public $maxTurn;
  protected $modelConfigType = GoogleCloudAiplatformV1GenerationConfig::class;
  protected $modelConfigDataType = '';
  /**
   * The model name to use for multi-turn agent scraping to get next user
   * message, e.g. "gemini-3-flash-preview".
   *
   * @var string
   */
  public $modelName;

  /**
   * Maximum number of invocations allowed by the multi-turn agent scraping.
   * This property allows us to stop a run-off conversation, where the agent and
   * the user simulator get into a never ending loop. The initial fixed prompt
   * is also counted as an invocation.
   *
   * @param int $maxTurn
   */
  public function setMaxTurn($maxTurn)
  {
    $this->maxTurn = $maxTurn;
  }
  /**
   * @return int
   */
  public function getMaxTurn()
  {
    return $this->maxTurn;
  }
  /**
   * The configuration for the model.
   *
   * @param GoogleCloudAiplatformV1GenerationConfig $modelConfig
   */
  public function setModelConfig(GoogleCloudAiplatformV1GenerationConfig $modelConfig)
  {
    $this->modelConfig = $modelConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1GenerationConfig
   */
  public function getModelConfig()
  {
    return $this->modelConfig;
  }
  /**
   * The model name to use for multi-turn agent scraping to get next user
   * message, e.g. "gemini-3-flash-preview".
   *
   * @param string $modelName
   */
  public function setModelName($modelName)
  {
    $this->modelName = $modelName;
  }
  /**
   * @return string
   */
  public function getModelName()
  {
    return $this->modelName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1EvaluationRunInferenceConfigAgentRunConfigUserSimulatorConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1EvaluationRunInferenceConfigAgentRunConfigUserSimulatorConfig');
