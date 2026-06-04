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

class GoogleAdsSearchads360V23ResourcesAdGroupCriterion extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const APPROVAL_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const APPROVAL_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Approved.
   */
  public const APPROVAL_STATUS_APPROVED = 'APPROVED';
  /**
   * Disapproved.
   */
  public const APPROVAL_STATUS_DISAPPROVED = 'DISAPPROVED';
  /**
   * Pending Review.
   */
  public const APPROVAL_STATUS_PENDING_REVIEW = 'PENDING_REVIEW';
  /**
   * Under review.
   */
  public const APPROVAL_STATUS_UNDER_REVIEW = 'UNDER_REVIEW';
  /**
   * Not specified.
   */
  public const EFFECTIVE_CPC_BID_SOURCE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const EFFECTIVE_CPC_BID_SOURCE_UNKNOWN = 'UNKNOWN';
  /**
   * Effective bid or target is inherited from campaign bidding strategy.
   */
  public const EFFECTIVE_CPC_BID_SOURCE_CAMPAIGN_BIDDING_STRATEGY = 'CAMPAIGN_BIDDING_STRATEGY';
  /**
   * The bid or target is defined on the ad group.
   */
  public const EFFECTIVE_CPC_BID_SOURCE_AD_GROUP = 'AD_GROUP';
  /**
   * The bid or target is defined on the ad group criterion.
   */
  public const EFFECTIVE_CPC_BID_SOURCE_AD_GROUP_CRITERION = 'AD_GROUP_CRITERION';
  /**
   * Not specified.
   */
  public const EFFECTIVE_CPM_BID_SOURCE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const EFFECTIVE_CPM_BID_SOURCE_UNKNOWN = 'UNKNOWN';
  /**
   * Effective bid or target is inherited from campaign bidding strategy.
   */
  public const EFFECTIVE_CPM_BID_SOURCE_CAMPAIGN_BIDDING_STRATEGY = 'CAMPAIGN_BIDDING_STRATEGY';
  /**
   * The bid or target is defined on the ad group.
   */
  public const EFFECTIVE_CPM_BID_SOURCE_AD_GROUP = 'AD_GROUP';
  /**
   * The bid or target is defined on the ad group criterion.
   */
  public const EFFECTIVE_CPM_BID_SOURCE_AD_GROUP_CRITERION = 'AD_GROUP_CRITERION';
  /**
   * Not specified.
   */
  public const EFFECTIVE_CPV_BID_SOURCE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const EFFECTIVE_CPV_BID_SOURCE_UNKNOWN = 'UNKNOWN';
  /**
   * Effective bid or target is inherited from campaign bidding strategy.
   */
  public const EFFECTIVE_CPV_BID_SOURCE_CAMPAIGN_BIDDING_STRATEGY = 'CAMPAIGN_BIDDING_STRATEGY';
  /**
   * The bid or target is defined on the ad group.
   */
  public const EFFECTIVE_CPV_BID_SOURCE_AD_GROUP = 'AD_GROUP';
  /**
   * The bid or target is defined on the ad group criterion.
   */
  public const EFFECTIVE_CPV_BID_SOURCE_AD_GROUP_CRITERION = 'AD_GROUP_CRITERION';
  /**
   * Not specified.
   */
  public const EFFECTIVE_PERCENT_CPC_BID_SOURCE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const EFFECTIVE_PERCENT_CPC_BID_SOURCE_UNKNOWN = 'UNKNOWN';
  /**
   * Effective bid or target is inherited from campaign bidding strategy.
   */
  public const EFFECTIVE_PERCENT_CPC_BID_SOURCE_CAMPAIGN_BIDDING_STRATEGY = 'CAMPAIGN_BIDDING_STRATEGY';
  /**
   * The bid or target is defined on the ad group.
   */
  public const EFFECTIVE_PERCENT_CPC_BID_SOURCE_AD_GROUP = 'AD_GROUP';
  /**
   * The bid or target is defined on the ad group criterion.
   */
  public const EFFECTIVE_PERCENT_CPC_BID_SOURCE_AD_GROUP_CRITERION = 'AD_GROUP_CRITERION';
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
  public const ENGINE_STATUS_AD_GROUP_CRITERION_ELIGIBLE = 'AD_GROUP_CRITERION_ELIGIBLE';
  /**
   * Baidu: Bid or quality too low to be displayed.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_INAPPROPRIATE_FOR_CAMPAIGN = 'AD_GROUP_CRITERION_INAPPROPRIATE_FOR_CAMPAIGN';
  /**
   * Baidu: Bid or quality too low for mobile, but eligible to display for
   * desktop.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_INVALID_MOBILE_SEARCH = 'AD_GROUP_CRITERION_INVALID_MOBILE_SEARCH';
  /**
   * Baidu: Bid or quality too low for desktop, but eligible to display for
   * mobile.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_INVALID_PC_SEARCH = 'AD_GROUP_CRITERION_INVALID_PC_SEARCH';
  /**
   * Baidu: Bid or quality too low to be displayed.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_INVALID_SEARCH = 'AD_GROUP_CRITERION_INVALID_SEARCH';
  /**
   * Baidu: Paused by Baidu due to low search volume.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_LOW_SEARCH_VOLUME = 'AD_GROUP_CRITERION_LOW_SEARCH_VOLUME';
  /**
   * Baidu: Mobile URL in process to be reviewed.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_MOBILE_URL_UNDER_REVIEW = 'AD_GROUP_CRITERION_MOBILE_URL_UNDER_REVIEW';
  /**
   * Baidu: The landing page for one device is invalid, while the landing page
   * for the other device is valid.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_PARTIALLY_INVALID = 'AD_GROUP_CRITERION_PARTIALLY_INVALID';
  /**
   * Baidu: Keyword has been created and paused by Baidu account management, and
   * is now ready for you to activate it.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_TO_BE_ACTIVATED = 'AD_GROUP_CRITERION_TO_BE_ACTIVATED';
  /**
   * Baidu: In process to be reviewed by Baidu. Gemini: Criterion under review.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_UNDER_REVIEW = 'AD_GROUP_CRITERION_UNDER_REVIEW';
  /**
   * Baidu: Criterion to be reviewed.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_NOT_REVIEWED = 'AD_GROUP_CRITERION_NOT_REVIEWED';
  /**
   * Deprecated. Do not use. Previously used by Gemini
   *
   * @deprecated
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_ON_HOLD = 'AD_GROUP_CRITERION_ON_HOLD';
  /**
   * Y!J : Criterion pending review
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_PENDING_REVIEW = 'AD_GROUP_CRITERION_PENDING_REVIEW';
  /**
   * Criterion has been paused.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_PAUSED = 'AD_GROUP_CRITERION_PAUSED';
  /**
   * Criterion has been removed.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_REMOVED = 'AD_GROUP_CRITERION_REMOVED';
  /**
   * Criterion has been approved.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_APPROVED = 'AD_GROUP_CRITERION_APPROVED';
  /**
   * Criterion has been disapproved.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_DISAPPROVED = 'AD_GROUP_CRITERION_DISAPPROVED';
  /**
   * Criterion is active and serving.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_SERVING = 'AD_GROUP_CRITERION_SERVING';
  /**
   * Criterion has been paused since the account is paused.
   */
  public const ENGINE_STATUS_AD_GROUP_CRITERION_ACCOUNT_PAUSED = 'AD_GROUP_CRITERION_ACCOUNT_PAUSED';
  /**
   * Not specified.
   */
  public const PRIMARY_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PRIMARY_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The ad group criterion is eligible to serve.
   */
  public const PRIMARY_STATUS_ELIGIBLE = 'ELIGIBLE';
  /**
   * The ad group criterion is paused.
   */
  public const PRIMARY_STATUS_PAUSED = 'PAUSED';
  /**
   * The ad group criterion is removed.
   */
  public const PRIMARY_STATUS_REMOVED = 'REMOVED';
  /**
   * The ad group criterion is pending.
   */
  public const PRIMARY_STATUS_PENDING = 'PENDING';
  /**
   * The ad group criterion is not eligible to serve.
   */
  public const PRIMARY_STATUS_NOT_ELIGIBLE = 'NOT_ELIGIBLE';
  /**
   * No value has been specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The ad group criterion is enabled.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * The ad group criterion is paused.
   */
  public const STATUS_PAUSED = 'PAUSED';
  /**
   * The ad group criterion is removed.
   */
  public const STATUS_REMOVED = 'REMOVED';
  /**
   * Not specified.
   */
  public const SYSTEM_SERVING_STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const SYSTEM_SERVING_STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * Eligible.
   */
  public const SYSTEM_SERVING_STATUS_ELIGIBLE = 'ELIGIBLE';
  /**
   * Low search volume.
   */
  public const SYSTEM_SERVING_STATUS_RARELY_SERVED = 'RARELY_SERVED';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Keyword, for example, 'mars cruise'.
   */
  public const TYPE_KEYWORD = 'KEYWORD';
  /**
   * Placement, also known as Website, for example, 'www.flowers4sale.com'
   */
  public const TYPE_PLACEMENT = 'PLACEMENT';
  /**
   * Mobile application categories to target.
   */
  public const TYPE_MOBILE_APP_CATEGORY = 'MOBILE_APP_CATEGORY';
  /**
   * Mobile applications to target.
   */
  public const TYPE_MOBILE_APPLICATION = 'MOBILE_APPLICATION';
  /**
   * Devices to target.
   */
  public const TYPE_DEVICE = 'DEVICE';
  /**
   * Locations to target.
   */
  public const TYPE_LOCATION = 'LOCATION';
  /**
   * Listing groups to target.
   */
  public const TYPE_LISTING_GROUP = 'LISTING_GROUP';
  /**
   * Ad Schedule.
   */
  public const TYPE_AD_SCHEDULE = 'AD_SCHEDULE';
  /**
   * Age range.
   */
  public const TYPE_AGE_RANGE = 'AGE_RANGE';
  /**
   * Gender.
   */
  public const TYPE_GENDER = 'GENDER';
  /**
   * Income Range.
   */
  public const TYPE_INCOME_RANGE = 'INCOME_RANGE';
  /**
   * Parental status.
   */
  public const TYPE_PARENTAL_STATUS = 'PARENTAL_STATUS';
  /**
   * YouTube Video.
   */
  public const TYPE_YOUTUBE_VIDEO = 'YOUTUBE_VIDEO';
  /**
   * YouTube Channel.
   */
  public const TYPE_YOUTUBE_CHANNEL = 'YOUTUBE_CHANNEL';
  /**
   * User list.
   */
  public const TYPE_USER_LIST = 'USER_LIST';
  /**
   * Proximity.
   */
  public const TYPE_PROXIMITY = 'PROXIMITY';
  /**
   * A topic target on the display network (for example, "Pets & Animals").
   */
  public const TYPE_TOPIC = 'TOPIC';
  /**
   * Listing scope to target.
   */
  public const TYPE_LISTING_SCOPE = 'LISTING_SCOPE';
  /**
   * Language.
   */
  public const TYPE_LANGUAGE = 'LANGUAGE';
  /**
   * IpBlock.
   */
  public const TYPE_IP_BLOCK = 'IP_BLOCK';
  /**
   * Content Label for category exclusion.
   */
  public const TYPE_CONTENT_LABEL = 'CONTENT_LABEL';
  /**
   * Carrier.
   */
  public const TYPE_CARRIER = 'CARRIER';
  /**
   * A category the user is interested in.
   */
  public const TYPE_USER_INTEREST = 'USER_INTEREST';
  /**
   * Webpage criterion for dynamic search ads.
   */
  public const TYPE_WEBPAGE = 'WEBPAGE';
  /**
   * Operating system version.
   */
  public const TYPE_OPERATING_SYSTEM_VERSION = 'OPERATING_SYSTEM_VERSION';
  /**
   * App payment model.
   */
  public const TYPE_APP_PAYMENT_MODEL = 'APP_PAYMENT_MODEL';
  /**
   * Mobile device.
   */
  public const TYPE_MOBILE_DEVICE = 'MOBILE_DEVICE';
  /**
   * Custom affinity.
   */
  public const TYPE_CUSTOM_AFFINITY = 'CUSTOM_AFFINITY';
  /**
   * Custom intent.
   */
  public const TYPE_CUSTOM_INTENT = 'CUSTOM_INTENT';
  /**
   * Location group.
   */
  public const TYPE_LOCATION_GROUP = 'LOCATION_GROUP';
  /**
   * Custom audience
   */
  public const TYPE_CUSTOM_AUDIENCE = 'CUSTOM_AUDIENCE';
  /**
   * Combined audience
   */
  public const TYPE_COMBINED_AUDIENCE = 'COMBINED_AUDIENCE';
  /**
   * Smart Campaign keyword theme
   */
  public const TYPE_KEYWORD_THEME = 'KEYWORD_THEME';
  /**
   * Audience
   */
  public const TYPE_AUDIENCE = 'AUDIENCE';
  /**
   * Negative Keyword List
   */
  public const TYPE_NEGATIVE_KEYWORD_LIST = 'NEGATIVE_KEYWORD_LIST';
  /**
   * Local Services Ads Service ID.
   */
  public const TYPE_LOCAL_SERVICE_ID = 'LOCAL_SERVICE_ID';
  /**
   * Search Theme.
   */
  public const TYPE_SEARCH_THEME = 'SEARCH_THEME';
  /**
   * Brand
   */
  public const TYPE_BRAND = 'BRAND';
  /**
   * Brand List
   */
  public const TYPE_BRAND_LIST = 'BRAND_LIST';
  /**
   * Life Event
   */
  public const TYPE_LIFE_EVENT = 'LIFE_EVENT';
  /**
   * Webpage List
   */
  public const TYPE_WEBPAGE_LIST = 'WEBPAGE_LIST';
  /**
   * Video lineup
   */
  public const TYPE_VIDEO_LINEUP = 'VIDEO_LINEUP';
  /**
   * Placement List
   */
  public const TYPE_PLACEMENT_LIST = 'PLACEMENT_LIST';
  /**
   * A list of rules for item groups in Vertical Ads.
   */
  public const TYPE_VERTICAL_ADS_ITEM_GROUP_RULE_LIST = 'VERTICAL_ADS_ITEM_GROUP_RULE_LIST';
  /**
   * A rule for an item group in Vertical Ads.
   */
  public const TYPE_VERTICAL_ADS_ITEM_GROUP_RULE = 'VERTICAL_ADS_ITEM_GROUP_RULE';
  protected $collection_key = 'urlCustomParameters';
  /**
   * Immutable. The ad group to which the criterion belongs.
   *
   * @var string
   */
  public $adGroup;
  protected $ageRangeType = GoogleAdsSearchads360V23CommonAgeRangeInfo::class;
  protected $ageRangeDataType = '';
  protected $appPaymentModelType = GoogleAdsSearchads360V23CommonAppPaymentModelInfo::class;
  protected $appPaymentModelDataType = '';
  /**
   * Output only. Approval status of the criterion.
   *
   * @var string
   */
  public $approvalStatus;
  protected $audienceType = GoogleAdsSearchads360V23CommonAudienceInfo::class;
  protected $audienceDataType = '';
  /**
   * The modifier for the bid when the criterion matches. The modifier must be
   * in the range: 0.1 - 10.0. Most targetable criteria types support modifiers.
   *
   * @var 
   */
  public $bidModifier;
  protected $brandListType = GoogleAdsSearchads360V23CommonBrandListInfo::class;
  protected $brandListDataType = '';
  protected $combinedAudienceType = GoogleAdsSearchads360V23CommonCombinedAudienceInfo::class;
  protected $combinedAudienceDataType = '';
  /**
   * The CPC (cost-per-click) bid.
   *
   * @var string
   */
  public $cpcBidMicros;
  /**
   * The CPM (cost-per-thousand viewable impressions) bid.
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
   * Output only. The timestamp when this ad group criterion was created. The
   * timestamp is in the customer's time zone and in "yyyy-MM-dd HH:mm:ss"
   * format.
   *
   * @var string
   */
  public $creationTime;
  /**
   * Output only. The ID of the criterion.
   *
   * @var string
   */
  public $criterionId;
  protected $customAffinityType = GoogleAdsSearchads360V23CommonCustomAffinityInfo::class;
  protected $customAffinityDataType = '';
  protected $customAudienceType = GoogleAdsSearchads360V23CommonCustomAudienceInfo::class;
  protected $customAudienceDataType = '';
  protected $customIntentType = GoogleAdsSearchads360V23CommonCustomIntentInfo::class;
  protected $customIntentDataType = '';
  /**
   * Output only. List of disapproval reasons of the criterion. The different
   * reasons for disapproving a criterion can be found here:
   * https://support.google.com/adspolicy/answer/6008942 This field is read-
   * only.
   *
   * @var string[]
   */
  public $disapprovalReasons;
  /**
   * Output only. The display name of the criterion.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The effective CPC (cost-per-click) bid.
   *
   * @var string
   */
  public $effectiveCpcBidMicros;
  /**
   * Output only. Source of the effective CPC bid.
   *
   * @var string
   */
  public $effectiveCpcBidSource;
  /**
   * Output only. The effective CPM (cost-per-thousand viewable impressions)
   * bid.
   *
   * @var string
   */
  public $effectiveCpmBidMicros;
  /**
   * Output only. Source of the effective CPM bid.
   *
   * @var string
   */
  public $effectiveCpmBidSource;
  /**
   * Output only. The effective CPV (cost-per-view) bid.
   *
   * @var string
   */
  public $effectiveCpvBidMicros;
  /**
   * Output only. Source of the effective CPV bid.
   *
   * @var string
   */
  public $effectiveCpvBidSource;
  /**
   * Output only. The resource names of effective labels attached to this ad
   * group criterion. An effective label is a label inherited or directly
   * assigned to this ad group criterion.
   *
   * @var string[]
   */
  public $effectiveLabels;
  /**
   * Output only. The effective Percent CPC bid amount.
   *
   * @var string
   */
  public $effectivePercentCpcBidMicros;
  /**
   * Output only. Source of the effective Percent CPC bid.
   *
   * @var string
   */
  public $effectivePercentCpcBidSource;
  /**
   * Output only. ID of the ad group criterion in the external engine account.
   * This field is for non-Google Ads account only, for example, Yahoo Japan,
   * Microsoft, Baidu etc. For Google Ads entity, use
   * "ad_group_criterion.criterion_id" instead.
   *
   * @var string
   */
  public $engineId;
  /**
   * Output only. The Engine Status for ad group criterion.
   *
   * @var string
   */
  public $engineStatus;
  protected $extendedDemographicType = GoogleAdsSearchads360V23CommonExtendedDemographicInfo::class;
  protected $extendedDemographicDataType = '';
  /**
   * The list of possible final mobile URLs after all cross-domain redirects.
   *
   * @var string[]
   */
  public $finalMobileUrls;
  /**
   * URL template for appending params to final URL.
   *
   * @var string
   */
  public $finalUrlSuffix;
  /**
   * The list of possible final URLs after all cross-domain redirects for the
   * ad.
   *
   * @var string[]
   */
  public $finalUrls;
  protected $genderType = GoogleAdsSearchads360V23CommonGenderInfo::class;
  protected $genderDataType = '';
  protected $incomeRangeType = GoogleAdsSearchads360V23CommonIncomeRangeInfo::class;
  protected $incomeRangeDataType = '';
  protected $keywordType = GoogleAdsSearchads360V23CommonKeywordInfo::class;
  protected $keywordDataType = '';
  /**
   * Output only. The resource names of labels attached to this ad group
   * criterion.
   *
   * @var string[]
   */
  public $labels;
  protected $languageType = GoogleAdsSearchads360V23CommonLanguageInfo::class;
  protected $languageDataType = '';
  /**
   * Output only. The datetime when this ad group criterion was last modified.
   * The datetime is in the customer's time zone and in "yyyy-MM-dd
   * HH:mm:ss.ssssss" format.
   *
   * @var string
   */
  public $lastModifiedTime;
  protected $lifeEventType = GoogleAdsSearchads360V23CommonLifeEventInfo::class;
  protected $lifeEventDataType = '';
  protected $listingGroupType = GoogleAdsSearchads360V23CommonListingGroupInfo::class;
  protected $listingGroupDataType = '';
  protected $locationType = GoogleAdsSearchads360V23CommonLocationInfo::class;
  protected $locationDataType = '';
  protected $mobileAppCategoryType = GoogleAdsSearchads360V23CommonMobileAppCategoryInfo::class;
  protected $mobileAppCategoryDataType = '';
  protected $mobileApplicationType = GoogleAdsSearchads360V23CommonMobileApplicationInfo::class;
  protected $mobileApplicationDataType = '';
  /**
   * Immutable. Whether to target (`false`) or exclude (`true`) the criterion.
   * This field is immutable. To switch a criterion from positive to negative,
   * remove then re-add it.
   *
   * @var bool
   */
  public $negative;
  protected $parentalStatusType = GoogleAdsSearchads360V23CommonParentalStatusInfo::class;
  protected $parentalStatusDataType = '';
  /**
   * The CPC bid amount, expressed as a fraction of the advertised price for
   * some good or service. The valid range for the fraction is [0,1) and the
   * value stored here is 1,000,000 * [fraction].
   *
   * @var string
   */
  public $percentCpcBidMicros;
  protected $placementType = GoogleAdsSearchads360V23CommonPlacementInfo::class;
  protected $placementDataType = '';
  protected $positionEstimatesType = GoogleAdsSearchads360V23ResourcesAdGroupCriterionPositionEstimates::class;
  protected $positionEstimatesDataType = '';
  /**
   * Output only. The primary status for the ad group criterion.
   *
   * @var string
   */
  public $primaryStatus;
  /**
   * Output only. The primary status reasons for the ad group criterion.
   *
   * @var string[]
   */
  public $primaryStatusReasons;
  protected $qualityInfoType = GoogleAdsSearchads360V23ResourcesAdGroupCriterionQualityInfo::class;
  protected $qualityInfoDataType = '';
  /**
   * Immutable. The resource name of the ad group criterion. Ad group criterion
   * resource names have the form:
   * `customers/{customer_id}/adGroupCriteria/{ad_group_id}~{criterion_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * The status of the criterion. This is the status of the ad group criterion
   * entity, set by the client. Note: UI reports may incorporate additional
   * information that affects whether a criterion is eligible to run. In some
   * cases a criterion that's REMOVED in the API can still show as enabled in
   * the UI. For example, campaigns by default show to users of all age ranges
   * unless excluded. The UI will show each age range as "enabled", since
   * they're eligible to see the ads; but AdGroupCriterion.status will show
   * "removed", since no positive criterion was added.
   *
   * @var string
   */
  public $status;
  /**
   * Output only. Serving status of the criterion.
   *
   * @var string
   */
  public $systemServingStatus;
  protected $topicType = GoogleAdsSearchads360V23CommonTopicInfo::class;
  protected $topicDataType = '';
  /**
   * The URL template for constructing a tracking URL.
   *
   * @var string
   */
  public $trackingUrlTemplate;
  /**
   * Output only. The type of the criterion.
   *
   * @var string
   */
  public $type;
  protected $urlCustomParametersType = GoogleAdsSearchads360V23CommonCustomParameter::class;
  protected $urlCustomParametersDataType = 'array';
  protected $userInterestType = GoogleAdsSearchads360V23CommonUserInterestInfo::class;
  protected $userInterestDataType = '';
  protected $userListType = GoogleAdsSearchads360V23CommonUserListInfo::class;
  protected $userListDataType = '';
  protected $verticalAdsItemGroupRuleListType = GoogleAdsSearchads360V23CommonVerticalAdsItemGroupRuleListInfo::class;
  protected $verticalAdsItemGroupRuleListDataType = '';
  protected $videoLineupType = GoogleAdsSearchads360V23CommonVideoLineupInfo::class;
  protected $videoLineupDataType = '';
  protected $webpageType = GoogleAdsSearchads360V23CommonWebpageInfo::class;
  protected $webpageDataType = '';
  protected $youtubeChannelType = GoogleAdsSearchads360V23CommonYouTubeChannelInfo::class;
  protected $youtubeChannelDataType = '';
  protected $youtubeVideoType = GoogleAdsSearchads360V23CommonYouTubeVideoInfo::class;
  protected $youtubeVideoDataType = '';

  /**
   * Immutable. The ad group to which the criterion belongs.
   *
   * @param string $adGroup
   */
  public function setAdGroup($adGroup)
  {
    $this->adGroup = $adGroup;
  }
  /**
   * @return string
   */
  public function getAdGroup()
  {
    return $this->adGroup;
  }
  /**
   * Immutable. Age range.
   *
   * @param GoogleAdsSearchads360V23CommonAgeRangeInfo $ageRange
   */
  public function setAgeRange(GoogleAdsSearchads360V23CommonAgeRangeInfo $ageRange)
  {
    $this->ageRange = $ageRange;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAgeRangeInfo
   */
  public function getAgeRange()
  {
    return $this->ageRange;
  }
  /**
   * Immutable. App Payment Model.
   *
   * @param GoogleAdsSearchads360V23CommonAppPaymentModelInfo $appPaymentModel
   */
  public function setAppPaymentModel(GoogleAdsSearchads360V23CommonAppPaymentModelInfo $appPaymentModel)
  {
    $this->appPaymentModel = $appPaymentModel;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAppPaymentModelInfo
   */
  public function getAppPaymentModel()
  {
    return $this->appPaymentModel;
  }
  /**
   * Output only. Approval status of the criterion.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, APPROVED, DISAPPROVED,
   * PENDING_REVIEW, UNDER_REVIEW
   *
   * @param self::APPROVAL_STATUS_* $approvalStatus
   */
  public function setApprovalStatus($approvalStatus)
  {
    $this->approvalStatus = $approvalStatus;
  }
  /**
   * @return self::APPROVAL_STATUS_*
   */
  public function getApprovalStatus()
  {
    return $this->approvalStatus;
  }
  /**
   * Immutable. Audience.
   *
   * @param GoogleAdsSearchads360V23CommonAudienceInfo $audience
   */
  public function setAudience(GoogleAdsSearchads360V23CommonAudienceInfo $audience)
  {
    $this->audience = $audience;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceInfo
   */
  public function getAudience()
  {
    return $this->audience;
  }
  public function setBidModifier($bidModifier)
  {
    $this->bidModifier = $bidModifier;
  }
  public function getBidModifier()
  {
    return $this->bidModifier;
  }
  /**
   * Immutable. Brand list criterion.
   *
   * @param GoogleAdsSearchads360V23CommonBrandListInfo $brandList
   */
  public function setBrandList(GoogleAdsSearchads360V23CommonBrandListInfo $brandList)
  {
    $this->brandList = $brandList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonBrandListInfo
   */
  public function getBrandList()
  {
    return $this->brandList;
  }
  /**
   * Immutable. Combined Audience.
   *
   * @param GoogleAdsSearchads360V23CommonCombinedAudienceInfo $combinedAudience
   */
  public function setCombinedAudience(GoogleAdsSearchads360V23CommonCombinedAudienceInfo $combinedAudience)
  {
    $this->combinedAudience = $combinedAudience;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCombinedAudienceInfo
   */
  public function getCombinedAudience()
  {
    return $this->combinedAudience;
  }
  /**
   * The CPC (cost-per-click) bid.
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
   * The CPM (cost-per-thousand viewable impressions) bid.
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
   * Output only. The timestamp when this ad group criterion was created. The
   * timestamp is in the customer's time zone and in "yyyy-MM-dd HH:mm:ss"
   * format.
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
   * Output only. The ID of the criterion.
   *
   * @param string $criterionId
   */
  public function setCriterionId($criterionId)
  {
    $this->criterionId = $criterionId;
  }
  /**
   * @return string
   */
  public function getCriterionId()
  {
    return $this->criterionId;
  }
  /**
   * Immutable. Custom Affinity.
   *
   * @param GoogleAdsSearchads360V23CommonCustomAffinityInfo $customAffinity
   */
  public function setCustomAffinity(GoogleAdsSearchads360V23CommonCustomAffinityInfo $customAffinity)
  {
    $this->customAffinity = $customAffinity;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomAffinityInfo
   */
  public function getCustomAffinity()
  {
    return $this->customAffinity;
  }
  /**
   * Immutable. Custom Audience.
   *
   * @param GoogleAdsSearchads360V23CommonCustomAudienceInfo $customAudience
   */
  public function setCustomAudience(GoogleAdsSearchads360V23CommonCustomAudienceInfo $customAudience)
  {
    $this->customAudience = $customAudience;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomAudienceInfo
   */
  public function getCustomAudience()
  {
    return $this->customAudience;
  }
  /**
   * Immutable. Custom Intent.
   *
   * @param GoogleAdsSearchads360V23CommonCustomIntentInfo $customIntent
   */
  public function setCustomIntent(GoogleAdsSearchads360V23CommonCustomIntentInfo $customIntent)
  {
    $this->customIntent = $customIntent;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomIntentInfo
   */
  public function getCustomIntent()
  {
    return $this->customIntent;
  }
  /**
   * Output only. List of disapproval reasons of the criterion. The different
   * reasons for disapproving a criterion can be found here:
   * https://support.google.com/adspolicy/answer/6008942 This field is read-
   * only.
   *
   * @param string[] $disapprovalReasons
   */
  public function setDisapprovalReasons($disapprovalReasons)
  {
    $this->disapprovalReasons = $disapprovalReasons;
  }
  /**
   * @return string[]
   */
  public function getDisapprovalReasons()
  {
    return $this->disapprovalReasons;
  }
  /**
   * Output only. The display name of the criterion.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. The effective CPC (cost-per-click) bid.
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
   * Output only. Source of the effective CPC bid.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CAMPAIGN_BIDDING_STRATEGY, AD_GROUP,
   * AD_GROUP_CRITERION
   *
   * @param self::EFFECTIVE_CPC_BID_SOURCE_* $effectiveCpcBidSource
   */
  public function setEffectiveCpcBidSource($effectiveCpcBidSource)
  {
    $this->effectiveCpcBidSource = $effectiveCpcBidSource;
  }
  /**
   * @return self::EFFECTIVE_CPC_BID_SOURCE_*
   */
  public function getEffectiveCpcBidSource()
  {
    return $this->effectiveCpcBidSource;
  }
  /**
   * Output only. The effective CPM (cost-per-thousand viewable impressions)
   * bid.
   *
   * @param string $effectiveCpmBidMicros
   */
  public function setEffectiveCpmBidMicros($effectiveCpmBidMicros)
  {
    $this->effectiveCpmBidMicros = $effectiveCpmBidMicros;
  }
  /**
   * @return string
   */
  public function getEffectiveCpmBidMicros()
  {
    return $this->effectiveCpmBidMicros;
  }
  /**
   * Output only. Source of the effective CPM bid.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CAMPAIGN_BIDDING_STRATEGY, AD_GROUP,
   * AD_GROUP_CRITERION
   *
   * @param self::EFFECTIVE_CPM_BID_SOURCE_* $effectiveCpmBidSource
   */
  public function setEffectiveCpmBidSource($effectiveCpmBidSource)
  {
    $this->effectiveCpmBidSource = $effectiveCpmBidSource;
  }
  /**
   * @return self::EFFECTIVE_CPM_BID_SOURCE_*
   */
  public function getEffectiveCpmBidSource()
  {
    return $this->effectiveCpmBidSource;
  }
  /**
   * Output only. The effective CPV (cost-per-view) bid.
   *
   * @param string $effectiveCpvBidMicros
   */
  public function setEffectiveCpvBidMicros($effectiveCpvBidMicros)
  {
    $this->effectiveCpvBidMicros = $effectiveCpvBidMicros;
  }
  /**
   * @return string
   */
  public function getEffectiveCpvBidMicros()
  {
    return $this->effectiveCpvBidMicros;
  }
  /**
   * Output only. Source of the effective CPV bid.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CAMPAIGN_BIDDING_STRATEGY, AD_GROUP,
   * AD_GROUP_CRITERION
   *
   * @param self::EFFECTIVE_CPV_BID_SOURCE_* $effectiveCpvBidSource
   */
  public function setEffectiveCpvBidSource($effectiveCpvBidSource)
  {
    $this->effectiveCpvBidSource = $effectiveCpvBidSource;
  }
  /**
   * @return self::EFFECTIVE_CPV_BID_SOURCE_*
   */
  public function getEffectiveCpvBidSource()
  {
    return $this->effectiveCpvBidSource;
  }
  /**
   * Output only. The resource names of effective labels attached to this ad
   * group criterion. An effective label is a label inherited or directly
   * assigned to this ad group criterion.
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
   * Output only. The effective Percent CPC bid amount.
   *
   * @param string $effectivePercentCpcBidMicros
   */
  public function setEffectivePercentCpcBidMicros($effectivePercentCpcBidMicros)
  {
    $this->effectivePercentCpcBidMicros = $effectivePercentCpcBidMicros;
  }
  /**
   * @return string
   */
  public function getEffectivePercentCpcBidMicros()
  {
    return $this->effectivePercentCpcBidMicros;
  }
  /**
   * Output only. Source of the effective Percent CPC bid.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CAMPAIGN_BIDDING_STRATEGY, AD_GROUP,
   * AD_GROUP_CRITERION
   *
   * @param self::EFFECTIVE_PERCENT_CPC_BID_SOURCE_* $effectivePercentCpcBidSource
   */
  public function setEffectivePercentCpcBidSource($effectivePercentCpcBidSource)
  {
    $this->effectivePercentCpcBidSource = $effectivePercentCpcBidSource;
  }
  /**
   * @return self::EFFECTIVE_PERCENT_CPC_BID_SOURCE_*
   */
  public function getEffectivePercentCpcBidSource()
  {
    return $this->effectivePercentCpcBidSource;
  }
  /**
   * Output only. ID of the ad group criterion in the external engine account.
   * This field is for non-Google Ads account only, for example, Yahoo Japan,
   * Microsoft, Baidu etc. For Google Ads entity, use
   * "ad_group_criterion.criterion_id" instead.
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
   * Output only. The Engine Status for ad group criterion.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AD_GROUP_CRITERION_ELIGIBLE,
   * AD_GROUP_CRITERION_INAPPROPRIATE_FOR_CAMPAIGN,
   * AD_GROUP_CRITERION_INVALID_MOBILE_SEARCH,
   * AD_GROUP_CRITERION_INVALID_PC_SEARCH, AD_GROUP_CRITERION_INVALID_SEARCH,
   * AD_GROUP_CRITERION_LOW_SEARCH_VOLUME,
   * AD_GROUP_CRITERION_MOBILE_URL_UNDER_REVIEW,
   * AD_GROUP_CRITERION_PARTIALLY_INVALID, AD_GROUP_CRITERION_TO_BE_ACTIVATED,
   * AD_GROUP_CRITERION_UNDER_REVIEW, AD_GROUP_CRITERION_NOT_REVIEWED,
   * AD_GROUP_CRITERION_ON_HOLD, AD_GROUP_CRITERION_PENDING_REVIEW,
   * AD_GROUP_CRITERION_PAUSED, AD_GROUP_CRITERION_REMOVED,
   * AD_GROUP_CRITERION_APPROVED, AD_GROUP_CRITERION_DISAPPROVED,
   * AD_GROUP_CRITERION_SERVING, AD_GROUP_CRITERION_ACCOUNT_PAUSED
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
   * Immutable. Extended demographic criterion.
   *
   * @param GoogleAdsSearchads360V23CommonExtendedDemographicInfo $extendedDemographic
   */
  public function setExtendedDemographic(GoogleAdsSearchads360V23CommonExtendedDemographicInfo $extendedDemographic)
  {
    $this->extendedDemographic = $extendedDemographic;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonExtendedDemographicInfo
   */
  public function getExtendedDemographic()
  {
    return $this->extendedDemographic;
  }
  /**
   * The list of possible final mobile URLs after all cross-domain redirects.
   *
   * @param string[] $finalMobileUrls
   */
  public function setFinalMobileUrls($finalMobileUrls)
  {
    $this->finalMobileUrls = $finalMobileUrls;
  }
  /**
   * @return string[]
   */
  public function getFinalMobileUrls()
  {
    return $this->finalMobileUrls;
  }
  /**
   * URL template for appending params to final URL.
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
   * The list of possible final URLs after all cross-domain redirects for the
   * ad.
   *
   * @param string[] $finalUrls
   */
  public function setFinalUrls($finalUrls)
  {
    $this->finalUrls = $finalUrls;
  }
  /**
   * @return string[]
   */
  public function getFinalUrls()
  {
    return $this->finalUrls;
  }
  /**
   * Immutable. Gender.
   *
   * @param GoogleAdsSearchads360V23CommonGenderInfo $gender
   */
  public function setGender(GoogleAdsSearchads360V23CommonGenderInfo $gender)
  {
    $this->gender = $gender;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonGenderInfo
   */
  public function getGender()
  {
    return $this->gender;
  }
  /**
   * Immutable. Income range.
   *
   * @param GoogleAdsSearchads360V23CommonIncomeRangeInfo $incomeRange
   */
  public function setIncomeRange(GoogleAdsSearchads360V23CommonIncomeRangeInfo $incomeRange)
  {
    $this->incomeRange = $incomeRange;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonIncomeRangeInfo
   */
  public function getIncomeRange()
  {
    return $this->incomeRange;
  }
  /**
   * Immutable. Keyword.
   *
   * @param GoogleAdsSearchads360V23CommonKeywordInfo $keyword
   */
  public function setKeyword(GoogleAdsSearchads360V23CommonKeywordInfo $keyword)
  {
    $this->keyword = $keyword;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeywordInfo
   */
  public function getKeyword()
  {
    return $this->keyword;
  }
  /**
   * Output only. The resource names of labels attached to this ad group
   * criterion.
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
   * Immutable. Language.
   *
   * @param GoogleAdsSearchads360V23CommonLanguageInfo $language
   */
  public function setLanguage(GoogleAdsSearchads360V23CommonLanguageInfo $language)
  {
    $this->language = $language;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLanguageInfo
   */
  public function getLanguage()
  {
    return $this->language;
  }
  /**
   * Output only. The datetime when this ad group criterion was last modified.
   * The datetime is in the customer's time zone and in "yyyy-MM-dd
   * HH:mm:ss.ssssss" format.
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
   * Immutable. Life event campaign criterion.
   *
   * @param GoogleAdsSearchads360V23CommonLifeEventInfo $lifeEvent
   */
  public function setLifeEvent(GoogleAdsSearchads360V23CommonLifeEventInfo $lifeEvent)
  {
    $this->lifeEvent = $lifeEvent;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLifeEventInfo
   */
  public function getLifeEvent()
  {
    return $this->lifeEvent;
  }
  /**
   * Immutable. Listing group.
   *
   * @param GoogleAdsSearchads360V23CommonListingGroupInfo $listingGroup
   */
  public function setListingGroup(GoogleAdsSearchads360V23CommonListingGroupInfo $listingGroup)
  {
    $this->listingGroup = $listingGroup;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonListingGroupInfo
   */
  public function getListingGroup()
  {
    return $this->listingGroup;
  }
  /**
   * Immutable. Location.
   *
   * @param GoogleAdsSearchads360V23CommonLocationInfo $location
   */
  public function setLocation(GoogleAdsSearchads360V23CommonLocationInfo $location)
  {
    $this->location = $location;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocationInfo
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Immutable. Mobile app category.
   *
   * @param GoogleAdsSearchads360V23CommonMobileAppCategoryInfo $mobileAppCategory
   */
  public function setMobileAppCategory(GoogleAdsSearchads360V23CommonMobileAppCategoryInfo $mobileAppCategory)
  {
    $this->mobileAppCategory = $mobileAppCategory;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonMobileAppCategoryInfo
   */
  public function getMobileAppCategory()
  {
    return $this->mobileAppCategory;
  }
  /**
   * Immutable. Mobile application.
   *
   * @param GoogleAdsSearchads360V23CommonMobileApplicationInfo $mobileApplication
   */
  public function setMobileApplication(GoogleAdsSearchads360V23CommonMobileApplicationInfo $mobileApplication)
  {
    $this->mobileApplication = $mobileApplication;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonMobileApplicationInfo
   */
  public function getMobileApplication()
  {
    return $this->mobileApplication;
  }
  /**
   * Immutable. Whether to target (`false`) or exclude (`true`) the criterion.
   * This field is immutable. To switch a criterion from positive to negative,
   * remove then re-add it.
   *
   * @param bool $negative
   */
  public function setNegative($negative)
  {
    $this->negative = $negative;
  }
  /**
   * @return bool
   */
  public function getNegative()
  {
    return $this->negative;
  }
  /**
   * Immutable. Parental status.
   *
   * @param GoogleAdsSearchads360V23CommonParentalStatusInfo $parentalStatus
   */
  public function setParentalStatus(GoogleAdsSearchads360V23CommonParentalStatusInfo $parentalStatus)
  {
    $this->parentalStatus = $parentalStatus;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonParentalStatusInfo
   */
  public function getParentalStatus()
  {
    return $this->parentalStatus;
  }
  /**
   * The CPC bid amount, expressed as a fraction of the advertised price for
   * some good or service. The valid range for the fraction is [0,1) and the
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
   * Immutable. Placement.
   *
   * @param GoogleAdsSearchads360V23CommonPlacementInfo $placement
   */
  public function setPlacement(GoogleAdsSearchads360V23CommonPlacementInfo $placement)
  {
    $this->placement = $placement;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPlacementInfo
   */
  public function getPlacement()
  {
    return $this->placement;
  }
  /**
   * Output only. Estimates for criterion bids at various positions.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupCriterionPositionEstimates $positionEstimates
   */
  public function setPositionEstimates(GoogleAdsSearchads360V23ResourcesAdGroupCriterionPositionEstimates $positionEstimates)
  {
    $this->positionEstimates = $positionEstimates;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupCriterionPositionEstimates
   */
  public function getPositionEstimates()
  {
    return $this->positionEstimates;
  }
  /**
   * Output only. The primary status for the ad group criterion.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ELIGIBLE, PAUSED, REMOVED, PENDING,
   * NOT_ELIGIBLE
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
   * Output only. The primary status reasons for the ad group criterion.
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
   * Output only. Information regarding the quality of the criterion.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupCriterionQualityInfo $qualityInfo
   */
  public function setQualityInfo(GoogleAdsSearchads360V23ResourcesAdGroupCriterionQualityInfo $qualityInfo)
  {
    $this->qualityInfo = $qualityInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupCriterionQualityInfo
   */
  public function getQualityInfo()
  {
    return $this->qualityInfo;
  }
  /**
   * Immutable. The resource name of the ad group criterion. Ad group criterion
   * resource names have the form:
   * `customers/{customer_id}/adGroupCriteria/{ad_group_id}~{criterion_id}`
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
   * The status of the criterion. This is the status of the ad group criterion
   * entity, set by the client. Note: UI reports may incorporate additional
   * information that affects whether a criterion is eligible to run. In some
   * cases a criterion that's REMOVED in the API can still show as enabled in
   * the UI. For example, campaigns by default show to users of all age ranges
   * unless excluded. The UI will show each age range as "enabled", since
   * they're eligible to see the ads; but AdGroupCriterion.status will show
   * "removed", since no positive criterion was added.
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
   * Output only. Serving status of the criterion.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ELIGIBLE, RARELY_SERVED
   *
   * @param self::SYSTEM_SERVING_STATUS_* $systemServingStatus
   */
  public function setSystemServingStatus($systemServingStatus)
  {
    $this->systemServingStatus = $systemServingStatus;
  }
  /**
   * @return self::SYSTEM_SERVING_STATUS_*
   */
  public function getSystemServingStatus()
  {
    return $this->systemServingStatus;
  }
  /**
   * Immutable. Topic.
   *
   * @param GoogleAdsSearchads360V23CommonTopicInfo $topic
   */
  public function setTopic(GoogleAdsSearchads360V23CommonTopicInfo $topic)
  {
    $this->topic = $topic;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonTopicInfo
   */
  public function getTopic()
  {
    return $this->topic;
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
   * Output only. The type of the criterion.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, KEYWORD, PLACEMENT,
   * MOBILE_APP_CATEGORY, MOBILE_APPLICATION, DEVICE, LOCATION, LISTING_GROUP,
   * AD_SCHEDULE, AGE_RANGE, GENDER, INCOME_RANGE, PARENTAL_STATUS,
   * YOUTUBE_VIDEO, YOUTUBE_CHANNEL, USER_LIST, PROXIMITY, TOPIC, LISTING_SCOPE,
   * LANGUAGE, IP_BLOCK, CONTENT_LABEL, CARRIER, USER_INTEREST, WEBPAGE,
   * OPERATING_SYSTEM_VERSION, APP_PAYMENT_MODEL, MOBILE_DEVICE,
   * CUSTOM_AFFINITY, CUSTOM_INTENT, LOCATION_GROUP, CUSTOM_AUDIENCE,
   * COMBINED_AUDIENCE, KEYWORD_THEME, AUDIENCE, NEGATIVE_KEYWORD_LIST,
   * LOCAL_SERVICE_ID, SEARCH_THEME, BRAND, BRAND_LIST, LIFE_EVENT,
   * WEBPAGE_LIST, VIDEO_LINEUP, PLACEMENT_LIST,
   * VERTICAL_ADS_ITEM_GROUP_RULE_LIST, VERTICAL_ADS_ITEM_GROUP_RULE
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
   * Immutable. User Interest.
   *
   * @param GoogleAdsSearchads360V23CommonUserInterestInfo $userInterest
   */
  public function setUserInterest(GoogleAdsSearchads360V23CommonUserInterestInfo $userInterest)
  {
    $this->userInterest = $userInterest;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserInterestInfo
   */
  public function getUserInterest()
  {
    return $this->userInterest;
  }
  /**
   * Immutable. User List.
   *
   * @param GoogleAdsSearchads360V23CommonUserListInfo $userList
   */
  public function setUserList(GoogleAdsSearchads360V23CommonUserListInfo $userList)
  {
    $this->userList = $userList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserListInfo
   */
  public function getUserList()
  {
    return $this->userList;
  }
  /**
   * Immutable. Vertical ads item group rule list criterion.
   *
   * @param GoogleAdsSearchads360V23CommonVerticalAdsItemGroupRuleListInfo $verticalAdsItemGroupRuleList
   */
  public function setVerticalAdsItemGroupRuleList(GoogleAdsSearchads360V23CommonVerticalAdsItemGroupRuleListInfo $verticalAdsItemGroupRuleList)
  {
    $this->verticalAdsItemGroupRuleList = $verticalAdsItemGroupRuleList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonVerticalAdsItemGroupRuleListInfo
   */
  public function getVerticalAdsItemGroupRuleList()
  {
    return $this->verticalAdsItemGroupRuleList;
  }
  /**
   * Immutable. Video lineup criterion.
   *
   * @param GoogleAdsSearchads360V23CommonVideoLineupInfo $videoLineup
   */
  public function setVideoLineup(GoogleAdsSearchads360V23CommonVideoLineupInfo $videoLineup)
  {
    $this->videoLineup = $videoLineup;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonVideoLineupInfo
   */
  public function getVideoLineup()
  {
    return $this->videoLineup;
  }
  /**
   * Immutable. Webpage
   *
   * @param GoogleAdsSearchads360V23CommonWebpageInfo $webpage
   */
  public function setWebpage(GoogleAdsSearchads360V23CommonWebpageInfo $webpage)
  {
    $this->webpage = $webpage;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonWebpageInfo
   */
  public function getWebpage()
  {
    return $this->webpage;
  }
  /**
   * Immutable. YouTube Channel.
   *
   * @param GoogleAdsSearchads360V23CommonYouTubeChannelInfo $youtubeChannel
   */
  public function setYoutubeChannel(GoogleAdsSearchads360V23CommonYouTubeChannelInfo $youtubeChannel)
  {
    $this->youtubeChannel = $youtubeChannel;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonYouTubeChannelInfo
   */
  public function getYoutubeChannel()
  {
    return $this->youtubeChannel;
  }
  /**
   * Immutable. YouTube Video.
   *
   * @param GoogleAdsSearchads360V23CommonYouTubeVideoInfo $youtubeVideo
   */
  public function setYoutubeVideo(GoogleAdsSearchads360V23CommonYouTubeVideoInfo $youtubeVideo)
  {
    $this->youtubeVideo = $youtubeVideo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonYouTubeVideoInfo
   */
  public function getYoutubeVideo()
  {
    return $this->youtubeVideo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAdGroupCriterion::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAdGroupCriterion');
