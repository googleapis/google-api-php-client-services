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

class GoogleAdsSearchads360V23ServicesGenerateAudienceOverlapInsightsRequest extends \Google\Collection
{
  protected $collection_key = 'dimensions';
  protected $countryLocationType = GoogleAdsSearchads360V23CommonLocationInfo::class;
  protected $countryLocationDataType = '';
  /**
   * The name of the customer being planned for. This is a user-defined value.
   *
   * @var string
   */
  public $customerInsightsGroup;
  /**
   * Required. The types of attributes of which to calculate the overlap with
   * the primary_attribute. The values must be a subset of
   * AFFINITY_USER_INTEREST, IN_MARKET_USER_INTEREST, AGE_RANGE and GENDER.
   *
   * @var string[]
   */
  public $dimensions;
  protected $insightsApplicationInfoType = GoogleAdsSearchads360V23CommonAdditionalApplicationInfo::class;
  protected $insightsApplicationInfoDataType = '';
  protected $primaryAttributeType = GoogleAdsSearchads360V23CommonAudienceInsightsAttribute::class;
  protected $primaryAttributeDataType = '';

  /**
   * Required. The country in which to calculate the sizes and overlaps of
   * audiences.
   *
   * @param GoogleAdsSearchads360V23CommonLocationInfo $countryLocation
   */
  public function setCountryLocation(GoogleAdsSearchads360V23CommonLocationInfo $countryLocation)
  {
    $this->countryLocation = $countryLocation;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocationInfo
   */
  public function getCountryLocation()
  {
    return $this->countryLocation;
  }
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
   * Required. The types of attributes of which to calculate the overlap with
   * the primary_attribute. The values must be a subset of
   * AFFINITY_USER_INTEREST, IN_MARKET_USER_INTEREST, AGE_RANGE and GENDER.
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
   * Required. The audience attribute that should be intersected with all other
   * eligible audiences. This must be an Affinity or In-Market UserInterest, an
   * AgeRange or a Gender.
   *
   * @param GoogleAdsSearchads360V23CommonAudienceInsightsAttribute $primaryAttribute
   */
  public function setPrimaryAttribute(GoogleAdsSearchads360V23CommonAudienceInsightsAttribute $primaryAttribute)
  {
    $this->primaryAttribute = $primaryAttribute;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAudienceInsightsAttribute
   */
  public function getPrimaryAttribute()
  {
    return $this->primaryAttribute;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateAudienceOverlapInsightsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateAudienceOverlapInsightsRequest');
