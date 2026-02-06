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

namespace Google\Service\CustomerEngagementSuite;

class Toolset extends \Google\Model
{
  /**
   * The execution type is unspecified. Defaults to `SYNCHRONOUS` if
   * unspecified.
   */
  public const EXECUTION_TYPE_EXECUTION_TYPE_UNSPECIFIED = 'EXECUTION_TYPE_UNSPECIFIED';
  /**
   * The tool is executed synchronously. The session is blocked until the tool
   * returns.
   */
  public const EXECUTION_TYPE_SYNCHRONOUS = 'SYNCHRONOUS';
  /**
   * The tool is executed asynchronously. The session will continue while the
   * tool is executing.
   */
  public const EXECUTION_TYPE_ASYNCHRONOUS = 'ASYNCHRONOUS';
  protected $connectorToolsetType = ConnectorToolset::class;
  protected $connectorToolsetDataType = '';
  /**
   * Output only. Timestamp when the toolset was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. The description of the toolset.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. The display name of the toolset. Must be unique within the same
   * app.
   *
   * @var string
   */
  public $displayName;
  /**
   * ETag used to ensure the object hasn't changed during a read-modify-write
   * operation. If the etag is empty, the update will overwrite any concurrent
   * changes.
   *
   * @var string
   */
  public $etag;
  /**
   * Optional. The execution type of the tools in the toolset.
   *
   * @var string
   */
  public $executionType;
  protected $mcpToolsetType = McpToolset::class;
  protected $mcpToolsetDataType = '';
  /**
   * Identifier. The unique identifier of the toolset. Format:
   * `projects/{project}/locations/{location}/apps/{app}/toolsets/{toolset}`
   *
   * @var string
   */
  public $name;
  protected $openApiToolsetType = OpenApiToolset::class;
  protected $openApiToolsetDataType = '';
  protected $toolFakeConfigType = ToolFakeConfig::class;
  protected $toolFakeConfigDataType = '';
  /**
   * Output only. Timestamp when the toolset was last updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. A toolset that generates tools from an Integration Connectors
   * Connection.
   *
   * @param ConnectorToolset $connectorToolset
   */
  public function setConnectorToolset(ConnectorToolset $connectorToolset)
  {
    $this->connectorToolset = $connectorToolset;
  }
  /**
   * @return ConnectorToolset
   */
  public function getConnectorToolset()
  {
    return $this->connectorToolset;
  }
  /**
   * Output only. Timestamp when the toolset was created.
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
   * Optional. The description of the toolset.
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
   * Optional. The display name of the toolset. Must be unique within the same
   * app.
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
   * ETag used to ensure the object hasn't changed during a read-modify-write
   * operation. If the etag is empty, the update will overwrite any concurrent
   * changes.
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
   * Optional. The execution type of the tools in the toolset.
   *
   * Accepted values: EXECUTION_TYPE_UNSPECIFIED, SYNCHRONOUS, ASYNCHRONOUS
   *
   * @param self::EXECUTION_TYPE_* $executionType
   */
  public function setExecutionType($executionType)
  {
    $this->executionType = $executionType;
  }
  /**
   * @return self::EXECUTION_TYPE_*
   */
  public function getExecutionType()
  {
    return $this->executionType;
  }
  /**
   * Optional. A toolset that contains a list of tools that are offered by the
   * MCP server.
   *
   * @param McpToolset $mcpToolset
   */
  public function setMcpToolset(McpToolset $mcpToolset)
  {
    $this->mcpToolset = $mcpToolset;
  }
  /**
   * @return McpToolset
   */
  public function getMcpToolset()
  {
    return $this->mcpToolset;
  }
  /**
   * Identifier. The unique identifier of the toolset. Format:
   * `projects/{project}/locations/{location}/apps/{app}/toolsets/{toolset}`
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
   * Optional. A toolset that contains a list of tools that are defined by an
   * OpenAPI schema.
   *
   * @param OpenApiToolset $openApiToolset
   */
  public function setOpenApiToolset(OpenApiToolset $openApiToolset)
  {
    $this->openApiToolset = $openApiToolset;
  }
  /**
   * @return OpenApiToolset
   */
  public function getOpenApiToolset()
  {
    return $this->openApiToolset;
  }
  /**
   * Optional. Configuration for tools behavior in fake mode.
   *
   * @param ToolFakeConfig $toolFakeConfig
   */
  public function setToolFakeConfig(ToolFakeConfig $toolFakeConfig)
  {
    $this->toolFakeConfig = $toolFakeConfig;
  }
  /**
   * @return ToolFakeConfig
   */
  public function getToolFakeConfig()
  {
    return $this->toolFakeConfig;
  }
  /**
   * Output only. Timestamp when the toolset was last updated.
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
class_alias(Toolset::class, 'Google_Service_CustomerEngagementSuite_Toolset');
