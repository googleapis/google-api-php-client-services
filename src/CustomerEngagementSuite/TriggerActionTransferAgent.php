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

class TriggerActionTransferAgent extends \Google\Model
{
  /**
   * Required. The name of the agent to transfer the conversation to. The agent
   * must be in the same app as the current agent. Format:
   * `projects/{project}/locations/{location}/apps/{app}/agents/{agent}`
   *
   * @var string
   */
  public $agent;

  /**
   * Required. The name of the agent to transfer the conversation to. The agent
   * must be in the same app as the current agent. Format:
   * `projects/{project}/locations/{location}/apps/{app}/agents/{agent}`
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TriggerActionTransferAgent::class, 'Google_Service_CustomerEngagementSuite_TriggerActionTransferAgent');
