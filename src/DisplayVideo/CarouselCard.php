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

class CarouselCard extends \Google\Model
{
  /**
   * Required. The text on the call-to-action button shown on the card. Must use
   * 10 characters or less.
   *
   * @var string
   */
  public $callToAction;
  /**
   * Optional. The URL address of the webpage that people reach after they click
   * the card on a mobile device.
   *
   * @var string
   */
  public $finalMobileUrl;
  /**
   * Required. The URL address of the webpage that people reach after they click
   * the card.
   *
   * @var string
   */
  public $finalUrl;
  /**
   * Required. The headline of the card.
   *
   * @var string
   */
  public $headline;
  protected $marketingImageType = ImageAsset::class;
  protected $marketingImageDataType = '';
  protected $portraitMarketingImageType = ImageAsset::class;
  protected $portraitMarketingImageDataType = '';
  protected $squareMarketingImageType = ImageAsset::class;
  protected $squareMarketingImageDataType = '';

  /**
   * Required. The text on the call-to-action button shown on the card. Must use
   * 10 characters or less.
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
   * Optional. The URL address of the webpage that people reach after they click
   * the card on a mobile device.
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
   * the card.
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
   * Required. The headline of the card.
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
   * Optional. The marketing image shown on the card.
   *
   * @param ImageAsset $marketingImage
   */
  public function setMarketingImage(ImageAsset $marketingImage)
  {
    $this->marketingImage = $marketingImage;
  }
  /**
   * @return ImageAsset
   */
  public function getMarketingImage()
  {
    return $this->marketingImage;
  }
  /**
   * Optional. The portrait marketing image shown on the card.
   *
   * @param ImageAsset $portraitMarketingImage
   */
  public function setPortraitMarketingImage(ImageAsset $portraitMarketingImage)
  {
    $this->portraitMarketingImage = $portraitMarketingImage;
  }
  /**
   * @return ImageAsset
   */
  public function getPortraitMarketingImage()
  {
    return $this->portraitMarketingImage;
  }
  /**
   * Optional. The square marketing image shown on the card.
   *
   * @param ImageAsset $squareMarketingImage
   */
  public function setSquareMarketingImage(ImageAsset $squareMarketingImage)
  {
    $this->squareMarketingImage = $squareMarketingImage;
  }
  /**
   * @return ImageAsset
   */
  public function getSquareMarketingImage()
  {
    return $this->squareMarketingImage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CarouselCard::class, 'Google_Service_DisplayVideo_CarouselCard');
