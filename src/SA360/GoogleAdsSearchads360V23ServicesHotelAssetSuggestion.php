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

class GoogleAdsSearchads360V23ServicesHotelAssetSuggestion extends \Google\Collection
{
  /**
   * Not specified.
   */
  public const CALL_TO_ACTION_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const CALL_TO_ACTION_UNKNOWN = 'UNKNOWN';
  /**
   * The call to action type is learn more.
   */
  public const CALL_TO_ACTION_LEARN_MORE = 'LEARN_MORE';
  /**
   * The call to action type is get quote.
   */
  public const CALL_TO_ACTION_GET_QUOTE = 'GET_QUOTE';
  /**
   * The call to action type is apply now.
   */
  public const CALL_TO_ACTION_APPLY_NOW = 'APPLY_NOW';
  /**
   * The call to action type is sign up.
   */
  public const CALL_TO_ACTION_SIGN_UP = 'SIGN_UP';
  /**
   * The call to action type is contact us.
   */
  public const CALL_TO_ACTION_CONTACT_US = 'CONTACT_US';
  /**
   * The call to action type is subscribe.
   */
  public const CALL_TO_ACTION_SUBSCRIBE = 'SUBSCRIBE';
  /**
   * The call to action type is download.
   */
  public const CALL_TO_ACTION_DOWNLOAD = 'DOWNLOAD';
  /**
   * The call to action type is book now.
   */
  public const CALL_TO_ACTION_BOOK_NOW = 'BOOK_NOW';
  /**
   * The call to action type is shop now.
   */
  public const CALL_TO_ACTION_SHOP_NOW = 'SHOP_NOW';
  /**
   * The call to action type is buy now.
   */
  public const CALL_TO_ACTION_BUY_NOW = 'BUY_NOW';
  /**
   * The call to action type is donate now.
   */
  public const CALL_TO_ACTION_DONATE_NOW = 'DONATE_NOW';
  /**
   * The call to action type is order now.
   */
  public const CALL_TO_ACTION_ORDER_NOW = 'ORDER_NOW';
  /**
   * The call to action type is play now.
   */
  public const CALL_TO_ACTION_PLAY_NOW = 'PLAY_NOW';
  /**
   * The call to action type is see more.
   */
  public const CALL_TO_ACTION_SEE_MORE = 'SEE_MORE';
  /**
   * The call to action type is start now.
   */
  public const CALL_TO_ACTION_START_NOW = 'START_NOW';
  /**
   * The call to action type is visit site.
   */
  public const CALL_TO_ACTION_VISIT_SITE = 'VISIT_SITE';
  /**
   * The call to action type is watch now.
   */
  public const CALL_TO_ACTION_WATCH_NOW = 'WATCH_NOW';
  /**
   * Enum unspecified.
   */
  public const STATUS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * The received error code is not known in this version.
   */
  public const STATUS_UNKNOWN = 'UNKNOWN';
  /**
   * The hotel asset suggestion was successfully retrieved.
   */
  public const STATUS_SUCCESS = 'SUCCESS';
  /**
   * A hotel look up returns nothing.
   */
  public const STATUS_HOTEL_NOT_FOUND = 'HOTEL_NOT_FOUND';
  /**
   * A Google Places ID is invalid and cannot be decoded.
   */
  public const STATUS_INVALID_PLACE_ID = 'INVALID_PLACE_ID';
  protected $collection_key = 'textAssets';
  /**
   * Call to action type.
   *
   * @var string
   */
  public $callToAction;
  /**
   * Suggested final URL for an AssetGroup.
   *
   * @var string
   */
  public $finalUrl;
  /**
   * Hotel name in requested language.
   *
   * @var string
   */
  public $hotelName;
  protected $imageAssetsType = GoogleAdsSearchads360V23ServicesHotelImageAsset::class;
  protected $imageAssetsDataType = 'array';
  /**
   * Google Places ID of the hotel.
   *
   * @var string
   */
  public $placeId;
  /**
   * The status of the hotel asset suggestion.
   *
   * @var string
   */
  public $status;
  protected $textAssetsType = GoogleAdsSearchads360V23ServicesHotelTextAsset::class;
  protected $textAssetsDataType = 'array';

  /**
   * Call to action type.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, LEARN_MORE, GET_QUOTE, APPLY_NOW,
   * SIGN_UP, CONTACT_US, SUBSCRIBE, DOWNLOAD, BOOK_NOW, SHOP_NOW, BUY_NOW,
   * DONATE_NOW, ORDER_NOW, PLAY_NOW, SEE_MORE, START_NOW, VISIT_SITE, WATCH_NOW
   *
   * @param self::CALL_TO_ACTION_* $callToAction
   */
  public function setCallToAction($callToAction)
  {
    $this->callToAction = $callToAction;
  }
  /**
   * @return self::CALL_TO_ACTION_*
   */
  public function getCallToAction()
  {
    return $this->callToAction;
  }
  /**
   * Suggested final URL for an AssetGroup.
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
   * Hotel name in requested language.
   *
   * @param string $hotelName
   */
  public function setHotelName($hotelName)
  {
    $this->hotelName = $hotelName;
  }
  /**
   * @return string
   */
  public function getHotelName()
  {
    return $this->hotelName;
  }
  /**
   * Image assets such as landscape/portrait/square, etc.
   *
   * @param GoogleAdsSearchads360V23ServicesHotelImageAsset[] $imageAssets
   */
  public function setImageAssets($imageAssets)
  {
    $this->imageAssets = $imageAssets;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesHotelImageAsset[]
   */
  public function getImageAssets()
  {
    return $this->imageAssets;
  }
  /**
   * Google Places ID of the hotel.
   *
   * @param string $placeId
   */
  public function setPlaceId($placeId)
  {
    $this->placeId = $placeId;
  }
  /**
   * @return string
   */
  public function getPlaceId()
  {
    return $this->placeId;
  }
  /**
   * The status of the hotel asset suggestion.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, SUCCESS, HOTEL_NOT_FOUND,
   * INVALID_PLACE_ID
   *
   * @param self::STATUS_* $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return self::STATUS_*
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * Text assets such as headline, description, etc.
   *
   * @param GoogleAdsSearchads360V23ServicesHotelTextAsset[] $textAssets
   */
  public function setTextAssets($textAssets)
  {
    $this->textAssets = $textAssets;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesHotelTextAsset[]
   */
  public function getTextAssets()
  {
    return $this->textAssets;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesHotelAssetSuggestion::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesHotelAssetSuggestion');
