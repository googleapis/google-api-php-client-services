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

namespace Google\Service\Backupdr;

class AlloyDbPitrWindow extends \Google\Model
{
  /**
   * Output only. The end time of the PITR window. It is not set if the
   * corresponding Backup Plan Association is active.
   *
   * @var string
   */
  public $endTime;
  /**
   * Output only. Log retention days for the PITR window.
   *
   * @var string
   */
  public $logRetentionDays;
  /**
   * Output only. The start time of the PITR window.
   *
   * @var string
   */
  public $startTime;

  /**
   * Output only. The end time of the PITR window. It is not set if the
   * corresponding Backup Plan Association is active.
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * Output only. Log retention days for the PITR window.
   *
   * @param string $logRetentionDays
   */
  public function setLogRetentionDays($logRetentionDays)
  {
    $this->logRetentionDays = $logRetentionDays;
  }
  /**
   * @return string
   */
  public function getLogRetentionDays()
  {
    return $this->logRetentionDays;
  }
  /**
   * Output only. The start time of the PITR window.
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AlloyDbPitrWindow::class, 'Google_Service_Backupdr_AlloyDbPitrWindow');
