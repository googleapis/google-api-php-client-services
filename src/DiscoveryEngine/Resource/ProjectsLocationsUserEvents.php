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

namespace Google\Service\DiscoveryEngine\Resource;

use Google\Service\DiscoveryEngine\GoogleCloudDiscoveryengineV1UserEvent;

/**
 * The "userEvents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $discoveryengineService = new Google\Service\DiscoveryEngine(...);
 *   $userEvents = $discoveryengineService->projects_locations_userEvents;
 *  </code>
 */
class ProjectsLocationsUserEvents extends \Google\Service\Resource
{
  /**
   * Writes a single user event. (userEvents.write)
   *
   * @param string $parent Required. The parent resource name. If the write user
   * event action is applied in DataStore level, the format is: `projects/{project
   * }/locations/{location}/collections/{collection}/dataStores/{data_store}`. If
   * the write user event action is applied in Location level, for example, the
   * event with Document across multiple DataStore, the format is:
   * `projects/{project}/locations/{location}`.
   * @param GoogleCloudDiscoveryengineV1UserEvent $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDiscoveryengineV1UserEvent
   * @throws \Google\Service\Exception
   */
  public function write($parent, GoogleCloudDiscoveryengineV1UserEvent $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('write', [$params], GoogleCloudDiscoveryengineV1UserEvent::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsUserEvents::class, 'Google_Service_DiscoveryEngine_Resource_ProjectsLocationsUserEvents');
