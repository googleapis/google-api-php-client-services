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

class VerificationSummary extends \Google\Model
{
  /**
   * Verification state is unspecified.
   */
  public const LAST_VERIFICATION_STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Verification succeeded.
   */
  public const LAST_VERIFICATION_STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * Verification failed.
   */
  public const LAST_VERIFICATION_STATE_FAILED = 'FAILED';
  /**
   * Output only. The last verification execution.
   *
   * @var string
   */
  public $lastVerificationExecution;
  /**
   * Output only. The state of the last verification.
   *
   * @var string
   */
  public $lastVerificationState;
  /**
   * Output only. The time when the backup was last verified.
   *
   * @var string
   */
  public $lastVerificationTime;

  /**
   * Output only. The last verification execution.
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
   * Output only. The state of the last verification.
   *
   * Accepted values: STATE_UNSPECIFIED, SUCCEEDED, FAILED
   *
   * @param self::LAST_VERIFICATION_STATE_* $lastVerificationState
   */
  public function setLastVerificationState($lastVerificationState)
  {
    $this->lastVerificationState = $lastVerificationState;
  }
  /**
   * @return self::LAST_VERIFICATION_STATE_*
   */
  public function getLastVerificationState()
  {
    return $this->lastVerificationState;
  }
  /**
   * Output only. The time when the backup was last verified.
   *
   * @param string $lastVerificationTime
   */
  public function setLastVerificationTime($lastVerificationTime)
  {
    $this->lastVerificationTime = $lastVerificationTime;
  }
  /**
   * @return string
   */
  public function getLastVerificationTime()
  {
    return $this->lastVerificationTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VerificationSummary::class, 'Google_Service_Backupdr_VerificationSummary');
