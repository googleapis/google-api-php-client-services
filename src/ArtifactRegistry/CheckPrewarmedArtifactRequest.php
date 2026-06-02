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

namespace Google\Service\ArtifactRegistry;

class CheckPrewarmedArtifactRequest extends \Google\Model
{
  /**
   * Optional. The location of the prewarmed artifact. multi-region is not
   * supported for this field.
   *
   * @var string
   */
  public $streamLocation;
  /**
   * Optional. The artifact tag Format:projects/{project}/locations/{location}/r
   * epositories/{repository}/packages/{package}/tags/{tag}
   *
   * @var string
   */
  public $tag;
  /**
   * Optional. The artifact version Format: projects/{project}/locations/{locati
   * on}/repositories/{repository}/packages/{package}/versions/{version}
   *
   * @var string
   */
  public $version;

  /**
   * Optional. The location of the prewarmed artifact. multi-region is not
   * supported for this field.
   *
   * @param string $streamLocation
   */
  public function setStreamLocation($streamLocation)
  {
    $this->streamLocation = $streamLocation;
  }
  /**
   * @return string
   */
  public function getStreamLocation()
  {
    return $this->streamLocation;
  }
  /**
   * Optional. The artifact tag Format:projects/{project}/locations/{location}/r
   * epositories/{repository}/packages/{package}/tags/{tag}
   *
   * @param string $tag
   */
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  /**
   * @return string
   */
  public function getTag()
  {
    return $this->tag;
  }
  /**
   * Optional. The artifact version Format: projects/{project}/locations/{locati
   * on}/repositories/{repository}/packages/{package}/versions/{version}
   *
   * @param string $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CheckPrewarmedArtifactRequest::class, 'Google_Service_ArtifactRegistry_CheckPrewarmedArtifactRequest');
