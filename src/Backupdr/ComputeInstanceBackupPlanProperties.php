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

namespace Google\Service\Backupdr;

class ComputeInstanceBackupPlanProperties extends \Google\Model
{
  /**
   * Optional. If true, only the boot disk will be backed up.
   *
   * @var bool
   */
  public $bootDiskOnly;
  protected $diskExclusionLabelsType = DiskExclusionLabels::class;
  protected $diskExclusionLabelsDataType = '';
  /**
   * Optional. Indicates whether to perform a guest flush operation before
   * taking a compute backup. When set to false, the system will create crash-
   * consistent backups. Default value is false.
   *
   * @var bool
   */
  public $guestFlush;

  /**
   * Optional. If true, only the boot disk will be backed up.
   *
   * @param bool $bootDiskOnly
   */
  public function setBootDiskOnly($bootDiskOnly)
  {
    $this->bootDiskOnly = $bootDiskOnly;
  }
  /**
   * @return bool
   */
  public function getBootDiskOnly()
  {
    return $this->bootDiskOnly;
  }
  /**
   * Optional. Labels used to identify disks for exclusion from the backup. If a
   * disk carries any of these labels, it will be excluded (OR logic).
   *
   * @param DiskExclusionLabels $diskExclusionLabels
   */
  public function setDiskExclusionLabels(DiskExclusionLabels $diskExclusionLabels)
  {
    $this->diskExclusionLabels = $diskExclusionLabels;
  }
  /**
   * @return DiskExclusionLabels
   */
  public function getDiskExclusionLabels()
  {
    return $this->diskExclusionLabels;
  }
  /**
   * Optional. Indicates whether to perform a guest flush operation before
   * taking a compute backup. When set to false, the system will create crash-
   * consistent backups. Default value is false.
   *
   * @param bool $guestFlush
   */
  public function setGuestFlush($guestFlush)
  {
    $this->guestFlush = $guestFlush;
  }
  /**
   * @return bool
   */
  public function getGuestFlush()
  {
    return $this->guestFlush;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ComputeInstanceBackupPlanProperties::class, 'Google_Service_Backupdr_ComputeInstanceBackupPlanProperties');
