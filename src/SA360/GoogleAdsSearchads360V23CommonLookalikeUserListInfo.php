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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23CommonLookalikeUserListInfo extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const EXPANSION_LEVEL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Invalid expansion level.
   */
  public const EXPANSION_LEVEL_UNKNOWN = 'UNKNOWN';
  /**
   * Expansion to a small set of users that are similar to the seed lists
   */
  public const EXPANSION_LEVEL_NARROW = 'NARROW';
  /**
   * Expansion to a medium set of users that are similar to the seed lists.
   * Includes all users of EXPANSION_LEVEL_NARROW, and more.
   */
  public const EXPANSION_LEVEL_BALANCED = 'BALANCED';
  /**
   * Expansion to a large set of users that are similar to the seed lists.
   * Includes all users of EXPANSION_LEVEL_BALANCED, and more.
   */
  public const EXPANSION_LEVEL_BROAD = 'BROAD';
  protected $collection_key = 'seedUserListIds';
  /**
   * Countries targeted by the Lookalike. Two-letter country code as defined by
   * ISO-3166
   *
   * @var string[]
   */
  public $countryCodes;
  /**
   * Expansion level, reflecting the size of the lookalike audience
   *
   * @var string
   */
  public $expansionLevel;
  /**
   * Seed UserList ID from which this list is derived, provided by user.
   *
   * @var string[]
   */
  public $seedUserListIds;

  /**
   * Countries targeted by the Lookalike. Two-letter country code as defined by
   * ISO-3166
   *
   * @param string[] $countryCodes
   */
  public function setCountryCodes($countryCodes)
  {
    $this->countryCodes = $countryCodes;
  }
  /**
   * @return string[]
   */
  public function getCountryCodes()
  {
    return $this->countryCodes;
  }
  /**
   * Expansion level, reflecting the size of the lookalike audience
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NARROW, BALANCED, BROAD
   *
   * @param self::EXPANSION_LEVEL_* $expansionLevel
   */
  public function setExpansionLevel($expansionLevel)
  {
    $this->expansionLevel = $expansionLevel;
  }
  /**
   * @return self::EXPANSION_LEVEL_*
   */
  public function getExpansionLevel()
  {
    return $this->expansionLevel;
  }
  /**
   * Seed UserList ID from which this list is derived, provided by user.
   *
   * @param string[] $seedUserListIds
   */
  public function setSeedUserListIds($seedUserListIds)
  {
    $this->seedUserListIds = $seedUserListIds;
  }
  /**
   * @return string[]
   */
  public function getSeedUserListIds()
  {
    return $this->seedUserListIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonLookalikeUserListInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonLookalikeUserListInfo');
