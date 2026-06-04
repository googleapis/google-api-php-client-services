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

class GoogleAdsSearchads360V23CommonDynamicBusinessProfileLocationGroupFilter extends \Google\Collection
{
  protected $collection_key = 'listingIdFilters';
  protected $businessNameFilterType = GoogleAdsSearchads360V23CommonBusinessProfileBusinessNameFilter::class;
  protected $businessNameFilterDataType = '';
  /**
   * Used to filter Business Profile locations by label. Only locations that
   * have any of the listed labels will be in the asset set. Label filters are
   * OR'ed together.
   *
   * @var string[]
   */
  public $labelFilters;
  /**
   * Used to filter Business Profile locations by listing ids.
   *
   * @var string[]
   */
  public $listingIdFilters;

  /**
   * Used to filter Business Profile locations by business name.
   *
   * @param GoogleAdsSearchads360V23CommonBusinessProfileBusinessNameFilter $businessNameFilter
   */
  public function setBusinessNameFilter(GoogleAdsSearchads360V23CommonBusinessProfileBusinessNameFilter $businessNameFilter)
  {
    $this->businessNameFilter = $businessNameFilter;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonBusinessProfileBusinessNameFilter
   */
  public function getBusinessNameFilter()
  {
    return $this->businessNameFilter;
  }
  /**
   * Used to filter Business Profile locations by label. Only locations that
   * have any of the listed labels will be in the asset set. Label filters are
   * OR'ed together.
   *
   * @param string[] $labelFilters
   */
  public function setLabelFilters($labelFilters)
  {
    $this->labelFilters = $labelFilters;
  }
  /**
   * @return string[]
   */
  public function getLabelFilters()
  {
    return $this->labelFilters;
  }
  /**
   * Used to filter Business Profile locations by listing ids.
   *
   * @param string[] $listingIdFilters
   */
  public function setListingIdFilters($listingIdFilters)
  {
    $this->listingIdFilters = $listingIdFilters;
  }
  /**
   * @return string[]
   */
  public function getListingIdFilters()
  {
    return $this->listingIdFilters;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonDynamicBusinessProfileLocationGroupFilter::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonDynamicBusinessProfileLocationGroupFilter');
