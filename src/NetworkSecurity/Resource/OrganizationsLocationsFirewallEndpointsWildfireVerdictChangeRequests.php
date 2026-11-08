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

namespace Google\Service\NetworkSecurity\Resource;

use Google\Service\NetworkSecurity\ListWildfireVerdictChangeRequestsResponse;
use Google\Service\NetworkSecurity\WildfireVerdictChangeRequest;

/**
 * The "wildfireVerdictChangeRequests" collection of methods.
 * Typical usage is:
 *  <code>
 *   $networksecurityService = new Google\Service\NetworkSecurity(...);
 *   $wildfireVerdictChangeRequests = $networksecurityService->organizations_locations_firewallEndpoints_wildfireVerdictChangeRequests;
 *  </code>
 */
class OrganizationsLocationsFirewallEndpointsWildfireVerdictChangeRequests extends \Google\Service\Resource
{
  /**
   * Creates an Advanced malware sandbox verdict change request in a given
   * firewall endpoint in an organization and location.
   * (wildfireVerdictChangeRequests.create)
   *
   * @param string $parent Required. Parent value for
   * `CreateWildfireVerdictChangeRequestRequest`. The parent is a firewall
   * endpoint resource. Format: `organizations/{organization}/locations/{location}
   * /firewallEndpoints/{firewall_endpoint}` or `projects/{project}/locations/{loc
   * ation}/firewallEndpoints/{firewall_endpoint}`.
   * @param WildfireVerdictChangeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return WildfireVerdictChangeRequest
   * @throws \Google\Service\Exception
   */
  public function create($parent, WildfireVerdictChangeRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], WildfireVerdictChangeRequest::class);
  }
  /**
   * Gets an Advanced malware sandbox verdict change request in a given firewall
   * endpoint in an organization and location. (wildfireVerdictChangeRequests.get)
   *
   * @param string $name Required. The name of the `WildfireVerdictChangeRequest`
   * to retrieve. Format: `organizations/{organization}/locations/{location}/firew
   * allEndpoints/{firewall_endpoint}/wildfireVerdictChangeRequests/{wildfire_verd
   * ict_change_request_id}` or `projects/{project}/locations/{location}/firewallE
   * ndpoints/{firewall_endpoint}/wildfireVerdictChangeRequests/{wildfire_verdict_
   * change_request_id}`. Where `{wildfire_verdict_change_request_id}` is an ID in
   * the format `^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-
   * 9a-fA-F]{12}$`.
   * @param array $optParams Optional parameters.
   * @return WildfireVerdictChangeRequest
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], WildfireVerdictChangeRequest::class);
  }
  /**
   * Lists the Advanced malware sandbox (WildFire) verdict change requests in a
   * given firewall endpoint in an organization and location. (wildfireVerdictChan
   * geRequests.listOrganizationsLocationsFirewallEndpointsWildfireVerdictChangeRe
   * quests)
   *
   * @param string $parent Required. Parent value for
   * `ListWildfireVerdictChangeRequestsRequest`. The parent is a firewall endpoint
   * resource. Format: `organizations/{organization}/locations/{location}/firewall
   * Endpoints/{firewall_endpoint}` or `projects/{project}/locations/{location}/fi
   * rewallEndpoints/{firewall_endpoint}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter expression to filter the results.
   * Supported fields are: - `sha256` (string, equality only, for example, `sha256
   * = "..."`) - `state` (enum, equality only, valid values are `OPEN`, `CLOSED`,
   * or `PENDING`, for example, `state = "PENDING"`) - `create_time` (timestamp,
   * comparisons, for example, `create_time >= "2026-01-01T00:00:00Z" AND
   * create_time <= "2026-01-31T23:59:59Z"`). If filtering by `create_time`, you
   * must specify both a start time and an end time. If `create_time` is not
   * specified, the query defaults to the past 30 days.
   * @opt_param int pageSize Optional. Requested page size. The server might
   * return fewer items than requested. If unspecified, the server picks an
   * appropriate default.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListWildfireVerdictChangeRequests` call. Provide this to retrieve the
   * subsequent page. When paginating, all other parameters provided to
   * `ListWildfireVerdictChangeRequests` must match the call that provided the
   * page token.
   * @return ListWildfireVerdictChangeRequestsResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsLocationsFirewallEndpointsWildfireVerdictChangeRequests($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListWildfireVerdictChangeRequestsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsLocationsFirewallEndpointsWildfireVerdictChangeRequests::class, 'Google_Service_NetworkSecurity_Resource_OrganizationsLocationsFirewallEndpointsWildfireVerdictChangeRequests');
