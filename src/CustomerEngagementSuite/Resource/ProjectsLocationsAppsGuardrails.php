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
use Google\Service\CustomerEngagementSuite\Guardrail;
use Google\Service\CustomerEngagementSuite\ListGuardrailsResponse;

/**
 * The "guardrails" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cesService = new Google\Service\CustomerEngagementSuite(...);
 *   $guardrails = $cesService->projects_locations_apps_guardrails;
 *  </code>
 */
class ProjectsLocationsAppsGuardrails extends \Google\Service\Resource
{
  /**
   * Creates a new guardrail in the given app. (guardrails.create)
   *
   * @param string $parent Required. The resource name of the app to create a
   * guardrail in.
   * @param Guardrail $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string guardrailId Optional. The ID to use for the guardrail,
   * which will become the final component of the guardrail's resource name. If
   * not provided, a unique ID will be automatically assigned for the guardrail.
   * @return Guardrail
   * @throws \Google\Service\Exception
   */
  public function create($parent, Guardrail $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Guardrail::class);
  }
  /**
   * Deletes the specified guardrail. (guardrails.delete)
   *
   * @param string $name Required. The resource name of the guardrail to delete.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The current etag of the guardrail. If an
   * etag is not provided, the deletion will overwrite any concurrent changes. If
   * an etag is provided and does not match the current etag of the guardrail,
   * deletion will be blocked and an ABORTED error will be returned.
   * @opt_param bool force Optional. Indicates whether to forcefully delete the
   * guardrail, even if it is still referenced by app/agents. * If `force =
   * false`, the deletion fails if any apps/agents still reference the guardrail.
   * * If `force = true`, all existing references from apps/agents will be removed
   * and the guardrail will be deleted.
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
   * Gets details of the specified guardrail. (guardrails.get)
   *
   * @param string $name Required. The resource name of the guardrail to retrieve.
   * @param array $optParams Optional parameters.
   * @return Guardrail
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Guardrail::class);
  }
  /**
   * Lists guardrails in the given app.
   * (guardrails.listProjectsLocationsAppsGuardrails)
   *
   * @param string $parent Required. The resource name of the app to list
   * guardrails from.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter to be applied when listing the
   * guardrails. See https://google.aip.dev/160 for more details.
   * @opt_param string orderBy Optional. Field to sort by. Only "name" and
   * "create_time" is supported. See https://google.aip.dev/132#ordering for more
   * details.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous list AgentService.ListGuardrails call.
   * @return ListGuardrailsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAppsGuardrails($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListGuardrailsResponse::class);
  }
  /**
   * Updates the specified guardrail. (guardrails.patch)
   *
   * @param string $name Identifier. The unique identifier of the guardrail.
   * Format:
   * `projects/{project}/locations/{location}/apps/{app}/guardrails/{guardrail}`
   * @param Guardrail $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Field mask is used to control which
   * fields get updated. If the mask is not present, all fields will be updated.
   * @return Guardrail
   * @throws \Google\Service\Exception
   */
  public function patch($name, Guardrail $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Guardrail::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAppsGuardrails::class, 'Google_Service_CustomerEngagementSuite_Resource_ProjectsLocationsAppsGuardrails');
