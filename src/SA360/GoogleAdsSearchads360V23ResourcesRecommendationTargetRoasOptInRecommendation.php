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

class GoogleAdsSearchads360V23ResourcesRecommendationTargetRoasOptInRecommendation extends \Google\Model
{
  /**
   * Output only. The recommended target ROAS (revenue per unit of spend). The
   * value is between 0.01 and 1000.0, inclusive.
   *
   * @var 
   */
  public $recommendedTargetRoas;
  /**
   * Output only. The minimum campaign budget, in local currency for the
   * account, required to achieve the target ROAS. Amount is specified in
   * micros, where one million is equivalent to one currency unit.
   *
   * @var string
   */
  public $requiredCampaignBudgetAmountMicros;

  public function setRecommendedTargetRoas($recommendedTargetRoas)
  {
    $this->recommendedTargetRoas = $recommendedTargetRoas;
  }
  public function getRecommendedTargetRoas()
  {
    return $this->recommendedTargetRoas;
  }
  /**
   * Output only. The minimum campaign budget, in local currency for the
   * account, required to achieve the target ROAS. Amount is specified in
   * micros, where one million is equivalent to one currency unit.
   *
   * @param string $requiredCampaignBudgetAmountMicros
   */
  public function setRequiredCampaignBudgetAmountMicros($requiredCampaignBudgetAmountMicros)
  {
    $this->requiredCampaignBudgetAmountMicros = $requiredCampaignBudgetAmountMicros;
  }
  /**
   * @return string
   */
  public function getRequiredCampaignBudgetAmountMicros()
  {
    return $this->requiredCampaignBudgetAmountMicros;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationTargetRoasOptInRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationTargetRoasOptInRecommendation');
