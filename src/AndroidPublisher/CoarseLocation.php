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

namespace Google\Service\AndroidPublisher;

class CoarseLocation extends \Google\Model
{
  /**
   * Optional. Highest administrative subdivision which is used for postal
   * addresses of a country or region. For example, this can be a state, a
   * province, an oblast, or a prefecture. For Spain, this is the province and
   * not the autonomous community (for example, "Barcelona" and not
   * "Catalonia"). Many countries don't use an administrative area in postal
   * addresses. For example, in Switzerland, this should be left unpopulated.
   *
   * @var string
   */
  public $administrativeArea;
  /**
   * Optional. Generally refers to the city or town portion of the address.
   * Examples: US city, IT comune, UK post town. In regions of the world where
   * localities are not well defined or do not fit into this structure well,
   * leave `locality` empty.
   *
   * @var string
   */
  public $locality;
  /**
   * Required. [CLDR region code](https://cldr.unicode.org/) of the
   * country/region of the address. This value is never inferred and you must
   * ensure the value is correct. Example: "CH" for Switzerland.
   *
   * @var string
   */
  public $regionCode;
  /**
   * Optional. Sublocality of the address. For example, this can be a
   * neighborhood, borough, or district. For most addresses, you can omit this.
   *
   * @var string
   */
  public $sublocality;

  /**
   * Optional. Highest administrative subdivision which is used for postal
   * addresses of a country or region. For example, this can be a state, a
   * province, an oblast, or a prefecture. For Spain, this is the province and
   * not the autonomous community (for example, "Barcelona" and not
   * "Catalonia"). Many countries don't use an administrative area in postal
   * addresses. For example, in Switzerland, this should be left unpopulated.
   *
   * @param string $administrativeArea
   */
  public function setAdministrativeArea($administrativeArea)
  {
    $this->administrativeArea = $administrativeArea;
  }
  /**
   * @return string
   */
  public function getAdministrativeArea()
  {
    return $this->administrativeArea;
  }
  /**
   * Optional. Generally refers to the city or town portion of the address.
   * Examples: US city, IT comune, UK post town. In regions of the world where
   * localities are not well defined or do not fit into this structure well,
   * leave `locality` empty.
   *
   * @param string $locality
   */
  public function setLocality($locality)
  {
    $this->locality = $locality;
  }
  /**
   * @return string
   */
  public function getLocality()
  {
    return $this->locality;
  }
  /**
   * Required. [CLDR region code](https://cldr.unicode.org/) of the
   * country/region of the address. This value is never inferred and you must
   * ensure the value is correct. Example: "CH" for Switzerland.
   *
   * @param string $regionCode
   */
  public function setRegionCode($regionCode)
  {
    $this->regionCode = $regionCode;
  }
  /**
   * @return string
   */
  public function getRegionCode()
  {
    return $this->regionCode;
  }
  /**
   * Optional. Sublocality of the address. For example, this can be a
   * neighborhood, borough, or district. For most addresses, you can omit this.
   *
   * @param string $sublocality
   */
  public function setSublocality($sublocality)
  {
    $this->sublocality = $sublocality;
  }
  /**
   * @return string
   */
  public function getSublocality()
  {
    return $this->sublocality;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CoarseLocation::class, 'Google_Service_AndroidPublisher_CoarseLocation');
