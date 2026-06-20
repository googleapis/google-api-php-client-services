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

class GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpecAgentGatewayConfig extends \Google\Model
{
  protected $agentToAnywhereConfigType = GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpecAgentGatewayConfigAgentToAnywhereConfig::class;
  protected $agentToAnywhereConfigDataType = '';
  protected $clientToAgentConfigType = GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpecAgentGatewayConfigClientToAgentConfig::class;
  protected $clientToAgentConfigDataType = '';

  /**
   * Optional. Configuration for traffic originating from the Reasoning Engine.
   * When unset, outgoing traffic is not routed through an Agent Gateway.
   *
   * @param GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpecAgentGatewayConfigAgentToAnywhereConfig $agentToAnywhereConfig
   */
  public function setAgentToAnywhereConfig(GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpecAgentGatewayConfigAgentToAnywhereConfig $agentToAnywhereConfig)
  {
    $this->agentToAnywhereConfig = $agentToAnywhereConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpecAgentGatewayConfigAgentToAnywhereConfig
   */
  public function getAgentToAnywhereConfig()
  {
    return $this->agentToAnywhereConfig;
  }
  /**
   * Optional. Configuration for traffic targeting the Reasoning Engine. When
   * unset, incoming traffic is not routed through an Agent Gateway.
   *
   * @param GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpecAgentGatewayConfigClientToAgentConfig $clientToAgentConfig
   */
  public function setClientToAgentConfig(GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpecAgentGatewayConfigClientToAgentConfig $clientToAgentConfig)
  {
    $this->clientToAgentConfig = $clientToAgentConfig;
  }
  /**
   * @return GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpecAgentGatewayConfigClientToAgentConfig
   */
  public function getClientToAgentConfig()
  {
    return $this->clientToAgentConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpecAgentGatewayConfig::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ReasoningEngineSpecDeploymentSpecAgentGatewayConfig');
