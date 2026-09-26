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

use Google\Service\CustomerEngagementSuite\CancelAssistantTurnRequest;
use Google\Service\CustomerEngagementSuite\CancelAssistantTurnResponse;
use Google\Service\CustomerEngagementSuite\StreamChatAiAssistantRequest;
use Google\Service\CustomerEngagementSuite\StreamChatAiAssistantResponse;

/**
 * The "assistantSessions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cesService = new Google\Service\CustomerEngagementSuite(...);
 *   $assistantSessions = $cesService->projects_locations_apps_assistantSessions;
 *  </code>
 */
class ProjectsLocationsAppsAssistantSessions extends \Google\Service\Resource
{
  /**
   * Cancels the assistant session's in-flight turn, if any: the explicit user
   * stop for a turn running detached from any stream. A cancel landing on a task
   * that does not host the turn preempts it through the session turn epoch
   * instead, ending it within one lease renewal.
   * (assistantSessions.cancelAssistantTurn)
   *
   * @param string $name Required. The assistant session whose in-flight turn to
   * cancel.
   * @param CancelAssistantTurnRequest $postBody
   * @param array $optParams Optional parameters.
   * @return CancelAssistantTurnResponse
   * @throws \Google\Service\Exception
   */
  public function cancelAssistantTurn($name, CancelAssistantTurnRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('cancelAssistantTurn', [$params], CancelAssistantTurnResponse::class);
  }
  /**
   * Runs the Chat AI assistant agent for the specified assistant session in a
   * streaming fashion. (assistantSessions.streamChatAiAssistant)
   *
   * @param string $name Required. The assistant session to be used to run the
   * assistant. Format: `projects/{project}/locations/{location}/apps/{app}/assist
   * antSessions/{assistant_session}`
   * @param StreamChatAiAssistantRequest $postBody
   * @param array $optParams Optional parameters.
   * @return StreamChatAiAssistantResponse
   * @throws \Google\Service\Exception
   */
  public function streamChatAiAssistant($name, StreamChatAiAssistantRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('streamChatAiAssistant', [$params], StreamChatAiAssistantResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAppsAssistantSessions::class, 'Google_Service_CustomerEngagementSuite_Resource_ProjectsLocationsAppsAssistantSessions');
