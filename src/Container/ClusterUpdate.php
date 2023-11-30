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

namespace Google\Service\Container;

class ClusterUpdate extends \Google\Collection
{
  protected $collection_key = 'desiredLocations';
  /**
   * @var AdditionalPodRangesConfig
   */
  public $additionalPodRangesConfig;
  protected $additionalPodRangesConfigType = AdditionalPodRangesConfig::class;
  protected $additionalPodRangesConfigDataType = '';
  /**
   * @var AddonsConfig
   */
  public $desiredAddonsConfig;
  protected $desiredAddonsConfigType = AddonsConfig::class;
  protected $desiredAddonsConfigDataType = '';
  /**
   * @var AuthenticatorGroupsConfig
   */
  public $desiredAuthenticatorGroupsConfig;
  protected $desiredAuthenticatorGroupsConfigType = AuthenticatorGroupsConfig::class;
  protected $desiredAuthenticatorGroupsConfigDataType = '';
  /**
   * @var WorkloadPolicyConfig
   */
  public $desiredAutopilotWorkloadPolicyConfig;
  protected $desiredAutopilotWorkloadPolicyConfigType = WorkloadPolicyConfig::class;
  protected $desiredAutopilotWorkloadPolicyConfigDataType = '';
  /**
   * @var BinaryAuthorization
   */
  public $desiredBinaryAuthorization;
  protected $desiredBinaryAuthorizationType = BinaryAuthorization::class;
  protected $desiredBinaryAuthorizationDataType = '';
  /**
   * @var ClusterAutoscaling
   */
  public $desiredClusterAutoscaling;
  protected $desiredClusterAutoscalingType = ClusterAutoscaling::class;
  protected $desiredClusterAutoscalingDataType = '';
  /**
   * @var CostManagementConfig
   */
  public $desiredCostManagementConfig;
  protected $desiredCostManagementConfigType = CostManagementConfig::class;
  protected $desiredCostManagementConfigDataType = '';
  /**
   * @var DatabaseEncryption
   */
  public $desiredDatabaseEncryption;
  protected $desiredDatabaseEncryptionType = DatabaseEncryption::class;
  protected $desiredDatabaseEncryptionDataType = '';
  /**
   * @var string
   */
  public $desiredDatapathProvider;
  /**
   * @var DefaultSnatStatus
   */
  public $desiredDefaultSnatStatus;
  protected $desiredDefaultSnatStatusType = DefaultSnatStatus::class;
  protected $desiredDefaultSnatStatusDataType = '';
  /**
   * @var DNSConfig
   */
  public $desiredDnsConfig;
  protected $desiredDnsConfigType = DNSConfig::class;
  protected $desiredDnsConfigDataType = '';
  /**
   * @var bool
   */
  public $desiredEnableFqdnNetworkPolicy;
  /**
   * @var bool
   */
  public $desiredEnablePrivateEndpoint;
  /**
   * @var Fleet
   */
  public $desiredFleet;
  protected $desiredFleetType = Fleet::class;
  protected $desiredFleetDataType = '';
  /**
   * @var GatewayAPIConfig
   */
  public $desiredGatewayApiConfig;
  protected $desiredGatewayApiConfigType = GatewayAPIConfig::class;
  protected $desiredGatewayApiConfigDataType = '';
  /**
   * @var GcfsConfig
   */
  public $desiredGcfsConfig;
  protected $desiredGcfsConfigType = GcfsConfig::class;
  protected $desiredGcfsConfigDataType = '';
  /**
   * @var IdentityServiceConfig
   */
  public $desiredIdentityServiceConfig;
  protected $desiredIdentityServiceConfigType = IdentityServiceConfig::class;
  protected $desiredIdentityServiceConfigDataType = '';
  /**
   * @var string
   */
  public $desiredImageType;
  /**
   * @var IntraNodeVisibilityConfig
   */
  public $desiredIntraNodeVisibilityConfig;
  protected $desiredIntraNodeVisibilityConfigType = IntraNodeVisibilityConfig::class;
  protected $desiredIntraNodeVisibilityConfigDataType = '';
  /**
   * @var K8sBetaAPIConfig
   */
  public $desiredK8sBetaApis;
  protected $desiredK8sBetaApisType = K8sBetaAPIConfig::class;
  protected $desiredK8sBetaApisDataType = '';
  /**
   * @var ILBSubsettingConfig
   */
  public $desiredL4ilbSubsettingConfig;
  protected $desiredL4ilbSubsettingConfigType = ILBSubsettingConfig::class;
  protected $desiredL4ilbSubsettingConfigDataType = '';
  /**
   * @var string[]
   */
  public $desiredLocations;
  /**
   * @var LoggingConfig
   */
  public $desiredLoggingConfig;
  protected $desiredLoggingConfigType = LoggingConfig::class;
  protected $desiredLoggingConfigDataType = '';
  /**
   * @var string
   */
  public $desiredLoggingService;
  /**
   * @var MasterAuthorizedNetworksConfig
   */
  public $desiredMasterAuthorizedNetworksConfig;
  protected $desiredMasterAuthorizedNetworksConfigType = MasterAuthorizedNetworksConfig::class;
  protected $desiredMasterAuthorizedNetworksConfigDataType = '';
  /**
   * @var string
   */
  public $desiredMasterVersion;
  /**
   * @var MeshCertificates
   */
  public $desiredMeshCertificates;
  protected $desiredMeshCertificatesType = MeshCertificates::class;
  protected $desiredMeshCertificatesDataType = '';
  /**
   * @var MonitoringConfig
   */
  public $desiredMonitoringConfig;
  protected $desiredMonitoringConfigType = MonitoringConfig::class;
  protected $desiredMonitoringConfigDataType = '';
  /**
   * @var string
   */
  public $desiredMonitoringService;
  /**
   * @var ClusterNetworkPerformanceConfig
   */
  public $desiredNetworkPerformanceConfig;
  protected $desiredNetworkPerformanceConfigType = ClusterNetworkPerformanceConfig::class;
  protected $desiredNetworkPerformanceConfigDataType = '';
  /**
   * @var NetworkTags
   */
  public $desiredNodePoolAutoConfigNetworkTags;
  protected $desiredNodePoolAutoConfigNetworkTagsType = NetworkTags::class;
  protected $desiredNodePoolAutoConfigNetworkTagsDataType = '';
  /**
   * @var ResourceManagerTags
   */
  public $desiredNodePoolAutoConfigResourceManagerTags;
  protected $desiredNodePoolAutoConfigResourceManagerTagsType = ResourceManagerTags::class;
  protected $desiredNodePoolAutoConfigResourceManagerTagsDataType = '';
  /**
   * @var NodePoolAutoscaling
   */
  public $desiredNodePoolAutoscaling;
  protected $desiredNodePoolAutoscalingType = NodePoolAutoscaling::class;
  protected $desiredNodePoolAutoscalingDataType = '';
  /**
   * @var string
   */
  public $desiredNodePoolId;
  /**
   * @var NodePoolLoggingConfig
   */
  public $desiredNodePoolLoggingConfig;
  protected $desiredNodePoolLoggingConfigType = NodePoolLoggingConfig::class;
  protected $desiredNodePoolLoggingConfigDataType = '';
  /**
   * @var string
   */
  public $desiredNodeVersion;
  /**
   * @var NotificationConfig
   */
  public $desiredNotificationConfig;
  protected $desiredNotificationConfigType = NotificationConfig::class;
  protected $desiredNotificationConfigDataType = '';
  /**
   * @var ParentProductConfig
   */
  public $desiredParentProductConfig;
  protected $desiredParentProductConfigType = ParentProductConfig::class;
  protected $desiredParentProductConfigDataType = '';
  /**
   * @var PrivateClusterConfig
   */
  public $desiredPrivateClusterConfig;
  protected $desiredPrivateClusterConfigType = PrivateClusterConfig::class;
  protected $desiredPrivateClusterConfigDataType = '';
  /**
   * @var string
   */
  public $desiredPrivateIpv6GoogleAccess;
  /**
   * @var ReleaseChannel
   */
  public $desiredReleaseChannel;
  protected $desiredReleaseChannelType = ReleaseChannel::class;
  protected $desiredReleaseChannelDataType = '';
  /**
   * @var ResourceUsageExportConfig
   */
  public $desiredResourceUsageExportConfig;
  protected $desiredResourceUsageExportConfigType = ResourceUsageExportConfig::class;
  protected $desiredResourceUsageExportConfigDataType = '';
  /**
   * @var SecurityPostureConfig
   */
  public $desiredSecurityPostureConfig;
  protected $desiredSecurityPostureConfigType = SecurityPostureConfig::class;
  protected $desiredSecurityPostureConfigDataType = '';
  /**
   * @var ServiceExternalIPsConfig
   */
  public $desiredServiceExternalIpsConfig;
  protected $desiredServiceExternalIpsConfigType = ServiceExternalIPsConfig::class;
  protected $desiredServiceExternalIpsConfigDataType = '';
  /**
   * @var ShieldedNodes
   */
  public $desiredShieldedNodes;
  protected $desiredShieldedNodesType = ShieldedNodes::class;
  protected $desiredShieldedNodesDataType = '';
  /**
   * @var string
   */
  public $desiredStackType;
  /**
   * @var VerticalPodAutoscaling
   */
  public $desiredVerticalPodAutoscaling;
  protected $desiredVerticalPodAutoscalingType = VerticalPodAutoscaling::class;
  protected $desiredVerticalPodAutoscalingDataType = '';
  /**
   * @var WorkloadIdentityConfig
   */
  public $desiredWorkloadIdentityConfig;
  protected $desiredWorkloadIdentityConfigType = WorkloadIdentityConfig::class;
  protected $desiredWorkloadIdentityConfigDataType = '';
  /**
   * @var K8sBetaAPIConfig
   */
  public $enableK8sBetaApis;
  protected $enableK8sBetaApisType = K8sBetaAPIConfig::class;
  protected $enableK8sBetaApisDataType = '';
  /**
   * @var string
   */
  public $etag;
  /**
   * @var AdditionalPodRangesConfig
   */
  public $removedAdditionalPodRangesConfig;
  protected $removedAdditionalPodRangesConfigType = AdditionalPodRangesConfig::class;
  protected $removedAdditionalPodRangesConfigDataType = '';

  /**
   * @param AdditionalPodRangesConfig
   */
  public function setAdditionalPodRangesConfig(AdditionalPodRangesConfig $additionalPodRangesConfig)
  {
    $this->additionalPodRangesConfig = $additionalPodRangesConfig;
  }
  /**
   * @return AdditionalPodRangesConfig
   */
  public function getAdditionalPodRangesConfig()
  {
    return $this->additionalPodRangesConfig;
  }
  /**
   * @param AddonsConfig
   */
  public function setDesiredAddonsConfig(AddonsConfig $desiredAddonsConfig)
  {
    $this->desiredAddonsConfig = $desiredAddonsConfig;
  }
  /**
   * @return AddonsConfig
   */
  public function getDesiredAddonsConfig()
  {
    return $this->desiredAddonsConfig;
  }
  /**
   * @param AuthenticatorGroupsConfig
   */
  public function setDesiredAuthenticatorGroupsConfig(AuthenticatorGroupsConfig $desiredAuthenticatorGroupsConfig)
  {
    $this->desiredAuthenticatorGroupsConfig = $desiredAuthenticatorGroupsConfig;
  }
  /**
   * @return AuthenticatorGroupsConfig
   */
  public function getDesiredAuthenticatorGroupsConfig()
  {
    return $this->desiredAuthenticatorGroupsConfig;
  }
  /**
   * @param WorkloadPolicyConfig
   */
  public function setDesiredAutopilotWorkloadPolicyConfig(WorkloadPolicyConfig $desiredAutopilotWorkloadPolicyConfig)
  {
    $this->desiredAutopilotWorkloadPolicyConfig = $desiredAutopilotWorkloadPolicyConfig;
  }
  /**
   * @return WorkloadPolicyConfig
   */
  public function getDesiredAutopilotWorkloadPolicyConfig()
  {
    return $this->desiredAutopilotWorkloadPolicyConfig;
  }
  /**
   * @param BinaryAuthorization
   */
  public function setDesiredBinaryAuthorization(BinaryAuthorization $desiredBinaryAuthorization)
  {
    $this->desiredBinaryAuthorization = $desiredBinaryAuthorization;
  }
  /**
   * @return BinaryAuthorization
   */
  public function getDesiredBinaryAuthorization()
  {
    return $this->desiredBinaryAuthorization;
  }
  /**
   * @param ClusterAutoscaling
   */
  public function setDesiredClusterAutoscaling(ClusterAutoscaling $desiredClusterAutoscaling)
  {
    $this->desiredClusterAutoscaling = $desiredClusterAutoscaling;
  }
  /**
   * @return ClusterAutoscaling
   */
  public function getDesiredClusterAutoscaling()
  {
    return $this->desiredClusterAutoscaling;
  }
  /**
   * @param CostManagementConfig
   */
  public function setDesiredCostManagementConfig(CostManagementConfig $desiredCostManagementConfig)
  {
    $this->desiredCostManagementConfig = $desiredCostManagementConfig;
  }
  /**
   * @return CostManagementConfig
   */
  public function getDesiredCostManagementConfig()
  {
    return $this->desiredCostManagementConfig;
  }
  /**
   * @param DatabaseEncryption
   */
  public function setDesiredDatabaseEncryption(DatabaseEncryption $desiredDatabaseEncryption)
  {
    $this->desiredDatabaseEncryption = $desiredDatabaseEncryption;
  }
  /**
   * @return DatabaseEncryption
   */
  public function getDesiredDatabaseEncryption()
  {
    return $this->desiredDatabaseEncryption;
  }
  /**
   * @param string
   */
  public function setDesiredDatapathProvider($desiredDatapathProvider)
  {
    $this->desiredDatapathProvider = $desiredDatapathProvider;
  }
  /**
   * @return string
   */
  public function getDesiredDatapathProvider()
  {
    return $this->desiredDatapathProvider;
  }
  /**
   * @param DefaultSnatStatus
   */
  public function setDesiredDefaultSnatStatus(DefaultSnatStatus $desiredDefaultSnatStatus)
  {
    $this->desiredDefaultSnatStatus = $desiredDefaultSnatStatus;
  }
  /**
   * @return DefaultSnatStatus
   */
  public function getDesiredDefaultSnatStatus()
  {
    return $this->desiredDefaultSnatStatus;
  }
  /**
   * @param DNSConfig
   */
  public function setDesiredDnsConfig(DNSConfig $desiredDnsConfig)
  {
    $this->desiredDnsConfig = $desiredDnsConfig;
  }
  /**
   * @return DNSConfig
   */
  public function getDesiredDnsConfig()
  {
    return $this->desiredDnsConfig;
  }
  /**
   * @param bool
   */
  public function setDesiredEnableFqdnNetworkPolicy($desiredEnableFqdnNetworkPolicy)
  {
    $this->desiredEnableFqdnNetworkPolicy = $desiredEnableFqdnNetworkPolicy;
  }
  /**
   * @return bool
   */
  public function getDesiredEnableFqdnNetworkPolicy()
  {
    return $this->desiredEnableFqdnNetworkPolicy;
  }
  /**
   * @param bool
   */
  public function setDesiredEnablePrivateEndpoint($desiredEnablePrivateEndpoint)
  {
    $this->desiredEnablePrivateEndpoint = $desiredEnablePrivateEndpoint;
  }
  /**
   * @return bool
   */
  public function getDesiredEnablePrivateEndpoint()
  {
    return $this->desiredEnablePrivateEndpoint;
  }
  /**
   * @param Fleet
   */
  public function setDesiredFleet(Fleet $desiredFleet)
  {
    $this->desiredFleet = $desiredFleet;
  }
  /**
   * @return Fleet
   */
  public function getDesiredFleet()
  {
    return $this->desiredFleet;
  }
  /**
   * @param GatewayAPIConfig
   */
  public function setDesiredGatewayApiConfig(GatewayAPIConfig $desiredGatewayApiConfig)
  {
    $this->desiredGatewayApiConfig = $desiredGatewayApiConfig;
  }
  /**
   * @return GatewayAPIConfig
   */
  public function getDesiredGatewayApiConfig()
  {
    return $this->desiredGatewayApiConfig;
  }
  /**
   * @param GcfsConfig
   */
  public function setDesiredGcfsConfig(GcfsConfig $desiredGcfsConfig)
  {
    $this->desiredGcfsConfig = $desiredGcfsConfig;
  }
  /**
   * @return GcfsConfig
   */
  public function getDesiredGcfsConfig()
  {
    return $this->desiredGcfsConfig;
  }
  /**
   * @param IdentityServiceConfig
   */
  public function setDesiredIdentityServiceConfig(IdentityServiceConfig $desiredIdentityServiceConfig)
  {
    $this->desiredIdentityServiceConfig = $desiredIdentityServiceConfig;
  }
  /**
   * @return IdentityServiceConfig
   */
  public function getDesiredIdentityServiceConfig()
  {
    return $this->desiredIdentityServiceConfig;
  }
  /**
   * @param string
   */
  public function setDesiredImageType($desiredImageType)
  {
    $this->desiredImageType = $desiredImageType;
  }
  /**
   * @return string
   */
  public function getDesiredImageType()
  {
    return $this->desiredImageType;
  }
  /**
   * @param IntraNodeVisibilityConfig
   */
  public function setDesiredIntraNodeVisibilityConfig(IntraNodeVisibilityConfig $desiredIntraNodeVisibilityConfig)
  {
    $this->desiredIntraNodeVisibilityConfig = $desiredIntraNodeVisibilityConfig;
  }
  /**
   * @return IntraNodeVisibilityConfig
   */
  public function getDesiredIntraNodeVisibilityConfig()
  {
    return $this->desiredIntraNodeVisibilityConfig;
  }
  /**
   * @param K8sBetaAPIConfig
   */
  public function setDesiredK8sBetaApis(K8sBetaAPIConfig $desiredK8sBetaApis)
  {
    $this->desiredK8sBetaApis = $desiredK8sBetaApis;
  }
  /**
   * @return K8sBetaAPIConfig
   */
  public function getDesiredK8sBetaApis()
  {
    return $this->desiredK8sBetaApis;
  }
  /**
   * @param ILBSubsettingConfig
   */
  public function setDesiredL4ilbSubsettingConfig(ILBSubsettingConfig $desiredL4ilbSubsettingConfig)
  {
    $this->desiredL4ilbSubsettingConfig = $desiredL4ilbSubsettingConfig;
  }
  /**
   * @return ILBSubsettingConfig
   */
  public function getDesiredL4ilbSubsettingConfig()
  {
    return $this->desiredL4ilbSubsettingConfig;
  }
  /**
   * @param string[]
   */
  public function setDesiredLocations($desiredLocations)
  {
    $this->desiredLocations = $desiredLocations;
  }
  /**
   * @return string[]
   */
  public function getDesiredLocations()
  {
    return $this->desiredLocations;
  }
  /**
   * @param LoggingConfig
   */
  public function setDesiredLoggingConfig(LoggingConfig $desiredLoggingConfig)
  {
    $this->desiredLoggingConfig = $desiredLoggingConfig;
  }
  /**
   * @return LoggingConfig
   */
  public function getDesiredLoggingConfig()
  {
    return $this->desiredLoggingConfig;
  }
  /**
   * @param string
   */
  public function setDesiredLoggingService($desiredLoggingService)
  {
    $this->desiredLoggingService = $desiredLoggingService;
  }
  /**
   * @return string
   */
  public function getDesiredLoggingService()
  {
    return $this->desiredLoggingService;
  }
  /**
   * @param MasterAuthorizedNetworksConfig
   */
  public function setDesiredMasterAuthorizedNetworksConfig(MasterAuthorizedNetworksConfig $desiredMasterAuthorizedNetworksConfig)
  {
    $this->desiredMasterAuthorizedNetworksConfig = $desiredMasterAuthorizedNetworksConfig;
  }
  /**
   * @return MasterAuthorizedNetworksConfig
   */
  public function getDesiredMasterAuthorizedNetworksConfig()
  {
    return $this->desiredMasterAuthorizedNetworksConfig;
  }
  /**
   * @param string
   */
  public function setDesiredMasterVersion($desiredMasterVersion)
  {
    $this->desiredMasterVersion = $desiredMasterVersion;
  }
  /**
   * @return string
   */
  public function getDesiredMasterVersion()
  {
    return $this->desiredMasterVersion;
  }
  /**
   * @param MeshCertificates
   */
  public function setDesiredMeshCertificates(MeshCertificates $desiredMeshCertificates)
  {
    $this->desiredMeshCertificates = $desiredMeshCertificates;
  }
  /**
   * @return MeshCertificates
   */
  public function getDesiredMeshCertificates()
  {
    return $this->desiredMeshCertificates;
  }
  /**
   * @param MonitoringConfig
   */
  public function setDesiredMonitoringConfig(MonitoringConfig $desiredMonitoringConfig)
  {
    $this->desiredMonitoringConfig = $desiredMonitoringConfig;
  }
  /**
   * @return MonitoringConfig
   */
  public function getDesiredMonitoringConfig()
  {
    return $this->desiredMonitoringConfig;
  }
  /**
   * @param string
   */
  public function setDesiredMonitoringService($desiredMonitoringService)
  {
    $this->desiredMonitoringService = $desiredMonitoringService;
  }
  /**
   * @return string
   */
  public function getDesiredMonitoringService()
  {
    return $this->desiredMonitoringService;
  }
  /**
   * @param ClusterNetworkPerformanceConfig
   */
  public function setDesiredNetworkPerformanceConfig(ClusterNetworkPerformanceConfig $desiredNetworkPerformanceConfig)
  {
    $this->desiredNetworkPerformanceConfig = $desiredNetworkPerformanceConfig;
  }
  /**
   * @return ClusterNetworkPerformanceConfig
   */
  public function getDesiredNetworkPerformanceConfig()
  {
    return $this->desiredNetworkPerformanceConfig;
  }
  /**
   * @param NetworkTags
   */
  public function setDesiredNodePoolAutoConfigNetworkTags(NetworkTags $desiredNodePoolAutoConfigNetworkTags)
  {
    $this->desiredNodePoolAutoConfigNetworkTags = $desiredNodePoolAutoConfigNetworkTags;
  }
  /**
   * @return NetworkTags
   */
  public function getDesiredNodePoolAutoConfigNetworkTags()
  {
    return $this->desiredNodePoolAutoConfigNetworkTags;
  }
  /**
   * @param ResourceManagerTags
   */
  public function setDesiredNodePoolAutoConfigResourceManagerTags(ResourceManagerTags $desiredNodePoolAutoConfigResourceManagerTags)
  {
    $this->desiredNodePoolAutoConfigResourceManagerTags = $desiredNodePoolAutoConfigResourceManagerTags;
  }
  /**
   * @return ResourceManagerTags
   */
  public function getDesiredNodePoolAutoConfigResourceManagerTags()
  {
    return $this->desiredNodePoolAutoConfigResourceManagerTags;
  }
  /**
   * @param NodePoolAutoscaling
   */
  public function setDesiredNodePoolAutoscaling(NodePoolAutoscaling $desiredNodePoolAutoscaling)
  {
    $this->desiredNodePoolAutoscaling = $desiredNodePoolAutoscaling;
  }
  /**
   * @return NodePoolAutoscaling
   */
  public function getDesiredNodePoolAutoscaling()
  {
    return $this->desiredNodePoolAutoscaling;
  }
  /**
   * @param string
   */
  public function setDesiredNodePoolId($desiredNodePoolId)
  {
    $this->desiredNodePoolId = $desiredNodePoolId;
  }
  /**
   * @return string
   */
  public function getDesiredNodePoolId()
  {
    return $this->desiredNodePoolId;
  }
  /**
   * @param NodePoolLoggingConfig
   */
  public function setDesiredNodePoolLoggingConfig(NodePoolLoggingConfig $desiredNodePoolLoggingConfig)
  {
    $this->desiredNodePoolLoggingConfig = $desiredNodePoolLoggingConfig;
  }
  /**
   * @return NodePoolLoggingConfig
   */
  public function getDesiredNodePoolLoggingConfig()
  {
    return $this->desiredNodePoolLoggingConfig;
  }
  /**
   * @param string
   */
  public function setDesiredNodeVersion($desiredNodeVersion)
  {
    $this->desiredNodeVersion = $desiredNodeVersion;
  }
  /**
   * @return string
   */
  public function getDesiredNodeVersion()
  {
    return $this->desiredNodeVersion;
  }
  /**
   * @param NotificationConfig
   */
  public function setDesiredNotificationConfig(NotificationConfig $desiredNotificationConfig)
  {
    $this->desiredNotificationConfig = $desiredNotificationConfig;
  }
  /**
   * @return NotificationConfig
   */
  public function getDesiredNotificationConfig()
  {
    return $this->desiredNotificationConfig;
  }
  /**
   * @param ParentProductConfig
   */
  public function setDesiredParentProductConfig(ParentProductConfig $desiredParentProductConfig)
  {
    $this->desiredParentProductConfig = $desiredParentProductConfig;
  }
  /**
   * @return ParentProductConfig
   */
  public function getDesiredParentProductConfig()
  {
    return $this->desiredParentProductConfig;
  }
  /**
   * @param PrivateClusterConfig
   */
  public function setDesiredPrivateClusterConfig(PrivateClusterConfig $desiredPrivateClusterConfig)
  {
    $this->desiredPrivateClusterConfig = $desiredPrivateClusterConfig;
  }
  /**
   * @return PrivateClusterConfig
   */
  public function getDesiredPrivateClusterConfig()
  {
    return $this->desiredPrivateClusterConfig;
  }
  /**
   * @param string
   */
  public function setDesiredPrivateIpv6GoogleAccess($desiredPrivateIpv6GoogleAccess)
  {
    $this->desiredPrivateIpv6GoogleAccess = $desiredPrivateIpv6GoogleAccess;
  }
  /**
   * @return string
   */
  public function getDesiredPrivateIpv6GoogleAccess()
  {
    return $this->desiredPrivateIpv6GoogleAccess;
  }
  /**
   * @param ReleaseChannel
   */
  public function setDesiredReleaseChannel(ReleaseChannel $desiredReleaseChannel)
  {
    $this->desiredReleaseChannel = $desiredReleaseChannel;
  }
  /**
   * @return ReleaseChannel
   */
  public function getDesiredReleaseChannel()
  {
    return $this->desiredReleaseChannel;
  }
  /**
   * @param ResourceUsageExportConfig
   */
  public function setDesiredResourceUsageExportConfig(ResourceUsageExportConfig $desiredResourceUsageExportConfig)
  {
    $this->desiredResourceUsageExportConfig = $desiredResourceUsageExportConfig;
  }
  /**
   * @return ResourceUsageExportConfig
   */
  public function getDesiredResourceUsageExportConfig()
  {
    return $this->desiredResourceUsageExportConfig;
  }
  /**
   * @param SecurityPostureConfig
   */
  public function setDesiredSecurityPostureConfig(SecurityPostureConfig $desiredSecurityPostureConfig)
  {
    $this->desiredSecurityPostureConfig = $desiredSecurityPostureConfig;
  }
  /**
   * @return SecurityPostureConfig
   */
  public function getDesiredSecurityPostureConfig()
  {
    return $this->desiredSecurityPostureConfig;
  }
  /**
   * @param ServiceExternalIPsConfig
   */
  public function setDesiredServiceExternalIpsConfig(ServiceExternalIPsConfig $desiredServiceExternalIpsConfig)
  {
    $this->desiredServiceExternalIpsConfig = $desiredServiceExternalIpsConfig;
  }
  /**
   * @return ServiceExternalIPsConfig
   */
  public function getDesiredServiceExternalIpsConfig()
  {
    return $this->desiredServiceExternalIpsConfig;
  }
  /**
   * @param ShieldedNodes
   */
  public function setDesiredShieldedNodes(ShieldedNodes $desiredShieldedNodes)
  {
    $this->desiredShieldedNodes = $desiredShieldedNodes;
  }
  /**
   * @return ShieldedNodes
   */
  public function getDesiredShieldedNodes()
  {
    return $this->desiredShieldedNodes;
  }
  /**
   * @param string
   */
  public function setDesiredStackType($desiredStackType)
  {
    $this->desiredStackType = $desiredStackType;
  }
  /**
   * @return string
   */
  public function getDesiredStackType()
  {
    return $this->desiredStackType;
  }
  /**
   * @param VerticalPodAutoscaling
   */
  public function setDesiredVerticalPodAutoscaling(VerticalPodAutoscaling $desiredVerticalPodAutoscaling)
  {
    $this->desiredVerticalPodAutoscaling = $desiredVerticalPodAutoscaling;
  }
  /**
   * @return VerticalPodAutoscaling
   */
  public function getDesiredVerticalPodAutoscaling()
  {
    return $this->desiredVerticalPodAutoscaling;
  }
  /**
   * @param WorkloadIdentityConfig
   */
  public function setDesiredWorkloadIdentityConfig(WorkloadIdentityConfig $desiredWorkloadIdentityConfig)
  {
    $this->desiredWorkloadIdentityConfig = $desiredWorkloadIdentityConfig;
  }
  /**
   * @return WorkloadIdentityConfig
   */
  public function getDesiredWorkloadIdentityConfig()
  {
    return $this->desiredWorkloadIdentityConfig;
  }
  /**
   * @param K8sBetaAPIConfig
   */
  public function setEnableK8sBetaApis(K8sBetaAPIConfig $enableK8sBetaApis)
  {
    $this->enableK8sBetaApis = $enableK8sBetaApis;
  }
  /**
   * @return K8sBetaAPIConfig
   */
  public function getEnableK8sBetaApis()
  {
    return $this->enableK8sBetaApis;
  }
  /**
   * @param string
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * @param AdditionalPodRangesConfig
   */
  public function setRemovedAdditionalPodRangesConfig(AdditionalPodRangesConfig $removedAdditionalPodRangesConfig)
  {
    $this->removedAdditionalPodRangesConfig = $removedAdditionalPodRangesConfig;
  }
  /**
   * @return AdditionalPodRangesConfig
   */
  public function getRemovedAdditionalPodRangesConfig()
  {
    return $this->removedAdditionalPodRangesConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ClusterUpdate::class, 'Google_Service_Container_ClusterUpdate');
