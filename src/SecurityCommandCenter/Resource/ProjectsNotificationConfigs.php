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

use Google\Service\SecurityCommandCenter\ListNotificationConfigsResponse;
use Google\Service\SecurityCommandCenter\NotificationConfig;
use Google\Service\SecurityCommandCenter\SecuritycenterEmpty;

/**
 * The "notificationConfigs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $securitycenterService = new Google\Service\SecurityCommandCenter(...);
 *   $notificationConfigs = $securitycenterService->projects_notificationConfigs;
 *  </code>
 */
class ProjectsNotificationConfigs extends \Google\Service\Resource
{
  /**
   * (notificationConfigs.create)
   *
   * @param string $parent
   * @param NotificationConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string configId
   * @return NotificationConfig
   * @throws \Google\Service\Exception
   */
  public function create($parent, NotificationConfig $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], NotificationConfig::class);
  }
  /**
   * (notificationConfigs.delete)
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
   * (notificationConfigs.get)
   *
   * @param string $name
   * @param array $optParams Optional parameters.
   * @return NotificationConfig
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], NotificationConfig::class);
  }
  /**
   * (notificationConfigs.listProjectsNotificationConfigs)
   *
   * @param string $parent
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize
   * @opt_param string pageToken
   * @return ListNotificationConfigsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsNotificationConfigs($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListNotificationConfigsResponse::class);
  }
  /**
   * (notificationConfigs.patch)
   *
   * @param string $name
   * @param NotificationConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask
   * @return NotificationConfig
   * @throws \Google\Service\Exception
   */
  public function patch($name, NotificationConfig $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], NotificationConfig::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsNotificationConfigs::class, 'Google_Service_SecurityCommandCenter_Resource_ProjectsNotificationConfigs');
