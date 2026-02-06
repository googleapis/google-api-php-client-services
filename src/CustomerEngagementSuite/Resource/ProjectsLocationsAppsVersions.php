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

use Google\Service\CustomerEngagementSuite\AppVersion;
use Google\Service\CustomerEngagementSuite\CesEmpty;
use Google\Service\CustomerEngagementSuite\ListAppVersionsResponse;
use Google\Service\CustomerEngagementSuite\Operation;
use Google\Service\CustomerEngagementSuite\RestoreAppVersionRequest;

/**
 * The "versions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cesService = new Google\Service\CustomerEngagementSuite(...);
 *   $versions = $cesService->projects_locations_apps_versions;
 *  </code>
 */
class ProjectsLocationsAppsVersions extends \Google\Service\Resource
{
  /**
   * Creates a new app version in the given app. (versions.create)
   *
   * @param string $parent Required. The resource name of the app to create an app
   * version in.
   * @param AppVersion $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string appVersionId Optional. The ID to use for the app version,
   * which will become the final component of the app version's resource name. If
   * not provided, a unique ID will be automatically assigned for the app version.
   * @return AppVersion
   * @throws \Google\Service\Exception
   */
  public function create($parent, AppVersion $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], AppVersion::class);
  }
  /**
   * Deletes the specified app version. (versions.delete)
   *
   * @param string $name Required. The resource name of the app version to delete.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The current etag of the app version. If an
   * etag is not provided, the deletion will overwrite any concurrent changes. If
   * an etag is provided and does not match the current etag of the app version,
   * deletion will be blocked and an ABORTED error will be returned.
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
   * Gets details of the specified app version. (versions.get)
   *
   * @param string $name Required. The resource name of the app version to
   * retrieve.
   * @param array $optParams Optional parameters.
   * @return AppVersion
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AppVersion::class);
  }
  /**
   * Lists all app versions in the given app.
   * (versions.listProjectsLocationsAppsVersions)
   *
   * @param string $parent Required. The resource name of the app to list app
   * versions from.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter to be applied when listing the app
   * versions. See https://google.aip.dev/160 for more details.
   * @opt_param string orderBy Optional. Field to sort by. Only "name" and
   * "create_time" is supported. See https://google.aip.dev/132#ordering for more
   * details.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous list AgentService.ListAppVersions call.
   * @return ListAppVersionsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAppsVersions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAppVersionsResponse::class);
  }
  /**
   * Restores the specified app version. This will create a new app version from
   * the current draft app and overwrite the current draft with the specified app
   * version. (versions.restore)
   *
   * @param string $name Required. The resource name of the app version to
   * restore.
   * @param RestoreAppVersionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function restore($name, RestoreAppVersionRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('restore', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAppsVersions::class, 'Google_Service_CustomerEngagementSuite_Resource_ProjectsLocationsAppsVersions');
