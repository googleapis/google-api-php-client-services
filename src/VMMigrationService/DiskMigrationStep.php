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

class DiskMigrationStep extends \Google\Model
{
  protected $copyingSourceDiskSnapshotType = CopyingSourceDiskSnapshotStep::class;
  protected $copyingSourceDiskSnapshotDataType = '';
  protected $creatingSourceDiskSnapshotType = CreatingSourceDiskSnapshotStep::class;
  protected $creatingSourceDiskSnapshotDataType = '';
  /**
   * @var string
   */
  public $endTime;
  protected $provisioningTargetDiskType = ProvisioningTargetDiskStep::class;
  protected $provisioningTargetDiskDataType = '';
  /**
   * @var string
   */
  public $startTime;

  /**
   * @param CopyingSourceDiskSnapshotStep
   */
  public function setCopyingSourceDiskSnapshot(CopyingSourceDiskSnapshotStep $copyingSourceDiskSnapshot)
  {
    $this->copyingSourceDiskSnapshot = $copyingSourceDiskSnapshot;
  }
  /**
   * @return CopyingSourceDiskSnapshotStep
   */
  public function getCopyingSourceDiskSnapshot()
  {
    return $this->copyingSourceDiskSnapshot;
  }
  /**
   * @param CreatingSourceDiskSnapshotStep
   */
  public function setCreatingSourceDiskSnapshot(CreatingSourceDiskSnapshotStep $creatingSourceDiskSnapshot)
  {
    $this->creatingSourceDiskSnapshot = $creatingSourceDiskSnapshot;
  }
  /**
   * @return CreatingSourceDiskSnapshotStep
   */
  public function getCreatingSourceDiskSnapshot()
  {
    return $this->creatingSourceDiskSnapshot;
  }
  /**
   * @param string
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * @param ProvisioningTargetDiskStep
   */
  public function setProvisioningTargetDisk(ProvisioningTargetDiskStep $provisioningTargetDisk)
  {
    $this->provisioningTargetDisk = $provisioningTargetDisk;
  }
  /**
   * @return ProvisioningTargetDiskStep
   */
  public function getProvisioningTargetDisk()
  {
    return $this->provisioningTargetDisk;
  }
  /**
   * @param string
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DiskMigrationStep::class, 'Google_Service_VMMigrationService_DiskMigrationStep');
