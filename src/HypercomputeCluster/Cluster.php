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

class Cluster extends \Google\Model
{
  protected $computeResourcesType = ComputeResource::class;
  protected $computeResourcesDataType = 'map';
  /**
   * Output only. Time that the cluster was originally created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. User-provided description of the cluster.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. [Labels](https://cloud.google.com/compute/docs/labeling-
   * resources) applied to the cluster. Labels can be used to organize clusters
   * and to filter them in queries.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. [Relative resource name](https://google.aip.dev/122) of the
   * cluster, in the format
   * `projects/{project}/locations/{location}/clusters/{cluster}`.
   *
   * @var string
   */
  public $name;
  protected $networkResourcesType = NetworkResource::class;
  protected $networkResourcesDataType = 'map';
  protected $orchestratorType = Orchestrator::class;
  protected $orchestratorDataType = '';
  /**
   * Output only. Indicates whether changes to the cluster are currently in
   * flight. If this is `true`, then the current state might not match the
   * cluster's intended state.
   *
   * @var bool
   */
  public $reconciling;
  protected $storageResourcesType = StorageResource::class;
  protected $storageResourcesDataType = 'map';
  /**
   * Output only. Time that the cluster was most recently updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. Compute resources available to the cluster. Keys specify the ID
   * of the compute resource by which it can be referenced elsewhere, and must
   * conform to [RFC-1034](https://datatracker.ietf.org/doc/html/rfc1034)
   * (lower-case, alphanumeric, and at most 63 characters).
   *
   * @param ComputeResource[] $computeResources
   */
  public function setComputeResources($computeResources)
  {
    $this->computeResources = $computeResources;
  }
  /**
   * @return ComputeResource[]
   */
  public function getComputeResources()
  {
    return $this->computeResources;
  }
  /**
   * Output only. Time that the cluster was originally created.
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
   * Optional. User-provided description of the cluster.
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
   * Optional. [Labels](https://cloud.google.com/compute/docs/labeling-
   * resources) applied to the cluster. Labels can be used to organize clusters
   * and to filter them in queries.
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
   * Identifier. [Relative resource name](https://google.aip.dev/122) of the
   * cluster, in the format
   * `projects/{project}/locations/{location}/clusters/{cluster}`.
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
   * Optional. Network resources available to the cluster. Must contain at most
   * one value. Keys specify the ID of the network resource by which it can be
   * referenced elsewhere, and must conform to
   * [RFC-1034](https://datatracker.ietf.org/doc/html/rfc1034) (lower-case,
   * alphanumeric, and at most 63 characters).
   *
   * @param NetworkResource[] $networkResources
   */
  public function setNetworkResources($networkResources)
  {
    $this->networkResources = $networkResources;
  }
  /**
   * @return NetworkResource[]
   */
  public function getNetworkResources()
  {
    return $this->networkResources;
  }
  /**
   * Optional. Orchestrator that is responsible for scheduling and running jobs
   * on the cluster.
   *
   * @param Orchestrator $orchestrator
   */
  public function setOrchestrator(Orchestrator $orchestrator)
  {
    $this->orchestrator = $orchestrator;
  }
  /**
   * @return Orchestrator
   */
  public function getOrchestrator()
  {
    return $this->orchestrator;
  }
  /**
   * Output only. Indicates whether changes to the cluster are currently in
   * flight. If this is `true`, then the current state might not match the
   * cluster's intended state.
   *
   * @param bool $reconciling
   */
  public function setReconciling($reconciling)
  {
    $this->reconciling = $reconciling;
  }
  /**
   * @return bool
   */
  public function getReconciling()
  {
    return $this->reconciling;
  }
  /**
   * Optional. Storage resources available to the cluster. Keys specify the ID
   * of the storage resource by which it can be referenced elsewhere, and must
   * conform to [RFC-1034](https://datatracker.ietf.org/doc/html/rfc1034)
   * (lower-case, alphanumeric, and at most 63 characters).
   *
   * @param StorageResource[] $storageResources
   */
  public function setStorageResources($storageResources)
  {
    $this->storageResources = $storageResources;
  }
  /**
   * @return StorageResource[]
   */
  public function getStorageResources()
  {
    return $this->storageResources;
  }
  /**
   * Output only. Time that the cluster was most recently updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Cluster::class, 'Google_Service_HypercomputeCluster_Cluster');
