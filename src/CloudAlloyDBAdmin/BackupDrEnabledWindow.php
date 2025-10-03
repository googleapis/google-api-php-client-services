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

namespace Google\Service\CloudAlloyDBAdmin;

class BackupDrEnabledWindow extends \Google\Model
{
  /**
   * @var bool
   */
  public $automatedBackupPreviouslyEnabled;
  /**
   * @var string
   */
  public $backupPlanAssociation;
  /**
   * @var int
   */
  public $continuousBackupPreviousRecoveryWindowDays;
  /**
   * @var bool
   */
  public $continuousBackupPreviouslyEnabled;
  /**
   * @var string
   */
  public $continuousBackupPreviouslyEnabledTime;
  /**
   * @var string
   */
  public $dataSource;
  /**
   * @var string
   */
  public $disabledTime;
  /**
   * @var string
   */
  public $enabledTime;
  /**
   * @var string
   */
  public $logRetentionPeriod;

  /**
   * @param bool
   */
  public function setAutomatedBackupPreviouslyEnabled($automatedBackupPreviouslyEnabled)
  {
    $this->automatedBackupPreviouslyEnabled = $automatedBackupPreviouslyEnabled;
  }
  /**
   * @return bool
   */
  public function getAutomatedBackupPreviouslyEnabled()
  {
    return $this->automatedBackupPreviouslyEnabled;
  }
  /**
   * @param string
   */
  public function setBackupPlanAssociation($backupPlanAssociation)
  {
    $this->backupPlanAssociation = $backupPlanAssociation;
  }
  /**
   * @return string
   */
  public function getBackupPlanAssociation()
  {
    return $this->backupPlanAssociation;
  }
  /**
   * @param int
   */
  public function setContinuousBackupPreviousRecoveryWindowDays($continuousBackupPreviousRecoveryWindowDays)
  {
    $this->continuousBackupPreviousRecoveryWindowDays = $continuousBackupPreviousRecoveryWindowDays;
  }
  /**
   * @return int
   */
  public function getContinuousBackupPreviousRecoveryWindowDays()
  {
    return $this->continuousBackupPreviousRecoveryWindowDays;
  }
  /**
   * @param bool
   */
  public function setContinuousBackupPreviouslyEnabled($continuousBackupPreviouslyEnabled)
  {
    $this->continuousBackupPreviouslyEnabled = $continuousBackupPreviouslyEnabled;
  }
  /**
   * @return bool
   */
  public function getContinuousBackupPreviouslyEnabled()
  {
    return $this->continuousBackupPreviouslyEnabled;
  }
  /**
   * @param string
   */
  public function setContinuousBackupPreviouslyEnabledTime($continuousBackupPreviouslyEnabledTime)
  {
    $this->continuousBackupPreviouslyEnabledTime = $continuousBackupPreviouslyEnabledTime;
  }
  /**
   * @return string
   */
  public function getContinuousBackupPreviouslyEnabledTime()
  {
    return $this->continuousBackupPreviouslyEnabledTime;
  }
  /**
   * @param string
   */
  public function setDataSource($dataSource)
  {
    $this->dataSource = $dataSource;
  }
  /**
   * @return string
   */
  public function getDataSource()
  {
    return $this->dataSource;
  }
  /**
   * @param string
   */
  public function setDisabledTime($disabledTime)
  {
    $this->disabledTime = $disabledTime;
  }
  /**
   * @return string
   */
  public function getDisabledTime()
  {
    return $this->disabledTime;
  }
  /**
   * @param string
   */
  public function setEnabledTime($enabledTime)
  {
    $this->enabledTime = $enabledTime;
  }
  /**
   * @return string
   */
  public function getEnabledTime()
  {
    return $this->enabledTime;
  }
  /**
   * @param string
   */
  public function setLogRetentionPeriod($logRetentionPeriod)
  {
    $this->logRetentionPeriod = $logRetentionPeriod;
  }
  /**
   * @return string
   */
  public function getLogRetentionPeriod()
  {
    return $this->logRetentionPeriod;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BackupDrEnabledWindow::class, 'Google_Service_CloudAlloyDBAdmin_BackupDrEnabledWindow');
