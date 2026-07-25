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

namespace Google\Service\Reports;

class AgentAttributionInfo extends \Google\Model
{
  /**
   * The ID of the agent.
   *
   * @var string
   */
  public $agentId;
  /**
   * The user visible name of the agent.
   *
   * @var string
   */
  public $agentName;
  protected $agentOwnerType = AgentAttributionInfoAgentOwner::class;
  protected $agentOwnerDataType = '';
  /**
   * Type of the agent.
   *
   * @var string
   */
  public $agentType;

  /**
   * The ID of the agent.
   *
   * @param string $agentId
   */
  public function setAgentId($agentId)
  {
    $this->agentId = $agentId;
  }
  /**
   * @return string
   */
  public function getAgentId()
  {
    return $this->agentId;
  }
  /**
   * The user visible name of the agent.
   *
   * @param string $agentName
   */
  public function setAgentName($agentName)
  {
    $this->agentName = $agentName;
  }
  /**
   * @return string
   */
  public function getAgentName()
  {
    return $this->agentName;
  }
  /**
   * The owner of the agent.
   *
   * @param AgentAttributionInfoAgentOwner $agentOwner
   */
  public function setAgentOwner(AgentAttributionInfoAgentOwner $agentOwner)
  {
    $this->agentOwner = $agentOwner;
  }
  /**
   * @return AgentAttributionInfoAgentOwner
   */
  public function getAgentOwner()
  {
    return $this->agentOwner;
  }
  /**
   * Type of the agent.
   *
   * @param string $agentType
   */
  public function setAgentType($agentType)
  {
    $this->agentType = $agentType;
  }
  /**
   * @return string
   */
  public function getAgentType()
  {
    return $this->agentType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentAttributionInfo::class, 'Google_Service_Reports_AgentAttributionInfo');
