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
   * @param string $parent
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
   * Deletes a Instance (instances.delete)
   *
   * @param string $name
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
   * Gets a Instance (instances.get)
   *
   * @param string $name
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
   * Lists Instances. Results are sorted by creation time, descending.
   * (instances.listProjectsLocationsInstances)
   *
   * @param string $parent Required. The location and project to list resources
   * on. Format: projects/{project}/locations/{location}, where {project} can be
   * project id or number.
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
   * Starts an Instance. (instances.start)
   *
   * @param string $name Required. The name of the Instance to stop. Format:
   * `projects/{project}/locations/{location}/instances/{instance}`, where
   * `{project}` can be project id or number.
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
   * @param string $name Required. The name of the Instance to stop. Format:
   * `projects/{project}/locations/{location}/instances/{instance}`, where
   * `{project}` can be project id or number.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsInstances::class, 'Google_Service_CloudRun_Resource_ProjectsLocationsInstances');
