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

use Google\Service\DiscoveryEngine\A2aV1SendMessageRequest;
use Google\Service\DiscoveryEngine\A2aV1SendMessageResponse;
use Google\Service\DiscoveryEngine\A2aV1StreamResponse;

/**
 * The "message" collection of methods.
 * Typical usage is:
 *  <code>
 *   $discoveryengineService = new Google\Service\DiscoveryEngine(...);
 *   $message = $discoveryengineService->projects_locations_collections_engines_assistants_agents_message;
 *  </code>
 */
class ProjectsLocationsCollectionsEnginesAssistantsAgentsMessage extends \Google\Service\Resource
{
  /**
   * Send a message to the agent. This is a blocking call that will return the
   * task once it is completed, or a LRO if requested. (message.send)
   *
   * @param string $tenant Optional tenant, provided as a path parameter.
   * Experimental, might still change for 1.0 release.
   * @param A2aV1SendMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return A2aV1SendMessageResponse
   * @throws \Google\Service\Exception
   */
  public function send($tenant, A2aV1SendMessageRequest $postBody, $optParams = [])
  {
    $params = ['tenant' => $tenant, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('send', [$params], A2aV1SendMessageResponse::class);
  }
  /**
   * SendStreamingMessage is a streaming call that will return a stream of task
   * update events until the Task is in an interrupted or terminal state.
   * (message.stream)
   *
   * @param string $tenant Optional tenant, provided as a path parameter.
   * Experimental, might still change for 1.0 release.
   * @param A2aV1SendMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return A2aV1StreamResponse
   * @throws \Google\Service\Exception
   */
  public function stream($tenant, A2aV1SendMessageRequest $postBody, $optParams = [])
  {
    $params = ['tenant' => $tenant, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('stream', [$params], A2aV1StreamResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsCollectionsEnginesAssistantsAgentsMessage::class, 'Google_Service_DiscoveryEngine_Resource_ProjectsLocationsCollectionsEnginesAssistantsAgentsMessage');
