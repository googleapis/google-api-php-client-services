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

class InstanceFlexibilityPolicyInstanceSelection extends \Google\Collection
{
  protected $collection_key = 'machineTypes';
  protected $disksType = AttachedDisk::class;
  protected $disksDataType = 'array';
  /**
   * Alternative machine types to use for instances that are created from these
   * properties. This field only accepts a machine type names, for example
   * `n2-standard-4` and not URLs or partial URLs.
   *
   * @var string[]
   */
  public $machineTypes;
  /**
   * Rank when prioritizing the shape flexibilities. The instance selections
   * with rank are considered first, in the ascending order of the rank. If not
   * set, defaults to 0.
   *
   * @var string
   */
  public $rank;

  /**
   * Disks to be attached to the instances created from in this selection. They
   * override the disks specified in the instance properties.
   *
   * @param AttachedDisk[] $disks
   */
  public function setDisks($disks)
  {
    $this->disks = $disks;
  }
  /**
   * @return AttachedDisk[]
   */
  public function getDisks()
  {
    return $this->disks;
  }
  /**
   * Alternative machine types to use for instances that are created from these
   * properties. This field only accepts a machine type names, for example
   * `n2-standard-4` and not URLs or partial URLs.
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
  /**
   * Rank when prioritizing the shape flexibilities. The instance selections
   * with rank are considered first, in the ascending order of the rank. If not
   * set, defaults to 0.
   *
   * @param string $rank
   */
  public function setRank($rank)
  {
    $this->rank = $rank;
  }
  /**
   * @return string
   */
  public function getRank()
  {
    return $this->rank;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstanceFlexibilityPolicyInstanceSelection::class, 'Google_Service_Compute_InstanceFlexibilityPolicyInstanceSelection');
