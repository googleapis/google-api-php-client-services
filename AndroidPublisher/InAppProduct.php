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

class Google_Service_AndroidPublisher_InAppProduct extends Google_Model
{
  public $defaultLanguage;
  public $defaultPrice;
  public $listings;
  public $packageName;
  public $prices;
  public $purchaseType;
  public $season;
  public $sku;
  public $status;
  public $subscriptionPeriod;
  public $trialPeriod;

  public function setDefaultLanguage($defaultLanguage)
  {
    $this->defaultLanguage = $defaultLanguage;
  }
  public function getDefaultLanguage()
  {
    return $this->defaultLanguage;
  }
  public function setDefaultPrice(Google_Service_AndroidPublisher_Price $defaultPrice)
  {
    $this->defaultPrice = $defaultPrice;
  }
  public function getDefaultPrice()
  {
    return $this->defaultPrice;
  }
  public function setListings(array $listings)
  {
    $this->listings = $listings;
  }
  public function getListings()
  {
    return $this->listings;
  }
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  public function getPackageName()
  {
    return $this->packageName;
  }
  public function setPrices(array $prices)
  {
    $this->prices = $prices;
  }
  public function getPrices()
  {
    return $this->prices;
  }
  public function setPurchaseType($purchaseType)
  {
    $this->purchaseType = $purchaseType;
  }
  public function getPurchaseType()
  {
    return $this->purchaseType;
  }
  public function setSeason(Google_Service_AndroidPublisher_Season $season)
  {
    $this->season = $season;
  }
  public function getSeason()
  {
    return $this->season;
  }
  public function setSku($sku)
  {
    $this->sku = $sku;
  }
  public function getSku()
  {
    return $this->sku;
  }
  public function setStatus($status)
  {
    $this->status = $status;
  }
  public function getStatus()
  {
    return $this->status;
  }
  public function setSubscriptionPeriod($subscriptionPeriod)
  {
    $this->subscriptionPeriod = $subscriptionPeriod;
  }
  public function getSubscriptionPeriod()
  {
    return $this->subscriptionPeriod;
  }
  public function setTrialPeriod($trialPeriod)
  {
    $this->trialPeriod = $trialPeriod;
  }
  public function getTrialPeriod()
  {
    return $this->trialPeriod;
  }
}
