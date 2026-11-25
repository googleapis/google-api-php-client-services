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

namespace Google\Service\DeploymentManager;

class AgentConversationsSendMessageOperationMetadata extends \Google\Model
{
  /**
   * Output only. [Output Only] Link that opens the conversation in the Google
   * Cloud console.
   *
   * @var string
   */
  public $consoleUri;
  /**
   * Output only. [Output Only] URL of the conversation. Pass it as
   * agentConversation to later sendMessage calls to continue the conversation.
   *
   * @var string
   */
  public $conversation;

  /**
   * Output only. [Output Only] Link that opens the conversation in the Google
   * Cloud console.
   *
   * @param string $consoleUri
   */
  public function setConsoleUri($consoleUri)
  {
    $this->consoleUri = $consoleUri;
  }
  /**
   * @return string
   */
  public function getConsoleUri()
  {
    return $this->consoleUri;
  }
  /**
   * Output only. [Output Only] URL of the conversation. Pass it as
   * agentConversation to later sendMessage calls to continue the conversation.
   *
   * @param string $conversation
   */
  public function setConversation($conversation)
  {
    $this->conversation = $conversation;
  }
  /**
   * @return string
   */
  public function getConversation()
  {
    return $this->conversation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentConversationsSendMessageOperationMetadata::class, 'Google_Service_DeploymentManager_AgentConversationsSendMessageOperationMetadata');
