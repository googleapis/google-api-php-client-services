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

class SparkConnectExecutionInfo extends \Google\Collection
{
  /**
   * Execution state is unknown.
   */
  public const STATE_EXECUTION_STATE_UNKNOWN = 'EXECUTION_STATE_UNKNOWN';
  /**
   * Execution state is started.
   */
  public const STATE_EXECUTION_STATE_STARTED = 'EXECUTION_STATE_STARTED';
  /**
   * Execution state is compiled.
   */
  public const STATE_EXECUTION_STATE_COMPILED = 'EXECUTION_STATE_COMPILED';
  /**
   * Execution state is ready.
   */
  public const STATE_EXECUTION_STATE_READY = 'EXECUTION_STATE_READY';
  /**
   * Execution state is canceled.
   */
  public const STATE_EXECUTION_STATE_CANCELED = 'EXECUTION_STATE_CANCELED';
  /**
   * Execution state is failed.
   */
  public const STATE_EXECUTION_STATE_FAILED = 'EXECUTION_STATE_FAILED';
  /**
   * Execution state is finished.
   */
  public const STATE_EXECUTION_STATE_FINISHED = 'EXECUTION_STATE_FINISHED';
  /**
   * Execution state is closed.
   */
  public const STATE_EXECUTION_STATE_CLOSED = 'EXECUTION_STATE_CLOSED';
  protected $collection_key = 'sqlExecIds';
  /**
   * Timestamp when the execution was closed.
   *
   * @var string
   */
  public $closeTimestamp;
  /**
   * Detailed information about the execution.
   *
   * @var string
   */
  public $detail;
  /**
   * Timestamp when the execution finished.
   *
   * @var string
   */
  public $finishTimestamp;
  /**
   * Optional. List of job ids associated with the execution.
   *
   * @var string[]
   */
  public $jobIds;
  /**
   * Required. Job tag of the execution.
   *
   * @var string
   */
  public $jobTag;
  /**
   * Unique identifier for the operation.
   *
   * @var string
   */
  public $operationId;
  /**
   * Required. Session ID, ties the execution to a specific Spark Connect
   * session.
   *
   * @var string
   */
  public $sessionId;
  /**
   * Optional. Tags associated with the Spark session.
   *
   * @var string[]
   */
  public $sparkSessionTags;
  /**
   * Optional. List of sql execution ids associated with the execution.
   *
   * @var string[]
   */
  public $sqlExecIds;
  /**
   * Timestamp when the execution started.
   *
   * @var string
   */
  public $startTimestamp;
  /**
   * Output only. Current state of the execution.
   *
   * @var string
   */
  public $state;
  /**
   * statement of the execution.
   *
   * @var string
   */
  public $statement;
  /**
   * User ID of the user who started the execution.
   *
   * @var string
   */
  public $userId;

  /**
   * Timestamp when the execution was closed.
   *
   * @param string $closeTimestamp
   */
  public function setCloseTimestamp($closeTimestamp)
  {
    $this->closeTimestamp = $closeTimestamp;
  }
  /**
   * @return string
   */
  public function getCloseTimestamp()
  {
    return $this->closeTimestamp;
  }
  /**
   * Detailed information about the execution.
   *
   * @param string $detail
   */
  public function setDetail($detail)
  {
    $this->detail = $detail;
  }
  /**
   * @return string
   */
  public function getDetail()
  {
    return $this->detail;
  }
  /**
   * Timestamp when the execution finished.
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
   * Optional. List of job ids associated with the execution.
   *
   * @param string[] $jobIds
   */
  public function setJobIds($jobIds)
  {
    $this->jobIds = $jobIds;
  }
  /**
   * @return string[]
   */
  public function getJobIds()
  {
    return $this->jobIds;
  }
  /**
   * Required. Job tag of the execution.
   *
   * @param string $jobTag
   */
  public function setJobTag($jobTag)
  {
    $this->jobTag = $jobTag;
  }
  /**
   * @return string
   */
  public function getJobTag()
  {
    return $this->jobTag;
  }
  /**
   * Unique identifier for the operation.
   *
   * @param string $operationId
   */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /**
   * @return string
   */
  public function getOperationId()
  {
    return $this->operationId;
  }
  /**
   * Required. Session ID, ties the execution to a specific Spark Connect
   * session.
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
   * Optional. Tags associated with the Spark session.
   *
   * @param string[] $sparkSessionTags
   */
  public function setSparkSessionTags($sparkSessionTags)
  {
    $this->sparkSessionTags = $sparkSessionTags;
  }
  /**
   * @return string[]
   */
  public function getSparkSessionTags()
  {
    return $this->sparkSessionTags;
  }
  /**
   * Optional. List of sql execution ids associated with the execution.
   *
   * @param string[] $sqlExecIds
   */
  public function setSqlExecIds($sqlExecIds)
  {
    $this->sqlExecIds = $sqlExecIds;
  }
  /**
   * @return string[]
   */
  public function getSqlExecIds()
  {
    return $this->sqlExecIds;
  }
  /**
   * Timestamp when the execution started.
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
   * Output only. Current state of the execution.
   *
   * Accepted values: EXECUTION_STATE_UNKNOWN, EXECUTION_STATE_STARTED,
   * EXECUTION_STATE_COMPILED, EXECUTION_STATE_READY, EXECUTION_STATE_CANCELED,
   * EXECUTION_STATE_FAILED, EXECUTION_STATE_FINISHED, EXECUTION_STATE_CLOSED
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
   * statement of the execution.
   *
   * @param string $statement
   */
  public function setStatement($statement)
  {
    $this->statement = $statement;
  }
  /**
   * @return string
   */
  public function getStatement()
  {
    return $this->statement;
  }
  /**
   * User ID of the user who started the execution.
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
class_alias(SparkConnectExecutionInfo::class, 'Google_Service_Dataproc_SparkConnectExecutionInfo');
