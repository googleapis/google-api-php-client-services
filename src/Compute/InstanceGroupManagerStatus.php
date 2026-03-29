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

class InstanceGroupManagerStatus extends \Google\Collection
{
  protected $collection_key = 'appliedAcceleratorTopologies';
  protected $allInstancesConfigType = InstanceGroupManagerStatusAllInstancesConfig::class;
  protected $allInstancesConfigDataType = '';
  protected $appliedAcceleratorTopologiesType = InstanceGroupManagerStatusAcceleratorTopology::class;
  protected $appliedAcceleratorTopologiesDataType = 'array';
  /**
   * Output only. The URL of theAutoscaler that targets this instance group
   * manager.
   *
   * @var string
   */
  public $autoscaler;
  protected $bulkInstanceOperationType = InstanceGroupManagerStatusBulkInstanceOperation::class;
  protected $bulkInstanceOperationDataType = '';
  protected $currentInstanceStatusesType = InstanceGroupManagerStatusInstanceStatusSummary::class;
  protected $currentInstanceStatusesDataType = '';
  /**
   * Output only. A bit indicating whether the managed instance group is in a
   * stable state. A stable state means that: none of the instances in the
   * managed instance group is currently undergoing any type of change (for
   * example, creation, restart, or deletion); no future changes are scheduled
   * for instances in the managed instance group; and the managed instance group
   * itself is not being modified.
   *
   * @var bool
   */
  public $isStable;
  protected $statefulType = InstanceGroupManagerStatusStateful::class;
  protected $statefulDataType = '';
  protected $versionTargetType = InstanceGroupManagerStatusVersionTarget::class;
  protected $versionTargetDataType = '';

  /**
   * Output only. Status of all-instances configuration on the group.
   *
   * @param InstanceGroupManagerStatusAllInstancesConfig $allInstancesConfig
   */
  public function setAllInstancesConfig(InstanceGroupManagerStatusAllInstancesConfig $allInstancesConfig)
  {
    $this->allInstancesConfig = $allInstancesConfig;
  }
  /**
   * @return InstanceGroupManagerStatusAllInstancesConfig
   */
  public function getAllInstancesConfig()
  {
    return $this->allInstancesConfig;
  }
  /**
   * Output only. The accelerator topology applied to this MIG. Currently only
   * one accelerator topology is supported.
   *
   * @param InstanceGroupManagerStatusAcceleratorTopology[] $appliedAcceleratorTopologies
   */
  public function setAppliedAcceleratorTopologies($appliedAcceleratorTopologies)
  {
    $this->appliedAcceleratorTopologies = $appliedAcceleratorTopologies;
  }
  /**
   * @return InstanceGroupManagerStatusAcceleratorTopology[]
   */
  public function getAppliedAcceleratorTopologies()
  {
    return $this->appliedAcceleratorTopologies;
  }
  /**
   * Output only. The URL of theAutoscaler that targets this instance group
   * manager.
   *
   * @param string $autoscaler
   */
  public function setAutoscaler($autoscaler)
  {
    $this->autoscaler = $autoscaler;
  }
  /**
   * @return string
   */
  public function getAutoscaler()
  {
    return $this->autoscaler;
  }
  /**
   * Output only. The status of bulk instance operation.
   *
   * @param InstanceGroupManagerStatusBulkInstanceOperation $bulkInstanceOperation
   */
  public function setBulkInstanceOperation(InstanceGroupManagerStatusBulkInstanceOperation $bulkInstanceOperation)
  {
    $this->bulkInstanceOperation = $bulkInstanceOperation;
  }
  /**
   * @return InstanceGroupManagerStatusBulkInstanceOperation
   */
  public function getBulkInstanceOperation()
  {
    return $this->bulkInstanceOperation;
  }
  /**
   * Output only. The list of instance statuses and the number of instances in
   * this managed instance group that have the status. Currently only shown for
   * TPU MIGs
   *
   * @param InstanceGroupManagerStatusInstanceStatusSummary $currentInstanceStatuses
   */
  public function setCurrentInstanceStatuses(InstanceGroupManagerStatusInstanceStatusSummary $currentInstanceStatuses)
  {
    $this->currentInstanceStatuses = $currentInstanceStatuses;
  }
  /**
   * @return InstanceGroupManagerStatusInstanceStatusSummary
   */
  public function getCurrentInstanceStatuses()
  {
    return $this->currentInstanceStatuses;
  }
  /**
   * Output only. A bit indicating whether the managed instance group is in a
   * stable state. A stable state means that: none of the instances in the
   * managed instance group is currently undergoing any type of change (for
   * example, creation, restart, or deletion); no future changes are scheduled
   * for instances in the managed instance group; and the managed instance group
   * itself is not being modified.
   *
   * @param bool $isStable
   */
  public function setIsStable($isStable)
  {
    $this->isStable = $isStable;
  }
  /**
   * @return bool
   */
  public function getIsStable()
  {
    return $this->isStable;
  }
  /**
   * Output only. Stateful status of the given Instance Group Manager.
   *
   * @param InstanceGroupManagerStatusStateful $stateful
   */
  public function setStateful(InstanceGroupManagerStatusStateful $stateful)
  {
    $this->stateful = $stateful;
  }
  /**
   * @return InstanceGroupManagerStatusStateful
   */
  public function getStateful()
  {
    return $this->stateful;
  }
  /**
   * Output only. A status of consistency of Instances' versions with their
   * target version specified by version field on Instance Group Manager.
   *
   * @param InstanceGroupManagerStatusVersionTarget $versionTarget
   */
  public function setVersionTarget(InstanceGroupManagerStatusVersionTarget $versionTarget)
  {
    $this->versionTarget = $versionTarget;
  }
  /**
   * @return InstanceGroupManagerStatusVersionTarget
   */
  public function getVersionTarget()
  {
    return $this->versionTarget;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstanceGroupManagerStatus::class, 'Google_Service_Compute_InstanceGroupManagerStatus');
