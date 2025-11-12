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

class CloudSqlInstanceBackupProperties extends \Google\Model
{
  /**
   * @var string
   */
  public $databaseInstalledVersion;
  /**
   * @var bool
   */
  public $finalBackup;
  /**
   * @var string
   */
  public $instanceCreateTime;
  /**
   * @var string
   */
  public $instanceDeleteTime;
  /**
   * @var string
   */
  public $instanceTier;
  /**
   * @var string
   */
  public $sourceInstance;

  /**
   * @param string
   */
  public function setDatabaseInstalledVersion($databaseInstalledVersion)
  {
    $this->databaseInstalledVersion = $databaseInstalledVersion;
  }
  /**
   * @return string
   */
  public function getDatabaseInstalledVersion()
  {
    return $this->databaseInstalledVersion;
  }
  /**
   * @param bool
   */
  public function setFinalBackup($finalBackup)
  {
    $this->finalBackup = $finalBackup;
  }
  /**
   * @return bool
   */
  public function getFinalBackup()
  {
    return $this->finalBackup;
  }
  /**
   * @param string
   */
  public function setInstanceCreateTime($instanceCreateTime)
  {
    $this->instanceCreateTime = $instanceCreateTime;
  }
  /**
   * @return string
   */
  public function getInstanceCreateTime()
  {
    return $this->instanceCreateTime;
  }
  /**
   * @param string
   */
  public function setInstanceDeleteTime($instanceDeleteTime)
  {
    $this->instanceDeleteTime = $instanceDeleteTime;
  }
  /**
   * @return string
   */
  public function getInstanceDeleteTime()
  {
    return $this->instanceDeleteTime;
  }
  /**
   * @param string
   */
  public function setInstanceTier($instanceTier)
  {
    $this->instanceTier = $instanceTier;
  }
  /**
   * @return string
   */
  public function getInstanceTier()
  {
    return $this->instanceTier;
  }
  /**
   * @param string
   */
  public function setSourceInstance($sourceInstance)
  {
    $this->sourceInstance = $sourceInstance;
  }
  /**
   * @return string
   */
  public function getSourceInstance()
  {
    return $this->sourceInstance;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CloudSqlInstanceBackupProperties::class, 'Google_Service_Backupdr_CloudSqlInstanceBackupProperties');
