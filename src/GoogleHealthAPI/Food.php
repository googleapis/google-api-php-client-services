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

class Food extends \Google\Collection
{
  /**
   * Unspecified food access level.
   */
  public const ACCESS_LEVEL_FOOD_ACCESS_LEVEL_UNSPECIFIED = 'FOOD_ACCESS_LEVEL_UNSPECIFIED';
  /**
   * Public food access level.
   */
  public const ACCESS_LEVEL_FOOD_ACCESS_LEVEL_PUBLIC = 'FOOD_ACCESS_LEVEL_PUBLIC';
  /**
   * Private food access level.
   */
  public const ACCESS_LEVEL_FOOD_ACCESS_LEVEL_PRIVATE = 'FOOD_ACCESS_LEVEL_PRIVATE';
  /**
   * Unspecified meal type.
   */
  public const MEAL_TYPE_MEAL_TYPE_UNSPECIFIED = 'MEAL_TYPE_UNSPECIFIED';
  /**
   * Value representing a meal before breakfast.
   */
  public const MEAL_TYPE_BEFORE_BREAKFAST = 'BEFORE_BREAKFAST';
  /**
   * Value representing a breakfast.
   */
  public const MEAL_TYPE_BREAKFAST = 'BREAKFAST';
  /**
   * Value representing a morning snack.
   */
  public const MEAL_TYPE_BEFORE_LUNCH = 'BEFORE_LUNCH';
  /**
   * Value representing a lunch.
   */
  public const MEAL_TYPE_LUNCH = 'LUNCH';
  /**
   * Value representing an afternoon snack.
   */
  public const MEAL_TYPE_BEFORE_DINNER = 'BEFORE_DINNER';
  /**
   * Value representing dinner.
   */
  public const MEAL_TYPE_DINNER = 'DINNER';
  /**
   * Value representing an evening snack.
   */
  public const MEAL_TYPE_AFTER_DINNER = 'AFTER_DINNER';
  /**
   * Value representing any meal outside of the usual three meals per day.
   */
  public const MEAL_TYPE_SNACK = 'SNACK';
  /**
   * Value representing any time (legacy NA).
   */
  public const MEAL_TYPE_ANYTIME = 'ANYTIME';
  protected $collection_key = 'servings';
  /**
   * Required. The access level of the food.
   *
   * @var string
   */
  public $accessLevel;
  /**
   * Optional. The brand of the food.
   *
   * @var string
   */
  public $brand;
  protected $defaultServingType = FoodServing::class;
  protected $defaultServingDataType = '';
  /**
   * Optional. The description of the food.
   *
   * @var string
   */
  public $description;
  /**
   * Required. The display name of the food.
   *
   * @var string
   */
  public $displayName;
  protected $energyAvgType = EnergyQuantity::class;
  protected $energyAvgDataType = '';
  protected $energyFromFatType = EnergyQuantity::class;
  protected $energyFromFatDataType = '';
  protected $energyMaxType = EnergyQuantity::class;
  protected $energyMaxDataType = '';
  protected $energyMinType = EnergyQuantity::class;
  protected $energyMinDataType = '';
  /**
   * Optional. The language code where the food is available in format xx-XX.
   * Supported values are defined in Settings.food_language_code.
   *
   * @var string
   */
  public $languageCode;
  /**
   * Optional. The meal type associated with this food.
   *
   * @var string
   */
  public $mealType;
  protected $nutrientsType = NutrientQuantity::class;
  protected $nutrientsDataType = 'array';
  protected $servingsType = FoodServing::class;
  protected $servingsDataType = 'array';
  protected $totalCarbohydrateType = WeightQuantity::class;
  protected $totalCarbohydrateDataType = '';
  protected $totalFatType = WeightQuantity::class;
  protected $totalFatDataType = '';

  /**
   * Required. The access level of the food.
   *
   * Accepted values: FOOD_ACCESS_LEVEL_UNSPECIFIED, FOOD_ACCESS_LEVEL_PUBLIC,
   * FOOD_ACCESS_LEVEL_PRIVATE
   *
   * @param self::ACCESS_LEVEL_* $accessLevel
   */
  public function setAccessLevel($accessLevel)
  {
    $this->accessLevel = $accessLevel;
  }
  /**
   * @return self::ACCESS_LEVEL_*
   */
  public function getAccessLevel()
  {
    return $this->accessLevel;
  }
  /**
   * Optional. The brand of the food.
   *
   * @param string $brand
   */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /**
   * @return string
   */
  public function getBrand()
  {
    return $this->brand;
  }
  /**
   * Required. Value representing the default serving of the food.
   *
   * @param FoodServing $defaultServing
   */
  public function setDefaultServing(FoodServing $defaultServing)
  {
    $this->defaultServing = $defaultServing;
  }
  /**
   * @return FoodServing
   */
  public function getDefaultServing()
  {
    return $this->defaultServing;
  }
  /**
   * Optional. The description of the food.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. The display name of the food.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. Value representing the average energy of the food for the default
   * serving.
   *
   * @param EnergyQuantity $energyAvg
   */
  public function setEnergyAvg(EnergyQuantity $energyAvg)
  {
    $this->energyAvg = $energyAvg;
  }
  /**
   * @return EnergyQuantity
   */
  public function getEnergyAvg()
  {
    return $this->energyAvg;
  }
  /**
   * Optional. Value representing the energy from fat of the food for the
   * default serving.
   *
   * @param EnergyQuantity $energyFromFat
   */
  public function setEnergyFromFat(EnergyQuantity $energyFromFat)
  {
    $this->energyFromFat = $energyFromFat;
  }
  /**
   * @return EnergyQuantity
   */
  public function getEnergyFromFat()
  {
    return $this->energyFromFat;
  }
  /**
   * Optional. Value representing the maximum energy of the food for the default
   * serving.
   *
   * @param EnergyQuantity $energyMax
   */
  public function setEnergyMax(EnergyQuantity $energyMax)
  {
    $this->energyMax = $energyMax;
  }
  /**
   * @return EnergyQuantity
   */
  public function getEnergyMax()
  {
    return $this->energyMax;
  }
  /**
   * Optional. Value representing the minimum energy of the food for the default
   * serving.
   *
   * @param EnergyQuantity $energyMin
   */
  public function setEnergyMin(EnergyQuantity $energyMin)
  {
    $this->energyMin = $energyMin;
  }
  /**
   * @return EnergyQuantity
   */
  public function getEnergyMin()
  {
    return $this->energyMin;
  }
  /**
   * Optional. The language code where the food is available in format xx-XX.
   * Supported values are defined in Settings.food_language_code.
   *
   * @param string $languageCode
   */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /**
   * @return string
   */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /**
   * Optional. The meal type associated with this food.
   *
   * Accepted values: MEAL_TYPE_UNSPECIFIED, BEFORE_BREAKFAST, BREAKFAST,
   * BEFORE_LUNCH, LUNCH, BEFORE_DINNER, DINNER, AFTER_DINNER, SNACK, ANYTIME
   *
   * @param self::MEAL_TYPE_* $mealType
   */
  public function setMealType($mealType)
  {
    $this->mealType = $mealType;
  }
  /**
   * @return self::MEAL_TYPE_*
   */
  public function getMealType()
  {
    return $this->mealType;
  }
  /**
   * Optional. Value representing the nutrients of the food for the default
   * serving.
   *
   * @param NutrientQuantity[] $nutrients
   */
  public function setNutrients($nutrients)
  {
    $this->nutrients = $nutrients;
  }
  /**
   * @return NutrientQuantity[]
   */
  public function getNutrients()
  {
    return $this->nutrients;
  }
  /**
   * Optional. The serving of the food.
   *
   * @param FoodServing[] $servings
   */
  public function setServings($servings)
  {
    $this->servings = $servings;
  }
  /**
   * @return FoodServing[]
   */
  public function getServings()
  {
    return $this->servings;
  }
  /**
   * Optional. Value representing the total carbohydrate of the food for the
   * default serving.
   *
   * @param WeightQuantity $totalCarbohydrate
   */
  public function setTotalCarbohydrate(WeightQuantity $totalCarbohydrate)
  {
    $this->totalCarbohydrate = $totalCarbohydrate;
  }
  /**
   * @return WeightQuantity
   */
  public function getTotalCarbohydrate()
  {
    return $this->totalCarbohydrate;
  }
  /**
   * Optional. Value representing the total fat of the food for the default
   * serving.
   *
   * @param WeightQuantity $totalFat
   */
  public function setTotalFat(WeightQuantity $totalFat)
  {
    $this->totalFat = $totalFat;
  }
  /**
   * @return WeightQuantity
   */
  public function getTotalFat()
  {
    return $this->totalFat;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Food::class, 'Google_Service_GoogleHealthAPI_Food');
