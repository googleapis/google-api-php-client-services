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

namespace Google\Service\APIhub;

class GoogleCloudApihubV1McpToolConfig extends \Google\Model
{
  /**
   * Required. Description of what the tool does and how it is used. Description
   * serves as key reference for the agent to know about the tool capabilities.
   *
   * @var string
   */
  public $description;
  protected $operationType = GoogleCloudApihubV1OperationConfig::class;
  protected $operationDataType = '';
  /**
   * Required. Caller-supplied identifier for the tool; each tool must have a
   * unique identifier. This will be by used by agents to invoke the tool. Tool
   * ID must be unique across all tools in the given MCP server configuration.
   *
   * @var string
   */
  public $toolId;

  /**
   * Required. Description of what the tool does and how it is used. Description
   * serves as key reference for the agent to know about the tool capabilities.
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
   * Required. The API Hub operation this tool exposes. Each tool wraps exactly
   * one operation; callers that want to expose multiple operations should
   * declare multiple tools.
   *
   * @param GoogleCloudApihubV1OperationConfig $operation
   */
  public function setOperation(GoogleCloudApihubV1OperationConfig $operation)
  {
    $this->operation = $operation;
  }
  /**
   * @return GoogleCloudApihubV1OperationConfig
   */
  public function getOperation()
  {
    return $this->operation;
  }
  /**
   * Required. Caller-supplied identifier for the tool; each tool must have a
   * unique identifier. This will be by used by agents to invoke the tool. Tool
   * ID must be unique across all tools in the given MCP server configuration.
   *
   * @param string $toolId
   */
  public function setToolId($toolId)
  {
    $this->toolId = $toolId;
  }
  /**
   * @return string
   */
  public function getToolId()
  {
    return $this->toolId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApihubV1McpToolConfig::class, 'Google_Service_APIhub_GoogleCloudApihubV1McpToolConfig');
