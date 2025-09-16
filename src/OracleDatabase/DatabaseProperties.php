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

class DatabaseProperties extends \Google\Model
{
  protected $databaseManagementConfigType = DatabaseManagementConfig::class;
  protected $databaseManagementConfigDataType = '';
  protected $dbBackupConfigType = DbBackupConfig::class;
  protected $dbBackupConfigDataType = '';
  /**
   * @var string
   */
  public $dbVersion;
  /**
   * @var string
   */
  public $state;

  /**
   * @param DatabaseManagementConfig
   */
  public function setDatabaseManagementConfig(DatabaseManagementConfig $databaseManagementConfig)
  {
    $this->databaseManagementConfig = $databaseManagementConfig;
  }
  /**
   * @return DatabaseManagementConfig
   */
  public function getDatabaseManagementConfig()
  {
    return $this->databaseManagementConfig;
  }
  /**
   * @param DbBackupConfig
   */
  public function setDbBackupConfig(DbBackupConfig $dbBackupConfig)
  {
    $this->dbBackupConfig = $dbBackupConfig;
  }
  /**
   * @return DbBackupConfig
   */
  public function getDbBackupConfig()
  {
    return $this->dbBackupConfig;
  }
  /**
   * @param string
   */
  public function setDbVersion($dbVersion)
  {
    $this->dbVersion = $dbVersion;
  }
  /**
   * @return string
   */
  public function getDbVersion()
  {
    return $this->dbVersion;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DatabaseProperties::class, 'Google_Service_OracleDatabase_DatabaseProperties');
