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

class Exercise extends \Google\Collection
{
  /**
   * Exercise type is unspecified.
   */
  public const EXERCISE_TYPE_EXERCISE_TYPE_UNSPECIFIED = 'EXERCISE_TYPE_UNSPECIFIED';
  /**
   * Running type.
   */
  public const EXERCISE_TYPE_RUNNING = 'RUNNING';
  /**
   * Walking type.
   */
  public const EXERCISE_TYPE_WALKING = 'WALKING';
  /**
   * Biking type.
   */
  public const EXERCISE_TYPE_BIKING = 'BIKING';
  /**
   * Swimming type.
   */
  public const EXERCISE_TYPE_SWIMMING = 'SWIMMING';
  /**
   * Hiking type.
   */
  public const EXERCISE_TYPE_HIKING = 'HIKING';
  /**
   * Yoga type.
   */
  public const EXERCISE_TYPE_YOGA = 'YOGA';
  /**
   * Pilates type.
   */
  public const EXERCISE_TYPE_PILATES = 'PILATES';
  /**
   * Workout type.
   */
  public const EXERCISE_TYPE_WORKOUT = 'WORKOUT';
  /**
   * HIIT type.
   */
  public const EXERCISE_TYPE_HIIT = 'HIIT';
  /**
   * Weightlifting type.
   */
  public const EXERCISE_TYPE_WEIGHTLIFTING = 'WEIGHTLIFTING';
  /**
   * Strength training type.
   */
  public const EXERCISE_TYPE_STRENGTH_TRAINING = 'STRENGTH_TRAINING';
  /**
   * Other type.
   */
  public const EXERCISE_TYPE_OTHER = 'OTHER';
  protected $collection_key = 'splits';
  /**
   * Optional. Duration excluding pauses.
   *
   * @var string
   */
  public $activeDuration;
  /**
   * Output only. Represents the timestamp of the creation of the exercise.
   *
   * @var string
   */
  public $createTime;
  /**
   * Required. Exercise display name.
   *
   * @var string
   */
  public $displayName;
  protected $exerciseEventsType = ExerciseEvent::class;
  protected $exerciseEventsDataType = 'array';
  protected $exerciseMetadataType = ExerciseMetadata::class;
  protected $exerciseMetadataDataType = '';
  /**
   * Required. The type of activity performed during an exercise.
   *
   * @var string
   */
  public $exerciseType;
  protected $intervalType = SessionTimeInterval::class;
  protected $intervalDataType = '';
  protected $metricsSummaryType = MetricsSummary::class;
  protected $metricsSummaryDataType = '';
  /**
   * Optional. Standard free-form notes captured at manual logging.
   *
   * @var string
   */
  public $notes;
  protected $splitSummariesType = SplitSummary::class;
  protected $splitSummariesDataType = 'array';
  protected $splitsType = SplitSummary::class;
  protected $splitsDataType = 'array';
  /**
   * Output only. This is the timestamp of the last update to the exercise.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Optional. Duration excluding pauses.
   *
   * @param string $activeDuration
   */
  public function setActiveDuration($activeDuration)
  {
    $this->activeDuration = $activeDuration;
  }
  /**
   * @return string
   */
  public function getActiveDuration()
  {
    return $this->activeDuration;
  }
  /**
   * Output only. Represents the timestamp of the creation of the exercise.
   *
   * @param string $createTime
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * Required. Exercise display name.
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
   * Optional. Exercise events that happen during an exercise, such as pause &
   * restarts.
   *
   * @param ExerciseEvent[] $exerciseEvents
   */
  public function setExerciseEvents($exerciseEvents)
  {
    $this->exerciseEvents = $exerciseEvents;
  }
  /**
   * @return ExerciseEvent[]
   */
  public function getExerciseEvents()
  {
    return $this->exerciseEvents;
  }
  /**
   * Optional. Additional exercise metadata.
   *
   * @param ExerciseMetadata $exerciseMetadata
   */
  public function setExerciseMetadata(ExerciseMetadata $exerciseMetadata)
  {
    $this->exerciseMetadata = $exerciseMetadata;
  }
  /**
   * @return ExerciseMetadata
   */
  public function getExerciseMetadata()
  {
    return $this->exerciseMetadata;
  }
  /**
   * Required. The type of activity performed during an exercise.
   *
   * Accepted values: EXERCISE_TYPE_UNSPECIFIED, RUNNING, WALKING, BIKING,
   * SWIMMING, HIKING, YOGA, PILATES, WORKOUT, HIIT, WEIGHTLIFTING,
   * STRENGTH_TRAINING, OTHER
   *
   * @param self::EXERCISE_TYPE_* $exerciseType
   */
  public function setExerciseType($exerciseType)
  {
    $this->exerciseType = $exerciseType;
  }
  /**
   * @return self::EXERCISE_TYPE_*
   */
  public function getExerciseType()
  {
    return $this->exerciseType;
  }
  /**
   * Required. Observed exercise interval
   *
   * @param SessionTimeInterval $interval
   */
  public function setInterval(SessionTimeInterval $interval)
  {
    $this->interval = $interval;
  }
  /**
   * @return SessionTimeInterval
   */
  public function getInterval()
  {
    return $this->interval;
  }
  /**
   * Required. Summary metrics for this exercise ( )
   *
   * @param MetricsSummary $metricsSummary
   */
  public function setMetricsSummary(MetricsSummary $metricsSummary)
  {
    $this->metricsSummary = $metricsSummary;
  }
  /**
   * @return MetricsSummary
   */
  public function getMetricsSummary()
  {
    return $this->metricsSummary;
  }
  /**
   * Optional. Standard free-form notes captured at manual logging.
   *
   * @param string $notes
   */
  public function setNotes($notes)
  {
    $this->notes = $notes;
  }
  /**
   * @return string
   */
  public function getNotes()
  {
    return $this->notes;
  }
  /**
   * Optional. Laps or splits recorded within an exercise. Laps could be split
   * based on distance or other criteria (duration, etc.) Laps should not be
   * overlapping with each other.
   *
   * @param SplitSummary[] $splitSummaries
   */
  public function setSplitSummaries($splitSummaries)
  {
    $this->splitSummaries = $splitSummaries;
  }
  /**
   * @return SplitSummary[]
   */
  public function getSplitSummaries()
  {
    return $this->splitSummaries;
  }
  /**
   * Optional. The default split is 1 km or 1 mile. - if the movement distance
   * is less than the default, then there are no splits - if the movement
   * distance is greater than or equal to the default, then we have splits
   *
   * @param SplitSummary[] $splits
   */
  public function setSplits($splits)
  {
    $this->splits = $splits;
  }
  /**
   * @return SplitSummary[]
   */
  public function getSplits()
  {
    return $this->splits;
  }
  /**
   * Output only. This is the timestamp of the last update to the exercise.
   *
   * @param string $updateTime
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Exercise::class, 'Google_Service_GoogleHealthAPI_Exercise');
