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

class AgentAgentToolset extends \Google\Collection
{
  protected $collection_key = 'toolIds';
  /**
   * Optional. The tools IDs to filter the toolset.
   *
   * @var string[]
   */
  public $toolIds;
  /**
   * Required. The resource name of the toolset. Format:
   * `projects/{project}/locations/{location}/apps/{app}/toolsets/{toolset}`
   *
   * @var string
   */
  public $toolset;

  /**
   * Optional. The tools IDs to filter the toolset.
   *
   * @param string[] $toolIds
   */
  public function setToolIds($toolIds)
  {
    $this->toolIds = $toolIds;
  }
  /**
   * @return string[]
   */
  public function getToolIds()
  {
    return $this->toolIds;
  }
  /**
   * Required. The resource name of the toolset. Format:
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
class_alias(AgentAgentToolset::class, 'Google_Service_CustomerEngagementSuite_AgentAgentToolset');
