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

class ResourcePolicyGroupPlacementPolicy extends \Google\Model
{
  /**
   * @var int
   */
  public $availabilityDomainCount;
  /**
   * @var string
   */
  public $collocation;
  /**
   * @var string
   */
  public $gpuTopology;
  /**
   * @var int
   */
  public $vmCount;

  /**
   * @param int
   */
  public function setAvailabilityDomainCount($availabilityDomainCount)
  {
    $this->availabilityDomainCount = $availabilityDomainCount;
  }
  /**
   * @return int
   */
  public function getAvailabilityDomainCount()
  {
    return $this->availabilityDomainCount;
  }
  /**
   * @param string
   */
  public function setCollocation($collocation)
  {
    $this->collocation = $collocation;
  }
  /**
   * @return string
   */
  public function getCollocation()
  {
    return $this->collocation;
  }
  /**
   * @param string
   */
  public function setGpuTopology($gpuTopology)
  {
    $this->gpuTopology = $gpuTopology;
  }
  /**
   * @return string
   */
  public function getGpuTopology()
  {
    return $this->gpuTopology;
  }
  /**
   * @param int
   */
  public function setVmCount($vmCount)
  {
    $this->vmCount = $vmCount;
  }
  /**
   * @return int
   */
  public function getVmCount()
  {
    return $this->vmCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResourcePolicyGroupPlacementPolicy::class, 'Google_Service_Compute_ResourcePolicyGroupPlacementPolicy');
