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

class GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestBudgetInfo extends \Google\Model
{
  /**
   * Required. Current budget amount in micros. This field is necessary for the
   * following recommendation_types if budget_info is set: CAMPAIGN_BUDGET
   *
   * @var string
   */
  public $currentBudget;

  /**
   * Required. Current budget amount in micros. This field is necessary for the
   * following recommendation_types if budget_info is set: CAMPAIGN_BUDGET
   *
   * @param string $currentBudget
   */
  public function setCurrentBudget($currentBudget)
  {
    $this->currentBudget = $currentBudget;
  }
  /**
   * @return string
   */
  public function getCurrentBudget()
  {
    return $this->currentBudget;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestBudgetInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGenerateRecommendationsRequestBudgetInfo');
