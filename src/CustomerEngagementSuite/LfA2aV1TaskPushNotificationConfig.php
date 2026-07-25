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

class LfA2aV1TaskPushNotificationConfig extends \Google\Model
{
  protected $authenticationType = LfA2aV1AuthenticationInfo::class;
  protected $authenticationDataType = '';
  /**
   * The push notification configuration details. A unique identifier (e.g.
   * UUID) for this push notification configuration.
   *
   * @var string
   */
  public $id;
  /**
   * The ID of the task this configuration is associated with.
   *
   * @var string
   */
  public $taskId;
  /**
   * Optional. Opaque routing identifier. Must match the `tenant` value from the
   * selected `AgentInterface` in the Agent Card when that field is set.
   *
   * @var string
   */
  public $tenant;
  /**
   * A token unique for this task or session.
   *
   * @var string
   */
  public $token;
  /**
   * Required. The URL where the notification should be sent.
   *
   * @var string
   */
  public $url;

  /**
   * Authentication information required to send the notification.
   *
   * @param LfA2aV1AuthenticationInfo $authentication
   */
  public function setAuthentication(LfA2aV1AuthenticationInfo $authentication)
  {
    $this->authentication = $authentication;
  }
  /**
   * @return LfA2aV1AuthenticationInfo
   */
  public function getAuthentication()
  {
    return $this->authentication;
  }
  /**
   * The push notification configuration details. A unique identifier (e.g.
   * UUID) for this push notification configuration.
   *
   * @param string $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * The ID of the task this configuration is associated with.
   *
   * @param string $taskId
   */
  public function setTaskId($taskId)
  {
    $this->taskId = $taskId;
  }
  /**
   * @return string
   */
  public function getTaskId()
  {
    return $this->taskId;
  }
  /**
   * Optional. Opaque routing identifier. Must match the `tenant` value from the
   * selected `AgentInterface` in the Agent Card when that field is set.
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
   * A token unique for this task or session.
   *
   * @param string $token
   */
  public function setToken($token)
  {
    $this->token = $token;
  }
  /**
   * @return string
   */
  public function getToken()
  {
    return $this->token;
  }
  /**
   * Required. The URL where the notification should be sent.
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
class_alias(LfA2aV1TaskPushNotificationConfig::class, 'Google_Service_CustomerEngagementSuite_LfA2aV1TaskPushNotificationConfig');
