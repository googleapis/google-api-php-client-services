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

class GoogleCloudAiplatformV1EvaluationRunInferenceConfigAgentRunConfig extends \Google\Model
{
  /**
   * Optional. The resource name of the Agent Engine. Format:
   * projects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}
   * For example: projects/123/locations/us-central1/reasoningEngines/456
   *
   * @var string
   */
  public $agentEngine;
  protected $sessionInputType = GoogleCloudAiplatformV1EvaluationRunInferenceConfigSessionInput::class;
  protected $sessionInputDataType = '';
  protected $userSimulatorConfigType = GoogleCloudAiplatformV1EvaluationRunInferenceConfigAgentRunConfigUserSimulatorConfig::class;
  protected $userSimulatorConfigDataType = '';

  /**
   * Optional. The resource name of the Agent Engine. Format:
   * projects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}
   * For example: projects/123/locations/us-central1/reasoningEngines/456
   *
   * @param string $agentEngine
   */
  public function setAgentEngine($agentEngine)
  {
    $this->agentEngine = $agentEngine;
  }
  /**
   * @return string
   */
  public function getAgentEngine()
  {
    return $this->agentEngine;
  }
  /**
   * Optional. The session input to get agent running results.
   *
   * @param GoogleCloudAiplatformV1EvaluationRunInferenceConfigSessionInput $sessionInput
   */
  public function setSessionInput(GoogleCloudAiplatformV1EvaluationRunInferenceConfigSessionInput $sessionInput)
  {
    $this->sessionInput = $sessionInput;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationRunInferenceConfigSessionInput
   */
  public function getSessionInput()
  {
    return $this->sessionInput;
  }
  /**
   * The configuration for a user simulator that uses an LLM to generate
   * messages on behalf of the user.
   *
   * @param GoogleCloudAiplatformV1EvaluationRunInferenceConfigAgentRunConfigUserSimulatorConfig $userSimulatorConfig
   */
  public function setUserSimulatorConfig(GoogleCloudAiplatformV1EvaluationRunInferenceConfigAgentRunConfigUserSimulatorConfig $userSimulatorConfig)
  {
    $this->userSimulatorConfig = $userSimulatorConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1EvaluationRunInferenceConfigAgentRunConfigUserSimulatorConfig
   */
  public function getUserSimulatorConfig()
  {
    return $this->userSimulatorConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1EvaluationRunInferenceConfigAgentRunConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1EvaluationRunInferenceConfigAgentRunConfig');
