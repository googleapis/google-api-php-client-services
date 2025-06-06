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

namespace Google\Service\NetworkSecurity;

class InterceptEndpointGroup extends \Google\Collection
{
  protected $collection_key = 'associations';
  protected $associationsType = InterceptEndpointGroupAssociationDetails::class;
  protected $associationsDataType = 'array';
  protected $connectedDeploymentGroupType = InterceptEndpointGroupConnectedDeploymentGroup::class;
  protected $connectedDeploymentGroupDataType = '';
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $interceptDeploymentGroup;
  /**
   * @var string[]
   */
  public $labels;
  /**
   * @var string
   */
  public $name;
  /**
   * @var bool
   */
  public $reconciling;
  /**
   * @var string
   */
  public $state;
  /**
   * @var string
   */
  public $updateTime;

  /**
   * @param InterceptEndpointGroupAssociationDetails[]
   */
  public function setAssociations($associations)
  {
    $this->associations = $associations;
  }
  /**
   * @return InterceptEndpointGroupAssociationDetails[]
   */
  public function getAssociations()
  {
    return $this->associations;
  }
  /**
   * @param InterceptEndpointGroupConnectedDeploymentGroup
   */
  public function setConnectedDeploymentGroup(InterceptEndpointGroupConnectedDeploymentGroup $connectedDeploymentGroup)
  {
    $this->connectedDeploymentGroup = $connectedDeploymentGroup;
  }
  /**
   * @return InterceptEndpointGroupConnectedDeploymentGroup
   */
  public function getConnectedDeploymentGroup()
  {
    return $this->connectedDeploymentGroup;
  }
  /**
   * @param string
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
   * @param string
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
   * @param string
   */
  public function setInterceptDeploymentGroup($interceptDeploymentGroup)
  {
    $this->interceptDeploymentGroup = $interceptDeploymentGroup;
  }
  /**
   * @return string
   */
  public function getInterceptDeploymentGroup()
  {
    return $this->interceptDeploymentGroup;
  }
  /**
   * @param string[]
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
   * @param string
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
   * @param bool
   */
  public function setReconciling($reconciling)
  {
    $this->reconciling = $reconciling;
  }
  /**
   * @return bool
   */
  public function getReconciling()
  {
    return $this->reconciling;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param string
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
class_alias(InterceptEndpointGroup::class, 'Google_Service_NetworkSecurity_InterceptEndpointGroup');
