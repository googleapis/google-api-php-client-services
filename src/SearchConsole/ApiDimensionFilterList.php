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

class ApiDimensionFilterList extends \Google\Collection
{
  public const DIMENSION_QUERY = 'QUERY';
  public const DIMENSION_PAGE = 'PAGE';
  public const DIMENSION_COUNTRY = 'COUNTRY';
  public const DIMENSION_DEVICE = 'DEVICE';
  public const DIMENSION_SEARCH_APPEARANCE = 'SEARCH_APPEARANCE';
  /**
   * Filters by branded query classification (`BRANDED` or `NON_BRANDED`).
   */
  public const DIMENSION_BRANDED_CLASSIFICATION = 'BRANDED_CLASSIFICATION';
  protected $collection_key = 'expressions';
  /**
   * Required. The dimension to filter by. Only supported for `COUNTRY` and
   * `DEVICE`.
   *
   * @var string
   */
  public $dimension;
  /**
   * Required. The values to filter against. A row matches if its value for the
   * specified `dimension` equals any of these `expressions` (implicit OR logic
   * between the `expressions`). The maximum number of `expressions` allowed is
   * 1000.
   *
   * @var string[]
   */
  public $expressions;

  /**
   * Required. The dimension to filter by. Only supported for `COUNTRY` and
   * `DEVICE`.
   *
   * Accepted values: QUERY, PAGE, COUNTRY, DEVICE, SEARCH_APPEARANCE,
   * BRANDED_CLASSIFICATION
   *
   * @param self::DIMENSION_* $dimension
   */
  public function setDimension($dimension)
  {
    $this->dimension = $dimension;
  }
  /**
   * @return self::DIMENSION_*
   */
  public function getDimension()
  {
    return $this->dimension;
  }
  /**
   * Required. The values to filter against. A row matches if its value for the
   * specified `dimension` equals any of these `expressions` (implicit OR logic
   * between the `expressions`). The maximum number of `expressions` allowed is
   * 1000.
   *
   * @param string[] $expressions
   */
  public function setExpressions($expressions)
  {
    $this->expressions = $expressions;
  }
  /**
   * @return string[]
   */
  public function getExpressions()
  {
    return $this->expressions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ApiDimensionFilterList::class, 'Google_Service_SearchConsole_ApiDimensionFilterList');
