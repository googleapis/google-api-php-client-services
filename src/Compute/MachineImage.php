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

namespace Google\Service\Compute;

class MachineImage extends \Google\Collection
{
  protected $collection_key = 'storageLocations';
  public $creationTimestamp;
  public $description;
  public $guestFlush;
  public $id;
  protected $instancePropertiesType = InstanceProperties::class;
  protected $instancePropertiesDataType = '';
  public $kind;
  protected $machineImageEncryptionKeyType = CustomerEncryptionKey::class;
  protected $machineImageEncryptionKeyDataType = '';
  public $name;
  public $satisfiesPzs;
  protected $savedDisksType = SavedDisk::class;
  protected $savedDisksDataType = 'array';
  public $selfLink;
  protected $sourceDiskEncryptionKeysType = SourceDiskEncryptionKey::class;
  protected $sourceDiskEncryptionKeysDataType = 'array';
  public $sourceInstance;
  protected $sourceInstancePropertiesType = SourceInstanceProperties::class;
  protected $sourceInstancePropertiesDataType = '';
  public $status;
  public $storageLocations;
  public $totalStorageBytes;

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setGuestFlush($guestFlush)
  {
    $this->guestFlush = $guestFlush;
  }
  public function getGuestFlush()
  {
    return $this->guestFlush;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param InstanceProperties
   */
  public function setInstanceProperties(InstanceProperties $instanceProperties)
  {
    $this->instanceProperties = $instanceProperties;
  }
  /**
   * @return InstanceProperties
   */
  public function getInstanceProperties()
  {
    return $this->instanceProperties;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param CustomerEncryptionKey
   */
  public function setMachineImageEncryptionKey(CustomerEncryptionKey $machineImageEncryptionKey)
  {
    $this->machineImageEncryptionKey = $machineImageEncryptionKey;
  }
  /**
   * @return CustomerEncryptionKey
   */
  public function getMachineImageEncryptionKey()
  {
    return $this->machineImageEncryptionKey;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setSatisfiesPzs($satisfiesPzs)
  {
    $this->satisfiesPzs = $satisfiesPzs;
  }
  public function getSatisfiesPzs()
  {
    return $this->satisfiesPzs;
  }
  /**
   * @param SavedDisk[]
   */
  public function setSavedDisks($savedDisks)
  {
    $this->savedDisks = $savedDisks;
  }
  /**
   * @return SavedDisk[]
   */
  public function getSavedDisks()
  {
    return $this->savedDisks;
  }
  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink()
  {
    return $this->selfLink;
  }
  /**
   * @param SourceDiskEncryptionKey[]
   */
  public function setSourceDiskEncryptionKeys($sourceDiskEncryptionKeys)
  {
    $this->sourceDiskEncryptionKeys = $sourceDiskEncryptionKeys;
  }
  /**
   * @return SourceDiskEncryptionKey[]
   */
  public function getSourceDiskEncryptionKeys()
  {
    return $this->sourceDiskEncryptionKeys;
  }
  public function setSourceInstance($sourceInstance)
  {
    $this->sourceInstance = $sourceInstance;
  }
  public function getSourceInstance()
  {
    return $this->sourceInstance;
  }
  /**
   * @param SourceInstanceProperties
   */
  public function setSourceInstanceProperties(SourceInstanceProperties $sourceInstanceProperties)
  {
    $this->sourceInstanceProperties = $sourceInstanceProperties;
  }
  /**
   * @return SourceInstanceProperties
   */
  public function getSourceInstanceProperties()
  {
    return $this->sourceInstanceProperties;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setStorageLocations($storageLocations)
  {
    $this->storageLocations = $storageLocations;
  }
  public function getStorageLocations()
  {
    return $this->storageLocations;
  }
  public function setTotalStorageBytes($totalStorageBytes)
  {
    $this->totalStorageBytes = $totalStorageBytes;
  }
  public function getTotalStorageBytes()
  {
    return $this->totalStorageBytes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MachineImage::class, 'Google_Service_Compute_MachineImage');
