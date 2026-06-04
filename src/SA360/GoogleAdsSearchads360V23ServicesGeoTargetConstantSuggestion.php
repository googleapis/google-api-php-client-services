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

class GoogleAdsSearchads360V23ServicesGeoTargetConstantSuggestion extends \Google\Collection
{
  protected $collection_key = 'geoTargetConstantParents';
  protected $geoTargetConstantType = GoogleAdsSearchads360V23ResourcesGeoTargetConstant::class;
  protected $geoTargetConstantDataType = '';
  protected $geoTargetConstantParentsType = GoogleAdsSearchads360V23ResourcesGeoTargetConstant::class;
  protected $geoTargetConstantParentsDataType = 'array';
  /**
   * The language this GeoTargetConstantSuggestion is currently translated to.
   * It affects the name of geo target fields. For example, if locale=en, then
   * name=Spain. If locale=es, then name=España. The default locale will be
   * returned if no translation exists for the locale in the request.
   *
   * @var string
   */
  public $locale;
  /**
   * Approximate user population that will be targeted, rounded to the nearest
   * 100.
   *
   * @var string
   */
  public $reach;
  /**
   * If the request searched by location name, this is the location name that
   * matched the geo target.
   *
   * @var string
   */
  public $searchTerm;

  /**
   * The GeoTargetConstant result.
   *
   * @param GoogleAdsSearchads360V23ResourcesGeoTargetConstant $geoTargetConstant
   */
  public function setGeoTargetConstant(GoogleAdsSearchads360V23ResourcesGeoTargetConstant $geoTargetConstant)
  {
    $this->geoTargetConstant = $geoTargetConstant;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesGeoTargetConstant
   */
  public function getGeoTargetConstant()
  {
    return $this->geoTargetConstant;
  }
  /**
   * The list of parents of the geo target constant.
   *
   * @param GoogleAdsSearchads360V23ResourcesGeoTargetConstant[] $geoTargetConstantParents
   */
  public function setGeoTargetConstantParents($geoTargetConstantParents)
  {
    $this->geoTargetConstantParents = $geoTargetConstantParents;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesGeoTargetConstant[]
   */
  public function getGeoTargetConstantParents()
  {
    return $this->geoTargetConstantParents;
  }
  /**
   * The language this GeoTargetConstantSuggestion is currently translated to.
   * It affects the name of geo target fields. For example, if locale=en, then
   * name=Spain. If locale=es, then name=España. The default locale will be
   * returned if no translation exists for the locale in the request.
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
   * Approximate user population that will be targeted, rounded to the nearest
   * 100.
   *
   * @param string $reach
   */
  public function setReach($reach)
  {
    $this->reach = $reach;
  }
  /**
   * @return string
   */
  public function getReach()
  {
    return $this->reach;
  }
  /**
   * If the request searched by location name, this is the location name that
   * matched the geo target.
   *
   * @param string $searchTerm
   */
  public function setSearchTerm($searchTerm)
  {
    $this->searchTerm = $searchTerm;
  }
  /**
   * @return string
   */
  public function getSearchTerm()
  {
    return $this->searchTerm;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ServicesGeoTargetConstantSuggestion::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ServicesGeoTargetConstantSuggestion');
