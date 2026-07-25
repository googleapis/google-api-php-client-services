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

namespace Google\Service\DisplayVideo;

class PlannedProductForecast extends \Google\Model
{
  /**
   * Number of on-target impressions including co-viewers.
   *
   * @var string
   */
  public $onTargetCoviewImpressions;
  /**
   * Number of unique people reached that match the on-target definition
   * including co-viewers.
   *
   * @var string
   */
  public $onTargetCoviewReach;
  /**
   * Number of on-target impressions.
   *
   * @var string
   */
  public $onTargetImpressions;
  /**
   * Number of unique people reached that match the on-target definition.
   *
   * @var string
   */
  public $onTargetReach;
  /**
   * Total number of impressions including co-viewers.
   *
   * @var string
   */
  public $totalCoviewImpressions;
  /**
   * Total number of unique people reached including co-viewers.
   *
   * @var string
   */
  public $totalCoviewReach;
  /**
   * Total number of impressions.
   *
   * @var string
   */
  public $totalImpressions;
  /**
   * Total number of unique people reached.
   *
   * @var string
   */
  public $totalReach;
  /**
   * Number of TrueView views.
   *
   * @var string
   */
  public $trueviewViews;
  /**
   * Number of viewable impressions.
   *
   * @var string
   */
  public $viewableImpressions;

  /**
   * Number of on-target impressions including co-viewers.
   *
   * @param string $onTargetCoviewImpressions
   */
  public function setOnTargetCoviewImpressions($onTargetCoviewImpressions)
  {
    $this->onTargetCoviewImpressions = $onTargetCoviewImpressions;
  }
  /**
   * @return string
   */
  public function getOnTargetCoviewImpressions()
  {
    return $this->onTargetCoviewImpressions;
  }
  /**
   * Number of unique people reached that match the on-target definition
   * including co-viewers.
   *
   * @param string $onTargetCoviewReach
   */
  public function setOnTargetCoviewReach($onTargetCoviewReach)
  {
    $this->onTargetCoviewReach = $onTargetCoviewReach;
  }
  /**
   * @return string
   */
  public function getOnTargetCoviewReach()
  {
    return $this->onTargetCoviewReach;
  }
  /**
   * Number of on-target impressions.
   *
   * @param string $onTargetImpressions
   */
  public function setOnTargetImpressions($onTargetImpressions)
  {
    $this->onTargetImpressions = $onTargetImpressions;
  }
  /**
   * @return string
   */
  public function getOnTargetImpressions()
  {
    return $this->onTargetImpressions;
  }
  /**
   * Number of unique people reached that match the on-target definition.
   *
   * @param string $onTargetReach
   */
  public function setOnTargetReach($onTargetReach)
  {
    $this->onTargetReach = $onTargetReach;
  }
  /**
   * @return string
   */
  public function getOnTargetReach()
  {
    return $this->onTargetReach;
  }
  /**
   * Total number of impressions including co-viewers.
   *
   * @param string $totalCoviewImpressions
   */
  public function setTotalCoviewImpressions($totalCoviewImpressions)
  {
    $this->totalCoviewImpressions = $totalCoviewImpressions;
  }
  /**
   * @return string
   */
  public function getTotalCoviewImpressions()
  {
    return $this->totalCoviewImpressions;
  }
  /**
   * Total number of unique people reached including co-viewers.
   *
   * @param string $totalCoviewReach
   */
  public function setTotalCoviewReach($totalCoviewReach)
  {
    $this->totalCoviewReach = $totalCoviewReach;
  }
  /**
   * @return string
   */
  public function getTotalCoviewReach()
  {
    return $this->totalCoviewReach;
  }
  /**
   * Total number of impressions.
   *
   * @param string $totalImpressions
   */
  public function setTotalImpressions($totalImpressions)
  {
    $this->totalImpressions = $totalImpressions;
  }
  /**
   * @return string
   */
  public function getTotalImpressions()
  {
    return $this->totalImpressions;
  }
  /**
   * Total number of unique people reached.
   *
   * @param string $totalReach
   */
  public function setTotalReach($totalReach)
  {
    $this->totalReach = $totalReach;
  }
  /**
   * @return string
   */
  public function getTotalReach()
  {
    return $this->totalReach;
  }
  /**
   * Number of TrueView views.
   *
   * @param string $trueviewViews
   */
  public function setTrueviewViews($trueviewViews)
  {
    $this->trueviewViews = $trueviewViews;
  }
  /**
   * @return string
   */
  public function getTrueviewViews()
  {
    return $this->trueviewViews;
  }
  /**
   * Number of viewable impressions.
   *
   * @param string $viewableImpressions
   */
  public function setViewableImpressions($viewableImpressions)
  {
    $this->viewableImpressions = $viewableImpressions;
  }
  /**
   * @return string
   */
  public function getViewableImpressions()
  {
    return $this->viewableImpressions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlannedProductForecast::class, 'Google_Service_DisplayVideo_PlannedProductForecast');
