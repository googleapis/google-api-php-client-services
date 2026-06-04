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

class GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetRoasParameters extends \Google\Model
{
  /**
   * New campaign budget amount to set for a campaign resource.
   *
   * @var string
   */
  public $campaignBudgetAmountMicros;
  /**
   * New target ROAS (revenue per unit of spend) to set for a campaign resource.
   * The value is between 0.01 and 1000.0, inclusive.
   *
   * @var 
   */
  public $targetRoas;

  /**
   * New campaign budget amount to set for a campaign resource.
   *
   * @param string $campaignBudgetAmountMicros
   */
  public function setCampaignBudgetAmountMicros($campaignBudgetAmountMicros)
  {
    $this->campaignBudgetAmountMicros = $campaignBudgetAmountMicros;
  }
  /**
   * @return string
   */
  public function getCampaignBudgetAmountMicros()
  {
    return $this->campaignBudgetAmountMicros;
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
class_alias(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetRoasParameters::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesApplyRecommendationOperationForecastingSetTargetRoasParameters');
