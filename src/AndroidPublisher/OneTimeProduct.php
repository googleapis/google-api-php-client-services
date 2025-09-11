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

class OneTimeProduct extends \Google\Collection
{
  protected $collection_key = 'purchaseOptions';
  protected $listingsType = OneTimeProductListing::class;
  protected $listingsDataType = 'array';
  protected $offerTagsType = OfferTag::class;
  protected $offerTagsDataType = 'array';
  /**
   * @var string
   */
  public $packageName;
  /**
   * @var string
   */
  public $productId;
  protected $purchaseOptionsType = OneTimeProductPurchaseOption::class;
  protected $purchaseOptionsDataType = 'array';
  protected $regionsVersionType = RegionsVersion::class;
  protected $regionsVersionDataType = '';
  protected $restrictedPaymentCountriesType = RestrictedPaymentCountries::class;
  protected $restrictedPaymentCountriesDataType = '';
  protected $taxAndComplianceSettingsType = OneTimeProductTaxAndComplianceSettings::class;
  protected $taxAndComplianceSettingsDataType = '';

  /**
   * @param OneTimeProductListing[]
   */
  public function setListings($listings)
  {
    $this->listings = $listings;
  }
  /**
   * @return OneTimeProductListing[]
   */
  public function getListings()
  {
    return $this->listings;
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
   * @param OneTimeProductPurchaseOption[]
   */
  public function setPurchaseOptions($purchaseOptions)
  {
    $this->purchaseOptions = $purchaseOptions;
  }
  /**
   * @return OneTimeProductPurchaseOption[]
   */
  public function getPurchaseOptions()
  {
    return $this->purchaseOptions;
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
   * @param RestrictedPaymentCountries
   */
  public function setRestrictedPaymentCountries(RestrictedPaymentCountries $restrictedPaymentCountries)
  {
    $this->restrictedPaymentCountries = $restrictedPaymentCountries;
  }
  /**
   * @return RestrictedPaymentCountries
   */
  public function getRestrictedPaymentCountries()
  {
    return $this->restrictedPaymentCountries;
  }
  /**
   * @param OneTimeProductTaxAndComplianceSettings
   */
  public function setTaxAndComplianceSettings(OneTimeProductTaxAndComplianceSettings $taxAndComplianceSettings)
  {
    $this->taxAndComplianceSettings = $taxAndComplianceSettings;
  }
  /**
   * @return OneTimeProductTaxAndComplianceSettings
   */
  public function getTaxAndComplianceSettings()
  {
    return $this->taxAndComplianceSettings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OneTimeProduct::class, 'Google_Service_AndroidPublisher_OneTimeProduct');
