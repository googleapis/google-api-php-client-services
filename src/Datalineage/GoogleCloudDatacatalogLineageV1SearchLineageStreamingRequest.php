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

namespace Google\Service\Datalineage;

class GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequest extends \Google\Collection
{
  /**
   * Direction is unspecified.
   */
  public const DIRECTION_SEARCH_DIRECTION_UNSPECIFIED = 'SEARCH_DIRECTION_UNSPECIFIED';
  /**
   * Retrieve links that lead from the specified asset to downstream assets.
   */
  public const DIRECTION_DOWNSTREAM = 'DOWNSTREAM';
  /**
   * Retrieve links that lead from upstream assets to the specified asset.
   */
  public const DIRECTION_UPSTREAM = 'UPSTREAM';
  protected $collection_key = 'locations';
  /**
   * Required. Direction of the search.
   *
   * @var string
   */
  public $direction;
  protected $filtersType = GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestSearchFilters::class;
  protected $filtersDataType = '';
  protected $limitsType = GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestSearchLimits::class;
  protected $limitsDataType = '';
  /**
   * Required. The locations to search in.
   *
   * @var string[]
   */
  public $locations;
  protected $rootCriteriaType = GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestRootCriteria::class;
  protected $rootCriteriaDataType = '';

  /**
   * Required. Direction of the search.
   *
   * Accepted values: SEARCH_DIRECTION_UNSPECIFIED, DOWNSTREAM, UPSTREAM
   *
   * @param self::DIRECTION_* $direction
   */
  public function setDirection($direction)
  {
    $this->direction = $direction;
  }
  /**
   * @return self::DIRECTION_*
   */
  public function getDirection()
  {
    return $this->direction;
  }
  /**
   * Optional. Filters for the search.
   *
   * @param GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestSearchFilters $filters
   */
  public function setFilters(GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestSearchFilters $filters)
  {
    $this->filters = $filters;
  }
  /**
   * @return GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestSearchFilters
   */
  public function getFilters()
  {
    return $this->filters;
  }
  /**
   * Optional. Limits for the search.
   *
   * @param GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestSearchLimits $limits
   */
  public function setLimits(GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestSearchLimits $limits)
  {
    $this->limits = $limits;
  }
  /**
   * @return GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestSearchLimits
   */
  public function getLimits()
  {
    return $this->limits;
  }
  /**
   * Required. The locations to search in.
   *
   * @param string[] $locations
   */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /**
   * @return string[]
   */
  public function getLocations()
  {
    return $this->locations;
  }
  /**
   * Required. Criteria for the root of the search.
   *
   * @param GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestRootCriteria $rootCriteria
   */
  public function setRootCriteria(GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestRootCriteria $rootCriteria)
  {
    $this->rootCriteria = $rootCriteria;
  }
  /**
   * @return GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequestRootCriteria
   */
  public function getRootCriteria()
  {
    return $this->rootCriteria;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequest::class, 'Google_Service_Datalineage_GoogleCloudDatacatalogLineageV1SearchLineageStreamingRequest');
