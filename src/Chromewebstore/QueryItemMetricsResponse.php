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

namespace Google\Service\Chromewebstore;

class QueryItemMetricsResponse extends \Google\Collection
{
  protected $collection_key = 'metricRows';
  protected $metricRowsType = MetricRow::class;
  protected $metricRowsDataType = 'array';
  /**
   * A token that can be sent as `page_token` to retrieve the next page. If this
   * field is omitted, there are no subsequent pages.
   *
   * @var string
   */
  public $nextPageToken;

  /**
   * The metric rows.
   *
   * @param MetricRow[] $metricRows
   */
  public function setMetricRows($metricRows)
  {
    $this->metricRows = $metricRows;
  }
  /**
   * @return MetricRow[]
   */
  public function getMetricRows()
  {
    return $this->metricRows;
  }
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryItemMetricsResponse::class, 'Google_Service_Chromewebstore_QueryItemMetricsResponse');
