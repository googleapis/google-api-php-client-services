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

namespace Google\Service\NetworkManagement\Resource;

use Google\Service\NetworkManagement\HttpBody;
use Google\Service\NetworkManagement\ListMonitoringPointsResponse;
use Google\Service\NetworkManagement\MonitoringPoint;

/**
 * The "monitoringPoints" collection of methods.
 * Typical usage is:
 *  <code>
 *   $networkmanagementService = new Google\Service\NetworkManagement(...);
 *   $monitoringPoints = $networkmanagementService->projects_locations_networkMonitoringProviders_monitoringPoints;
 *  </code>
 */
class ProjectsLocationsNetworkMonitoringProvidersMonitoringPoints extends \Google\Service\Resource
{
  /**
   * Downloads an install script for MonitoringPoints for a given network
   * monitoring provider. (monitoringPoints.downloadInstallScript)
   *
   * @param string $parent Required. Parent value for
   * DownloadInstallScriptRequest. Format: projects/{project}/locations/{location}
   * /networkMonitoringProviders/{network_monitoring_provider}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string _password Optional. Password for logging into the
   * MonitoringPoint.
   * @opt_param string hostname Required. The hostname of the MonitoringPoint,
   * e.g. "test-vm"
   * @opt_param string monitoringPointType Required. The type of the monitoring
   * point.
   * @opt_param string ntpServerAddress Optional. Network Time Protocol a user can
   * configure. If the user omits the field, the default is either NTP servers
   * provided in the DHCP lease or a set of well-known NTP servers pre-configured
   * on the monitoring point. This field can be an IP address or FQDN.
   * @opt_param string ntpServerSecondaryAddress Optional. Second NTP server.
   * @opt_param bool privateConnectivityEnabled Optional. For Google Cloud MPs,
   * this field indicates whether the Monitoring Point is deployed in a Private
   * Service Connect deployment. Not used for non-Google Cloud MPs.
   * @opt_param string staticIpAddress.dnsServerAddress Required. DNS server.
   * @opt_param string staticIpAddress.dnsServerSecondaryAddress Optional. Second
   * DNS server.
   * @opt_param string staticIpAddress.domain Optional. Domain name of the
   * MonitoringPoint.
   * @opt_param string staticIpAddress.gatewayAddress Required. Gateway IP
   * address. Example: "100.80.40.1".
   * @opt_param string staticIpAddress.ipAddress Required. IP address of the
   * MonitoringPoint.
   * @opt_param string staticIpAddress.netmask Optional. Networkmask and CIDR
   * range. Example: "255.255.255.0/24"
   * @opt_param string timeZone.id IANA Time Zone Database time zone. For example
   * "America/New_York".
   * @opt_param string timeZone.version Optional. IANA Time Zone Database version
   * number. For example "2019a".
   * @opt_param bool useDhcp Optional. Dynamic Host Configuration Protocol, is a
   * network management protocol that automatically assigns IP addresses and other
   * network configuration parameters to devices connecting to a network.
   * @return HttpBody
   * @throws \Google\Service\Exception
   */
  public function downloadInstallScript($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('downloadInstallScript', [$params], HttpBody::class);
  }
  /**
   * Downloads an install script for a specific Container MonitoringPoint.
   * (monitoringPoints.downloadRecreateInstallScript)
   *
   * @param string $name Required. Resource name of the MonitoringPoint. Format: p
   * rojects/{project}/locations/{location}/networkMonitoringProviders/{network_mo
   * nitoring_provider}/monitoringPoints/{monitoring_point}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string hostname Optional. The hostname of the MonitoringPoint,
   * e.g. "test-vm"
   * @return HttpBody
   * @throws \Google\Service\Exception
   */
  public function downloadRecreateInstallScript($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('downloadRecreateInstallScript', [$params], HttpBody::class);
  }
  /**
   * Downloads the server connect configuration for a given network monitoring
   * provider. (monitoringPoints.downloadServerConnectConfig)
   *
   * @param string $parent Required. Parent value for
   * DownloadServerConnectConfigRequest. Format: projects/{project}/locations/{loc
   * ation}/networkMonitoringProviders/{network_monitoring_provider}
   * @param array $optParams Optional parameters.
   * @return HttpBody
   * @throws \Google\Service\Exception
   */
  public function downloadServerConnectConfig($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('downloadServerConnectConfig', [$params], HttpBody::class);
  }
  /**
   * Gets the MonitoringPoint resource. (monitoringPoints.get)
   *
   * @param string $name Required. Name of the resource. Format: projects/{project
   * }/locations/{location}/networkMonitoringProviders/{network_monitoring_provide
   * r}/monitoringPoints/{monitoring_point}
   * @param array $optParams Optional parameters.
   * @return MonitoringPoint
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], MonitoringPoint::class);
  }
  /**
   * Lists MonitoringPoints for a given network monitoring provider. (monitoringPo
   * ints.listProjectsLocationsNetworkMonitoringProvidersMonitoringPoints)
   *
   * @param string $parent Required. Parent value for ListMonitoringPointsRequest.
   * Format: projects/{project}/locations/{location}/networkMonitoringProviders/{n
   * etwork_monitoring_provider}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of monitoring points to
   * return. The service may return fewer than this value. If unspecified, at most
   * 20 monitoring points will be returned. The maximum value is 1000; values
   * above 1000 will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListMonitoringPoints` call. Provide this to retrieve the subsequent page.
   * When paginating, all other parameters provided to `ListMonitoringPoints` must
   * match the call that provided the page token.
   * @return ListMonitoringPointsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsNetworkMonitoringProvidersMonitoringPoints($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListMonitoringPointsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsNetworkMonitoringProvidersMonitoringPoints::class, 'Google_Service_NetworkManagement_Resource_ProjectsLocationsNetworkMonitoringProvidersMonitoringPoints');
