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

namespace Google\Service\CustomerEngagementSuite;

class RemoteA2aConfig extends \Google\Model
{
  protected $agentCardType = AgentCard::class;
  protected $agentCardDataType = '';
  /**
   * Optional. Reference to the agent in the Agent Registry. Format:
   * `projects/{project}/locations/{location}/agents/{agent}`
   *
   * @var string
   */
  public $agentRegistry;
  protected $apiAuthenticationType = ApiAuthentication::class;
  protected $apiAuthenticationDataType = '';
  /**
   * Optional. If not empty, interactions with the remote A2A agent will use
   * this context ID. This context_id field can refer to a session variable like
   * `$context.variables.order_agent_session_id`.
   *
   * @var string
   */
  public $contextId;
  /**
   * Optional. Mapping of input variable names of remote agent to GECX variable
   * names.
   *
   * @var string[]
   */
  public $inputVariableMapping;
  /**
   * Optional. Mapping of output variable names of remote agent to GECX variable
   * names.
   *
   * @var string[]
   */
  public $outputVariableMapping;
  /**
   * Optional. Whether streaming is enabled for the remote agent.
   *
   * @var bool
   */
  public $streamingEnabled;

  /**
   * Optional. The full agent card defined inline.
   *
   * @param AgentCard $agentCard
   */
  public function setAgentCard(AgentCard $agentCard)
  {
    $this->agentCard = $agentCard;
  }
  /**
   * @return AgentCard
   */
  public function getAgentCard()
  {
    return $this->agentCard;
  }
  /**
   * Optional. Reference to the agent in the Agent Registry. Format:
   * `projects/{project}/locations/{location}/agents/{agent}`
   *
   * @param string $agentRegistry
   */
  public function setAgentRegistry($agentRegistry)
  {
    $this->agentRegistry = $agentRegistry;
  }
  /**
   * @return string
   */
  public function getAgentRegistry()
  {
    return $this->agentRegistry;
  }
  /**
   * Optional. Authentication configuration for calling the remote agent.
   * Optional if the registry reference already handles authentication.
   *
   * @param ApiAuthentication $apiAuthentication
   */
  public function setApiAuthentication(ApiAuthentication $apiAuthentication)
  {
    $this->apiAuthentication = $apiAuthentication;
  }
  /**
   * @return ApiAuthentication
   */
  public function getApiAuthentication()
  {
    return $this->apiAuthentication;
  }
  /**
   * Optional. If not empty, interactions with the remote A2A agent will use
   * this context ID. This context_id field can refer to a session variable like
   * `$context.variables.order_agent_session_id`.
   *
   * @param string $contextId
   */
  public function setContextId($contextId)
  {
    $this->contextId = $contextId;
  }
  /**
   * @return string
   */
  public function getContextId()
  {
    return $this->contextId;
  }
  /**
   * Optional. Mapping of input variable names of remote agent to GECX variable
   * names.
   *
   * @param string[] $inputVariableMapping
   */
  public function setInputVariableMapping($inputVariableMapping)
  {
    $this->inputVariableMapping = $inputVariableMapping;
  }
  /**
   * @return string[]
   */
  public function getInputVariableMapping()
  {
    return $this->inputVariableMapping;
  }
  /**
   * Optional. Mapping of output variable names of remote agent to GECX variable
   * names.
   *
   * @param string[] $outputVariableMapping
   */
  public function setOutputVariableMapping($outputVariableMapping)
  {
    $this->outputVariableMapping = $outputVariableMapping;
  }
  /**
   * @return string[]
   */
  public function getOutputVariableMapping()
  {
    return $this->outputVariableMapping;
  }
  /**
   * Optional. Whether streaming is enabled for the remote agent.
   *
   * @param bool $streamingEnabled
   */
  public function setStreamingEnabled($streamingEnabled)
  {
    $this->streamingEnabled = $streamingEnabled;
  }
  /**
   * @return bool
   */
  public function getStreamingEnabled()
  {
    return $this->streamingEnabled;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RemoteA2aConfig::class, 'Google_Service_CustomerEngagementSuite_RemoteA2aConfig');
