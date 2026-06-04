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

class GoogleAdsSearchads360V23ServicesApplyRecommendationOperationTargetRoasOptInParameters extends \Google\Model
{
  /**
   * Optional, budget amount to set for the campaign.
   *
   * @var string
   */
  public $newCampaignBudgetAmountMicros;
  /**
   * Average ROAS (revenue per unit of spend) to use for Target ROAS bidding
   * strategy. The value is between 0.01 and 1000.0, inclusive. This is a
   * required field, unless new_campaign_budget_amount_micros is set.
   *
   * @var 
   */
  public $targetRoas;

  /**
   * Optional, budget amount to set for the campaign.
   *
   * @param string $newCampaignBudgetAmountMicros
   */
  public function setNewCampaignBudgetAmountMicros($newCampaignBudgetAmountMicros)
  {
    $this->newCampaignBudgetAmountMicros = $newCampaignBudgetAmountMicros;
  }
  /**
   * @return string
   */
  public function getNewCampaignBudgetAmountMicros()
  {
    return $this->newCampaignBudgetAmountMicros;
  }
  public function setTargetRoas($targetRoas)
  {
    $this->targetRoas = $targetRoas;
  }
  public function getTargetRoas()
  {
    return $this->targetRoas;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationTargetRoasOptInParameters::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesApplyRecommendationOperationTargetRoasOptInParameters');
