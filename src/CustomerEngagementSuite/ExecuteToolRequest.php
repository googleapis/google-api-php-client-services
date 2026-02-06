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

class ExecuteToolRequest extends \Google\Model
{
  /**
   * Optional. The input parameters and values for the tool in JSON object
   * format.
   *
   * @var array[]
   */
  public $args;
  /**
   * Optional. The name of the tool to execute. Format:
   * projects/{project}/locations/{location}/apps/{app}/tools/{tool}
   *
   * @var string
   */
  public $tool;
  protected $toolsetToolType = ToolsetTool::class;
  protected $toolsetToolDataType = '';

  /**
   * Optional. The input parameters and values for the tool in JSON object
   * format.
   *
   * @param array[] $args
   */
  public function setArgs($args)
  {
    $this->args = $args;
  }
  /**
   * @return array[]
   */
  public function getArgs()
  {
    return $this->args;
  }
  /**
   * Optional. The name of the tool to execute. Format:
   * projects/{project}/locations/{location}/apps/{app}/tools/{tool}
   *
   * @param string $tool
   */
  public function setTool($tool)
  {
    $this->tool = $tool;
  }
  /**
   * @return string
   */
  public function getTool()
  {
    return $this->tool;
  }
  /**
   * Optional. The toolset tool to execute. Only one tool should match the
   * predicate from the toolset. Otherwise, an error will be returned.
   *
   * @param ToolsetTool $toolsetTool
   */
  public function setToolsetTool(ToolsetTool $toolsetTool)
  {
    $this->toolsetTool = $toolsetTool;
  }
  /**
   * @return ToolsetTool
   */
  public function getToolsetTool()
  {
    return $this->toolsetTool;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExecuteToolRequest::class, 'Google_Service_CustomerEngagementSuite_ExecuteToolRequest');
