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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1betaEngineSearchEngineConfig extends \Google\Collection
{
  /**
   * Default value when the enum is unspecified. This is invalid to use.
   */
  public const SEARCH_TIER_SEARCH_TIER_UNSPECIFIED = 'SEARCH_TIER_UNSPECIFIED';
  /**
   * Standard tier.
   */
  public const SEARCH_TIER_SEARCH_TIER_STANDARD = 'SEARCH_TIER_STANDARD';
  /**
   * Enterprise tier.
   */
  public const SEARCH_TIER_SEARCH_TIER_ENTERPRISE = 'SEARCH_TIER_ENTERPRISE';
  protected $collection_key = 'searchAddOns';
  /**
   * The add-on that this search engine enables.
   *
   * @var string[]
   */
  public $searchAddOns;
  /**
   * The search feature tier of this engine. Different tiers might have
   * different pricing. To learn more, check the pricing documentation. Defaults
   * to SearchTier.SEARCH_TIER_STANDARD if not specified.
   *
   * @var string
   */
  public $searchTier;

  /**
   * The add-on that this search engine enables.
   *
   * @param string[] $searchAddOns
   */
  public function setSearchAddOns($searchAddOns)
  {
    $this->searchAddOns = $searchAddOns;
  }
  /**
   * @return string[]
   */
  public function getSearchAddOns()
  {
    return $this->searchAddOns;
  }
  /**
   * The search feature tier of this engine. Different tiers might have
   * different pricing. To learn more, check the pricing documentation. Defaults
   * to SearchTier.SEARCH_TIER_STANDARD if not specified.
   *
   * Accepted values: SEARCH_TIER_UNSPECIFIED, SEARCH_TIER_STANDARD,
   * SEARCH_TIER_ENTERPRISE
   *
   * @param self::SEARCH_TIER_* $searchTier
   */
  public function setSearchTier($searchTier)
  {
    $this->searchTier = $searchTier;
  }
  /**
   * @return self::SEARCH_TIER_*
   */
  public function getSearchTier()
  {
    return $this->searchTier;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1betaEngineSearchEngineConfig::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1betaEngineSearchEngineConfig');
