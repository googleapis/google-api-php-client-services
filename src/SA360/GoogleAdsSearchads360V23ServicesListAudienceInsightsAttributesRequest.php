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

class GoogleAdsSearchads360V23ServicesListAudienceInsightsAttributesRequest extends \Google\Collection
{
  protected $collection_key = 'locationCountryFilters';
  /**
   * The name of the customer being planned for. This is a user-defined value.
   *
   * @var string
   */
  public $customerInsightsGroup;
  /**
   * Required. The types of attributes to be returned. Supported dimensions are
   * CATEGORY, KNOWLEDGE_GRAPH, GEO_TARGET_COUNTRY, SUB_COUNTRY_LOCATION,
   * YOUTUBE_LINEUP, AFFINITY_USER_INTEREST, IN_MARKET_USER_INTEREST, .
   *
   * @var string[]
   */
  public $dimensions;
  protected $insightsApplicationInfoType = GoogleAdsSearchads360V23CommonAdditionalApplicationInfo::class;
  protected $insightsApplicationInfoDataType = '';
  protected $locationCountryFiltersType = GoogleAdsSearchads360V23CommonLocationInfo::class;
  protected $locationCountryFiltersDataType = 'array';
  /**
   * Required. A free text query. If the requested dimensions include Attributes
   * CATEGORY or KNOWLEDGE_GRAPH, then the attributes returned for those
   * dimensions will match or be related to this string. For other dimensions,
   * this field is ignored and all available attributes are returned.
   *
   * @var string
   */
  public $queryText;
  protected $youtubeReachLocationType = GoogleAdsSearchads360V23CommonLocationInfo::class;
  protected $youtubeReachLocationDataType = '';

  /**
   * The name of the customer being planned for. This is a user-defined value.
   *
   * @param string $customerInsightsGroup
   */
  public function setCustomerInsightsGroup($customerInsightsGroup)
  {
    $this->customerInsightsGroup = $customerInsightsGroup;
  }
  /**
   * @return string
   */
  public function getCustomerInsightsGroup()
  {
    return $this->customerInsightsGroup;
  }
  /**
   * Required. The types of attributes to be returned. Supported dimensions are
   * CATEGORY, KNOWLEDGE_GRAPH, GEO_TARGET_COUNTRY, SUB_COUNTRY_LOCATION,
   * YOUTUBE_LINEUP, AFFINITY_USER_INTEREST, IN_MARKET_USER_INTEREST, .
   *
   * @param string[] $dimensions
   */
  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }
  /**
   * @return string[]
   */
  public function getDimensions()
  {
    return $this->dimensions;
  }
  /**
   * Optional. Additional information on the application issuing the request.
   *
   * @param GoogleAdsSearchads360V23CommonAdditionalApplicationInfo $insightsApplicationInfo
   */
  public function setInsightsApplicationInfo(GoogleAdsSearchads360V23CommonAdditionalApplicationInfo $insightsApplicationInfo)
  {
    $this->insightsApplicationInfo = $insightsApplicationInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdditionalApplicationInfo
   */
  public function getInsightsApplicationInfo()
  {
    return $this->insightsApplicationInfo;
  }
  /**
   * If SUB_COUNTRY_LOCATION attributes are one of the requested dimensions and
   * this field is present, then the SUB_COUNTRY_LOCATION attributes returned
   * will be located in these countries. If this field is absent, then location
   * attributes are not filtered by country. Setting this field when
   * SUB_COUNTRY_LOCATION attributes are not requested will return an error.
   *
   * @param GoogleAdsSearchads360V23CommonLocationInfo[] $locationCountryFilters
   */
  public function setLocationCountryFilters($locationCountryFilters)
  {
    $this->locationCountryFilters = $locationCountryFilters;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocationInfo[]
   */
  public function getLocationCountryFilters()
  {
    return $this->locationCountryFilters;
  }
  /**
   * Required. A free text query. If the requested dimensions include Attributes
   * CATEGORY or KNOWLEDGE_GRAPH, then the attributes returned for those
   * dimensions will match or be related to this string. For other dimensions,
   * this field is ignored and all available attributes are returned.
   *
   * @param string $queryText
   */
  public function setQueryText($queryText)
  {
    $this->queryText = $queryText;
  }
  /**
   * @return string
   */
  public function getQueryText()
  {
    return $this->queryText;
  }
  /**
   * If present, potential YouTube reach estimates within the specified market
   * will be returned for attributes for which they are available. Reach is only
   * available for the AGE_RANGE, GENDER, AFFINITY_USER_INTEREST and
   * IN_MARKET_USER_INTEREST dimensions, and may not be available for every
   * attribute of those dimensions in every market.
   *
   * @param GoogleAdsSearchads360V23CommonLocationInfo $youtubeReachLocation
   */
  public function setYoutubeReachLocation(GoogleAdsSearchads360V23CommonLocationInfo $youtubeReachLocation)
  {
    $this->youtubeReachLocation = $youtubeReachLocation;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocationInfo
   */
  public function getYoutubeReachLocation()
  {
    return $this->youtubeReachLocation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesListAudienceInsightsAttributesRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesListAudienceInsightsAttributesRequest');
