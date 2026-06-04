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

class GoogleAdsSearchads360V23ServicesManualCpcBiddingStrategy extends \Google\Model
{
  /**
   * Campaign level budget in micros. If set, a minimum value is enforced for
   * the local currency used in the campaign. An error will occur showing the
   * minimum value if this field is set too low.
   *
   * @var string
   */
  public $dailyBudgetMicros;
  /**
   * Required. A bid in micros to be applied to ad groups within the campaign
   * for a manual CPC bidding strategy.
   *
   * @var string
   */
  public $maxCpcBidMicros;

  /**
   * Campaign level budget in micros. If set, a minimum value is enforced for
   * the local currency used in the campaign. An error will occur showing the
   * minimum value if this field is set too low.
   *
   * @param string $dailyBudgetMicros
   */
  public function setDailyBudgetMicros($dailyBudgetMicros)
  {
    $this->dailyBudgetMicros = $dailyBudgetMicros;
  }
  /**
   * @return string
   */
  public function getDailyBudgetMicros()
  {
    return $this->dailyBudgetMicros;
  }
  /**
   * Required. A bid in micros to be applied to ad groups within the campaign
   * for a manual CPC bidding strategy.
   *
   * @param string $maxCpcBidMicros
   */
  public function setMaxCpcBidMicros($maxCpcBidMicros)
  {
    $this->maxCpcBidMicros = $maxCpcBidMicros;
  }
  /**
   * @return string
   */
  public function getMaxCpcBidMicros()
  {
    return $this->maxCpcBidMicros;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesManualCpcBiddingStrategy::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesManualCpcBiddingStrategy');
