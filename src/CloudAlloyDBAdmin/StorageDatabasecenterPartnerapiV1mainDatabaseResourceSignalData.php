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

class StorageDatabasecenterPartnerapiV1mainDatabaseResourceSignalData extends \Google\Collection
{
  /**
   * Disable validation warnings
   */
  public const SIGNAL_STATE_SIGNAL_STATE_UNSPECIFIED = 'SIGNAL_STATE_UNSPECIFIED';
  /**
   * Disable validation warnings
   */
  public const SIGNAL_STATE_ACTIVE = 'ACTIVE';
  /**
   * Disable validation warnings
   */
  public const SIGNAL_STATE_INACTIVE = 'INACTIVE';
  /**
   * Disable validation warnings
   */
  public const SIGNAL_STATE_DISMISSED = 'DISMISSED';
  /**
   * Disable validation warnings
   */
  public const SIGNAL_TYPE_SIGNAL_TYPE_UNSPECIFIED = 'SIGNAL_TYPE_UNSPECIFIED';
  /**
   * Disable validation warnings
   */
  public const SIGNAL_TYPE_SIGNAL_TYPE_OUTDATED_MINOR_VERSION = 'SIGNAL_TYPE_OUTDATED_MINOR_VERSION';
  /**
   * Disable validation warnings
   */
  public const SIGNAL_TYPE_SIGNAL_TYPE_DATABASE_AUDITING_DISABLED = 'SIGNAL_TYPE_DATABASE_AUDITING_DISABLED';
  /**
   * Disable validation warnings
   */
  public const SIGNAL_TYPE_SIGNAL_TYPE_NO_ROOT_PASSWORD = 'SIGNAL_TYPE_NO_ROOT_PASSWORD';
  /**
   * Disable validation warnings
   */
  public const SIGNAL_TYPE_SIGNAL_TYPE_EXPOSED_TO_PUBLIC_ACCESS = 'SIGNAL_TYPE_EXPOSED_TO_PUBLIC_ACCESS';
  /**
   * Disable validation warnings
   */
  public const SIGNAL_TYPE_SIGNAL_TYPE_UNENCRYPTED_CONNECTIONS = 'SIGNAL_TYPE_UNENCRYPTED_CONNECTIONS';
  /**
   * Disable validation warnings
   */
  public const SIGNAL_TYPE_SIGNAL_TYPE_EXTENDED_SUPPORT = 'SIGNAL_TYPE_EXTENDED_SUPPORT';
  /**
   * Disable validation warnings
   */
  public const SIGNAL_TYPE_SIGNAL_TYPE_NO_AUTOMATED_BACKUP_POLICY = 'SIGNAL_TYPE_NO_AUTOMATED_BACKUP_POLICY';
  /**
   * Disable validation warnings
   */
  public const SIGNAL_TYPE_SIGNAL_TYPE_VERSION_NEARING_END_OF_LIFE = 'SIGNAL_TYPE_VERSION_NEARING_END_OF_LIFE';
  /**
   * Disable validation warnings
   */
  public const SIGNAL_TYPE_SIGNAL_TYPE_LAST_BACKUP_OLD = 'SIGNAL_TYPE_LAST_BACKUP_OLD';
  /**
   * Disable validation warnings
   */
  public const SIGNAL_TYPE_SIGNAL_TYPE_NOT_PROTECTED_BY_AUTOMATIC_FAILOVER = 'SIGNAL_TYPE_NOT_PROTECTED_BY_AUTOMATIC_FAILOVER';
  protected $collection_key = 'signalMetadataList';
  protected $backupRunType = StorageDatabasecenterPartnerapiV1mainBackupRun::class;
  protected $backupRunDataType = '';
  /**
   * Required. Disable validation warnings
   *
   * @var string
   */
  public $fullResourceName;
  /**
   * Required. Disable validation warnings
   *
   * @var string
   */
  public $lastRefreshTime;
  /**
   * Required. Disable validation warnings
   *
   * @var string
   */
  public $location;
  protected $resourceIdType = StorageDatabasecenterPartnerapiV1mainDatabaseResourceId::class;
  protected $resourceIdDataType = '';
  /**
   * Disable validation warnings
   *
   * @deprecated
   * @var bool
   */
  public $signalBoolValue;
  protected $signalMetadataListType = StorageDatabasecenterPartnerapiV1mainSignalMetadata::class;
  protected $signalMetadataListDataType = 'array';
  /**
   * Required. Output only. Disable validation warnings
   *
   * @var string
   */
  public $signalState;
  /**
   * Required. Disable validation warnings
   *
   * @var string
   */
  public $signalType;

  /**
   * Disable validation warnings
   *
   * @deprecated
   * @param StorageDatabasecenterPartnerapiV1mainBackupRun $backupRun
   */
  public function setBackupRun(StorageDatabasecenterPartnerapiV1mainBackupRun $backupRun)
  {
    $this->backupRun = $backupRun;
  }
  /**
   * @deprecated
   * @return StorageDatabasecenterPartnerapiV1mainBackupRun
   */
  public function getBackupRun()
  {
    return $this->backupRun;
  }
  /**
   * Required. Disable validation warnings
   *
   * @param string $fullResourceName
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
   * Required. Disable validation warnings
   *
   * @param string $lastRefreshTime
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
   * Required. Disable validation warnings
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
   * @param StorageDatabasecenterPartnerapiV1mainDatabaseResourceId $resourceId
   */
  public function setResourceId(StorageDatabasecenterPartnerapiV1mainDatabaseResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainDatabaseResourceId
   */
  public function getResourceId()
  {
    return $this->resourceId;
  }
  /**
   * Disable validation warnings
   *
   * @deprecated
   * @param bool $signalBoolValue
   */
  public function setSignalBoolValue($signalBoolValue)
  {
    $this->signalBoolValue = $signalBoolValue;
  }
  /**
   * @deprecated
   * @return bool
   */
  public function getSignalBoolValue()
  {
    return $this->signalBoolValue;
  }
  /**
   * Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainSignalMetadata[] $signalMetadataList
   */
  public function setSignalMetadataList($signalMetadataList)
  {
    $this->signalMetadataList = $signalMetadataList;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainSignalMetadata[]
   */
  public function getSignalMetadataList()
  {
    return $this->signalMetadataList;
  }
  /**
   * Required. Output only. Disable validation warnings
   *
   * Accepted values: SIGNAL_STATE_UNSPECIFIED, ACTIVE, INACTIVE, DISMISSED
   *
   * @param self::SIGNAL_STATE_* $signalState
   */
  public function setSignalState($signalState)
  {
    $this->signalState = $signalState;
  }
  /**
   * @return self::SIGNAL_STATE_*
   */
  public function getSignalState()
  {
    return $this->signalState;
  }
  /**
   * Required. Disable validation warnings
   *
   * Accepted values: SIGNAL_TYPE_UNSPECIFIED,
   * SIGNAL_TYPE_OUTDATED_MINOR_VERSION, SIGNAL_TYPE_DATABASE_AUDITING_DISABLED,
   * SIGNAL_TYPE_NO_ROOT_PASSWORD, SIGNAL_TYPE_EXPOSED_TO_PUBLIC_ACCESS,
   * SIGNAL_TYPE_UNENCRYPTED_CONNECTIONS, SIGNAL_TYPE_EXTENDED_SUPPORT,
   * SIGNAL_TYPE_NO_AUTOMATED_BACKUP_POLICY,
   * SIGNAL_TYPE_VERSION_NEARING_END_OF_LIFE, SIGNAL_TYPE_LAST_BACKUP_OLD,
   * SIGNAL_TYPE_NOT_PROTECTED_BY_AUTOMATIC_FAILOVER
   *
   * @param self::SIGNAL_TYPE_* $signalType
   */
  public function setSignalType($signalType)
  {
    $this->signalType = $signalType;
  }
  /**
   * @return self::SIGNAL_TYPE_*
   */
  public function getSignalType()
  {
    return $this->signalType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StorageDatabasecenterPartnerapiV1mainDatabaseResourceSignalData::class, 'Google_Service_CloudAlloyDBAdmin_StorageDatabasecenterPartnerapiV1mainDatabaseResourceSignalData');
