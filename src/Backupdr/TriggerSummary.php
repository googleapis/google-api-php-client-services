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

class TriggerSummary extends \Google\Model
{
  protected $lastTriggerErrorType = Status::class;
  protected $lastTriggerErrorDataType = '';
  /**
   * Output only. The time of the most recent trigger initiation.
   *
   * @var string
   */
  public $lastTriggerTime;
  /**
   * Output only. The resource name of the most recent initiated
   * RestoreTemplateExecution. Format: `projects/{project}/locations/{location}/
   * restoreTemplates/{restore_template}/executions/{execution}`
   *
   * @var string
   */
  public $lastVerificationExecution;
  /**
   * Output only. The scheduled time of the next trigger initiation.
   *
   * @var string
   */
  public $nextTriggerTime;

  /**
   * Output only. The error status of the most recent failed trigger.
   *
   * @param Status $lastTriggerError
   */
  public function setLastTriggerError(Status $lastTriggerError)
  {
    $this->lastTriggerError = $lastTriggerError;
  }
  /**
   * @return Status
   */
  public function getLastTriggerError()
  {
    return $this->lastTriggerError;
  }
  /**
   * Output only. The time of the most recent trigger initiation.
   *
   * @param string $lastTriggerTime
   */
  public function setLastTriggerTime($lastTriggerTime)
  {
    $this->lastTriggerTime = $lastTriggerTime;
  }
  /**
   * @return string
   */
  public function getLastTriggerTime()
  {
    return $this->lastTriggerTime;
  }
  /**
   * Output only. The resource name of the most recent initiated
   * RestoreTemplateExecution. Format: `projects/{project}/locations/{location}/
   * restoreTemplates/{restore_template}/executions/{execution}`
   *
   * @param string $lastVerificationExecution
   */
  public function setLastVerificationExecution($lastVerificationExecution)
  {
    $this->lastVerificationExecution = $lastVerificationExecution;
  }
  /**
   * @return string
   */
  public function getLastVerificationExecution()
  {
    return $this->lastVerificationExecution;
  }
  /**
   * Output only. The scheduled time of the next trigger initiation.
   *
   * @param string $nextTriggerTime
   */
  public function setNextTriggerTime($nextTriggerTime)
  {
    $this->nextTriggerTime = $nextTriggerTime;
  }
  /**
   * @return string
   */
  public function getNextTriggerTime()
  {
    return $this->nextTriggerTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TriggerSummary::class, 'Google_Service_Backupdr_TriggerSummary');
