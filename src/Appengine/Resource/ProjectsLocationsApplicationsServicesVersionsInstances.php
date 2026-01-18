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

namespace Google\Service\Appengine\Resource;

use Google\Service\Appengine\DebugInstanceRequest;
use Google\Service\Appengine\Operation;

/**
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $appengineService = new Google\Service\Appengine(...);
 *   $instances = $appengineService->projects_locations_applications_services_versions_instances;
 *  </code>
 */
class ProjectsLocationsApplicationsServicesVersionsInstances extends \Google\Service\Resource
{
  /**
   * Enables debugging on a VM instance. This allows you to use the SSH command to
   * connect to the virtual machine where the instance lives. While in "debug
   * mode", the instance continues to serve live traffic. You should delete the
   * instance when you are done debugging and then allow the system to take over
   * and determine if another instance should be started.Only applicable for
   * instances in App Engine flexible environment. (instances.debug)
   *
   * @param string $projectsId Part of `name`. Required. Name of the resource
   * requested. Example:
   * apps/myapp/services/default/versions/v1/instances/instance-1.
   * @param string $locationsId Part of `name`. See documentation of `projectsId`.
   * @param string $applicationsId Part of `name`. See documentation of
   * `projectsId`.
   * @param string $servicesId Part of `name`. See documentation of `projectsId`.
   * @param string $versionsId Part of `name`. See documentation of `projectsId`.
   * @param string $instancesId Part of `name`. See documentation of `projectsId`.
   * @param DebugInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function debug($projectsId, $locationsId, $applicationsId, $servicesId, $versionsId, $instancesId, DebugInstanceRequest $postBody, $optParams = [])
  {
    $params = ['projectsId' => $projectsId, 'locationsId' => $locationsId, 'applicationsId' => $applicationsId, 'servicesId' => $servicesId, 'versionsId' => $versionsId, 'instancesId' => $instancesId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('debug', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsApplicationsServicesVersionsInstances::class, 'Google_Service_Appengine_Resource_ProjectsLocationsApplicationsServicesVersionsInstances');
