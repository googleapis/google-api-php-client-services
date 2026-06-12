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

class InstanceGroupManagerInstanceLifecyclePolicyOnRepair extends \Google\Model
{
  /**
   * [Default] MIG cannot change a VM's zone during a repair.
   */
  public const ALLOW_CHANGING_ZONE_NO = 'NO';
  /**
   * MIG can select a different zone for the VM during a repair.
   */
  public const ALLOW_CHANGING_ZONE_YES = 'YES';
  /**
   * Specifies whether the MIG can change a VM's zone during a repair. Valid
   * values are:        - NO (default): MIG cannot change a VM's zone during a
   * repair.    - YES: MIG can select a different zone for the VM during    a
   * repair.
   *
   * @var string
   */
  public $allowChangingZone;

  /**
   * Specifies whether the MIG can change a VM's zone during a repair. Valid
   * values are:        - NO (default): MIG cannot change a VM's zone during a
   * repair.    - YES: MIG can select a different zone for the VM during    a
   * repair.
   *
   * Accepted values: NO, YES
   *
   * @param self::ALLOW_CHANGING_ZONE_* $allowChangingZone
   */
  public function setAllowChangingZone($allowChangingZone)
  {
    $this->allowChangingZone = $allowChangingZone;
  }
  /**
   * @return self::ALLOW_CHANGING_ZONE_*
   */
  public function getAllowChangingZone()
  {
    return $this->allowChangingZone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstanceGroupManagerInstanceLifecyclePolicyOnRepair::class, 'Google_Service_Compute_InstanceGroupManagerInstanceLifecyclePolicyOnRepair');
