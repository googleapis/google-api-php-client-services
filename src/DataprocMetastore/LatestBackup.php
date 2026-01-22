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

namespace Google\Service\DataprocMetastore;

class LatestBackup extends \Google\Model
{
  /**
   * The state of the backup is unknown.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The backup is in progress.
   */
  public const STATE_IN_PROGRESS = 'IN_PROGRESS';
  /**
   * The backup completed.
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * The backup failed.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * Output only. The ID of an in-progress scheduled backup. Empty if no backup
   * is in progress.
   *
   * @var string
   */
  public $backupId;
  /**
   * Output only. The duration of the backup completion.
   *
   * @var string
   */
  public $duration;
  /**
   * Output only. The time when the backup was started.
   *
   * @var string
   */
  public $startTime;
  /**
   * Output only. The current state of the backup.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. The ID of an in-progress scheduled backup. Empty if no backup
   * is in progress.
   *
   * @param string $backupId
   */
  public function setBackupId($backupId)
  {
    $this->backupId = $backupId;
  }
  /**
   * @return string
   */
  public function getBackupId()
  {
    return $this->backupId;
  }
  /**
   * Output only. The duration of the backup completion.
   *
   * @param string $duration
   */
  public function setDuration($duration)
  {
    $this->duration = $duration;
  }
  /**
   * @return string
   */
  public function getDuration()
  {
    return $this->duration;
  }
  /**
   * Output only. The time when the backup was started.
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
  /**
   * Output only. The current state of the backup.
   *
   * Accepted values: STATE_UNSPECIFIED, IN_PROGRESS, SUCCEEDED, FAILED
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LatestBackup::class, 'Google_Service_DataprocMetastore_LatestBackup');
