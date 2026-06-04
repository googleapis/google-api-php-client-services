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

namespace Google\Service\SaaSServiceManagement\Resource;

use Google\Service\SaaSServiceManagement\ListSaasReleasesResponse;
use Google\Service\SaaSServiceManagement\SaasRelease;
use Google\Service\SaaSServiceManagement\SaasservicemgmtEmpty;

/**
 * The "saasReleases" collection of methods.
 * Typical usage is:
 *  <code>
 *   $saasservicemgmtService = new Google\Service\SaaSServiceManagement(...);
 *   $saasReleases = $saasservicemgmtService->projects_locations_saasReleases;
 *  </code>
 */
class ProjectsLocationsSaasReleases extends \Google\Service\Resource
{
  /**
   * Create a new saas release. (saasReleases.create)
   *
   * @param string $parent Required. The parent of the saas release.
   * @param SaasRelease $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string requestId An optional request ID to identify requests.
   * @opt_param string saasReleaseId Required. The ID value for the new saas
   * release.
   * @opt_param bool validateOnly If "validate_only" is set to true, the service
   * will try to validate that this request would succeed, but will not actually
   * make changes.
   * @return SaasRelease
   * @throws \Google\Service\Exception
   */
  public function create($parent, SaasRelease $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], SaasRelease::class);
  }
  /**
   * Delete a single saas release. (saasReleases.delete)
   *
   * @param string $name Required. The resource name of the resource within a
   * service.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag The etag known to the client for the expected state of
   * the saas release.
   * @opt_param string requestId An optional request ID to identify requests.
   * @opt_param bool validateOnly If "validate_only" is set to true, the service
   * will try to validate that this request would succeed, but will not actually
   * make changes.
   * @return SaasservicemgmtEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], SaasservicemgmtEmpty::class);
  }
  /**
   * Retrieve a single saas release. (saasReleases.get)
   *
   * @param string $name Required. The resource name of the resource within a
   * service.
   * @param array $optParams Optional parameters.
   * @return SaasRelease
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], SaasRelease::class);
  }
  /**
   * Retrieve a collection of saas releases.
   * (saasReleases.listProjectsLocationsSaasReleases)
   *
   * @param string $parent Required. The parent of the saas releases.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Filter the list as specified in
   * https://google.aip.dev/160.
   * @opt_param string orderBy Order results as specified in
   * https://google.aip.dev/132.
   * @opt_param int pageSize The maximum number of saas releases to send per page.
   * @opt_param string pageToken The page token: If the next_page_token from a
   * previous response is provided, this request will send the subsequent page.
   * @return ListSaasReleasesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsSaasReleases($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSaasReleasesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsSaasReleases::class, 'Google_Service_SaaSServiceManagement_Resource_ProjectsLocationsSaasReleases');
