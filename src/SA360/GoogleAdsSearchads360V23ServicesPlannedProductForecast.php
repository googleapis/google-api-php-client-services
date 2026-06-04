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

class GoogleAdsSearchads360V23ServicesPlannedProductForecast extends \Google\Model
{
  /**
   * The number of times per selected time unit a user will see an ad, averaged
   * over the number of time units in the forecast length. This field will only
   * be populated for a Target Frequency campaign. See
   * https://support.google.com/google-ads/answer/12400225 for more information
   * about Target Frequency campaigns.
   *
   * @var 
   */
  public $averageFrequency;
  /**
   * The number of conversions. This metric is only available for DEMAND_GEN
   * plannable products. See https://support.google.com/google-
   * ads/answer/2375431 for more information on conversions.
   *
   * @var 
   */
  public $conversions;
  /**
   * Number of ad impressions that exactly matches the Targeting including co-
   * viewers.
   *
   * @var string
   */
  public $onTargetCoviewImpressions;
  /**
   * Number of unique people reached that exactly matches the Targeting
   * including co-viewers.
   *
   * @var string
   */
  public $onTargetCoviewReach;
  /**
   * Number of ad impressions that exactly matches the Targeting.
   *
   * @var string
   */
  public $onTargetImpressions;
  /**
   * Number of unique people reached that exactly matches the Targeting. Note
   * that a minimum number of unique people must be reached in order for data to
   * be reported. If the minimum number is not met, the on_target_reach value
   * will be rounded to 0.
   *
   * @var string
   */
  public $onTargetReach;
  /**
   * Total number of ad impressions including co-viewers. This includes
   * impressions that may fall outside the specified Targeting, due to
   * insufficient information on signed-in users.
   *
   * @var string
   */
  public $totalCoviewImpressions;
  /**
   * Number of unique people reached including co-viewers. This includes people
   * that may fall outside the specified Targeting.
   *
   * @var string
   */
  public $totalCoviewReach;
  /**
   * Total number of ad impressions. This includes impressions that may fall
   * outside the specified Targeting, due to insufficient information on signed-
   * in users.
   *
   * @var string
   */
  public $totalImpressions;
  /**
   * Number of unique people reached. This includes people that may fall outside
   * the specified Targeting. Note that a minimum number of unique people must
   * be reached in order for data to be reported. If the minimum number is not
   * met, the total_reach value will be rounded to 0.
   *
   * @var string
   */
  public $totalReach;
  /**
   * Number of ad views forecasted for the specified product and targeting. A
   * TrueView View is counted when a viewer views a larger portion or the
   * entirety of an ad beyond an impression. See
   * https://support.google.com/google-ads/answer/2375431 for more information
   * on TrueView Views.
   *
   * @var string
   */
  public $trueviewViews;
  /**
   * Number of times the ad's impressions were considered viewable. See
   * https://support.google.com/google-ads/answer/7029393 for more information
   * about what makes an ad viewable and how viewability is measured.
   *
   * @var string
   */
  public $viewableImpressions;

  public function setAverageFrequency($averageFrequency)
  {
    $this->averageFrequency = $averageFrequency;
  }
  public function getAverageFrequency()
  {
    return $this->averageFrequency;
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
   * Number of ad impressions that exactly matches the Targeting including co-
   * viewers.
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
   * Number of unique people reached that exactly matches the Targeting
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
   * Number of ad impressions that exactly matches the Targeting.
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
   * Number of unique people reached that exactly matches the Targeting. Note
   * that a minimum number of unique people must be reached in order for data to
   * be reported. If the minimum number is not met, the on_target_reach value
   * will be rounded to 0.
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
   * Total number of ad impressions including co-viewers. This includes
   * impressions that may fall outside the specified Targeting, due to
   * insufficient information on signed-in users.
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
   * Number of unique people reached including co-viewers. This includes people
   * that may fall outside the specified Targeting.
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
   * Total number of ad impressions. This includes impressions that may fall
   * outside the specified Targeting, due to insufficient information on signed-
   * in users.
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
   * Number of unique people reached. This includes people that may fall outside
   * the specified Targeting. Note that a minimum number of unique people must
   * be reached in order for data to be reported. If the minimum number is not
   * met, the total_reach value will be rounded to 0.
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
   * Number of ad views forecasted for the specified product and targeting. A
   * TrueView View is counted when a viewer views a larger portion or the
   * entirety of an ad beyond an impression. See
   * https://support.google.com/google-ads/answer/2375431 for more information
   * on TrueView Views.
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
   * Number of times the ad's impressions were considered viewable. See
   * https://support.google.com/google-ads/answer/7029393 for more information
   * about what makes an ad viewable and how viewability is measured.
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
class_alias(GoogleAdsSearchads360V23ServicesPlannedProductForecast::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesPlannedProductForecast');
