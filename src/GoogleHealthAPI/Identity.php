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

namespace Google\Service\GoogleHealthAPI;

class Identity extends \Google\Model
{
  /**
   * Output only. The Google User Identifier in the Google Health APIs. It
   * matches the `{user}` resource ID segment in the resource name paths, e.g.
   * `users/{user}/dataTypes/steps`. Valid values are strings of 1-63
   * characters, and valid characters are lowercase and uppercase letters,
   * numbers, and hyphens.
   *
   * @var string
   */
  public $healthUserId;
  /**
   * Output only. The legacy Fitbit User identifier. This is the Fitbit ID used
   * in the legacy Fitbit APIs (v1-v3). It can be referenced by clients
   * migrating from the legacy Fitbit APIs to map their existing identifiers to
   * the new Google user ID. It **must not** be used for any other purpose. It
   * is not of any use for new clients using only the Google Health APIs. Valid
   * values are strings of 1-63 characters, and valid characters are lowercase
   * and uppercase letters, numbers, and hyphens.
   *
   * @var string
   */
  public $legacyUserId;
  /**
   * Identifier. The resource name of this Identity resource. Format:
   * `users/me/identity`
   *
   * @var string
   */
  public $name;

  /**
   * Output only. The Google User Identifier in the Google Health APIs. It
   * matches the `{user}` resource ID segment in the resource name paths, e.g.
   * `users/{user}/dataTypes/steps`. Valid values are strings of 1-63
   * characters, and valid characters are lowercase and uppercase letters,
   * numbers, and hyphens.
   *
   * @param string $healthUserId
   */
  public function setHealthUserId($healthUserId)
  {
    $this->healthUserId = $healthUserId;
  }
  /**
   * @return string
   */
  public function getHealthUserId()
  {
    return $this->healthUserId;
  }
  /**
   * Output only. The legacy Fitbit User identifier. This is the Fitbit ID used
   * in the legacy Fitbit APIs (v1-v3). It can be referenced by clients
   * migrating from the legacy Fitbit APIs to map their existing identifiers to
   * the new Google user ID. It **must not** be used for any other purpose. It
   * is not of any use for new clients using only the Google Health APIs. Valid
   * values are strings of 1-63 characters, and valid characters are lowercase
   * and uppercase letters, numbers, and hyphens.
   *
   * @param string $legacyUserId
   */
  public function setLegacyUserId($legacyUserId)
  {
    $this->legacyUserId = $legacyUserId;
  }
  /**
   * @return string
   */
  public function getLegacyUserId()
  {
    return $this->legacyUserId;
  }
  /**
   * Identifier. The resource name of this Identity resource. Format:
   * `users/me/identity`
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
class_alias(Identity::class, 'Google_Service_GoogleHealthAPI_Identity');
