<?php
/*
 * Copyright 2016 Google Inc.
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

class Google_Service_AnalyticsReporting_ReportRequest extends Google_Collection
{
  protected $collection_key = 'segments';
  public $cohortGroup;
  public $dateRanges;
  public $dimensionFilterClauses;
  public $dimensions;
  public $filtersExpression;
  public $hideTotals;
  public $hideValueRanges;
  public $includeEmptyRows;
  public $metricFilterClauses;
  public $metrics;
  public $orderBys;
  public $pageSize;
  public $pageToken;
  public $pivots;
  public $samplingLevel;
  public $segments;
  public $viewId;

  public function setCohortGroup(Google_Service_AnalyticsReporting_CohortGroup $cohortGroup)
  {
    $this->cohortGroup = $cohortGroup;
  }
  public function getCohortGroup()
  {
    return $this->cohortGroup;
  }
  public function setDateRanges(array $dateRanges)
  {
    foreach ($dateRanges as $d) {
      if (!$d instanceof Google_Service_AnalyticsReporting_DateRange) {
        throw new InvalidArgumentException('First argument to setDateRanges must be an array of Google_Service_AnalyticsReporting_DateRange');
      }
    }
    $this->dateRanges = $dateRanges;
  }
  public function getDateRanges()
  {
    return $this->dateRanges;
  }
  public function setDimensionFilterClauses(array $dimensionFilterClauses)
  {
    foreach ($dimensionFilterClauses as $d) {
      if (!$d instanceof Google_Service_AnalyticsReporting_DimensionFilterClause) {
        throw new InvalidArgumentException('First argument to setDimensionFilterClauses must be an array of Google_Service_AnalyticsReporting_DimensionFilterClause');
      }
    }
    $this->dimensionFilterClauses = $dimensionFilterClauses;
  }
  public function getDimensionFilterClauses()
  {
    return $this->dimensionFilterClauses;
  }
  public function setDimensions(array $dimensions)
  {
    foreach ($dimensions as $d) {
      if (!$d instanceof Google_Service_AnalyticsReporting_Dimension) {
        throw new InvalidArgumentException('First argument to setDimensions must be an array of Google_Service_AnalyticsReporting_Dimension');
      }
    }
    $this->dimensions = $dimensions;
  }
  public function getDimensions()
  {
    return $this->dimensions;
  }
  public function setFiltersExpression($filtersExpression)
  {
    $this->filtersExpression = $filtersExpression;
  }
  public function getFiltersExpression()
  {
    return $this->filtersExpression;
  }
  public function setHideTotals($hideTotals)
  {
    $this->hideTotals = $hideTotals;
  }
  public function getHideTotals()
  {
    return $this->hideTotals;
  }
  public function setHideValueRanges($hideValueRanges)
  {
    $this->hideValueRanges = $hideValueRanges;
  }
  public function getHideValueRanges()
  {
    return $this->hideValueRanges;
  }
  public function setIncludeEmptyRows($includeEmptyRows)
  {
    $this->includeEmptyRows = $includeEmptyRows;
  }
  public function getIncludeEmptyRows()
  {
    return $this->includeEmptyRows;
  }
  public function setMetricFilterClauses(array $metricFilterClauses)
  {
    foreach ($metricFilterClauses as $m) {
      if (!$m instanceof Google_Service_AnalyticsReporting_MetricFilterClause) {
        throw new InvalidArgumentException('First argument to setMetricFilterClauses must be an array of Google_Service_AnalyticsReporting_MetricFilterClause');
      }
    }
    $this->metricFilterClauses = $metricFilterClauses;
  }
  public function getMetricFilterClauses()
  {
    return $this->metricFilterClauses;
  }
  public function setMetrics(array $metrics)
  {
    foreach ($metrics as $m) {
      if (!$m instanceof Google_Service_AnalyticsReporting_Metric) {
        throw new InvalidArgumentException('First argument to setMetrics must be an array of Google_Service_AnalyticsReporting_Metric');
      }
    }
    $this->metrics = $metrics;
  }
  public function getMetrics()
  {
    return $this->metrics;
  }
  public function setOrderBys(array $orderBys)
  {
    foreach ($orderBys as $o) {
      if (!$o instanceof Google_Service_AnalyticsReporting_OrderBy) {
        throw new InvalidArgumentException('First argument to setOrderBys must be an array of Google_Service_AnalyticsReporting_OrderBy');
      }
    }
    $this->orderBys = $orderBys;
  }
  public function getOrderBys()
  {
    return $this->orderBys;
  }
  public function setPageSize($pageSize)
  {
    $this->pageSize = $pageSize;
  }
  public function getPageSize()
  {
    return $this->pageSize;
  }
  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }
  public function getPageToken()
  {
    return $this->pageToken;
  }
  public function setPivots(array $pivots)
  {
    foreach ($pivots as $p) {
      if (!$p instanceof Google_Service_AnalyticsReporting_Pivot) {
        throw new InvalidArgumentException('First argument to setPivots must be an array of Google_Service_AnalyticsReporting_Pivot');
      }
    }
    $this->pivots = $pivots;
  }
  public function getPivots()
  {
    return $this->pivots;
  }
  public function setSamplingLevel($samplingLevel)
  {
    $this->samplingLevel = $samplingLevel;
  }
  public function getSamplingLevel()
  {
    return $this->samplingLevel;
  }
  public function setSegments(array $segments)
  {
    foreach ($segments as $s) {
      if (!$s instanceof Google_Service_AnalyticsReporting_Segment) {
        throw new InvalidArgumentException('First argument to setSegments must be an array of Google_Service_AnalyticsReporting_Segment');
      }
    }
    $this->segments = $segments;
  }
  public function getSegments()
  {
    return $this->segments;
  }
  public function setViewId($viewId)
  {
    $this->viewId = $viewId;
  }
  public function getViewId()
  {
    return $this->viewId;
  }
}
