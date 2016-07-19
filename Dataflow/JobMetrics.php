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

class Google_Service_Dataflow_JobMetrics extends Google_Collection
{
  protected $collection_key = 'metrics';
  public $metricTime;
  public $metrics;

  public function setMetricTime($metricTime)
  {
    $this->metricTime = $metricTime;
  }
  public function getMetricTime()
  {
    return $this->metricTime;
  }
  public function setMetrics(array $metrics)
  {
    foreach ($metrics as $m) {
      if (!$m instanceof Google_Service_Dataflow_MetricUpdate) {
        throw new InvalidArgumentException('First argument to setMetrics must be an array of Google_Service_Dataflow_MetricUpdate');
      }
    }
    $this->metrics = $metrics;
  }
  public function getMetrics()
  {
    return $this->metrics;
  }
}
