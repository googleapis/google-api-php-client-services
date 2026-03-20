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

class Service extends \Google\Collection
{
  protected $collection_key = 'interfaces';
  protected $agentSpecType = AgentSpec::class;
  protected $agentSpecDataType = '';
  /**
   * Output only. Create time.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. User-defined description of an Service. Can have a maximum length
   * of `2048` characters.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. User-defined display name for the Service. Can have a maximum
   * length of `63` characters.
   *
   * @var string
   */
  public $displayName;
  protected $endpointSpecType = EndpointSpec::class;
  protected $endpointSpecDataType = '';
  protected $interfacesType = AgentregistryInterface::class;
  protected $interfacesDataType = 'array';
  protected $mcpServerSpecType = McpServerSpec::class;
  protected $mcpServerSpecDataType = '';
  /**
   * Identifier. The resource name of the Service. Format:
   * `projects/{project}/locations/{location}/services/{service}`.
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
   * Optional. The spec of the Agent. When `agent_spec` is set, the type of the
   * service is Agent.
   *
   * @param AgentSpec $agentSpec
   */
  public function setAgentSpec(AgentSpec $agentSpec)
  {
    $this->agentSpec = $agentSpec;
  }
  /**
   * @return AgentSpec
   */
  public function getAgentSpec()
  {
    return $this->agentSpec;
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
   * Optional. User-defined description of an Service. Can have a maximum length
   * of `2048` characters.
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
   * Optional. User-defined display name for the Service. Can have a maximum
   * length of `63` characters.
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
   * Optional. The spec of the Endpoint. When `endpoint_spec` is set, the type
   * of the service is Endpoint.
   *
   * @param EndpointSpec $endpointSpec
   */
  public function setEndpointSpec(EndpointSpec $endpointSpec)
  {
    $this->endpointSpec = $endpointSpec;
  }
  /**
   * @return EndpointSpec
   */
  public function getEndpointSpec()
  {
    return $this->endpointSpec;
  }
  /**
   * Optional. The connection details for the Service.
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
   * Optional. The spec of the MCP Server. When `mcp_server_spec` is set, the
   * type of the service is MCP Server.
   *
   * @param McpServerSpec $mcpServerSpec
   */
  public function setMcpServerSpec(McpServerSpec $mcpServerSpec)
  {
    $this->mcpServerSpec = $mcpServerSpec;
  }
  /**
   * @return McpServerSpec
   */
  public function getMcpServerSpec()
  {
    return $this->mcpServerSpec;
  }
  /**
   * Identifier. The resource name of the Service. Format:
   * `projects/{project}/locations/{location}/services/{service}`.
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
class_alias(Service::class, 'Google_Service_AgentRegistry_Service');
