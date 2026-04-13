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

use Google\Service\Aiplatform\GoogleApiHttpBody;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1QueryReasoningEngineRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1QueryReasoningEngineResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1StreamQueryReasoningEngineRequest;

/**
 * The "runtimeRevisions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $runtimeRevisions = $aiplatformService->projects_locations_reasoningEngines_runtimeRevisions;
 *  </code>
 */
class ProjectsLocationsReasoningEnginesRuntimeRevisions extends \Google\Service\Resource
{
  /**
   * Queries using a reasoning engine. (runtimeRevisions.query)
   *
   * @param string $name Required. The name of the ReasoningEngine resource to
   * use. Format:
   * `projects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}`
   * @param GoogleCloudAiplatformV1QueryReasoningEngineRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1QueryReasoningEngineResponse
   * @throws \Google\Service\Exception
   */
  public function query($name, GoogleCloudAiplatformV1QueryReasoningEngineRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('query', [$params], GoogleCloudAiplatformV1QueryReasoningEngineResponse::class);
  }
  /**
   * Streams queries using a reasoning engine. (runtimeRevisions.streamQuery)
   *
   * @param string $name Required. The name of the ReasoningEngine resource to
   * use. Format:
   * `projects/{project}/locations/{location}/reasoningEngines/{reasoning_engine}`
   * @param GoogleCloudAiplatformV1StreamQueryReasoningEngineRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleApiHttpBody
   * @throws \Google\Service\Exception
   */
  public function streamQuery($name, GoogleCloudAiplatformV1StreamQueryReasoningEngineRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('streamQuery', [$params], GoogleApiHttpBody::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsReasoningEnginesRuntimeRevisions::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsReasoningEnginesRuntimeRevisions');
