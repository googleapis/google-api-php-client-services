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

class MonitoringPoint extends \Google\Collection
{
  /**
   * The default value. This value is used if the status is omitted.
   */
  public const CONNECTION_STATUS_CONNECTION_STATUS_UNSPECIFIED = 'CONNECTION_STATUS_UNSPECIFIED';
  /**
   * MonitoringPoint is online.
   */
  public const CONNECTION_STATUS_ONLINE = 'ONLINE';
  /**
   * MonitoringPoint is offline.
   */
  public const CONNECTION_STATUS_OFFLINE = 'OFFLINE';
  /**
   * The default value. This value is used if the type is omitted.
   */
  public const DEPLOYMENT_TYPE_DEPLOYMENT_TYPE_UNSPECIFIED = 'DEPLOYMENT_TYPE_UNSPECIFIED';
  /**
   * The MonitoringPoint is deployed as a Docker container.
   */
  public const DEPLOYMENT_TYPE_DOCKER = 'DOCKER';
  /**
   * The MonitoringPoint is deployed as a Podman container.
   */
  public const DEPLOYMENT_TYPE_PODMAN = 'PODMAN';
  /**
   * The MonitoringPoint is deployed as a Helm chart.
   */
  public const DEPLOYMENT_TYPE_HELM = 'HELM';
  /**
   * The default value. This value is used if the upgrade type is omitted.
   */
  public const UPGRADE_TYPE_UPGRADE_TYPE_UNSPECIFIED = 'UPGRADE_TYPE_UNSPECIFIED';
  /**
   * Upgrades are performed manually.
   */
  public const UPGRADE_TYPE_MANUAL = 'MANUAL';
  /**
   * Upgrades are managed.
   */
  public const UPGRADE_TYPE_MANAGED = 'MANAGED';
  /**
   * Upgrade is scheduled.
   */
  public const UPGRADE_TYPE_SCHEDULED = 'SCHEDULED';
  /**
   * Upgrades are performed automatically.
   */
  public const UPGRADE_TYPE_AUTO = 'AUTO';
  /**
   * Upgrades are performed externally.
   */
  public const UPGRADE_TYPE_EXTERNAL = 'EXTERNAL';
  protected $collection_key = 'providerTags';
  /**
   * Output only. Indicates if automaitic geographic location is enabled for the
   * MonitoringPoint.
   *
   * @var bool
   */
  public $autoGeoLocationEnabled;
  /**
   * Output only. Connection status of the MonitoringPoint.
   *
   * @var string
   */
  public $connectionStatus;
  /**
   * Output only. The time the MonitoringPoint was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The deployment type of the MonitoringPoint.
   *
   * @var string
   */
  public $deploymentType;
  /**
   * Output only. Display name of the MonitoringPoint.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The codes of errors detected in the MonitoringPoint.
   *
   * @var string[]
   */
  public $errors;
  protected $geoLocationType = GeoLocation::class;
  protected $geoLocationDataType = '';
  /**
   * Output only. The GUID of the MonitoringPoint.
   *
   * @var string
   */
  public $guid;
  protected $hostType = Host::class;
  protected $hostDataType = '';
  /**
   * Output only. The hostname of the MonitoringPoint.
   *
   * @var string
   */
  public $hostname;
  /**
   * Identifier. Name of the resource. Format: `projects/{project}/locations/{lo
   * cation}/networkMonitoringProviders/{network_monitoring_provider}/monitoring
   * Points/{monitoring_point}`
   *
   * @var string
   */
  public $name;
  protected $networkInterfacesType = NetworkInterface::class;
  protected $networkInterfacesDataType = 'array';
  /**
   * Output only. IP address visible when MonitoringPoint connects to the
   * provider.
   *
   * @var string
   */
  public $originatingIp;
  protected $providerTagsType = ProviderTag::class;
  protected $providerTagsDataType = 'array';
  /**
   * Output only. Deployment type of the MonitoringPoint.
   *
   * @var string
   */
  public $type;
  /**
   * Output only. The time the MonitoringPoint was updated.
   *
   * @var string
   */
  public $updateTime;
  /**
   * Output only. Indicates if an upgrade is available for the MonitoringPoint.
   *
   * @var bool
   */
  public $upgradeAvailable;
  /**
   * Output only. The type of upgrade available for the MonitoringPoint.
   *
   * @var string
   */
  public $upgradeType;
  /**
   * Output only. Version of the software running on the MonitoringPoint.
   *
   * @var string
   */
  public $version;

  /**
   * Output only. Indicates if automaitic geographic location is enabled for the
   * MonitoringPoint.
   *
   * @param bool $autoGeoLocationEnabled
   */
  public function setAutoGeoLocationEnabled($autoGeoLocationEnabled)
  {
    $this->autoGeoLocationEnabled = $autoGeoLocationEnabled;
  }
  /**
   * @return bool
   */
  public function getAutoGeoLocationEnabled()
  {
    return $this->autoGeoLocationEnabled;
  }
  /**
   * Output only. Connection status of the MonitoringPoint.
   *
   * Accepted values: CONNECTION_STATUS_UNSPECIFIED, ONLINE, OFFLINE
   *
   * @param self::CONNECTION_STATUS_* $connectionStatus
   */
  public function setConnectionStatus($connectionStatus)
  {
    $this->connectionStatus = $connectionStatus;
  }
  /**
   * @return self::CONNECTION_STATUS_*
   */
  public function getConnectionStatus()
  {
    return $this->connectionStatus;
  }
  /**
   * Output only. The time the MonitoringPoint was created.
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
   * Output only. The deployment type of the MonitoringPoint.
   *
   * Accepted values: DEPLOYMENT_TYPE_UNSPECIFIED, DOCKER, PODMAN, HELM
   *
   * @param self::DEPLOYMENT_TYPE_* $deploymentType
   */
  public function setDeploymentType($deploymentType)
  {
    $this->deploymentType = $deploymentType;
  }
  /**
   * @return self::DEPLOYMENT_TYPE_*
   */
  public function getDeploymentType()
  {
    return $this->deploymentType;
  }
  /**
   * Output only. Display name of the MonitoringPoint.
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
   * Output only. The codes of errors detected in the MonitoringPoint.
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
   * Output only. The geographical location of the MonitoringPoint.
   *
   * @param GeoLocation $geoLocation
   */
  public function setGeoLocation(GeoLocation $geoLocation)
  {
    $this->geoLocation = $geoLocation;
  }
  /**
   * @return GeoLocation
   */
  public function getGeoLocation()
  {
    return $this->geoLocation;
  }
  /**
   * Output only. The GUID of the MonitoringPoint.
   *
   * @param string $guid
   */
  public function setGuid($guid)
  {
    $this->guid = $guid;
  }
  /**
   * @return string
   */
  public function getGuid()
  {
    return $this->guid;
  }
  /**
   * Output only. The host information of the MonitoringPoint.
   *
   * @param Host $host
   */
  public function setHost(Host $host)
  {
    $this->host = $host;
  }
  /**
   * @return Host
   */
  public function getHost()
  {
    return $this->host;
  }
  /**
   * Output only. The hostname of the MonitoringPoint.
   *
   * @param string $hostname
   */
  public function setHostname($hostname)
  {
    $this->hostname = $hostname;
  }
  /**
   * @return string
   */
  public function getHostname()
  {
    return $this->hostname;
  }
  /**
   * Identifier. Name of the resource. Format: `projects/{project}/locations/{lo
   * cation}/networkMonitoringProviders/{network_monitoring_provider}/monitoring
   * Points/{monitoring_point}`
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
   * Output only. The network interfaces of the MonitoringPoint.
   *
   * @param NetworkInterface[] $networkInterfaces
   */
  public function setNetworkInterfaces($networkInterfaces)
  {
    $this->networkInterfaces = $networkInterfaces;
  }
  /**
   * @return NetworkInterface[]
   */
  public function getNetworkInterfaces()
  {
    return $this->networkInterfaces;
  }
  /**
   * Output only. IP address visible when MonitoringPoint connects to the
   * provider.
   *
   * @param string $originatingIp
   */
  public function setOriginatingIp($originatingIp)
  {
    $this->originatingIp = $originatingIp;
  }
  /**
   * @return string
   */
  public function getOriginatingIp()
  {
    return $this->originatingIp;
  }
  /**
   * Output only. The provider tags of the MonitoringPoint.
   *
   * @param ProviderTag[] $providerTags
   */
  public function setProviderTags($providerTags)
  {
    $this->providerTags = $providerTags;
  }
  /**
   * @return ProviderTag[]
   */
  public function getProviderTags()
  {
    return $this->providerTags;
  }
  /**
   * Output only. Deployment type of the MonitoringPoint.
   *
   * @param string $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Output only. The time the MonitoringPoint was updated.
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
  /**
   * Output only. Indicates if an upgrade is available for the MonitoringPoint.
   *
   * @param bool $upgradeAvailable
   */
  public function setUpgradeAvailable($upgradeAvailable)
  {
    $this->upgradeAvailable = $upgradeAvailable;
  }
  /**
   * @return bool
   */
  public function getUpgradeAvailable()
  {
    return $this->upgradeAvailable;
  }
  /**
   * Output only. The type of upgrade available for the MonitoringPoint.
   *
   * Accepted values: UPGRADE_TYPE_UNSPECIFIED, MANUAL, MANAGED, SCHEDULED,
   * AUTO, EXTERNAL
   *
   * @param self::UPGRADE_TYPE_* $upgradeType
   */
  public function setUpgradeType($upgradeType)
  {
    $this->upgradeType = $upgradeType;
  }
  /**
   * @return self::UPGRADE_TYPE_*
   */
  public function getUpgradeType()
  {
    return $this->upgradeType;
  }
  /**
   * Output only. Version of the software running on the MonitoringPoint.
   *
   * @param string $version
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MonitoringPoint::class, 'Google_Service_NetworkManagement_MonitoringPoint');
