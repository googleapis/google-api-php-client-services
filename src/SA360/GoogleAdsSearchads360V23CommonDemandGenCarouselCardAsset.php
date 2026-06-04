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

class GoogleAdsSearchads360V23CommonDemandGenCarouselCardAsset extends \Google\Model
{
  /**
   * Call to action text.
   *
   * @var string
   */
  public $callToActionText;
  /**
   * Required. Headline of the carousel card.
   *
   * @var string
   */
  public $headline;
  /**
   * Asset resource name of the associated 1.91:1 marketing image. This and/or
   * square marketing image asset is required.
   *
   * @var string
   */
  public $marketingImageAsset;
  /**
   * Asset resource name of the associated 4:5 portrait marketing image.
   *
   * @var string
   */
  public $portraitMarketingImageAsset;
  /**
   * Asset resource name of the associated square marketing image. This and/or a
   * marketing image asset is required.
   *
   * @var string
   */
  public $squareMarketingImageAsset;

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
   * Required. Headline of the carousel card.
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
   * Asset resource name of the associated 1.91:1 marketing image. This and/or
   * square marketing image asset is required.
   *
   * @param string $marketingImageAsset
   */
  public function setMarketingImageAsset($marketingImageAsset)
  {
    $this->marketingImageAsset = $marketingImageAsset;
  }
  /**
   * @return string
   */
  public function getMarketingImageAsset()
  {
    return $this->marketingImageAsset;
  }
  /**
   * Asset resource name of the associated 4:5 portrait marketing image.
   *
   * @param string $portraitMarketingImageAsset
   */
  public function setPortraitMarketingImageAsset($portraitMarketingImageAsset)
  {
    $this->portraitMarketingImageAsset = $portraitMarketingImageAsset;
  }
  /**
   * @return string
   */
  public function getPortraitMarketingImageAsset()
  {
    return $this->portraitMarketingImageAsset;
  }
  /**
   * Asset resource name of the associated square marketing image. This and/or a
   * marketing image asset is required.
   *
   * @param string $squareMarketingImageAsset
   */
  public function setSquareMarketingImageAsset($squareMarketingImageAsset)
  {
    $this->squareMarketingImageAsset = $squareMarketingImageAsset;
  }
  /**
   * @return string
   */
  public function getSquareMarketingImageAsset()
  {
    return $this->squareMarketingImageAsset;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonDemandGenCarouselCardAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonDemandGenCarouselCardAsset');
