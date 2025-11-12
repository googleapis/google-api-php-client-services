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

namespace Google\Service\CloudRedis;

class BackupDRMetadata extends \Google\Model
{
  protected $backupConfigurationType = BackupConfiguration::class;
  protected $backupConfigurationDataType = '';
  protected $backupRunType = BackupRun::class;
  protected $backupRunDataType = '';
  protected $backupdrConfigurationType = BackupDRConfiguration::class;
  protected $backupdrConfigurationDataType = '';
  /**
   * @var string
   */
  public $fullResourceName;
  /**
   * @var string
   */
  public $lastRefreshTime;
  protected $resourceIdType = DatabaseResourceId::class;
  protected $resourceIdDataType = '';

  /**
   * @param BackupConfiguration
   */
  public function setBackupConfiguration(BackupConfiguration $backupConfiguration)
  {
    $this->backupConfiguration = $backupConfiguration;
  }
  /**
   * @return BackupConfiguration
   */
  public function getBackupConfiguration()
  {
    return $this->backupConfiguration;
  }
  /**
   * @param BackupRun
   */
  public function setBackupRun(BackupRun $backupRun)
  {
    $this->backupRun = $backupRun;
  }
  /**
   * @return BackupRun
   */
  public function getBackupRun()
  {
    return $this->backupRun;
  }
  /**
   * @param BackupDRConfiguration
   */
  public function setBackupdrConfiguration(BackupDRConfiguration $backupdrConfiguration)
  {
    $this->backupdrConfiguration = $backupdrConfiguration;
  }
  /**
   * @return BackupDRConfiguration
   */
  public function getBackupdrConfiguration()
  {
    return $this->backupdrConfiguration;
  }
  /**
   * @param string
   */
  public function setFullResourceName($fullResourceName)
  {
    $this->fullResourceName = $fullResourceName;
  }
  /**
   * @return string
   */
  public function getFullResourceName()
  {
    return $this->fullResourceName;
  }
  /**
   * @param string
   */
  public function setLastRefreshTime($lastRefreshTime)
  {
    $this->lastRefreshTime = $lastRefreshTime;
  }
  /**
   * @return string
   */
  public function getLastRefreshTime()
  {
    return $this->lastRefreshTime;
  }
  /**
   * @param DatabaseResourceId
   */
  public function setResourceId(DatabaseResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /**
   * @return DatabaseResourceId
   */
  public function getResourceId()
  {
    return $this->resourceId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BackupDRMetadata::class, 'Google_Service_CloudRedis_BackupDRMetadata');
