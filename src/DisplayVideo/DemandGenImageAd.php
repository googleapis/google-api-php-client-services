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

namespace Google\Service\DisplayVideo;

class DemandGenImageAd extends \Google\Collection
{
  protected $collection_key = 'squareMarketingImages';
  /**
   * Required. The business name shown on the ad.
   *
   * @var string
   */
  public $businessName;
  /**
   * Required. The call-to-action button shown on the ad.
   *
   * @var string
   */
  public $callToAction;
  /**
   * Optional. The custom parameters and accompanying values to add to the
   * tracking URL.
   *
   * @var string[]
   */
  public $customParameters;
  /**
   * Required. The list of descriptions shown on the ad.
   *
   * @var string[]
   */
  public $descriptions;
  /**
   * Optional. The URL address of the webpage that people reach after they click
   * the ad on a mobile device.
   *
   * @var string
   */
  public $finalMobileUrl;
  /**
   * Required. The URL address of the webpage that people reach after they click
   * the ad.
   *
   * @var string
   */
  public $finalUrl;
  /**
   * Optional. The suffix to append to landing page URLs.
   *
   * @var string
   */
  public $finalUrlSuffix;
  /**
   * Required. The list of headlines shown on the ad.
   *
   * @var string[]
   */
  public $headlines;
  protected $logoImagesType = ImageAsset::class;
  protected $logoImagesDataType = 'array';
  protected $marketingImagesType = ImageAsset::class;
  protected $marketingImagesDataType = 'array';
  protected $portraitMarketingImagesType = ImageAsset::class;
  protected $portraitMarketingImagesDataType = 'array';
  protected $squareMarketingImagesType = ImageAsset::class;
  protected $squareMarketingImagesDataType = 'array';
  /**
   * Output only. The URL address loaded in the background for tracking
   * purposes.
   *
   * @var string
   */
  public $trackingUrl;
  /**
   * Optional. The tracking URL specified by the user manually.
   *
   * @var string
   */
  public $userSpecifiedTrackingUrl;

  /**
   * Required. The business name shown on the ad.
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
   * Required. The call-to-action button shown on the ad.
   *
   * @param string $callToAction
   */
  public function setCallToAction($callToAction)
  {
    $this->callToAction = $callToAction;
  }
  /**
   * @return string
   */
  public function getCallToAction()
  {
    return $this->callToAction;
  }
  /**
   * Optional. The custom parameters and accompanying values to add to the
   * tracking URL.
   *
   * @param string[] $customParameters
   */
  public function setCustomParameters($customParameters)
  {
    $this->customParameters = $customParameters;
  }
  /**
   * @return string[]
   */
  public function getCustomParameters()
  {
    return $this->customParameters;
  }
  /**
   * Required. The list of descriptions shown on the ad.
   *
   * @param string[] $descriptions
   */
  public function setDescriptions($descriptions)
  {
    $this->descriptions = $descriptions;
  }
  /**
   * @return string[]
   */
  public function getDescriptions()
  {
    return $this->descriptions;
  }
  /**
   * Optional. The URL address of the webpage that people reach after they click
   * the ad on a mobile device.
   *
   * @param string $finalMobileUrl
   */
  public function setFinalMobileUrl($finalMobileUrl)
  {
    $this->finalMobileUrl = $finalMobileUrl;
  }
  /**
   * @return string
   */
  public function getFinalMobileUrl()
  {
    return $this->finalMobileUrl;
  }
  /**
   * Required. The URL address of the webpage that people reach after they click
   * the ad.
   *
   * @param string $finalUrl
   */
  public function setFinalUrl($finalUrl)
  {
    $this->finalUrl = $finalUrl;
  }
  /**
   * @return string
   */
  public function getFinalUrl()
  {
    return $this->finalUrl;
  }
  /**
   * Optional. The suffix to append to landing page URLs.
   *
   * @param string $finalUrlSuffix
   */
  public function setFinalUrlSuffix($finalUrlSuffix)
  {
    $this->finalUrlSuffix = $finalUrlSuffix;
  }
  /**
   * @return string
   */
  public function getFinalUrlSuffix()
  {
    return $this->finalUrlSuffix;
  }
  /**
   * Required. The list of headlines shown on the ad.
   *
   * @param string[] $headlines
   */
  public function setHeadlines($headlines)
  {
    $this->headlines = $headlines;
  }
  /**
   * @return string[]
   */
  public function getHeadlines()
  {
    return $this->headlines;
  }
  /**
   * The list of logo images shown on the ad.
   *
   * @param ImageAsset[] $logoImages
   */
  public function setLogoImages($logoImages)
  {
    $this->logoImages = $logoImages;
  }
  /**
   * @return ImageAsset[]
   */
  public function getLogoImages()
  {
    return $this->logoImages;
  }
  /**
   * The list of marketing images shown on the ad.
   *
   * @param ImageAsset[] $marketingImages
   */
  public function setMarketingImages($marketingImages)
  {
    $this->marketingImages = $marketingImages;
  }
  /**
   * @return ImageAsset[]
   */
  public function getMarketingImages()
  {
    return $this->marketingImages;
  }
  /**
   * The list of portrait marketing images shown on the ad.
   *
   * @param ImageAsset[] $portraitMarketingImages
   */
  public function setPortraitMarketingImages($portraitMarketingImages)
  {
    $this->portraitMarketingImages = $portraitMarketingImages;
  }
  /**
   * @return ImageAsset[]
   */
  public function getPortraitMarketingImages()
  {
    return $this->portraitMarketingImages;
  }
  /**
   * The list of square marketing images shown on the ad.
   *
   * @param ImageAsset[] $squareMarketingImages
   */
  public function setSquareMarketingImages($squareMarketingImages)
  {
    $this->squareMarketingImages = $squareMarketingImages;
  }
  /**
   * @return ImageAsset[]
   */
  public function getSquareMarketingImages()
  {
    return $this->squareMarketingImages;
  }
  /**
   * Output only. The URL address loaded in the background for tracking
   * purposes.
   *
   * @param string $trackingUrl
   */
  public function setTrackingUrl($trackingUrl)
  {
    $this->trackingUrl = $trackingUrl;
  }
  /**
   * @return string
   */
  public function getTrackingUrl()
  {
    return $this->trackingUrl;
  }
  /**
   * Optional. The tracking URL specified by the user manually.
   *
   * @param string $userSpecifiedTrackingUrl
   */
  public function setUserSpecifiedTrackingUrl($userSpecifiedTrackingUrl)
  {
    $this->userSpecifiedTrackingUrl = $userSpecifiedTrackingUrl;
  }
  /**
   * @return string
   */
  public function getUserSpecifiedTrackingUrl()
  {
    return $this->userSpecifiedTrackingUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DemandGenImageAd::class, 'Google_Service_DisplayVideo_DemandGenImageAd');
