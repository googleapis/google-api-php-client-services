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

class GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestTargetImpressionShareInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const LOCATION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const LOCATION_UNKNOWN = 'UNKNOWN';
  /**
   * Any location on the web page.
   */
  public const LOCATION_ANYWHERE_ON_PAGE = 'ANYWHERE_ON_PAGE';
  /**
   * Top box of ads.
   */
  public const LOCATION_TOP_OF_PAGE = 'TOP_OF_PAGE';
  /**
   * Top slot in the top box of ads.
   */
  public const LOCATION_ABSOLUTE_TOP_OF_PAGE = 'ABSOLUTE_TOP_OF_PAGE';
  /**
   * Required. The targeted location on the search results page. This is
   * required for campaigns where the AdvertisingChannelType is SEARCH and the
   * bidding strategy type is TARGET_IMPRESSION_SHARE.
   *
   * @var string
   */
  public $location;
  /**
   * Optional. Ceiling of max CPC bids in micros set by automated bidders. This
   * is optional for campaigns with an AdvertisingChannelType of SEARCH and a
   * bidding strategy type of TARGET_IMPRESSION_SHARE.
   *
   * @var string
   */
  public $maxCpcBidCeiling;
  /**
   * Required. The chosen fraction of targeted impression share in micros. For
   * example, 1% equals 10,000. It must be a value between 1 and 1,000,000. This
   * is required for campaigns with an AdvertisingChannelType of SEARCH and a
   * bidding strategy type of TARGET_IMPRESSION_SHARE.
   *
   * @var string
   */
  public $targetImpressionShareMicros;

  /**
   * Required. The targeted location on the search results page. This is
   * required for campaigns where the AdvertisingChannelType is SEARCH and the
   * bidding strategy type is TARGET_IMPRESSION_SHARE.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ANYWHERE_ON_PAGE, TOP_OF_PAGE,
   * ABSOLUTE_TOP_OF_PAGE
   *
   * @param self::LOCATION_* $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return self::LOCATION_*
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Optional. Ceiling of max CPC bids in micros set by automated bidders. This
   * is optional for campaigns with an AdvertisingChannelType of SEARCH and a
   * bidding strategy type of TARGET_IMPRESSION_SHARE.
   *
   * @param string $maxCpcBidCeiling
   */
  public function setMaxCpcBidCeiling($maxCpcBidCeiling)
  {
    $this->maxCpcBidCeiling = $maxCpcBidCeiling;
  }
  /**
   * @return string
   */
  public function getMaxCpcBidCeiling()
  {
    return $this->maxCpcBidCeiling;
  }
  /**
   * Required. The chosen fraction of targeted impression share in micros. For
   * example, 1% equals 10,000. It must be a value between 1 and 1,000,000. This
   * is required for campaigns with an AdvertisingChannelType of SEARCH and a
   * bidding strategy type of TARGET_IMPRESSION_SHARE.
   *
   * @param string $targetImpressionShareMicros
   */
  public function setTargetImpressionShareMicros($targetImpressionShareMicros)
  {
    $this->targetImpressionShareMicros = $targetImpressionShareMicros;
  }
  /**
   * @return string
   */
  public function getTargetImpressionShareMicros()
  {
    return $this->targetImpressionShareMicros;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestTargetImpressionShareInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestTargetImpressionShareInfo');
