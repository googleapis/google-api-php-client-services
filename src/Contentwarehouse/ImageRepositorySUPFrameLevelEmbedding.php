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

namespace Google\Service\Contentwarehouse;

class ImageRepositorySUPFrameLevelEmbedding extends \Google\Model
{
  protected $embeddingType = ReneEmbedding::class;
  protected $embeddingDataType = '';
  /**
   * @var string
   */
  public $timeOffset;

  /**
   * @param ReneEmbedding
   */
  public function setEmbedding(ReneEmbedding $embedding)
  {
    $this->embedding = $embedding;
  }
  /**
   * @return ReneEmbedding
   */
  public function getEmbedding()
  {
    return $this->embedding;
  }
  /**
   * @param string
   */
  public function setTimeOffset($timeOffset)
  {
    $this->timeOffset = $timeOffset;
  }
  /**
   * @return string
   */
  public function getTimeOffset()
  {
    return $this->timeOffset;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImageRepositorySUPFrameLevelEmbedding::class, 'Google_Service_Contentwarehouse_ImageRepositorySUPFrameLevelEmbedding');
