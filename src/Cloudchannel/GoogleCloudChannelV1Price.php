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

namespace Google\Service\Cloudchannel;

class GoogleCloudChannelV1Price extends \Google\Collection
{
  protected $collection_key = 'discountComponents';
  protected $basePriceType = GoogleTypeMoney::class;
  protected $basePriceDataType = '';
  public $discount;
  protected $discountComponentsType = GoogleCloudChannelV1DiscountComponent::class;
  protected $discountComponentsDataType = 'array';
  protected $effectivePriceType = GoogleTypeMoney::class;
  protected $effectivePriceDataType = '';
  /**
   * @var string
   */
  public $externalPriceUri;
  protected $pricePeriodType = GoogleCloudChannelV1Period::class;
  protected $pricePeriodDataType = '';

  /**
   * @param GoogleTypeMoney
   */
  public function setBasePrice(GoogleTypeMoney $basePrice)
  {
    $this->basePrice = $basePrice;
  }
  /**
   * @return GoogleTypeMoney
   */
  public function getBasePrice()
  {
    return $this->basePrice;
  }
  public function setDiscount($discount)
  {
    $this->discount = $discount;
  }
  public function getDiscount()
  {
    return $this->discount;
  }
  /**
   * @param GoogleCloudChannelV1DiscountComponent[]
   */
  public function setDiscountComponents($discountComponents)
  {
    $this->discountComponents = $discountComponents;
  }
  /**
   * @return GoogleCloudChannelV1DiscountComponent[]
   */
  public function getDiscountComponents()
  {
    return $this->discountComponents;
  }
  /**
   * @param GoogleTypeMoney
   */
  public function setEffectivePrice(GoogleTypeMoney $effectivePrice)
  {
    $this->effectivePrice = $effectivePrice;
  }
  /**
   * @return GoogleTypeMoney
   */
  public function getEffectivePrice()
  {
    return $this->effectivePrice;
  }
  /**
   * @param string
   */
  public function setExternalPriceUri($externalPriceUri)
  {
    $this->externalPriceUri = $externalPriceUri;
  }
  /**
   * @return string
   */
  public function getExternalPriceUri()
  {
    return $this->externalPriceUri;
  }
  /**
   * @param GoogleCloudChannelV1Period
   */
  public function setPricePeriod(GoogleCloudChannelV1Period $pricePeriod)
  {
    $this->pricePeriod = $pricePeriod;
  }
  /**
   * @return GoogleCloudChannelV1Period
   */
  public function getPricePeriod()
  {
    return $this->pricePeriod;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudChannelV1Price::class, 'Google_Service_Cloudchannel_GoogleCloudChannelV1Price');
