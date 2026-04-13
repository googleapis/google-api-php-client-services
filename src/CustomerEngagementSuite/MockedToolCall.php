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

class MockedToolCall extends \Google\Model
{
  /**
   * Required. A pattern to match against the args / inputs of all dispatched
   * tool calls. If the tool call inputs match this pattern, then mock output
   * will be returned.
   *
   * @var array[]
   */
  public $expectedArgsPattern;
  /**
   * Optional. The mock response / output to return if the tool call args /
   * inputs match the pattern.
   *
   * @var array[]
   */
  public $mockResponse;
  /**
   * Required. Deprecated. Use tool_identifier instead.
   *
   * @deprecated
   * @var string
   */
  public $tool;
  /**
   * Optional. The name of the tool to mock. Format:
   * `projects/{project}/locations/{location}/apps/{app}/tools/{tool}`
   *
   * @var string
   */
  public $toolId;
  protected $toolsetType = ToolsetTool::class;
  protected $toolsetDataType = '';

  /**
   * Required. A pattern to match against the args / inputs of all dispatched
   * tool calls. If the tool call inputs match this pattern, then mock output
   * will be returned.
   *
   * @param array[] $expectedArgsPattern
   */
  public function setExpectedArgsPattern($expectedArgsPattern)
  {
    $this->expectedArgsPattern = $expectedArgsPattern;
  }
  /**
   * @return array[]
   */
  public function getExpectedArgsPattern()
  {
    return $this->expectedArgsPattern;
  }
  /**
   * Optional. The mock response / output to return if the tool call args /
   * inputs match the pattern.
   *
   * @param array[] $mockResponse
   */
  public function setMockResponse($mockResponse)
  {
    $this->mockResponse = $mockResponse;
  }
  /**
   * @return array[]
   */
  public function getMockResponse()
  {
    return $this->mockResponse;
  }
  /**
   * Required. Deprecated. Use tool_identifier instead.
   *
   * @deprecated
   * @param string $tool
   */
  public function setTool($tool)
  {
    $this->tool = $tool;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getTool()
  {
    return $this->tool;
  }
  /**
   * Optional. The name of the tool to mock. Format:
   * `projects/{project}/locations/{location}/apps/{app}/tools/{tool}`
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
  /**
   * Optional. The toolset to mock.
   *
   * @param ToolsetTool $toolset
   */
  public function setToolset(ToolsetTool $toolset)
  {
    $this->toolset = $toolset;
  }
  /**
   * @return ToolsetTool
   */
  public function getToolset()
  {
    return $this->toolset;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MockedToolCall::class, 'Google_Service_CustomerEngagementSuite_MockedToolCall');
