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

namespace Google\Service\Batch;

class InstanceFlexibilityPolicy extends \Google\Model
{
  protected $instanceSelectionsType = InstanceSelection::class;
  protected $instanceSelectionsDataType = 'map';

  /**
   * Required. Named instance selections configuring properties that the group
   * will use when creating new VMs. The map key is a user-specified name for
   * the instance selection. The key must be 1-63 characters long, and comply
   * with [RFC1035](https://www.ietf.org/rfc/rfc1035.txt). Specifically, the key
   * must consist of lowercase letters, numbers, and hyphens. The first
   * character must be a lowercase letter, and the last character must be a
   * lowercase letter or number. The maximum number of instance selections is
   * 50. Exceeding this limit results in a validation error with code
   * `INVALID_ARGUMENT`.
   *
   * @param InstanceSelection[] $instanceSelections
   */
  public function setInstanceSelections($instanceSelections)
  {
    $this->instanceSelections = $instanceSelections;
  }
  /**
   * @return InstanceSelection[]
   */
  public function getInstanceSelections()
  {
    return $this->instanceSelections;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstanceFlexibilityPolicy::class, 'Google_Service_Batch_InstanceFlexibilityPolicy');
