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

use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListSandboxEnvironmentTemplatesResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1SandboxEnvironmentTemplate;
use Google\Service\Aiplatform\GoogleLongrunningOperation;

/**
 * The "sandboxEnvironmentTemplates" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $sandboxEnvironmentTemplates = $aiplatformService->reasoningEngines_sandboxEnvironmentTemplates;
 *  </code>
 */
class ReasoningEnginesSandboxEnvironmentTemplates extends \Google\Service\Resource
{
  /**
   * Creates a SandboxEnvironmentTemplate in a given reasoning engine.
   * (sandboxEnvironmentTemplates.create)
   *
   * @param string $parent Required. The resource name of the reasoning engine to
   * create the SandboxEnvironmentTemplate in. Format: `projects/{project}/locatio
   * ns/{location}/reasoningEngines/{reasoning_engine}`.
   * @param GoogleCloudAiplatformV1SandboxEnvironmentTemplate $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudAiplatformV1SandboxEnvironmentTemplate $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes the specific SandboxEnvironmentTemplate.
   * (sandboxEnvironmentTemplates.delete)
   *
   * @param string $name Required. The resource name of the
   * SandboxEnvironmentTemplate to delete. Format: `projects/{project}/locations/{
   * location}/reasoningEngines/{reasoning_engine}/sandboxEnvironmentTemplates/{sa
   * ndbox_environment_template}`
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
   * Gets details of the specific SandboxEnvironmentTemplate.
   * (sandboxEnvironmentTemplates.get)
   *
   * @param string $name Required. The resource name of the sandbox environment
   * template. Format: `projects/{project}/locations/{location}/reasoningEngines/{
   * reasoning_engine}/sandboxEnvironmentTemplates/{sandbox_environment_template}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1SandboxEnvironmentTemplate
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1SandboxEnvironmentTemplate::class);
  }
  /**
   * Lists SandboxEnvironmentTemplates in a given reasoning engine.
   * (sandboxEnvironmentTemplates.listReasoningEnginesSandboxEnvironmentTemplates)
   *
   * @param string $parent Required. The resource name of the reasoning engine to
   * list sandbox environment templates from. Format:
   * `projects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. The standard list filter. More detail in
   * [AIP-160](https://google.aip.dev/160).
   * @opt_param int pageSize Optional. The maximum number of
   * SandboxEnvironmentTemplates to return. The service may return fewer than this
   * value. If unspecified, at most 100 SandboxEnvironmentTemplates will be
   * returned.
   * @opt_param string pageToken Optional. The standard list page token, received
   * from a previous `ListSandboxEnvironmentTemplates` call. Provide this to
   * retrieve the subsequent page.
   * @return GoogleCloudAiplatformV1ListSandboxEnvironmentTemplatesResponse
   * @throws \Google\Service\Exception
   */
  public function listReasoningEnginesSandboxEnvironmentTemplates($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListSandboxEnvironmentTemplatesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReasoningEnginesSandboxEnvironmentTemplates::class, 'Google_Service_Aiplatform_Resource_ReasoningEnginesSandboxEnvironmentTemplates');
