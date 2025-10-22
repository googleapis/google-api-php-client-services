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

class GoogleCloudAiplatformV1EmbedContentRequest extends \Google\Model
{
  /**
   * @var bool
   */
  public $autoTruncate;
  protected $contentType = GoogleCloudAiplatformV1Content::class;
  protected $contentDataType = '';
  /**
   * @var int
   */
  public $outputDimensionality;
  /**
   * @var string
   */
  public $taskType;
  /**
   * @var string
   */
  public $title;

  /**
   * @param bool
   */
  public function setAutoTruncate($autoTruncate)
  {
    $this->autoTruncate = $autoTruncate;
  }
  /**
   * @return bool
   */
  public function getAutoTruncate()
  {
    return $this->autoTruncate;
  }
  /**
   * @param GoogleCloudAiplatformV1Content
   */
  public function setContent(GoogleCloudAiplatformV1Content $content)
  {
    $this->content = $content;
  }
  /**
   * @return GoogleCloudAiplatformV1Content
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * @param int
   */
  public function setOutputDimensionality($outputDimensionality)
  {
    $this->outputDimensionality = $outputDimensionality;
  }
  /**
   * @return int
   */
  public function getOutputDimensionality()
  {
    return $this->outputDimensionality;
  }
  /**
   * @param string
   */
  public function setTaskType($taskType)
  {
    $this->taskType = $taskType;
  }
  /**
   * @return string
   */
  public function getTaskType()
  {
    return $this->taskType;
  }
  /**
   * @param string
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1EmbedContentRequest::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1EmbedContentRequest');
