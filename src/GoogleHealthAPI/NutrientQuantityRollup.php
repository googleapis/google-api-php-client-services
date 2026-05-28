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

class NutrientQuantityRollup extends \Google\Model
{
  /**
   * Unspecified nutrient.
   */
  public const NUTRIENT_NUTRIENT_UNSPECIFIED = 'NUTRIENT_UNSPECIFIED';
  /**
   * Value representing biotin nutrient.
   */
  public const NUTRIENT_BIOTIN = 'BIOTIN';
  /**
   * Value representing caffeine nutrient.
   */
  public const NUTRIENT_CAFFEINE = 'CAFFEINE';
  /**
   * Value representing calcium nutrient.
   */
  public const NUTRIENT_CALCIUM = 'CALCIUM';
  /**
   * Value representing chloride nutrient.
   */
  public const NUTRIENT_CHLORIDE = 'CHLORIDE';
  /**
   * Value representing carbohydrates nutrient.
   */
  public const NUTRIENT_CARBOHYDRATES = 'CARBOHYDRATES';
  /**
   * Value representing cholesterol nutrient.
   */
  public const NUTRIENT_CHOLESTEROL = 'CHOLESTEROL';
  /**
   * Value representing chromium nutrient.
   */
  public const NUTRIENT_CHROMIUM = 'CHROMIUM';
  /**
   * Value representing copper nutrient.
   */
  public const NUTRIENT_COPPER = 'COPPER';
  /**
   * Value representing dietary fiber nutrient.
   */
  public const NUTRIENT_DIETARY_FIBER = 'DIETARY_FIBER';
  /**
   * Value representing folic acid nutrient.
   */
  public const NUTRIENT_FOLIC_ACID = 'FOLIC_ACID';
  /**
   * Value representing iodine nutrient.
   */
  public const NUTRIENT_IODINE = 'IODINE';
  /**
   * Value representing iron nutrient.
   */
  public const NUTRIENT_IRON = 'IRON';
  /**
   * Value representing magnesium nutrient.
   */
  public const NUTRIENT_MAGNESIUM = 'MAGNESIUM';
  /**
   * Value representing manganese nutrient.
   */
  public const NUTRIENT_MANGANESE = 'MANGANESE';
  /**
   * Value representing molybdenum nutrient.
   */
  public const NUTRIENT_MOLYBDENUM = 'MOLYBDENUM';
  /**
   * Value representing monounsaturated fat nutrient.
   */
  public const NUTRIENT_MONOUNSATURATED_FAT = 'MONOUNSATURATED_FAT';
  /**
   * Value representing niacin nutrient.
   */
  public const NUTRIENT_NIACIN = 'NIACIN';
  /**
   * Value representing pantothenic acid nutrient.
   */
  public const NUTRIENT_PANTOTHENIC_ACID = 'PANTOTHENIC_ACID';
  /**
   * Value representing phosphorus nutrient.
   */
  public const NUTRIENT_PHOSPHORUS = 'PHOSPHORUS';
  /**
   * Value representing polyunsaturated fat nutrient.
   */
  public const NUTRIENT_POLYUNSATURATED_FAT = 'POLYUNSATURATED_FAT';
  /**
   * Value representing potassium nutrient.
   */
  public const NUTRIENT_POTASSIUM = 'POTASSIUM';
  /**
   * Value representing protein nutrient.
   */
  public const NUTRIENT_PROTEIN = 'PROTEIN';
  /**
   * Value representing riboflavin nutrient.
   */
  public const NUTRIENT_RIBOFLAVIN = 'RIBOFLAVIN';
  /**
   * Value representing saturated fat nutrient.
   */
  public const NUTRIENT_SATURATED_FAT = 'SATURATED_FAT';
  /**
   * Value representing selenium nutrient.
   */
  public const NUTRIENT_SELENIUM = 'SELENIUM';
  /**
   * Value representing sodium nutrient.
   */
  public const NUTRIENT_SODIUM = 'SODIUM';
  /**
   * Value representing sugar nutrient.
   */
  public const NUTRIENT_SUGAR = 'SUGAR';
  /**
   * Value representing thiamin nutrient.
   */
  public const NUTRIENT_THIAMIN = 'THIAMIN';
  /**
   * Value representing trans fat nutrient.
   */
  public const NUTRIENT_TRANS_FAT = 'TRANS_FAT';
  /**
   * Value representing unsaturated fat nutrient.
   */
  public const NUTRIENT_UNSATURATED_FAT = 'UNSATURATED_FAT';
  /**
   * Value representing vitamin A nutrient.
   */
  public const NUTRIENT_VITAMIN_A = 'VITAMIN_A';
  /**
   * Value representing vitamin B12 nutrient.
   */
  public const NUTRIENT_VITAMIN_B12 = 'VITAMIN_B12';
  /**
   * Value representing vitamin B6 nutrient.
   */
  public const NUTRIENT_VITAMIN_B6 = 'VITAMIN_B6';
  /**
   * Value representing vitamin C nutrient.
   */
  public const NUTRIENT_VITAMIN_C = 'VITAMIN_C';
  /**
   * Value representing vitamin D nutrient.
   */
  public const NUTRIENT_VITAMIN_D = 'VITAMIN_D';
  /**
   * Value representing vitamin E nutrient.
   */
  public const NUTRIENT_VITAMIN_E = 'VITAMIN_E';
  /**
   * Value representing vitamin K nutrient.
   */
  public const NUTRIENT_VITAMIN_K = 'VITAMIN_K';
  /**
   * Value representing zinc nutrient.
   */
  public const NUTRIENT_ZINC = 'ZINC';
  /**
   * Value representing folate nutrient.
   */
  public const NUTRIENT_FOLATE = 'FOLATE';
  /**
   * Required. Aggregated nutrient.
   *
   * @var string
   */
  public $nutrient;
  protected $quantityType = WeightQuantityRollup::class;
  protected $quantityDataType = '';

  /**
   * Required. Aggregated nutrient.
   *
   * Accepted values: NUTRIENT_UNSPECIFIED, BIOTIN, CAFFEINE, CALCIUM, CHLORIDE,
   * CARBOHYDRATES, CHOLESTEROL, CHROMIUM, COPPER, DIETARY_FIBER, FOLIC_ACID,
   * IODINE, IRON, MAGNESIUM, MANGANESE, MOLYBDENUM, MONOUNSATURATED_FAT,
   * NIACIN, PANTOTHENIC_ACID, PHOSPHORUS, POLYUNSATURATED_FAT, POTASSIUM,
   * PROTEIN, RIBOFLAVIN, SATURATED_FAT, SELENIUM, SODIUM, SUGAR, THIAMIN,
   * TRANS_FAT, UNSATURATED_FAT, VITAMIN_A, VITAMIN_B12, VITAMIN_B6, VITAMIN_C,
   * VITAMIN_D, VITAMIN_E, VITAMIN_K, ZINC, FOLATE
   *
   * @param self::NUTRIENT_* $nutrient
   */
  public function setNutrient($nutrient)
  {
    $this->nutrient = $nutrient;
  }
  /**
   * @return self::NUTRIENT_*
   */
  public function getNutrient()
  {
    return $this->nutrient;
  }
  /**
   * Required. Aggregated nutrient weight.
   *
   * @param WeightQuantityRollup $quantity
   */
  public function setQuantity(WeightQuantityRollup $quantity)
  {
    $this->quantity = $quantity;
  }
  /**
   * @return WeightQuantityRollup
   */
  public function getQuantity()
  {
    return $this->quantity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NutrientQuantityRollup::class, 'Google_Service_GoogleHealthAPI_NutrientQuantityRollup');
