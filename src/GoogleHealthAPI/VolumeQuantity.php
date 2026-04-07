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

class VolumeQuantity extends \Google\Model
{
  /**
   * Unspecified volume unit.
   */
  public const USER_PROVIDED_UNIT_VOLUME_UNIT_UNSPECIFIED = 'VOLUME_UNIT_UNSPECIFIED';
  /**
   * Cup (imperial)
   */
  public const USER_PROVIDED_UNIT_CUP_IMPERIAL = 'CUP_IMPERIAL';
  /**
   * Cup (US)
   */
  public const USER_PROVIDED_UNIT_CUP_US = 'CUP_US';
  /**
   * Fluid ounce (imperial)
   */
  public const USER_PROVIDED_UNIT_FLUID_OUNCE_IMPERIAL = 'FLUID_OUNCE_IMPERIAL';
  /**
   * Fluid ounce (US)
   */
  public const USER_PROVIDED_UNIT_FLUID_OUNCE_US = 'FLUID_OUNCE_US';
  /**
   * Liter
   */
  public const USER_PROVIDED_UNIT_LITER = 'LITER';
  /**
   * Milliliter
   */
  public const USER_PROVIDED_UNIT_MILLILITER = 'MILLILITER';
  /**
   * Pint (imperial)
   */
  public const USER_PROVIDED_UNIT_PINT_IMPERIAL = 'PINT_IMPERIAL';
  /**
   * Pint (US)
   */
  public const USER_PROVIDED_UNIT_PINT_US = 'PINT_US';
  /**
   * Required. Value representing the volume in milliliters.
   *
   * @var 
   */
  public $milliliters;
  /**
   * Optional. Value representing the user provided unit.
   *
   * @var string
   */
  public $userProvidedUnit;

  public function setMilliliters($milliliters)
  {
    $this->milliliters = $milliliters;
  }
  public function getMilliliters()
  {
    return $this->milliliters;
  }
  /**
   * Optional. Value representing the user provided unit.
   *
   * Accepted values: VOLUME_UNIT_UNSPECIFIED, CUP_IMPERIAL, CUP_US,
   * FLUID_OUNCE_IMPERIAL, FLUID_OUNCE_US, LITER, MILLILITER, PINT_IMPERIAL,
   * PINT_US
   *
   * @param self::USER_PROVIDED_UNIT_* $userProvidedUnit
   */
  public function setUserProvidedUnit($userProvidedUnit)
  {
    $this->userProvidedUnit = $userProvidedUnit;
  }
  /**
   * @return self::USER_PROVIDED_UNIT_*
   */
  public function getUserProvidedUnit()
  {
    return $this->userProvidedUnit;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VolumeQuantity::class, 'Google_Service_GoogleHealthAPI_VolumeQuantity');
