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

class VolumePool extends \Google\Model
{
  /**
   * State is not specified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Volume pool is available for use.
   */
  public const STATE_READY = 'READY';
  /**
   * Volume pool is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * Volume pool is in an invalid state.
   */
  public const STATE_INVALID = 'INVALID';
  /**
   * Optional. The number of active volumes. Default: 100.
   *
   * @var int
   */
  public $activeVolumeCount;
  /**
   * Optional. The number of IOPs provisioned per active volume.
   *
   * @var int
   */
  public $activeVolumeIops;
  /**
   * Optional. How long a volume stays `WARM` after it is deactivated before it
   * is automatically frozen (moved to `COLD`). Must be positive if set.
   * Default: 7 days.
   *
   * @var string
   */
  public $autoFreezeDelay;
  /**
   * Output only. The time when the volume pool was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. The default quota per volume in MiB. Must be between 100 MiB and
   * 102400 MiB (100 GiB). Default: 1024 MiB.
   *
   * @var int
   */
  public $defaultVolumeQuotaMib;
  /**
   * Optional. A description of the volume pool with 2048 characters or less.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. Resource labels to represent user provided metadata.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. The resource name of the volume pool, in the format
   * `projects/{project}/locations/{location}/volumePools/{volume_pool}`.
   *
   * @var string
   */
  public $name;
  /**
   * Required. The VPC network to which the VolumePool should be attached. Only
   * Private Service Connect (PSC) is supported.
   *
   * @var string
   */
  public $network;
  /**
   * Output only. The state of the volume pool.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. System-assigned unique identifier for the volume pool.
   *
   * @var string
   */
  public $uid;

  /**
   * Optional. The number of active volumes. Default: 100.
   *
   * @param int $activeVolumeCount
   */
  public function setActiveVolumeCount($activeVolumeCount)
  {
    $this->activeVolumeCount = $activeVolumeCount;
  }
  /**
   * @return int
   */
  public function getActiveVolumeCount()
  {
    return $this->activeVolumeCount;
  }
  /**
   * Optional. The number of IOPs provisioned per active volume.
   *
   * @param int $activeVolumeIops
   */
  public function setActiveVolumeIops($activeVolumeIops)
  {
    $this->activeVolumeIops = $activeVolumeIops;
  }
  /**
   * @return int
   */
  public function getActiveVolumeIops()
  {
    return $this->activeVolumeIops;
  }
  /**
   * Optional. How long a volume stays `WARM` after it is deactivated before it
   * is automatically frozen (moved to `COLD`). Must be positive if set.
   * Default: 7 days.
   *
   * @param string $autoFreezeDelay
   */
  public function setAutoFreezeDelay($autoFreezeDelay)
  {
    $this->autoFreezeDelay = $autoFreezeDelay;
  }
  /**
   * @return string
   */
  public function getAutoFreezeDelay()
  {
    return $this->autoFreezeDelay;
  }
  /**
   * Output only. The time when the volume pool was created.
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
   * Optional. The default quota per volume in MiB. Must be between 100 MiB and
   * 102400 MiB (100 GiB). Default: 1024 MiB.
   *
   * @param int $defaultVolumeQuotaMib
   */
  public function setDefaultVolumeQuotaMib($defaultVolumeQuotaMib)
  {
    $this->defaultVolumeQuotaMib = $defaultVolumeQuotaMib;
  }
  /**
   * @return int
   */
  public function getDefaultVolumeQuotaMib()
  {
    return $this->defaultVolumeQuotaMib;
  }
  /**
   * Optional. A description of the volume pool with 2048 characters or less.
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
   * Identifier. The resource name of the volume pool, in the format
   * `projects/{project}/locations/{location}/volumePools/{volume_pool}`.
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
   * Required. The VPC network to which the VolumePool should be attached. Only
   * Private Service Connect (PSC) is supported.
   *
   * @param string $network
   */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /**
   * @return string
   */
  public function getNetwork()
  {
    return $this->network;
  }
  /**
   * Output only. The state of the volume pool.
   *
   * Accepted values: STATE_UNSPECIFIED, READY, DELETING, INVALID
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
   * Output only. System-assigned unique identifier for the volume pool.
   *
   * @param string $uid
   */
  public function setUid($uid)
  {
    $this->uid = $uid;
  }
  /**
   * @return string
   */
  public function getUid()
  {
    return $this->uid;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VolumePool::class, 'Google_Service_CloudFilestore_VolumePool');
