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

class GoogleAdsSearchads360V23ResourcesAdGroupVerticalAdsFormatSetting extends \Google\Model
{
  /**
   * If true, text ads will be disabled for this ad group.
   *
   * @var bool
   */
  public $disableTextAds;
  /**
   * If true, booking links will be enabled for this ad group.
   *
   * @var bool
   */
  public $enableBookingLinks;
  /**
   * If true, vertical promotion ads will be enabled for this ad group.
   *
   * @var bool
   */
  public $enableVerticalPromotionAds;

  /**
   * If true, text ads will be disabled for this ad group.
   *
   * @param bool $disableTextAds
   */
  public function setDisableTextAds($disableTextAds)
  {
    $this->disableTextAds = $disableTextAds;
  }
  /**
   * @return bool
   */
  public function getDisableTextAds()
  {
    return $this->disableTextAds;
  }
  /**
   * If true, booking links will be enabled for this ad group.
   *
   * @param bool $enableBookingLinks
   */
  public function setEnableBookingLinks($enableBookingLinks)
  {
    $this->enableBookingLinks = $enableBookingLinks;
  }
  /**
   * @return bool
   */
  public function getEnableBookingLinks()
  {
    return $this->enableBookingLinks;
  }
  /**
   * If true, vertical promotion ads will be enabled for this ad group.
   *
   * @param bool $enableVerticalPromotionAds
   */
  public function setEnableVerticalPromotionAds($enableVerticalPromotionAds)
  {
    $this->enableVerticalPromotionAds = $enableVerticalPromotionAds;
  }
  /**
   * @return bool
   */
  public function getEnableVerticalPromotionAds()
  {
    return $this->enableVerticalPromotionAds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAdGroupVerticalAdsFormatSetting::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAdGroupVerticalAdsFormatSetting');
