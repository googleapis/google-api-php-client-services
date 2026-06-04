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

class GoogleAdsSearchads360V23ResourcesRecommendationMoveUnusedBudgetRecommendation extends \Google\Model
{
  protected $budgetRecommendationType = GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation::class;
  protected $budgetRecommendationDataType = '';
  /**
   * Output only. The excess budget's resource_name.
   *
   * @var string
   */
  public $excessCampaignBudget;

  /**
   * Output only. The recommendation for the constrained budget to increase.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation $budgetRecommendation
   */
  public function setBudgetRecommendation(GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation $budgetRecommendation)
  {
    $this->budgetRecommendation = $budgetRecommendation;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation
   */
  public function getBudgetRecommendation()
  {
    return $this->budgetRecommendation;
  }
  /**
   * Output only. The excess budget's resource_name.
   *
   * @param string $excessCampaignBudget
   */
  public function setExcessCampaignBudget($excessCampaignBudget)
  {
    $this->excessCampaignBudget = $excessCampaignBudget;
  }
  /**
   * @return string
   */
  public function getExcessCampaignBudget()
  {
    return $this->excessCampaignBudget;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationMoveUnusedBudgetRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationMoveUnusedBudgetRecommendation');
