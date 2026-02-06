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

use Google\Service\CustomerEngagementSuite\Agent;
use Google\Service\CustomerEngagementSuite\CesEmpty;
use Google\Service\CustomerEngagementSuite\ListAgentsResponse;

/**
 * The "agents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cesService = new Google\Service\CustomerEngagementSuite(...);
 *   $agents = $cesService->projects_locations_apps_agents;
 *  </code>
 */
class ProjectsLocationsAppsAgents extends \Google\Service\Resource
{
  /**
   * Creates a new agent in the given app. (agents.create)
   *
   * @param string $parent Required. The resource name of the app to create an
   * agent in.
   * @param Agent $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string agentId Optional. The ID to use for the agent, which will
   * become the final component of the agent's resource name. If not provided, a
   * unique ID will be automatically assigned for the agent.
   * @return Agent
   * @throws \Google\Service\Exception
   */
  public function create($parent, Agent $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Agent::class);
  }
  /**
   * Deletes the specified agent. (agents.delete)
   *
   * @param string $name Required. The resource name of the agent to delete.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The current etag of the agent. If an etag is
   * not provided, the deletion will overwrite any concurrent changes. If an etag
   * is provided and does not match the current etag of the agent, deletion will
   * be blocked and an ABORTED error will be returned.
   * @opt_param bool force Optional. Indicates whether to forcefully delete the
   * agent, even if it is still referenced by other app/agents/examples. * If
   * `force = false`, the deletion fails if other agents/examples reference it. *
   * If `force = true`, delete the agent and remove it from all referencing
   * apps/agents/examples.
   * @return CesEmpty
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], CesEmpty::class);
  }
  /**
   * Gets details of the specified agent. (agents.get)
   *
   * @param string $name Required. The resource name of the agent to retrieve.
   * @param array $optParams Optional parameters.
   * @return Agent
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Agent::class);
  }
  /**
   * Lists agents in the given app. (agents.listProjectsLocationsAppsAgents)
   *
   * @param string $parent Required. The resource name of the app to list agents
   * from.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter to be applied when listing the
   * agents. See https://google.aip.dev/160 for more details.
   * @opt_param string orderBy Optional. Field to sort by. Only "name" and
   * "create_time" is supported. See https://google.aip.dev/132#ordering for more
   * details.
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. The next_page_token value returned from
   * a previous list AgentService.ListAgents call.
   * @return ListAgentsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAppsAgents($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAgentsResponse::class);
  }
  /**
   * Updates the specified agent. (agents.patch)
   *
   * @param string $name Identifier. The unique identifier of the agent. Format:
   * `projects/{project}/locations/{location}/apps/{app}/agents/{agent}`
   * @param Agent $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Field mask is used to control which
   * fields get updated. If the mask is not present, all fields will be updated.
   * @return Agent
   * @throws \Google\Service\Exception
   */
  public function patch($name, Agent $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Agent::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAppsAgents::class, 'Google_Service_CustomerEngagementSuite_Resource_ProjectsLocationsAppsAgents');
