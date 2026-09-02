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

class AgentRegistryDeployment extends \Google\Model
{
  /**
   * Optional. Output only. The resource name of the deployed Agent Registry
   * service. Format:
   * `projects/{project}/locations/{location}/services/{service}`
   *
   * @var string
   */
  public $agentRegistryServiceName;

  /**
   * Optional. Output only. The resource name of the deployed Agent Registry
   * service. Format:
   * `projects/{project}/locations/{location}/services/{service}`
   *
   * @param string $agentRegistryServiceName
   */
  public function setAgentRegistryServiceName($agentRegistryServiceName)
  {
    $this->agentRegistryServiceName = $agentRegistryServiceName;
  }
  /**
   * @return string
   */
  public function getAgentRegistryServiceName()
  {
    return $this->agentRegistryServiceName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentRegistryDeployment::class, 'Google_Service_CustomerEngagementSuite_AgentRegistryDeployment');
