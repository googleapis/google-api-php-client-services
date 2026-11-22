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

class GoogleCloudAiplatformV1AggregateAnalyzedSessionsResponseAgentAggregate extends \Google\Model
{
  /**
   * The default value. This value is used if the state is omitted.
   */
  public const AGENT_STATUS_ENABLEMENT_STATE_UNSPECIFIED = 'ENABLEMENT_STATE_UNSPECIFIED';
  /**
   * The agent is successfully enabled and active.
   */
  public const AGENT_STATUS_ACTIVE = 'ACTIVE';
  /**
   * The agent is in the process of being enabled.
   */
  public const AGENT_STATUS_ENABLING = 'ENABLING';
  /**
   * The agent is disabled.
   */
  public const AGENT_STATUS_DISABLED = 'DISABLED';
  /**
   * The default value, used when the runtime type is unspecified.
   */
  public const AGENT_TYPE_AGENT_TYPE_UNSPECIFIED = 'AGENT_TYPE_UNSPECIFIED';
  /**
   * The agent runs on the Gemini Enterprise Agent Platform Agent Runtime
   * (Reasoning Engine).
   */
  public const AGENT_TYPE_REASONING_ENGINE = 'REASONING_ENGINE';
  /**
   * The agent runs as a Google Cloud Run service.
   */
  public const AGENT_TYPE_CLOUD_RUN_SERVICE = 'CLOUD_RUN_SERVICE';
  /**
   * The agent runs as a workload on Google Kubernetes Engine.
   */
  public const AGENT_TYPE_GKE_WORKLOAD = 'GKE_WORKLOAD';
  /**
   * The agent runs on a Compute Engine instance.
   */
  public const AGENT_TYPE_GCE_INSTANCE = 'GCE_INSTANCE';
  /**
   * The agent runs on a runtime that no other value represents, such as a self-
   * hosted or on-premises environment.
   */
  public const AGENT_TYPE_AGENT_TYPE_OTHER = 'AGENT_TYPE_OTHER';
  /**
   * The agent runs on Amazon Web Services (AWS), such as on AWS Lambda.
   */
  public const AGENT_TYPE_AWS = 'AWS';
  /**
   * The agent runs on Microsoft Azure, such as on Azure Kubernetes Service
   * (AKS) or as a Microsoft Foundry hosted agent.
   */
  public const AGENT_TYPE_AZURE = 'AZURE';
  /**
   * Output only. The human-readable display name of the MonitoredAgent.
   *
   * @var string
   */
  public $agentDisplayName;
  /**
   * The resource name or identifier of the agent. Matches `AgentResource.agent`
   * on the corresponding `MonitoredAgent`, so the format depends on that
   * agent's `AgentResource.agent_type`. For the format of each agent type, see
   * AgentResource.agent.
   *
   * @var string
   */
  public $agentResourceName;
  /**
   * Output only. The enablement state of the MonitoredAgent (for example,
   * ACTIVE, DISABLED, or ENABLING).
   *
   * @var string
   */
  public $agentStatus;
  /**
   * Output only. The runtime the agent is hosted on (for example,
   * `CLOUD_RUN_SERVICE`). `AGENT_TYPE_UNSPECIFIED` means the runtime is unknown
   * to this service, which is distinct from `AGENT_TYPE_OTHER` (known, and not
   * one of the other enumerated runtimes).
   *
   * @var string
   */
  public $agentType;
  /**
   * The number of anomalous (SESSION_STATE_FLAGGED) sessions for this agent.
   *
   * @var int
   */
  public $anomalousSessionsCount;
  /**
   * The latest session update_time observed for this agent.
   *
   * @var string
   */
  public $latestSessionTime;
  /**
   * Output only. The region of the agent, in the same form as
   * `AgentResource.location` (for example, `us-central1`). Empty when the agent
   * is not enrolled or its location is unknown.
   *
   * @var string
   */
  public $location;
  /**
   * The MonitoredAgent resource name. Format:
   * `projects/{project}/locations/{location}/monitoredAgents/{monitored_agent}`
   *
   * @var string
   */
  public $monitoredAgent;
  protected $severitiesType = GoogleCloudAiplatformV1AnalyzedSessionSeveritySummary::class;
  protected $severitiesDataType = 'map';
  /**
   * The number of analyzed sessions for this agent matched by the request.
   *
   * @var int
   */
  public $totalSessionsCount;

  /**
   * Output only. The human-readable display name of the MonitoredAgent.
   *
   * @param string $agentDisplayName
   */
  public function setAgentDisplayName($agentDisplayName)
  {
    $this->agentDisplayName = $agentDisplayName;
  }
  /**
   * @return string
   */
  public function getAgentDisplayName()
  {
    return $this->agentDisplayName;
  }
  /**
   * The resource name or identifier of the agent. Matches `AgentResource.agent`
   * on the corresponding `MonitoredAgent`, so the format depends on that
   * agent's `AgentResource.agent_type`. For the format of each agent type, see
   * AgentResource.agent.
   *
   * @param string $agentResourceName
   */
  public function setAgentResourceName($agentResourceName)
  {
    $this->agentResourceName = $agentResourceName;
  }
  /**
   * @return string
   */
  public function getAgentResourceName()
  {
    return $this->agentResourceName;
  }
  /**
   * Output only. The enablement state of the MonitoredAgent (for example,
   * ACTIVE, DISABLED, or ENABLING).
   *
   * Accepted values: ENABLEMENT_STATE_UNSPECIFIED, ACTIVE, ENABLING, DISABLED
   *
   * @param self::AGENT_STATUS_* $agentStatus
   */
  public function setAgentStatus($agentStatus)
  {
    $this->agentStatus = $agentStatus;
  }
  /**
   * @return self::AGENT_STATUS_*
   */
  public function getAgentStatus()
  {
    return $this->agentStatus;
  }
  /**
   * Output only. The runtime the agent is hosted on (for example,
   * `CLOUD_RUN_SERVICE`). `AGENT_TYPE_UNSPECIFIED` means the runtime is unknown
   * to this service, which is distinct from `AGENT_TYPE_OTHER` (known, and not
   * one of the other enumerated runtimes).
   *
   * Accepted values: AGENT_TYPE_UNSPECIFIED, REASONING_ENGINE,
   * CLOUD_RUN_SERVICE, GKE_WORKLOAD, GCE_INSTANCE, AGENT_TYPE_OTHER, AWS, AZURE
   *
   * @param self::AGENT_TYPE_* $agentType
   */
  public function setAgentType($agentType)
  {
    $this->agentType = $agentType;
  }
  /**
   * @return self::AGENT_TYPE_*
   */
  public function getAgentType()
  {
    return $this->agentType;
  }
  /**
   * The number of anomalous (SESSION_STATE_FLAGGED) sessions for this agent.
   *
   * @param int $anomalousSessionsCount
   */
  public function setAnomalousSessionsCount($anomalousSessionsCount)
  {
    $this->anomalousSessionsCount = $anomalousSessionsCount;
  }
  /**
   * @return int
   */
  public function getAnomalousSessionsCount()
  {
    return $this->anomalousSessionsCount;
  }
  /**
   * The latest session update_time observed for this agent.
   *
   * @param string $latestSessionTime
   */
  public function setLatestSessionTime($latestSessionTime)
  {
    $this->latestSessionTime = $latestSessionTime;
  }
  /**
   * @return string
   */
  public function getLatestSessionTime()
  {
    return $this->latestSessionTime;
  }
  /**
   * Output only. The region of the agent, in the same form as
   * `AgentResource.location` (for example, `us-central1`). Empty when the agent
   * is not enrolled or its location is unknown.
   *
   * @param string $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  /**
   * @return string
   */
  public function getLocation()
  {
    return $this->location;
  }
  /**
   * The MonitoredAgent resource name. Format:
   * `projects/{project}/locations/{location}/monitoredAgents/{monitored_agent}`
   *
   * @param string $monitoredAgent
   */
  public function setMonitoredAgent($monitoredAgent)
  {
    $this->monitoredAgent = $monitoredAgent;
  }
  /**
   * @return string
   */
  public function getMonitoredAgent()
  {
    return $this->monitoredAgent;
  }
  /**
   * Map of severity level (string representation of Severity) to detector
   * summaries aggregated across all sessions for this agent. The key is the
   * string representation of Severity enum: "SEVERITY_UNSPECIFIED",
   * "SEVERITY_CRITICAL", "SEVERITY_HIGH", "SEVERITY_MEDIUM", "SEVERITY_LOW".
   *
   * @param GoogleCloudAiplatformV1AnalyzedSessionSeveritySummary[] $severities
   */
  public function setSeverities($severities)
  {
    $this->severities = $severities;
  }
  /**
   * @return GoogleCloudAiplatformV1AnalyzedSessionSeveritySummary[]
   */
  public function getSeverities()
  {
    return $this->severities;
  }
  /**
   * The number of analyzed sessions for this agent matched by the request.
   *
   * @param int $totalSessionsCount
   */
  public function setTotalSessionsCount($totalSessionsCount)
  {
    $this->totalSessionsCount = $totalSessionsCount;
  }
  /**
   * @return int
   */
  public function getTotalSessionsCount()
  {
    return $this->totalSessionsCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AggregateAnalyzedSessionsResponseAgentAggregate::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AggregateAnalyzedSessionsResponseAgentAggregate');
