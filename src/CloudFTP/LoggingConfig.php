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

namespace Google\Service\CloudFTP;

class LoggingConfig extends \Google\Model
{
  /**
   * Default value. Defaults to `ALL_EVENTS` when logging is `enabled`.
   */
  public const VERBOSITY_LOG_VERBOSITY_UNSPECIFIED = 'LOG_VERBOSITY_UNSPECIFIED';
  /**
   * Logs all SFTP events, including authentication, session lifecycle, file
   * transfers, and directory/metadata commands.
   */
  public const VERBOSITY_ALL_EVENTS = 'ALL_EVENTS';
  /**
   * Logs authentication, session lifecycle, file transfers, and failed
   * commands. Suppresses successful non-transfer commands (such as LIST or
   * STAT).
   */
  public const VERBOSITY_TRANSFERS_AND_AUTH_ONLY = 'TRANSFERS_AND_AUTH_ONLY';
  /**
   * Logs only failed operations and errors.
   */
  public const VERBOSITY_ERRORS_ONLY = 'ERRORS_ONLY';
  /**
   * Optional. Whether platform logging (`ftp.googleapis.com/ftp_events`) is
   * enabled for this server. Defaults to `false`.
   *
   * @var bool
   */
  public $enabled;
  /**
   * Optional. The verbosity level of logs emitted when `enabled` is `true`.
   * Defaults to `ALL_EVENTS` if unspecified when `enabled` is `true`.
   *
   * @var string
   */
  public $verbosity;

  /**
   * Optional. Whether platform logging (`ftp.googleapis.com/ftp_events`) is
   * enabled for this server. Defaults to `false`.
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
   * Optional. The verbosity level of logs emitted when `enabled` is `true`.
   * Defaults to `ALL_EVENTS` if unspecified when `enabled` is `true`.
   *
   * Accepted values: LOG_VERBOSITY_UNSPECIFIED, ALL_EVENTS,
   * TRANSFERS_AND_AUTH_ONLY, ERRORS_ONLY
   *
   * @param self::VERBOSITY_* $verbosity
   */
  public function setVerbosity($verbosity)
  {
    $this->verbosity = $verbosity;
  }
  /**
   * @return self::VERBOSITY_*
   */
  public function getVerbosity()
  {
    return $this->verbosity;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LoggingConfig::class, 'Google_Service_CloudFTP_LoggingConfig');
