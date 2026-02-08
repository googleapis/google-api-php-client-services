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

use Google\Service\Aiplatform\GoogleApiHttpBody;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ExecuteCodeRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ExecuteCodeResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListReasoningEnginesResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1QueryReasoningEngineRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1QueryReasoningEngineResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ReasoningEngine;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1StreamQueryReasoningEngineRequest;
use Google\Service\Aiplatform\GoogleIamV1Policy;
use Google\Service\Aiplatform\GoogleIamV1SetIamPolicyRequest;
use Google\Service\Aiplatform\GoogleIamV1TestIamPermissionsResponse;
use Google\Service\Aiplatform\GoogleLongrunningOperation;

/**
 * The "reasoningEngines" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $reasoningEngines = $aiplatformService->projects_locations_reasoningEngines;
 *  </code>
 */
class ProjectsLocationsReasoningEngines extends \Google\Service\Resource
{
  /**
   * Creates a reasoning engine. (reasoningEngines.create)
   *
   * @param string $parent Required. The resource name of the Location to create
   * the ReasoningEngine in. Format: `projects/{project}/locations/{location}`
   * @param GoogleCloudAiplatformV1ReasoningEngine $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudAiplatformV1ReasoningEngine $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes a reasoning engine. (reasoningEngines.delete)
   *
   * @param string $name Required. The name of the ReasoningEngine resource to be
   * deleted. Format:
   * `projects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force Optional. If set to true, child resources of this
   * reasoning engine will also be deleted. Otherwise, the request will fail with
   * FAILED_PRECONDITION error when the reasoning engine has undeleted child
   * resources.
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
   * Executes code statelessly. (reasoningEngines.executeCode)
   *
   * @param string $name Required. The resource name of the sandbox environment to
   * execute. Format:
   * `projects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}`
   * @param GoogleCloudAiplatformV1ExecuteCodeRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1ExecuteCodeResponse
   * @throws \Google\Service\Exception
   */
  public function executeCode($name, GoogleCloudAiplatformV1ExecuteCodeRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('executeCode', [$params], GoogleCloudAiplatformV1ExecuteCodeResponse::class);
  }
  /**
   * Gets a reasoning engine. (reasoningEngines.get)
   *
   * @param string $name Required. The name of the ReasoningEngine resource.
   * Format:
   * `projects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1ReasoningEngine
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1ReasoningEngine::class);
  }
  /**
   * Gets the access control policy for a resource. Returns an empty policy if the
   * resource exists and does not have a policy set.
   * (reasoningEngines.getIamPolicy)
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
   * Lists reasoning engines in a location.
   * (reasoningEngines.listProjectsLocationsReasoningEngines)
   *
   * @param string $parent Required. The resource name of the Location to list the
   * ReasoningEngines from. Format: `projects/{project}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. The standard list filter. More detail in
   * [AIP-160](https://google.aip.dev/160).
   * @opt_param int pageSize Optional. The standard list page size.
   * @opt_param string pageToken Optional. The standard list page token.
   * @return GoogleCloudAiplatformV1ListReasoningEnginesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsReasoningEngines($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListReasoningEnginesResponse::class);
  }
  /**
   * Updates a reasoning engine. (reasoningEngines.patch)
   *
   * @param string $name Identifier. The resource name of the ReasoningEngine.
   * Format:
   * `projects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}`
   * @param GoogleCloudAiplatformV1ReasoningEngine $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Mask specifying which fields to
   * update.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudAiplatformV1ReasoningEngine $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Queries using a reasoning engine. (reasoningEngines.query)
   *
   * @param string $name Required. The name of the ReasoningEngine resource to
   * use. Format:
   * `projects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}`
   * @param GoogleCloudAiplatformV1QueryReasoningEngineRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1QueryReasoningEngineResponse
   * @throws \Google\Service\Exception
   */
  public function query($name, GoogleCloudAiplatformV1QueryReasoningEngineRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('query', [$params], GoogleCloudAiplatformV1QueryReasoningEngineResponse::class);
  }
  /**
   * Sets the access control policy on the specified resource. Replaces any
   * existing policy. Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and
   * `PERMISSION_DENIED` errors. (reasoningEngines.setIamPolicy)
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
   * Streams queries using a reasoning engine. (reasoningEngines.streamQuery)
   *
   * @param string $name Required. The name of the ReasoningEngine resource to
   * use. Format:
   * `projects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}`
   * @param GoogleCloudAiplatformV1StreamQueryReasoningEngineRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleApiHttpBody
   * @throws \Google\Service\Exception
   */
  public function streamQuery($name, GoogleCloudAiplatformV1StreamQueryReasoningEngineRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('streamQuery', [$params], GoogleApiHttpBody::class);
  }
  /**
   * Returns permissions that a caller has on the specified resource. If the
   * resource does not exist, this will return an empty set of permissions, not a
   * `NOT_FOUND` error. Note: This operation is designed to be used for building
   * permission-aware UIs and command-line tools, not for authorization checking.
   * This operation may "fail open" without warning.
   * (reasoningEngines.testIamPermissions)
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
class_alias(ProjectsLocationsReasoningEngines::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsReasoningEngines');
