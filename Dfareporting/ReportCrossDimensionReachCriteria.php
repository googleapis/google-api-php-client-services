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

class Google_Service_Dfareporting_ReportCrossDimensionReachCriteria extends Google_Collection
{
  protected $collection_key = 'overlapMetricNames';
  public $breakdown;
  public $dateRange;
  public $dimension;
  public $dimensionFilters;
  public $metricNames;
  public $overlapMetricNames;
  public $pivoted;

  public function setBreakdown(array $breakdown)
  {
    foreach ($breakdown as $b) {
      if (!$b instanceof Google_Service_Dfareporting_SortedDimension) {
        throw new InvalidArgumentException('First argument to setBreakdown must be an array of Google_Service_Dfareporting_SortedDimension');
      }
    }
    $this->breakdown = $breakdown;
  }
  public function getBreakdown()
  {
    return $this->breakdown;
  }
  public function setDateRange(Google_Service_Dfareporting_DateRange $dateRange)
  {
    $this->dateRange = $dateRange;
  }
  public function getDateRange()
  {
    return $this->dateRange;
  }
  public function setDimension($dimension)
  {
    $this->dimension = $dimension;
  }
  public function getDimension()
  {
    return $this->dimension;
  }
  public function setDimensionFilters(array $dimensionFilters)
  {
    foreach ($dimensionFilters as $d) {
      if (!$d instanceof Google_Service_Dfareporting_DimensionValue) {
        throw new InvalidArgumentException('First argument to setDimensionFilters must be an array of Google_Service_Dfareporting_DimensionValue');
      }
    }
    $this->dimensionFilters = $dimensionFilters;
  }
  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }
  public function setMetricNames(array $metricNames)
  {
    $this->metricNames = $metricNames;
  }
  public function getMetricNames()
  {
    return $this->metricNames;
  }
  public function setOverlapMetricNames(array $overlapMetricNames)
  {
    $this->overlapMetricNames = $overlapMetricNames;
  }
  public function getOverlapMetricNames()
  {
    return $this->overlapMetricNames;
  }
  public function setPivoted($pivoted)
  {
    $this->pivoted = $pivoted;
  }
  public function getPivoted()
  {
    return $this->pivoted;
  }
}
