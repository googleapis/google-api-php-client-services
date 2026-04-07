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

namespace Google\Service\GoogleHealthAPI;

class ListDataPointsResponse extends \Google\Collection
{
  protected $collection_key = 'dataPoints';
  protected $dataPointsType = DataPoint::class;
  protected $dataPointsDataType = 'array';
  /**
   * Next page token, empty if the response is complete
   *
   * @var string
   */
  public $nextPageToken;

  /**
   * Data points matching the query
   *
   * @param DataPoint[] $dataPoints
   */
  public function setDataPoints($dataPoints)
  {
    $this->dataPoints = $dataPoints;
  }
  /**
   * @return DataPoint[]
   */
  public function getDataPoints()
  {
    return $this->dataPoints;
  }
  /**
   * Next page token, empty if the response is complete
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ListDataPointsResponse::class, 'Google_Service_GoogleHealthAPI_ListDataPointsResponse');
