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

namespace Google\Service\CurationPartners;

class Report extends \Google\Model
{
  /**
   * Output only. The instant this report was created.
   *
   * @var string
   */
  public $createTime;
  /**
   * Optional. Display name for the report.
   *
   * @var string
   */
  public $displayName;
  /**
   * Output only. The locale of this report. Locale is set from the user's
   * locale at the time of the request. Locale can't be modified.
   *
   * @var string
   */
  public $locale;
  /**
   * Identifier. The resource name of the report. Report resource name have the
   * form: `curators/{account_id}/reports/{report_id}`
   *
   * @var string
   */
  public $name;
  protected $reportDefinitionType = ReportDefinition::class;
  protected $reportDefinitionDataType = '';
  /**
   * Output only. Report ID.
   *
   * @var string
   */
  public $reportId;
  /**
   * Output only. The instant this report was last modified.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. The instant this report was created.
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
   * Optional. Display name for the report.
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
   * Output only. The locale of this report. Locale is set from the user's
   * locale at the time of the request. Locale can't be modified.
   *
   * @param string $locale
   */
  public function setLocale($locale)
  {
    $this->locale = $locale;
  }
  /**
   * @return string
   */
  public function getLocale()
  {
    return $this->locale;
  }
  /**
   * Identifier. The resource name of the report. Report resource name have the
   * form: `curators/{account_id}/reports/{report_id}`
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
   * Required. The report definition of the report.
   *
   * @param ReportDefinition $reportDefinition
   */
  public function setReportDefinition(ReportDefinition $reportDefinition)
  {
    $this->reportDefinition = $reportDefinition;
  }
  /**
   * @return ReportDefinition
   */
  public function getReportDefinition()
  {
    return $this->reportDefinition;
  }
  /**
   * Output only. Report ID.
   *
   * @param string $reportId
   */
  public function setReportId($reportId)
  {
    $this->reportId = $reportId;
  }
  /**
   * @return string
   */
  public function getReportId()
  {
    return $this->reportId;
  }
  /**
   * Output only. The instant this report was last modified.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Report::class, 'Google_Service_CurationPartners_Report');
