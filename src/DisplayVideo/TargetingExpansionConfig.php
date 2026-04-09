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

namespace Google\Service\DisplayVideo;

class TargetingExpansionConfig extends \Google\Model
{
  /**
   * Audience expansion level is not specified or is unknown in this version.
   */
  public const AUDIENCE_EXPANSION_LEVEL_UNKNOWN = 'UNKNOWN';
  /**
   * Audience expansion off.
   */
  public const AUDIENCE_EXPANSION_LEVEL_NO_REACH = 'NO_REACH';
  /**
   * Conservative audience expansion.
   */
  public const AUDIENCE_EXPANSION_LEVEL_LEAST_REACH = 'LEAST_REACH';
  /**
   * Moderate audience expansion.
   */
  public const AUDIENCE_EXPANSION_LEVEL_MID_REACH = 'MID_REACH';
  /**
   * Aggressive audience expansion.
   */
  public const AUDIENCE_EXPANSION_LEVEL_MOST_REACH = 'MOST_REACH';
  /**
   * Output only. Magnitude of expansion for eligible first-party user lists
   * under this ad group. This field only applies to YouTube and Partners line
   * item and ad group resources.
   *
   * @var string
   */
  public $audienceExpansionLevel;
  /**
   * Output only. Whether to exclude seed list for audience expansion. This
   * field only applies to YouTube and Partners line item and ad group
   * resources.
   *
   * @var bool
   */
  public $audienceExpansionSeedListExcluded;
  /**
   * Required. Whether to enable Optimized Targeting for the line item.
   * Optimized targeting is not compatible with all bid strategies. Attempting
   * to set this field to `true` for a line item using the BiddingStrategy field
   * fixed_bid or one of the following combinations of BiddingStrategy fields
   * and BiddingStrategyPerformanceGoalType will result in an error:
   * maximize_auto_spend_bid: * `BIDDING_STRATEGY_PERFORMANCE_GOAL_TYPE_CIVA` *
   * `BIDDING_STRATEGY_PERFORMANCE_GOAL_TYPE_IVO_TEN` *
   * `BIDDING_STRATEGY_PERFORMANCE_GOAL_TYPE_AV_VIEWED`
   * performance_goal_auto_bid: *
   * `BIDDING_STRATEGY_PERFORMANCE_GOAL_TYPE_VIEWABLE_CPM` This also applies if
   * the line item inherits one of the above bid strategies from the parent
   * insertion order. Bid strategies set at the insertion order-level will be
   * inherited by their line items if the `InsertionOrder` budget field
   * automationType is set to `INSERTION_ORDER_AUTOMATION_TYPE_BUDGET` or
   * `INSERTION_ORDER_AUTOMATION_TYPE_BID_BUDGET`.
   *
   * @var bool
   */
  public $enableOptimizedTargeting;
  /**
   * Optional. Whether to exclude demographic expansion for Optimized Targeting.
   * This field can only be set for Demand Gen ad groups. Retrieval and
   * management of Demand Gen resources is currently in beta. This field is only
   * available to allowlisted users.
   *
   * @var bool
   */
  public $excludeDemographicExpansion;

  /**
   * Output only. Magnitude of expansion for eligible first-party user lists
   * under this ad group. This field only applies to YouTube and Partners line
   * item and ad group resources.
   *
   * Accepted values: UNKNOWN, NO_REACH, LEAST_REACH, MID_REACH, MOST_REACH
   *
   * @param self::AUDIENCE_EXPANSION_LEVEL_* $audienceExpansionLevel
   */
  public function setAudienceExpansionLevel($audienceExpansionLevel)
  {
    $this->audienceExpansionLevel = $audienceExpansionLevel;
  }
  /**
   * @return self::AUDIENCE_EXPANSION_LEVEL_*
   */
  public function getAudienceExpansionLevel()
  {
    return $this->audienceExpansionLevel;
  }
  /**
   * Output only. Whether to exclude seed list for audience expansion. This
   * field only applies to YouTube and Partners line item and ad group
   * resources.
   *
   * @param bool $audienceExpansionSeedListExcluded
   */
  public function setAudienceExpansionSeedListExcluded($audienceExpansionSeedListExcluded)
  {
    $this->audienceExpansionSeedListExcluded = $audienceExpansionSeedListExcluded;
  }
  /**
   * @return bool
   */
  public function getAudienceExpansionSeedListExcluded()
  {
    return $this->audienceExpansionSeedListExcluded;
  }
  /**
   * Required. Whether to enable Optimized Targeting for the line item.
   * Optimized targeting is not compatible with all bid strategies. Attempting
   * to set this field to `true` for a line item using the BiddingStrategy field
   * fixed_bid or one of the following combinations of BiddingStrategy fields
   * and BiddingStrategyPerformanceGoalType will result in an error:
   * maximize_auto_spend_bid: * `BIDDING_STRATEGY_PERFORMANCE_GOAL_TYPE_CIVA` *
   * `BIDDING_STRATEGY_PERFORMANCE_GOAL_TYPE_IVO_TEN` *
   * `BIDDING_STRATEGY_PERFORMANCE_GOAL_TYPE_AV_VIEWED`
   * performance_goal_auto_bid: *
   * `BIDDING_STRATEGY_PERFORMANCE_GOAL_TYPE_VIEWABLE_CPM` This also applies if
   * the line item inherits one of the above bid strategies from the parent
   * insertion order. Bid strategies set at the insertion order-level will be
   * inherited by their line items if the `InsertionOrder` budget field
   * automationType is set to `INSERTION_ORDER_AUTOMATION_TYPE_BUDGET` or
   * `INSERTION_ORDER_AUTOMATION_TYPE_BID_BUDGET`.
   *
   * @param bool $enableOptimizedTargeting
   */
  public function setEnableOptimizedTargeting($enableOptimizedTargeting)
  {
    $this->enableOptimizedTargeting = $enableOptimizedTargeting;
  }
  /**
   * @return bool
   */
  public function getEnableOptimizedTargeting()
  {
    return $this->enableOptimizedTargeting;
  }
  /**
   * Optional. Whether to exclude demographic expansion for Optimized Targeting.
   * This field can only be set for Demand Gen ad groups. Retrieval and
   * management of Demand Gen resources is currently in beta. This field is only
   * available to allowlisted users.
   *
   * @param bool $excludeDemographicExpansion
   */
  public function setExcludeDemographicExpansion($excludeDemographicExpansion)
  {
    $this->excludeDemographicExpansion = $excludeDemographicExpansion;
  }
  /**
   * @return bool
   */
  public function getExcludeDemographicExpansion()
  {
    return $this->excludeDemographicExpansion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TargetingExpansionConfig::class, 'Google_Service_DisplayVideo_TargetingExpansionConfig');
