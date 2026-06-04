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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesBatchJobBatchJobMetadata extends \Google\Model
{
  /**
   * Output only. The time when this batch job was completed. Formatted as yyyy-
   * MM-dd HH:mm:ss. Example: "2018-03-05 09:16:00"
   *
   * @var string
   */
  public $completionDateTime;
  /**
   * Output only. The time when this batch job was created. Formatted as yyyy-
   * mm-dd hh:mm:ss. Example: "2018-03-05 09:15:00"
   *
   * @var string
   */
  public $creationDateTime;
  /**
   * Output only. The fraction (between 0.0 and 1.0) of mutates that have been
   * processed. This is empty if the job hasn't started running yet.
   *
   * @var 
   */
  public $estimatedCompletionRatio;
  /**
   * Output only. The number of mutate operations executed by the batch job.
   * Present only if the job has started running.
   *
   * @var string
   */
  public $executedOperationCount;
  /**
   * Immutable. The approximate upper bound for how long a batch job can be
   * executed, in seconds. If the job runs more than the given upper bound, the
   * job will be canceled.
   *
   * @var int
   */
  public $executionLimitSeconds;
  /**
   * Output only. The number of mutate operations in the batch job.
   *
   * @var string
   */
  public $operationCount;
  /**
   * Output only. The time when this batch job started running. Formatted as
   * yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:30"
   *
   * @var string
   */
  public $startDateTime;

  /**
   * Output only. The time when this batch job was completed. Formatted as yyyy-
   * MM-dd HH:mm:ss. Example: "2018-03-05 09:16:00"
   *
   * @param string $completionDateTime
   */
  public function setCompletionDateTime($completionDateTime)
  {
    $this->completionDateTime = $completionDateTime;
  }
  /**
   * @return string
   */
  public function getCompletionDateTime()
  {
    return $this->completionDateTime;
  }
  /**
   * Output only. The time when this batch job was created. Formatted as yyyy-
   * mm-dd hh:mm:ss. Example: "2018-03-05 09:15:00"
   *
   * @param string $creationDateTime
   */
  public function setCreationDateTime($creationDateTime)
  {
    $this->creationDateTime = $creationDateTime;
  }
  /**
   * @return string
   */
  public function getCreationDateTime()
  {
    return $this->creationDateTime;
  }
  public function setEstimatedCompletionRatio($estimatedCompletionRatio)
  {
    $this->estimatedCompletionRatio = $estimatedCompletionRatio;
  }
  public function getEstimatedCompletionRatio()
  {
    return $this->estimatedCompletionRatio;
  }
  /**
   * Output only. The number of mutate operations executed by the batch job.
   * Present only if the job has started running.
   *
   * @param string $executedOperationCount
   */
  public function setExecutedOperationCount($executedOperationCount)
  {
    $this->executedOperationCount = $executedOperationCount;
  }
  /**
   * @return string
   */
  public function getExecutedOperationCount()
  {
    return $this->executedOperationCount;
  }
  /**
   * Immutable. The approximate upper bound for how long a batch job can be
   * executed, in seconds. If the job runs more than the given upper bound, the
   * job will be canceled.
   *
   * @param int $executionLimitSeconds
   */
  public function setExecutionLimitSeconds($executionLimitSeconds)
  {
    $this->executionLimitSeconds = $executionLimitSeconds;
  }
  /**
   * @return int
   */
  public function getExecutionLimitSeconds()
  {
    return $this->executionLimitSeconds;
  }
  /**
   * Output only. The number of mutate operations in the batch job.
   *
   * @param string $operationCount
   */
  public function setOperationCount($operationCount)
  {
    $this->operationCount = $operationCount;
  }
  /**
   * @return string
   */
  public function getOperationCount()
  {
    return $this->operationCount;
  }
  /**
   * Output only. The time when this batch job started running. Formatted as
   * yyyy-mm-dd hh:mm:ss. Example: "2018-03-05 09:15:30"
   *
   * @param string $startDateTime
   */
  public function setStartDateTime($startDateTime)
  {
    $this->startDateTime = $startDateTime;
  }
  /**
   * @return string
   */
  public function getStartDateTime()
  {
    return $this->startDateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesBatchJobBatchJobMetadata::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesBatchJobBatchJobMetadata');
