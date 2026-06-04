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

class GoogleAdsSearchads360V23CommonDynamicLocalAsset extends \Google\Collection
{
  protected $collection_key = 'similarDealIds';
  /**
   * Address which can be specified in one of the following formats. (1) City,
   * state, code, country, for example, Mountain View, CA, USA. (2) Full
   * address, for example, 123 Boulevard St, Mountain View, CA 94043. (3)
   * Latitude-longitude in the DDD format, for example, 41.40338, 2.17403.
   *
   * @var string
   */
  public $address;
  /**
   * Android deep link, for example, android-
   * app://com.example.android/http/example.com/gizmos?1234.
   *
   * @var string
   */
  public $androidAppLink;
  /**
   * Category, for example, Food.
   *
   * @var string
   */
  public $category;
  /**
   * Contextual keywords, for example, Save groceries coupons.
   *
   * @var string[]
   */
  public $contextualKeywords;
  /**
   * Required. Deal ID which can be any sequence of letters and digits, and must
   * be unique and match the values of remarketing tag. Required.
   *
   * @var string
   */
  public $dealId;
  /**
   * Required. Deal name, for example, 50% off at Mountain View Grocers.
   * Required.
   *
   * @var string
   */
  public $dealName;
  /**
   * Description, for example, Save on your weekly bill.
   *
   * @var string
   */
  public $description;
  /**
   * Formatted price which can be any characters. If set, this attribute will be
   * used instead of 'price', for example, Starting at $100.00.
   *
   * @var string
   */
  public $formattedPrice;
  /**
   * Formatted sale price which can be any characters. If set, this attribute
   * will be used instead of 'sale price', for example, On sale for $80.00.
   *
   * @var string
   */
  public $formattedSalePrice;
  /**
   * Image URL, for example, http://www.example.com/image.png. The image will
   * not be uploaded as image asset.
   *
   * @var string
   */
  public $imageUrl;
  /**
   * iOS deep link, for example, exampleApp://content/page.
   *
   * @var string
   */
  public $iosAppLink;
  /**
   * iOS app store ID. This is used to check if the user has the app installed
   * on their device before deep linking. If this field is set, then the
   * ios_app_link field must also be present.
   *
   * @var string
   */
  public $iosAppStoreId;
  /**
   * Price which can be a number followed by the alphabetic currency code, ISO
   * 4217 standard. Use '.' as the decimal mark, for example, 100.00 USD.
   *
   * @var string
   */
  public $price;
  /**
   * Sale price which can be number followed by the alphabetic currency code,
   * ISO 4217 standard. Use '.' as the decimal mark, for example, 80.00 USD.
   * Must be less than the 'price' field.
   *
   * @var string
   */
  public $salePrice;
  /**
   * Similar deal IDs, for example, 1275.
   *
   * @var string[]
   */
  public $similarDealIds;
  /**
   * Subtitle, for example, Groceries.
   *
   * @var string
   */
  public $subtitle;

  /**
   * Address which can be specified in one of the following formats. (1) City,
   * state, code, country, for example, Mountain View, CA, USA. (2) Full
   * address, for example, 123 Boulevard St, Mountain View, CA 94043. (3)
   * Latitude-longitude in the DDD format, for example, 41.40338, 2.17403.
   *
   * @param string $address
   */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /**
   * @return string
   */
  public function getAddress()
  {
    return $this->address;
  }
  /**
   * Android deep link, for example, android-
   * app://com.example.android/http/example.com/gizmos?1234.
   *
   * @param string $androidAppLink
   */
  public function setAndroidAppLink($androidAppLink)
  {
    $this->androidAppLink = $androidAppLink;
  }
  /**
   * @return string
   */
  public function getAndroidAppLink()
  {
    return $this->androidAppLink;
  }
  /**
   * Category, for example, Food.
   *
   * @param string $category
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }
  /**
   * @return string
   */
  public function getCategory()
  {
    return $this->category;
  }
  /**
   * Contextual keywords, for example, Save groceries coupons.
   *
   * @param string[] $contextualKeywords
   */
  public function setContextualKeywords($contextualKeywords)
  {
    $this->contextualKeywords = $contextualKeywords;
  }
  /**
   * @return string[]
   */
  public function getContextualKeywords()
  {
    return $this->contextualKeywords;
  }
  /**
   * Required. Deal ID which can be any sequence of letters and digits, and must
   * be unique and match the values of remarketing tag. Required.
   *
   * @param string $dealId
   */
  public function setDealId($dealId)
  {
    $this->dealId = $dealId;
  }
  /**
   * @return string
   */
  public function getDealId()
  {
    return $this->dealId;
  }
  /**
   * Required. Deal name, for example, 50% off at Mountain View Grocers.
   * Required.
   *
   * @param string $dealName
   */
  public function setDealName($dealName)
  {
    $this->dealName = $dealName;
  }
  /**
   * @return string
   */
  public function getDealName()
  {
    return $this->dealName;
  }
  /**
   * Description, for example, Save on your weekly bill.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Formatted price which can be any characters. If set, this attribute will be
   * used instead of 'price', for example, Starting at $100.00.
   *
   * @param string $formattedPrice
   */
  public function setFormattedPrice($formattedPrice)
  {
    $this->formattedPrice = $formattedPrice;
  }
  /**
   * @return string
   */
  public function getFormattedPrice()
  {
    return $this->formattedPrice;
  }
  /**
   * Formatted sale price which can be any characters. If set, this attribute
   * will be used instead of 'sale price', for example, On sale for $80.00.
   *
   * @param string $formattedSalePrice
   */
  public function setFormattedSalePrice($formattedSalePrice)
  {
    $this->formattedSalePrice = $formattedSalePrice;
  }
  /**
   * @return string
   */
  public function getFormattedSalePrice()
  {
    return $this->formattedSalePrice;
  }
  /**
   * Image URL, for example, http://www.example.com/image.png. The image will
   * not be uploaded as image asset.
   *
   * @param string $imageUrl
   */
  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }
  /**
   * @return string
   */
  public function getImageUrl()
  {
    return $this->imageUrl;
  }
  /**
   * iOS deep link, for example, exampleApp://content/page.
   *
   * @param string $iosAppLink
   */
  public function setIosAppLink($iosAppLink)
  {
    $this->iosAppLink = $iosAppLink;
  }
  /**
   * @return string
   */
  public function getIosAppLink()
  {
    return $this->iosAppLink;
  }
  /**
   * iOS app store ID. This is used to check if the user has the app installed
   * on their device before deep linking. If this field is set, then the
   * ios_app_link field must also be present.
   *
   * @param string $iosAppStoreId
   */
  public function setIosAppStoreId($iosAppStoreId)
  {
    $this->iosAppStoreId = $iosAppStoreId;
  }
  /**
   * @return string
   */
  public function getIosAppStoreId()
  {
    return $this->iosAppStoreId;
  }
  /**
   * Price which can be a number followed by the alphabetic currency code, ISO
   * 4217 standard. Use '.' as the decimal mark, for example, 100.00 USD.
   *
   * @param string $price
   */
  public function setPrice($price)
  {
    $this->price = $price;
  }
  /**
   * @return string
   */
  public function getPrice()
  {
    return $this->price;
  }
  /**
   * Sale price which can be number followed by the alphabetic currency code,
   * ISO 4217 standard. Use '.' as the decimal mark, for example, 80.00 USD.
   * Must be less than the 'price' field.
   *
   * @param string $salePrice
   */
  public function setSalePrice($salePrice)
  {
    $this->salePrice = $salePrice;
  }
  /**
   * @return string
   */
  public function getSalePrice()
  {
    return $this->salePrice;
  }
  /**
   * Similar deal IDs, for example, 1275.
   *
   * @param string[] $similarDealIds
   */
  public function setSimilarDealIds($similarDealIds)
  {
    $this->similarDealIds = $similarDealIds;
  }
  /**
   * @return string[]
   */
  public function getSimilarDealIds()
  {
    return $this->similarDealIds;
  }
  /**
   * Subtitle, for example, Groceries.
   *
   * @param string $subtitle
   */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;
  }
  /**
   * @return string
   */
  public function getSubtitle()
  {
    return $this->subtitle;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonDynamicLocalAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonDynamicLocalAsset');
