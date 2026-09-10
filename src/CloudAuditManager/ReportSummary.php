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

class ReportSummary extends \Google\Model
{
  /**
   * Number of compliant checks.
   *
   * @var int
   */
  public $compliantCount;
  /**
   * Number of checks that can't be performed due to errors.
   *
   * @var int
   */
  public $errorCount;
  /**
   * Number of checks that require a manual review.
   *
   * @var int
   */
  public $manualReviewNeededCount;
  /**
   * Total number of evaluated checks.
   *
   * @var int
   */
  public $totalCount;
  /**
   * Number of checks with violations.
   *
   * @var int
   */
  public $violationCount;

  /**
   * Number of compliant checks.
   *
   * @param int $compliantCount
   */
  public function setCompliantCount($compliantCount)
  {
    $this->compliantCount = $compliantCount;
  }
  /**
   * @return int
   */
  public function getCompliantCount()
  {
    return $this->compliantCount;
  }
  /**
   * Number of checks that can't be performed due to errors.
   *
   * @param int $errorCount
   */
  public function setErrorCount($errorCount)
  {
    $this->errorCount = $errorCount;
  }
  /**
   * @return int
   */
  public function getErrorCount()
  {
    return $this->errorCount;
  }
  /**
   * Number of checks that require a manual review.
   *
   * @param int $manualReviewNeededCount
   */
  public function setManualReviewNeededCount($manualReviewNeededCount)
  {
    $this->manualReviewNeededCount = $manualReviewNeededCount;
  }
  /**
   * @return int
   */
  public function getManualReviewNeededCount()
  {
    return $this->manualReviewNeededCount;
  }
  /**
   * Total number of evaluated checks.
   *
   * @param int $totalCount
   */
  public function setTotalCount($totalCount)
  {
    $this->totalCount = $totalCount;
  }
  /**
   * @return int
   */
  public function getTotalCount()
  {
    return $this->totalCount;
  }
  /**
   * Number of checks with violations.
   *
   * @param int $violationCount
   */
  public function setViolationCount($violationCount)
  {
    $this->violationCount = $violationCount;
  }
  /**
   * @return int
   */
  public function getViolationCount()
  {
    return $this->violationCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReportSummary::class, 'Google_Service_CloudAuditManager_ReportSummary');
