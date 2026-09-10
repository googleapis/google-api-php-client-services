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

class GenerateAuditScopeReportRequest extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const REPORT_FORMAT_AUDIT_SCOPE_REPORT_FORMAT_UNSPECIFIED = 'AUDIT_SCOPE_REPORT_FORMAT_UNSPECIFIED';
  /**
   * Open Document format.
   */
  public const REPORT_FORMAT_AUDIT_SCOPE_REPORT_FORMAT_ODF = 'AUDIT_SCOPE_REPORT_FORMAT_ODF';
  /**
   * Required. Framework (set of controls) that the audit scope report is
   * generated against. For example, `NIST_800_53`.
   *
   * @var string
   */
  public $complianceFramework;
  /**
   * Optional. Deprecated. The standard (industry or regulatory requirements)
   * that the audit scope report is run against. Use the `compliance_framework`
   * field instead.
   *
   * @deprecated
   * @var string
   */
  public $complianceStandard;
  /**
   * Required. Format for the audit scope report.
   *
   * @var string
   */
  public $reportFormat;
  /**
   * Optional. If `true`, only validates the request and does not generate the
   * audit scope report. This executes standard request validation (such as
   * schema, framework existence, scope, and IAM checks) and skips the apply
   * phase. Use this field for the following purposes: * **Infrastructure as
   * Code (IaC)**: Allow tools like Terraform to run dry-run mutations (e.g.,
   * `terraform plan`) without creating real resources or incurring costs. *
   * **User Interface Validation**: Enable real-time form and permission
   * validation in custom UIs before submitting requests. * **CI/CD &
   * Automation**: Test your scripts, permissions, and parameters safely without
   * consuming resource quotas.
   *
   * @var bool
   */
  public $validateOnly;

  /**
   * Required. Framework (set of controls) that the audit scope report is
   * generated against. For example, `NIST_800_53`.
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
   * Optional. Deprecated. The standard (industry or regulatory requirements)
   * that the audit scope report is run against. Use the `compliance_framework`
   * field instead.
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
   * Required. Format for the audit scope report.
   *
   * Accepted values: AUDIT_SCOPE_REPORT_FORMAT_UNSPECIFIED,
   * AUDIT_SCOPE_REPORT_FORMAT_ODF
   *
   * @param self::REPORT_FORMAT_* $reportFormat
   */
  public function setReportFormat($reportFormat)
  {
    $this->reportFormat = $reportFormat;
  }
  /**
   * @return self::REPORT_FORMAT_*
   */
  public function getReportFormat()
  {
    return $this->reportFormat;
  }
  /**
   * Optional. If `true`, only validates the request and does not generate the
   * audit scope report. This executes standard request validation (such as
   * schema, framework existence, scope, and IAM checks) and skips the apply
   * phase. Use this field for the following purposes: * **Infrastructure as
   * Code (IaC)**: Allow tools like Terraform to run dry-run mutations (e.g.,
   * `terraform plan`) without creating real resources or incurring costs. *
   * **User Interface Validation**: Enable real-time form and permission
   * validation in custom UIs before submitting requests. * **CI/CD &
   * Automation**: Test your scripts, permissions, and parameters safely without
   * consuming resource quotas.
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
class_alias(GenerateAuditScopeReportRequest::class, 'Google_Service_CloudAuditManager_GenerateAuditScopeReportRequest');
