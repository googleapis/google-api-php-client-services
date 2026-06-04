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

class GoogleAdsSearchads360V23ResourcesCampaignShoppingSetting extends \Google\Collection
{
  protected $collection_key = 'advertisingPartnerIds';
  /**
   * The list of Google Ads accounts IDs of advertising partners cooperating
   * within the campaign. This feature is currently available only for accounts
   * having an advertising partner link. This feature is currently supported
   * only for Performance Max, Shopping, Search and Demand Gen campaign types.
   *
   * @var string[]
   */
  public $advertisingPartnerIds;
  /**
   * Priority of the campaign. Campaigns with numerically higher priorities take
   * precedence over those with lower priorities. This field is required for
   * Shopping campaigns, with values between 0 and 2, inclusive. This field is
   * optional for Smart Shopping campaigns, but must be equal to 3 if set.
   *
   * @var int
   */
  public $campaignPriority;
  /**
   * Disable the optional product feed. This field is currently supported only
   * for Demand Gen campaigns. See https://support.google.com/google-
   * ads/answer/13721750 to learn more about this feature.
   *
   * @var bool
   */
  public $disableProductFeed;
  /**
   * Whether to include local products.
   *
   * @var bool
   */
  public $enableLocal;
  /**
   * Feed label of products to include in the campaign. Valid feed labels may
   * contain a maximum of 20 characters including uppercase letters, numbers,
   * hyphens, and underscores. If you previously used the deprecated
   * `sales_country` in the two-letter country code (`XX`) format, the
   * `feed_label` field should be used instead. For more information see the
   * [feed label](//support.google.com/merchants/answer/12453549) support
   * article.
   *
   * @var string
   */
  public $feedLabel;
  /**
   * ID of the Merchant Center account. This field is required for create
   * operations. This field is immutable for Shopping campaigns.
   *
   * @var string
   */
  public $merchantId;
  /**
   * Immutable. Whether to target Vehicle Listing inventory.
   *
   * @var bool
   */
  public $useVehicleInventory;

  /**
   * The list of Google Ads accounts IDs of advertising partners cooperating
   * within the campaign. This feature is currently available only for accounts
   * having an advertising partner link. This feature is currently supported
   * only for Performance Max, Shopping, Search and Demand Gen campaign types.
   *
   * @param string[] $advertisingPartnerIds
   */
  public function setAdvertisingPartnerIds($advertisingPartnerIds)
  {
    $this->advertisingPartnerIds = $advertisingPartnerIds;
  }
  /**
   * @return string[]
   */
  public function getAdvertisingPartnerIds()
  {
    return $this->advertisingPartnerIds;
  }
  /**
   * Priority of the campaign. Campaigns with numerically higher priorities take
   * precedence over those with lower priorities. This field is required for
   * Shopping campaigns, with values between 0 and 2, inclusive. This field is
   * optional for Smart Shopping campaigns, but must be equal to 3 if set.
   *
   * @param int $campaignPriority
   */
  public function setCampaignPriority($campaignPriority)
  {
    $this->campaignPriority = $campaignPriority;
  }
  /**
   * @return int
   */
  public function getCampaignPriority()
  {
    return $this->campaignPriority;
  }
  /**
   * Disable the optional product feed. This field is currently supported only
   * for Demand Gen campaigns. See https://support.google.com/google-
   * ads/answer/13721750 to learn more about this feature.
   *
   * @param bool $disableProductFeed
   */
  public function setDisableProductFeed($disableProductFeed)
  {
    $this->disableProductFeed = $disableProductFeed;
  }
  /**
   * @return bool
   */
  public function getDisableProductFeed()
  {
    return $this->disableProductFeed;
  }
  /**
   * Whether to include local products.
   *
   * @param bool $enableLocal
   */
  public function setEnableLocal($enableLocal)
  {
    $this->enableLocal = $enableLocal;
  }
  /**
   * @return bool
   */
  public function getEnableLocal()
  {
    return $this->enableLocal;
  }
  /**
   * Feed label of products to include in the campaign. Valid feed labels may
   * contain a maximum of 20 characters including uppercase letters, numbers,
   * hyphens, and underscores. If you previously used the deprecated
   * `sales_country` in the two-letter country code (`XX`) format, the
   * `feed_label` field should be used instead. For more information see the
   * [feed label](//support.google.com/merchants/answer/12453549) support
   * article.
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
   * ID of the Merchant Center account. This field is required for create
   * operations. This field is immutable for Shopping campaigns.
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
   * Immutable. Whether to target Vehicle Listing inventory.
   *
   * @param bool $useVehicleInventory
   */
  public function setUseVehicleInventory($useVehicleInventory)
  {
    $this->useVehicleInventory = $useVehicleInventory;
  }
  /**
   * @return bool
   */
  public function getUseVehicleInventory()
  {
    return $this->useVehicleInventory;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesCampaignShoppingSetting::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesCampaignShoppingSetting');
