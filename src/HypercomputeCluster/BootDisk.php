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

class BootDisk extends \Google\Model
{
  /**
   * Required. Immutable. Size of the disk in gigabytes. Must be at least 10GB.
   *
   * @var string
   */
  public $sizeGb;
  /**
   * Required. Immutable. [Persistent disk
   * type](https://cloud.google.com/compute/docs/disks#disk-types), in the
   * format `projects/{project}/zones/{zone}/diskTypes/{disk_type}`.
   *
   * @var string
   */
  public $type;

  /**
   * Required. Immutable. Size of the disk in gigabytes. Must be at least 10GB.
   *
   * @param string $sizeGb
   */
  public function setSizeGb($sizeGb)
  {
    $this->sizeGb = $sizeGb;
  }
  /**
   * @return string
   */
  public function getSizeGb()
  {
    return $this->sizeGb;
  }
  /**
   * Required. Immutable. [Persistent disk
   * type](https://cloud.google.com/compute/docs/disks#disk-types), in the
   * format `projects/{project}/zones/{zone}/diskTypes/{disk_type}`.
   *
   * @param string $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BootDisk::class, 'Google_Service_HypercomputeCluster_BootDisk');
