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

use Google\Service\Aiplatform\GoogleCloudAiplatformV1ExecuteSandboxEnvironmentRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ExecuteSandboxEnvironmentResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListSandboxEnvironmentsResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1SandboxEnvironment;
use Google\Service\Aiplatform\GoogleLongrunningOperation;

/**
 * The "sandboxEnvironments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $sandboxEnvironments = $aiplatformService->projects_locations_reasoningEngines_sandboxEnvironments;
 *  </code>
 */
class ProjectsLocationsReasoningEnginesSandboxEnvironments extends \Google\Service\Resource
{
  /**
   * Creates a SandboxEnvironment in a given reasoning engine.
   * (sandboxEnvironments.create)
   *
   * @param string $parent Required. The resource name of the reasoning engine to
   * create the SandboxEnvironment in. Format: `projects/{project}/locations/{loca
   * tion}/reasoningEngines/{reasoning_engine}`.
   * @param GoogleCloudAiplatformV1SandboxEnvironment $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudAiplatformV1SandboxEnvironment $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes the specific SandboxEnvironment. (sandboxEnvironments.delete)
   *
   * @param string $name Required. The resource name of the SandboxEnvironment to
   * delete. Format: `projects/{project}/locations/{location}/reasoningEngines/{re
   * asoning_engine}/sandboxEnvironments/{sandbox_environment}`
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
   * Executes using a sandbox environment. (sandboxEnvironments.execute)
   *
   * @param string $name Required. The resource name of the sandbox environment to
   * execute. Format: `projects/{project}/locations/{location}/reasoningEngines/{r
   * easoning_engine}/sandboxEnvironments/{sandbox_environment}`
   * @param GoogleCloudAiplatformV1ExecuteSandboxEnvironmentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1ExecuteSandboxEnvironmentResponse
   * @throws \Google\Service\Exception
   */
  public function execute($name, GoogleCloudAiplatformV1ExecuteSandboxEnvironmentRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('execute', [$params], GoogleCloudAiplatformV1ExecuteSandboxEnvironmentResponse::class);
  }
  /**
   * Gets details of the specific SandboxEnvironment. (sandboxEnvironments.get)
   *
   * @param string $name Required. The resource name of the sandbox environment.
   * Format: `projects/{project}/locations/{location}/reasoningEngines/{reasoning_
   * engine}/sandboxEnvironments/{sandbox_environment}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1SandboxEnvironment
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1SandboxEnvironment::class);
  }
  /**
   * Lists SandboxEnvironments in a given reasoning engine. (sandboxEnvironments.l
   * istProjectsLocationsReasoningEnginesSandboxEnvironments)
   *
   * @param string $parent Required. The resource name of the reasoning engine to
   * list sandbox environments from. Format:
   * `projects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. The standard list filter. More detail in
   * [AIP-160](https://google.aip.dev/160).
   * @opt_param int pageSize Optional. The maximum number of SandboxEnvironments
   * to return. The service may return fewer than this value. If unspecified, at
   * most 100 SandboxEnvironments will be returned.
   * @opt_param string pageToken Optional. The standard list page token, received
   * from a previous `ListSandboxEnvironments` call. Provide this to retrieve the
   * subsequent page.
   * @return GoogleCloudAiplatformV1ListSandboxEnvironmentsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsReasoningEnginesSandboxEnvironments($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListSandboxEnvironmentsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsReasoningEnginesSandboxEnvironments::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsReasoningEnginesSandboxEnvironments');
