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

class GoogleCloudAiplatformV1AgentResource extends \Google\Model
{
  /**
   * The default value, used when the framework is unspecified.
   */
  public const AGENT_FRAMEWORK_AGENT_FRAMEWORK_UNSPECIFIED = 'AGENT_FRAMEWORK_UNSPECIFIED';
  /**
   * The agent is built with the Agent Development Kit (ADK).
   */
  public const AGENT_FRAMEWORK_ADK = 'ADK';
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
   * Required. The resource name or identifier of the agent to monitor. The
   * format depends on `agent_type`: * `REASONING_ENGINE`: `//aiplatform.googlea
   * pis.com/projects/{project}/locations/{location}/reasoningEngines/{reasoning
   * _engine}` * `CLOUD_RUN_SERVICE`: the full resource name of the Cloud Run
   * service, `//run.googleapis.com/projects/{project}/locations/{location}/serv
   * ices/{service}` * `GKE_WORKLOAD`: the full resource name of the Google
   * Kubernetes Engine cluster followed by the agent's OpenTelemetry
   * `service.name`, `//container.googleapis.com/projects/{project}/locations/{l
   * ocation}/clusters/{cluster}/{service}`. For a zonal cluster, `zones/{zone}`
   * replaces `locations/{location}`. Some names end in
   * `k8s/namespaces/{namespace}/apps/deployments/{deployment}` instead of
   * `{service}`. * `GCE_INSTANCE`: the full resource name of the Compute Engine
   * instance followed by the agent's OpenTelemetry `service.name`, `//compute.g
   * oogleapis.com/projects/{project}/zones/{zone}/instances/{instance}/{service
   * }`, where `{instance}` is the numeric instance ID. * `AWS` and `AZURE`: an
   * identifier built from the agent's OpenTelemetry resource attributes,
   * usually `{platform}:{account}:{region}:{name}`. `{platform}` is the
   * `cloud.platform` value. `{account}` is `cloud.account.id`, or the ID of the
   * Google Cloud project that receives the telemetry if `cloud.account.id`
   * isn't set. `{region}` is `cloud.region`. `{name}` is `faas.name`, or the
   * Kubernetes cluster name followed by
   * `/k8s/namespaces/{namespace}/apps/deployments/{deployment}` or
   * `/{service}`. For example, `aws_lambda:123456789012:us-east-2:inventory-
   * agent`. * `AGENT_TYPE_OTHER`: a stable identifier for the agent, such as
   * the full resource name of its runtime or its OpenTelemetry `service.name`.
   * * `CODING_HARNESS`: the agent name its capture plugin reports, such as
   * `claude_code`.
   *
   * @var string
   */
  public $agent;
  /**
   * Optional. The framework used to build the agent, orthogonal to the runtime
   * `agent_type`.
   *
   * @var string
   */
  public $agentFramework;
  /**
   * Required. The runtime type of the agent.
   *
   * @var string
   */
  public $agentType;
  /**
   * Output only. The region of the agent resource: a Google Cloud location (for
   * example, `us-central1`), or for an `AWS` or `AZURE` agent, the region in
   * that cloud (for example, `us-east-2`).
   *
   * @var string
   */
  public $location;

  /**
   * Required. The resource name or identifier of the agent to monitor. The
   * format depends on `agent_type`: * `REASONING_ENGINE`: `//aiplatform.googlea
   * pis.com/projects/{project}/locations/{location}/reasoningEngines/{reasoning
   * _engine}` * `CLOUD_RUN_SERVICE`: the full resource name of the Cloud Run
   * service, `//run.googleapis.com/projects/{project}/locations/{location}/serv
   * ices/{service}` * `GKE_WORKLOAD`: the full resource name of the Google
   * Kubernetes Engine cluster followed by the agent's OpenTelemetry
   * `service.name`, `//container.googleapis.com/projects/{project}/locations/{l
   * ocation}/clusters/{cluster}/{service}`. For a zonal cluster, `zones/{zone}`
   * replaces `locations/{location}`. Some names end in
   * `k8s/namespaces/{namespace}/apps/deployments/{deployment}` instead of
   * `{service}`. * `GCE_INSTANCE`: the full resource name of the Compute Engine
   * instance followed by the agent's OpenTelemetry `service.name`, `//compute.g
   * oogleapis.com/projects/{project}/zones/{zone}/instances/{instance}/{service
   * }`, where `{instance}` is the numeric instance ID. * `AWS` and `AZURE`: an
   * identifier built from the agent's OpenTelemetry resource attributes,
   * usually `{platform}:{account}:{region}:{name}`. `{platform}` is the
   * `cloud.platform` value. `{account}` is `cloud.account.id`, or the ID of the
   * Google Cloud project that receives the telemetry if `cloud.account.id`
   * isn't set. `{region}` is `cloud.region`. `{name}` is `faas.name`, or the
   * Kubernetes cluster name followed by
   * `/k8s/namespaces/{namespace}/apps/deployments/{deployment}` or
   * `/{service}`. For example, `aws_lambda:123456789012:us-east-2:inventory-
   * agent`. * `AGENT_TYPE_OTHER`: a stable identifier for the agent, such as
   * the full resource name of its runtime or its OpenTelemetry `service.name`.
   * * `CODING_HARNESS`: the agent name its capture plugin reports, such as
   * `claude_code`.
   *
   * @param string $agent
   */
  public function setAgent($agent)
  {
    $this->agent = $agent;
  }
  /**
   * @return string
   */
  public function getAgent()
  {
    return $this->agent;
  }
  /**
   * Optional. The framework used to build the agent, orthogonal to the runtime
   * `agent_type`.
   *
   * Accepted values: AGENT_FRAMEWORK_UNSPECIFIED, ADK
   *
   * @param self::AGENT_FRAMEWORK_* $agentFramework
   */
  public function setAgentFramework($agentFramework)
  {
    $this->agentFramework = $agentFramework;
  }
  /**
   * @return self::AGENT_FRAMEWORK_*
   */
  public function getAgentFramework()
  {
    return $this->agentFramework;
  }
  /**
   * Required. The runtime type of the agent.
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
   * Output only. The region of the agent resource: a Google Cloud location (for
   * example, `us-central1`), or for an `AWS` or `AZURE` agent, the region in
   * that cloud (for example, `us-east-2`).
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AgentResource::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AgentResource');
