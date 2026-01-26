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

namespace Google\Service\BackupforGKE;

class BackupRuleDetail extends \Google\Model
{
  /**
   * Backup Window For Eg. “00:00 to 06:00”
   *
   * @var string
   */
  public $backupWindow;
  /**
   * Backup Window Timezone in IANA format. For Eg. “America/Los_Angeles”
   *
   * @var string
   */
  public $backupWindowTimezone;
  /**
   * Recurrence Type. For Eg. “Weekly”,” Monthly” or “Daily”.
   *
   * @var string
   */
  public $recurrence;
  /**
   * Recurrence Repeat Schedule. For Eg. “1st and 25th day of the month.”
   *
   * @var string
   */
  public $recurrenceSchedule;
  /**
   * Backup Retention in Days.
   *
   * @var int
   */
  public $retentionDays;
  /**
   * Backup Rule Name.
   *
   * @var string
   */
  public $ruleName;

  /**
   * Backup Window For Eg. “00:00 to 06:00”
   *
   * @param string $backupWindow
   */
  public function setBackupWindow($backupWindow)
  {
    $this->backupWindow = $backupWindow;
  }
  /**
   * @return string
   */
  public function getBackupWindow()
  {
    return $this->backupWindow;
  }
  /**
   * Backup Window Timezone in IANA format. For Eg. “America/Los_Angeles”
   *
   * @param string $backupWindowTimezone
   */
  public function setBackupWindowTimezone($backupWindowTimezone)
  {
    $this->backupWindowTimezone = $backupWindowTimezone;
  }
  /**
   * @return string
   */
  public function getBackupWindowTimezone()
  {
    return $this->backupWindowTimezone;
  }
  /**
   * Recurrence Type. For Eg. “Weekly”,” Monthly” or “Daily”.
   *
   * @param string $recurrence
   */
  public function setRecurrence($recurrence)
  {
    $this->recurrence = $recurrence;
  }
  /**
   * @return string
   */
  public function getRecurrence()
  {
    return $this->recurrence;
  }
  /**
   * Recurrence Repeat Schedule. For Eg. “1st and 25th day of the month.”
   *
   * @param string $recurrenceSchedule
   */
  public function setRecurrenceSchedule($recurrenceSchedule)
  {
    $this->recurrenceSchedule = $recurrenceSchedule;
  }
  /**
   * @return string
   */
  public function getRecurrenceSchedule()
  {
    return $this->recurrenceSchedule;
  }
  /**
   * Backup Retention in Days.
   *
   * @param int $retentionDays
   */
  public function setRetentionDays($retentionDays)
  {
    $this->retentionDays = $retentionDays;
  }
  /**
   * @return int
   */
  public function getRetentionDays()
  {
    return $this->retentionDays;
  }
  /**
   * Backup Rule Name.
   *
   * @param string $ruleName
   */
  public function setRuleName($ruleName)
  {
    $this->ruleName = $ruleName;
  }
  /**
   * @return string
   */
  public function getRuleName()
  {
    return $this->ruleName;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BackupRuleDetail::class, 'Google_Service_BackupforGKE_BackupRuleDetail');
