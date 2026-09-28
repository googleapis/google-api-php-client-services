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

namespace Google\Service\DeviceRun;

class SessionConfig extends \Google\Collection
{
  protected $collection_key = 'jobConfigs';
  /**
   * Optional. User-settable, human-readable name for the session. Maximum size
   * is 63 bytes when encoded as UTF-8. If set, must match regex:
   * `^A-Za-z0-9*$`.
   *
   * @var string
   */
  public $displayName;
  protected $jobConfigsType = JobConfig::class;
  protected $jobConfigsDataType = 'array';
  protected $notificationConfigType = SessionConfigSessionNotificationConfig::class;
  protected $notificationConfigDataType = '';
  protected $outputDirectoryConfigType = SessionConfigSessionOutputFileDirectoryConfig::class;
  protected $outputDirectoryConfigDataType = '';

  /**
   * Optional. User-settable, human-readable name for the session. Maximum size
   * is 63 bytes when encoded as UTF-8. If set, must match regex:
   * `^A-Za-z0-9*$`.
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
   * Required. Configs of the jobs in the session.
   *
   * @param JobConfig[] $jobConfigs
   */
  public function setJobConfigs($jobConfigs)
  {
    $this->jobConfigs = $jobConfigs;
  }
  /**
   * @return JobConfig[]
   */
  public function getJobConfigs()
  {
    return $this->jobConfigs;
  }
  /**
   * Optional. Notification config for the session.
   *
   * @param SessionConfigSessionNotificationConfig $notificationConfig
   */
  public function setNotificationConfig(SessionConfigSessionNotificationConfig $notificationConfig)
  {
    $this->notificationConfig = $notificationConfig;
  }
  /**
   * @return SessionConfigSessionNotificationConfig
   */
  public function getNotificationConfig()
  {
    return $this->notificationConfig;
  }
  /**
   * Required. Output file directory config for the session.
   *
   * @param SessionConfigSessionOutputFileDirectoryConfig $outputDirectoryConfig
   */
  public function setOutputDirectoryConfig(SessionConfigSessionOutputFileDirectoryConfig $outputDirectoryConfig)
  {
    $this->outputDirectoryConfig = $outputDirectoryConfig;
  }
  /**
   * @return SessionConfigSessionOutputFileDirectoryConfig
   */
  public function getOutputDirectoryConfig()
  {
    return $this->outputDirectoryConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SessionConfig::class, 'Google_Service_DeviceRun_SessionConfig');
