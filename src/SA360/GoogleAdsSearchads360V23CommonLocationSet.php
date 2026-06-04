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

class GoogleAdsSearchads360V23CommonLocationSet extends \Google\Model
{
  /**
   * Not specified.
   */
  public const LOCATION_OWNERSHIP_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const LOCATION_OWNERSHIP_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Business Owner of location(legacy location extension - LE).
   */
  public const LOCATION_OWNERSHIP_TYPE_BUSINESS_OWNER = 'BUSINESS_OWNER';
  /**
   * Affiliate location(Third party location extension - ALE).
   */
  public const LOCATION_OWNERSHIP_TYPE_AFFILIATE = 'AFFILIATE';
  protected $businessProfileLocationSetType = GoogleAdsSearchads360V23CommonBusinessProfileLocationSet::class;
  protected $businessProfileLocationSetDataType = '';
  protected $chainLocationSetType = GoogleAdsSearchads360V23CommonChainSet::class;
  protected $chainLocationSetDataType = '';
  /**
   * Required. Immutable. Location Ownership Type (owned location or affiliate
   * location).
   *
   * @var string
   */
  public $locationOwnershipType;
  protected $mapsLocationSetType = GoogleAdsSearchads360V23CommonMapsLocationSet::class;
  protected $mapsLocationSetDataType = '';

  /**
   * Data used to configure a location set populated from Google Business
   * Profile locations.
   *
   * @param GoogleAdsSearchads360V23CommonBusinessProfileLocationSet $businessProfileLocationSet
   */
  public function setBusinessProfileLocationSet(GoogleAdsSearchads360V23CommonBusinessProfileLocationSet $businessProfileLocationSet)
  {
    $this->businessProfileLocationSet = $businessProfileLocationSet;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonBusinessProfileLocationSet
   */
  public function getBusinessProfileLocationSet()
  {
    return $this->businessProfileLocationSet;
  }
  /**
   * Data used to configure a location on chain set populated with the specified
   * chains.
   *
   * @param GoogleAdsSearchads360V23CommonChainSet $chainLocationSet
   */
  public function setChainLocationSet(GoogleAdsSearchads360V23CommonChainSet $chainLocationSet)
  {
    $this->chainLocationSet = $chainLocationSet;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonChainSet
   */
  public function getChainLocationSet()
  {
    return $this->chainLocationSet;
  }
  /**
   * Required. Immutable. Location Ownership Type (owned location or affiliate
   * location).
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BUSINESS_OWNER, AFFILIATE
   *
   * @param self::LOCATION_OWNERSHIP_TYPE_* $locationOwnershipType
   */
  public function setLocationOwnershipType($locationOwnershipType)
  {
    $this->locationOwnershipType = $locationOwnershipType;
  }
  /**
   * @return self::LOCATION_OWNERSHIP_TYPE_*
   */
  public function getLocationOwnershipType()
  {
    return $this->locationOwnershipType;
  }
  /**
   * Only set if locations are synced based on selected maps locations
   *
   * @param GoogleAdsSearchads360V23CommonMapsLocationSet $mapsLocationSet
   */
  public function setMapsLocationSet(GoogleAdsSearchads360V23CommonMapsLocationSet $mapsLocationSet)
  {
    $this->mapsLocationSet = $mapsLocationSet;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonMapsLocationSet
   */
  public function getMapsLocationSet()
  {
    return $this->mapsLocationSet;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonLocationSet::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonLocationSet');
