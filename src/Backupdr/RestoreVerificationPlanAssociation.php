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

class RestoreVerificationPlanAssociation extends \Google\Model
{
  /**
   * State not set.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The resource is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The resource has been created and is fully usable.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The resource is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * The resource has been created but is not usable.
   */
  public const STATE_INACTIVE = 'INACTIVE';
  /**
   * The resource is being updated.
   */
  public const STATE_UPDATING = 'UPDATING';
  /**
   * The resource is in an error state due to a configuration issue.
   */
  public const STATE_ERROR = 'ERROR';
  /**
   * Output only. The time when the association was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. The description of the `RestoreVerificationPlanAssociation`
   * resource.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. User-defined labels.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Output only. Identifier. The resource name of the
   * `RestoreVerificationPlanAssociation`. Format: `projects/{project}/locations
   * /{location}/restoreVerificationPlans/{restore_verification_plan}/associatio
   * ns/{association}`
   *
   * @var string
   */
  public $name;
  /**
   * Required. Immutable. The type of the Google Cloud resource (e.g.,
   * `compute.googleapis.com/Instance`, `sqladmin.googleapis.com/Instance`).
   *
   * @var string
   */
  public $resourceType;
  /**
   * Required. Immutable. The canonical name of the RestoreTemplate to trigger.
   *
   * @var string
   */
  public $restoreTemplate;
  /**
   * Output only. The `State` for the `RestoreVerificationPlanAssociation`.
   *
   * @var string
   */
  public $state;
  protected $triggerSummaryType = TriggerSummary::class;
  protected $triggerSummaryDataType = '';
  /**
   * Output only. The time when the association was updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The time when the association was created.
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
   * Optional. The description of the `RestoreVerificationPlanAssociation`
   * resource.
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
   * Output only. Identifier. The resource name of the
   * `RestoreVerificationPlanAssociation`. Format: `projects/{project}/locations
   * /{location}/restoreVerificationPlans/{restore_verification_plan}/associatio
   * ns/{association}`
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
   * Required. Immutable. The type of the Google Cloud resource (e.g.,
   * `compute.googleapis.com/Instance`, `sqladmin.googleapis.com/Instance`).
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
   * Required. Immutable. The canonical name of the RestoreTemplate to trigger.
   *
   * @param string $restoreTemplate
   */
  public function setRestoreTemplate($restoreTemplate)
  {
    $this->restoreTemplate = $restoreTemplate;
  }
  /**
   * @return string
   */
  public function getRestoreTemplate()
  {
    return $this->restoreTemplate;
  }
  /**
   * Output only. The `State` for the `RestoreVerificationPlanAssociation`.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, DELETING, INACTIVE,
   * UPDATING, ERROR
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
   * Output only. Results of the most recent automated restore initiation and
   * the next scheduled execution time.
   *
   * @param TriggerSummary $triggerSummary
   */
  public function setTriggerSummary(TriggerSummary $triggerSummary)
  {
    $this->triggerSummary = $triggerSummary;
  }
  /**
   * @return TriggerSummary
   */
  public function getTriggerSummary()
  {
    return $this->triggerSummary;
  }
  /**
   * Output only. The time when the association was updated.
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
class_alias(RestoreVerificationPlanAssociation::class, 'Google_Service_Backupdr_RestoreVerificationPlanAssociation');
