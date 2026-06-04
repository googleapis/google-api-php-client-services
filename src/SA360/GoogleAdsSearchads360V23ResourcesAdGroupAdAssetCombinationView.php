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

class GoogleAdsSearchads360V23ResourcesAdGroupAdAssetCombinationView extends \Google\Collection
{
  protected $collection_key = 'servedAssets';
  /**
   * Output only. The status between the asset combination and the latest
   * version of the ad. If true, the asset combination is linked to the latest
   * version of the ad. If false, it means the link once existed but has been
   * removed and is no longer present in the latest version of the ad.
   *
   * @var bool
   */
  public $enabled;
  /**
   * Output only. The resource name of the ad group ad asset combination view.
   * The combination ID is 128 bits long, where the upper 64 bits are stored in
   * asset_combination_id_high, and the lower 64 bits are stored in
   * asset_combination_id_low. AdGroupAd Asset Combination view resource names
   * have the form: `customers/{customer_id}/adGroupAdAssetCombinationViews/{AdG
   * roupAd.ad_group_id}~{AdGroupAd.ad.ad_id}~{AssetCombination.asset_combinatio
   * n_id_low}~{AssetCombination.asset_combination_id_high}`
   *
   * @var string
   */
  public $resourceName;
  protected $servedAssetsType = GoogleAdsSearchads360V23CommonAssetUsage::class;
  protected $servedAssetsDataType = 'array';

  /**
   * Output only. The status between the asset combination and the latest
   * version of the ad. If true, the asset combination is linked to the latest
   * version of the ad. If false, it means the link once existed but has been
   * removed and is no longer present in the latest version of the ad.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * Output only. The resource name of the ad group ad asset combination view.
   * The combination ID is 128 bits long, where the upper 64 bits are stored in
   * asset_combination_id_high, and the lower 64 bits are stored in
   * asset_combination_id_low. AdGroupAd Asset Combination view resource names
   * have the form: `customers/{customer_id}/adGroupAdAssetCombinationViews/{AdG
   * roupAd.ad_group_id}~{AdGroupAd.ad.ad_id}~{AssetCombination.asset_combinatio
   * n_id_low}~{AssetCombination.asset_combination_id_high}`
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
   * Output only. Served assets.
   *
   * @param GoogleAdsSearchads360V23CommonAssetUsage[] $servedAssets
   */
  public function setServedAssets($servedAssets)
  {
    $this->servedAssets = $servedAssets;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAssetUsage[]
   */
  public function getServedAssets()
  {
    return $this->servedAssets;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAdGroupAdAssetCombinationView::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAdGroupAdAssetCombinationView');
