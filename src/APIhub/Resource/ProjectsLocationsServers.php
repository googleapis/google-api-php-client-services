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

namespace Google\Service\APIhub\Resource;

use Google\Service\APIhub\GoogleCloudApihubV1ConfigureAndDeployServerRequest;
use Google\Service\APIhub\GoogleLongrunningOperation;

/**
 * The "servers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $apihubService = new Google\Service\APIhub(...);
 *   $servers = $apihubService->projects_locations_servers;
 *  </code>
 */
class ProjectsLocationsServers extends \Google\Service\Resource
{
  /**
   * Configures and deploys a given server config for given target. Currently this
   * API supports only deploying MCP server in Apigee X. For mcp server deployment
   * in apigee X, if there is already a mcp proxy deployed, then this method will
   * try to overwrite it by creating new revision i.e. all existing tools will be
   * removed and new set of tools will be deployed.
   * (servers.configureAndDeployServer)
   *
   * @param string $parent Required. Format:
   * `projects/{project}/locations/{location}`
   * @param GoogleCloudApihubV1ConfigureAndDeployServerRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function configureAndDeployServer($parent, GoogleCloudApihubV1ConfigureAndDeployServerRequest $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('configureAndDeployServer', [$params], GoogleLongrunningOperation::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsServers::class, 'Google_Service_APIhub_Resource_ProjectsLocationsServers');
