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

class GoogleAdsSearchads360V23CommonDemandGenMultiAssetAdInfo extends \Google\Collection
{
  protected $collection_key = 'tallPortraitMarketingImages';
  /**
   * The Advertiser/brand name. Maximum display width is 25. Required.
   *
   * @var string
   */
  public $businessName;
  /**
   * Call to action text.
   *
   * @var string
   */
  public $callToActionText;
  protected $descriptionsType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $descriptionsDataType = 'array';
  protected $headlinesType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $headlinesDataType = 'array';
  protected $logoImagesType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $logoImagesDataType = 'array';
  protected $marketingImagesType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $marketingImagesDataType = 'array';
  protected $portraitMarketingImagesType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $portraitMarketingImagesDataType = 'array';
  protected $squareMarketingImagesType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $squareMarketingImagesDataType = 'array';
  protected $tallPortraitMarketingImagesType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $tallPortraitMarketingImagesDataType = 'array';

  /**
   * The Advertiser/brand name. Maximum display width is 25. Required.
   *
   * @param string $businessName
   */
  public function setBusinessName($businessName)
  {
    $this->businessName = $businessName;
  }
  /**
   * @return string
   */
  public function getBusinessName()
  {
    return $this->businessName;
  }
  /**
   * Call to action text.
   *
   * @param string $callToActionText
   */
  public function setCallToActionText($callToActionText)
  {
    $this->callToActionText = $callToActionText;
  }
  /**
   * @return string
   */
  public function getCallToActionText()
  {
    return $this->callToActionText;
  }
  /**
   * The descriptive text of the ad. Maximum display width is 90. At least 1 and
   * max 5 descriptions can be specified.
   *
   * @param GoogleAdsSearchads360V23CommonAdTextAsset[] $descriptions
   */
  public function setDescriptions($descriptions)
  {
    $this->descriptions = $descriptions;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdTextAsset[]
   */
  public function getDescriptions()
  {
    return $this->descriptions;
  }
  /**
   * Headline text asset of the ad. Maximum display width is 30. At least 1 and
   * max 5 headlines can be specified.
   *
   * @param GoogleAdsSearchads360V23CommonAdTextAsset[] $headlines
   */
  public function setHeadlines($headlines)
  {
    $this->headlines = $headlines;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdTextAsset[]
   */
  public function getHeadlines()
  {
    return $this->headlines;
  }
  /**
   * Logo image assets to be used in the ad. Valid image types are GIF, JPEG,
   * and PNG. The minimum size is 128x128 and the aspect ratio must be 1:1
   * (+-1%). At least 1 and max 5 logo images can be specified.
   *
   * @param GoogleAdsSearchads360V23CommonAdImageAsset[] $logoImages
   */
  public function setLogoImages($logoImages)
  {
    $this->logoImages = $logoImages;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdImageAsset[]
   */
  public function getLogoImages()
  {
    return $this->logoImages;
  }
  /**
   * Marketing image assets to be used in the ad. Valid image types are GIF,
   * JPEG, and PNG. The minimum size is 600x314 and the aspect ratio must be
   * 1.91:1 (+-1%). Required if square_marketing_images is not present.
   *
   * @param GoogleAdsSearchads360V23CommonAdImageAsset[] $marketingImages
   */
  public function setMarketingImages($marketingImages)
  {
    $this->marketingImages = $marketingImages;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdImageAsset[]
   */
  public function getMarketingImages()
  {
    return $this->marketingImages;
  }
  /**
   * Portrait marketing image assets to be used in the ad. Valid image types are
   * GIF, JPEG, and PNG. The minimum size is 480x600 and the aspect ratio must
   * be 4:5 (+-1%).
   *
   * @param GoogleAdsSearchads360V23CommonAdImageAsset[] $portraitMarketingImages
   */
  public function setPortraitMarketingImages($portraitMarketingImages)
  {
    $this->portraitMarketingImages = $portraitMarketingImages;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdImageAsset[]
   */
  public function getPortraitMarketingImages()
  {
    return $this->portraitMarketingImages;
  }
  /**
   * Square marketing image assets to be used in the ad. Valid image types are
   * GIF, JPEG, and PNG. The minimum size is 300x300 and the aspect ratio must
   * be 1:1 (+-1%). Required if marketing_images is not present.
   *
   * @param GoogleAdsSearchads360V23CommonAdImageAsset[] $squareMarketingImages
   */
  public function setSquareMarketingImages($squareMarketingImages)
  {
    $this->squareMarketingImages = $squareMarketingImages;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdImageAsset[]
   */
  public function getSquareMarketingImages()
  {
    return $this->squareMarketingImages;
  }
  /**
   * Tall portrait marketing image assets to be used in the ad. Valid image
   * types are GIF, JPEG, and PNG. The minimum size is 600x1067 and the aspect
   * ratio must be 9:16 (+-1%). Combined with `marketing_images`,
   * `square_marketing_images`, and `portrait_marketing_images`, the maximum is
   * 20.
   *
   * @param GoogleAdsSearchads360V23CommonAdImageAsset[] $tallPortraitMarketingImages
   */
  public function setTallPortraitMarketingImages($tallPortraitMarketingImages)
  {
    $this->tallPortraitMarketingImages = $tallPortraitMarketingImages;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdImageAsset[]
   */
  public function getTallPortraitMarketingImages()
  {
    return $this->tallPortraitMarketingImages;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonDemandGenMultiAssetAdInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonDemandGenMultiAssetAdInfo');
