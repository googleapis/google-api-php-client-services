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

class GoogleAdsSearchads360V23ServicesGenerateAudienceDefinitionRequest extends \Google\Model
{
  protected $audienceDescriptionType = GoogleAdsSearchads360V23ServicesInsightsAudienceDescription::class;
  protected $audienceDescriptionDataType = '';
  /**
   * Optional. The name of the customer being planned for. This is a user-
   * defined value.
   *
   * @var string
   */
  public $customerInsightsGroup;
  protected $insightsApplicationInfoType = GoogleAdsSearchads360V23CommonAdditionalApplicationInfo::class;
  protected $insightsApplicationInfoDataType = '';

  /**
   * Required. Provide a text description of an audience to get AI-generated
   * structured suggestions. This can take around 5 or more seconds to complete
   * Supported marketing objectives are: AWARENESS, CONSIDERATION and RESEARCH.
   * Supported dimensions are: AGE_RANGE, GENDER, PARENTAL_STATUS,
   * AFFINITY_USER_INTEREST, IN_MARKET_USER_INTEREST, LIFE_EVENT_USER_INTEREST,
   * CATEGORY and KNOWLEDGE_GRAPH.
   *
   * @param GoogleAdsSearchads360V23ServicesInsightsAudienceDescription $audienceDescription
   */
  public function setAudienceDescription(GoogleAdsSearchads360V23ServicesInsightsAudienceDescription $audienceDescription)
  {
    $this->audienceDescription = $audienceDescription;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesInsightsAudienceDescription
   */
  public function getAudienceDescription()
  {
    return $this->audienceDescription;
  }
  /**
   * Optional. The name of the customer being planned for. This is a user-
   * defined value.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateAudienceDefinitionRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateAudienceDefinitionRequest');
