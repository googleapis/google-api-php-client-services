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

class AgentRemoteDialogflowAgent extends \Google\Model
{
  /**
   * Required. The [Dialogflow](https://docs.cloud.google.com/dialogflow/cx/docs
   * /concept/agent) agent resource name. Format:
   * `projects/{project}/locations/{location}/agents/{agent}`
   *
   * @var string
   */
  public $agent;
  /**
   * Optional. The environment ID of the Dialogflow agent to be used for the
   * agent execution. If not specified, the draft environment will be used.
   *
   * @var string
   */
  public $environmentId;
  /**
   * Optional. The flow ID of the flow in the Dialogflow agent.
   *
   * @var string
   */
  public $flowId;
  /**
   * Optional. The mapping of the app variables names to the Dialogflow session
   * parameters names to be sent to the Dialogflow agent as input.
   *
   * @var string[]
   */
  public $inputVariableMapping;
  /**
   * Optional. The mapping of the Dialogflow session parameters names to the app
   * variables names to be sent back to the CES agent after the Dialogflow agent
   * execution ends.
   *
   * @var string[]
   */
  public $outputVariableMapping;
  /**
   * Optional. Indicates whether to respect the message-level interruption
   * settings configured in the Dialogflow agent. * If false: all response
   * messages from the Dialogflow agent follow the app-level barge-in settings.
   * * If true: only response messages with [`allow_playback_interruption`](http
   * s://docs.cloud.google.com/dialogflow/cx/docs/reference/rpc/google.cloud.dia
   * logflow.cx.v3#text) set to true will be interruptable, all other messages
   * follow the app-level barge-in settings.
   *
   * @var bool
   */
  public $respectResponseInterruptionSettings;

  /**
   * Required. The [Dialogflow](https://docs.cloud.google.com/dialogflow/cx/docs
   * /concept/agent) agent resource name. Format:
   * `projects/{project}/locations/{location}/agents/{agent}`
   *
   * @param string $agent
   */
  public function setAgent($agent)
  {
    $this->agent = $agent;
  }
  /**
   * @return string
   */
  public function getAgent()
  {
    return $this->agent;
  }
  /**
   * Optional. The environment ID of the Dialogflow agent to be used for the
   * agent execution. If not specified, the draft environment will be used.
   *
   * @param string $environmentId
   */
  public function setEnvironmentId($environmentId)
  {
    $this->environmentId = $environmentId;
  }
  /**
   * @return string
   */
  public function getEnvironmentId()
  {
    return $this->environmentId;
  }
  /**
   * Optional. The flow ID of the flow in the Dialogflow agent.
   *
   * @param string $flowId
   */
  public function setFlowId($flowId)
  {
    $this->flowId = $flowId;
  }
  /**
   * @return string
   */
  public function getFlowId()
  {
    return $this->flowId;
  }
  /**
   * Optional. The mapping of the app variables names to the Dialogflow session
   * parameters names to be sent to the Dialogflow agent as input.
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
   * Optional. The mapping of the Dialogflow session parameters names to the app
   * variables names to be sent back to the CES agent after the Dialogflow agent
   * execution ends.
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
   * Optional. Indicates whether to respect the message-level interruption
   * settings configured in the Dialogflow agent. * If false: all response
   * messages from the Dialogflow agent follow the app-level barge-in settings.
   * * If true: only response messages with [`allow_playback_interruption`](http
   * s://docs.cloud.google.com/dialogflow/cx/docs/reference/rpc/google.cloud.dia
   * logflow.cx.v3#text) set to true will be interruptable, all other messages
   * follow the app-level barge-in settings.
   *
   * @param bool $respectResponseInterruptionSettings
   */
  public function setRespectResponseInterruptionSettings($respectResponseInterruptionSettings)
  {
    $this->respectResponseInterruptionSettings = $respectResponseInterruptionSettings;
  }
  /**
   * @return bool
   */
  public function getRespectResponseInterruptionSettings()
  {
    return $this->respectResponseInterruptionSettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentRemoteDialogflowAgent::class, 'Google_Service_CustomerEngagementSuite_AgentRemoteDialogflowAgent');
