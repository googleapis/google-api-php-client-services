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

namespace Google\Service\BigQueryDataTransfer;

class TransferResourceStatusDetail extends \Google\Model
{
  /**
   * Default value.
   */
  public const STATE_RESOURCE_TRANSFER_STATE_UNSPECIFIED = 'RESOURCE_TRANSFER_STATE_UNSPECIFIED';
  /**
   * Resource is waiting to be transferred.
   */
  public const STATE_RESOURCE_TRANSFER_PENDING = 'RESOURCE_TRANSFER_PENDING';
  /**
   * Resource transfer is running.
   */
  public const STATE_RESOURCE_TRANSFER_RUNNING = 'RESOURCE_TRANSFER_RUNNING';
  /**
   * Resource transfer is a success.
   */
  public const STATE_RESOURCE_TRANSFER_SUCCEEDED = 'RESOURCE_TRANSFER_SUCCEEDED';
  /**
   * Resource transfer failed.
   */
  public const STATE_RESOURCE_TRANSFER_FAILED = 'RESOURCE_TRANSFER_FAILED';
  /**
   * Resource transfer was cancelled.
   */
  public const STATE_RESOURCE_TRANSFER_CANCELLED = 'RESOURCE_TRANSFER_CANCELLED';
  /**
   * Output only. Percentage of the transfer completed. Valid values: 0-100.
   *
   * @var 
   */
  public $completedPercentage;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /**
   * Optional. Transfer state of the resource.
   *
   * @var string
   */
  public $state;
  protected $summaryType = TransferStatusSummary::class;
  protected $summaryDataType = '';

  public function setCompletedPercentage($completedPercentage)
  {
    $this->completedPercentage = $completedPercentage;
  }
  public function getCompletedPercentage()
  {
    return $this->completedPercentage;
  }
  /**
   * Optional. Transfer error details for the resource.
   *
   * @param Status $error
   */
  public function setError(Status $error)
  {
    $this->error = $error;
  }
  /**
   * @return Status
   */
  public function getError()
  {
    return $this->error;
  }
  /**
   * Optional. Transfer state of the resource.
   *
   * Accepted values: RESOURCE_TRANSFER_STATE_UNSPECIFIED,
   * RESOURCE_TRANSFER_PENDING, RESOURCE_TRANSFER_RUNNING,
   * RESOURCE_TRANSFER_SUCCEEDED, RESOURCE_TRANSFER_FAILED,
   * RESOURCE_TRANSFER_CANCELLED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Optional. Transfer status summary of the resource.
   *
   * @param TransferStatusSummary $summary
   */
  public function setSummary(TransferStatusSummary $summary)
  {
    $this->summary = $summary;
  }
  /**
   * @return TransferStatusSummary
   */
  public function getSummary()
  {
    return $this->summary;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TransferResourceStatusDetail::class, 'Google_Service_BigQueryDataTransfer_TransferResourceStatusDetail');
