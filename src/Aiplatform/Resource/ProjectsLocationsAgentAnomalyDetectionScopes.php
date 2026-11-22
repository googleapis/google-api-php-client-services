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

namespace Google\Service\Aiplatform\Resource;

use Google\Service\Aiplatform\GoogleCloudAiplatformV1AgentAnomalyDetectionScope;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListAgentAnomalyDetectionScopesResponse;
use Google\Service\Aiplatform\GoogleLongrunningOperation;

/**
 * The "agentAnomalyDetectionScopes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $agentAnomalyDetectionScopes = $aiplatformService->projects_locations_agentAnomalyDetectionScopes;
 *  </code>
 */
class ProjectsLocationsAgentAnomalyDetectionScopes extends \Google\Service\Resource
{
  /**
   * Creates a new AgentAnomalyDetectionScope.
   * (agentAnomalyDetectionScopes.create)
   *
   * @param string $parent Required. The resource name of the Location to create
   * the AgentAnomalyDetectionScope in. Format:
   * `projects/{project}/locations/{location}`
   * @param GoogleCloudAiplatformV1AgentAnomalyDetectionScope $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string agentAnomalyDetectionScopeId Required. The ID to use for
   * the AgentAnomalyDetectionScope, which will become the final component of the
   * AgentAnomalyDetectionScope's resource name. This value should be 1-63
   * characters, and valid characters are /[a-z]([a-z0-9-]{0,61}[a-z0-9])?/.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function create($parent, GoogleCloudAiplatformV1AgentAnomalyDetectionScope $postBody, $optParams = [])
  {
    $params = ['parent' => $parent, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('create', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Deletes a specific AgentAnomalyDetectionScope.
   * (agentAnomalyDetectionScopes.delete)
   *
   * @param string $name Required. The name of the AgentAnomalyDetectionScope
   * resource to be deleted. Format: `projects/{project}/locations/{location}/agen
   * tAnomalyDetectionScopes/{agent_anomaly_detection_scope}`
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function delete($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('delete', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Gets the details of a specific AgentAnomalyDetectionScope.
   * (agentAnomalyDetectionScopes.get)
   *
   * @param string $name Required. The name of the AgentAnomalyDetectionScope
   * resource. Format: `projects/{project}/locations/{location}/agentAnomalyDetect
   * ionScopes/{agent_anomaly_detection_scope}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1AgentAnomalyDetectionScope
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1AgentAnomalyDetectionScope::class);
  }
  /**
   * Lists AgentAnomalyDetectionScopes in a Location. (agentAnomalyDetectionScopes
   * .listProjectsLocationsAgentAnomalyDetectionScopes)
   *
   * @param string $parent Required. The resource name of the Location to list the
   * AgentAnomalyDetectionScopes from. Format:
   * `projects/{project}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The standard list page size. The maximum
   * value is 100; values above 100 will be coerced to 100. If unspecified, at
   * most 10 AgentAnomalyDetectionScopes will be returned.
   * @opt_param string pageToken Optional. The standard list page token.
   * @return GoogleCloudAiplatformV1ListAgentAnomalyDetectionScopesResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsAgentAnomalyDetectionScopes($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListAgentAnomalyDetectionScopesResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsAgentAnomalyDetectionScopes::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsAgentAnomalyDetectionScopes');
