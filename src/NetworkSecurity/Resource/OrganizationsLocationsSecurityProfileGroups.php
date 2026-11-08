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

use Google\Service\NetworkSecurity\ListSecurityProfileGroupsResponse;
use Google\Service\NetworkSecurity\Operation;
use Google\Service\NetworkSecurity\SecurityProfileGroup;

/**
 * The "securityProfileGroups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $networksecurityService = new Google\Service\NetworkSecurity(...);
 *   $securityProfileGroups = $networksecurityService->organizations_locations_securityProfileGroups;
 *  </code>
 */
class OrganizationsLocationsSecurityProfileGroups extends \Google\Service\Resource
{
  /**
   * Creates a new security profile group in a given organization and location.
   * (securityProfileGroups.create)
   *
   * @param string $parent Required. The parent resource of the
   * `SecurityProfileGroup`. Format:
   * `organizations/{organization}/locations/{location}` or
   * `projects/{project}/locations/{location}`.
   * @param SecurityProfileGroup $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string securityProfileGroupId Required. Short name of the
   * `SecurityProfileGroup` resource to be created. This value must be 1 to 63
   * characters long, contain only lowercase letters, numbers, and hyphens, and
   * must not start with a number. For example, `security-profile-group1`.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, SecurityProfileGroup $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single security profile group. (securityProfileGroups.delete)
   *
   * @param string $name Required. The name of the `SecurityProfileGroup` to
   * delete. Format: `organizations/{organization}/locations/{location}/securityPr
   * ofileGroups/{security_profile_group}` or `projects/{project}/locations/{locat
   * ion}/securityProfileGroups/{security_profile_group}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. If the client-provided `etag` is out of
   * date, the delete request returns an `ABORTED` error.
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
   * Gets details of a single security profile group. (securityProfileGroups.get)
   *
   * @param string $name Required. The name of the `SecurityProfileGroup` to get.
   * Format: `organizations/{organization}/locations/{location}/securityProfileGro
   * ups/{security_profile_group}` or `projects/{project}/locations/{location}/sec
   * urityProfileGroups/{security_profile_group}`.
   * @param array $optParams Optional parameters.
   * @return SecurityProfileGroup
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], SecurityProfileGroup::class);
  }
  /**
   * Lists security profile group resources in a given organization and location.
   * (securityProfileGroups.listOrganizationsLocationsSecurityProfileGroups)
   *
   * @param string $parent Required. The project or organization and location from
   * which the `SecurityProfileGroup` resources are listed. Format:
   * `organizations/{organization}/locations/{location}` or
   * `projects/{project}/locations/{location}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Maximum number of `SecurityProfileGroup`
   * resources to return per call. The maximum value is 1000; values above 1000
   * are coerced to 1000. If unspecified, the server picks an appropriate default.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListSecurityProfileGroups` call. Provide this to retrieve the subsequent
   * page. When paginating, all other parameters provided to
   * `ListSecurityProfileGroups` must match the call that provided the page token.
   * @return ListSecurityProfileGroupsResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsLocationsSecurityProfileGroups($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSecurityProfileGroupsResponse::class);
  }
  /**
   * Updates the parameters of a single security profile group.
   * (securityProfileGroups.patch)
   *
   * @param string $name Immutable. Identifier. Name of the `SecurityProfileGroup`
   * resource. Format: `organizations/{organization}/locations/{location}/security
   * ProfileGroups/{security_profile_group}` or `projects/{project}/locations/{loc
   * ation}/securityProfileGroups/{security_profile_group}`.
   * @param SecurityProfileGroup $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Required. Field mask is used to specify the
   * fields to be overwritten in the `SecurityProfileGroup` resource by the
   * update. The fields specified in the `update_mask` are relative to the
   * resource, not the full request. A field is overwritten if it is in the mask.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, SecurityProfileGroup $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsLocationsSecurityProfileGroups::class, 'Google_Service_NetworkSecurity_Resource_OrganizationsLocationsSecurityProfileGroups');
