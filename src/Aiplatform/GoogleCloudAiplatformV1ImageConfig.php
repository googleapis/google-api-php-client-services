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

class GoogleCloudAiplatformV1ImageConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $aspectRatio;
  protected $imageOutputOptionsType = GoogleCloudAiplatformV1ImageConfigImageOutputOptions::class;
  protected $imageOutputOptionsDataType = '';
  /**
   * @var string
   */
  public $personGeneration;

  /**
   * @param string
   */
  public function setAspectRatio($aspectRatio)
  {
    $this->aspectRatio = $aspectRatio;
  }
  /**
   * @return string
   */
  public function getAspectRatio()
  {
    return $this->aspectRatio;
  }
  /**
   * @param GoogleCloudAiplatformV1ImageConfigImageOutputOptions
   */
  public function setImageOutputOptions(GoogleCloudAiplatformV1ImageConfigImageOutputOptions $imageOutputOptions)
  {
    $this->imageOutputOptions = $imageOutputOptions;
  }
  /**
   * @return GoogleCloudAiplatformV1ImageConfigImageOutputOptions
   */
  public function getImageOutputOptions()
  {
    return $this->imageOutputOptions;
  }
  /**
   * @param string
   */
  public function setPersonGeneration($personGeneration)
  {
    $this->personGeneration = $personGeneration;
  }
  /**
   * @return string
   */
  public function getPersonGeneration()
  {
    return $this->personGeneration;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ImageConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ImageConfig');
