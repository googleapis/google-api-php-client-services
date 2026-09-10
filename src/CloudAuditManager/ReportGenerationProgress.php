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

class ReportGenerationProgress extends \Google\Model
{
  /**
   * Default value. This value is unused.
   */
  public const STATE_OPERATION_STATE_UNSPECIFIED = 'OPERATION_STATE_UNSPECIFIED';
  /**
   * Audit generation process hasn't started.
   */
  public const STATE_OPERATION_STATE_NOT_STARTED = 'OPERATION_STATE_NOT_STARTED';
  /**
   * Evaluation process is in progress.
   */
  public const STATE_OPERATION_STATE_EVALUATION_IN_PROGRESS = 'OPERATION_STATE_EVALUATION_IN_PROGRESS';
  /**
   * Evaluation process is completed.
   */
  public const STATE_OPERATION_STATE_EVALUATION_DONE = 'OPERATION_STATE_EVALUATION_DONE';
  /**
   * Report generation process is in progress.
   */
  public const STATE_OPERATION_STATE_EVIDENCE_REPORT_GENERATION_IN_PROGRESS = 'OPERATION_STATE_EVIDENCE_REPORT_GENERATION_IN_PROGRESS';
  /**
   * Report generation process is completed.
   */
  public const STATE_OPERATION_STATE_EVIDENCE_REPORT_GENERATION_DONE = 'OPERATION_STATE_EVIDENCE_REPORT_GENERATION_DONE';
  /**
   * The audit report and evidence are being uploaded to your bucket.
   */
  public const STATE_OPERATION_STATE_EVIDENCE_UPLOAD_IN_PROGRESS = 'OPERATION_STATE_EVIDENCE_UPLOAD_IN_PROGRESS';
  /**
   * The audit report and evidence are uploaded to your bucket.
   */
  public const STATE_OPERATION_STATE_DONE = 'OPERATION_STATE_DONE';
  /**
   * Audit report generation process failed.
   */
  public const STATE_OPERATION_STATE_FAILED = 'OPERATION_STATE_FAILED';
  /**
   * Output only. Name of the audit report.
   *
   * @var string
   */
  public $auditReport;
  /**
   * Output only. Cloud Storage bucket where the audit report is uploaded to
   * after the evaluation process is completed.
   *
   * @var string
   */
  public $destinationGcsBucket;
  /**
   * Progress of the evaluation process. The progress is defined in terms of
   * percentage complete.
   *
   * @var 
   */
  public $evaluationPercentComplete;
  /**
   * Output only. Reason for failure during the audit report generation process.
   * This field is set only if the `OperationState` attribute is
   * `OPERATION_STATE_FAILED`.
   *
   * @var string
   */
  public $failureReason;
  /**
   * Report generation progress, defined in terms of percentage complete. Until
   * evaluation is complete, this value is always `0`.
   *
   * @var 
   */
  public $reportGenerationPercentComplete;
  /**
   * Report uploading progress, defined in terms of percentage complete. Until
   * evaluation and report generation are complete, this value is always `0`.
   *
   * @var 
   */
  public $reportUploadingPercentComplete;
  /**
   * Output only. Current state of execution for report generation.
   *
   * @var string
   */
  public $state;

  /**
   * Output only. Name of the audit report.
   *
   * @param string $auditReport
   */
  public function setAuditReport($auditReport)
  {
    $this->auditReport = $auditReport;
  }
  /**
   * @return string
   */
  public function getAuditReport()
  {
    return $this->auditReport;
  }
  /**
   * Output only. Cloud Storage bucket where the audit report is uploaded to
   * after the evaluation process is completed.
   *
   * @param string $destinationGcsBucket
   */
  public function setDestinationGcsBucket($destinationGcsBucket)
  {
    $this->destinationGcsBucket = $destinationGcsBucket;
  }
  /**
   * @return string
   */
  public function getDestinationGcsBucket()
  {
    return $this->destinationGcsBucket;
  }
  public function setEvaluationPercentComplete($evaluationPercentComplete)
  {
    $this->evaluationPercentComplete = $evaluationPercentComplete;
  }
  public function getEvaluationPercentComplete()
  {
    return $this->evaluationPercentComplete;
  }
  /**
   * Output only. Reason for failure during the audit report generation process.
   * This field is set only if the `OperationState` attribute is
   * `OPERATION_STATE_FAILED`.
   *
   * @param string $failureReason
   */
  public function setFailureReason($failureReason)
  {
    $this->failureReason = $failureReason;
  }
  /**
   * @return string
   */
  public function getFailureReason()
  {
    return $this->failureReason;
  }
  public function setReportGenerationPercentComplete($reportGenerationPercentComplete)
  {
    $this->reportGenerationPercentComplete = $reportGenerationPercentComplete;
  }
  public function getReportGenerationPercentComplete()
  {
    return $this->reportGenerationPercentComplete;
  }
  public function setReportUploadingPercentComplete($reportUploadingPercentComplete)
  {
    $this->reportUploadingPercentComplete = $reportUploadingPercentComplete;
  }
  public function getReportUploadingPercentComplete()
  {
    return $this->reportUploadingPercentComplete;
  }
  /**
   * Output only. Current state of execution for report generation.
   *
   * Accepted values: OPERATION_STATE_UNSPECIFIED, OPERATION_STATE_NOT_STARTED,
   * OPERATION_STATE_EVALUATION_IN_PROGRESS, OPERATION_STATE_EVALUATION_DONE,
   * OPERATION_STATE_EVIDENCE_REPORT_GENERATION_IN_PROGRESS,
   * OPERATION_STATE_EVIDENCE_REPORT_GENERATION_DONE,
   * OPERATION_STATE_EVIDENCE_UPLOAD_IN_PROGRESS, OPERATION_STATE_DONE,
   * OPERATION_STATE_FAILED
   *
   * @param self::STATE_* $state
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return self::STATE_*
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReportGenerationProgress::class, 'Google_Service_CloudAuditManager_ReportGenerationProgress');
