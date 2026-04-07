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

namespace Google\Service\GoogleHealthAPI\Resource;

use Google\Service\GoogleHealthAPI\Identity;
use Google\Service\GoogleHealthAPI\Profile;
use Google\Service\GoogleHealthAPI\Settings;

/**
 * The "users" collection of methods.
 * Typical usage is:
 *  <code>
 *   $healthService = new Google\Service\GoogleHealthAPI(...);
 *   $users = $healthService->users;
 *  </code>
 */
class Users extends \Google\Service\Resource
{
  /**
   * Gets the user's identity. It includes the legacy Fitbit user ID and the
   * Google user ID and it can be used by migrating clients to map identifiers
   * between the two systems. (users.getIdentity)
   *
   * @param string $name Required. The resource name of the Identity. Format:
   * `users/me/identity`
   * @param array $optParams Optional parameters.
   * @return Identity
   * @throws \Google\Service\Exception
   */
  public function getIdentity($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('getIdentity', [$params], Identity::class);
  }
  /**
   * Returns user Profile details. (users.getProfile)
   *
   * @param string $name Required. The name of the Profile. Format:
   * `users/me/profile`.
   * @param array $optParams Optional parameters.
   * @return Profile
   * @throws \Google\Service\Exception
   */
  public function getProfile($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('getProfile', [$params], Profile::class);
  }
  /**
   * Returns user settings details. (users.getSettings)
   *
   * @param string $name Required. The name of the Settings. Format:
   * `users/me/settings`.
   * @param array $optParams Optional parameters.
   * @return Settings
   * @throws \Google\Service\Exception
   */
  public function getSettings($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('getSettings', [$params], Settings::class);
  }
  /**
   * Updates the user's profile details. (users.updateProfile)
   *
   * @param string $name Identifier. The resource name of this Profile resource.
   * Format: `users/{user}/profile` Example: `users/1234567890/profile` or
   * `users/me/profile` The {user} ID is a system-generated Google Health API user
   * ID, a string of 1-63 characters consisting of lowercase and uppercase
   * letters, numbers, and hyphens. The literal `me` can also be used to refer to
   * the authenticated user.
   * @param Profile $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to be updated.
   * @return Profile
   * @throws \Google\Service\Exception
   */
  public function updateProfile($name, Profile $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('updateProfile', [$params], Profile::class);
  }
  /**
   * Updates the user's settings details. (users.updateSettings)
   *
   * @param string $name Identifier. The resource name of this Settings resource.
   * Format: `users/{user}/settings` Example: `users/1234567890/settings` or
   * `users/me/settings` The {user} ID is a system-generated Google Health API
   * user ID, a string of 1-63 characters consisting of lowercase and uppercase
   * letters, numbers, and hyphens. The literal `me` can also be used to refer to
   * the authenticated user.
   * @param Settings $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to be updated.
   * @return Settings
   * @throws \Google\Service\Exception
   */
  public function updateSettings($name, Settings $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('updateSettings', [$params], Settings::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Users::class, 'Google_Service_GoogleHealthAPI_Resource_Users');
