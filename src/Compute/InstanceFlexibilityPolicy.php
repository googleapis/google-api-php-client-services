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

class InstanceFlexibilityPolicy extends \Google\Model
{
  protected $instanceSelectionsType = InstanceFlexibilityPolicyInstanceSelection::class;
  protected $instanceSelectionsDataType = 'map';

  /**
   * Specification of alternative, flexible instance subsets. One of them will
   * be selected to create the instances based on various criteria, like: -
   * ranks, - location policy, - current capacity, - available reservations (you
   * can specify affinity in InstanceProperties), - SWAN/GOOSE limitations. Key
   * is an arbitrary, unique RFC1035 string that identifies the instance
   * selection.
   *
   * @param InstanceFlexibilityPolicyInstanceSelection[] $instanceSelections
   */
  public function setInstanceSelections($instanceSelections)
  {
    $this->instanceSelections = $instanceSelections;
  }
  /**
   * @return InstanceFlexibilityPolicyInstanceSelection[]
   */
  public function getInstanceSelections()
  {
    return $this->instanceSelections;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstanceFlexibilityPolicy::class, 'Google_Service_Compute_InstanceFlexibilityPolicy');
