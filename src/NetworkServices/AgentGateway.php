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

namespace Google\Service\NetworkServices;

class AgentGateway extends \Google\Collection
{
  protected $collection_key = 'registries';
  protected $agentGatewayCardType = AgentGatewayAgentGatewayOutputCard::class;
  protected $agentGatewayCardDataType = '';
  /**
   * Output only. The timestamp when the resource was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. A free-text description of the resource. Max length 1024
   * characters.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. Etag of the resource. If this is provided, it must match the
   * server's etag. If the provided etag does not match the server's etag, the
   * request will fail with a 409 ABORTED error.
   *
   * @var string
   */
  public $etag;
  protected $googleManagedType = AgentGatewayGoogleManaged::class;
  protected $googleManagedDataType = '';
  /**
   * Optional. Set of label tags associated with the AgentGateway resource.
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. Name of the AgentGateway resource. It matches pattern
   * `projects/locations/agentGateways/`.
   *
   * @var string
   */
  public $name;
  protected $networkConfigType = AgentGatewayNetworkConfig::class;
  protected $networkConfigDataType = '';
  /**
   * Optional. Deprecated.
   *
   * @deprecated
   * @var string[]
   */
  public $protocols;
  /**
   * Optional. A list of Agent registries containing the agents, MCP servers and
   * tools governed by the Agent Gateway. Note: Currently limited to project-
   * scoped registries Must be of format
   * `//agentregistry.googleapis.com/projects/{project}/locations/{location}/
   *
   * @var string[]
   */
  public $registries;
  protected $selfManagedType = AgentGatewaySelfManaged::class;
  protected $selfManagedDataType = '';
  /**
   * Output only. The timestamp when the resource was updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Field for populated AgentGateway card.
   *
   * @param AgentGatewayAgentGatewayOutputCard $agentGatewayCard
   */
  public function setAgentGatewayCard(AgentGatewayAgentGatewayOutputCard $agentGatewayCard)
  {
    $this->agentGatewayCard = $agentGatewayCard;
  }
  /**
   * @return AgentGatewayAgentGatewayOutputCard
   */
  public function getAgentGatewayCard()
  {
    return $this->agentGatewayCard;
  }
  /**
   * Output only. The timestamp when the resource was created.
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
   * Optional. A free-text description of the resource. Max length 1024
   * characters.
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
   * Optional. Etag of the resource. If this is provided, it must match the
   * server's etag. If the provided etag does not match the server's etag, the
   * request will fail with a 409 ABORTED error.
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
   * Optional. Proxy is orchestrated and managed by GoogleCloud in a tenant
   * project.
   *
   * @param AgentGatewayGoogleManaged $googleManaged
   */
  public function setGoogleManaged(AgentGatewayGoogleManaged $googleManaged)
  {
    $this->googleManaged = $googleManaged;
  }
  /**
   * @return AgentGatewayGoogleManaged
   */
  public function getGoogleManaged()
  {
    return $this->googleManaged;
  }
  /**
   * Optional. Set of label tags associated with the AgentGateway resource.
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
   * Identifier. Name of the AgentGateway resource. It matches pattern
   * `projects/locations/agentGateways/`.
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
   * Optional. Network configuration for the AgentGateway.
   *
   * @param AgentGatewayNetworkConfig $networkConfig
   */
  public function setNetworkConfig(AgentGatewayNetworkConfig $networkConfig)
  {
    $this->networkConfig = $networkConfig;
  }
  /**
   * @return AgentGatewayNetworkConfig
   */
  public function getNetworkConfig()
  {
    return $this->networkConfig;
  }
  /**
   * Optional. Deprecated.
   *
   * @deprecated
   * @param string[] $protocols
   */
  public function setProtocols($protocols)
  {
    $this->protocols = $protocols;
  }
  /**
   * @deprecated
   * @return string[]
   */
  public function getProtocols()
  {
    return $this->protocols;
  }
  /**
   * Optional. A list of Agent registries containing the agents, MCP servers and
   * tools governed by the Agent Gateway. Note: Currently limited to project-
   * scoped registries Must be of format
   * `//agentregistry.googleapis.com/projects/{project}/locations/{location}/
   *
   * @param string[] $registries
   */
  public function setRegistries($registries)
  {
    $this->registries = $registries;
  }
  /**
   * @return string[]
   */
  public function getRegistries()
  {
    return $this->registries;
  }
  /**
   * Optional. Attach to existing Application Load Balancers or Secure Web
   * Proxies.
   *
   * @param AgentGatewaySelfManaged $selfManaged
   */
  public function setSelfManaged(AgentGatewaySelfManaged $selfManaged)
  {
    $this->selfManaged = $selfManaged;
  }
  /**
   * @return AgentGatewaySelfManaged
   */
  public function getSelfManaged()
  {
    return $this->selfManaged;
  }
  /**
   * Output only. The timestamp when the resource was updated.
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
class_alias(AgentGateway::class, 'Google_Service_NetworkServices_AgentGateway');
