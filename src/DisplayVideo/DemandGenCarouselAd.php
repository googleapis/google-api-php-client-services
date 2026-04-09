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

class DemandGenCarouselAd extends \Google\Collection
{
  protected $collection_key = 'cards';
  /**
   * Required. The business name shown on the ad.
   *
   * @var string
   */
  public $businessName;
  protected $cardsType = CarouselCard::class;
  protected $cardsDataType = 'array';
  /**
   * Optional. The custom parameters and accompanying values to add to the
   * tracking URL.
   *
   * @var string[]
   */
  public $customParameters;
  /**
   * Required. The description of the ad.
   *
   * @var string
   */
  public $description;
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
   * Required. The headline of the ad.
   *
   * @var string
   */
  public $headline;
  protected $logoType = ImageAsset::class;
  protected $logoDataType = '';
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
   * Required. The list of cards shown on the ad.
   *
   * @param CarouselCard[] $cards
   */
  public function setCards($cards)
  {
    $this->cards = $cards;
  }
  /**
   * @return CarouselCard[]
   */
  public function getCards()
  {
    return $this->cards;
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
   * Required. The description of the ad.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
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
   * Required. The headline of the ad.
   *
   * @param string $headline
   */
  public function setHeadline($headline)
  {
    $this->headline = $headline;
  }
  /**
   * @return string
   */
  public function getHeadline()
  {
    return $this->headline;
  }
  /**
   * Required. The logo image used by this ad.
   *
   * @param ImageAsset $logo
   */
  public function setLogo(ImageAsset $logo)
  {
    $this->logo = $logo;
  }
  /**
   * @return ImageAsset
   */
  public function getLogo()
  {
    return $this->logo;
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
class_alias(DemandGenCarouselAd::class, 'Google_Service_DisplayVideo_DemandGenCarouselAd');
