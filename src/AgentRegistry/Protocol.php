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

class Protocol extends \Google\Collection
{
  /**
   * Unspecified type.
   */
  public const TYPE_TYPE_UNSPECIFIED = 'TYPE_UNSPECIFIED';
  /**
   * The interfaces point to an A2A Agent following the A2A specification.
   */
  public const TYPE_A2A_AGENT = 'A2A_AGENT';
  /**
   * Agent does not follow any standard protocol.
   */
  public const TYPE_CUSTOM = 'CUSTOM';
  protected $collection_key = 'interfaces';
  protected $interfacesType = AgentregistryInterface::class;
  protected $interfacesDataType = 'array';
  /**
   * Output only. The version of the protocol, for example, the A2A Agent Card
   * version.
   *
   * @var string
   */
  public $protocolVersion;
  /**
   * Output only. The type of the protocol.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. The connection details for the Agent.
   *
   * @param AgentregistryInterface[] $interfaces
   */
  public function setInterfaces($interfaces)
  {
    $this->interfaces = $interfaces;
  }
  /**
   * @return AgentregistryInterface[]
   */
  public function getInterfaces()
  {
    return $this->interfaces;
  }
  /**
   * Output only. The version of the protocol, for example, the A2A Agent Card
   * version.
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
   * Output only. The type of the protocol.
   *
   * Accepted values: TYPE_UNSPECIFIED, A2A_AGENT, CUSTOM
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Protocol::class, 'Google_Service_AgentRegistry_Protocol');
