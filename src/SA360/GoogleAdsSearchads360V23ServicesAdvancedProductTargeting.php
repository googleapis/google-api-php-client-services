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

class GoogleAdsSearchads360V23ServicesAdvancedProductTargeting extends \Google\Model
{
  protected $surfaceTargetingSettingsType = GoogleAdsSearchads360V23ServicesSurfaceTargeting::class;
  protected $surfaceTargetingSettingsDataType = '';
  protected $targetFrequencySettingsType = GoogleAdsSearchads360V23ServicesTargetFrequencySettings::class;
  protected $targetFrequencySettingsDataType = '';
  protected $youtubeSelectSettingsType = GoogleAdsSearchads360V23ServicesYouTubeSelectSettings::class;
  protected $youtubeSelectSettingsDataType = '';

  /**
   * Surface targeting settings for this product.
   *
   * @param GoogleAdsSearchads360V23ServicesSurfaceTargeting $surfaceTargetingSettings
   */
  public function setSurfaceTargetingSettings(GoogleAdsSearchads360V23ServicesSurfaceTargeting $surfaceTargetingSettings)
  {
    $this->surfaceTargetingSettings = $surfaceTargetingSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSurfaceTargeting
   */
  public function getSurfaceTargetingSettings()
  {
    return $this->surfaceTargetingSettings;
  }
  /**
   * Settings for a Target frequency campaign. Must be set when selecting the
   * TARGET_FREQUENCY product. See https://support.google.com/google-
   * ads/answer/12400225 for more information about Target Frequency campaigns.
   *
   * @param GoogleAdsSearchads360V23ServicesTargetFrequencySettings $targetFrequencySettings
   */
  public function setTargetFrequencySettings(GoogleAdsSearchads360V23ServicesTargetFrequencySettings $targetFrequencySettings)
  {
    $this->targetFrequencySettings = $targetFrequencySettings;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesTargetFrequencySettings
   */
  public function getTargetFrequencySettings()
  {
    return $this->targetFrequencySettings;
  }
  /**
   * Settings for YouTube Select targeting.
   *
   * @param GoogleAdsSearchads360V23ServicesYouTubeSelectSettings $youtubeSelectSettings
   */
  public function setYoutubeSelectSettings(GoogleAdsSearchads360V23ServicesYouTubeSelectSettings $youtubeSelectSettings)
  {
    $this->youtubeSelectSettings = $youtubeSelectSettings;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesYouTubeSelectSettings
   */
  public function getYoutubeSelectSettings()
  {
    return $this->youtubeSelectSettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesAdvancedProductTargeting::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesAdvancedProductTargeting');
