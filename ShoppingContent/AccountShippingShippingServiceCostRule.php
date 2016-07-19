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

class Google_Service_ShoppingContent_AccountShippingShippingServiceCostRule extends Google_Collection
{
  protected $collection_key = 'children';
  public $calculationMethod;
  public $children;
  public $condition;

  public function setCalculationMethod(Google_Service_ShoppingContent_AccountShippingShippingServiceCalculationMethod $calculationMethod)
  {
    $this->calculationMethod = $calculationMethod;
  }
  public function getCalculationMethod()
  {
    return $this->calculationMethod;
  }
  public function setChildren(array $children)
  {
    foreach ($children as $c) {
      if (!$c instanceof Google_Service_ShoppingContent_AccountShippingShippingServiceCostRule) {
        throw new InvalidArgumentException('First argument to setChildren must be an array of Google_Service_ShoppingContent_AccountShippingShippingServiceCostRule');
      }
    }
    $this->children = $children;
  }
  public function getChildren()
  {
    return $this->children;
  }
  public function setCondition(Google_Service_ShoppingContent_AccountShippingCondition $condition)
  {
    $this->condition = $condition;
  }
  public function getCondition()
  {
    return $this->condition;
  }
}
