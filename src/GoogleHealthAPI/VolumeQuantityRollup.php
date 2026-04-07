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

namespace Google\Service\GoogleHealthAPI;

class VolumeQuantityRollup extends \Google\Model
{
  /**
   * Unspecified volume unit.
   */
  public const USER_PROVIDED_UNIT_LAST_VOLUME_UNIT_UNSPECIFIED = 'VOLUME_UNIT_UNSPECIFIED';
  /**
   * Cup (imperial)
   */
  public const USER_PROVIDED_UNIT_LAST_CUP_IMPERIAL = 'CUP_IMPERIAL';
  /**
   * Cup (US)
   */
  public const USER_PROVIDED_UNIT_LAST_CUP_US = 'CUP_US';
  /**
   * Fluid ounce (imperial)
   */
  public const USER_PROVIDED_UNIT_LAST_FLUID_OUNCE_IMPERIAL = 'FLUID_OUNCE_IMPERIAL';
  /**
   * Fluid ounce (US)
   */
  public const USER_PROVIDED_UNIT_LAST_FLUID_OUNCE_US = 'FLUID_OUNCE_US';
  /**
   * Liter
   */
  public const USER_PROVIDED_UNIT_LAST_LITER = 'LITER';
  /**
   * Milliliter
   */
  public const USER_PROVIDED_UNIT_LAST_MILLILITER = 'MILLILITER';
  /**
   * Pint (imperial)
   */
  public const USER_PROVIDED_UNIT_LAST_PINT_IMPERIAL = 'PINT_IMPERIAL';
  /**
   * Pint (US)
   */
  public const USER_PROVIDED_UNIT_LAST_PINT_US = 'PINT_US';
  /**
   * Required. The sum of volume in milliliters.
   *
   * @var 
   */
  public $millilitersSum;
  /**
   * Optional. The user provided unit on the last element.
   *
   * @var string
   */
  public $userProvidedUnitLast;

  public function setMillilitersSum($millilitersSum)
  {
    $this->millilitersSum = $millilitersSum;
  }
  public function getMillilitersSum()
  {
    return $this->millilitersSum;
  }
  /**
   * Optional. The user provided unit on the last element.
   *
   * Accepted values: VOLUME_UNIT_UNSPECIFIED, CUP_IMPERIAL, CUP_US,
   * FLUID_OUNCE_IMPERIAL, FLUID_OUNCE_US, LITER, MILLILITER, PINT_IMPERIAL,
   * PINT_US
   *
   * @param self::USER_PROVIDED_UNIT_LAST_* $userProvidedUnitLast
   */
  public function setUserProvidedUnitLast($userProvidedUnitLast)
  {
    $this->userProvidedUnitLast = $userProvidedUnitLast;
  }
  /**
   * @return self::USER_PROVIDED_UNIT_LAST_*
   */
  public function getUserProvidedUnitLast()
  {
    return $this->userProvidedUnitLast;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VolumeQuantityRollup::class, 'Google_Service_GoogleHealthAPI_VolumeQuantityRollup');
