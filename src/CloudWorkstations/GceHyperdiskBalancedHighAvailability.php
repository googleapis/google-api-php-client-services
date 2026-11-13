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

namespace Google\Service\CloudWorkstations;

class GceHyperdiskBalancedHighAvailability extends \Google\Model
{
  /**
   * Do not use.
   */
  public const RECLAIM_POLICY_RECLAIM_POLICY_UNSPECIFIED = 'RECLAIM_POLICY_UNSPECIFIED';
  /**
   * Delete the persistent disk when deleting the workstation.
   */
  public const RECLAIM_POLICY_DELETE = 'DELETE';
  /**
   * Keep the persistent disk when deleting the workstation. An administrator
   * must manually delete the disk.
   */
  public const RECLAIM_POLICY_RETAIN = 'RETAIN';
  /**
   * Optional. Number of seconds to wait after initially creating or
   * subsequently shutting down the workstation before converting its disk into
   * a snapshot. This generally saves costs at the expense of greater startup
   * time on next workstation start, as the service will need to create a disk
   * from the archival snapshot. A value of `"0s"` indicates that the disk will
   * never be archived.
   *
   * @var string
   */
  public $archiveTimeout;
  /**
   * Optional. Maximum size in GB to which this persistent directory can be
   * resized. Defaults to `0`, which indicates no maximum limit is enforced by
   * this configuration. Resizing is still subject to the quotas and limits of
   * the underlying disk type.
   *
   * @var int
   */
  public $maxSizeGb;
  /**
   * Optional. Indicates how many IOPS to provision for the disk. This sets the
   * number of I/O operations per second that the disk can handle. Values must
   * be between 3,000 and 100,000.
   *
   * @var string
   */
  public $provisionedIops;
  /**
   * Optional. Indicates how much throughput to provision for the disk. This
   * sets the number of throughput MB per second that the disk can handle.
   * Values must be between 1 and 2,400.
   *
   * @var string
   */
  public $provisionedThroughput;
  /**
   * Optional. Whether the persistent disk should be deleted when the
   * workstation is deleted. Valid values are `DELETE` and `RETAIN`. Defaults to
   * `DELETE`.
   *
   * @var string
   */
  public $reclaimPolicy;
  /**
   * Optional. The GB capacity of a persistent home directory for each
   * workstation created with this configuration. Must be empty if
   * source_snapshot is set. Valid values are `10`, `50`, `100`, `200`, `500`,
   * or `1000`. Defaults to `200`.
   *
   * @var int
   */
  public $sizeGb;
  /**
   * Optional. Name of the snapshot to use as the source for the disk. If set,
   * size_gb must be empty. Must be formatted as ext4 file system with no
   * partitions.
   *
   * @var string
   */
  public $sourceSnapshot;

  /**
   * Optional. Number of seconds to wait after initially creating or
   * subsequently shutting down the workstation before converting its disk into
   * a snapshot. This generally saves costs at the expense of greater startup
   * time on next workstation start, as the service will need to create a disk
   * from the archival snapshot. A value of `"0s"` indicates that the disk will
   * never be archived.
   *
   * @param string $archiveTimeout
   */
  public function setArchiveTimeout($archiveTimeout)
  {
    $this->archiveTimeout = $archiveTimeout;
  }
  /**
   * @return string
   */
  public function getArchiveTimeout()
  {
    return $this->archiveTimeout;
  }
  /**
   * Optional. Maximum size in GB to which this persistent directory can be
   * resized. Defaults to `0`, which indicates no maximum limit is enforced by
   * this configuration. Resizing is still subject to the quotas and limits of
   * the underlying disk type.
   *
   * @param int $maxSizeGb
   */
  public function setMaxSizeGb($maxSizeGb)
  {
    $this->maxSizeGb = $maxSizeGb;
  }
  /**
   * @return int
   */
  public function getMaxSizeGb()
  {
    return $this->maxSizeGb;
  }
  /**
   * Optional. Indicates how many IOPS to provision for the disk. This sets the
   * number of I/O operations per second that the disk can handle. Values must
   * be between 3,000 and 100,000.
   *
   * @param string $provisionedIops
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
   * Optional. Indicates how much throughput to provision for the disk. This
   * sets the number of throughput MB per second that the disk can handle.
   * Values must be between 1 and 2,400.
   *
   * @param string $provisionedThroughput
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
   * Optional. Whether the persistent disk should be deleted when the
   * workstation is deleted. Valid values are `DELETE` and `RETAIN`. Defaults to
   * `DELETE`.
   *
   * Accepted values: RECLAIM_POLICY_UNSPECIFIED, DELETE, RETAIN
   *
   * @param self::RECLAIM_POLICY_* $reclaimPolicy
   */
  public function setReclaimPolicy($reclaimPolicy)
  {
    $this->reclaimPolicy = $reclaimPolicy;
  }
  /**
   * @return self::RECLAIM_POLICY_*
   */
  public function getReclaimPolicy()
  {
    return $this->reclaimPolicy;
  }
  /**
   * Optional. The GB capacity of a persistent home directory for each
   * workstation created with this configuration. Must be empty if
   * source_snapshot is set. Valid values are `10`, `50`, `100`, `200`, `500`,
   * or `1000`. Defaults to `200`.
   *
   * @param int $sizeGb
   */
  public function setSizeGb($sizeGb)
  {
    $this->sizeGb = $sizeGb;
  }
  /**
   * @return int
   */
  public function getSizeGb()
  {
    return $this->sizeGb;
  }
  /**
   * Optional. Name of the snapshot to use as the source for the disk. If set,
   * size_gb must be empty. Must be formatted as ext4 file system with no
   * partitions.
   *
   * @param string $sourceSnapshot
   */
  public function setSourceSnapshot($sourceSnapshot)
  {
    $this->sourceSnapshot = $sourceSnapshot;
  }
  /**
   * @return string
   */
  public function getSourceSnapshot()
  {
    return $this->sourceSnapshot;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GceHyperdiskBalancedHighAvailability::class, 'Google_Service_CloudWorkstations_GceHyperdiskBalancedHighAvailability');
