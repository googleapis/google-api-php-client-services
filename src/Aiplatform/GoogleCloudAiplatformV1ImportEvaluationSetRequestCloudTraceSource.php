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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1ImportEvaluationSetRequestCloudTraceSource extends \Google\Collection
{
  protected $collection_key = 'traceIds';
  /**
   * Optional. Restricts the imported spans to a single agent. Accepts either of
   * two forms, matching `OnlineEvaluator.agent_resource`: * a project-scoped
   * resource name, matched against the `cloud.resource_id` resource attribute
   * that Vertex AI Agent Engine agents are stamped with; * an Agent Registry
   * agent URN, matched against the `gen_ai.main_agent.id` resource attribute
   * that agents on GKE, and any other runtime that stamps it, are identified
   * by. Scopes `session_ids` selection only. Traces named explicitly in
   * `trace_ids` are imported as given and are NOT filtered by this field,
   * because the caller has already identified them. Setting this field with
   * only `trace_ids` therefore has no effect. When unset, spans are selected by
   * session or trace ID alone. That is the pre-existing behavior and it remains
   * the correct one for a session whose agents run in several deployments,
   * because each deployment stamps its own `gen_ai.main_agent.id` and filtering
   * on one of them would silently truncate the trajectory.
   *
   * @var string
   */
  public $agentResource;
  /**
   * Required. Project ID for the Cloud Trace.
   *
   * @var string
   */
  public $projectId;
  /**
   * Optional. Session IDs to import traces for. If both trace_ids and
   * session_ids are specified, the union of the two will be imported.
   *
   * @var string[]
   */
  public $sessionIds;
  /**
   * Optional. Trace IDs to import.
   *
   * @var string[]
   */
  public $traceIds;

  /**
   * Optional. Restricts the imported spans to a single agent. Accepts either of
   * two forms, matching `OnlineEvaluator.agent_resource`: * a project-scoped
   * resource name, matched against the `cloud.resource_id` resource attribute
   * that Vertex AI Agent Engine agents are stamped with; * an Agent Registry
   * agent URN, matched against the `gen_ai.main_agent.id` resource attribute
   * that agents on GKE, and any other runtime that stamps it, are identified
   * by. Scopes `session_ids` selection only. Traces named explicitly in
   * `trace_ids` are imported as given and are NOT filtered by this field,
   * because the caller has already identified them. Setting this field with
   * only `trace_ids` therefore has no effect. When unset, spans are selected by
   * session or trace ID alone. That is the pre-existing behavior and it remains
   * the correct one for a session whose agents run in several deployments,
   * because each deployment stamps its own `gen_ai.main_agent.id` and filtering
   * on one of them would silently truncate the trajectory.
   *
   * @param string $agentResource
   */
  public function setAgentResource($agentResource)
  {
    $this->agentResource = $agentResource;
  }
  /**
   * @return string
   */
  public function getAgentResource()
  {
    return $this->agentResource;
  }
  /**
   * Required. Project ID for the Cloud Trace.
   *
   * @param string $projectId
   */
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  /**
   * @return string
   */
  public function getProjectId()
  {
    return $this->projectId;
  }
  /**
   * Optional. Session IDs to import traces for. If both trace_ids and
   * session_ids are specified, the union of the two will be imported.
   *
   * @param string[] $sessionIds
   */
  public function setSessionIds($sessionIds)
  {
    $this->sessionIds = $sessionIds;
  }
  /**
   * @return string[]
   */
  public function getSessionIds()
  {
    return $this->sessionIds;
  }
  /**
   * Optional. Trace IDs to import.
   *
   * @param string[] $traceIds
   */
  public function setTraceIds($traceIds)
  {
    $this->traceIds = $traceIds;
  }
  /**
   * @return string[]
   */
  public function getTraceIds()
  {
    return $this->traceIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1ImportEvaluationSetRequestCloudTraceSource::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1ImportEvaluationSetRequestCloudTraceSource');
