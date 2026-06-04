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

class GoogleAdsSearchads360V23ServicesSuggestGeoTargetConstantsRequest extends \Google\Model
{
  /**
   * Returned geo targets are restricted to this country code.
   *
   * @var string
   */
  public $countryCode;
  protected $geoTargetsType = GoogleAdsSearchads360V23ServicesSuggestGeoTargetConstantsRequestGeoTargets::class;
  protected $geoTargetsDataType = '';
  /**
   * If possible, returned geo targets are translated using this locale. If not,
   * en is used by default. This is also used as a hint for returned geo
   * targets.
   *
   * @var string
   */
  public $locale;
  protected $locationNamesType = GoogleAdsSearchads360V23ServicesSuggestGeoTargetConstantsRequestLocationNames::class;
  protected $locationNamesDataType = '';

  /**
   * Returned geo targets are restricted to this country code.
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
   * The geo target constant resource names to filter by.
   *
   * @param GoogleAdsSearchads360V23ServicesSuggestGeoTargetConstantsRequestGeoTargets $geoTargets
   */
  public function setGeoTargets(GoogleAdsSearchads360V23ServicesSuggestGeoTargetConstantsRequestGeoTargets $geoTargets)
  {
    $this->geoTargets = $geoTargets;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSuggestGeoTargetConstantsRequestGeoTargets
   */
  public function getGeoTargets()
  {
    return $this->geoTargets;
  }
  /**
   * If possible, returned geo targets are translated using this locale. If not,
   * en is used by default. This is also used as a hint for returned geo
   * targets.
   *
   * @param string $locale
   */
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /**
   * @return string
   */
  public function getLocale()
  {
    return $this->locale;
  }
  /**
   * The location names to search by. At most 25 names can be set.
   *
   * @param GoogleAdsSearchads360V23ServicesSuggestGeoTargetConstantsRequestLocationNames $locationNames
   */
  public function setLocationNames(GoogleAdsSearchads360V23ServicesSuggestGeoTargetConstantsRequestLocationNames $locationNames)
  {
    $this->locationNames = $locationNames;
  }
  /**
   * @return GoogleAdsSearchads360V23ServicesSuggestGeoTargetConstantsRequestLocationNames
   */
  public function getLocationNames()
  {
    return $this->locationNames;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesSuggestGeoTargetConstantsRequest::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesSuggestGeoTargetConstantsRequest');
