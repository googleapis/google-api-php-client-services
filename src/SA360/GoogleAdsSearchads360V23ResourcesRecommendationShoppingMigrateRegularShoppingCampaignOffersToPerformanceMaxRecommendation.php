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

class GoogleAdsSearchads360V23ResourcesRecommendationShoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendation extends \Google\Model
{
  /**
   * Output only. The feed label of the offers targeted by the campaigns sharing
   * this suggestion.
   *
   * @var string
   */
  public $feedLabel;
  protected $merchantType = GoogleAdsSearchads360V23ResourcesRecommendationMerchantInfo::class;
  protected $merchantDataType = '';

  /**
   * Output only. The feed label of the offers targeted by the campaigns sharing
   * this suggestion.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationShoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationShoppingMigrateRegularShoppingCampaignOffersToPerformanceMaxRecommendation');
