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

use Google\Service\SecurityCommandCenter\GroupAssetsRequest;
use Google\Service\SecurityCommandCenter\GroupAssetsResponse;
use Google\Service\SecurityCommandCenter\ListAssetsResponse;
use Google\Service\SecurityCommandCenter\Operation;
use Google\Service\SecurityCommandCenter\RunAssetDiscoveryRequest;
use Google\Service\SecurityCommandCenter\SecurityMarks;

/**
 * The "assets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $securitycenterService = new Google\Service\SecurityCommandCenter(...);
 *   $assets = $securitycenterService->organizations_assets;
 *  </code>
 */
class OrganizationsAssets extends \Google\Service\Resource
{
  /**
   * (assets.group)
   *
   * @param string $parent
   * @param GroupAssetsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GroupAssetsResponse
   * @throws \Google\Service\Exception
   */
  public function group($parent, GroupAssetsRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('group', [$params], GroupAssetsResponse::class);
  }
  /**
   * (assets.listOrganizationsAssets)
   *
   * @param string $parent
   * @param array $optParams Optional parameters.
   *
   * @opt_param string compareDuration
   * @opt_param string fieldMask
   * @opt_param string filter
   * @opt_param string orderBy
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @opt_param string readTime
   * @return ListAssetsResponse
   * @throws \Google\Service\Exception
   */
  public function listOrganizationsAssets($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAssetsResponse::class);
  }
  /**
   * (assets.runDiscovery)
   *
   * @param string $parent
   * @param RunAssetDiscoveryRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function runDiscovery($parent, RunAssetDiscoveryRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('runDiscovery', [$params], Operation::class);
  }
  /**
   * (assets.updateSecurityMarks)
   *
   * @param string $name
   * @param SecurityMarks $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string startTime
   * @opt_param string updateMask
   * @return SecurityMarks
   * @throws \Google\Service\Exception
   */
  public function updateSecurityMarks($name, SecurityMarks $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('updateSecurityMarks', [$params], SecurityMarks::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OrganizationsAssets::class, 'Google_Service_SecurityCommandCenter_Resource_OrganizationsAssets');
