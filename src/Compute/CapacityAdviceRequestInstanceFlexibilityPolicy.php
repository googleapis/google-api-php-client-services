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

class CapacityAdviceRequestInstanceFlexibilityPolicy extends \Google\Model
{
  protected $instanceSelectionsType = CapacityAdviceRequestInstanceFlexibilityPolicyInstanceSelection::class;
  protected $instanceSelectionsDataType = 'map';

  /**
   * Named instance selections to configure properties. The key is an arbitrary,
   * unique RFC1035 string that identifies the instance selection.
   *
   * @param CapacityAdviceRequestInstanceFlexibilityPolicyInstanceSelection[] $instanceSelections
   */
  public function setInstanceSelections($instanceSelections)
  {
    $this->instanceSelections = $instanceSelections;
  }
  /**
   * @return CapacityAdviceRequestInstanceFlexibilityPolicyInstanceSelection[]
   */
  public function getInstanceSelections()
  {
    return $this->instanceSelections;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CapacityAdviceRequestInstanceFlexibilityPolicy::class, 'Google_Service_Compute_CapacityAdviceRequestInstanceFlexibilityPolicy');
