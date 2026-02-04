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

class GoogleCloudAiplatformV1AgentData extends \Google\Collection
{
  protected $collection_key = 'turns';
  protected $agentsType = GoogleCloudAiplatformV1AgentDataAgentConfig::class;
  protected $agentsDataType = 'map';
  protected $turnsType = GoogleCloudAiplatformV1AgentDataConversationTurn::class;
  protected $turnsDataType = 'array';

  /**
   * Optional. The static agent spec. This map defines the graph structure of
   * the agent system. Key: agent_id (matches the `author` field in events).
   * Value: The static configuration of the agents.
   *
   * @param GoogleCloudAiplatformV1AgentDataAgentConfig[] $agents
   */
  public function setAgents($agents)
  {
    $this->agents = $agents;
  }
  /**
   * @return GoogleCloudAiplatformV1AgentDataAgentConfig[]
   */
  public function getAgents()
  {
    return $this->agents;
  }
  /**
   * Optional. A chronological list of conversation turns. Each turn represents
   * a logical execution cycle (e.g., User Input -> Agent Response).
   *
   * @param GoogleCloudAiplatformV1AgentDataConversationTurn[] $turns
   */
  public function setTurns($turns)
  {
    $this->turns = $turns;
  }
  /**
   * @return GoogleCloudAiplatformV1AgentDataConversationTurn[]
   */
  public function getTurns()
  {
    return $this->turns;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AgentData::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AgentData');
