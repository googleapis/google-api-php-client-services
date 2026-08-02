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

class StorageDatabasecenterPartnerapiV1mainDatabaseResourceMetadata extends \Google\Collection
{
  /**
   * Disable validation warnings
   */
  public const CURRENT_STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Disable validation warnings
   */
  public const CURRENT_STATE_HEALTHY = 'HEALTHY';
  /**
   * Disable validation warnings
   */
  public const CURRENT_STATE_UNHEALTHY = 'UNHEALTHY';
  /**
   * Disable validation warnings
   */
  public const CURRENT_STATE_SUSPENDED = 'SUSPENDED';
  /**
   * Disable validation warnings
   */
  public const CURRENT_STATE_DELETED = 'DELETED';
  /**
   * Disable validation warnings
   */
  public const CURRENT_STATE_STATE_OTHER = 'STATE_OTHER';
  /**
   * Disable validation warnings
   */
  public const CURRENT_STATE_STOPPED = 'STOPPED';
  /**
   * Disable validation warnings
   */
  public const EDITION_EDITION_UNSPECIFIED = 'EDITION_UNSPECIFIED';
  /**
   * Disable validation warnings
   */
  public const EDITION_EDITION_ENTERPRISE = 'EDITION_ENTERPRISE';
  /**
   * Disable validation warnings
   */
  public const EDITION_EDITION_ENTERPRISE_PLUS = 'EDITION_ENTERPRISE_PLUS';
  /**
   * Disable validation warnings
   */
  public const EDITION_EDITION_STANDARD = 'EDITION_STANDARD';
  /**
   * Disable validation warnings
   */
  public const EXPECTED_STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Disable validation warnings
   */
  public const EXPECTED_STATE_HEALTHY = 'HEALTHY';
  /**
   * Disable validation warnings
   */
  public const EXPECTED_STATE_UNHEALTHY = 'UNHEALTHY';
  /**
   * Disable validation warnings
   */
  public const EXPECTED_STATE_SUSPENDED = 'SUSPENDED';
  /**
   * Disable validation warnings
   */
  public const EXPECTED_STATE_DELETED = 'DELETED';
  /**
   * Disable validation warnings
   */
  public const EXPECTED_STATE_STATE_OTHER = 'STATE_OTHER';
  /**
   * Disable validation warnings
   */
  public const EXPECTED_STATE_STOPPED = 'STOPPED';
  /**
   * Unspecified.
   *
   * @deprecated
   */
  public const INSTANCE_TYPE_INSTANCE_TYPE_UNSPECIFIED = 'INSTANCE_TYPE_UNSPECIFIED';
  /**
   * For rest of the other categories.
   */
  public const INSTANCE_TYPE_SUB_RESOURCE_TYPE_UNSPECIFIED = 'SUB_RESOURCE_TYPE_UNSPECIFIED';
  /**
   * A regular primary database instance.
   *
   * @deprecated
   */
  public const INSTANCE_TYPE_PRIMARY = 'PRIMARY';
  /**
   * A cluster or an instance acting as a secondary.
   *
   * @deprecated
   */
  public const INSTANCE_TYPE_SECONDARY = 'SECONDARY';
  /**
   * An instance acting as a read-replica.
   *
   * @deprecated
   */
  public const INSTANCE_TYPE_READ_REPLICA = 'READ_REPLICA';
  /**
   * For rest of the other categories.
   *
   * @deprecated
   */
  public const INSTANCE_TYPE_OTHER = 'OTHER';
  /**
   * A regular primary database instance.
   */
  public const INSTANCE_TYPE_SUB_RESOURCE_TYPE_PRIMARY = 'SUB_RESOURCE_TYPE_PRIMARY';
  /**
   * A cluster or an instance acting as a secondary.
   */
  public const INSTANCE_TYPE_SUB_RESOURCE_TYPE_SECONDARY = 'SUB_RESOURCE_TYPE_SECONDARY';
  /**
   * An instance acting as a read-replica.
   */
  public const INSTANCE_TYPE_SUB_RESOURCE_TYPE_READ_REPLICA = 'SUB_RESOURCE_TYPE_READ_REPLICA';
  /**
   * An instance acting as an external primary.
   */
  public const INSTANCE_TYPE_SUB_RESOURCE_TYPE_EXTERNAL_PRIMARY = 'SUB_RESOURCE_TYPE_EXTERNAL_PRIMARY';
  /**
   * An instance acting as Read Pool.
   */
  public const INSTANCE_TYPE_SUB_RESOURCE_TYPE_READ_POOL = 'SUB_RESOURCE_TYPE_READ_POOL';
  /**
   * Represents a reservation resource.
   */
  public const INSTANCE_TYPE_SUB_RESOURCE_TYPE_RESERVATION = 'SUB_RESOURCE_TYPE_RESERVATION';
  /**
   * Represents a dataset resource.
   */
  public const INSTANCE_TYPE_SUB_RESOURCE_TYPE_DATASET = 'SUB_RESOURCE_TYPE_DATASET';
  /**
   * For rest of the other categories.
   */
  public const INSTANCE_TYPE_SUB_RESOURCE_TYPE_OTHER = 'SUB_RESOURCE_TYPE_OTHER';
  /**
   * Suspension reason is unspecified.
   */
  public const SUSPENSION_REASON_SUSPENSION_REASON_UNSPECIFIED = 'SUSPENSION_REASON_UNSPECIFIED';
  /**
   * Wipeout hide event.
   */
  public const SUSPENSION_REASON_WIPEOUT_HIDE_EVENT = 'WIPEOUT_HIDE_EVENT';
  /**
   * Wipeout purge event.
   */
  public const SUSPENSION_REASON_WIPEOUT_PURGE_EVENT = 'WIPEOUT_PURGE_EVENT';
  /**
   * Billing disabled for project
   */
  public const SUSPENSION_REASON_BILLING_DISABLED = 'BILLING_DISABLED';
  /**
   * Abuse detected for resource
   */
  public const SUSPENSION_REASON_ABUSER_DETECTED = 'ABUSER_DETECTED';
  /**
   * Encryption key inaccessible.
   */
  public const SUSPENSION_REASON_ENCRYPTION_KEY_INACCESSIBLE = 'ENCRYPTION_KEY_INACCESSIBLE';
  /**
   * Replicated cluster encryption key inaccessible.
   */
  public const SUSPENSION_REASON_REPLICATED_CLUSTER_ENCRYPTION_KEY_INACCESSIBLE = 'REPLICATED_CLUSTER_ENCRYPTION_KEY_INACCESSIBLE';
  protected $collection_key = 'resourceFlags';
  /**
   * Disable validation warnings
   *
   * @var array[]
   */
  public $additionalMetadata;
  protected $availabilityConfigurationType = StorageDatabasecenterPartnerapiV1mainAvailabilityConfiguration::class;
  protected $availabilityConfigurationDataType = '';
  protected $backupConfigurationType = StorageDatabasecenterPartnerapiV1mainBackupConfiguration::class;
  protected $backupConfigurationDataType = '';
  protected $backupRunType = StorageDatabasecenterPartnerapiV1mainBackupRun::class;
  protected $backupRunDataType = '';
  protected $backupdrConfigurationType = StorageDatabasecenterPartnerapiV1mainBackupDRConfiguration::class;
  protected $backupdrConfigurationDataType = '';
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $creationTime;
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $currentState;
  protected $customMetadataType = StorageDatabasecenterPartnerapiV1mainCustomMetadataData::class;
  protected $customMetadataDataType = '';
  /**
   * Optional. Disable validation warnings
   *
   * @var string
   */
  public $edition;
  protected $entitlementsType = StorageDatabasecenterPartnerapiV1mainEntitlement::class;
  protected $entitlementsDataType = 'array';
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $expectedState;
  protected $gcbdrConfigurationType = StorageDatabasecenterPartnerapiV1mainGCBDRConfiguration::class;
  protected $gcbdrConfigurationDataType = '';
  protected $idType = StorageDatabasecenterPartnerapiV1mainDatabaseResourceId::class;
  protected $idDataType = '';
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $instanceType;
  /**
   * Disable validation warnings
   *
   * @var array[]
   */
  public $internalAdditionalMetadata;
  protected $ipAddressType = StorageDatabasecenterPartnerapiV1mainIpAddress::class;
  protected $ipAddressDataType = '';
  /**
   * Optional. Disable validation warnings
   *
   * @var bool
   */
  public $isDeletionProtectionEnabled;
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $location;
  protected $machineConfigurationType = StorageDatabasecenterPartnerapiV1mainMachineConfiguration::class;
  protected $machineConfigurationDataType = '';
  protected $maintenanceInfoType = StorageDatabasecenterPartnerapiV1mainResourceMaintenanceInfo::class;
  protected $maintenanceInfoDataType = '';
  /**
   * Optional. Disable validation warnings
   *
   * @var string[]
   */
  public $modes;
  protected $primaryResourceIdType = StorageDatabasecenterPartnerapiV1mainDatabaseResourceId::class;
  protected $primaryResourceIdDataType = '';
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $primaryResourceLocation;
  protected $productType = StorageDatabasecenterProtoCommonProduct::class;
  protected $productDataType = '';
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $resourceContainer;
  protected $resourceFlagsType = StorageDatabasecenterPartnerapiV1mainResourceFlags::class;
  protected $resourceFlagsDataType = 'array';
  /**
   * Required. Disable validation warnings
   *
   * @var string
   */
  public $resourceName;
  /**
   * Optional. Disable validation warnings
   *
   * @var string
   */
  public $suspensionReason;
  protected $tagsSetType = StorageDatabasecenterPartnerapiV1mainTags::class;
  protected $tagsSetDataType = '';
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $updationTime;
  protected $userLabelSetType = StorageDatabasecenterPartnerapiV1mainUserLabels::class;
  protected $userLabelSetDataType = '';
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $zone;

  /**
   * Disable validation warnings
   *
   * @param array[] $additionalMetadata
   */
  public function setAdditionalMetadata($additionalMetadata)
  {
    $this->additionalMetadata = $additionalMetadata;
  }
  /**
   * @return array[]
   */
  public function getAdditionalMetadata()
  {
    return $this->additionalMetadata;
  }
  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainAvailabilityConfiguration $availabilityConfiguration
   */
  public function setAvailabilityConfiguration(StorageDatabasecenterPartnerapiV1mainAvailabilityConfiguration $availabilityConfiguration)
  {
    $this->availabilityConfiguration = $availabilityConfiguration;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainAvailabilityConfiguration
   */
  public function getAvailabilityConfiguration()
  {
    return $this->availabilityConfiguration;
  }
  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainBackupConfiguration $backupConfiguration
   */
  public function setBackupConfiguration(StorageDatabasecenterPartnerapiV1mainBackupConfiguration $backupConfiguration)
  {
    $this->backupConfiguration = $backupConfiguration;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainBackupConfiguration
   */
  public function getBackupConfiguration()
  {
    return $this->backupConfiguration;
  }
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
   * Optional. Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainBackupDRConfiguration $backupdrConfiguration
   */
  public function setBackupdrConfiguration(StorageDatabasecenterPartnerapiV1mainBackupDRConfiguration $backupdrConfiguration)
  {
    $this->backupdrConfiguration = $backupdrConfiguration;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainBackupDRConfiguration
   */
  public function getBackupdrConfiguration()
  {
    return $this->backupdrConfiguration;
  }
  /**
   * Disable validation warnings
   *
   * @param string $creationTime
   */
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }
  /**
   * @return string
   */
  public function getCreationTime()
  {
    return $this->creationTime;
  }
  /**
   * Disable validation warnings
   *
   * Accepted values: STATE_UNSPECIFIED, HEALTHY, UNHEALTHY, SUSPENDED, DELETED,
   * STATE_OTHER, STOPPED
   *
   * @param self::CURRENT_STATE_* $currentState
   */
  public function setCurrentState($currentState)
  {
    $this->currentState = $currentState;
  }
  /**
   * @return self::CURRENT_STATE_*
   */
  public function getCurrentState()
  {
    return $this->currentState;
  }
  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainCustomMetadataData $customMetadata
   */
  public function setCustomMetadata(StorageDatabasecenterPartnerapiV1mainCustomMetadataData $customMetadata)
  {
    $this->customMetadata = $customMetadata;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainCustomMetadataData
   */
  public function getCustomMetadata()
  {
    return $this->customMetadata;
  }
  /**
   * Optional. Disable validation warnings
   *
   * Accepted values: EDITION_UNSPECIFIED, EDITION_ENTERPRISE,
   * EDITION_ENTERPRISE_PLUS, EDITION_STANDARD
   *
   * @param self::EDITION_* $edition
   */
  public function setEdition($edition)
  {
    $this->edition = $edition;
  }
  /**
   * @return self::EDITION_*
   */
  public function getEdition()
  {
    return $this->edition;
  }
  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainEntitlement[] $entitlements
   */
  public function setEntitlements($entitlements)
  {
    $this->entitlements = $entitlements;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainEntitlement[]
   */
  public function getEntitlements()
  {
    return $this->entitlements;
  }
  /**
   * Disable validation warnings
   *
   * Accepted values: STATE_UNSPECIFIED, HEALTHY, UNHEALTHY, SUSPENDED, DELETED,
   * STATE_OTHER, STOPPED
   *
   * @param self::EXPECTED_STATE_* $expectedState
   */
  public function setExpectedState($expectedState)
  {
    $this->expectedState = $expectedState;
  }
  /**
   * @return self::EXPECTED_STATE_*
   */
  public function getExpectedState()
  {
    return $this->expectedState;
  }
  /**
   * Disable validation warnings
   *
   * @deprecated
   * @param StorageDatabasecenterPartnerapiV1mainGCBDRConfiguration $gcbdrConfiguration
   */
  public function setGcbdrConfiguration(StorageDatabasecenterPartnerapiV1mainGCBDRConfiguration $gcbdrConfiguration)
  {
    $this->gcbdrConfiguration = $gcbdrConfiguration;
  }
  /**
   * @deprecated
   * @return StorageDatabasecenterPartnerapiV1mainGCBDRConfiguration
   */
  public function getGcbdrConfiguration()
  {
    return $this->gcbdrConfiguration;
  }
  /**
   * Required. Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainDatabaseResourceId $id
   */
  public function setId(StorageDatabasecenterPartnerapiV1mainDatabaseResourceId $id)
  {
    $this->id = $id;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainDatabaseResourceId
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Disable validation warnings
   *
   * Accepted values: INSTANCE_TYPE_UNSPECIFIED, SUB_RESOURCE_TYPE_UNSPECIFIED,
   * PRIMARY, SECONDARY, READ_REPLICA, OTHER, SUB_RESOURCE_TYPE_PRIMARY,
   * SUB_RESOURCE_TYPE_SECONDARY, SUB_RESOURCE_TYPE_READ_REPLICA,
   * SUB_RESOURCE_TYPE_EXTERNAL_PRIMARY, SUB_RESOURCE_TYPE_READ_POOL,
   * SUB_RESOURCE_TYPE_RESERVATION, SUB_RESOURCE_TYPE_DATASET,
   * SUB_RESOURCE_TYPE_OTHER
   *
   * @param self::INSTANCE_TYPE_* $instanceType
   */
  public function setInstanceType($instanceType)
  {
    $this->instanceType = $instanceType;
  }
  /**
   * @return self::INSTANCE_TYPE_*
   */
  public function getInstanceType()
  {
    return $this->instanceType;
  }
  /**
   * Disable validation warnings
   *
   * @param array[] $internalAdditionalMetadata
   */
  public function setInternalAdditionalMetadata($internalAdditionalMetadata)
  {
    $this->internalAdditionalMetadata = $internalAdditionalMetadata;
  }
  /**
   * @return array[]
   */
  public function getInternalAdditionalMetadata()
  {
    return $this->internalAdditionalMetadata;
  }
  /**
   * Optional. Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainIpAddress $ipAddress
   */
  public function setIpAddress(StorageDatabasecenterPartnerapiV1mainIpAddress $ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainIpAddress
   */
  public function getIpAddress()
  {
    return $this->ipAddress;
  }
  /**
   * Optional. Disable validation warnings
   *
   * @param bool $isDeletionProtectionEnabled
   */
  public function setIsDeletionProtectionEnabled($isDeletionProtectionEnabled)
  {
    $this->isDeletionProtectionEnabled = $isDeletionProtectionEnabled;
  }
  /**
   * @return bool
   */
  public function getIsDeletionProtectionEnabled()
  {
    return $this->isDeletionProtectionEnabled;
  }
  /**
   * Disable validation warnings
   *
   * @param string $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainMachineConfiguration $machineConfiguration
   */
  public function setMachineConfiguration(StorageDatabasecenterPartnerapiV1mainMachineConfiguration $machineConfiguration)
  {
    $this->machineConfiguration = $machineConfiguration;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainMachineConfiguration
   */
  public function getMachineConfiguration()
  {
    return $this->machineConfiguration;
  }
  /**
   * Optional. Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainResourceMaintenanceInfo $maintenanceInfo
   */
  public function setMaintenanceInfo(StorageDatabasecenterPartnerapiV1mainResourceMaintenanceInfo $maintenanceInfo)
  {
    $this->maintenanceInfo = $maintenanceInfo;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainResourceMaintenanceInfo
   */
  public function getMaintenanceInfo()
  {
    return $this->maintenanceInfo;
  }
  /**
   * Optional. Disable validation warnings
   *
   * @param string[] $modes
   */
  public function setModes($modes)
  {
    $this->modes = $modes;
  }
  /**
   * @return string[]
   */
  public function getModes()
  {
    return $this->modes;
  }
  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainDatabaseResourceId $primaryResourceId
   */
  public function setPrimaryResourceId(StorageDatabasecenterPartnerapiV1mainDatabaseResourceId $primaryResourceId)
  {
    $this->primaryResourceId = $primaryResourceId;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainDatabaseResourceId
   */
  public function getPrimaryResourceId()
  {
    return $this->primaryResourceId;
  }
  /**
   * Disable validation warnings
   *
   * @param string $primaryResourceLocation
   */
  public function setPrimaryResourceLocation($primaryResourceLocation)
  {
    $this->primaryResourceLocation = $primaryResourceLocation;
  }
  /**
   * @return string
   */
  public function getPrimaryResourceLocation()
  {
    return $this->primaryResourceLocation;
  }
  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterProtoCommonProduct $product
   */
  public function setProduct(StorageDatabasecenterProtoCommonProduct $product)
  {
    $this->product = $product;
  }
  /**
   * @return StorageDatabasecenterProtoCommonProduct
   */
  public function getProduct()
  {
    return $this->product;
  }
  /**
   * Disable validation warnings
   *
   * @param string $resourceContainer
   */
  public function setResourceContainer($resourceContainer)
  {
    $this->resourceContainer = $resourceContainer;
  }
  /**
   * @return string
   */
  public function getResourceContainer()
  {
    return $this->resourceContainer;
  }
  /**
   * Optional. Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainResourceFlags[] $resourceFlags
   */
  public function setResourceFlags($resourceFlags)
  {
    $this->resourceFlags = $resourceFlags;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainResourceFlags[]
   */
  public function getResourceFlags()
  {
    return $this->resourceFlags;
  }
  /**
   * Required. Disable validation warnings
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Optional. Disable validation warnings
   *
   * Accepted values: SUSPENSION_REASON_UNSPECIFIED, WIPEOUT_HIDE_EVENT,
   * WIPEOUT_PURGE_EVENT, BILLING_DISABLED, ABUSER_DETECTED,
   * ENCRYPTION_KEY_INACCESSIBLE, REPLICATED_CLUSTER_ENCRYPTION_KEY_INACCESSIBLE
   *
   * @param self::SUSPENSION_REASON_* $suspensionReason
   */
  public function setSuspensionReason($suspensionReason)
  {
    $this->suspensionReason = $suspensionReason;
  }
  /**
   * @return self::SUSPENSION_REASON_*
   */
  public function getSuspensionReason()
  {
    return $this->suspensionReason;
  }
  /**
   * Optional. Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainTags $tagsSet
   */
  public function setTagsSet(StorageDatabasecenterPartnerapiV1mainTags $tagsSet)
  {
    $this->tagsSet = $tagsSet;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainTags
   */
  public function getTagsSet()
  {
    return $this->tagsSet;
  }
  /**
   * Disable validation warnings
   *
   * @param string $updationTime
   */
  public function setUpdationTime($updationTime)
  {
    $this->updationTime = $updationTime;
  }
  /**
   * @return string
   */
  public function getUpdationTime()
  {
    return $this->updationTime;
  }
  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainUserLabels $userLabelSet
   */
  public function setUserLabelSet(StorageDatabasecenterPartnerapiV1mainUserLabels $userLabelSet)
  {
    $this->userLabelSet = $userLabelSet;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainUserLabels
   */
  public function getUserLabelSet()
  {
    return $this->userLabelSet;
  }
  /**
   * Disable validation warnings
   *
   * @param string $zone
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
class_alias(StorageDatabasecenterPartnerapiV1mainDatabaseResourceMetadata::class, 'Google_Service_CloudAlloyDBAdmin_StorageDatabasecenterPartnerapiV1mainDatabaseResourceMetadata');
