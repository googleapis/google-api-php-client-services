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

class GoogleCloudContactcenterinsightsV1DiagnoseConversationsMetadata extends \Google\Collection
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
  protected $collection_key = 'partialTrajectorySteps';
  /**
   * Output only. The time the operation was created.
   *
   * @var string
   */
  public $createTime;
  protected $diagnosticReportType = GoogleCloudContactcenterinsightsV1DiagnosticReport::class;
  protected $diagnosticReportDataType = '';
  /**
   * Output only. The time the operation finished running.
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. If true, the agent generated a full diagnostic report for all
   * sub-agents.
   *
   * @var bool
   */
  public $fullReport;
  protected $latestStepType = GoogleCloudContactcenterinsightsV1SherlockStep::class;
  protected $latestStepDataType = '';
  /**
   * Output only. The type of metric being diagnosed.
   *
   * @var string
   */
  public $metricType;
  /**
   * Output only. Deprecated: Use partial_trajectory_steps instead. Output only.
   * The intermediate trajectory updates (partial trajectory).
   *
   * @deprecated
   * @var string[]
   */
  public $partialTrajectories;
  protected $partialTrajectoryStepsType = GoogleCloudContactcenterinsightsV1SherlockStep::class;
  protected $partialTrajectoryStepsDataType = 'array';
  protected $requestType = GoogleCloudContactcenterinsightsV1DiagnoseConversationsRequest::class;
  protected $requestDataType = '';

  /**
   * Output only. The time the operation was created.
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
   * Output only. The diagnostic report containing metrics and intent
   * breakdowns.
   *
   * @param GoogleCloudContactcenterinsightsV1DiagnosticReport $diagnosticReport
   */
  public function setDiagnosticReport(GoogleCloudContactcenterinsightsV1DiagnosticReport $diagnosticReport)
  {
    $this->diagnosticReport = $diagnosticReport;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1DiagnosticReport
   */
  public function getDiagnosticReport()
  {
    return $this->diagnosticReport;
  }
  /**
   * Output only. The time the operation finished running.
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * Output only. If true, the agent generated a full diagnostic report for all
   * sub-agents.
   *
   * @param bool $fullReport
   */
  public function setFullReport($fullReport)
  {
    $this->fullReport = $fullReport;
  }
  /**
   * @return bool
   */
  public function getFullReport()
  {
    return $this->fullReport;
  }
  /**
   * Output only. The most recent thought or action from the agent.
   *
   * @param GoogleCloudContactcenterinsightsV1SherlockStep $latestStep
   */
  public function setLatestStep(GoogleCloudContactcenterinsightsV1SherlockStep $latestStep)
  {
    $this->latestStep = $latestStep;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1SherlockStep
   */
  public function getLatestStep()
  {
    return $this->latestStep;
  }
  /**
   * Output only. The type of metric being diagnosed.
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
   * Output only. Deprecated: Use partial_trajectory_steps instead. Output only.
   * The intermediate trajectory updates (partial trajectory).
   *
   * @deprecated
   * @param string[] $partialTrajectories
   */
  public function setPartialTrajectories($partialTrajectories)
  {
    $this->partialTrajectories = $partialTrajectories;
  }
  /**
   * @deprecated
   * @return string[]
   */
  public function getPartialTrajectories()
  {
    return $this->partialTrajectories;
  }
  /**
   * Output only. The intermediate trajectory updates. This can be used for live
   * progress tracking of the agent's thoughts and actions as it works through
   * the analysis.
   *
   * @param GoogleCloudContactcenterinsightsV1SherlockStep[] $partialTrajectorySteps
   */
  public function setPartialTrajectorySteps($partialTrajectorySteps)
  {
    $this->partialTrajectorySteps = $partialTrajectorySteps;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1SherlockStep[]
   */
  public function getPartialTrajectorySteps()
  {
    return $this->partialTrajectorySteps;
  }
  /**
   * Output only. The request that created the operation.
   *
   * @param GoogleCloudContactcenterinsightsV1DiagnoseConversationsRequest $request
   */
  public function setRequest(GoogleCloudContactcenterinsightsV1DiagnoseConversationsRequest $request)
  {
    $this->request = $request;
  }
  /**
   * @return GoogleCloudContactcenterinsightsV1DiagnoseConversationsRequest
   */
  public function getRequest()
  {
    return $this->request;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudContactcenterinsightsV1DiagnoseConversationsMetadata::class, 'Google_Service_Contactcenterinsights_GoogleCloudContactcenterinsightsV1DiagnoseConversationsMetadata');
