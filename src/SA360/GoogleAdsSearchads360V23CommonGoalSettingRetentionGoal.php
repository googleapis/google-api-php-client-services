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

class GoogleAdsSearchads360V23CommonGoalSettingRetentionGoal extends \Google\Model
{
  protected $valueSettingsType = GoogleAdsSearchads360V23CommonCustomerLifecycleOptimizationValueSettings::class;
  protected $valueSettingsDataType = '';

  /**
   * Retention goal value settings.
   *
   * @param GoogleAdsSearchads360V23CommonCustomerLifecycleOptimizationValueSettings $valueSettings
   */
  public function setValueSettings(GoogleAdsSearchads360V23CommonCustomerLifecycleOptimizationValueSettings $valueSettings)
  {
    $this->valueSettings = $valueSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonCustomerLifecycleOptimizationValueSettings
   */
  public function getValueSettings()
  {
    return $this->valueSettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonGoalSettingRetentionGoal::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonGoalSettingRetentionGoal');
