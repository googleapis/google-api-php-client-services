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

class GoogleAdsSearchads360V23ResourcesRecommendationCalloutAssetRecommendation extends \Google\Collection
{
  protected $collection_key = 'recommendedCustomerCalloutAssets';
  protected $recommendedCampaignCalloutAssetsType = GoogleAdsSearchads360V23ResourcesAsset::class;
  protected $recommendedCampaignCalloutAssetsDataType = 'array';
  protected $recommendedCustomerCalloutAssetsType = GoogleAdsSearchads360V23ResourcesAsset::class;
  protected $recommendedCustomerCalloutAssetsDataType = 'array';

  /**
   * Output only. New callout extension assets recommended at the campaign
   * level.
   *
   * @param GoogleAdsSearchads360V23ResourcesAsset[] $recommendedCampaignCalloutAssets
   */
  public function setRecommendedCampaignCalloutAssets($recommendedCampaignCalloutAssets)
  {
    $this->recommendedCampaignCalloutAssets = $recommendedCampaignCalloutAssets;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAsset[]
   */
  public function getRecommendedCampaignCalloutAssets()
  {
    return $this->recommendedCampaignCalloutAssets;
  }
  /**
   * Output only. New callout extension assets recommended at the customer
   * level.
   *
   * @param GoogleAdsSearchads360V23ResourcesAsset[] $recommendedCustomerCalloutAssets
   */
  public function setRecommendedCustomerCalloutAssets($recommendedCustomerCalloutAssets)
  {
    $this->recommendedCustomerCalloutAssets = $recommendedCustomerCalloutAssets;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAsset[]
   */
  public function getRecommendedCustomerCalloutAssets()
  {
    return $this->recommendedCustomerCalloutAssets;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesRecommendationCalloutAssetRecommendation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesRecommendationCalloutAssetRecommendation');
