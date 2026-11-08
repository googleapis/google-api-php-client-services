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
   * State not specified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The artifact is currently being cached.
   */
  public const STATE_CACHING = 'CACHING';
  /**
   * The artifact is cached and ready for streaming.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * Caching the artifact failed. See `error_message` for details.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * Output only. The time the artifact was first prewarmed.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The error message if the state is `FAILED`.
   *
   * @var string
   */
  public $errorMessage;
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
   * Output only. The compressed size of the prewarmed artifact in bytes. This
   * is the size counted against the prewarm storage quota.
   *
   * @var string
   */
  public $sizeBytes;
  /**
   * Output only. The caching state of the prewarmed artifact.
   *
   * @var string
   */
  public $state;
  /**
   * URL to access the image. Example: us-west4-docker.pkg.dev/test-
   * project/test-repo/nginx@sha256:e9954c1fc875017be1c3e36eca16be2d9e9bccc4bf07
   * 2163515467d6a823c7cf
   *
   * @var string
   */
  public $uri;

  /**
   * Output only. The time the artifact was first prewarmed.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Output only. The error message if the state is `FAILED`.
   *
   * @param string $errorMessage
   */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /**
   * @return string
   */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
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
   * Output only. The compressed size of the prewarmed artifact in bytes. This
   * is the size counted against the prewarm storage quota.
   *
   * @param string $sizeBytes
   */
  public function setSizeBytes($sizeBytes)
  {
    $this->sizeBytes = $sizeBytes;
  }
  /**
   * @return string
   */
  public function getSizeBytes()
  {
    return $this->sizeBytes;
  }
  /**
   * Output only. The caching state of the prewarmed artifact.
   *
   * Accepted values: STATE_UNSPECIFIED, CACHING, ACTIVE, FAILED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
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
