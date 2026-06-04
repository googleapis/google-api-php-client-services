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

class GoogleAdsSearchads360V23ResourcesCampaignCriterion extends \Google\Model
{
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
   * The campaign criterion is enabled.
   */
  public const STATUS_ENABLED = 'ENABLED';
  /**
   * The campaign criterion is paused.
   */
  public const STATUS_PAUSED = 'PAUSED';
  /**
   * The campaign criterion is removed.
   */
  public const STATUS_REMOVED = 'REMOVED';
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
  protected $adScheduleType = GoogleAdsSearchads360V23CommonAdScheduleInfo::class;
  protected $adScheduleDataType = '';
  protected $ageRangeType = GoogleAdsSearchads360V23CommonAgeRangeInfo::class;
  protected $ageRangeDataType = '';
  /**
   * The modifier for the bids when the criterion matches. The modifier must be
   * in the range: 0.1 - 10.0. Most targetable criteria types support modifiers.
   * Use 0 to opt out of a Device type.
   *
   * @var float
   */
  public $bidModifier;
  protected $brandListType = GoogleAdsSearchads360V23CommonBrandListInfo::class;
  protected $brandListDataType = '';
  /**
   * Immutable. The campaign to which the criterion belongs.
   *
   * @var string
   */
  public $campaign;
  protected $carrierType = GoogleAdsSearchads360V23CommonCarrierInfo::class;
  protected $carrierDataType = '';
  protected $combinedAudienceType = GoogleAdsSearchads360V23CommonCombinedAudienceInfo::class;
  protected $combinedAudienceDataType = '';
  protected $contentLabelType = GoogleAdsSearchads360V23CommonContentLabelInfo::class;
  protected $contentLabelDataType = '';
  /**
   * Output only. The ID of the criterion. This field is ignored during mutate.
   *
   * @var string
   */
  public $criterionId;
  protected $deviceType = GoogleAdsSearchads360V23CommonDeviceInfo::class;
  protected $deviceDataType = '';
  /**
   * Output only. The display name of the criterion. This field is ignored for
   * mutates.
   *
   * @var string
   */
  public $displayName;
  protected $extendedDemographicType = GoogleAdsSearchads360V23CommonExtendedDemographicInfo::class;
  protected $extendedDemographicDataType = '';
  protected $genderType = GoogleAdsSearchads360V23CommonGenderInfo::class;
  protected $genderDataType = '';
  protected $incomeRangeType = GoogleAdsSearchads360V23CommonIncomeRangeInfo::class;
  protected $incomeRangeDataType = '';
  protected $ipBlockType = GoogleAdsSearchads360V23CommonIpBlockInfo::class;
  protected $ipBlockDataType = '';
  protected $keywordType = GoogleAdsSearchads360V23CommonKeywordInfo::class;
  protected $keywordDataType = '';
  protected $keywordThemeType = GoogleAdsSearchads360V23CommonKeywordThemeInfo::class;
  protected $keywordThemeDataType = '';
  protected $languageType = GoogleAdsSearchads360V23CommonLanguageInfo::class;
  protected $languageDataType = '';
  /**
   * Output only. The datetime when this campaign criterion was last modified.
   * The datetime is in the customer's time zone and in "yyyy-MM-dd
   * HH:mm:ss.ssssss" format.
   *
   * @var string
   */
  public $lastModifiedTime;
  protected $lifeEventType = GoogleAdsSearchads360V23CommonLifeEventInfo::class;
  protected $lifeEventDataType = '';
  protected $listingScopeType = GoogleAdsSearchads360V23CommonListingScopeInfo::class;
  protected $listingScopeDataType = '';
  protected $localServiceIdType = GoogleAdsSearchads360V23CommonLocalServiceIdInfo::class;
  protected $localServiceIdDataType = '';
  protected $locationType = GoogleAdsSearchads360V23CommonLocationInfo::class;
  protected $locationDataType = '';
  protected $locationGroupType = GoogleAdsSearchads360V23CommonLocationGroupInfo::class;
  protected $locationGroupDataType = '';
  protected $mobileAppCategoryType = GoogleAdsSearchads360V23CommonMobileAppCategoryInfo::class;
  protected $mobileAppCategoryDataType = '';
  protected $mobileApplicationType = GoogleAdsSearchads360V23CommonMobileApplicationInfo::class;
  protected $mobileApplicationDataType = '';
  protected $mobileDeviceType = GoogleAdsSearchads360V23CommonMobileDeviceInfo::class;
  protected $mobileDeviceDataType = '';
  /**
   * Immutable. Whether to target (`false`) or exclude (`true`) the criterion.
   *
   * @var bool
   */
  public $negative;
  protected $operatingSystemVersionType = GoogleAdsSearchads360V23CommonOperatingSystemVersionInfo::class;
  protected $operatingSystemVersionDataType = '';
  protected $parentalStatusType = GoogleAdsSearchads360V23CommonParentalStatusInfo::class;
  protected $parentalStatusDataType = '';
  protected $placementType = GoogleAdsSearchads360V23CommonPlacementInfo::class;
  protected $placementDataType = '';
  protected $proximityType = GoogleAdsSearchads360V23CommonProximityInfo::class;
  protected $proximityDataType = '';
  /**
   * Immutable. The resource name of the campaign criterion. Campaign criterion
   * resource names have the form:
   * `customers/{customer_id}/campaignCriteria/{campaign_id}~{criterion_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * The status of the criterion.
   *
   * @var string
   */
  public $status;
  protected $topicType = GoogleAdsSearchads360V23CommonTopicInfo::class;
  protected $topicDataType = '';
  /**
   * Output only. The type of the criterion.
   *
   * @var string
   */
  public $type;
  protected $userInterestType = GoogleAdsSearchads360V23CommonUserInterestInfo::class;
  protected $userInterestDataType = '';
  protected $userListType = GoogleAdsSearchads360V23CommonUserListInfo::class;
  protected $userListDataType = '';
  protected $videoLineupType = GoogleAdsSearchads360V23CommonVideoLineupInfo::class;
  protected $videoLineupDataType = '';
  protected $webpageType = GoogleAdsSearchads360V23CommonWebpageInfo::class;
  protected $webpageDataType = '';
  protected $webpageListType = GoogleAdsSearchads360V23CommonWebpageListInfo::class;
  protected $webpageListDataType = '';
  protected $youtubeChannelType = GoogleAdsSearchads360V23CommonYouTubeChannelInfo::class;
  protected $youtubeChannelDataType = '';
  protected $youtubeVideoType = GoogleAdsSearchads360V23CommonYouTubeVideoInfo::class;
  protected $youtubeVideoDataType = '';

  /**
   * Immutable. Ad Schedule.
   *
   * @param GoogleAdsSearchads360V23CommonAdScheduleInfo $adSchedule
   */
  public function setAdSchedule(GoogleAdsSearchads360V23CommonAdScheduleInfo $adSchedule)
  {
    $this->adSchedule = $adSchedule;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdScheduleInfo
   */
  public function getAdSchedule()
  {
    return $this->adSchedule;
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
   * The modifier for the bids when the criterion matches. The modifier must be
   * in the range: 0.1 - 10.0. Most targetable criteria types support modifiers.
   * Use 0 to opt out of a Device type.
   *
   * @param float $bidModifier
   */
  public function setBidModifier($bidModifier)
  {
    $this->bidModifier = $bidModifier;
  }
  /**
   * @return float
   */
  public function getBidModifier()
  {
    return $this->bidModifier;
  }
  /**
   * Immutable. Brand list campaign criterion.
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
   * Immutable. The campaign to which the criterion belongs.
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
   * Immutable. Carrier.
   *
   * @param GoogleAdsSearchads360V23CommonCarrierInfo $carrier
   */
  public function setCarrier(GoogleAdsSearchads360V23CommonCarrierInfo $carrier)
  {
    $this->carrier = $carrier;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCarrierInfo
   */
  public function getCarrier()
  {
    return $this->carrier;
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
   * Immutable. ContentLabel.
   *
   * @param GoogleAdsSearchads360V23CommonContentLabelInfo $contentLabel
   */
  public function setContentLabel(GoogleAdsSearchads360V23CommonContentLabelInfo $contentLabel)
  {
    $this->contentLabel = $contentLabel;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonContentLabelInfo
   */
  public function getContentLabel()
  {
    return $this->contentLabel;
  }
  /**
   * Output only. The ID of the criterion. This field is ignored during mutate.
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
   * Immutable. Device.
   *
   * @param GoogleAdsSearchads360V23CommonDeviceInfo $device
   */
  public function setDevice(GoogleAdsSearchads360V23CommonDeviceInfo $device)
  {
    $this->device = $device;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonDeviceInfo
   */
  public function getDevice()
  {
    return $this->device;
  }
  /**
   * Output only. The display name of the criterion. This field is ignored for
   * mutates.
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
   * Immutable. IpBlock. You can exclude up to 500 IP addresses per campaign.
   *
   * @param GoogleAdsSearchads360V23CommonIpBlockInfo $ipBlock
   */
  public function setIpBlock(GoogleAdsSearchads360V23CommonIpBlockInfo $ipBlock)
  {
    $this->ipBlock = $ipBlock;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonIpBlockInfo
   */
  public function getIpBlock()
  {
    return $this->ipBlock;
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
   * Immutable. Smart Campaign Keyword Theme.
   *
   * @param GoogleAdsSearchads360V23CommonKeywordThemeInfo $keywordTheme
   */
  public function setKeywordTheme(GoogleAdsSearchads360V23CommonKeywordThemeInfo $keywordTheme)
  {
    $this->keywordTheme = $keywordTheme;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKeywordThemeInfo
   */
  public function getKeywordTheme()
  {
    return $this->keywordTheme;
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
   * Output only. The datetime when this campaign criterion was last modified.
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
   * Immutable. Listing scope.
   *
   * @param GoogleAdsSearchads360V23CommonListingScopeInfo $listingScope
   */
  public function setListingScope(GoogleAdsSearchads360V23CommonListingScopeInfo $listingScope)
  {
    $this->listingScope = $listingScope;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonListingScopeInfo
   */
  public function getListingScope()
  {
    return $this->listingScope;
  }
  /**
   * Immutable. GLS service campaign criterion.
   *
   * @param GoogleAdsSearchads360V23CommonLocalServiceIdInfo $localServiceId
   */
  public function setLocalServiceId(GoogleAdsSearchads360V23CommonLocalServiceIdInfo $localServiceId)
  {
    $this->localServiceId = $localServiceId;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocalServiceIdInfo
   */
  public function getLocalServiceId()
  {
    return $this->localServiceId;
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
   * Immutable. Location Group
   *
   * @param GoogleAdsSearchads360V23CommonLocationGroupInfo $locationGroup
   */
  public function setLocationGroup(GoogleAdsSearchads360V23CommonLocationGroupInfo $locationGroup)
  {
    $this->locationGroup = $locationGroup;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocationGroupInfo
   */
  public function getLocationGroup()
  {
    return $this->locationGroup;
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
   * Immutable. Mobile Device.
   *
   * @param GoogleAdsSearchads360V23CommonMobileDeviceInfo $mobileDevice
   */
  public function setMobileDevice(GoogleAdsSearchads360V23CommonMobileDeviceInfo $mobileDevice)
  {
    $this->mobileDevice = $mobileDevice;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonMobileDeviceInfo
   */
  public function getMobileDevice()
  {
    return $this->mobileDevice;
  }
  /**
   * Immutable. Whether to target (`false`) or exclude (`true`) the criterion.
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
   * Immutable. Operating system version.
   *
   * @param GoogleAdsSearchads360V23CommonOperatingSystemVersionInfo $operatingSystemVersion
   */
  public function setOperatingSystemVersion(GoogleAdsSearchads360V23CommonOperatingSystemVersionInfo $operatingSystemVersion)
  {
    $this->operatingSystemVersion = $operatingSystemVersion;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonOperatingSystemVersionInfo
   */
  public function getOperatingSystemVersion()
  {
    return $this->operatingSystemVersion;
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
   * Immutable. Proximity.
   *
   * @param GoogleAdsSearchads360V23CommonProximityInfo $proximity
   */
  public function setProximity(GoogleAdsSearchads360V23CommonProximityInfo $proximity)
  {
    $this->proximity = $proximity;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonProximityInfo
   */
  public function getProximity()
  {
    return $this->proximity;
  }
  /**
   * Immutable. The resource name of the campaign criterion. Campaign criterion
   * resource names have the form:
   * `customers/{customer_id}/campaignCriteria/{campaign_id}~{criterion_id}`
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
   * The status of the criterion.
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
   * Immutable. Webpage.
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
   * Immutable. Webpage list. This criterion is not publicly available.
   *
   * @param GoogleAdsSearchads360V23CommonWebpageListInfo $webpageList
   */
  public function setWebpageList(GoogleAdsSearchads360V23CommonWebpageListInfo $webpageList)
  {
    $this->webpageList = $webpageList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonWebpageListInfo
   */
  public function getWebpageList()
  {
    return $this->webpageList;
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
class_alias(GoogleAdsSearchads360V23ResourcesCampaignCriterion::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignCriterion');
