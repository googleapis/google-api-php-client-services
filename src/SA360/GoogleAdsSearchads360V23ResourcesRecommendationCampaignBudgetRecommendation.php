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

class GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation extends \Google\Collection
{
  protected $collection_key = 'budgetOptions';
  protected $budgetOptionsType = GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendationCampaignBudgetRecommendationOption::class;
  protected $budgetOptionsDataType = 'array';
  /**
   * Output only. The current budget amount in micros.
   *
   * @var string
   */
  public $currentBudgetAmountMicros;
  /**
   * Output only. The recommended budget amount in micros.
   *
   * @var string
   */
  public $recommendedBudgetAmountMicros;

  /**
   * Output only. The budget amounts and associated impact estimates for some
   * values of possible budget amounts.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendationCampaignBudgetRecommendationOption[] $budgetOptions
   */
  public function setBudgetOptions($budgetOptions)
  {
    $this->budgetOptions = $budgetOptions;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendationCampaignBudgetRecommendationOption[]
   */
  public function getBudgetOptions()
  {
    return $this->budgetOptions;
  }
  /**
   * Output only. The current budget amount in micros.
   *
   * @param string $currentBudgetAmountMicros
   */
  public function setCurrentBudgetAmountMicros($currentBudgetAmountMicros)
  {
    $this->currentBudgetAmountMicros = $currentBudgetAmountMicros;
  }
  /**
   * @return string
   */
  public function getCurrentBudgetAmountMicros()
  {
    return $this->currentBudgetAmountMicros;
  }
  /**
   * Output only. The recommended budget amount in micros.
   *
   * @param string $recommendedBudgetAmountMicros
   */
  public function setRecommendedBudgetAmountMicros($recommendedBudgetAmountMicros)
  {
    $this->recommendedBudgetAmountMicros = $recommendedBudgetAmountMicros;
  }
  /**
   * @return string
   */
  public function getRecommendedBudgetAmountMicros()
  {
    return $this->recommendedBudgetAmountMicros;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationCampaignBudgetRecommendation');
