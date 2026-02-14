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

namespace Google\Service\CloudKMS;

class ListRetiredResourcesResponse extends \Google\Collection
{
  protected $collection_key = 'retiredResources';
  /**
   * A token to retrieve the next page of results. Pass this value in
   * ListRetiredResourcesRequest.page_token to retrieve the next page of
   * results.
   *
   * @var string
   */
  public $nextPageToken;
  protected $retiredResourcesType = RetiredResource::class;
  protected $retiredResourcesDataType = 'array';
  /**
   * The total number of RetiredResources that matched the query.
   *
   * @var string
   */
  public $totalSize;

  /**
   * A token to retrieve the next page of results. Pass this value in
   * ListRetiredResourcesRequest.page_token to retrieve the next page of
   * results.
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
   * The list of RetiredResources.
   *
   * @param RetiredResource[] $retiredResources
   */
  public function setRetiredResources($retiredResources)
  {
    $this->retiredResources = $retiredResources;
  }
  /**
   * @return RetiredResource[]
   */
  public function getRetiredResources()
  {
    return $this->retiredResources;
  }
  /**
   * The total number of RetiredResources that matched the query.
   *
   * @param string $totalSize
   */
  public function setTotalSize($totalSize)
  {
    $this->totalSize = $totalSize;
  }
  /**
   * @return string
   */
  public function getTotalSize()
  {
    return $this->totalSize;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListRetiredResourcesResponse::class, 'Google_Service_CloudKMS_ListRetiredResourcesResponse');
