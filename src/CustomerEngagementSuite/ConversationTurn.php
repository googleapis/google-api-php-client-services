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

class ConversationTurn extends \Google\Collection
{
  protected $collection_key = 'messages';
  protected $messagesType = Message::class;
  protected $messagesDataType = 'array';
  protected $rootSpanType = Span::class;
  protected $rootSpanDataType = '';

  /**
   * Optional. List of messages in the conversation turn, including user input,
   * agent responses and intermediate events during the processing.
   *
   * @param Message[] $messages
   */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /**
   * @return Message[]
   */
  public function getMessages()
  {
    return $this->messages;
  }
  /**
   * Optional. The root span of the action processing.
   *
   * @param Span $rootSpan
   */
  public function setRootSpan(Span $rootSpan)
  {
    $this->rootSpan = $rootSpan;
  }
  /**
   * @return Span
   */
  public function getRootSpan()
  {
    return $this->rootSpan;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConversationTurn::class, 'Google_Service_CustomerEngagementSuite_ConversationTurn');
