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

namespace Google\Service\DataManager;

class Item extends \Google\Model
{
  /**
   * @var string
   */
  public $merchantProductId;
  /**
   * @var string
   */
  public $quantity;
  public $unitPrice;

  /**
   * @param string
   */
  public function setMerchantProductId($merchantProductId)
  {
    $this->merchantProductId = $merchantProductId;
  }
  /**
   * @return string
   */
  public function getMerchantProductId()
  {
    return $this->merchantProductId;
  }
  /**
   * @param string
   */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /**
   * @return string
   */
  public function getQuantity()
  {
    return $this->quantity;
  }
  public function setUnitPrice($unitPrice)
  {
    $this->unitPrice = $unitPrice;
  }
  public function getUnitPrice()
  {
    return $this->unitPrice;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Item::class, 'Google_Service_DataManager_Item');
