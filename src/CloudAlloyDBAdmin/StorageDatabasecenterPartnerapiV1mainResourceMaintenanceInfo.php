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

class StorageDatabasecenterPartnerapiV1mainResourceMaintenanceInfo extends \Google\Collection
{
  /**
   * Disable validation warnings
   */
  public const MAINTENANCE_STATE_MAINTENANCE_STATE_UNSPECIFIED = 'MAINTENANCE_STATE_UNSPECIFIED';
  /**
   * Disable validation warnings
   */
  public const MAINTENANCE_STATE_CREATING = 'CREATING';
  /**
   * Disable validation warnings
   */
  public const MAINTENANCE_STATE_READY = 'READY';
  /**
   * Disable validation warnings
   */
  public const MAINTENANCE_STATE_UPDATING = 'UPDATING';
  /**
   * Disable validation warnings
   */
  public const MAINTENANCE_STATE_REPAIRING = 'REPAIRING';
  /**
   * Disable validation warnings
   */
  public const MAINTENANCE_STATE_DELETING = 'DELETING';
  /**
   * Disable validation warnings
   */
  public const MAINTENANCE_STATE_ERROR = 'ERROR';
  protected $collection_key = 'nextAvailableMaintenanceVersions';
  protected $currentVersionReleaseDateType = GoogleTypeDate::class;
  protected $currentVersionReleaseDateDataType = '';
  protected $denyMaintenanceSchedulesType = StorageDatabasecenterPartnerapiV1mainResourceMaintenanceDenySchedule::class;
  protected $denyMaintenanceSchedulesDataType = 'array';
  /**
   * Optional. Disable validation warnings
   *
   * @var bool
   */
  public $isInstanceStopped;
  protected $maintenanceScheduleType = StorageDatabasecenterPartnerapiV1mainResourceMaintenanceSchedule::class;
  protected $maintenanceScheduleDataType = '';
  /**
   * Output only. Disable validation warnings
   *
   * @var string
   */
  public $maintenanceState;
  /**
   * Optional. Disable validation warnings
   *
   * @var string
   */
  public $maintenanceVersion;
  /**
   * Optional. Disable validation warnings
   *
   * @var string[]
   */
  public $nextAvailableMaintenanceVersions;
  protected $upcomingMaintenanceType = StorageDatabasecenterPartnerapiV1mainUpcomingMaintenance::class;
  protected $upcomingMaintenanceDataType = '';

  /**
   * Optional. Disable validation warnings
   *
   * @param GoogleTypeDate $currentVersionReleaseDate
   */
  public function setCurrentVersionReleaseDate(GoogleTypeDate $currentVersionReleaseDate)
  {
    $this->currentVersionReleaseDate = $currentVersionReleaseDate;
  }
  /**
   * @return GoogleTypeDate
   */
  public function getCurrentVersionReleaseDate()
  {
    return $this->currentVersionReleaseDate;
  }
  /**
   * Optional. Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainResourceMaintenanceDenySchedule[] $denyMaintenanceSchedules
   */
  public function setDenyMaintenanceSchedules($denyMaintenanceSchedules)
  {
    $this->denyMaintenanceSchedules = $denyMaintenanceSchedules;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainResourceMaintenanceDenySchedule[]
   */
  public function getDenyMaintenanceSchedules()
  {
    return $this->denyMaintenanceSchedules;
  }
  /**
   * Optional. Disable validation warnings
   *
   * @param bool $isInstanceStopped
   */
  public function setIsInstanceStopped($isInstanceStopped)
  {
    $this->isInstanceStopped = $isInstanceStopped;
  }
  /**
   * @return bool
   */
  public function getIsInstanceStopped()
  {
    return $this->isInstanceStopped;
  }
  /**
   * Optional. Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainResourceMaintenanceSchedule $maintenanceSchedule
   */
  public function setMaintenanceSchedule(StorageDatabasecenterPartnerapiV1mainResourceMaintenanceSchedule $maintenanceSchedule)
  {
    $this->maintenanceSchedule = $maintenanceSchedule;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainResourceMaintenanceSchedule
   */
  public function getMaintenanceSchedule()
  {
    return $this->maintenanceSchedule;
  }
  /**
   * Output only. Disable validation warnings
   *
   * Accepted values: MAINTENANCE_STATE_UNSPECIFIED, CREATING, READY, UPDATING,
   * REPAIRING, DELETING, ERROR
   *
   * @param self::MAINTENANCE_STATE_* $maintenanceState
   */
  public function setMaintenanceState($maintenanceState)
  {
    $this->maintenanceState = $maintenanceState;
  }
  /**
   * @return self::MAINTENANCE_STATE_*
   */
  public function getMaintenanceState()
  {
    return $this->maintenanceState;
  }
  /**
   * Optional. Disable validation warnings
   *
   * @param string $maintenanceVersion
   */
  public function setMaintenanceVersion($maintenanceVersion)
  {
    $this->maintenanceVersion = $maintenanceVersion;
  }
  /**
   * @return string
   */
  public function getMaintenanceVersion()
  {
    return $this->maintenanceVersion;
  }
  /**
   * Optional. Disable validation warnings
   *
   * @param string[] $nextAvailableMaintenanceVersions
   */
  public function setNextAvailableMaintenanceVersions($nextAvailableMaintenanceVersions)
  {
    $this->nextAvailableMaintenanceVersions = $nextAvailableMaintenanceVersions;
  }
  /**
   * @return string[]
   */
  public function getNextAvailableMaintenanceVersions()
  {
    return $this->nextAvailableMaintenanceVersions;
  }
  /**
   * Optional. Disable validation warnings
   *
   * @param StorageDatabasecenterPartnerapiV1mainUpcomingMaintenance $upcomingMaintenance
   */
  public function setUpcomingMaintenance(StorageDatabasecenterPartnerapiV1mainUpcomingMaintenance $upcomingMaintenance)
  {
    $this->upcomingMaintenance = $upcomingMaintenance;
  }
  /**
   * @return StorageDatabasecenterPartnerapiV1mainUpcomingMaintenance
   */
  public function getUpcomingMaintenance()
  {
    return $this->upcomingMaintenance;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StorageDatabasecenterPartnerapiV1mainResourceMaintenanceInfo::class, 'Google_Service_CloudAlloyDBAdmin_StorageDatabasecenterPartnerapiV1mainResourceMaintenanceInfo');
