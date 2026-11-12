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

namespace Google\Service\Backupdr\Resource;

use Google\Service\Backupdr\AutoProtectionPolicy;
use Google\Service\Backupdr\ListAutoProtectionPoliciesResponse;
use Google\Service\Backupdr\Operation;

/**
 * The "autoProtectionPolicies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $backupdrService = new Google\Service\Backupdr(...);
 *   $autoProtectionPolicies = $backupdrService->projects_locations_autoProtectionPolicies;
 *  </code>
 */
class ProjectsLocationsAutoProtectionPolicies extends \Google\Service\Resource
{
  /**
   * Creates a new AutoProtectionPolicy in a given project and location.
   * (autoProtectionPolicies.create)
   *
   * @param string $parent Required. The parent resource where this policy will be
   * created. Format: projects/{project}/locations/{location}
   * @param AutoProtectionPolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string autoProtectionPolicyId Required. The ID to use for the
   * policy. This will become the final component of the policy's resource name.
   * This value must start with a lowercase letter followed by up to 62 lowercase
   * letters, numbers, or hyphens, and cannot end with a hyphen.
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The server will guarantee that for at least 60 minutes since the first
   * request. The request ID must be a valid UUID with the exception that zero
   * UUID is not supported (00000000-0000-0000-0000-000000000000).
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, AutoProtectionPolicy $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single AutoProtectionPolicy. (autoProtectionPolicies.delete)
   *
   * @param string $name Required. The name of the policy to delete. Format: proje
   * cts/{project}/locations/{location}/autoProtectionPolicies/{auto_protection_po
   * licy}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The current etag of the
   * autoprotectionpolicy. If an etag is provided and does not match the current
   * etag of the connection, deletion will be blocked.
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The server will guarantee that for at least 60 minutes since the first
   * request. The request ID must be a valid UUID with the exception that zero
   * UUID is not supported (00000000-0000-0000-0000-000000000000).
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
   * Gets details of a single AutoProtectionPolicy. (autoProtectionPolicies.get)
   *
   * @param string $name Required. The name of the policy to retrieve. Format: pro
   * jects/{project}/locations/{location}/autoProtectionPolicies/{auto_protection_
   * policy}
   * @param array $optParams Optional parameters.
   * @return AutoProtectionPolicy
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AutoProtectionPolicy::class);
  }
  /**
   * Lists AutoProtectionPolicies for a given project and location.
   * (autoProtectionPolicies.listProjectsLocationsAutoProtectionPolicies)
   *
   * @param string $parent Required. The project and location for which to
   * retrieve the list of policies. Format:
   * projects/{project}/locations/{location}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A filter expression that filters resources
   * listed in the response. The following fields are filterable:
   * @opt_param string orderBy Optional. An expression that sorts the results in
   * the response. The following fields are sortable:
   * @opt_param int pageSize Optional. The maximum number of policies to return in
   * a single page. If unspecified, a server-default value will be used.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListAutoProtectionPolicies` call. Provide this to retrieve the subsequent
   * page.
   * @return ListAutoProtectionPoliciesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAutoProtectionPolicies($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAutoProtectionPoliciesResponse::class);
  }
  /**
   * Updates the parameters of a single AutoProtectionPolicy.
   * (autoProtectionPolicies.patch)
   *
   * @param string $name Output only. Identifier. The resource name of the
   * AutoProtectionPolicy. Format: `projects/{project}/locations/{location}/autoPr
   * otectionPolicies/{auto_protection_policy}`
   * @param AutoProtectionPolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The server will guarantee that for at least 60 minutes since the first
   * request. The request ID must be a valid UUID with the exception that zero
   * UUID is not supported (00000000-0000-0000-0000-000000000000).
   * @opt_param string updateMask Optional. Field mask is used to specify the
   * fields to be overwritten in the AutoProtectionPolicy resource by the update.
   * The fields specified in the update_mask are relative to the resource, not the
   * full request. A field will be overwritten if it is in the mask. If the user
   * does not provide a mask then all fields will be overwritten.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, AutoProtectionPolicy $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAutoProtectionPolicies::class, 'Google_Service_Backupdr_Resource_ProjectsLocationsAutoProtectionPolicies');
