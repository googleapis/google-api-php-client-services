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

namespace Google\Service\Apigee;

class GoogleCloudApigeeV1Instance extends \Google\Collection
{
  protected $collection_key = 'consumerAcceptList';
  protected $accessLoggingConfigType = GoogleCloudApigeeV1AccessLoggingConfig::class;
  protected $accessLoggingConfigDataType = '';
  /**
   * @var string[]
   */
  public $consumerAcceptList;
  /**
   * @var string
   */
  public $createdAt;
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $diskEncryptionKeyName;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $host;
  /**
   * @var string
   */
  public $ipRange;
  /**
   * @var bool
   */
  public $isVersionLocked;
  /**
   * @var string
   */
  public $lastModifiedAt;
  /**
   * @var string
   */
  public $location;
  protected $maintenanceUpdatePolicyType = GoogleCloudApigeeV1MaintenanceUpdatePolicy::class;
  protected $maintenanceUpdatePolicyDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $peeringCidrRange;
  /**
   * @var string
   */
  public $port;
  /**
   * @var string
   */
  public $runtimeVersion;
  protected $scheduledMaintenanceType = GoogleCloudApigeeV1ScheduledMaintenance::class;
  protected $scheduledMaintenanceDataType = '';
  /**
   * @var string
   */
  public $serviceAttachment;
  /**
   * @var string
   */
  public $state;

  /**
   * @param GoogleCloudApigeeV1AccessLoggingConfig
   */
  public function setAccessLoggingConfig(GoogleCloudApigeeV1AccessLoggingConfig $accessLoggingConfig)
  {
    $this->accessLoggingConfig = $accessLoggingConfig;
  }
  /**
   * @return GoogleCloudApigeeV1AccessLoggingConfig
   */
  public function getAccessLoggingConfig()
  {
    return $this->accessLoggingConfig;
  }
  /**
   * @param string[]
   */
  public function setConsumerAcceptList($consumerAcceptList)
  {
    $this->consumerAcceptList = $consumerAcceptList;
  }
  /**
   * @return string[]
   */
  public function getConsumerAcceptList()
  {
    return $this->consumerAcceptList;
  }
  /**
   * @param string
   */
  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }
  /**
   * @return string
   */
  public function getCreatedAt()
  {
    return $this->createdAt;
  }
  /**
   * @param string
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param string
   */
  public function setDiskEncryptionKeyName($diskEncryptionKeyName)
  {
    $this->diskEncryptionKeyName = $diskEncryptionKeyName;
  }
  /**
   * @return string
   */
  public function getDiskEncryptionKeyName()
  {
    return $this->diskEncryptionKeyName;
  }
  /**
   * @param string
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
   * @param string
   */
  public function setHost($host)
  {
    $this->host = $host;
  }
  /**
   * @return string
   */
  public function getHost()
  {
    return $this->host;
  }
  /**
   * @param string
   */
  public function setIpRange($ipRange)
  {
    $this->ipRange = $ipRange;
  }
  /**
   * @return string
   */
  public function getIpRange()
  {
    return $this->ipRange;
  }
  /**
   * @param bool
   */
  public function setIsVersionLocked($isVersionLocked)
  {
    $this->isVersionLocked = $isVersionLocked;
  }
  /**
   * @return bool
   */
  public function getIsVersionLocked()
  {
    return $this->isVersionLocked;
  }
  /**
   * @param string
   */
  public function setLastModifiedAt($lastModifiedAt)
  {
    $this->lastModifiedAt = $lastModifiedAt;
  }
  /**
   * @return string
   */
  public function getLastModifiedAt()
  {
    return $this->lastModifiedAt;
  }
  /**
   * @param string
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * @param GoogleCloudApigeeV1MaintenanceUpdatePolicy
   */
  public function setMaintenanceUpdatePolicy(GoogleCloudApigeeV1MaintenanceUpdatePolicy $maintenanceUpdatePolicy)
  {
    $this->maintenanceUpdatePolicy = $maintenanceUpdatePolicy;
  }
  /**
   * @return GoogleCloudApigeeV1MaintenanceUpdatePolicy
   */
  public function getMaintenanceUpdatePolicy()
  {
    return $this->maintenanceUpdatePolicy;
  }
  /**
   * @param string
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
   * @param string
   */
  public function setPeeringCidrRange($peeringCidrRange)
  {
    $this->peeringCidrRange = $peeringCidrRange;
  }
  /**
   * @return string
   */
  public function getPeeringCidrRange()
  {
    return $this->peeringCidrRange;
  }
  /**
   * @param string
   */
  public function setPort($port)
  {
    $this->port = $port;
  }
  /**
   * @return string
   */
  public function getPort()
  {
    return $this->port;
  }
  /**
   * @param string
   */
  public function setRuntimeVersion($runtimeVersion)
  {
    $this->runtimeVersion = $runtimeVersion;
  }
  /**
   * @return string
   */
  public function getRuntimeVersion()
  {
    return $this->runtimeVersion;
  }
  /**
   * @param GoogleCloudApigeeV1ScheduledMaintenance
   */
  public function setScheduledMaintenance(GoogleCloudApigeeV1ScheduledMaintenance $scheduledMaintenance)
  {
    $this->scheduledMaintenance = $scheduledMaintenance;
  }
  /**
   * @return GoogleCloudApigeeV1ScheduledMaintenance
   */
  public function getScheduledMaintenance()
  {
    return $this->scheduledMaintenance;
  }
  /**
   * @param string
   */
  public function setServiceAttachment($serviceAttachment)
  {
    $this->serviceAttachment = $serviceAttachment;
  }
  /**
   * @return string
   */
  public function getServiceAttachment()
  {
    return $this->serviceAttachment;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApigeeV1Instance::class, 'Google_Service_Apigee_GoogleCloudApigeeV1Instance');
