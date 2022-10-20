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

namespace Google\Service\HangoutsChat\Resource;

use Google\Service\HangoutsChat\ChatEmpty;
use Google\Service\HangoutsChat\Message;

/**
 * The "messages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chatService = new Google\Service\HangoutsChat(...);
 *   $messages = $chatService->messages;
 *  </code>
 */
class SpacesMessages extends \Google\Service\Resource
{
  /**
   * Creates a message. Requires [service account
   * authentication](https://developers.google.com/chat/api/guides/auth/service-
   * accounts). (messages.create)
   *
   * @param string $parent Required. Space resource name, in the form "spaces".
   * Example: spaces/AAAAAAAAAAA
   * @param Message $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string messageId Optional. A custom name for a Chat message
   * assigned at creation. Must start with `client-` and contain only lowercase
   * letters, numbers, and hyphens up to 63 characters in length. Specify this
   * field to get, update, or delete the message with the specified value. For
   * example usage, see [Name a created message](https://developers.google.com/cha
   * t/api/guides/crudl/messages#name_a_created_message).
   * @opt_param string requestId Optional. A unique request ID for this message.
   * Specifying an existing request ID returns the message created with that ID
   * instead of creating a new message.
   * @opt_param string threadKey Optional. Opaque thread identifier. To start or
   * add to a thread, create a message and specify a `threadKey` instead of
   * thread.name. (Setting thread.name has no effect.) The first message with a
   * given `threadKey` starts a new thread. Subsequent messages with the same
   * `threadKey` post into the same thread.
   * @return Message
   */
  public function create($parent, Message $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Message::class);
  }
  /**
   * Deletes a message. Requires [service account
   * authentication](https://developers.google.com/chat/api/guides/auth/service-
   * accounts). [Developer
   * Preview](https://developers.google.com/workspace/preview): Deletes a message.
   * Requires [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users) and
   * the `chat.messages` authorization scope. (messages.delete)
   *
   * @param string $name Required. Resource name of the message to be deleted, in
   * the form "spaces/messages" Example:
   * spaces/AAAAAAAAAAA/messages/BBBBBBBBBBB.BBBBBBBBBBB
   * @param array $optParams Optional parameters.
   * @return ChatEmpty
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], ChatEmpty::class);
  }
  /**
   * Returns a message. Requires [service account
   * authentication](https://developers.google.com/chat/api/guides/auth/service-
   * accounts). [Developer
   * Preview](https://developers.google.com/workspace/preview): Returns a message.
   * Requires [user
   * authentication](https://developers.google.com/chat/api/guides/auth/users) and
   * the `chat.messages` or `chat.messages.readonly` authorization scope.
   * (messages.get)
   *
   * @param string $name Required. Resource name of the message to retrieve.
   * Format: spaces/{space}/messages/{message} If the message begins with
   * `client-`, then it has a custom name assigned by a Chat app that created it
   * with the Chat REST API. That Chat app (but not others) can pass the custom
   * name to get, update, or delete the message. To learn more, see [create and
   * name a message] (https://developers.google.com/chat/api/guides/crudl/messages
   * #name_a_created_message).
   * @param array $optParams Optional parameters.
   * @return Message
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Message::class);
  }
  /**
   * Updates a message. Requires [service account
   * authentication](https://developers.google.com/chat/api/guides/auth/service-
   * accounts). (messages.update)
   *
   * @param string $name Resource name in the form `spaces/messages`. Example:
   * `spaces/AAAAAAAAAAA/messages/BBBBBBBBBBB.BBBBBBBBBBB`
   * @param Message $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool allowMissing Optional. If `true` and the message is not
   * found, a new message is created and `updateMask` is ignored. The specified
   * message ID must be [client-assigned](https://developers.google.com/chat/api/g
   * uides/crudl/messages#name_a_created_message) or the request fails.
   * @opt_param string updateMask Required. The field paths to update. Separate
   * multiple values with commas. Currently supported field paths: - text - cards
   * (Requires [service account authentication](/chat/api/guides/auth/service-
   * accounts).) - cards_v2
   * @return Message
   */
  public function update($name, Message $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('update', [$params], Message::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SpacesMessages::class, 'Google_Service_HangoutsChat_Resource_SpacesMessages');
