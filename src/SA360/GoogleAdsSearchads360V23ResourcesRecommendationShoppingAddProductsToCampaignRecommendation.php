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

class GoogleAdsSearchads360V23ResourcesRecommendationShoppingAddProductsToCampaignRecommendation extends \Google\Model
{
  /**
   * Not specified.
   */
  public const REASON_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const REASON_UNKNOWN = 'UNKNOWN';
  /**
   * The Merchant Center account does not have any submitted products.
   */
  public const REASON_MERCHANT_CENTER_ACCOUNT_HAS_NO_SUBMITTED_PRODUCTS = 'MERCHANT_CENTER_ACCOUNT_HAS_NO_SUBMITTED_PRODUCTS';
  /**
   * The Merchant Center account does not have any submitted products in the
   * feed.
   */
  public const REASON_MERCHANT_CENTER_ACCOUNT_HAS_NO_SUBMITTED_PRODUCTS_IN_FEED = 'MERCHANT_CENTER_ACCOUNT_HAS_NO_SUBMITTED_PRODUCTS_IN_FEED';
  /**
   * The Google Ads account has active campaign filters that prevents inclusion
   * of offers in the campaign.
   */
  public const REASON_ADS_ACCOUNT_EXCLUDES_OFFERS_FROM_CAMPAIGN = 'ADS_ACCOUNT_EXCLUDES_OFFERS_FROM_CAMPAIGN';
  /**
   * All products available have been explicitly excluded from being targeted by
   * the campaign.
   */
  public const REASON_ALL_PRODUCTS_ARE_EXCLUDED_FROM_CAMPAIGN = 'ALL_PRODUCTS_ARE_EXCLUDED_FROM_CAMPAIGN';
  /**
   * Output only. The feed label for the campaign.
   *
   * @var string
   */
  public $feedLabel;
  protected $merchantType = GoogleAdsSearchads360V23ResourcesRecommendationMerchantInfo::class;
  protected $merchantDataType = '';
  /**
   * Output only. The reason why no products are attached to the campaign.
   *
   * @var string
   */
  public $reason;

  /**
   * Output only. The feed label for the campaign.
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
   * Output only. The details of the Merchant Center account.
   *
   * @param GoogleAdsSearchads360V23ResourcesRecommendationMerchantInfo $merchant
   */
  public function setMerchant(GoogleAdsSearchads360V23ResourcesRecommendationMerchantInfo $merchant)
  {
    $this->merchant = $merchant;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesRecommendationMerchantInfo
   */
  public function getMerchant()
  {
    return $this->merchant;
  }
  /**
   * Output only. The reason why no products are attached to the campaign.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN,
   * MERCHANT_CENTER_ACCOUNT_HAS_NO_SUBMITTED_PRODUCTS,
   * MERCHANT_CENTER_ACCOUNT_HAS_NO_SUBMITTED_PRODUCTS_IN_FEED,
   * ADS_ACCOUNT_EXCLUDES_OFFERS_FROM_CAMPAIGN,
   * ALL_PRODUCTS_ARE_EXCLUDED_FROM_CAMPAIGN
   *
   * @param self::REASON_* $reason
   */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /**
   * @return self::REASON_*
   */
  public function getReason()
  {
    return $this->reason;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationShoppingAddProductsToCampaignRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationShoppingAddProductsToCampaignRecommendation');
