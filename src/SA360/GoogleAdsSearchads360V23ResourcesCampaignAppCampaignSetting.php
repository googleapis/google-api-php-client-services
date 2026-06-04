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

class GoogleAdsSearchads360V23ResourcesCampaignAppCampaignSetting extends \Google\Model
{
  /**
   * Not specified.
   */
  public const APP_STORE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const APP_STORE_UNKNOWN = 'UNKNOWN';
  /**
   * Apple app store.
   */
  public const APP_STORE_APPLE_APP_STORE = 'APPLE_APP_STORE';
  /**
   * Google play.
   */
  public const APP_STORE_GOOGLE_APP_STORE = 'GOOGLE_APP_STORE';
  /**
   * Not specified.
   */
  public const BIDDING_STRATEGY_GOAL_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const BIDDING_STRATEGY_GOAL_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Aim to maximize the number of app installs. The cpa bid is the target cost
   * per install.
   */
  public const BIDDING_STRATEGY_GOAL_TYPE_OPTIMIZE_INSTALLS_TARGET_INSTALL_COST = 'OPTIMIZE_INSTALLS_TARGET_INSTALL_COST';
  /**
   * Aim to maximize the long term number of selected in-app conversions from
   * app installs. The cpa bid is the target cost per install.
   */
  public const BIDDING_STRATEGY_GOAL_TYPE_OPTIMIZE_IN_APP_CONVERSIONS_TARGET_INSTALL_COST = 'OPTIMIZE_IN_APP_CONVERSIONS_TARGET_INSTALL_COST';
  /**
   * Aim to maximize the long term number of selected in-app conversions from
   * app installs. The cpa bid is the target cost per in-app conversion. Note
   * that the actual cpa may seem higher than the target cpa at first, since the
   * long term conversions haven't happened yet.
   */
  public const BIDDING_STRATEGY_GOAL_TYPE_OPTIMIZE_IN_APP_CONVERSIONS_TARGET_CONVERSION_COST = 'OPTIMIZE_IN_APP_CONVERSIONS_TARGET_CONVERSION_COST';
  /**
   * Aim to maximize all conversions' value, for example, install + selected in-
   * app conversions while achieving or exceeding target return on advertising
   * spend.
   */
  public const BIDDING_STRATEGY_GOAL_TYPE_OPTIMIZE_RETURN_ON_ADVERTISING_SPEND = 'OPTIMIZE_RETURN_ON_ADVERTISING_SPEND';
  /**
   * Aim to maximize the pre-registration of the app.
   */
  public const BIDDING_STRATEGY_GOAL_TYPE_OPTIMIZE_PRE_REGISTRATION_CONVERSION_VOLUME = 'OPTIMIZE_PRE_REGISTRATION_CONVERSION_VOLUME';
  /**
   * Aim to maximize installation of the app without target cost-per-install.
   */
  public const BIDDING_STRATEGY_GOAL_TYPE_OPTIMIZE_INSTALLS_WITHOUT_TARGET_INSTALL_COST = 'OPTIMIZE_INSTALLS_WITHOUT_TARGET_INSTALL_COST';
  /**
   * Aim to maximize the selected in-app conversion's volume while spending the
   * full budget. No advertiser-specific target CPA.
   */
  public const BIDDING_STRATEGY_GOAL_TYPE_OPTIMIZE_IN_APP_CONVERSIONS_WITHOUT_TARGET_CPA = 'OPTIMIZE_IN_APP_CONVERSIONS_WITHOUT_TARGET_CPA';
  /**
   * Aim to maximize total conversion value, such as install and selected in-app
   * conversions, while spending the full budget. No advertiser-specified target
   * ROAS.
   */
  public const BIDDING_STRATEGY_GOAL_TYPE_OPTIMIZE_TOTAL_VALUE_WITHOUT_TARGET_ROAS = 'OPTIMIZE_TOTAL_VALUE_WITHOUT_TARGET_ROAS';
  /**
   * Immutable. A string that uniquely identifies a mobile application.
   *
   * @var string
   */
  public $appId;
  /**
   * Immutable. The application store that distributes this specific app.
   *
   * @var string
   */
  public $appStore;
  /**
   * Represents the goal which the bidding strategy of this app campaign should
   * optimize towards.
   *
   * @var string
   */
  public $biddingStrategyGoalType;

  /**
   * Immutable. A string that uniquely identifies a mobile application.
   *
   * @param string $appId
   */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /**
   * @return string
   */
  public function getAppId()
  {
    return $this->appId;
  }
  /**
   * Immutable. The application store that distributes this specific app.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, APPLE_APP_STORE, GOOGLE_APP_STORE
   *
   * @param self::APP_STORE_* $appStore
   */
  public function setAppStore($appStore)
  {
    $this->appStore = $appStore;
  }
  /**
   * @return self::APP_STORE_*
   */
  public function getAppStore()
  {
    return $this->appStore;
  }
  /**
   * Represents the goal which the bidding strategy of this app campaign should
   * optimize towards.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * OPTIMIZE_INSTALLS_TARGET_INSTALL_COST,
   * OPTIMIZE_IN_APP_CONVERSIONS_TARGET_INSTALL_COST,
   * OPTIMIZE_IN_APP_CONVERSIONS_TARGET_CONVERSION_COST,
   * OPTIMIZE_RETURN_ON_ADVERTISING_SPEND,
   * OPTIMIZE_PRE_REGISTRATION_CONVERSION_VOLUME,
   * OPTIMIZE_INSTALLS_WITHOUT_TARGET_INSTALL_COST,
   * OPTIMIZE_IN_APP_CONVERSIONS_WITHOUT_TARGET_CPA,
   * OPTIMIZE_TOTAL_VALUE_WITHOUT_TARGET_ROAS
   *
   * @param self::BIDDING_STRATEGY_GOAL_TYPE_* $biddingStrategyGoalType
   */
  public function setBiddingStrategyGoalType($biddingStrategyGoalType)
  {
    $this->biddingStrategyGoalType = $biddingStrategyGoalType;
  }
  /**
   * @return self::BIDDING_STRATEGY_GOAL_TYPE_*
   */
  public function getBiddingStrategyGoalType()
  {
    return $this->biddingStrategyGoalType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaignAppCampaignSetting::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignAppCampaignSetting');
