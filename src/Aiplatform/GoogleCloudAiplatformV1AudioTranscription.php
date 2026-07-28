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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1AudioTranscription extends \Google\Collection
{
  protected $collection_key = 'words';
  /**
   * Optional. A label identifying the speaker of this audio segment (e.g.
   * "spk_1", "spk_2"). Present when diarization is set.
   *
   * @var string
   */
  public $speakerLabel;
  /**
   * Required. The transcription text of this audio segment.
   *
   * @var string
   */
  public $text;
  protected $wordsType = GoogleCloudAiplatformV1AudioTranscriptionWordInfo::class;
  protected $wordsDataType = 'array';

  /**
   * Optional. A label identifying the speaker of this audio segment (e.g.
   * "spk_1", "spk_2"). Present when diarization is set.
   *
   * @param string $speakerLabel
   */
  public function setSpeakerLabel($speakerLabel)
  {
    $this->speakerLabel = $speakerLabel;
  }
  /**
   * @return string
   */
  public function getSpeakerLabel()
  {
    return $this->speakerLabel;
  }
  /**
   * Required. The transcription text of this audio segment.
   *
   * @param string $text
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * Optional. Detailed word-level transcriptions and timing details. Present
   * when word_timestamp is set.
   *
   * @param GoogleCloudAiplatformV1AudioTranscriptionWordInfo[] $words
   */
  public function setWords($words)
  {
    $this->words = $words;
  }
  /**
   * @return GoogleCloudAiplatformV1AudioTranscriptionWordInfo[]
   */
  public function getWords()
  {
    return $this->words;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AudioTranscription::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AudioTranscription');
