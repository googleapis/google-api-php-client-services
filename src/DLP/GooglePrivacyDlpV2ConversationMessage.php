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

class GooglePrivacyDlpV2ConversationMessage extends \Google\Model
{
  /**
   * Unused.
   */
  public const MESSAGE_TYPE_MESSAGE_TYPE_UNSPECIFIED = 'MESSAGE_TYPE_UNSPECIFIED';
  /**
   * Message contains content to be inspected.
   */
  public const MESSAGE_TYPE_CONTENT = 'CONTENT';
  /**
   * Message contains context only and will not have findings reported from it
   * during inspection or redacted from it during de-identification.
   */
  public const MESSAGE_TYPE_CONTEXT = 'CONTEXT';
  /**
   * The contents of this message.
   *
   * @var string
   */
  public $content;
  /**
   * The type of message.
   *
   * @var string
   */
  public $messageType;
  /**
   * Optional. The identifier of the participant, for example 'test-user' or
   * 'gemini'. The participant ID can contain lowercase letters, numbers, and
   * hyphens; that is, it must match the regular expression:
   * `^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$`. The maximum length is 63 characters.
   *
   * @var string
   */
  public $participantId;

  /**
   * The contents of this message.
   *
   * @param string $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /**
   * @return string
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * The type of message.
   *
   * Accepted values: MESSAGE_TYPE_UNSPECIFIED, CONTENT, CONTEXT
   *
   * @param self::MESSAGE_TYPE_* $messageType
   */
  public function setMessageType($messageType)
  {
    $this->messageType = $messageType;
  }
  /**
   * @return self::MESSAGE_TYPE_*
   */
  public function getMessageType()
  {
    return $this->messageType;
  }
  /**
   * Optional. The identifier of the participant, for example 'test-user' or
   * 'gemini'. The participant ID can contain lowercase letters, numbers, and
   * hyphens; that is, it must match the regular expression:
   * `^[a-z]([a-z0-9-]{0,61}[a-z0-9])?$`. The maximum length is 63 characters.
   *
   * @param string $participantId
   */
  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }
  /**
   * @return string
   */
  public function getParticipantId()
  {
    return $this->participantId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2ConversationMessage::class, 'Google_Service_DLP_GooglePrivacyDlpV2ConversationMessage');
