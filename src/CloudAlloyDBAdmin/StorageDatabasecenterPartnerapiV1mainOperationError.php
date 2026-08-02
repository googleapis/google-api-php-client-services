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

namespace Google\Service\CloudAlloyDBAdmin;

class StorageDatabasecenterPartnerapiV1mainOperationError extends \Google\Model
{
  /**
   * UNSPECIFIED means product type is not known or available.
   */
  public const ERROR_TYPE_OPERATION_ERROR_TYPE_UNSPECIFIED = 'OPERATION_ERROR_TYPE_UNSPECIFIED';
  /**
   * key destroyed, expired, not found, unreachable or permission denied.
   */
  public const ERROR_TYPE_KMS_KEY_ERROR = 'KMS_KEY_ERROR';
  /**
   * Database is not accessible
   */
  public const ERROR_TYPE_DATABASE_ERROR = 'DATABASE_ERROR';
  /**
   * The zone or region does not have sufficient resources to handle the request
   * at the moment
   */
  public const ERROR_TYPE_STOCKOUT_ERROR = 'STOCKOUT_ERROR';
  /**
   * User initiated cancellation
   */
  public const ERROR_TYPE_CANCELLATION_ERROR = 'CANCELLATION_ERROR';
  /**
   * SQL server specific error
   */
  public const ERROR_TYPE_SQLSERVER_ERROR = 'SQLSERVER_ERROR';
  /**
   * Any other internal error.
   */
  public const ERROR_TYPE_INTERNAL_ERROR = 'INTERNAL_ERROR';
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $code;
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $errorType;
  /**
   * Disable validation warnings
   *
   * @var string
   */
  public $message;

  /**
   * Disable validation warnings
   *
   * @param string $code
   */
  public function setCode($code)
  {
    $this->code = $code;
  }
  /**
   * @return string
   */
  public function getCode()
  {
    return $this->code;
  }
  /**
   * Disable validation warnings
   *
   * Accepted values: OPERATION_ERROR_TYPE_UNSPECIFIED, KMS_KEY_ERROR,
   * DATABASE_ERROR, STOCKOUT_ERROR, CANCELLATION_ERROR, SQLSERVER_ERROR,
   * INTERNAL_ERROR
   *
   * @param self::ERROR_TYPE_* $errorType
   */
  public function setErrorType($errorType)
  {
    $this->errorType = $errorType;
  }
  /**
   * @return self::ERROR_TYPE_*
   */
  public function getErrorType()
  {
    return $this->errorType;
  }
  /**
   * Disable validation warnings
   *
   * @param string $message
   */
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /**
   * @return string
   */
  public function getMessage()
  {
    return $this->message;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StorageDatabasecenterPartnerapiV1mainOperationError::class, 'Google_Service_CloudAlloyDBAdmin_StorageDatabasecenterPartnerapiV1mainOperationError');
