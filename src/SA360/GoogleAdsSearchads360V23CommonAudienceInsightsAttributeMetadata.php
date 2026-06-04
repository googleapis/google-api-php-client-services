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

class GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata extends \Google\Model
{
  /**
   * Not specified.
   */
  public const DIMENSION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const DIMENSION_UNKNOWN = 'UNKNOWN';
  /**
   * A Product & Service category.
   */
  public const DIMENSION_CATEGORY = 'CATEGORY';
  /**
   * A Knowledge Graph entity.
   */
  public const DIMENSION_KNOWLEDGE_GRAPH = 'KNOWLEDGE_GRAPH';
  /**
   * A country, represented by a geo target.
   */
  public const DIMENSION_GEO_TARGET_COUNTRY = 'GEO_TARGET_COUNTRY';
  /**
   * A geographic location within a country.
   */
  public const DIMENSION_SUB_COUNTRY_LOCATION = 'SUB_COUNTRY_LOCATION';
  /**
   * A YouTube channel.
   */
  public const DIMENSION_YOUTUBE_CHANNEL = 'YOUTUBE_CHANNEL';
  /**
   * An Affinity UserInterest.
   */
  public const DIMENSION_AFFINITY_USER_INTEREST = 'AFFINITY_USER_INTEREST';
  /**
   * An In-Market UserInterest.
   */
  public const DIMENSION_IN_MARKET_USER_INTEREST = 'IN_MARKET_USER_INTEREST';
  /**
   * A Parental Status value (parent, or not a parent).
   */
  public const DIMENSION_PARENTAL_STATUS = 'PARENTAL_STATUS';
  /**
   * A household income percentile range.
   */
  public const DIMENSION_INCOME_RANGE = 'INCOME_RANGE';
  /**
   * An age range.
   */
  public const DIMENSION_AGE_RANGE = 'AGE_RANGE';
  /**
   * A gender.
   */
  public const DIMENSION_GENDER = 'GENDER';
  /**
   * A YouTube video.
   */
  public const DIMENSION_YOUTUBE_VIDEO = 'YOUTUBE_VIDEO';
  /**
   * A device type, such as Mobile, Desktop, Tablet, and Connected TV.
   */
  public const DIMENSION_DEVICE = 'DEVICE';
  /**
   * A YouTube Lineup.
   */
  public const DIMENSION_YOUTUBE_LINEUP = 'YOUTUBE_LINEUP';
  /**
   * A User List.
   */
  public const DIMENSION_USER_LIST = 'USER_LIST';
  /**
   * A Life Event UserInterest.
   */
  public const DIMENSION_LIFE_EVENT_USER_INTEREST = 'LIFE_EVENT_USER_INTEREST';
  protected $attributeType = GoogleAdsSearchads360V23CommonAudienceInsightsAttribute::class;
  protected $attributeDataType = '';
  /**
   * The type of the attribute.
   *
   * @var string
   */
  public $dimension;
  /**
   * A string that supplements the display_name to identify the attribute. If
   * the dimension is TOPIC, this is a brief description of the Knowledge Graph
   * entity, such as "American singer-songwriter". If the dimension is CATEGORY,
   * this is the complete path to the category in The Product & Service
   * taxonomy, for example "/Apparel/Clothing/Outerwear".
   *
   * @var string
   */
  public $displayInfo;
  /**
   * The human-readable name of the attribute.
   *
   * @var string
   */
  public $displayName;
  protected $knowledgeGraphAttributeMetadataType = GoogleAdsSearchads360V23CommonKnowledgeGraphAttributeMetadata::class;
  protected $knowledgeGraphAttributeMetadataDataType = '';
  protected $lineupAttributeMetadataType = GoogleAdsSearchads360V23CommonLineupAttributeMetadata::class;
  protected $lineupAttributeMetadataDataType = '';
  protected $locationAttributeMetadataType = GoogleAdsSearchads360V23CommonLocationAttributeMetadata::class;
  protected $locationAttributeMetadataDataType = '';
  /**
   * An estimate of the number of reachable YouTube users matching this
   * attribute in the requested location, or zero if that information is not
   * available for this attribute. This field is not populated in every
   * response.
   *
   * @var string
   */
  public $potentialYoutubeReach;
  /**
   * The share of subscribers within this attribute, between and including 0 and
   * 1. This field is not populated in every response.
   *
   * @var 
   */
  public $subscriberShare;
  protected $userInterestAttributeMetadataType = GoogleAdsSearchads360V23CommonUserInterestAttributeMetadata::class;
  protected $userInterestAttributeMetadataDataType = '';
  protected $userListAttributeMetadataType = GoogleAdsSearchads360V23CommonUserListAttributeMetadata::class;
  protected $userListAttributeMetadataDataType = '';
  /**
   * The share of viewers within this attribute, between and including 0 and 1.
   * This field is not populated in every response.
   *
   * @var 
   */
  public $viewerShare;
  protected $youtubeChannelMetadataType = GoogleAdsSearchads360V23CommonYouTubeChannelAttributeMetadata::class;
  protected $youtubeChannelMetadataDataType = '';
  protected $youtubeVideoMetadataType = GoogleAdsSearchads360V23CommonYouTubeVideoAttributeMetadata::class;
  protected $youtubeVideoMetadataDataType = '';

  /**
   * The attribute itself.
   *
   * @param GoogleAdsSearchads360V23CommonAudienceInsightsAttribute $attribute
   */
  public function setAttribute(GoogleAdsSearchads360V23CommonAudienceInsightsAttribute $attribute)
  {
    $this->attribute = $attribute;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceInsightsAttribute
   */
  public function getAttribute()
  {
    return $this->attribute;
  }
  /**
   * The type of the attribute.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CATEGORY, KNOWLEDGE_GRAPH,
   * GEO_TARGET_COUNTRY, SUB_COUNTRY_LOCATION, YOUTUBE_CHANNEL,
   * AFFINITY_USER_INTEREST, IN_MARKET_USER_INTEREST, PARENTAL_STATUS,
   * INCOME_RANGE, AGE_RANGE, GENDER, YOUTUBE_VIDEO, DEVICE, YOUTUBE_LINEUP,
   * USER_LIST, LIFE_EVENT_USER_INTEREST
   *
   * @param self::DIMENSION_* $dimension
   */
  public function setDimension($dimension)
  {
    $this->dimension = $dimension;
  }
  /**
   * @return self::DIMENSION_*
   */
  public function getDimension()
  {
    return $this->dimension;
  }
  /**
   * A string that supplements the display_name to identify the attribute. If
   * the dimension is TOPIC, this is a brief description of the Knowledge Graph
   * entity, such as "American singer-songwriter". If the dimension is CATEGORY,
   * this is the complete path to the category in The Product & Service
   * taxonomy, for example "/Apparel/Clothing/Outerwear".
   *
   * @param string $displayInfo
   */
  public function setDisplayInfo($displayInfo)
  {
    $this->displayInfo = $displayInfo;
  }
  /**
   * @return string
   */
  public function getDisplayInfo()
  {
    return $this->displayInfo;
  }
  /**
   * The human-readable name of the attribute.
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
   * Special metadata for a Knowledge Graph Entity.
   *
   * @param GoogleAdsSearchads360V23CommonKnowledgeGraphAttributeMetadata $knowledgeGraphAttributeMetadata
   */
  public function setKnowledgeGraphAttributeMetadata(GoogleAdsSearchads360V23CommonKnowledgeGraphAttributeMetadata $knowledgeGraphAttributeMetadata)
  {
    $this->knowledgeGraphAttributeMetadata = $knowledgeGraphAttributeMetadata;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonKnowledgeGraphAttributeMetadata
   */
  public function getKnowledgeGraphAttributeMetadata()
  {
    return $this->knowledgeGraphAttributeMetadata;
  }
  /**
   * Special metadata for a YouTube Lineup.
   *
   * @param GoogleAdsSearchads360V23CommonLineupAttributeMetadata $lineupAttributeMetadata
   */
  public function setLineupAttributeMetadata(GoogleAdsSearchads360V23CommonLineupAttributeMetadata $lineupAttributeMetadata)
  {
    $this->lineupAttributeMetadata = $lineupAttributeMetadata;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLineupAttributeMetadata
   */
  public function getLineupAttributeMetadata()
  {
    return $this->lineupAttributeMetadata;
  }
  /**
   * Special metadata for a Location.
   *
   * @param GoogleAdsSearchads360V23CommonLocationAttributeMetadata $locationAttributeMetadata
   */
  public function setLocationAttributeMetadata(GoogleAdsSearchads360V23CommonLocationAttributeMetadata $locationAttributeMetadata)
  {
    $this->locationAttributeMetadata = $locationAttributeMetadata;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocationAttributeMetadata
   */
  public function getLocationAttributeMetadata()
  {
    return $this->locationAttributeMetadata;
  }
  /**
   * An estimate of the number of reachable YouTube users matching this
   * attribute in the requested location, or zero if that information is not
   * available for this attribute. This field is not populated in every
   * response.
   *
   * @param string $potentialYoutubeReach
   */
  public function setPotentialYoutubeReach($potentialYoutubeReach)
  {
    $this->potentialYoutubeReach = $potentialYoutubeReach;
  }
  /**
   * @return string
   */
  public function getPotentialYoutubeReach()
  {
    return $this->potentialYoutubeReach;
  }
  public function setSubscriberShare($subscriberShare)
  {
    $this->subscriberShare = $subscriberShare;
  }
  public function getSubscriberShare()
  {
    return $this->subscriberShare;
  }
  /**
   * Special metadata for a User Interest.
   *
   * @param GoogleAdsSearchads360V23CommonUserInterestAttributeMetadata $userInterestAttributeMetadata
   */
  public function setUserInterestAttributeMetadata(GoogleAdsSearchads360V23CommonUserInterestAttributeMetadata $userInterestAttributeMetadata)
  {
    $this->userInterestAttributeMetadata = $userInterestAttributeMetadata;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserInterestAttributeMetadata
   */
  public function getUserInterestAttributeMetadata()
  {
    return $this->userInterestAttributeMetadata;
  }
  /**
   * Special metadata for a User List.
   *
   * @param GoogleAdsSearchads360V23CommonUserListAttributeMetadata $userListAttributeMetadata
   */
  public function setUserListAttributeMetadata(GoogleAdsSearchads360V23CommonUserListAttributeMetadata $userListAttributeMetadata)
  {
    $this->userListAttributeMetadata = $userListAttributeMetadata;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonUserListAttributeMetadata
   */
  public function getUserListAttributeMetadata()
  {
    return $this->userListAttributeMetadata;
  }
  public function setViewerShare($viewerShare)
  {
    $this->viewerShare = $viewerShare;
  }
  public function getViewerShare()
  {
    return $this->viewerShare;
  }
  /**
   * Special metadata for a YouTube channel.
   *
   * @param GoogleAdsSearchads360V23CommonYouTubeChannelAttributeMetadata $youtubeChannelMetadata
   */
  public function setYoutubeChannelMetadata(GoogleAdsSearchads360V23CommonYouTubeChannelAttributeMetadata $youtubeChannelMetadata)
  {
    $this->youtubeChannelMetadata = $youtubeChannelMetadata;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonYouTubeChannelAttributeMetadata
   */
  public function getYoutubeChannelMetadata()
  {
    return $this->youtubeChannelMetadata;
  }
  /**
   * Special metadata for a YouTube video.
   *
   * @param GoogleAdsSearchads360V23CommonYouTubeVideoAttributeMetadata $youtubeVideoMetadata
   */
  public function setYoutubeVideoMetadata(GoogleAdsSearchads360V23CommonYouTubeVideoAttributeMetadata $youtubeVideoMetadata)
  {
    $this->youtubeVideoMetadata = $youtubeVideoMetadata;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonYouTubeVideoAttributeMetadata
   */
  public function getYoutubeVideoMetadata()
  {
    return $this->youtubeVideoMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonAudienceInsightsAttributeMetadata');
