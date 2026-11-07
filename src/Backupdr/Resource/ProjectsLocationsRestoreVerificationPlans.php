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

use Google\Service\Backupdr\ListRestoreVerificationPlansResponse;
use Google\Service\Backupdr\Operation;
use Google\Service\Backupdr\RestoreVerificationPlan;

/**
 * The "restoreVerificationPlans" collection of methods.
 * Typical usage is:
 *  <code>
 *   $backupdrService = new Google\Service\Backupdr(...);
 *   $restoreVerificationPlans = $backupdrService->projects_locations_restoreVerificationPlans;
 *  </code>
 */
class ProjectsLocationsRestoreVerificationPlans extends \Google\Service\Resource
{
  /**
   * Creates a new RestoreVerificationPlan in a given project and location.
   * (restoreVerificationPlans.create)
   *
   * @param string $parent Required. The `RestoreVerificationPlan` project and
   * location in the format `projects/{project}/locations/{location}`. In Google
   * Cloud Backup and DR locations map to Google Cloud regions, for example **us-
   * central1**.
   * @param RestoreVerificationPlan $postBody
   * @param array $optParams Optional parameters.
   *
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
   * @opt_param string restoreVerificationPlanId Required. The name of the
   * `RestoreVerificationPlan` to create. The name must be unique for the
   * specified project and location. The name must start with a lowercase letter
   * followed by up to 62 lowercase letters, numbers, or hyphens. Pattern,
   * `^[a-z]([-a-z0-9]*[a-z0-9])?$`.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, RestoreVerificationPlan $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single RestoreVerificationPlan. If the `force` flag is set to
   * `true`, any RestoreVerificationPlanAssociations linked to this
   * RestoreVerificationPlan will also be deleted.
   * (restoreVerificationPlans.delete)
   *
   * @param string $name Required. The resource name of the
   * `RestoreVerificationPlan` to delete. Format: `projects/{project}/locations/{l
   * ocation}/restoreVerificationPlans/{restoreVerificationPlan}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool force Optional. If set to true, any
   * RestoreVerificationPlanAssociations linked to this RestoreVerificationPlan
   * will also be deleted.
   * @opt_param string requestId Optional. An optional request ID to identify
   * requests. Specify a unique request ID so that if you must retry your request,
   * the server will know to ignore the request if it has already been completed.
   * The server will guarantee that for at least 60 minutes after the first
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
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], Operation::class);
  }
  /**
   * Gets details of a single RestoreVerificationPlan. Returns the requested
   * RestoreVerificationPlan. (restoreVerificationPlans.get)
   *
   * @param string $name Required. The resource name of the
   * `RestoreVerificationPlan` to retrieve. Format: `projects/{project}/locations/
   * {location}/restoreVerificationPlans/{restoreVerificationPlan}`
   * @param array $optParams Optional parameters.
   * @return RestoreVerificationPlan
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], RestoreVerificationPlan::class);
  }
  /**
   * Lists RestoreVerificationPlans in a given project and location.
   * (restoreVerificationPlans.listProjectsLocationsRestoreVerificationPlans)
   *
   * @param string $parent Required. The project and location for which to
   * retrieve `RestoreVerificationPlans` information. Format:
   * `projects/{project}/locations/{location}`. In Google Cloud Backup and DR,
   * locations map to Google Cloud regions, for example **us-central1**. To
   * retrieve restore verification plans for all locations, use "-" for the
   * `{location}` value.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Field match expression used to filter the
   * results.
   * @opt_param string orderBy Optional. Field by which to sort the results.
   * @opt_param int pageSize Optional. The maximum number of
   * `RestoreVerificationPlans` to return in a single response. If not specified,
   * a default value will be chosen by the service. Note that the response may
   * include a partial list and a caller should only rely on the response's
   * next_page_token to determine if there are more instances left to be queried.
   * @opt_param string pageToken Optional. The value of next_page_token received
   * from a previous `ListRestoreVerificationPlans` call. Provide this to retrieve
   * the subsequent page in a multi-page list of results. When paginating, all
   * other parameters provided to `ListRestoreVerificationPlans` must match the
   * call that provided the page token.
   * @return ListRestoreVerificationPlansResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsRestoreVerificationPlans($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListRestoreVerificationPlansResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsRestoreVerificationPlans::class, 'Google_Service_Backupdr_Resource_ProjectsLocationsRestoreVerificationPlans');
