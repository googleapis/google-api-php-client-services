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

class GoogleCloudAiplatformV1GroundingChunkImage extends \Google\Model
{
  /**
   * The domain of the image search result page.
   *
   * @var string
   */
  public $domain;
  /**
   * The URI of the image.
   *
   * @var string
   */
  public $imageUri;
  /**
   * The URI of the image search result page.
   *
   * @var string
   */
  public $sourceUri;
  /**
   * The title of the image search result page.
   *
   * @var string
   */
  public $title;

  /**
   * The domain of the image search result page.
   *
   * @param string $domain
   */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /**
   * @return string
   */
  public function getDomain()
  {
    return $this->domain;
  }
  /**
   * The URI of the image.
   *
   * @param string $imageUri
   */
  public function setImageUri($imageUri)
  {
    $this->imageUri = $imageUri;
  }
  /**
   * @return string
   */
  public function getImageUri()
  {
    return $this->imageUri;
  }
  /**
   * The URI of the image search result page.
   *
   * @param string $sourceUri
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
   * The title of the image search result page.
   *
   * @param string $title
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
class_alias(GoogleCloudAiplatformV1GroundingChunkImage::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1GroundingChunkImage');
