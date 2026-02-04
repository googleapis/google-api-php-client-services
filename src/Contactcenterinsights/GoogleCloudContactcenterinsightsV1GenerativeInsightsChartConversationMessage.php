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

class GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessage extends \Google\Model
{
  /**
   * For user messages, this is the time at which the system received the
   * message. For system messages, this is the time at which the system
   * generated the message.
   *
   * @var string
   */
  public $createTime;
  /**
   * The message id of the message.
   *
   * @var string
   */
  public $messageId;
  protected $systemMessageType = GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessageSystemMessage::class;
  protected $systemMessageDataType = '';
  protected $userMessageType = GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessageUserMessage::class;
  protected $userMessageDataType = '';

  /**
   * For user messages, this is the time at which the system received the
   * message. For system messages, this is the time at which the system
   * generated the message.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * The message id of the message.
   *
   * @param string $messageId
   */
  public function setMessageId($messageId)
  {
    $this->messageId = $messageId;
  }
  /**
   * @return string
   */
  public function getMessageId()
  {
    return $this->messageId;
  }
  /**
   * A message from the system in response to the user.
   *
   * @param GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessageSystemMessage $systemMessage
   */
  public function setSystemMessage(GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessageSystemMessage $systemMessage)
  {
    $this->systemMessage = $systemMessage;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessageSystemMessage
   */
  public function getSystemMessage()
  {
    return $this->systemMessage;
  }
  /**
   * A message from the user that is interacting with the system.
   *
   * @param GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessageUserMessage $userMessage
   */
  public function setUserMessage(GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessageUserMessage $userMessage)
  {
    $this->userMessage = $userMessage;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessageUserMessage
   */
  public function getUserMessage()
  {
    return $this->userMessage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessage::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessage');
