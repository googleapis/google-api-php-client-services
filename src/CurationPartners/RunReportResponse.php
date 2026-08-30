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

class RunReportResponse extends \Google\Model
{
  /**
   * The unique name of the generated result. Use with `FetchReportResultRows`
   * to retrieve data.
   *
   * @var string
   */
  public $reportResult;

  /**
   * The unique name of the generated result. Use with `FetchReportResultRows`
   * to retrieve data.
   *
   * @param string $reportResult
   */
  public function setReportResult($reportResult)
  {
    $this->reportResult = $reportResult;
  }
  /**
   * @return string
   */
  public function getReportResult()
  {
    return $this->reportResult;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RunReportResponse::class, 'Google_Service_CurationPartners_RunReportResponse');
