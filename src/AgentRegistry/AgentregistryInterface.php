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

namespace Google\Service\AgentRegistry;

class AgentregistryInterface extends \Google\Model
{
  /**
   * Unspecified transport protocol.
   */
  public const PROTOCOL_BINDING_PROTOCOL_BINDING_UNSPECIFIED = 'PROTOCOL_BINDING_UNSPECIFIED';
  /**
   * JSON-RPC specification.
   */
  public const PROTOCOL_BINDING_JSONRPC = 'JSONRPC';
  /**
   * gRPC specification.
   */
  public const PROTOCOL_BINDING_GRPC = 'GRPC';
  /**
   * HTTP+JSON specification.
   */
  public const PROTOCOL_BINDING_HTTP_JSON = 'HTTP_JSON';
  /**
   * Required. The protocol binding of the interface.
   *
   * @var string
   */
  public $protocolBinding;
  /**
   * Required. The destination URL.
   *
   * @var string
   */
  public $url;

  /**
   * Required. The protocol binding of the interface.
   *
   * Accepted values: PROTOCOL_BINDING_UNSPECIFIED, JSONRPC, GRPC, HTTP_JSON
   *
   * @param self::PROTOCOL_BINDING_* $protocolBinding
   */
  public function setProtocolBinding($protocolBinding)
  {
    $this->protocolBinding = $protocolBinding;
  }
  /**
   * @return self::PROTOCOL_BINDING_*
   */
  public function getProtocolBinding()
  {
    return $this->protocolBinding;
  }
  /**
   * Required. The destination URL.
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
class_alias(AgentregistryInterface::class, 'Google_Service_AgentRegistry_AgentregistryInterface');
