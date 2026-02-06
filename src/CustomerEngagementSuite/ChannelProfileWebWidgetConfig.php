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

namespace Google\Service\CustomerEngagementSuite;

class ChannelProfileWebWidgetConfig extends \Google\Model
{
  /**
   * Unknown modality.
   */
  public const MODALITY_MODALITY_UNSPECIFIED = 'MODALITY_UNSPECIFIED';
  /**
   * Widget supports both chat and voice input.
   */
  public const MODALITY_CHAT_AND_VOICE = 'CHAT_AND_VOICE';
  /**
   * Widget supports only voice input.
   */
  public const MODALITY_VOICE_ONLY = 'VOICE_ONLY';
  /**
   * Widget supports only chat input.
   */
  public const MODALITY_CHAT_ONLY = 'CHAT_ONLY';
  /**
   * Unknown theme.
   */
  public const THEME_THEME_UNSPECIFIED = 'THEME_UNSPECIFIED';
  /**
   * Light theme.
   */
  public const THEME_LIGHT = 'LIGHT';
  /**
   * Dark theme.
   */
  public const THEME_DARK = 'DARK';
  /**
   * Optional. The modality of the web widget.
   *
   * @var string
   */
  public $modality;
  protected $securitySettingsType = ChannelProfileWebWidgetConfigSecuritySettings::class;
  protected $securitySettingsDataType = '';
  /**
   * Optional. The theme of the web widget.
   *
   * @var string
   */
  public $theme;
  /**
   * Optional. The title of the web widget.
   *
   * @var string
   */
  public $webWidgetTitle;

  /**
   * Optional. The modality of the web widget.
   *
   * Accepted values: MODALITY_UNSPECIFIED, CHAT_AND_VOICE, VOICE_ONLY,
   * CHAT_ONLY
   *
   * @param self::MODALITY_* $modality
   */
  public function setModality($modality)
  {
    $this->modality = $modality;
  }
  /**
   * @return self::MODALITY_*
   */
  public function getModality()
  {
    return $this->modality;
  }
  /**
   * Optional. The security settings of the web widget.
   *
   * @param ChannelProfileWebWidgetConfigSecuritySettings $securitySettings
   */
  public function setSecuritySettings(ChannelProfileWebWidgetConfigSecuritySettings $securitySettings)
  {
    $this->securitySettings = $securitySettings;
  }
  /**
   * @return ChannelProfileWebWidgetConfigSecuritySettings
   */
  public function getSecuritySettings()
  {
    return $this->securitySettings;
  }
  /**
   * Optional. The theme of the web widget.
   *
   * Accepted values: THEME_UNSPECIFIED, LIGHT, DARK
   *
   * @param self::THEME_* $theme
   */
  public function setTheme($theme)
  {
    $this->theme = $theme;
  }
  /**
   * @return self::THEME_*
   */
  public function getTheme()
  {
    return $this->theme;
  }
  /**
   * Optional. The title of the web widget.
   *
   * @param string $webWidgetTitle
   */
  public function setWebWidgetTitle($webWidgetTitle)
  {
    $this->webWidgetTitle = $webWidgetTitle;
  }
  /**
   * @return string
   */
  public function getWebWidgetTitle()
  {
    return $this->webWidgetTitle;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChannelProfileWebWidgetConfig::class, 'Google_Service_CustomerEngagementSuite_ChannelProfileWebWidgetConfig');
