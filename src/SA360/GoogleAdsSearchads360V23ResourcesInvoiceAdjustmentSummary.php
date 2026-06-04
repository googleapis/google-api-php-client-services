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

class GoogleAdsSearchads360V23ResourcesInvoiceAdjustmentSummary extends \Google\Model
{
  /**
   * Output only. The description of the adjustment. Example: Incentive
   * Adjustment, discount.
   *
   * @var string
   */
  public $adjustmentDescription;
  /**
   * Output only. The amount of the adjustment, in micros. The currency code for
   * this amount is the same as the Invoice.currency_code.
   *
   * @var string
   */
  public $amountMicros;

  /**
   * Output only. The description of the adjustment. Example: Incentive
   * Adjustment, discount.
   *
   * @param string $adjustmentDescription
   */
  public function setAdjustmentDescription($adjustmentDescription)
  {
    $this->adjustmentDescription = $adjustmentDescription;
  }
  /**
   * @return string
   */
  public function getAdjustmentDescription()
  {
    return $this->adjustmentDescription;
  }
  /**
   * Output only. The amount of the adjustment, in micros. The currency code for
   * this amount is the same as the Invoice.currency_code.
   *
   * @param string $amountMicros
   */
  public function setAmountMicros($amountMicros)
  {
    $this->amountMicros = $amountMicros;
  }
  /**
   * @return string
   */
  public function getAmountMicros()
  {
    return $this->amountMicros;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesInvoiceAdjustmentSummary::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesInvoiceAdjustmentSummary');
