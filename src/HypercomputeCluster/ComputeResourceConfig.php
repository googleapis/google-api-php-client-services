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

class ComputeResourceConfig extends \Google\Model
{
  protected $newFlexStartInstancesType = NewFlexStartInstancesConfig::class;
  protected $newFlexStartInstancesDataType = '';
  protected $newOnDemandInstancesType = NewOnDemandInstancesConfig::class;
  protected $newOnDemandInstancesDataType = '';
  protected $newReservedInstancesType = NewReservedInstancesConfig::class;
  protected $newReservedInstancesDataType = '';
  protected $newSpotInstancesType = NewSpotInstancesConfig::class;
  protected $newSpotInstancesDataType = '';

  /**
   * Optional. Immutable. If set, indicates that this resource should use flex-
   * start VMs.
   *
   * @param NewFlexStartInstancesConfig $newFlexStartInstances
   */
  public function setNewFlexStartInstances(NewFlexStartInstancesConfig $newFlexStartInstances)
  {
    $this->newFlexStartInstances = $newFlexStartInstances;
  }
  /**
   * @return NewFlexStartInstancesConfig
   */
  public function getNewFlexStartInstances()
  {
    return $this->newFlexStartInstances;
  }
  /**
   * Optional. Immutable. If set, indicates that this resource should use on-
   * demand VMs.
   *
   * @param NewOnDemandInstancesConfig $newOnDemandInstances
   */
  public function setNewOnDemandInstances(NewOnDemandInstancesConfig $newOnDemandInstances)
  {
    $this->newOnDemandInstances = $newOnDemandInstances;
  }
  /**
   * @return NewOnDemandInstancesConfig
   */
  public function getNewOnDemandInstances()
  {
    return $this->newOnDemandInstances;
  }
  /**
   * Optional. Immutable. If set, indicates that this resource should use
   * reserved VMs.
   *
   * @param NewReservedInstancesConfig $newReservedInstances
   */
  public function setNewReservedInstances(NewReservedInstancesConfig $newReservedInstances)
  {
    $this->newReservedInstances = $newReservedInstances;
  }
  /**
   * @return NewReservedInstancesConfig
   */
  public function getNewReservedInstances()
  {
    return $this->newReservedInstances;
  }
  /**
   * Optional. Immutable. If set, indicates that this resource should use spot
   * VMs.
   *
   * @param NewSpotInstancesConfig $newSpotInstances
   */
  public function setNewSpotInstances(NewSpotInstancesConfig $newSpotInstances)
  {
    $this->newSpotInstances = $newSpotInstances;
  }
  /**
   * @return NewSpotInstancesConfig
   */
  public function getNewSpotInstances()
  {
    return $this->newSpotInstances;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ComputeResourceConfig::class, 'Google_Service_HypercomputeCluster_ComputeResourceConfig');
