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

class GoogleCloudAiplatformV1RagContextsContext extends \Google\Model
{
  protected $chunkType = GoogleCloudAiplatformV1RagChunk::class;
  protected $chunkDataType = '';
  public $score;
  /**
   * @var string
   */
  public $sourceDisplayName;
  /**
   * @var string
   */
  public $sourceUri;
  /**
   * @var string
   */
  public $text;

  /**
   * @param GoogleCloudAiplatformV1RagChunk
   */
  public function setChunk(GoogleCloudAiplatformV1RagChunk $chunk)
  {
    $this->chunk = $chunk;
  }
  /**
   * @return GoogleCloudAiplatformV1RagChunk
   */
  public function getChunk()
  {
    return $this->chunk;
  }
  public function setScore($score)
  {
    $this->score = $score;
  }
  public function getScore()
  {
    return $this->score;
  }
  /**
   * @param string
   */
  public function setSourceDisplayName($sourceDisplayName)
  {
    $this->sourceDisplayName = $sourceDisplayName;
  }
  /**
   * @return string
   */
  public function getSourceDisplayName()
  {
    return $this->sourceDisplayName;
  }
  /**
   * @param string
   */
  public function setSourceUri($sourceUri)
  {
    $this->sourceUri = $sourceUri;
  }
  /**
   * @return string
   */
  public function getSourceUri()
  {
    return $this->sourceUri;
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1RagContextsContext::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1RagContextsContext');
