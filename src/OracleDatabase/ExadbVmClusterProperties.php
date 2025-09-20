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

class ExadbVmClusterProperties extends \Google\Collection
{
  protected $collection_key = 'sshPublicKeys';
  /**
   * @var int
   */
  public $additionalEcpuCountPerNode;
  /**
   * @var string
   */
  public $clusterName;
  protected $dataCollectionOptionsType = DataCollectionOptionsCommon::class;
  protected $dataCollectionOptionsDataType = '';
  /**
   * @var int
   */
  public $enabledEcpuCountPerNode;
  /**
   * @var string
   */
  public $exascaleDbStorageVault;
  /**
   * @var string
   */
  public $giVersion;
  /**
   * @var string
   */
  public $gridImageId;
  /**
   * @var string
   */
  public $hostname;
  /**
   * @var string
   */
  public $hostnamePrefix;
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
  public $ociUri;
  /**
   * @var int
   */
  public $scanListenerPortTcp;
  /**
   * @var string
   */
  public $shapeAttribute;
  /**
   * @var string[]
   */
  public $sshPublicKeys;
  protected $timeZoneType = TimeZone::class;
  protected $timeZoneDataType = '';
  protected $vmFileSystemStorageType = ExadbVmClusterStorageDetails::class;
  protected $vmFileSystemStorageDataType = '';

  /**
   * @param int
   */
  public function setAdditionalEcpuCountPerNode($additionalEcpuCountPerNode)
  {
    $this->additionalEcpuCountPerNode = $additionalEcpuCountPerNode;
  }
  /**
   * @return int
   */
  public function getAdditionalEcpuCountPerNode()
  {
    return $this->additionalEcpuCountPerNode;
  }
  /**
   * @param string
   */
  public function setClusterName($clusterName)
  {
    $this->clusterName = $clusterName;
  }
  /**
   * @return string
   */
  public function getClusterName()
  {
    return $this->clusterName;
  }
  /**
   * @param DataCollectionOptionsCommon
   */
  public function setDataCollectionOptions(DataCollectionOptionsCommon $dataCollectionOptions)
  {
    $this->dataCollectionOptions = $dataCollectionOptions;
  }
  /**
   * @return DataCollectionOptionsCommon
   */
  public function getDataCollectionOptions()
  {
    return $this->dataCollectionOptions;
  }
  /**
   * @param int
   */
  public function setEnabledEcpuCountPerNode($enabledEcpuCountPerNode)
  {
    $this->enabledEcpuCountPerNode = $enabledEcpuCountPerNode;
  }
  /**
   * @return int
   */
  public function getEnabledEcpuCountPerNode()
  {
    return $this->enabledEcpuCountPerNode;
  }
  /**
   * @param string
   */
  public function setExascaleDbStorageVault($exascaleDbStorageVault)
  {
    $this->exascaleDbStorageVault = $exascaleDbStorageVault;
  }
  /**
   * @return string
   */
  public function getExascaleDbStorageVault()
  {
    return $this->exascaleDbStorageVault;
  }
  /**
   * @param string
   */
  public function setGiVersion($giVersion)
  {
    $this->giVersion = $giVersion;
  }
  /**
   * @return string
   */
  public function getGiVersion()
  {
    return $this->giVersion;
  }
  /**
   * @param string
   */
  public function setGridImageId($gridImageId)
  {
    $this->gridImageId = $gridImageId;
  }
  /**
   * @return string
   */
  public function getGridImageId()
  {
    return $this->gridImageId;
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
  public function setOciUri($ociUri)
  {
    $this->ociUri = $ociUri;
  }
  /**
   * @return string
   */
  public function getOciUri()
  {
    return $this->ociUri;
  }
  /**
   * @param int
   */
  public function setScanListenerPortTcp($scanListenerPortTcp)
  {
    $this->scanListenerPortTcp = $scanListenerPortTcp;
  }
  /**
   * @return int
   */
  public function getScanListenerPortTcp()
  {
    return $this->scanListenerPortTcp;
  }
  /**
   * @param string
   */
  public function setShapeAttribute($shapeAttribute)
  {
    $this->shapeAttribute = $shapeAttribute;
  }
  /**
   * @return string
   */
  public function getShapeAttribute()
  {
    return $this->shapeAttribute;
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
  /**
   * @param ExadbVmClusterStorageDetails
   */
  public function setVmFileSystemStorage(ExadbVmClusterStorageDetails $vmFileSystemStorage)
  {
    $this->vmFileSystemStorage = $vmFileSystemStorage;
  }
  /**
   * @return ExadbVmClusterStorageDetails
   */
  public function getVmFileSystemStorage()
  {
    return $this->vmFileSystemStorage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExadbVmClusterProperties::class, 'Google_Service_OracleDatabase_ExadbVmClusterProperties');
