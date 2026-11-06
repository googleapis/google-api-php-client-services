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

namespace Google\Service\CloudAuditManager;

class AuditSchedule extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const REPORT_FORMAT_AUDIT_REPORT_FORMAT_UNSPECIFIED = 'AUDIT_REPORT_FORMAT_UNSPECIFIED';
  /**
   * Open Document Format (ODF).
   */
  public const REPORT_FORMAT_AUDIT_REPORT_FORMAT_ODF = 'AUDIT_REPORT_FORMAT_ODF';
  /**
   * Default value. This value is unused.
   */
  public const STATE_SCHEDULE_STATE_UNSPECIFIED = 'SCHEDULE_STATE_UNSPECIFIED';
  /**
   * Schedule is active and will trigger runs.
   */
  public const STATE_SCHEDULE_STATE_ACTIVE = 'SCHEDULE_STATE_ACTIVE';
  /**
   * Schedule is paused and will not trigger runs.
   */
  public const STATE_SCHEDULE_STATE_PAUSED = 'SCHEDULE_STATE_PAUSED';
  /**
   * Schedule end time has passed.
   */
  public const STATE_SCHEDULE_STATE_COMPLETED = 'SCHEDULE_STATE_COMPLETED';
  /**
   * Schedule setup failed during creation or update.
   */
  public const STATE_SCHEDULE_STATE_FAILED_SETUP = 'SCHEDULE_STATE_FAILED_SETUP';
  /**
   * Schedule is in an error state due to persistent failure to trigger an
   * audit. Manual intervention is required.
   */
  public const STATE_SCHEDULE_STATE_ERROR = 'SCHEDULE_STATE_ERROR';
  /**
   * Schedule has been marked for deletion by the user.
   */
  public const STATE_SCHEDULE_STATE_DELETED = 'SCHEDULE_STATE_DELETED';
  /**
   * Required. Framework (set of controls) that the audit scope report is
   * generated against. For example, `NIST_800_53`.
   *
   * @var string
   */
  public $complianceFramework;
  /**
   * Output only. Timestamp when the schedule was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Display name for the audit schedule.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. Describes the error if the schedule is in an error state.
   *
   * @var string
   */
  public $errorMessage;
  /**
   * Required. Cloud Storage bucket where Audit Manager can upload the audit
   * report and evidence. The format is `gs://{bucket_name}`.
   *
   * @var string
   */
  public $gcsUri;
  /**
   * Output only. Timestamp when the audit run was last triggered.
   *
   * @var string
   */
  public $lastTriggerTime;
  /**
   * Identifier. Unique identifier for the audit schedule. Format:
   * projects/{project}/locations/{location}/auditSchedules/{audit_schedule}
   * folders/{folder}/locations/{location}/auditSchedules/{audit_schedule} organ
   * izations/{organization}/locations/{location}/auditSchedules/{audit_schedule
   * }
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Calculated timestamp for the next scheduled run.
   *
   * @var string
   */
  public $nextRunTime;
  protected $parameterOverridesType = ParameterOverrides::class;
  protected $parameterOverridesDataType = 'map';
  /**
   * Required. Format for the audit report.
   *
   * @var string
   */
  public $reportFormat;
  protected $scheduleConfigType = ScheduleConfig::class;
  protected $scheduleConfigDataType = '';
  /**
   * Optional. State of the audit schedule. While most states are managed by the
   * system, you can use UpdateAuditSchedule to start, pause, or delete the
   * schedule.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. Timestamp when the schedule was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Required. Framework (set of controls) that the audit scope report is
   * generated against. For example, `NIST_800_53`.
   *
   * @param string $complianceFramework
   */
  public function setComplianceFramework($complianceFramework)
  {
    $this->complianceFramework = $complianceFramework;
  }
  /**
   * @return string
   */
  public function getComplianceFramework()
  {
    return $this->complianceFramework;
  }
  /**
   * Output only. Timestamp when the schedule was created.
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
   * Optional. Display name for the audit schedule.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Output only. Describes the error if the schedule is in an error state.
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
   * Required. Cloud Storage bucket where Audit Manager can upload the audit
   * report and evidence. The format is `gs://{bucket_name}`.
   *
   * @param string $gcsUri
   */
  public function setGcsUri($gcsUri)
  {
    $this->gcsUri = $gcsUri;
  }
  /**
   * @return string
   */
  public function getGcsUri()
  {
    return $this->gcsUri;
  }
  /**
   * Output only. Timestamp when the audit run was last triggered.
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
   * Identifier. Unique identifier for the audit schedule. Format:
   * projects/{project}/locations/{location}/auditSchedules/{audit_schedule}
   * folders/{folder}/locations/{location}/auditSchedules/{audit_schedule} organ
   * izations/{organization}/locations/{location}/auditSchedules/{audit_schedule
   * }
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
   * Output only. Calculated timestamp for the next scheduled run.
   *
   * @param string $nextRunTime
   */
  public function setNextRunTime($nextRunTime)
  {
    $this->nextRunTime = $nextRunTime;
  }
  /**
   * @return string
   */
  public function getNextRunTime()
  {
    return $this->nextRunTime;
  }
  /**
   * Optional. Maps dynamic parameter overrides by Cloud Control resource name
   * at execution time. For example,
   * `{"organizations/123/locations/global/cloudControls/control-1":
   * {parameters: [...]}}`
   *
   * @param ParameterOverrides[] $parameterOverrides
   */
  public function setParameterOverrides($parameterOverrides)
  {
    $this->parameterOverrides = $parameterOverrides;
  }
  /**
   * @return ParameterOverrides[]
   */
  public function getParameterOverrides()
  {
    return $this->parameterOverrides;
  }
  /**
   * Required. Format for the audit report.
   *
   * Accepted values: AUDIT_REPORT_FORMAT_UNSPECIFIED, AUDIT_REPORT_FORMAT_ODF
   *
   * @param self::REPORT_FORMAT_* $reportFormat
   */
  public function setReportFormat($reportFormat)
  {
    $this->reportFormat = $reportFormat;
  }
  /**
   * @return self::REPORT_FORMAT_*
   */
  public function getReportFormat()
  {
    return $this->reportFormat;
  }
  /**
   * Required. Configuration that defines when and how often audit runs are
   * automatically triggered for this schedule.
   *
   * @param ScheduleConfig $scheduleConfig
   */
  public function setScheduleConfig(ScheduleConfig $scheduleConfig)
  {
    $this->scheduleConfig = $scheduleConfig;
  }
  /**
   * @return ScheduleConfig
   */
  public function getScheduleConfig()
  {
    return $this->scheduleConfig;
  }
  /**
   * Optional. State of the audit schedule. While most states are managed by the
   * system, you can use UpdateAuditSchedule to start, pause, or delete the
   * schedule.
   *
   * Accepted values: SCHEDULE_STATE_UNSPECIFIED, SCHEDULE_STATE_ACTIVE,
   * SCHEDULE_STATE_PAUSED, SCHEDULE_STATE_COMPLETED,
   * SCHEDULE_STATE_FAILED_SETUP, SCHEDULE_STATE_ERROR, SCHEDULE_STATE_DELETED
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
   * Output only. Timestamp when the schedule was last updated.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuditSchedule::class, 'Google_Service_CloudAuditManager_AuditSchedule');
