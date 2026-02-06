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

class ToolsetTool extends \Google\Model
{
  /**
   * Optional. The tool ID to filter the tools to retrieve the schema for.
   *
   * @var string
   */
  public $toolId;
  /**
   * Required. The resource name of the Toolset from which this tool is derived.
   * Format:
   * `projects/{project}/locations/{location}/apps/{app}/toolsets/{toolset}`
   *
   * @var string
   */
  public $toolset;

  /**
   * Optional. The tool ID to filter the tools to retrieve the schema for.
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
   * Required. The resource name of the Toolset from which this tool is derived.
   * Format:
   * `projects/{project}/locations/{location}/apps/{app}/toolsets/{toolset}`
   *
   * @param string $toolset
   */
  public function setToolset($toolset)
  {
    $this->toolset = $toolset;
  }
  /**
   * @return string
   */
  public function getToolset()
  {
    return $this->toolset;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ToolsetTool::class, 'Google_Service_CustomerEngagementSuite_ToolsetTool');
