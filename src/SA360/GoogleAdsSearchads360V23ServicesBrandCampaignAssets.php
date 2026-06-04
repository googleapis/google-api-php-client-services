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

class GoogleAdsSearchads360V23ServicesBrandCampaignAssets extends \Google\Collection
{
  protected $collection_key = 'logoAsset';
  /**
   * Required. The resource name of the business name text asset.
   *
   * @var string
   */
  public $businessNameAsset;
  /**
   * Optional. The resource name of landscape logo assets.
   *
   * @var string[]
   */
  public $landscapeLogoAsset;
  /**
   * Required. The resource name of square logo assets.
   *
   * @var string[]
   */
  public $logoAsset;

  /**
   * Required. The resource name of the business name text asset.
   *
   * @param string $businessNameAsset
   */
  public function setBusinessNameAsset($businessNameAsset)
  {
    $this->businessNameAsset = $businessNameAsset;
  }
  /**
   * @return string
   */
  public function getBusinessNameAsset()
  {
    return $this->businessNameAsset;
  }
  /**
   * Optional. The resource name of landscape logo assets.
   *
   * @param string[] $landscapeLogoAsset
   */
  public function setLandscapeLogoAsset($landscapeLogoAsset)
  {
    $this->landscapeLogoAsset = $landscapeLogoAsset;
  }
  /**
   * @return string[]
   */
  public function getLandscapeLogoAsset()
  {
    return $this->landscapeLogoAsset;
  }
  /**
   * Required. The resource name of square logo assets.
   *
   * @param string[] $logoAsset
   */
  public function setLogoAsset($logoAsset)
  {
    $this->logoAsset = $logoAsset;
  }
  /**
   * @return string[]
   */
  public function getLogoAsset()
  {
    return $this->logoAsset;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesBrandCampaignAssets::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesBrandCampaignAssets');
