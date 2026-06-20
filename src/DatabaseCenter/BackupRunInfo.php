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

namespace Google\Service\DatabaseCenter;

class BackupRunInfo extends \Google\Model
{
  /**
   * UNSPECIFIED means operation error type is not known or available.
   */
  public const OPERATION_ERROR_TYPE_OPERATION_ERROR_TYPE_UNSPECIFIED = 'OPERATION_ERROR_TYPE_UNSPECIFIED';
  /**
   * Key destroyed, expired, not found, unreachable or permission denied.
   */
  public const OPERATION_ERROR_TYPE_KMS_KEY_ERROR = 'KMS_KEY_ERROR';
  /**
   * Database is not accessible.
   */
  public const OPERATION_ERROR_TYPE_DATABASE_ERROR = 'DATABASE_ERROR';
  /**
   * The zone or region does not have sufficient resources to handle the request
   * at the moment.
   */
  public const OPERATION_ERROR_TYPE_STOCKOUT_ERROR = 'STOCKOUT_ERROR';
  /**
   * User initiated cancellation.
   */
  public const OPERATION_ERROR_TYPE_CANCELLATION_ERROR = 'CANCELLATION_ERROR';
  /**
   * SQL server specific error.
   */
  public const OPERATION_ERROR_TYPE_SQLSERVER_ERROR = 'SQLSERVER_ERROR';
  /**
   * Any other internal error.
   */
  public const OPERATION_ERROR_TYPE_INTERNAL_ERROR = 'INTERNAL_ERROR';
  /**
   * Unspecified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The backup succeeded.
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * The backup was unsuccessful.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * The time the backup operation completed.
   *
   * @var string
   */
  public $endTime;
  /**
   * Additional information about the error encountered.
   *
   * @var string
   */
  public $errorMessage;
  /**
   * Optional. OperationErrorType to expose specific error when backup operation
   * of database resource failed, that is state is FAILED.
   *
   * @var string
   */
  public $operationErrorType;
  /**
   * The time the backup operation started.
   *
   * @var string
   */
  public $startTime;
  /**
   * Output only. The state of this run.
   *
   * @var string
   */
  public $state;
  protected $subResourceType = SubResource::class;
  protected $subResourceDataType = '';

  /**
   * The time the backup operation completed.
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * Additional information about the error encountered.
   *
   * @param string $errorMessage
   */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /**
   * @return string
   */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /**
   * Optional. OperationErrorType to expose specific error when backup operation
   * of database resource failed, that is state is FAILED.
   *
   * Accepted values: OPERATION_ERROR_TYPE_UNSPECIFIED, KMS_KEY_ERROR,
   * DATABASE_ERROR, STOCKOUT_ERROR, CANCELLATION_ERROR, SQLSERVER_ERROR,
   * INTERNAL_ERROR
   *
   * @param self::OPERATION_ERROR_TYPE_* $operationErrorType
   */
  public function setOperationErrorType($operationErrorType)
  {
    $this->operationErrorType = $operationErrorType;
  }
  /**
   * @return self::OPERATION_ERROR_TYPE_*
   */
  public function getOperationErrorType()
  {
    return $this->operationErrorType;
  }
  /**
   * The time the backup operation started.
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /**
   * Output only. The state of this run.
   *
   * Accepted values: STATE_UNSPECIFIED, SUCCEEDED, FAILED
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
   * Optional. Sub resource details associated with the backup run.
   *
   * @param SubResource $subResource
   */
  public function setSubResource(SubResource $subResource)
  {
    $this->subResource = $subResource;
  }
  /**
   * @return SubResource
   */
  public function getSubResource()
  {
    return $this->subResource;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BackupRunInfo::class, 'Google_Service_DatabaseCenter_BackupRunInfo');
