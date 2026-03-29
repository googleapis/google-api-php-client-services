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

namespace Google\Service\Compute;

class InstanceGroupManagerStatusBulkInstanceOperationLastProgressCheck extends \Google\Model
{
  protected $errorType = InstanceGroupManagerStatusBulkInstanceOperationLastProgressCheckError::class;
  protected $errorDataType = '';
  /**
   * Output only. Timestamp of the last progress check of bulk instance
   * operation. Timestamp is in RFC3339 text format.
   *
   * @var string
   */
  public $timestamp;

  /**
   * Output only. Errors encountered during bulk instance operation.
   *
   * @param InstanceGroupManagerStatusBulkInstanceOperationLastProgressCheckError $error
   */
  public function setError(InstanceGroupManagerStatusBulkInstanceOperationLastProgressCheckError $error)
  {
    $this->error = $error;
  }
  /**
   * @return InstanceGroupManagerStatusBulkInstanceOperationLastProgressCheckError
   */
  public function getError()
  {
    return $this->error;
  }
  /**
   * Output only. Timestamp of the last progress check of bulk instance
   * operation. Timestamp is in RFC3339 text format.
   *
   * @param string $timestamp
   */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /**
   * @return string
   */
  public function getTimestamp()
  {
    return $this->timestamp;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstanceGroupManagerStatusBulkInstanceOperationLastProgressCheck::class, 'Google_Service_Compute_InstanceGroupManagerStatusBulkInstanceOperationLastProgressCheck');
