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

class McpServer extends \Google\Collection
{
  protected $collection_key = 'tools';
  /**
   * Output only. Attributes of the MCP Server. Valid values: *
   * `agentregistry.googleapis.com/system/RuntimeIdentity`: {"principal":
   * "principal://..."} - the runtime identity associated with the MCP Server. *
   * `agentregistry.googleapis.com/system/RuntimeReference`: {"uri": "//..."} -
   * the URI of the underlying resource hosting the MCP Server, for example, the
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
   * Output only. The description of the MCP Server.
   *
   * @var string
   */
  public $description;
  /**
   * Output only. The display name of the MCP Server.
   *
   * @var string
   */
  public $displayName;
  protected $interfacesType = AgentregistryInterface::class;
  protected $interfacesDataType = 'array';
  /**
   * Output only. A stable, globally unique identifier for MCP Servers.
   *
   * @var string
   */
  public $mcpServerId;
  /**
   * Identifier. The resource name of the MCP Server. Format:
   * `projects/{project}/locations/{location}/mcpServers/{mcp_server}`.
   *
   * @var string
   */
  public $name;
  protected $toolsType = Tool::class;
  protected $toolsDataType = 'array';
  /**
   * Output only. Update time.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Attributes of the MCP Server. Valid values: *
   * `agentregistry.googleapis.com/system/RuntimeIdentity`: {"principal":
   * "principal://..."} - the runtime identity associated with the MCP Server. *
   * `agentregistry.googleapis.com/system/RuntimeReference`: {"uri": "//..."} -
   * the URI of the underlying resource hosting the MCP Server, for example, the
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
   * Output only. The description of the MCP Server.
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
   * Output only. The display name of the MCP Server.
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
   * Output only. The connection details for the MCP Server.
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
   * Output only. A stable, globally unique identifier for MCP Servers.
   *
   * @param string $mcpServerId
   */
  public function setMcpServerId($mcpServerId)
  {
    $this->mcpServerId = $mcpServerId;
  }
  /**
   * @return string
   */
  public function getMcpServerId()
  {
    return $this->mcpServerId;
  }
  /**
   * Identifier. The resource name of the MCP Server. Format:
   * `projects/{project}/locations/{location}/mcpServers/{mcp_server}`.
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
   * Output only. Tools provided by the MCP Server.
   *
   * @param Tool[] $tools
   */
  public function setTools($tools)
  {
    $this->tools = $tools;
  }
  /**
   * @return Tool[]
   */
  public function getTools()
  {
    return $this->tools;
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
class_alias(McpServer::class, 'Google_Service_AgentRegistry_McpServer');
