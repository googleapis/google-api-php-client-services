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

class WeightQuantity extends \Google\Model
{
  /**
   * Unspecified weight unit.
   */
  public const USER_PROVIDED_UNIT_WEIGHT_UNIT_UNSPECIFIED = 'WEIGHT_UNIT_UNSPECIFIED';
  /**
   * Value representing gram.
   */
  public const USER_PROVIDED_UNIT_GRAM = 'GRAM';
  /**
   * Value representing kilogram.
   */
  public const USER_PROVIDED_UNIT_KILOGRAM = 'KILOGRAM';
  /**
   * Value representing ounce.
   */
  public const USER_PROVIDED_UNIT_OUNCE = 'OUNCE';
  /**
   * Value representing pound.
   */
  public const USER_PROVIDED_UNIT_POUND = 'POUND';
  /**
   * Value representing stone.
   */
  public const USER_PROVIDED_UNIT_STONE = 'STONE';
  /**
   * Value representing milligram.
   */
  public const USER_PROVIDED_UNIT_MILLIGRAM = 'MILLIGRAM';
  /**
   * Value representing microgram.
   */
  public const USER_PROVIDED_UNIT_MICROGRAM = 'MICROGRAM';
  /**
   * Value representing nanogram.
   */
  public const USER_PROVIDED_UNIT_NANOGRAM = 'NANOGRAM';
  /**
   * Required. Value representing the weight in grams.
   *
   * @var 
   */
  public $grams;
  /**
   * Optional. Value representing the user provided unit.
   *
   * @var string
   */
  public $userProvidedUnit;

  public function setGrams($grams)
  {
    $this->grams = $grams;
  }
  public function getGrams()
  {
    return $this->grams;
  }
  /**
   * Optional. Value representing the user provided unit.
   *
   * Accepted values: WEIGHT_UNIT_UNSPECIFIED, GRAM, KILOGRAM, OUNCE, POUND,
   * STONE, MILLIGRAM, MICROGRAM, NANOGRAM
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
class_alias(WeightQuantity::class, 'Google_Service_GoogleHealthAPI_WeightQuantity');
