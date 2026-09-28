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

class Status extends \Google\Collection
{
  /**
   * Unknown status type.
   */
  public const STATUS_TYPE_STATUS_TYPE_UNSPECIFIED = 'STATUS_TYPE_UNSPECIFIED';
  /**
   * The session/job/execution is pending, not started yet.
   */
  public const STATUS_TYPE_PENDING = 'PENDING';
  /**
   * The session/job/execution is running.
   */
  public const STATUS_TYPE_RUNNING = 'RUNNING';
  /**
   * The session/job/execution is finished.
   */
  public const STATUS_TYPE_DONE = 'DONE';
  /**
   * The session/job/execution is suspended due to quota issues.
   */
  public const STATUS_TYPE_SUSPENDED = 'SUSPENDED';
  protected $collection_key = 'progressMessages';
  /**
   * Output only. Human-readable, detailed descriptions of the
   * session/job/execution's progress. For example: "Provisioning a device",
   * "Starting Test". Each message should contain only one line of text. During
   * the course of execution new data may be appended to the end of
   * progress_messages.
   *
   * @var string[]
   */
  public $progressMessages;
  /**
   * Output only. The status type of the session/job/execution.
   *
   * @var string
   */
  public $statusType;

  /**
   * Output only. Human-readable, detailed descriptions of the
   * session/job/execution's progress. For example: "Provisioning a device",
   * "Starting Test". Each message should contain only one line of text. During
   * the course of execution new data may be appended to the end of
   * progress_messages.
   *
   * @param string[] $progressMessages
   */
  public function setProgressMessages($progressMessages)
  {
    $this->progressMessages = $progressMessages;
  }
  /**
   * @return string[]
   */
  public function getProgressMessages()
  {
    return $this->progressMessages;
  }
  /**
   * Output only. The status type of the session/job/execution.
   *
   * Accepted values: STATUS_TYPE_UNSPECIFIED, PENDING, RUNNING, DONE, SUSPENDED
   *
   * @param self::STATUS_TYPE_* $statusType
   */
  public function setStatusType($statusType)
  {
    $this->statusType = $statusType;
  }
  /**
   * @return self::STATUS_TYPE_*
   */
  public function getStatusType()
  {
    return $this->statusType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Status::class, 'Google_Service_DeviceRun_Status');
