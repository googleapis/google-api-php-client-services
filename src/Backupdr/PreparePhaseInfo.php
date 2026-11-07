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

class PreparePhaseInfo extends \Google\Model
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
   * Output only. The source backup used for the restore. The fully qualified
   * URI of the backupdr backup.
   *
   * @var string
   */
  public $backup;
  protected $backupSelectionConfigType = BackupSelectionConfig::class;
  protected $backupSelectionConfigDataType = '';
  /**
   * Output only. End time of the phase.
   *
   * @var string
   */
  public $endTime;
  protected $errorType = Status::class;
  protected $errorDataType = '';
  /**
   * Output only. Indicates whether the backup was explicitly passed in the
   * request.
   *
   * @var bool
   */
  public $isBackupExplicitlyPassed;
  /**
   * Output only. The state of this phase.
   *
   * @var string
   */
  public $phaseState;
  /**
   * Output only. The restore verification plan association associated with the
   * execution.
   *
   * @var string
   */
  public $restoreVerificationPlanAssociation;
  /**
   * Output only. Start time of the phase.
   *
   * @var string
   */
  public $startTime;

  /**
   * Output only. The source backup used for the restore. The fully qualified
   * URI of the backupdr backup.
   *
   * @param string $backup
   */
  public function setBackup($backup)
  {
    $this->backup = $backup;
  }
  /**
   * @return string
   */
  public function getBackup()
  {
    return $this->backup;
  }
  /**
   * Output only. Snapshot of config used in this execution.
   *
   * @param BackupSelectionConfig $backupSelectionConfig
   */
  public function setBackupSelectionConfig(BackupSelectionConfig $backupSelectionConfig)
  {
    $this->backupSelectionConfig = $backupSelectionConfig;
  }
  /**
   * @return BackupSelectionConfig
   */
  public function getBackupSelectionConfig()
  {
    return $this->backupSelectionConfig;
  }
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
   * Output only. Indicates whether the backup was explicitly passed in the
   * request.
   *
   * @param bool $isBackupExplicitlyPassed
   */
  public function setIsBackupExplicitlyPassed($isBackupExplicitlyPassed)
  {
    $this->isBackupExplicitlyPassed = $isBackupExplicitlyPassed;
  }
  /**
   * @return bool
   */
  public function getIsBackupExplicitlyPassed()
  {
    return $this->isBackupExplicitlyPassed;
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
   * Output only. The restore verification plan association associated with the
   * execution.
   *
   * @param string $restoreVerificationPlanAssociation
   */
  public function setRestoreVerificationPlanAssociation($restoreVerificationPlanAssociation)
  {
    $this->restoreVerificationPlanAssociation = $restoreVerificationPlanAssociation;
  }
  /**
   * @return string
   */
  public function getRestoreVerificationPlanAssociation()
  {
    return $this->restoreVerificationPlanAssociation;
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
class_alias(PreparePhaseInfo::class, 'Google_Service_Backupdr_PreparePhaseInfo');
