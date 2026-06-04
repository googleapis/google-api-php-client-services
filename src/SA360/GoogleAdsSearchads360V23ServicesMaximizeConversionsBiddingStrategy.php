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

class GoogleAdsSearchads360V23ServicesMaximizeConversionsBiddingStrategy extends \Google\Model
{
  /**
   * Required. The daily target spend in micros to be used for estimation. This
   * value must be greater than zero.
   *
   * @var string
   */
  public $dailyTargetSpendMicros;

  /**
   * Required. The daily target spend in micros to be used for estimation. This
   * value must be greater than zero.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesMaximizeConversionsBiddingStrategy::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesMaximizeConversionsBiddingStrategy');
