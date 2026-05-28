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

class NutritionLogRollupValue extends \Google\Collection
{
  protected $collection_key = 'nutrients';
  protected $energyType = EnergyQuantityRollup::class;
  protected $energyDataType = '';
  protected $energyFromFatType = EnergyQuantityRollup::class;
  protected $energyFromFatDataType = '';
  protected $nutrientsType = NutrientQuantityRollup::class;
  protected $nutrientsDataType = 'array';
  protected $totalCarbohydrateType = WeightQuantityRollup::class;
  protected $totalCarbohydrateDataType = '';
  protected $totalFatType = WeightQuantityRollup::class;
  protected $totalFatDataType = '';

  /**
   * Energy rollup.
   *
   * @param EnergyQuantityRollup $energy
   */
  public function setEnergy(EnergyQuantityRollup $energy)
  {
    $this->energy = $energy;
  }
  /**
   * @return EnergyQuantityRollup
   */
  public function getEnergy()
  {
    return $this->energy;
  }
  /**
   * Value Energy from fat rollup.
   *
   * @param EnergyQuantityRollup $energyFromFat
   */
  public function setEnergyFromFat(EnergyQuantityRollup $energyFromFat)
  {
    $this->energyFromFat = $energyFromFat;
  }
  /**
   * @return EnergyQuantityRollup
   */
  public function getEnergyFromFat()
  {
    return $this->energyFromFat;
  }
  /**
   * List of the nutrient roll-ups by the nutrient type.
   *
   * @param NutrientQuantityRollup[] $nutrients
   */
  public function setNutrients($nutrients)
  {
    $this->nutrients = $nutrients;
  }
  /**
   * @return NutrientQuantityRollup[]
   */
  public function getNutrients()
  {
    return $this->nutrients;
  }
  /**
   * Total carbohydrate rollup.
   *
   * @param WeightQuantityRollup $totalCarbohydrate
   */
  public function setTotalCarbohydrate(WeightQuantityRollup $totalCarbohydrate)
  {
    $this->totalCarbohydrate = $totalCarbohydrate;
  }
  /**
   * @return WeightQuantityRollup
   */
  public function getTotalCarbohydrate()
  {
    return $this->totalCarbohydrate;
  }
  /**
   * Total fat rollup.
   *
   * @param WeightQuantityRollup $totalFat
   */
  public function setTotalFat(WeightQuantityRollup $totalFat)
  {
    $this->totalFat = $totalFat;
  }
  /**
   * @return WeightQuantityRollup
   */
  public function getTotalFat()
  {
    return $this->totalFat;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NutritionLogRollupValue::class, 'Google_Service_GoogleHealthAPI_NutritionLogRollupValue');
