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

class GoogleAdsSearchads360V23ResourcesAdGroupDemandGenAdGroupSettingsDemandGenChannelControls extends \Google\Model
{
  /**
   * Not specified.
   */
  public const CHANNEL_CONFIG_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const CHANNEL_CONFIG_UNKNOWN = 'UNKNOWN';
  /**
   * The channel controls configuration uses a general channel strategy;
   * individual channels are not configured separately.
   */
  public const CHANNEL_CONFIG_CHANNEL_STRATEGY = 'CHANNEL_STRATEGY';
  /**
   * The channel controls configuration explicitly defines the selected
   * channels.
   */
  public const CHANNEL_CONFIG_SELECTED_CHANNELS = 'SELECTED_CHANNELS';
  /**
   * Not specified.
   */
  public const CHANNEL_STRATEGY_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const CHANNEL_STRATEGY_UNKNOWN = 'UNKNOWN';
  /**
   * All channels are enabled.
   */
  public const CHANNEL_STRATEGY_ALL_CHANNELS = 'ALL_CHANNELS';
  /**
   * All Google-owned and operated channels are enabled; third-party channels
   * (e.g., Display) are disabled.
   */
  public const CHANNEL_STRATEGY_ALL_OWNED_AND_OPERATED_CHANNELS = 'ALL_OWNED_AND_OPERATED_CHANNELS';
  /**
   * Output only. Channel configuration reflecting which field in the oneof is
   * populated.
   *
   * @var string
   */
  public $channelConfig;
  /**
   * High level channel strategy.
   *
   * @var string
   */
  public $channelStrategy;
  protected $selectedChannelsType = GoogleAdsSearchads360V23ResourcesAdGroupDemandGenAdGroupSettingsDemandGenChannelControlsDemandGenSelectedChannels::class;
  protected $selectedChannelsDataType = '';

  /**
   * Output only. Channel configuration reflecting which field in the oneof is
   * populated.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CHANNEL_STRATEGY, SELECTED_CHANNELS
   *
   * @param self::CHANNEL_CONFIG_* $channelConfig
   */
  public function setChannelConfig($channelConfig)
  {
    $this->channelConfig = $channelConfig;
  }
  /**
   * @return self::CHANNEL_CONFIG_*
   */
  public function getChannelConfig()
  {
    return $this->channelConfig;
  }
  /**
   * High level channel strategy.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ALL_CHANNELS,
   * ALL_OWNED_AND_OPERATED_CHANNELS
   *
   * @param self::CHANNEL_STRATEGY_* $channelStrategy
   */
  public function setChannelStrategy($channelStrategy)
  {
    $this->channelStrategy = $channelStrategy;
  }
  /**
   * @return self::CHANNEL_STRATEGY_*
   */
  public function getChannelStrategy()
  {
    return $this->channelStrategy;
  }
  /**
   * Explicitly selected channels. This field should be set with at least one
   * true value when present.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdGroupDemandGenAdGroupSettingsDemandGenChannelControlsDemandGenSelectedChannels $selectedChannels
   */
  public function setSelectedChannels(GoogleAdsSearchads360V23ResourcesAdGroupDemandGenAdGroupSettingsDemandGenChannelControlsDemandGenSelectedChannels $selectedChannels)
  {
    $this->selectedChannels = $selectedChannels;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdGroupDemandGenAdGroupSettingsDemandGenChannelControlsDemandGenSelectedChannels
   */
  public function getSelectedChannels()
  {
    return $this->selectedChannels;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAdGroupDemandGenAdGroupSettingsDemandGenChannelControls::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAdGroupDemandGenAdGroupSettingsDemandGenChannelControls');
