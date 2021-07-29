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

namespace Google\Service\SQLAdmin\Resource;

use Google\Service\SQLAdmin\Operation;
use Google\Service\SQLAdmin\SqlInstancesRescheduleMaintenanceRequestBody;
use Google\Service\SQLAdmin\SqlInstancesVerifyExternalSyncSettingsResponse;

/**
 * The "instances" collection of methods.
 * Typical usage is:
 *  <code>
 *   $sqladminService = new Google\Service\SQLAdmin(...);
 *   $instances = $sqladminService->instances;
 *  </code>
 */
class ProjectsInstances extends \Google\Service\Resource
{
  /**
   * Reschedules the maintenance on the given instance.
   * (instances.rescheduleMaintenance)
   *
   * @param string $project ID of the project that contains the instance.
   * @param string $instance Cloud SQL instance ID. This does not include the
   * project ID.
   * @param SqlInstancesRescheduleMaintenanceRequestBody $postBody
   * @param array $optParams Optional parameters.
   * @return Operation
   */
  public function rescheduleMaintenance($project, $instance, SqlInstancesRescheduleMaintenanceRequestBody $postBody, $optParams = [])
  {
    $params = ['project' => $project, 'instance' => $instance, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('rescheduleMaintenance', [$params], Operation::class);
  }
  /**
   * Start External primary instance migration. (instances.startExternalSync)
   *
   * @param string $project ID of the project that contains the instance.
   * @param string $instance Cloud SQL instance ID. This does not include the
   * project ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool skipVerification Whether to skip the verification step
   * (VESS).
   * @opt_param string syncMode External sync mode.
   * @return Operation
   */
  public function startExternalSync($project, $instance, $optParams = [])
  {
    $params = ['project' => $project, 'instance' => $instance];
    $params = array_merge($params, $optParams);
    return $this->call('startExternalSync', [$params], Operation::class);
  }
  /**
   * Verify External primary instance external sync settings.
   * (instances.verifyExternalSyncSettings)
   *
   * @param string $project Project ID of the project that contains the instance.
   * @param string $instance Cloud SQL instance ID. This does not include the
   * project ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string syncMode External sync mode
   * @opt_param bool verifyConnectionOnly Flag to enable verifying connection only
   * @return SqlInstancesVerifyExternalSyncSettingsResponse
   */
  public function verifyExternalSyncSettings($project, $instance, $optParams = [])
  {
    $params = ['project' => $project, 'instance' => $instance];
    $params = array_merge($params, $optParams);
    return $this->call('verifyExternalSyncSettings', [$params], SqlInstancesVerifyExternalSyncSettingsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsInstances::class, 'Google_Service_SQLAdmin_Resource_ProjectsInstances');
