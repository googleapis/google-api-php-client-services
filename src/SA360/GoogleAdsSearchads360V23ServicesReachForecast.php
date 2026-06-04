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

class GoogleAdsSearchads360V23ServicesReachForecast extends \Google\Collection
{
  protected $collection_key = 'plannedProductReachForecasts';
  /**
   * The cost in micros.
   *
   * @var string
   */
  public $costMicros;
  protected $forecastType = GoogleAdsSearchads360V23ServicesForecast::class;
  protected $forecastDataType = '';
  protected $plannedProductReachForecastsType = GoogleAdsSearchads360V23ServicesPlannedProductReachForecast::class;
  protected $plannedProductReachForecastsDataType = 'array';

  /**
   * The cost in micros.
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
   * Forecasted traffic metrics for this point.
   *
   * @param GoogleAdsSearchads360V23ServicesForecast $forecast
   */
  public function setForecast(GoogleAdsSearchads360V23ServicesForecast $forecast)
  {
    $this->forecast = $forecast;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesForecast
   */
  public function getForecast()
  {
    return $this->forecast;
  }
  /**
   * The forecasted allocation and traffic metrics for each planned product at
   * this point on the reach curve.
   *
   * @param GoogleAdsSearchads360V23ServicesPlannedProductReachForecast[] $plannedProductReachForecasts
   */
  public function setPlannedProductReachForecasts($plannedProductReachForecasts)
  {
    $this->plannedProductReachForecasts = $plannedProductReachForecasts;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesPlannedProductReachForecast[]
   */
  public function getPlannedProductReachForecasts()
  {
    return $this->plannedProductReachForecasts;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesReachForecast::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesReachForecast');
