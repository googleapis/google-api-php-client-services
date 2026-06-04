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

class GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsRequest extends \Google\Model
{
  /**
   * Required. The resource name of the campaign to get suggestion for.
   *
   * @var string
   */
  public $campaign;
  protected $suggestionInfoType = GoogleAdsSearchads360V23ServicesSmartCampaignSuggestionInfo::class;
  protected $suggestionInfoDataType = '';

  /**
   * Required. The resource name of the campaign to get suggestion for.
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
   * Required. Information needed to get budget options
   *
   * @param GoogleAdsSearchads360V23ServicesSmartCampaignSuggestionInfo $suggestionInfo
   */
  public function setSuggestionInfo(GoogleAdsSearchads360V23ServicesSmartCampaignSuggestionInfo $suggestionInfo)
  {
    $this->suggestionInfo = $suggestionInfo;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSmartCampaignSuggestionInfo
   */
  public function getSuggestionInfo()
  {
    return $this->suggestionInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsRequest');
