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

namespace Google\Service\CloudObservability;

class Report extends \Google\Collection
{
  /**
   * Unspecified report type.
   */
  public const REPORT_TYPE_REPORT_TYPE_UNSPECIFIED = 'REPORT_TYPE_UNSPECIFIED';
  /**
   * Render the report to a PNG image.
   */
  public const REPORT_TYPE_PNG = 'PNG';
  /**
   * Render the report to a PDF document.
   */
  public const REPORT_TYPE_PDF = 'PDF';
  /**
   * Render the report as an HTML document.
   */
  public const REPORT_TYPE_HTML = 'HTML';
  protected $collection_key = 'recipientEmails';
  /**
   * Output only. When the report was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Output only. The username of the user who created the report. This may be
   * an email or a formatted subject and identity pool identifier. The following
   * are examples: alice.smith@example.com alice.smith@example.com
   * (global/workforcePools/example-com-us-employees) my-workload
   * (projects/1234/locations/global/workloadIdentityPools/example-workload-
   * pool) This value may be empty if the creating user was deleted, or if the
   * username is otherwise unavailable.
   *
   * @var string
   */
  public $creatorUsername;
  /**
   * Required. The dashboard to render in the report. Note that dashboards are
   * snapshotted on report creation, so changes to the dashboard after report
   * creation will not be reflected in the report. For example:
   * //monitoring.googleapis.com/projects/my-project/dashboards/my-dashboard
   *
   * @var string
   */
  public $dashboard;
  /**
   * Optional. A description of the report. Useful for documenting how the
   * report is intended to be used.
   *
   * @var string
   */
  public $description;
  /**
   * Optional. The human readable name of the report. The maximum length is 63
   * characters.
   *
   * @var string
   */
  public $displayName;
  /**
   * Optional. This checksum is computed by the server based on the value of
   * other fields, and may be sent on update and delete requests to ensure the
   * client has an up-to-date value before proceeding.
   *
   * @var string
   */
  public $etag;
  /**
   * Output only. When the report was last successfully run.
   *
   * @var string
   */
  public $latestRunTime;
  /**
   * Identifier. The resource name of the report. Format:
   * projects/{project}/locations/{location}/reports/{report}
   *
   * @var string
   */
  public $name;
  /**
   * Optional. The list of email addresses to receive the report.
   *
   * @var string[]
   */
  public $recipientEmails;
  protected $renderingOptionsType = RenderingOptions::class;
  protected $renderingOptionsDataType = '';
  /**
   * Optional. The type of the report.
   *
   * @var string
   */
  public $reportType;
  /**
   * Optional. The associated cloud scheduling job, if this is a scheduled
   * report. For example: cloudscheduler.googleapis.com/projects/my-
   * project/locations/global/jobs/my-job
   *
   * @var string
   */
  public $schedulingJob;
  /**
   * Optional. The time window of the report data, ending at the time the report
   * is generated. If not specified, defaults to the last 7 days.
   *
   * @var string
   */
  public $timeWindow;
  /**
   * Output only. When the report was last updated.
   *
   * @var string
   */
  public $updateTime;
  /**
   * Output only. The username of the user who updated the report. This may be
   * an email or a formatted subject and identity pool identifier. The following
   * are examples: alice.smith@example.com alice.smith@example.com
   * (global/workforcePools/example-com-us-employees) my-workload
   * (projects/1234/locations/global/workloadIdentityPools/example-workload-
   * pool) This value may be empty if the updating user was deleted, or if the
   * username is otherwise unavailable.
   *
   * @var string
   */
  public $updaterUsername;

  /**
   * Output only. When the report was created.
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
   * Output only. The username of the user who created the report. This may be
   * an email or a formatted subject and identity pool identifier. The following
   * are examples: alice.smith@example.com alice.smith@example.com
   * (global/workforcePools/example-com-us-employees) my-workload
   * (projects/1234/locations/global/workloadIdentityPools/example-workload-
   * pool) This value may be empty if the creating user was deleted, or if the
   * username is otherwise unavailable.
   *
   * @param string $creatorUsername
   */
  public function setCreatorUsername($creatorUsername)
  {
    $this->creatorUsername = $creatorUsername;
  }
  /**
   * @return string
   */
  public function getCreatorUsername()
  {
    return $this->creatorUsername;
  }
  /**
   * Required. The dashboard to render in the report. Note that dashboards are
   * snapshotted on report creation, so changes to the dashboard after report
   * creation will not be reflected in the report. For example:
   * //monitoring.googleapis.com/projects/my-project/dashboards/my-dashboard
   *
   * @param string $dashboard
   */
  public function setDashboard($dashboard)
  {
    $this->dashboard = $dashboard;
  }
  /**
   * @return string
   */
  public function getDashboard()
  {
    return $this->dashboard;
  }
  /**
   * Optional. A description of the report. Useful for documenting how the
   * report is intended to be used.
   *
   * @param string $description
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * Optional. The human readable name of the report. The maximum length is 63
   * characters.
   *
   * @param string $displayName
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * Optional. This checksum is computed by the server based on the value of
   * other fields, and may be sent on update and delete requests to ensure the
   * client has an up-to-date value before proceeding.
   *
   * @param string $etag
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * Output only. When the report was last successfully run.
   *
   * @param string $latestRunTime
   */
  public function setLatestRunTime($latestRunTime)
  {
    $this->latestRunTime = $latestRunTime;
  }
  /**
   * @return string
   */
  public function getLatestRunTime()
  {
    return $this->latestRunTime;
  }
  /**
   * Identifier. The resource name of the report. Format:
   * projects/{project}/locations/{location}/reports/{report}
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
   * Optional. The list of email addresses to receive the report.
   *
   * @param string[] $recipientEmails
   */
  public function setRecipientEmails($recipientEmails)
  {
    $this->recipientEmails = $recipientEmails;
  }
  /**
   * @return string[]
   */
  public function getRecipientEmails()
  {
    return $this->recipientEmails;
  }
  /**
   * Optional. Rendering options for the report.
   *
   * @param RenderingOptions $renderingOptions
   */
  public function setRenderingOptions(RenderingOptions $renderingOptions)
  {
    $this->renderingOptions = $renderingOptions;
  }
  /**
   * @return RenderingOptions
   */
  public function getRenderingOptions()
  {
    return $this->renderingOptions;
  }
  /**
   * Optional. The type of the report.
   *
   * Accepted values: REPORT_TYPE_UNSPECIFIED, PNG, PDF, HTML
   *
   * @param self::REPORT_TYPE_* $reportType
   */
  public function setReportType($reportType)
  {
    $this->reportType = $reportType;
  }
  /**
   * @return self::REPORT_TYPE_*
   */
  public function getReportType()
  {
    return $this->reportType;
  }
  /**
   * Optional. The associated cloud scheduling job, if this is a scheduled
   * report. For example: cloudscheduler.googleapis.com/projects/my-
   * project/locations/global/jobs/my-job
   *
   * @param string $schedulingJob
   */
  public function setSchedulingJob($schedulingJob)
  {
    $this->schedulingJob = $schedulingJob;
  }
  /**
   * @return string
   */
  public function getSchedulingJob()
  {
    return $this->schedulingJob;
  }
  /**
   * Optional. The time window of the report data, ending at the time the report
   * is generated. If not specified, defaults to the last 7 days.
   *
   * @param string $timeWindow
   */
  public function setTimeWindow($timeWindow)
  {
    $this->timeWindow = $timeWindow;
  }
  /**
   * @return string
   */
  public function getTimeWindow()
  {
    return $this->timeWindow;
  }
  /**
   * Output only. When the report was last updated.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
  /**
   * Output only. The username of the user who updated the report. This may be
   * an email or a formatted subject and identity pool identifier. The following
   * are examples: alice.smith@example.com alice.smith@example.com
   * (global/workforcePools/example-com-us-employees) my-workload
   * (projects/1234/locations/global/workloadIdentityPools/example-workload-
   * pool) This value may be empty if the updating user was deleted, or if the
   * username is otherwise unavailable.
   *
   * @param string $updaterUsername
   */
  public function setUpdaterUsername($updaterUsername)
  {
    $this->updaterUsername = $updaterUsername;
  }
  /**
   * @return string
   */
  public function getUpdaterUsername()
  {
    return $this->updaterUsername;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Report::class, 'Google_Service_CloudObservability_Report');
