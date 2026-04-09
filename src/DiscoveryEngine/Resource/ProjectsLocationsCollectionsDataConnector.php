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

use Google\Service\DiscoveryEngine\GoogleApiHttpBody;

/**
 * The "dataConnector" collection of methods.
 * Typical usage is:
 *  <code>
 *   $discoveryengineService = new Google\Service\DiscoveryEngine(...);
 *   $dataConnector = $discoveryengineService->projects_locations_collections_dataConnector;
 *  </code>
 */
class ProjectsLocationsCollectionsDataConnector extends \Google\Service\Resource
{
  /**
   * ServeMcpDeleteRequest serves a MCP DELETE request. (dataConnector.mcp)
   *
   * @param string $projectsId
   * @param string $locationsId
   * @param string $collectionsId
   * @param array $optParams Optional parameters.
   *
   * @opt_param string contentType The HTTP Content-Type header value specifying
   * the content type of the body.
   * @opt_param string data The HTTP request/response body as raw binary.
   * @opt_param object extensions Application specific response metadata. Must be
   * set in the first response for streaming APIs.
   * @return GoogleApiHttpBody
   * @throws \Google\Service\Exception
   */
  public function mcp($projectsId, $locationsId, $collectionsId, $optParams = [])
  {
    $params = ['projectsId' => $projectsId, 'locationsId' => $locationsId, 'collectionsId' => $collectionsId];
    $params = array_merge($params, $optParams);
    return $this->call('mcp', [$params], GoogleApiHttpBody::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsCollectionsDataConnector::class, 'Google_Service_DiscoveryEngine_Resource_ProjectsLocationsCollectionsDataConnector');
