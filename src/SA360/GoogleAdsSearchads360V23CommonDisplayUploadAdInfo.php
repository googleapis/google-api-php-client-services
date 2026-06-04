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

class GoogleAdsSearchads360V23CommonDisplayUploadAdInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const DISPLAY_UPLOAD_PRODUCT_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The value is unknown in this version.
   */
  public const DISPLAY_UPLOAD_PRODUCT_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * HTML5 upload ad. This product type requires the upload_media_bundle field
   * in DisplayUploadAdInfo to be set.
   */
  public const DISPLAY_UPLOAD_PRODUCT_TYPE_HTML5_UPLOAD_AD = 'HTML5_UPLOAD_AD';
  /**
   * Dynamic HTML5 education ad. This product type requires the
   * upload_media_bundle field in DisplayUploadAdInfo to be set. Can only be
   * used in an education campaign.
   */
  public const DISPLAY_UPLOAD_PRODUCT_TYPE_DYNAMIC_HTML5_EDUCATION_AD = 'DYNAMIC_HTML5_EDUCATION_AD';
  /**
   * Dynamic HTML5 flight ad. This product type requires the upload_media_bundle
   * field in DisplayUploadAdInfo to be set. Can only be used in a flight
   * campaign.
   */
  public const DISPLAY_UPLOAD_PRODUCT_TYPE_DYNAMIC_HTML5_FLIGHT_AD = 'DYNAMIC_HTML5_FLIGHT_AD';
  /**
   * Dynamic HTML5 hotel and rental ad. This product type requires the
   * upload_media_bundle field in DisplayUploadAdInfo to be set. Can only be
   * used in a hotel campaign.
   */
  public const DISPLAY_UPLOAD_PRODUCT_TYPE_DYNAMIC_HTML5_HOTEL_RENTAL_AD = 'DYNAMIC_HTML5_HOTEL_RENTAL_AD';
  /**
   * Dynamic HTML5 job ad. This product type requires the upload_media_bundle
   * field in DisplayUploadAdInfo to be set. Can only be used in a job campaign.
   */
  public const DISPLAY_UPLOAD_PRODUCT_TYPE_DYNAMIC_HTML5_JOB_AD = 'DYNAMIC_HTML5_JOB_AD';
  /**
   * Dynamic HTML5 local ad. This product type requires the upload_media_bundle
   * field in DisplayUploadAdInfo to be set. Can only be used in a local
   * campaign.
   */
  public const DISPLAY_UPLOAD_PRODUCT_TYPE_DYNAMIC_HTML5_LOCAL_AD = 'DYNAMIC_HTML5_LOCAL_AD';
  /**
   * Dynamic HTML5 real estate ad. This product type requires the
   * upload_media_bundle field in DisplayUploadAdInfo to be set. Can only be
   * used in a real estate campaign.
   */
  public const DISPLAY_UPLOAD_PRODUCT_TYPE_DYNAMIC_HTML5_REAL_ESTATE_AD = 'DYNAMIC_HTML5_REAL_ESTATE_AD';
  /**
   * Dynamic HTML5 custom ad. This product type requires the upload_media_bundle
   * field in DisplayUploadAdInfo to be set. Can only be used in a custom
   * campaign.
   */
  public const DISPLAY_UPLOAD_PRODUCT_TYPE_DYNAMIC_HTML5_CUSTOM_AD = 'DYNAMIC_HTML5_CUSTOM_AD';
  /**
   * Dynamic HTML5 travel ad. This product type requires the upload_media_bundle
   * field in DisplayUploadAdInfo to be set. Can only be used in a travel
   * campaign.
   */
  public const DISPLAY_UPLOAD_PRODUCT_TYPE_DYNAMIC_HTML5_TRAVEL_AD = 'DYNAMIC_HTML5_TRAVEL_AD';
  /**
   * Dynamic HTML5 hotel ad. This product type requires the upload_media_bundle
   * field in DisplayUploadAdInfo to be set. Can only be used in a hotel
   * campaign.
   */
  public const DISPLAY_UPLOAD_PRODUCT_TYPE_DYNAMIC_HTML5_HOTEL_AD = 'DYNAMIC_HTML5_HOTEL_AD';
  /**
   * The product type of this ad. See comments on the enum for details.
   *
   * @var string
   */
  public $displayUploadProductType;
  protected $mediaBundleType = GoogleAdsSearchads360V23CommonAdMediaBundleAsset::class;
  protected $mediaBundleDataType = '';

  /**
   * The product type of this ad. See comments on the enum for details.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, HTML5_UPLOAD_AD,
   * DYNAMIC_HTML5_EDUCATION_AD, DYNAMIC_HTML5_FLIGHT_AD,
   * DYNAMIC_HTML5_HOTEL_RENTAL_AD, DYNAMIC_HTML5_JOB_AD,
   * DYNAMIC_HTML5_LOCAL_AD, DYNAMIC_HTML5_REAL_ESTATE_AD,
   * DYNAMIC_HTML5_CUSTOM_AD, DYNAMIC_HTML5_TRAVEL_AD, DYNAMIC_HTML5_HOTEL_AD
   *
   * @param self::DISPLAY_UPLOAD_PRODUCT_TYPE_* $displayUploadProductType
   */
  public function setDisplayUploadProductType($displayUploadProductType)
  {
    $this->displayUploadProductType = $displayUploadProductType;
  }
  /**
   * @return self::DISPLAY_UPLOAD_PRODUCT_TYPE_*
   */
  public function getDisplayUploadProductType()
  {
    return $this->displayUploadProductType;
  }
  /**
   * A media bundle asset to be used in the ad. For information about the media
   * bundle for HTML5_UPLOAD_AD, see https://support.google.com/google-
   * ads/answer/1722096 Media bundles that are part of dynamic product types use
   * a special format that needs to be created through the Google Web Designer.
   * See https://support.google.com/webdesigner/answer/7543898 for more
   * information.
   *
   * @param GoogleAdsSearchads360V23CommonAdMediaBundleAsset $mediaBundle
   */
  public function setMediaBundle(GoogleAdsSearchads360V23CommonAdMediaBundleAsset $mediaBundle)
  {
    $this->mediaBundle = $mediaBundle;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAdMediaBundleAsset
   */
  public function getMediaBundle()
  {
    return $this->mediaBundle;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonDisplayUploadAdInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonDisplayUploadAdInfo');
