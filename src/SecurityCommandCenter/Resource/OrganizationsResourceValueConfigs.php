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

use Google\Service\SecurityCommandCenter\BatchCreateResourceValueConfigsRequest;
use Google\Service\SecurityCommandCenter\BatchCreateResourceValueConfigsResponse;
use Google\Service\SecurityCommandCenter\GoogleCloudSecuritycenterV1ResourceValueConfig;
use Google\Service\SecurityCommandCenter\ListResourceValueConfigsResponse;
use Google\Service\SecurityCommandCenter\SecuritycenterEmpty;

/**
 * The "resourceValueConfigs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $securitycenterService = new Google\Service\SecurityCommandCenter(...);
 *   $resourceValueConfigs = $securitycenterService->organizations_resourceValueConfigs;
 *  </code>
 */
class OrganizationsResourceValueConfigs extends \Google\Service\Resource
{
  /**
   * (resourceValueConfigs.batchCreate)
   *
   * @param string $parent
   * @param BatchCreateResourceValueConfigsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return BatchCreateResourceValueConfigsResponse
   * @throws \Google\Service\Exception
   */
  public function batchCreate($parent, BatchCreateResourceValueConfigsRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('batchCreate', [$params], BatchCreateResourceValueConfigsResponse::class);
  }
  /**
   * (resourceValueConfigs.delete)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return SecuritycenterEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], SecuritycenterEmpty::class);
  }
  /**
   * (resourceValueConfigs.get)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return GoogleCloudSecuritycenterV1ResourceValueConfig
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudSecuritycenterV1ResourceValueConfig::class);
  }
  /**
   * (resourceValueConfigs.listOrganizationsResourceValueConfigs)
   *
   * @param string $parent
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @return ListResourceValueConfigsResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsResourceValueConfigs($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListResourceValueConfigsResponse::class);
  }
  /**
   * (resourceValueConfigs.patch)
   *
   * @param string $name
   * @param GoogleCloudSecuritycenterV1ResourceValueConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask
   * @return GoogleCloudSecuritycenterV1ResourceValueConfig
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudSecuritycenterV1ResourceValueConfig $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudSecuritycenterV1ResourceValueConfig::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsResourceValueConfigs::class, 'Google_Service_SecurityCommandCenter_Resource_OrganizationsResourceValueConfigs');
