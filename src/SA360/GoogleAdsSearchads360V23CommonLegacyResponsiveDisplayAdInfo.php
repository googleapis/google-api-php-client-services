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

class GoogleAdsSearchads360V23CommonLegacyResponsiveDisplayAdInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const FORMAT_SETTING_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const FORMAT_SETTING_UNKNOWN = 'UNKNOWN';
  /**
   * Text, image and native formats.
   */
  public const FORMAT_SETTING_ALL_FORMATS = 'ALL_FORMATS';
  /**
   * Text and image formats.
   */
  public const FORMAT_SETTING_NON_NATIVE = 'NON_NATIVE';
  /**
   * Native format, for example, the format rendering is controlled by the
   * publisher and not by Google.
   */
  public const FORMAT_SETTING_NATIVE = 'NATIVE';
  /**
   * The accent color of the ad in hexadecimal, for example, #ffffff for white.
   * If one of `main_color` and `accent_color` is set, the other is required as
   * well.
   *
   * @var string
   */
  public $accentColor;
  /**
   * Advertiser's consent to allow flexible color. When true, the ad may be
   * served with different color if necessary. When false, the ad will be served
   * with the specified colors or a neutral color. The default value is `true`.
   * Must be true if `main_color` and `accent_color` are not set.
   *
   * @var bool
   */
  public $allowFlexibleColor;
  /**
   * The business name in the ad.
   *
   * @var string
   */
  public $businessName;
  /**
   * The call-to-action text for the ad.
   *
   * @var string
   */
  public $callToActionText;
  /**
   * The description of the ad.
   *
   * @var string
   */
  public $description;
  /**
   * Specifies which format the ad will be served in. Default is ALL_FORMATS.
   *
   * @var string
   */
  public $formatSetting;
  /**
   * The MediaFile resource name of the logo image used in the ad.
   *
   * @var string
   */
  public $logoImage;
  /**
   * The long version of the ad's headline.
   *
   * @var string
   */
  public $longHeadline;
  /**
   * The main color of the ad in hexadecimal, for example, #ffffff for white. If
   * one of `main_color` and `accent_color` is set, the other is required as
   * well.
   *
   * @var string
   */
  public $mainColor;
  /**
   * The MediaFile resource name of the marketing image used in the ad.
   *
   * @var string
   */
  public $marketingImage;
  /**
   * Prefix before price. For example, 'as low as'.
   *
   * @var string
   */
  public $pricePrefix;
  /**
   * Promotion text used for dynamic formats of responsive ads. For example
   * 'Free two-day shipping'.
   *
   * @var string
   */
  public $promoText;
  /**
   * The short version of the ad's headline.
   *
   * @var string
   */
  public $shortHeadline;
  /**
   * The MediaFile resource name of the square logo image used in the ad.
   *
   * @var string
   */
  public $squareLogoImage;
  /**
   * The MediaFile resource name of the square marketing image used in the ad.
   *
   * @var string
   */
  public $squareMarketingImage;

  /**
   * The accent color of the ad in hexadecimal, for example, #ffffff for white.
   * If one of `main_color` and `accent_color` is set, the other is required as
   * well.
   *
   * @param string $accentColor
   */
  public function setAccentColor($accentColor)
  {
    $this->accentColor = $accentColor;
  }
  /**
   * @return string
   */
  public function getAccentColor()
  {
    return $this->accentColor;
  }
  /**
   * Advertiser's consent to allow flexible color. When true, the ad may be
   * served with different color if necessary. When false, the ad will be served
   * with the specified colors or a neutral color. The default value is `true`.
   * Must be true if `main_color` and `accent_color` are not set.
   *
   * @param bool $allowFlexibleColor
   */
  public function setAllowFlexibleColor($allowFlexibleColor)
  {
    $this->allowFlexibleColor = $allowFlexibleColor;
  }
  /**
   * @return bool
   */
  public function getAllowFlexibleColor()
  {
    return $this->allowFlexibleColor;
  }
  /**
   * The business name in the ad.
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
   * The call-to-action text for the ad.
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
   * The description of the ad.
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
   * Specifies which format the ad will be served in. Default is ALL_FORMATS.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, ALL_FORMATS, NON_NATIVE, NATIVE
   *
   * @param self::FORMAT_SETTING_* $formatSetting
   */
  public function setFormatSetting($formatSetting)
  {
    $this->formatSetting = $formatSetting;
  }
  /**
   * @return self::FORMAT_SETTING_*
   */
  public function getFormatSetting()
  {
    return $this->formatSetting;
  }
  /**
   * The MediaFile resource name of the logo image used in the ad.
   *
   * @param string $logoImage
   */
  public function setLogoImage($logoImage)
  {
    $this->logoImage = $logoImage;
  }
  /**
   * @return string
   */
  public function getLogoImage()
  {
    return $this->logoImage;
  }
  /**
   * The long version of the ad's headline.
   *
   * @param string $longHeadline
   */
  public function setLongHeadline($longHeadline)
  {
    $this->longHeadline = $longHeadline;
  }
  /**
   * @return string
   */
  public function getLongHeadline()
  {
    return $this->longHeadline;
  }
  /**
   * The main color of the ad in hexadecimal, for example, #ffffff for white. If
   * one of `main_color` and `accent_color` is set, the other is required as
   * well.
   *
   * @param string $mainColor
   */
  public function setMainColor($mainColor)
  {
    $this->mainColor = $mainColor;
  }
  /**
   * @return string
   */
  public function getMainColor()
  {
    return $this->mainColor;
  }
  /**
   * The MediaFile resource name of the marketing image used in the ad.
   *
   * @param string $marketingImage
   */
  public function setMarketingImage($marketingImage)
  {
    $this->marketingImage = $marketingImage;
  }
  /**
   * @return string
   */
  public function getMarketingImage()
  {
    return $this->marketingImage;
  }
  /**
   * Prefix before price. For example, 'as low as'.
   *
   * @param string $pricePrefix
   */
  public function setPricePrefix($pricePrefix)
  {
    $this->pricePrefix = $pricePrefix;
  }
  /**
   * @return string
   */
  public function getPricePrefix()
  {
    return $this->pricePrefix;
  }
  /**
   * Promotion text used for dynamic formats of responsive ads. For example
   * 'Free two-day shipping'.
   *
   * @param string $promoText
   */
  public function setPromoText($promoText)
  {
    $this->promoText = $promoText;
  }
  /**
   * @return string
   */
  public function getPromoText()
  {
    return $this->promoText;
  }
  /**
   * The short version of the ad's headline.
   *
   * @param string $shortHeadline
   */
  public function setShortHeadline($shortHeadline)
  {
    $this->shortHeadline = $shortHeadline;
  }
  /**
   * @return string
   */
  public function getShortHeadline()
  {
    return $this->shortHeadline;
  }
  /**
   * The MediaFile resource name of the square logo image used in the ad.
   *
   * @param string $squareLogoImage
   */
  public function setSquareLogoImage($squareLogoImage)
  {
    $this->squareLogoImage = $squareLogoImage;
  }
  /**
   * @return string
   */
  public function getSquareLogoImage()
  {
    return $this->squareLogoImage;
  }
  /**
   * The MediaFile resource name of the square marketing image used in the ad.
   *
   * @param string $squareMarketingImage
   */
  public function setSquareMarketingImage($squareMarketingImage)
  {
    $this->squareMarketingImage = $squareMarketingImage;
  }
  /**
   * @return string
   */
  public function getSquareMarketingImage()
  {
    return $this->squareMarketingImage;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonLegacyResponsiveDisplayAdInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonLegacyResponsiveDisplayAdInfo');
