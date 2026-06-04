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

class GoogleAdsSearchads360V23CommonChainLocationGroup extends \Google\Collection
{
  protected $collection_key = 'dynamicChainLocationGroupFilters';
  protected $dynamicChainLocationGroupFiltersType = GoogleAdsSearchads360V23CommonChainFilter::class;
  protected $dynamicChainLocationGroupFiltersDataType = 'array';

  /**
   * Used to filter chain locations by chain ids. Only Locations that belong to
   * the specified chain(s) will be in the asset set.
   *
   * @param GoogleAdsSearchads360V23CommonChainFilter[] $dynamicChainLocationGroupFilters
   */
  public function setDynamicChainLocationGroupFilters($dynamicChainLocationGroupFilters)
  {
    $this->dynamicChainLocationGroupFilters = $dynamicChainLocationGroupFilters;
  }
  /**
   * @return GoogleAdsSearchads360V23CommonChainFilter[]
   */
  public function getDynamicChainLocationGroupFilters()
  {
    return $this->dynamicChainLocationGroupFilters;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonChainLocationGroup::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonChainLocationGroup');
