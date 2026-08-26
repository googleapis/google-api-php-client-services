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
use Google\Service\HangoutsChat\ListMessagePinsResponse;
use Google\Service\HangoutsChat\MessagePin;

/**
 * The "messagePins" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chatService = new Google\Service\HangoutsChat(...);
 *   $messagePins = $chatService->spaces_messagePins;
 *  </code>
 */
class SpacesMessagePins extends \Google\Service\Resource
{
  /**
   * Creates a message pin. Requires [user
   * authentication](https://developers.google.com/workspace/chat/authenticate-
   * authorize-chat-user) with one of the following [authorization
   * scopes](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.spaces.pins` -
   * `https://www.googleapis.com/auth/chat.spaces` (messagePins.create)
   *
   * @param string $parent Required. The parent space in which to create the
   * message pin. Format: spaces/{space}
   * @param MessagePin $postBody
   * @param array $optParams Optional parameters.
   * @return MessagePin
   * @throws \Google\Service\Exception
   */
  public function create($parent, MessagePin $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], MessagePin::class);
  }
  /**
   * Deletes a message pin. Requires [user
   * authentication](https://developers.google.com/workspace/chat/authenticate-
   * authorize-chat-user) with one of the following [authorization
   * scopes](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.spaces.pins` -
   * `https://www.googleapis.com/auth/chat.spaces` (messagePins.delete)
   *
   * @param string $name Required. The resource name of the message pin to remove.
   * Format: spaces/{space}/messagePins/{message_pin}
   * @param array $optParams Optional parameters.
   * @return ChatEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], ChatEmpty::class);
  }
  /**
   * Lists message pins in a space. Users can pin important messages in spaces for
   * easy access. For more information, see [Pin or unpin a conversation in Google
   * Chat](https://support.google.com/chat/answer/15622437). Requires [user
   * authentication](https://developers.google.com/workspace/chat/authenticate-
   * authorize-chat-user) with one of the following [authorization
   * scopes](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.spaces.pins.readonly` -
   * `https://www.googleapis.com/auth/chat.spaces.pins` -
   * `https://www.googleapis.com/auth/chat.spaces.readonly` -
   * `https://www.googleapis.com/auth/chat.spaces`
   * (messagePins.listSpacesMessagePins)
   *
   * @param string $parent Required. The parent space which owns the collection of
   * pinned items Format: `spaces/{space}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of message pins
   * returned. The service might return fewer messages than this value. The
   * maximum value is 100. If you use a value more than 100, it's automatically
   * changed to 100. If unspecified, at most 100 message pins will be returned.
   * Negative values return an `INVALID_ARGUMENT` error.
   * @opt_param string pageToken Optional. A page token received from a previous
   * list message pins call. Provide this parameter to retrieve the subsequent
   * page. When paginating, all other parameters provided should match the call
   * that provided the page token. Passing different values to the other
   * parameters might lead to unexpected results.
   * @return ListMessagePinsResponse
   * @throws \Google\Service\Exception
   */
  public function listSpacesMessagePins($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListMessagePinsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SpacesMessagePins::class, 'Google_Service_HangoutsChat_Resource_SpacesMessagePins');
