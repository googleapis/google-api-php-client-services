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

class GoogleCloudAiplatformV1AudioTranscriptionWordInfo extends \Google\Model
{
  /**
   * Optional. End offset in time of the word relative to the start of the
   * audio.
   *
   * @var string
   */
  public $endOffset;
  /**
   * Optional. Start offset in time of the word relative to the start of the
   * audio.
   *
   * @var string
   */
  public $startOffset;
  /**
   * Required. Transcript of the word.
   *
   * @var string
   */
  public $word;

  /**
   * Optional. End offset in time of the word relative to the start of the
   * audio.
   *
   * @param string $endOffset
   */
  public function setEndOffset($endOffset)
  {
    $this->endOffset = $endOffset;
  }
  /**
   * @return string
   */
  public function getEndOffset()
  {
    return $this->endOffset;
  }
  /**
   * Optional. Start offset in time of the word relative to the start of the
   * audio.
   *
   * @param string $startOffset
   */
  public function setStartOffset($startOffset)
  {
    $this->startOffset = $startOffset;
  }
  /**
   * @return string
   */
  public function getStartOffset()
  {
    return $this->startOffset;
  }
  /**
   * Required. Transcript of the word.
   *
   * @param string $word
   */
  public function setWord($word)
  {
    $this->word = $word;
  }
  /**
   * @return string
   */
  public function getWord()
  {
    return $this->word;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AudioTranscriptionWordInfo::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AudioTranscriptionWordInfo');
