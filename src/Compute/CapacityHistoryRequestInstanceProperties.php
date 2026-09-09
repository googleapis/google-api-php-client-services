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

class CapacityHistoryRequestInstanceProperties extends \Google\Model
{
  /**
   * The machine type for the VM, such as `n2-standard-4`.
   *
   * @var string
   */
  public $machineType;
  protected $schedulingType = CapacityHistoryRequestInstancePropertiesScheduling::class;
  protected $schedulingDataType = '';

  /**
   * The machine type for the VM, such as `n2-standard-4`.
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
   * Specifies the scheduling options.
   *
   * @param CapacityHistoryRequestInstancePropertiesScheduling $scheduling
   */
  public function setScheduling(CapacityHistoryRequestInstancePropertiesScheduling $scheduling)
  {
    $this->scheduling = $scheduling;
  }
  /**
   * @return CapacityHistoryRequestInstancePropertiesScheduling
   */
  public function getScheduling()
  {
    return $this->scheduling;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CapacityHistoryRequestInstanceProperties::class, 'Google_Service_Compute_CapacityHistoryRequestInstanceProperties');
