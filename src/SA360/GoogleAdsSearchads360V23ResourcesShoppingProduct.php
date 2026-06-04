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

class GoogleAdsSearchads360V23ResourcesShoppingProduct extends \Google\Collection
{
  /**
   * Enum unspecified.
   */
  public const AVAILABILITY_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents values unknown in this version.
   */
  public const AVAILABILITY_UNKNOWN = 'UNKNOWN';
  /**
   * The product is in stock.
   */
  public const AVAILABILITY_IN_STOCK = 'IN_STOCK';
  /**
   * The product is out of stock.
   */
  public const AVAILABILITY_OUT_OF_STOCK = 'OUT_OF_STOCK';
  /**
   * The product can be preordered.
   */
  public const AVAILABILITY_PREORDER = 'PREORDER';
  /**
   * Not specified.
   */
  public const CHANNEL_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CHANNEL_UNKNOWN = 'UNKNOWN';
  /**
   * The item is sold online.
   */
  public const CHANNEL_ONLINE = 'ONLINE';
  /**
   * The item is sold in local stores.
   */
  public const CHANNEL_LOCAL = 'LOCAL';
  /**
   * Not specified.
   */
  public const CHANNEL_EXCLUSIVITY_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CHANNEL_EXCLUSIVITY_UNKNOWN = 'UNKNOWN';
  /**
   * The item is sold through one channel only, either local stores or online as
   * indicated by its ProductChannel.
   */
  public const CHANNEL_EXCLUSIVITY_SINGLE_CHANNEL = 'SINGLE_CHANNEL';
  /**
   * The item is matched to its online or local stores counterpart, indicating
   * it is available for purchase in both ShoppingProductChannels.
   */
  public const CHANNEL_EXCLUSIVITY_MULTI_CHANNEL = 'MULTI_CHANNEL';
  /**
   * Not specified.
   */
  public const CONDITION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CONDITION_UNKNOWN = 'UNKNOWN';
  /**
   * The product condition is new.
   */
  public const CONDITION_NEW = 'NEW';
  /**
   * The product condition is refurbished.
   */
  public const CONDITION_REFURBISHED = 'REFURBISHED';
  /**
   * The product condition is used.
   */
  public const CONDITION_USED = 'USED';
  /**
   * Not specified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents values unknown in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The product cannot show in ads.
   */
  public const STATUS_NOT_ELIGIBLE = 'NOT_ELIGIBLE';
  /**
   * The product can show in ads but may be limited in where and when it can
   * show due to identified issues.
   */
  public const STATUS_ELIGIBLE_LIMITED = 'ELIGIBLE_LIMITED';
  /**
   * The product can show in ads.
   */
  public const STATUS_ELIGIBLE = 'ELIGIBLE';
  protected $collection_key = 'targetCountries';
  /**
   * Output only. An ad group of a campaign that includes the product. This
   * field is selectable only in the ad group scope, which requires an equality
   * filter on `campaign` and `ad_group`.
   *
   * @var string
   */
  public $adGroup;
  /**
   * Output only. The availability of the product as provided by the merchant.
   *
   * @var string
   */
  public $availability;
  /**
   * Output only. The brand of the product as provided by the merchant.
   *
   * @var string
   */
  public $brand;
  /**
   * Output only. A campaign that includes the product. This field is selectable
   * only in the campaign scope, which requires an equality filter on
   * `campaign`.
   *
   * @var string
   */
  public $campaign;
  /**
   * Output only. The category level 1 of the product.
   *
   * @var string
   */
  public $categoryLevel1;
  /**
   * Output only. The category level 2 of the product.
   *
   * @var string
   */
  public $categoryLevel2;
  /**
   * Output only. The category level 3 of the product.
   *
   * @var string
   */
  public $categoryLevel3;
  /**
   * Output only. The category level 4 of the product.
   *
   * @var string
   */
  public $categoryLevel4;
  /**
   * Output only. The category level 5 of the product.
   *
   * @var string
   */
  public $categoryLevel5;
  /**
   * Output only. The product channel describing the locality of the product.
   *
   * @var string
   */
  public $channel;
  /**
   * Output only. The channel exclusivity of the product as provided by the
   * merchant.
   *
   * @var string
   */
  public $channelExclusivity;
  /**
   * Output only. The condition of the product as provided by the merchant.
   *
   * @var string
   */
  public $condition;
  /**
   * Output only. The currency code as provided by the merchant, in ISO 4217
   * format.
   *
   * @var string
   */
  public $currencyCode;
  /**
   * Output only. The custom attribute 0 of the product as provided by the
   * merchant.
   *
   * @var string
   */
  public $customAttribute0;
  /**
   * Output only. The custom attribute 1 of the product as provided by the
   * merchant.
   *
   * @var string
   */
  public $customAttribute1;
  /**
   * Output only. The custom attribute 2 of the product as provided by the
   * merchant.
   *
   * @var string
   */
  public $customAttribute2;
  /**
   * Output only. The custom attribute 3 of the product as provided by the
   * merchant.
   *
   * @var string
   */
  public $customAttribute3;
  /**
   * Output only. The custom attribute 4 of the product as provided by the
   * merchant.
   *
   * @var string
   */
  public $customAttribute4;
  /**
   * Output only. The effective maximum cost-per-click (effective max. CPC) of
   * the product. This field is available only if the query specifies the
   * campaign or ad group scope, and if the campaign uses manual bidding. The
   * value is the highest bid set for the product in product groups across all
   * enabled ad groups. It represents the most you're willing to pay for a click
   * on the product. This field can take up to 24 hours to update.
   *
   * @var string
   */
  public $effectiveMaxCpcMicros;
  /**
   * Output only. The product feed label as provided by the merchant.
   *
   * @var string
   */
  public $feedLabel;
  protected $issuesType = GoogleAdsSearchads360V23ResourcesShoppingProductProductIssue::class;
  protected $issuesDataType = 'array';
  /**
   * Output only. The item id of the product as provided by the merchant.
   *
   * @var string
   */
  public $itemId;
  /**
   * Output only. The language code as provided by the merchant, in BCP 47
   * format.
   *
   * @var string
   */
  public $languageCode;
  /**
   * Output only. The id of the merchant that owns the product.
   *
   * @var string
   */
  public $merchantCenterId;
  /**
   * Output only. The id of the Multi Client Account of the merchant, if
   * present.
   *
   * @var string
   */
  public $multiClientAccountId;
  /**
   * Output only. The price of the product in micros as provided by the
   * merchant, in the currency specified in `currency_code` (e.g. $2.97 is
   * reported as 2970000).
   *
   * @var string
   */
  public $priceMicros;
  /**
   * Output only. The URI of the product image as provided by the merchant.
   *
   * @var string
   */
  public $productImageUri;
  /**
   * Output only. The product type level 1 as provided by the merchant.
   *
   * @var string
   */
  public $productTypeLevel1;
  /**
   * Output only. The product type level 2 as provided by the merchant.
   *
   * @var string
   */
  public $productTypeLevel2;
  /**
   * Output only. The product type level 3 as provided by the merchant.
   *
   * @var string
   */
  public $productTypeLevel3;
  /**
   * Output only. The product type level 4 as provided by the merchant.
   *
   * @var string
   */
  public $productTypeLevel4;
  /**
   * Output only. The product type level 5 as provided by the merchant.
   *
   * @var string
   */
  public $productTypeLevel5;
  /**
   * Output only. The resource name of the shopping product. Shopping product
   * resource names have the form: `customers/{customer_id}/shoppingProducts/{me
   * rchant_center_id}~{channel}~{language_code}~{feed_label}~{item_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The status that indicates whether the product can show in ads.
   * The value of this field is restricted to the scope specified in the query,
   * see the documentation of the resource. This field can take up to 24 hours
   * to update. This field is not supported for App campaigns.
   *
   * @var string
   */
  public $status;
  /**
   * Output only. Upper-case two-letter ISO 3166-1 code of the regions where the
   * product is intended to be shown in ads.
   *
   * @var string[]
   */
  public $targetCountries;
  /**
   * Output only. The title of the product as provided by the merchant.
   *
   * @var string
   */
  public $title;

  /**
   * Output only. An ad group of a campaign that includes the product. This
   * field is selectable only in the ad group scope, which requires an equality
   * filter on `campaign` and `ad_group`.
   *
   * @param string $adGroup
   */
  public function setAdGroup($adGroup)
  {
    $this->adGroup = $adGroup;
  }
  /**
   * @return string
   */
  public function getAdGroup()
  {
    return $this->adGroup;
  }
  /**
   * Output only. The availability of the product as provided by the merchant.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, IN_STOCK, OUT_OF_STOCK, PREORDER
   *
   * @param self::AVAILABILITY_* $availability
   */
  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }
  /**
   * @return self::AVAILABILITY_*
   */
  public function getAvailability()
  {
    return $this->availability;
  }
  /**
   * Output only. The brand of the product as provided by the merchant.
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
   * Output only. A campaign that includes the product. This field is selectable
   * only in the campaign scope, which requires an equality filter on
   * `campaign`.
   *
   * @param string $campaign
   */
  public function setCampaign($campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return string
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * Output only. The category level 1 of the product.
   *
   * @param string $categoryLevel1
   */
  public function setCategoryLevel1($categoryLevel1)
  {
    $this->categoryLevel1 = $categoryLevel1;
  }
  /**
   * @return string
   */
  public function getCategoryLevel1()
  {
    return $this->categoryLevel1;
  }
  /**
   * Output only. The category level 2 of the product.
   *
   * @param string $categoryLevel2
   */
  public function setCategoryLevel2($categoryLevel2)
  {
    $this->categoryLevel2 = $categoryLevel2;
  }
  /**
   * @return string
   */
  public function getCategoryLevel2()
  {
    return $this->categoryLevel2;
  }
  /**
   * Output only. The category level 3 of the product.
   *
   * @param string $categoryLevel3
   */
  public function setCategoryLevel3($categoryLevel3)
  {
    $this->categoryLevel3 = $categoryLevel3;
  }
  /**
   * @return string
   */
  public function getCategoryLevel3()
  {
    return $this->categoryLevel3;
  }
  /**
   * Output only. The category level 4 of the product.
   *
   * @param string $categoryLevel4
   */
  public function setCategoryLevel4($categoryLevel4)
  {
    $this->categoryLevel4 = $categoryLevel4;
  }
  /**
   * @return string
   */
  public function getCategoryLevel4()
  {
    return $this->categoryLevel4;
  }
  /**
   * Output only. The category level 5 of the product.
   *
   * @param string $categoryLevel5
   */
  public function setCategoryLevel5($categoryLevel5)
  {
    $this->categoryLevel5 = $categoryLevel5;
  }
  /**
   * @return string
   */
  public function getCategoryLevel5()
  {
    return $this->categoryLevel5;
  }
  /**
   * Output only. The product channel describing the locality of the product.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ONLINE, LOCAL
   *
   * @param self::CHANNEL_* $channel
   */
  public function setChannel($channel)
  {
    $this->channel = $channel;
  }
  /**
   * @return self::CHANNEL_*
   */
  public function getChannel()
  {
    return $this->channel;
  }
  /**
   * Output only. The channel exclusivity of the product as provided by the
   * merchant.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SINGLE_CHANNEL, MULTI_CHANNEL
   *
   * @param self::CHANNEL_EXCLUSIVITY_* $channelExclusivity
   */
  public function setChannelExclusivity($channelExclusivity)
  {
    $this->channelExclusivity = $channelExclusivity;
  }
  /**
   * @return self::CHANNEL_EXCLUSIVITY_*
   */
  public function getChannelExclusivity()
  {
    return $this->channelExclusivity;
  }
  /**
   * Output only. The condition of the product as provided by the merchant.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NEW, REFURBISHED, USED
   *
   * @param self::CONDITION_* $condition
   */
  public function setCondition($condition)
  {
    $this->condition = $condition;
  }
  /**
   * @return self::CONDITION_*
   */
  public function getCondition()
  {
    return $this->condition;
  }
  /**
   * Output only. The currency code as provided by the merchant, in ISO 4217
   * format.
   *
   * @param string $currencyCode
   */
  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }
  /**
   * @return string
   */
  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }
  /**
   * Output only. The custom attribute 0 of the product as provided by the
   * merchant.
   *
   * @param string $customAttribute0
   */
  public function setCustomAttribute0($customAttribute0)
  {
    $this->customAttribute0 = $customAttribute0;
  }
  /**
   * @return string
   */
  public function getCustomAttribute0()
  {
    return $this->customAttribute0;
  }
  /**
   * Output only. The custom attribute 1 of the product as provided by the
   * merchant.
   *
   * @param string $customAttribute1
   */
  public function setCustomAttribute1($customAttribute1)
  {
    $this->customAttribute1 = $customAttribute1;
  }
  /**
   * @return string
   */
  public function getCustomAttribute1()
  {
    return $this->customAttribute1;
  }
  /**
   * Output only. The custom attribute 2 of the product as provided by the
   * merchant.
   *
   * @param string $customAttribute2
   */
  public function setCustomAttribute2($customAttribute2)
  {
    $this->customAttribute2 = $customAttribute2;
  }
  /**
   * @return string
   */
  public function getCustomAttribute2()
  {
    return $this->customAttribute2;
  }
  /**
   * Output only. The custom attribute 3 of the product as provided by the
   * merchant.
   *
   * @param string $customAttribute3
   */
  public function setCustomAttribute3($customAttribute3)
  {
    $this->customAttribute3 = $customAttribute3;
  }
  /**
   * @return string
   */
  public function getCustomAttribute3()
  {
    return $this->customAttribute3;
  }
  /**
   * Output only. The custom attribute 4 of the product as provided by the
   * merchant.
   *
   * @param string $customAttribute4
   */
  public function setCustomAttribute4($customAttribute4)
  {
    $this->customAttribute4 = $customAttribute4;
  }
  /**
   * @return string
   */
  public function getCustomAttribute4()
  {
    return $this->customAttribute4;
  }
  /**
   * Output only. The effective maximum cost-per-click (effective max. CPC) of
   * the product. This field is available only if the query specifies the
   * campaign or ad group scope, and if the campaign uses manual bidding. The
   * value is the highest bid set for the product in product groups across all
   * enabled ad groups. It represents the most you're willing to pay for a click
   * on the product. This field can take up to 24 hours to update.
   *
   * @param string $effectiveMaxCpcMicros
   */
  public function setEffectiveMaxCpcMicros($effectiveMaxCpcMicros)
  {
    $this->effectiveMaxCpcMicros = $effectiveMaxCpcMicros;
  }
  /**
   * @return string
   */
  public function getEffectiveMaxCpcMicros()
  {
    return $this->effectiveMaxCpcMicros;
  }
  /**
   * Output only. The product feed label as provided by the merchant.
   *
   * @param string $feedLabel
   */
  public function setFeedLabel($feedLabel)
  {
    $this->feedLabel = $feedLabel;
  }
  /**
   * @return string
   */
  public function getFeedLabel()
  {
    return $this->feedLabel;
  }
  /**
   * Output only. The list of issues affecting whether the product can show in
   * ads. The value of this field is restricted to the scope specified in the
   * query, see the documentation of the resource. This field can take up to 24
   * hours to update. This field is not supported for App campaigns.
   *
   * @param GoogleAdsSearchads360V23ResourcesShoppingProductProductIssue[] $issues
   */
  public function setIssues($issues)
  {
    $this->issues = $issues;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesShoppingProductProductIssue[]
   */
  public function getIssues()
  {
    return $this->issues;
  }
  /**
   * Output only. The item id of the product as provided by the merchant.
   *
   * @param string $itemId
   */
  public function setItemId($itemId)
  {
    $this->itemId = $itemId;
  }
  /**
   * @return string
   */
  public function getItemId()
  {
    return $this->itemId;
  }
  /**
   * Output only. The language code as provided by the merchant, in BCP 47
   * format.
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
   * Output only. The id of the merchant that owns the product.
   *
   * @param string $merchantCenterId
   */
  public function setMerchantCenterId($merchantCenterId)
  {
    $this->merchantCenterId = $merchantCenterId;
  }
  /**
   * @return string
   */
  public function getMerchantCenterId()
  {
    return $this->merchantCenterId;
  }
  /**
   * Output only. The id of the Multi Client Account of the merchant, if
   * present.
   *
   * @param string $multiClientAccountId
   */
  public function setMultiClientAccountId($multiClientAccountId)
  {
    $this->multiClientAccountId = $multiClientAccountId;
  }
  /**
   * @return string
   */
  public function getMultiClientAccountId()
  {
    return $this->multiClientAccountId;
  }
  /**
   * Output only. The price of the product in micros as provided by the
   * merchant, in the currency specified in `currency_code` (e.g. $2.97 is
   * reported as 2970000).
   *
   * @param string $priceMicros
   */
  public function setPriceMicros($priceMicros)
  {
    $this->priceMicros = $priceMicros;
  }
  /**
   * @return string
   */
  public function getPriceMicros()
  {
    return $this->priceMicros;
  }
  /**
   * Output only. The URI of the product image as provided by the merchant.
   *
   * @param string $productImageUri
   */
  public function setProductImageUri($productImageUri)
  {
    $this->productImageUri = $productImageUri;
  }
  /**
   * @return string
   */
  public function getProductImageUri()
  {
    return $this->productImageUri;
  }
  /**
   * Output only. The product type level 1 as provided by the merchant.
   *
   * @param string $productTypeLevel1
   */
  public function setProductTypeLevel1($productTypeLevel1)
  {
    $this->productTypeLevel1 = $productTypeLevel1;
  }
  /**
   * @return string
   */
  public function getProductTypeLevel1()
  {
    return $this->productTypeLevel1;
  }
  /**
   * Output only. The product type level 2 as provided by the merchant.
   *
   * @param string $productTypeLevel2
   */
  public function setProductTypeLevel2($productTypeLevel2)
  {
    $this->productTypeLevel2 = $productTypeLevel2;
  }
  /**
   * @return string
   */
  public function getProductTypeLevel2()
  {
    return $this->productTypeLevel2;
  }
  /**
   * Output only. The product type level 3 as provided by the merchant.
   *
   * @param string $productTypeLevel3
   */
  public function setProductTypeLevel3($productTypeLevel3)
  {
    $this->productTypeLevel3 = $productTypeLevel3;
  }
  /**
   * @return string
   */
  public function getProductTypeLevel3()
  {
    return $this->productTypeLevel3;
  }
  /**
   * Output only. The product type level 4 as provided by the merchant.
   *
   * @param string $productTypeLevel4
   */
  public function setProductTypeLevel4($productTypeLevel4)
  {
    $this->productTypeLevel4 = $productTypeLevel4;
  }
  /**
   * @return string
   */
  public function getProductTypeLevel4()
  {
    return $this->productTypeLevel4;
  }
  /**
   * Output only. The product type level 5 as provided by the merchant.
   *
   * @param string $productTypeLevel5
   */
  public function setProductTypeLevel5($productTypeLevel5)
  {
    $this->productTypeLevel5 = $productTypeLevel5;
  }
  /**
   * @return string
   */
  public function getProductTypeLevel5()
  {
    return $this->productTypeLevel5;
  }
  /**
   * Output only. The resource name of the shopping product. Shopping product
   * resource names have the form: `customers/{customer_id}/shoppingProducts/{me
   * rchant_center_id}~{channel}~{language_code}~{feed_label}~{item_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Output only. The status that indicates whether the product can show in ads.
   * The value of this field is restricted to the scope specified in the query,
   * see the documentation of the resource. This field can take up to 24 hours
   * to update. This field is not supported for App campaigns.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, NOT_ELIGIBLE, ELIGIBLE_LIMITED,
   * ELIGIBLE
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Output only. Upper-case two-letter ISO 3166-1 code of the regions where the
   * product is intended to be shown in ads.
   *
   * @param string[] $targetCountries
   */
  public function setTargetCountries($targetCountries)
  {
    $this->targetCountries = $targetCountries;
  }
  /**
   * @return string[]
   */
  public function getTargetCountries()
  {
    return $this->targetCountries;
  }
  /**
   * Output only. The title of the product as provided by the merchant.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesShoppingProduct::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesShoppingProduct');
