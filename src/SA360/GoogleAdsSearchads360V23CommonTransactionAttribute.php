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

class GoogleAdsSearchads360V23CommonTransactionAttribute extends \Google\Model
{
  /**
   * The resource name of conversion action to report conversions to. Required.
   *
   * @var string
   */
  public $conversionAction;
  /**
   * Transaction currency code. ISO 4217 three-letter code is used. Required.
   *
   * @var string
   */
  public $currencyCode;
  /**
   * Value of the custom variable for each transaction. Allowed only if a custom
   * key is provided in the store sales metadata.
   *
   * @var string
   */
  public $customValue;
  protected $itemAttributeType = GoogleAdsSearchads360V23CommonItemAttribute::class;
  protected $itemAttributeDataType = '';
  /**
   * Transaction order id. Useful to group transactions which are part of the
   * same order.
   *
   * @var string
   */
  public $orderId;
  protected $storeAttributeType = GoogleAdsSearchads360V23CommonStoreAttribute::class;
  protected $storeAttributeDataType = '';
  /**
   * Transaction amount in micros. Required. Transaction amount in micros needs
   * to be greater than 1000. If item Attributes are provided, it represents the
   * total value of the items, after multiplying the unit price per item by the
   * quantity provided in the ItemAttributes.
   *
   * @var 
   */
  public $transactionAmountMicros;
  /**
   * Timestamp when transaction occurred. Required. The format is "YYYY-MM-DD
   * HH:MM:SS[+/-HH:MM]", where [+/-HH:MM] is an optional timezone offset from
   * UTC. If the offset is absent, the API will use the account's timezone as
   * default. Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30+03:00"
   *
   * @var string
   */
  public $transactionDateTime;

  /**
   * The resource name of conversion action to report conversions to. Required.
   *
   * @param string $conversionAction
   */
  public function setConversionAction($conversionAction)
  {
    $this->conversionAction = $conversionAction;
  }
  /**
   * @return string
   */
  public function getConversionAction()
  {
    return $this->conversionAction;
  }
  /**
   * Transaction currency code. ISO 4217 three-letter code is used. Required.
   *
   * @param string $currencyCode
   */
  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  /**
   * @return string
   */
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  /**
   * Value of the custom variable for each transaction. Allowed only if a custom
   * key is provided in the store sales metadata.
   *
   * @param string $customValue
   */
  public function setCustomValue($customValue)
  {
    $this->customValue = $customValue;
  }
  /**
   * @return string
   */
  public function getCustomValue()
  {
    return $this->customValue;
  }
  /**
   * Item attributes of the transaction. Accessible only to customers on the
   * allow-list.
   *
   * @param GoogleAdsSearchads360V23CommonItemAttribute $itemAttribute
   */
  public function setItemAttribute(GoogleAdsSearchads360V23CommonItemAttribute $itemAttribute)
  {
    $this->itemAttribute = $itemAttribute;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonItemAttribute
   */
  public function getItemAttribute()
  {
    return $this->itemAttribute;
  }
  /**
   * Transaction order id. Useful to group transactions which are part of the
   * same order.
   *
   * @param string $orderId
   */
  public function setOrderId($orderId)
  {
    $this->orderId = $orderId;
  }
  /**
   * @return string
   */
  public function getOrderId()
  {
    return $this->orderId;
  }
  /**
   * Store attributes of the transaction.
   *
   * @param GoogleAdsSearchads360V23CommonStoreAttribute $storeAttribute
   */
  public function setStoreAttribute(GoogleAdsSearchads360V23CommonStoreAttribute $storeAttribute)
  {
    $this->storeAttribute = $storeAttribute;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonStoreAttribute
   */
  public function getStoreAttribute()
  {
    return $this->storeAttribute;
  }
  public function setTransactionAmountMicros($transactionAmountMicros)
  {
    $this->transactionAmountMicros = $transactionAmountMicros;
  }
  public function getTransactionAmountMicros()
  {
    return $this->transactionAmountMicros;
  }
  /**
   * Timestamp when transaction occurred. Required. The format is "YYYY-MM-DD
   * HH:MM:SS[+/-HH:MM]", where [+/-HH:MM] is an optional timezone offset from
   * UTC. If the offset is absent, the API will use the account's timezone as
   * default. Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30+03:00"
   *
   * @param string $transactionDateTime
   */
  public function setTransactionDateTime($transactionDateTime)
  {
    $this->transactionDateTime = $transactionDateTime;
  }
  /**
   * @return string
   */
  public function getTransactionDateTime()
  {
    return $this->transactionDateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonTransactionAttribute::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonTransactionAttribute');
