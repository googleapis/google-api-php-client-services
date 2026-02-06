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
use Google\Service\CustomerEngagementSuite\Example;
use Google\Service\CustomerEngagementSuite\ListExamplesResponse;

/**
 * The "examples" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cesService = new Google\Service\CustomerEngagementSuite(...);
 *   $examples = $cesService->projects_locations_apps_examples;
 *  </code>
 */
class ProjectsLocationsAppsExamples extends \Google\Service\Resource
{
  /**
   * Creates a new example in the given app. (examples.create)
   *
   * @param string $parent Required. The resource name of the app to create an
   * example in.
   * @param Example $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string exampleId Optional. The ID to use for the example, which
   * will become the final component of the example's resource name. If not
   * provided, a unique ID will be automatically assigned for the example.
   * @return Example
   * @throws \Google\Service\Exception
   */
  public function create($parent, Example $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Example::class);
  }
  /**
   * Deletes the specified example. (examples.delete)
   *
   * @param string $name Required. The resource name of the example to delete.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The current etag of the example. If an etag
   * is not provided, the deletion will overwrite any concurrent changes. If an
   * etag is provided and does not match the current etag of the example, deletion
   * will be blocked and an ABORTED error will be returned.
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
   * Gets details of the specified example. (examples.get)
   *
   * @param string $name Required. The resource name of the example to retrieve.
   * @param array $optParams Optional parameters.
   * @return Example
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Example::class);
  }
  /**
   * Lists examples in the given app. (examples.listProjectsLocationsAppsExamples)
   *
   * @param string $parent Required. The resource name of the app to list examples
   * from.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter to be applied when listing the
   * examples. See https://google.aip.dev/160 for more details.
   * @opt_param string orderBy Optional. Field to sort by. Only "name" and
   * "create_time" is supported. See https://google.aip.dev/132#ordering for more
   * details.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous list AgentService.ListExamples call.
   * @return ListExamplesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAppsExamples($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListExamplesResponse::class);
  }
  /**
   * Updates the specified example. (examples.patch)
   *
   * @param string $name Identifier. The unique identifier of the example. Format:
   * `projects/{project}/locations/{location}/apps/{app}/examples/{example}`
   * @param Example $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Field mask is used to control which
   * fields get updated. If the mask is not present, all fields will be updated.
   * @return Example
   * @throws \Google\Service\Exception
   */
  public function patch($name, Example $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Example::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAppsExamples::class, 'Google_Service_CustomerEngagementSuite_Resource_ProjectsLocationsAppsExamples');
