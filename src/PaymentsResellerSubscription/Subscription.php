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

namespace Google\Service\PaymentsResellerSubscription;

class Subscription extends \Google\Collection
{
  protected $collection_key = 'promotions';
  protected $cancellationDetailsType = SubscriptionCancellationDetails::class;
  protected $cancellationDetailsDataType = '';
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $cycleEndTime;
  /**
   * @var bool
   */
  public $endUserEntitled;
  /**
   * @var string
   */
  public $freeTrialEndTime;
  protected $lineItemsType = SubscriptionLineItem::class;
  protected $lineItemsDataType = 'array';
  protected $migrationDetailsType = SubscriptionMigrationDetails::class;
  protected $migrationDetailsDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $partnerUserToken;
  /**
   * @var string
   */
  public $processingState;
  /**
   * @var string[]
   */
  public $products;
  protected $promotionSpecsType = SubscriptionPromotionSpec::class;
  protected $promotionSpecsDataType = 'array';
  /**
   * @var string[]
   */
  public $promotions;
  /**
   * @var string
   */
  public $purchaseTime;
  /**
   * @var string
   */
  public $redirectUri;
  /**
   * @var string
   */
  public $renewalTime;
  protected $serviceLocationType = Location::class;
  protected $serviceLocationDataType = '';
  /**
   * @var string
   */
  public $state;
  /**
   * @var string
   */
  public $updateTime;
  protected $upgradeDowngradeDetailsType = SubscriptionUpgradeDowngradeDetails::class;
  protected $upgradeDowngradeDetailsDataType = '';

  /**
   * @param SubscriptionCancellationDetails
   */
  public function setCancellationDetails(SubscriptionCancellationDetails $cancellationDetails)
  {
    $this->cancellationDetails = $cancellationDetails;
  }
  /**
   * @return SubscriptionCancellationDetails
   */
  public function getCancellationDetails()
  {
    return $this->cancellationDetails;
  }
  /**
   * @param string
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param string
   */
  public function setCycleEndTime($cycleEndTime)
  {
    $this->cycleEndTime = $cycleEndTime;
  }
  /**
   * @return string
   */
  public function getCycleEndTime()
  {
    return $this->cycleEndTime;
  }
  /**
   * @param bool
   */
  public function setEndUserEntitled($endUserEntitled)
  {
    $this->endUserEntitled = $endUserEntitled;
  }
  /**
   * @return bool
   */
  public function getEndUserEntitled()
  {
    return $this->endUserEntitled;
  }
  /**
   * @param string
   */
  public function setFreeTrialEndTime($freeTrialEndTime)
  {
    $this->freeTrialEndTime = $freeTrialEndTime;
  }
  /**
   * @return string
   */
  public function getFreeTrialEndTime()
  {
    return $this->freeTrialEndTime;
  }
  /**
   * @param SubscriptionLineItem[]
   */
  public function setLineItems($lineItems)
  {
    $this->lineItems = $lineItems;
  }
  /**
   * @return SubscriptionLineItem[]
   */
  public function getLineItems()
  {
    return $this->lineItems;
  }
  /**
   * @param SubscriptionMigrationDetails
   */
  public function setMigrationDetails(SubscriptionMigrationDetails $migrationDetails)
  {
    $this->migrationDetails = $migrationDetails;
  }
  /**
   * @return SubscriptionMigrationDetails
   */
  public function getMigrationDetails()
  {
    return $this->migrationDetails;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setPartnerUserToken($partnerUserToken)
  {
    $this->partnerUserToken = $partnerUserToken;
  }
  /**
   * @return string
   */
  public function getPartnerUserToken()
  {
    return $this->partnerUserToken;
  }
  /**
   * @param string
   */
  public function setProcessingState($processingState)
  {
    $this->processingState = $processingState;
  }
  /**
   * @return string
   */
  public function getProcessingState()
  {
    return $this->processingState;
  }
  /**
   * @param string[]
   */
  public function setProducts($products)
  {
    $this->products = $products;
  }
  /**
   * @return string[]
   */
  public function getProducts()
  {
    return $this->products;
  }
  /**
   * @param SubscriptionPromotionSpec[]
   */
  public function setPromotionSpecs($promotionSpecs)
  {
    $this->promotionSpecs = $promotionSpecs;
  }
  /**
   * @return SubscriptionPromotionSpec[]
   */
  public function getPromotionSpecs()
  {
    return $this->promotionSpecs;
  }
  /**
   * @param string[]
   */
  public function setPromotions($promotions)
  {
    $this->promotions = $promotions;
  }
  /**
   * @return string[]
   */
  public function getPromotions()
  {
    return $this->promotions;
  }
  /**
   * @param string
   */
  public function setPurchaseTime($purchaseTime)
  {
    $this->purchaseTime = $purchaseTime;
  }
  /**
   * @return string
   */
  public function getPurchaseTime()
  {
    return $this->purchaseTime;
  }
  /**
   * @param string
   */
  public function setRedirectUri($redirectUri)
  {
    $this->redirectUri = $redirectUri;
  }
  /**
   * @return string
   */
  public function getRedirectUri()
  {
    return $this->redirectUri;
  }
  /**
   * @param string
   */
  public function setRenewalTime($renewalTime)
  {
    $this->renewalTime = $renewalTime;
  }
  /**
   * @return string
   */
  public function getRenewalTime()
  {
    return $this->renewalTime;
  }
  /**
   * @param Location
   */
  public function setServiceLocation(Location $serviceLocation)
  {
    $this->serviceLocation = $serviceLocation;
  }
  /**
   * @return Location
   */
  public function getServiceLocation()
  {
    return $this->serviceLocation;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param string
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * @param SubscriptionUpgradeDowngradeDetails
   */
  public function setUpgradeDowngradeDetails(SubscriptionUpgradeDowngradeDetails $upgradeDowngradeDetails)
  {
    $this->upgradeDowngradeDetails = $upgradeDowngradeDetails;
  }
  /**
   * @return SubscriptionUpgradeDowngradeDetails
   */
  public function getUpgradeDowngradeDetails()
  {
    return $this->upgradeDowngradeDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Subscription::class, 'Google_Service_PaymentsResellerSubscription_Subscription');
