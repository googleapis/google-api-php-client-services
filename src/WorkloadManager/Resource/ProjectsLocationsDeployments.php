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

namespace Google\Service\WorkloadManager\Resource;

use Google\Service\WorkloadManager\Deployment;
use Google\Service\WorkloadManager\ListDeploymentsResponse;
use Google\Service\WorkloadManager\Operation;

/**
 * The "deployments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $workloadmanagerService = new Google\Service\WorkloadManager(...);
 *   $deployments = $workloadmanagerService->projects_locations_deployments;
 *  </code>
 */
class ProjectsLocationsDeployments extends \Google\Service\Resource
{
  /**
   * Creates a new Deployment in a given project and location.
   * (deployments.create)
   *
   * @param string $parent Required. The resource prefix of the Deployment using
   * the form: `projects/{project_id}/locations/{location_id}`
   * @param Deployment $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string deploymentId Required. Id of the deployment
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The server will guarantee that for at least 60 minutes since the first
   * request. For example, consider a situation where you make an initial request
   * and the request times out. If you make the request again with the same
   * request ID, the server can check if original operation with the same request
   * ID was received, and if so, will ignore the second request. This prevents
   * clients from accidentally creating duplicate commitments. The request ID must
   * be a valid UUID with the exception that zero UUID is not supported
   * (00000000-0000-0000-0000-000000000000).
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, Deployment $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single Deployment. (deployments.delete)
   *
   * @param string $name Required. Name of the resource
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force Optional. If set to true, any actuation will also be
   * deleted. Followed the best practice from https://aip.dev/135#cascading-delete
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
   * Gets details of a single Deployment. (deployments.get)
   *
   * @param string $name Required. Name of the resource. The format will be
   * 'projects/{project_id}/locations/{location_id}/deployments/{deployment_id}'
   * @param array $optParams Optional parameters.
   * @return Deployment
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Deployment::class);
  }
  /**
   * Lists Deployments in a given project and location.
   * (deployments.listProjectsLocationsDeployments)
   *
   * @param string $parent Required. The resource prefix of the Deployment using
   * the form: `projects/{project_id}/locations/{location_id}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter resource follow
   * https://google.aip.dev/160
   * @opt_param string orderBy Optional. Field to sort by. See
   * https://google.aip.dev/132#ordering for more details.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. The maximum value is 1000; values above 1000 will
   * be coerced to 1000.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return.
   * @return ListDeploymentsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsDeployments($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListDeploymentsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsDeployments::class, 'Google_Service_WorkloadManager_Resource_ProjectsLocationsDeployments');
