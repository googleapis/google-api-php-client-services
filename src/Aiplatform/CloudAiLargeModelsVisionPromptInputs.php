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

class CloudAiLargeModelsVisionPromptInputs extends \Google\Collection
{
  protected $collection_key = 'promptChunks';
  /**
   * Description of audio content in the video, without speech.
   *
   * @var string
   */
  public $audioPrompt;
  /**
   * Negative description of audio content in the video.
   *
   * @var string
   */
  public $negativeAudioPrompt;
  /**
   * Single negative prompt for what not to generate.
   *
   * @var string
   */
  public $negativePrompt;
  /**
   * 2s, 256 tokens per chunk, 4 total chunks. Required.
   *
   * @var string[]
   */
  public $promptChunks;
  /**
   * Spoken transcript of the video for characters.
   *
   * @var string
   */
  public $transcript;

  /**
   * Description of audio content in the video, without speech.
   *
   * @param string $audioPrompt
   */
  public function setAudioPrompt($audioPrompt)
  {
    $this->audioPrompt = $audioPrompt;
  }
  /**
   * @return string
   */
  public function getAudioPrompt()
  {
    return $this->audioPrompt;
  }
  /**
   * Negative description of audio content in the video.
   *
   * @param string $negativeAudioPrompt
   */
  public function setNegativeAudioPrompt($negativeAudioPrompt)
  {
    $this->negativeAudioPrompt = $negativeAudioPrompt;
  }
  /**
   * @return string
   */
  public function getNegativeAudioPrompt()
  {
    return $this->negativeAudioPrompt;
  }
  /**
   * Single negative prompt for what not to generate.
   *
   * @param string $negativePrompt
   */
  public function setNegativePrompt($negativePrompt)
  {
    $this->negativePrompt = $negativePrompt;
  }
  /**
   * @return string
   */
  public function getNegativePrompt()
  {
    return $this->negativePrompt;
  }
  /**
   * 2s, 256 tokens per chunk, 4 total chunks. Required.
   *
   * @param string[] $promptChunks
   */
  public function setPromptChunks($promptChunks)
  {
    $this->promptChunks = $promptChunks;
  }
  /**
   * @return string[]
   */
  public function getPromptChunks()
  {
    return $this->promptChunks;
  }
  /**
   * Spoken transcript of the video for characters.
   *
   * @param string $transcript
   */
  public function setTranscript($transcript)
  {
    $this->transcript = $transcript;
  }
  /**
   * @return string
   */
  public function getTranscript()
  {
    return $this->transcript;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudAiLargeModelsVisionPromptInputs::class, 'Google_Service_Aiplatform_CloudAiLargeModelsVisionPromptInputs');
