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

class GoogleAdsSearchads360V23CommonCpvBidSimulationPoint extends \Google\Model
{
  /**
   * Projected cost in micros.
   *
   * @var string
   */
  public $costMicros;
  /**
   * The simulated CPV bid upon which projected metrics are based.
   *
   * @var string
   */
  public $cpvBidMicros;
  /**
   * Projected number of impressions.
   *
   * @var string
   */
  public $impressions;
  /**
   * Projected number of views.
   *
   * @var string
   */
  public $views;

  /**
   * Projected cost in micros.
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
   * The simulated CPV bid upon which projected metrics are based.
   *
   * @param string $cpvBidMicros
   */
  public function setCpvBidMicros($cpvBidMicros)
  {
    $this->cpvBidMicros = $cpvBidMicros;
  }
  /**
   * @return string
   */
  public function getCpvBidMicros()
  {
    return $this->cpvBidMicros;
  }
  /**
   * Projected number of impressions.
   *
   * @param string $impressions
   */
  public function setImpressions($impressions)
  {
    $this->impressions = $impressions;
  }
  /**
   * @return string
   */
  public function getImpressions()
  {
    return $this->impressions;
  }
  /**
   * Projected number of views.
   *
   * @param string $views
   */
  public function setViews($views)
  {
    $this->views = $views;
  }
  /**
   * @return string
   */
  public function getViews()
  {
    return $this->views;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonCpvBidSimulationPoint::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonCpvBidSimulationPoint');
