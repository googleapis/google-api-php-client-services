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

class StageSummary extends \Google\Model
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
   * Output only. Number of sleep stages segments.
   *
   * @var string
   */
  public $count;
  /**
   * Output only. Total duration in minutes of a sleep stage.
   *
   * @var string
   */
  public $minutes;
  /**
   * Output only. Sleep stage type: AWAKE, DEEP, REM, LIGHT etc.
   *
   * @var string
   */
  public $type;

  /**
   * Output only. Number of sleep stages segments.
   *
   * @param string $count
   */
  public function setCount($count)
  {
    $this->count = $count;
  }
  /**
   * @return string
   */
  public function getCount()
  {
    return $this->count;
  }
  /**
   * Output only. Total duration in minutes of a sleep stage.
   *
   * @param string $minutes
   */
  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;
  }
  /**
   * @return string
   */
  public function getMinutes()
  {
    return $this->minutes;
  }
  /**
   * Output only. Sleep stage type: AWAKE, DEEP, REM, LIGHT etc.
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
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StageSummary::class, 'Google_Service_GoogleHealthAPI_StageSummary');
