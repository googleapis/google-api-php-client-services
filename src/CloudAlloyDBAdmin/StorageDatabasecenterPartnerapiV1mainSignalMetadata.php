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

namespace Google\Service\CloudAlloyDBAdmin;

class StorageDatabasecenterPartnerapiV1mainSignalMetadata extends \Google\Model
{
  protected $backupRunType = StorageDatabasecenterPartnerapiV1mainBackupRun::class;
  protected $backupRunDataType = '';
  /**
   * Disable validation warnings
   *
   * @var bool
   */
  public $signalBoolValue;

  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainBackupRun $backupRun
   */
  public function setBackupRun(StorageDatabasecenterPartnerapiV1mainBackupRun $backupRun)
  {
    $this->backupRun = $backupRun;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainBackupRun
   */
  public function getBackupRun()
  {
    return $this->backupRun;
  }
  /**
   * Disable validation warnings
   *
   * @param bool $signalBoolValue
   */
  public function setSignalBoolValue($signalBoolValue)
  {
    $this->signalBoolValue = $signalBoolValue;
  }
  /**
   * @return bool
   */
  public function getSignalBoolValue()
  {
    return $this->signalBoolValue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StorageDatabasecenterPartnerapiV1mainSignalMetadata::class, 'Google_Service_CloudAlloyDBAdmin_StorageDatabasecenterPartnerapiV1mainSignalMetadata');
