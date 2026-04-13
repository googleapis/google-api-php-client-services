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

class AgentTool extends \Google\Model
{
  /**
   * Optional. The resource name of the agent that is the entry point of the
   * tool. Format: `projects/{project}/locations/{location}/agents/{agent}`
   *
   * @var string
   */
  public $agent;
  /**
   * Optional. Description of the tool's purpose.
   *
   * @var string
   */
  public $description;
  /**
   * Required. The name of the agent tool.
   *
   * @var string
   */
  public $name;
  /**
   * Optional. Deprecated: Use `agent` instead. The resource name of the root
   * agent that is the entry point of the tool. Format:
   * `projects/{project}/locations/{location}/agents/{agent}`
   *
   * @deprecated
   * @var string
   */
  public $rootAgent;

  /**
   * Optional. The resource name of the agent that is the entry point of the
   * tool. Format: `projects/{project}/locations/{location}/agents/{agent}`
   *
   * @param string $agent
   */
  public function setAgent($agent)
  {
    $this->agent = $agent;
  }
  /**
   * @return string
   */
  public function getAgent()
  {
    return $this->agent;
  }
  /**
   * Optional. Description of the tool's purpose.
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
   * Required. The name of the agent tool.
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
   * Optional. Deprecated: Use `agent` instead. The resource name of the root
   * agent that is the entry point of the tool. Format:
   * `projects/{project}/locations/{location}/agents/{agent}`
   *
   * @deprecated
   * @param string $rootAgent
   */
  public function setRootAgent($rootAgent)
  {
    $this->rootAgent = $rootAgent;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getRootAgent()
  {
    return $this->rootAgent;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentTool::class, 'Google_Service_CustomerEngagementSuite_AgentTool');
