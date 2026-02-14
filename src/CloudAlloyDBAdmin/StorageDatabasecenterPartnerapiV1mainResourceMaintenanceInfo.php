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
   * Unspecified state.
   */
  public const MAINTENANCE_STATE_MAINTENANCE_STATE_UNSPECIFIED = 'MAINTENANCE_STATE_UNSPECIFIED';
  /**
   * Database resource is being created.
   */
  public const MAINTENANCE_STATE_CREATING = 'CREATING';
  /**
   * Database resource has been created and is ready to use.
   */
  public const MAINTENANCE_STATE_READY = 'READY';
  /**
   * Database resource is being updated.
   */
  public const MAINTENANCE_STATE_UPDATING = 'UPDATING';
  /**
   * Database resource is unheathy and under repair.
   */
  public const MAINTENANCE_STATE_REPAIRING = 'REPAIRING';
  /**
   * Database resource is being deleted.
   */
  public const MAINTENANCE_STATE_DELETING = 'DELETING';
  /**
   * Database resource encountered an error and is in indeterministic state.
   */
  public const MAINTENANCE_STATE_ERROR = 'ERROR';
  protected $collection_key = 'denyMaintenanceSchedules';
  protected $currentVersionReleaseDateType = GoogleTypeDate::class;
  protected $currentVersionReleaseDateDataType = '';
  protected $denyMaintenanceSchedulesType = StorageDatabasecenterPartnerapiV1mainResourceMaintenanceDenySchedule::class;
  protected $denyMaintenanceSchedulesDataType = 'array';
  /**
   * Optional. Whether the instance is in stopped state. This information is
   * temporarily being captured in maintenanceInfo, till STOPPED state is
   * supported by DB Center.
   *
   * @var bool
   */
  public $isInstanceStopped;
  protected $maintenanceScheduleType = StorageDatabasecenterPartnerapiV1mainResourceMaintenanceSchedule::class;
  protected $maintenanceScheduleDataType = '';
  /**
   * Output only. Current state of maintenance on the database resource.
   *
   * @var string
   */
  public $maintenanceState;
  /**
   * Optional. Current Maintenance version of the database resource. Example:
   * "MYSQL_8_0_41.R20250531.01_15"
   *
   * @var string
   */
  public $maintenanceVersion;
  protected $upcomingMaintenanceType = StorageDatabasecenterPartnerapiV1mainUpcomingMaintenance::class;
  protected $upcomingMaintenanceDataType = '';

  /**
   * Optional. The date when the current maintenance version was released.
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
   * Optional. List of Deny maintenance period for the database resource.
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
   * Optional. Whether the instance is in stopped state. This information is
   * temporarily being captured in maintenanceInfo, till STOPPED state is
   * supported by DB Center.
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
   * Optional. Maintenance window for the database resource.
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
   * Output only. Current state of maintenance on the database resource.
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
   * Optional. Current Maintenance version of the database resource. Example:
   * "MYSQL_8_0_41.R20250531.01_15"
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
   * Optional. Upcoming maintenance for the database resource. This field is
   * populated once SLM generates and publishes upcoming maintenance window.
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
