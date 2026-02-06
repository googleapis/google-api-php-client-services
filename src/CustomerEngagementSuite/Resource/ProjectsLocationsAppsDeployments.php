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

namespace Google\Service\CustomerEngagementSuite\Resource;

use Google\Service\CustomerEngagementSuite\CesEmpty;
use Google\Service\CustomerEngagementSuite\Deployment;
use Google\Service\CustomerEngagementSuite\ListDeploymentsResponse;

/**
 * The "deployments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cesService = new Google\Service\CustomerEngagementSuite(...);
 *   $deployments = $cesService->projects_locations_apps_deployments;
 *  </code>
 */
class ProjectsLocationsAppsDeployments extends \Google\Service\Resource
{
  /**
   * Creates a new deployment in the given app. (deployments.create)
   *
   * @param string $parent Required. The parent app. Format:
   * `projects/{project}/locations/{location}/apps/{app}`
   * @param Deployment $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string deploymentId Optional. The ID to use for the deployment,
   * which will become the final component of the deployment's resource name. If
   * not provided, a unique ID will be automatically assigned for the deployment.
   * @return Deployment
   * @throws \Google\Service\Exception
   */
  public function create($parent, Deployment $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Deployment::class);
  }
  /**
   * Deletes the specified deployment. (deployments.delete)
   *
   * @param string $name Required. The name of the deployment to delete. Format:
   * `projects/{project}/locations/{location}/apps/{app}/deployments/{deployment}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The etag of the deployment. If an etag is
   * provided and does not match the current etag of the deployment, deletion will
   * be blocked and an ABORTED error will be returned.
   * @return CesEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], CesEmpty::class);
  }
  /**
   * Gets details of the specified deployment. (deployments.get)
   *
   * @param string $name Required. The name of the deployment. Format:
   * `projects/{project}/locations/{location}/apps/{app}/deployments/{deployment}`
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
   * Lists deployments in the given app.
   * (deployments.listProjectsLocationsAppsDeployments)
   *
   * @param string $parent Required. The parent app. Format:
   * `projects/{project}/locations/{location}/apps/{app}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy Optional. Field to sort by. Only "name" and
   * "create_time" is supported. See https://google.aip.dev/132#ordering for more
   * details.
   * @opt_param int pageSize Optional. The maximum number of deployments to
   * return. The service may return fewer than this value. If unspecified, at most
   * 50 deployments will be returned. The maximum value is 1000; values above 1000
   * will be coerced to 1000.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListDeployments` call. Provide this to retrieve the subsequent page. When
   * paginating, all other parameters provided to `ListDeployments` must match the
   * call that provided the page token.
   * @return ListDeploymentsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAppsDeployments($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListDeploymentsResponse::class);
  }
  /**
   * Updates the specified deployment. (deployments.patch)
   *
   * @param string $name Identifier. The resource name of the deployment. Format:
   * projects/{project}/locations/{location}/apps/{app}/deployments/{deployment}
   * @param Deployment $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of fields to update.
   * @return Deployment
   * @throws \Google\Service\Exception
   */
  public function patch($name, Deployment $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Deployment::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAppsDeployments::class, 'Google_Service_CustomerEngagementSuite_Resource_ProjectsLocationsAppsDeployments');
