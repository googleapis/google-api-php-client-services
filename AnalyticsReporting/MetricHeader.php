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

class Google_Service_AnalyticsReporting_MetricHeader extends Google_Collection
{
  protected $collection_key = 'pivotHeaders';
  public $metricHeaderEntries;
  public $pivotHeaders;

  public function setMetricHeaderEntries(array $metricHeaderEntries)
  {
    foreach ($metricHeaderEntries as $m) {
      if (!$m instanceof Google_Service_AnalyticsReporting_MetricHeaderEntry) {
        throw new InvalidArgumentException('First argument to setMetricHeaderEntries must be an array of Google_Service_AnalyticsReporting_MetricHeaderEntry');
      }
    }
    $this->metricHeaderEntries = $metricHeaderEntries;
  }
  public function getMetricHeaderEntries()
  {
    return $this->metricHeaderEntries;
  }
  public function setPivotHeaders(array $pivotHeaders)
  {
    foreach ($pivotHeaders as $p) {
      if (!$p instanceof Google_Service_AnalyticsReporting_PivotHeader) {
        throw new InvalidArgumentException('First argument to setPivotHeaders must be an array of Google_Service_AnalyticsReporting_PivotHeader');
      }
    }
    $this->pivotHeaders = $pivotHeaders;
  }
  public function getPivotHeaders()
  {
    return $this->pivotHeaders;
  }
}
