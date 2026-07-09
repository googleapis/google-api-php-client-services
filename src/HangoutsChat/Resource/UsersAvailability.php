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

use Google\Service\HangoutsChat\Availability;
use Google\Service\HangoutsChat\MarkAsActiveRequest;
use Google\Service\HangoutsChat\MarkAsAwayRequest;
use Google\Service\HangoutsChat\MarkAsDoNotDisturbRequest;

/**
 * The "availability" collection of methods.
 * Typical usage is:
 *  <code>
 *   $chatService = new Google\Service\HangoutsChat(...);
 *   $availability = $chatService->users_availability;
 *  </code>
 */
class UsersAvailability extends \Google\Service\Resource
{
  /**
   * Returns availability information for a human user in Google Chat. For
   * example, this can be used to check if a user is online or away, or to
   * retrieve their custom status message. This method only retrieves the
   * authenticated user's availability. Requires [user
   * authentication](https://developers.google.com/workspace/chat/authenticate-
   * authorize-chat-user) with one of the following [authorization
   * scopes](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.users.availability.readonly` -
   * `https://www.googleapis.com/auth/chat.users.availability` (availability.get)
   *
   * @param string $name Required. The resource name of the availability to
   * retrieve. Format: users/{user}/availability `{user}` is the id for the Person
   * in the People API or Admin SDK directory API. For example, `users/123456789`.
   * The user's email address or `me` can also be used as an alias to refer to the
   * caller. For example, `users/user@example.com` or `users/me`.
   * @param array $optParams Optional parameters.
   * @return Availability
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Availability::class);
  }
  /**
   * Marks user as `ACTIVE` in Google Chat. Sets the user's availability state to
   * `ACTIVE`. The `ACTIVE` state lasts until the specified expiration, at which
   * point the user's state becomes `AWAY`. Note that if the user is actively
   * using Chat, the `ACTIVE` state duration may extend beyond the provided
   * expiration. This method only updates the authenticated user's availability.
   * Requires [user
   * authentication](https://developers.google.com/workspace/chat/authenticate-
   * authorize-chat-user) with [authorization
   * scope](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.users.availability`
   * (availability.markAsActive)
   *
   * @param string $name Required. The resource name of the availability to mark
   * as active. Format: users/{user}/availability `{user}` is the id for the
   * Person in the People API or Admin SDK directory API. For example,
   * `users/123456789`. The user's email address or `me` can also be used as an
   * alias to refer to the caller. For example, `users/user@example.com` or
   * `users/me`.
   * @param MarkAsActiveRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Availability
   * @throws \Google\Service\Exception
   */
  public function markAsActive($name, MarkAsActiveRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('markAsActive', [$params], Availability::class);
  }
  /**
   * Marks user as `AWAY` in Google Chat. Sets the user's state to away and is not
   * affected by the user's activity. This method only updates the authenticated
   * user's availability. Requires [user
   * authentication](https://developers.google.com/workspace/chat/authenticate-
   * authorize-chat-user) with [authorization
   * scope](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.users.availability`
   * (availability.markAsAway)
   *
   * @param string $name Required. The resource name of the availability to mark
   * as away. Format: users/{user}/availability `{user}` is the id for the Person
   * in the People API or Admin SDK directory API. For example, `users/123456789`.
   * The user's email address or `me` can also be used as an alias to refer to the
   * caller. For example, `users/user@example.com` or `users/me`.
   * @param MarkAsAwayRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Availability
   * @throws \Google\Service\Exception
   */
  public function markAsAway($name, MarkAsAwayRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('markAsAway', [$params], Availability::class);
  }
  /**
   * Marks user as `DO_NOT_DISTURB` in Google Chat. Sets a user's availability
   * state to `DO_NOT_DISTURB` until a specified expiration time. When in
   * `DO_NOT_DISTURB`, users typically won't receive notifications. This method
   * only updates the authenticated user's availability. Requires [user
   * authentication](https://developers.google.com/workspace/chat/authenticate-
   * authorize-chat-user) with [authorization
   * scope](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.users.availability`
   * (availability.markAsDoNotDisturb)
   *
   * @param string $name Required. The resource name of the availability to mark
   * as Do Not Disturb. Format: users/{user}/availability `{user}` is the id for
   * the Person in the People API or Admin SDK directory API. For example,
   * `users/123456789`. The user's email address or `me` can also be used as an
   * alias to refer to the caller. For example, `users/user@example.com` or
   * `users/me`.
   * @param MarkAsDoNotDisturbRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Availability
   * @throws \Google\Service\Exception
   */
  public function markAsDoNotDisturb($name, MarkAsDoNotDisturbRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('markAsDoNotDisturb', [$params], Availability::class);
  }
  /**
   * Updates availability information for a human user. Only the `custom_status`
   * field can be updated through this method. This method only updates the
   * authenticated user's availability. Requires [user
   * authentication](https://developers.google.com/workspace/chat/authenticate-
   * authorize-chat-user) with one of the following [authorization
   * scopes](https://developers.google.com/workspace/chat/authenticate-
   * authorize#chat-api-scopes): -
   * `https://www.googleapis.com/auth/chat.users.availability`
   * (availability.patch)
   *
   * @param string $name Identifier. Resource name of the user's availability.
   * Format: `users/{user}/availability` `{user}` is the id for the Person in the
   * People API or Admin SDK directory API. For example, `users/123456789`. The
   * user's email address or `me` can also be used as an alias to refer to the
   * caller. For example, `users/user@example.com` or `users/me`.
   * @param Availability $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. The list of fields to update. The only
   * field that can be updated is `custom_status`.
   * @return Availability
   * @throws \Google\Service\Exception
   */
  public function patch($name, Availability $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Availability::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UsersAvailability::class, 'Google_Service_HangoutsChat_Resource_UsersAvailability');
