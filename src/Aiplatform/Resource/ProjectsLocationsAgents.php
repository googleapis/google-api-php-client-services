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

namespace Google\Service\Aiplatform\Resource;

use Google\Service\Aiplatform\GoogleCloudAiplatformV1Agent;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListAgentsResponse;
use Google\Service\Aiplatform\GoogleIamV1Policy;
use Google\Service\Aiplatform\GoogleIamV1SetIamPolicyRequest;
use Google\Service\Aiplatform\GoogleIamV1TestIamPermissionsResponse;
use Google\Service\Aiplatform\GoogleLongrunningOperation;

/**
 * The "agents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $agents = $aiplatformService->projects_locations_agents;
 *  </code>
 */
class ProjectsLocationsAgents extends \Google\Service\Resource
{
  /**
   * Creates an agent. (agents.create)
   *
   * @param string $parent Required. The resource name of the location to create
   * the agent in. Format: `projects/{project}/locations/{location}`.
   * @param GoogleCloudAiplatformV1Agent $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudAiplatformV1Agent $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes an agent. (agents.delete)
   *
   * @param string $name Required. The resource name of the agent to delete.
   * Format: `projects/{project}/locations/{location}/agents/{agent}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force Optional. If true, any `Task` belonging to this agent
   * is deleted along with it. If false or unset and the agent still has at least
   * one `Task`, the request fails with `FAILED_PRECONDITION` and nothing is
   * deleted. This governs `Task` and nothing else. Resources the agent owns but a
   * caller never named -- its AI Application and the tenant project bound to it,
   * its Workspace identity, its service-extension binding -- are torn down with
   * the agent on every delete, whatever this field says.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Retrieves an agent. (agents.get)
   *
   * @param string $name Required. The resource name of the agent to retrieve.
   * Format: `projects/{project}/locations/{location}/agents/{agent}`.
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1Agent
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1Agent::class);
  }
  /**
   * Gets the access control policy for a resource. Returns an empty policy if the
   * resource exists and does not have a policy set. (agents.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * requested. See [Resource
   * names](https://cloud.google.com/apis/design/resource_names) for the
   * appropriate value for this field.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int options.requestedPolicyVersion Optional. The maximum policy
   * version that will be used to format the policy. Valid values are 0, 1, and 3.
   * Requests specifying an invalid value will be rejected. Requests for policies
   * with any conditional role bindings must specify version 3. Policies with no
   * conditional role bindings may specify any valid value or leave the field
   * unset. The policy in the response might use the policy version that you
   * specified, or it might use a lower policy version. For example, if you
   * specify version 3, but the policy has no conditional role bindings, the
   * response uses version 1. To learn which resources support conditions in their
   * IAM policies, see the [IAM
   * documentation](https://cloud.google.com/iam/help/conditions/resource-
   * policies).
   * @return GoogleIamV1Policy
   * @throws \Google\Service\Exception
   */
  public function getIamPolicy($resource, $optParams = [])
  {
    $params = ['resource' => $resource];
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', [$params], GoogleIamV1Policy::class);
  }
  /**
   * Lists the agents in a location that belong to the caller. An agent belongs to
   * the end user recorded as its owner when it was created, so the response holds
   * that caller's agents and no others. It is empty for a caller that is not an
   * end user, and an agent with no recorded owner is listed for nobody.
   * (agents.listProjectsLocationsAgents)
   *
   * @param string $parent Required. The resource name of the location to list
   * agents from. Format: `projects/{project}/locations/{location}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. An [AIP-160](https://google.aip.dev/160)
   * filter over the returned agents. An empty filter returns the unfiltered
   * collection. Supported fields: * `created` * `updated` Both are timestamps and
   * take an RFC-3339 value, for example `2026-08-01T00:00:00Z`. Supported
   * operators: `=`, `!=`, `<`, `>`, `<=`, `>=`, `:`, `AND`, `OR`, `NOT`
   * (equivalently `-`), and parentheses. Note that `OR` binds more tightly than
   * `AND`, so `a AND b OR c` means `a AND (b OR c)`; parentheses are recommended,
   * not required. Example: `created > "2026-08-01T00:00:00Z" AND updated <
   * "2026-08-09T00:00:00Z"`. Not supported: any field other than those listed
   * above, wildcards other than `field:*`, bare literals with no field name,
   * functions, and the regular-expression operators `=~` and `!~`. A filter that
   * names an unsupported field, exceeds 1000 characters, or nests parentheses
   * more than 5 deep fails with `INVALID_ARGUMENT`.
   * @opt_param string orderBy Optional. A comma-separated list of fields to order
   * by. Supported fields: * `created` * `updated` Use `desc` after a field name
   * for descending order. Example: `created desc`.
   * @opt_param int pageSize Optional. The maximum number of agents to return. The
   * service may return fewer than this value. The maximum page size is 100;
   * values above 100 will be coerced to 100. If unspecified, the default page
   * size is 10.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * AgentService.ListAgents call. Provide this to retrieve the subsequent page.
   * @return GoogleCloudAiplatformV1ListAgentsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAgents($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListAgentsResponse::class);
  }
  /**
   * Updates an agent. (agents.patch)
   *
   * @param string $name Identifier. The resource name of the agent. Format:
   * `projects/{project}/locations/{location}/agents/{agent}`.
   * @param GoogleCloudAiplatformV1Agent $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to update. If not
   * present, all fields are updated.
   * @return GoogleCloudAiplatformV1Agent
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudAiplatformV1Agent $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudAiplatformV1Agent::class);
  }
  /**
   * Sets the access control policy on the specified resource. Replaces any
   * existing policy. Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and
   * `PERMISSION_DENIED` errors. (agents.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * specified. See [Resource
   * names](https://cloud.google.com/apis/design/resource_names) for the
   * appropriate value for this field.
   * @param GoogleIamV1SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleIamV1Policy
   * @throws \Google\Service\Exception
   */
  public function setIamPolicy($resource, GoogleIamV1SetIamPolicyRequest $postBody, $optParams = [])
  {
    $params = ['resource' => $resource, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', [$params], GoogleIamV1Policy::class);
  }
  /**
   * Returns permissions that a caller has on the specified resource. If the
   * resource does not exist, this will return an empty set of permissions, not a
   * `NOT_FOUND` error. Note: This operation is designed to be used for building
   * permission-aware UIs and command-line tools, not for authorization checking.
   * This operation may "fail open" without warning. (agents.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. See [Resource
   * names](https://cloud.google.com/apis/design/resource_names) for the
   * appropriate value for this field.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string permissions The set of permissions to check for the
   * `resource`. Permissions with wildcards (such as `*` or `storage.*`) are not
   * allowed. For more information see [IAM
   * Overview](https://cloud.google.com/iam/docs/overview#permissions).
   * @return GoogleIamV1TestIamPermissionsResponse
   * @throws \Google\Service\Exception
   */
  public function testIamPermissions($resource, $optParams = [])
  {
    $params = ['resource' => $resource];
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', [$params], GoogleIamV1TestIamPermissionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAgents::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsAgents');
