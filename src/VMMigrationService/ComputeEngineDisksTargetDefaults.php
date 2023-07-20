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

class ComputeEngineDisksTargetDefaults extends \Google\Collection
{
  protected $collection_key = 'disks';
  protected $disksType = PersistentDiskDefaults::class;
  protected $disksDataType = 'array';
  /**
   * @var string
   */
  public $targetProject;
  /**
   * @var string
   */
  public $zone;

  /**
   * @param PersistentDiskDefaults[]
   */
  public function setDisks($disks)
  {
    $this->disks = $disks;
  }
  /**
   * @return PersistentDiskDefaults[]
   */
  public function getDisks()
  {
    return $this->disks;
  }
  /**
   * @param string
   */
  public function setTargetProject($targetProject)
  {
    $this->targetProject = $targetProject;
  }
  /**
   * @return string
   */
  public function getTargetProject()
  {
    return $this->targetProject;
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
class_alias(ComputeEngineDisksTargetDefaults::class, 'Google_Service_VMMigrationService_ComputeEngineDisksTargetDefaults');
