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

class MachineConfig extends \Google\Model
{
  /**
   * Optional. Baseline slots for BigQuery Reservations. Baseline slots are in
   * increments of 50.
   *
   * @var string
   */
  public $baselineSlotCount;
  /**
   * Optional. Max slots for BigQuery Reservations. Max slots are in increments
   * of 50.
   *
   * @var string
   */
  public $maxReservationSlotCount;
  /**
   * Memory size in bytes.
   *
   * @var string
   */
  public $memorySizeBytes;
  /**
   * Optional. The number of Shards (if applicable).
   *
   * @var int
   */
  public $shardCount;
  /**
   * Optional. The number of vCPUs (if applicable).
   *
   * @var 
   */
  public $vcpuCount;

  /**
   * Optional. Baseline slots for BigQuery Reservations. Baseline slots are in
   * increments of 50.
   *
   * @param string $baselineSlotCount
   */
  public function setBaselineSlotCount($baselineSlotCount)
  {
    $this->baselineSlotCount = $baselineSlotCount;
  }
  /**
   * @return string
   */
  public function getBaselineSlotCount()
  {
    return $this->baselineSlotCount;
  }
  /**
   * Optional. Max slots for BigQuery Reservations. Max slots are in increments
   * of 50.
   *
   * @param string $maxReservationSlotCount
   */
  public function setMaxReservationSlotCount($maxReservationSlotCount)
  {
    $this->maxReservationSlotCount = $maxReservationSlotCount;
  }
  /**
   * @return string
   */
  public function getMaxReservationSlotCount()
  {
    return $this->maxReservationSlotCount;
  }
  /**
   * Memory size in bytes.
   *
   * @param string $memorySizeBytes
   */
  public function setMemorySizeBytes($memorySizeBytes)
  {
    $this->memorySizeBytes = $memorySizeBytes;
  }
  /**
   * @return string
   */
  public function getMemorySizeBytes()
  {
    return $this->memorySizeBytes;
  }
  /**
   * Optional. The number of Shards (if applicable).
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
class_alias(MachineConfig::class, 'Google_Service_DatabaseCenter_MachineConfig');
