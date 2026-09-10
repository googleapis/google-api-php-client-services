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

class ControlDetails extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const COMPLIANCE_STATE_COMPLIANCE_STATE_UNSPECIFIED = 'COMPLIANCE_STATE_UNSPECIFIED';
  /**
   * The resource is compliant.
   */
  public const COMPLIANCE_STATE_COMPLIANT = 'COMPLIANT';
  /**
   * The resource isn't compliant.
   */
  public const COMPLIANCE_STATE_VIOLATION = 'VIOLATION';
  /**
   * You must complete a manual review.
   */
  public const COMPLIANCE_STATE_MANUAL_REVIEW_NEEDED = 'MANUAL_REVIEW_NEEDED';
  /**
   * An error was encountered during the evaluation or evidence gathering
   * process.
   */
  public const COMPLIANCE_STATE_ERROR = 'ERROR';
  /**
   * The resource can't be audited.
   */
  public const COMPLIANCE_STATE_AUDIT_NOT_SUPPORTED = 'AUDIT_NOT_SUPPORTED';
  /**
   * Output only. Overall status of the findings for the control.
   *
   * @var string
   */
  public $complianceState;
  protected $controlType = Control::class;
  protected $controlDataType = '';
  protected $controlReportSummaryType = ReportSummary::class;
  protected $controlReportSummaryDataType = '';

  /**
   * Output only. Overall status of the findings for the control.
   *
   * Accepted values: COMPLIANCE_STATE_UNSPECIFIED, COMPLIANT, VIOLATION,
   * MANUAL_REVIEW_NEEDED, ERROR, AUDIT_NOT_SUPPORTED
   *
   * @param self::COMPLIANCE_STATE_* $complianceState
   */
  public function setComplianceState($complianceState)
  {
    $this->complianceState = $complianceState;
  }
  /**
   * @return self::COMPLIANCE_STATE_*
   */
  public function getComplianceState()
  {
    return $this->complianceState;
  }
  /**
   * Control that the findings are being reported for.
   *
   * @param Control $control
   */
  public function setControl(Control $control)
  {
    $this->control = $control;
  }
  /**
   * @return Control
   */
  public function getControl()
  {
    return $this->control;
  }
  /**
   * A control report summary that provides a high-level overview of the
   * compliance controls and the assessment status.
   *
   * @param ReportSummary $controlReportSummary
   */
  public function setControlReportSummary(ReportSummary $controlReportSummary)
  {
    $this->controlReportSummary = $controlReportSummary;
  }
  /**
   * @return ReportSummary
   */
  public function getControlReportSummary()
  {
    return $this->controlReportSummary;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ControlDetails::class, 'Google_Service_CloudAuditManager_ControlDetails');
