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

class GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponse extends \Google\Model
{
  protected $highType = GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponseBudgetOption::class;
  protected $highDataType = '';
  protected $lowType = GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponseBudgetOption::class;
  protected $lowDataType = '';
  protected $recommendedType = GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponseBudgetOption::class;
  protected $recommendedDataType = '';

  /**
   * Optional. The highest budget option.
   *
   * @param GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponseBudgetOption $high
   */
  public function setHigh(GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponseBudgetOption $high)
  {
    $this->high = $high;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponseBudgetOption
   */
  public function getHigh()
  {
    return $this->high;
  }
  /**
   * Optional. The lowest budget option.
   *
   * @param GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponseBudgetOption $low
   */
  public function setLow(GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponseBudgetOption $low)
  {
    $this->low = $low;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponseBudgetOption
   */
  public function getLow()
  {
    return $this->low;
  }
  /**
   * Optional. The recommended budget option.
   *
   * @param GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponseBudgetOption $recommended
   */
  public function setRecommended(GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponseBudgetOption $recommended)
  {
    $this->recommended = $recommended;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponseBudgetOption
   */
  public function getRecommended()
  {
    return $this->recommended;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponse::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSuggestSmartCampaignBudgetOptionsResponse');
