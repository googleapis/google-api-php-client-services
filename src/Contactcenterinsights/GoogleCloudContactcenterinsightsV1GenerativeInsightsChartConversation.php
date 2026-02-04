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

class GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversation extends \Google\Collection
{
  protected $collection_key = 'messages';
  /**
   * The conversation id of the chart.
   *
   * @var string
   */
  public $conversationId;
  /**
   * The create time of the conversation.
   *
   * @var string
   */
  public $createTime;
  protected $messagesType = GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessage::class;
  protected $messagesDataType = 'array';
  /**
   * The update time of the conversation.
   *
   * @var string
   */
  public $updateTime;

  /**
   * The conversation id of the chart.
   *
   * @param string $conversationId
   */
  public function setConversationId($conversationId)
  {
    $this->conversationId = $conversationId;
  }
  /**
   * @return string
   */
  public function getConversationId()
  {
    return $this->conversationId;
  }
  /**
   * The create time of the conversation.
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
   * Ordered list of messages, including user inputs and system responses.
   *
   * @param GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessage[] $messages
   */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversationMessage[]
   */
  public function getMessages()
  {
    return $this->messages;
  }
  /**
   * The update time of the conversation.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversation::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1GenerativeInsightsChartConversation');
