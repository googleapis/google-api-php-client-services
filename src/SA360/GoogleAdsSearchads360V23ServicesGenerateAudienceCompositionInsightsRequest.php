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

class GoogleAdsSearchads360V23ServicesGenerateAudienceCompositionInsightsRequest extends \Google\Collection
{
  protected $collection_key = 'dimensions';
  protected $audienceType = GoogleAdsSearchads360V23ServicesInsightsAudience::class;
  protected $audienceDataType = '';
  protected $baselineAudienceType = GoogleAdsSearchads360V23ServicesInsightsAudience::class;
  protected $baselineAudienceDataType = '';
  /**
   * The name of the customer being planned for. This is a user-defined value.
   *
   * @var string
   */
  public $customerInsightsGroup;
  /**
   * The one-month range of historical data to use for insights, in the format
   * "yyyy-mm". If unset, insights will be returned for the last thirty days of
   * data.
   *
   * @var string
   */
  public $dataMonth;
  /**
   * Required. The audience dimensions for which composition insights should be
   * returned. Supported dimensions are KNOWLEDGE_GRAPH, GEO_TARGET_COUNTRY,
   * SUB_COUNTRY_LOCATION, YOUTUBE_CHANNEL, YOUTUBE_LINEUP,
   * AFFINITY_USER_INTEREST, IN_MARKET_USER_INTEREST, .
   *
   * @var string[]
   */
  public $dimensions;
  protected $insightsApplicationInfoType = GoogleAdsSearchads360V23CommonAdditionalApplicationInfo::class;
  protected $insightsApplicationInfoDataType = '';

  /**
   * Required. The audience of interest for which insights are being requested.
   *
   * @param GoogleAdsSearchads360V23ServicesInsightsAudience $audience
   */
  public function setAudience(GoogleAdsSearchads360V23ServicesInsightsAudience $audience)
  {
    $this->audience = $audience;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesInsightsAudience
   */
  public function getAudience()
  {
    return $this->audience;
  }
  /**
   * The baseline audience to which the audience of interest is being compared.
   *
   * @param GoogleAdsSearchads360V23ServicesInsightsAudience $baselineAudience
   */
  public function setBaselineAudience(GoogleAdsSearchads360V23ServicesInsightsAudience $baselineAudience)
  {
    $this->baselineAudience = $baselineAudience;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesInsightsAudience
   */
  public function getBaselineAudience()
  {
    return $this->baselineAudience;
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
   * The one-month range of historical data to use for insights, in the format
   * "yyyy-mm". If unset, insights will be returned for the last thirty days of
   * data.
   *
   * @param string $dataMonth
   */
  public function setDataMonth($dataMonth)
  {
    $this->dataMonth = $dataMonth;
  }
  /**
   * @return string
   */
  public function getDataMonth()
  {
    return $this->dataMonth;
  }
  /**
   * Required. The audience dimensions for which composition insights should be
   * returned. Supported dimensions are KNOWLEDGE_GRAPH, GEO_TARGET_COUNTRY,
   * SUB_COUNTRY_LOCATION, YOUTUBE_CHANNEL, YOUTUBE_LINEUP,
   * AFFINITY_USER_INTEREST, IN_MARKET_USER_INTEREST, .
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateAudienceCompositionInsightsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateAudienceCompositionInsightsRequest');
