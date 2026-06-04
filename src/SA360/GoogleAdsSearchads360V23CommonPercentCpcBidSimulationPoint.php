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

class GoogleAdsSearchads360V23CommonPercentCpcBidSimulationPoint extends \Google\Model
{
  /**
   * Projected number of biddable conversions.
   *
   * @var 
   */
  public $biddableConversions;
  /**
   * Projected total value of biddable conversions in local currency.
   *
   * @var 
   */
  public $biddableConversionsValue;
  /**
   * Projected number of clicks.
   *
   * @var string
   */
  public $clicks;
  /**
   * Projected cost in micros.
   *
   * @var string
   */
  public $costMicros;
  /**
   * Projected number of impressions.
   *
   * @var string
   */
  public $impressions;
  /**
   * The simulated percent CPC upon which projected metrics are based. Percent
   * CPC expressed as fraction of the advertised price for some good or service.
   * The value stored here is 1,000,000 * [fraction].
   *
   * @var string
   */
  public $percentCpcBidMicros;
  /**
   * Projected number of top slot impressions.
   *
   * @var string
   */
  public $topSlotImpressions;

  public function setBiddableConversions($biddableConversions)
  {
    $this->biddableConversions = $biddableConversions;
  }
  public function getBiddableConversions()
  {
    return $this->biddableConversions;
  }
  public function setBiddableConversionsValue($biddableConversionsValue)
  {
    $this->biddableConversionsValue = $biddableConversionsValue;
  }
  public function getBiddableConversionsValue()
  {
    return $this->biddableConversionsValue;
  }
  /**
   * Projected number of clicks.
   *
   * @param string $clicks
   */
  public function setClicks($clicks)
  {
    $this->clicks = $clicks;
  }
  /**
   * @return string
   */
  public function getClicks()
  {
    return $this->clicks;
  }
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
   * The simulated percent CPC upon which projected metrics are based. Percent
   * CPC expressed as fraction of the advertised price for some good or service.
   * The value stored here is 1,000,000 * [fraction].
   *
   * @param string $percentCpcBidMicros
   */
  public function setPercentCpcBidMicros($percentCpcBidMicros)
  {
    $this->percentCpcBidMicros = $percentCpcBidMicros;
  }
  /**
   * @return string
   */
  public function getPercentCpcBidMicros()
  {
    return $this->percentCpcBidMicros;
  }
  /**
   * Projected number of top slot impressions.
   *
   * @param string $topSlotImpressions
   */
  public function setTopSlotImpressions($topSlotImpressions)
  {
    $this->topSlotImpressions = $topSlotImpressions;
  }
  /**
   * @return string
   */
  public function getTopSlotImpressions()
  {
    return $this->topSlotImpressions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonPercentCpcBidSimulationPoint::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonPercentCpcBidSimulationPoint');
