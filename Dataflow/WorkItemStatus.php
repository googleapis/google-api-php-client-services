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

class Google_Service_Dataflow_WorkItemStatus extends Google_Collection
{
  protected $collection_key = 'metricUpdates';
  public $completed;
  public $counterUpdates;
  public $dynamicSourceSplit;
  public $errors;
  public $metricUpdates;
  public $progress;
  public $reportIndex;
  public $reportedProgress;
  public $requestedLeaseDuration;
  public $sourceFork;
  public $sourceOperationResponse;
  public $stopPosition;
  public $workItemId;

  public function setCompleted($completed)
  {
    $this->completed = $completed;
  }
  public function getCompleted()
  {
    return $this->completed;
  }
  public function setCounterUpdates(array $counterUpdates)
  {
    foreach ($counterUpdates as $c) {
      if (!$c instanceof Google_Service_Dataflow_CounterUpdate) {
        throw new InvalidArgumentException('First argument to setCounterUpdates must be an array of Google_Service_Dataflow_CounterUpdate');
      }
    }
    $this->counterUpdates = $counterUpdates;
  }
  public function getCounterUpdates()
  {
    return $this->counterUpdates;
  }
  public function setDynamicSourceSplit(Google_Service_Dataflow_DynamicSourceSplit $dynamicSourceSplit)
  {
    $this->dynamicSourceSplit = $dynamicSourceSplit;
  }
  public function getDynamicSourceSplit()
  {
    return $this->dynamicSourceSplit;
  }
  public function setErrors(array $errors)
  {
    foreach ($errors as $e) {
      if (!$e instanceof Google_Service_Dataflow_Status) {
        throw new InvalidArgumentException('First argument to setErrors must be an array of Google_Service_Dataflow_Status');
      }
    }
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }
  public function setMetricUpdates(array $metricUpdates)
  {
    foreach ($metricUpdates as $m) {
      if (!$m instanceof Google_Service_Dataflow_MetricUpdate) {
        throw new InvalidArgumentException('First argument to setMetricUpdates must be an array of Google_Service_Dataflow_MetricUpdate');
      }
    }
    $this->metricUpdates = $metricUpdates;
  }
  public function getMetricUpdates()
  {
    return $this->metricUpdates;
  }
  public function setProgress(Google_Service_Dataflow_ApproximateProgress $progress)
  {
    $this->progress = $progress;
  }
  public function getProgress()
  {
    return $this->progress;
  }
  public function setReportIndex($reportIndex)
  {
    $this->reportIndex = $reportIndex;
  }
  public function getReportIndex()
  {
    return $this->reportIndex;
  }
  public function setReportedProgress(Google_Service_Dataflow_ApproximateReportedProgress $reportedProgress)
  {
    $this->reportedProgress = $reportedProgress;
  }
  public function getReportedProgress()
  {
    return $this->reportedProgress;
  }
  public function setRequestedLeaseDuration($requestedLeaseDuration)
  {
    $this->requestedLeaseDuration = $requestedLeaseDuration;
  }
  public function getRequestedLeaseDuration()
  {
    return $this->requestedLeaseDuration;
  }
  public function setSourceFork(Google_Service_Dataflow_SourceFork $sourceFork)
  {
    $this->sourceFork = $sourceFork;
  }
  public function getSourceFork()
  {
    return $this->sourceFork;
  }
  public function setSourceOperationResponse(Google_Service_Dataflow_SourceOperationResponse $sourceOperationResponse)
  {
    $this->sourceOperationResponse = $sourceOperationResponse;
  }
  public function getSourceOperationResponse()
  {
    return $this->sourceOperationResponse;
  }
  public function setStopPosition(Google_Service_Dataflow_Position $stopPosition)
  {
    $this->stopPosition = $stopPosition;
  }
  public function getStopPosition()
  {
    return $this->stopPosition;
  }
  public function setWorkItemId($workItemId)
  {
    $this->workItemId = $workItemId;
  }
  public function getWorkItemId()
  {
    return $this->workItemId;
  }
}
