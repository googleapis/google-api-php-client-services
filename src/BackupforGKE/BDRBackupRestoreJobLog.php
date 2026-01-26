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

namespace Google\Service\BackupforGKE;

class BDRBackupRestoreJobLog extends \Google\Model
{
  /**
   * Backup consistency time.
   *
   * @var string
   */
  public $backupConsistencyTime;
  /**
   * Full resource name of the backup created in backup jobs and used in restore
   * jobs.
   *
   * @var string
   */
  public $backupName;
  /**
   * Full resource name for Backup Plan of the job. Only populated for Scheduled
   * Backup and Adhoc Backup.
   *
   * @var string
   */
  public $backupPlanName;
  /**
   * Backup retention in days.
   *
   * @var int
   */
  public $backupRetentionDays;
  /**
   * Name of the backup rule. Only populated for Scheduled Backup and Adhoc
   * Backup.
   *
   * @var string
   */
  public $backupRule;
  /**
   * Full resource name backup vault name
   *
   * @var string
   */
  public $backupVaultName;
  /**
   * End time of the job.
   *
   * @var string
   */
  public $endTime;
  /**
   * The error code. Only populated in error scenarios.
   *
   * @var int
   */
  public $errorCode;
  /**
   * The user readable error message. Only populated in error scenarios.
   *
   * @var string
   */
  public $errorMessage;
  /**
   * The name of the error type eg. PERMISSION_DENIED. Only populated in error
   * scenarios.
   *
   * @var string
   */
  public $errorType;
  /**
   * The amount of incremental backup data copied.
   *
   * @var 
   */
  public $incrementalBackupSizeGib;
  /**
   * The category field displays the category of the job.
   *
   * @var string
   */
  public $jobCategory;
  /**
   * The job_id field displays the identifier of the job being logged.
   *
   * @var string
   */
  public $jobId;
  /**
   * The status field displays the status of the job.
   *
   * @var string
   */
  public $jobStatus;
  /**
   * Recovery point time.
   *
   * @var string
   */
  public $recoveryPointTime;
  /**
   * The resource_type field displays the type of the protected resource.
   *
   * @var string
   */
  public $resourceType;
  /**
   * Restore resource location.
   *
   * @var string
   */
  public $restoreResourceLocation;
  /**
   * Full resource name of the restore resource. Only populated in restore jobs.
   *
   * @var string
   */
  public $restoreResourceName;
  /**
   * The source resource ID.
   *
   * @var string
   */
  public $sourceResourceId;
  /**
   * Source resource location.
   *
   * @var string
   */
  public $sourceResourceLocation;
  /**
   * Full resource name of the protected resource.
   *
   * @var string
   */
  public $sourceResourceName;
  /**
   * Start time of the job.
   *
   * @var string
   */
  public $startTime;

  /**
   * Backup consistency time.
   *
   * @param string $backupConsistencyTime
   */
  public function setBackupConsistencyTime($backupConsistencyTime)
  {
    $this->backupConsistencyTime = $backupConsistencyTime;
  }
  /**
   * @return string
   */
  public function getBackupConsistencyTime()
  {
    return $this->backupConsistencyTime;
  }
  /**
   * Full resource name of the backup created in backup jobs and used in restore
   * jobs.
   *
   * @param string $backupName
   */
  public function setBackupName($backupName)
  {
    $this->backupName = $backupName;
  }
  /**
   * @return string
   */
  public function getBackupName()
  {
    return $this->backupName;
  }
  /**
   * Full resource name for Backup Plan of the job. Only populated for Scheduled
   * Backup and Adhoc Backup.
   *
   * @param string $backupPlanName
   */
  public function setBackupPlanName($backupPlanName)
  {
    $this->backupPlanName = $backupPlanName;
  }
  /**
   * @return string
   */
  public function getBackupPlanName()
  {
    return $this->backupPlanName;
  }
  /**
   * Backup retention in days.
   *
   * @param int $backupRetentionDays
   */
  public function setBackupRetentionDays($backupRetentionDays)
  {
    $this->backupRetentionDays = $backupRetentionDays;
  }
  /**
   * @return int
   */
  public function getBackupRetentionDays()
  {
    return $this->backupRetentionDays;
  }
  /**
   * Name of the backup rule. Only populated for Scheduled Backup and Adhoc
   * Backup.
   *
   * @param string $backupRule
   */
  public function setBackupRule($backupRule)
  {
    $this->backupRule = $backupRule;
  }
  /**
   * @return string
   */
  public function getBackupRule()
  {
    return $this->backupRule;
  }
  /**
   * Full resource name backup vault name
   *
   * @param string $backupVaultName
   */
  public function setBackupVaultName($backupVaultName)
  {
    $this->backupVaultName = $backupVaultName;
  }
  /**
   * @return string
   */
  public function getBackupVaultName()
  {
    return $this->backupVaultName;
  }
  /**
   * End time of the job.
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
   * The error code. Only populated in error scenarios.
   *
   * @param int $errorCode
   */
  public function setErrorCode($errorCode)
  {
    $this->errorCode = $errorCode;
  }
  /**
   * @return int
   */
  public function getErrorCode()
  {
    return $this->errorCode;
  }
  /**
   * The user readable error message. Only populated in error scenarios.
   *
   * @param string $errorMessage
   */
  public function setErrorMessage($errorMessage)
  {
    $this->errorMessage = $errorMessage;
  }
  /**
   * @return string
   */
  public function getErrorMessage()
  {
    return $this->errorMessage;
  }
  /**
   * The name of the error type eg. PERMISSION_DENIED. Only populated in error
   * scenarios.
   *
   * @param string $errorType
   */
  public function setErrorType($errorType)
  {
    $this->errorType = $errorType;
  }
  /**
   * @return string
   */
  public function getErrorType()
  {
    return $this->errorType;
  }
  public function setIncrementalBackupSizeGib($incrementalBackupSizeGib)
  {
    $this->incrementalBackupSizeGib = $incrementalBackupSizeGib;
  }
  public function getIncrementalBackupSizeGib()
  {
    return $this->incrementalBackupSizeGib;
  }
  /**
   * The category field displays the category of the job.
   *
   * @param string $jobCategory
   */
  public function setJobCategory($jobCategory)
  {
    $this->jobCategory = $jobCategory;
  }
  /**
   * @return string
   */
  public function getJobCategory()
  {
    return $this->jobCategory;
  }
  /**
   * The job_id field displays the identifier of the job being logged.
   *
   * @param string $jobId
   */
  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }
  /**
   * @return string
   */
  public function getJobId()
  {
    return $this->jobId;
  }
  /**
   * The status field displays the status of the job.
   *
   * @param string $jobStatus
   */
  public function setJobStatus($jobStatus)
  {
    $this->jobStatus = $jobStatus;
  }
  /**
   * @return string
   */
  public function getJobStatus()
  {
    return $this->jobStatus;
  }
  /**
   * Recovery point time.
   *
   * @param string $recoveryPointTime
   */
  public function setRecoveryPointTime($recoveryPointTime)
  {
    $this->recoveryPointTime = $recoveryPointTime;
  }
  /**
   * @return string
   */
  public function getRecoveryPointTime()
  {
    return $this->recoveryPointTime;
  }
  /**
   * The resource_type field displays the type of the protected resource.
   *
   * @param string $resourceType
   */
  public function setResourceType($resourceType)
  {
    $this->resourceType = $resourceType;
  }
  /**
   * @return string
   */
  public function getResourceType()
  {
    return $this->resourceType;
  }
  /**
   * Restore resource location.
   *
   * @param string $restoreResourceLocation
   */
  public function setRestoreResourceLocation($restoreResourceLocation)
  {
    $this->restoreResourceLocation = $restoreResourceLocation;
  }
  /**
   * @return string
   */
  public function getRestoreResourceLocation()
  {
    return $this->restoreResourceLocation;
  }
  /**
   * Full resource name of the restore resource. Only populated in restore jobs.
   *
   * @param string $restoreResourceName
   */
  public function setRestoreResourceName($restoreResourceName)
  {
    $this->restoreResourceName = $restoreResourceName;
  }
  /**
   * @return string
   */
  public function getRestoreResourceName()
  {
    return $this->restoreResourceName;
  }
  /**
   * The source resource ID.
   *
   * @param string $sourceResourceId
   */
  public function setSourceResourceId($sourceResourceId)
  {
    $this->sourceResourceId = $sourceResourceId;
  }
  /**
   * @return string
   */
  public function getSourceResourceId()
  {
    return $this->sourceResourceId;
  }
  /**
   * Source resource location.
   *
   * @param string $sourceResourceLocation
   */
  public function setSourceResourceLocation($sourceResourceLocation)
  {
    $this->sourceResourceLocation = $sourceResourceLocation;
  }
  /**
   * @return string
   */
  public function getSourceResourceLocation()
  {
    return $this->sourceResourceLocation;
  }
  /**
   * Full resource name of the protected resource.
   *
   * @param string $sourceResourceName
   */
  public function setSourceResourceName($sourceResourceName)
  {
    $this->sourceResourceName = $sourceResourceName;
  }
  /**
   * @return string
   */
  public function getSourceResourceName()
  {
    return $this->sourceResourceName;
  }
  /**
   * Start time of the job.
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
class_alias(BDRBackupRestoreJobLog::class, 'Google_Service_BackupforGKE_BDRBackupRestoreJobLog');
