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

class FoodServing extends \Google\Model
{
  /**
   * Optional. Amount of food consumed, fractional values are supported.
   *
   * @var 
   */
  public $amount;
  /**
   * Required. Food measurement unit
   *
   * @var string
   */
  public $foodMeasurementUnit;
  /**
   * Output only. Legacy measurement unit for serving size in singular form
   * (e.g. "piece", "gram").
   *
   * @var string
   */
  public $foodMeasurementUnitDisplayName;
  /**
   * Output only. Legacy measurement unit for serving size in plural form (e.g.
   * "pieces", "grams").
   *
   * @var string
   */
  public $foodMeasurementUnitDisplayNamePlural;
  /**
   * Optional. Value representing the multiplier used to compute the energy when
   * using this serving instead of the default serving.
   *
   * @var 
   */
  public $multiplier;

  public function setAmount($amount)
  {
    $this->amount = $amount;
  }
  public function getAmount()
  {
    return $this->amount;
  }
  /**
   * Required. Food measurement unit
   *
   * @param string $foodMeasurementUnit
   */
  public function setFoodMeasurementUnit($foodMeasurementUnit)
  {
    $this->foodMeasurementUnit = $foodMeasurementUnit;
  }
  /**
   * @return string
   */
  public function getFoodMeasurementUnit()
  {
    return $this->foodMeasurementUnit;
  }
  /**
   * Output only. Legacy measurement unit for serving size in singular form
   * (e.g. "piece", "gram").
   *
   * @param string $foodMeasurementUnitDisplayName
   */
  public function setFoodMeasurementUnitDisplayName($foodMeasurementUnitDisplayName)
  {
    $this->foodMeasurementUnitDisplayName = $foodMeasurementUnitDisplayName;
  }
  /**
   * @return string
   */
  public function getFoodMeasurementUnitDisplayName()
  {
    return $this->foodMeasurementUnitDisplayName;
  }
  /**
   * Output only. Legacy measurement unit for serving size in plural form (e.g.
   * "pieces", "grams").
   *
   * @param string $foodMeasurementUnitDisplayNamePlural
   */
  public function setFoodMeasurementUnitDisplayNamePlural($foodMeasurementUnitDisplayNamePlural)
  {
    $this->foodMeasurementUnitDisplayNamePlural = $foodMeasurementUnitDisplayNamePlural;
  }
  /**
   * @return string
   */
  public function getFoodMeasurementUnitDisplayNamePlural()
  {
    return $this->foodMeasurementUnitDisplayNamePlural;
  }
  public function setMultiplier($multiplier)
  {
    $this->multiplier = $multiplier;
  }
  public function getMultiplier()
  {
    return $this->multiplier;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FoodServing::class, 'Google_Service_GoogleHealthAPI_FoodServing');
