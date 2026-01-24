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

namespace Google\Service\ThreatIntelligenceService;

class AssetDiscoverySeed extends \Google\Model
{
  /**
   * Default value, should never be set.
   */
  public const SEED_TYPE_ASSET_DISCOVERY_SEED_TYPE_UNSPECIFIED = 'ASSET_DISCOVERY_SEED_TYPE_UNSPECIFIED';
  /**
   * Seed asset is an IP address.
   */
  public const SEED_TYPE_IP_ADDRESS = 'IP_ADDRESS';
  /**
   * Seed asset is a network service.
   */
  public const SEED_TYPE_NETWORK_SERVICE = 'NETWORK_SERVICE';
  /**
   * Required. Type of the seed asset.
   *
   * @var string
   */
  public $seedType;
  /**
   * Required. Value for the seed asset. Could be an IP address, network
   * service, email addresses, etc.
   *
   * @var string
   */
  public $seedValue;

  /**
   * Required. Type of the seed asset.
   *
   * Accepted values: ASSET_DISCOVERY_SEED_TYPE_UNSPECIFIED, IP_ADDRESS,
   * NETWORK_SERVICE
   *
   * @param self::SEED_TYPE_* $seedType
   */
  public function setSeedType($seedType)
  {
    $this->seedType = $seedType;
  }
  /**
   * @return self::SEED_TYPE_*
   */
  public function getSeedType()
  {
    return $this->seedType;
  }
  /**
   * Required. Value for the seed asset. Could be an IP address, network
   * service, email addresses, etc.
   *
   * @param string $seedValue
   */
  public function setSeedValue($seedValue)
  {
    $this->seedValue = $seedValue;
  }
  /**
   * @return string
   */
  public function getSeedValue()
  {
    return $this->seedValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssetDiscoverySeed::class, 'Google_Service_ThreatIntelligenceService_AssetDiscoverySeed');
