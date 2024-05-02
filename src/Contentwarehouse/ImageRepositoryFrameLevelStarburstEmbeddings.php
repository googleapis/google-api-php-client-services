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

class ImageRepositoryFrameLevelStarburstEmbeddings extends \Google\Model
{
  protected $starburstV5EmbeddingsType = ImageRepositorySUPFrameLevelEmbeddings::class;
  protected $starburstV5EmbeddingsDataType = '';
  protected $starburstV5EmbeddingsBlobInfoType = ImageRepositoryAmarnaSignalsBlobInfo::class;
  protected $starburstV5EmbeddingsBlobInfoDataType = '';

  /**
   * @param ImageRepositorySUPFrameLevelEmbeddings
   */
  public function setStarburstV5Embeddings(ImageRepositorySUPFrameLevelEmbeddings $starburstV5Embeddings)
  {
    $this->starburstV5Embeddings = $starburstV5Embeddings;
  }
  /**
   * @return ImageRepositorySUPFrameLevelEmbeddings
   */
  public function getStarburstV5Embeddings()
  {
    return $this->starburstV5Embeddings;
  }
  /**
   * @param ImageRepositoryAmarnaSignalsBlobInfo
   */
  public function setStarburstV5EmbeddingsBlobInfo(ImageRepositoryAmarnaSignalsBlobInfo $starburstV5EmbeddingsBlobInfo)
  {
    $this->starburstV5EmbeddingsBlobInfo = $starburstV5EmbeddingsBlobInfo;
  }
  /**
   * @return ImageRepositoryAmarnaSignalsBlobInfo
   */
  public function getStarburstV5EmbeddingsBlobInfo()
  {
    return $this->starburstV5EmbeddingsBlobInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ImageRepositoryFrameLevelStarburstEmbeddings::class, 'Google_Service_Contentwarehouse_ImageRepositoryFrameLevelStarburstEmbeddings');
