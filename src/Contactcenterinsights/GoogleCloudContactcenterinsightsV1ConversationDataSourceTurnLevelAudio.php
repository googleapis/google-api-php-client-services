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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1ConversationDataSourceTurnLevelAudio extends \Google\Model
{
  /**
   * The duration of the audio.
   *
   * @var string
   */
  public $audioDuration;
  /**
   * The Cloud Storage URI of the audio for any given turn.
   *
   * @var string
   */
  public $audioGcsUri;

  /**
   * The duration of the audio.
   *
   * @param string $audioDuration
   */
  public function setAudioDuration($audioDuration)
  {
    $this->audioDuration = $audioDuration;
  }
  /**
   * @return string
   */
  public function getAudioDuration()
  {
    return $this->audioDuration;
  }
  /**
   * The Cloud Storage URI of the audio for any given turn.
   *
   * @param string $audioGcsUri
   */
  public function setAudioGcsUri($audioGcsUri)
  {
    $this->audioGcsUri = $audioGcsUri;
  }
  /**
   * @return string
   */
  public function getAudioGcsUri()
  {
    return $this->audioGcsUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1ConversationDataSourceTurnLevelAudio::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ConversationDataSourceTurnLevelAudio');
