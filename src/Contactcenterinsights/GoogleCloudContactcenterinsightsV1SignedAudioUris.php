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

class GoogleCloudContactcenterinsightsV1SignedAudioUris extends \Google\Collection
{
  protected $collection_key = 'signedTurnLevelAudios';
  /**
   * The signed URI for the audio from the Dialogflow conversation source.
   *
   * @var string
   */
  public $signedDialogflowAudioUri;
  /**
   * The signed URI for the audio from the Cloud Storage conversation source.
   *
   * @var string
   */
  public $signedGcsAudioUri;
  protected $signedTurnLevelAudiosType = GoogleCloudContactcenterinsightsV1ConversationDataSourceTurnLevelAudio::class;
  protected $signedTurnLevelAudiosDataType = 'array';

  /**
   * The signed URI for the audio from the Dialogflow conversation source.
   *
   * @param string $signedDialogflowAudioUri
   */
  public function setSignedDialogflowAudioUri($signedDialogflowAudioUri)
  {
    $this->signedDialogflowAudioUri = $signedDialogflowAudioUri;
  }
  /**
   * @return string
   */
  public function getSignedDialogflowAudioUri()
  {
    return $this->signedDialogflowAudioUri;
  }
  /**
   * The signed URI for the audio from the Cloud Storage conversation source.
   *
   * @param string $signedGcsAudioUri
   */
  public function setSignedGcsAudioUri($signedGcsAudioUri)
  {
    $this->signedGcsAudioUri = $signedGcsAudioUri;
  }
  /**
   * @return string
   */
  public function getSignedGcsAudioUri()
  {
    return $this->signedGcsAudioUri;
  }
  /**
   * The signed URI for the audio corresponding to each turn in the
   * conversation.
   *
   * @param GoogleCloudContactcenterinsightsV1ConversationDataSourceTurnLevelAudio[] $signedTurnLevelAudios
   */
  public function setSignedTurnLevelAudios($signedTurnLevelAudios)
  {
    $this->signedTurnLevelAudios = $signedTurnLevelAudios;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1ConversationDataSourceTurnLevelAudio[]
   */
  public function getSignedTurnLevelAudios()
  {
    return $this->signedTurnLevelAudios;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1SignedAudioUris::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1SignedAudioUris');
