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

class GoogleAdsSearchads360V23CommonDynamicTravelAsset extends \Google\Collection
{
  protected $collection_key = 'similarDestinationIds';
  /**
   * Android deep link, for example, android-
   * app://com.example.android/http/example.com/gizmos?1234.
   *
   * @var string
   */
  public $androidAppLink;
  /**
   * Category, for example, Express.
   *
   * @var string
   */
  public $category;
  /**
   * Contextual keywords, for example, Paris trains.
   *
   * @var string[]
   */
  public $contextualKeywords;
  /**
   * Destination address which can be specified in one of the following formats.
   * (1) City, state, code, country, for example, Mountain View, CA, USA. (2)
   * Full address, for example, 123 Boulevard St, Mountain View, CA 94043. (3)
   * Latitude-longitude in the DDD format, for example, 41.40338, 2.17403.
   *
   * @var string
   */
  public $destinationAddress;
  /**
   * Required. Destination ID which can be any sequence of letters and digits,
   * and must be unique and match the values of remarketing tag. Required.
   *
   * @var string
   */
  public $destinationId;
  /**
   * Destination name, for example, Paris.
   *
   * @var string
   */
  public $destinationName;
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
   * Origin ID which can be any sequence of letters and digits. The ID sequence
   * (destination ID + origin ID) must be unique.
   *
   * @var string
   */
  public $originId;
  /**
   * Origin name, for example, London.
   *
   * @var string
   */
  public $originName;
  /**
   * Price which can be a number followed by the alphabetic currency code, ISO
   * 4217 standard. Use '.' as the decimal mark, for example, 100.00 USD.
   *
   * @var string
   */
  public $price;
  /**
   * Sale price which can be a number followed by the alphabetic currency code,
   * ISO 4217 standard. Use '.' as the decimal mark, for example, 80.00 USD.
   * Must be less than the 'price' field.
   *
   * @var string
   */
  public $salePrice;
  /**
   * Similar destination IDs, for example, NYC.
   *
   * @var string[]
   */
  public $similarDestinationIds;
  /**
   * Required. Title, for example, Book your train ticket. Required.
   *
   * @var string
   */
  public $title;

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
   * Category, for example, Express.
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
   * Contextual keywords, for example, Paris trains.
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
   * Destination address which can be specified in one of the following formats.
   * (1) City, state, code, country, for example, Mountain View, CA, USA. (2)
   * Full address, for example, 123 Boulevard St, Mountain View, CA 94043. (3)
   * Latitude-longitude in the DDD format, for example, 41.40338, 2.17403.
   *
   * @param string $destinationAddress
   */
  public function setDestinationAddress($destinationAddress)
  {
    $this->destinationAddress = $destinationAddress;
  }
  /**
   * @return string
   */
  public function getDestinationAddress()
  {
    return $this->destinationAddress;
  }
  /**
   * Required. Destination ID which can be any sequence of letters and digits,
   * and must be unique and match the values of remarketing tag. Required.
   *
   * @param string $destinationId
   */
  public function setDestinationId($destinationId)
  {
    $this->destinationId = $destinationId;
  }
  /**
   * @return string
   */
  public function getDestinationId()
  {
    return $this->destinationId;
  }
  /**
   * Destination name, for example, Paris.
   *
   * @param string $destinationName
   */
  public function setDestinationName($destinationName)
  {
    $this->destinationName = $destinationName;
  }
  /**
   * @return string
   */
  public function getDestinationName()
  {
    return $this->destinationName;
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
   * Origin ID which can be any sequence of letters and digits. The ID sequence
   * (destination ID + origin ID) must be unique.
   *
   * @param string $originId
   */
  public function setOriginId($originId)
  {
    $this->originId = $originId;
  }
  /**
   * @return string
   */
  public function getOriginId()
  {
    return $this->originId;
  }
  /**
   * Origin name, for example, London.
   *
   * @param string $originName
   */
  public function setOriginName($originName)
  {
    $this->originName = $originName;
  }
  /**
   * @return string
   */
  public function getOriginName()
  {
    return $this->originName;
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
   * Sale price which can be a number followed by the alphabetic currency code,
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
   * Similar destination IDs, for example, NYC.
   *
   * @param string[] $similarDestinationIds
   */
  public function setSimilarDestinationIds($similarDestinationIds)
  {
    $this->similarDestinationIds = $similarDestinationIds;
  }
  /**
   * @return string[]
   */
  public function getSimilarDestinationIds()
  {
    return $this->similarDestinationIds;
  }
  /**
   * Required. Title, for example, Book your train ticket. Required.
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
class_alias(GoogleAdsSearchads360V23CommonDynamicTravelAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonDynamicTravelAsset');
