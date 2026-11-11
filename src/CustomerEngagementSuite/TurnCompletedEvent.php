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

class TurnCompletedEvent extends \Google\Collection
{
  /**
   * Unspecified.
   */
  public const REASON_REASON_UNSPECIFIED = 'REASON_UNSPECIFIED';
  /**
   * The turn ran to completion; the session holds its committed output.
   */
  public const REASON_COMPLETED = 'COMPLETED';
  /**
   * No task was driving the turn any more; it was sealed to a committed partial
   * and cannot be continued.
   */
  public const REASON_ABANDONED = 'ABANDONED';
  /**
   * This server does not serve attach or resume for the session, so nothing was
   * tailed; the client should reload the session instead.
   */
  public const REASON_RESUME_UNAVAILABLE = 'RESUME_UNAVAILABLE';
  protected $collection_key = 'touchedApps';
  /**
   * Sequence number of the last event the turn produced. A client whose cursor
   * is lower missed content and should reload the session to see it.
   *
   * @var string
   */
  public $finalSequenceNumber;
  /**
   * Why the turn ended.
   *
   * @var string
   */
  public $reason;
  /**
   * Apps this turn targeted or changed, so the console can refresh exactly
   * those apps' stores. Project-scoped sessions only. Format:
   * `projects/{project}/locations/{location}/apps/{app}`
   *
   * @var string[]
   */
  public $touchedApps;
  /**
   * Identifier of the turn that ended; matches TurnResumeSnapshot.turn_id and
   * ActiveTurnInfo.turn_id.
   *
   * @var string
   */
  public $turnId;

  /**
   * Sequence number of the last event the turn produced. A client whose cursor
   * is lower missed content and should reload the session to see it.
   *
   * @param string $finalSequenceNumber
   */
  public function setFinalSequenceNumber($finalSequenceNumber)
  {
    $this->finalSequenceNumber = $finalSequenceNumber;
  }
  /**
   * @return string
   */
  public function getFinalSequenceNumber()
  {
    return $this->finalSequenceNumber;
  }
  /**
   * Why the turn ended.
   *
   * Accepted values: REASON_UNSPECIFIED, COMPLETED, ABANDONED,
   * RESUME_UNAVAILABLE
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
   * Apps this turn targeted or changed, so the console can refresh exactly
   * those apps' stores. Project-scoped sessions only. Format:
   * `projects/{project}/locations/{location}/apps/{app}`
   *
   * @param string[] $touchedApps
   */
  public function setTouchedApps($touchedApps)
  {
    $this->touchedApps = $touchedApps;
  }
  /**
   * @return string[]
   */
  public function getTouchedApps()
  {
    return $this->touchedApps;
  }
  /**
   * Identifier of the turn that ended; matches TurnResumeSnapshot.turn_id and
   * ActiveTurnInfo.turn_id.
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
class_alias(TurnCompletedEvent::class, 'Google_Service_CustomerEngagementSuite_TurnCompletedEvent');
