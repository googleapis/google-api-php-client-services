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

class GoogleAdsSearchads360V23ServicesKeywordForecastMetrics extends \Google\Model
{
  /**
   * Average cost per acquisition calculated as cost_micros / conversions.
   *
   * @var string
   */
  public $averageCpaMicros;
  /**
   * The average cpc. Available only if clicks > 0.
   *
   * @var string
   */
  public $averageCpcMicros;
  /**
   * The average click through rate. Available only if impressions > 0.
   *
   * @var 
   */
  public $clickThroughRate;
  /**
   * The total number of clicks.
   *
   * @var 
   */
  public $clicks;
  /**
   * Forecasted conversion rate.
   *
   * @var 
   */
  public $conversionRate;
  /**
   * Forecasted number of conversions: clicks * conversion_rate.
   *
   * @var 
   */
  public $conversions;
  /**
   * The total cost.
   *
   * @var string
   */
  public $costMicros;
  /**
   * The total number of impressions.
   *
   * @var 
   */
  public $impressions;

  /**
   * Average cost per acquisition calculated as cost_micros / conversions.
   *
   * @param string $averageCpaMicros
   */
  public function setAverageCpaMicros($averageCpaMicros)
  {
    $this->averageCpaMicros = $averageCpaMicros;
  }
  /**
   * @return string
   */
  public function getAverageCpaMicros()
  {
    return $this->averageCpaMicros;
  }
  /**
   * The average cpc. Available only if clicks > 0.
   *
   * @param string $averageCpcMicros
   */
  public function setAverageCpcMicros($averageCpcMicros)
  {
    $this->averageCpcMicros = $averageCpcMicros;
  }
  /**
   * @return string
   */
  public function getAverageCpcMicros()
  {
    return $this->averageCpcMicros;
  }
  public function setClickThroughRate($clickThroughRate)
  {
    $this->clickThroughRate = $clickThroughRate;
  }
  public function getClickThroughRate()
  {
    return $this->clickThroughRate;
  }
  public function setClicks($clicks)
  {
    $this->clicks = $clicks;
  }
  public function getClicks()
  {
    return $this->clicks;
  }
  public function setConversionRate($conversionRate)
  {
    $this->conversionRate = $conversionRate;
  }
  public function getConversionRate()
  {
    return $this->conversionRate;
  }
  public function setConversions($conversions)
  {
    $this->conversions = $conversions;
  }
  public function getConversions()
  {
    return $this->conversions;
  }
  /**
   * The total cost.
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
  public function setImpressions($impressions)
  {
    $this->impressions = $impressions;
  }
  public function getImpressions()
  {
    return $this->impressions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesKeywordForecastMetrics::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesKeywordForecastMetrics');
