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

class GoogleAdsSearchads360V23CommonItemAttribute extends \Google\Model
{
  /**
   * Common Locale Data Repository (CLDR) territory code of the country
   * associated with the feed where your items are uploaded. See
   * https://developers.google.com/google-ads/api/reference/data/codes-
   * formats#country-codes for more information. This information is useful to
   * differentiate product information in cases where a product (identified by
   * item_id) is associated with multiple countries.
   *
   * @var string
   */
  public $countryCode;
  /**
   * A unique identifier of a product. It must be the exact same Merchant Center
   * Item ID you use in your Google Merchant Center for this product. Required.
   *
   * @var string
   */
  public $itemId;
  /**
   * ISO 639-1 code of the language associated with the feed where your items
   * are uploaded. This information is useful to differentiate product
   * information in cases where a product (identified by item_id) is associated
   * with multiple languages.
   *
   * @var string
   */
  public $languageCode;
  /**
   * ID of the Merchant Center Account. Required.
   *
   * @var string
   */
  public $merchantId;
  /**
   * The number of items sold. Defaults to 1 if not set.
   *
   * @var string
   */
  public $quantity;

  /**
   * Common Locale Data Repository (CLDR) territory code of the country
   * associated with the feed where your items are uploaded. See
   * https://developers.google.com/google-ads/api/reference/data/codes-
   * formats#country-codes for more information. This information is useful to
   * differentiate product information in cases where a product (identified by
   * item_id) is associated with multiple countries.
   *
   * @param string $countryCode
   */
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  /**
   * @return string
   */
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  /**
   * A unique identifier of a product. It must be the exact same Merchant Center
   * Item ID you use in your Google Merchant Center for this product. Required.
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
   * ISO 639-1 code of the language associated with the feed where your items
   * are uploaded. This information is useful to differentiate product
   * information in cases where a product (identified by item_id) is associated
   * with multiple languages.
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
   * ID of the Merchant Center Account. Required.
   *
   * @param string $merchantId
   */
  public function setMerchantId($merchantId)
  {
    $this->merchantId = $merchantId;
  }
  /**
   * @return string
   */
  public function getMerchantId()
  {
    return $this->merchantId;
  }
  /**
   * The number of items sold. Defaults to 1 if not set.
   *
   * @param string $quantity
   */
  public function setQuantity($quantity)
  {
    $this->quantity = $quantity;
  }
  /**
   * @return string
   */
  public function getQuantity()
  {
    return $this->quantity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonItemAttribute::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonItemAttribute');
