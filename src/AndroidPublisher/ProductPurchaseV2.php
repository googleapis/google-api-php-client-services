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

class ProductPurchaseV2 extends \Google\Collection
{
  protected $collection_key = 'productLineItem';
  /**
   * @var string
   */
  public $acknowledgementState;
  /**
   * @var string
   */
  public $kind;
  /**
   * @var string
   */
  public $obfuscatedExternalAccountId;
  /**
   * @var string
   */
  public $obfuscatedExternalProfileId;
  /**
   * @var string
   */
  public $orderId;
  protected $productLineItemType = ProductLineItem::class;
  protected $productLineItemDataType = 'array';
  /**
   * @var string
   */
  public $purchaseCompletionTime;
  protected $purchaseStateContextType = PurchaseStateContext::class;
  protected $purchaseStateContextDataType = '';
  /**
   * @var string
   */
  public $regionCode;
  protected $testPurchaseContextType = TestPurchaseContext::class;
  protected $testPurchaseContextDataType = '';

  /**
   * @param string
   */
  public function setAcknowledgementState($acknowledgementState)
  {
    $this->acknowledgementState = $acknowledgementState;
  }
  /**
   * @return string
   */
  public function getAcknowledgementState()
  {
    return $this->acknowledgementState;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param string
   */
  public function setObfuscatedExternalAccountId($obfuscatedExternalAccountId)
  {
    $this->obfuscatedExternalAccountId = $obfuscatedExternalAccountId;
  }
  /**
   * @return string
   */
  public function getObfuscatedExternalAccountId()
  {
    return $this->obfuscatedExternalAccountId;
  }
  /**
   * @param string
   */
  public function setObfuscatedExternalProfileId($obfuscatedExternalProfileId)
  {
    $this->obfuscatedExternalProfileId = $obfuscatedExternalProfileId;
  }
  /**
   * @return string
   */
  public function getObfuscatedExternalProfileId()
  {
    return $this->obfuscatedExternalProfileId;
  }
  /**
   * @param string
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
   * @param ProductLineItem[]
   */
  public function setProductLineItem($productLineItem)
  {
    $this->productLineItem = $productLineItem;
  }
  /**
   * @return ProductLineItem[]
   */
  public function getProductLineItem()
  {
    return $this->productLineItem;
  }
  /**
   * @param string
   */
  public function setPurchaseCompletionTime($purchaseCompletionTime)
  {
    $this->purchaseCompletionTime = $purchaseCompletionTime;
  }
  /**
   * @return string
   */
  public function getPurchaseCompletionTime()
  {
    return $this->purchaseCompletionTime;
  }
  /**
   * @param PurchaseStateContext
   */
  public function setPurchaseStateContext(PurchaseStateContext $purchaseStateContext)
  {
    $this->purchaseStateContext = $purchaseStateContext;
  }
  /**
   * @return PurchaseStateContext
   */
  public function getPurchaseStateContext()
  {
    return $this->purchaseStateContext;
  }
  /**
   * @param string
   */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /**
   * @return string
   */
  public function getRegionCode()
  {
    return $this->regionCode;
  }
  /**
   * @param TestPurchaseContext
   */
  public function setTestPurchaseContext(TestPurchaseContext $testPurchaseContext)
  {
    $this->testPurchaseContext = $testPurchaseContext;
  }
  /**
   * @return TestPurchaseContext
   */
  public function getTestPurchaseContext()
  {
    return $this->testPurchaseContext;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProductPurchaseV2::class, 'Google_Service_AndroidPublisher_ProductPurchaseV2');
