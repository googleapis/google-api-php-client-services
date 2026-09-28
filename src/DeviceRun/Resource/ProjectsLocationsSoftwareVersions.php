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

namespace Google\Service\DeviceRun\Resource;

use Google\Service\DeviceRun\CatalogListSoftwareVersionsResponse;
use Google\Service\DeviceRun\CatalogSoftwareVersion;

/**
 * The "softwareVersions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $devicerunService = new Google\Service\DeviceRun(...);
 *   $softwareVersions = $devicerunService->projects_locations_softwareVersions;
 *  </code>
 */
class ProjectsLocationsSoftwareVersions extends \Google\Service\Resource
{
  /**
   * Returns information about a specific software version. (softwareVersions.get)
   *
   * @param string $name Required. The name of the software version. Format:
   * `projects/{project}/locations/global/softwareVersions/{software_version}`.
   * @param array $optParams Optional parameters.
   * @return CatalogSoftwareVersion
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], CatalogSoftwareVersion::class);
  }
  /**
   * Lists all software versions.
   * (softwareVersions.listProjectsLocationsSoftwareVersions)
   *
   * @param string $parent Required. The parent of the collection of software
   * versions. Format: `projects/{project}/locations/global`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. An AIP-160 (https://google.aip.dev/160)
   * filter expression restricting which software versions are returned. An empty
   * filter returns all software versions. Filtering is supported over the
   * `SoftwareVersion` fields, including nested fields via dot-path. Enum and
   * string values must be double-quoted. Examples: * `software_type =
   * "ANDROIDX_TEST_ORCHESTRATOR"` * `software_type = "ANDROIDX_TEST_ORCHESTRATOR"
   * AND is_default = true` * `lifecycle.state = "ACTIVE"` * `version = "1.4.1"`
   * @opt_param int pageSize Optional. The maximum number of software versions to
   * return. The server may return fewer items than this value.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListSoftwareVersions` call. Provide this to receive the subsequent page.
   * When paginating, all other parameters provided to `ListSoftwareVersions` must
   * match the call that provided the page token.
   * @return CatalogListSoftwareVersionsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsSoftwareVersions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], CatalogListSoftwareVersionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsSoftwareVersions::class, 'Google_Service_DeviceRun_Resource_ProjectsLocationsSoftwareVersions');
