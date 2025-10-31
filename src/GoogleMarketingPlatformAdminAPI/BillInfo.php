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

namespace Google\Service\GoogleMarketingPlatformAdminAPI;

class BillInfo extends \Google\Model
{
  protected $baseFeeType = Money::class;
  protected $baseFeeDataType = '';
  protected $eventFeeType = Money::class;
  protected $eventFeeDataType = '';
  protected $priceProtectionCreditType = Money::class;
  protected $priceProtectionCreditDataType = '';
  protected $totalType = Money::class;
  protected $totalDataType = '';

  /**
   * @param Money
   */
  public function setBaseFee(Money $baseFee)
  {
    $this->baseFee = $baseFee;
  }
  /**
   * @return Money
   */
  public function getBaseFee()
  {
    return $this->baseFee;
  }
  /**
   * @param Money
   */
  public function setEventFee(Money $eventFee)
  {
    $this->eventFee = $eventFee;
  }
  /**
   * @return Money
   */
  public function getEventFee()
  {
    return $this->eventFee;
  }
  /**
   * @param Money
   */
  public function setPriceProtectionCredit(Money $priceProtectionCredit)
  {
    $this->priceProtectionCredit = $priceProtectionCredit;
  }
  /**
   * @return Money
   */
  public function getPriceProtectionCredit()
  {
    return $this->priceProtectionCredit;
  }
  /**
   * @param Money
   */
  public function setTotal(Money $total)
  {
    $this->total = $total;
  }
  /**
   * @return Money
   */
  public function getTotal()
  {
    return $this->total;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BillInfo::class, 'Google_Service_GoogleMarketingPlatformAdminAPI_BillInfo');
