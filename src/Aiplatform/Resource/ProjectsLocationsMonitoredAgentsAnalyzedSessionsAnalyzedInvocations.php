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

use Google\Service\Aiplatform\GoogleCloudAiplatformV1AnalyzedInvocation;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListAnalyzedInvocationsResponse;

/**
 * The "analyzedInvocations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $analyzedInvocations = $aiplatformService->projects_locations_monitoredAgents_analyzedSessions_analyzedInvocations;
 *  </code>
 */
class ProjectsLocationsMonitoredAgentsAnalyzedSessionsAnalyzedInvocations extends \Google\Service\Resource
{
  /**
   * Gets the details of a specific AnalyzedInvocation. (analyzedInvocations.get)
   *
   * @param string $name Required. The name of the AnalyzedInvocation resource.
   * Format: `projects/{project}/locations/{location}/monitoredAgents/{monitored_a
   * gent}/analyzedSessions/{analyzed_session}/analyzedInvocations/{analyzed_invoc
   * ation}`
   * @param array $optParams Optional parameters.
   * @return GoogleCloudAiplatformV1AnalyzedInvocation
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1AnalyzedInvocation::class);
  }
  /**
   * Lists AnalyzedInvocations in a MonitoredAgent's AnalyzedSession. (analyzedInv
   * ocations.listProjectsLocationsMonitoredAgentsAnalyzedSessionsAnalyzedInvocati
   * ons)
   *
   * @param string $parent Required. The parent AnalyzedSession resource. Format:
   * `projects/{project}/locations/{location}/monitoredAgents/{monitored_agent}/an
   * alyzedSessions/{analyzed_session}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param int pageSize Optional. The maximum number of analyzed invocations
   * to return.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListAnalyzedInvocations` call.
   * @return GoogleCloudAiplatformV1ListAnalyzedInvocationsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsMonitoredAgentsAnalyzedSessionsAnalyzedInvocations($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListAnalyzedInvocationsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsMonitoredAgentsAnalyzedSessionsAnalyzedInvocations::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsMonitoredAgentsAnalyzedSessionsAnalyzedInvocations');
