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

namespace Google\Service\SA360;

class GoogleAdsSearchads360V23ResourcesOfflineConversionSummary extends \Google\Model
{
  /**
   * Output only. Total count of failed event.
   *
   * @var string
   */
  public $failedCount;
  /**
   * Output only. Dimension key for last N jobs.
   *
   * @var string
   */
  public $jobId;
  /**
   * Output only. Total count of pending uploaded event.
   *
   * @var string
   */
  public $pendingCount;
  /**
   * Output only. Total count of successful event.
   *
   * @var string
   */
  public $successfulCount;
  /**
   * Output only. Dimension key for last N days.
   *
   * @var string
   */
  public $uploadDate;

  /**
   * Output only. Total count of failed event.
   *
   * @param string $failedCount
   */
  public function setFailedCount($failedCount)
  {
    $this->failedCount = $failedCount;
  }
  /**
   * @return string
   */
  public function getFailedCount()
  {
    return $this->failedCount;
  }
  /**
   * Output only. Dimension key for last N jobs.
   *
   * @param string $jobId
   */
  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }
  /**
   * @return string
   */
  public function getJobId()
  {
    return $this->jobId;
  }
  /**
   * Output only. Total count of pending uploaded event.
   *
   * @param string $pendingCount
   */
  public function setPendingCount($pendingCount)
  {
    $this->pendingCount = $pendingCount;
  }
  /**
   * @return string
   */
  public function getPendingCount()
  {
    return $this->pendingCount;
  }
  /**
   * Output only. Total count of successful event.
   *
   * @param string $successfulCount
   */
  public function setSuccessfulCount($successfulCount)
  {
    $this->successfulCount = $successfulCount;
  }
  /**
   * @return string
   */
  public function getSuccessfulCount()
  {
    return $this->successfulCount;
  }
  /**
   * Output only. Dimension key for last N days.
   *
   * @param string $uploadDate
   */
  public function setUploadDate($uploadDate)
  {
    $this->uploadDate = $uploadDate;
  }
  /**
   * @return string
   */
  public function getUploadDate()
  {
    return $this->uploadDate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleAdsSearchads360V23ResourcesOfflineConversionSummary::class, 'Google_Service_SA360_GoogleAdsSearchads360V23ResourcesOfflineConversionSummary');
