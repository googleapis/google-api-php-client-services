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

use Google\Service\HangoutsChat\ListSectionItemsResponse;
use Google\Service\HangoutsChat\MoveSectionItemRequest;
use Google\Service\HangoutsChat\MoveSectionItemResponse;

/**
 * The "items" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chatService = new Google\Service\HangoutsChat(...);
 *   $items = $chatService->users_sections_items;
 *  </code>
 */
class UsersSectionsItems extends \Google\Service\Resource
{
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Lists
   * items in a section. Only spaces can be section items. For details, see
   * [Create and organize sections in Google
   * Chat](https://support.google.com/chat/answer/16059854). Requires [user
   * authentication](https://developers.google.com/workspace/chat/authenticate-
   * authorize-chat-user) with the [authorization
   * scope](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.users.sections` -
   * `https://www.googleapis.com/auth/chat.users.sections.readonly`
   * (items.listUsersSectionsItems)
   *
   * @param string $parent Required. The parent, which is the section resource
   * name that owns this collection of section items. Only supports listing
   * section items for the calling user. When you're filtering by space, use the
   * wildcard `-` to search across all sections. For example,
   * `users/{user}/sections/-`. Format: `users/{user}/sections/{section}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A query filter. Currently only supports
   * filtering by space. For example, `space = spaces/{space}`. Invalid queries
   * are rejected with an `INVALID_ARGUMENT` error.
   * @opt_param int pageSize Optional. The maximum number of section items to
   * return. The service may return fewer than this value. If unspecified, at most
   * 10 section items will be returned. The maximum value is 100. If you use a
   * value more than 100, it's automatically changed to 100. Negative values
   * return an `INVALID_ARGUMENT` error.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * list section items call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided should match the call that provided
   * the page token. Passing different values to the other parameters might lead
   * to unexpected results.
   * @return ListSectionItemsResponse
   * @throws \Google\Service\Exception
   */
  public function listUsersSectionsItems($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSectionItemsResponse::class);
  }
  /**
   * [Developer Preview](https://developers.google.com/workspace/preview): Moves
   * an item from one section to another. For example, if a section contains
   * spaces, this method can be used to move a space to a different section. For
   * details, see [Create and organize sections in Google
   * Chat](https://support.google.com/chat/answer/16059854). Requires [user
   * authentication](https://developers.google.com/workspace/chat/authenticate-
   * authorize-chat-user) with the [authorization
   * scope](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.users.sections` (items.move)
   *
   * @param string $name Required. The resource name of the section item to move.
   * Format: `users/{user}/sections/{section}/items/{item}`
   * @param MoveSectionItemRequest $postBody
   * @param array $optParams Optional parameters.
   * @return MoveSectionItemResponse
   * @throws \Google\Service\Exception
   */
  public function move($name, MoveSectionItemRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('move', [$params], MoveSectionItemResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UsersSectionsItems::class, 'Google_Service_HangoutsChat_Resource_UsersSectionsItems');
