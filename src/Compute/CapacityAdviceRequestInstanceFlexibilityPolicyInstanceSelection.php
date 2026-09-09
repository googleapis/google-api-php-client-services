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

class CapacityAdviceRequestInstanceFlexibilityPolicyInstanceSelection extends \Google\Collection
{
  protected $collection_key = 'machineTypes';
  protected $disksType = CapacityAdviceRequestInstanceFlexibilityPolicyInstanceSelectionAttachedDisk::class;
  protected $disksDataType = 'array';
  protected $guestAcceleratorsType = AcceleratorConfig::class;
  protected $guestAcceleratorsDataType = 'array';
  /**
   * Full machine-type names, e.g. "n1-standard-16".
   *
   * @var string[]
   */
  public $machineTypes;

  /**
   * Local SSDs.
   *
   * @param CapacityAdviceRequestInstanceFlexibilityPolicyInstanceSelectionAttachedDisk[] $disks
   */
  public function setDisks($disks)
  {
    $this->disks = $disks;
  }
  /**
   * @return CapacityAdviceRequestInstanceFlexibilityPolicyInstanceSelectionAttachedDisk[]
   */
  public function getDisks()
  {
    return $this->disks;
  }
  /**
   * Accelerators configuration.
   *
   * @param AcceleratorConfig[] $guestAccelerators
   */
  public function setGuestAccelerators($guestAccelerators)
  {
    $this->guestAccelerators = $guestAccelerators;
  }
  /**
   * @return AcceleratorConfig[]
   */
  public function getGuestAccelerators()
  {
    return $this->guestAccelerators;
  }
  /**
   * Full machine-type names, e.g. "n1-standard-16".
   *
   * @param string[] $machineTypes
   */
  public function setMachineTypes($machineTypes)
  {
    $this->machineTypes = $machineTypes;
  }
  /**
   * @return string[]
   */
  public function getMachineTypes()
  {
    return $this->machineTypes;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CapacityAdviceRequestInstanceFlexibilityPolicyInstanceSelection::class, 'Google_Service_Compute_CapacityAdviceRequestInstanceFlexibilityPolicyInstanceSelection');
