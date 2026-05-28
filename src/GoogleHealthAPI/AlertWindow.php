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

class AlertWindow extends \Google\Collection
{
  protected $collection_key = 'heartBeats';
  protected $civilEndTimeType = CivilDateTime::class;
  protected $civilEndTimeDataType = '';
  protected $civilStartTimeType = CivilDateTime::class;
  protected $civilStartTimeDataType = '';
  /**
   * Required. The end time of the analysis window.
   *
   * @var string
   */
  public $endTime;
  /**
   * Required. The UTC offset of the user's timezone when the analysis window
   * ended.
   *
   * @var string
   */
  public $endUtcOffset;
  protected $heartBeatsType = HeartBeat::class;
  protected $heartBeatsDataType = 'array';
  /**
   * Optional. Flag indicating whether the window was positive for AFib or not.
   * A `true` value indicates that AFib was detected in this window. A `false`
   * value means AFib was not detected, but does not guarantee the absence of
   * AFib.
   *
   * @var bool
   */
  public $positive;
  /**
   * Required. Observed interval. The start time of the analysis window.
   *
   * @var string
   */
  public $startTime;
  /**
   * Required. The UTC offset of the user's timezone when the analysis window
   * started.
   *
   * @var string
   */
  public $startUtcOffset;

  /**
   * Output only. Observed interval end time in civil time in the timezone the
   * subject is in at the end of the observed interval
   *
   * @param CivilDateTime $civilEndTime
   */
  public function setCivilEndTime(CivilDateTime $civilEndTime)
  {
    $this->civilEndTime = $civilEndTime;
  }
  /**
   * @return CivilDateTime
   */
  public function getCivilEndTime()
  {
    return $this->civilEndTime;
  }
  /**
   * Output only. Observed interval start time in civil time in the timezone the
   * subject is in at the start of the observed interval
   *
   * @param CivilDateTime $civilStartTime
   */
  public function setCivilStartTime(CivilDateTime $civilStartTime)
  {
    $this->civilStartTime = $civilStartTime;
  }
  /**
   * @return CivilDateTime
   */
  public function getCivilStartTime()
  {
    return $this->civilStartTime;
  }
  /**
   * Required. The end time of the analysis window.
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
   * Required. The UTC offset of the user's timezone when the analysis window
   * ended.
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
   * Optional. All heart beats in the interval contained in this analysis
   * window.
   *
   * @param HeartBeat[] $heartBeats
   */
  public function setHeartBeats($heartBeats)
  {
    $this->heartBeats = $heartBeats;
  }
  /**
   * @return HeartBeat[]
   */
  public function getHeartBeats()
  {
    return $this->heartBeats;
  }
  /**
   * Optional. Flag indicating whether the window was positive for AFib or not.
   * A `true` value indicates that AFib was detected in this window. A `false`
   * value means AFib was not detected, but does not guarantee the absence of
   * AFib.
   *
   * @param bool $positive
   */
  public function setPositive($positive)
  {
    $this->positive = $positive;
  }
  /**
   * @return bool
   */
  public function getPositive()
  {
    return $this->positive;
  }
  /**
   * Required. Observed interval. The start time of the analysis window.
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
   * Required. The UTC offset of the user's timezone when the analysis window
   * started.
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
class_alias(AlertWindow::class, 'Google_Service_GoogleHealthAPI_AlertWindow');
