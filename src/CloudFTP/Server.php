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

namespace Google\Service\CloudFTP;

class Server extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const ACCESS_TYPE_ACCESS_TYPE_UNSPECIFIED = 'ACCESS_TYPE_UNSPECIFIED';
  /**
   * Server is assigned a public IP.
   */
  public const ACCESS_TYPE_EXTERNAL = 'EXTERNAL';
  /**
   * Server is assigned an internal IP.
   */
  public const ACCESS_TYPE_INTERNAL = 'INTERNAL';
  /**
   * Default value. This value is unused.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * Server is being created.
   */
  public const STATE_CREATING = 'CREATING';
  /**
   * Server is starting.
   */
  public const STATE_STARTING = 'STARTING';
  /**
   * Server is ready to be used.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * Server is stopping.
   */
  public const STATE_STOPPING = 'STOPPING';
  /**
   * Server is stopped.
   */
  public const STATE_STOPPED = 'STOPPED';
  /**
   * Server is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * Server is in error state.
   */
  public const STATE_ERROR = 'ERROR';
  /**
   * Server is being updated.
   */
  public const STATE_UPDATING = 'UPDATING';
  /**
   * Required. The access type of the Server.
   *
   * @var string
   */
  public $accessType;
  /**
   * Output only. [Output only] Create time stamp
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Display name of the Server
   *
   * @var string
   */
  public $displayName;
  protected $externalConfigType = ExternalServerConfig::class;
  protected $externalConfigDataType = '';
  protected $googleManagedServerCredentialType = ServerCredential::class;
  protected $googleManagedServerCredentialDataType = '';
  protected $internalConfigType = InternalServerConfig::class;
  protected $internalConfigDataType = '';
  /**
   * Optional. Labels as key value pairs
   *
   * @var string[]
   */
  public $labels;
  /**
   * Identifier. name of resource
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Service agent used to access the customer bucket.
   *
   * @var string
   */
  public $serviceAgent;
  /**
   * Output only. The state of the server.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. [Output only] Update time stamp
   *
   * @var string
   */
  public $updateTime;

  /**
   * Required. The access type of the Server.
   *
   * Accepted values: ACCESS_TYPE_UNSPECIFIED, EXTERNAL, INTERNAL
   *
   * @param self::ACCESS_TYPE_* $accessType
   */
  public function setAccessType($accessType)
  {
    $this->accessType = $accessType;
  }
  /**
   * @return self::ACCESS_TYPE_*
   */
  public function getAccessType()
  {
    return $this->accessType;
  }
  /**
   * Output only. [Output only] Create time stamp
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Optional. Display name of the Server
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Configuration for external access.
   *
   * @param ExternalServerConfig $externalConfig
   */
  public function setExternalConfig(ExternalServerConfig $externalConfig)
  {
    $this->externalConfig = $externalConfig;
  }
  /**
   * @return ExternalServerConfig
   */
  public function getExternalConfig()
  {
    return $this->externalConfig;
  }
  /**
   * Output only. Credentials of the FTP Server.
   *
   * @param ServerCredential $googleManagedServerCredential
   */
  public function setGoogleManagedServerCredential(ServerCredential $googleManagedServerCredential)
  {
    $this->googleManagedServerCredential = $googleManagedServerCredential;
  }
  /**
   * @return ServerCredential
   */
  public function getGoogleManagedServerCredential()
  {
    return $this->googleManagedServerCredential;
  }
  /**
   * Configuration for internal access.
   *
   * @param InternalServerConfig $internalConfig
   */
  public function setInternalConfig(InternalServerConfig $internalConfig)
  {
    $this->internalConfig = $internalConfig;
  }
  /**
   * @return InternalServerConfig
   */
  public function getInternalConfig()
  {
    return $this->internalConfig;
  }
  /**
   * Optional. Labels as key value pairs
   *
   * @param string[] $labels
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * Identifier. name of resource
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. Service agent used to access the customer bucket.
   *
   * @param string $serviceAgent
   */
  public function setServiceAgent($serviceAgent)
  {
    $this->serviceAgent = $serviceAgent;
  }
  /**
   * @return string
   */
  public function getServiceAgent()
  {
    return $this->serviceAgent;
  }
  /**
   * Output only. The state of the server.
   *
   * Accepted values: STATE_UNSPECIFIED, CREATING, STARTING, ACTIVE, STOPPING,
   * STOPPED, DELETING, ERROR, UPDATING
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * Output only. [Output only] Update time stamp
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
class_alias(Server::class, 'Google_Service_CloudFTP_Server');
