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

namespace Google\Service\WorkloadManager\Resource;

use Google\Service\WorkloadManager\WorkloadProfileHealth;

/**
 * The "health" collection of methods.
 * Typical usage is:
 *  <code>
 *   $workloadmanagerService = new Google\Service\WorkloadManager(...);
 *   $health = $workloadmanagerService->projects_locations_discoveredprofiles_health;
 *  </code>
 */
class ProjectsLocationsDiscoveredprofilesHealth extends \Google\Service\Resource
{
  /**
   * Get the health of a discovered workload profile. (health.get)
   *
   * @param string $name Required. The resource name
   * @param array $optParams Optional parameters.
   * @return WorkloadProfileHealth
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], WorkloadProfileHealth::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsDiscoveredprofilesHealth::class, 'Google_Service_WorkloadManager_Resource_ProjectsLocationsDiscoveredprofilesHealth');
