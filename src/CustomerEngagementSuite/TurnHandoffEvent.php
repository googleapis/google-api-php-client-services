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

namespace Google\Service\CustomerEngagementSuite;

class TurnHandoffEvent extends \Google\Model
{
  /**
   * Unspecified.
   */
  public const REASON_REASON_UNSPECIFIED = 'REASON_UNSPECIFIED';
  /**
   * The serving task is shutting down (release push or rescheduling).
   */
  public const REASON_SERVER_RESTART = 'SERVER_RESTART';
  /**
   * Why the stream is handing off.
   *
   * @var string
   */
  public $reason;
  /**
   * Identifies the turn to resume.
   *
   * @var string
   */
  public $turnId;

  /**
   * Why the stream is handing off.
   *
   * Accepted values: REASON_UNSPECIFIED, SERVER_RESTART
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
   * Identifies the turn to resume.
   *
   * @param string $turnId
   */
  public function setTurnId($turnId)
  {
    $this->turnId = $turnId;
  }
  /**
   * @return string
   */
  public function getTurnId()
  {
    return $this->turnId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TurnHandoffEvent::class, 'Google_Service_CustomerEngagementSuite_TurnHandoffEvent');
