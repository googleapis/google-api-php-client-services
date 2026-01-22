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

class Orchestrator extends \Google\Model
{
  protected $slurmType = SlurmOrchestrator::class;
  protected $slurmDataType = '';

  /**
   * Optional. If set, indicates that the cluster should use Slurm as the
   * orchestrator.
   *
   * @param SlurmOrchestrator $slurm
   */
  public function setSlurm(SlurmOrchestrator $slurm)
  {
    $this->slurm = $slurm;
  }
  /**
   * @return SlurmOrchestrator
   */
  public function getSlurm()
  {
    return $this->slurm;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Orchestrator::class, 'Google_Service_HypercomputeCluster_Orchestrator');
