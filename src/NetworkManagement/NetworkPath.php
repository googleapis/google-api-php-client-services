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

class NetworkPath extends \Google\Collection
{
  /**
   * The default value. This value is used if the status is omitted.
   */
  public const MONITORING_STATUS_MONITORING_STATUS_UNSPECIFIED = 'MONITORING_STATUS_UNSPECIFIED';
  /**
   * Monitoring is enabled.
   */
  public const MONITORING_STATUS_MONITORING = 'MONITORING';
  /**
   * Policy is mismatched.
   */
  public const MONITORING_STATUS_POLICY_MISMATCH = 'POLICY_MISMATCH';
  /**
   * Monitoring point is offline.
   */
  public const MONITORING_STATUS_MONITORING_POINT_OFFLINE = 'MONITORING_POINT_OFFLINE';
  /**
   * Monitoring is disabled.
   */
  public const MONITORING_STATUS_DISABLED = 'DISABLED';
  /**
   * The default value. This value is used if the network protocol is omitted.
   */
  public const NETWORK_PROTOCOL_NETWORK_PROTOCOL_UNSPECIFIED = 'NETWORK_PROTOCOL_UNSPECIFIED';
  /**
   * ICMP.
   */
  public const NETWORK_PROTOCOL_ICMP = 'ICMP';
  /**
   * UDP.
   */
  public const NETWORK_PROTOCOL_UDP = 'UDP';
  /**
   * TCP.
   */
  public const NETWORK_PROTOCOL_TCP = 'TCP';
  protected $collection_key = 'providerTags';
  /**
   * Output only. The time the NetworkPath was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. IP address or hostname of the network path destination.
   *
   * @var string
   */
  public $destination;
  protected $destinationGeoLocationType = GeoLocation::class;
  protected $destinationGeoLocationDataType = '';
  /**
   * Output only. Provider's UUID of the destination MonitoringPoint. This id
   * may not point to a resource in the Google Cloud.
   *
   * @var string
   */
  public $destinationMonitoringPointId;
  /**
   * Output only. The display name of the network path.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. Indicates if the network path is dual ended. When true, the
   * network path is measured both: from both source to destination, and from
   * destination to source. When false, the network path is measured from the
   * source through the destination back to the source (round trip measurement).
   *
   * @var bool
   */
  public $dualEnded;
  /**
   * Output only. Is monitoring enabled for the network path.
   *
   * @var bool
   */
  public $monitoringEnabled;
  /**
   * Output only. Display name of the monitoring policy.
   *
   * @var string
   */
  public $monitoringPolicyDisplayName;
  /**
   * Output only. ID of monitoring policy.
   *
   * @var string
   */
  public $monitoringPolicyId;
  /**
   * Output only. The monitoring status of the network path.
   *
   * @var string
   */
  public $monitoringStatus;
  /**
   * Identifier. Name of the resource. Format: `projects/{project}/locations/{lo
   * cation}/networkMonitoringProviders/{network_monitoring_provider}/networkPat
   * hs/{network_path}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The network protocol of the network path.
   *
   * @var string
   */
  public $networkProtocol;
  protected $providerTagsType = ProviderTag::class;
  protected $providerTagsDataType = 'array';
  /**
   * Output only. Link to provider's UI; link shows the NetworkPath.
   *
   * @var string
   */
  public $providerUiUri;
  /**
   * Output only. Provider's UUID of the source MonitoringPoint. This id may not
   * point to a resource in the Google Cloud.
   *
   * @var string
   */
  public $sourceMonitoringPointId;
  /**
   * Output only. The time the NetworkPath was updated.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The time the NetworkPath was created.
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
   * Output only. IP address or hostname of the network path destination.
   *
   * @param string $destination
   */
  public function setDestination($destination)
  {
    $this->destination = $destination;
  }
  /**
   * @return string
   */
  public function getDestination()
  {
    return $this->destination;
  }
  /**
   * Output only. Geographical location of the destination MonitoringPoint.
   *
   * @param GeoLocation $destinationGeoLocation
   */
  public function setDestinationGeoLocation(GeoLocation $destinationGeoLocation)
  {
    $this->destinationGeoLocation = $destinationGeoLocation;
  }
  /**
   * @return GeoLocation
   */
  public function getDestinationGeoLocation()
  {
    return $this->destinationGeoLocation;
  }
  /**
   * Output only. Provider's UUID of the destination MonitoringPoint. This id
   * may not point to a resource in the Google Cloud.
   *
   * @param string $destinationMonitoringPointId
   */
  public function setDestinationMonitoringPointId($destinationMonitoringPointId)
  {
    $this->destinationMonitoringPointId = $destinationMonitoringPointId;
  }
  /**
   * @return string
   */
  public function getDestinationMonitoringPointId()
  {
    return $this->destinationMonitoringPointId;
  }
  /**
   * Output only. The display name of the network path.
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
   * Output only. Indicates if the network path is dual ended. When true, the
   * network path is measured both: from both source to destination, and from
   * destination to source. When false, the network path is measured from the
   * source through the destination back to the source (round trip measurement).
   *
   * @param bool $dualEnded
   */
  public function setDualEnded($dualEnded)
  {
    $this->dualEnded = $dualEnded;
  }
  /**
   * @return bool
   */
  public function getDualEnded()
  {
    return $this->dualEnded;
  }
  /**
   * Output only. Is monitoring enabled for the network path.
   *
   * @param bool $monitoringEnabled
   */
  public function setMonitoringEnabled($monitoringEnabled)
  {
    $this->monitoringEnabled = $monitoringEnabled;
  }
  /**
   * @return bool
   */
  public function getMonitoringEnabled()
  {
    return $this->monitoringEnabled;
  }
  /**
   * Output only. Display name of the monitoring policy.
   *
   * @param string $monitoringPolicyDisplayName
   */
  public function setMonitoringPolicyDisplayName($monitoringPolicyDisplayName)
  {
    $this->monitoringPolicyDisplayName = $monitoringPolicyDisplayName;
  }
  /**
   * @return string
   */
  public function getMonitoringPolicyDisplayName()
  {
    return $this->monitoringPolicyDisplayName;
  }
  /**
   * Output only. ID of monitoring policy.
   *
   * @param string $monitoringPolicyId
   */
  public function setMonitoringPolicyId($monitoringPolicyId)
  {
    $this->monitoringPolicyId = $monitoringPolicyId;
  }
  /**
   * @return string
   */
  public function getMonitoringPolicyId()
  {
    return $this->monitoringPolicyId;
  }
  /**
   * Output only. The monitoring status of the network path.
   *
   * Accepted values: MONITORING_STATUS_UNSPECIFIED, MONITORING,
   * POLICY_MISMATCH, MONITORING_POINT_OFFLINE, DISABLED
   *
   * @param self::MONITORING_STATUS_* $monitoringStatus
   */
  public function setMonitoringStatus($monitoringStatus)
  {
    $this->monitoringStatus = $monitoringStatus;
  }
  /**
   * @return self::MONITORING_STATUS_*
   */
  public function getMonitoringStatus()
  {
    return $this->monitoringStatus;
  }
  /**
   * Identifier. Name of the resource. Format: `projects/{project}/locations/{lo
   * cation}/networkMonitoringProviders/{network_monitoring_provider}/networkPat
   * hs/{network_path}`
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
   * Output only. The network protocol of the network path.
   *
   * Accepted values: NETWORK_PROTOCOL_UNSPECIFIED, ICMP, UDP, TCP
   *
   * @param self::NETWORK_PROTOCOL_* $networkProtocol
   */
  public function setNetworkProtocol($networkProtocol)
  {
    $this->networkProtocol = $networkProtocol;
  }
  /**
   * @return self::NETWORK_PROTOCOL_*
   */
  public function getNetworkProtocol()
  {
    return $this->networkProtocol;
  }
  /**
   * Output only. The provider tags of the network path.
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
   * Output only. Link to provider's UI; link shows the NetworkPath.
   *
   * @param string $providerUiUri
   */
  public function setProviderUiUri($providerUiUri)
  {
    $this->providerUiUri = $providerUiUri;
  }
  /**
   * @return string
   */
  public function getProviderUiUri()
  {
    return $this->providerUiUri;
  }
  /**
   * Output only. Provider's UUID of the source MonitoringPoint. This id may not
   * point to a resource in the Google Cloud.
   *
   * @param string $sourceMonitoringPointId
   */
  public function setSourceMonitoringPointId($sourceMonitoringPointId)
  {
    $this->sourceMonitoringPointId = $sourceMonitoringPointId;
  }
  /**
   * @return string
   */
  public function getSourceMonitoringPointId()
  {
    return $this->sourceMonitoringPointId;
  }
  /**
   * Output only. The time the NetworkPath was updated.
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
class_alias(NetworkPath::class, 'Google_Service_NetworkManagement_NetworkPath');
