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

class InstanceGroupManagerStatusAcceleratorTopology extends \Google\Model
{
  /**
   * The accelerator topology is being activated.
   */
  public const STATE_ACTIVATING = 'ACTIVATING';
  /**
   * The accelerator topology is active.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The accelerator topology is being deactivated.
   */
  public const STATE_DEACTIVATING = 'DEACTIVATING';
  /**
   * The accelerator topology failed.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * The configuration is incomplete and the accelerator topology cannot be
   * activated due to insufficient number of running VMs.
   */
  public const STATE_INCOMPLETE = 'INCOMPLETE';
  /**
   * The accelerator topology is being reactivated.
   */
  public const STATE_REACTIVATING = 'REACTIVATING';
  /**
   * Output only. Topology in the format of: "16x16", "4x4x4", etc. The value is
   * the same as configured in the WorkloadPolicy.
   *
   * @var string
   */
  public $acceleratorTopology;
  /**
   * Output only. The state of the accelerator topology.
   *
   * @var string
   */
  public $state;
  protected $stateDetailsType = InstanceGroupManagerStatusAcceleratorTopologyAcceleratorTopologyStateDetails::class;
  protected $stateDetailsDataType = '';

  /**
   * Output only. Topology in the format of: "16x16", "4x4x4", etc. The value is
   * the same as configured in the WorkloadPolicy.
   *
   * @param string $acceleratorTopology
   */
  public function setAcceleratorTopology($acceleratorTopology)
  {
    $this->acceleratorTopology = $acceleratorTopology;
  }
  /**
   * @return string
   */
  public function getAcceleratorTopology()
  {
    return $this->acceleratorTopology;
  }
  /**
   * Output only. The state of the accelerator topology.
   *
   * Accepted values: ACTIVATING, ACTIVE, DEACTIVATING, FAILED, INCOMPLETE,
   * REACTIVATING
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
   * Output only. The result of the latest accelerator topology state check.
   *
   * @param InstanceGroupManagerStatusAcceleratorTopologyAcceleratorTopologyStateDetails $stateDetails
   */
  public function setStateDetails(InstanceGroupManagerStatusAcceleratorTopologyAcceleratorTopologyStateDetails $stateDetails)
  {
    $this->stateDetails = $stateDetails;
  }
  /**
   * @return InstanceGroupManagerStatusAcceleratorTopologyAcceleratorTopologyStateDetails
   */
  public function getStateDetails()
  {
    return $this->stateDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstanceGroupManagerStatusAcceleratorTopology::class, 'Google_Service_Compute_InstanceGroupManagerStatusAcceleratorTopology');
