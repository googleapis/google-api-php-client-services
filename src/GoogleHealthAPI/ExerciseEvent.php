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

namespace Google\Service\GoogleHealthAPI;

class ExerciseEvent extends \Google\Model
{
  /**
   * Exercise event type is unspecified.
   */
  public const EXERCISE_EVENT_TYPE_EXERCISE_EVENT_TYPE_UNSPECIFIED = 'EXERCISE_EVENT_TYPE_UNSPECIFIED';
  /**
   * Exercise start event.
   */
  public const EXERCISE_EVENT_TYPE_START = 'START';
  /**
   * Exercise stop event.
   */
  public const EXERCISE_EVENT_TYPE_STOP = 'STOP';
  /**
   * Exercise pause event.
   */
  public const EXERCISE_EVENT_TYPE_PAUSE = 'PAUSE';
  /**
   * Exercise resume event.
   */
  public const EXERCISE_EVENT_TYPE_RESUME = 'RESUME';
  /**
   * Exercise auto-pause event.
   */
  public const EXERCISE_EVENT_TYPE_AUTO_PAUSE = 'AUTO_PAUSE';
  /**
   * Exercise auto-resume event.
   */
  public const EXERCISE_EVENT_TYPE_AUTO_RESUME = 'AUTO_RESUME';
  /**
   * Required. Exercise event time
   *
   * @var string
   */
  public $eventTime;
  /**
   * Required. Exercise event time offset from UTC
   *
   * @var string
   */
  public $eventUtcOffset;
  /**
   * Required. The type of the event, such as start, stop, pause, resume.
   *
   * @var string
   */
  public $exerciseEventType;

  /**
   * Required. Exercise event time
   *
   * @param string $eventTime
   */
  public function setEventTime($eventTime)
  {
    $this->eventTime = $eventTime;
  }
  /**
   * @return string
   */
  public function getEventTime()
  {
    return $this->eventTime;
  }
  /**
   * Required. Exercise event time offset from UTC
   *
   * @param string $eventUtcOffset
   */
  public function setEventUtcOffset($eventUtcOffset)
  {
    $this->eventUtcOffset = $eventUtcOffset;
  }
  /**
   * @return string
   */
  public function getEventUtcOffset()
  {
    return $this->eventUtcOffset;
  }
  /**
   * Required. The type of the event, such as start, stop, pause, resume.
   *
   * Accepted values: EXERCISE_EVENT_TYPE_UNSPECIFIED, START, STOP, PAUSE,
   * RESUME, AUTO_PAUSE, AUTO_RESUME
   *
   * @param self::EXERCISE_EVENT_TYPE_* $exerciseEventType
   */
  public function setExerciseEventType($exerciseEventType)
  {
    $this->exerciseEventType = $exerciseEventType;
  }
  /**
   * @return self::EXERCISE_EVENT_TYPE_*
   */
  public function getExerciseEventType()
  {
    return $this->exerciseEventType;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExerciseEvent::class, 'Google_Service_GoogleHealthAPI_ExerciseEvent');
