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

class OneTimeProductPurchaseOption extends \Google\Collection
{
  protected $collection_key = 'regionalPricingAndAvailabilityConfigs';
  protected $buyOptionType = OneTimeProductBuyPurchaseOption::class;
  protected $buyOptionDataType = '';
  protected $newRegionsConfigType = OneTimeProductPurchaseOptionNewRegionsConfig::class;
  protected $newRegionsConfigDataType = '';
  protected $offerTagsType = OfferTag::class;
  protected $offerTagsDataType = 'array';
  /**
   * @var string
   */
  public $purchaseOptionId;
  protected $regionalPricingAndAvailabilityConfigsType = OneTimeProductPurchaseOptionRegionalPricingAndAvailabilityConfig::class;
  protected $regionalPricingAndAvailabilityConfigsDataType = 'array';
  protected $rentOptionType = OneTimeProductRentPurchaseOption::class;
  protected $rentOptionDataType = '';
  /**
   * @var string
   */
  public $state;
  protected $taxAndComplianceSettingsType = PurchaseOptionTaxAndComplianceSettings::class;
  protected $taxAndComplianceSettingsDataType = '';

  /**
   * @param OneTimeProductBuyPurchaseOption
   */
  public function setBuyOption(OneTimeProductBuyPurchaseOption $buyOption)
  {
    $this->buyOption = $buyOption;
  }
  /**
   * @return OneTimeProductBuyPurchaseOption
   */
  public function getBuyOption()
  {
    return $this->buyOption;
  }
  /**
   * @param OneTimeProductPurchaseOptionNewRegionsConfig
   */
  public function setNewRegionsConfig(OneTimeProductPurchaseOptionNewRegionsConfig $newRegionsConfig)
  {
    $this->newRegionsConfig = $newRegionsConfig;
  }
  /**
   * @return OneTimeProductPurchaseOptionNewRegionsConfig
   */
  public function getNewRegionsConfig()
  {
    return $this->newRegionsConfig;
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
   * @param OneTimeProductPurchaseOptionRegionalPricingAndAvailabilityConfig[]
   */
  public function setRegionalPricingAndAvailabilityConfigs($regionalPricingAndAvailabilityConfigs)
  {
    $this->regionalPricingAndAvailabilityConfigs = $regionalPricingAndAvailabilityConfigs;
  }
  /**
   * @return OneTimeProductPurchaseOptionRegionalPricingAndAvailabilityConfig[]
   */
  public function getRegionalPricingAndAvailabilityConfigs()
  {
    return $this->regionalPricingAndAvailabilityConfigs;
  }
  /**
   * @param OneTimeProductRentPurchaseOption
   */
  public function setRentOption(OneTimeProductRentPurchaseOption $rentOption)
  {
    $this->rentOption = $rentOption;
  }
  /**
   * @return OneTimeProductRentPurchaseOption
   */
  public function getRentOption()
  {
    return $this->rentOption;
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
   * @param PurchaseOptionTaxAndComplianceSettings
   */
  public function setTaxAndComplianceSettings(PurchaseOptionTaxAndComplianceSettings $taxAndComplianceSettings)
  {
    $this->taxAndComplianceSettings = $taxAndComplianceSettings;
  }
  /**
   * @return PurchaseOptionTaxAndComplianceSettings
   */
  public function getTaxAndComplianceSettings()
  {
    return $this->taxAndComplianceSettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OneTimeProductPurchaseOption::class, 'Google_Service_AndroidPublisher_OneTimeProductPurchaseOption');
