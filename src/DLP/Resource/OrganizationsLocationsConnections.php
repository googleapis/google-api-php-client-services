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

namespace Google\Service\DLP\Resource;

use Google\Service\DLP\GooglePrivacyDlpV2SearchConnectionsResponse;

/**
 * The "connections" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dlpService = new Google\Service\DLP(...);
 *   $connections = $dlpService->organizations_locations_connections;
 *  </code>
 */
class OrganizationsLocationsConnections extends \Google\Service\Resource
{
  /**
   * Searches for Connections in a parent. (connections.search)
   *
   * @param string $parent Required. Parent name, typically an organization,
   * without location. For example: "organizations/12345678".
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. * Supported fields/values - `state` -
   * MISSING|AVAILABLE|ERROR
   * @opt_param int pageSize Optional. Number of results per page, max 1000.
   * @opt_param string pageToken Optional. Page token from a previous page to
   * return the next set of results. If set, all other request fields must match
   * the original request.
   * @return GooglePrivacyDlpV2SearchConnectionsResponse
   * @throws \Google\Service\Exception
   */
  public function search($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('search', [$params], GooglePrivacyDlpV2SearchConnectionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsLocationsConnections::class, 'Google_Service_DLP_Resource_OrganizationsLocationsConnections');
