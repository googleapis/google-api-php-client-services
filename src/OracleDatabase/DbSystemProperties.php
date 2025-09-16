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

class DbSystemProperties extends \Google\Collection
{
  protected $collection_key = 'sshPublicKeys';
  /**
   * @var int
   */
  public $computeCount;
  /**
   * @var string
   */
  public $computeModel;
  protected $dataCollectionOptionsType = DataCollectionOptionsDbSystem::class;
  protected $dataCollectionOptionsDataType = '';
  /**
   * @var int
   */
  public $dataStorageSizeGb;
  /**
   * @var string
   */
  public $databaseEdition;
  protected $dbHomeType = DbHome::class;
  protected $dbHomeDataType = '';
  protected $dbSystemOptionsType = DbSystemOptions::class;
  protected $dbSystemOptionsDataType = '';
  /**
   * @var string
   */
  public $domain;
  /**
   * @var string
   */
  public $hostname;
  /**
   * @var string
   */
  public $hostnamePrefix;
  /**
   * @var int
   */
  public $initialDataStorageSizeGb;
  /**
   * @var string
   */
  public $licenseModel;
  /**
   * @var string
   */
  public $lifecycleState;
  /**
   * @var int
   */
  public $memorySizeGb;
  /**
   * @var int
   */
  public $nodeCount;
  /**
   * @var string
   */
  public $ocid;
  /**
   * @var string
   */
  public $privateIp;
  /**
   * @var int
   */
  public $recoStorageSizeGb;
  /**
   * @var string
   */
  public $shape;
  /**
   * @var string[]
   */
  public $sshPublicKeys;
  protected $timeZoneType = TimeZone::class;
  protected $timeZoneDataType = '';

  /**
   * @param int
   */
  public function setComputeCount($computeCount)
  {
    $this->computeCount = $computeCount;
  }
  /**
   * @return int
   */
  public function getComputeCount()
  {
    return $this->computeCount;
  }
  /**
   * @param string
   */
  public function setComputeModel($computeModel)
  {
    $this->computeModel = $computeModel;
  }
  /**
   * @return string
   */
  public function getComputeModel()
  {
    return $this->computeModel;
  }
  /**
   * @param DataCollectionOptionsDbSystem
   */
  public function setDataCollectionOptions(DataCollectionOptionsDbSystem $dataCollectionOptions)
  {
    $this->dataCollectionOptions = $dataCollectionOptions;
  }
  /**
   * @return DataCollectionOptionsDbSystem
   */
  public function getDataCollectionOptions()
  {
    return $this->dataCollectionOptions;
  }
  /**
   * @param int
   */
  public function setDataStorageSizeGb($dataStorageSizeGb)
  {
    $this->dataStorageSizeGb = $dataStorageSizeGb;
  }
  /**
   * @return int
   */
  public function getDataStorageSizeGb()
  {
    return $this->dataStorageSizeGb;
  }
  /**
   * @param string
   */
  public function setDatabaseEdition($databaseEdition)
  {
    $this->databaseEdition = $databaseEdition;
  }
  /**
   * @return string
   */
  public function getDatabaseEdition()
  {
    return $this->databaseEdition;
  }
  /**
   * @param DbHome
   */
  public function setDbHome(DbHome $dbHome)
  {
    $this->dbHome = $dbHome;
  }
  /**
   * @return DbHome
   */
  public function getDbHome()
  {
    return $this->dbHome;
  }
  /**
   * @param DbSystemOptions
   */
  public function setDbSystemOptions(DbSystemOptions $dbSystemOptions)
  {
    $this->dbSystemOptions = $dbSystemOptions;
  }
  /**
   * @return DbSystemOptions
   */
  public function getDbSystemOptions()
  {
    return $this->dbSystemOptions;
  }
  /**
   * @param string
   */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /**
   * @return string
   */
  public function getDomain()
  {
    return $this->domain;
  }
  /**
   * @param string
   */
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  /**
   * @return string
   */
  public function getHostname()
  {
    return $this->hostname;
  }
  /**
   * @param string
   */
  public function setHostnamePrefix($hostnamePrefix)
  {
    $this->hostnamePrefix = $hostnamePrefix;
  }
  /**
   * @return string
   */
  public function getHostnamePrefix()
  {
    return $this->hostnamePrefix;
  }
  /**
   * @param int
   */
  public function setInitialDataStorageSizeGb($initialDataStorageSizeGb)
  {
    $this->initialDataStorageSizeGb = $initialDataStorageSizeGb;
  }
  /**
   * @return int
   */
  public function getInitialDataStorageSizeGb()
  {
    return $this->initialDataStorageSizeGb;
  }
  /**
   * @param string
   */
  public function setLicenseModel($licenseModel)
  {
    $this->licenseModel = $licenseModel;
  }
  /**
   * @return string
   */
  public function getLicenseModel()
  {
    return $this->licenseModel;
  }
  /**
   * @param string
   */
  public function setLifecycleState($lifecycleState)
  {
    $this->lifecycleState = $lifecycleState;
  }
  /**
   * @return string
   */
  public function getLifecycleState()
  {
    return $this->lifecycleState;
  }
  /**
   * @param int
   */
  public function setMemorySizeGb($memorySizeGb)
  {
    $this->memorySizeGb = $memorySizeGb;
  }
  /**
   * @return int
   */
  public function getMemorySizeGb()
  {
    return $this->memorySizeGb;
  }
  /**
   * @param int
   */
  public function setNodeCount($nodeCount)
  {
    $this->nodeCount = $nodeCount;
  }
  /**
   * @return int
   */
  public function getNodeCount()
  {
    return $this->nodeCount;
  }
  /**
   * @param string
   */
  public function setOcid($ocid)
  {
    $this->ocid = $ocid;
  }
  /**
   * @return string
   */
  public function getOcid()
  {
    return $this->ocid;
  }
  /**
   * @param string
   */
  public function setPrivateIp($privateIp)
  {
    $this->privateIp = $privateIp;
  }
  /**
   * @return string
   */
  public function getPrivateIp()
  {
    return $this->privateIp;
  }
  /**
   * @param int
   */
  public function setRecoStorageSizeGb($recoStorageSizeGb)
  {
    $this->recoStorageSizeGb = $recoStorageSizeGb;
  }
  /**
   * @return int
   */
  public function getRecoStorageSizeGb()
  {
    return $this->recoStorageSizeGb;
  }
  /**
   * @param string
   */
  public function setShape($shape)
  {
    $this->shape = $shape;
  }
  /**
   * @return string
   */
  public function getShape()
  {
    return $this->shape;
  }
  /**
   * @param string[]
   */
  public function setSshPublicKeys($sshPublicKeys)
  {
    $this->sshPublicKeys = $sshPublicKeys;
  }
  /**
   * @return string[]
   */
  public function getSshPublicKeys()
  {
    return $this->sshPublicKeys;
  }
  /**
   * @param TimeZone
   */
  public function setTimeZone(TimeZone $timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /**
   * @return TimeZone
   */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DbSystemProperties::class, 'Google_Service_OracleDatabase_DbSystemProperties');
