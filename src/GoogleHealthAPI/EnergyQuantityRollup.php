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

class EnergyQuantityRollup extends \Google\Model
{
  /**
   * Unspecified energy unit.
   */
  public const USER_PROVIDED_UNIT_LAST_ENERGY_UNIT_UNSPECIFIED = 'ENERGY_UNIT_UNSPECIFIED';
  /**
   * Value representing joule.
   */
  public const USER_PROVIDED_UNIT_LAST_JOULE = 'JOULE';
  /**
   * Value representing kilojoule.
   */
  public const USER_PROVIDED_UNIT_LAST_KILOJOULE = 'KILOJOULE';
  /**
   * Value representing kilocalorie.
   */
  public const USER_PROVIDED_UNIT_LAST_KILOCALORIE = 'KILOCALORIE';
  /**
   * Value representing small calorie.
   */
  public const USER_PROVIDED_UNIT_LAST_SMALL_CALORIE = 'SMALL_CALORIE';
  /**
   * Value representing calorie.
   */
  public const USER_PROVIDED_UNIT_LAST_CALORIE = 'CALORIE';
  /**
   * Required. The sum of the energy in kilocalories.
   *
   * @var 
   */
  public $kcalSum;
  /**
   * Optional. The user provided unit on the last element.
   *
   * @var string
   */
  public $userProvidedUnitLast;

  public function setKcalSum($kcalSum)
  {
    $this->kcalSum = $kcalSum;
  }
  public function getKcalSum()
  {
    return $this->kcalSum;
  }
  /**
   * Optional. The user provided unit on the last element.
   *
   * Accepted values: ENERGY_UNIT_UNSPECIFIED, JOULE, KILOJOULE, KILOCALORIE,
   * SMALL_CALORIE, CALORIE
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
class_alias(EnergyQuantityRollup::class, 'Google_Service_GoogleHealthAPI_EnergyQuantityRollup');
