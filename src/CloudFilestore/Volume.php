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

namespace Google\Service\CloudFilestore;

class Volume extends \Google\Collection
{
  /**
   * The state of the volume is unknown.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The volume is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The volume is hot and bound to a physical share.
   */
  public const STATE_HOT = 'HOT';
  /**
   * The volume is warm - volume is unmountable and doesn't count as an active
   * share, but is on hot storage.
   */
  public const STATE_WARM = 'WARM';
  /**
   * The volume is cold and released from its physical share.
   */
  public const STATE_COLD = 'COLD';
  protected $collection_key = 'ipAcls';
  /**
   * Output only. The time when the volume was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. A description of the volume with 2048 characters or less.
   * Requests with longer descriptions will be rejected.
   *
   * @var string
   */
  public $description;
  protected $ipAclsType = NfsExportOptions::class;
  protected $ipAclsDataType = 'array';
  /**
   * Optional. Resource labels to represent user provided metadata.
   *
   * @var string[]
   */
  public $labels;
  protected $mountPointType = MountPoint::class;
  protected $mountPointDataType = '';
  /**
   * Identifier. The resource name of the volume, in the format `projects/{proje
   * ct}/locations/{location}/volumePools/{volume_pool}/volumes/{volume}`.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. The maximum size of the volume in mebibytes (MiB).
   *
   * @var string
   */
  public $quotaMib;
  /**
   * Optional. The state of the volume. This field is caller-settable via
   * `UpdateVolume` to transition a volume from `HOT` to `COLD` (freezing the
   * volume). In `CreateVolume`, this field is output-only: the volume is
   * created as `HOT` when `ip_acls` is non-empty. When `ip_acls` is empty, the
   * volume may be created `WARM` with no `mount_point` until `ip_acls` are set
   * with `UpdateVolume`.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. The time when the volume was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. A description of the volume with 2048 characters or less.
   * Requests with longer descriptions will be rejected.
   *
   * @param string $description
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
   * Optional. User-defined permissions protecting mount points.
   *
   * @param NfsExportOptions[] $ipAcls
   */
  public function setIpAcls($ipAcls)
  {
    $this->ipAcls = $ipAcls;
  }
  /**
   * @return NfsExportOptions[]
   */
  public function getIpAcls()
  {
    return $this->ipAcls;
  }
  /**
   * Optional. Resource labels to represent user provided metadata.
   *
   * @param string[] $labels
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
   * Output only. The mount point of the volume.
   *
   * @param MountPoint $mountPoint
   */
  public function setMountPoint(MountPoint $mountPoint)
  {
    $this->mountPoint = $mountPoint;
  }
  /**
   * @return MountPoint
   */
  public function getMountPoint()
  {
    return $this->mountPoint;
  }
  /**
   * Identifier. The resource name of the volume, in the format `projects/{proje
   * ct}/locations/{location}/volumePools/{volume_pool}/volumes/{volume}`.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Optional. The maximum size of the volume in mebibytes (MiB).
   *
   * @param string $quotaMib
   */
  public function setQuotaMib($quotaMib)
  {
    $this->quotaMib = $quotaMib;
  }
  /**
   * @return string
   */
  public function getQuotaMib()
  {
    return $this->quotaMib;
  }
  /**
   * Optional. The state of the volume. This field is caller-settable via
   * `UpdateVolume` to transition a volume from `HOT` to `COLD` (freezing the
   * volume). In `CreateVolume`, this field is output-only: the volume is
   * created as `HOT` when `ip_acls` is non-empty. When `ip_acls` is empty, the
   * volume may be created `WARM` with no `mount_point` until `ip_acls` are set
   * with `UpdateVolume`.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, HOT, WARM, COLD
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Volume::class, 'Google_Service_CloudFilestore_Volume');
