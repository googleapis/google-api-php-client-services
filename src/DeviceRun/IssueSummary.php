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

class IssueSummary extends \Google\Model
{
  /**
   * Unspecified issue type. This value is unused.
   */
  public const TYPE_ISSUE_TYPE_UNSPECIFIED = 'ISSUE_TYPE_UNSPECIFIED';
  /**
   * Platform infrastructure or operational execution environment failure.
   */
  public const TYPE_INFRA = 'INFRA';
  /**
   * Customer test script failure, malformed APK, or bad user configuration.
   */
  public const TYPE_CUSTOMER = 'CUSTOMER';
  /**
   * Output only. Human-readable explanation of the issue in English.
   *
   * @var string
   */
  public $message;
  /**
   * Output only. The reason of the issue. This is a constant value that
   * identifies the proximate cause of the issue. This should be at most 63
   * characters and match a regular expression of `A-Z*[A-Z0-9]`, which
   * represents UPPER_SNAKE_CASE.
   *
   * @var string
   */
  public $reason;
  /**
   * Output only. The issue classification based on responsibility.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. Human-readable explanation of the issue in English.
   *
   * @param string $message
   */
  public function setMessage($message)
  {
    $this->message = $message;
  }
  /**
   * @return string
   */
  public function getMessage()
  {
    return $this->message;
  }
  /**
   * Output only. The reason of the issue. This is a constant value that
   * identifies the proximate cause of the issue. This should be at most 63
   * characters and match a regular expression of `A-Z*[A-Z0-9]`, which
   * represents UPPER_SNAKE_CASE.
   *
   * @param string $reason
   */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /**
   * @return string
   */
  public function getReason()
  {
    return $this->reason;
  }
  /**
   * Output only. The issue classification based on responsibility.
   *
   * Accepted values: ISSUE_TYPE_UNSPECIFIED, INFRA, CUSTOMER
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IssueSummary::class, 'Google_Service_DeviceRun_IssueSummary');
