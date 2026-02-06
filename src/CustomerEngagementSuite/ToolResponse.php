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

class ToolResponse extends \Google\Model
{
  /**
   * Output only. Display name of the tool.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. The matching ID of the tool call the response is for.
   *
   * @var string
   */
  public $id;
  /**
   * Required. The tool execution result in JSON object format. Use "output" key
   * to specify tool response and "error" key to specify error details (if any).
   * If "output" and "error" keys are not specified, then whole "response" is
   * treated as tool execution result.
   *
   * @var array[]
   */
  public $response;
  /**
   * Optional. The name of the tool to execute. Format:
   * `projects/{project}/locations/{location}/apps/{app}/tools/{tool}`
   *
   * @var string
   */
  public $tool;
  protected $toolsetToolType = ToolsetTool::class;
  protected $toolsetToolDataType = '';

  /**
   * Output only. Display name of the tool.
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
   * Optional. The matching ID of the tool call the response is for.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * Required. The tool execution result in JSON object format. Use "output" key
   * to specify tool response and "error" key to specify error details (if any).
   * If "output" and "error" keys are not specified, then whole "response" is
   * treated as tool execution result.
   *
   * @param array[] $response
   */
  public function setResponse($response)
  {
    $this->response = $response;
  }
  /**
   * @return array[]
   */
  public function getResponse()
  {
    return $this->response;
  }
  /**
   * Optional. The name of the tool to execute. Format:
   * `projects/{project}/locations/{location}/apps/{app}/tools/{tool}`
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
   * Optional. The toolset tool that got executed.
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
class_alias(ToolResponse::class, 'Google_Service_CustomerEngagementSuite_ToolResponse');
