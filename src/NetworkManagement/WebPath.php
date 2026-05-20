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

class WebPath extends \Google\Collection
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
   * The default value. This value is used if the status is omitted.
   */
  public const WORKFLOW_TYPE_WORKFLOW_TYPE_UNSPECIFIED = 'WORKFLOW_TYPE_UNSPECIFIED';
  /**
   * Browser.
   */
  public const WORKFLOW_TYPE_BROWSER = 'BROWSER';
  /**
   * HTTP.
   */
  public const WORKFLOW_TYPE_HTTP = 'HTTP';
  protected $collection_key = 'providerTags';
  /**
   * Output only. The time the WebPath was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. Web monitoring target.
   *
   * @var string
   */
  public $destination;
  protected $destinationGeoLocationType = GeoLocation::class;
  protected $destinationGeoLocationDataType = '';
  /**
   * Output only. Display name of the WebPath.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. Monitoring interval.
   *
   * @var string
   */
  public $interval;
  /**
   * Output only. Is monitoring enabled for the WebPath.
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
   * Output only. ID of the monitoring policy.
   *
   * @var string
   */
  public $monitoringPolicyId;
  /**
   * Output only. The monitoring status of the WebPath.
   *
   * @var string
   */
  public $monitoringStatus;
  /**
   * Identifier. Name of the resource. Format: `projects/{project}/locations/{lo
   * cation}/networkMonitoringProviders/{network_monitoring_provider}/webPaths/{
   * web_path}`
   *
   * @var string
   */
  public $name;
  protected $providerTagsType = ProviderTag::class;
  protected $providerTagsDataType = 'array';
  /**
   * Output only. Link to provider's UI; link shows the WebPath.
   *
   * @var string
   */
  public $providerUiUri;
  /**
   * Output only. Provider's UUID of the related NetworkPath.
   *
   * @var string
   */
  public $relatedNetworkPathId;
  /**
   * Output only. ID of the source MonitoringPoint.
   *
   * @var string
   */
  public $sourceMonitoringPointId;
  /**
   * Output only. The time the WebPath was updated.
   *
   * @var string
   */
  public $updateTime;
  /**
   * Output only. The workflow type of the WebPath.
   *
   * @var string
   */
  public $workflowType;

  /**
   * Output only. The time the WebPath was created.
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
   * Output only. Web monitoring target.
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
   * Output only. Geographical location of the destination.
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
   * Output only. Display name of the WebPath.
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
   * Output only. Monitoring interval.
   *
   * @param string $interval
   */
  public function setInterval($interval)
  {
    $this->interval = $interval;
  }
  /**
   * @return string
   */
  public function getInterval()
  {
    return $this->interval;
  }
  /**
   * Output only. Is monitoring enabled for the WebPath.
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
   * Output only. ID of the monitoring policy.
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
   * Output only. The monitoring status of the WebPath.
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
   * cation}/networkMonitoringProviders/{network_monitoring_provider}/webPaths/{
   * web_path}`
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
   * Output only. The provider tags of the web path.
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
   * Output only. Link to provider's UI; link shows the WebPath.
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
   * Output only. Provider's UUID of the related NetworkPath.
   *
   * @param string $relatedNetworkPathId
   */
  public function setRelatedNetworkPathId($relatedNetworkPathId)
  {
    $this->relatedNetworkPathId = $relatedNetworkPathId;
  }
  /**
   * @return string
   */
  public function getRelatedNetworkPathId()
  {
    return $this->relatedNetworkPathId;
  }
  /**
   * Output only. ID of the source MonitoringPoint.
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
   * Output only. The time the WebPath was updated.
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
   * Output only. The workflow type of the WebPath.
   *
   * Accepted values: WORKFLOW_TYPE_UNSPECIFIED, BROWSER, HTTP
   *
   * @param self::WORKFLOW_TYPE_* $workflowType
   */
  public function setWorkflowType($workflowType)
  {
    $this->workflowType = $workflowType;
  }
  /**
   * @return self::WORKFLOW_TYPE_*
   */
  public function getWorkflowType()
  {
    return $this->workflowType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(WebPath::class, 'Google_Service_NetworkManagement_WebPath');
