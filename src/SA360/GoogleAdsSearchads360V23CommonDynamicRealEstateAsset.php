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

class GoogleAdsSearchads360V23CommonDynamicRealEstateAsset extends \Google\Collection
{
  protected $collection_key = 'similarListingIds';
  /**
   * Address which can be specified in one of the following formats. (1) City,
   * state, code, country, for example, Mountain View, CA, USA. (2) Full
   * address, for example, 123 Boulevard St, Mountain View, CA 94043. (3)
   * Latitude-longitude in the DDD format, for example, 41.40338, 2.17403
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
   * City name, for example, Mountain View, California.
   *
   * @var string
   */
  public $cityName;
  /**
   * Contextual keywords, for example, For sale; Houses for sale.
   *
   * @var string[]
   */
  public $contextualKeywords;
  /**
   * Description, for example, 3 beds, 2 baths, 1568 sq. ft.
   *
   * @var string
   */
  public $description;
  /**
   * Formatted price which can be any characters. If set, this attribute will be
   * used instead of 'price', for example, Starting at $200,000.00.
   *
   * @var string
   */
  public $formattedPrice;
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
   * Required. Listing ID which can be any sequence of letters and digits, and
   * must be unique and match the values of remarketing tag. Required.
   *
   * @var string
   */
  public $listingId;
  /**
   * Required. Listing name, for example, Boulevard Bungalow. Required.
   *
   * @var string
   */
  public $listingName;
  /**
   * Listing type, for example, For sale.
   *
   * @var string
   */
  public $listingType;
  /**
   * Price which can be number followed by the alphabetic currency code, ISO
   * 4217 standard. Use '.' as the decimal mark, for example, 200,000.00 USD.
   *
   * @var string
   */
  public $price;
  /**
   * Property type, for example, House.
   *
   * @var string
   */
  public $propertyType;
  /**
   * Similar listing IDs.
   *
   * @var string[]
   */
  public $similarListingIds;

  /**
   * Address which can be specified in one of the following formats. (1) City,
   * state, code, country, for example, Mountain View, CA, USA. (2) Full
   * address, for example, 123 Boulevard St, Mountain View, CA 94043. (3)
   * Latitude-longitude in the DDD format, for example, 41.40338, 2.17403
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
   * City name, for example, Mountain View, California.
   *
   * @param string $cityName
   */
  public function setCityName($cityName)
  {
    $this->cityName = $cityName;
  }
  /**
   * @return string
   */
  public function getCityName()
  {
    return $this->cityName;
  }
  /**
   * Contextual keywords, for example, For sale; Houses for sale.
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
   * Description, for example, 3 beds, 2 baths, 1568 sq. ft.
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
   * used instead of 'price', for example, Starting at $200,000.00.
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
   * Required. Listing ID which can be any sequence of letters and digits, and
   * must be unique and match the values of remarketing tag. Required.
   *
   * @param string $listingId
   */
  public function setListingId($listingId)
  {
    $this->listingId = $listingId;
  }
  /**
   * @return string
   */
  public function getListingId()
  {
    return $this->listingId;
  }
  /**
   * Required. Listing name, for example, Boulevard Bungalow. Required.
   *
   * @param string $listingName
   */
  public function setListingName($listingName)
  {
    $this->listingName = $listingName;
  }
  /**
   * @return string
   */
  public function getListingName()
  {
    return $this->listingName;
  }
  /**
   * Listing type, for example, For sale.
   *
   * @param string $listingType
   */
  public function setListingType($listingType)
  {
    $this->listingType = $listingType;
  }
  /**
   * @return string
   */
  public function getListingType()
  {
    return $this->listingType;
  }
  /**
   * Price which can be number followed by the alphabetic currency code, ISO
   * 4217 standard. Use '.' as the decimal mark, for example, 200,000.00 USD.
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
   * Property type, for example, House.
   *
   * @param string $propertyType
   */
  public function setPropertyType($propertyType)
  {
    $this->propertyType = $propertyType;
  }
  /**
   * @return string
   */
  public function getPropertyType()
  {
    return $this->propertyType;
  }
  /**
   * Similar listing IDs.
   *
   * @param string[] $similarListingIds
   */
  public function setSimilarListingIds($similarListingIds)
  {
    $this->similarListingIds = $similarListingIds;
  }
  /**
   * @return string[]
   */
  public function getSimilarListingIds()
  {
    return $this->similarListingIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonDynamicRealEstateAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonDynamicRealEstateAsset');
