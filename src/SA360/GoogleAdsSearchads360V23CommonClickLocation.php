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

class GoogleAdsSearchads360V23CommonClickLocation extends \Google\Model
{
  /**
   * The city location criterion associated with the impression.
   *
   * @var string
   */
  public $city;
  /**
   * The country location criterion associated with the impression.
   *
   * @var string
   */
  public $country;
  /**
   * The metro location criterion associated with the impression.
   *
   * @var string
   */
  public $metro;
  /**
   * The most specific location criterion associated with the impression.
   *
   * @var string
   */
  public $mostSpecific;
  /**
   * The region location criterion associated with the impression.
   *
   * @var string
   */
  public $region;

  /**
   * The city location criterion associated with the impression.
   *
   * @param string $city
   */
  public function setCity($city)
  {
    $this->city = $city;
  }
  /**
   * @return string
   */
  public function getCity()
  {
    return $this->city;
  }
  /**
   * The country location criterion associated with the impression.
   *
   * @param string $country
   */
  public function setCountry($country)
  {
    $this->country = $country;
  }
  /**
   * @return string
   */
  public function getCountry()
  {
    return $this->country;
  }
  /**
   * The metro location criterion associated with the impression.
   *
   * @param string $metro
   */
  public function setMetro($metro)
  {
    $this->metro = $metro;
  }
  /**
   * @return string
   */
  public function getMetro()
  {
    return $this->metro;
  }
  /**
   * The most specific location criterion associated with the impression.
   *
   * @param string $mostSpecific
   */
  public function setMostSpecific($mostSpecific)
  {
    $this->mostSpecific = $mostSpecific;
  }
  /**
   * @return string
   */
  public function getMostSpecific()
  {
    return $this->mostSpecific;
  }
  /**
   * The region location criterion associated with the impression.
   *
   * @param string $region
   */
  public function setRegion($region)
  {
    $this->region = $region;
  }
  /**
   * @return string
   */
  public function getRegion()
  {
    return $this->region;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonClickLocation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonClickLocation');
