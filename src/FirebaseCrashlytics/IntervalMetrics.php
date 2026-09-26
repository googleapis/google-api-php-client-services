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

namespace Google\Service\FirebaseCrashlytics;

class IntervalMetrics extends \Google\Model
{
  /**
   * Mobile only. Percentage of crash-free sessions. (total_sessions_count -
   * impacted_sessions_count) / total_sessions_count * 100.
   *
   * @var float
   */
  public $crashFreeSessionsPercentage;
  /**
   * Mobile only. Percentage of crash-free users. (total_users_count -
   * impacted_users_count) / total_users_count * 100
   *
   * @var float
   */
  public $crashFreeUsersPercentage;
  /**
   * The end of the interval covered by the computation.
   *
   * @var string
   */
  public $endTime;
  /**
   * The total count of events in the interval.
   *
   * @var string
   */
  public $eventsCount;
  /**
   * The number of distinct sessions in the set of events.
   *
   * @var string
   */
  public $impactedSessionsCount;
  /**
   * The number of distinct users in the set of events.
   *
   * @var string
   */
  public $impactedUsersCount;
  /**
   * Deprecated: Prefer `impacted_sessions_count`. The number of distinct
   * sessions in the set of events.
   *
   * @deprecated
   * @var string
   */
  public $sessionsCount;
  /**
   * The start of the interval covered by the computation.
   *
   * @var string
   */
  public $startTime;
  /**
   * The number of distinct sessions.
   *
   * @var string
   */
  public $totalSessionsCount;
  /**
   * The number of distinct users.
   *
   * @var string
   */
  public $totalUsersCount;

  /**
   * Mobile only. Percentage of crash-free sessions. (total_sessions_count -
   * impacted_sessions_count) / total_sessions_count * 100.
   *
   * @param float $crashFreeSessionsPercentage
   */
  public function setCrashFreeSessionsPercentage($crashFreeSessionsPercentage)
  {
    $this->crashFreeSessionsPercentage = $crashFreeSessionsPercentage;
  }
  /**
   * @return float
   */
  public function getCrashFreeSessionsPercentage()
  {
    return $this->crashFreeSessionsPercentage;
  }
  /**
   * Mobile only. Percentage of crash-free users. (total_users_count -
   * impacted_users_count) / total_users_count * 100
   *
   * @param float $crashFreeUsersPercentage
   */
  public function setCrashFreeUsersPercentage($crashFreeUsersPercentage)
  {
    $this->crashFreeUsersPercentage = $crashFreeUsersPercentage;
  }
  /**
   * @return float
   */
  public function getCrashFreeUsersPercentage()
  {
    return $this->crashFreeUsersPercentage;
  }
  /**
   * The end of the interval covered by the computation.
   *
   * @param string $endTime
   */
  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }
  /**
   * @return string
   */
  public function getEndTime()
  {
    return $this->endTime;
  }
  /**
   * The total count of events in the interval.
   *
   * @param string $eventsCount
   */
  public function setEventsCount($eventsCount)
  {
    $this->eventsCount = $eventsCount;
  }
  /**
   * @return string
   */
  public function getEventsCount()
  {
    return $this->eventsCount;
  }
  /**
   * The number of distinct sessions in the set of events.
   *
   * @param string $impactedSessionsCount
   */
  public function setImpactedSessionsCount($impactedSessionsCount)
  {
    $this->impactedSessionsCount = $impactedSessionsCount;
  }
  /**
   * @return string
   */
  public function getImpactedSessionsCount()
  {
    return $this->impactedSessionsCount;
  }
  /**
   * The number of distinct users in the set of events.
   *
   * @param string $impactedUsersCount
   */
  public function setImpactedUsersCount($impactedUsersCount)
  {
    $this->impactedUsersCount = $impactedUsersCount;
  }
  /**
   * @return string
   */
  public function getImpactedUsersCount()
  {
    return $this->impactedUsersCount;
  }
  /**
   * Deprecated: Prefer `impacted_sessions_count`. The number of distinct
   * sessions in the set of events.
   *
   * @deprecated
   * @param string $sessionsCount
   */
  public function setSessionsCount($sessionsCount)
  {
    $this->sessionsCount = $sessionsCount;
  }
  /**
   * @deprecated
   * @return string
   */
  public function getSessionsCount()
  {
    return $this->sessionsCount;
  }
  /**
   * The start of the interval covered by the computation.
   *
   * @param string $startTime
   */
  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }
  /**
   * @return string
   */
  public function getStartTime()
  {
    return $this->startTime;
  }
  /**
   * The number of distinct sessions.
   *
   * @param string $totalSessionsCount
   */
  public function setTotalSessionsCount($totalSessionsCount)
  {
    $this->totalSessionsCount = $totalSessionsCount;
  }
  /**
   * @return string
   */
  public function getTotalSessionsCount()
  {
    return $this->totalSessionsCount;
  }
  /**
   * The number of distinct users.
   *
   * @param string $totalUsersCount
   */
  public function setTotalUsersCount($totalUsersCount)
  {
    $this->totalUsersCount = $totalUsersCount;
  }
  /**
   * @return string
   */
  public function getTotalUsersCount()
  {
    return $this->totalUsersCount;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IntervalMetrics::class, 'Google_Service_FirebaseCrashlytics_IntervalMetrics');
