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

use Google\Service\SecurityCommandCenter\GoogleCloudSecuritycenterV1MuteConfig;
use Google\Service\SecurityCommandCenter\ListMuteConfigsResponse;
use Google\Service\SecurityCommandCenter\SecuritycenterEmpty;

/**
 * The "muteConfigs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $securitycenterService = new Google\Service\SecurityCommandCenter(...);
 *   $muteConfigs = $securitycenterService->folders_muteConfigs;
 *  </code>
 */
class FoldersMuteConfigs extends \Google\Service\Resource
{
  /**
   * (muteConfigs.create)
   *
   * @param string $parent
   * @param GoogleCloudSecuritycenterV1MuteConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string muteConfigId
   * @return GoogleCloudSecuritycenterV1MuteConfig
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudSecuritycenterV1MuteConfig $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleCloudSecuritycenterV1MuteConfig::class);
  }
  /**
   * (muteConfigs.delete)
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
   * (muteConfigs.get)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return GoogleCloudSecuritycenterV1MuteConfig
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudSecuritycenterV1MuteConfig::class);
  }
  /**
   * (muteConfigs.listFoldersMuteConfigs)
   *
   * @param string $parent
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @return ListMuteConfigsResponse
   * @throws \Google\Service\Exception
   */
  public function listFoldersMuteConfigs($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListMuteConfigsResponse::class);
  }
  /**
   * (muteConfigs.patch)
   *
   * @param string $name
   * @param GoogleCloudSecuritycenterV1MuteConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask
   * @return GoogleCloudSecuritycenterV1MuteConfig
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudSecuritycenterV1MuteConfig $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudSecuritycenterV1MuteConfig::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FoldersMuteConfigs::class, 'Google_Service_SecurityCommandCenter_Resource_FoldersMuteConfigs');
