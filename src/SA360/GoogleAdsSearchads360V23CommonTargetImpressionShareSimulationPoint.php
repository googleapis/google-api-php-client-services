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

class GoogleAdsSearchads360V23CommonTargetImpressionShareSimulationPoint extends \Google\Model
{
  /**
   * Projected number of absolute top impressions. Only search advertising
   * channel type supports this field.
   *
   * @var string
   */
  public $absoluteTopImpressions;
  /**
   * Projected number of biddable conversions.
   *
   * @var 
   */
  public $biddableConversions;
  /**
   * Projected total value of biddable conversions.
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
   * Projected required daily budget that the advertiser must set in order to
   * receive the estimated traffic, in micros of advertiser currency.
   *
   * @var string
   */
  public $requiredBudgetAmountMicros;
  /**
   * Projected required daily cpc bid ceiling that the advertiser must set to
   * realize this simulation, in micros of the advertiser currency.
   *
   * @var string
   */
  public $requiredCpcBidCeilingMicros;
  /**
   * The simulated target impression share value (in micros) upon which
   * projected metrics are based. For example, 10% impression share, which is
   * equal to 0.1, is stored as 100_000. This value is validated and will not
   * exceed 1M (100%).
   *
   * @var string
   */
  public $targetImpressionShareMicros;
  /**
   * Projected number of top slot impressions. Only search advertising channel
   * type supports this field.
   *
   * @var string
   */
  public $topSlotImpressions;

  /**
   * Projected number of absolute top impressions. Only search advertising
   * channel type supports this field.
   *
   * @param string $absoluteTopImpressions
   */
  public function setAbsoluteTopImpressions($absoluteTopImpressions)
  {
    $this->absoluteTopImpressions = $absoluteTopImpressions;
  }
  /**
   * @return string
   */
  public function getAbsoluteTopImpressions()
  {
    return $this->absoluteTopImpressions;
  }
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
   * Projected required daily budget that the advertiser must set in order to
   * receive the estimated traffic, in micros of advertiser currency.
   *
   * @param string $requiredBudgetAmountMicros
   */
  public function setRequiredBudgetAmountMicros($requiredBudgetAmountMicros)
  {
    $this->requiredBudgetAmountMicros = $requiredBudgetAmountMicros;
  }
  /**
   * @return string
   */
  public function getRequiredBudgetAmountMicros()
  {
    return $this->requiredBudgetAmountMicros;
  }
  /**
   * Projected required daily cpc bid ceiling that the advertiser must set to
   * realize this simulation, in micros of the advertiser currency.
   *
   * @param string $requiredCpcBidCeilingMicros
   */
  public function setRequiredCpcBidCeilingMicros($requiredCpcBidCeilingMicros)
  {
    $this->requiredCpcBidCeilingMicros = $requiredCpcBidCeilingMicros;
  }
  /**
   * @return string
   */
  public function getRequiredCpcBidCeilingMicros()
  {
    return $this->requiredCpcBidCeilingMicros;
  }
  /**
   * The simulated target impression share value (in micros) upon which
   * projected metrics are based. For example, 10% impression share, which is
   * equal to 0.1, is stored as 100_000. This value is validated and will not
   * exceed 1M (100%).
   *
   * @param string $targetImpressionShareMicros
   */
  public function setTargetImpressionShareMicros($targetImpressionShareMicros)
  {
    $this->targetImpressionShareMicros = $targetImpressionShareMicros;
  }
  /**
   * @return string
   */
  public function getTargetImpressionShareMicros()
  {
    return $this->targetImpressionShareMicros;
  }
  /**
   * Projected number of top slot impressions. Only search advertising channel
   * type supports this field.
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
class_alias(GoogleAdsSearchads360V23CommonTargetImpressionShareSimulationPoint::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonTargetImpressionShareSimulationPoint');
