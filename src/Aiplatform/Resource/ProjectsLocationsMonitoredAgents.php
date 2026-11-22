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

use Google\Service\Aiplatform\GoogleCloudAiplatformV1ClearTrainingDataRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1DisableMonitoredAgentRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1EnableMonitoredAgentRequest;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListMonitoredAgentsResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1MonitoredAgent;
use Google\Service\Aiplatform\GoogleLongrunningOperation;

/**
 * The "monitoredAgents" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $monitoredAgents = $aiplatformService->projects_locations_monitoredAgents;
 *  </code>
 */
class ProjectsLocationsMonitoredAgents extends \Google\Service\Resource
{
  /**
   * Clears (purges) the trained model artifacts derived from a MonitoredAgent's
   * data. The purged model is rebuilt by the next scheduled training run. To
   * clear every MonitoredAgent in a location's scope, use the `-` wildcard agent
   * segment for the name field:
   * `projects/{project}/locations/{location}/monitoredAgents/-` This is the on-
   * demand data-deletion path for customers who have deleted the underlying logs
   * / observability data a model was trained on. It deletes only the derived
   * model artifacts in the tenant project (it does NOT delete the scope, tenant
   * project, or monitoring). To stop monitoring an agent entirely, disable it via
   * DisableMonitoredAgent. See go/aad-clear-training-data.
   * (monitoredAgents.clearTrainingData)
   *
   * @param string $name Required. The MonitoredAgent whose trained model
   * artifacts to purge. Use the `-` wildcard agent segment to purge every
   * MonitoredAgent in the scope. Format:
   * `projects/{project}/locations/{location}/monitoredAgents/{monitored_agent}`
   * @param GoogleCloudAiplatformV1ClearTrainingDataRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function clearTrainingData($name, GoogleCloudAiplatformV1ClearTrainingDataRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('clearTrainingData', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Disables a specific MonitoredAgent. (monitoredAgents.disable)
   *
   * @param string $name Required. The name of the MonitoredAgent resource to be
   * disabled. Format:
   * `projects/{project}/locations/{location}/monitoredAgents/{monitored_agent}`
   * @param GoogleCloudAiplatformV1DisableMonitoredAgentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function disable($name, GoogleCloudAiplatformV1DisableMonitoredAgentRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('disable', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Enables a specific MonitoredAgent. (monitoredAgents.enable)
   *
   * @param string $name Required. The name of the MonitoredAgent resource to be
   * enabled. Format:
   * `projects/{project}/locations/{location}/monitoredAgents/{monitored_agent}`
   * @param GoogleCloudAiplatformV1EnableMonitoredAgentRequest $postBody
   * @param array $optParams Optional parameters.
   * @return GoogleLongrunningOperation
   * @throws \Google\Service\Exception
   */
  public function enable($name, GoogleCloudAiplatformV1EnableMonitoredAgentRequest $postBody, $optParams = [])
  {
    $params = ['name' => $name, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('enable', [$params], GoogleLongrunningOperation::class);
  }
  /**
   * Gets the details of a specific MonitoredAgent. (monitoredAgents.get)
   *
   * @param string $name Required. The name of the MonitoredAgent resource.
   * Format:
   * `projects/{project}/locations/{location}/monitoredAgents/{monitored_agent}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1MonitoredAgent
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1MonitoredAgent::class);
  }
  /**
   * Lists MonitoredAgents in a specific Location.
   * (monitoredAgents.listProjectsLocationsMonitoredAgents)
   *
   * @param string $parent Required. The resource name of the Location to list the
   * MonitoredAgents from. Format: `projects/{project}/locations/{location}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. An AIP-160 filter, currently restricted to
   * a single equality predicate on `state`. The value must be the exact, case-
   * sensitive name of a `MonitoredAgent.EnablementState` value: `ACTIVE`,
   * `DISABLED`, `ENABLING`, or `ENABLEMENT_STATE_UNSPECIFIED`. A blank or absent
   * filter returns every MonitoredAgent in the parent regardless of state; any
   * other value returns `INVALID_ARGUMENT`. Example: ``` state = ACTIVE ```
   * @opt_param int pageSize Optional. The standard list page size. The maximum
   * value is 100; values above 100 will be coerced to 100. If unspecified, at
   * most 10 MonitoredAgents will be returned.
   * @opt_param string pageToken Optional. The standard list page token.
   * @return GoogleCloudAiplatformV1ListMonitoredAgentsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsMonitoredAgents($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListMonitoredAgentsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsMonitoredAgents::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsMonitoredAgents');
