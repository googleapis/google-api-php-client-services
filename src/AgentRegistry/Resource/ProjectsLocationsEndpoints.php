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

namespace Google\Service\AgentRegistry\Resource;

use Google\Service\AgentRegistry\Endpoint;
use Google\Service\AgentRegistry\ListEndpointsResponse;

/**
 * The "endpoints" collection of methods.
 * Typical usage is:
 *  <code>
 *   $agentregistryService = new Google\Service\AgentRegistry(...);
 *   $endpoints = $agentregistryService->projects_locations_endpoints;
 *  </code>
 */
class ProjectsLocationsEndpoints extends \Google\Service\Resource
{
  /**
   * Gets details of a single Endpoint. (endpoints.get)
   *
   * @param string $name Required. The name of the endpoint to retrieve. Format:
   * `projects/{project}/locations/{location}/endpoints/{endpoint}`
   * @param array $optParams Optional parameters.
   * @return Endpoint
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], Endpoint::class);
  }
  /**
   * Lists Endpoints in a given project and location.
   * (endpoints.listProjectsLocationsEndpoints)
   *
   * @param string $parent Required. The project and location to list endpoints
   * in. Expected format: `projects/{project}/locations/{location}`.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. A query string used to filter the list of
   * endpoints returned. The filter expression must follow AIP-160 syntax.
   * Filtering is supported on the `name`, `display_name`, `description`,
   * `version`, and `interfaces` fields. Some examples: * `name =
   * "projects/p1/locations/l1/endpoints/e1"` * `display_name = "my-endpoint"` *
   * `description = "my-endpoint-description"` * `version = "v1"` *
   * `interfaces.transport = "HTTP_JSON"`
   * @opt_param int pageSize Optional. Requested page size. Server may return
   * fewer items than requested. If unspecified, server will pick an appropriate
   * default.
   * @opt_param string pageToken Optional. A token identifying a page of results
   * the server should return.
   * @return ListEndpointsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsEndpoints($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], ListEndpointsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsEndpoints::class, 'Google_Service_AgentRegistry_Resource_ProjectsLocationsEndpoints');
