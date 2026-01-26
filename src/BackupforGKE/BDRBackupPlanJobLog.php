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

class BDRBackupPlanJobLog extends \Google\Collection
{
  protected $collection_key = 'revisedBackupRules';
  /**
   * Canonical resource name for Backup Plan Plan of the job.
   *
   * @var string
   */
  public $backupPlanName;
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
   * The category field displays the category of the job. Can be one of
   * [UPDATE_BACKUP_PLAN].
   *
   * @var string
   */
  public $jobCategory;
  /**
   * The job_id field displays the identifier of the job being reported.
   *
   * @var string
   */
  public $jobId;
  /**
   * The status field displays the status of the job. Can be one of
   * [RUNNING,SUCCESSFUL, FAILED].
   *
   * @var string
   */
  public $jobStatus;
  /**
   * User friendly revision id e.g. v0, v1 etc.
   *
   * @var string
   */
  public $newBackupPlanRevisionId;
  /**
   * Full resource name for new backup plan revision
   *
   * @var string
   */
  public $newBackupPlanRevisionName;
  /**
   * User friendly revision id e.g. v0, v1 etc.
   *
   * @var string
   */
  public $previousBackupPlanRevisionId;
  /**
   * Full resource name for previous backup plan revision
   *
   * @var string
   */
  public $previousBackupPlanRevisionName;
  protected $previousBackupRulesType = BackupRuleDetail::class;
  protected $previousBackupRulesDataType = 'array';
  /**
   * The resource_type field displays the type of the protected resource.
   *
   * @var string
   */
  public $resourceType;
  protected $revisedBackupRulesType = BackupRuleDetail::class;
  protected $revisedBackupRulesDataType = 'array';
  /**
   * Start time of the job.
   *
   * @var string
   */
  public $startTime;
  /**
   * The total number of workloads affected by the job.
   *
   * @var int
   */
  public $workloadsAffectedCount;

  /**
   * Canonical resource name for Backup Plan Plan of the job.
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
  /**
   * The category field displays the category of the job. Can be one of
   * [UPDATE_BACKUP_PLAN].
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
   * The job_id field displays the identifier of the job being reported.
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
   * The status field displays the status of the job. Can be one of
   * [RUNNING,SUCCESSFUL, FAILED].
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
   * User friendly revision id e.g. v0, v1 etc.
   *
   * @param string $newBackupPlanRevisionId
   */
  public function setNewBackupPlanRevisionId($newBackupPlanRevisionId)
  {
    $this->newBackupPlanRevisionId = $newBackupPlanRevisionId;
  }
  /**
   * @return string
   */
  public function getNewBackupPlanRevisionId()
  {
    return $this->newBackupPlanRevisionId;
  }
  /**
   * Full resource name for new backup plan revision
   *
   * @param string $newBackupPlanRevisionName
   */
  public function setNewBackupPlanRevisionName($newBackupPlanRevisionName)
  {
    $this->newBackupPlanRevisionName = $newBackupPlanRevisionName;
  }
  /**
   * @return string
   */
  public function getNewBackupPlanRevisionName()
  {
    return $this->newBackupPlanRevisionName;
  }
  /**
   * User friendly revision id e.g. v0, v1 etc.
   *
   * @param string $previousBackupPlanRevisionId
   */
  public function setPreviousBackupPlanRevisionId($previousBackupPlanRevisionId)
  {
    $this->previousBackupPlanRevisionId = $previousBackupPlanRevisionId;
  }
  /**
   * @return string
   */
  public function getPreviousBackupPlanRevisionId()
  {
    return $this->previousBackupPlanRevisionId;
  }
  /**
   * Full resource name for previous backup plan revision
   *
   * @param string $previousBackupPlanRevisionName
   */
  public function setPreviousBackupPlanRevisionName($previousBackupPlanRevisionName)
  {
    $this->previousBackupPlanRevisionName = $previousBackupPlanRevisionName;
  }
  /**
   * @return string
   */
  public function getPreviousBackupPlanRevisionName()
  {
    return $this->previousBackupPlanRevisionName;
  }
  /**
   * Previous Backup Plan rules.
   *
   * @param BackupRuleDetail[] $previousBackupRules
   */
  public function setPreviousBackupRules($previousBackupRules)
  {
    $this->previousBackupRules = $previousBackupRules;
  }
  /**
   * @return BackupRuleDetail[]
   */
  public function getPreviousBackupRules()
  {
    return $this->previousBackupRules;
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
   * Revised Backup Plan rules.
   *
   * @param BackupRuleDetail[] $revisedBackupRules
   */
  public function setRevisedBackupRules($revisedBackupRules)
  {
    $this->revisedBackupRules = $revisedBackupRules;
  }
  /**
   * @return BackupRuleDetail[]
   */
  public function getRevisedBackupRules()
  {
    return $this->revisedBackupRules;
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
  /**
   * The total number of workloads affected by the job.
   *
   * @param int $workloadsAffectedCount
   */
  public function setWorkloadsAffectedCount($workloadsAffectedCount)
  {
    $this->workloadsAffectedCount = $workloadsAffectedCount;
  }
  /**
   * @return int
   */
  public function getWorkloadsAffectedCount()
  {
    return $this->workloadsAffectedCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BDRBackupPlanJobLog::class, 'Google_Service_BackupforGKE_BDRBackupPlanJobLog');
