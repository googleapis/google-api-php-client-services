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

namespace Google\Service\Games;

class DeveloperIntegrityVerdict extends \Google\Model
{
  /**
   * Default value. Do not use.
   */
  public const CATEGORY_CATEGORY_UNSPECIFIED = 'CATEGORY_UNSPECIFIED';
  /**
   * Phone is rooted or compromised.
   */
  public const CATEGORY_DEVICE_UNTRUSTED = 'DEVICE_UNTRUSTED';
  /**
   * Binary is modified, cracked, or tampered.
   */
  public const CATEGORY_APP_UNRECOGNIZED = 'APP_UNRECOGNIZED';
  /**
   * Account did not acquire game through Play.
   */
  public const CATEGORY_ACCOUNT_UNLICENSED = 'ACCOUNT_UNLICENSED';
  /**
   * Automated bot or malicious app detected.
   */
  public const CATEGORY_ENVIRONMENT_RISK = 'ENVIRONMENT_RISK';
  /**
   * Physically impossible gameplay detected for player.
   */
  public const CATEGORY_IMPOSSIBLE_GAMEPLAY = 'IMPOSSIBLE_GAMEPLAY';
  /**
   * Other abuse category.
   */
  public const CATEGORY_OTHER = 'OTHER';
  /**
   * Default value. Do not use.
   */
  public const SOURCE_SOURCE_UNSPECIFIED = 'SOURCE_UNSPECIFIED';
  /**
   * Developer's proprietary anti-cheat system.
   */
  public const SOURCE_DEVELOPER_INTERNAL = 'DEVELOPER_INTERNAL';
  /**
   * Google Play Integrity API.
   */
  public const SOURCE_PLAY_INTEGRITY = 'PLAY_INTEGRITY';
  /**
   * Required. The standardized verdict category.
   *
   * @var string
   */
  public $category;
  /**
   * Optional. Free-form diagnostic description or internal error code. Maximum
   * length: 128 characters. Stored for console debugging; never shown to
   * players.
   *
   * @var string
   */
  public $description;
  /**
   * Required. The source that issued the verdict.
   *
   * @var string
   */
  public $source;

  /**
   * Required. The standardized verdict category.
   *
   * Accepted values: CATEGORY_UNSPECIFIED, DEVICE_UNTRUSTED, APP_UNRECOGNIZED,
   * ACCOUNT_UNLICENSED, ENVIRONMENT_RISK, IMPOSSIBLE_GAMEPLAY, OTHER
   *
   * @param self::CATEGORY_* $category
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return self::CATEGORY_*
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * Optional. Free-form diagnostic description or internal error code. Maximum
   * length: 128 characters. Stored for console debugging; never shown to
   * players.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. The source that issued the verdict.
   *
   * Accepted values: SOURCE_UNSPECIFIED, DEVELOPER_INTERNAL, PLAY_INTEGRITY
   *
   * @param self::SOURCE_* $source
   */
  public function setSource($source)
  {
    $this->source = $source;
  }
  /**
   * @return self::SOURCE_*
   */
  public function getSource()
  {
    return $this->source;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeveloperIntegrityVerdict::class, 'Google_Service_Games_DeveloperIntegrityVerdict');
