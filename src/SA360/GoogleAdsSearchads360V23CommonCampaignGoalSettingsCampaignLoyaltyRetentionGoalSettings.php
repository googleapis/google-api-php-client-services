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

class GoogleAdsSearchads360V23CommonCampaignGoalSettingsCampaignLoyaltyRetentionGoalSettings extends \Google\Model
{
  /**
   * Whether to adjust bids for loyalty members.
   *
   * @var bool
   */
  public $enableBidAdjustmentsForLoyaltyMembers;
  /**
   * Whether to show targeted loyalty member benefits in PLA format in eligible
   * countries.
   *
   * @var bool
   */
  public $showTargetedLoyaltyMemberBenefitsInPla;
  protected $valueSettingsOverrideType = GoogleAdsSearchads360V23CommonCustomerLifecycleOptimizationValueSettings::class;
  protected $valueSettingsOverrideDataType = '';

  /**
   * Whether to adjust bids for loyalty members.
   *
   * @param bool $enableBidAdjustmentsForLoyaltyMembers
   */
  public function setEnableBidAdjustmentsForLoyaltyMembers($enableBidAdjustmentsForLoyaltyMembers)
  {
    $this->enableBidAdjustmentsForLoyaltyMembers = $enableBidAdjustmentsForLoyaltyMembers;
  }
  /**
   * @return bool
   */
  public function getEnableBidAdjustmentsForLoyaltyMembers()
  {
    return $this->enableBidAdjustmentsForLoyaltyMembers;
  }
  /**
   * Whether to show targeted loyalty member benefits in PLA format in eligible
   * countries.
   *
   * @param bool $showTargetedLoyaltyMemberBenefitsInPla
   */
  public function setShowTargetedLoyaltyMemberBenefitsInPla($showTargetedLoyaltyMemberBenefitsInPla)
  {
    $this->showTargetedLoyaltyMemberBenefitsInPla = $showTargetedLoyaltyMemberBenefitsInPla;
  }
  /**
   * @return bool
   */
  public function getShowTargetedLoyaltyMemberBenefitsInPla()
  {
    return $this->showTargetedLoyaltyMemberBenefitsInPla;
  }
  /**
   * Loyalty retention goal campaign specific value settings.
   *
   * @param GoogleAdsSearchads360V23CommonCustomerLifecycleOptimizationValueSettings $valueSettingsOverride
   */
  public function setValueSettingsOverride(GoogleAdsSearchads360V23CommonCustomerLifecycleOptimizationValueSettings $valueSettingsOverride)
  {
    $this->valueSettingsOverride = $valueSettingsOverride;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomerLifecycleOptimizationValueSettings
   */
  public function getValueSettingsOverride()
  {
    return $this->valueSettingsOverride;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCampaignGoalSettingsCampaignLoyaltyRetentionGoalSettings::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCampaignGoalSettingsCampaignLoyaltyRetentionGoalSettings');
