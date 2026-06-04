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

class GoogleAdsSearchads360V23CommonDemandGenVideoResponsiveAdInfo extends \Google\Collection
{
  protected $collection_key = 'videos';
  /**
   * First part of text that appears in the ad with the displayed URL.
   *
   * @var string
   */
  public $breadcrumb1;
  /**
   * Second part of text that appears in the ad with the displayed URL.
   *
   * @var string
   */
  public $breadcrumb2;
  protected $businessNameType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $businessNameDataType = '';
  protected $callToActionsType = GoogleAdsSearchads360V23CommonAdCallToActionAsset::class;
  protected $callToActionsDataType = 'array';
  protected $companionBannersType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $companionBannersDataType = 'array';
  protected $descriptionsType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $descriptionsDataType = 'array';
  protected $headlinesType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $headlinesDataType = 'array';
  protected $logoImagesType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $logoImagesDataType = 'array';
  protected $longHeadlinesType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $longHeadlinesDataType = 'array';
  protected $videosType = GoogleAdsSearchads360V23CommonAdVideoAsset::class;
  protected $videosDataType = 'array';

  /**
   * First part of text that appears in the ad with the displayed URL.
   *
   * @param string $breadcrumb1
   */
  public function setBreadcrumb1($breadcrumb1)
  {
    $this->breadcrumb1 = $breadcrumb1;
  }
  /**
   * @return string
   */
  public function getBreadcrumb1()
  {
    return $this->breadcrumb1;
  }
  /**
   * Second part of text that appears in the ad with the displayed URL.
   *
   * @param string $breadcrumb2
   */
  public function setBreadcrumb2($breadcrumb2)
  {
    $this->breadcrumb2 = $breadcrumb2;
  }
  /**
   * @return string
   */
  public function getBreadcrumb2()
  {
    return $this->breadcrumb2;
  }
  /**
   * Required. The advertiser/brand name.
   *
   * @param GoogleAdsSearchads360V23CommonAdTextAsset $businessName
   */
  public function setBusinessName(GoogleAdsSearchads360V23CommonAdTextAsset $businessName)
  {
    $this->businessName = $businessName;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdTextAsset
   */
  public function getBusinessName()
  {
    return $this->businessName;
  }
  /**
   * Assets of type CallToActionAsset used for the "Call To Action" button.
   *
   * @param GoogleAdsSearchads360V23CommonAdCallToActionAsset[] $callToActions
   */
  public function setCallToActions($callToActions)
  {
    $this->callToActions = $callToActions;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdCallToActionAsset[]
   */
  public function getCallToActions()
  {
    return $this->callToActions;
  }
  /**
   * List of image assets used for the companion banner. Currently, only a
   * single value for the companion banner asset is supported.
   *
   * @param GoogleAdsSearchads360V23CommonAdImageAsset[] $companionBanners
   */
  public function setCompanionBanners($companionBanners)
  {
    $this->companionBanners = $companionBanners;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdImageAsset[]
   */
  public function getCompanionBanners()
  {
    return $this->companionBanners;
  }
  /**
   * List of text assets used for the description.
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
   * List of text assets used for the short headline.
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
   * Logo image to be used in the ad. Valid image types are GIF, JPEG, and PNG.
   * The minimum size is 128x128 and the aspect ratio must be 1:1 (+-1%).
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
   * List of text assets used for the long headline.
   *
   * @param GoogleAdsSearchads360V23CommonAdTextAsset[] $longHeadlines
   */
  public function setLongHeadlines($longHeadlines)
  {
    $this->longHeadlines = $longHeadlines;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdTextAsset[]
   */
  public function getLongHeadlines()
  {
    return $this->longHeadlines;
  }
  /**
   * List of YouTube video assets used for the ad.
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
class_alias(GoogleAdsSearchads360V23CommonDemandGenVideoResponsiveAdInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonDemandGenVideoResponsiveAdInfo');
