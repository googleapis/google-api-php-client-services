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

namespace Google\Service\ArtifactRegistry;

class PlatformLogsConfig extends \Google\Model
{
  /**
   * Platform logs settings for the parent resource haven't been set. This is
   * the default state or when the user clears the settings for the parent.
   */
  public const LOGGING_STATE_LOGGING_STATE_UNSPECIFIED = 'LOGGING_STATE_UNSPECIFIED';
  /**
   * Platform logs are enabled.
   */
  public const LOGGING_STATE_ENABLED = 'ENABLED';
  /**
   * Platform logs are disabled.
   */
  public const LOGGING_STATE_DISABLED = 'DISABLED';
  /**
   * No severity level specified, meaning everything is being logged.
   */
  public const SEVERITY_LEVEL_SEVERITY_LEVEL_UNSPECIFIED = 'SEVERITY_LEVEL_UNSPECIFIED';
  /**
   * Debug or trace information.
   */
  public const SEVERITY_LEVEL_DEBUG = 'DEBUG';
  /**
   * Routine information, such as ongoing status or performance.
   */
  public const SEVERITY_LEVEL_INFO = 'INFO';
  /**
   * Normal but significant events, such as start up, shut down, or a
   * configuration change.
   */
  public const SEVERITY_LEVEL_NOTICE = 'NOTICE';
  /**
   * Warning events that might cause problems.
   */
  public const SEVERITY_LEVEL_WARNING = 'WARNING';
  /**
   * Error events that are likely to cause problems.
   */
  public const SEVERITY_LEVEL_ERROR = 'ERROR';
  /**
   * Critical events that cause more severe problems or outages.
   */
  public const SEVERITY_LEVEL_CRITICAL = 'CRITICAL';
  /**
   * Alert events that require a person must take an action immediately.
   */
  public const SEVERITY_LEVEL_ALERT = 'ALERT';
  /**
   * One or more systems are unusable.
   */
  public const SEVERITY_LEVEL_EMERGENCY = 'EMERGENCY';
  /**
   * Optional. The state of the platform logs: enabled or disabled.
   *
   * @var string
   */
  public $loggingState;
  /**
   * Optional. The severity level for the logs. Logs will be generated if their
   * severity level is >= than the value of the severity level mentioned here.
   *
   * @var string
   */
  public $severityLevel;

  /**
   * Optional. The state of the platform logs: enabled or disabled.
   *
   * Accepted values: LOGGING_STATE_UNSPECIFIED, ENABLED, DISABLED
   *
   * @param self::LOGGING_STATE_* $loggingState
   */
  public function setLoggingState($loggingState)
  {
    $this->loggingState = $loggingState;
  }
  /**
   * @return self::LOGGING_STATE_*
   */
  public function getLoggingState()
  {
    return $this->loggingState;
  }
  /**
   * Optional. The severity level for the logs. Logs will be generated if their
   * severity level is >= than the value of the severity level mentioned here.
   *
   * Accepted values: SEVERITY_LEVEL_UNSPECIFIED, DEBUG, INFO, NOTICE, WARNING,
   * ERROR, CRITICAL, ALERT, EMERGENCY
   *
   * @param self::SEVERITY_LEVEL_* $severityLevel
   */
  public function setSeverityLevel($severityLevel)
  {
    $this->severityLevel = $severityLevel;
  }
  /**
   * @return self::SEVERITY_LEVEL_*
   */
  public function getSeverityLevel()
  {
    return $this->severityLevel;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PlatformLogsConfig::class, 'Google_Service_ArtifactRegistry_PlatformLogsConfig');
