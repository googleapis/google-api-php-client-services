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

class GoogleAdsSearchads360V23CommonDemandGenCarouselAdInfo extends \Google\Collection
{
  protected $collection_key = 'carouselCards';
  /**
   * Required. The Advertiser/brand name.
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
  protected $carouselCardsType = GoogleAdsSearchads360V23CommonAdDemandGenCarouselCardAsset::class;
  protected $carouselCardsDataType = 'array';
  protected $descriptionType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $descriptionDataType = '';
  protected $headlineType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $headlineDataType = '';
  protected $logoImageType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $logoImageDataType = '';

  /**
   * Required. The Advertiser/brand name.
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
   * Required. Carousel cards that will display with the ad. Min 2 max 10.
   *
   * @param GoogleAdsSearchads360V23CommonAdDemandGenCarouselCardAsset[] $carouselCards
   */
  public function setCarouselCards($carouselCards)
  {
    $this->carouselCards = $carouselCards;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdDemandGenCarouselCardAsset[]
   */
  public function getCarouselCards()
  {
    return $this->carouselCards;
  }
  /**
   * Required. The descriptive text of the ad.
   *
   * @param GoogleAdsSearchads360V23CommonAdTextAsset $description
   */
  public function setDescription(GoogleAdsSearchads360V23CommonAdTextAsset $description)
  {
    $this->description = $description;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdTextAsset
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Required. Headline of the ad.
   *
   * @param GoogleAdsSearchads360V23CommonAdTextAsset $headline
   */
  public function setHeadline(GoogleAdsSearchads360V23CommonAdTextAsset $headline)
  {
    $this->headline = $headline;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdTextAsset
   */
  public function getHeadline()
  {
    return $this->headline;
  }
  /**
   * Required. Logo image to be used in the ad. The minimum size is 128x128 and
   * the aspect ratio must be 1:1 (+-1%).
   *
   * @param GoogleAdsSearchads360V23CommonAdImageAsset $logoImage
   */
  public function setLogoImage(GoogleAdsSearchads360V23CommonAdImageAsset $logoImage)
  {
    $this->logoImage = $logoImage;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdImageAsset
   */
  public function getLogoImage()
  {
    return $this->logoImage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonDemandGenCarouselAdInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonDemandGenCarouselAdInfo');
