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

class GoogleAdsSearchads360V23ResourcesRecommendationSitelinkAssetRecommendation extends \Google\Collection
{
  protected $collection_key = 'recommendedCustomerSitelinkAssets';
  protected $recommendedCampaignSitelinkAssetsType = GoogleAdsSearchads360V23ResourcesAsset::class;
  protected $recommendedCampaignSitelinkAssetsDataType = 'array';
  protected $recommendedCustomerSitelinkAssetsType = GoogleAdsSearchads360V23ResourcesAsset::class;
  protected $recommendedCustomerSitelinkAssetsDataType = 'array';

  /**
   * Output only. New sitelink assets recommended at the campaign level.
   *
   * @param GoogleAdsSearchads360V23ResourcesAsset[] $recommendedCampaignSitelinkAssets
   */
  public function setRecommendedCampaignSitelinkAssets($recommendedCampaignSitelinkAssets)
  {
    $this->recommendedCampaignSitelinkAssets = $recommendedCampaignSitelinkAssets;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAsset[]
   */
  public function getRecommendedCampaignSitelinkAssets()
  {
    return $this->recommendedCampaignSitelinkAssets;
  }
  /**
   * Output only. New sitelink assets recommended at the customer level.
   *
   * @param GoogleAdsSearchads360V23ResourcesAsset[] $recommendedCustomerSitelinkAssets
   */
  public function setRecommendedCustomerSitelinkAssets($recommendedCustomerSitelinkAssets)
  {
    $this->recommendedCustomerSitelinkAssets = $recommendedCustomerSitelinkAssets;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAsset[]
   */
  public function getRecommendedCustomerSitelinkAssets()
  {
    return $this->recommendedCustomerSitelinkAssets;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationSitelinkAssetRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationSitelinkAssetRecommendation');
