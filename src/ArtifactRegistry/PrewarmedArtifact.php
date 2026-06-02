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

class PrewarmedArtifact extends \Google\Model
{
  /**
   * The expiration time of the prewarmed artifact.
   *
   * @var string
   */
  public $expirationTime;
  /**
   * The location of the prewarmed artifact.
   *
   * @var string
   */
  public $location;
  /**
   * URL to access the image. Example: us-west4-docker.pkg.dev/test-
   * project/test-repo/nginx@sha256:e9954c1fc875017be1c3e36eca16be2d9e9bccc4bf07
   * 2163515467d6a823c7cf
   *
   * @var string
   */
  public $uri;

  /**
   * The expiration time of the prewarmed artifact.
   *
   * @param string $expirationTime
   */
  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }
  /**
   * @return string
   */
  public function getExpirationTime()
  {
    return $this->expirationTime;
  }
  /**
   * The location of the prewarmed artifact.
   *
   * @param string $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * URL to access the image. Example: us-west4-docker.pkg.dev/test-
   * project/test-repo/nginx@sha256:e9954c1fc875017be1c3e36eca16be2d9e9bccc4bf07
   * 2163515467d6a823c7cf
   *
   * @param string $uri
   */
  public function setUri($uri)
  {
    $this->uri = $uri;
  }
  /**
   * @return string
   */
  public function getUri()
  {
    return $this->uri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PrewarmedArtifact::class, 'Google_Service_ArtifactRegistry_PrewarmedArtifact');
