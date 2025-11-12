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

class DiskBackupProperties extends \Google\Collection
{
  protected $collection_key = 'replicaZones';
  /**
   * @var string
   */
  public $accessMode;
  /**
   * @var string
   */
  public $architecture;
  /**
   * @var string
   */
  public $description;
  /**
   * @var bool
   */
  public $enableConfidentialCompute;
  protected $guestOsFeatureType = GuestOsFeature::class;
  protected $guestOsFeatureDataType = 'array';
  /**
   * @var string[]
   */
  public $labels;
  /**
   * @var string[]
   */
  public $licenses;
  /**
   * @var string
   */
  public $physicalBlockSizeBytes;
  /**
   * @var string
   */
  public $provisionedIops;
  /**
   * @var string
   */
  public $provisionedThroughput;
  /**
   * @var string
   */
  public $region;
  /**
   * @var string[]
   */
  public $replicaZones;
  /**
   * @var string
   */
  public $sizeGb;
  /**
   * @var string
   */
  public $sourceDisk;
  /**
   * @var string
   */
  public $storagePool;
  /**
   * @var string
   */
  public $type;
  /**
   * @var string
   */
  public $zone;

  /**
   * @param string
   */
  public function setAccessMode($accessMode)
  {
    $this->accessMode = $accessMode;
  }
  /**
   * @return string
   */
  public function getAccessMode()
  {
    return $this->accessMode;
  }
  /**
   * @param string
   */
  public function setArchitecture($architecture)
  {
    $this->architecture = $architecture;
  }
  /**
   * @return string
   */
  public function getArchitecture()
  {
    return $this->architecture;
  }
  /**
   * @param string
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param bool
   */
  public function setEnableConfidentialCompute($enableConfidentialCompute)
  {
    $this->enableConfidentialCompute = $enableConfidentialCompute;
  }
  /**
   * @return bool
   */
  public function getEnableConfidentialCompute()
  {
    return $this->enableConfidentialCompute;
  }
  /**
   * @param GuestOsFeature[]
   */
  public function setGuestOsFeature($guestOsFeature)
  {
    $this->guestOsFeature = $guestOsFeature;
  }
  /**
   * @return GuestOsFeature[]
   */
  public function getGuestOsFeature()
  {
    return $this->guestOsFeature;
  }
  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param string[]
   */
  public function setLicenses($licenses)
  {
    $this->licenses = $licenses;
  }
  /**
   * @return string[]
   */
  public function getLicenses()
  {
    return $this->licenses;
  }
  /**
   * @param string
   */
  public function setPhysicalBlockSizeBytes($physicalBlockSizeBytes)
  {
    $this->physicalBlockSizeBytes = $physicalBlockSizeBytes;
  }
  /**
   * @return string
   */
  public function getPhysicalBlockSizeBytes()
  {
    return $this->physicalBlockSizeBytes;
  }
  /**
   * @param string
   */
  public function setProvisionedIops($provisionedIops)
  {
    $this->provisionedIops = $provisionedIops;
  }
  /**
   * @return string
   */
  public function getProvisionedIops()
  {
    return $this->provisionedIops;
  }
  /**
   * @param string
   */
  public function setProvisionedThroughput($provisionedThroughput)
  {
    $this->provisionedThroughput = $provisionedThroughput;
  }
  /**
   * @return string
   */
  public function getProvisionedThroughput()
  {
    return $this->provisionedThroughput;
  }
  /**
   * @param string
   */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /**
   * @return string
   */
  public function getRegion()
  {
    return $this->region;
  }
  /**
   * @param string[]
   */
  public function setReplicaZones($replicaZones)
  {
    $this->replicaZones = $replicaZones;
  }
  /**
   * @return string[]
   */
  public function getReplicaZones()
  {
    return $this->replicaZones;
  }
  /**
   * @param string
   */
  public function setSizeGb($sizeGb)
  {
    $this->sizeGb = $sizeGb;
  }
  /**
   * @return string
   */
  public function getSizeGb()
  {
    return $this->sizeGb;
  }
  /**
   * @param string
   */
  public function setSourceDisk($sourceDisk)
  {
    $this->sourceDisk = $sourceDisk;
  }
  /**
   * @return string
   */
  public function getSourceDisk()
  {
    return $this->sourceDisk;
  }
  /**
   * @param string
   */
  public function setStoragePool($storagePool)
  {
    $this->storagePool = $storagePool;
  }
  /**
   * @return string
   */
  public function getStoragePool()
  {
    return $this->storagePool;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * @param string
   */
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  /**
   * @return string
   */
  public function getZone()
  {
    return $this->zone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DiskBackupProperties::class, 'Google_Service_Backupdr_DiskBackupProperties');
