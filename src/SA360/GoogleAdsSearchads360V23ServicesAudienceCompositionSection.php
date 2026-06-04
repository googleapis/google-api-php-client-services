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

class GoogleAdsSearchads360V23ServicesAudienceCompositionSection extends \Google\Collection
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
  protected $collection_key = 'topAttributes';
  protected $clusteredAttributesType = GoogleAdsSearchads360V23ServicesAudienceCompositionAttributeCluster::class;
  protected $clusteredAttributesDataType = 'array';
  /**
   * The type of the attributes in this section.
   *
   * @var string
   */
  public $dimension;
  protected $topAttributesType = GoogleAdsSearchads360V23ServicesAudienceCompositionAttribute::class;
  protected $topAttributesDataType = 'array';

  /**
   * Additional attributes for this audience, grouped into clusters. Only
   * populated if dimension is YOUTUBE_CHANNEL.
   *
   * @param GoogleAdsSearchads360V23ServicesAudienceCompositionAttributeCluster[] $clusteredAttributes
   */
  public function setClusteredAttributes($clusteredAttributes)
  {
    $this->clusteredAttributes = $clusteredAttributes;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAudienceCompositionAttributeCluster[]
   */
  public function getClusteredAttributes()
  {
    return $this->clusteredAttributes;
  }
  /**
   * The type of the attributes in this section.
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
   * The most relevant segments for this audience. If dimension is GENDER,
   * AGE_RANGE or PARENTAL_STATUS, then this list of attributes is exhaustive.
   *
   * @param GoogleAdsSearchads360V23ServicesAudienceCompositionAttribute[] $topAttributes
   */
  public function setTopAttributes($topAttributes)
  {
    $this->topAttributes = $topAttributes;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAudienceCompositionAttribute[]
   */
  public function getTopAttributes()
  {
    return $this->topAttributes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesAudienceCompositionSection::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesAudienceCompositionSection');
