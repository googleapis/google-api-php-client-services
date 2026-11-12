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

class AutoProtectionPolicyBinding extends \Google\Model
{
  /**
   * The state of the binding is unspecified.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * The binding is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * The binding is active.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * The binding deletion is initiated.
   */
  public const STATE_DELETION_INITIATED = 'DELETION_INITIATED';
  protected $bindingEvaluationSummaryType = BindingEvaluationSummary::class;
  protected $bindingEvaluationSummaryDataType = '';
  /**
   * Output only. The timestamp when the binding was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. A description of the binding. The description must be at most
   * 2048 characters.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The etag for the binding. If this is provided on update, it
   * must match the server's etag.
   *
   * @var string
   */
  public $etag;
  /**
   * Output only. Identifier. The resource name of the
   * AutoProtectionPolicyBinding. Format: `projects/{project}/locations/{locatio
   * n}/autoProtectionPolicies/{auto_protection_policy}/bindings/{binding}`
   *
   * @var string
   */
  public $name;
  /**
   * Required. Immutable. Resource Id of target container on which policy will
   * be applied. Format: projects/{project_id}
   *
   * @var string
   */
  public $scope;
  /**
   * Output only. The current state of the AutoProtectionPolicyBinding.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The timestamp when the binding was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Summaries of the last policy application when the job has run,
   * with one entry per resource type specified in the AutoProtectionPolicy.
   *
   * @param BindingEvaluationSummary $bindingEvaluationSummary
   */
  public function setBindingEvaluationSummary(BindingEvaluationSummary $bindingEvaluationSummary)
  {
    $this->bindingEvaluationSummary = $bindingEvaluationSummary;
  }
  /**
   * @return BindingEvaluationSummary
   */
  public function getBindingEvaluationSummary()
  {
    return $this->bindingEvaluationSummary;
  }
  /**
   * Output only. The timestamp when the binding was created.
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
   * Optional. A description of the binding. The description must be at most
   * 2048 characters.
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
   * Output only. The etag for the binding. If this is provided on update, it
   * must match the server's etag.
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
   * Output only. Identifier. The resource name of the
   * AutoProtectionPolicyBinding. Format: `projects/{project}/locations/{locatio
   * n}/autoProtectionPolicies/{auto_protection_policy}/bindings/{binding}`
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
   * Required. Immutable. Resource Id of target container on which policy will
   * be applied. Format: projects/{project_id}
   *
   * @param string $scope
   */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return string
   */
  public function getScope()
  {
    return $this->scope;
  }
  /**
   * Output only. The current state of the AutoProtectionPolicyBinding.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, ACTIVE, DELETION_INITIATED
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
   * Output only. The timestamp when the binding was last updated.
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
class_alias(AutoProtectionPolicyBinding::class, 'Google_Service_Backupdr_AutoProtectionPolicyBinding');
