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

class Restore extends \Google\Model
{
  /**
   * The state of the metadata restore is unknown.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The metadata restore is running.
   */
  public const STATE_RUNNING = 'RUNNING';
  /**
   * The metadata restore completed successfully.
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * The metadata restore failed.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * The metadata restore is cancelled.
   */
  public const STATE_CANCELLED = 'CANCELLED';
  /**
   * The restore type is unknown.
   */
  public const TYPE_RESTORE_TYPE_UNSPECIFIED = 'RESTORE_TYPE_UNSPECIFIED';
  /**
   * The service's metadata and configuration are restored.
   */
  public const TYPE_FULL = 'FULL';
  /**
   * Only the service's metadata is restored.
   */
  public const TYPE_METADATA_ONLY = 'METADATA_ONLY';
  /**
   * Output only. The relative resource name of the metastore service backup to
   * restore from, in the following form:projects/{project_id}/locations/{locati
   * on_id}/services/{service_id}/backups/{backup_id}.
   *
   * @var string
   */
  public $backup;
  /**
   * Optional. A Cloud Storage URI specifying where the backup artifacts are
   * stored, in the format gs:.
   *
   * @var string
   */
  public $backupLocation;
  /**
   * Output only. The restore details containing the revision of the service to
   * be restored to, in format of JSON.
   *
   * @var string
   */
  public $details;
  /**
   * Output only. The time when the restore ended.
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. The time when the restore started.
   *
   * @var string
   */
  public $startTime;
  /**
   * Output only. The current state of the restore.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The type of restore.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. The relative resource name of the metastore service backup to
   * restore from, in the following form:projects/{project_id}/locations/{locati
   * on_id}/services/{service_id}/backups/{backup_id}.
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
   * Optional. A Cloud Storage URI specifying where the backup artifacts are
   * stored, in the format gs:.
   *
   * @param string $backupLocation
   */
  public function setBackupLocation($backupLocation)
  {
    $this->backupLocation = $backupLocation;
  }
  /**
   * @return string
   */
  public function getBackupLocation()
  {
    return $this->backupLocation;
  }
  /**
   * Output only. The restore details containing the revision of the service to
   * be restored to, in format of JSON.
   *
   * @param string $details
   */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /**
   * @return string
   */
  public function getDetails()
  {
    return $this->details;
  }
  /**
   * Output only. The time when the restore ended.
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
   * Output only. The time when the restore started.
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
   * Output only. The current state of the restore.
   *
   * Accepted values: STATE_UNSPECIFIED, RUNNING, SUCCEEDED, FAILED, CANCELLED
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
   * Output only. The type of restore.
   *
   * Accepted values: RESTORE_TYPE_UNSPECIFIED, FULL, METADATA_ONLY
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Restore::class, 'Google_Service_DataprocMetastore_Restore');
