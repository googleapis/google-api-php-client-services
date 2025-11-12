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

class OneTimeProductOfferRegionalPricingAndAvailabilityConfig extends \Google\Model
{
  protected $absoluteDiscountType = Money::class;
  protected $absoluteDiscountDataType = '';
  /**
   * @var string
   */
  public $availability;
  protected $noOverrideType = OneTimeProductOfferNoPriceOverrideOptions::class;
  protected $noOverrideDataType = '';
  /**
   * @var string
   */
  public $regionCode;
  public $relativeDiscount;

  /**
   * @param Money
   */
  public function setAbsoluteDiscount(Money $absoluteDiscount)
  {
    $this->absoluteDiscount = $absoluteDiscount;
  }
  /**
   * @return Money
   */
  public function getAbsoluteDiscount()
  {
    return $this->absoluteDiscount;
  }
  /**
   * @param string
   */
  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }
  /**
   * @return string
   */
  public function getAvailability()
  {
    return $this->availability;
  }
  /**
   * @param OneTimeProductOfferNoPriceOverrideOptions
   */
  public function setNoOverride(OneTimeProductOfferNoPriceOverrideOptions $noOverride)
  {
    $this->noOverride = $noOverride;
  }
  /**
   * @return OneTimeProductOfferNoPriceOverrideOptions
   */
  public function getNoOverride()
  {
    return $this->noOverride;
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
  public function setRelativeDiscount($relativeDiscount)
  {
    $this->relativeDiscount = $relativeDiscount;
  }
  public function getRelativeDiscount()
  {
    return $this->relativeDiscount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OneTimeProductOfferRegionalPricingAndAvailabilityConfig::class, 'Google_Service_AndroidPublisher_OneTimeProductOfferRegionalPricingAndAvailabilityConfig');
