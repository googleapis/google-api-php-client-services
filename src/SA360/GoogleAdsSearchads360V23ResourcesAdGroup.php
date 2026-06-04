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

class GoogleAdsSearchads360V23ResourcesAdGroup extends \Google\Collection
{
  /**
   * The ad rotation mode has not been specified.
   */
  public const AD_ROTATION_MODE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const AD_ROTATION_MODE_UNKNOWN = 'UNKNOWN';
  /**
   * Optimize ad group ads based on clicks or conversions.
   */
  public const AD_ROTATION_MODE_OPTIMIZE = 'OPTIMIZE';
  /**
   * Rotate evenly forever.
   */
  public const AD_ROTATION_MODE_ROTATE_FOREVER = 'ROTATE_FOREVER';
  /**
   * Not specified.
   */
  public const DISPLAY_CUSTOM_BID_DIMENSION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const DISPLAY_CUSTOM_BID_DIMENSION_UNKNOWN = 'UNKNOWN';
  /**
   * Keyword criteria, for example, 'mars cruise'. KEYWORD may be used as a
   * custom bid dimension. Keywords are always a targeting dimension, so may not
   * be set as a target "ALL" dimension with TargetRestriction.
   */
  public const DISPLAY_CUSTOM_BID_DIMENSION_KEYWORD = 'KEYWORD';
  /**
   * Audience criteria, which include user list, user interest, custom affinity,
   * and custom in market.
   */
  public const DISPLAY_CUSTOM_BID_DIMENSION_AUDIENCE = 'AUDIENCE';
  /**
   * Topic criteria for targeting categories of content, for example,
   * 'category::Animals>Pets' Used for Display and Video targeting.
   */
  public const DISPLAY_CUSTOM_BID_DIMENSION_TOPIC = 'TOPIC';
  /**
   * Criteria for targeting gender.
   */
  public const DISPLAY_CUSTOM_BID_DIMENSION_GENDER = 'GENDER';
  /**
   * Criteria for targeting age ranges.
   */
  public const DISPLAY_CUSTOM_BID_DIMENSION_AGE_RANGE = 'AGE_RANGE';
  /**
   * Placement criteria, which include websites like 'www.flowers4sale.com', as
   * well as mobile applications, mobile app categories, YouTube videos, and
   * YouTube channels.
   */
  public const DISPLAY_CUSTOM_BID_DIMENSION_PLACEMENT = 'PLACEMENT';
  /**
   * Criteria for parental status targeting.
   */
  public const DISPLAY_CUSTOM_BID_DIMENSION_PARENTAL_STATUS = 'PARENTAL_STATUS';
  /**
   * Criteria for income range targeting.
   */
  public const DISPLAY_CUSTOM_BID_DIMENSION_INCOME_RANGE = 'INCOME_RANGE';
  /**
   * Not specified.
   */
  public const EFFECTIVE_TARGET_CPA_SOURCE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const EFFECTIVE_TARGET_CPA_SOURCE_UNKNOWN = 'UNKNOWN';
  /**
   * Effective bid or target is inherited from campaign bidding strategy.
   */
  public const EFFECTIVE_TARGET_CPA_SOURCE_CAMPAIGN_BIDDING_STRATEGY = 'CAMPAIGN_BIDDING_STRATEGY';
  /**
   * The bid or target is defined on the ad group.
   */
  public const EFFECTIVE_TARGET_CPA_SOURCE_AD_GROUP = 'AD_GROUP';
  /**
   * The bid or target is defined on the ad group criterion.
   */
  public const EFFECTIVE_TARGET_CPA_SOURCE_AD_GROUP_CRITERION = 'AD_GROUP_CRITERION';
  /**
   * Not specified.
   */
  public const EFFECTIVE_TARGET_CPC_SOURCE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const EFFECTIVE_TARGET_CPC_SOURCE_UNKNOWN = 'UNKNOWN';
  /**
   * Effective bid or target is inherited from campaign bidding strategy.
   */
  public const EFFECTIVE_TARGET_CPC_SOURCE_CAMPAIGN_BIDDING_STRATEGY = 'CAMPAIGN_BIDDING_STRATEGY';
  /**
   * The bid or target is defined on the ad group.
   */
  public const EFFECTIVE_TARGET_CPC_SOURCE_AD_GROUP = 'AD_GROUP';
  /**
   * The bid or target is defined on the ad group criterion.
   */
  public const EFFECTIVE_TARGET_CPC_SOURCE_AD_GROUP_CRITERION = 'AD_GROUP_CRITERION';
  /**
   * Not specified.
   */
  public const EFFECTIVE_TARGET_ROAS_SOURCE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const EFFECTIVE_TARGET_ROAS_SOURCE_UNKNOWN = 'UNKNOWN';
  /**
   * Effective bid or target is inherited from campaign bidding strategy.
   */
  public const EFFECTIVE_TARGET_ROAS_SOURCE_CAMPAIGN_BIDDING_STRATEGY = 'CAMPAIGN_BIDDING_STRATEGY';
  /**
   * The bid or target is defined on the ad group.
   */
  public const EFFECTIVE_TARGET_ROAS_SOURCE_AD_GROUP = 'AD_GROUP';
  /**
   * The bid or target is defined on the ad group criterion.
   */
  public const EFFECTIVE_TARGET_ROAS_SOURCE_AD_GROUP_CRITERION = 'AD_GROUP_CRITERION';
  /**
   * Not specified.
   */
  public const ENGINE_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const ENGINE_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Deprecated. Do not use.
   *
   * @deprecated
   */
  public const ENGINE_STATUS_AD_GROUP_ELIGIBLE = 'AD_GROUP_ELIGIBLE';
  /**
   * No ads are running for this ad group, because the ad group's end date has
   * passed.
   */
  public const ENGINE_STATUS_AD_GROUP_EXPIRED = 'AD_GROUP_EXPIRED';
  /**
   * The ad group has been deleted.
   */
  public const ENGINE_STATUS_AD_GROUP_REMOVED = 'AD_GROUP_REMOVED';
  /**
   * No ads are running for this ad group because the associated ad group is
   * still in draft form.
   */
  public const ENGINE_STATUS_AD_GROUP_DRAFT = 'AD_GROUP_DRAFT';
  /**
   * The ad group has been paused.
   */
  public const ENGINE_STATUS_AD_GROUP_PAUSED = 'AD_GROUP_PAUSED';
  /**
   * The ad group is active and currently serving ads.
   */
  public const ENGINE_STATUS_AD_GROUP_SERVING = 'AD_GROUP_SERVING';
  /**
   * The ad group has been submitted (Microsoft Bing Ads legacy status).
   */
  public const ENGINE_STATUS_AD_GROUP_SUBMITTED = 'AD_GROUP_SUBMITTED';
  /**
   * No ads are running for this ad group, because the campaign has been paused.
   */
  public const ENGINE_STATUS_CAMPAIGN_PAUSED = 'CAMPAIGN_PAUSED';
  /**
   * No ads are running for this ad group, because the account has been paused.
   */
  public const ENGINE_STATUS_ACCOUNT_PAUSED = 'ACCOUNT_PAUSED';
  /**
   * Not specified.
   */
  public const PRIMARY_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PRIMARY_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The ad group is eligible to serve.
   */
  public const PRIMARY_STATUS_ELIGIBLE = 'ELIGIBLE';
  /**
   * The ad group is paused.
   */
  public const PRIMARY_STATUS_PAUSED = 'PAUSED';
  /**
   * The ad group is removed.
   */
  public const PRIMARY_STATUS_REMOVED = 'REMOVED';
  /**
   * The ad group may serve in the future.
   */
  public const PRIMARY_STATUS_PENDING = 'PENDING';
  /**
   * The ad group is not eligible to serve.
   */
  public const PRIMARY_STATUS_NOT_ELIGIBLE = 'NOT_ELIGIBLE';
  /**
   * The ad group has limited servability.
   */
  public const PRIMARY_STATUS_LIMITED = 'LIMITED';
  /**
   * The status has not been specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The ad group is enabled.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * The ad group is paused.
   */
  public const STATUS_PAUSED = 'PAUSED';
  /**
   * The ad group is removed.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * The type has not been specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The default ad group type for Search campaigns.
   */
  public const TYPE_SEARCH_STANDARD = 'SEARCH_STANDARD';
  /**
   * The default ad group type for Display campaigns.
   */
  public const TYPE_DISPLAY_STANDARD = 'DISPLAY_STANDARD';
  /**
   * The ad group type for Shopping campaigns serving standard product ads.
   */
  public const TYPE_SHOPPING_PRODUCT_ADS = 'SHOPPING_PRODUCT_ADS';
  /**
   * The default ad group type for Hotel campaigns.
   */
  public const TYPE_HOTEL_ADS = 'HOTEL_ADS';
  /**
   * The type for ad groups in Smart Shopping campaigns.
   */
  public const TYPE_SHOPPING_SMART_ADS = 'SHOPPING_SMART_ADS';
  /**
   * Short unskippable in-stream video ads.
   */
  public const TYPE_VIDEO_BUMPER = 'VIDEO_BUMPER';
  /**
   * TrueView (skippable) in-stream video ads.
   */
  public const TYPE_VIDEO_TRUE_VIEW_IN_STREAM = 'VIDEO_TRUE_VIEW_IN_STREAM';
  /**
   * TrueView in-display video ads.
   */
  public const TYPE_VIDEO_TRUE_VIEW_IN_DISPLAY = 'VIDEO_TRUE_VIEW_IN_DISPLAY';
  /**
   * Unskippable in-stream video ads.
   */
  public const TYPE_VIDEO_NON_SKIPPABLE_IN_STREAM = 'VIDEO_NON_SKIPPABLE_IN_STREAM';
  /**
   * Ad group type for Dynamic Search Ads ad groups.
   */
  public const TYPE_SEARCH_DYNAMIC_ADS = 'SEARCH_DYNAMIC_ADS';
  /**
   * The type for ad groups in Shopping Comparison Listing campaigns.
   */
  public const TYPE_SHOPPING_COMPARISON_LISTING_ADS = 'SHOPPING_COMPARISON_LISTING_ADS';
  /**
   * The ad group type for Promoted Hotel ad groups.
   */
  public const TYPE_PROMOTED_HOTEL_ADS = 'PROMOTED_HOTEL_ADS';
  /**
   * Video responsive ad groups.
   */
  public const TYPE_VIDEO_RESPONSIVE = 'VIDEO_RESPONSIVE';
  /**
   * Video efficient reach ad groups.
   */
  public const TYPE_VIDEO_EFFICIENT_REACH = 'VIDEO_EFFICIENT_REACH';
  /**
   * Ad group type for Smart campaigns.
   */
  public const TYPE_SMART_CAMPAIGN_ADS = 'SMART_CAMPAIGN_ADS';
  /**
   * Ad group type for Travel campaigns.
   */
  public const TYPE_TRAVEL_ADS = 'TRAVEL_ADS';
  protected $collection_key = 'urlCustomParameters';
  /**
   * The ad rotation mode of the ad group.
   *
   * @var string
   */
  public $adRotationMode;
  protected $aiMaxAdGroupSettingType = GoogleAdsSearchads360V23ResourcesAdGroupAiMaxAdGroupSetting::class;
  protected $aiMaxAdGroupSettingDataType = '';
  protected $audienceSettingType = GoogleAdsSearchads360V23ResourcesAdGroupAudienceSetting::class;
  protected $audienceSettingDataType = '';
  /**
   * Output only. For draft or experiment ad groups, this field is the resource
   * name of the base ad group from which this ad group was created. If a draft
   * or experiment ad group does not have a base ad group, then this field is
   * null. For base ad groups, this field equals the ad group resource name.
   * This field is read-only.
   *
   * @var string
   */
  public $baseAdGroup;
  /**
   * Immutable. The campaign to which the ad group belongs.
   *
   * @var string
   */
  public $campaign;
  /**
   * The maximum CPC (cost-per-click) bid. This field is used when the ad
   * group's effective bidding strategy is Manual CPC. This field is not
   * applicable and will be ignored if the ad group's campaign is using a
   * portfolio bidding strategy.
   *
   * @var string
   */
  public $cpcBidMicros;
  /**
   * The maximum CPM (cost-per-thousand viewable impressions) bid.
   *
   * @var string
   */
  public $cpmBidMicros;
  /**
   * The CPV (cost-per-view) bid.
   *
   * @var string
   */
  public $cpvBidMicros;
  /**
   * Output only. The timestamp when this ad_group was created. The timestamp is
   * in the customer's time zone and in "yyyy-MM-dd HH:mm:ss" format.
   *
   * @var string
   */
  public $creationTime;
  protected $demandGenAdGroupSettingsType = GoogleAdsSearchads360V23ResourcesAdGroupDemandGenAdGroupSettings::class;
  protected $demandGenAdGroupSettingsDataType = '';
  /**
   * Lets advertisers specify a targeting dimension on which to place absolute
   * bids. This is only applicable for campaigns that target only the display
   * network and not search.
   *
   * @var string
   */
  public $displayCustomBidDimension;
  /**
   * Output only. Value will be same as that of the CPC (cost-per-click) bid
   * value when the bidding strategy is one of manual cpc, enhanced cpc, page
   * one promoted or target outrank share, otherwise the value will be null.
   *
   * @var string
   */
  public $effectiveCpcBidMicros;
  /**
   * Output only. The resource names of effective labels attached to this ad
   * group. An effective label is a label inherited or directly assigned to this
   * ad group.
   *
   * @var string[]
   */
  public $effectiveLabels;
  /**
   * Output only. The effective target CPA (cost-per-acquisition). This field is
   * read-only.
   *
   * @var string
   */
  public $effectiveTargetCpaMicros;
  /**
   * Output only. Source of the effective target CPA. This field is read-only.
   *
   * @var string
   */
  public $effectiveTargetCpaSource;
  /**
   * Output only. The effective target CPC (cost-per-click). This field is read-
   * only.
   *
   * @var string
   */
  public $effectiveTargetCpc;
  /**
   * Output only. Source of the effective target CPC. This field is read-only.
   *
   * @var string
   */
  public $effectiveTargetCpcSource;
  /**
   * Output only. The effective target ROAS (return-on-ad-spend). This field is
   * read-only.
   *
   * @var 
   */
  public $effectiveTargetRoas;
  /**
   * Output only. Source of the effective target ROAS. This field is read-only.
   *
   * @var string
   */
  public $effectiveTargetRoasSource;
  /**
   * Output only. Date when the ad group ends serving ads. By default, the ad
   * group ends on the ad group's end date. If this field is set, then the ad
   * group ends at the end of the specified date in the customer's time zone.
   * This field is only available for Microsoft Advertising and Facebook gateway
   * accounts. Format: YYYY-MM-DD Example: 2019-03-14
   *
   * @var string
   */
  public $endDate;
  /**
   * Output only. ID of the ad group in the external engine account. This field
   * is for non-Google Ads account only, for example, Yahoo Japan, Microsoft,
   * Baidu etc. For Google Ads entity, use "ad_group.id" instead.
   *
   * @var string
   */
  public $engineId;
  /**
   * Output only. The Engine Status for ad group.
   *
   * @var string
   */
  public $engineStatus;
  /**
   * When this value is true, demographics will be excluded from the types of
   * targeting which are expanded when optimized_targeting_enabled is true. When
   * optimized_targeting_enabled is false, this field is ignored. Default is
   * false.
   *
   * @var bool
   */
  public $excludeDemographicExpansion;
  /**
   * The asset field types that should be excluded from this ad group. Asset
   * links with these field types will not be inherited by this ad group from
   * the upper levels.
   *
   * @var string[]
   */
  public $excludedParentAssetFieldTypes;
  /**
   * The asset set types that should be excluded from this ad group. Asset set
   * links with these types will not be inherited by this ad group from the
   * upper levels. Location group types (GMB_DYNAMIC_LOCATION_GROUP,
   * CHAIN_DYNAMIC_LOCATION_GROUP, and STATIC_LOCATION_GROUP) are child types of
   * LOCATION_SYNC. Therefore, if LOCATION_SYNC is set for this field, all
   * location group asset sets are not allowed to be linked to this ad group,
   * and all Location Extension (LE) and Affiliate Location Extensions (ALE)
   * will not be served under this ad group. Only LOCATION_SYNC is currently
   * supported.
   *
   * @var string[]
   */
  public $excludedParentAssetSetTypes;
  /**
   * URL template for appending params to Final URL.
   *
   * @var string
   */
  public $finalUrlSuffix;
  /**
   * The fixed amount in micros that the advertiser pays for every thousand
   * impressions of the ad.
   *
   * @var string
   */
  public $fixedCpmMicros;
  /**
   * Output only. The ID of the ad group.
   *
   * @var string
   */
  public $id;
  /**
   * Output only. The resource names of labels attached to this ad group.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Output only. The language of the ads and keywords in an ad group. This
   * field is only available for Microsoft Advertising accounts. More details:
   * https://docs.microsoft.com/en-us/advertising/guides/ad-
   * languages?view=bingads-13#adlanguage
   *
   * @var string
   */
  public $languageCode;
  /**
   * Output only. The datetime when this ad group was last modified. The
   * datetime is in the customer's time zone and in "yyyy-MM-dd HH:mm:ss.ssssss"
   * format.
   *
   * @var string
   */
  public $lastModifiedTime;
  /**
   * The name of the ad group. This field is required and should not be empty
   * when creating new ad groups. It must contain fewer than 255 UTF-8 full-
   * width characters. It must not contain any null (code point 0x0), NL line
   * feed (code point 0xA) or carriage return (code point 0xD) characters.
   *
   * @var string
   */
  public $name;
  /**
   * True if optimized targeting is enabled. Optimized Targeting is the
   * replacement for Audience Expansion.
   *
   * @var bool
   */
  public $optimizedTargetingEnabled;
  /**
   * The percent cpc bid amount, expressed as a fraction of the advertised price
   * for some good or service. The valid range for the fraction is [0,1) and the
   * value stored here is 1,000,000 * [fraction].
   *
   * @var string
   */
  public $percentCpcBidMicros;
  /**
   * Output only. Provides aggregated view into why an ad group is not serving
   * or not serving optimally.
   *
   * @var string
   */
  public $primaryStatus;
  /**
   * Output only. Provides reasons for why an ad group is not serving or not
   * serving optimally.
   *
   * @var string[]
   */
  public $primaryStatusReasons;
  /**
   * Immutable. The resource name of the ad group. Ad group resource names have
   * the form: `customers/{customer_id}/adGroups/{ad_group_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. Date when this ad group starts serving ads. By default, the ad
   * group starts now or the ad group's start date, whichever is later. If this
   * field is set, then the ad group starts at the beginning of the specified
   * date in the customer's time zone. This field is only available for
   * Microsoft Advertising and Facebook gateway accounts. Format: YYYY-MM-DD
   * Example: 2019-03-14
   *
   * @var string
   */
  public $startDate;
  /**
   * The status of the ad group.
   *
   * @var string
   */
  public $status;
  /**
   * The target CPA (cost-per-acquisition). If the ad group's campaign bidding
   * strategy is TargetCpa or MaximizeConversions (with its target_cpa field
   * set), then this field overrides the target CPA specified in the campaign's
   * bidding strategy. Otherwise, this value is ignored.
   *
   * @var string
   */
  public $targetCpaMicros;
  /**
   * Average amount in micros that the advertiser is willing to pay for every ad
   * click. Overrides the target CPC configured at the campaign level.
   *
   * @var string
   */
  public $targetCpcMicros;
  /**
   * Average amount in micros that the advertiser is willing to pay for every
   * thousand times the ad is shown.
   *
   * @var string
   */
  public $targetCpmMicros;
  /**
   * Average amount in micros that the advertiser is willing to pay for every ad
   * view.
   *
   * @var string
   */
  public $targetCpvMicros;
  /**
   * The target ROAS (return-on-ad-spend) for this ad group. This field lets you
   * override the target ROAS specified in the campaign's bidding strategy, but
   * only if the campaign is using a standard (not portfolio) `TargetRoas`
   * strategy or a standard `MaximizeConversionValue` strategy with its
   * `target_roas` field set. If the campaign is using a portfolio bidding
   * strategy, this field cannot be set and attempting to do so will result in
   * an error. For any other bidding strategies, this value is ignored. To see
   * the actual target ROAS being used by the ad group, considering potential
   * overrides, query the `effective_target_roas` and
   * `effective_target_roas_source` fields.
   *
   * @var 
   */
  public $targetRoas;
  protected $targetingSettingType = GoogleAdsSearchads360V23CommonTargetingSetting::class;
  protected $targetingSettingDataType = '';
  /**
   * The URL template for constructing a tracking URL.
   *
   * @var string
   */
  public $trackingUrlTemplate;
  /**
   * Immutable. The type of the ad group.
   *
   * @var string
   */
  public $type;
  protected $urlCustomParametersType = GoogleAdsSearchads360V23CommonCustomParameter::class;
  protected $urlCustomParametersDataType = 'array';
  protected $verticalAdsFormatSettingType = GoogleAdsSearchads360V23ResourcesAdGroupVerticalAdsFormatSetting::class;
  protected $verticalAdsFormatSettingDataType = '';

  /**
   * The ad rotation mode of the ad group.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, OPTIMIZE, ROTATE_FOREVER
   *
   * @param self::AD_ROTATION_MODE_* $adRotationMode
   */
  public function setAdRotationMode($adRotationMode)
  {
    $this->adRotationMode = $adRotationMode;
  }
  /**
   * @return self::AD_ROTATION_MODE_*
   */
  public function getAdRotationMode()
  {
    return $this->adRotationMode;
  }
  /**
   * Settings for AI Max feature in standard search adgroups.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupAiMaxAdGroupSetting $aiMaxAdGroupSetting
   */
  public function setAiMaxAdGroupSetting(GoogleAdsSearchads360V23ResourcesAdGroupAiMaxAdGroupSetting $aiMaxAdGroupSetting)
  {
    $this->aiMaxAdGroupSetting = $aiMaxAdGroupSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupAiMaxAdGroupSetting
   */
  public function getAiMaxAdGroupSetting()
  {
    return $this->aiMaxAdGroupSetting;
  }
  /**
   * Immutable. Setting for audience related features.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupAudienceSetting $audienceSetting
   */
  public function setAudienceSetting(GoogleAdsSearchads360V23ResourcesAdGroupAudienceSetting $audienceSetting)
  {
    $this->audienceSetting = $audienceSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupAudienceSetting
   */
  public function getAudienceSetting()
  {
    return $this->audienceSetting;
  }
  /**
   * Output only. For draft or experiment ad groups, this field is the resource
   * name of the base ad group from which this ad group was created. If a draft
   * or experiment ad group does not have a base ad group, then this field is
   * null. For base ad groups, this field equals the ad group resource name.
   * This field is read-only.
   *
   * @param string $baseAdGroup
   */
  public function setBaseAdGroup($baseAdGroup)
  {
    $this->baseAdGroup = $baseAdGroup;
  }
  /**
   * @return string
   */
  public function getBaseAdGroup()
  {
    return $this->baseAdGroup;
  }
  /**
   * Immutable. The campaign to which the ad group belongs.
   *
   * @param string $campaign
   */
  public function setCampaign($campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return string
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * The maximum CPC (cost-per-click) bid. This field is used when the ad
   * group's effective bidding strategy is Manual CPC. This field is not
   * applicable and will be ignored if the ad group's campaign is using a
   * portfolio bidding strategy.
   *
   * @param string $cpcBidMicros
   */
  public function setCpcBidMicros($cpcBidMicros)
  {
    $this->cpcBidMicros = $cpcBidMicros;
  }
  /**
   * @return string
   */
  public function getCpcBidMicros()
  {
    return $this->cpcBidMicros;
  }
  /**
   * The maximum CPM (cost-per-thousand viewable impressions) bid.
   *
   * @param string $cpmBidMicros
   */
  public function setCpmBidMicros($cpmBidMicros)
  {
    $this->cpmBidMicros = $cpmBidMicros;
  }
  /**
   * @return string
   */
  public function getCpmBidMicros()
  {
    return $this->cpmBidMicros;
  }
  /**
   * The CPV (cost-per-view) bid.
   *
   * @param string $cpvBidMicros
   */
  public function setCpvBidMicros($cpvBidMicros)
  {
    $this->cpvBidMicros = $cpvBidMicros;
  }
  /**
   * @return string
   */
  public function getCpvBidMicros()
  {
    return $this->cpvBidMicros;
  }
  /**
   * Output only. The timestamp when this ad_group was created. The timestamp is
   * in the customer's time zone and in "yyyy-MM-dd HH:mm:ss" format.
   *
   * @param string $creationTime
   */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /**
   * @return string
   */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /**
   * Settings for Demand Gen ad groups.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupDemandGenAdGroupSettings $demandGenAdGroupSettings
   */
  public function setDemandGenAdGroupSettings(GoogleAdsSearchads360V23ResourcesAdGroupDemandGenAdGroupSettings $demandGenAdGroupSettings)
  {
    $this->demandGenAdGroupSettings = $demandGenAdGroupSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupDemandGenAdGroupSettings
   */
  public function getDemandGenAdGroupSettings()
  {
    return $this->demandGenAdGroupSettings;
  }
  /**
   * Lets advertisers specify a targeting dimension on which to place absolute
   * bids. This is only applicable for campaigns that target only the display
   * network and not search.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, KEYWORD, AUDIENCE, TOPIC, GENDER,
   * AGE_RANGE, PLACEMENT, PARENTAL_STATUS, INCOME_RANGE
   *
   * @param self::DISPLAY_CUSTOM_BID_DIMENSION_* $displayCustomBidDimension
   */
  public function setDisplayCustomBidDimension($displayCustomBidDimension)
  {
    $this->displayCustomBidDimension = $displayCustomBidDimension;
  }
  /**
   * @return self::DISPLAY_CUSTOM_BID_DIMENSION_*
   */
  public function getDisplayCustomBidDimension()
  {
    return $this->displayCustomBidDimension;
  }
  /**
   * Output only. Value will be same as that of the CPC (cost-per-click) bid
   * value when the bidding strategy is one of manual cpc, enhanced cpc, page
   * one promoted or target outrank share, otherwise the value will be null.
   *
   * @param string $effectiveCpcBidMicros
   */
  public function setEffectiveCpcBidMicros($effectiveCpcBidMicros)
  {
    $this->effectiveCpcBidMicros = $effectiveCpcBidMicros;
  }
  /**
   * @return string
   */
  public function getEffectiveCpcBidMicros()
  {
    return $this->effectiveCpcBidMicros;
  }
  /**
   * Output only. The resource names of effective labels attached to this ad
   * group. An effective label is a label inherited or directly assigned to this
   * ad group.
   *
   * @param string[] $effectiveLabels
   */
  public function setEffectiveLabels($effectiveLabels)
  {
    $this->effectiveLabels = $effectiveLabels;
  }
  /**
   * @return string[]
   */
  public function getEffectiveLabels()
  {
    return $this->effectiveLabels;
  }
  /**
   * Output only. The effective target CPA (cost-per-acquisition). This field is
   * read-only.
   *
   * @param string $effectiveTargetCpaMicros
   */
  public function setEffectiveTargetCpaMicros($effectiveTargetCpaMicros)
  {
    $this->effectiveTargetCpaMicros = $effectiveTargetCpaMicros;
  }
  /**
   * @return string
   */
  public function getEffectiveTargetCpaMicros()
  {
    return $this->effectiveTargetCpaMicros;
  }
  /**
   * Output only. Source of the effective target CPA. This field is read-only.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CAMPAIGN_BIDDING_STRATEGY, AD_GROUP,
   * AD_GROUP_CRITERION
   *
   * @param self::EFFECTIVE_TARGET_CPA_SOURCE_* $effectiveTargetCpaSource
   */
  public function setEffectiveTargetCpaSource($effectiveTargetCpaSource)
  {
    $this->effectiveTargetCpaSource = $effectiveTargetCpaSource;
  }
  /**
   * @return self::EFFECTIVE_TARGET_CPA_SOURCE_*
   */
  public function getEffectiveTargetCpaSource()
  {
    return $this->effectiveTargetCpaSource;
  }
  /**
   * Output only. The effective target CPC (cost-per-click). This field is read-
   * only.
   *
   * @param string $effectiveTargetCpc
   */
  public function setEffectiveTargetCpc($effectiveTargetCpc)
  {
    $this->effectiveTargetCpc = $effectiveTargetCpc;
  }
  /**
   * @return string
   */
  public function getEffectiveTargetCpc()
  {
    return $this->effectiveTargetCpc;
  }
  /**
   * Output only. Source of the effective target CPC. This field is read-only.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CAMPAIGN_BIDDING_STRATEGY, AD_GROUP,
   * AD_GROUP_CRITERION
   *
   * @param self::EFFECTIVE_TARGET_CPC_SOURCE_* $effectiveTargetCpcSource
   */
  public function setEffectiveTargetCpcSource($effectiveTargetCpcSource)
  {
    $this->effectiveTargetCpcSource = $effectiveTargetCpcSource;
  }
  /**
   * @return self::EFFECTIVE_TARGET_CPC_SOURCE_*
   */
  public function getEffectiveTargetCpcSource()
  {
    return $this->effectiveTargetCpcSource;
  }
  public function setEffectiveTargetRoas($effectiveTargetRoas)
  {
    $this->effectiveTargetRoas = $effectiveTargetRoas;
  }
  public function getEffectiveTargetRoas()
  {
    return $this->effectiveTargetRoas;
  }
  /**
   * Output only. Source of the effective target ROAS. This field is read-only.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CAMPAIGN_BIDDING_STRATEGY, AD_GROUP,
   * AD_GROUP_CRITERION
   *
   * @param self::EFFECTIVE_TARGET_ROAS_SOURCE_* $effectiveTargetRoasSource
   */
  public function setEffectiveTargetRoasSource($effectiveTargetRoasSource)
  {
    $this->effectiveTargetRoasSource = $effectiveTargetRoasSource;
  }
  /**
   * @return self::EFFECTIVE_TARGET_ROAS_SOURCE_*
   */
  public function getEffectiveTargetRoasSource()
  {
    return $this->effectiveTargetRoasSource;
  }
  /**
   * Output only. Date when the ad group ends serving ads. By default, the ad
   * group ends on the ad group's end date. If this field is set, then the ad
   * group ends at the end of the specified date in the customer's time zone.
   * This field is only available for Microsoft Advertising and Facebook gateway
   * accounts. Format: YYYY-MM-DD Example: 2019-03-14
   *
   * @param string $endDate
   */
  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }
  /**
   * @return string
   */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /**
   * Output only. ID of the ad group in the external engine account. This field
   * is for non-Google Ads account only, for example, Yahoo Japan, Microsoft,
   * Baidu etc. For Google Ads entity, use "ad_group.id" instead.
   *
   * @param string $engineId
   */
  public function setEngineId($engineId)
  {
    $this->engineId = $engineId;
  }
  /**
   * @return string
   */
  public function getEngineId()
  {
    return $this->engineId;
  }
  /**
   * Output only. The Engine Status for ad group.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AD_GROUP_ELIGIBLE, AD_GROUP_EXPIRED,
   * AD_GROUP_REMOVED, AD_GROUP_DRAFT, AD_GROUP_PAUSED, AD_GROUP_SERVING,
   * AD_GROUP_SUBMITTED, CAMPAIGN_PAUSED, ACCOUNT_PAUSED
   *
   * @param self::ENGINE_STATUS_* $engineStatus
   */
  public function setEngineStatus($engineStatus)
  {
    $this->engineStatus = $engineStatus;
  }
  /**
   * @return self::ENGINE_STATUS_*
   */
  public function getEngineStatus()
  {
    return $this->engineStatus;
  }
  /**
   * When this value is true, demographics will be excluded from the types of
   * targeting which are expanded when optimized_targeting_enabled is true. When
   * optimized_targeting_enabled is false, this field is ignored. Default is
   * false.
   *
   * @param bool $excludeDemographicExpansion
   */
  public function setExcludeDemographicExpansion($excludeDemographicExpansion)
  {
    $this->excludeDemographicExpansion = $excludeDemographicExpansion;
  }
  /**
   * @return bool
   */
  public function getExcludeDemographicExpansion()
  {
    return $this->excludeDemographicExpansion;
  }
  /**
   * The asset field types that should be excluded from this ad group. Asset
   * links with these field types will not be inherited by this ad group from
   * the upper levels.
   *
   * @param string[] $excludedParentAssetFieldTypes
   */
  public function setExcludedParentAssetFieldTypes($excludedParentAssetFieldTypes)
  {
    $this->excludedParentAssetFieldTypes = $excludedParentAssetFieldTypes;
  }
  /**
   * @return string[]
   */
  public function getExcludedParentAssetFieldTypes()
  {
    return $this->excludedParentAssetFieldTypes;
  }
  /**
   * The asset set types that should be excluded from this ad group. Asset set
   * links with these types will not be inherited by this ad group from the
   * upper levels. Location group types (GMB_DYNAMIC_LOCATION_GROUP,
   * CHAIN_DYNAMIC_LOCATION_GROUP, and STATIC_LOCATION_GROUP) are child types of
   * LOCATION_SYNC. Therefore, if LOCATION_SYNC is set for this field, all
   * location group asset sets are not allowed to be linked to this ad group,
   * and all Location Extension (LE) and Affiliate Location Extensions (ALE)
   * will not be served under this ad group. Only LOCATION_SYNC is currently
   * supported.
   *
   * @param string[] $excludedParentAssetSetTypes
   */
  public function setExcludedParentAssetSetTypes($excludedParentAssetSetTypes)
  {
    $this->excludedParentAssetSetTypes = $excludedParentAssetSetTypes;
  }
  /**
   * @return string[]
   */
  public function getExcludedParentAssetSetTypes()
  {
    return $this->excludedParentAssetSetTypes;
  }
  /**
   * URL template for appending params to Final URL.
   *
   * @param string $finalUrlSuffix
   */
  public function setFinalUrlSuffix($finalUrlSuffix)
  {
    $this->finalUrlSuffix = $finalUrlSuffix;
  }
  /**
   * @return string
   */
  public function getFinalUrlSuffix()
  {
    return $this->finalUrlSuffix;
  }
  /**
   * The fixed amount in micros that the advertiser pays for every thousand
   * impressions of the ad.
   *
   * @param string $fixedCpmMicros
   */
  public function setFixedCpmMicros($fixedCpmMicros)
  {
    $this->fixedCpmMicros = $fixedCpmMicros;
  }
  /**
   * @return string
   */
  public function getFixedCpmMicros()
  {
    return $this->fixedCpmMicros;
  }
  /**
   * Output only. The ID of the ad group.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Output only. The resource names of labels attached to this ad group.
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Output only. The language of the ads and keywords in an ad group. This
   * field is only available for Microsoft Advertising accounts. More details:
   * https://docs.microsoft.com/en-us/advertising/guides/ad-
   * languages?view=bingads-13#adlanguage
   *
   * @param string $languageCode
   */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /**
   * @return string
   */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /**
   * Output only. The datetime when this ad group was last modified. The
   * datetime is in the customer's time zone and in "yyyy-MM-dd HH:mm:ss.ssssss"
   * format.
   *
   * @param string $lastModifiedTime
   */
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  /**
   * @return string
   */
  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  /**
   * The name of the ad group. This field is required and should not be empty
   * when creating new ad groups. It must contain fewer than 255 UTF-8 full-
   * width characters. It must not contain any null (code point 0x0), NL line
   * feed (code point 0xA) or carriage return (code point 0xD) characters.
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
  /**
   * True if optimized targeting is enabled. Optimized Targeting is the
   * replacement for Audience Expansion.
   *
   * @param bool $optimizedTargetingEnabled
   */
  public function setOptimizedTargetingEnabled($optimizedTargetingEnabled)
  {
    $this->optimizedTargetingEnabled = $optimizedTargetingEnabled;
  }
  /**
   * @return bool
   */
  public function getOptimizedTargetingEnabled()
  {
    return $this->optimizedTargetingEnabled;
  }
  /**
   * The percent cpc bid amount, expressed as a fraction of the advertised price
   * for some good or service. The valid range for the fraction is [0,1) and the
   * value stored here is 1,000,000 * [fraction].
   *
   * @param string $percentCpcBidMicros
   */
  public function setPercentCpcBidMicros($percentCpcBidMicros)
  {
    $this->percentCpcBidMicros = $percentCpcBidMicros;
  }
  /**
   * @return string
   */
  public function getPercentCpcBidMicros()
  {
    return $this->percentCpcBidMicros;
  }
  /**
   * Output only. Provides aggregated view into why an ad group is not serving
   * or not serving optimally.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ELIGIBLE, PAUSED, REMOVED, PENDING,
   * NOT_ELIGIBLE, LIMITED
   *
   * @param self::PRIMARY_STATUS_* $primaryStatus
   */
  public function setPrimaryStatus($primaryStatus)
  {
    $this->primaryStatus = $primaryStatus;
  }
  /**
   * @return self::PRIMARY_STATUS_*
   */
  public function getPrimaryStatus()
  {
    return $this->primaryStatus;
  }
  /**
   * Output only. Provides reasons for why an ad group is not serving or not
   * serving optimally.
   *
   * @param string[] $primaryStatusReasons
   */
  public function setPrimaryStatusReasons($primaryStatusReasons)
  {
    $this->primaryStatusReasons = $primaryStatusReasons;
  }
  /**
   * @return string[]
   */
  public function getPrimaryStatusReasons()
  {
    return $this->primaryStatusReasons;
  }
  /**
   * Immutable. The resource name of the ad group. Ad group resource names have
   * the form: `customers/{customer_id}/adGroups/{ad_group_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Output only. Date when this ad group starts serving ads. By default, the ad
   * group starts now or the ad group's start date, whichever is later. If this
   * field is set, then the ad group starts at the beginning of the specified
   * date in the customer's time zone. This field is only available for
   * Microsoft Advertising and Facebook gateway accounts. Format: YYYY-MM-DD
   * Example: 2019-03-14
   *
   * @param string $startDate
   */
  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }
  /**
   * @return string
   */
  public function getStartDate()
  {
    return $this->startDate;
  }
  /**
   * The status of the ad group.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ENABLED, PAUSED, REMOVED
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * The target CPA (cost-per-acquisition). If the ad group's campaign bidding
   * strategy is TargetCpa or MaximizeConversions (with its target_cpa field
   * set), then this field overrides the target CPA specified in the campaign's
   * bidding strategy. Otherwise, this value is ignored.
   *
   * @param string $targetCpaMicros
   */
  public function setTargetCpaMicros($targetCpaMicros)
  {
    $this->targetCpaMicros = $targetCpaMicros;
  }
  /**
   * @return string
   */
  public function getTargetCpaMicros()
  {
    return $this->targetCpaMicros;
  }
  /**
   * Average amount in micros that the advertiser is willing to pay for every ad
   * click. Overrides the target CPC configured at the campaign level.
   *
   * @param string $targetCpcMicros
   */
  public function setTargetCpcMicros($targetCpcMicros)
  {
    $this->targetCpcMicros = $targetCpcMicros;
  }
  /**
   * @return string
   */
  public function getTargetCpcMicros()
  {
    return $this->targetCpcMicros;
  }
  /**
   * Average amount in micros that the advertiser is willing to pay for every
   * thousand times the ad is shown.
   *
   * @param string $targetCpmMicros
   */
  public function setTargetCpmMicros($targetCpmMicros)
  {
    $this->targetCpmMicros = $targetCpmMicros;
  }
  /**
   * @return string
   */
  public function getTargetCpmMicros()
  {
    return $this->targetCpmMicros;
  }
  /**
   * Average amount in micros that the advertiser is willing to pay for every ad
   * view.
   *
   * @param string $targetCpvMicros
   */
  public function setTargetCpvMicros($targetCpvMicros)
  {
    $this->targetCpvMicros = $targetCpvMicros;
  }
  /**
   * @return string
   */
  public function getTargetCpvMicros()
  {
    return $this->targetCpvMicros;
  }
  public function setTargetRoas($targetRoas)
  {
    $this->targetRoas = $targetRoas;
  }
  public function getTargetRoas()
  {
    return $this->targetRoas;
  }
  /**
   * Setting for targeting related features.
   *
   * @param GoogleAdsSearchads360V23CommonTargetingSetting $targetingSetting
   */
  public function setTargetingSetting(GoogleAdsSearchads360V23CommonTargetingSetting $targetingSetting)
  {
    $this->targetingSetting = $targetingSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTargetingSetting
   */
  public function getTargetingSetting()
  {
    return $this->targetingSetting;
  }
  /**
   * The URL template for constructing a tracking URL.
   *
   * @param string $trackingUrlTemplate
   */
  public function setTrackingUrlTemplate($trackingUrlTemplate)
  {
    $this->trackingUrlTemplate = $trackingUrlTemplate;
  }
  /**
   * @return string
   */
  public function getTrackingUrlTemplate()
  {
    return $this->trackingUrlTemplate;
  }
  /**
   * Immutable. The type of the ad group.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SEARCH_STANDARD, DISPLAY_STANDARD,
   * SHOPPING_PRODUCT_ADS, HOTEL_ADS, SHOPPING_SMART_ADS, VIDEO_BUMPER,
   * VIDEO_TRUE_VIEW_IN_STREAM, VIDEO_TRUE_VIEW_IN_DISPLAY,
   * VIDEO_NON_SKIPPABLE_IN_STREAM, SEARCH_DYNAMIC_ADS,
   * SHOPPING_COMPARISON_LISTING_ADS, PROMOTED_HOTEL_ADS, VIDEO_RESPONSIVE,
   * VIDEO_EFFICIENT_REACH, SMART_CAMPAIGN_ADS, TRAVEL_ADS
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * The list of mappings used to substitute custom parameter tags in a
   * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
   *
   * @param GoogleAdsSearchads360V23CommonCustomParameter[] $urlCustomParameters
   */
  public function setUrlCustomParameters($urlCustomParameters)
  {
    $this->urlCustomParameters = $urlCustomParameters;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomParameter[]
   */
  public function getUrlCustomParameters()
  {
    return $this->urlCustomParameters;
  }
  /**
   * Vertical ads setting feature to enable/disable ad group format controls in
   * search campaigns. This setting requires AiMaxAdGroupSetting to be enabled
   * and a travel feed to be attached to the campaign.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupVerticalAdsFormatSetting $verticalAdsFormatSetting
   */
  public function setVerticalAdsFormatSetting(GoogleAdsSearchads360V23ResourcesAdGroupVerticalAdsFormatSetting $verticalAdsFormatSetting)
  {
    $this->verticalAdsFormatSetting = $verticalAdsFormatSetting;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupVerticalAdsFormatSetting
   */
  public function getVerticalAdsFormatSetting()
  {
    return $this->verticalAdsFormatSetting;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAdGroup::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAdGroup');
