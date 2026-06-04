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

class GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEventRevenueRange extends \Google\Model
{
  /**
   * Output only. For revenue ranges, the maximum value in `currency_code` for
   * which this conversion value would be updated. A value of 0 will be treated
   * as unset.
   *
   * @var 
   */
  public $maxEventRevenue;
  /**
   * Output only. For revenue ranges, the minimum value in `currency_code` for
   * which this conversion value would be updated. A value of 0 will be treated
   * as unset.
   *
   * @var 
   */
  public $minEventRevenue;

  public function setMaxEventRevenue($maxEventRevenue)
  {
    $this->maxEventRevenue = $maxEventRevenue;
  }
  public function getMaxEventRevenue()
  {
    return $this->maxEventRevenue;
  }
  public function setMinEventRevenue($minEventRevenue)
  {
    $this->minEventRevenue = $minEventRevenue;
  }
  public function getMinEventRevenue()
  {
    return $this->minEventRevenue;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEventRevenueRange::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCustomerSkAdNetworkConversionValueSchemaSkAdNetworkConversionValueSchemaEventRevenueRange');
