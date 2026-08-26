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

class MessagePin extends \Google\Model
{
  /**
   * Required. Immutable. The resource name of the message that is pinned.
   * Format: `spaces/{space}/messages/{message}`
   *
   * @var string
   */
  public $message;
  /**
   * Identifier. The resource name of the message pin. Format:
   * `spaces/{space}/messagePins/{message_pin}` The resource ID component
   * matches the resource ID component of the message. For example, a message
   * with `spaces/AAA/messages/bbb.ccc` corresponds to the message pin with the
   * resource name `spaces/AAA/messagePins/bbb.ccc`.
   *
   * @var string
   */
  public $name;

  /**
   * Required. Immutable. The resource name of the message that is pinned.
   * Format: `spaces/{space}/messages/{message}`
   *
   * @param string $message
   */
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /**
   * @return string
   */
  public function getMessage()
  {
    return $this->message;
  }
  /**
   * Identifier. The resource name of the message pin. Format:
   * `spaces/{space}/messagePins/{message_pin}` The resource ID component
   * matches the resource ID component of the message. For example, a message
   * with `spaces/AAA/messages/bbb.ccc` corresponds to the message pin with the
   * resource name `spaces/AAA/messagePins/bbb.ccc`.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MessagePin::class, 'Google_Service_HangoutsChat_MessagePin');
