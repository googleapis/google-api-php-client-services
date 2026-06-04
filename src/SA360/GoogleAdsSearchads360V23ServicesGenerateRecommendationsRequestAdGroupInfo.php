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

class GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestAdGroupInfo extends \Google\Collection
{
  /**
   * The type has not been specified.
   */
  public const AD_GROUP_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const AD_GROUP_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The default ad group type for Search campaigns.
   */
  public const AD_GROUP_TYPE_SEARCH_STANDARD = 'SEARCH_STANDARD';
  /**
   * The default ad group type for Display campaigns.
   */
  public const AD_GROUP_TYPE_DISPLAY_STANDARD = 'DISPLAY_STANDARD';
  /**
   * The ad group type for Shopping campaigns serving standard product ads.
   */
  public const AD_GROUP_TYPE_SHOPPING_PRODUCT_ADS = 'SHOPPING_PRODUCT_ADS';
  /**
   * The default ad group type for Hotel campaigns.
   */
  public const AD_GROUP_TYPE_HOTEL_ADS = 'HOTEL_ADS';
  /**
   * The type for ad groups in Smart Shopping campaigns.
   */
  public const AD_GROUP_TYPE_SHOPPING_SMART_ADS = 'SHOPPING_SMART_ADS';
  /**
   * Short unskippable in-stream video ads.
   */
  public const AD_GROUP_TYPE_VIDEO_BUMPER = 'VIDEO_BUMPER';
  /**
   * TrueView (skippable) in-stream video ads.
   */
  public const AD_GROUP_TYPE_VIDEO_TRUE_VIEW_IN_STREAM = 'VIDEO_TRUE_VIEW_IN_STREAM';
  /**
   * TrueView in-display video ads.
   */
  public const AD_GROUP_TYPE_VIDEO_TRUE_VIEW_IN_DISPLAY = 'VIDEO_TRUE_VIEW_IN_DISPLAY';
  /**
   * Unskippable in-stream video ads.
   */
  public const AD_GROUP_TYPE_VIDEO_NON_SKIPPABLE_IN_STREAM = 'VIDEO_NON_SKIPPABLE_IN_STREAM';
  /**
   * Ad group type for Dynamic Search Ads ad groups.
   */
  public const AD_GROUP_TYPE_SEARCH_DYNAMIC_ADS = 'SEARCH_DYNAMIC_ADS';
  /**
   * The type for ad groups in Shopping Comparison Listing campaigns.
   */
  public const AD_GROUP_TYPE_SHOPPING_COMPARISON_LISTING_ADS = 'SHOPPING_COMPARISON_LISTING_ADS';
  /**
   * The ad group type for Promoted Hotel ad groups.
   */
  public const AD_GROUP_TYPE_PROMOTED_HOTEL_ADS = 'PROMOTED_HOTEL_ADS';
  /**
   * Video responsive ad groups.
   */
  public const AD_GROUP_TYPE_VIDEO_RESPONSIVE = 'VIDEO_RESPONSIVE';
  /**
   * Video efficient reach ad groups.
   */
  public const AD_GROUP_TYPE_VIDEO_EFFICIENT_REACH = 'VIDEO_EFFICIENT_REACH';
  /**
   * Ad group type for Smart campaigns.
   */
  public const AD_GROUP_TYPE_SMART_CAMPAIGN_ADS = 'SMART_CAMPAIGN_ADS';
  /**
   * Ad group type for Travel campaigns.
   */
  public const AD_GROUP_TYPE_TRAVEL_ADS = 'TRAVEL_ADS';
  protected $collection_key = 'keywords';
  /**
   * Optional. AdGroup Type of the AdGroup. This field is necessary for the
   * following recommendation_types if ad_group_info is set: KEYWORD
   *
   * @var string
   */
  public $adGroupType;
  protected $keywordsType = GoogleAdsSearchads360V23CommonKeywordInfo::class;
  protected $keywordsDataType = 'array';

  /**
   * Optional. AdGroup Type of the AdGroup. This field is necessary for the
   * following recommendation_types if ad_group_info is set: KEYWORD
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SEARCH_STANDARD, DISPLAY_STANDARD,
   * SHOPPING_PRODUCT_ADS, HOTEL_ADS, SHOPPING_SMART_ADS, VIDEO_BUMPER,
   * VIDEO_TRUE_VIEW_IN_STREAM, VIDEO_TRUE_VIEW_IN_DISPLAY,
   * VIDEO_NON_SKIPPABLE_IN_STREAM, SEARCH_DYNAMIC_ADS,
   * SHOPPING_COMPARISON_LISTING_ADS, PROMOTED_HOTEL_ADS, VIDEO_RESPONSIVE,
   * VIDEO_EFFICIENT_REACH, SMART_CAMPAIGN_ADS, TRAVEL_ADS
   *
   * @param self::AD_GROUP_TYPE_* $adGroupType
   */
  public function setAdGroupType($adGroupType)
  {
    $this->adGroupType = $adGroupType;
  }
  /**
   * @return self::AD_GROUP_TYPE_*
   */
  public function getAdGroupType()
  {
    return $this->adGroupType;
  }
  /**
   * Optional. Current keywords. This field is optional for the following
   * recommendation_types if ad_group_info is set: KEYWORD
   *
   * @param GoogleAdsSearchads360V23CommonKeywordInfo[] $keywords
   */
  public function setKeywords($keywords)
  {
    $this->keywords = $keywords;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeywordInfo[]
   */
  public function getKeywords()
  {
    return $this->keywords;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestAdGroupInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestAdGroupInfo');
