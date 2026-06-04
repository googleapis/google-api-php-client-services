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

class GoogleAdsSearchads360V23CommonCampaignGoalSettingsCampaignRetentionGoalSettings extends \Google\Model
{
  /**
   * Not specified.
   */
  public const TARGET_OPTION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TARGET_OPTION_UNKNOWN = 'UNKNOWN';
  /**
   * The mode is used when the campaign optimizes for all customers, which is
   * the default value.
   */
  public const TARGET_OPTION_TARGET_ALL = 'TARGET_ALL';
  /**
   * This mode configures the campaign to target only customers who have
   * previously interacted but are now lapsed or disengaged.
   */
  public const TARGET_OPTION_TARGET_SPECIFIC = 'TARGET_SPECIFIC';
  /**
   * Retention goal optimization mode for this campaign. Defaults to TARGET_ALL.
   * Only customers on the allowlist can set target_option.
   *
   * @var string
   */
  public $targetOption;
  protected $valueSettingsOverrideType = GoogleAdsSearchads360V23CommonCustomerLifecycleOptimizationValueSettings::class;
  protected $valueSettingsOverrideDataType = '';

  /**
   * Retention goal optimization mode for this campaign. Defaults to TARGET_ALL.
   * Only customers on the allowlist can set target_option.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, TARGET_ALL, TARGET_SPECIFIC
   *
   * @param self::TARGET_OPTION_* $targetOption
   */
  public function setTargetOption($targetOption)
  {
    $this->targetOption = $targetOption;
  }
  /**
   * @return self::TARGET_OPTION_*
   */
  public function getTargetOption()
  {
    return $this->targetOption;
  }
  /**
   * Retention goal campaign specific value settings.
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
class_alias(GoogleAdsSearchads360V23CommonCampaignGoalSettingsCampaignRetentionGoalSettings::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCampaignGoalSettingsCampaignRetentionGoalSettings');
