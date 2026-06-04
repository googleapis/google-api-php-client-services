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

class GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraintList extends \Google\Collection
{
  protected $collection_key = 'countries';
  protected $countriesType = GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraint::class;
  protected $countriesDataType = 'array';
  /**
   * Total number of countries targeted by the resource.
   *
   * @var int
   */
  public $totalTargetedCountries;

  /**
   * Countries in which serving is restricted.
   *
   * @param GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraint[] $countries
   */
  public function setCountries($countries)
  {
    $this->countries = $countries;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraint[]
   */
  public function getCountries()
  {
    return $this->countries;
  }
  /**
   * Total number of countries targeted by the resource.
   *
   * @param int $totalTargetedCountries
   */
  public function setTotalTargetedCountries($totalTargetedCountries)
  {
    $this->totalTargetedCountries = $totalTargetedCountries;
  }
  /**
   * @return int
   */
  public function getTotalTargetedCountries()
  {
    return $this->totalTargetedCountries;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraintList::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonPolicyTopicConstraintCountryConstraintList');
