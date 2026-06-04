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

class GoogleAdsSearchads360V23ServicesPlannedProductReachForecast extends \Google\Model
{
  /**
   * The cost in micros. This may differ from the product's input allocation if
   * one or more planned products cannot fulfill the budget because of limited
   * inventory.
   *
   * @var string
   */
  public $costMicros;
  /**
   * Selected product for planning. The product codes returned are within the
   * set of the ones returned by ListPlannableProducts when using the same
   * location ID.
   *
   * @var string
   */
  public $plannableProductCode;
  protected $plannedProductForecastType = GoogleAdsSearchads360V23ServicesPlannedProductForecast::class;
  protected $plannedProductForecastDataType = '';

  /**
   * The cost in micros. This may differ from the product's input allocation if
   * one or more planned products cannot fulfill the budget because of limited
   * inventory.
   *
   * @param string $costMicros
   */
  public function setCostMicros($costMicros)
  {
    $this->costMicros = $costMicros;
  }
  /**
   * @return string
   */
  public function getCostMicros()
  {
    return $this->costMicros;
  }
  /**
   * Selected product for planning. The product codes returned are within the
   * set of the ones returned by ListPlannableProducts when using the same
   * location ID.
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
   * Forecasted traffic metrics for this product.
   *
   * @param GoogleAdsSearchads360V23ServicesPlannedProductForecast $plannedProductForecast
   */
  public function setPlannedProductForecast(GoogleAdsSearchads360V23ServicesPlannedProductForecast $plannedProductForecast)
  {
    $this->plannedProductForecast = $plannedProductForecast;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesPlannedProductForecast
   */
  public function getPlannedProductForecast()
  {
    return $this->plannedProductForecast;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesPlannedProductReachForecast::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesPlannedProductReachForecast');
