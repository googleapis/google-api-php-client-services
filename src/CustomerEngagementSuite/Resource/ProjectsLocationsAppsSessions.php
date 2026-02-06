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

use Google\Service\CustomerEngagementSuite\GenerateChatTokenRequest;
use Google\Service\CustomerEngagementSuite\GenerateChatTokenResponse;
use Google\Service\CustomerEngagementSuite\RunSessionRequest;
use Google\Service\CustomerEngagementSuite\RunSessionResponse;

/**
 * The "sessions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cesService = new Google\Service\CustomerEngagementSuite(...);
 *   $sessions = $cesService->projects_locations_apps_sessions;
 *  </code>
 */
class ProjectsLocationsAppsSessions extends \Google\Service\Resource
{
  /**
   * Generates a session scoped token for chat widget to authenticate with Session
   * APIs. (sessions.generateChatToken)
   *
   * @param string $name Required. The session name to generate the chat token
   * for. Format:
   * projects/{project}/locations/{location}/apps/{app}/sessions/{session}
   * @param GenerateChatTokenRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GenerateChatTokenResponse
   * @throws \Google\Service\Exception
   */
  public function generateChatToken($name, GenerateChatTokenRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('generateChatToken', [$params], GenerateChatTokenResponse::class);
  }
  /**
   * Initiates a single turn interaction with the CES agent within a session.
   * (sessions.runSession)
   *
   * @param string $session Required. The unique identifier of the session.
   * Format:
   * `projects/{project}/locations/{location}/apps/{app}/sessions/{session}`
   * @param RunSessionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return RunSessionResponse
   * @throws \Google\Service\Exception
   */
  public function runSession($session, RunSessionRequest $postBody, $optParams = [])
  {
    $params = ['session' => $session, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('runSession', [$params], RunSessionResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAppsSessions::class, 'Google_Service_CustomerEngagementSuite_Resource_ProjectsLocationsAppsSessions');
