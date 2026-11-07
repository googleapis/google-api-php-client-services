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

namespace Google\Service\Backupdr;

class ExecutionSummary extends \Google\Model
{
  /**
   * State not set.
   */
  public const LAST_EXECUTION_STATE_EXECUTION_STATE_UNSPECIFIED = 'EXECUTION_STATE_UNSPECIFIED';
  /**
   * Execution is running.
   */
  public const LAST_EXECUTION_STATE_RUNNING = 'RUNNING';
  /**
   * Execution succeeded.
   */
  public const LAST_EXECUTION_STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * Execution failed.
   */
  public const LAST_EXECUTION_STATE_FAILED = 'FAILED';
  /**
   * Resources are being deleted (cleanup).
   */
  public const LAST_EXECUTION_STATE_DELETING = 'DELETING';
  /**
   * Output only. The resource name of the last execution. Format: `projects/{pr
   * oject}/locations/{location}/restoreTemplates/{restore_template}/executions/
   * {execution}`
   *
   * @var string
   */
  public $lastExecution;
  /**
   * Output only. The state of the last execution.
   *
   * @var string
   */
  public $lastExecutionState;

  /**
   * Output only. The resource name of the last execution. Format: `projects/{pr
   * oject}/locations/{location}/restoreTemplates/{restore_template}/executions/
   * {execution}`
   *
   * @param string $lastExecution
   */
  public function setLastExecution($lastExecution)
  {
    $this->lastExecution = $lastExecution;
  }
  /**
   * @return string
   */
  public function getLastExecution()
  {
    return $this->lastExecution;
  }
  /**
   * Output only. The state of the last execution.
   *
   * Accepted values: EXECUTION_STATE_UNSPECIFIED, RUNNING, SUCCEEDED, FAILED,
   * DELETING
   *
   * @param self::LAST_EXECUTION_STATE_* $lastExecutionState
   */
  public function setLastExecutionState($lastExecutionState)
  {
    $this->lastExecutionState = $lastExecutionState;
  }
  /**
   * @return self::LAST_EXECUTION_STATE_*
   */
  public function getLastExecutionState()
  {
    return $this->lastExecutionState;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExecutionSummary::class, 'Google_Service_Backupdr_ExecutionSummary');
