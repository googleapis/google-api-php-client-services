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

class GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendationCampaignBudgetRecommendationOption extends \Google\Model
{
  /**
   * Output only. The budget amount for this option.
   *
   * @var string
   */
  public $budgetAmountMicros;
  protected $impactType = GoogleAdsSearchads360V23ResourcesRecommendationRecommendationImpact::class;
  protected $impactDataType = '';

  /**
   * Output only. The budget amount for this option.
   *
   * @param string $budgetAmountMicros
   */
  public function setBudgetAmountMicros($budgetAmountMicros)
  {
    $this->budgetAmountMicros = $budgetAmountMicros;
  }
  /**
   * @return string
   */
  public function getBudgetAmountMicros()
  {
    return $this->budgetAmountMicros;
  }
  /**
   * Output only. The impact estimate if budget is changed to amount specified
   * in this option.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationRecommendationImpact $impact
   */
  public function setImpact(GoogleAdsSearchads360V23ResourcesRecommendationRecommendationImpact $impact)
  {
    $this->impact = $impact;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationRecommendationImpact
   */
  public function getImpact()
  {
    return $this->impact;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendationCampaignBudgetRecommendationOption::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendationCampaignBudgetRecommendationOption');
