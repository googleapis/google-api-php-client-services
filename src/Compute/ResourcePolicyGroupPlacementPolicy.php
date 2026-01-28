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

class ResourcePolicyGroupPlacementPolicy extends \Google\Model
{
  /**
   * The interconnected chips are pre-configured at the time of VM creation.
   */
  public const ACCELERATOR_TOPOLOGY_MODE_AUTO_CONNECT = 'AUTO_CONNECT';
  /**
   * The interconnected chips are connected on demand. At the time of VM
   * creation, the chips are not connected.
   */
  public const ACCELERATOR_TOPOLOGY_MODE_PROVISION_ONLY = 'PROVISION_ONLY';
  public const COLLOCATION_COLLOCATED = 'COLLOCATED';
  public const COLLOCATION_UNSPECIFIED_COLLOCATION = 'UNSPECIFIED_COLLOCATION';
  /**
   * Specifies the connection mode for the accelerator topology. If not
   * specified, the default is AUTO_CONNECT.
   *
   * @var string
   */
  public $acceleratorTopologyMode;
  /**
   * The number of availability domains to spread instances across. If two
   * instances are in different availability domain, they are not in the same
   * low latency network.
   *
   * @var int
   */
  public $availabilityDomainCount;
  /**
   * Specifies network collocation
   *
   * @var string
   */
  public $collocation;
  /**
   * Specifies the shape of the GPU slice, in slice based GPU families eg. A4X.
   *
   * @var string
   */
  public $gpuTopology;
  /**
   * Number of VMs in this placement group. Google does not recommend that you
   * use this field unless you use a compact policy and you want your policy to
   * work only if it contains this exact number of VMs.
   *
   * @var int
   */
  public $vmCount;

  /**
   * Specifies the connection mode for the accelerator topology. If not
   * specified, the default is AUTO_CONNECT.
   *
   * Accepted values: AUTO_CONNECT, PROVISION_ONLY
   *
   * @param self::ACCELERATOR_TOPOLOGY_MODE_* $acceleratorTopologyMode
   */
  public function setAcceleratorTopologyMode($acceleratorTopologyMode)
  {
    $this->acceleratorTopologyMode = $acceleratorTopologyMode;
  }
  /**
   * @return self::ACCELERATOR_TOPOLOGY_MODE_*
   */
  public function getAcceleratorTopologyMode()
  {
    return $this->acceleratorTopologyMode;
  }
  /**
   * The number of availability domains to spread instances across. If two
   * instances are in different availability domain, they are not in the same
   * low latency network.
   *
   * @param int $availabilityDomainCount
   */
  public function setAvailabilityDomainCount($availabilityDomainCount)
  {
    $this->availabilityDomainCount = $availabilityDomainCount;
  }
  /**
   * @return int
   */
  public function getAvailabilityDomainCount()
  {
    return $this->availabilityDomainCount;
  }
  /**
   * Specifies network collocation
   *
   * Accepted values: COLLOCATED, UNSPECIFIED_COLLOCATION
   *
   * @param self::COLLOCATION_* $collocation
   */
  public function setCollocation($collocation)
  {
    $this->collocation = $collocation;
  }
  /**
   * @return self::COLLOCATION_*
   */
  public function getCollocation()
  {
    return $this->collocation;
  }
  /**
   * Specifies the shape of the GPU slice, in slice based GPU families eg. A4X.
   *
   * @param string $gpuTopology
   */
  public function setGpuTopology($gpuTopology)
  {
    $this->gpuTopology = $gpuTopology;
  }
  /**
   * @return string
   */
  public function getGpuTopology()
  {
    return $this->gpuTopology;
  }
  /**
   * Number of VMs in this placement group. Google does not recommend that you
   * use this field unless you use a compact policy and you want your policy to
   * work only if it contains this exact number of VMs.
   *
   * @param int $vmCount
   */
  public function setVmCount($vmCount)
  {
    $this->vmCount = $vmCount;
  }
  /**
   * @return int
   */
  public function getVmCount()
  {
    return $this->vmCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResourcePolicyGroupPlacementPolicy::class, 'Google_Service_Compute_ResourcePolicyGroupPlacementPolicy');
