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

class RestorePhaseInfo extends \Google\Model
{
  /**
   * Phase state is not set.
   */
  public const PHASE_STATE_PHASE_STATE_UNSPECIFIED = 'PHASE_STATE_UNSPECIFIED';
  /**
   * This phase is pending execution.
   */
  public const PHASE_STATE_PENDING = 'PENDING';
  /**
   * The phase is actively executing.
   */
  public const PHASE_STATE_RUNNING = 'RUNNING';
  /**
   * The phase completed successfully.
   */
  public const PHASE_STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * The phase encountered an error and failed.
   */
  public const PHASE_STATE_FAILED = 'FAILED';
  /**
   * The phase timed out.
   */
  public const PHASE_STATE_TIMED_OUT = 'TIMED_OUT';
  /**
   * The phase was skipped.
   */
  public const PHASE_STATE_SKIPPED = 'SKIPPED';
  /**
   * The phase is waiting to be executed.
   */
  public const PHASE_STATE_WAITING = 'WAITING';
  /**
   * Output only. End time of the phase.
   *
   * @var string
   */
  public $endTime;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /**
   * Output only. The state of this phase.
   *
   * @var string
   */
  public $phaseState;
  /**
   * Output only. Time taken to restore the resource.
   *
   * @var string
   */
  public $restoreDuration;
  /**
   * Output only. Snapshot of environment config used during restore of this
   * RestoreTemplateExecution.
   *
   * @var array[]
   */
  public $restoreProperties;
  /**
   * Output only. The resource created or restored by this execution.
   *
   * @var string
   */
  public $restoreResource;
  /**
   * Output only. Start time of the phase.
   *
   * @var string
   */
  public $startTime;

  /**
   * Output only. End time of the phase.
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
   * Output only. Error details if the phase failed.
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
   * Output only. The state of this phase.
   *
   * Accepted values: PHASE_STATE_UNSPECIFIED, PENDING, RUNNING, SUCCEEDED,
   * FAILED, TIMED_OUT, SKIPPED, WAITING
   *
   * @param self::PHASE_STATE_* $phaseState
   */
  public function setPhaseState($phaseState)
  {
    $this->phaseState = $phaseState;
  }
  /**
   * @return self::PHASE_STATE_*
   */
  public function getPhaseState()
  {
    return $this->phaseState;
  }
  /**
   * Output only. Time taken to restore the resource.
   *
   * @param string $restoreDuration
   */
  public function setRestoreDuration($restoreDuration)
  {
    $this->restoreDuration = $restoreDuration;
  }
  /**
   * @return string
   */
  public function getRestoreDuration()
  {
    return $this->restoreDuration;
  }
  /**
   * Output only. Snapshot of environment config used during restore of this
   * RestoreTemplateExecution.
   *
   * @param array[] $restoreProperties
   */
  public function setRestoreProperties($restoreProperties)
  {
    $this->restoreProperties = $restoreProperties;
  }
  /**
   * @return array[]
   */
  public function getRestoreProperties()
  {
    return $this->restoreProperties;
  }
  /**
   * Output only. The resource created or restored by this execution.
   *
   * @param string $restoreResource
   */
  public function setRestoreResource($restoreResource)
  {
    $this->restoreResource = $restoreResource;
  }
  /**
   * @return string
   */
  public function getRestoreResource()
  {
    return $this->restoreResource;
  }
  /**
   * Output only. Start time of the phase.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RestorePhaseInfo::class, 'Google_Service_Backupdr_RestorePhaseInfo');
