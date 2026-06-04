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

class GoogleAdsSearchads360V23ServicesApplyRecommendationOperationAdAssetApplyParameters extends \Google\Collection
{
  /**
   * The apply scope has not been specified.
   */
  public const SCOPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Unknown.
   */
  public const SCOPE_UNKNOWN = 'UNKNOWN';
  /**
   * Apply at the customer scope.
   */
  public const SCOPE_CUSTOMER = 'CUSTOMER';
  /**
   * Apply at the campaign scope.
   */
  public const SCOPE_CAMPAIGN = 'CAMPAIGN';
  protected $collection_key = 'newAssets';
  /**
   * The resource names of existing assets to attach to a scope. This may be
   * combined with new_assets in the same call.
   *
   * @var string[]
   */
  public $existingAssets;
  protected $newAssetsType = GoogleAdsSearchads360V23ResourcesAsset::class;
  protected $newAssetsDataType = 'array';
  /**
   * Required. The scope at which to apply the assets. Assets at the campaign
   * scope level will be applied to the campaign associated with the
   * recommendation. Assets at the customer scope will apply to the entire
   * account. Assets at the campaign scope will override any attached at the
   * customer scope.
   *
   * @var string
   */
  public $scope;

  /**
   * The resource names of existing assets to attach to a scope. This may be
   * combined with new_assets in the same call.
   *
   * @param string[] $existingAssets
   */
  public function setExistingAssets($existingAssets)
  {
    $this->existingAssets = $existingAssets;
  }
  /**
   * @return string[]
   */
  public function getExistingAssets()
  {
    return $this->existingAssets;
  }
  /**
   * The assets to create and attach to a scope. This may be combined with
   * existing_assets in the same call.
   *
   * @param GoogleAdsSearchads360V23ResourcesAsset[] $newAssets
   */
  public function setNewAssets($newAssets)
  {
    $this->newAssets = $newAssets;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesAsset[]
   */
  public function getNewAssets()
  {
    return $this->newAssets;
  }
  /**
   * Required. The scope at which to apply the assets. Assets at the campaign
   * scope level will be applied to the campaign associated with the
   * recommendation. Assets at the customer scope will apply to the entire
   * account. Assets at the campaign scope will override any attached at the
   * customer scope.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, CUSTOMER, CAMPAIGN
   *
   * @param self::SCOPE_* $scope
   */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return self::SCOPE_*
   */
  public function getScope()
  {
    return $this->scope;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesApplyRecommendationOperationAdAssetApplyParameters::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesApplyRecommendationOperationAdAssetApplyParameters');
