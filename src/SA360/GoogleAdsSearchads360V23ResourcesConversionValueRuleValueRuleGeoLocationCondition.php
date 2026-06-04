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

class GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleGeoLocationCondition extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const EXCLUDED_GEO_MATCH_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const EXCLUDED_GEO_MATCH_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Either Area of Interest or Location of Presence can be used to match.
   */
  public const EXCLUDED_GEO_MATCH_TYPE_ANY = 'ANY';
  /**
   * Only Location of Presence can be used to match.
   */
  public const EXCLUDED_GEO_MATCH_TYPE_LOCATION_OF_PRESENCE = 'LOCATION_OF_PRESENCE';
  /**
   * Not specified.
   */
  public const GEO_MATCH_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const GEO_MATCH_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Either Area of Interest or Location of Presence can be used to match.
   */
  public const GEO_MATCH_TYPE_ANY = 'ANY';
  /**
   * Only Location of Presence can be used to match.
   */
  public const GEO_MATCH_TYPE_LOCATION_OF_PRESENCE = 'LOCATION_OF_PRESENCE';
  protected $collection_key = 'geoTargetConstants';
  /**
   * Excluded Geo location match type.
   *
   * @var string
   */
  public $excludedGeoMatchType;
  /**
   * Geo locations that advertisers want to exclude.
   *
   * @var string[]
   */
  public $excludedGeoTargetConstants;
  /**
   * Included Geo location match type.
   *
   * @var string
   */
  public $geoMatchType;
  /**
   * Geo locations that advertisers want to include.
   *
   * @var string[]
   */
  public $geoTargetConstants;

  /**
   * Excluded Geo location match type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ANY, LOCATION_OF_PRESENCE
   *
   * @param self::EXCLUDED_GEO_MATCH_TYPE_* $excludedGeoMatchType
   */
  public function setExcludedGeoMatchType($excludedGeoMatchType)
  {
    $this->excludedGeoMatchType = $excludedGeoMatchType;
  }
  /**
   * @return self::EXCLUDED_GEO_MATCH_TYPE_*
   */
  public function getExcludedGeoMatchType()
  {
    return $this->excludedGeoMatchType;
  }
  /**
   * Geo locations that advertisers want to exclude.
   *
   * @param string[] $excludedGeoTargetConstants
   */
  public function setExcludedGeoTargetConstants($excludedGeoTargetConstants)
  {
    $this->excludedGeoTargetConstants = $excludedGeoTargetConstants;
  }
  /**
   * @return string[]
   */
  public function getExcludedGeoTargetConstants()
  {
    return $this->excludedGeoTargetConstants;
  }
  /**
   * Included Geo location match type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ANY, LOCATION_OF_PRESENCE
   *
   * @param self::GEO_MATCH_TYPE_* $geoMatchType
   */
  public function setGeoMatchType($geoMatchType)
  {
    $this->geoMatchType = $geoMatchType;
  }
  /**
   * @return self::GEO_MATCH_TYPE_*
   */
  public function getGeoMatchType()
  {
    return $this->geoMatchType;
  }
  /**
   * Geo locations that advertisers want to include.
   *
   * @param string[] $geoTargetConstants
   */
  public function setGeoTargetConstants($geoTargetConstants)
  {
    $this->geoTargetConstants = $geoTargetConstants;
  }
  /**
   * @return string[]
   */
  public function getGeoTargetConstants()
  {
    return $this->geoTargetConstants;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleGeoLocationCondition::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesConversionValueRuleValueRuleGeoLocationCondition');
