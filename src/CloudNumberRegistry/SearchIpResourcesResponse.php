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

namespace Google\Service\CloudNumberRegistry;

class SearchIpResourcesResponse extends \Google\Collection
{
  protected $collection_key = 'unreachable';
  /**
   * A token identifying a page of results the server should return.
   *
   * @var string
   */
  public $nextPageToken;
  protected $rangesType = Range::class;
  protected $rangesDataType = 'array';
  protected $resultsType = SearchIpResourcesResult::class;
  protected $resultsDataType = 'array';
  /**
   * Unordered list. Locations that could not be reached.
   *
   * @var string[]
   */
  public $unreachable;

  /**
   * A token identifying a page of results the server should return.
   *
   * @param string $nextPageToken
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
  /**
   * Deprecated: Use results field instead. The list of Ranges matching the
   * search query.
   *
   * @deprecated
   * @param Range[] $ranges
   */
  public function setRanges($ranges)
  {
    $this->ranges = $ranges;
  }
  /**
   * @deprecated
   * @return Range[]
   */
  public function getRanges()
  {
    return $this->ranges;
  }
  /**
   * The list of results matching the search query.
   *
   * @param SearchIpResourcesResult[] $results
   */
  public function setResults($results)
  {
    $this->results = $results;
  }
  /**
   * @return SearchIpResourcesResult[]
   */
  public function getResults()
  {
    return $this->results;
  }
  /**
   * Unordered list. Locations that could not be reached.
   *
   * @param string[] $unreachable
   */
  public function setUnreachable($unreachable)
  {
    $this->unreachable = $unreachable;
  }
  /**
   * @return string[]
   */
  public function getUnreachable()
  {
    return $this->unreachable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SearchIpResourcesResponse::class, 'Google_Service_CloudNumberRegistry_SearchIpResourcesResponse');
