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

class GoogleAdsSearchads360V23CommonProximityInfo extends \Google\Model
{
  /**
   * Not specified.
   */
  public const RADIUS_UNITS_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const RADIUS_UNITS_UNKNOWN = 'UNKNOWN';
  /**
   * Miles
   */
  public const RADIUS_UNITS_MILES = 'MILES';
  /**
   * Kilometers
   */
  public const RADIUS_UNITS_KILOMETERS = 'KILOMETERS';
  protected $addressType = GoogleAdsSearchads360V23CommonAddressInfo::class;
  protected $addressDataType = '';
  protected $geoPointType = GoogleAdsSearchads360V23CommonGeoPointInfo::class;
  protected $geoPointDataType = '';
  /**
   * The radius of the proximity.
   *
   * @var 
   */
  public $radius;
  /**
   * The unit of measurement of the radius. Default is KILOMETERS.
   *
   * @var string
   */
  public $radiusUnits;

  /**
   * Full address.
   *
   * @param GoogleAdsSearchads360V23CommonAddressInfo $address
   */
  public function setAddress(GoogleAdsSearchads360V23CommonAddressInfo $address)
  {
    $this->address = $address;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonAddressInfo
   */
  public function getAddress()
  {
    return $this->address;
  }
  /**
   * Latitude and longitude.
   *
   * @param GoogleAdsSearchads360V23CommonGeoPointInfo $geoPoint
   */
  public function setGeoPoint(GoogleAdsSearchads360V23CommonGeoPointInfo $geoPoint)
  {
    $this->geoPoint = $geoPoint;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonGeoPointInfo
   */
  public function getGeoPoint()
  {
    return $this->geoPoint;
  }
  public function setRadius($radius)
  {
    $this->radius = $radius;
  }
  public function getRadius()
  {
    return $this->radius;
  }
  /**
   * The unit of measurement of the radius. Default is KILOMETERS.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, MILES, KILOMETERS
   *
   * @param self::RADIUS_UNITS_* $radiusUnits
   */
  public function setRadiusUnits($radiusUnits)
  {
    $this->radiusUnits = $radiusUnits;
  }
  /**
   * @return self::RADIUS_UNITS_*
   */
  public function getRadiusUnits()
  {
    return $this->radiusUnits;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonProximityInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonProximityInfo');
