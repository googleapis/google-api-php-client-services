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

class GoogleAdsSearchads360V23ServicesPlannableLocation extends \Google\Model
{
  /**
   * The ISO-3166-1 alpha-2 country code that is associated with the location.
   *
   * @var string
   */
  public $countryCode;
  /**
   * The location identifier.
   *
   * @var string
   */
  public $id;
  /**
   * The location's type. Location types correspond to target_type returned by .
   *
   * @var string
   */
  public $locationType;
  /**
   * The unique location name in English.
   *
   * @var string
   */
  public $name;
  /**
   * The parent country (not present if location is a country). If present, will
   * always be a GeoTargetConstant ID. Additional information such as country
   * name is provided by ReachPlanService.ListPlannableLocations or
   *
   * @var string
   */
  public $parentCountryId;

  /**
   * The ISO-3166-1 alpha-2 country code that is associated with the location.
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
   * The location identifier.
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
   * The location's type. Location types correspond to target_type returned by .
   *
   * @param string $locationType
   */
  public function setLocationType($locationType)
  {
    $this->locationType = $locationType;
  }
  /**
   * @return string
   */
  public function getLocationType()
  {
    return $this->locationType;
  }
  /**
   * The unique location name in English.
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
   * The parent country (not present if location is a country). If present, will
   * always be a GeoTargetConstant ID. Additional information such as country
   * name is provided by ReachPlanService.ListPlannableLocations or
   *
   * @param string $parentCountryId
   */
  public function setParentCountryId($parentCountryId)
  {
    $this->parentCountryId = $parentCountryId;
  }
  /**
   * @return string
   */
  public function getParentCountryId()
  {
    return $this->parentCountryId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesPlannableLocation::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesPlannableLocation');
