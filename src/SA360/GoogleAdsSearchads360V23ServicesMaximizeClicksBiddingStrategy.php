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

class GoogleAdsSearchads360V23ServicesMaximizeClicksBiddingStrategy extends \Google\Model
{
  /**
   * Required. The daily target spend in micros to be used for estimation. A
   * minimum value is enforced for the local currency used in the campaign. An
   * error will occur showing the minimum value if this field is set too low.
   *
   * @var string
   */
  public $dailyTargetSpendMicros;
  /**
   * Ceiling on max CPC bids in micros.
   *
   * @var string
   */
  public $maxCpcBidCeilingMicros;

  /**
   * Required. The daily target spend in micros to be used for estimation. A
   * minimum value is enforced for the local currency used in the campaign. An
   * error will occur showing the minimum value if this field is set too low.
   *
   * @param string $dailyTargetSpendMicros
   */
  public function setDailyTargetSpendMicros($dailyTargetSpendMicros)
  {
    $this->dailyTargetSpendMicros = $dailyTargetSpendMicros;
  }
  /**
   * @return string
   */
  public function getDailyTargetSpendMicros()
  {
    return $this->dailyTargetSpendMicros;
  }
  /**
   * Ceiling on max CPC bids in micros.
   *
   * @param string $maxCpcBidCeilingMicros
   */
  public function setMaxCpcBidCeilingMicros($maxCpcBidCeilingMicros)
  {
    $this->maxCpcBidCeilingMicros = $maxCpcBidCeilingMicros;
  }
  /**
   * @return string
   */
  public function getMaxCpcBidCeilingMicros()
  {
    return $this->maxCpcBidCeilingMicros;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesMaximizeClicksBiddingStrategy::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesMaximizeClicksBiddingStrategy');
