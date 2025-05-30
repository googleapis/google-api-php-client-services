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

class BuyerAddress extends \Google\Model
{
  /**
   * @var string
   */
  public $buyerCountry;
  /**
   * @var string
   */
  public $buyerPostcode;
  /**
   * @var string
   */
  public $buyerState;

  /**
   * @param string
   */
  public function setBuyerCountry($buyerCountry)
  {
    $this->buyerCountry = $buyerCountry;
  }
  /**
   * @return string
   */
  public function getBuyerCountry()
  {
    return $this->buyerCountry;
  }
  /**
   * @param string
   */
  public function setBuyerPostcode($buyerPostcode)
  {
    $this->buyerPostcode = $buyerPostcode;
  }
  /**
   * @return string
   */
  public function getBuyerPostcode()
  {
    return $this->buyerPostcode;
  }
  /**
   * @param string
   */
  public function setBuyerState($buyerState)
  {
    $this->buyerState = $buyerState;
  }
  /**
   * @return string
   */
  public function getBuyerState()
  {
    return $this->buyerState;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BuyerAddress::class, 'Google_Service_AndroidPublisher_BuyerAddress');
