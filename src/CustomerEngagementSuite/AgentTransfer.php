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

class AgentTransfer extends \Google\Model
{
  /**
   * Output only. Display name of the agent.
   *
   * @var string
   */
  public $displayName;
  /**
   * Required. The agent to which the conversation is being transferred. The
   * agent will handle the conversation from this point forward. Format:
   * `projects/{project}/locations/{location}/apps/{app}/agents/{agent}`
   *
   * @var string
   */
  public $targetAgent;

  /**
   * Output only. Display name of the agent.
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
   * Required. The agent to which the conversation is being transferred. The
   * agent will handle the conversation from this point forward. Format:
   * `projects/{project}/locations/{location}/apps/{app}/agents/{agent}`
   *
   * @param string $targetAgent
   */
  public function setTargetAgent($targetAgent)
  {
    $this->targetAgent = $targetAgent;
  }
  /**
   * @return string
   */
  public function getTargetAgent()
  {
    return $this->targetAgent;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentTransfer::class, 'Google_Service_CustomerEngagementSuite_AgentTransfer');
