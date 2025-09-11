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

namespace Google\Service\VMMigrationService;

class ComputeEngineDisk extends \Google\Collection
{
  protected $collection_key = 'replicaZones';
  /**
   * @var string
   */
  public $diskId;
  /**
   * @var string
   */
  public $diskType;
  /**
   * @var string[]
   */
  public $replicaZones;
  /**
   * @var string
   */
  public $zone;

  /**
   * @param string
   */
  public function setDiskId($diskId)
  {
    $this->diskId = $diskId;
  }
  /**
   * @return string
   */
  public function getDiskId()
  {
    return $this->diskId;
  }
  /**
   * @param string
   */
  public function setDiskType($diskType)
  {
    $this->diskType = $diskType;
  }
  /**
   * @return string
   */
  public function getDiskType()
  {
    return $this->diskType;
  }
  /**
   * @param string[]
   */
  public function setReplicaZones($replicaZones)
  {
    $this->replicaZones = $replicaZones;
  }
  /**
   * @return string[]
   */
  public function getReplicaZones()
  {
    return $this->replicaZones;
  }
  /**
   * @param string
   */
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  /**
   * @return string
   */
  public function getZone()
  {
    return $this->zone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ComputeEngineDisk::class, 'Google_Service_VMMigrationService_ComputeEngineDisk');
