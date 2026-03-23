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

class GoogleCloudAiplatformV1GenerateUserScenariosRequest extends \Google\Model
{
  protected $agentsType = GoogleCloudAiplatformV1AgentConfig::class;
  protected $agentsDataType = 'map';
  /**
   * Required. The agent id to identify the root agent.
   *
   * @var string
   */
  public $rootAgentId;
  protected $userScenarioGenerationConfigType = GoogleCloudAiplatformV1UserScenarioGenerationConfig::class;
  protected $userScenarioGenerationConfigDataType = '';

  /**
   * Required. A map containing the static configurations for each agent in the
   * system. Key: agent_id (matches the `author` field in events). Value: The
   * static configuration of the agent.
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
   * Required. The agent id to identify the root agent.
   *
   * @param string $rootAgentId
   */
  public function setRootAgentId($rootAgentId)
  {
    $this->rootAgentId = $rootAgentId;
  }
  /**
   * @return string
   */
  public function getRootAgentId()
  {
    return $this->rootAgentId;
  }
  /**
   * Required. Configuration for generating user scenarios.
   *
   * @param GoogleCloudAiplatformV1UserScenarioGenerationConfig $userScenarioGenerationConfig
   */
  public function setUserScenarioGenerationConfig(GoogleCloudAiplatformV1UserScenarioGenerationConfig $userScenarioGenerationConfig)
  {
    $this->userScenarioGenerationConfig = $userScenarioGenerationConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1UserScenarioGenerationConfig
   */
  public function getUserScenarioGenerationConfig()
  {
    return $this->userScenarioGenerationConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1GenerateUserScenariosRequest::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1GenerateUserScenariosRequest');
