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

namespace Google\Service\CloudDataplex\Resource;

use Google\Service\CloudDataplex\DataplexEmpty;
use Google\Service\CloudDataplex\GoogleCloudDataplexV1ApproveChangeRequestRequest;
use Google\Service\CloudDataplex\GoogleCloudDataplexV1ChangeRequest;
use Google\Service\CloudDataplex\GoogleCloudDataplexV1ListChangeRequestsResponse;
use Google\Service\CloudDataplex\GoogleCloudDataplexV1RejectChangeRequestRequest;
use Google\Service\CloudDataplex\GoogleIamV1Policy;
use Google\Service\CloudDataplex\GoogleIamV1SetIamPolicyRequest;
use Google\Service\CloudDataplex\GoogleIamV1TestIamPermissionsRequest;
use Google\Service\CloudDataplex\GoogleIamV1TestIamPermissionsResponse;

/**
 * The "changeRequests" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataplexService = new Google\Service\CloudDataplex(...);
 *   $changeRequests = $dataplexService->projects_locations_changeRequests;
 *  </code>
 */
class ProjectsLocationsChangeRequests extends \Google\Service\Resource
{
  /**
   * Approves a ChangeRequest. (changeRequests.approve)
   *
   * @param string $name Required. The name of the ChangeRequest to approve.
   * @param GoogleCloudDataplexV1ApproveChangeRequestRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDataplexV1ChangeRequest
   * @throws \Google\Service\Exception
   */
  public function approve($name, GoogleCloudDataplexV1ApproveChangeRequestRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('approve', [$params], GoogleCloudDataplexV1ChangeRequest::class);
  }
  /**
   * Deletes a ChangeRequest.Behavior depends on the caller's permissions and the
   * resource's state: 1. Callers with dataplex.changeRequests.delete can only
   * delete ChangeRequests in the NEW state. 2. Callers with the
   * dataplex.changeRequests.adminDelete permission can delete ChangeRequests
   * regardless of their state. (changeRequests.delete)
   *
   * @param string $name Required. The name of the ChangeRequest to delete.
   * Format: projects/{project_number}/locations/{location_id}/changeRequests/{cha
   * nge_request_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The etag of the ChangeRequest.
   * @return DataplexEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], DataplexEmpty::class);
  }
  /**
   * Gets a ChangeRequest. (changeRequests.get)
   *
   * @param string $name Required. The name of the ChangeRequest to retrieve.
   * Format: projects/{project_number}/locations/{location_id}/changeRequests/{cha
   * nge_request_id}
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDataplexV1ChangeRequest
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudDataplexV1ChangeRequest::class);
  }
  /**
   * Gets the access control policy for a resource. Returns an empty policy if the
   * resource exists and does not have a policy set. (changeRequests.getIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * requested. See Resource names
   * (https://cloud.google.com/apis/design/resource_names) for the appropriate
   * value for this field.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int options.requestedPolicyVersion Optional. The maximum policy
   * version that will be used to format the policy.Valid values are 0, 1, and 3.
   * Requests specifying an invalid value will be rejected.Requests for policies
   * with any conditional role bindings must specify version 3. Policies with no
   * conditional role bindings may specify any valid value or leave the field
   * unset.The policy in the response might use the policy version that you
   * specified, or it might use a lower policy version. For example, if you
   * specify version 3, but the policy has no conditional role bindings, the
   * response uses version 1.To learn which resources support conditions in their
   * IAM policies, see the IAM documentation
   * (https://cloud.google.com/iam/help/conditions/resource-policies).
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
   * Lists ChangeRequests. (changeRequests.listProjectsLocationsChangeRequests)
   *
   * @param string $parent Required. The parent, which owns this collection of
   * ChangeRequests. Format: projects/{project_number}/locations/{location_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter request. Supports filtering by:
   * state, author, resource, create_time, update_time.
   * @opt_param string orderBy Optional. Order by fields for the result.
   * @opt_param int pageSize Optional. Maximum number of ChangeRequests to return.
   * The service may return fewer.
   * @opt_param string pageToken Optional. Page token received from a previous
   * ListChangeRequests call.
   * @return GoogleCloudDataplexV1ListChangeRequestsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsChangeRequests($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudDataplexV1ListChangeRequestsResponse::class);
  }
  /**
   * Updates a ChangeRequest. Only allowed when the state is NEW.
   * (changeRequests.patch)
   *
   * @param string $name Identifier. The relative resource name of the
   * ChangeRequest, of the form: projects/{project_number}/locations/{location_id}
   * /changeRequests/{change_request_id}
   * @param GoogleCloudDataplexV1ChangeRequest $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to update.
   * @return GoogleCloudDataplexV1ChangeRequest
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudDataplexV1ChangeRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudDataplexV1ChangeRequest::class);
  }
  /**
   * Rejects a ChangeRequest. (changeRequests.reject)
   *
   * @param string $name Required. The name of the ChangeRequest to reject.
   * @param GoogleCloudDataplexV1RejectChangeRequestRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDataplexV1ChangeRequest
   * @throws \Google\Service\Exception
   */
  public function reject($name, GoogleCloudDataplexV1RejectChangeRequestRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('reject', [$params], GoogleCloudDataplexV1ChangeRequest::class);
  }
  /**
   * Sets the access control policy on the specified resource. Replaces any
   * existing policy.Can return NOT_FOUND, INVALID_ARGUMENT, and PERMISSION_DENIED
   * errors. (changeRequests.setIamPolicy)
   *
   * @param string $resource REQUIRED: The resource for which the policy is being
   * specified. See Resource names
   * (https://cloud.google.com/apis/design/resource_names) for the appropriate
   * value for this field.
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
   * NOT_FOUND error.Note: This operation is designed to be used for building
   * permission-aware UIs and command-line tools, not for authorization checking.
   * This operation may "fail open" without warning.
   * (changeRequests.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. See Resource names
   * (https://cloud.google.com/apis/design/resource_names) for the appropriate
   * value for this field.
   * @param GoogleIamV1TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleIamV1TestIamPermissionsResponse
   * @throws \Google\Service\Exception
   */
  public function testIamPermissions($resource, GoogleIamV1TestIamPermissionsRequest $postBody, $optParams = [])
  {
    $params = ['resource' => $resource, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', [$params], GoogleIamV1TestIamPermissionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsChangeRequests::class, 'Google_Service_CloudDataplex_Resource_ProjectsLocationsChangeRequests');
