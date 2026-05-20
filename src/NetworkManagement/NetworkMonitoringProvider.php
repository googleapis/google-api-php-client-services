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

namespace Google\Service\NetworkManagement;

class NetworkMonitoringProvider extends \Google\Collection
{
  /**
   * The default value. This value is used if the type is omitted.
   */
  public const PROVIDER_TYPE_PROVIDER_TYPE_UNSPECIFIED = 'PROVIDER_TYPE_UNSPECIFIED';
  /**
   * External provider.
   */
  public const PROVIDER_TYPE_EXTERNAL = 'EXTERNAL';
  /**
   * The default value. This value is used if the status is omitted.
   */
  public const STATE_STATE_UNSPECIFIED = 'STATE_UNSPECIFIED';
  /**
   * NetworkMonitoringProvider is being activated.
   */
  public const STATE_ACTIVATING = 'ACTIVATING';
  /**
   * NetworkMonitoringProvider is active.
   */
  public const STATE_ACTIVE = 'ACTIVE';
  /**
   * NetworkMonitoringProvider is being suspended.
   */
  public const STATE_SUSPENDING = 'SUSPENDING';
  /**
   * NetworkMonitoringProvider is suspended.
   */
  public const STATE_SUSPENDED = 'SUSPENDED';
  /**
   * NetworkMonitoringProvider is being deleted.
   */
  public const STATE_DELETING = 'DELETING';
  /**
   * NetworkMonitoringProvider is deleted.
   */
  public const STATE_DELETED = 'DELETED';
  protected $collection_key = 'errors';
  /**
   * Output only. The time the NetworkMonitoringProvider was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The list of error messages detected for the
   * NetworkMonitoringProvider.
   *
   * @var string[]
   */
  public $errors;
  /**
   * Output only. Identifier. Name of the resource. Format: `projects/{project}/
   * locations/{location}/networkMonitoringProviders/{network_monitoring_provide
   * r}`
   *
   * @var string
   */
  public $name;
  /**
   * Required. Type of the NetworkMonitoringProvider.
   *
   * @var string
   */
  public $providerType;
  /**
   * Output only. Link to the provider's UI.
   *
   * @var string
   */
  public $providerUri;
  /**
   * Output only. State of the NetworkMonitoringProvider.
   *
   * @var string
   */
  public $state;
  /**
   * Output only. The time the NetworkMonitoringProvider was updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The time the NetworkMonitoringProvider was created.
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
   * Output only. The list of error messages detected for the
   * NetworkMonitoringProvider.
   *
   * @param string[] $errors
   */
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  /**
   * @return string[]
   */
  public function getErrors()
  {
    return $this->errors;
  }
  /**
   * Output only. Identifier. Name of the resource. Format: `projects/{project}/
   * locations/{location}/networkMonitoringProviders/{network_monitoring_provide
   * r}`
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
   * Required. Type of the NetworkMonitoringProvider.
   *
   * Accepted values: PROVIDER_TYPE_UNSPECIFIED, EXTERNAL
   *
   * @param self::PROVIDER_TYPE_* $providerType
   */
  public function setProviderType($providerType)
  {
    $this->providerType = $providerType;
  }
  /**
   * @return self::PROVIDER_TYPE_*
   */
  public function getProviderType()
  {
    return $this->providerType;
  }
  /**
   * Output only. Link to the provider's UI.
   *
   * @param string $providerUri
   */
  public function setProviderUri($providerUri)
  {
    $this->providerUri = $providerUri;
  }
  /**
   * @return string
   */
  public function getProviderUri()
  {
    return $this->providerUri;
  }
  /**
   * Output only. State of the NetworkMonitoringProvider.
   *
   * Accepted values: STATE_UNSPECIFIED, ACTIVATING, ACTIVE, SUSPENDING,
   * SUSPENDED, DELETING, DELETED
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
   * Output only. The time the NetworkMonitoringProvider was updated.
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
class_alias(NetworkMonitoringProvider::class, 'Google_Service_NetworkManagement_NetworkMonitoringProvider');
