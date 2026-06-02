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

class ListPrewarmedArtifactsResponse extends \Google\Collection
{
  protected $collection_key = 'prewarmedArtifacts';
  /**
   * The token to retrieve the next page of prewarmed artifacts, or empty if
   * there are no more streamings to return.
   *
   * @var string
   */
  public $nextPageToken;
  protected $prewarmedArtifactsType = PrewarmedArtifact::class;
  protected $prewarmedArtifactsDataType = 'array';

  /**
   * The token to retrieve the next page of prewarmed artifacts, or empty if
   * there are no more streamings to return.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * The prewarmed artifacts.
   *
   * @param PrewarmedArtifact[] $prewarmedArtifacts
   */
  public function setPrewarmedArtifacts($prewarmedArtifacts)
  {
    $this->prewarmedArtifacts = $prewarmedArtifacts;
  }
  /**
   * @return PrewarmedArtifact[]
   */
  public function getPrewarmedArtifacts()
  {
    return $this->prewarmedArtifacts;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListPrewarmedArtifactsResponse::class, 'Google_Service_ArtifactRegistry_ListPrewarmedArtifactsResponse');
