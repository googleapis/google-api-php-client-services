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

class Google_Service_AdExchangeBuyer_MarketplaceDeal extends Google_Collection
{
  protected $collection_key = 'sharedTargetings';
  public $buyerPrivateData;
  public $creationTimeMs;
  public $creativePreApprovalPolicy;
  public $creativeSafeFrameCompatibility;
  public $dealId;
  public $dealServingMetadata;
  public $deliveryControl;
  public $externalDealId;
  public $flightEndTimeMs;
  public $flightStartTimeMs;
  public $inventoryDescription;
  public $kind;
  public $lastUpdateTimeMs;
  public $name;
  public $productId;
  public $productRevisionNumber;
  public $programmaticCreativeSource;
  public $proposalId;
  public $sellerContacts;
  public $sharedTargetings;
  public $syndicationProduct;
  public $terms;
  public $webPropertyCode;

  public function setBuyerPrivateData(Google_Service_AdExchangeBuyer_PrivateData $buyerPrivateData)
  {
    $this->buyerPrivateData = $buyerPrivateData;
  }
  public function getBuyerPrivateData()
  {
    return $this->buyerPrivateData;
  }
  public function setCreationTimeMs($creationTimeMs)
  {
    $this->creationTimeMs = $creationTimeMs;
  }
  public function getCreationTimeMs()
  {
    return $this->creationTimeMs;
  }
  public function setCreativePreApprovalPolicy($creativePreApprovalPolicy)
  {
    $this->creativePreApprovalPolicy = $creativePreApprovalPolicy;
  }
  public function getCreativePreApprovalPolicy()
  {
    return $this->creativePreApprovalPolicy;
  }
  public function setCreativeSafeFrameCompatibility($creativeSafeFrameCompatibility)
  {
    $this->creativeSafeFrameCompatibility = $creativeSafeFrameCompatibility;
  }
  public function getCreativeSafeFrameCompatibility()
  {
    return $this->creativeSafeFrameCompatibility;
  }
  public function setDealId($dealId)
  {
    $this->dealId = $dealId;
  }
  public function getDealId()
  {
    return $this->dealId;
  }
  public function setDealServingMetadata(Google_Service_AdExchangeBuyer_DealServingMetadata $dealServingMetadata)
  {
    $this->dealServingMetadata = $dealServingMetadata;
  }
  public function getDealServingMetadata()
  {
    return $this->dealServingMetadata;
  }
  public function setDeliveryControl(Google_Service_AdExchangeBuyer_DeliveryControl $deliveryControl)
  {
    $this->deliveryControl = $deliveryControl;
  }
  public function getDeliveryControl()
  {
    return $this->deliveryControl;
  }
  public function setExternalDealId($externalDealId)
  {
    $this->externalDealId = $externalDealId;
  }
  public function getExternalDealId()
  {
    return $this->externalDealId;
  }
  public function setFlightEndTimeMs($flightEndTimeMs)
  {
    $this->flightEndTimeMs = $flightEndTimeMs;
  }
  public function getFlightEndTimeMs()
  {
    return $this->flightEndTimeMs;
  }
  public function setFlightStartTimeMs($flightStartTimeMs)
  {
    $this->flightStartTimeMs = $flightStartTimeMs;
  }
  public function getFlightStartTimeMs()
  {
    return $this->flightStartTimeMs;
  }
  public function setInventoryDescription($inventoryDescription)
  {
    $this->inventoryDescription = $inventoryDescription;
  }
  public function getInventoryDescription()
  {
    return $this->inventoryDescription;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setLastUpdateTimeMs($lastUpdateTimeMs)
  {
    $this->lastUpdateTimeMs = $lastUpdateTimeMs;
  }
  public function getLastUpdateTimeMs()
  {
    return $this->lastUpdateTimeMs;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  public function getProductId()
  {
    return $this->productId;
  }
  public function setProductRevisionNumber($productRevisionNumber)
  {
    $this->productRevisionNumber = $productRevisionNumber;
  }
  public function getProductRevisionNumber()
  {
    return $this->productRevisionNumber;
  }
  public function setProgrammaticCreativeSource($programmaticCreativeSource)
  {
    $this->programmaticCreativeSource = $programmaticCreativeSource;
  }
  public function getProgrammaticCreativeSource()
  {
    return $this->programmaticCreativeSource;
  }
  public function setProposalId($proposalId)
  {
    $this->proposalId = $proposalId;
  }
  public function getProposalId()
  {
    return $this->proposalId;
  }
  public function setSellerContacts(array $sellerContacts)
  {
    foreach ($sellerContacts as $s) {
      if (!$s instanceof Google_Service_AdExchangeBuyer_ContactInformation) {
        throw new InvalidArgumentException('First argument to setSellerContacts must be an array of Google_Service_AdExchangeBuyer_ContactInformation');
      }
    }
    $this->sellerContacts = $sellerContacts;
  }
  public function getSellerContacts()
  {
    return $this->sellerContacts;
  }
  public function setSharedTargetings(array $sharedTargetings)
  {
    foreach ($sharedTargetings as $s) {
      if (!$s instanceof Google_Service_AdExchangeBuyer_SharedTargeting) {
        throw new InvalidArgumentException('First argument to setSharedTargetings must be an array of Google_Service_AdExchangeBuyer_SharedTargeting');
      }
    }
    $this->sharedTargetings = $sharedTargetings;
  }
  public function getSharedTargetings()
  {
    return $this->sharedTargetings;
  }
  public function setSyndicationProduct($syndicationProduct)
  {
    $this->syndicationProduct = $syndicationProduct;
  }
  public function getSyndicationProduct()
  {
    return $this->syndicationProduct;
  }
  public function setTerms(Google_Service_AdExchangeBuyer_DealTerms $terms)
  {
    $this->terms = $terms;
  }
  public function getTerms()
  {
    return $this->terms;
  }
  public function setWebPropertyCode($webPropertyCode)
  {
    $this->webPropertyCode = $webPropertyCode;
  }
  public function getWebPropertyCode()
  {
    return $this->webPropertyCode;
  }
}
