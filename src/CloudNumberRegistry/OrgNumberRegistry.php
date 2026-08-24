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

namespace Google\Service\CloudNumberRegistry;

class OrgNumberRegistry extends \Google\Collection
{
  protected $collection_key = 'targetScopes';
  /**
   * Required. The project that will act as the admin project for CNR resources
   * Format: projects/{project_number} or projects/{project_id}
   *
   * @var string
   */
  public $adminProject;
  /**
   * Output only. The time at which the OrgNumberRegistry was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. User-defined labels.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. The resource name of the OrgNumberRegistry.
   *
   * @var string
   */
  public $name;
  /**
   * Required. The scopes within the organization that the project is able to
   * manage. Currently only organization scope is supported. For example,
   * "organizations/1234567890".
   *
   * @var string[]
   */
  public $targetScopes;
  /**
   * Output only. The time at which the OrgNumberRegistry was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Required. The project that will act as the admin project for CNR resources
   * Format: projects/{project_number} or projects/{project_id}
   *
   * @param string $adminProject
   */
  public function setAdminProject($adminProject)
  {
    $this->adminProject = $adminProject;
  }
  /**
   * @return string
   */
  public function getAdminProject()
  {
    return $this->adminProject;
  }
  /**
   * Output only. The time at which the OrgNumberRegistry was created.
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
   * Identifier. The resource name of the OrgNumberRegistry.
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
   * Required. The scopes within the organization that the project is able to
   * manage. Currently only organization scope is supported. For example,
   * "organizations/1234567890".
   *
   * @param string[] $targetScopes
   */
  public function setTargetScopes($targetScopes)
  {
    $this->targetScopes = $targetScopes;
  }
  /**
   * @return string[]
   */
  public function getTargetScopes()
  {
    return $this->targetScopes;
  }
  /**
   * Output only. The time at which the OrgNumberRegistry was last updated.
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
class_alias(OrgNumberRegistry::class, 'Google_Service_CloudNumberRegistry_OrgNumberRegistry');
