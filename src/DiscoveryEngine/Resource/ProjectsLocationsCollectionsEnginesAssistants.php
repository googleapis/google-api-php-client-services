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

use Google\Service\DiscoveryEngine\GoogleCloudDiscoveryengineV1Assistant;
use Google\Service\DiscoveryEngine\GoogleCloudDiscoveryengineV1StreamAssistRequest;
use Google\Service\DiscoveryEngine\GoogleCloudDiscoveryengineV1StreamAssistResponse;

/**
 * The "assistants" collection of methods.
 * Typical usage is:
 *  <code>
 *   $discoveryengineService = new Google\Service\DiscoveryEngine(...);
 *   $assistants = $discoveryengineService->projects_locations_collections_engines_assistants;
 *  </code>
 */
class ProjectsLocationsCollectionsEnginesAssistants extends \Google\Service\Resource
{
  /**
   * Gets an Assistant. (assistants.get)
   *
   * @param string $name Required. Resource name of Assistant. Format: `projects/{
   * project}/locations/{location}/collections/{collection}/engines/{engine}/assis
   * tants/{assistant}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDiscoveryengineV1Assistant
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudDiscoveryengineV1Assistant::class);
  }
  /**
   * Updates an Assistant (assistants.patch)
   *
   * @param string $name Immutable. Resource name of the assistant. Format: `proje
   * cts/{project}/locations/{location}/collections/{collection}/engines/{engine}/
   * assistants/{assistant}` It must be a UTF-8 encoded string with a length limit
   * of 1024 characters.
   * @param GoogleCloudDiscoveryengineV1Assistant $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask The list of fields to update.
   * @return GoogleCloudDiscoveryengineV1Assistant
   * @throws \Google\Service\Exception
   */
  public function patch($name, GoogleCloudDiscoveryengineV1Assistant $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GoogleCloudDiscoveryengineV1Assistant::class);
  }
  /**
   * Assists the user with a query in a streaming fashion.
   * (assistants.streamAssist)
   *
   * @param string $name Required. The resource name of the Assistant. Format: `pr
   * ojects/{project}/locations/{location}/collections/{collection}/engines/{engin
   * e}/assistants/{assistant}`
   * @param GoogleCloudDiscoveryengineV1StreamAssistRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleCloudDiscoveryengineV1StreamAssistResponse
   * @throws \Google\Service\Exception
   */
  public function streamAssist($name, GoogleCloudDiscoveryengineV1StreamAssistRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('streamAssist', [$params], GoogleCloudDiscoveryengineV1StreamAssistResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsCollectionsEnginesAssistants::class, 'Google_Service_DiscoveryEngine_Resource_ProjectsLocationsCollectionsEnginesAssistants');
