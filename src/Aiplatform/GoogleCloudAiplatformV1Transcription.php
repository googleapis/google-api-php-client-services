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

class GoogleCloudAiplatformV1Transcription extends \Google\Model
{
  /**
   * Optional. The bool indicates the end of the transcription.
   *
   * @var bool
   */
  public $finished;
  /**
   * Optional. Transcription text.
   *
   * @var string
   */
  public $text;

  /**
   * Optional. The bool indicates the end of the transcription.
   *
   * @param bool $finished
   */
  public function setFinished($finished)
  {
    $this->finished = $finished;
  }
  /**
   * @return bool
   */
  public function getFinished()
  {
    return $this->finished;
  }
  /**
   * Optional. Transcription text.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1Transcription::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1Transcription');
