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

class RestoreTemplateExecution extends \Google\Model
{
  /**
   * Execution phase not specified.
   */
  public const PHASE_EXECUTION_PHASE_UNSPECIFIED = 'EXECUTION_PHASE_UNSPECIFIED';
  /**
   * Preparing for execution.
   */
  public const PHASE_PREPARING = 'PREPARING';
  /**
   * Executing pre-restore action.
   */
  public const PHASE_EXECUTING_PRE_RESTORE_ACTION = 'EXECUTING_PRE_RESTORE_ACTION';
  /**
   * Restoring the resource.
   */
  public const PHASE_RESTORING = 'RESTORING';
  /**
   * Executing post-restore action.
   */
  public const PHASE_EXECUTING_POST_RESTORE_ACTION = 'EXECUTING_POST_RESTORE_ACTION';
  /**
   * Verifying the restored resource.
   */
  public const PHASE_VERIFYING = 'VERIFYING';
  /**
   * Cleaning up resources.
   */
  public const PHASE_CLEANING_UP = 'CLEANING_UP';
  /**
   * Execution completed.
   */
  public const PHASE_COMPLETED = 'COMPLETED';
  /**
   * State not set.
   */
  public const STATE_EXECUTION_STATE_UNSPECIFIED = 'EXECUTION_STATE_UNSPECIFIED';
  /**
   * Execution is running.
   */
  public const STATE_RUNNING = 'RUNNING';
  /**
   * Execution succeeded.
   */
  public const STATE_SUCCEEDED = 'SUCCEEDED';
  /**
   * Execution failed.
   */
  public const STATE_FAILED = 'FAILED';
  /**
   * Resources are being deleted (cleanup).
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * Execution type not specified.
   */
  public const TYPE_EXECUTION_TYPE_UNSPECIFIED = 'EXECUTION_TYPE_UNSPECIFIED';
  /**
   * Scheduled execution.
   */
  public const TYPE_SCHEDULED = 'SCHEDULED';
  /**
   * On-demand execution.
   */
  public const TYPE_ON_DEMAND = 'ON_DEMAND';
  protected $cleanupPhaseInfoType = CleanupPhaseInfo::class;
  protected $cleanupPhaseInfoDataType = '';
  /**
   * Output only. Create time of the execution.
   *
   * @var string
   */
  public $createTime;
  /**
   * Identifier. Resource name of the execution.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The current active phase.
   *
   * @var string
   */
  public $phase;
  protected $postRestorePhaseInfoType = PostRestorePhaseInfo::class;
  protected $postRestorePhaseInfoDataType = '';
  protected $preRestorePhaseInfoType = PreRestorePhaseInfo::class;
  protected $preRestorePhaseInfoDataType = '';
  protected $preparePhaseInfoType = PreparePhaseInfo::class;
  protected $preparePhaseInfoDataType = '';
  /**
   * Output only. The workload resource type being restored. The format is
   * "{service_name}/{resource_kind}", for example,
   * "compute.googleapis.com/Instance".
   *
   * @var string
   */
  public $resourceType;
  protected $restorePhaseInfoType = RestorePhaseInfo::class;
  protected $restorePhaseInfoDataType = '';
  /**
   * Output only. State of the execution.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The type of the execution.
   *
   * @var string
   */
  public $type;
  /**
   * Output only. Update time of the execution.
   *
   * @var string
   */
  public $updateTime;
  protected $verificationPhaseInfoType = VerificationPhaseInfo::class;
  protected $verificationPhaseInfoDataType = '';

  /**
   * Output only. Info for the cleanup phase.
   *
   * @param CleanupPhaseInfo $cleanupPhaseInfo
   */
  public function setCleanupPhaseInfo(CleanupPhaseInfo $cleanupPhaseInfo)
  {
    $this->cleanupPhaseInfo = $cleanupPhaseInfo;
  }
  /**
   * @return CleanupPhaseInfo
   */
  public function getCleanupPhaseInfo()
  {
    return $this->cleanupPhaseInfo;
  }
  /**
   * Output only. Create time of the execution.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Identifier. Resource name of the execution.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The current active phase.
   *
   * Accepted values: EXECUTION_PHASE_UNSPECIFIED, PREPARING,
   * EXECUTING_PRE_RESTORE_ACTION, RESTORING, EXECUTING_POST_RESTORE_ACTION,
   * VERIFYING, CLEANING_UP, COMPLETED
   *
   * @param self::PHASE_* $phase
   */
  public function setPhase($phase)
  {
    $this->phase = $phase;
  }
  /**
   * @return self::PHASE_*
   */
  public function getPhase()
  {
    return $this->phase;
  }
  /**
   * Output only. Info for the post-restore phase.
   *
   * @param PostRestorePhaseInfo $postRestorePhaseInfo
   */
  public function setPostRestorePhaseInfo(PostRestorePhaseInfo $postRestorePhaseInfo)
  {
    $this->postRestorePhaseInfo = $postRestorePhaseInfo;
  }
  /**
   * @return PostRestorePhaseInfo
   */
  public function getPostRestorePhaseInfo()
  {
    return $this->postRestorePhaseInfo;
  }
  /**
   * Output only. Info for the pre-restore phase.
   *
   * @param PreRestorePhaseInfo $preRestorePhaseInfo
   */
  public function setPreRestorePhaseInfo(PreRestorePhaseInfo $preRestorePhaseInfo)
  {
    $this->preRestorePhaseInfo = $preRestorePhaseInfo;
  }
  /**
   * @return PreRestorePhaseInfo
   */
  public function getPreRestorePhaseInfo()
  {
    return $this->preRestorePhaseInfo;
  }
  /**
   * Output only. Info for the prepare phase.
   *
   * @param PreparePhaseInfo $preparePhaseInfo
   */
  public function setPreparePhaseInfo(PreparePhaseInfo $preparePhaseInfo)
  {
    $this->preparePhaseInfo = $preparePhaseInfo;
  }
  /**
   * @return PreparePhaseInfo
   */
  public function getPreparePhaseInfo()
  {
    return $this->preparePhaseInfo;
  }
  /**
   * Output only. The workload resource type being restored. The format is
   * "{service_name}/{resource_kind}", for example,
   * "compute.googleapis.com/Instance".
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
   * Output only. Info for the restore phase.
   *
   * @param RestorePhaseInfo $restorePhaseInfo
   */
  public function setRestorePhaseInfo(RestorePhaseInfo $restorePhaseInfo)
  {
    $this->restorePhaseInfo = $restorePhaseInfo;
  }
  /**
   * @return RestorePhaseInfo
   */
  public function getRestorePhaseInfo()
  {
    return $this->restorePhaseInfo;
  }
  /**
   * Output only. State of the execution.
   *
   * Accepted values: EXECUTION_STATE_UNSPECIFIED, RUNNING, SUCCEEDED, FAILED,
   * DELETING
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
   * Output only. The type of the execution.
   *
   * Accepted values: EXECUTION_TYPE_UNSPECIFIED, SCHEDULED, ON_DEMAND
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
  /**
   * Output only. Update time of the execution.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * Output only. Info for the verification phase.
   *
   * @param VerificationPhaseInfo $verificationPhaseInfo
   */
  public function setVerificationPhaseInfo(VerificationPhaseInfo $verificationPhaseInfo)
  {
    $this->verificationPhaseInfo = $verificationPhaseInfo;
  }
  /**
   * @return VerificationPhaseInfo
   */
  public function getVerificationPhaseInfo()
  {
    return $this->verificationPhaseInfo;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RestoreTemplateExecution::class, 'Google_Service_Backupdr_RestoreTemplateExecution');
