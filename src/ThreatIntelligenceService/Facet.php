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

namespace Google\Service\ThreatIntelligenceService;

class Facet extends \Google\Collection
{
  protected $collection_key = 'facetCounts';
  /**
   * Name of the facet. This is also the string that needs to be used in the
   * filtering expression.
   *
   * @var string
   */
  public $facet;
  protected $facetCountsType = FacetCount::class;
  protected $facetCountsDataType = 'array';
  /**
   * The type of the facet. Options include "string", "int", "float", "bool",
   * "enum", "timestamp", "user" and are useful to show the right sort of UI
   * controls when building a AIP-160 style filtering string.
   *
   * @var string
   */
  public $facetType;
  /**
   * Max value of the facet stringified based on type. Will be populated and
   * formatted the same as min_value.
   *
   * @var string
   */
  public $maxValue;
  /**
   * Min value of the facet stringified based on type. This is only populated
   * for facets that have a clear ordering, for types like enum it will be left
   * empty. Timestamps will be formatted using RFC3339.
   *
   * @var string
   */
  public $minValue;
  /**
   * Total number of records that contain this facet with ANY value.
   *
   * @var string
   */
  public $totalCount;

  /**
   * Name of the facet. This is also the string that needs to be used in the
   * filtering expression.
   *
   * @param string $facet
   */
  public function setFacet($facet)
  {
    $this->facet = $facet;
  }
  /**
   * @return string
   */
  public function getFacet()
  {
    return $this->facet;
  }
  /**
   * List of counts for the facet (if categorical).
   *
   * @param FacetCount[] $facetCounts
   */
  public function setFacetCounts($facetCounts)
  {
    $this->facetCounts = $facetCounts;
  }
  /**
   * @return FacetCount[]
   */
  public function getFacetCounts()
  {
    return $this->facetCounts;
  }
  /**
   * The type of the facet. Options include "string", "int", "float", "bool",
   * "enum", "timestamp", "user" and are useful to show the right sort of UI
   * controls when building a AIP-160 style filtering string.
   *
   * @param string $facetType
   */
  public function setFacetType($facetType)
  {
    $this->facetType = $facetType;
  }
  /**
   * @return string
   */
  public function getFacetType()
  {
    return $this->facetType;
  }
  /**
   * Max value of the facet stringified based on type. Will be populated and
   * formatted the same as min_value.
   *
   * @param string $maxValue
   */
  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }
  /**
   * @return string
   */
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  /**
   * Min value of the facet stringified based on type. This is only populated
   * for facets that have a clear ordering, for types like enum it will be left
   * empty. Timestamps will be formatted using RFC3339.
   *
   * @param string $minValue
   */
  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }
  /**
   * @return string
   */
  public function getMinValue()
  {
    return $this->minValue;
  }
  /**
   * Total number of records that contain this facet with ANY value.
   *
   * @param string $totalCount
   */
  public function setTotalCount($totalCount)
  {
    $this->totalCount = $totalCount;
  }
  /**
   * @return string
   */
  public function getTotalCount()
  {
    return $this->totalCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Facet::class, 'Google_Service_ThreatIntelligenceService_Facet');
