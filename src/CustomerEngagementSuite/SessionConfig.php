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

class SessionConfig extends \Google\Collection
{
  protected $collection_key = 'historicalContexts';
  /**
   * Optional. The deployment of the app to use for the session. Format: `projec
   * ts/{project}/locations/{location}/apps/{app}/deployments/{deployment}`
   *
   * @var string
   */
  public $deployment;
  /**
   * Optional. The entry agent to handle the session. If not specified, the
   * session will be handled by the root agent of the app. Format:
   * `projects/{project}/locations/{location}/agents/{agent}`
   *
   * @var string
   */
  public $entryAgent;
  protected $historicalContextsType = Message::class;
  protected $historicalContextsDataType = 'array';
  protected $inputAudioConfigType = InputAudioConfig::class;
  protected $inputAudioConfigDataType = '';
  protected $outputAudioConfigType = OutputAudioConfig::class;
  protected $outputAudioConfigDataType = '';
  protected $remoteDialogflowQueryParametersType = SessionConfigRemoteDialogflowQueryParameters::class;
  protected $remoteDialogflowQueryParametersDataType = '';
  /**
   * Optional. The time zone of the user. If provided, the agent will use the
   * time zone for date and time related variables. Otherwise, the agent will
   * use the time zone specified in the App.time_zone_settings. The format is
   * the IANA Time Zone Database time zone, e.g. "America/Los_Angeles".
   *
   * @var string
   */
  public $timeZone;

  /**
   * Optional. The deployment of the app to use for the session. Format: `projec
   * ts/{project}/locations/{location}/apps/{app}/deployments/{deployment}`
   *
   * @param string $deployment
   */
  public function setDeployment($deployment)
  {
    $this->deployment = $deployment;
  }
  /**
   * @return string
   */
  public function getDeployment()
  {
    return $this->deployment;
  }
  /**
   * Optional. The entry agent to handle the session. If not specified, the
   * session will be handled by the root agent of the app. Format:
   * `projects/{project}/locations/{location}/agents/{agent}`
   *
   * @param string $entryAgent
   */
  public function setEntryAgent($entryAgent)
  {
    $this->entryAgent = $entryAgent;
  }
  /**
   * @return string
   */
  public function getEntryAgent()
  {
    return $this->entryAgent;
  }
  /**
   * Optional. The historical context of the session, including user inputs,
   * agent responses, and other messages. Typically, CES agent would manage
   * session automatically so client doesn't need to explicitly populate this
   * field. However, client can optionally override the historical contexts to
   * force the session start from certain state.
   *
   * @param Message[] $historicalContexts
   */
  public function setHistoricalContexts($historicalContexts)
  {
    $this->historicalContexts = $historicalContexts;
  }
  /**
   * @return Message[]
   */
  public function getHistoricalContexts()
  {
    return $this->historicalContexts;
  }
  /**
   * Optional. Configuration for processing the input audio.
   *
   * @param InputAudioConfig $inputAudioConfig
   */
  public function setInputAudioConfig(InputAudioConfig $inputAudioConfig)
  {
    $this->inputAudioConfig = $inputAudioConfig;
  }
  /**
   * @return InputAudioConfig
   */
  public function getInputAudioConfig()
  {
    return $this->inputAudioConfig;
  }
  /**
   * Optional. Configuration for generating the output audio.
   *
   * @param OutputAudioConfig $outputAudioConfig
   */
  public function setOutputAudioConfig(OutputAudioConfig $outputAudioConfig)
  {
    $this->outputAudioConfig = $outputAudioConfig;
  }
  /**
   * @return OutputAudioConfig
   */
  public function getOutputAudioConfig()
  {
    return $this->outputAudioConfig;
  }
  /**
   * Optional. [QueryParameters](https://cloud.google.com/dialogflow/cx/docs/ref
   * erence/rpc/google.cloud.dialogflow.cx.v3#queryparameters) to send to the
   * remote
   * [Dialogflow](https://cloud.google.com/dialogflow/cx/docs/concept/console-
   * conversational-agents) agent when the session control is transferred to the
   * remote agent.
   *
   * @param SessionConfigRemoteDialogflowQueryParameters $remoteDialogflowQueryParameters
   */
  public function setRemoteDialogflowQueryParameters(SessionConfigRemoteDialogflowQueryParameters $remoteDialogflowQueryParameters)
  {
    $this->remoteDialogflowQueryParameters = $remoteDialogflowQueryParameters;
  }
  /**
   * @return SessionConfigRemoteDialogflowQueryParameters
   */
  public function getRemoteDialogflowQueryParameters()
  {
    return $this->remoteDialogflowQueryParameters;
  }
  /**
   * Optional. The time zone of the user. If provided, the agent will use the
   * time zone for date and time related variables. Otherwise, the agent will
   * use the time zone specified in the App.time_zone_settings. The format is
   * the IANA Time Zone Database time zone, e.g. "America/Los_Angeles".
   *
   * @param string $timeZone
   */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /**
   * @return string
   */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SessionConfig::class, 'Google_Service_CustomerEngagementSuite_SessionConfig');
