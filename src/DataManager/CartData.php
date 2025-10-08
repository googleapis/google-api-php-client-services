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

class CartData extends \Google\Collection
{
  protected $collection_key = 'items';
  protected $itemsType = Item::class;
  protected $itemsDataType = 'array';
  /**
   * @var string
   */
  public $merchantFeedLabel;
  /**
   * @var string
   */
  public $merchantFeedLanguageCode;
  /**
   * @var string
   */
  public $merchantId;
  public $transactionDiscount;

  /**
   * @param Item[]
   */
  public function setItems($items)
  {
    $this->items = $items;
  }
  /**
   * @return Item[]
   */
  public function getItems()
  {
    return $this->items;
  }
  /**
   * @param string
   */
  public function setMerchantFeedLabel($merchantFeedLabel)
  {
    $this->merchantFeedLabel = $merchantFeedLabel;
  }
  /**
   * @return string
   */
  public function getMerchantFeedLabel()
  {
    return $this->merchantFeedLabel;
  }
  /**
   * @param string
   */
  public function setMerchantFeedLanguageCode($merchantFeedLanguageCode)
  {
    $this->merchantFeedLanguageCode = $merchantFeedLanguageCode;
  }
  /**
   * @return string
   */
  public function getMerchantFeedLanguageCode()
  {
    return $this->merchantFeedLanguageCode;
  }
  /**
   * @param string
   */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /**
   * @return string
   */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  public function setTransactionDiscount($transactionDiscount)
  {
    $this->transactionDiscount = $transactionDiscount;
  }
  public function getTransactionDiscount()
  {
    return $this->transactionDiscount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CartData::class, 'Google_Service_DataManager_CartData');
