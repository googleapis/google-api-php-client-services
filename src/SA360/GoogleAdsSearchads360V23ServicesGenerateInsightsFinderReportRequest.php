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

class GoogleAdsSearchads360V23ServicesGenerateInsightsFinderReportRequest extends \Google\Model
{
  protected $baselineAudienceType = GoogleAdsSearchads360V23ServicesInsightsAudience::class;
  protected $baselineAudienceDataType = '';
  /**
   * The name of the customer being planned for. This is a user-defined value.
   *
   * @var string
   */
  public $customerInsightsGroup;
  protected $insightsApplicationInfoType = GoogleAdsSearchads360V23CommonAdditionalApplicationInfo::class;
  protected $insightsApplicationInfoDataType = '';
  protected $specificAudienceType = GoogleAdsSearchads360V23ServicesInsightsAudience::class;
  protected $specificAudienceDataType = '';

  /**
   * Required. A baseline audience for this report, typically all people in a
   * region.
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
   * Required. The specific audience of interest for this report. The insights
   * in the report will be based on attributes more prevalent in this audience
   * than in the report's baseline audience.
   *
   * @param GoogleAdsSearchads360V23ServicesInsightsAudience $specificAudience
   */
  public function setSpecificAudience(GoogleAdsSearchads360V23ServicesInsightsAudience $specificAudience)
  {
    $this->specificAudience = $specificAudience;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesInsightsAudience
   */
  public function getSpecificAudience()
  {
    return $this->specificAudience;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateInsightsFinderReportRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateInsightsFinderReportRequest');
