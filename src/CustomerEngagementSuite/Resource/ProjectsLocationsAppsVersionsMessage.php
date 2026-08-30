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

namespace Google\Service\CustomerEngagementSuite\Resource;

use Google\Service\CustomerEngagementSuite\LfA2aV1SendMessageRequest;
use Google\Service\CustomerEngagementSuite\LfA2aV1SendMessageResponse;
use Google\Service\CustomerEngagementSuite\LfA2aV1StreamResponse;

/**
 * The "message" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cesService = new Google\Service\CustomerEngagementSuite(...);
 *   $message = $cesService->projects_locations_apps_versions_message;
 *  </code>
 */
class ProjectsLocationsAppsVersionsMessage extends \Google\Service\Resource
{
  /**
   * Sends a message to an agent. (message.send)
   *
   * @param string $tenant Optional. Opaque routing identifier. Must match the
   * `tenant` value from the selected `AgentInterface` in the Agent Card when that
   * field is set.
   * @param LfA2aV1SendMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return LfA2aV1SendMessageResponse
   * @throws \Google\Service\Exception
   */
  public function send($tenant, LfA2aV1SendMessageRequest $postBody, $optParams = [])
  {
    $params = ['tenant' => $tenant, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('send', [$params], LfA2aV1SendMessageResponse::class);
  }
  /**
   * Sends a streaming message to an agent, allowing for real-time interaction and
   * status updates. Streaming version of `SendMessage` (message.stream)
   *
   * @param string $tenant Optional. Opaque routing identifier. Must match the
   * `tenant` value from the selected `AgentInterface` in the Agent Card when that
   * field is set.
   * @param LfA2aV1SendMessageRequest $postBody
   * @param array $optParams Optional parameters.
   * @return LfA2aV1StreamResponse
   * @throws \Google\Service\Exception
   */
  public function stream($tenant, LfA2aV1SendMessageRequest $postBody, $optParams = [])
  {
    $params = ['tenant' => $tenant, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('stream', [$params], LfA2aV1StreamResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAppsVersionsMessage::class, 'Google_Service_CustomerEngagementSuite_Resource_ProjectsLocationsAppsVersionsMessage');
