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

namespace Google\Service\DatabaseMigrationService;

class GcsSource extends \Google\Model
{
  /**
   * Required. The Cloud Storage bucket containing the schema report files.
   *
   * @var string
   */
  public $bucket;
  /**
   * Required. The prefix for the report paths in the bucket. Different seed
   * versions (report versions) might reside in the same bucket, the prefix
   * allows to identify the correct seed version.
   *
   * @var string
   */
  public $prefix;

  /**
   * Required. The Cloud Storage bucket containing the schema report files.
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
   * Required. The prefix for the report paths in the bucket. Different seed
   * versions (report versions) might reside in the same bucket, the prefix
   * allows to identify the correct seed version.
   *
   * @param string $prefix
   */
  public function setPrefix($prefix)
  {
    $this->prefix = $prefix;
  }
  /**
   * @return string
   */
  public function getPrefix()
  {
    return $this->prefix;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GcsSource::class, 'Google_Service_DatabaseMigrationService_GcsSource');
