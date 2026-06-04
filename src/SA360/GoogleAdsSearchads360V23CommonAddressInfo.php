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

class GoogleAdsSearchads360V23CommonAddressInfo extends \Google\Model
{
  /**
   * Name of the city.
   *
   * @var string
   */
  public $cityName;
  /**
   * Country code.
   *
   * @var string
   */
  public $countryCode;
  /**
   * Postal code.
   *
   * @var string
   */
  public $postalCode;
  /**
   * Province or state code.
   *
   * @var string
   */
  public $provinceCode;
  /**
   * Province or state name.
   *
   * @var string
   */
  public $provinceName;
  /**
   * Street address line 1.
   *
   * @var string
   */
  public $streetAddress;
  /**
   * Street address line 2. This field is write-only. It is only used for
   * calculating the longitude and latitude of an address when geo_point is
   * empty.
   *
   * @var string
   */
  public $streetAddress2;

  /**
   * Name of the city.
   *
   * @param string $cityName
   */
  public function setCityName($cityName)
  {
    $this->cityName = $cityName;
  }
  /**
   * @return string
   */
  public function getCityName()
  {
    return $this->cityName;
  }
  /**
   * Country code.
   *
   * @param string $countryCode
   */
  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }
  /**
   * @return string
   */
  public function getCountryCode()
  {
    return $this->countryCode;
  }
  /**
   * Postal code.
   *
   * @param string $postalCode
   */
  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }
  /**
   * @return string
   */
  public function getPostalCode()
  {
    return $this->postalCode;
  }
  /**
   * Province or state code.
   *
   * @param string $provinceCode
   */
  public function setProvinceCode($provinceCode)
  {
    $this->provinceCode = $provinceCode;
  }
  /**
   * @return string
   */
  public function getProvinceCode()
  {
    return $this->provinceCode;
  }
  /**
   * Province or state name.
   *
   * @param string $provinceName
   */
  public function setProvinceName($provinceName)
  {
    $this->provinceName = $provinceName;
  }
  /**
   * @return string
   */
  public function getProvinceName()
  {
    return $this->provinceName;
  }
  /**
   * Street address line 1.
   *
   * @param string $streetAddress
   */
  public function setStreetAddress($streetAddress)
  {
    $this->streetAddress = $streetAddress;
  }
  /**
   * @return string
   */
  public function getStreetAddress()
  {
    return $this->streetAddress;
  }
  /**
   * Street address line 2. This field is write-only. It is only used for
   * calculating the longitude and latitude of an address when geo_point is
   * empty.
   *
   * @param string $streetAddress2
   */
  public function setStreetAddress2($streetAddress2)
  {
    $this->streetAddress2 = $streetAddress2;
  }
  /**
   * @return string
   */
  public function getStreetAddress2()
  {
    return $this->streetAddress2;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonAddressInfo::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonAddressInfo');
