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

class GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequest extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const ADVERTISING_CHANNEL_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ADVERTISING_CHANNEL_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Search Network. Includes display bundled, and Search+ campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_SEARCH = 'SEARCH';
  /**
   * Google Display Network only.
   */
  public const ADVERTISING_CHANNEL_TYPE_DISPLAY = 'DISPLAY';
  /**
   * Shopping campaigns serve on the shopping property and on google.com search
   * results.
   */
  public const ADVERTISING_CHANNEL_TYPE_SHOPPING = 'SHOPPING';
  /**
   * Hotel Ads campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_HOTEL = 'HOTEL';
  /**
   * Video campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_VIDEO = 'VIDEO';
  /**
   * App Campaigns, and App Campaigns for Engagement, that run across multiple
   * channels.
   */
  public const ADVERTISING_CHANNEL_TYPE_MULTI_CHANNEL = 'MULTI_CHANNEL';
  /**
   * Local ads campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_LOCAL = 'LOCAL';
  /**
   * Smart campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_SMART = 'SMART';
  /**
   * Performance Max campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_PERFORMANCE_MAX = 'PERFORMANCE_MAX';
  /**
   * Local services campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_LOCAL_SERVICES = 'LOCAL_SERVICES';
  /**
   * Travel campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_TRAVEL = 'TRAVEL';
  /**
   * Demand Gen campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_DEMAND_GEN = 'DEMAND_GEN';
  /**
   * Social campaigns.
   */
  public const ADVERTISING_CHANNEL_TYPE_SOCIAL = 'SOCIAL';
  /**
   * Not specified.
   */
  public const CONVERSION_TRACKING_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CONVERSION_TRACKING_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Customer does not use any conversion tracking.
   */
  public const CONVERSION_TRACKING_STATUS_NOT_CONVERSION_TRACKED = 'NOT_CONVERSION_TRACKED';
  /**
   * The conversion actions are created and managed by this customer.
   */
  public const CONVERSION_TRACKING_STATUS_CONVERSION_TRACKING_MANAGED_BY_SELF = 'CONVERSION_TRACKING_MANAGED_BY_SELF';
  /**
   * The conversion actions are created and managed by the manager specified in
   * the request's `login-customer-id`.
   */
  public const CONVERSION_TRACKING_STATUS_CONVERSION_TRACKING_MANAGED_BY_THIS_MANAGER = 'CONVERSION_TRACKING_MANAGED_BY_THIS_MANAGER';
  /**
   * The conversion actions are created and managed by a manager different from
   * the customer or manager specified in the request's `login-customer-id`.
   */
  public const CONVERSION_TRACKING_STATUS_CONVERSION_TRACKING_MANAGED_BY_ANOTHER_MANAGER = 'CONVERSION_TRACKING_MANAGED_BY_ANOTHER_MANAGER';
  protected $collection_key = 'recommendationTypes';
  protected $adGroupInfoType = GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestAdGroupInfo::class;
  protected $adGroupInfoDataType = 'array';
  /**
   * Required. Advertising channel type of the campaign. The following
   * advertising_channel_types are supported for recommendation generation:
   * PERFORMANCE_MAX and SEARCH
   *
   * @var string
   */
  public $advertisingChannelType;
  protected $assetGroupInfoType = GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestAssetGroupInfo::class;
  protected $assetGroupInfoDataType = 'array';
  protected $biddingInfoType = GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestBiddingInfo::class;
  protected $biddingInfoDataType = '';
  protected $budgetInfoType = GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestBudgetInfo::class;
  protected $budgetInfoDataType = '';
  /**
   * Optional. Current campaign call asset count. This field is optional for the
   * following recommendation_types: CAMPAIGN_BUDGET
   *
   * @var int
   */
  public $campaignCallAssetCount;
  /**
   * Optional. Current campaign image asset count. This field is optional for
   * the following recommendation_types: CAMPAIGN_BUDGET
   *
   * @var int
   */
  public $campaignImageAssetCount;
  /**
   * Optional. Number of sitelinks on the campaign. This field is necessary for
   * the following recommendation_types: SITELINK_ASSET
   *
   * @var int
   */
  public $campaignSitelinkCount;
  /**
   * Optional. Current conversion tracking status. This field is necessary for
   * the following recommendation_types: MAXIMIZE_CLICKS_OPT_IN,
   * MAXIMIZE_CONVERSIONS_OPT_IN, MAXIMIZE_CONVERSION_VALUE_OPT_IN,
   * SET_TARGET_CPA, SET_TARGET_ROAS, TARGET_CPA_OPT_IN, TARGET_ROAS_OPT_IN
   *
   * @var string
   */
  public $conversionTrackingStatus;
  /**
   * Optional. Current campaign country codes. This field is required for the
   * following recommendation_types: CAMPAIGN_BUDGET if AdvertisingChannelType
   * is SEARCH
   *
   * @var string[]
   */
  public $countryCodes;
  /**
   * Optional. Whether or not this customer should be treated as a "new"
   * customer (that is, a customer who has not yet created a campaign). Setting
   * this to `true` will cause the backend to generate recommendations using a
   * dedicated recommendation model for onboarding new customers, as opposed to
   * the default model for existing customers. This is only recommended for
   * customers with 0 campaigns. This field is optional for the following
   * recommendation_types: CAMPAIGN_BUDGET
   *
   * @var bool
   */
  public $isNewCustomer;
  /**
   * Optional. Current campaign language codes. This field is required for the
   * following recommendation_types: CAMPAIGN_BUDGET if AdvertisingChannelType
   * is SEARCH
   *
   * @var string[]
   */
  public $languageCodes;
  /**
   * Optional. Merchant Center account ID. This field should only be set when
   * advertising_channel_type is PERFORMANCE_MAX. Setting this field causes
   * RecommendationService to generate recommendations for Performance Max for
   * retail instead of standard Performance Max. This field is optional for the
   * following recommendation_types: CAMPAIGN_BUDGET
   *
   * @var string
   */
  public $merchantCenterAccountId;
  /**
   * Optional. Current campaign negative location ids. One of this field OR
   * positive_location_ids is required for the following recommendation_types:
   * CAMPAIGN_BUDGET if AdvertisingChannelType is SEARCH
   *
   * @var string[]
   */
  public $negativeLocationsIds;
  /**
   * Optional. Current campaign positive location ids. One of this field OR
   * negative_location_ids is required for the following recommendation_types:
   * CAMPAIGN_BUDGET if AdvertisingChannelType is SEARCH
   *
   * @var string[]
   */
  public $positiveLocationsIds;
  /**
   * Required. List of eligible recommendation_types to generate. If the
   * uploaded criteria isn't sufficient to make a recommendation, or the
   * campaign is already in the recommended state, no recommendation will be
   * returned for that type. Generally, a recommendation is returned if all
   * required fields for that recommendation_type are uploaded, but there are
   * cases where this is still not sufficient. The following
   * recommendation_types are supported for recommendation generation: KEYWORD,
   * MAXIMIZE_CLICKS_OPT_IN, MAXIMIZE_CONVERSIONS_OPT_IN,
   * MAXIMIZE_CONVERSION_VALUE_OPT_IN, SET_TARGET_CPA, SET_TARGET_ROAS,
   * SITELINK_ASSET, TARGET_CPA_OPT_IN, TARGET_ROAS_OPT_IN
   *
   * @var string[]
   */
  public $recommendationTypes;
  protected $seedInfoType = GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestSeedInfo::class;
  protected $seedInfoDataType = '';
  /**
   * Optional. If true, the campaign is opted into serving ads on specified
   * placements in the Google Display Network. This field is optional for the
   * following recommendation_types: CAMPAIGN_BUDGET
   *
   * @var bool
   */
  public $targetContentNetwork;
  /**
   * Optional. If true, the campaign is opted into serving ads on the Google
   * Partner Network. This field is optional for the following
   * recommendation_types: CAMPAIGN_BUDGET
   *
   * @var bool
   */
  public $targetPartnerSearchNetwork;

  /**
   * Optional. Current AdGroup Information. Supports information from a single
   * AdGroup. This field is optional for the following recommendation_types:
   * KEYWORD
   *
   * @param GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestAdGroupInfo[] $adGroupInfo
   */
  public function setAdGroupInfo($adGroupInfo)
  {
    $this->adGroupInfo = $adGroupInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestAdGroupInfo[]
   */
  public function getAdGroupInfo()
  {
    return $this->adGroupInfo;
  }
  /**
   * Required. Advertising channel type of the campaign. The following
   * advertising_channel_types are supported for recommendation generation:
   * PERFORMANCE_MAX and SEARCH
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SEARCH, DISPLAY, SHOPPING, HOTEL,
   * VIDEO, MULTI_CHANNEL, LOCAL, SMART, PERFORMANCE_MAX, LOCAL_SERVICES,
   * TRAVEL, DEMAND_GEN, SOCIAL
   *
   * @param self::ADVERTISING_CHANNEL_TYPE_* $advertisingChannelType
   */
  public function setAdvertisingChannelType($advertisingChannelType)
  {
    $this->advertisingChannelType = $advertisingChannelType;
  }
  /**
   * @return self::ADVERTISING_CHANNEL_TYPE_*
   */
  public function getAdvertisingChannelType()
  {
    return $this->advertisingChannelType;
  }
  /**
   * Optional. Current AssetGroup Information. This field is required for the
   * following recommendation_types: CAMPAIGN_BUDGET
   *
   * @param GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestAssetGroupInfo[] $assetGroupInfo
   */
  public function setAssetGroupInfo($assetGroupInfo)
  {
    $this->assetGroupInfo = $assetGroupInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestAssetGroupInfo[]
   */
  public function getAssetGroupInfo()
  {
    return $this->assetGroupInfo;
  }
  /**
   * Optional. Current bidding information of the campaign. This field is
   * necessary for the following recommendation_types: MAXIMIZE_CLICKS_OPT_IN,
   * MAXIMIZE_CONVERSIONS_OPT_IN, MAXIMIZE_CONVERSION_VALUE_OPT_IN,
   * SET_TARGET_CPA, SET_TARGET_ROAS, TARGET_CPA_OPT_IN, TARGET_ROAS_OPT_IN
   *
   * @param GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestBiddingInfo $biddingInfo
   */
  public function setBiddingInfo(GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestBiddingInfo $biddingInfo)
  {
    $this->biddingInfo = $biddingInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestBiddingInfo
   */
  public function getBiddingInfo()
  {
    return $this->biddingInfo;
  }
  /**
   * Optional. Current budget information. This field is optional for the
   * following recommendation_types: CAMPAIGN_BUDGET
   *
   * @param GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestBudgetInfo $budgetInfo
   */
  public function setBudgetInfo(GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestBudgetInfo $budgetInfo)
  {
    $this->budgetInfo = $budgetInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestBudgetInfo
   */
  public function getBudgetInfo()
  {
    return $this->budgetInfo;
  }
  /**
   * Optional. Current campaign call asset count. This field is optional for the
   * following recommendation_types: CAMPAIGN_BUDGET
   *
   * @param int $campaignCallAssetCount
   */
  public function setCampaignCallAssetCount($campaignCallAssetCount)
  {
    $this->campaignCallAssetCount = $campaignCallAssetCount;
  }
  /**
   * @return int
   */
  public function getCampaignCallAssetCount()
  {
    return $this->campaignCallAssetCount;
  }
  /**
   * Optional. Current campaign image asset count. This field is optional for
   * the following recommendation_types: CAMPAIGN_BUDGET
   *
   * @param int $campaignImageAssetCount
   */
  public function setCampaignImageAssetCount($campaignImageAssetCount)
  {
    $this->campaignImageAssetCount = $campaignImageAssetCount;
  }
  /**
   * @return int
   */
  public function getCampaignImageAssetCount()
  {
    return $this->campaignImageAssetCount;
  }
  /**
   * Optional. Number of sitelinks on the campaign. This field is necessary for
   * the following recommendation_types: SITELINK_ASSET
   *
   * @param int $campaignSitelinkCount
   */
  public function setCampaignSitelinkCount($campaignSitelinkCount)
  {
    $this->campaignSitelinkCount = $campaignSitelinkCount;
  }
  /**
   * @return int
   */
  public function getCampaignSitelinkCount()
  {
    return $this->campaignSitelinkCount;
  }
  /**
   * Optional. Current conversion tracking status. This field is necessary for
   * the following recommendation_types: MAXIMIZE_CLICKS_OPT_IN,
   * MAXIMIZE_CONVERSIONS_OPT_IN, MAXIMIZE_CONVERSION_VALUE_OPT_IN,
   * SET_TARGET_CPA, SET_TARGET_ROAS, TARGET_CPA_OPT_IN, TARGET_ROAS_OPT_IN
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NOT_CONVERSION_TRACKED,
   * CONVERSION_TRACKING_MANAGED_BY_SELF,
   * CONVERSION_TRACKING_MANAGED_BY_THIS_MANAGER,
   * CONVERSION_TRACKING_MANAGED_BY_ANOTHER_MANAGER
   *
   * @param self::CONVERSION_TRACKING_STATUS_* $conversionTrackingStatus
   */
  public function setConversionTrackingStatus($conversionTrackingStatus)
  {
    $this->conversionTrackingStatus = $conversionTrackingStatus;
  }
  /**
   * @return self::CONVERSION_TRACKING_STATUS_*
   */
  public function getConversionTrackingStatus()
  {
    return $this->conversionTrackingStatus;
  }
  /**
   * Optional. Current campaign country codes. This field is required for the
   * following recommendation_types: CAMPAIGN_BUDGET if AdvertisingChannelType
   * is SEARCH
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
   * Optional. Whether or not this customer should be treated as a "new"
   * customer (that is, a customer who has not yet created a campaign). Setting
   * this to `true` will cause the backend to generate recommendations using a
   * dedicated recommendation model for onboarding new customers, as opposed to
   * the default model for existing customers. This is only recommended for
   * customers with 0 campaigns. This field is optional for the following
   * recommendation_types: CAMPAIGN_BUDGET
   *
   * @param bool $isNewCustomer
   */
  public function setIsNewCustomer($isNewCustomer)
  {
    $this->isNewCustomer = $isNewCustomer;
  }
  /**
   * @return bool
   */
  public function getIsNewCustomer()
  {
    return $this->isNewCustomer;
  }
  /**
   * Optional. Current campaign language codes. This field is required for the
   * following recommendation_types: CAMPAIGN_BUDGET if AdvertisingChannelType
   * is SEARCH
   *
   * @param string[] $languageCodes
   */
  public function setLanguageCodes($languageCodes)
  {
    $this->languageCodes = $languageCodes;
  }
  /**
   * @return string[]
   */
  public function getLanguageCodes()
  {
    return $this->languageCodes;
  }
  /**
   * Optional. Merchant Center account ID. This field should only be set when
   * advertising_channel_type is PERFORMANCE_MAX. Setting this field causes
   * RecommendationService to generate recommendations for Performance Max for
   * retail instead of standard Performance Max. This field is optional for the
   * following recommendation_types: CAMPAIGN_BUDGET
   *
   * @param string $merchantCenterAccountId
   */
  public function setMerchantCenterAccountId($merchantCenterAccountId)
  {
    $this->merchantCenterAccountId = $merchantCenterAccountId;
  }
  /**
   * @return string
   */
  public function getMerchantCenterAccountId()
  {
    return $this->merchantCenterAccountId;
  }
  /**
   * Optional. Current campaign negative location ids. One of this field OR
   * positive_location_ids is required for the following recommendation_types:
   * CAMPAIGN_BUDGET if AdvertisingChannelType is SEARCH
   *
   * @param string[] $negativeLocationsIds
   */
  public function setNegativeLocationsIds($negativeLocationsIds)
  {
    $this->negativeLocationsIds = $negativeLocationsIds;
  }
  /**
   * @return string[]
   */
  public function getNegativeLocationsIds()
  {
    return $this->negativeLocationsIds;
  }
  /**
   * Optional. Current campaign positive location ids. One of this field OR
   * negative_location_ids is required for the following recommendation_types:
   * CAMPAIGN_BUDGET if AdvertisingChannelType is SEARCH
   *
   * @param string[] $positiveLocationsIds
   */
  public function setPositiveLocationsIds($positiveLocationsIds)
  {
    $this->positiveLocationsIds = $positiveLocationsIds;
  }
  /**
   * @return string[]
   */
  public function getPositiveLocationsIds()
  {
    return $this->positiveLocationsIds;
  }
  /**
   * Required. List of eligible recommendation_types to generate. If the
   * uploaded criteria isn't sufficient to make a recommendation, or the
   * campaign is already in the recommended state, no recommendation will be
   * returned for that type. Generally, a recommendation is returned if all
   * required fields for that recommendation_type are uploaded, but there are
   * cases where this is still not sufficient. The following
   * recommendation_types are supported for recommendation generation: KEYWORD,
   * MAXIMIZE_CLICKS_OPT_IN, MAXIMIZE_CONVERSIONS_OPT_IN,
   * MAXIMIZE_CONVERSION_VALUE_OPT_IN, SET_TARGET_CPA, SET_TARGET_ROAS,
   * SITELINK_ASSET, TARGET_CPA_OPT_IN, TARGET_ROAS_OPT_IN
   *
   * @param string[] $recommendationTypes
   */
  public function setRecommendationTypes($recommendationTypes)
  {
    $this->recommendationTypes = $recommendationTypes;
  }
  /**
   * @return string[]
   */
  public function getRecommendationTypes()
  {
    return $this->recommendationTypes;
  }
  /**
   * Optional. Seed information for Keywords. This field is necessary for the
   * following recommendation_types: KEYWORD
   *
   * @param GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestSeedInfo $seedInfo
   */
  public function setSeedInfo(GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestSeedInfo $seedInfo)
  {
    $this->seedInfo = $seedInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestSeedInfo
   */
  public function getSeedInfo()
  {
    return $this->seedInfo;
  }
  /**
   * Optional. If true, the campaign is opted into serving ads on specified
   * placements in the Google Display Network. This field is optional for the
   * following recommendation_types: CAMPAIGN_BUDGET
   *
   * @param bool $targetContentNetwork
   */
  public function setTargetContentNetwork($targetContentNetwork)
  {
    $this->targetContentNetwork = $targetContentNetwork;
  }
  /**
   * @return bool
   */
  public function getTargetContentNetwork()
  {
    return $this->targetContentNetwork;
  }
  /**
   * Optional. If true, the campaign is opted into serving ads on the Google
   * Partner Network. This field is optional for the following
   * recommendation_types: CAMPAIGN_BUDGET
   *
   * @param bool $targetPartnerSearchNetwork
   */
  public function setTargetPartnerSearchNetwork($targetPartnerSearchNetwork)
  {
    $this->targetPartnerSearchNetwork = $targetPartnerSearchNetwork;
  }
  /**
   * @return bool
   */
  public function getTargetPartnerSearchNetwork()
  {
    return $this->targetPartnerSearchNetwork;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequest');
