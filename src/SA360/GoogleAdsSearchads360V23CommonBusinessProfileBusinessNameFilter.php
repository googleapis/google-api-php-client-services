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

class GoogleAdsSearchads360V23CommonBusinessProfileBusinessNameFilter extends \Google\Model
{
  /**
   * Not specified.
   */
  public const FILTER_TYPE_UNSPECIFIED = 'UNSPECIFIED';
  /**
   * Used for return value only. Represents value unknown in this version.
   */
  public const FILTER_TYPE_UNKNOWN = 'UNKNOWN';
  /**
   * The filter will use exact string matching.
   */
  public const FILTER_TYPE_EXACT = 'EXACT';
  /**
   * Business name string to use for filtering.
   *
   * @var string
   */
  public $businessName;
  /**
   * The type of string matching to use when filtering with business_name.
   *
   * @var string
   */
  public $filterType;

  /**
   * Business name string to use for filtering.
   *
   * @param string $businessName
   */
  public function setBusinessName($businessName)
  {
    $this->businessName = $businessName;
  }
  /**
   * @return string
   */
  public function getBusinessName()
  {
    return $this->businessName;
  }
  /**
   * The type of string matching to use when filtering with business_name.
   *
   * Accepted values: UNSPECIFIED, UNKNOWN, EXACT
   *
   * @param self::FILTER_TYPE_* $filterType
   */
  public function setFilterType($filterType)
  {
    $this->filterType = $filterType;
  }
  /**
   * @return self::FILTER_TYPE_*
   */
  public function getFilterType()
  {
    return $this->filterType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23CommonBusinessProfileBusinessNameFilter::class, 'Google_Service_SA360_GoogleAdsSearchads360V23CommonBusinessProfileBusinessNameFilter');
