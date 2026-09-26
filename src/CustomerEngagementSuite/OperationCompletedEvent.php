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

namespace Google\Service\CustomerEngagementSuite;

class OperationCompletedEvent extends \Google\Model
{
  /**
   * Optional deduplication token (e.g. UUID) to prevent duplicate turn
   * execution from concurrent browser tabs.
   *
   * @var string
   */
  public $deduplicationToken;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /**
   * Optional structured result metadata (e.g. pass_rate, total_examples,
   * export_uri).
   *
   * @var array[]
   */
  public $metadata;
  /**
   * The operation resource name (e.g. `operations/{op}`).
   *
   * @var string
   */
  public $operationName;
  /**
   * The operation type or tool name (e.g. "run_evaluation", "copy_app",
   * "export_app").
   *
   * @var string
   */
  public $operationType;
  /**
   * Status of the operation run (e.g. "SUCCEEDED", "FAILED", "CANCELLED").
   *
   * @var string
   */
  public $status;
  /**
   * The primary resource targeted or produced by the operation (e.g. evaluation
   * run ID, app ID, dataset ID).
   *
   * @var string
   */
  public $targetResourceName;

  /**
   * Optional deduplication token (e.g. UUID) to prevent duplicate turn
   * execution from concurrent browser tabs.
   *
   * @param string $deduplicationToken
   */
  public function setDeduplicationToken($deduplicationToken)
  {
    $this->deduplicationToken = $deduplicationToken;
  }
  /**
   * @return string
   */
  public function getDeduplicationToken()
  {
    return $this->deduplicationToken;
  }
  /**
   * Optional canonical error status if the operation failed.
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
   * Optional structured result metadata (e.g. pass_rate, total_examples,
   * export_uri).
   *
   * @param array[] $metadata
   */
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return array[]
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * The operation resource name (e.g. `operations/{op}`).
   *
   * @param string $operationName
   */
  public function setOperationName($operationName)
  {
    $this->operationName = $operationName;
  }
  /**
   * @return string
   */
  public function getOperationName()
  {
    return $this->operationName;
  }
  /**
   * The operation type or tool name (e.g. "run_evaluation", "copy_app",
   * "export_app").
   *
   * @param string $operationType
   */
  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }
  /**
   * @return string
   */
  public function getOperationType()
  {
    return $this->operationType;
  }
  /**
   * Status of the operation run (e.g. "SUCCEEDED", "FAILED", "CANCELLED").
   *
   * @param string $status
   */
  public function setStatus($status)
  {
    $this->status = $status;
  }
  /**
   * @return string
   */
  public function getStatus()
  {
    return $this->status;
  }
  /**
   * The primary resource targeted or produced by the operation (e.g. evaluation
   * run ID, app ID, dataset ID).
   *
   * @param string $targetResourceName
   */
  public function setTargetResourceName($targetResourceName)
  {
    $this->targetResourceName = $targetResourceName;
  }
  /**
   * @return string
   */
  public function getTargetResourceName()
  {
    return $this->targetResourceName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OperationCompletedEvent::class, 'Google_Service_CustomerEngagementSuite_OperationCompletedEvent');
