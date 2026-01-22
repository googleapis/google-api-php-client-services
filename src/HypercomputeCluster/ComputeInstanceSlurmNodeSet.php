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

class ComputeInstanceSlurmNodeSet extends \Google\Model
{
  protected $bootDiskType = BootDisk::class;
  protected $bootDiskDataType = '';
  /**
   * Optional. [Labels](https://cloud.google.com/compute/docs/labeling-
   * resources) that should be applied to each VM instance in the nodeset.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Optional. [Startup
   * script](https://cloud.google.com/compute/docs/instances/startup-
   * scripts/linux) to be run on each VM instance in the nodeset. Max 256KB.
   *
   * @var string
   */
  public $startupScript;

  /**
   * Optional. Boot disk for the compute instance
   *
   * @param BootDisk $bootDisk
   */
  public function setBootDisk(BootDisk $bootDisk)
  {
    $this->bootDisk = $bootDisk;
  }
  /**
   * @return BootDisk
   */
  public function getBootDisk()
  {
    return $this->bootDisk;
  }
  /**
   * Optional. [Labels](https://cloud.google.com/compute/docs/labeling-
   * resources) that should be applied to each VM instance in the nodeset.
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
   * Optional. [Startup
   * script](https://cloud.google.com/compute/docs/instances/startup-
   * scripts/linux) to be run on each VM instance in the nodeset. Max 256KB.
   *
   * @param string $startupScript
   */
  public function setStartupScript($startupScript)
  {
    $this->startupScript = $startupScript;
  }
  /**
   * @return string
   */
  public function getStartupScript()
  {
    return $this->startupScript;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ComputeInstanceSlurmNodeSet::class, 'Google_Service_HypercomputeCluster_ComputeInstanceSlurmNodeSet');
