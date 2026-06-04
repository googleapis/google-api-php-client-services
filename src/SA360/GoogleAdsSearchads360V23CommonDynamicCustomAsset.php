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

class GoogleAdsSearchads360V23CommonDynamicCustomAsset extends \Google\Collection
{
  protected $collection_key = 'similarIds';
  /**
   * Android deep link, for example, android-
   * app://com.example.android/http/example.com/gizmos?1234.
   *
   * @var string
   */
  public $androidAppLink;
  /**
   * Contextual keywords, for example, Sedans, 4 door sedans.
   *
   * @var string[]
   */
  public $contextualKeywords;
  /**
   * Formatted price which can be any characters. If set, this attribute will be
   * used instead of 'price', for example, Starting at $20,000.00.
   *
   * @var string
   */
  public $formattedPrice;
  /**
   * Formatted sale price which can be any characters. If set, this attribute
   * will be used instead of 'sale price', for example, On sale for $15,000.00.
   *
   * @var string
   */
  public $formattedSalePrice;
  /**
   * Required. ID which can be any sequence of letters and digits, and must be
   * unique and match the values of remarketing tag, for example, sedan.
   * Required.
   *
   * @var string
   */
  public $id;
  /**
   * ID2 which can be any sequence of letters and digits, for example, red. ID
   * sequence (ID + ID2) must be unique.
   *
   * @var string
   */
  public $id2;
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
   * Item address which can be specified in one of the following formats. (1)
   * City, state, code, country, for example, Mountain View, CA, USA. (2) Full
   * address, for example, 123 Boulevard St, Mountain View, CA 94043. (3)
   * Latitude-longitude in the DDD format, for example, 41.40338, 2.17403
   *
   * @var string
   */
  public $itemAddress;
  /**
   * Item category, for example, Sedans.
   *
   * @var string
   */
  public $itemCategory;
  /**
   * Item description, for example, Best selling mid-size car.
   *
   * @var string
   */
  public $itemDescription;
  /**
   * Item subtitle, for example, At your Mountain View dealership.
   *
   * @var string
   */
  public $itemSubtitle;
  /**
   * Required. Item title, for example, Mid-size sedan. Required.
   *
   * @var string
   */
  public $itemTitle;
  /**
   * Price which can be number followed by the alphabetic currency code, ISO
   * 4217 standard. Use '.' as the decimal mark, for example, 20,000.00 USD.
   *
   * @var string
   */
  public $price;
  /**
   * Sale price which can be number followed by the alphabetic currency code,
   * ISO 4217 standard. Use '.' as the decimal mark, for example, 15,000.00 USD.
   * Must be less than the 'price' field.
   *
   * @var string
   */
  public $salePrice;
  /**
   * Similar IDs.
   *
   * @var string[]
   */
  public $similarIds;

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
   * Contextual keywords, for example, Sedans, 4 door sedans.
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
   * Formatted price which can be any characters. If set, this attribute will be
   * used instead of 'price', for example, Starting at $20,000.00.
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
   * will be used instead of 'sale price', for example, On sale for $15,000.00.
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
   * Required. ID which can be any sequence of letters and digits, and must be
   * unique and match the values of remarketing tag, for example, sedan.
   * Required.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * ID2 which can be any sequence of letters and digits, for example, red. ID
   * sequence (ID + ID2) must be unique.
   *
   * @param string $id2
   */
  public function setId2($id2)
  {
    $this->id2 = $id2;
  }
  /**
   * @return string
   */
  public function getId2()
  {
    return $this->id2;
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
   * Item address which can be specified in one of the following formats. (1)
   * City, state, code, country, for example, Mountain View, CA, USA. (2) Full
   * address, for example, 123 Boulevard St, Mountain View, CA 94043. (3)
   * Latitude-longitude in the DDD format, for example, 41.40338, 2.17403
   *
   * @param string $itemAddress
   */
  public function setItemAddress($itemAddress)
  {
    $this->itemAddress = $itemAddress;
  }
  /**
   * @return string
   */
  public function getItemAddress()
  {
    return $this->itemAddress;
  }
  /**
   * Item category, for example, Sedans.
   *
   * @param string $itemCategory
   */
  public function setItemCategory($itemCategory)
  {
    $this->itemCategory = $itemCategory;
  }
  /**
   * @return string
   */
  public function getItemCategory()
  {
    return $this->itemCategory;
  }
  /**
   * Item description, for example, Best selling mid-size car.
   *
   * @param string $itemDescription
   */
  public function setItemDescription($itemDescription)
  {
    $this->itemDescription = $itemDescription;
  }
  /**
   * @return string
   */
  public function getItemDescription()
  {
    return $this->itemDescription;
  }
  /**
   * Item subtitle, for example, At your Mountain View dealership.
   *
   * @param string $itemSubtitle
   */
  public function setItemSubtitle($itemSubtitle)
  {
    $this->itemSubtitle = $itemSubtitle;
  }
  /**
   * @return string
   */
  public function getItemSubtitle()
  {
    return $this->itemSubtitle;
  }
  /**
   * Required. Item title, for example, Mid-size sedan. Required.
   *
   * @param string $itemTitle
   */
  public function setItemTitle($itemTitle)
  {
    $this->itemTitle = $itemTitle;
  }
  /**
   * @return string
   */
  public function getItemTitle()
  {
    return $this->itemTitle;
  }
  /**
   * Price which can be number followed by the alphabetic currency code, ISO
   * 4217 standard. Use '.' as the decimal mark, for example, 20,000.00 USD.
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
   * ISO 4217 standard. Use '.' as the decimal mark, for example, 15,000.00 USD.
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
   * Similar IDs.
   *
   * @param string[] $similarIds
   */
  public function setSimilarIds($similarIds)
  {
    $this->similarIds = $similarIds;
  }
  /**
   * @return string[]
   */
  public function getSimilarIds()
  {
    return $this->similarIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonDynamicCustomAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonDynamicCustomAsset');
