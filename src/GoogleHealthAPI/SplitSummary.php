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

class SplitSummary extends \Google\Model
{
  /**
   * Split type is unspecified.
   */
  public const SPLIT_TYPE_SPLIT_TYPE_UNSPECIFIED = 'SPLIT_TYPE_UNSPECIFIED';
  /**
   * Manual split.
   */
  public const SPLIT_TYPE_MANUAL = 'MANUAL';
  /**
   * Split by duration.
   */
  public const SPLIT_TYPE_DURATION = 'DURATION';
  /**
   * Split by distance.
   */
  public const SPLIT_TYPE_DISTANCE = 'DISTANCE';
  /**
   * Split by calories.
   */
  public const SPLIT_TYPE_CALORIES = 'CALORIES';
  /**
   * Output only. Lap time excluding the pauses.
   *
   * @var string
   */
  public $activeDuration;
  /**
   * Required. Lap end time
   *
   * @var string
   */
  public $endTime;
  /**
   * Required. Lap end time offset from UTC
   *
   * @var string
   */
  public $endUtcOffset;
  protected $metricsSummaryType = MetricsSummary::class;
  protected $metricsSummaryDataType = '';
  /**
   * Required. Method used to split the exercise laps. Users may manually mark
   * the lap as complete even if the tracking is automatic.
   *
   * @var string
   */
  public $splitType;
  /**
   * Required. Lap start time
   *
   * @var string
   */
  public $startTime;
  /**
   * Required. Lap start time offset from UTC
   *
   * @var string
   */
  public $startUtcOffset;

  /**
   * Output only. Lap time excluding the pauses.
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
   * Required. Lap end time
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
   * Required. Lap end time offset from UTC
   *
   * @param string $endUtcOffset
   */
  public function setEndUtcOffset($endUtcOffset)
  {
    $this->endUtcOffset = $endUtcOffset;
  }
  /**
   * @return string
   */
  public function getEndUtcOffset()
  {
    return $this->endUtcOffset;
  }
  /**
   * Required. Summary metrics for this split.
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
   * Required. Method used to split the exercise laps. Users may manually mark
   * the lap as complete even if the tracking is automatic.
   *
   * Accepted values: SPLIT_TYPE_UNSPECIFIED, MANUAL, DURATION, DISTANCE,
   * CALORIES
   *
   * @param self::SPLIT_TYPE_* $splitType
   */
  public function setSplitType($splitType)
  {
    $this->splitType = $splitType;
  }
  /**
   * @return self::SPLIT_TYPE_*
   */
  public function getSplitType()
  {
    return $this->splitType;
  }
  /**
   * Required. Lap start time
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
   * Required. Lap start time offset from UTC
   *
   * @param string $startUtcOffset
   */
  public function setStartUtcOffset($startUtcOffset)
  {
    $this->startUtcOffset = $startUtcOffset;
  }
  /**
   * @return string
   */
  public function getStartUtcOffset()
  {
    return $this->startUtcOffset;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SplitSummary::class, 'Google_Service_GoogleHealthAPI_SplitSummary');
