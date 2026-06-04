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

class GoogleAdsSearchads360V23ServicesInsightsAudienceDescription extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const MARKETING_OBJECTIVE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const MARKETING_OBJECTIVE_UNKNOWN = 'UNKNOWN';
  /**
   * The objective is to increase awareness of a brand or product among relevant
   * audiences.
   */
  public const MARKETING_OBJECTIVE_AWARENESS = 'AWARENESS';
  /**
   * The objective is to encourage potential customers to consider your brand or
   * products when they're researching or shopping for product.
   */
  public const MARKETING_OBJECTIVE_CONSIDERATION = 'CONSIDERATION';
  /**
   * The objective is for research, to gain further insights into your audience.
   */
  public const MARKETING_OBJECTIVE_RESEARCH = 'RESEARCH';
  protected $collection_key = 'countryLocations';
  /**
   * Required. An English language text description of an audience to get
   * suggestions for. Maximum length is 2000 characters. For example, "Women in
   * their 30s who love to travel".
   *
   * @var string
   */
  public $audienceDescription;
  protected $audienceDimensionsType = GoogleAdsSearchads360V23ServicesAudienceInsightsDimensions::class;
  protected $audienceDimensionsDataType = '';
  protected $countryLocationsType = GoogleAdsSearchads360V23CommonLocationInfo::class;
  protected $countryLocationsDataType = 'array';
  /**
   * Optional. An optional marketing objective which will influence the type of
   * suggestions produced.
   *
   * @var string
   */
  public $marketingObjective;

  /**
   * Required. An English language text description of an audience to get
   * suggestions for. Maximum length is 2000 characters. For example, "Women in
   * their 30s who love to travel".
   *
   * @param string $audienceDescription
   */
  public function setAudienceDescription($audienceDescription)
  {
    $this->audienceDescription = $audienceDescription;
  }
  /**
   * @return string
   */
  public function getAudienceDescription()
  {
    return $this->audienceDescription;
  }
  /**
   * Optional. An optional list of audience dimensions to return.
   *
   * @param GoogleAdsSearchads360V23ServicesAudienceInsightsDimensions $audienceDimensions
   */
  public function setAudienceDimensions(GoogleAdsSearchads360V23ServicesAudienceInsightsDimensions $audienceDimensions)
  {
    $this->audienceDimensions = $audienceDimensions;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAudienceInsightsDimensions
   */
  public function getAudienceDimensions()
  {
    return $this->audienceDimensions;
  }
  /**
   * Required. The countries for the audience.
   *
   * @param GoogleAdsSearchads360V23CommonLocationInfo[] $countryLocations
   */
  public function setCountryLocations($countryLocations)
  {
    $this->countryLocations = $countryLocations;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonLocationInfo[]
   */
  public function getCountryLocations()
  {
    return $this->countryLocations;
  }
  /**
   * Optional. An optional marketing objective which will influence the type of
   * suggestions produced.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, AWARENESS, CONSIDERATION, RESEARCH
   *
   * @param self::MARKETING_OBJECTIVE_* $marketingObjective
   */
  public function setMarketingObjective($marketingObjective)
  {
    $this->marketingObjective = $marketingObjective;
  }
  /**
   * @return self::MARKETING_OBJECTIVE_*
   */
  public function getMarketingObjective()
  {
    return $this->marketingObjective;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesInsightsAudienceDescription::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesInsightsAudienceDescription');
