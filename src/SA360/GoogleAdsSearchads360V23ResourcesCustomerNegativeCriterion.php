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

class GoogleAdsSearchads360V23ResourcesCustomerNegativeCriterion extends \Google\Model
{
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
  protected $contentLabelType = GoogleAdsSearchads360V23CommonContentLabelInfo::class;
  protected $contentLabelDataType = '';
  /**
   * Output only. The ID of the criterion.
   *
   * @var string
   */
  public $id;
  protected $ipBlockType = GoogleAdsSearchads360V23CommonIpBlockInfo::class;
  protected $ipBlockDataType = '';
  protected $mobileAppCategoryType = GoogleAdsSearchads360V23CommonMobileAppCategoryInfo::class;
  protected $mobileAppCategoryDataType = '';
  protected $mobileApplicationType = GoogleAdsSearchads360V23CommonMobileApplicationInfo::class;
  protected $mobileApplicationDataType = '';
  protected $negativeKeywordListType = GoogleAdsSearchads360V23CommonNegativeKeywordListInfo::class;
  protected $negativeKeywordListDataType = '';
  protected $placementType = GoogleAdsSearchads360V23CommonPlacementInfo::class;
  protected $placementDataType = '';
  protected $placementListType = GoogleAdsSearchads360V23CommonPlacementListInfo::class;
  protected $placementListDataType = '';
  /**
   * Immutable. The resource name of the customer negative criterion. Customer
   * negative criterion resource names have the form:
   * `customers/{customer_id}/customerNegativeCriteria/{criterion_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The type of the criterion.
   *
   * @var string
   */
  public $type;
  protected $youtubeChannelType = GoogleAdsSearchads360V23CommonYouTubeChannelInfo::class;
  protected $youtubeChannelDataType = '';
  protected $youtubeVideoType = GoogleAdsSearchads360V23CommonYouTubeVideoInfo::class;
  protected $youtubeVideoDataType = '';

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
   * Output only. The ID of the criterion.
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
   * Immutable. IpBlock. You can exclude up to 500 IP addresses per account.
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
   * Immutable. MobileAppCategory.
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
   * Immutable. MobileApplication.
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
   * Immutable. NegativeKeywordList.
   *
   * @param GoogleAdsSearchads360V23CommonNegativeKeywordListInfo $negativeKeywordList
   */
  public function setNegativeKeywordList(GoogleAdsSearchads360V23CommonNegativeKeywordListInfo $negativeKeywordList)
  {
    $this->negativeKeywordList = $negativeKeywordList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonNegativeKeywordListInfo
   */
  public function getNegativeKeywordList()
  {
    return $this->negativeKeywordList;
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
   * Immutable. PlacementList.
   *
   * @param GoogleAdsSearchads360V23CommonPlacementListInfo $placementList
   */
  public function setPlacementList(GoogleAdsSearchads360V23CommonPlacementListInfo $placementList)
  {
    $this->placementList = $placementList;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPlacementListInfo
   */
  public function getPlacementList()
  {
    return $this->placementList;
  }
  /**
   * Immutable. The resource name of the customer negative criterion. Customer
   * negative criterion resource names have the form:
   * `customers/{customer_id}/customerNegativeCriteria/{criterion_id}`
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
class_alias(GoogleAdsSearchads360V23ResourcesCustomerNegativeCriterion::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerNegativeCriterion');
