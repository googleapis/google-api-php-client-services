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

class GoogleAdsSearchads360V23ResourcesMediaFile extends \Google\Model
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
   * The media type has not been specified.
   */
  public const TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received value is not known in this version. This is a response-only
   * value.
   */
  public const TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * Static image, used for image ad.
   */
  public const TYPE_IMAGE = 'IMAGE';
  /**
   * Small image, used for map ad.
   */
  public const TYPE_ICON = 'ICON';
  /**
   * ZIP file, used in fields of template ads.
   */
  public const TYPE_MEDIA_BUNDLE = 'MEDIA_BUNDLE';
  /**
   * Audio file.
   */
  public const TYPE_AUDIO = 'AUDIO';
  /**
   * Video file.
   */
  public const TYPE_VIDEO = 'VIDEO';
  /**
   * Animated image, such as animated GIF.
   */
  public const TYPE_DYNAMIC_IMAGE = 'DYNAMIC_IMAGE';
  protected $audioType = GoogleAdsSearchads360V23ResourcesMediaAudio::class;
  protected $audioDataType = '';
  /**
   * Output only. The size of the media file in bytes.
   *
   * @var string
   */
  public $fileSize;
  /**
   * Output only. The ID of the media file.
   *
   * @var string
   */
  public $id;
  protected $imageType = GoogleAdsSearchads360V23ResourcesMediaImage::class;
  protected $imageDataType = '';
  protected $mediaBundleType = GoogleAdsSearchads360V23ResourcesMediaBundle::class;
  protected $mediaBundleDataType = '';
  /**
   * Output only. The mime type of the media file.
   *
   * @var string
   */
  public $mimeType;
  /**
   * Immutable. The name of the media file. The name can be used by clients to
   * help identify previously uploaded media.
   *
   * @var string
   */
  public $name;
  /**
   * Immutable. The resource name of the media file. Media file resource names
   * have the form: `customers/{customer_id}/mediaFiles/{media_file_id}`
   *
   * @var string
   */
  public $resourceName;
  /**
   * Immutable. The URL of where the original media file was downloaded from (or
   * a file name). Only used for media of type AUDIO and IMAGE.
   *
   * @var string
   */
  public $sourceUrl;
  /**
   * Immutable. Type of the media file.
   *
   * @var string
   */
  public $type;
  protected $videoType = GoogleAdsSearchads360V23ResourcesMediaVideo::class;
  protected $videoDataType = '';

  /**
   * Output only. Encapsulates an Audio.
   *
   * @param GoogleAdsSearchads360V23ResourcesMediaAudio $audio
   */
  public function setAudio(GoogleAdsSearchads360V23ResourcesMediaAudio $audio)
  {
    $this->audio = $audio;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesMediaAudio
   */
  public function getAudio()
  {
    return $this->audio;
  }
  /**
   * Output only. The size of the media file in bytes.
   *
   * @param string $fileSize
   */
  public function setFileSize($fileSize)
  {
    $this->fileSize = $fileSize;
  }
  /**
   * @return string
   */
  public function getFileSize()
  {
    return $this->fileSize;
  }
  /**
   * Output only. The ID of the media file.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Immutable. Encapsulates an Image.
   *
   * @param GoogleAdsSearchads360V23ResourcesMediaImage $image
   */
  public function setImage(GoogleAdsSearchads360V23ResourcesMediaImage $image)
  {
    $this->image = $image;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesMediaImage
   */
  public function getImage()
  {
    return $this->image;
  }
  /**
   * Immutable. A ZIP archive media the content of which contains HTML5 assets.
   *
   * @param GoogleAdsSearchads360V23ResourcesMediaBundle $mediaBundle
   */
  public function setMediaBundle(GoogleAdsSearchads360V23ResourcesMediaBundle $mediaBundle)
  {
    $this->mediaBundle = $mediaBundle;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesMediaBundle
   */
  public function getMediaBundle()
  {
    return $this->mediaBundle;
  }
  /**
   * Output only. The mime type of the media file.
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
   * Immutable. The name of the media file. The name can be used by clients to
   * help identify previously uploaded media.
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
   * Immutable. The resource name of the media file. Media file resource names
   * have the form: `customers/{customer_id}/mediaFiles/{media_file_id}`
   *
   * @param string $resourceName
   */
  public function setResourceName($resourceName)
  {
    $this->resourceName = $resourceName;
  }
  /**
   * @return string
   */
  public function getResourceName()
  {
    return $this->resourceName;
  }
  /**
   * Immutable. The URL of where the original media file was downloaded from (or
   * a file name). Only used for media of type AUDIO and IMAGE.
   *
   * @param string $sourceUrl
   */
  public function setSourceUrl($sourceUrl)
  {
    $this->sourceUrl = $sourceUrl;
  }
  /**
   * @return string
   */
  public function getSourceUrl()
  {
    return $this->sourceUrl;
  }
  /**
   * Immutable. Type of the media file.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, IMAGE, ICON, MEDIA_BUNDLE, AUDIO,
   * VIDEO, DYNAMIC_IMAGE
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Immutable. Encapsulates a Video.
   *
   * @param GoogleAdsSearchads360V23ResourcesMediaVideo $video
   */
  public function setVideo(GoogleAdsSearchads360V23ResourcesMediaVideo $video)
  {
    $this->video = $video;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesMediaVideo
   */
  public function getVideo()
  {
    return $this->video;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesMediaFile::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesMediaFile');
