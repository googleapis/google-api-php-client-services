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

class GoogleAdsSearchads360V23ResourcesRecommendationRaiseTargetCpaRecommendation extends \Google\Model
{
  /**
   * Not specified.
   */
  public const APP_BIDDING_GOAL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Represents value unknown in this version of the API.
   */
  public const APP_BIDDING_GOAL_UNKNOWN = 'UNKNOWN';
  /**
   * The bidding strategy of the app campaign should aim to maximize
   * installation of the app.
   */
  public const APP_BIDDING_GOAL_OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME = 'OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME';
  /**
   * The bidding strategy of the app campaign should aim to maximize the
   * selected in-app conversions' volume.
   */
  public const APP_BIDDING_GOAL_OPTIMIZE_FOR_IN_APP_CONVERSION_VOLUME = 'OPTIMIZE_FOR_IN_APP_CONVERSION_VOLUME';
  /**
   * The bidding strategy of the app campaign should aim to maximize all
   * conversions' value, that is, install and selected in-app conversions.
   */
  public const APP_BIDDING_GOAL_OPTIMIZE_FOR_TOTAL_CONVERSION_VALUE = 'OPTIMIZE_FOR_TOTAL_CONVERSION_VALUE';
  /**
   * The bidding strategy of the app campaign should aim to maximize just the
   * selected in-app conversion's volume, while achieving or exceeding target
   * cost per in-app conversion.
   */
  public const APP_BIDDING_GOAL_OPTIMIZE_FOR_TARGET_IN_APP_CONVERSION = 'OPTIMIZE_FOR_TARGET_IN_APP_CONVERSION';
  /**
   * The bidding strategy of the app campaign should aim to maximize all
   * conversions' value, that is, install and selected in-app conversions while
   * achieving or exceeding target return on advertising spend.
   */
  public const APP_BIDDING_GOAL_OPTIMIZE_FOR_RETURN_ON_ADVERTISING_SPEND = 'OPTIMIZE_FOR_RETURN_ON_ADVERTISING_SPEND';
  /**
   * This bidding strategy of the app campaign should aim to maximize
   * installation of the app without advertiser-provided target cost-per-
   * install.
   */
  public const APP_BIDDING_GOAL_OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME_WITHOUT_TARGET_CPI = 'OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME_WITHOUT_TARGET_CPI';
  /**
   * This bidding strategy of the app campaign should aim to maximize pre-
   * registration of the app.
   */
  public const APP_BIDDING_GOAL_OPTIMIZE_FOR_PRE_REGISTRATION_CONVERSION_VOLUME = 'OPTIMIZE_FOR_PRE_REGISTRATION_CONVERSION_VOLUME';
  /**
   * Output only. Represents the goal towards which the bidding strategy should
   * optimize. Only populated for App Campaigns.
   *
   * @var string
   */
  public $appBiddingGoal;
  protected $targetAdjustmentType = GoogleAdsSearchads360V23ResourcesRecommendationTargetAdjustmentInfo::class;
  protected $targetAdjustmentDataType = '';

  /**
   * Output only. Represents the goal towards which the bidding strategy should
   * optimize. Only populated for App Campaigns.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME,
   * OPTIMIZE_FOR_IN_APP_CONVERSION_VOLUME, OPTIMIZE_FOR_TOTAL_CONVERSION_VALUE,
   * OPTIMIZE_FOR_TARGET_IN_APP_CONVERSION,
   * OPTIMIZE_FOR_RETURN_ON_ADVERTISING_SPEND,
   * OPTIMIZE_FOR_INSTALL_CONVERSION_VOLUME_WITHOUT_TARGET_CPI,
   * OPTIMIZE_FOR_PRE_REGISTRATION_CONVERSION_VOLUME
   *
   * @param self::APP_BIDDING_GOAL_* $appBiddingGoal
   */
  public function setAppBiddingGoal($appBiddingGoal)
  {
    $this->appBiddingGoal = $appBiddingGoal;
  }
  /**
   * @return self::APP_BIDDING_GOAL_*
   */
  public function getAppBiddingGoal()
  {
    return $this->appBiddingGoal;
  }
  /**
   * Output only. The relevant information describing the recommended target
   * adjustment.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationTargetAdjustmentInfo $targetAdjustment
   */
  public function setTargetAdjustment(GoogleAdsSearchads360V23ResourcesRecommendationTargetAdjustmentInfo $targetAdjustment)
  {
    $this->targetAdjustment = $targetAdjustment;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationTargetAdjustmentInfo
   */
  public function getTargetAdjustment()
  {
    return $this->targetAdjustment;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationRaiseTargetCpaRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationRaiseTargetCpaRecommendation');
