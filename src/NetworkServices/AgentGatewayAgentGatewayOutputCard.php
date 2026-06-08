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

class AgentGatewayAgentGatewayOutputCard extends \Google\Collection
{
  protected $collection_key = 'rootCertificates';
  /**
   * Output only. mTLS Endpoint associated with this AgentGateway
   *
   * @var string
   */
  public $mtlsEndpoint;
  /**
   * Output only. Root Certificates for Agents to validate this AgentGateway
   *
   * @var string[]
   */
  public $rootCertificates;
  /**
   * Output only. Service Account used by Service Extensions to operate.
   *
   * @var string
   */
  public $serviceExtensionsServiceAccount;

  /**
   * Output only. mTLS Endpoint associated with this AgentGateway
   *
   * @param string $mtlsEndpoint
   */
  public function setMtlsEndpoint($mtlsEndpoint)
  {
    $this->mtlsEndpoint = $mtlsEndpoint;
  }
  /**
   * @return string
   */
  public function getMtlsEndpoint()
  {
    return $this->mtlsEndpoint;
  }
  /**
   * Output only. Root Certificates for Agents to validate this AgentGateway
   *
   * @param string[] $rootCertificates
   */
  public function setRootCertificates($rootCertificates)
  {
    $this->rootCertificates = $rootCertificates;
  }
  /**
   * @return string[]
   */
  public function getRootCertificates()
  {
    return $this->rootCertificates;
  }
  /**
   * Output only. Service Account used by Service Extensions to operate.
   *
   * @param string $serviceExtensionsServiceAccount
   */
  public function setServiceExtensionsServiceAccount($serviceExtensionsServiceAccount)
  {
    $this->serviceExtensionsServiceAccount = $serviceExtensionsServiceAccount;
  }
  /**
   * @return string
   */
  public function getServiceExtensionsServiceAccount()
  {
    return $this->serviceExtensionsServiceAccount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AgentGatewayAgentGatewayOutputCard::class, 'Google_Service_NetworkServices_AgentGatewayAgentGatewayOutputCard');
