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

namespace Google\Service\DeviceRun;

class JobConfig extends \Google\Model
{
  protected $actionType = JobAction::class;
  protected $actionDataType = '';
  protected $allocationConfigType = AllocationConfig::class;
  protected $allocationConfigDataType = '';
  /**
   * Optional. User-settable, human-readable name for the job. If set, it must
   * be unique within the session. If not set, the display name will default to
   * `job-`, where `` is the 0-based index of the job in the session formatted
   * as three digits (e.g., job-000, job-001, ...). Maximum size is 63 bytes
   * when encoded as UTF-8. If set, must match regex: `^A-Za-z0-9*$`.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. User-defined metadata for tracking or categorization. These
   * labels do not affect job execution and are surfaced in the JobReport.
   * Limits: - Maximum number of entries: 16. - Maximum key size: 32 bytes
   * (UTF-8). - Maximum value size: 1024 bytes (UTF-8).
   *
   * @var string[]
   */
  public $labels;
  protected $settingsType = JobSettings::class;
  protected $settingsDataType = '';

  /**
   * Required. Job action.
   *
   * @param JobAction $action
   */
  public function setAction(JobAction $action)
  {
    $this->action = $action;
  }
  /**
   * @return JobAction
   */
  public function getAction()
  {
    return $this->action;
  }
  /**
   * Required. Allocation config.
   *
   * @param AllocationConfig $allocationConfig
   */
  public function setAllocationConfig(AllocationConfig $allocationConfig)
  {
    $this->allocationConfig = $allocationConfig;
  }
  /**
   * @return AllocationConfig
   */
  public function getAllocationConfig()
  {
    return $this->allocationConfig;
  }
  /**
   * Optional. User-settable, human-readable name for the job. If set, it must
   * be unique within the session. If not set, the display name will default to
   * `job-`, where `` is the 0-based index of the job in the session formatted
   * as three digits (e.g., job-000, job-001, ...). Maximum size is 63 bytes
   * when encoded as UTF-8. If set, must match regex: `^A-Za-z0-9*$`.
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
   * Optional. User-defined metadata for tracking or categorization. These
   * labels do not affect job execution and are surfaced in the JobReport.
   * Limits: - Maximum number of entries: 16. - Maximum key size: 32 bytes
   * (UTF-8). - Maximum value size: 1024 bytes (UTF-8).
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Optional. Job settings.
   *
   * @param JobSettings $settings
   */
  public function setSettings(JobSettings $settings)
  {
    $this->settings = $settings;
  }
  /**
   * @return JobSettings
   */
  public function getSettings()
  {
    return $this->settings;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(JobConfig::class, 'Google_Service_DeviceRun_JobConfig');
