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

class GoogleCloudAiplatformV1SchemaTextPromptDatasetMetadata extends \Google\Model
{
  /**
   * @var string
   */
  public $gcsUri;
  /**
   * @var string
   */
  public $maxOutputTokens;
  /**
   * @var string
   */
  public $promptType;
  /**
   * @var float
   */
  public $temperature;
  /**
   * @var string
   */
  public $text;
  /**
   * @var string
   */
  public $topK;
  /**
   * @var float
   */
  public $topP;

  /**
   * @param string
   */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /**
   * @return string
   */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
  /**
   * @param string
   */
  public function setMaxOutputTokens($maxOutputTokens)
  {
    $this->maxOutputTokens = $maxOutputTokens;
  }
  /**
   * @return string
   */
  public function getMaxOutputTokens()
  {
    return $this->maxOutputTokens;
  }
  /**
   * @param string
   */
  public function setPromptType($promptType)
  {
    $this->promptType = $promptType;
  }
  /**
   * @return string
   */
  public function getPromptType()
  {
    return $this->promptType;
  }
  /**
   * @param float
   */
  public function setTemperature($temperature)
  {
    $this->temperature = $temperature;
  }
  /**
   * @return float
   */
  public function getTemperature()
  {
    return $this->temperature;
  }
  /**
   * @param string
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
   * @param string
   */
  public function setTopK($topK)
  {
    $this->topK = $topK;
  }
  /**
   * @return string
   */
  public function getTopK()
  {
    return $this->topK;
  }
  /**
   * @param float
   */
  public function setTopP($topP)
  {
    $this->topP = $topP;
  }
  /**
   * @return float
   */
  public function getTopP()
  {
    return $this->topP;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1SchemaTextPromptDatasetMetadata::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SchemaTextPromptDatasetMetadata');
