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

use Google\Service\Aiplatform\GoogleCloudAiplatformV1AggregateAnalyzedSessionsResponse;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1AnalyzedSession;
use Google\Service\Aiplatform\GoogleCloudAiplatformV1ListAnalyzedSessionsResponse;

/**
 * The "analyzedSessions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $aiplatformService = new Google\Service\Aiplatform(...);
 *   $analyzedSessions = $aiplatformService->projects_locations_monitoredAgents_analyzedSessions;
 *  </code>
 */
class ProjectsLocationsMonitoredAgentsAnalyzedSessions extends \Google\Service\Resource
{
  /**
   * Aggregates AnalyzedSessions across MonitoredAgents. To aggregate across all
   * MonitoredAgents in a location, use the following format for the parent field:
   * `projects/{project}/locations/{location}/monitoredAgents/-`
   * (analyzedSessions.aggregate)
   *
   * @param string $parent Required. The parent MonitoredAgent resource. Use the
   * `-` wildcard for the monitored_agent segment to aggregate across multiple
   * agents in the location. Format:
   * `projects/{project}/locations/{location}/monitoredAgents/{monitored_agent}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter expression restricting which
   * AnalyzedSessions are included in the aggregation. Supports a subset of the
   * `ListAnalyzedSessionsRequest.filter` grammar: a closed `detection_time`
   * window with both bounds required. The `severity` clause is not supported
   * here. If empty, the aggregation covers the last 3 days. Example: ```
   * detection_time >= "2024-01-01T00:00:00Z" AND detection_time <=
   * "2024-01-08T00:00:00Z" ```
   * @opt_param int pageSize Optional. The standard list page size. The maximum
   * value is 100; values above 100 will be coerced to 100. If unspecified, at
   * most 10 MonitoredAgents will be returned.
   * @opt_param string pageToken Optional. The standard list page token.
   * @return GoogleCloudAiplatformV1AggregateAnalyzedSessionsResponse
   * @throws \Google\Service\Exception
   */
  public function aggregate($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('aggregate', [$params], GoogleCloudAiplatformV1AggregateAnalyzedSessionsResponse::class);
  }
  /**
   * Gets the details of a specific AnalyzedSession. (analyzedSessions.get)
   *
   * @param string $name Required. The name of the AnalyzedSession resource.
   * Format: `projects/{project}/locations/{location}/monitoredAgents/{monitored_a
   * gent}/analyzedSessions/{analyzed_session}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Optional. Resource view to control which fields are
   * returned.
   * @return GoogleCloudAiplatformV1AnalyzedSession
   * @throws \Google\Service\Exception
   */
  public function get($name, $optParams = [])
  {
    $params = ['name' => $name];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GoogleCloudAiplatformV1AnalyzedSession::class);
  }
  /**
   * Lists AnalyzedSessions in a MonitoredAgent.
   * (analyzedSessions.listProjectsLocationsMonitoredAgentsAnalyzedSessions)
   *
   * @param string $parent Required. The parent MonitoredAgent resource. Format:
   * `projects/{project}/locations/{location}/monitoredAgents/{monitored_agent}`
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Optional. Filter expression restricting which
   * AnalyzedSessions are returned. Supports a subset of AIP-160: a closed
   * `detection_time` window (both bounds required), an equality on `severity`, an
   * equality on `agent_type`, and an equality on `session_id`, joined by `AND`.
   * Each clause is optional, may appear at most once, and may appear in any
   * order. The `severity` value is the **canonical** `Severity` enum name --
   * `SEVERITY_CRITICAL`, `SEVERITY_HIGH`, `SEVERITY_MEDIUM` or `SEVERITY_LOW`.
   * Short forms such as `"CRITICAL"` are rejected, as is `SEVERITY_UNSPECIFIED`.
   * It matches sessions whose *maximum* severity equals that bucket: a session
   * that fires at both LOW and CRITICAL matches `severity = "SEVERITY_CRITICAL"`,
   * not `severity = "SEVERITY_LOW"`. The `agent_type` value is the canonical
   * `AgentResource.AgentType` enum name -- `REASONING_ENGINE`,
   * `CLOUD_RUN_SERVICE`, `GKE_WORKLOAD`, `GCE_INSTANCE`, `AWS`, `AZURE`,
   * `AGENT_TYPE_OTHER` or `AGENT_TYPE_UNSPECIFIED` -- and matches sessions run by
   * an agent on that runtime. Unlike `severity`, `agent_type` accepts its
   * `UNSPECIFIED` value. The two are not analogous: a session always has a
   * computed severity bucket, so `SEVERITY_UNSPECIFIED` is never returned and
   * filtering on it could only match nothing. `AGENT_TYPE_UNSPECIFIED` *is*
   * returned -- it is what `AnalyzedSession.agent_type` reports for an agent
   * whose runtime was never recorded -- so it must remain filterable. The
   * `session_id` value is a case-sensitive exact match (no substring or prefix
   * matching) on `AnalyzedSession.session_id`. Unlike `severity` and `agent_type`
   * it is not a closed enum, so any non-empty value is accepted; an empty value
   * (`session_id = ""`) is rejected rather than treated as "no filter". Example
   * (time window, severity and runtime): ``` detection_time >=
   * "2024-01-01T00:00:00Z" AND detection_time <= "2024-01-08T00:00:00Z" AND
   * severity = "SEVERITY_CRITICAL" AND agent_type = "CLOUD_RUN_SERVICE" ``` If
   * empty, results are restricted to the last 7 days with no severity, runtime,
   * or session restriction. Other fields, additional operators, set membership
   * (`IN`), and boolean combinations (`OR`, `NOT`, parentheses) are not yet
   * supported.
   * @opt_param string orderBy Optional. Comma-separated list of fields to sort
   * by, following AIP-132 syntax. The default sort direction is ascending; append
   * " desc" to a field to sort descending. Supported fields (any other field
   * yields INVALID_ARGUMENT): * `latest_detection_time` - the session's most-
   * recent flagged detection time. `latest_detection_time desc` puts the newest
   * sessions first. * `max_severity_rank` - the session's bucketed maximum
   * severity, ranked LOW=1 < MEDIUM=2 < HIGH=3 < CRITICAL=4. `max_severity_rank
   * desc` puts the most-severe sessions first. * `agent_display_name` - the
   * MonitoredAgent's display name. Sorted as a STRING (case-sensitive, code-point
   * order). If empty, defaults to `latest_detection_time desc`. Multi-field sort
   * (for example, `max_severity_rank desc, latest_detection_time desc`) is
   * supported. The `order_by` value MUST match the value used on the call that
   * minted any supplied `page_token` (AIP-158). Mismatches yield
   * INVALID_ARGUMENT.
   * @opt_param int pageSize Optional. The maximum number of analyzed sessions to
   * return.
   * @opt_param string pageToken Optional. A page token, received from a previous
   * `ListAnalyzedSessions` call.
   * @opt_param string view Optional. Resource view to control which fields are
   * returned.
   * @return GoogleCloudAiplatformV1ListAnalyzedSessionsResponse
   * @throws \Google\Service\Exception
   */
  public function listProjectsLocationsMonitoredAgentsAnalyzedSessions($parent, $optParams = [])
  {
    $params = ['parent' => $parent];
    $params = array_merge($params, $optParams);
    return $this->call('list', [$params], GoogleCloudAiplatformV1ListAnalyzedSessionsResponse::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ProjectsLocationsMonitoredAgentsAnalyzedSessions::class, 'Google_Service_Aiplatform_Resource_ProjectsLocationsMonitoredAgentsAnalyzedSessions');
