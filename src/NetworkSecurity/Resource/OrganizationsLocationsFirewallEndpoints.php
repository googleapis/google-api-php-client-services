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

use Google\Service\NetworkSecurity\FirewallEndpoint;
use Google\Service\NetworkSecurity\ListFirewallEndpointsResponse;
use Google\Service\NetworkSecurity\Operation;

/**
 * The "firewallEndpoints" collection of methods.
 * Typical usage is:
 *  <code>
 *   $networksecurityService = new Google\Service\NetworkSecurity(...);
 *   $firewallEndpoints = $networksecurityService->organizations_locations_firewallEndpoints;
 *  </code>
 */
class OrganizationsLocationsFirewallEndpoints extends \Google\Service\Resource
{
  /**
   * Creates a new firewall endpoint in a given organization and location.
   * (firewallEndpoints.create)
   *
   * @param string $parent Required. The parent resource where this firewall
   * endpoint is created. Format:
   * `organizations/{organization}/locations/{location}` or
   * `projects/{project}/locations/{location}`.
   * @param FirewallEndpoint $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string firewallEndpointId Required. The ID to use for the firewall
   * endpoint, which becomes the final component of the endpoint's resource name.
   * This value must be 1-63 characters long, start with a lowercase letter,
   * contain only lowercase letters, numbers, and hyphens, and cannot end with a
   * hyphen.
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server knows to ignore the request if it has already been completed. The
   * server guarantees that for at least 60 minutes since the first request. For
   * example, consider a situation where you make an initial request and the
   * request times out. If you make the request again with the same request ID,
   * the server can check if the original operation with the same request ID was
   * received, and if so, ignores the second request. This prevents clients from
   * accidentally creating duplicate commitments. The request ID must be a valid
   * UUID with the exception that zero UUID is not supported
   * (`00000000-0000-0000-0000-000000000000`).
   * @opt_param bool validateOnly Optional. If set, validates the request and
   * previews the endpoint, but does not actually create it.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, FirewallEndpoint $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single organization endpoint. (firewallEndpoints.delete)
   *
   * @param string $name Required. The name of the resource.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server knows to ignore the request if it has already been completed. The
   * server guarantees that for at least 60 minutes after the first request. For
   * example, consider a situation where you make an initial request and the
   * request times out. If you make the request again with the same request ID,
   * the server can check if the original operation with the same request ID was
   * received, and if so, ignores the second request. This prevents clients from
   * accidentally creating duplicate commitments. The request ID must be a valid
   * UUID with the exception that zero UUID is not supported
   * (`00000000-0000-0000-0000-000000000000`).
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
   * Gets details of a single organization endpoint. (firewallEndpoints.get)
   *
   * @param string $name Required. The name of the resource.
   * @param array $optParams Optional parameters.
   * @return FirewallEndpoint
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], FirewallEndpoint::class);
  }
  /**
   * Lists firewall endpoints in a given organization and location.
   * (firewallEndpoints.listOrganizationsLocationsFirewallEndpoints)
   *
   * @param string $parent Required. The parent resource from which the firewall
   * endpoints are listed. Format:
   * `organizations/{organization}/locations/{location}` or
   * `projects/{project}/locations/{location}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filtering results.
   * @opt_param string orderBy Optional. Hint for how to order the results.
   * @opt_param int pageSize Optional. Requested page size. The server might
   * return fewer items than requested. The maximum value is 1000; values above
   * 1000 are coerced to 1000. If unspecified, the server picks an appropriate
   * default.
   * @opt_param string pageToken A page token, received from a previous
   * `ListFirewallEndpoints` call. Provide this to retrieve the subsequent page.
   * When paginating, all other parameters provided to `ListFirewallEndpoints`
   * must match the call that provided the page token.
   * @return ListFirewallEndpointsResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsLocationsFirewallEndpoints($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListFirewallEndpointsResponse::class);
  }
  /**
   * Updates a single organization endpoint. (firewallEndpoints.patch)
   *
   * @param string $name Immutable. Identifier. The name of the resource.
   * @param FirewallEndpoint $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server knows to ignore the request if it has already been completed. The
   * server guarantees that for at least 60 minutes since the first request. For
   * example, consider a situation where you make an initial request and the
   * request times out. If you make the request again with the same request ID,
   * the server can check if the original operation with the same request ID was
   * received, and if so, ignores the second request. This prevents clients from
   * accidentally creating duplicate commitments. The request ID must be a valid
   * UUID with the exception that zero UUID is not supported
   * (`00000000-0000-0000-0000-000000000000`).
   * @opt_param string updateMask Required. Field mask used to specify the fields
   * to be overwritten in the `FirewallEndpoint` resource by the update. The
   * fields specified in the `update_mask` are relative to the resource, not the
   * full request. A field is overwritten if it is in the mask. If the user does
   * not provide a mask, then all fields present in the request are overwritten.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, FirewallEndpoint $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsLocationsFirewallEndpoints::class, 'Google_Service_NetworkSecurity_Resource_OrganizationsLocationsFirewallEndpoints');
