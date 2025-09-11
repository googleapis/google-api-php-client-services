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

class ProductOfferDetails extends \Google\Collection
{
  protected $collection_key = 'offerTags';
  /**
   * @var string
   */
  public $consumptionState;
  /**
   * @var string
   */
  public $offerId;
  /**
   * @var string[]
   */
  public $offerTags;
  /**
   * @var string
   */
  public $offerToken;
  /**
   * @var string
   */
  public $purchaseOptionId;
  /**
   * @var int
   */
  public $quantity;
  /**
   * @var int
   */
  public $refundableQuantity;
  protected $rentOfferDetailsType = RentOfferDetails::class;
  protected $rentOfferDetailsDataType = '';

  /**
   * @param string
   */
  public function setConsumptionState($consumptionState)
  {
    $this->consumptionState = $consumptionState;
  }
  /**
   * @return string
   */
  public function getConsumptionState()
  {
    return $this->consumptionState;
  }
  /**
   * @param string
   */
  public function setOfferId($offerId)
  {
    $this->offerId = $offerId;
  }
  /**
   * @return string
   */
  public function getOfferId()
  {
    return $this->offerId;
  }
  /**
   * @param string[]
   */
  public function setOfferTags($offerTags)
  {
    $this->offerTags = $offerTags;
  }
  /**
   * @return string[]
   */
  public function getOfferTags()
  {
    return $this->offerTags;
  }
  /**
   * @param string
   */
  public function setOfferToken($offerToken)
  {
    $this->offerToken = $offerToken;
  }
  /**
   * @return string
   */
  public function getOfferToken()
  {
    return $this->offerToken;
  }
  /**
   * @param string
   */
  public function setPurchaseOptionId($purchaseOptionId)
  {
    $this->purchaseOptionId = $purchaseOptionId;
  }
  /**
   * @return string
   */
  public function getPurchaseOptionId()
  {
    return $this->purchaseOptionId;
  }
  /**
   * @param int
   */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /**
   * @return int
   */
  public function getQuantity()
  {
    return $this->quantity;
  }
  /**
   * @param int
   */
  public function setRefundableQuantity($refundableQuantity)
  {
    $this->refundableQuantity = $refundableQuantity;
  }
  /**
   * @return int
   */
  public function getRefundableQuantity()
  {
    return $this->refundableQuantity;
  }
  /**
   * @param RentOfferDetails
   */
  public function setRentOfferDetails(RentOfferDetails $rentOfferDetails)
  {
    $this->rentOfferDetails = $rentOfferDetails;
  }
  /**
   * @return RentOfferDetails
   */
  public function getRentOfferDetails()
  {
    return $this->rentOfferDetails;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProductOfferDetails::class, 'Google_Service_AndroidPublisher_ProductOfferDetails');
