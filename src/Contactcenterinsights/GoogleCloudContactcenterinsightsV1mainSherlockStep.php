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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1mainSherlockStep extends \Google\Collection
{
  protected $collection_key = 'toolCalls';
  /**
   * Output only. The ID of the agent that produced/received this content.
   *
   * @var string
   */
  public $agentId;
  protected $contentType = GoogleCloudAiplatformV1Content::class;
  protected $contentDataType = '';
  /**
   * Output only. List of state changes caused by this specific turn.
   *
   * @var array[]
   */
  public $stateDeltas;
  /**
   * Output only. Unique ID for this specific turn.
   *
   * @var string
   */
  public $stepId;
  /**
   * Output only. Deprecated: Use content instead.
   *
   * @deprecated
   * @var string[]
   */
  public $textInput;
  /**
   * Output only. Deprecated: Use content instead.
   *
   * @deprecated
   * @var string
   */
  public $thought;
  protected $toolCallsType = GoogleCloudContactcenterinsightsV1mainToolCall::class;
  protected $toolCallsDataType = 'array';
  /**
   * Output only. Deprecated: Use content instead.
   *
   * @deprecated
   * @var array[]
   */
  public $toolOutput;

  /**
   * Output only. The ID of the agent that produced/received this content.
   *
   * @param string $agentId
   */
  public function setAgentId($agentId)
  {
    $this->agentId = $agentId;
  }
  /**
   * @return string
   */
  public function getAgentId()
  {
    return $this->agentId;
  }
  /**
   * Output only. The content of the turn (either Model or User role).
   *
   * @param GoogleCloudAiplatformV1Content $content
   */
  public function setContent(GoogleCloudAiplatformV1Content $content)
  {
    $this->content = $content;
  }
  /**
   * @return GoogleCloudAiplatformV1Content
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * Output only. List of state changes caused by this specific turn.
   *
   * @param array[] $stateDeltas
   */
  public function setStateDeltas($stateDeltas)
  {
    $this->stateDeltas = $stateDeltas;
  }
  /**
   * @return array[]
   */
  public function getStateDeltas()
  {
    return $this->stateDeltas;
  }
  /**
   * Output only. Unique ID for this specific turn.
   *
   * @param string $stepId
   */
  public function setStepId($stepId)
  {
    $this->stepId = $stepId;
  }
  /**
   * @return string
   */
  public function getStepId()
  {
    return $this->stepId;
  }
  /**
   * Output only. Deprecated: Use content instead.
   *
   * @deprecated
   * @param string[] $textInput
   */
  public function setTextInput($textInput)
  {
    $this->textInput = $textInput;
  }
  /**
   * @deprecated
   * @return string[]
   */
  public function getTextInput()
  {
    return $this->textInput;
  }
  /**
   * Output only. Deprecated: Use content instead.
   *
   * @deprecated
   * @param string $thought
   */
  public function setThought($thought)
  {
    $this->thought = $thought;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getThought()
  {
    return $this->thought;
  }
  /**
   * Output only. Deprecated: Use content instead.
   *
   * @deprecated
   * @param GoogleCloudContactcenterinsightsV1mainToolCall[] $toolCalls
   */
  public function setToolCalls($toolCalls)
  {
    $this->toolCalls = $toolCalls;
  }
  /**
   * @deprecated
   * @return GoogleCloudContactcenterinsightsV1mainToolCall[]
   */
  public function getToolCalls()
  {
    return $this->toolCalls;
  }
  /**
   * Output only. Deprecated: Use content instead.
   *
   * @deprecated
   * @param array[] $toolOutput
   */
  public function setToolOutput($toolOutput)
  {
    $this->toolOutput = $toolOutput;
  }
  /**
   * @deprecated
   * @return array[]
   */
  public function getToolOutput()
  {
    return $this->toolOutput;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1mainSherlockStep::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1mainSherlockStep');
