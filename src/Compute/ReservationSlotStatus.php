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

class ReservationSlotStatus extends \Google\Collection
{
  protected $collection_key = 'runningInstances';
  protected $physicalTopologyType = ReservationSlotPhysicalTopology::class;
  protected $physicalTopologyDataType = '';
  /**
   * Output only. The RDMA IP address of the physical host.
   *
   * @var string[]
   */
  public $rdmaIpAddresses;
  /**
   * Output only. The URIs of the instances currently running on this slot.
   *
   * @var string[]
   */
  public $runningInstances;

  /**
   * Output only. [Output Only] The physical topology of the reservation sub-
   * block.
   *
   * @param ReservationSlotPhysicalTopology $physicalTopology
   */
  public function setPhysicalTopology(ReservationSlotPhysicalTopology $physicalTopology)
  {
    $this->physicalTopology = $physicalTopology;
  }
  /**
   * @return ReservationSlotPhysicalTopology
   */
  public function getPhysicalTopology()
  {
    return $this->physicalTopology;
  }
  /**
   * Output only. The RDMA IP address of the physical host.
   *
   * @param string[] $rdmaIpAddresses
   */
  public function setRdmaIpAddresses($rdmaIpAddresses)
  {
    $this->rdmaIpAddresses = $rdmaIpAddresses;
  }
  /**
   * @return string[]
   */
  public function getRdmaIpAddresses()
  {
    return $this->rdmaIpAddresses;
  }
  /**
   * Output only. The URIs of the instances currently running on this slot.
   *
   * @param string[] $runningInstances
   */
  public function setRunningInstances($runningInstances)
  {
    $this->runningInstances = $runningInstances;
  }
  /**
   * @return string[]
   */
  public function getRunningInstances()
  {
    return $this->runningInstances;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReservationSlotStatus::class, 'Google_Service_Compute_ReservationSlotStatus');
