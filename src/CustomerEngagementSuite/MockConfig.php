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

class MockConfig extends \Google\Collection
{
  /**
   * Default value. This value is unused.
   */
  public const UNMATCHED_TOOL_CALL_BEHAVIOR_UNMATCHED_TOOL_CALL_BEHAVIOR_UNSPECIFIED = 'UNMATCHED_TOOL_CALL_BEHAVIOR_UNSPECIFIED';
  /**
   * Throw an error for any tool calls that don't match a mock expected input
   * pattern.
   */
  public const UNMATCHED_TOOL_CALL_BEHAVIOR_FAIL = 'FAIL';
  /**
   * For unmatched tool calls, pass the tool call through to real tool.
   */
  public const UNMATCHED_TOOL_CALL_BEHAVIOR_PASS_THROUGH = 'PASS_THROUGH';
  protected $collection_key = 'mockedToolCalls';
  protected $mockedToolCallsType = MockedToolCall::class;
  protected $mockedToolCallsDataType = 'array';
  /**
   * Required. Beavhior for tool calls that don't match any args patterns in
   * mocked_tool_calls.
   *
   * @var string
   */
  public $unmatchedToolCallBehavior;

  /**
   * Optional. All tool calls to mock for the duration of the session.
   *
   * @param MockedToolCall[] $mockedToolCalls
   */
  public function setMockedToolCalls($mockedToolCalls)
  {
    $this->mockedToolCalls = $mockedToolCalls;
  }
  /**
   * @return MockedToolCall[]
   */
  public function getMockedToolCalls()
  {
    return $this->mockedToolCalls;
  }
  /**
   * Required. Beavhior for tool calls that don't match any args patterns in
   * mocked_tool_calls.
   *
   * Accepted values: UNMATCHED_TOOL_CALL_BEHAVIOR_UNSPECIFIED, FAIL,
   * PASS_THROUGH
   *
   * @param self::UNMATCHED_TOOL_CALL_BEHAVIOR_* $unmatchedToolCallBehavior
   */
  public function setUnmatchedToolCallBehavior($unmatchedToolCallBehavior)
  {
    $this->unmatchedToolCallBehavior = $unmatchedToolCallBehavior;
  }
  /**
   * @return self::UNMATCHED_TOOL_CALL_BEHAVIOR_*
   */
  public function getUnmatchedToolCallBehavior()
  {
    return $this->unmatchedToolCallBehavior;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MockConfig::class, 'Google_Service_CustomerEngagementSuite_MockConfig');
