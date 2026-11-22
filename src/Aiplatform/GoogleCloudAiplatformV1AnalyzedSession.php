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

class GoogleCloudAiplatformV1AnalyzedSession extends \Google\Model
{
  /**
   * The default value. This value is used if the state is omitted.
   */
  public const AGENT_STATE_ENABLEMENT_STATE_UNSPECIFIED = 'ENABLEMENT_STATE_UNSPECIFIED';
  /**
   * The agent is successfully enabled and active.
   */
  public const AGENT_STATE_ACTIVE = 'ACTIVE';
  /**
   * The agent is in the process of being enabled.
   */
  public const AGENT_STATE_ENABLING = 'ENABLING';
  /**
   * The agent is disabled.
   */
  public const AGENT_STATE_DISABLED = 'DISABLED';
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
   * The session state is unspecified.
   */
  public const SESSION_STATE_SESSION_STATE_UNSPECIFIED = 'SESSION_STATE_UNSPECIFIED';
  /**
   * The session has not yet been analyzed.
   */
  public const SESSION_STATE_SESSION_STATE_UNANALYZED = 'SESSION_STATE_UNANALYZED';
  /**
   * The session has been analyzed and no anomalies were flagged.
   */
  public const SESSION_STATE_SESSION_STATE_NOT_FLAGGED = 'SESSION_STATE_NOT_FLAGGED';
  /**
   * The session has been analyzed and at least one anomaly was flagged.
   */
  public const SESSION_STATE_SESSION_STATE_FLAGGED = 'SESSION_STATE_FLAGGED';
  /**
   * The session was analyzed by the LLM judge, which did not flag any
   * anomalies.
   */
  public const SESSION_STATE_SESSION_STATE_LLM_UNFLAGGED = 'SESSION_STATE_LLM_UNFLAGGED';
  /**
   * Output only. The human-readable display name of the MonitoredAgent that
   * owns this session. May be empty when the session's agent is not enrolled as
   * a MonitoredAgent; the `agent_resource_name` is always present and can be
   * used as a fallback identifier.
   *
   * @var string
   */
  public $agentDisplayName;
  /**
   * Output only. The resource name or identifier of the agent that ran this
   * session. Matches `AgentResource.agent` on the corresponding
   * `MonitoredAgent`, so the format depends on that agent's
   * `AgentResource.agent_type`. For the format of each agent type, see
   * AgentResource.agent.
   *
   * @var string
   */
  public $agentResourceName;
  /**
   * Output only. The current enablement state of the MonitoredAgent that owns
   * this session (for example, ACTIVE, DISABLED, or ENABLING). Defaults to
   * ENABLEMENT_STATE_UNSPECIFIED when the agent is not enrolled or its state is
   * unknown.
   *
   * @var string
   */
  public $agentState;
  /**
   * Output only. The runtime that the agent which ran this session is hosted on
   * (for example, `CLOUD_RUN_SERVICE`). `AGENT_TYPE_UNSPECIFIED` means the
   * runtime is unknown to this service -- the agent is not enrolled as a
   * `MonitoredAgent`, or was enrolled before its runtime was recorded. That is
   * distinct from `AGENT_TYPE_OTHER`, which means the runtime is known and is
   * not one of the other enumerated runtimes.
   *
   * @var string
   */
  public $agentType;
  protected $assessmentType = GoogleCloudAiplatformV1Assessment::class;
  protected $assessmentDataType = '';
  /**
   * Output only. The creation time of the session.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The latest analyzed time of the session.
   *
   * @var string
   */
  public $latestAnalyzedTime;
  /**
   * Output only. The region of the agent that ran this session, in the same
   * form as `AgentResource.location` (for example, `us-central1`). Empty when
   * the agent is not enrolled or its location is unknown.
   *
   * @var string
   */
  public $location;
  /**
   * Identifier. The resource name of the AnalyzedSession.
   *
   * @var string
   */
  public $name;
  /**
   * Output only. The session ID.
   *
   * @var string
   */
  public $sessionId;
  /**
   * Output only. The state of the session.
   *
   * @var string
   */
  public $sessionState;
  protected $severitiesType = GoogleCloudAiplatformV1AnalyzedSessionSeveritySummary::class;
  protected $severitiesDataType = 'map';
  /**
   * Output only. The user ID.
   *
   * @var string
   */
  public $userId;

  /**
   * Output only. The human-readable display name of the MonitoredAgent that
   * owns this session. May be empty when the session's agent is not enrolled as
   * a MonitoredAgent; the `agent_resource_name` is always present and can be
   * used as a fallback identifier.
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
   * Output only. The resource name or identifier of the agent that ran this
   * session. Matches `AgentResource.agent` on the corresponding
   * `MonitoredAgent`, so the format depends on that agent's
   * `AgentResource.agent_type`. For the format of each agent type, see
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
   * Output only. The current enablement state of the MonitoredAgent that owns
   * this session (for example, ACTIVE, DISABLED, or ENABLING). Defaults to
   * ENABLEMENT_STATE_UNSPECIFIED when the agent is not enrolled or its state is
   * unknown.
   *
   * Accepted values: ENABLEMENT_STATE_UNSPECIFIED, ACTIVE, ENABLING, DISABLED
   *
   * @param self::AGENT_STATE_* $agentState
   */
  public function setAgentState($agentState)
  {
    $this->agentState = $agentState;
  }
  /**
   * @return self::AGENT_STATE_*
   */
  public function getAgentState()
  {
    return $this->agentState;
  }
  /**
   * Output only. The runtime that the agent which ran this session is hosted on
   * (for example, `CLOUD_RUN_SERVICE`). `AGENT_TYPE_UNSPECIFIED` means the
   * runtime is unknown to this service -- the agent is not enrolled as a
   * `MonitoredAgent`, or was enrolled before its runtime was recorded. That is
   * distinct from `AGENT_TYPE_OTHER`, which means the runtime is known and is
   * not one of the other enumerated runtimes.
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
   * Output only. Overall security assessment. Populated only in FULL view.
   *
   * @param GoogleCloudAiplatformV1Assessment $assessment
   */
  public function setAssessment(GoogleCloudAiplatformV1Assessment $assessment)
  {
    $this->assessment = $assessment;
  }
  /**
   * @return GoogleCloudAiplatformV1Assessment
   */
  public function getAssessment()
  {
    return $this->assessment;
  }
  /**
   * Output only. The creation time of the session.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Output only. The latest analyzed time of the session.
   *
   * @param string $latestAnalyzedTime
   */
  public function setLatestAnalyzedTime($latestAnalyzedTime)
  {
    $this->latestAnalyzedTime = $latestAnalyzedTime;
  }
  /**
   * @return string
   */
  public function getLatestAnalyzedTime()
  {
    return $this->latestAnalyzedTime;
  }
  /**
   * Output only. The region of the agent that ran this session, in the same
   * form as `AgentResource.location` (for example, `us-central1`). Empty when
   * the agent is not enrolled or its location is unknown.
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
   * Identifier. The resource name of the AnalyzedSession.
   *
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * Output only. The session ID.
   *
   * @param string $sessionId
   */
  public function setSessionId($sessionId)
  {
    $this->sessionId = $sessionId;
  }
  /**
   * @return string
   */
  public function getSessionId()
  {
    return $this->sessionId;
  }
  /**
   * Output only. The state of the session.
   *
   * Accepted values: SESSION_STATE_UNSPECIFIED, SESSION_STATE_UNANALYZED,
   * SESSION_STATE_NOT_FLAGGED, SESSION_STATE_FLAGGED,
   * SESSION_STATE_LLM_UNFLAGGED
   *
   * @param self::SESSION_STATE_* $sessionState
   */
  public function setSessionState($sessionState)
  {
    $this->sessionState = $sessionState;
  }
  /**
   * @return self::SESSION_STATE_*
   */
  public function getSessionState()
  {
    return $this->sessionState;
  }
  /**
   * Output only. Map of the detectors that flagged this session, grouped by
   * severity. The key is the string representation of `Severity`. Populated
   * only for flagged sessions, in both views. In
   * AgentAnomalyDetectionService.ListAnalyzedSessions responses, the map holds
   * only the session's highest severity.
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
   * Output only. The user ID.
   *
   * @param string $userId
   */
  public function setUserId($userId)
  {
    $this->userId = $userId;
  }
  /**
   * @return string
   */
  public function getUserId()
  {
    return $this->userId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AnalyzedSession::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AnalyzedSession');
