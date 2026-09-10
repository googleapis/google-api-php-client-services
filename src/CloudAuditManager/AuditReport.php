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

namespace Google\Service\CloudAuditManager;

class AuditReport extends \Google\Collection
{
  /**
   * Default value. This value is unused.
   */
  public const REPORT_GENERATION_STATE_REPORT_GENERATION_STATE_UNSPECIFIED = 'REPORT_GENERATION_STATE_UNSPECIFIED';
  /**
   * The process is in progress. The operation can have any state except for
   * `OPERATION_STATE_DONE` or `OPERATION_STATE_FAILED`.
   */
  public const REPORT_GENERATION_STATE_IN_PROGRESS = 'IN_PROGRESS';
  /**
   * The process is completed. The operation state is `OPERATION_STATE_DONE`.
   */
  public const REPORT_GENERATION_STATE_COMPLETED = 'COMPLETED';
  /**
   * The process has failed. The operation state is `OPERATION_STATE_FAILED`.
   */
  public const REPORT_GENERATION_STATE_FAILED = 'FAILED';
  /**
   * The process completed, but the report summary's status is unknown. This
   * state isn't used for new reports.
   */
  public const REPORT_GENERATION_STATE_SUMMARY_UNKNOWN = 'SUMMARY_UNKNOWN';
  protected $collection_key = 'controlDetails';
  /**
   * Output only. Compliance framework to use for the audit report. For example,
   * `CIS_GCP_FOUNDATIONS_V1_2_0`.
   *
   * @var string
   */
  public $complianceFramework;
  /**
   * Output only. Deprecated. Compliance standard to be audited against. Use the
   * `compliance_framework` field instead.
   *
   * @deprecated
   * @var string
   */
  public $complianceStandard;
  protected $controlDetailsType = ControlDetails::class;
  protected $controlDetailsDataType = 'array';
  /**
   * Output only. Creation time of the audit report.
   *
   * @var string
   */
  public $createTime;
  protected $destinationDetailsType = DestinationDetails::class;
  protected $destinationDetailsDataType = '';
  /**
   * Identifier. Name of the audit report, in one of the following formats: *
   * `projects/{project}/locations/{location}/auditReports/{audit_report}` *
   * `folders/{folder}/locations/{location}/auditReports/{audit_report}` * `orga
   * nizations/{organization}/locations/{location}/auditReports/{audit_report}`
   *
   * @var string
   */
  public $name;
  /**
   * Output only. Client operation ID for the audit report.
   *
   * @var string
   */
  public $operationId;
  /**
   * Output only. State of audit report generation.
   *
   * @var string
   */
  public $reportGenerationState;
  protected $reportSummaryType = ReportSummary::class;
  protected $reportSummaryDataType = '';
  /**
   * Output only. Organization, folder, or project that the report is generated
   * for, in one of the following formats: *
   * `projects/{project}/locations/{location}` *
   * `folders/{folder}/locations/{location}` *
   * `organizations/{organization}/locations/{location}`
   *
   * @var string
   */
  public $scope;
  /**
   * Output only. Project number, folder ID, or organization ID that the audit
   * report was generated for.
   *
   * @var string
   */
  public $scopeId;

  /**
   * Output only. Compliance framework to use for the audit report. For example,
   * `CIS_GCP_FOUNDATIONS_V1_2_0`.
   *
   * @param string $complianceFramework
   */
  public function setComplianceFramework($complianceFramework)
  {
    $this->complianceFramework = $complianceFramework;
  }
  /**
   * @return string
   */
  public function getComplianceFramework()
  {
    return $this->complianceFramework;
  }
  /**
   * Output only. Deprecated. Compliance standard to be audited against. Use the
   * `compliance_framework` field instead.
   *
   * @deprecated
   * @param string $complianceStandard
   */
  public function setComplianceStandard($complianceStandard)
  {
    $this->complianceStandard = $complianceStandard;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getComplianceStandard()
  {
    return $this->complianceStandard;
  }
  /**
   * Output only. Overall status of the controls.
   *
   * @param ControlDetails[] $controlDetails
   */
  public function setControlDetails($controlDetails)
  {
    $this->controlDetails = $controlDetails;
  }
  /**
   * @return ControlDetails[]
   */
  public function getControlDetails()
  {
    return $this->controlDetails;
  }
  /**
   * Output only. Creation time of the audit report.
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
   * Output only. Cloud Storage bucket where the audit report is uploaded to.
   *
   * @param DestinationDetails $destinationDetails
   */
  public function setDestinationDetails(DestinationDetails $destinationDetails)
  {
    $this->destinationDetails = $destinationDetails;
  }
  /**
   * @return DestinationDetails
   */
  public function getDestinationDetails()
  {
    return $this->destinationDetails;
  }
  /**
   * Identifier. Name of the audit report, in one of the following formats: *
   * `projects/{project}/locations/{location}/auditReports/{audit_report}` *
   * `folders/{folder}/locations/{location}/auditReports/{audit_report}` * `orga
   * nizations/{organization}/locations/{location}/auditReports/{audit_report}`
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
   * Output only. Client operation ID for the audit report.
   *
   * @param string $operationId
   */
  public function setOperationId($operationId)
  {
    $this->operationId = $operationId;
  }
  /**
   * @return string
   */
  public function getOperationId()
  {
    return $this->operationId;
  }
  /**
   * Output only. State of audit report generation.
   *
   * Accepted values: REPORT_GENERATION_STATE_UNSPECIFIED, IN_PROGRESS,
   * COMPLETED, FAILED, SUMMARY_UNKNOWN
   *
   * @param self::REPORT_GENERATION_STATE_* $reportGenerationState
   */
  public function setReportGenerationState($reportGenerationState)
  {
    $this->reportGenerationState = $reportGenerationState;
  }
  /**
   * @return self::REPORT_GENERATION_STATE_*
   */
  public function getReportGenerationState()
  {
    return $this->reportGenerationState;
  }
  /**
   * Output only. Report summary that includes information about compliance and
   * violation counts.
   *
   * @param ReportSummary $reportSummary
   */
  public function setReportSummary(ReportSummary $reportSummary)
  {
    $this->reportSummary = $reportSummary;
  }
  /**
   * @return ReportSummary
   */
  public function getReportSummary()
  {
    return $this->reportSummary;
  }
  /**
   * Output only. Organization, folder, or project that the report is generated
   * for, in one of the following formats: *
   * `projects/{project}/locations/{location}` *
   * `folders/{folder}/locations/{location}` *
   * `organizations/{organization}/locations/{location}`
   *
   * @param string $scope
   */
  public function setScope($scope)
  {
    $this->scope = $scope;
  }
  /**
   * @return string
   */
  public function getScope()
  {
    return $this->scope;
  }
  /**
   * Output only. Project number, folder ID, or organization ID that the audit
   * report was generated for.
   *
   * @param string $scopeId
   */
  public function setScopeId($scopeId)
  {
    $this->scopeId = $scopeId;
  }
  /**
   * @return string
   */
  public function getScopeId()
  {
    return $this->scopeId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AuditReport::class, 'Google_Service_CloudAuditManager_AuditReport');
