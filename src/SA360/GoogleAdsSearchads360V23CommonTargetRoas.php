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

class GoogleAdsSearchads360V23CommonTargetRoas extends \Google\Model
{
  /**
   * Maximum bid limit that can be set by the bid strategy. The limit applies to
   * all keywords managed by the strategy. This should only be set for portfolio
   * bid strategies.
   *
   * @var string
   */
  public $cpcBidCeilingMicros;
  /**
   * Minimum bid limit that can be set by the bid strategy. The limit applies to
   * all keywords managed by the strategy. This should only be set for portfolio
   * bid strategies.
   *
   * @var string
   */
  public $cpcBidFloorMicros;
  /**
   * Required. The chosen revenue (based on conversion data) per unit of spend.
   * Value must be between 0.01 and 1000.0, inclusive.
   *
   * @var 
   */
  public $targetRoas;
  /**
   * The percent of ROAS(return on advertising spend) degradation tolerance
   * allowed to increase traffic diversity and conversion volume, specified in
   * millis (for example, 10,000 = 10%). A value of 10,000 means that the
   * advertiser can expect ROAS degradation of up to 10% of the specified target
   * ROAS. This field is only mutable for portfolio bidding strategies.
   *
   * @var string
   */
  public $targetRoasTolerancePercentMillis;

  /**
   * Maximum bid limit that can be set by the bid strategy. The limit applies to
   * all keywords managed by the strategy. This should only be set for portfolio
   * bid strategies.
   *
   * @param string $cpcBidCeilingMicros
   */
  public function setCpcBidCeilingMicros($cpcBidCeilingMicros)
  {
    $this->cpcBidCeilingMicros = $cpcBidCeilingMicros;
  }
  /**
   * @return string
   */
  public function getCpcBidCeilingMicros()
  {
    return $this->cpcBidCeilingMicros;
  }
  /**
   * Minimum bid limit that can be set by the bid strategy. The limit applies to
   * all keywords managed by the strategy. This should only be set for portfolio
   * bid strategies.
   *
   * @param string $cpcBidFloorMicros
   */
  public function setCpcBidFloorMicros($cpcBidFloorMicros)
  {
    $this->cpcBidFloorMicros = $cpcBidFloorMicros;
  }
  /**
   * @return string
   */
  public function getCpcBidFloorMicros()
  {
    return $this->cpcBidFloorMicros;
  }
  public function setTargetRoas($targetRoas)
  {
    $this->targetRoas = $targetRoas;
  }
  public function getTargetRoas()
  {
    return $this->targetRoas;
  }
  /**
   * The percent of ROAS(return on advertising spend) degradation tolerance
   * allowed to increase traffic diversity and conversion volume, specified in
   * millis (for example, 10,000 = 10%). A value of 10,000 means that the
   * advertiser can expect ROAS degradation of up to 10% of the specified target
   * ROAS. This field is only mutable for portfolio bidding strategies.
   *
   * @param string $targetRoasTolerancePercentMillis
   */
  public function setTargetRoasTolerancePercentMillis($targetRoasTolerancePercentMillis)
  {
    $this->targetRoasTolerancePercentMillis = $targetRoasTolerancePercentMillis;
  }
  /**
   * @return string
   */
  public function getTargetRoasTolerancePercentMillis()
  {
    return $this->targetRoasTolerancePercentMillis;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonTargetRoas::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonTargetRoas');
