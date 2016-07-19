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

class Google_Service_CloudMonitoring_ListMetricDescriptorsResponse extends Google_Collection
{
  protected $collection_key = 'metrics';
  public $kind;
  public $metrics;
  public $nextPageToken;

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
      if (!$m instanceof Google_Service_CloudMonitoring_MetricDescriptor) {
        throw new InvalidArgumentException('First argument to setMetrics must be an array of Google_Service_CloudMonitoring_MetricDescriptor');
      }
    }
    $this->metrics = $metrics;
  }
  public function getMetrics()
  {
    return $this->metrics;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}
