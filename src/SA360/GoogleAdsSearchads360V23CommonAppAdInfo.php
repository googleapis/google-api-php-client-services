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

class GoogleAdsSearchads360V23CommonAppAdInfo extends \Google\Collection
{
  protected $collection_key = 'youtubeVideos';
  protected $appDeepLinkType = GoogleAdsSearchads360V23CommonAdAppDeepLinkAsset::class;
  protected $appDeepLinkDataType = '';
  protected $descriptionsType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $descriptionsDataType = 'array';
  protected $headlinesType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $headlinesDataType = 'array';
  protected $html5MediaBundlesType = GoogleAdsSearchads360V23CommonAdMediaBundleAsset::class;
  protected $html5MediaBundlesDataType = 'array';
  protected $imagesType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $imagesDataType = 'array';
  protected $mandatoryAdTextType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $mandatoryAdTextDataType = '';
  protected $youtubeVideosType = GoogleAdsSearchads360V23CommonAdVideoAsset::class;
  protected $youtubeVideosDataType = 'array';

  /**
   * An app deep link asset that may be used with the ad.
   *
   * @param GoogleAdsSearchads360V23CommonAdAppDeepLinkAsset $appDeepLink
   */
  public function setAppDeepLink(GoogleAdsSearchads360V23CommonAdAppDeepLinkAsset $appDeepLink)
  {
    $this->appDeepLink = $appDeepLink;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdAppDeepLinkAsset
   */
  public function getAppDeepLink()
  {
    return $this->appDeepLink;
  }
  /**
   * List of text assets for descriptions. When the ad serves the descriptions
   * will be selected from this list.
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
   * selected from this list.
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
   * List of media bundle assets that may be used with the ad.
   *
   * @param GoogleAdsSearchads360V23CommonAdMediaBundleAsset[] $html5MediaBundles
   */
  public function setHtml5MediaBundles($html5MediaBundles)
  {
    $this->html5MediaBundles = $html5MediaBundles;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdMediaBundleAsset[]
   */
  public function getHtml5MediaBundles()
  {
    return $this->html5MediaBundles;
  }
  /**
   * List of image assets that may be displayed with the ad.
   *
   * @param GoogleAdsSearchads360V23CommonAdImageAsset[] $images
   */
  public function setImages($images)
  {
    $this->images = $images;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdImageAsset[]
   */
  public function getImages()
  {
    return $this->images;
  }
  /**
   * Mandatory ad text.
   *
   * @param GoogleAdsSearchads360V23CommonAdTextAsset $mandatoryAdText
   */
  public function setMandatoryAdText(GoogleAdsSearchads360V23CommonAdTextAsset $mandatoryAdText)
  {
    $this->mandatoryAdText = $mandatoryAdText;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdTextAsset
   */
  public function getMandatoryAdText()
  {
    return $this->mandatoryAdText;
  }
  /**
   * List of YouTube video assets that may be displayed with the ad.
   *
   * @param GoogleAdsSearchads360V23CommonAdVideoAsset[] $youtubeVideos
   */
  public function setYoutubeVideos($youtubeVideos)
  {
    $this->youtubeVideos = $youtubeVideos;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdVideoAsset[]
   */
  public function getYoutubeVideos()
  {
    return $this->youtubeVideos;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonAppAdInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonAppAdInfo');
