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

class RestoreTemplate extends \Google\Model
{
  /**
   * State not specified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The template is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The template is active and ready to use.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The template is being updated.
   */
  public const STATE_UPDATING = 'UPDATING';
  /**
   * The template is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  protected $backupSelectionConfigType = BackupSelectionConfig::class;
  protected $backupSelectionConfigDataType = '';
  /**
   * Output only. The time when the restore template was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. User-provided description of the restore template.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. Etag for concurrency control.
   *
   * @var string
   */
  public $etag;
  protected $executionSummaryType = ExecutionSummary::class;
  protected $executionSummaryDataType = '';
  /**
   * Optional. User-defined labels.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. The resource name of the RestoreTemplate.
   *
   * @var string
   */
  public $name;
  protected $postRestoreConfigType = PostRestoreConfig::class;
  protected $postRestoreConfigDataType = '';
  protected $preRestoreConfigType = PreRestoreConfig::class;
  protected $preRestoreConfigDataType = '';
  /**
   * Required. Immutable. The specific type of the workload being restored. The
   * format is "{service_name}/{resource_kind}", for example,
   * "compute.googleapis.com/Instance".
   *
   * @var string
   */
  public $resourceType;
  /**
   * Required. Defines target environments where the resource will be restored.
   * The target resource name in `restore_properties` supports the
   * `{EXECUTION_ID}` token to dynamically generate unique resource names for
   * each execution. During restore execution, every occurrence of
   * `{EXECUTION_ID}` in the target resource name is replaced with the
   * 8-character `RestoreTemplateExecution` ID (for example, `"restored-
   * resource-{EXECUTION_ID}"` or `"restored-{EXECUTION_ID}-resource"` resolves
   * to `"restored-resource-5d437b06"` or `"restored-5d437b06-resource"`).
   *
   * @var array[]
   */
  public $restoreProperties;
  /**
   * Output only. The state of the restore template.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The time when the restore template was last updated.
   *
   * @var string
   */
  public $updateTime;
  protected $verificationConfigType = VerificationConfig::class;
  protected $verificationConfigDataType = '';

  /**
   * Required. Backup selection configuration.
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
   * Output only. The time when the restore template was created.
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
   * Optional. User-provided description of the restore template.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Optional. Etag for concurrency control.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Output only. Summary of the last execution.
   *
   * @param ExecutionSummary $executionSummary
   */
  public function setExecutionSummary(ExecutionSummary $executionSummary)
  {
    $this->executionSummary = $executionSummary;
  }
  /**
   * @return ExecutionSummary
   */
  public function getExecutionSummary()
  {
    return $this->executionSummary;
  }
  /**
   * Optional. User-defined labels.
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
   * Identifier. The resource name of the RestoreTemplate.
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
   * Optional. Post-restore configuration.
   *
   * @param PostRestoreConfig $postRestoreConfig
   */
  public function setPostRestoreConfig(PostRestoreConfig $postRestoreConfig)
  {
    $this->postRestoreConfig = $postRestoreConfig;
  }
  /**
   * @return PostRestoreConfig
   */
  public function getPostRestoreConfig()
  {
    return $this->postRestoreConfig;
  }
  /**
   * Optional. Pre-restore configuration.
   *
   * @param PreRestoreConfig $preRestoreConfig
   */
  public function setPreRestoreConfig(PreRestoreConfig $preRestoreConfig)
  {
    $this->preRestoreConfig = $preRestoreConfig;
  }
  /**
   * @return PreRestoreConfig
   */
  public function getPreRestoreConfig()
  {
    return $this->preRestoreConfig;
  }
  /**
   * Required. Immutable. The specific type of the workload being restored. The
   * format is "{service_name}/{resource_kind}", for example,
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
   * Required. Defines target environments where the resource will be restored.
   * The target resource name in `restore_properties` supports the
   * `{EXECUTION_ID}` token to dynamically generate unique resource names for
   * each execution. During restore execution, every occurrence of
   * `{EXECUTION_ID}` in the target resource name is replaced with the
   * 8-character `RestoreTemplateExecution` ID (for example, `"restored-
   * resource-{EXECUTION_ID}"` or `"restored-{EXECUTION_ID}-resource"` resolves
   * to `"restored-resource-5d437b06"` or `"restored-5d437b06-resource"`).
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
   * Output only. The state of the restore template.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, UPDATING, DELETING
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
   * Output only. The time when the restore template was last updated.
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
   * Optional. Verification configuration.
   *
   * @param VerificationConfig $verificationConfig
   */
  public function setVerificationConfig(VerificationConfig $verificationConfig)
  {
    $this->verificationConfig = $verificationConfig;
  }
  /**
   * @return VerificationConfig
   */
  public function getVerificationConfig()
  {
    return $this->verificationConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RestoreTemplate::class, 'Google_Service_Backupdr_RestoreTemplate');
