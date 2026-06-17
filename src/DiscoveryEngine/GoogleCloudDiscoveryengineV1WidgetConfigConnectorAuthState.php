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

namespace Google\Service\DiscoveryEngine;

class GoogleCloudDiscoveryengineV1WidgetConfigConnectorAuthState extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const AUTH_STATE_AUTH_STATE_UNSPECIFIED = 'AUTH_STATE_UNSPECIFIED';
  /**
   * The user has authorized the data connector.
   */
  public const AUTH_STATE_AUTHORIZED = 'AUTHORIZED';
  /**
   * The user authorization for the data connector has expired.
   */
  public const AUTH_STATE_EXPIRED = 'EXPIRED';
  /**
   * The user can still make search requests but actions need to be enabled.
   */
  public const AUTH_STATE_ACTIONS_DISABLED = 'ACTIONS_DISABLED';
  /**
   * The data connector does not require any authorization.
   */
  public const AUTH_STATE_NO_AUTH = 'NO_AUTH';
  /**
   * Output only. The authorization state of the data connector.
   *
   * @var string
   */
  public $authState;
  /**
   * Output only. The authorization uri for the data connector.
   *
   * @var string
   */
  public $authorizationUri;
  /**
   * Output only. The authorization state update timestamp.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The authorization state of the data connector.
   *
   * Accepted values: AUTH_STATE_UNSPECIFIED, AUTHORIZED, EXPIRED,
   * ACTIONS_DISABLED, NO_AUTH
   *
   * @param self::AUTH_STATE_* $authState
   */
  public function setAuthState($authState)
  {
    $this->authState = $authState;
  }
  /**
   * @return self::AUTH_STATE_*
   */
  public function getAuthState()
  {
    return $this->authState;
  }
  /**
   * Output only. The authorization uri for the data connector.
   *
   * @param string $authorizationUri
   */
  public function setAuthorizationUri($authorizationUri)
  {
    $this->authorizationUri = $authorizationUri;
  }
  /**
   * @return string
   */
  public function getAuthorizationUri()
  {
    return $this->authorizationUri;
  }
  /**
   * Output only. The authorization state update timestamp.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDiscoveryengineV1WidgetConfigConnectorAuthState::class, 'Google_Service_DiscoveryEngine_GoogleCloudDiscoveryengineV1WidgetConfigConnectorAuthState');
