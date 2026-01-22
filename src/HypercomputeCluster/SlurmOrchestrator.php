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

class SlurmOrchestrator extends \Google\Collection
{
  protected $collection_key = 'prologBashScripts';
  /**
   * Optional. Default partition to use for submitted jobs that do not
   * explicitly specify a partition. Required if and only if there is more than
   * one partition, in which case it must match the id of one of the partitions.
   *
   * @var string
   */
  public $defaultPartition;
  /**
   * Optional. Slurm [epilog
   * scripts](https://slurm.schedmd.com/prolog_epilog.html), which will be
   * executed by compute nodes whenever a node finishes running a job. Values
   * must not be empty.
   *
   * @var string[]
   */
  public $epilogBashScripts;
  protected $loginNodesType = SlurmLoginNodes::class;
  protected $loginNodesDataType = '';
  protected $nodeSetsType = SlurmNodeSet::class;
  protected $nodeSetsDataType = 'array';
  protected $partitionsType = SlurmPartition::class;
  protected $partitionsDataType = 'array';
  /**
   * Optional. Slurm [prolog
   * scripts](https://slurm.schedmd.com/prolog_epilog.html), which will be
   * executed by compute nodes before a node begins running a new job. Values
   * must not be empty.
   *
   * @var string[]
   */
  public $prologBashScripts;

  /**
   * Optional. Default partition to use for submitted jobs that do not
   * explicitly specify a partition. Required if and only if there is more than
   * one partition, in which case it must match the id of one of the partitions.
   *
   * @param string $defaultPartition
   */
  public function setDefaultPartition($defaultPartition)
  {
    $this->defaultPartition = $defaultPartition;
  }
  /**
   * @return string
   */
  public function getDefaultPartition()
  {
    return $this->defaultPartition;
  }
  /**
   * Optional. Slurm [epilog
   * scripts](https://slurm.schedmd.com/prolog_epilog.html), which will be
   * executed by compute nodes whenever a node finishes running a job. Values
   * must not be empty.
   *
   * @param string[] $epilogBashScripts
   */
  public function setEpilogBashScripts($epilogBashScripts)
  {
    $this->epilogBashScripts = $epilogBashScripts;
  }
  /**
   * @return string[]
   */
  public function getEpilogBashScripts()
  {
    return $this->epilogBashScripts;
  }
  /**
   * Required. Configuration for login nodes, which allow users to access the
   * cluster over SSH.
   *
   * @param SlurmLoginNodes $loginNodes
   */
  public function setLoginNodes(SlurmLoginNodes $loginNodes)
  {
    $this->loginNodes = $loginNodes;
  }
  /**
   * @return SlurmLoginNodes
   */
  public function getLoginNodes()
  {
    return $this->loginNodes;
  }
  /**
   * Required. Configuration of Slurm nodesets, which define groups of compute
   * resources that can be used by Slurm. At least one compute node is required.
   *
   * @param SlurmNodeSet[] $nodeSets
   */
  public function setNodeSets($nodeSets)
  {
    $this->nodeSets = $nodeSets;
  }
  /**
   * @return SlurmNodeSet[]
   */
  public function getNodeSets()
  {
    return $this->nodeSets;
  }
  /**
   * Required. Configuration of Slurm partitions, which group one or more
   * nodesets. Acts as a queue against which jobs can be submitted. At least one
   * partition is required.
   *
   * @param SlurmPartition[] $partitions
   */
  public function setPartitions($partitions)
  {
    $this->partitions = $partitions;
  }
  /**
   * @return SlurmPartition[]
   */
  public function getPartitions()
  {
    return $this->partitions;
  }
  /**
   * Optional. Slurm [prolog
   * scripts](https://slurm.schedmd.com/prolog_epilog.html), which will be
   * executed by compute nodes before a node begins running a new job. Values
   * must not be empty.
   *
   * @param string[] $prologBashScripts
   */
  public function setPrologBashScripts($prologBashScripts)
  {
    $this->prologBashScripts = $prologBashScripts;
  }
  /**
   * @return string[]
   */
  public function getPrologBashScripts()
  {
    return $this->prologBashScripts;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SlurmOrchestrator::class, 'Google_Service_HypercomputeCluster_SlurmOrchestrator');
