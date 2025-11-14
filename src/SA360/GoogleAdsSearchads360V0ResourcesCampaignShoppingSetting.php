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

class GoogleAdsSearchads360V0ResourcesCampaignShoppingSetting extends \Google\Model
{
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
   * Whether to include local products.
   *
   * @var bool
   */
  public $enableLocal;
  /**
   * Feed label of products to include in the campaign. Only one of feed_label
   * or sales_country can be set. If used instead of sales_country, the
   * feed_label field accepts country codes in the same format for example:
   * 'XX'. Otherwise can be any string used for feed label in Google Merchant
   * Center.
   *
   * @var string
   */
  public $feedLabel;
  /**
   * Immutable. ID of the Merchant Center account. This field is required for
   * create operations. This field is immutable for Shopping campaigns.
   *
   * @var string
   */
  public $merchantId;
  /**
   * Sales country of products to include in the campaign.
   *
   * @var string
   */
  public $salesCountry;
  /**
   * Immutable. Whether to target Vehicle Listing inventory.
   *
   * @var bool
   */
  public $useVehicleInventory;

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
   * Feed label of products to include in the campaign. Only one of feed_label
   * or sales_country can be set. If used instead of sales_country, the
   * feed_label field accepts country codes in the same format for example:
   * 'XX'. Otherwise can be any string used for feed label in Google Merchant
   * Center.
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
   * Immutable. ID of the Merchant Center account. This field is required for
   * create operations. This field is immutable for Shopping campaigns.
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
   * Sales country of products to include in the campaign.
   *
   * @param string $salesCountry
   */
  public function setSalesCountry($salesCountry)
  {
    $this->salesCountry = $salesCountry;
  }
  /**
   * @return string
   */
  public function getSalesCountry()
  {
    return $this->salesCountry;
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
class_alias(GoogleAdsSearchads360V0ResourcesCampaignShoppingSetting::class, 'Google_Service_SA360_GoogleAdsSearchads360V0ResourcesCampaignShoppingSetting');
