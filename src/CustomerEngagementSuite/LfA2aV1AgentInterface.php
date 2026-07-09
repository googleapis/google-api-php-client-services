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

class LfA2aV1AgentInterface extends \Google\Model
{
  /**
   * Required. The protocol binding supported at this URL. This is an open form
   * string, to be easily extended for other protocol bindings. The core ones
   * officially supported are `JSONRPC`, `GRPC` and `HTTP+JSON`.
   *
   * @var string
   */
  public $protocolBinding;
  /**
   * Required. The version of the A2A protocol this interface exposes. Use the
   * latest supported minor version per major version. Examples: "0.3", "1.0"
   *
   * @var string
   */
  public $protocolVersion;
  /**
   * Tenant ID to be used in the request when calling the agent.
   *
   * @var string
   */
  public $tenant;
  /**
   * Required. The URL where this interface is available. Must be a valid
   * absolute HTTPS URL in production. Example:
   * "https://api.example.com/a2a/v1", "https://grpc.example.com/a2a"
   *
   * @var string
   */
  public $url;

  /**
   * Required. The protocol binding supported at this URL. This is an open form
   * string, to be easily extended for other protocol bindings. The core ones
   * officially supported are `JSONRPC`, `GRPC` and `HTTP+JSON`.
   *
   * @param string $protocolBinding
   */
  public function setProtocolBinding($protocolBinding)
  {
    $this->protocolBinding = $protocolBinding;
  }
  /**
   * @return string
   */
  public function getProtocolBinding()
  {
    return $this->protocolBinding;
  }
  /**
   * Required. The version of the A2A protocol this interface exposes. Use the
   * latest supported minor version per major version. Examples: "0.3", "1.0"
   *
   * @param string $protocolVersion
   */
  public function setProtocolVersion($protocolVersion)
  {
    $this->protocolVersion = $protocolVersion;
  }
  /**
   * @return string
   */
  public function getProtocolVersion()
  {
    return $this->protocolVersion;
  }
  /**
   * Tenant ID to be used in the request when calling the agent.
   *
   * @param string $tenant
   */
  public function setTenant($tenant)
  {
    $this->tenant = $tenant;
  }
  /**
   * @return string
   */
  public function getTenant()
  {
    return $this->tenant;
  }
  /**
   * Required. The URL where this interface is available. Must be a valid
   * absolute HTTPS URL in production. Example:
   * "https://api.example.com/a2a/v1", "https://grpc.example.com/a2a"
   *
   * @param string $url
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LfA2aV1AgentInterface::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1AgentInterface');
