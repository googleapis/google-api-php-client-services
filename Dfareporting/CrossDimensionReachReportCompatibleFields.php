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

class Google_Service_Dfareporting_CrossDimensionReachReportCompatibleFields extends Google_Collection
{
  protected $collection_key = 'overlapMetrics';
  public $breakdown;
  public $dimensionFilters;
  public $kind;
  public $metrics;
  public $overlapMetrics;

  public function setBreakdown(array $breakdown)
  {
    foreach ($breakdown as $b) {
      if (!$b instanceof Google_Service_Dfareporting_Dimension) {
        throw new InvalidArgumentException('First argument to setBreakdown must be an array of Google_Service_Dfareporting_Dimension');
      }
    }
    $this->breakdown = $breakdown;
  }
  public function getBreakdown()
  {
    return $this->breakdown;
  }
  public function setDimensionFilters(array $dimensionFilters)
  {
    foreach ($dimensionFilters as $d) {
      if (!$d instanceof Google_Service_Dfareporting_Dimension) {
        throw new InvalidArgumentException('First argument to setDimensionFilters must be an array of Google_Service_Dfareporting_Dimension');
      }
    }
    $this->dimensionFilters = $dimensionFilters;
  }
  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMetrics(array $metrics)
  {
    foreach ($metrics as $m) {
      if (!$m instanceof Google_Service_Dfareporting_Metric) {
        throw new InvalidArgumentException('First argument to setMetrics must be an array of Google_Service_Dfareporting_Metric');
      }
    }
    $this->metrics = $metrics;
  }
  public function getMetrics()
  {
    return $this->metrics;
  }
  public function setOverlapMetrics(array $overlapMetrics)
  {
    foreach ($overlapMetrics as $o) {
      if (!$o instanceof Google_Service_Dfareporting_Metric) {
        throw new InvalidArgumentException('First argument to setOverlapMetrics must be an array of Google_Service_Dfareporting_Metric');
      }
    }
    $this->overlapMetrics = $overlapMetrics;
  }
  public function getOverlapMetrics()
  {
    return $this->overlapMetrics;
  }
}
