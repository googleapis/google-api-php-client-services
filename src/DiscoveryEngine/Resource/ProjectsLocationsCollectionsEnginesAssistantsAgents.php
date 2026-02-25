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

use Google\Service\DiscoveryEngine\A2aV1AgentCard;

/**
 * The "agents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $discoveryengineService = new Google\Service\DiscoveryEngine(...);
 *   $agents = $discoveryengineService->projects_locations_collections_engines_assistants_agents;
 *  </code>
 */
class ProjectsLocationsCollectionsEnginesAssistantsAgents extends \Google\Service\Resource
{
  /**
   * GetAgentCard returns the agent card for the agent. (agents.getCard)
   *
   * @param string $tenant Optional tenant, provided as a path parameter.
   * Experimental, might still change for 1.0 release.
   * @param array $optParams Optional parameters.
   * @return A2aV1AgentCard
   * @throws \Google\Service\Exception
   */
  public function getCard($tenant, $optParams = [])
  {
    $params = ['tenant' => $tenant];
    $params = array_merge($params, $optParams);
    return $this->call('getCard', [$params], A2aV1AgentCard::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsCollectionsEnginesAssistantsAgents::class, 'Google_Service_DiscoveryEngine_Resource_ProjectsLocationsCollectionsEnginesAssistantsAgents');
