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

class ExportArtifactRequest extends \Google\Model
{
  /**
   * @var string
   */
  public $gcsPath;
  /**
   * @var string
   */
  public $sourceTag;
  /**
   * @var string
   */
  public $sourceVersion;

  /**
   * @param string
   */
  public function setGcsPath($gcsPath)
  {
    $this->gcsPath = $gcsPath;
  }
  /**
   * @return string
   */
  public function getGcsPath()
  {
    return $this->gcsPath;
  }
  /**
   * @param string
   */
  public function setSourceTag($sourceTag)
  {
    $this->sourceTag = $sourceTag;
  }
  /**
   * @return string
   */
  public function getSourceTag()
  {
    return $this->sourceTag;
  }
  /**
   * @param string
   */
  public function setSourceVersion($sourceVersion)
  {
    $this->sourceVersion = $sourceVersion;
  }
  /**
   * @return string
   */
  public function getSourceVersion()
  {
    return $this->sourceVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExportArtifactRequest::class, 'Google_Service_ArtifactRegistry_ExportArtifactRequest');
