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

class GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetRoasRecommendation extends \Google\Model
{
  protected $campaignBudgetType = GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudget::class;
  protected $campaignBudgetDataType = '';
  /**
   * Output only. The recommended target ROAS (revenue per unit of spend). The
   * value is between 0.01 and 1000.0, inclusive.
   *
   * @var 
   */
  public $recommendedTargetRoas;

  /**
   * Output only. The campaign budget.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudget $campaignBudget
   */
  public function setCampaignBudget(GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudget $campaignBudget)
  {
    $this->campaignBudget = $campaignBudget;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudget
   */
  public function getCampaignBudget()
  {
    return $this->campaignBudget;
  }
  public function setRecommendedTargetRoas($recommendedTargetRoas)
  {
    $this->recommendedTargetRoas = $recommendedTargetRoas;
  }
  public function getRecommendedTargetRoas()
  {
    return $this->recommendedTargetRoas;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetRoasRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationForecastingSetTargetRoasRecommendation');
