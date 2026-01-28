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

namespace Google\Service\Dataproc;

class SparkConnectSessionInfo extends \Google\Model
{
  /**
   * Timestamp when the session finished.
   *
   * @var string
   */
  public $finishTimestamp;
  /**
   * Required. Session ID of the session.
   *
   * @var string
   */
  public $sessionId;
  /**
   * Timestamp when the session started.
   *
   * @var string
   */
  public $startTimestamp;
  /**
   * Optional. Total number of executions in the session.
   *
   * @var string
   */
  public $totalExecution;
  /**
   * User ID of the user who started the session.
   *
   * @var string
   */
  public $userId;

  /**
   * Timestamp when the session finished.
   *
   * @param string $finishTimestamp
   */
  public function setFinishTimestamp($finishTimestamp)
  {
    $this->finishTimestamp = $finishTimestamp;
  }
  /**
   * @return string
   */
  public function getFinishTimestamp()
  {
    return $this->finishTimestamp;
  }
  /**
   * Required. Session ID of the session.
   *
   * @param string $sessionId
   */
  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }
  /**
   * @return string
   */
  public function getSessionId()
  {
    return $this->sessionId;
  }
  /**
   * Timestamp when the session started.
   *
   * @param string $startTimestamp
   */
  public function setStartTimestamp($startTimestamp)
  {
    $this->startTimestamp = $startTimestamp;
  }
  /**
   * @return string
   */
  public function getStartTimestamp()
  {
    return $this->startTimestamp;
  }
  /**
   * Optional. Total number of executions in the session.
   *
   * @param string $totalExecution
   */
  public function setTotalExecution($totalExecution)
  {
    $this->totalExecution = $totalExecution;
  }
  /**
   * @return string
   */
  public function getTotalExecution()
  {
    return $this->totalExecution;
  }
  /**
   * User ID of the user who started the session.
   *
   * @param string $userId
   */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /**
   * @return string
   */
  public function getUserId()
  {
    return $this->userId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SparkConnectSessionInfo::class, 'Google_Service_Dataproc_SparkConnectSessionInfo');
