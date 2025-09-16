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

class Database extends \Google\Model
{
  /**
   * @var string
   */
  public $adminPassword;
  /**
   * @var string
   */
  public $characterSet;
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $databaseId;
  /**
   * @var string
   */
  public $dbHomeName;
  /**
   * @var string
   */
  public $dbName;
  /**
   * @var string
   */
  public $dbUniqueName;
  /**
   * @var string
   */
  public $gcpOracleZone;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $ncharacterSet;
  /**
   * @var string
   */
  public $ociUrl;
  /**
   * @var string
   */
  public $opsInsightsStatus;
  protected $propertiesType = DatabaseProperties::class;
  protected $propertiesDataType = '';
  /**
   * @var string
   */
  public $tdeWalletPassword;

  /**
   * @param string
   */
  public function setAdminPassword($adminPassword)
  {
    $this->adminPassword = $adminPassword;
  }
  /**
   * @return string
   */
  public function getAdminPassword()
  {
    return $this->adminPassword;
  }
  /**
   * @param string
   */
  public function setCharacterSet($characterSet)
  {
    $this->characterSet = $characterSet;
  }
  /**
   * @return string
   */
  public function getCharacterSet()
  {
    return $this->characterSet;
  }
  /**
   * @param string
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param string
   */
  public function setDatabaseId($databaseId)
  {
    $this->databaseId = $databaseId;
  }
  /**
   * @return string
   */
  public function getDatabaseId()
  {
    return $this->databaseId;
  }
  /**
   * @param string
   */
  public function setDbHomeName($dbHomeName)
  {
    $this->dbHomeName = $dbHomeName;
  }
  /**
   * @return string
   */
  public function getDbHomeName()
  {
    return $this->dbHomeName;
  }
  /**
   * @param string
   */
  public function setDbName($dbName)
  {
    $this->dbName = $dbName;
  }
  /**
   * @return string
   */
  public function getDbName()
  {
    return $this->dbName;
  }
  /**
   * @param string
   */
  public function setDbUniqueName($dbUniqueName)
  {
    $this->dbUniqueName = $dbUniqueName;
  }
  /**
   * @return string
   */
  public function getDbUniqueName()
  {
    return $this->dbUniqueName;
  }
  /**
   * @param string
   */
  public function setGcpOracleZone($gcpOracleZone)
  {
    $this->gcpOracleZone = $gcpOracleZone;
  }
  /**
   * @return string
   */
  public function getGcpOracleZone()
  {
    return $this->gcpOracleZone;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setNcharacterSet($ncharacterSet)
  {
    $this->ncharacterSet = $ncharacterSet;
  }
  /**
   * @return string
   */
  public function getNcharacterSet()
  {
    return $this->ncharacterSet;
  }
  /**
   * @param string
   */
  public function setOciUrl($ociUrl)
  {
    $this->ociUrl = $ociUrl;
  }
  /**
   * @return string
   */
  public function getOciUrl()
  {
    return $this->ociUrl;
  }
  /**
   * @param string
   */
  public function setOpsInsightsStatus($opsInsightsStatus)
  {
    $this->opsInsightsStatus = $opsInsightsStatus;
  }
  /**
   * @return string
   */
  public function getOpsInsightsStatus()
  {
    return $this->opsInsightsStatus;
  }
  /**
   * @param DatabaseProperties
   */
  public function setProperties(DatabaseProperties $properties)
  {
    $this->properties = $properties;
  }
  /**
   * @return DatabaseProperties
   */
  public function getProperties()
  {
    return $this->properties;
  }
  /**
   * @param string
   */
  public function setTdeWalletPassword($tdeWalletPassword)
  {
    $this->tdeWalletPassword = $tdeWalletPassword;
  }
  /**
   * @return string
   */
  public function getTdeWalletPassword()
  {
    return $this->tdeWalletPassword;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Database::class, 'Google_Service_OracleDatabase_Database');
