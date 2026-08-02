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

class StorageDatabasecenterPartnerapiV1mainMachineConfiguration extends \Google\Model
{
  /**
   * Optional. Disable validation warnings
   *
   * @var string
   */
  public $baselineSlots;
  /**
   * Disable validation warnings
   *
   * @deprecated
   * @var int
   */
  public $cpuCount;
  /**
   * Optional. Disable validation warnings
   *
   * @var string
   */
  public $maxReservationSlots;
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $memorySizeInBytes;
  /**
   * Optional. Disable validation warnings
   *
   * @var int
   */
  public $shardCount;
  /**
   * Optional. Disable validation warnings
   *
   * @var 
   */
  public $vcpuCount;

  /**
   * Optional. Disable validation warnings
   *
   * @param string $baselineSlots
   */
  public function setBaselineSlots($baselineSlots)
  {
    $this->baselineSlots = $baselineSlots;
  }
  /**
   * @return string
   */
  public function getBaselineSlots()
  {
    return $this->baselineSlots;
  }
  /**
   * Disable validation warnings
   *
   * @deprecated
   * @param int $cpuCount
   */
  public function setCpuCount($cpuCount)
  {
    $this->cpuCount = $cpuCount;
  }
  /**
   * @deprecated
   * @return int
   */
  public function getCpuCount()
  {
    return $this->cpuCount;
  }
  /**
   * Optional. Disable validation warnings
   *
   * @param string $maxReservationSlots
   */
  public function setMaxReservationSlots($maxReservationSlots)
  {
    $this->maxReservationSlots = $maxReservationSlots;
  }
  /**
   * @return string
   */
  public function getMaxReservationSlots()
  {
    return $this->maxReservationSlots;
  }
  /**
   * Disable validation warnings
   *
   * @param string $memorySizeInBytes
   */
  public function setMemorySizeInBytes($memorySizeInBytes)
  {
    $this->memorySizeInBytes = $memorySizeInBytes;
  }
  /**
   * @return string
   */
  public function getMemorySizeInBytes()
  {
    return $this->memorySizeInBytes;
  }
  /**
   * Optional. Disable validation warnings
   *
   * @param int $shardCount
   */
  public function setShardCount($shardCount)
  {
    $this->shardCount = $shardCount;
  }
  /**
   * @return int
   */
  public function getShardCount()
  {
    return $this->shardCount;
  }
  public function setVcpuCount($vcpuCount)
  {
    $this->vcpuCount = $vcpuCount;
  }
  public function getVcpuCount()
  {
    return $this->vcpuCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StorageDatabasecenterPartnerapiV1mainMachineConfiguration::class, 'Google_Service_CloudAlloyDBAdmin_StorageDatabasecenterPartnerapiV1mainMachineConfiguration');
