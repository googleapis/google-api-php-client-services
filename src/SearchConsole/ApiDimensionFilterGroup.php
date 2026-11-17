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

namespace Google\Service\SearchConsole;

class ApiDimensionFilterGroup extends \Google\Collection
{
  public const GROUP_TYPE_AND = 'AND';
  protected $collection_key = 'filters';
  protected $filterListsType = ApiDimensionFilterList::class;
  protected $filterListsDataType = 'array';
  protected $filtersType = ApiDimensionFilter::class;
  protected $filtersDataType = 'array';
  /**
   * Optional. The logic operator between filters of the same group.
   *
   * @var string
   */
  public $groupType;

  /**
   * Optional. Unlike the `filters` field which only supports a single value per
   * entry, `filter_lists` allows matching against a list of values for a single
   * dimension in one filter. `filter_lists` supports `COUNTRY` and `DEVICE`
   * dimensions only. The maximum number of `expressions` allowed in a single
   * filter list is 1000.
   *
   * @param ApiDimensionFilterList[] $filterLists
   */
  public function setFilterLists($filterLists)
  {
    $this->filterLists = $filterLists;
  }
  /**
   * @return ApiDimensionFilterList[]
   */
  public function getFilterLists()
  {
    return $this->filterLists;
  }
  /**
   * Optional. A list of single-value filters in this group. A list of multi-
   * value dimension filters. A row matches if its value for the specified
   * dimension matches any of the values in the filter list (implicit OR logic,
   * e.g., `COUNTRY` is `'usa'` OR `'can'`).
   *
   * @param ApiDimensionFilter[] $filters
   */
  public function setFilters($filters)
  {
    $this->filters = $filters;
  }
  /**
   * @return ApiDimensionFilter[]
   */
  public function getFilters()
  {
    return $this->filters;
  }
  /**
   * Optional. The logic operator between filters of the same group.
   *
   * Accepted values: AND
   *
   * @param self::GROUP_TYPE_* $groupType
   */
  public function setGroupType($groupType)
  {
    $this->groupType = $groupType;
  }
  /**
   * @return self::GROUP_TYPE_*
   */
  public function getGroupType()
  {
    return $this->groupType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApiDimensionFilterGroup::class, 'Google_Service_SearchConsole_ApiDimensionFilterGroup');
