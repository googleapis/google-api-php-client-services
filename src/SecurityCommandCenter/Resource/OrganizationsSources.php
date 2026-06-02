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

namespace Google\Service\SecurityCommandCenter\Resource;

use Google\Service\SecurityCommandCenter\GetIamPolicyRequest;
use Google\Service\SecurityCommandCenter\ListSourcesResponse;
use Google\Service\SecurityCommandCenter\Policy;
use Google\Service\SecurityCommandCenter\SetIamPolicyRequest;
use Google\Service\SecurityCommandCenter\Source;
use Google\Service\SecurityCommandCenter\TestIamPermissionsRequest;
use Google\Service\SecurityCommandCenter\TestIamPermissionsResponse;

/**
 * The "sources" collection of methods.
 * Typical usage is:
 *  <code>
 *   $securitycenterService = new Google\Service\SecurityCommandCenter(...);
 *   $sources = $securitycenterService->organizations_sources;
 *  </code>
 */
class OrganizationsSources extends \Google\Service\Resource
{
  /**
   * (sources.create)
   *
   * @param string $parent
   * @param Source $postBody
   * @param array $optParams Optional parameters.
   * @return Source
   * @throws \Google\Service\Exception
   */
  public function create($parent, Source $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Source::class);
  }
  /**
   * (sources.get)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return Source
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Source::class);
  }
  /**
   * (sources.getIamPolicy)
   *
   * @param string $resource
   * @param GetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Policy
   * @throws \Google\Service\Exception
   */
  public function getIamPolicy($resource, GetIamPolicyRequest $postBody, $optParams = [])
  {
    $params = ['resource' => $resource, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('getIamPolicy', [$params], Policy::class);
  }
  /**
   * (sources.listOrganizationsSources)
   *
   * @param string $parent
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @return ListSourcesResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsSources($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListSourcesResponse::class);
  }
  /**
   * (sources.patch)
   *
   * @param string $name
   * @param Source $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask
   * @return Source
   * @throws \Google\Service\Exception
   */
  public function patch($name, Source $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Source::class);
  }
  /**
   * (sources.setIamPolicy)
   *
   * @param string $resource
   * @param SetIamPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Policy
   * @throws \Google\Service\Exception
   */
  public function setIamPolicy($resource, SetIamPolicyRequest $postBody, $optParams = [])
  {
    $params = ['resource' => $resource, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('setIamPolicy', [$params], Policy::class);
  }
  /**
   * (sources.testIamPermissions)
   *
   * @param string $resource
   * @param TestIamPermissionsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return TestIamPermissionsResponse
   * @throws \Google\Service\Exception
   */
  public function testIamPermissions($resource, TestIamPermissionsRequest $postBody, $optParams = [])
  {
    $params = ['resource' => $resource, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('testIamPermissions', [$params], TestIamPermissionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsSources::class, 'Google_Service_SecurityCommandCenter_Resource_OrganizationsSources');
