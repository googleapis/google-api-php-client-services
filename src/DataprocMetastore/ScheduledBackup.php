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

namespace Google\Service\DataprocMetastore;

class ScheduledBackup extends \Google\Model
{
  /**
   * Optional. A Cloud Storage URI of a folder, in the format gs:. A sub-folder
   * containing backup files will be stored below it.
   *
   * @var string
   */
  public $backupLocation;
  /**
   * Optional. The scheduled interval in Cron format, see
   * https://en.wikipedia.org/wiki/Cron The default is empty: scheduled backup
   * is not enabled. Must be specified to enable scheduled backups.
   *
   * @var string
   */
  public $cronSchedule;
  /**
   * Optional. Defines whether the scheduled backup is enabled. The default
   * value is false.
   *
   * @var bool
   */
  public $enabled;
  protected $latestBackupType = LatestBackup::class;
  protected $latestBackupDataType = '';
  /**
   * Output only. The time when the next backups execution is scheduled to
   * start.
   *
   * @var string
   */
  public $nextScheduledTime;
  /**
   * Optional. Specifies the time zone to be used when interpreting
   * cron_schedule. Must be a time zone name from the time zone database
   * (https://en.wikipedia.org/wiki/List_of_tz_database_time_zones), e.g.
   * America/Los_Angeles or Africa/Abidjan. If left unspecified, the default is
   * UTC.
   *
   * @var string
   */
  public $timeZone;

  /**
   * Optional. A Cloud Storage URI of a folder, in the format gs:. A sub-folder
   * containing backup files will be stored below it.
   *
   * @param string $backupLocation
   */
  public function setBackupLocation($backupLocation)
  {
    $this->backupLocation = $backupLocation;
  }
  /**
   * @return string
   */
  public function getBackupLocation()
  {
    return $this->backupLocation;
  }
  /**
   * Optional. The scheduled interval in Cron format, see
   * https://en.wikipedia.org/wiki/Cron The default is empty: scheduled backup
   * is not enabled. Must be specified to enable scheduled backups.
   *
   * @param string $cronSchedule
   */
  public function setCronSchedule($cronSchedule)
  {
    $this->cronSchedule = $cronSchedule;
  }
  /**
   * @return string
   */
  public function getCronSchedule()
  {
    return $this->cronSchedule;
  }
  /**
   * Optional. Defines whether the scheduled backup is enabled. The default
   * value is false.
   *
   * @param bool $enabled
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * Output only. The details of the latest scheduled backup.
   *
   * @param LatestBackup $latestBackup
   */
  public function setLatestBackup(LatestBackup $latestBackup)
  {
    $this->latestBackup = $latestBackup;
  }
  /**
   * @return LatestBackup
   */
  public function getLatestBackup()
  {
    return $this->latestBackup;
  }
  /**
   * Output only. The time when the next backups execution is scheduled to
   * start.
   *
   * @param string $nextScheduledTime
   */
  public function setNextScheduledTime($nextScheduledTime)
  {
    $this->nextScheduledTime = $nextScheduledTime;
  }
  /**
   * @return string
   */
  public function getNextScheduledTime()
  {
    return $this->nextScheduledTime;
  }
  /**
   * Optional. Specifies the time zone to be used when interpreting
   * cron_schedule. Must be a time zone name from the time zone database
   * (https://en.wikipedia.org/wiki/List_of_tz_database_time_zones), e.g.
   * America/Los_Angeles or Africa/Abidjan. If left unspecified, the default is
   * UTC.
   *
   * @param string $timeZone
   */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /**
   * @return string
   */
  public function getTimeZone()
  {
    return $this->timeZone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ScheduledBackup::class, 'Google_Service_DataprocMetastore_ScheduledBackup');
