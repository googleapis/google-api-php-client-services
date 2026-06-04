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

class GoogleAdsSearchads360V23ServicesEnableOperation extends \Google\Model
{
  /**
   * Optional. Hex code representation of the accent brand color, for example
   * #00ff00. accent_color is required when main_color is specified.
   *
   * @var string
   */
  public $accentColor;
  /**
   * Required. The switch to automatically populate top-performing brand assets.
   * This field is required. If true, top-performing brand assets will be
   * automatically populated. If false, the brand_assets field is required.
   *
   * @var bool
   */
  public $autoPopulateBrandAssets;
  protected $brandAssetsType = GoogleAdsSearchads360V23ServicesBrandCampaignAssets::class;
  protected $brandAssetsDataType = '';
  /**
   * Required. The resource name of the campaign to enable.
   *
   * @var string
   */
  public $campaign;
  /**
   * Optional. The domain of the final uri.
   *
   * @var string
   */
  public $finalUriDomain;
  /**
   * Optional. The font family is specified as a string, and must be one of the
   * following: "Open Sans", "Roboto", "Roboto Slab", "Montserrat", "Poppins",
   * "Lato", "Oswald", or "Playfair Display".
   *
   * @var string
   */
  public $fontFamily;
  /**
   * Optional. Hex code representation of the main brand color, for example
   * #00ff00. main_color is required when accent color is specified.
   *
   * @var string
   */
  public $mainColor;

  /**
   * Optional. Hex code representation of the accent brand color, for example
   * #00ff00. accent_color is required when main_color is specified.
   *
   * @param string $accentColor
   */
  public function setAccentColor($accentColor)
  {
    $this->accentColor = $accentColor;
  }
  /**
   * @return string
   */
  public function getAccentColor()
  {
    return $this->accentColor;
  }
  /**
   * Required. The switch to automatically populate top-performing brand assets.
   * This field is required. If true, top-performing brand assets will be
   * automatically populated. If false, the brand_assets field is required.
   *
   * @param bool $autoPopulateBrandAssets
   */
  public function setAutoPopulateBrandAssets($autoPopulateBrandAssets)
  {
    $this->autoPopulateBrandAssets = $autoPopulateBrandAssets;
  }
  /**
   * @return bool
   */
  public function getAutoPopulateBrandAssets()
  {
    return $this->autoPopulateBrandAssets;
  }
  /**
   * Optional. The brand assets linked to the campaign. This field is required
   * when the value of auto_populate_brand_assets is false.
   *
   * @param GoogleAdsSearchads360V23ServicesBrandCampaignAssets $brandAssets
   */
  public function setBrandAssets(GoogleAdsSearchads360V23ServicesBrandCampaignAssets $brandAssets)
  {
    $this->brandAssets = $brandAssets;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesBrandCampaignAssets
   */
  public function getBrandAssets()
  {
    return $this->brandAssets;
  }
  /**
   * Required. The resource name of the campaign to enable.
   *
   * @param string $campaign
   */
  public function setCampaign($campaign)
  {
    $this->campaign = $campaign;
  }
  /**
   * @return string
   */
  public function getCampaign()
  {
    return $this->campaign;
  }
  /**
   * Optional. The domain of the final uri.
   *
   * @param string $finalUriDomain
   */
  public function setFinalUriDomain($finalUriDomain)
  {
    $this->finalUriDomain = $finalUriDomain;
  }
  /**
   * @return string
   */
  public function getFinalUriDomain()
  {
    return $this->finalUriDomain;
  }
  /**
   * Optional. The font family is specified as a string, and must be one of the
   * following: "Open Sans", "Roboto", "Roboto Slab", "Montserrat", "Poppins",
   * "Lato", "Oswald", or "Playfair Display".
   *
   * @param string $fontFamily
   */
  public function setFontFamily($fontFamily)
  {
    $this->fontFamily = $fontFamily;
  }
  /**
   * @return string
   */
  public function getFontFamily()
  {
    return $this->fontFamily;
  }
  /**
   * Optional. Hex code representation of the main brand color, for example
   * #00ff00. main_color is required when accent color is specified.
   *
   * @param string $mainColor
   */
  public function setMainColor($mainColor)
  {
    $this->mainColor = $mainColor;
  }
  /**
   * @return string
   */
  public function getMainColor()
  {
    return $this->mainColor;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesEnableOperation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesEnableOperation');
