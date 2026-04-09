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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1UserInfoPreciseLocation extends \Google\Model
{
  /**
   * Optional. Location represented by a natural language address. Will later be
   * geocoded and converted to either a point or a polygon.
   *
   * @var string
   */
  public $address;
  protected $pointType = GoogleTypeLatLng::class;
  protected $pointDataType = '';

  /**
   * Optional. Location represented by a natural language address. Will later be
   * geocoded and converted to either a point or a polygon.
   *
   * @param string $address
   */
  public function setAddress($address)
  {
    $this->address = $address;
  }
  /**
   * @return string
   */
  public function getAddress()
  {
    return $this->address;
  }
  /**
   * Optional. Location represented by a latitude/longitude point.
   *
   * @param GoogleTypeLatLng $point
   */
  public function setPoint(GoogleTypeLatLng $point)
  {
    $this->point = $point;
  }
  /**
   * @return GoogleTypeLatLng
   */
  public function getPoint()
  {
    return $this->point;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1UserInfoPreciseLocation::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1UserInfoPreciseLocation');
