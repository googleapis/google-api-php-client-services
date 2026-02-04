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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1ListChartsResponse extends \Google\Collection
{
  protected $collection_key = 'charts';
  protected $chartsType = GoogleCloudContactcenterinsightsV1Chart::class;
  protected $chartsDataType = 'array';
  /**
   * The value returned by the last `ListChartsResponse`. This value indicates
   * that this is a continuation of a prior `ListCharts` call and that the
   * system should return the next page of data.
   *
   * @var string
   */
  public $nextPageToken;

  /**
   * The charts under the parent.
   *
   * @param GoogleCloudContactcenterinsightsV1Chart[] $charts
   */
  public function setCharts($charts)
  {
    $this->charts = $charts;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1Chart[]
   */
  public function getCharts()
  {
    return $this->charts;
  }
  /**
   * The value returned by the last `ListChartsResponse`. This value indicates
   * that this is a continuation of a prior `ListCharts` call and that the
   * system should return the next page of data.
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
class_alias(GoogleCloudContactcenterinsightsV1ListChartsResponse::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1ListChartsResponse');
