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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpecAgentGatewayConfigAgentToAnywhereConfig extends \Google\Model
{
  /**
   * Required. The resource name of the Agent Gateway for outbound traffic. It
   * must be set to a Google-managed gateway whose `governed_access_path` is
   * `AGENT_TO_ANYWHERE`. Format:
   * `projects/{project}/locations/{location}/agentGateways/{agent_gateway}`
   *
   * @var string
   */
  public $agentGateway;

  /**
   * Required. The resource name of the Agent Gateway for outbound traffic. It
   * must be set to a Google-managed gateway whose `governed_access_path` is
   * `AGENT_TO_ANYWHERE`. Format:
   * `projects/{project}/locations/{location}/agentGateways/{agent_gateway}`
   *
   * @param string $agentGateway
   */
  public function setAgentGateway($agentGateway)
  {
    $this->agentGateway = $agentGateway;
  }
  /**
   * @return string
   */
  public function getAgentGateway()
  {
    return $this->agentGateway;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpecAgentGatewayConfigAgentToAnywhereConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpecAgentGatewayConfigAgentToAnywhereConfig');
