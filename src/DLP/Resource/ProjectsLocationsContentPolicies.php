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

namespace Google\Service\DLP\Resource;

use Google\Service\DLP\GooglePrivacyDlpV2ContentPolicy;
use Google\Service\DLP\GooglePrivacyDlpV2CreateContentPolicyRequest;
use Google\Service\DLP\GooglePrivacyDlpV2ListContentPoliciesResponse;
use Google\Service\DLP\GooglePrivacyDlpV2UpdateContentPolicyRequest;
use Google\Service\DLP\GoogleProtobufEmpty;

/**
 * The "contentPolicies" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dlpService = new Google\Service\DLP(...);
 *   $contentPolicies = $dlpService->projects_locations_contentPolicies;
 *  </code>
 */
class ProjectsLocationsContentPolicies extends \Google\Service\Resource
{
  /**
   * Create a ContentPolicy. (contentPolicies.create)
   *
   * @param string $parent Required. Parent resource name. The format of this
   * value varies depending on the scope of the request (project or organization):
   * + Projects scope: `projects/{project_id}/locations/{location_id}` +
   * Organizations scope: `organizations/{org_id}/locations/{location_id}`
   * @param GooglePrivacyDlpV2CreateContentPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GooglePrivacyDlpV2ContentPolicy
   * @throws \Google\Service\Exception
   */
  public function create($parent, GooglePrivacyDlpV2CreateContentPolicyRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GooglePrivacyDlpV2ContentPolicy::class);
  }
  /**
   * Delete a ContentPolicy. (contentPolicies.delete)
   *
   * @param string $name Required. Resource name of the ContentPolicy to be
   * deleted, in the format:
   * `projects/{project}/locations/{location}/contentPolicies/{content_policy}`.
   * @param array $optParams Optional parameters.
   * @return GoogleProtobufEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleProtobufEmpty::class);
  }
  /**
   * Get a ContentPolicy. (contentPolicies.get)
   *
   * @param string $name Required. Resource name in the format:
   * `projects/{project}/locations/{location}/contentPolicies/{content_policy}`.
   * @param array $optParams Optional parameters.
   * @return GooglePrivacyDlpV2ContentPolicy
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GooglePrivacyDlpV2ContentPolicy::class);
  }
  /**
   * Lists ContentPolicies in a parent.
   * (contentPolicies.listProjectsLocationsContentPolicies)
   *
   * @param string $parent Required. Resource name of the organization or project,
   * for example, `organizations/433245324/locations/europe` or `projects/project-
   * id/locations/asia`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Number of results per page, max 1000.
   * @opt_param string pageToken Optional. Page token from a previous page to
   * return the next set of results. If set, all other request fields must match
   * the original request.
   * @return GooglePrivacyDlpV2ListContentPoliciesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsContentPolicies($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GooglePrivacyDlpV2ListContentPoliciesResponse::class);
  }
  /**
   * Update a ContentPolicy. (contentPolicies.patch)
   *
   * @param string $name Required. Resource name in the format:
   * `projects/{project}/locations/{location}/contentPolicies/{content_policy}`.
   * @param GooglePrivacyDlpV2UpdateContentPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GooglePrivacyDlpV2ContentPolicy
   * @throws \Google\Service\Exception
   */
  public function patch($name, GooglePrivacyDlpV2UpdateContentPolicyRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GooglePrivacyDlpV2ContentPolicy::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsContentPolicies::class, 'Google_Service_DLP_Resource_ProjectsLocationsContentPolicies');
