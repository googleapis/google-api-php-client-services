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

namespace Google\Service\NetworkServices\Resource;

use Google\Service\NetworkServices\AgentGateway;
use Google\Service\NetworkServices\ListAgentGatewaysResponse;
use Google\Service\NetworkServices\Operation;

/**
 * The "agentGateways" collection of methods.
 * Typical usage is:
 *  <code>
 *   $networkservicesService = new Google\Service\NetworkServices(...);
 *   $agentGateways = $networkservicesService->projects_locations_agentGateways;
 *  </code>
 */
class ProjectsLocationsAgentGateways extends \Google\Service\Resource
{
  /**
   * Creates a new AgentGateway in a given project and location.
   * (agentGateways.create)
   *
   * @param string $parent Required. The parent resource of the AgentGateway. Must
   * be in the format `projects/locations`.
   * @param AgentGateway $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string agentGatewayId Required. Short name of the AgentGateway
   * resource to be created.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function create($parent, AgentGateway $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], Operation::class);
  }
  /**
   * Deletes a single AgentGateway. (agentGateways.delete)
   *
   * @param string $name Required. A name of the AgentGateway to delete. Must be
   * in the format `projects/locations/agentGateways`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string etag Optional. The etag of the AgentGateway to delete.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], Operation::class);
  }
  /**
   * Gets details of a single AgentGateway. (agentGateways.get)
   *
   * @param string $name Required. A name of the AgentGateway to get. Must be in
   * the format `projects/locations/agentGateways`.
   * @param array $optParams Optional parameters.
   * @return AgentGateway
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], AgentGateway::class);
  }
  /**
   * Lists AgentGateways in a given project and location.
   * (agentGateways.listProjectsLocationsAgentGateways)
   *
   * @param string $parent Required. The project and location from which the
   * AgentGateways should be listed, specified in the format `projects/locations`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. Maximum number of AgentGateways to return
   * per call.
   * @opt_param string pageToken Optional. The value returned by the last
   * `ListAgentGatewaysResponse` Indicates that this is a continuation of a prior
   * `ListAgentGateways` call, and that the system should return the next page of
   * data.
   * @opt_param bool returnPartialSuccess Optional. If true, allow partial
   * responses for multi-regional Aggregated List requests. Otherwise if one of
   * the locations is down or unreachable, the Aggregated List request will fail.
   * @return ListAgentGatewaysResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAgentGateways($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListAgentGatewaysResponse::class);
  }
  /**
   * Updates the parameters of a single AgentGateway. (agentGateways.patch)
   *
   * @param string $name Identifier. Name of the AgentGateway resource. It matches
   * pattern `projects/locations/agentGateways/`.
   * @param AgentGateway $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string updateMask Optional. Field mask is used to specify the
   * fields to be overwritten in the AgentGateway resource by the update. The
   * fields specified in the update_mask are relative to the resource, not the
   * full request. A field will be overwritten if it is in the mask. If the user
   * does not provide a mask then all fields will be overwritten.
   * @return Operation
   * @throws \Google\Service\Exception
   */
  public function patch($name, AgentGateway $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], Operation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAgentGateways::class, 'Google_Service_NetworkServices_Resource_ProjectsLocationsAgentGateways');
