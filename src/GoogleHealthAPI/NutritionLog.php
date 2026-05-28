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

class NutritionLog extends \Google\Collection
{
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
  protected $collection_key = 'nutrients';
  protected $energyType = EnergyQuantity::class;
  protected $energyDataType = '';
  protected $energyFromFatType = EnergyQuantity::class;
  protected $energyFromFatDataType = '';
  /**
   * Required. Represents the food ID.
   *
   * @var string
   */
  public $food;
  /**
   * Value representing the display name of the food. For nutrition logs created
   * from an identified food, this field will be populated based on the
   * referenced food. For anonymous food, this field will be populated manually.
   *
   * @var string
   */
  public $foodDisplayName;
  protected $intervalType = SessionTimeInterval::class;
  protected $intervalDataType = '';
  /**
   * Optional. Value representing the meal type of the nutrition log.
   *
   * @var string
   */
  public $mealType;
  protected $nutrientsType = NutrientQuantity::class;
  protected $nutrientsDataType = 'array';
  protected $servingType = Serving::class;
  protected $servingDataType = '';
  protected $totalCarbohydrateType = WeightQuantity::class;
  protected $totalCarbohydrateDataType = '';
  protected $totalFatType = WeightQuantity::class;
  protected $totalFatDataType = '';

  /**
   * Optional. Value representing the energy of the nutrition log. For nutrition
   * logs created from an identified food, this field will be populated based on
   * the referenced food. For anonymous food, this field will be populated
   * manually.
   *
   * @param EnergyQuantity $energy
   */
  public function setEnergy(EnergyQuantity $energy)
  {
    $this->energy = $energy;
  }
  /**
   * @return EnergyQuantity
   */
  public function getEnergy()
  {
    return $this->energy;
  }
  /**
   * Optional. Value representing the energy from fat of the nutrition log. For
   * nutrition logs created from an identified food, this field will be
   * populated based on the referenced food. For anonymous food, this field will
   * be populated manually.
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
   * Required. Represents the food ID.
   *
   * @param string $food
   */
  public function setFood($food)
  {
    $this->food = $food;
  }
  /**
   * @return string
   */
  public function getFood()
  {
    return $this->food;
  }
  /**
   * Value representing the display name of the food. For nutrition logs created
   * from an identified food, this field will be populated based on the
   * referenced food. For anonymous food, this field will be populated manually.
   *
   * @param string $foodDisplayName
   */
  public function setFoodDisplayName($foodDisplayName)
  {
    $this->foodDisplayName = $foodDisplayName;
  }
  /**
   * @return string
   */
  public function getFoodDisplayName()
  {
    return $this->foodDisplayName;
  }
  /**
   * Required. Observed interval.
   *
   * @param SessionTimeInterval $interval
   */
  public function setInterval(SessionTimeInterval $interval)
  {
    $this->interval = $interval;
  }
  /**
   * @return SessionTimeInterval
   */
  public function getInterval()
  {
    return $this->interval;
  }
  /**
   * Optional. Value representing the meal type of the nutrition log.
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
   * Optional. Value representing the nutrients of the nutrition log.
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
   * Optional. Value representing the nutrition log serving.
   *
   * @param Serving $serving
   */
  public function setServing(Serving $serving)
  {
    $this->serving = $serving;
  }
  /**
   * @return Serving
   */
  public function getServing()
  {
    return $this->serving;
  }
  /**
   * Optional. Value representing the total carbohydrate of the nutrition log.
   * For nutrition logs created from an identified food, this field will be
   * populated based on the referenced food. For anonymous food, this field will
   * be populated manually.
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
   * Optional. Value representing the total fat of the nutrition log. For
   * nutrition logs created from an identified food, this field will be
   * populated based on the referenced food. For anonymous food, this field will
   * be populated manually.
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
class_alias(NutritionLog::class, 'Google_Service_GoogleHealthAPI_NutritionLog');
