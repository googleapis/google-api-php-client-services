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

namespace Google\Service\Aiplatform;

class GoogleCloudAiplatformV1AgentStatusSuspensionReason extends \Google\Model
{
  /**
   * Unspecified suspension reason.
   */
  public const REASON_REASON_UNSPECIFIED = 'REASON_UNSPECIFIED';
  /**
   * Suspended due to abuse or terms of service violations.
   */
  public const REASON_ABUSE = 'ABUSE';
  /**
   * Suspended by a domain administrator.
   */
  public const REASON_ADMIN = 'ADMIN';
  /**
   * Suspended by the owner/user.
   */
  public const REASON_USER_INITIATED = 'USER_INITIATED';
  /**
   * Output only. The reason for the current suspension.
   *
   * @var string
   */
  public $reason;
  /**
   * Output only. The time when the current suspension was applied.
   *
   * @var string
   */
  public $suspensionTime;

  /**
   * Output only. The reason for the current suspension.
   *
   * Accepted values: REASON_UNSPECIFIED, ABUSE, ADMIN, USER_INITIATED
   *
   * @param self::REASON_* $reason
   */
  public function setReason($reason)
  {
    $this->reason = $reason;
  }
  /**
   * @return self::REASON_*
   */
  public function getReason()
  {
    return $this->reason;
  }
  /**
   * Output only. The time when the current suspension was applied.
   *
   * @param string $suspensionTime
   */
  public function setSuspensionTime($suspensionTime)
  {
    $this->suspensionTime = $suspensionTime;
  }
  /**
   * @return string
   */
  public function getSuspensionTime()
  {
    return $this->suspensionTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAiplatformV1AgentStatusSuspensionReason::class, 'Google_Service_Aiplatform_GoogleCloudAiplatformV1AgentStatusSuspensionReason');
