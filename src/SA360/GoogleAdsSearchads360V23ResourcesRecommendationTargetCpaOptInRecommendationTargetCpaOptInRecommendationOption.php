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

class GoogleAdsSearchads360V23ResourcesRecommendationTargetCpaOptInRecommendationTargetCpaOptInRecommendationOption extends \Google\Model
{
  /**
   * Not specified.
   */
  public const GOAL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const GOAL_UNKNOWN = 'UNKNOWN';
  /**
   * Recommendation to set Target CPA to maintain the same cost.
   */
  public const GOAL_SAME_COST = 'SAME_COST';
  /**
   * Recommendation to set Target CPA to maintain the same conversions.
   */
  public const GOAL_SAME_CONVERSIONS = 'SAME_CONVERSIONS';
  /**
   * Recommendation to set Target CPA to maintain the same CPA.
   */
  public const GOAL_SAME_CPA = 'SAME_CPA';
  /**
   * Recommendation to set Target CPA to a value that is as close as possible
   * to, yet lower than, the actual CPA (computed for past 28 days).
   */
  public const GOAL_CLOSEST_CPA = 'CLOSEST_CPA';
  /**
   * Output only. The goal achieved by this option.
   *
   * @var string
   */
  public $goal;
  protected $impactType = GoogleAdsSearchads360V23ResourcesRecommendationRecommendationImpact::class;
  protected $impactDataType = '';
  /**
   * Output only. The minimum campaign budget, in local currency for the
   * account, required to achieve the target CPA. Amount is specified in micros,
   * where one million is equivalent to one currency unit.
   *
   * @var string
   */
  public $requiredCampaignBudgetAmountMicros;
  /**
   * Output only. Average CPA target.
   *
   * @var string
   */
  public $targetCpaMicros;

  /**
   * Output only. The goal achieved by this option.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SAME_COST, SAME_CONVERSIONS,
   * SAME_CPA, CLOSEST_CPA
   *
   * @param self::GOAL_* $goal
   */
  public function setGoal($goal)
  {
    $this->goal = $goal;
  }
  /**
   * @return self::GOAL_*
   */
  public function getGoal()
  {
    return $this->goal;
  }
  /**
   * Output only. The impact estimate if this option is selected.
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
  /**
   * Output only. The minimum campaign budget, in local currency for the
   * account, required to achieve the target CPA. Amount is specified in micros,
   * where one million is equivalent to one currency unit.
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
  /**
   * Output only. Average CPA target.
   *
   * @param string $targetCpaMicros
   */
  public function setTargetCpaMicros($targetCpaMicros)
  {
    $this->targetCpaMicros = $targetCpaMicros;
  }
  /**
   * @return string
   */
  public function getTargetCpaMicros()
  {
    return $this->targetCpaMicros;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationTargetCpaOptInRecommendationTargetCpaOptInRecommendationOption::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationTargetCpaOptInRecommendationTargetCpaOptInRecommendationOption');
