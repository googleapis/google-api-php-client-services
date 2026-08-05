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

namespace Google\Service\CloudFTP;

class StorageDirectoryMapping extends \Google\Model
{
  /**
   * Permission unspecified.
   */
  public const PERMISSION_PERMISSION_UNSPECIFIED = 'PERMISSION_UNSPECIFIED';
  /**
   * Read only permission.
   */
  public const PERMISSION_READ_ONLY = 'READ_ONLY';
  /**
   * Read write permission.
   */
  public const PERMISSION_READ_WRITE = 'READ_WRITE';
  /**
   * Required. Name of the bucket.
   *
   * @var string
   */
  public $bucket;
  /**
   * Optional. Prefix inside the bucket.
   *
   * @var string
   */
  public $bucketPrefix;
  /**
   * Required. Directory where the user lands in the SFTP server.
   *
   * @var string
   */
  public $directory;
  /**
   * Required. Permission to the bucket.
   *
   * @var string
   */
  public $permission;

  /**
   * Required. Name of the bucket.
   *
   * @param string $bucket
   */
  public function setBucket($bucket)
  {
    $this->bucket = $bucket;
  }
  /**
   * @return string
   */
  public function getBucket()
  {
    return $this->bucket;
  }
  /**
   * Optional. Prefix inside the bucket.
   *
   * @param string $bucketPrefix
   */
  public function setBucketPrefix($bucketPrefix)
  {
    $this->bucketPrefix = $bucketPrefix;
  }
  /**
   * @return string
   */
  public function getBucketPrefix()
  {
    return $this->bucketPrefix;
  }
  /**
   * Required. Directory where the user lands in the SFTP server.
   *
   * @param string $directory
   */
  public function setDirectory($directory)
  {
    $this->directory = $directory;
  }
  /**
   * @return string
   */
  public function getDirectory()
  {
    return $this->directory;
  }
  /**
   * Required. Permission to the bucket.
   *
   * Accepted values: PERMISSION_UNSPECIFIED, READ_ONLY, READ_WRITE
   *
   * @param self::PERMISSION_* $permission
   */
  public function setPermission($permission)
  {
    $this->permission = $permission;
  }
  /**
   * @return self::PERMISSION_*
   */
  public function getPermission()
  {
    return $this->permission;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StorageDirectoryMapping::class, 'Google_Service_CloudFTP_StorageDirectoryMapping');
