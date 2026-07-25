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
   * Optional. The Cloud Storage URI to the consent audio for voice cloning.
   *
   * @var string
   */
  public $consentAudioGcsUri;
  /**
   * Optional. The instruction used to synthesize speech when using a generative
   * model.
   *
   * @var string
   */
  public $instruction;
  /**
   * Optional. The model used to synthesize audio. Currently supported values: -
   * "gemini-3.1-flash-tts-preview" If empty, Chirp3-HD is used.
   *
   * @var string
   */
  public $model;
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
  /**
   * Optional. The Cloud Storage URI to the audio sample for voice cloning. The
   * audio sample should be a mono-channel, 24kHz WAV file. Note: Please make
   * sure the CES service agent `service-@gcp-sa-ces.iam.gserviceaccount.com`
   * has `storage.objects.get` permission to the Cloud Storage object.
   *
   * @var string
   */
  public $voiceSampleGcsUri;

  /**
   * Optional. The Cloud Storage URI to the consent audio for voice cloning.
   *
   * @param string $consentAudioGcsUri
   */
  public function setConsentAudioGcsUri($consentAudioGcsUri)
  {
    $this->consentAudioGcsUri = $consentAudioGcsUri;
  }
  /**
   * @return string
   */
  public function getConsentAudioGcsUri()
  {
    return $this->consentAudioGcsUri;
  }
  /**
   * Optional. The instruction used to synthesize speech when using a generative
   * model.
   *
   * @param string $instruction
   */
  public function setInstruction($instruction)
  {
    $this->instruction = $instruction;
  }
  /**
   * @return string
   */
  public function getInstruction()
  {
    return $this->instruction;
  }
  /**
   * Optional. The model used to synthesize audio. Currently supported values: -
   * "gemini-3.1-flash-tts-preview" If empty, Chirp3-HD is used.
   *
   * @param string $model
   */
  public function setModel($model)
  {
    $this->model = $model;
  }
  /**
   * @return string
   */
  public function getModel()
  {
    return $this->model;
  }
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
  /**
   * Optional. The Cloud Storage URI to the audio sample for voice cloning. The
   * audio sample should be a mono-channel, 24kHz WAV file. Note: Please make
   * sure the CES service agent `service-@gcp-sa-ces.iam.gserviceaccount.com`
   * has `storage.objects.get` permission to the Cloud Storage object.
   *
   * @param string $voiceSampleGcsUri
   */
  public function setVoiceSampleGcsUri($voiceSampleGcsUri)
  {
    $this->voiceSampleGcsUri = $voiceSampleGcsUri;
  }
  /**
   * @return string
   */
  public function getVoiceSampleGcsUri()
  {
    return $this->voiceSampleGcsUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SynthesizeSpeechConfig::class, 'Google_Service_CustomerEngagementSuite_SynthesizeSpeechConfig');
