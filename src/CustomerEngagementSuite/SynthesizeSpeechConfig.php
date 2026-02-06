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

class SynthesizeSpeechConfig extends \Google\Model
{
  /**
   * Optional. The speaking rate/speed in the range [0.25, 2.0]. 1.0 is the
   * normal native speed supported by the specific voice. 2.0 is twice as fast,
   * and 0.5 is half as fast. Values outside of the range [0.25, 2.0] will
   * return an error.
   *
   * @var 
   */
  public $speakingRate;
  /**
   * Optional. The name of the voice. If not set, the service will choose a
   * voice based on the other parameters such as language_code. For the list of
   * available voices, please refer to [Supported voices and
   * languages](https://cloud.google.com/text-to-speech/docs/voices) from Cloud
   * Text-to-Speech.
   *
   * @var string
   */
  public $voice;

  public function setSpeakingRate($speakingRate)
  {
    $this->speakingRate = $speakingRate;
  }
  public function getSpeakingRate()
  {
    return $this->speakingRate;
  }
  /**
   * Optional. The name of the voice. If not set, the service will choose a
   * voice based on the other parameters such as language_code. For the list of
   * available voices, please refer to [Supported voices and
   * languages](https://cloud.google.com/text-to-speech/docs/voices) from Cloud
   * Text-to-Speech.
   *
   * @param string $voice
   */
  public function setVoice($voice)
  {
    $this->voice = $voice;
  }
  /**
   * @return string
   */
  public function getVoice()
  {
    return $this->voice;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SynthesizeSpeechConfig::class, 'Google_Service_CustomerEngagementSuite_SynthesizeSpeechConfig');
