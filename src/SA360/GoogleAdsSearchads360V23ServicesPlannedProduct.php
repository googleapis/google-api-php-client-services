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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ServicesPlannedProduct extends \Google\Model
{
  protected $advancedProductTargetingType = GoogleAdsSearchads360V23ServicesAdvancedProductTargeting::class;
  protected $advancedProductTargetingDataType = '';
  /**
   * Required. Maximum budget allocation in micros for the selected product. The
   * value is specified in the selected planning currency_code. For example: 1
   * 000 000$ = 1 000 000 000 000 micros.
   *
   * @var string
   */
  public $budgetMicros;
  /**
   * Conversion rate as a decimal between 0 and 1, exclusive. For example: if 2%
   * of ad interactions are expected to lead to conversions, conversion_rate
   * should be 0.02. This field is required for DEMAND_GEN plannable products.
   * It is not supported for other plannable products.
   *
   * @var 
   */
  public $conversionRate;
  /**
   * Required. Selected product for planning. The code associated with the ad
   * product (for example: Trueview, Bumper). To list the available plannable
   * product codes use ReachPlanService.ListPlannableProducts.
   *
   * @var string
   */
  public $plannableProductCode;

  /**
   * Targeting settings for the selected product. To list the available
   * targeting for each product use ReachPlanService.ListPlannableProducts.
   *
   * @param GoogleAdsSearchads360V23ServicesAdvancedProductTargeting $advancedProductTargeting
   */
  public function setAdvancedProductTargeting(GoogleAdsSearchads360V23ServicesAdvancedProductTargeting $advancedProductTargeting)
  {
    $this->advancedProductTargeting = $advancedProductTargeting;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesAdvancedProductTargeting
   */
  public function getAdvancedProductTargeting()
  {
    return $this->advancedProductTargeting;
  }
  /**
   * Required. Maximum budget allocation in micros for the selected product. The
   * value is specified in the selected planning currency_code. For example: 1
   * 000 000$ = 1 000 000 000 000 micros.
   *
   * @param string $budgetMicros
   */
  public function setBudgetMicros($budgetMicros)
  {
    $this->budgetMicros = $budgetMicros;
  }
  /**
   * @return string
   */
  public function getBudgetMicros()
  {
    return $this->budgetMicros;
  }
  public function setConversionRate($conversionRate)
  {
    $this->conversionRate = $conversionRate;
  }
  public function getConversionRate()
  {
    return $this->conversionRate;
  }
  /**
   * Required. Selected product for planning. The code associated with the ad
   * product (for example: Trueview, Bumper). To list the available plannable
   * product codes use ReachPlanService.ListPlannableProducts.
   *
   * @param string $plannableProductCode
   */
  public function setPlannableProductCode($plannableProductCode)
  {
    $this->plannableProductCode = $plannableProductCode;
  }
  /**
   * @return string
   */
  public function getPlannableProductCode()
  {
    return $this->plannableProductCode;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesPlannedProduct::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesPlannedProduct');
