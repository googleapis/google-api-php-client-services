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

class SlurmNodeSet extends \Google\Collection
{
  protected $collection_key = 'storageConfigs';
  /**
   * Optional. ID of the compute resource on which this nodeset will run. Must
   * match a key in the cluster's
   * [compute_resources](Cluster.compute_resources).
   *
   * @var string
   */
  public $computeId;
  protected $computeInstanceType = ComputeInstanceSlurmNodeSet::class;
  protected $computeInstanceDataType = '';
  /**
   * Required. Identifier for the nodeset, which allows it to be referenced by
   * partitions. Must conform to
   * [RFC-1034](https://datatracker.ietf.org/doc/html/rfc1034) (lower-case,
   * alphanumeric, and at most 63 characters).
   *
   * @var string
   */
  public $id;
  /**
   * Optional. Controls how many additional nodes a cluster can bring online to
   * handle workloads. Set this value to enable dynamic node creation and limit
   * the number of additional nodes the cluster can bring online. Leave empty if
   * you do not want the cluster to create nodes dynamically, and instead rely
   * only on static nodes.
   *
   * @var string
   */
  public $maxDynamicNodeCount;
  /**
   * Optional. Number of nodes to be statically created for this nodeset. The
   * cluster will attempt to ensure that at least this many nodes exist at all
   * times.
   *
   * @var string
   */
  public $staticNodeCount;
  protected $storageConfigsType = StorageConfig::class;
  protected $storageConfigsDataType = 'array';

  /**
   * Optional. ID of the compute resource on which this nodeset will run. Must
   * match a key in the cluster's
   * [compute_resources](Cluster.compute_resources).
   *
   * @param string $computeId
   */
  public function setComputeId($computeId)
  {
    $this->computeId = $computeId;
  }
  /**
   * @return string
   */
  public function getComputeId()
  {
    return $this->computeId;
  }
  /**
   * Optional. If set, indicates that the nodeset should be backed by Compute
   * Engine instances.
   *
   * @param ComputeInstanceSlurmNodeSet $computeInstance
   */
  public function setComputeInstance(ComputeInstanceSlurmNodeSet $computeInstance)
  {
    $this->computeInstance = $computeInstance;
  }
  /**
   * @return ComputeInstanceSlurmNodeSet
   */
  public function getComputeInstance()
  {
    return $this->computeInstance;
  }
  /**
   * Required. Identifier for the nodeset, which allows it to be referenced by
   * partitions. Must conform to
   * [RFC-1034](https://datatracker.ietf.org/doc/html/rfc1034) (lower-case,
   * alphanumeric, and at most 63 characters).
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Optional. Controls how many additional nodes a cluster can bring online to
   * handle workloads. Set this value to enable dynamic node creation and limit
   * the number of additional nodes the cluster can bring online. Leave empty if
   * you do not want the cluster to create nodes dynamically, and instead rely
   * only on static nodes.
   *
   * @param string $maxDynamicNodeCount
   */
  public function setMaxDynamicNodeCount($maxDynamicNodeCount)
  {
    $this->maxDynamicNodeCount = $maxDynamicNodeCount;
  }
  /**
   * @return string
   */
  public function getMaxDynamicNodeCount()
  {
    return $this->maxDynamicNodeCount;
  }
  /**
   * Optional. Number of nodes to be statically created for this nodeset. The
   * cluster will attempt to ensure that at least this many nodes exist at all
   * times.
   *
   * @param string $staticNodeCount
   */
  public function setStaticNodeCount($staticNodeCount)
  {
    $this->staticNodeCount = $staticNodeCount;
  }
  /**
   * @return string
   */
  public function getStaticNodeCount()
  {
    return $this->staticNodeCount;
  }
  /**
   * Optional. How storage resources should be mounted on each compute node.
   *
   * @param StorageConfig[] $storageConfigs
   */
  public function setStorageConfigs($storageConfigs)
  {
    $this->storageConfigs = $storageConfigs;
  }
  /**
   * @return StorageConfig[]
   */
  public function getStorageConfigs()
  {
    return $this->storageConfigs;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SlurmNodeSet::class, 'Google_Service_HypercomputeCluster_SlurmNodeSet');
