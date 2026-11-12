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

namespace Google\Service\CloudRun\Resource;

use Google\Service\CloudRun\GoogleCloudRunV2Instance;
use Google\Service\CloudRun\GoogleCloudRunV2ListInstancesResponse;
use Google\Service\CloudRun\GoogleCloudRunV2StartInstanceRequest;
use Google\Service\CloudRun\GoogleCloudRunV2StopInstanceRequest;
use Google\Service\CloudRun\GoogleIamV1Policy;
use Google\Service\CloudRun\GoogleIamV1SetIamPolicyRequest;
use Google\Service\CloudRun\GoogleIamV1TestIamPermissionsRequest;
use Google\Service\CloudRun\GoogleIamV1TestIamPermissionsResponse;
use Google\Service\CloudRun\GoogleLongrunningOperation;

/**
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $runService = new Google\Service\CloudRun(...);
 *   $instances = $runService->projects_locations_instances;
 *  </code>
 */
class ProjectsLocationsInstances extends \Google\Service\Resource
{
  /**
   * Creates an Instance. (instances.create)
   *
   * @param string $parent Required. The location and project in which this
   * Instance should be created.
   * @param GoogleCloudRunV2Instance $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string instanceId Optional. The unique identifier for the
   * Instance. It must begin with letter, and cannot end with hyphen; must contain
   * fewer than 50 characters. The name of the instance becomes
   * {parent}/instances/{instance_id}. If not provided, the server will generate a
   * unique `instance_id`.
   * @opt_param bool validateOnly Optional. Indicates that the request should be
   * validated and default values populated, without persisting the request or
   * creating any resources.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudRunV2Instance $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes an Instance (instances.delete)
   *
   * @param string $name Required. The name of the Instance to delete.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. A system-generated fingerprint for this
   * version of the resource. May be used to detect modification conflict during
   * updates.
   * @opt_param bool validateOnly Optional. Indicates that the request should be
   * validated without actually deleting any resources.
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
   * Gets an Instance (instances.get)
   *
   * @param string $name Required. The name of the Instance to retrieve.
   * @param array $optParams Optional parameters.
   * @return GoogleCloudRunV2Instance
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudRunV2Instance::class);
  }
  /**
   * Gets the IAM Access Control policy currently in effect for the given
   * Instance. This result does not include any inherited policies.
   * (instances.getIamPolicy)
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
   * Lists Instances. Results are sorted by creation time, descending.
   * (instances.listProjectsLocationsInstances)
   *
   * @param string $parent Required. The location and project to list resources
   * on.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Maximum number of Instances to return in
   * this call.
   * @opt_param string pageToken Optional. A page token received from a previous
   * call to ListInstances. All other parameters must match.
   * @opt_param bool showDeleted Optional. If true, returns deleted (but
   * unexpired) resources along with active ones.
   * @return GoogleCloudRunV2ListInstancesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsInstances($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudRunV2ListInstancesResponse::class);
  }
  /**
   * Updates an Instance. (instances.patch)
   *
   * @param string $name The fully qualified name of this Instance. In
   * `CreateInstanceRequest`, this field is ignored, and instead composed from
   * `CreateInstanceRequest.parent` and `CreateInstanceRequest.instance_id`.
   * @param GoogleCloudRunV2Instance $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool allowMissing Optional. If set to `true`, and if the Instance
   * does not exist, it will create a new one. The caller must have
   * `run.instances.create` permissions if this is set to `true` and the Instance
   * does not exist.
   * @opt_param string updateMask Optional. The list of fields to be updated.
   * @opt_param bool validateOnly Optional. Indicates that the request should be
   * validated and default values populated, without persisting the request or
   * updating any resources.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudRunV2Instance $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Sets the IAM Access control policy for the specified Instance. Overwrites any
   * existing policy. (instances.setIamPolicy)
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
   * Starts an Instance. (instances.start)
   *
   * @param string $name Required. The name of the Instance to start.
   * @param GoogleCloudRunV2StartInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function start($name, GoogleCloudRunV2StartInstanceRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('start', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Stops an Instance. (instances.stop)
   *
   * @param string $name Required. The name of the Instance to stop.
   * @param GoogleCloudRunV2StopInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function stop($name, GoogleCloudRunV2StopInstanceRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('stop', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Returns permissions that a caller has on the specified Instance. There are no
   * permissions required for making this API call. (instances.testIamPermissions)
   *
   * @param string $resource REQUIRED: The resource for which the policy detail is
   * being requested. See [Resource
   * names](https://cloud.google.com/apis/design/resource_names) for the
   * appropriate value for this field.
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
class_alias(ProjectsLocationsInstances::class, 'Google_Service_CloudRun_Resource_ProjectsLocationsInstances');
