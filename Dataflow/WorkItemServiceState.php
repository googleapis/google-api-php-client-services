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

class Google_Service_Dataflow_WorkItemServiceState extends Google_Collection
{
  protected $collection_key = 'metricShortId';
  public $harnessData;
  public $leaseExpireTime;
  public $metricShortId;
  public $nextReportIndex;
  public $reportStatusInterval;
  public $splitRequest;
  public $suggestedStopPoint;
  public $suggestedStopPosition;

  public function setHarnessData(array $harnessData)
  {
    $this->harnessData = $harnessData;
  }
  public function getHarnessData()
  {
    return $this->harnessData;
  }
  public function setLeaseExpireTime($leaseExpireTime)
  {
    $this->leaseExpireTime = $leaseExpireTime;
  }
  public function getLeaseExpireTime()
  {
    return $this->leaseExpireTime;
  }
  public function setMetricShortId(array $metricShortId)
  {
    foreach ($metricShortId as $m) {
      if (!$m instanceof Google_Service_Dataflow_MetricShortId) {
        throw new InvalidArgumentException('First argument to setMetricShortId must be an array of Google_Service_Dataflow_MetricShortId');
      }
    }
    $this->metricShortId = $metricShortId;
  }
  public function getMetricShortId()
  {
    return $this->metricShortId;
  }
  public function setNextReportIndex($nextReportIndex)
  {
    $this->nextReportIndex = $nextReportIndex;
  }
  public function getNextReportIndex()
  {
    return $this->nextReportIndex;
  }
  public function setReportStatusInterval($reportStatusInterval)
  {
    $this->reportStatusInterval = $reportStatusInterval;
  }
  public function getReportStatusInterval()
  {
    return $this->reportStatusInterval;
  }
  public function setSplitRequest(Google_Service_Dataflow_ApproximateSplitRequest $splitRequest)
  {
    $this->splitRequest = $splitRequest;
  }
  public function getSplitRequest()
  {
    return $this->splitRequest;
  }
  public function setSuggestedStopPoint(Google_Service_Dataflow_ApproximateProgress $suggestedStopPoint)
  {
    $this->suggestedStopPoint = $suggestedStopPoint;
  }
  public function getSuggestedStopPoint()
  {
    return $this->suggestedStopPoint;
  }
  public function setSuggestedStopPosition(Google_Service_Dataflow_Position $suggestedStopPosition)
  {
    $this->suggestedStopPosition = $suggestedStopPosition;
  }
  public function getSuggestedStopPosition()
  {
    return $this->suggestedStopPosition;
  }
}
