<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_ShoppingContent_TestOrder extends Google_Collection
{
  protected $collection_key = 'promotions';
  public $customer;
  public $kind;
  public $lineItems;
  public $paymentMethod;
  public $predefinedDeliveryAddress;
  public $promotions;
  public $shippingCost;
  public $shippingCostTax;
  public $shippingOption;

  public function setCustomer(Google_Service_ShoppingContent_TestOrderCustomer $customer)
  {
    $this->customer = $customer;
  }
  public function getCustomer()
  {
    return $this->customer;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLineItems(array $lineItems)
  {
    foreach ($lineItems as $l) {
      if (!$l instanceof Google_Service_ShoppingContent_TestOrderLineItem) {
        throw new InvalidArgumentException('First argument to setLineItems must be an array of Google_Service_ShoppingContent_TestOrderLineItem');
      }
    }
    $this->lineItems = $lineItems;
  }
  public function getLineItems()
  {
    return $this->lineItems;
  }
  public function setPaymentMethod(Google_Service_ShoppingContent_TestOrderPaymentMethod $paymentMethod)
  {
    $this->paymentMethod = $paymentMethod;
  }
  public function getPaymentMethod()
  {
    return $this->paymentMethod;
  }
  public function setPredefinedDeliveryAddress($predefinedDeliveryAddress)
  {
    $this->predefinedDeliveryAddress = $predefinedDeliveryAddress;
  }
  public function getPredefinedDeliveryAddress()
  {
    return $this->predefinedDeliveryAddress;
  }
  public function setPromotions(array $promotions)
  {
    foreach ($promotions as $p) {
      if (!$p instanceof Google_Service_ShoppingContent_OrderPromotion) {
        throw new InvalidArgumentException('First argument to setPromotions must be an array of Google_Service_ShoppingContent_OrderPromotion');
      }
    }
    $this->promotions = $promotions;
  }
  public function getPromotions()
  {
    return $this->promotions;
  }
  public function setShippingCost(Google_Service_ShoppingContent_Price $shippingCost)
  {
    $this->shippingCost = $shippingCost;
  }
  public function getShippingCost()
  {
    return $this->shippingCost;
  }
  public function setShippingCostTax(Google_Service_ShoppingContent_Price $shippingCostTax)
  {
    $this->shippingCostTax = $shippingCostTax;
  }
  public function getShippingCostTax()
  {
    return $this->shippingCostTax;
  }
  public function setShippingOption($shippingOption)
  {
    $this->shippingOption = $shippingOption;
  }
  public function getShippingOption()
  {
    return $this->shippingOption;
  }
}
