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

class PeriodicPartialMaintenanceSchedule extends \Google\Model
{
  /**
   * Default value.
   */
  public const SUB_TYPE_MAINTENANCE_SUBTYPE_UNSPECIFIED = 'MAINTENANCE_SUBTYPE_UNSPECIFIED';
  /**
   * A dedicated window for customers to perform their own maintenance. This
   * often runs concurrently with a DISRUPTIVE_UPGRADE.
   */
  public const SUB_TYPE_MAINTENANCE_TYPE_CUSTOMER_MAINTENANCE = 'MAINTENANCE_TYPE_CUSTOMER_MAINTENANCE';
  /**
   * For disruptive updates, including host machine kernel or firmware upgrades.
   */
  public const SUB_TYPE_MAINTENANCE_TYPE_DISRUPTIVE_UPGRADE = 'MAINTENANCE_TYPE_DISRUPTIVE_UPGRADE';
  /**
   * A post-maintenance window for customers to conduct final testing and
   * performance validation before resuming full business operations.
   */
  public const SUB_TYPE_MAINTENANCE_TYPE_STABLE = 'MAINTENANCE_TYPE_STABLE';
  /**
   * For preliminary, non-disruptive tasks such as key rotations.
   */
  public const SUB_TYPE_MAINTENANCE_TYPE_TRANSITION = 'MAINTENANCE_TYPE_TRANSITION';
  /**
   * Default value.
   */
  public const TYPE_MAINTENANCE_TYPE_UNSPECIFIED = 'MAINTENANCE_TYPE_UNSPECIFIED';
  /**
   * The zone is in a private maintenance window.
   */
  public const TYPE_PRIVATE_ZONE_MAINTENANCE = 'PRIVATE_ZONE_MAINTENANCE';
  /**
   * The maintenance type in which the zone is during the given window.
   *
   * @var string
   */
  public $subType;
  /**
   * The target resource that the maintenance window is for. For example,
   * "projects/my-project/zones/us-central1-a".
   *
   * @var string
   */
  public $targetResource;
  /**
   * @var string
   */
  public $type;
  protected $windowEndTimeType = DateTime::class;
  protected $windowEndTimeDataType = '';
  protected $windowStartTimeType = DateTime::class;
  protected $windowStartTimeDataType = '';

  /**
   * The maintenance type in which the zone is during the given window.
   *
   * Accepted values: MAINTENANCE_SUBTYPE_UNSPECIFIED,
   * MAINTENANCE_TYPE_CUSTOMER_MAINTENANCE, MAINTENANCE_TYPE_DISRUPTIVE_UPGRADE,
   * MAINTENANCE_TYPE_STABLE, MAINTENANCE_TYPE_TRANSITION
   *
   * @param self::SUB_TYPE_* $subType
   */
  public function setSubType($subType)
  {
    $this->subType = $subType;
  }
  /**
   * @return self::SUB_TYPE_*
   */
  public function getSubType()
  {
    return $this->subType;
  }
  /**
   * The target resource that the maintenance window is for. For example,
   * "projects/my-project/zones/us-central1-a".
   *
   * @param string $targetResource
   */
  public function setTargetResource($targetResource)
  {
    $this->targetResource = $targetResource;
  }
  /**
   * @return string
   */
  public function getTargetResource()
  {
    return $this->targetResource;
  }
  /**
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * The end civil timestamp of the window (not inclusive). This contains a time
   * zone.
   *
   * @param DateTime $windowEndTime
   */
  public function setWindowEndTime(DateTime $windowEndTime)
  {
    $this->windowEndTime = $windowEndTime;
  }
  /**
   * @return DateTime
   */
  public function getWindowEndTime()
  {
    return $this->windowEndTime;
  }
  /**
   * The start civil timestamp of the window. This contains a time zone.
   *
   * @param DateTime $windowStartTime
   */
  public function setWindowStartTime(DateTime $windowStartTime)
  {
    $this->windowStartTime = $windowStartTime;
  }
  /**
   * @return DateTime
   */
  public function getWindowStartTime()
  {
    return $this->windowStartTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PeriodicPartialMaintenanceSchedule::class, 'Google_Service_Compute_PeriodicPartialMaintenanceSchedule');
