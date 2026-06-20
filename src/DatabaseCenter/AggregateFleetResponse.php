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

namespace Google\Service\DatabaseCenter;

class AggregateFleetResponse extends \Google\Collection
{
  protected $collection_key = 'unreachable';
  /**
   * A token that can be sent as `page_token` to retrieve the next page. If this
   * field is omitted, there are no subsequent pages.
   *
   * @var string
   */
  public $nextPageToken;
  /**
   * Count of all resource groups in the fleet. This includes counts from all
   * pages.
   *
   * @var int
   */
  public $resourceGroupsTotalCount;
  /**
   * Count of all resources in the fleet. This includes counts from all pages.
   *
   * @var int
   */
  public $resourceTotalCount;
  protected $rowsType = AggregateFleetRow::class;
  protected $rowsDataType = 'array';
  /**
   * Output only. The total number of rows in the entire list.
   *
   * @var string
   */
  public $totalSize;
  /**
   * Unordered list. List of unreachable regions from where data could not be
   * retrieved.
   *
   * @var string[]
   */
  public $unreachable;

  /**
   * A token that can be sent as `page_token` to retrieve the next page. If this
   * field is omitted, there are no subsequent pages.
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
   * Count of all resource groups in the fleet. This includes counts from all
   * pages.
   *
   * @param int $resourceGroupsTotalCount
   */
  public function setResourceGroupsTotalCount($resourceGroupsTotalCount)
  {
    $this->resourceGroupsTotalCount = $resourceGroupsTotalCount;
  }
  /**
   * @return int
   */
  public function getResourceGroupsTotalCount()
  {
    return $this->resourceGroupsTotalCount;
  }
  /**
   * Count of all resources in the fleet. This includes counts from all pages.
   *
   * @param int $resourceTotalCount
   */
  public function setResourceTotalCount($resourceTotalCount)
  {
    $this->resourceTotalCount = $resourceTotalCount;
  }
  /**
   * @return int
   */
  public function getResourceTotalCount()
  {
    return $this->resourceTotalCount;
  }
  /**
   * Represents a row grouped by the fields in the input.
   *
   * @param AggregateFleetRow[] $rows
   */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /**
   * @return AggregateFleetRow[]
   */
  public function getRows()
  {
    return $this->rows;
  }
  /**
   * Output only. The total number of rows in the entire list.
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
  /**
   * Unordered list. List of unreachable regions from where data could not be
   * retrieved.
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
class_alias(AggregateFleetResponse::class, 'Google_Service_DatabaseCenter_AggregateFleetResponse');
