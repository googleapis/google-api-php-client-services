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

namespace Google\Service\OracleDatabase;

class DbBackupConfig extends \Google\Collection
{
  protected $collection_key = 'backupDestinationDetails';
  /**
   * @var bool
   */
  public $autoBackupEnabled;
  /**
   * @var string
   */
  public $autoFullBackupDay;
  /**
   * @var string
   */
  public $autoFullBackupWindow;
  /**
   * @var string
   */
  public $autoIncrementalBackupWindow;
  /**
   * @var string
   */
  public $backupDeletionPolicy;
  protected $backupDestinationDetailsType = BackupDestinationDetails::class;
  protected $backupDestinationDetailsDataType = 'array';
  /**
   * @var int
   */
  public $retentionPeriodDays;

  /**
   * @param bool
   */
  public function setAutoBackupEnabled($autoBackupEnabled)
  {
    $this->autoBackupEnabled = $autoBackupEnabled;
  }
  /**
   * @return bool
   */
  public function getAutoBackupEnabled()
  {
    return $this->autoBackupEnabled;
  }
  /**
   * @param string
   */
  public function setAutoFullBackupDay($autoFullBackupDay)
  {
    $this->autoFullBackupDay = $autoFullBackupDay;
  }
  /**
   * @return string
   */
  public function getAutoFullBackupDay()
  {
    return $this->autoFullBackupDay;
  }
  /**
   * @param string
   */
  public function setAutoFullBackupWindow($autoFullBackupWindow)
  {
    $this->autoFullBackupWindow = $autoFullBackupWindow;
  }
  /**
   * @return string
   */
  public function getAutoFullBackupWindow()
  {
    return $this->autoFullBackupWindow;
  }
  /**
   * @param string
   */
  public function setAutoIncrementalBackupWindow($autoIncrementalBackupWindow)
  {
    $this->autoIncrementalBackupWindow = $autoIncrementalBackupWindow;
  }
  /**
   * @return string
   */
  public function getAutoIncrementalBackupWindow()
  {
    return $this->autoIncrementalBackupWindow;
  }
  /**
   * @param string
   */
  public function setBackupDeletionPolicy($backupDeletionPolicy)
  {
    $this->backupDeletionPolicy = $backupDeletionPolicy;
  }
  /**
   * @return string
   */
  public function getBackupDeletionPolicy()
  {
    return $this->backupDeletionPolicy;
  }
  /**
   * @param BackupDestinationDetails[]
   */
  public function setBackupDestinationDetails($backupDestinationDetails)
  {
    $this->backupDestinationDetails = $backupDestinationDetails;
  }
  /**
   * @return BackupDestinationDetails[]
   */
  public function getBackupDestinationDetails()
  {
    return $this->backupDestinationDetails;
  }
  /**
   * @param int
   */
  public function setRetentionPeriodDays($retentionPeriodDays)
  {
    $this->retentionPeriodDays = $retentionPeriodDays;
  }
  /**
   * @return int
   */
  public function getRetentionPeriodDays()
  {
    return $this->retentionPeriodDays;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DbBackupConfig::class, 'Google_Service_OracleDatabase_DbBackupConfig');
