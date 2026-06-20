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

class QueryMetrics extends \Google\Model
{
  /**
   * Unspecified. Default value.
   */
  public const METRICS_WINDOW_METRICS_WINDOW_UNSPECIFIED = 'METRICS_WINDOW_UNSPECIFIED';
  /**
   * Metrics are aggregated over the last 1 day.
   */
  public const METRICS_WINDOW_LAST_ONE_DAY = 'LAST_ONE_DAY';
  /**
   * Metrics are aggregated over the last 7 days.
   */
  public const METRICS_WINDOW_LAST_ONE_WEEK = 'LAST_ONE_WEEK';
  /**
   * Metrics are aggregated over the last 14 days.
   */
  public const METRICS_WINDOW_LAST_TWO_WEEKS = 'LAST_TWO_WEEKS';
  /**
   * The average execution period of the query across all runs.
   *
   * @var string
   */
  public $avgCpuTime;
  /**
   * The number of times the query was executed.
   *
   * @var string
   */
  public $executionCount;
  /**
   * The window over which the metrics are aggregated.
   *
   * @var string
   */
  public $metricsWindow;
  /**
   * The average number of rows processed by the query across all runs.
   *
   * @var string
   */
  public $rowsProcessed;
  /**
   * The total CPU time consumed by the query across all runs.
   *
   * @var string
   */
  public $totalCpuTime;

  /**
   * The average execution period of the query across all runs.
   *
   * @param string $avgCpuTime
   */
  public function setAvgCpuTime($avgCpuTime)
  {
    $this->avgCpuTime = $avgCpuTime;
  }
  /**
   * @return string
   */
  public function getAvgCpuTime()
  {
    return $this->avgCpuTime;
  }
  /**
   * The number of times the query was executed.
   *
   * @param string $executionCount
   */
  public function setExecutionCount($executionCount)
  {
    $this->executionCount = $executionCount;
  }
  /**
   * @return string
   */
  public function getExecutionCount()
  {
    return $this->executionCount;
  }
  /**
   * The window over which the metrics are aggregated.
   *
   * Accepted values: METRICS_WINDOW_UNSPECIFIED, LAST_ONE_DAY, LAST_ONE_WEEK,
   * LAST_TWO_WEEKS
   *
   * @param self::METRICS_WINDOW_* $metricsWindow
   */
  public function setMetricsWindow($metricsWindow)
  {
    $this->metricsWindow = $metricsWindow;
  }
  /**
   * @return self::METRICS_WINDOW_*
   */
  public function getMetricsWindow()
  {
    return $this->metricsWindow;
  }
  /**
   * The average number of rows processed by the query across all runs.
   *
   * @param string $rowsProcessed
   */
  public function setRowsProcessed($rowsProcessed)
  {
    $this->rowsProcessed = $rowsProcessed;
  }
  /**
   * @return string
   */
  public function getRowsProcessed()
  {
    return $this->rowsProcessed;
  }
  /**
   * The total CPU time consumed by the query across all runs.
   *
   * @param string $totalCpuTime
   */
  public function setTotalCpuTime($totalCpuTime)
  {
    $this->totalCpuTime = $totalCpuTime;
  }
  /**
   * @return string
   */
  public function getTotalCpuTime()
  {
    return $this->totalCpuTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QueryMetrics::class, 'Google_Service_DatabaseCenter_QueryMetrics');
