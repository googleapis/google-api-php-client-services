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

class GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionWebpage extends \Google\Collection
{
  protected $collection_key = 'conditions';
  protected $conditionsType = GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionWebpageCondition::class;
  protected $conditionsDataType = 'array';

  /**
   * The webpage conditions are case sensitive and these are and-ed together
   * when evaluated for filtering. All the conditions should be of same type.
   * Example1: for URL1 = www.ads.google.com?ocid=1&euid=2 and URL2 =
   * www.ads.google.com?ocid=1 and with "ocid" and "euid" as url_contains
   * conditions, URL1 will be matched, but URL2 not. Example2 : If URL1 has
   * Label1, Label2 and URL2 has Label2, Label3, then with Label1 and Label2 as
   * custom_label conditions, URL1 will be matched but not URL2. With Label2 as
   * the only custom_label condition then both URL1 and URL2 will be matched.
   *
   * @param GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionWebpageCondition[] $conditions
   */
  public function setConditions($conditions)
  {
    $this->conditions = $conditions;
  }
  /**
   * @return GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionWebpageCondition[]
   */
  public function getConditions()
  {
    return $this->conditions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionWebpage::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesListingGroupFilterDimensionWebpage');
