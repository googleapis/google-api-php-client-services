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

class NewOnDemandInstancesConfig extends \Google\Model
{
  /**
   * Required. Immutable. Name of the Compute Engine [machine
   * type](https://cloud.google.com/compute/docs/machine-resource) to use, e.g.
   * `n2-standard-2`.
   *
   * @var string
   */
  public $machineType;
  /**
   * Required. Immutable. Name of the zone in which VM instances should run,
   * e.g., `us-central1-a`. Must be in the same region as the cluster, and must
   * match the zone of any other resources specified in the cluster.
   *
   * @var string
   */
  public $zone;

  /**
   * Required. Immutable. Name of the Compute Engine [machine
   * type](https://cloud.google.com/compute/docs/machine-resource) to use, e.g.
   * `n2-standard-2`.
   *
   * @param string $machineType
   */
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  /**
   * @return string
   */
  public function getMachineType()
  {
    return $this->machineType;
  }
  /**
   * Required. Immutable. Name of the zone in which VM instances should run,
   * e.g., `us-central1-a`. Must be in the same region as the cluster, and must
   * match the zone of any other resources specified in the cluster.
   *
   * @param string $zone
   */
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  /**
   * @return string
   */
  public function getZone()
  {
    return $this->zone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NewOnDemandInstancesConfig::class, 'Google_Service_HypercomputeCluster_NewOnDemandInstancesConfig');
