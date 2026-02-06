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

class Chunk extends \Google\Model
{
  protected $agentTransferType = AgentTransfer::class;
  protected $agentTransferDataType = '';
  /**
   * A struct represents default variables at the start of the conversation,
   * keyed by variable names.
   *
   * @var array[]
   */
  public $defaultVariables;
  protected $imageType = Image::class;
  protected $imageDataType = '';
  /**
   * Optional. Custom payload data.
   *
   * @var array[]
   */
  public $payload;
  /**
   * Optional. Text data.
   *
   * @var string
   */
  public $text;
  protected $toolCallType = ToolCall::class;
  protected $toolCallDataType = '';
  protected $toolResponseType = ToolResponse::class;
  protected $toolResponseDataType = '';
  /**
   * Optional. Transcript associated with the audio.
   *
   * @var string
   */
  public $transcript;
  /**
   * A struct represents variables that were updated in the conversation, keyed
   * by variable names.
   *
   * @var array[]
   */
  public $updatedVariables;

  /**
   * Optional. Agent transfer event.
   *
   * @param AgentTransfer $agentTransfer
   */
  public function setAgentTransfer(AgentTransfer $agentTransfer)
  {
    $this->agentTransfer = $agentTransfer;
  }
  /**
   * @return AgentTransfer
   */
  public function getAgentTransfer()
  {
    return $this->agentTransfer;
  }
  /**
   * A struct represents default variables at the start of the conversation,
   * keyed by variable names.
   *
   * @param array[] $defaultVariables
   */
  public function setDefaultVariables($defaultVariables)
  {
    $this->defaultVariables = $defaultVariables;
  }
  /**
   * @return array[]
   */
  public function getDefaultVariables()
  {
    return $this->defaultVariables;
  }
  /**
   * Optional. Image data.
   *
   * @param Image $image
   */
  public function setImage(Image $image)
  {
    $this->image = $image;
  }
  /**
   * @return Image
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * Optional. Custom payload data.
   *
   * @param array[] $payload
   */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /**
   * @return array[]
   */
  public function getPayload()
  {
    return $this->payload;
  }
  /**
   * Optional. Text data.
   *
   * @param string $text
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * Optional. Tool execution request.
   *
   * @param ToolCall $toolCall
   */
  public function setToolCall(ToolCall $toolCall)
  {
    $this->toolCall = $toolCall;
  }
  /**
   * @return ToolCall
   */
  public function getToolCall()
  {
    return $this->toolCall;
  }
  /**
   * Optional. Tool execution response.
   *
   * @param ToolResponse $toolResponse
   */
  public function setToolResponse(ToolResponse $toolResponse)
  {
    $this->toolResponse = $toolResponse;
  }
  /**
   * @return ToolResponse
   */
  public function getToolResponse()
  {
    return $this->toolResponse;
  }
  /**
   * Optional. Transcript associated with the audio.
   *
   * @param string $transcript
   */
  public function setTranscript($transcript)
  {
    $this->transcript = $transcript;
  }
  /**
   * @return string
   */
  public function getTranscript()
  {
    return $this->transcript;
  }
  /**
   * A struct represents variables that were updated in the conversation, keyed
   * by variable names.
   *
   * @param array[] $updatedVariables
   */
  public function setUpdatedVariables($updatedVariables)
  {
    $this->updatedVariables = $updatedVariables;
  }
  /**
   * @return array[]
   */
  public function getUpdatedVariables()
  {
    return $this->updatedVariables;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Chunk::class, 'Google_Service_CustomerEngagementSuite_Chunk');
