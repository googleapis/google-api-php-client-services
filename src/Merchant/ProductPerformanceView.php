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

namespace Google\Service\Merchant;

class ProductPerformanceView extends \Google\Model
{
  /**
   * Not specified.
   */
  public const MARKETING_METHOD_MARKETING_METHOD_ENUM_UNSPECIFIED = 'MARKETING_METHOD_ENUM_UNSPECIFIED';
  /**
   * Organic marketing.
   */
  public const MARKETING_METHOD_ORGANIC = 'ORGANIC';
  /**
   * Ads-based marketing.
   */
  public const MARKETING_METHOD_ADS = 'ADS';
  /**
   * [YouTube Shopping Affiliate
   * marketing](https://support.google.com/merchants/answer/14815513).
   */
  public const MARKETING_METHOD_AFFILIATE = 'AFFILIATE';
  /**
   * Not specified.
   */
  public const NETWORK_NETWORK_ENUM_UNSPECIFIED = 'NETWORK_ENUM_UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const NETWORK_UNKNOWN = 'UNKNOWN';
  /**
   * Google search.
   */
  public const NETWORK_SEARCH = 'SEARCH';
  /**
   * Search partners.
   */
  public const NETWORK_SEARCH_PARTNERS = 'SEARCH_PARTNERS';
  /**
   * Display Network.
   */
  public const NETWORK_CONTENT = 'CONTENT';
  /**
   * Cross-network.
   */
  public const NETWORK_MIXED = 'MIXED';
  /**
   * YouTube
   */
  public const NETWORK_YOUTUBE = 'YOUTUBE';
  /**
   * Google TV
   */
  public const NETWORK_GOOGLE_TV = 'GOOGLE_TV';
  /**
   * This network is used for Google Owned channels such as Discover feed,
   * Gmail, YouTube. Demand Gen stats are attributed to more granular network
   * types such as GMAIL, DISCOVER, MAPS, YOUTUBE; this value is only used for
   * historical data.
   */
  public const NETWORK_GOOGLE_OWNED_CHANNELS = 'GOOGLE_OWNED_CHANNELS';
  /**
   * Gmail
   */
  public const NETWORK_GMAIL = 'GMAIL';
  /**
   * Discover Feed
   */
  public const NETWORK_DISCOVER = 'DISCOVER';
  /**
   * Maps
   */
  public const NETWORK_MAPS = 'MAPS';
  /**
   * Not specified.
   */
  public const STORE_TYPE_STORE_TYPE_ENUM_UNSPECIFIED = 'STORE_TYPE_ENUM_UNSPECIFIED';
  /**
   * Online store.
   */
  public const STORE_TYPE_ONLINE_STORE = 'ONLINE_STORE';
  /**
   * Local (physical) stores.
   */
  public const STORE_TYPE_LOCAL_STORES = 'LOCAL_STORES';
  /**
   * Brand of the product. Segment.
   *
   * @var string
   */
  public $brand;
  /**
   * [Product category (1st level)](https://developers.google.com/merchant/api/g
   * uides/reports/performance-reports#category_and_product_type) in Google's
   * product taxonomy. Segment.
   *
   * @var string
   */
  public $categoryL1;
  /**
   * [Product category (2nd level)](https://developers.google.com/merchant/api/g
   * uides/reports/performance-reports#category_and_product_type) in Google's
   * product taxonomy. Segment.
   *
   * @var string
   */
  public $categoryL2;
  /**
   * [Product category (3rd level)](https://developers.google.com/merchant/api/g
   * uides/reports/performance-reports#category_and_product_type) in Google's
   * product taxonomy. Segment.
   *
   * @var string
   */
  public $categoryL3;
  /**
   * [Product category (4th level)](https://developers.google.com/merchant/api/g
   * uides/reports/performance-reports#category_and_product_type) in Google's
   * product taxonomy. Segment.
   *
   * @var string
   */
  public $categoryL4;
  /**
   * [Product category (5th level)](https://developers.google.com/merchant/api/g
   * uides/reports/performance-reports#category_and_product_type) in Google's
   * product taxonomy. Segment.
   *
   * @var string
   */
  public $categoryL5;
  /**
   * Click-through rate - the number of clicks merchant's products receive
   * (clicks) divided by the number of times the products are shown
   * (impressions). Metric.
   *
   * @var 
   */
  public $clickThroughRate;
  /**
   * Number of clicks. Metric.
   *
   * @var string
   */
  public $clicks;
  /**
   * Number of conversions divided by the number of clicks, reported on the
   * impression date. Metric. Available only for the `FREE` traffic source.
   *
   * @var 
   */
  public $conversionRate;
  protected $conversionValueType = Price::class;
  protected $conversionValueDataType = '';
  /**
   * Number of conversions attributed to the product, reported on the conversion
   * date. Depending on the attribution model, a conversion might be distributed
   * across multiple clicks, where each click gets its own credit assigned. This
   * metric is a sum of all such credits. Metric. Available only for the `FREE`
   * traffic source.
   *
   * @var 
   */
  public $conversions;
  /**
   * Custom label 0 for custom grouping of products. Segment.
   *
   * @var string
   */
  public $customLabel0;
  /**
   * Custom label 1 for custom grouping of products. Segment.
   *
   * @var string
   */
  public $customLabel1;
  /**
   * Custom label 2 for custom grouping of products. Segment.
   *
   * @var string
   */
  public $customLabel2;
  /**
   * Custom label 3 for custom grouping of products. Segment.
   *
   * @var string
   */
  public $customLabel3;
  /**
   * Custom label 4 for custom grouping of products. Segment.
   *
   * @var string
   */
  public $customLabel4;
  /**
   * Code of the country where the customer is located at the time of the event.
   * Represented in the ISO 3166 format. Segment. If the customer country cannot
   * be determined, a special 'ZZ' code is returned.
   *
   * @var string
   */
  public $customerCountryCode;
  protected $dateType = Date::class;
  protected $dateDataType = '';
  /**
   * Number of times merchant's products are shown. Metric.
   *
   * @var string
   */
  public $impressions;
  /**
   * Marketing method to which metrics apply. Segment.
   *
   * @var string
   */
  public $marketingMethod;
  /**
   * Network to which metrics apply. Segment.
   *
   * @var string
   */
  public $network;
  /**
   * Merchant-provided id of the product. Segment.
   *
   * @var string
   */
  public $offerId;
  /**
   * [Product type (1st level)](https://developers.google.com/merchant/api/guide
   * s/reports/performance-reports#category_and_product_type) in merchant's own
   * product taxonomy. Segment.
   *
   * @var string
   */
  public $productTypeL1;
  /**
   * [Product type (2nd level)](https://developers.google.com/merchant/api/guide
   * s/reports/performance-reports#category_and_product_type) in merchant's own
   * product taxonomy. Segment.
   *
   * @var string
   */
  public $productTypeL2;
  /**
   * [Product type (3rd level)](https://developers.google.com/merchant/api/guide
   * s/reports/performance-reports#category_and_product_type) in merchant's own
   * product taxonomy. Segment.
   *
   * @var string
   */
  public $productTypeL3;
  /**
   * [Product type (4th level)](https://developers.google.com/merchant/api/guide
   * s/reports/performance-reports#category_and_product_type) in merchant's own
   * product taxonomy. Segment.
   *
   * @var string
   */
  public $productTypeL4;
  /**
   * [Product type (5th level)](https://developers.google.com/merchant/api/guide
   * s/reports/performance-reports#category_and_product_type) in merchant's own
   * product taxonomy. Segment.
   *
   * @var string
   */
  public $productTypeL5;
  /**
   * Store type to which metrics apply. Can be `ONLINE_STORE` or `LOCAL_STORES`.
   * Segment. For `LOCAL_STORES` store type, further segmentation by a specific
   * store is not available.
   *
   * @var string
   */
  public $storeType;
  /**
   * Title of the product. Segment.
   *
   * @var string
   */
  public $title;
  protected $weekType = Date::class;
  protected $weekDataType = '';

  /**
   * Brand of the product. Segment.
   *
   * @param string $brand
   */
  public function setBrand($brand)
  {
    $this->brand = $brand;
  }
  /**
   * @return string
   */
  public function getBrand()
  {
    return $this->brand;
  }
  /**
   * [Product category (1st level)](https://developers.google.com/merchant/api/g
   * uides/reports/performance-reports#category_and_product_type) in Google's
   * product taxonomy. Segment.
   *
   * @param string $categoryL1
   */
  public function setCategoryL1($categoryL1)
  {
    $this->categoryL1 = $categoryL1;
  }
  /**
   * @return string
   */
  public function getCategoryL1()
  {
    return $this->categoryL1;
  }
  /**
   * [Product category (2nd level)](https://developers.google.com/merchant/api/g
   * uides/reports/performance-reports#category_and_product_type) in Google's
   * product taxonomy. Segment.
   *
   * @param string $categoryL2
   */
  public function setCategoryL2($categoryL2)
  {
    $this->categoryL2 = $categoryL2;
  }
  /**
   * @return string
   */
  public function getCategoryL2()
  {
    return $this->categoryL2;
  }
  /**
   * [Product category (3rd level)](https://developers.google.com/merchant/api/g
   * uides/reports/performance-reports#category_and_product_type) in Google's
   * product taxonomy. Segment.
   *
   * @param string $categoryL3
   */
  public function setCategoryL3($categoryL3)
  {
    $this->categoryL3 = $categoryL3;
  }
  /**
   * @return string
   */
  public function getCategoryL3()
  {
    return $this->categoryL3;
  }
  /**
   * [Product category (4th level)](https://developers.google.com/merchant/api/g
   * uides/reports/performance-reports#category_and_product_type) in Google's
   * product taxonomy. Segment.
   *
   * @param string $categoryL4
   */
  public function setCategoryL4($categoryL4)
  {
    $this->categoryL4 = $categoryL4;
  }
  /**
   * @return string
   */
  public function getCategoryL4()
  {
    return $this->categoryL4;
  }
  /**
   * [Product category (5th level)](https://developers.google.com/merchant/api/g
   * uides/reports/performance-reports#category_and_product_type) in Google's
   * product taxonomy. Segment.
   *
   * @param string $categoryL5
   */
  public function setCategoryL5($categoryL5)
  {
    $this->categoryL5 = $categoryL5;
  }
  /**
   * @return string
   */
  public function getCategoryL5()
  {
    return $this->categoryL5;
  }
  public function setClickThroughRate($clickThroughRate)
  {
    $this->clickThroughRate = $clickThroughRate;
  }
  public function getClickThroughRate()
  {
    return $this->clickThroughRate;
  }
  /**
   * Number of clicks. Metric.
   *
   * @param string $clicks
   */
  public function setClicks($clicks)
  {
    $this->clicks = $clicks;
  }
  /**
   * @return string
   */
  public function getClicks()
  {
    return $this->clicks;
  }
  public function setConversionRate($conversionRate)
  {
    $this->conversionRate = $conversionRate;
  }
  public function getConversionRate()
  {
    return $this->conversionRate;
  }
  /**
   * Value of conversions attributed to the product, reported on the conversion
   * date. Metric. Available only for the `FREE` traffic source.
   *
   * @param Price $conversionValue
   */
  public function setConversionValue(Price $conversionValue)
  {
    $this->conversionValue = $conversionValue;
  }
  /**
   * @return Price
   */
  public function getConversionValue()
  {
    return $this->conversionValue;
  }
  public function setConversions($conversions)
  {
    $this->conversions = $conversions;
  }
  public function getConversions()
  {
    return $this->conversions;
  }
  /**
   * Custom label 0 for custom grouping of products. Segment.
   *
   * @param string $customLabel0
   */
  public function setCustomLabel0($customLabel0)
  {
    $this->customLabel0 = $customLabel0;
  }
  /**
   * @return string
   */
  public function getCustomLabel0()
  {
    return $this->customLabel0;
  }
  /**
   * Custom label 1 for custom grouping of products. Segment.
   *
   * @param string $customLabel1
   */
  public function setCustomLabel1($customLabel1)
  {
    $this->customLabel1 = $customLabel1;
  }
  /**
   * @return string
   */
  public function getCustomLabel1()
  {
    return $this->customLabel1;
  }
  /**
   * Custom label 2 for custom grouping of products. Segment.
   *
   * @param string $customLabel2
   */
  public function setCustomLabel2($customLabel2)
  {
    $this->customLabel2 = $customLabel2;
  }
  /**
   * @return string
   */
  public function getCustomLabel2()
  {
    return $this->customLabel2;
  }
  /**
   * Custom label 3 for custom grouping of products. Segment.
   *
   * @param string $customLabel3
   */
  public function setCustomLabel3($customLabel3)
  {
    $this->customLabel3 = $customLabel3;
  }
  /**
   * @return string
   */
  public function getCustomLabel3()
  {
    return $this->customLabel3;
  }
  /**
   * Custom label 4 for custom grouping of products. Segment.
   *
   * @param string $customLabel4
   */
  public function setCustomLabel4($customLabel4)
  {
    $this->customLabel4 = $customLabel4;
  }
  /**
   * @return string
   */
  public function getCustomLabel4()
  {
    return $this->customLabel4;
  }
  /**
   * Code of the country where the customer is located at the time of the event.
   * Represented in the ISO 3166 format. Segment. If the customer country cannot
   * be determined, a special 'ZZ' code is returned.
   *
   * @param string $customerCountryCode
   */
  public function setCustomerCountryCode($customerCountryCode)
  {
    $this->customerCountryCode = $customerCountryCode;
  }
  /**
   * @return string
   */
  public function getCustomerCountryCode()
  {
    return $this->customerCountryCode;
  }
  /**
   * Date in the Merchant Center account timezone to which metrics apply.
   * Segment. Condition on `date` is required in the `WHERE` clause.
   *
   * @param Date $date
   */
  public function setDate(Date $date)
  {
    $this->date = $date;
  }
  /**
   * @return Date
   */
  public function getDate()
  {
    return $this->date;
  }
  /**
   * Number of times merchant's products are shown. Metric.
   *
   * @param string $impressions
   */
  public function setImpressions($impressions)
  {
    $this->impressions = $impressions;
  }
  /**
   * @return string
   */
  public function getImpressions()
  {
    return $this->impressions;
  }
  /**
   * Marketing method to which metrics apply. Segment.
   *
   * Accepted values: MARKETING_METHOD_ENUM_UNSPECIFIED, ORGANIC, ADS, AFFILIATE
   *
   * @param self::MARKETING_METHOD_* $marketingMethod
   */
  public function setMarketingMethod($marketingMethod)
  {
    $this->marketingMethod = $marketingMethod;
  }
  /**
   * @return self::MARKETING_METHOD_*
   */
  public function getMarketingMethod()
  {
    return $this->marketingMethod;
  }
  /**
   * Network to which metrics apply. Segment.
   *
   * Accepted values: NETWORK_ENUM_UNSPECIFIED, UNKNOWN, SEARCH,
   * SEARCH_PARTNERS, CONTENT, MIXED, YOUTUBE, GOOGLE_TV, GOOGLE_OWNED_CHANNELS,
   * GMAIL, DISCOVER, MAPS
   *
   * @param self::NETWORK_* $network
   */
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  /**
   * @return self::NETWORK_*
   */
  public function getNetwork()
  {
    return $this->network;
  }
  /**
   * Merchant-provided id of the product. Segment.
   *
   * @param string $offerId
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
   * [Product type (1st level)](https://developers.google.com/merchant/api/guide
   * s/reports/performance-reports#category_and_product_type) in merchant's own
   * product taxonomy. Segment.
   *
   * @param string $productTypeL1
   */
  public function setProductTypeL1($productTypeL1)
  {
    $this->productTypeL1 = $productTypeL1;
  }
  /**
   * @return string
   */
  public function getProductTypeL1()
  {
    return $this->productTypeL1;
  }
  /**
   * [Product type (2nd level)](https://developers.google.com/merchant/api/guide
   * s/reports/performance-reports#category_and_product_type) in merchant's own
   * product taxonomy. Segment.
   *
   * @param string $productTypeL2
   */
  public function setProductTypeL2($productTypeL2)
  {
    $this->productTypeL2 = $productTypeL2;
  }
  /**
   * @return string
   */
  public function getProductTypeL2()
  {
    return $this->productTypeL2;
  }
  /**
   * [Product type (3rd level)](https://developers.google.com/merchant/api/guide
   * s/reports/performance-reports#category_and_product_type) in merchant's own
   * product taxonomy. Segment.
   *
   * @param string $productTypeL3
   */
  public function setProductTypeL3($productTypeL3)
  {
    $this->productTypeL3 = $productTypeL3;
  }
  /**
   * @return string
   */
  public function getProductTypeL3()
  {
    return $this->productTypeL3;
  }
  /**
   * [Product type (4th level)](https://developers.google.com/merchant/api/guide
   * s/reports/performance-reports#category_and_product_type) in merchant's own
   * product taxonomy. Segment.
   *
   * @param string $productTypeL4
   */
  public function setProductTypeL4($productTypeL4)
  {
    $this->productTypeL4 = $productTypeL4;
  }
  /**
   * @return string
   */
  public function getProductTypeL4()
  {
    return $this->productTypeL4;
  }
  /**
   * [Product type (5th level)](https://developers.google.com/merchant/api/guide
   * s/reports/performance-reports#category_and_product_type) in merchant's own
   * product taxonomy. Segment.
   *
   * @param string $productTypeL5
   */
  public function setProductTypeL5($productTypeL5)
  {
    $this->productTypeL5 = $productTypeL5;
  }
  /**
   * @return string
   */
  public function getProductTypeL5()
  {
    return $this->productTypeL5;
  }
  /**
   * Store type to which metrics apply. Can be `ONLINE_STORE` or `LOCAL_STORES`.
   * Segment. For `LOCAL_STORES` store type, further segmentation by a specific
   * store is not available.
   *
   * Accepted values: STORE_TYPE_ENUM_UNSPECIFIED, ONLINE_STORE, LOCAL_STORES
   *
   * @param self::STORE_TYPE_* $storeType
   */
  public function setStoreType($storeType)
  {
    $this->storeType = $storeType;
  }
  /**
   * @return self::STORE_TYPE_*
   */
  public function getStoreType()
  {
    return $this->storeType;
  }
  /**
   * Title of the product. Segment.
   *
   * @param string $title
   */
  public function setTitle($title)
  {
    $this->title = $title;
  }
  /**
   * @return string
   */
  public function getTitle()
  {
    return $this->title;
  }
  /**
   * First day of the week (Monday) of the metrics date in the Merchant Center
   * account timezone. Segment.
   *
   * @param Date $week
   */
  public function setWeek(Date $week)
  {
    $this->week = $week;
  }
  /**
   * @return Date
   */
  public function getWeek()
  {
    return $this->week;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProductPerformanceView::class, 'Google_Service_Merchant_ProductPerformanceView');
