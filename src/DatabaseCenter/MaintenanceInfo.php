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

namespace Google\Service\DatabaseCenter;

class MaintenanceInfo extends \Google\Collection
{
  /**
   * Status is unspecified.
   */
  public const STATE_MAINTENANCE_STATE_UNSPECIFIED = 'MAINTENANCE_STATE_UNSPECIFIED';
  /**
   * Maintenance is scheduled.
   */
  public const STATE_MAINTENANCE_STATE_SCHEDULED = 'MAINTENANCE_STATE_SCHEDULED';
  /**
   * Maintenance is in progress.
   */
  public const STATE_MAINTENANCE_STATE_IN_PROGRESS = 'MAINTENANCE_STATE_IN_PROGRESS';
  /**
   * Maintenance is completed.
   */
  public const STATE_MAINTENANCE_STATE_COMPLETED = 'MAINTENANCE_STATE_COMPLETED';
  /**
   * Maintenance has failed.
   */
  public const STATE_MAINTENANCE_STATE_FAILED = 'MAINTENANCE_STATE_FAILED';
  protected $collection_key = 'possibleFailureReasons';
  protected $currentVersionReleaseDateType = Date::class;
  protected $currentVersionReleaseDateDataType = '';
  protected $denyMaintenanceSchedulesType = ResourceMaintenanceDenySchedule::class;
  protected $denyMaintenanceSchedulesDataType = 'array';
  protected $maintenanceScheduleType = ResourceMaintenanceSchedule::class;
  protected $maintenanceScheduleDataType = '';
  /**
   * Output only. Current Maintenance version of the database resource. Example:
   * "MYSQL_8_0_41.R20250531.01_15"
   *
   * @var string
   */
  public $maintenanceVersion;
  /**
   * Output only. List of possible reasons why the maintenance is not completed.
   * This is an optional field and is only populated if there are any reasons
   * for failures recorded for the maintenance by DB Center. FAILURE maintenance
   * status may not always have a failure reason.
   *
   * @var string[]
   */
  public $possibleFailureReasons;
  /**
   * Output only. Previous maintenance version of the database resource.
   * Example: "MYSQL_8_0_41.R20250531.01_15". This is available once a minor
   * version maintenance is complete on a database resource.
   *
   * @var string
   */
  public $previousMaintenanceVersion;
  /**
   * Output only. Resource maintenance state. This is to capture the current
   * state of the maintenance.
   *
   * @var string
   */
  public $state;
  protected $upcomingMaintenanceType = UpcomingMaintenance::class;
  protected $upcomingMaintenanceDataType = '';

  /**
   * Output only. The date when the maintenance version was released.
   *
   * @param Date $currentVersionReleaseDate
   */
  public function setCurrentVersionReleaseDate(Date $currentVersionReleaseDate)
  {
    $this->currentVersionReleaseDate = $currentVersionReleaseDate;
  }
  /**
   * @return Date
   */
  public function getCurrentVersionReleaseDate()
  {
    return $this->currentVersionReleaseDate;
  }
  /**
   * Optional. List of Deny maintenance period for the database resource.
   *
   * @param ResourceMaintenanceDenySchedule[] $denyMaintenanceSchedules
   */
  public function setDenyMaintenanceSchedules($denyMaintenanceSchedules)
  {
    $this->denyMaintenanceSchedules = $denyMaintenanceSchedules;
  }
  /**
   * @return ResourceMaintenanceDenySchedule[]
   */
  public function getDenyMaintenanceSchedules()
  {
    return $this->denyMaintenanceSchedules;
  }
  /**
   * Optional. Maintenance window for the database resource.
   *
   * @param ResourceMaintenanceSchedule $maintenanceSchedule
   */
  public function setMaintenanceSchedule(ResourceMaintenanceSchedule $maintenanceSchedule)
  {
    $this->maintenanceSchedule = $maintenanceSchedule;
  }
  /**
   * @return ResourceMaintenanceSchedule
   */
  public function getMaintenanceSchedule()
  {
    return $this->maintenanceSchedule;
  }
  /**
   * Output only. Current Maintenance version of the database resource. Example:
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
   * Output only. List of possible reasons why the maintenance is not completed.
   * This is an optional field and is only populated if there are any reasons
   * for failures recorded for the maintenance by DB Center. FAILURE maintenance
   * status may not always have a failure reason.
   *
   * @param string[] $possibleFailureReasons
   */
  public function setPossibleFailureReasons($possibleFailureReasons)
  {
    $this->possibleFailureReasons = $possibleFailureReasons;
  }
  /**
   * @return string[]
   */
  public function getPossibleFailureReasons()
  {
    return $this->possibleFailureReasons;
  }
  /**
   * Output only. Previous maintenance version of the database resource.
   * Example: "MYSQL_8_0_41.R20250531.01_15". This is available once a minor
   * version maintenance is complete on a database resource.
   *
   * @param string $previousMaintenanceVersion
   */
  public function setPreviousMaintenanceVersion($previousMaintenanceVersion)
  {
    $this->previousMaintenanceVersion = $previousMaintenanceVersion;
  }
  /**
   * @return string
   */
  public function getPreviousMaintenanceVersion()
  {
    return $this->previousMaintenanceVersion;
  }
  /**
   * Output only. Resource maintenance state. This is to capture the current
   * state of the maintenance.
   *
   * Accepted values: MAINTENANCE_STATE_UNSPECIFIED,
   * MAINTENANCE_STATE_SCHEDULED, MAINTENANCE_STATE_IN_PROGRESS,
   * MAINTENANCE_STATE_COMPLETED, MAINTENANCE_STATE_FAILED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. Upcoming maintenance window for the database resource. This is
   * only populated for an engine, if upcoming maintenance is scheduled for the
   * resource. This schedule is generated per engine and engine version, and
   * there is only one upcoming maintenance window at any given time. In case of
   * upcoming maintenance, the maintenance_state will be set to SCHEDULED first,
   * and then IN_PROGRESS when the maintenance window starts.
   *
   * @param UpcomingMaintenance $upcomingMaintenance
   */
  public function setUpcomingMaintenance(UpcomingMaintenance $upcomingMaintenance)
  {
    $this->upcomingMaintenance = $upcomingMaintenance;
  }
  /**
   * @return UpcomingMaintenance
   */
  public function getUpcomingMaintenance()
  {
    return $this->upcomingMaintenance;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MaintenanceInfo::class, 'Google_Service_DatabaseCenter_MaintenanceInfo');
