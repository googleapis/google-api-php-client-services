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

class SessionTimeInterval extends \Google\Model
{
  protected $civilEndTimeType = CivilDateTime::class;
  protected $civilEndTimeDataType = '';
  protected $civilStartTimeType = CivilDateTime::class;
  protected $civilStartTimeDataType = '';
  /**
   * Required. The end time of the observed session.
   *
   * @var string
   */
  public $endTime;
  /**
   * Required. The offset of the user's local time at the end of the session
   * relative to the Coordinated Universal Time (UTC).
   *
   * @var string
   */
  public $endUtcOffset;
  /**
   * Required. The start time of the observed session.
   *
   * @var string
   */
  public $startTime;
  /**
   * Required. The offset of the user's local time at the start of the session
   * relative to the Coordinated Universal Time (UTC).
   *
   * @var string
   */
  public $startUtcOffset;

  /**
   * Output only. Session end time in civil time in the timezone the subject is
   * in at the end of the session.
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
   * Output only. Session start time in civil time in the timezone the subject
   * is in at the start of the session.
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
   * Required. The end time of the observed session.
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
   * Required. The offset of the user's local time at the end of the session
   * relative to the Coordinated Universal Time (UTC).
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
   * Required. The start time of the observed session.
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
   * Required. The offset of the user's local time at the start of the session
   * relative to the Coordinated Universal Time (UTC).
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
class_alias(SessionTimeInterval::class, 'Google_Service_GoogleHealthAPI_SessionTimeInterval');
