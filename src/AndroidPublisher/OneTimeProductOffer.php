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

class OneTimeProductOffer extends \Google\Collection
{
  protected $collection_key = 'regionalPricingAndAvailabilityConfigs';
  protected $discountedOfferType = OneTimeProductDiscountedOffer::class;
  protected $discountedOfferDataType = '';
  /**
   * @var string
   */
  public $offerId;
  protected $offerTagsType = OfferTag::class;
  protected $offerTagsDataType = 'array';
  /**
   * @var string
   */
  public $packageName;
  protected $preOrderOfferType = OneTimeProductPreOrderOffer::class;
  protected $preOrderOfferDataType = '';
  /**
   * @var string
   */
  public $productId;
  /**
   * @var string
   */
  public $purchaseOptionId;
  protected $regionalPricingAndAvailabilityConfigsType = OneTimeProductOfferRegionalPricingAndAvailabilityConfig::class;
  protected $regionalPricingAndAvailabilityConfigsDataType = 'array';
  protected $regionsVersionType = RegionsVersion::class;
  protected $regionsVersionDataType = '';
  /**
   * @var string
   */
  public $state;

  /**
   * @param OneTimeProductDiscountedOffer
   */
  public function setDiscountedOffer(OneTimeProductDiscountedOffer $discountedOffer)
  {
    $this->discountedOffer = $discountedOffer;
  }
  /**
   * @return OneTimeProductDiscountedOffer
   */
  public function getDiscountedOffer()
  {
    return $this->discountedOffer;
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
   * @param OfferTag[]
   */
  public function setOfferTags($offerTags)
  {
    $this->offerTags = $offerTags;
  }
  /**
   * @return OfferTag[]
   */
  public function getOfferTags()
  {
    return $this->offerTags;
  }
  /**
   * @param string
   */
  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }
  /**
   * @return string
   */
  public function getPackageName()
  {
    return $this->packageName;
  }
  /**
   * @param OneTimeProductPreOrderOffer
   */
  public function setPreOrderOffer(OneTimeProductPreOrderOffer $preOrderOffer)
  {
    $this->preOrderOffer = $preOrderOffer;
  }
  /**
   * @return OneTimeProductPreOrderOffer
   */
  public function getPreOrderOffer()
  {
    return $this->preOrderOffer;
  }
  /**
   * @param string
   */
  public function setProductId($productId)
  {
    $this->productId = $productId;
  }
  /**
   * @return string
   */
  public function getProductId()
  {
    return $this->productId;
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
   * @param OneTimeProductOfferRegionalPricingAndAvailabilityConfig[]
   */
  public function setRegionalPricingAndAvailabilityConfigs($regionalPricingAndAvailabilityConfigs)
  {
    $this->regionalPricingAndAvailabilityConfigs = $regionalPricingAndAvailabilityConfigs;
  }
  /**
   * @return OneTimeProductOfferRegionalPricingAndAvailabilityConfig[]
   */
  public function getRegionalPricingAndAvailabilityConfigs()
  {
    return $this->regionalPricingAndAvailabilityConfigs;
  }
  /**
   * @param RegionsVersion
   */
  public function setRegionsVersion(RegionsVersion $regionsVersion)
  {
    $this->regionsVersion = $regionsVersion;
  }
  /**
   * @return RegionsVersion
   */
  public function getRegionsVersion()
  {
    return $this->regionsVersion;
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OneTimeProductOffer::class, 'Google_Service_AndroidPublisher_OneTimeProductOffer');
