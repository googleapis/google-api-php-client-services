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

namespace Google\Service\DLP;

class GooglePrivacyDlpV2ConversationLocation extends \Google\Model
{
  protected $allMessagesType = GooglePrivacyDlpV2AllMessages::class;
  protected $allMessagesDataType = '';
  /**
   * Matches an index of a message in the conversation provided in the request.
   *
   * @var int
   */
  public $messageIndex;

  /**
   * If set, indicates that the finding applies to all messages in the
   * conversation.
   *
   * @param GooglePrivacyDlpV2AllMessages $allMessages
   */
  public function setAllMessages(GooglePrivacyDlpV2AllMessages $allMessages)
  {
    $this->allMessages = $allMessages;
  }
  /**
   * @return GooglePrivacyDlpV2AllMessages
   */
  public function getAllMessages()
  {
    return $this->allMessages;
  }
  /**
   * Matches an index of a message in the conversation provided in the request.
   *
   * @param int $messageIndex
   */
  public function setMessageIndex($messageIndex)
  {
    $this->messageIndex = $messageIndex;
  }
  /**
   * @return int
   */
  public function getMessageIndex()
  {
    return $this->messageIndex;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2ConversationLocation::class, 'Google_Service_DLP_GooglePrivacyDlpV2ConversationLocation');
