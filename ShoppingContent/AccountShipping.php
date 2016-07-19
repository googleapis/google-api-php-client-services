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

class Google_Service_ShoppingContent_AccountShipping extends Google_Collection
{
  protected $collection_key = 'services';
  public $accountId;
  public $carrierRates;
  public $kind;
  public $locationGroups;
  public $rateTables;
  public $services;

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }
  public function getAccountId()
  {
    return $this->accountId;
  }
  public function setCarrierRates(array $carrierRates)
  {
    foreach ($carrierRates as $c) {
      if (!$c instanceof Google_Service_ShoppingContent_AccountShippingCarrierRate) {
        throw new InvalidArgumentException('First argument to setCarrierRates must be an array of Google_Service_ShoppingContent_AccountShippingCarrierRate');
      }
    }
    $this->carrierRates = $carrierRates;
  }
  public function getCarrierRates()
  {
    return $this->carrierRates;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLocationGroups(array $locationGroups)
  {
    foreach ($locationGroups as $l) {
      if (!$l instanceof Google_Service_ShoppingContent_AccountShippingLocationGroup) {
        throw new InvalidArgumentException('First argument to setLocationGroups must be an array of Google_Service_ShoppingContent_AccountShippingLocationGroup');
      }
    }
    $this->locationGroups = $locationGroups;
  }
  public function getLocationGroups()
  {
    return $this->locationGroups;
  }
  public function setRateTables(array $rateTables)
  {
    foreach ($rateTables as $r) {
      if (!$r instanceof Google_Service_ShoppingContent_AccountShippingRateTable) {
        throw new InvalidArgumentException('First argument to setRateTables must be an array of Google_Service_ShoppingContent_AccountShippingRateTable');
      }
    }
    $this->rateTables = $rateTables;
  }
  public function getRateTables()
  {
    return $this->rateTables;
  }
  public function setServices(array $services)
  {
    foreach ($services as $s) {
      if (!$s instanceof Google_Service_ShoppingContent_AccountShippingShippingService) {
        throw new InvalidArgumentException('First argument to setServices must be an array of Google_Service_ShoppingContent_AccountShippingShippingService');
      }
    }
    $this->services = $services;
  }
  public function getServices()
  {
    return $this->services;
  }
}
