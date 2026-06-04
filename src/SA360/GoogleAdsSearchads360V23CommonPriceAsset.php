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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23CommonPriceAsset extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const PRICE_QUALIFIER_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const PRICE_QUALIFIER_UNKNOWN = 'UNKNOWN';
  /**
   * 'From' qualifier for the price.
   */
  public const PRICE_QUALIFIER_FROM = 'FROM';
  /**
   * 'Up to' qualifier for the price.
   */
  public const PRICE_QUALIFIER_UP_TO = 'UP_TO';
  /**
   * 'Average' qualifier for the price.
   */
  public const PRICE_QUALIFIER_AVERAGE = 'AVERAGE';
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The type for showing a list of brands.
   */
  public const TYPE_BRANDS = 'BRANDS';
  /**
   * The type for showing a list of events.
   */
  public const TYPE_EVENTS = 'EVENTS';
  /**
   * The type for showing locations relevant to your business.
   */
  public const TYPE_LOCATIONS = 'LOCATIONS';
  /**
   * The type for showing sub-regions or districts within a city or region.
   */
  public const TYPE_NEIGHBORHOODS = 'NEIGHBORHOODS';
  /**
   * The type for showing a collection of product categories.
   */
  public const TYPE_PRODUCT_CATEGORIES = 'PRODUCT_CATEGORIES';
  /**
   * The type for showing a collection of related product tiers.
   */
  public const TYPE_PRODUCT_TIERS = 'PRODUCT_TIERS';
  /**
   * The type for showing a collection of services offered by your business.
   */
  public const TYPE_SERVICES = 'SERVICES';
  /**
   * The type for showing a collection of service categories.
   */
  public const TYPE_SERVICE_CATEGORIES = 'SERVICE_CATEGORIES';
  /**
   * The type for showing a collection of related service tiers.
   */
  public const TYPE_SERVICE_TIERS = 'SERVICE_TIERS';
  protected $collection_key = 'priceOfferings';
  /**
   * Required. The language of the price asset. Represented as BCP 47 language
   * tag.
   *
   * @var string
   */
  public $languageCode;
  protected $priceOfferingsType = GoogleAdsSearchads360V23CommonPriceOffering::class;
  protected $priceOfferingsDataType = 'array';
  /**
   * The price qualifier of the price asset.
   *
   * @var string
   */
  public $priceQualifier;
  /**
   * Required. The type of the price asset.
   *
   * @var string
   */
  public $type;

  /**
   * Required. The language of the price asset. Represented as BCP 47 language
   * tag.
   *
   * @param string $languageCode
   */
  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }
  /**
   * @return string
   */
  public function getLanguageCode()
  {
    return $this->languageCode;
  }
  /**
   * The price offerings of the price asset. The size of this collection should
   * be between 3 and 8, inclusive.
   *
   * @param GoogleAdsSearchads360V23CommonPriceOffering[] $priceOfferings
   */
  public function setPriceOfferings($priceOfferings)
  {
    $this->priceOfferings = $priceOfferings;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPriceOffering[]
   */
  public function getPriceOfferings()
  {
    return $this->priceOfferings;
  }
  /**
   * The price qualifier of the price asset.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, FROM, UP_TO, AVERAGE
   *
   * @param self::PRICE_QUALIFIER_* $priceQualifier
   */
  public function setPriceQualifier($priceQualifier)
  {
    $this->priceQualifier = $priceQualifier;
  }
  /**
   * @return self::PRICE_QUALIFIER_*
   */
  public function getPriceQualifier()
  {
    return $this->priceQualifier;
  }
  /**
   * Required. The type of the price asset.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, BRANDS, EVENTS, LOCATIONS,
   * NEIGHBORHOODS, PRODUCT_CATEGORIES, PRODUCT_TIERS, SERVICES,
   * SERVICE_CATEGORIES, SERVICE_TIERS
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonPriceAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonPriceAsset');
