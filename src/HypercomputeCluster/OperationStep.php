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

namespace Google\Service\HypercomputeCluster;

class OperationStep extends \Google\Model
{
  /**
   * Unspecified state.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Initial state before step execution starts.
   */
  public const STATE_WAITING = 'WAITING';
  /**
   * Step execution is running in progress.
   */
  public const STATE_IN_PROGRESS = 'IN_PROGRESS';
  /**
   * Step execution is completed.
   */
  public const STATE_DONE = 'DONE';
  protected $checkClusterHealthType = CheckClusterHealth::class;
  protected $checkClusterHealthDataType = '';
  protected $createFilestoreInstanceType = CreateFilestoreInstance::class;
  protected $createFilestoreInstanceDataType = '';
  protected $createLoginNodeType = CreateLoginNode::class;
  protected $createLoginNodeDataType = '';
  protected $createLustreInstanceType = CreateLustreInstance::class;
  protected $createLustreInstanceDataType = '';
  protected $createNetworkType = CreateNetwork::class;
  protected $createNetworkDataType = '';
  protected $createNodesetType = CreateNodeset::class;
  protected $createNodesetDataType = '';
  protected $createOrchestratorType = CreateOrchestrator::class;
  protected $createOrchestratorDataType = '';
  protected $createPartitionType = CreatePartition::class;
  protected $createPartitionDataType = '';
  protected $createPrivateServiceAccessType = CreatePrivateServiceAccess::class;
  protected $createPrivateServiceAccessDataType = '';
  protected $createStorageBucketType = CreateStorageBucket::class;
  protected $createStorageBucketDataType = '';
  protected $deleteFilestoreInstanceType = DeleteFilestoreInstance::class;
  protected $deleteFilestoreInstanceDataType = '';
  protected $deleteLoginNodeType = DeleteLoginNode::class;
  protected $deleteLoginNodeDataType = '';
  protected $deleteLustreInstanceType = DeleteLustreInstance::class;
  protected $deleteLustreInstanceDataType = '';
  protected $deleteNetworkType = DeleteNetwork::class;
  protected $deleteNetworkDataType = '';
  protected $deleteNodesetType = DeleteNodeset::class;
  protected $deleteNodesetDataType = '';
  protected $deleteOrchestratorType = DeleteOrchestrator::class;
  protected $deleteOrchestratorDataType = '';
  protected $deletePartitionType = DeletePartition::class;
  protected $deletePartitionDataType = '';
  protected $deletePrivateServiceAccessType = DeletePrivateServiceAccess::class;
  protected $deletePrivateServiceAccessDataType = '';
  protected $deleteStorageBucketType = DeleteStorageBucket::class;
  protected $deleteStorageBucketDataType = '';
  /**
   * Output only. State of the operation step.
   *
   * @var string
   */
  public $state;
  protected $updateLoginNodeType = UpdateLoginNode::class;
  protected $updateLoginNodeDataType = '';
  protected $updateNodesetType = UpdateNodeset::class;
  protected $updateNodesetDataType = '';
  protected $updateOrchestratorType = UpdateOrchestrator::class;
  protected $updateOrchestratorDataType = '';
  protected $updatePartitionType = UpdatePartition::class;
  protected $updatePartitionDataType = '';

  /**
   * Output only. If set, indicates that cluster health check is part of the
   * operation.
   *
   * @param CheckClusterHealth $checkClusterHealth
   */
  public function setCheckClusterHealth(CheckClusterHealth $checkClusterHealth)
  {
    $this->checkClusterHealth = $checkClusterHealth;
  }
  /**
   * @return CheckClusterHealth
   */
  public function getCheckClusterHealth()
  {
    return $this->checkClusterHealth;
  }
  /**
   * Output only. If set, indicates that new Filestore instance creation is part
   * of the operation.
   *
   * @param CreateFilestoreInstance $createFilestoreInstance
   */
  public function setCreateFilestoreInstance(CreateFilestoreInstance $createFilestoreInstance)
  {
    $this->createFilestoreInstance = $createFilestoreInstance;
  }
  /**
   * @return CreateFilestoreInstance
   */
  public function getCreateFilestoreInstance()
  {
    return $this->createFilestoreInstance;
  }
  /**
   * Output only. If set, indicates that new login node creation is part of the
   * operation.
   *
   * @param CreateLoginNode $createLoginNode
   */
  public function setCreateLoginNode(CreateLoginNode $createLoginNode)
  {
    $this->createLoginNode = $createLoginNode;
  }
  /**
   * @return CreateLoginNode
   */
  public function getCreateLoginNode()
  {
    return $this->createLoginNode;
  }
  /**
   * Output only. If set, indicates that new Lustre instance creation is part of
   * the operation.
   *
   * @param CreateLustreInstance $createLustreInstance
   */
  public function setCreateLustreInstance(CreateLustreInstance $createLustreInstance)
  {
    $this->createLustreInstance = $createLustreInstance;
  }
  /**
   * @return CreateLustreInstance
   */
  public function getCreateLustreInstance()
  {
    return $this->createLustreInstance;
  }
  /**
   * Output only. If set, indicates that new network creation is part of the
   * operation.
   *
   * @param CreateNetwork $createNetwork
   */
  public function setCreateNetwork(CreateNetwork $createNetwork)
  {
    $this->createNetwork = $createNetwork;
  }
  /**
   * @return CreateNetwork
   */
  public function getCreateNetwork()
  {
    return $this->createNetwork;
  }
  /**
   * Output only. If set, indicates that new nodeset creation is part of the
   * operation.
   *
   * @param CreateNodeset $createNodeset
   */
  public function setCreateNodeset(CreateNodeset $createNodeset)
  {
    $this->createNodeset = $createNodeset;
  }
  /**
   * @return CreateNodeset
   */
  public function getCreateNodeset()
  {
    return $this->createNodeset;
  }
  /**
   * Output only. If set, indicates that orchestrator creation is part of the
   * operation.
   *
   * @param CreateOrchestrator $createOrchestrator
   */
  public function setCreateOrchestrator(CreateOrchestrator $createOrchestrator)
  {
    $this->createOrchestrator = $createOrchestrator;
  }
  /**
   * @return CreateOrchestrator
   */
  public function getCreateOrchestrator()
  {
    return $this->createOrchestrator;
  }
  /**
   * Output only. If set, indicates that new partition creation is part of the
   * operation.
   *
   * @param CreatePartition $createPartition
   */
  public function setCreatePartition(CreatePartition $createPartition)
  {
    $this->createPartition = $createPartition;
  }
  /**
   * @return CreatePartition
   */
  public function getCreatePartition()
  {
    return $this->createPartition;
  }
  /**
   * Output only. If set, indicates that new private service access creation is
   * part of the operation.
   *
   * @param CreatePrivateServiceAccess $createPrivateServiceAccess
   */
  public function setCreatePrivateServiceAccess(CreatePrivateServiceAccess $createPrivateServiceAccess)
  {
    $this->createPrivateServiceAccess = $createPrivateServiceAccess;
  }
  /**
   * @return CreatePrivateServiceAccess
   */
  public function getCreatePrivateServiceAccess()
  {
    return $this->createPrivateServiceAccess;
  }
  /**
   * Output only. If set, indicates that new Cloud Storage bucket creation is
   * part of the operation.
   *
   * @param CreateStorageBucket $createStorageBucket
   */
  public function setCreateStorageBucket(CreateStorageBucket $createStorageBucket)
  {
    $this->createStorageBucket = $createStorageBucket;
  }
  /**
   * @return CreateStorageBucket
   */
  public function getCreateStorageBucket()
  {
    return $this->createStorageBucket;
  }
  /**
   * Output only. If set, indicates that Filestore instance deletion is part of
   * the operation.
   *
   * @param DeleteFilestoreInstance $deleteFilestoreInstance
   */
  public function setDeleteFilestoreInstance(DeleteFilestoreInstance $deleteFilestoreInstance)
  {
    $this->deleteFilestoreInstance = $deleteFilestoreInstance;
  }
  /**
   * @return DeleteFilestoreInstance
   */
  public function getDeleteFilestoreInstance()
  {
    return $this->deleteFilestoreInstance;
  }
  /**
   * Output only. If set, indicates that login node deletion is part of the
   * operation.
   *
   * @param DeleteLoginNode $deleteLoginNode
   */
  public function setDeleteLoginNode(DeleteLoginNode $deleteLoginNode)
  {
    $this->deleteLoginNode = $deleteLoginNode;
  }
  /**
   * @return DeleteLoginNode
   */
  public function getDeleteLoginNode()
  {
    return $this->deleteLoginNode;
  }
  /**
   * Output only. If set, indicates that Lustre instance deletion is part of the
   * operation.
   *
   * @param DeleteLustreInstance $deleteLustreInstance
   */
  public function setDeleteLustreInstance(DeleteLustreInstance $deleteLustreInstance)
  {
    $this->deleteLustreInstance = $deleteLustreInstance;
  }
  /**
   * @return DeleteLustreInstance
   */
  public function getDeleteLustreInstance()
  {
    return $this->deleteLustreInstance;
  }
  /**
   * Output only. If set, indicates that network deletion is part of the
   * operation.
   *
   * @param DeleteNetwork $deleteNetwork
   */
  public function setDeleteNetwork(DeleteNetwork $deleteNetwork)
  {
    $this->deleteNetwork = $deleteNetwork;
  }
  /**
   * @return DeleteNetwork
   */
  public function getDeleteNetwork()
  {
    return $this->deleteNetwork;
  }
  /**
   * Output only. If set, indicates that nodeset deletion is part of the
   * operation.
   *
   * @param DeleteNodeset $deleteNodeset
   */
  public function setDeleteNodeset(DeleteNodeset $deleteNodeset)
  {
    $this->deleteNodeset = $deleteNodeset;
  }
  /**
   * @return DeleteNodeset
   */
  public function getDeleteNodeset()
  {
    return $this->deleteNodeset;
  }
  /**
   * Output only. If set, indicates that orchestrator deletion is part of the
   * operation.
   *
   * @param DeleteOrchestrator $deleteOrchestrator
   */
  public function setDeleteOrchestrator(DeleteOrchestrator $deleteOrchestrator)
  {
    $this->deleteOrchestrator = $deleteOrchestrator;
  }
  /**
   * @return DeleteOrchestrator
   */
  public function getDeleteOrchestrator()
  {
    return $this->deleteOrchestrator;
  }
  /**
   * Output only. If set, indicates that partition deletion is part of the
   * operation.
   *
   * @param DeletePartition $deletePartition
   */
  public function setDeletePartition(DeletePartition $deletePartition)
  {
    $this->deletePartition = $deletePartition;
  }
  /**
   * @return DeletePartition
   */
  public function getDeletePartition()
  {
    return $this->deletePartition;
  }
  /**
   * Output only. If set, indicates that private service access deletion is part
   * of the operation.
   *
   * @param DeletePrivateServiceAccess $deletePrivateServiceAccess
   */
  public function setDeletePrivateServiceAccess(DeletePrivateServiceAccess $deletePrivateServiceAccess)
  {
    $this->deletePrivateServiceAccess = $deletePrivateServiceAccess;
  }
  /**
   * @return DeletePrivateServiceAccess
   */
  public function getDeletePrivateServiceAccess()
  {
    return $this->deletePrivateServiceAccess;
  }
  /**
   * Output only. If set, indicates that Cloud Storage bucket deletion is part
   * of the operation.
   *
   * @param DeleteStorageBucket $deleteStorageBucket
   */
  public function setDeleteStorageBucket(DeleteStorageBucket $deleteStorageBucket)
  {
    $this->deleteStorageBucket = $deleteStorageBucket;
  }
  /**
   * @return DeleteStorageBucket
   */
  public function getDeleteStorageBucket()
  {
    return $this->deleteStorageBucket;
  }
  /**
   * Output only. State of the operation step.
   *
   * Accepted values: STATE_UNSPECIFIED, WAITING, IN_PROGRESS, DONE
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
   * Output only. If set, indicates that login node update is part of the
   * operation.
   *
   * @param UpdateLoginNode $updateLoginNode
   */
  public function setUpdateLoginNode(UpdateLoginNode $updateLoginNode)
  {
    $this->updateLoginNode = $updateLoginNode;
  }
  /**
   * @return UpdateLoginNode
   */
  public function getUpdateLoginNode()
  {
    return $this->updateLoginNode;
  }
  /**
   * Output only. If set, indicates that nodeset update is part of the
   * operation.
   *
   * @param UpdateNodeset $updateNodeset
   */
  public function setUpdateNodeset(UpdateNodeset $updateNodeset)
  {
    $this->updateNodeset = $updateNodeset;
  }
  /**
   * @return UpdateNodeset
   */
  public function getUpdateNodeset()
  {
    return $this->updateNodeset;
  }
  /**
   * Output only. If set, indicates that an orchestrator update is part of the
   * operation.
   *
   * @param UpdateOrchestrator $updateOrchestrator
   */
  public function setUpdateOrchestrator(UpdateOrchestrator $updateOrchestrator)
  {
    $this->updateOrchestrator = $updateOrchestrator;
  }
  /**
   * @return UpdateOrchestrator
   */
  public function getUpdateOrchestrator()
  {
    return $this->updateOrchestrator;
  }
  /**
   * Output only. If set, indicates that partition update is part of the
   * operation.
   *
   * @param UpdatePartition $updatePartition
   */
  public function setUpdatePartition(UpdatePartition $updatePartition)
  {
    $this->updatePartition = $updatePartition;
  }
  /**
   * @return UpdatePartition
   */
  public function getUpdatePartition()
  {
    return $this->updatePartition;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OperationStep::class, 'Google_Service_HypercomputeCluster_OperationStep');
