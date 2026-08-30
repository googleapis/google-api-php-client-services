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

class RunReportMetadata extends \Google\Model
{
  /**
   * An estimate of how close this report is to being completed. Will always be
   * 100 for failed and completed reports.
   *
   * @var int
   */
  public $percentComplete;
  /**
   * The result's parent report.
   *
   * @var string
   */
  public $report;

  /**
   * An estimate of how close this report is to being completed. Will always be
   * 100 for failed and completed reports.
   *
   * @param int $percentComplete
   */
  public function setPercentComplete($percentComplete)
  {
    $this->percentComplete = $percentComplete;
  }
  /**
   * @return int
   */
  public function getPercentComplete()
  {
    return $this->percentComplete;
  }
  /**
   * The result's parent report.
   *
   * @param string $report
   */
  public function setReport($report)
  {
    $this->report = $report;
  }
  /**
   * @return string
   */
  public function getReport()
  {
    return $this->report;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RunReportMetadata::class, 'Google_Service_CurationPartners_RunReportMetadata');
