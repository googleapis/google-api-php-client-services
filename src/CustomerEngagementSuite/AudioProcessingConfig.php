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

class AudioProcessingConfig extends \Google\Model
{
  protected $ambientSoundConfigType = AmbientSoundConfig::class;
  protected $ambientSoundConfigDataType = '';
  protected $bargeInConfigType = BargeInConfig::class;
  protected $bargeInConfigDataType = '';
  /**
   * Optional. The duration of user inactivity (no speech or interaction) before
   * the agent prompts the user for reengagement. If not set, the agent will not
   * prompt the user for reengagement.
   *
   * @var string
   */
  public $inactivityTimeout;
  protected $synthesizeSpeechConfigsType = SynthesizeSpeechConfig::class;
  protected $synthesizeSpeechConfigsDataType = 'map';

  /**
   * Optional. Configuration for the ambient sound to be played with the
   * synthesized agent response, to enhance the naturalness of the conversation.
   *
   * @param AmbientSoundConfig $ambientSoundConfig
   */
  public function setAmbientSoundConfig(AmbientSoundConfig $ambientSoundConfig)
  {
    $this->ambientSoundConfig = $ambientSoundConfig;
  }
  /**
   * @return AmbientSoundConfig
   */
  public function getAmbientSoundConfig()
  {
    return $this->ambientSoundConfig;
  }
  /**
   * Optional. Configures the agent behavior for the user barge-in activities.
   *
   * @param BargeInConfig $bargeInConfig
   */
  public function setBargeInConfig(BargeInConfig $bargeInConfig)
  {
    $this->bargeInConfig = $bargeInConfig;
  }
  /**
   * @return BargeInConfig
   */
  public function getBargeInConfig()
  {
    return $this->bargeInConfig;
  }
  /**
   * Optional. The duration of user inactivity (no speech or interaction) before
   * the agent prompts the user for reengagement. If not set, the agent will not
   * prompt the user for reengagement.
   *
   * @param string $inactivityTimeout
   */
  public function setInactivityTimeout($inactivityTimeout)
  {
    $this->inactivityTimeout = $inactivityTimeout;
  }
  /**
   * @return string
   */
  public function getInactivityTimeout()
  {
    return $this->inactivityTimeout;
  }
  /**
   * Optional. Configuration of how the agent response should be synthesized,
   * mapping from the language code to SynthesizeSpeechConfig. If the
   * configuration for the specified language code is not found, the
   * configuration for the root language code will be used. For example, if the
   * map contains "en-us" and "en", and the specified language code is "en-gb",
   * then "en" configuration will be used. Note: Language code is case-
   * insensitive.
   *
   * @param SynthesizeSpeechConfig[] $synthesizeSpeechConfigs
   */
  public function setSynthesizeSpeechConfigs($synthesizeSpeechConfigs)
  {
    $this->synthesizeSpeechConfigs = $synthesizeSpeechConfigs;
  }
  /**
   * @return SynthesizeSpeechConfig[]
   */
  public function getSynthesizeSpeechConfigs()
  {
    return $this->synthesizeSpeechConfigs;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AudioProcessingConfig::class, 'Google_Service_CustomerEngagementSuite_AudioProcessingConfig');
