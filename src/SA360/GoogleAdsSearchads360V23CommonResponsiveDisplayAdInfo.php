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

class GoogleAdsSearchads360V23CommonResponsiveDisplayAdInfo extends \Google\Collection
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
  protected $collection_key = 'youtubeVideos';
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
   * The advertiser/brand name. Maximum display width is 25.
   *
   * @var string
   */
  public $businessName;
  /**
   * The call-to-action text for the ad. Maximum display width is 30.
   *
   * @var string
   */
  public $callToActionText;
  protected $controlSpecType = GoogleAdsSearchads360V23CommonResponsiveDisplayAdControlSpec::class;
  protected $controlSpecDataType = '';
  protected $descriptionsType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $descriptionsDataType = 'array';
  /**
   * Specifies which format the ad will be served in. Default is ALL_FORMATS.
   *
   * @var string
   */
  public $formatSetting;
  protected $headlinesType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $headlinesDataType = 'array';
  protected $logoImagesType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $logoImagesDataType = 'array';
  protected $longHeadlineType = GoogleAdsSearchads360V23CommonAdTextAsset::class;
  protected $longHeadlineDataType = '';
  /**
   * The main color of the ad in hexadecimal, for example, #ffffff for white. If
   * one of `main_color` and `accent_color` is set, the other is required as
   * well.
   *
   * @var string
   */
  public $mainColor;
  protected $marketingImagesType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $marketingImagesDataType = 'array';
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
  protected $squareLogoImagesType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $squareLogoImagesDataType = 'array';
  protected $squareMarketingImagesType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $squareMarketingImagesDataType = 'array';
  protected $youtubeVideosType = GoogleAdsSearchads360V23CommonAdVideoAsset::class;
  protected $youtubeVideosDataType = 'array';

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
   * The advertiser/brand name. Maximum display width is 25.
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
   * The call-to-action text for the ad. Maximum display width is 30.
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
   * Specification for various creative controls.
   *
   * @param GoogleAdsSearchads360V23CommonResponsiveDisplayAdControlSpec $controlSpec
   */
  public function setControlSpec(GoogleAdsSearchads360V23CommonResponsiveDisplayAdControlSpec $controlSpec)
  {
    $this->controlSpec = $controlSpec;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonResponsiveDisplayAdControlSpec
   */
  public function getControlSpec()
  {
    return $this->controlSpec;
  }
  /**
   * Descriptive texts for the ad. The maximum length is 90 characters. At least
   * 1 and max 5 headlines can be specified.
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
   * Short format headlines for the ad. The maximum length is 30 characters. At
   * least 1 and max 5 headlines can be specified.
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
   * Logo images to be used in the ad. Valid image types are GIF, JPEG, and PNG.
   * The minimum size is 512x128 and the aspect ratio must be 4:1 (+-1%).
   * Combined with `square_logo_images`, the maximum is 5.
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
   * A required long format headline. The maximum length is 90 characters.
   *
   * @param GoogleAdsSearchads360V23CommonAdTextAsset $longHeadline
   */
  public function setLongHeadline(GoogleAdsSearchads360V23CommonAdTextAsset $longHeadline)
  {
    $this->longHeadline = $longHeadline;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdTextAsset
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
   * Marketing images to be used in the ad. Valid image types are GIF, JPEG, and
   * PNG. The minimum size is 600x314 and the aspect ratio must be 1.91:1
   * (+-1%). At least one `marketing_image` is required. Combined with
   * `square_marketing_images`, the maximum is 15.
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
   * Square logo images to be used in the ad. Valid image types are GIF, JPEG,
   * and PNG. The minimum size is 128x128 and the aspect ratio must be 1:1
   * (+-1%). Combined with `logo_images`, the maximum is 5.
   *
   * @param GoogleAdsSearchads360V23CommonAdImageAsset[] $squareLogoImages
   */
  public function setSquareLogoImages($squareLogoImages)
  {
    $this->squareLogoImages = $squareLogoImages;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdImageAsset[]
   */
  public function getSquareLogoImages()
  {
    return $this->squareLogoImages;
  }
  /**
   * Square marketing images to be used in the ad. Valid image types are GIF,
   * JPEG, and PNG. The minimum size is 300x300 and the aspect ratio must be 1:1
   * (+-1%). At least one square `marketing_image` is required. Combined with
   * `marketing_images`, the maximum is 15.
   *
   * @param GoogleAdsSearchads360V23CommonAdImageAsset[] $squareMarketingImages
   */
  public function setSquareMarketingImages($squareMarketingImages)
  {
    $this->squareMarketingImages = $squareMarketingImages;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdImageAsset[]
   */
  public function getSquareMarketingImages()
  {
    return $this->squareMarketingImages;
  }
  /**
   * Optional YouTube videos for the ad. A maximum of 5 videos can be specified.
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
class_alias(GoogleAdsSearchads360V23CommonResponsiveDisplayAdInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonResponsiveDisplayAdInfo');
