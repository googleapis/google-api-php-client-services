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

class GoogleCloudAiplatformV1ResponseFormat extends \Google\Model
{
  protected $audioType = GoogleCloudAiplatformV1AudioResponseFormat::class;
  protected $audioDataType = '';
  protected $imageType = GoogleCloudAiplatformV1ImageResponseFormat::class;
  protected $imageDataType = '';
  protected $textType = GoogleCloudAiplatformV1TextResponseFormat::class;
  protected $textDataType = '';
  protected $videoType = GoogleCloudAiplatformV1VideoResponseFormat::class;
  protected $videoDataType = '';

  /**
   * Audio output format.
   *
   * @param GoogleCloudAiplatformV1AudioResponseFormat $audio
   */
  public function setAudio(GoogleCloudAiplatformV1AudioResponseFormat $audio)
  {
    $this->audio = $audio;
  }
  /**
   * @return GoogleCloudAiplatformV1AudioResponseFormat
   */
  public function getAudio()
  {
    return $this->audio;
  }
  /**
   * Image output format.
   *
   * @param GoogleCloudAiplatformV1ImageResponseFormat $image
   */
  public function setImage(GoogleCloudAiplatformV1ImageResponseFormat $image)
  {
    $this->image = $image;
  }
  /**
   * @return GoogleCloudAiplatformV1ImageResponseFormat
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * Text output format.
   *
   * @param GoogleCloudAiplatformV1TextResponseFormat $text
   */
  public function setText(GoogleCloudAiplatformV1TextResponseFormat $text)
  {
    $this->text = $text;
  }
  /**
   * @return GoogleCloudAiplatformV1TextResponseFormat
   */
  public function getText()
  {
    return $this->text;
  }
  /**
   * Video output format.
   *
   * @param GoogleCloudAiplatformV1VideoResponseFormat $video
   */
  public function setVideo(GoogleCloudAiplatformV1VideoResponseFormat $video)
  {
    $this->video = $video;
  }
  /**
   * @return GoogleCloudAiplatformV1VideoResponseFormat
   */
  public function getVideo()
  {
    return $this->video;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ResponseFormat::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ResponseFormat');
