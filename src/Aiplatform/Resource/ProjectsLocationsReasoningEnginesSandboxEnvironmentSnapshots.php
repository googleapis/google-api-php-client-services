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

namespace Google\Service\Aiplatform\Resource;

use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListSandboxEnvironmentSnapshotsResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1SandboxEnvironmentSnapshot;
use Google\Service\Aiplatform\GoogleLongrunningOperation;

/**
 * The "sandboxEnvironmentSnapshots" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $sandboxEnvironmentSnapshots = $aiplatformService->projects_locations_reasoningEngines_sandboxEnvironmentSnapshots;
 *  </code>
 */
class ProjectsLocationsReasoningEnginesSandboxEnvironmentSnapshots extends \Google\Service\Resource
{
  /**
   * Deletes the specific SandboxEnvironmentSnapshot.
   * (sandboxEnvironmentSnapshots.delete)
   *
   * @param string $name Required. The resource name of the
   * SandboxEnvironmentSnapshot to delete. Format: `projects/{project}/locations/{
   * location}/reasoningEngines/{reasoning_engine}/sandboxEnvironmentSnapshots/{sa
   * ndbox_environment_snapshot}`
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Gets details of the specific SandboxEnvironmentSnapshot.
   * (sandboxEnvironmentSnapshots.get)
   *
   * @param string $name Required. The resource name of the sandbox environment
   * snapshot. Format: `projects/{project}/locations/{location}/reasoningEngines/{
   * reasoning_engine}/sandboxEnvironmentSnapshots/{sandbox_environment_snapshot}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1SandboxEnvironmentSnapshot
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1SandboxEnvironmentSnapshot::class);
  }
  /**
   * Lists SandboxEnvironmentSnapshots in a given reasoning engine. (sandboxEnviro
   * nmentSnapshots.listProjectsLocationsReasoningEnginesSandboxEnvironmentSnapsho
   * ts)
   *
   * @param string $parent Required. The resource name of the reasoning engine to
   * list sandbox environments from. Format:
   * `projects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. The standard list filter. More detail in
   * [AIP-160](https://google.aip.dev/160).
   * @opt_param int pageSize Optional. The maximum number of
   * SandboxEnvironmentSnapshots to return. The service may return fewer than this
   * value. If unspecified, at most 100 SandboxEnvironmentSnapshots will be
   * returned. Values above 100 will be coerced to 100.
   * @opt_param string pageToken Optional. The standard list page token, received
   * from a previous `ListSandboxEnvironmentSnapshots` call. Provide this to
   * retrieve the subsequent page.
   * @return GoogleCloudAiplatformV1ListSandboxEnvironmentSnapshotsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsReasoningEnginesSandboxEnvironmentSnapshots($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListSandboxEnvironmentSnapshotsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsReasoningEnginesSandboxEnvironmentSnapshots::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsReasoningEnginesSandboxEnvironmentSnapshots');
