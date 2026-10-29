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

namespace Google\Service\DeepReview;

class DriveSource extends \Google\Model
{
  /**
   * Required. Immutable. The Google Drive file ID (e.g.
   * "1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms"). For Google Drive
   * shortcuts, callers must pass the resolved target file's `file_id` and
   * `resource_key`.
   *
   * @var string
   */
  public $fileId;
  /**
   * Optional. Input only. Immutable. Resource key (`^[a-zA-Z0-9_-]{1,128}$`)
   * required to access certain older link-shared Google Drive files returned by
   * the Google Drive Picker (for shortcuts, pass the resolved target file's
   * resource key). Never persisted in database records or returned in Document
   * resources (see companion field `resource_key_set`, AIP-147).
   *
   * @var string
   */
  public $resourceKey;
  /**
   * Output only. Indicates whether a resource key was provided for this Drive
   * source.
   *
   * @var bool
   */
  public $resourceKeySet;
  /**
   * Optional. Input only. Immutable. Importing a specific revision is not
   * currently supported; non-empty values return INVALID_ARGUMENT.
   *
   * @var string
   */
  public $revisionId;

  /**
   * Required. Immutable. The Google Drive file ID (e.g.
   * "1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms"). For Google Drive
   * shortcuts, callers must pass the resolved target file's `file_id` and
   * `resource_key`.
   *
   * @param string $fileId
   */
  public function setFileId($fileId)
  {
    $this->fileId = $fileId;
  }
  /**
   * @return string
   */
  public function getFileId()
  {
    return $this->fileId;
  }
  /**
   * Optional. Input only. Immutable. Resource key (`^[a-zA-Z0-9_-]{1,128}$`)
   * required to access certain older link-shared Google Drive files returned by
   * the Google Drive Picker (for shortcuts, pass the resolved target file's
   * resource key). Never persisted in database records or returned in Document
   * resources (see companion field `resource_key_set`, AIP-147).
   *
   * @param string $resourceKey
   */
  public function setResourceKey($resourceKey)
  {
    $this->resourceKey = $resourceKey;
  }
  /**
   * @return string
   */
  public function getResourceKey()
  {
    return $this->resourceKey;
  }
  /**
   * Output only. Indicates whether a resource key was provided for this Drive
   * source.
   *
   * @param bool $resourceKeySet
   */
  public function setResourceKeySet($resourceKeySet)
  {
    $this->resourceKeySet = $resourceKeySet;
  }
  /**
   * @return bool
   */
  public function getResourceKeySet()
  {
    return $this->resourceKeySet;
  }
  /**
   * Optional. Input only. Immutable. Importing a specific revision is not
   * currently supported; non-empty values return INVALID_ARGUMENT.
   *
   * @param string $revisionId
   */
  public function setRevisionId($revisionId)
  {
    $this->revisionId = $revisionId;
  }
  /**
   * @return string
   */
  public function getRevisionId()
  {
    return $this->revisionId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DriveSource::class, 'Google_Service_DeepReview_DriveSource');
