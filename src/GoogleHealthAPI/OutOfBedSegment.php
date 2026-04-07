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

class OutOfBedSegment extends \Google\Model
{
  /**
   * Required. Segment end time.
   *
   * @var string
   */
  public $endTime;
  /**
   * Required. The offset of the user's local time at the end of the segment
   * relative to the Coordinated Universal Time (UTC).
   *
   * @var string
   */
  public $endUtcOffset;
  /**
   * Required. Segment tart time.
   *
   * @var string
   */
  public $startTime;
  /**
   * Required. The offset of the user's local time at the start of the segment
   * relative to the Coordinated Universal Time (UTC).
   *
   * @var string
   */
  public $startUtcOffset;

  /**
   * Required. Segment end time.
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
   * Required. The offset of the user's local time at the end of the segment
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
   * Required. Segment tart time.
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
   * Required. The offset of the user's local time at the start of the segment
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
class_alias(OutOfBedSegment::class, 'Google_Service_GoogleHealthAPI_OutOfBedSegment');
