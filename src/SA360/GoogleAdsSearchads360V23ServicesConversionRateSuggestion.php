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

class GoogleAdsSearchads360V23ServicesConversionRateSuggestion extends \Google\Model
{
  /**
   * Not specified.
   */
  public const CONVERSION_RATE_MODEL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const CONVERSION_RATE_MODEL_UNKNOWN = 'UNKNOWN';
  /**
   * Suggested conversion rate for the authenticated customer based on the
   * previous 70 days.
   */
  public const CONVERSION_RATE_MODEL_CUSTOMER_HISTORY = 'CUSTOMER_HISTORY';
  /**
   * Suggested conversion rate based on an aggressive rate for the entire
   * inventory.
   */
  public const CONVERSION_RATE_MODEL_INVENTORY_AGGRESSIVE = 'INVENTORY_AGGRESSIVE';
  /**
   * Suggested conversion rate based on a conservative rate for the entire
   * inventory.
   */
  public const CONVERSION_RATE_MODEL_INVENTORY_CONSERVATIVE = 'INVENTORY_CONSERVATIVE';
  /**
   * Suggested conversion rate based on the median rate for the entire
   * inventory.
   */
  public const CONVERSION_RATE_MODEL_INVENTORY_MEDIAN = 'INVENTORY_MEDIAN';
  /**
   * The suggested conversion rate. The value is between 0 and 1 (exclusive).
   *
   * @var 
   */
  public $conversionRate;
  /**
   * Model type used to calculate the suggested conversion rate.
   *
   * @var string
   */
  public $conversionRateModel;
  /**
   * The code associated with the plannable product (for example: DEMAND_GEN).
   * To list all plannable product codes, use
   * ReachPlanService.ListPlannableProducts.
   *
   * @var string
   */
  public $plannableProductCode;
  protected $surfaceTargetingType = GoogleAdsSearchads360V23ServicesSurfaceTargeting::class;
  protected $surfaceTargetingDataType = '';

  public function setConversionRate($conversionRate)
  {
    $this->conversionRate = $conversionRate;
  }
  public function getConversionRate()
  {
    return $this->conversionRate;
  }
  /**
   * Model type used to calculate the suggested conversion rate.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CUSTOMER_HISTORY,
   * INVENTORY_AGGRESSIVE, INVENTORY_CONSERVATIVE, INVENTORY_MEDIAN
   *
   * @param self::CONVERSION_RATE_MODEL_* $conversionRateModel
   */
  public function setConversionRateModel($conversionRateModel)
  {
    $this->conversionRateModel = $conversionRateModel;
  }
  /**
   * @return self::CONVERSION_RATE_MODEL_*
   */
  public function getConversionRateModel()
  {
    return $this->conversionRateModel;
  }
  /**
   * The code associated with the plannable product (for example: DEMAND_GEN).
   * To list all plannable product codes, use
   * ReachPlanService.ListPlannableProducts.
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
  /**
   * The surfaces associated with the plannable product. If not present, the
   * conversion rate is considered surface agnostic for this product.
   *
   * @param GoogleAdsSearchads360V23ServicesSurfaceTargeting $surfaceTargeting
   */
  public function setSurfaceTargeting(GoogleAdsSearchads360V23ServicesSurfaceTargeting $surfaceTargeting)
  {
    $this->surfaceTargeting = $surfaceTargeting;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSurfaceTargeting
   */
  public function getSurfaceTargeting()
  {
    return $this->surfaceTargeting;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesConversionRateSuggestion::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesConversionRateSuggestion');
