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

namespace Google\Service\Container;

class RollbackSafeUpgradeStatus extends \Google\Model
{
  /**
   * MODE_UNSPECIFIED means it's in regular upgrade mode.
   */
  public const MODE_MODE_UNSPECIFIED = 'MODE_UNSPECIFIED';
  /**
   * KCP_MINOR_UPGRADE_ROLLBACK_SAFE_MODE means it's in rollback-safe mode after
   * a KCP minor version step-one upgrade.
   */
  public const MODE_KCP_MINOR_UPGRADE_ROLLBACK_SAFE_MODE = 'KCP_MINOR_UPGRADE_ROLLBACK_SAFE_MODE';
  /**
   * Output only. The rollback-safe mode expiration time.
   *
   * @var string
   */
  public $controlPlaneUpgradeRollbackEndTime;
  /**
   * Output only. The mode of the rollback-safe upgrade.
   *
   * @var string
   */
  public $mode;
  /**
   * Output only. The GKE version that the cluster previously used before step-
   * one upgrade.
   *
   * @var string
   */
  public $previousVersion;

  /**
   * Output only. The rollback-safe mode expiration time.
   *
   * @param string $controlPlaneUpgradeRollbackEndTime
   */
  public function setControlPlaneUpgradeRollbackEndTime($controlPlaneUpgradeRollbackEndTime)
  {
    $this->controlPlaneUpgradeRollbackEndTime = $controlPlaneUpgradeRollbackEndTime;
  }
  /**
   * @return string
   */
  public function getControlPlaneUpgradeRollbackEndTime()
  {
    return $this->controlPlaneUpgradeRollbackEndTime;
  }
  /**
   * Output only. The mode of the rollback-safe upgrade.
   *
   * Accepted values: MODE_UNSPECIFIED, KCP_MINOR_UPGRADE_ROLLBACK_SAFE_MODE
   *
   * @param self::MODE_* $mode
   */
  public function setMode($mode)
  {
    $this->mode = $mode;
  }
  /**
   * @return self::MODE_*
   */
  public function getMode()
  {
    return $this->mode;
  }
  /**
   * Output only. The GKE version that the cluster previously used before step-
   * one upgrade.
   *
   * @param string $previousVersion
   */
  public function setPreviousVersion($previousVersion)
  {
    $this->previousVersion = $previousVersion;
  }
  /**
   * @return string
   */
  public function getPreviousVersion()
  {
    return $this->previousVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RollbackSafeUpgradeStatus::class, 'Google_Service_Container_RollbackSafeUpgradeStatus');
