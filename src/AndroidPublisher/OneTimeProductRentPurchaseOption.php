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

namespace Google\Service\AndroidPublisher;

class OneTimeProductRentPurchaseOption extends \Google\Model
{
  /**
   * @var string
   */
  public $expirationPeriod;
  /**
   * @var string
   */
  public $rentalPeriod;

  /**
   * @param string
   */
  public function setExpirationPeriod($expirationPeriod)
  {
    $this->expirationPeriod = $expirationPeriod;
  }
  /**
   * @return string
   */
  public function getExpirationPeriod()
  {
    return $this->expirationPeriod;
  }
  /**
   * @param string
   */
  public function setRentalPeriod($rentalPeriod)
  {
    $this->rentalPeriod = $rentalPeriod;
  }
  /**
   * @return string
   */
  public function getRentalPeriod()
  {
    return $this->rentalPeriod;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OneTimeProductRentPurchaseOption::class, 'Google_Service_AndroidPublisher_OneTimeProductRentPurchaseOption');
