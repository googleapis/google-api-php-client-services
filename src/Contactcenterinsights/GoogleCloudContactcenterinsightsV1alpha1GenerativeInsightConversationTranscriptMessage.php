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

class GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessage extends \Google\Model
{
  /**
   * Output only. For user messages, this is the time at which the system
   * received the message. For system messages, this is the time at which the
   * system generated the message.
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
  protected $systemMessageWrapperType = GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessageSystemMessages::class;
  protected $systemMessageWrapperDataType = '';
  protected $userMessageType = GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessageUserMessage::class;
  protected $userMessageDataType = '';

  /**
   * Output only. For user messages, this is the time at which the system
   * received the message. For system messages, this is the time at which the
   * system generated the message.
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
   * A wrapper for system messages per turn.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessageSystemMessages $systemMessageWrapper
   */
  public function setSystemMessageWrapper(GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessageSystemMessages $systemMessageWrapper)
  {
    $this->systemMessageWrapper = $systemMessageWrapper;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessageSystemMessages
   */
  public function getSystemMessageWrapper()
  {
    return $this->systemMessageWrapper;
  }
  /**
   * A message from the user that is interacting with the system.
   *
   * @param GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessageUserMessage $userMessage
   */
  public function setUserMessage(GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessageUserMessage $userMessage)
  {
    $this->userMessage = $userMessage;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessageUserMessage
   */
  public function getUserMessage()
  {
    return $this->userMessage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessage::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1alpha1GenerativeInsightConversationTranscriptMessage');
