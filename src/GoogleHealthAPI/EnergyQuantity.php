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

class EnergyQuantity extends \Google\Model
{
  /**
   * Unspecified energy unit.
   */
  public const USER_PROVIDED_UNIT_ENERGY_UNIT_UNSPECIFIED = 'ENERGY_UNIT_UNSPECIFIED';
  /**
   * Value representing joule.
   */
  public const USER_PROVIDED_UNIT_JOULE = 'JOULE';
  /**
   * Value representing kilojoule.
   */
  public const USER_PROVIDED_UNIT_KILOJOULE = 'KILOJOULE';
  /**
   * Value representing kilocalorie.
   */
  public const USER_PROVIDED_UNIT_KILOCALORIE = 'KILOCALORIE';
  /**
   * Value representing small calorie.
   */
  public const USER_PROVIDED_UNIT_SMALL_CALORIE = 'SMALL_CALORIE';
  /**
   * Value representing calorie.
   */
  public const USER_PROVIDED_UNIT_CALORIE = 'CALORIE';
  /**
   * Required. Value representing the energy in kilocalories.
   *
   * @var 
   */
  public $kcal;
  /**
   * Optional. Value representing the user provided unit.
   *
   * @var string
   */
  public $userProvidedUnit;

  public function setKcal($kcal)
  {
    $this->kcal = $kcal;
  }
  public function getKcal()
  {
    return $this->kcal;
  }
  /**
   * Optional. Value representing the user provided unit.
   *
   * Accepted values: ENERGY_UNIT_UNSPECIFIED, JOULE, KILOJOULE, KILOCALORIE,
   * SMALL_CALORIE, CALORIE
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
class_alias(EnergyQuantity::class, 'Google_Service_GoogleHealthAPI_EnergyQuantity');
