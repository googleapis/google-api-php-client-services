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

class GoogleAdsSearchads360V23CommonHotelPropertyAsset extends \Google\Model
{
  /**
   * Address of the hotel. Read-only.
   *
   * @var string
   */
  public $hotelAddress;
  /**
   * Name of the hotel. Read-only.
   *
   * @var string
   */
  public $hotelName;
  /**
   * Place IDs uniquely identify a place in the Google Places database and on
   * Google Maps. See https://developers.google.com/places/web-service/place-id
   * to learn more.
   *
   * @var string
   */
  public $placeId;

  /**
   * Address of the hotel. Read-only.
   *
   * @param string $hotelAddress
   */
  public function setHotelAddress($hotelAddress)
  {
    $this->hotelAddress = $hotelAddress;
  }
  /**
   * @return string
   */
  public function getHotelAddress()
  {
    return $this->hotelAddress;
  }
  /**
   * Name of the hotel. Read-only.
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
   * Place IDs uniquely identify a place in the Google Places database and on
   * Google Maps. See https://developers.google.com/places/web-service/place-id
   * to learn more.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonHotelPropertyAsset::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonHotelPropertyAsset');
