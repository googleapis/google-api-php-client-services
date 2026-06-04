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

class GoogleAdsSearchads360V23ServicesAssetSetAssetOperation extends \Google\Model
{
  protected $createType = GoogleAdsSearchads360V23ResourcesAssetSetAsset::class;
  protected $createDataType = '';
  /**
   * Remove operation: A resource name for the removed asset set asset is
   * expected, in this format:
   * `customers/{customer_id}/assetSetAssets/{asset_set_id}~{asset_id}`
   *
   * @var string
   */
  public $remove;

  /**
   * Create operation: No resource name is expected for the new asset set asset
   *
   * @param GoogleAdsSearchads360V23ResourcesAssetSetAsset $create
   */
  public function setCreate(GoogleAdsSearchads360V23ResourcesAssetSetAsset $create)
  {
    $this->create = $create;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAssetSetAsset
   */
  public function getCreate()
  {
    return $this->create;
  }
  /**
   * Remove operation: A resource name for the removed asset set asset is
   * expected, in this format:
   * `customers/{customer_id}/assetSetAssets/{asset_set_id}~{asset_id}`
   *
   * @param string $remove
   */
  public function setRemove($remove)
  {
    $this->remove = $remove;
  }
  /**
   * @return string
   */
  public function getRemove()
  {
    return $this->remove;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesAssetSetAssetOperation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesAssetSetAssetOperation');
