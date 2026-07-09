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

class LfA2aV1AgentCapabilities extends \Google\Collection
{
  protected $collection_key = 'extensions';
  /**
   * Indicates if the agent supports providing an extended agent card when
   * authenticated.
   *
   * @var bool
   */
  public $extendedAgentCard;
  protected $extensionsType = LfA2aV1AgentExtension::class;
  protected $extensionsDataType = 'array';
  /**
   * Indicates if the agent supports sending push notifications for asynchronous
   * task updates.
   *
   * @var bool
   */
  public $pushNotifications;
  /**
   * Indicates if the agent supports streaming responses.
   *
   * @var bool
   */
  public $streaming;

  /**
   * Indicates if the agent supports providing an extended agent card when
   * authenticated.
   *
   * @param bool $extendedAgentCard
   */
  public function setExtendedAgentCard($extendedAgentCard)
  {
    $this->extendedAgentCard = $extendedAgentCard;
  }
  /**
   * @return bool
   */
  public function getExtendedAgentCard()
  {
    return $this->extendedAgentCard;
  }
  /**
   * A list of protocol extensions supported by the agent.
   *
   * @param LfA2aV1AgentExtension[] $extensions
   */
  public function setExtensions($extensions)
  {
    $this->extensions = $extensions;
  }
  /**
   * @return LfA2aV1AgentExtension[]
   */
  public function getExtensions()
  {
    return $this->extensions;
  }
  /**
   * Indicates if the agent supports sending push notifications for asynchronous
   * task updates.
   *
   * @param bool $pushNotifications
   */
  public function setPushNotifications($pushNotifications)
  {
    $this->pushNotifications = $pushNotifications;
  }
  /**
   * @return bool
   */
  public function getPushNotifications()
  {
    return $this->pushNotifications;
  }
  /**
   * Indicates if the agent supports streaming responses.
   *
   * @param bool $streaming
   */
  public function setStreaming($streaming)
  {
    $this->streaming = $streaming;
  }
  /**
   * @return bool
   */
  public function getStreaming()
  {
    return $this->streaming;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LfA2aV1AgentCapabilities::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1AgentCapabilities');
