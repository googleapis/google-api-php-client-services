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

namespace Google\Service\AgentRegistry;

class Endpoint extends \Google\Collection
{
  protected $collection_key = 'interfaces';
  /**
   * Output only. Attributes of the Endpoint. Valid values: *
   * `agentregistry.googleapis.com/system/RuntimeReference`: {"uri": "//..."} -
   * the URI of the underlying resource hosting the Endpoint, for example, the
   * GKE Deployment.
   *
   * @var array[]
   */
  public $attributes;
  /**
   * Output only. Create time.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Description of an Endpoint.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. Display name for the Endpoint.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. A stable, globally unique identifier for Endpoint.
   *
   * @var string
   */
  public $endpointId;
  protected $interfacesType = AgentregistryInterface::class;
  protected $interfacesDataType = 'array';
  /**
   * Identifier. The resource name of the Endpoint. Format:
   * `projects/{project}/locations/{location}/endpoints/{endpoint}`.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Update time.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Attributes of the Endpoint. Valid values: *
   * `agentregistry.googleapis.com/system/RuntimeReference`: {"uri": "//..."} -
   * the URI of the underlying resource hosting the Endpoint, for example, the
   * GKE Deployment.
   *
   * @param array[] $attributes
   */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /**
   * @return array[]
   */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /**
   * Output only. Create time.
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
   * Output only. Description of an Endpoint.
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
   * Output only. Display name for the Endpoint.
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
   * Output only. A stable, globally unique identifier for Endpoint.
   *
   * @param string $endpointId
   */
  public function setEndpointId($endpointId)
  {
    $this->endpointId = $endpointId;
  }
  /**
   * @return string
   */
  public function getEndpointId()
  {
    return $this->endpointId;
  }
  /**
   * Required. The connection details for the Endpoint.
   *
   * @param AgentregistryInterface[] $interfaces
   */
  public function setInterfaces($interfaces)
  {
    $this->interfaces = $interfaces;
  }
  /**
   * @return AgentregistryInterface[]
   */
  public function getInterfaces()
  {
    return $this->interfaces;
  }
  /**
   * Identifier. The resource name of the Endpoint. Format:
   * `projects/{project}/locations/{location}/endpoints/{endpoint}`.
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
   * Output only. Update time.
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
class_alias(Endpoint::class, 'Google_Service_AgentRegistry_Endpoint');
