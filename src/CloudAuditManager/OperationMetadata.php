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

namespace Google\Service\CloudAuditManager;

class OperationMetadata extends \Google\Model
{
  /**
   * Output only. The API version used to start the operation. For example,
   * `v1`.
   *
   * @var string
   */
  public $apiVersion;
  /**
   * Output only. Time that the operation was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Time that the operation finished running.
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. Whether you requested that the operation be cancelled.
   * Operations that were cancelled successfully have an Operation.error value
   * with a status code Code.CANCELLED.
   *
   * @var bool
   */
  public $requestedCancellation;
  /**
   * Output only. A human-readable status of the operation, if any.
   *
   * @var string
   */
  public $statusMessage;
  /**
   * Output only. A server-defined resource path for the target of the
   * operation.
   *
   * @var string
   */
  public $target;
  /**
   * Output only. The name of the verb that was executed by the operation.
   *
   * @var string
   */
  public $verb;

  /**
   * Output only. The API version used to start the operation. For example,
   * `v1`.
   *
   * @param string $apiVersion
   */
  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }
  /**
   * @return string
   */
  public function getApiVersion()
  {
    return $this->apiVersion;
  }
  /**
   * Output only. Time that the operation was created.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Output only. Time that the operation finished running.
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
   * Output only. Whether you requested that the operation be cancelled.
   * Operations that were cancelled successfully have an Operation.error value
   * with a status code Code.CANCELLED.
   *
   * @param bool $requestedCancellation
   */
  public function setRequestedCancellation($requestedCancellation)
  {
    $this->requestedCancellation = $requestedCancellation;
  }
  /**
   * @return bool
   */
  public function getRequestedCancellation()
  {
    return $this->requestedCancellation;
  }
  /**
   * Output only. A human-readable status of the operation, if any.
   *
   * @param string $statusMessage
   */
  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }
  /**
   * @return string
   */
  public function getStatusMessage()
  {
    return $this->statusMessage;
  }
  /**
   * Output only. A server-defined resource path for the target of the
   * operation.
   *
   * @param string $target
   */
  public function setTarget($target)
  {
    $this->target = $target;
  }
  /**
   * @return string
   */
  public function getTarget()
  {
    return $this->target;
  }
  /**
   * Output only. The name of the verb that was executed by the operation.
   *
   * @param string $verb
   */
  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
  /**
   * @return string
   */
  public function getVerb()
  {
    return $this->verb;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OperationMetadata::class, 'Google_Service_CloudAuditManager_OperationMetadata');
