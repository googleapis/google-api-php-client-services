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

use Google\Service\DiscoveryEngine\A2aV1ListTaskPushNotificationConfigResponse;
use Google\Service\DiscoveryEngine\A2aV1TaskPushNotificationConfig;
use Google\Service\DiscoveryEngine\GoogleProtobufEmpty;

/**
 * The "pushNotificationConfigs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $discoveryengineService = new Google\Service\DiscoveryEngine(...);
 *   $pushNotificationConfigs = $discoveryengineService->projects_locations_collections_engines_assistants_agents_tasks_pushNotificationConfigs;
 *  </code>
 */
class ProjectsLocationsCollectionsEnginesAssistantsAgentsTasksPushNotificationConfigs extends \Google\Service\Resource
{
  /**
   * Set a push notification config for a task. (pushNotificationConfigs.create)
   *
   * @param string $tenant Optional tenant, provided as a path parameter.
   * Experimental, might still change for 1.0 release.
   * @param string $parent Required. The parent task resource for this config.
   * Format: tasks/{task_id}
   * @param A2aV1TaskPushNotificationConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string configId Required. The ID for the new config.
   * @return A2aV1TaskPushNotificationConfig
   * @throws \Google\Service\Exception
   */
  public function create($tenant, $parent, A2aV1TaskPushNotificationConfig $postBody, $optParams = [])
  {
    $params = ['tenant' => $tenant, 'parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], A2aV1TaskPushNotificationConfig::class);
  }
  /**
   * Delete a push notification config for a task.
   * (pushNotificationConfigs.delete)
   *
   * @param string $tenant Optional tenant, provided as a path parameter.
   * Experimental, might still change for 1.0 release.
   * @param string $name The resource name of the config to delete. Format:
   * tasks/{task_id}/pushNotificationConfigs/{config_id}
   * @param array $optParams Optional parameters.
   * @return GoogleProtobufEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($tenant, $name, $optParams = [])
  {
    $params = ['tenant' => $tenant, 'name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleProtobufEmpty::class);
  }
  /**
   * Get a push notification config for a task. (pushNotificationConfigs.get)
   *
   * @param string $tenant Optional tenant, provided as a path parameter.
   * Experimental, might still change for 1.0 release.
   * @param string $name The resource name of the config to retrieve. Format:
   * tasks/{task_id}/pushNotificationConfigs/{config_id}
   * @param array $optParams Optional parameters.
   * @return A2aV1TaskPushNotificationConfig
   * @throws \Google\Service\Exception
   */
  public function get($tenant, $name, $optParams = [])
  {
    $params = ['tenant' => $tenant, 'name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], A2aV1TaskPushNotificationConfig::class);
  }
  /**
   * Get a list of push notifications configured for a task. (pushNotificationConf
   * igs.listProjectsLocationsCollectionsEnginesAssistantsAgentsTasksPushNotificat
   * ionConfigs)
   *
   * @param string $tenant Optional tenant, provided as a path parameter.
   * Experimental, might still change for 1.0 release.
   * @param string $parent The parent task resource. Format: tasks/{task_id}
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize For AIP-158 these fields are present. Usually not
   * used/needed. The maximum number of configurations to return. If unspecified,
   * all configs will be returned.
   * @opt_param string pageToken A page token received from a previous
   * ListTaskPushNotificationConfigRequest call. Provide this to retrieve the
   * subsequent page. When paginating, all other parameters provided to
   * `ListTaskPushNotificationConfigRequest` must match the call that provided the
   * page token.
   * @return A2aV1ListTaskPushNotificationConfigResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsCollectionsEnginesAssistantsAgentsTasksPushNotificationConfigs($tenant, $parent, $optParams = [])
  {
    $params = ['tenant' => $tenant, 'parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], A2aV1ListTaskPushNotificationConfigResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsCollectionsEnginesAssistantsAgentsTasksPushNotificationConfigs::class, 'Google_Service_DiscoveryEngine_Resource_ProjectsLocationsCollectionsEnginesAssistantsAgentsTasksPushNotificationConfigs');
