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

class GoogleCloudAiplatformV1SandboxEnvironmentTemplateNetworkPort extends \Google\Model
{
  /**
   * Unspecified protocol. Defaults to TCP.
   */
  public const PROTOCOL_PROTOCOL_UNSPECIFIED = 'PROTOCOL_UNSPECIFIED';
  /**
   * TCP protocol.
   */
  public const PROTOCOL_TCP = 'TCP';
  /**
   * UDP protocol.
   */
  public const PROTOCOL_UDP = 'UDP';
  /**
   * Optional. Port number to expose. This must be a valid port number, between
   * 1 and 65535.
   *
   * @var int
   */
  public $port;
  /**
   * Optional. Protocol for port. Defaults to TCP if not specified.
   *
   * @var string
   */
  public $protocol;

  /**
   * Optional. Port number to expose. This must be a valid port number, between
   * 1 and 65535.
   *
   * @param int $port
   */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /**
   * @return int
   */
  public function getPort()
  {
    return $this->port;
  }
  /**
   * Optional. Protocol for port. Defaults to TCP if not specified.
   *
   * Accepted values: PROTOCOL_UNSPECIFIED, TCP, UDP
   *
   * @param self::PROTOCOL_* $protocol
   */
  public function setProtocol($protocol)
  {
    $this->protocol = $protocol;
  }
  /**
   * @return self::PROTOCOL_*
   */
  public function getProtocol()
  {
    return $this->protocol;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1SandboxEnvironmentTemplateNetworkPort::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1SandboxEnvironmentTemplateNetworkPort');
