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

use Google\Service\NetworkManagement\GenerateMonitoringPointConfigResponse;
use Google\Service\NetworkManagement\GenerateProviderAccessTokenResponse;
use Google\Service\NetworkManagement\ListNetworkMonitoringProvidersResponse;
use Google\Service\NetworkManagement\NetworkMonitoringProvider;
use Google\Service\NetworkManagement\Operation;

/**
 * The "networkMonitoringProviders" collection of methods.
 * Typical usage is:
 *  <code>
 *   $networkmanagementService = new Google\Service\NetworkManagement(...);
 *   $networkMonitoringProviders = $networkmanagementService->projects_locations_networkMonitoringProviders;
 *  </code>
 */
class ProjectsLocationsNetworkMonitoringProviders extends \Google\Service\Resource
{
  /**
   * Creates a NetworkMonitoringProvider resource.
   * (networkMonitoringProviders.create)
   *
   * @param string $parent Required. Parent value for
   * CreateNetworkMonitoringProviderRequest. Format:
   * projects/{project}/locations/{location}
   * @param NetworkMonitoringProvider $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string networkMonitoringProviderId Required. The ID to use for the
   * NetworkMonitoringProvider resource, which will become the final component of
   * the NetworkMonitoringProvider resource's name.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, NetworkMonitoringProvider $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a NetworkMonitoringProvider resource and all of its child resources.
   * (networkMonitoringProviders.delete)
   *
   * @param string $name Required. Name of the resource. Format: projects/{project
   * }/locations/{location}/networkMonitoringProviders/{network_monitoring_provide
   * r}
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force Optional. If set to true, any nested MonitoringPoints,
   * NetworkPaths and WebPaths resources from this NetworkMonitoringProvider will
   * also be deleted. Otherwise, the request will only work if there are no nested
   * resources.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], Operation::class);
  }
  /**
   * Generates Monitoring Point configuration of a NetworkMonitoringProvider
   * resource. (networkMonitoringProviders.generateMonitoringPointConfig)
   *
   * @param string $name Required. Name of the resource. Format: projects/{project
   * }/locations/{location}/networkMonitoringProviders/{network_monitoring_provide
   * r}
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool privateConnectivityEnabled Optional. For Google Cloud MPs,
   * this field indicates whether the Monitoring Point is deployed in a Private
   * Service Connect deployment. Not used for non-Google Cloud MPs.
   * @return GenerateMonitoringPointConfigResponse
   * @throws \Google\Service\Exception
   */
  public function generateMonitoringPointConfig($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('generateMonitoringPointConfig', [$params], GenerateMonitoringPointConfigResponse::class);
  }
  /**
   * Generates a provider access token for a given Google access token. Provider
   * access token is a short-lived token that is used to access resources in the
   * provider's platform. (networkMonitoringProviders.generateProviderAccessToken)
   *
   * @param string $name Required. Name of the resource. Format: projects/{project
   * }/locations/{location}/networkMonitoringProviders/{network_monitoring_provide
   * r}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string gcpAccessToken Required. Google access token.
   * @return GenerateProviderAccessTokenResponse
   * @throws \Google\Service\Exception
   */
  public function generateProviderAccessToken($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('generateProviderAccessToken', [$params], GenerateProviderAccessTokenResponse::class);
  }
  /**
   * Gets the NetworkMonitoringProvider resource. (networkMonitoringProviders.get)
   *
   * @param string $name Required. Name of the resource. Format: `projects/{projec
   * t}/locations/{location}/networkMonitoringProviders/{network_monitoring_provid
   * er}`
   * @param array $optParams Optional parameters.
   * @return NetworkMonitoringProvider
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], NetworkMonitoringProvider::class);
  }
  /**
   * Lists NetworkMonitoringProviders for a given project and location.
   * (networkMonitoringProviders.listProjectsLocationsNetworkMonitoringProviders)
   *
   * @param string $parent Required. Parent value for
   * ListNetworkMonitoringProvidersRequest. Format:
   * `projects/{project}/locations/{location}`
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
   * @return ListNetworkMonitoringProvidersResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsNetworkMonitoringProviders($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListNetworkMonitoringProvidersResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsNetworkMonitoringProviders::class, 'Google_Service_NetworkManagement_Resource_ProjectsLocationsNetworkMonitoringProviders');
