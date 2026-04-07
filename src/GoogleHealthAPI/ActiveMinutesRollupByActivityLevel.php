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

class ActiveMinutesRollupByActivityLevel extends \Google\Model
{
  /**
   * Activity level is unspecified.
   */
  public const ACTIVITY_LEVEL_ACTIVITY_LEVEL_UNSPECIFIED = 'ACTIVITY_LEVEL_UNSPECIFIED';
  /**
   * Light activity level.
   */
  public const ACTIVITY_LEVEL_LIGHT = 'LIGHT';
  /**
   * Moderate activity level.
   */
  public const ACTIVITY_LEVEL_MODERATE = 'MODERATE';
  /**
   * Vigorous activity level.
   */
  public const ACTIVITY_LEVEL_VIGOROUS = 'VIGOROUS';
  /**
   * Number of whole minutes spent in activity.
   *
   * @var string
   */
  public $activeMinutesSum;
  /**
   * The level of activity.
   *
   * @var string
   */
  public $activityLevel;

  /**
   * Number of whole minutes spent in activity.
   *
   * @param string $activeMinutesSum
   */
  public function setActiveMinutesSum($activeMinutesSum)
  {
    $this->activeMinutesSum = $activeMinutesSum;
  }
  /**
   * @return string
   */
  public function getActiveMinutesSum()
  {
    return $this->activeMinutesSum;
  }
  /**
   * The level of activity.
   *
   * Accepted values: ACTIVITY_LEVEL_UNSPECIFIED, LIGHT, MODERATE, VIGOROUS
   *
   * @param self::ACTIVITY_LEVEL_* $activityLevel
   */
  public function setActivityLevel($activityLevel)
  {
    $this->activityLevel = $activityLevel;
  }
  /**
   * @return self::ACTIVITY_LEVEL_*
   */
  public function getActivityLevel()
  {
    return $this->activityLevel;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ActiveMinutesRollupByActivityLevel::class, 'Google_Service_GoogleHealthAPI_ActiveMinutesRollupByActivityLevel');
