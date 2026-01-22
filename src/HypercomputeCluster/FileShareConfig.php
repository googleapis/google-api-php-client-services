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

namespace Google\Service\HypercomputeCluster;

class FileShareConfig extends \Google\Model
{
  /**
   * Required. Size of the filestore in GB. Must be between 1024 and 102400, and
   * must meet scalability requirements described at
   * https://cloud.google.com/filestore/docs/service-tiers.
   *
   * @var string
   */
  public $capacityGb;
  /**
   * Required. Filestore share location
   *
   * @var string
   */
  public $fileShare;

  /**
   * Required. Size of the filestore in GB. Must be between 1024 and 102400, and
   * must meet scalability requirements described at
   * https://cloud.google.com/filestore/docs/service-tiers.
   *
   * @param string $capacityGb
   */
  public function setCapacityGb($capacityGb)
  {
    $this->capacityGb = $capacityGb;
  }
  /**
   * @return string
   */
  public function getCapacityGb()
  {
    return $this->capacityGb;
  }
  /**
   * Required. Filestore share location
   *
   * @param string $fileShare
   */
  public function setFileShare($fileShare)
  {
    $this->fileShare = $fileShare;
  }
  /**
   * @return string
   */
  public function getFileShare()
  {
    return $this->fileShare;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FileShareConfig::class, 'Google_Service_HypercomputeCluster_FileShareConfig');
