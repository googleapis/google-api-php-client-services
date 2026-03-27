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

namespace Google\Service\CloudRedis\Resource;

use Google\Service\CloudRedis\AclPolicy;
use Google\Service\CloudRedis\ListAclPoliciesResponse;
use Google\Service\CloudRedis\Operation;

/**
 * The "aclPolicies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $redisService = new Google\Service\CloudRedis(...);
 *   $aclPolicies = $redisService->projects_locations_aclPolicies;
 *  </code>
 */
class ProjectsLocationsAclPolicies extends \Google\Service\Resource
{
  /**
   * Creates an ACL Policy. The creation is executed synchronously and the policy
   * is available for use immediately after the RPC returns. (aclPolicies.create)
   *
   * @param string $parent Required. The resource name of the cluster location
   * using the form: `projects/{project_id}/locations/{location_id}` where
   * `location_id` refers to a Google Cloud region.
   * @param AclPolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string aclPolicyId Required. The logical name of the ACL Policy in
   * the customer project with the following restrictions: * Must contain only
   * lowercase letters, numbers, and hyphens. * Must start with a letter. * Must
   * be between 1-63 characters. * Must end with a number or a letter. * Must be
   * unique within the customer project / location
   * @opt_param string requestId Optional. Idempotent request UUID. .
   * @return AclPolicy
   * @throws \Google\Service\Exception
   */
  public function create($parent, AclPolicy $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], AclPolicy::class);
  }
  /**
   * Deletes a specific Acl Policy. This action will delete the Acl Policy and all
   * the rules associated with it. An ACL policy cannot be deleted if it is
   * attached to a cluster. (aclPolicies.delete)
   *
   * @param string $name Required. Redis ACL Policy resource name using the form:
   * `projects/{project_id}/locations/{location_id}/aclPolicies/{acl_policy_id}`
   * where `location_id` refers to a GCP region.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. Etag of the ACL policy. If this is different
   * from the server's etag, the request will fail with an ABORTED error.
   * @opt_param string requestId Optional. Idempotent request UUID.
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
   * Gets the details of a specific Redis Cluster ACL Policy. (aclPolicies.get)
   *
   * @param string $name Required. Redis ACL Policy resource name using the form:
   * `projects/{project_id}/locations/{location_id}/aclPolicies/{acl_policy_id}`
   * where `location_id` refers to a GCP region.
   * @param array $optParams Optional parameters.
   * @return AclPolicy
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AclPolicy::class);
  }
  /**
   * Lists all ACL Policies owned by a project in either the specified location
   * (region) or all locations. The location should have the following format: *
   * `projects/{project_id}/locations/{location_id}` If `location_id` is specified
   * as `-` (wildcard), then all regions available to the project are queried, and
   * the results are aggregated. (aclPolicies.listProjectsLocationsAclPolicies)
   *
   * @param string $parent Required. The resource name of the cluster location
   * using the form: `projects/{project_id}/locations/{location_id}` where
   * `location_id` refers to a Google Cloud region.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of items to return. If
   * not specified, a default value of 1000 will be used by the service.
   * Regardless of the page_size value, the response may include a partial list
   * and a caller should only rely on response's `next_page_token` to determine if
   * there are more ACL policies left to be queried. The maximum value is 1000;
   * values above 1000 will be coerced to 1000.
   * @opt_param string pageToken Optional. The `next_page_token` value returned
   * from a previous ListAclPolicies request, if any.
   * @return ListAclPoliciesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAclPolicies($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAclPoliciesResponse::class);
  }
  /**
   * Updates the ACL policy. The operation applies the updated ACL policy to all
   * of the linked clusters. If Memorystore can apply the policy to all clusters,
   * then the operation returns a SUCCESS status. If Memorystore can't apply the
   * policy to all clusters, then to ensure eventual consistency, Memorystore uses
   * reconciliation to apply the policy to the failed clusters. Completed
   * longrunning.Operation will contain the new ACL Policy object in the response
   * field. (aclPolicies.patch)
   *
   * @param string $name Identifier. Full resource path of the ACL policy.
   * @param AclPolicy $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId Optional. Idempotent request UUID.
   * @opt_param string updateMask Optional. Mask of fields to be updated. At least
   * one path must be supplied in this field. The elements of the repeated paths
   * field may only include these fields from AclPolicy: * `rules`
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, AclPolicy $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAclPolicies::class, 'Google_Service_CloudRedis_Resource_ProjectsLocationsAclPolicies');
