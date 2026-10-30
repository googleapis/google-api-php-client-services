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

namespace Google\Service\DeveloperConnect;

class FileDiff extends \Google\Model
{
  /**
   * Standard unified diff patch hunk for the file. Only populated when
   * `path_filters` is specified in the request; otherwise empty.
   *
   * @var string
   */
  public $patch;
  /**
   * Relative path to the file in the repository.
   *
   * @var string
   */
  public $path;
  /**
   * Status of change: "ADDED", "MODIFIED", "REMOVED", "RENAMED".
   *
   * @var string
   */
  public $status;

  /**
   * Standard unified diff patch hunk for the file. Only populated when
   * `path_filters` is specified in the request; otherwise empty.
   *
   * @param string $patch
   */
  public function setPatch($patch)
  {
    $this->patch = $patch;
  }
  /**
   * @return string
   */
  public function getPatch()
  {
    return $this->patch;
  }
  /**
   * Relative path to the file in the repository.
   *
   * @param string $path
   */
  public function setPath($path)
  {
    $this->path = $path;
  }
  /**
   * @return string
   */
  public function getPath()
  {
    return $this->path;
  }
  /**
   * Status of change: "ADDED", "MODIFIED", "REMOVED", "RENAMED".
   *
   * @param string $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return string
   */
  public function getStatus()
  {
    return $this->status;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FileDiff::class, 'Google_Service_DeveloperConnect_FileDiff');
