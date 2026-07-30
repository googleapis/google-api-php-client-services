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

namespace Google\Service\HangoutsChat;

class SearchMessageResult extends \Google\Model
{
  /**
   * Reserved.
   */
  public const SPACE_MUTE_SETTING_MUTE_SETTING_UNSPECIFIED = 'MUTE_SETTING_UNSPECIFIED';
  /**
   * The user will receive notifications for the space based on the notification
   * setting.
   */
  public const SPACE_MUTE_SETTING_UNMUTED = 'UNMUTED';
  /**
   * The user will not receive any notifications for the space, regardless of
   * the notification setting.
   */
  public const SPACE_MUTE_SETTING_MUTED = 'MUTED';
  protected $messageType = Message::class;
  protected $messageDataType = '';
  /**
   * Indicates if the matched message is read by the calling user. Only returned
   * if the request view is `SEARCH_MESSAGES_VIEW_FULL` and the calling
   * credentials include one of the following [authorization
   * scopes](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.users.readstate.readonly` -
   * `https://www.googleapis.com/auth/chat.users.readstate`
   *
   * @var bool
   */
  public $read;
  /**
   * The mute setting of the calling user for the space where the message is
   * posted. The caller app can use this information to decide how to process
   * the message depending on whether the space is muted for the user or not.
   * Only returned if the request view is `SEARCH_MESSAGES_VIEW_FULL` and the
   * calling credentials include the following [authorization
   * scope](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.users.spacesettings`
   *
   * @var string
   */
  public $spaceMuteSetting;

  /**
   * The matched message.
   *
   * @param Message $message
   */
  public function setMessage(Message $message)
  {
    $this->message = $message;
  }
  /**
   * @return Message
   */
  public function getMessage()
  {
    return $this->message;
  }
  /**
   * Indicates if the matched message is read by the calling user. Only returned
   * if the request view is `SEARCH_MESSAGES_VIEW_FULL` and the calling
   * credentials include one of the following [authorization
   * scopes](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.users.readstate.readonly` -
   * `https://www.googleapis.com/auth/chat.users.readstate`
   *
   * @param bool $read
   */
  public function setRead($read)
  {
    $this->read = $read;
  }
  /**
   * @return bool
   */
  public function getRead()
  {
    return $this->read;
  }
  /**
   * The mute setting of the calling user for the space where the message is
   * posted. The caller app can use this information to decide how to process
   * the message depending on whether the space is muted for the user or not.
   * Only returned if the request view is `SEARCH_MESSAGES_VIEW_FULL` and the
   * calling credentials include the following [authorization
   * scope](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.users.spacesettings`
   *
   * Accepted values: MUTE_SETTING_UNSPECIFIED, UNMUTED, MUTED
   *
   * @param self::SPACE_MUTE_SETTING_* $spaceMuteSetting
   */
  public function setSpaceMuteSetting($spaceMuteSetting)
  {
    $this->spaceMuteSetting = $spaceMuteSetting;
  }
  /**
   * @return self::SPACE_MUTE_SETTING_*
   */
  public function getSpaceMuteSetting()
  {
    return $this->spaceMuteSetting;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SearchMessageResult::class, 'Google_Service_HangoutsChat_SearchMessageResult');
