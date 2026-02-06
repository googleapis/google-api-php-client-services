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

class ChannelProfile extends \Google\Model
{
  /**
   * Unknown channel type.
   */
  public const CHANNEL_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Web UI channel.
   */
  public const CHANNEL_TYPE_WEB_UI = 'WEB_UI';
  /**
   * API channel.
   */
  public const CHANNEL_TYPE_API = 'API';
  /**
   * Twilio channel.
   */
  public const CHANNEL_TYPE_TWILIO = 'TWILIO';
  /**
   * Google Telephony Platform channel.
   */
  public const CHANNEL_TYPE_GOOGLE_TELEPHONY_PLATFORM = 'GOOGLE_TELEPHONY_PLATFORM';
  /**
   * Contact Center as a Service (CCaaS) channel.
   */
  public const CHANNEL_TYPE_CONTACT_CENTER_AS_A_SERVICE = 'CONTACT_CENTER_AS_A_SERVICE';
  /**
   * Five9 channel.
   */
  public const CHANNEL_TYPE_FIVE9 = 'FIVE9';
  /**
   * Optional. The type of the channel profile.
   *
   * @var string
   */
  public $channelType;
  /**
   * Optional. Whether to disable user barge-in control in the conversation. -
   * **true**: User interruptions are disabled while the agent is speaking. -
   * **false**: The agent retains automatic control over when the user can
   * interrupt.
   *
   * @var bool
   */
  public $disableBargeInControl;
  /**
   * Optional. Whether to disable DTMF (dual-tone multi-frequency).
   *
   * @var bool
   */
  public $disableDtmf;
  /**
   * Optional. The noise suppression level of the channel profile. Available
   * values are "low", "moderate", "high", "very_high".
   *
   * @var string
   */
  public $noiseSuppressionLevel;
  protected $personaPropertyType = ChannelProfilePersonaProperty::class;
  protected $personaPropertyDataType = '';
  /**
   * Optional. The unique identifier of the channel profile.
   *
   * @var string
   */
  public $profileId;
  protected $webWidgetConfigType = ChannelProfileWebWidgetConfig::class;
  protected $webWidgetConfigDataType = '';

  /**
   * Optional. The type of the channel profile.
   *
   * Accepted values: UNKNOWN, WEB_UI, API, TWILIO, GOOGLE_TELEPHONY_PLATFORM,
   * CONTACT_CENTER_AS_A_SERVICE, FIVE9
   *
   * @param self::CHANNEL_TYPE_* $channelType
   */
  public function setChannelType($channelType)
  {
    $this->channelType = $channelType;
  }
  /**
   * @return self::CHANNEL_TYPE_*
   */
  public function getChannelType()
  {
    return $this->channelType;
  }
  /**
   * Optional. Whether to disable user barge-in control in the conversation. -
   * **true**: User interruptions are disabled while the agent is speaking. -
   * **false**: The agent retains automatic control over when the user can
   * interrupt.
   *
   * @param bool $disableBargeInControl
   */
  public function setDisableBargeInControl($disableBargeInControl)
  {
    $this->disableBargeInControl = $disableBargeInControl;
  }
  /**
   * @return bool
   */
  public function getDisableBargeInControl()
  {
    return $this->disableBargeInControl;
  }
  /**
   * Optional. Whether to disable DTMF (dual-tone multi-frequency).
   *
   * @param bool $disableDtmf
   */
  public function setDisableDtmf($disableDtmf)
  {
    $this->disableDtmf = $disableDtmf;
  }
  /**
   * @return bool
   */
  public function getDisableDtmf()
  {
    return $this->disableDtmf;
  }
  /**
   * Optional. The noise suppression level of the channel profile. Available
   * values are "low", "moderate", "high", "very_high".
   *
   * @param string $noiseSuppressionLevel
   */
  public function setNoiseSuppressionLevel($noiseSuppressionLevel)
  {
    $this->noiseSuppressionLevel = $noiseSuppressionLevel;
  }
  /**
   * @return string
   */
  public function getNoiseSuppressionLevel()
  {
    return $this->noiseSuppressionLevel;
  }
  /**
   * Optional. The persona property of the channel profile.
   *
   * @param ChannelProfilePersonaProperty $personaProperty
   */
  public function setPersonaProperty(ChannelProfilePersonaProperty $personaProperty)
  {
    $this->personaProperty = $personaProperty;
  }
  /**
   * @return ChannelProfilePersonaProperty
   */
  public function getPersonaProperty()
  {
    return $this->personaProperty;
  }
  /**
   * Optional. The unique identifier of the channel profile.
   *
   * @param string $profileId
   */
  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }
  /**
   * @return string
   */
  public function getProfileId()
  {
    return $this->profileId;
  }
  /**
   * Optional. The configuration for the web widget.
   *
   * @param ChannelProfileWebWidgetConfig $webWidgetConfig
   */
  public function setWebWidgetConfig(ChannelProfileWebWidgetConfig $webWidgetConfig)
  {
    $this->webWidgetConfig = $webWidgetConfig;
  }
  /**
   * @return ChannelProfileWebWidgetConfig
   */
  public function getWebWidgetConfig()
  {
    return $this->webWidgetConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChannelProfile::class, 'Google_Service_CustomerEngagementSuite_ChannelProfile');
