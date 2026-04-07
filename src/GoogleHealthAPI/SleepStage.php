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

class SleepStage extends \Google\Model
{
  /**
   * The default unset value.
   */
  public const TYPE_SLEEP_STAGE_TYPE_UNSPECIFIED = 'SLEEP_STAGE_TYPE_UNSPECIFIED';
  /**
   * Sleep stage AWAKE.
   */
  public const TYPE_AWAKE = 'AWAKE';
  /**
   * Sleep stage LIGHT.
   */
  public const TYPE_LIGHT = 'LIGHT';
  /**
   * Sleep stage DEEP.
   */
  public const TYPE_DEEP = 'DEEP';
  /**
   * Sleep stage REM.
   */
  public const TYPE_REM = 'REM';
  /**
   * Sleep stage ASLEEP.
   */
  public const TYPE_ASLEEP = 'ASLEEP';
  /**
   * Sleep stage RESTLESS.
   */
  public const TYPE_RESTLESS = 'RESTLESS';
  /**
   * Output only. Creation time of this sleep stages segment.
   *
   * @var string
   */
  public $createTime;
  /**
   * Required. Sleep stage end time.
   *
   * @var string
   */
  public $endTime;
  /**
   * Required. The offset of the user's local time at the end of the sleep stage
   * relative to the Coordinated Universal Time (UTC).
   *
   * @var string
   */
  public $endUtcOffset;
  /**
   * Required. Sleep stage start time.
   *
   * @var string
   */
  public $startTime;
  /**
   * Required. The offset of the user's local time at the start of the sleep
   * stage relative to the Coordinated Universal Time (UTC).
   *
   * @var string
   */
  public $startUtcOffset;
  /**
   * Required. Sleep stage type: AWAKE, DEEP, REM, LIGHT etc.
   *
   * @var string
   */
  public $type;
  /**
   * Output only. Last update time of this sleep stages segment.
   *
   * @var string
   */
  public $updateTime;

  /**
   * Output only. Creation time of this sleep stages segment.
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
   * Required. Sleep stage end time.
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
   * Required. The offset of the user's local time at the end of the sleep stage
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
   * Required. Sleep stage start time.
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
   * Required. The offset of the user's local time at the start of the sleep
   * stage relative to the Coordinated Universal Time (UTC).
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
  /**
   * Required. Sleep stage type: AWAKE, DEEP, REM, LIGHT etc.
   *
   * Accepted values: SLEEP_STAGE_TYPE_UNSPECIFIED, AWAKE, LIGHT, DEEP, REM,
   * ASLEEP, RESTLESS
   *
   * @param self::TYPE_* $type
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return self::TYPE_*
   */
  public function getType()
  {
    return $this->type;
  }
  /**
   * Output only. Last update time of this sleep stages segment.
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
class_alias(SleepStage::class, 'Google_Service_GoogleHealthAPI_SleepStage');
