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

class GoogleAdsSearchads360V23CommonImageAdInfo extends \Google\Model
{
  /**
   * The mime type has not been specified.
   */
  public const MIME_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const MIME_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * MIME type of image/jpeg.
   */
  public const MIME_TYPE_IMAGE_JPEG = 'IMAGE_JPEG';
  /**
   * MIME type of image/gif.
   */
  public const MIME_TYPE_IMAGE_GIF = 'IMAGE_GIF';
  /**
   * MIME type of image/png.
   */
  public const MIME_TYPE_IMAGE_PNG = 'IMAGE_PNG';
  /**
   * MIME type of application/x-shockwave-flash.
   */
  public const MIME_TYPE_FLASH = 'FLASH';
  /**
   * MIME type of text/html.
   */
  public const MIME_TYPE_TEXT_HTML = 'TEXT_HTML';
  /**
   * MIME type of application/pdf.
   */
  public const MIME_TYPE_PDF = 'PDF';
  /**
   * MIME type of application/msword.
   */
  public const MIME_TYPE_MSWORD = 'MSWORD';
  /**
   * MIME type of application/vnd.ms-excel.
   */
  public const MIME_TYPE_MSEXCEL = 'MSEXCEL';
  /**
   * MIME type of application/rtf.
   */
  public const MIME_TYPE_RTF = 'RTF';
  /**
   * MIME type of audio/wav.
   */
  public const MIME_TYPE_AUDIO_WAV = 'AUDIO_WAV';
  /**
   * MIME type of audio/mp3.
   */
  public const MIME_TYPE_AUDIO_MP3 = 'AUDIO_MP3';
  /**
   * MIME type of application/x-html5-ad-zip.
   */
  public const MIME_TYPE_HTML5_AD_ZIP = 'HTML5_AD_ZIP';
  /**
   * An ad ID to copy the image from.
   *
   * @var string
   */
  public $adIdToCopyImageFrom;
  /**
   * Raw image data as bytes.
   *
   * @var string
   */
  public $data;
  protected $imageAssetType = GoogleAdsSearchads360V23CommonAdImageAsset::class;
  protected $imageAssetDataType = '';
  /**
   * URL of the full size image.
   *
   * @var string
   */
  public $imageUrl;
  /**
   * The mime type of the image.
   *
   * @var string
   */
  public $mimeType;
  /**
   * The name of the image. If the image was created from a MediaFile, this is
   * the MediaFile's name. If the image was created from bytes, this is empty.
   *
   * @var string
   */
  public $name;
  /**
   * Height in pixels of the full size image.
   *
   * @var string
   */
  public $pixelHeight;
  /**
   * Width in pixels of the full size image.
   *
   * @var string
   */
  public $pixelWidth;
  /**
   * URL of the preview size image.
   *
   * @var string
   */
  public $previewImageUrl;
  /**
   * Height in pixels of the preview size image.
   *
   * @var string
   */
  public $previewPixelHeight;
  /**
   * Width in pixels of the preview size image.
   *
   * @var string
   */
  public $previewPixelWidth;

  /**
   * An ad ID to copy the image from.
   *
   * @param string $adIdToCopyImageFrom
   */
  public function setAdIdToCopyImageFrom($adIdToCopyImageFrom)
  {
    $this->adIdToCopyImageFrom = $adIdToCopyImageFrom;
  }
  /**
   * @return string
   */
  public function getAdIdToCopyImageFrom()
  {
    return $this->adIdToCopyImageFrom;
  }
  /**
   * Raw image data as bytes.
   *
   * @param string $data
   */
  public function setData($data)
  {
    $this->data = $data;
  }
  /**
   * @return string
   */
  public function getData()
  {
    return $this->data;
  }
  /**
   * The image assets used for the ad.
   *
   * @param GoogleAdsSearchads360V23CommonAdImageAsset $imageAsset
   */
  public function setImageAsset(GoogleAdsSearchads360V23CommonAdImageAsset $imageAsset)
  {
    $this->imageAsset = $imageAsset;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdImageAsset
   */
  public function getImageAsset()
  {
    return $this->imageAsset;
  }
  /**
   * URL of the full size image.
   *
   * @param string $imageUrl
   */
  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }
  /**
   * @return string
   */
  public function getImageUrl()
  {
    return $this->imageUrl;
  }
  /**
   * The mime type of the image.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, IMAGE_JPEG, IMAGE_GIF, IMAGE_PNG,
   * FLASH, TEXT_HTML, PDF, MSWORD, MSEXCEL, RTF, AUDIO_WAV, AUDIO_MP3,
   * HTML5_AD_ZIP
   *
   * @param self::MIME_TYPE_* $mimeType
   */
  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }
  /**
   * @return self::MIME_TYPE_*
   */
  public function getMimeType()
  {
    return $this->mimeType;
  }
  /**
   * The name of the image. If the image was created from a MediaFile, this is
   * the MediaFile's name. If the image was created from bytes, this is empty.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Height in pixels of the full size image.
   *
   * @param string $pixelHeight
   */
  public function setPixelHeight($pixelHeight)
  {
    $this->pixelHeight = $pixelHeight;
  }
  /**
   * @return string
   */
  public function getPixelHeight()
  {
    return $this->pixelHeight;
  }
  /**
   * Width in pixels of the full size image.
   *
   * @param string $pixelWidth
   */
  public function setPixelWidth($pixelWidth)
  {
    $this->pixelWidth = $pixelWidth;
  }
  /**
   * @return string
   */
  public function getPixelWidth()
  {
    return $this->pixelWidth;
  }
  /**
   * URL of the preview size image.
   *
   * @param string $previewImageUrl
   */
  public function setPreviewImageUrl($previewImageUrl)
  {
    $this->previewImageUrl = $previewImageUrl;
  }
  /**
   * @return string
   */
  public function getPreviewImageUrl()
  {
    return $this->previewImageUrl;
  }
  /**
   * Height in pixels of the preview size image.
   *
   * @param string $previewPixelHeight
   */
  public function setPreviewPixelHeight($previewPixelHeight)
  {
    $this->previewPixelHeight = $previewPixelHeight;
  }
  /**
   * @return string
   */
  public function getPreviewPixelHeight()
  {
    return $this->previewPixelHeight;
  }
  /**
   * Width in pixels of the preview size image.
   *
   * @param string $previewPixelWidth
   */
  public function setPreviewPixelWidth($previewPixelWidth)
  {
    $this->previewPixelWidth = $previewPixelWidth;
  }
  /**
   * @return string
   */
  public function getPreviewPixelWidth()
  {
    return $this->previewPixelWidth;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonImageAdInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonImageAdInfo');
