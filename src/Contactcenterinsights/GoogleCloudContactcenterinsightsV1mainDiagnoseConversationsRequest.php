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

namespace Google\Service\Contactcenterinsights;

class GoogleCloudContactcenterinsightsV1mainDiagnoseConversationsRequest extends \Google\Model
{
  /**
   * Metric type is unspecified.
   */
  public const METRIC_TYPE_DIAGNOSTIC_METRIC_TYPE_UNSPECIFIED = 'DIAGNOSTIC_METRIC_TYPE_UNSPECIFIED';
  /**
   * Escalation rate.
   */
  public const METRIC_TYPE_ESCALATION = 'ESCALATION';
  /**
   * Containment rate.
   */
  public const METRIC_TYPE_CONTAINMENT = 'CONTAINMENT';
  /**
   * ces agent display name (e.g., "Steering", "Billing").
   *
   * @var string
   */
  public $agentDisplayName;
  /**
   * ces agent id to diagnose.
   *
   * @var string
   */
  public $agentId;
  /**
   * Required. The CES App ID.
   *
   * @var string
   */
  public $appId;
  /**
   * Required. The CES App version of the agent. Setting to "-" uses the latest
   * draft version. Note that the agent active during the conversation history
   * may have different instructions or tool definitions compared with the
   * latest draft version.
   *
   * @var string
   */
  public $appVersion;
  /**
   * Optional. Deprecated: If true, the request will be validated and a
   * simulation of the analysis will be performed without actually executing the
   * task. This field is unused. Use validate_only instead.
   *
   * @deprecated
   * @var bool
   */
  public $dryRun;
  /**
   * Optional. AIP-160 compliant filter for selecting target conversations.
   *
   * @var string
   */
  public $filter;
  /**
   * Optional. Deprecated: If true, the agent will generate a full diagnostic
   * report for all sub-agents. Subagent reporting configuration is unused. The
   * final diagnostic details are already persisted inside the Diagnostic
   * resource instead.
   *
   * @deprecated
   * @var bool
   */
  public $fullReport;
  /**
   * Optional. A unique identifier used to group multiple diagnostic requests
   * triggered under the same run batch or cron job.
   *
   * @var string
   */
  public $groupId;
  /**
   * Optional. Deprecated: Specific instructions for the agent. Use app_id and
   * subagent fields instead.
   *
   * @deprecated
   * @var string
   */
  public $instructions;
  /**
   * Optional. The maximum number of steps the agent can take during the
   * execution of the task. Defaults to 10.
   *
   * @var int
   */
  public $maxSteps;
  /**
   * Optional. The type of metric being diagnosed.
   *
   * @var string
   */
  public $metricType;
  protected $outputConfigType = GoogleCloudContactcenterinsightsV1mainOutputConfig::class;
  protected $outputConfigDataType = '';
  /**
   * Required. The parent resource where the analysis will be performed.
   *
   * @var string
   */
  public $parent;
  /**
   * Optional. Required. A unique ID that identifies the request. If the service
   * receives two `DiagnoseConversationsRequest`s with the same `request_id`,
   * then the second request will be ignored; instead, the response of the first
   * request will be returned. The ID must contain only letters (a-z, A-Z),
   * numbers (0-9), underscores (_), and hyphens (-). The maximum length is 40
   * characters.
   *
   * @var string
   */
  public $requestId;
  /**
   * Optional. A natural language description of the analysis goal or question.
   *
   * @var string
   */
  public $taskQuery;
  /**
   * Optional. If true, the request will only be validated (permissions, filter
   * syntax, etc.) without actually triggering the analysis.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * ces agent display name (e.g., "Steering", "Billing").
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
   * ces agent id to diagnose.
   *
   * @param string $agentId
   */
  public function setAgentId($agentId)
  {
    $this->agentId = $agentId;
  }
  /**
   * @return string
   */
  public function getAgentId()
  {
    return $this->agentId;
  }
  /**
   * Required. The CES App ID.
   *
   * @param string $appId
   */
  public function setAppId($appId)
  {
    $this->appId = $appId;
  }
  /**
   * @return string
   */
  public function getAppId()
  {
    return $this->appId;
  }
  /**
   * Required. The CES App version of the agent. Setting to "-" uses the latest
   * draft version. Note that the agent active during the conversation history
   * may have different instructions or tool definitions compared with the
   * latest draft version.
   *
   * @param string $appVersion
   */
  public function setAppVersion($appVersion)
  {
    $this->appVersion = $appVersion;
  }
  /**
   * @return string
   */
  public function getAppVersion()
  {
    return $this->appVersion;
  }
  /**
   * Optional. Deprecated: If true, the request will be validated and a
   * simulation of the analysis will be performed without actually executing the
   * task. This field is unused. Use validate_only instead.
   *
   * @deprecated
   * @param bool $dryRun
   */
  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun;
  }
  /**
   * @deprecated
   * @return bool
   */
  public function getDryRun()
  {
    return $this->dryRun;
  }
  /**
   * Optional. AIP-160 compliant filter for selecting target conversations.
   *
   * @param string $filter
   */
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  /**
   * @return string
   */
  public function getFilter()
  {
    return $this->filter;
  }
  /**
   * Optional. Deprecated: If true, the agent will generate a full diagnostic
   * report for all sub-agents. Subagent reporting configuration is unused. The
   * final diagnostic details are already persisted inside the Diagnostic
   * resource instead.
   *
   * @deprecated
   * @param bool $fullReport
   */
  public function setFullReport($fullReport)
  {
    $this->fullReport = $fullReport;
  }
  /**
   * @deprecated
   * @return bool
   */
  public function getFullReport()
  {
    return $this->fullReport;
  }
  /**
   * Optional. A unique identifier used to group multiple diagnostic requests
   * triggered under the same run batch or cron job.
   *
   * @param string $groupId
   */
  public function setGroupId($groupId)
  {
    $this->groupId = $groupId;
  }
  /**
   * @return string
   */
  public function getGroupId()
  {
    return $this->groupId;
  }
  /**
   * Optional. Deprecated: Specific instructions for the agent. Use app_id and
   * subagent fields instead.
   *
   * @deprecated
   * @param string $instructions
   */
  public function setInstructions($instructions)
  {
    $this->instructions = $instructions;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getInstructions()
  {
    return $this->instructions;
  }
  /**
   * Optional. The maximum number of steps the agent can take during the
   * execution of the task. Defaults to 10.
   *
   * @param int $maxSteps
   */
  public function setMaxSteps($maxSteps)
  {
    $this->maxSteps = $maxSteps;
  }
  /**
   * @return int
   */
  public function getMaxSteps()
  {
    return $this->maxSteps;
  }
  /**
   * Optional. The type of metric being diagnosed.
   *
   * Accepted values: DIAGNOSTIC_METRIC_TYPE_UNSPECIFIED, ESCALATION,
   * CONTAINMENT
   *
   * @param self::METRIC_TYPE_* $metricType
   */
  public function setMetricType($metricType)
  {
    $this->metricType = $metricType;
  }
  /**
   * @return self::METRIC_TYPE_*
   */
  public function getMetricType()
  {
    return $this->metricType;
  }
  /**
   * Optional. Deprecated: The configuration for the output of the task. The
   * export destination is unused. Detailed markdown and conversation slices are
   * already persisted inside the Diagnostic resource instead.
   *
   * @deprecated
   * @param GoogleCloudContactcenterinsightsV1mainOutputConfig $outputConfig
   */
  public function setOutputConfig(GoogleCloudContactcenterinsightsV1mainOutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /**
   * @deprecated
   * @return GoogleCloudContactcenterinsightsV1mainOutputConfig
   */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
  /**
   * Required. The parent resource where the analysis will be performed.
   *
   * @param string $parent
   */
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  /**
   * @return string
   */
  public function getParent()
  {
    return $this->parent;
  }
  /**
   * Optional. Required. A unique ID that identifies the request. If the service
   * receives two `DiagnoseConversationsRequest`s with the same `request_id`,
   * then the second request will be ignored; instead, the response of the first
   * request will be returned. The ID must contain only letters (a-z, A-Z),
   * numbers (0-9), underscores (_), and hyphens (-). The maximum length is 40
   * characters.
   *
   * @param string $requestId
   */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /**
   * @return string
   */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /**
   * Optional. A natural language description of the analysis goal or question.
   *
   * @param string $taskQuery
   */
  public function setTaskQuery($taskQuery)
  {
    $this->taskQuery = $taskQuery;
  }
  /**
   * @return string
   */
  public function getTaskQuery()
  {
    return $this->taskQuery;
  }
  /**
   * Optional. If true, the request will only be validated (permissions, filter
   * syntax, etc.) without actually triggering the analysis.
   *
   * @param bool $validateOnly
   */
  public function setValidateOnly($validateOnly)
  {
    $this->validateOnly = $validateOnly;
  }
  /**
   * @return bool
   */
  public function getValidateOnly()
  {
    return $this->validateOnly;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1mainDiagnoseConversationsRequest::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1mainDiagnoseConversationsRequest');
