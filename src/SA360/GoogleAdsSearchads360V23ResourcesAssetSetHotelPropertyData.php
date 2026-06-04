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

class GoogleAdsSearchads360V23ResourcesAssetSetHotelPropertyData extends \Google\Model
{
  /**
   * Output only. The hotel center ID of the partner.
   *
   * @var string
   */
  public $hotelCenterId;
  /**
   * Output only. Name of the hotel partner.
   *
   * @var string
   */
  public $partnerName;

  /**
   * Output only. The hotel center ID of the partner.
   *
   * @param string $hotelCenterId
   */
  public function setHotelCenterId($hotelCenterId)
  {
    $this->hotelCenterId = $hotelCenterId;
  }
  /**
   * @return string
   */
  public function getHotelCenterId()
  {
    return $this->hotelCenterId;
  }
  /**
   * Output only. Name of the hotel partner.
   *
   * @param string $partnerName
   */
  public function setPartnerName($partnerName)
  {
    $this->partnerName = $partnerName;
  }
  /**
   * @return string
   */
  public function getPartnerName()
  {
    return $this->partnerName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesAssetSetHotelPropertyData::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesAssetSetHotelPropertyData');
