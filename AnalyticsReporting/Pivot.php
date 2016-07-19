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

class Google_Service_AnalyticsReporting_Pivot extends Google_Collection
{
  protected $collection_key = 'metrics';
  public $dimensionFilterClauses;
  public $dimensions;
  public $maxGroupCount;
  public $metrics;
  public $startGroup;

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
  public function setMaxGroupCount($maxGroupCount)
  {
    $this->maxGroupCount = $maxGroupCount;
  }
  public function getMaxGroupCount()
  {
    return $this->maxGroupCount;
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
  public function setStartGroup($startGroup)
  {
    $this->startGroup = $startGroup;
  }
  public function getStartGroup()
  {
    return $this->startGroup;
  }
}
