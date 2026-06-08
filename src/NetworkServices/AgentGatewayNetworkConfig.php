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

namespace Google\Service\NetworkServices;

class AgentGatewayNetworkConfig extends \Google\Model
{
  protected $dnsPeeringConfigType = AgentGatewayNetworkConfigDnsPeeringConfig::class;
  protected $dnsPeeringConfigDataType = '';
  protected $egressType = AgentGatewayNetworkConfigEgress::class;
  protected $egressDataType = '';

  /**
   * Optional. Optional DNS peering configuration for connectivity to your
   * private VPC network.
   *
   * @param AgentGatewayNetworkConfigDnsPeeringConfig $dnsPeeringConfig
   */
  public function setDnsPeeringConfig(AgentGatewayNetworkConfigDnsPeeringConfig $dnsPeeringConfig)
  {
    $this->dnsPeeringConfig = $dnsPeeringConfig;
  }
  /**
   * @return AgentGatewayNetworkConfigDnsPeeringConfig
   */
  public function getDnsPeeringConfig()
  {
    return $this->dnsPeeringConfig;
  }
  /**
   * Optional. Optional PSC-Interface network attachment for connectivity to
   * your private VPCs network.
   *
   * @param AgentGatewayNetworkConfigEgress $egress
   */
  public function setEgress(AgentGatewayNetworkConfigEgress $egress)
  {
    $this->egress = $egress;
  }
  /**
   * @return AgentGatewayNetworkConfigEgress
   */
  public function getEgress()
  {
    return $this->egress;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentGatewayNetworkConfig::class, 'Google_Service_NetworkServices_AgentGatewayNetworkConfig');
