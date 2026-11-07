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

namespace Google\Service\FirebaseCrashlytics\Resource;

use Google\Service\FirebaseCrashlytics\GenerateAlertPolicyRequest;
use Google\Service\FirebaseCrashlytics\GenerateAlertPolicyResponse;
use Google\Service\FirebaseCrashlytics\ProfilingManagerConfig;

/**
 * The "apps" collection of methods.
 * Typical usage is:
 *  <code>
 *   $firebasecrashlyticsService = new Google\Service\FirebaseCrashlytics(...);
 *   $apps = $firebasecrashlyticsService->projects_apps;
 *  </code>
 */
class ProjectsApps extends \Google\Service\Resource
{
  /**
   * Creates a Cloud Monitoring AlertPolicy for the requested Crashlytics Web
   * alert type and returns the created resource reference.
   * (apps.generateAlertPolicy)
   *
   * @param string $name Required. The firebase application. Format:
   * "projects/{project}/apps/{app_id}".
   * @param GenerateAlertPolicyRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GenerateAlertPolicyResponse
   * @throws \Google\Service\Exception
   */
  public function generateAlertPolicy($name, GenerateAlertPolicyRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateAlertPolicy', [$params], GenerateAlertPolicyResponse::class);
  }
  /**
   * Retrieves the Android Profiling Manager configuration for an app.
   * (apps.getProfilingManagerConfig)
   *
   * @param string $name Required. The resource name of the Profiling Manager
   * configuration to retrieve. Format:
   * "projects/{project}/apps/{app}/profilingManagerConfig".
   * @param array $optParams Optional parameters.
   * @return ProfilingManagerConfig
   * @throws \Google\Service\Exception
   */
  public function getProfilingManagerConfig($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('getProfilingManagerConfig', [$params], ProfilingManagerConfig::class);
  }
  /**
   * Updates the Android Profiling Manager configuration for an app.
   * (apps.updateProfilingManagerConfig)
   *
   * @param string $name Identifier. The resource name of the Profiling Manager
   * configuration. Format:
   * "projects/{project}/apps/{app}/profilingManagerConfig".
   * @param ProfilingManagerConfig $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. The list of ProfilingManagerConfig
   * fields to update (`gcs_bucket`, `heap_dump_collection_enabled`). If omitted,
   * all populated (non-default) fields are updated; specify an explicit
   * `update_mask` (or `*`) when clearing a field to its default value (such as
   * `""` or `false`).
   * @return ProfilingManagerConfig
   * @throws \Google\Service\Exception
   */
  public function updateProfilingManagerConfig($name, ProfilingManagerConfig $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('updateProfilingManagerConfig', [$params], ProfilingManagerConfig::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsApps::class, 'Google_Service_FirebaseCrashlytics_Resource_ProjectsApps');
