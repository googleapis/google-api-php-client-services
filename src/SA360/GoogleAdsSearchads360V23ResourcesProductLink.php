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

class GoogleAdsSearchads360V23ResourcesProductLink extends \Google\Model
{
  /**
   * Not specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * A link to Data partner.
   */
  public const TYPE_DATA_PARTNER = 'DATA_PARTNER';
  /**
   * A link to Google Ads.
   */
  public const TYPE_GOOGLE_ADS = 'GOOGLE_ADS';
  /**
   * A link to Hotel Center.
   */
  public const TYPE_HOTEL_CENTER = 'HOTEL_CENTER';
  /**
   * A link to Google Merchant Center.
   */
  public const TYPE_MERCHANT_CENTER = 'MERCHANT_CENTER';
  /**
   * A link to the Google Ads account of the advertising partner.
   */
  public const TYPE_ADVERTISING_PARTNER = 'ADVERTISING_PARTNER';
  protected $advertisingPartnerType = GoogleAdsSearchads360V23ResourcesAdvertisingPartnerIdentifier::class;
  protected $advertisingPartnerDataType = '';
  protected $dataPartnerType = GoogleAdsSearchads360V23ResourcesDataPartnerIdentifier::class;
  protected $dataPartnerDataType = '';
  protected $googleAdsType = GoogleAdsSearchads360V23ResourcesGoogleAdsIdentifier::class;
  protected $googleAdsDataType = '';
  protected $merchantCenterType = GoogleAdsSearchads360V23ResourcesMerchantCenterIdentifier::class;
  protected $merchantCenterDataType = '';
  /**
   * Output only. The ID of the link. This field is read only.
   *
   * @var string
   */
  public $productLinkId;
  /**
   * Immutable. Resource name of the product link. ProductLink resource names
   * have the form: ` `
   *
   * @var string
   */
  public $resourceName;
  /**
   * Output only. The type of the linked product.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. Advertising Partner link.
   *
   * @param GoogleAdsSearchads360V23ResourcesAdvertisingPartnerIdentifier $advertisingPartner
   */
  public function setAdvertisingPartner(GoogleAdsSearchads360V23ResourcesAdvertisingPartnerIdentifier $advertisingPartner)
  {
    $this->advertisingPartner = $advertisingPartner;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAdvertisingPartnerIdentifier
   */
  public function getAdvertisingPartner()
  {
    return $this->advertisingPartner;
  }
  /**
   * Immutable. Data partner link.
   *
   * @param GoogleAdsSearchads360V23ResourcesDataPartnerIdentifier $dataPartner
   */
  public function setDataPartner(GoogleAdsSearchads360V23ResourcesDataPartnerIdentifier $dataPartner)
  {
    $this->dataPartner = $dataPartner;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesDataPartnerIdentifier
   */
  public function getDataPartner()
  {
    return $this->dataPartner;
  }
  /**
   * Immutable. Google Ads link.
   *
   * @param GoogleAdsSearchads360V23ResourcesGoogleAdsIdentifier $googleAds
   */
  public function setGoogleAds(GoogleAdsSearchads360V23ResourcesGoogleAdsIdentifier $googleAds)
  {
    $this->googleAds = $googleAds;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesGoogleAdsIdentifier
   */
  public function getGoogleAds()
  {
    return $this->googleAds;
  }
  /**
   * Immutable. Google Merchant Center link.
   *
   * @param GoogleAdsSearchads360V23ResourcesMerchantCenterIdentifier $merchantCenter
   */
  public function setMerchantCenter(GoogleAdsSearchads360V23ResourcesMerchantCenterIdentifier $merchantCenter)
  {
    $this->merchantCenter = $merchantCenter;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesMerchantCenterIdentifier
   */
  public function getMerchantCenter()
  {
    return $this->merchantCenter;
  }
  /**
   * Output only. The ID of the link. This field is read only.
   *
   * @param string $productLinkId
   */
  public function setProductLinkId($productLinkId)
  {
    $this->productLinkId = $productLinkId;
  }
  /**
   * @return string
   */
  public function getProductLinkId()
  {
    return $this->productLinkId;
  }
  /**
   * Immutable. Resource name of the product link. ProductLink resource names
   * have the form: ` `
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
   * Output only. The type of the linked product.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, DATA_PARTNER, GOOGLE_ADS,
   * HOTEL_CENTER, MERCHANT_CENTER, ADVERTISING_PARTNER
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
class_alias(GoogleAdsSearchads360V23ResourcesProductLink::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesProductLink');
