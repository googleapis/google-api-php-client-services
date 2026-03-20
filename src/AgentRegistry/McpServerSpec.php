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

class McpServerSpec extends \Google\Model
{
  /**
   * Unspecified type.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * There is no spec for the MCP Server. The `content` field must be empty.
   */
  public const TYPE_NO_SPEC = 'NO_SPEC';
  /**
   * The content is a MCP Tool Spec following the One MCP specification. The
   * payload is the same as the `tools/list` response.
   */
  public const TYPE_TOOL_SPEC = 'TOOL_SPEC';
  /**
   * Optional. The content of the MCP Server spec. This payload is validated
   * against the schema for the specified type. The content size is limited to
   * `10KB`.
   *
   * @var array[]
   */
  public $content;
  /**
   * Required. The type of the MCP Server spec content.
   *
   * @var string
   */
  public $type;

  /**
   * Optional. The content of the MCP Server spec. This payload is validated
   * against the schema for the specified type. The content size is limited to
   * `10KB`.
   *
   * @param array[] $content
   */
  public function setContent($content)
  {
    $this->content = $content;
  }
  /**
   * @return array[]
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * Required. The type of the MCP Server spec content.
   *
   * Accepted values: TYPE_UNSPECIFIED, NO_SPEC, TOOL_SPEC
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(McpServerSpec::class, 'Google_Service_AgentRegistry_McpServerSpec');
