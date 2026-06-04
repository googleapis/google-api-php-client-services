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

class GoogleAdsSearchads360V23CommonLocalAdInfo extends \Google\Collection
{
  protected $collection_key = 'videos';
  protected $callToActionsType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $callToActionsDataType = 'array';
  protected $descriptionsType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $descriptionsDataType = 'array';
  protected $headlinesType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $headlinesDataType = 'array';
  protected $logoImagesType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $logoImagesDataType = 'array';
  protected $marketingImagesType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $marketingImagesDataType = 'array';
  /**
   * First part of optional text that can be appended to the URL in the ad.
   *
   * @var string
   */
  public $path1;
  /**
   * Second part of optional text that can be appended to the URL in the ad.
   * This field can only be set when `path1` is also set.
   *
   * @var string
   */
  public $path2;
  protected $videosType = GoogleAdsSearchads360V23CommonAdVideoAsset::class;
  protected $videosDataType = 'array';

  /**
   * List of text assets for call-to-actions. When the ad serves the call-to-
   * actions will be selected from this list. At least 1 and at most 5 call-to-
   * actions must be specified.
   *
   * @param GoogleAdsSearchads360V23CommonAdTextAsset[] $callToActions
   */
  public function setCallToActions($callToActions)
  {
    $this->callToActions = $callToActions;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdTextAsset[]
   */
  public function getCallToActions()
  {
    return $this->callToActions;
  }
  /**
   * List of text assets for descriptions. When the ad serves the descriptions
   * will be selected from this list. At least 1 and at most 5 descriptions must
   * be specified.
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
   * List of text assets for headlines. When the ad serves the headlines will be
   * selected from this list. At least 1 and at most 5 headlines must be
   * specified.
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
   * List of logo image assets that may be displayed with the ad. The images
   * must be 128x128 pixels and not larger than 120KB. At least 1 and at most 5
   * image assets must be specified.
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
   * List of marketing image assets that may be displayed with the ad. The
   * images must be 314x600 pixels or 320x320 pixels. At least 1 and at most 20
   * image assets must be specified.
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
   * First part of optional text that can be appended to the URL in the ad.
   *
   * @param string $path1
   */
  public function setPath1($path1)
  {
    $this->path1 = $path1;
  }
  /**
   * @return string
   */
  public function getPath1()
  {
    return $this->path1;
  }
  /**
   * Second part of optional text that can be appended to the URL in the ad.
   * This field can only be set when `path1` is also set.
   *
   * @param string $path2
   */
  public function setPath2($path2)
  {
    $this->path2 = $path2;
  }
  /**
   * @return string
   */
  public function getPath2()
  {
    return $this->path2;
  }
  /**
   * List of YouTube video assets that may be displayed with the ad. At least 1
   * and at most 20 video assets must be specified.
   *
   * @param GoogleAdsSearchads360V23CommonAdVideoAsset[] $videos
   */
  public function setVideos($videos)
  {
    $this->videos = $videos;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdVideoAsset[]
   */
  public function getVideos()
  {
    return $this->videos;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonLocalAdInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonLocalAdInfo');
