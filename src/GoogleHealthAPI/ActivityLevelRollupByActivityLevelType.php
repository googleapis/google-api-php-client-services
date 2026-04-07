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

class ActivityLevelRollupByActivityLevelType extends \Google\Model
{
  /**
   * Unspecified activity level type.
   */
  public const ACTIVITY_LEVEL_TYPE_ACTIVITY_LEVEL_TYPE_UNSPECIFIED = 'ACTIVITY_LEVEL_TYPE_UNSPECIFIED';
  /**
   * Sedentary activity level.
   */
  public const ACTIVITY_LEVEL_TYPE_SEDENTARY = 'SEDENTARY';
  /**
   * Lightly active activity level.
   */
  public const ACTIVITY_LEVEL_TYPE_LIGHTLY_ACTIVE = 'LIGHTLY_ACTIVE';
  /**
   * Moderately active activity level.
   */
  public const ACTIVITY_LEVEL_TYPE_MODERATELY_ACTIVE = 'MODERATELY_ACTIVE';
  /**
   * Very active activity level.
   */
  public const ACTIVITY_LEVEL_TYPE_VERY_ACTIVE = 'VERY_ACTIVE';
  /**
   * Activity level type.
   *
   * @var string
   */
  public $activityLevelType;
  /**
   * Total duration in the activity level type.
   *
   * @var string
   */
  public $totalDuration;

  /**
   * Activity level type.
   *
   * Accepted values: ACTIVITY_LEVEL_TYPE_UNSPECIFIED, SEDENTARY,
   * LIGHTLY_ACTIVE, MODERATELY_ACTIVE, VERY_ACTIVE
   *
   * @param self::ACTIVITY_LEVEL_TYPE_* $activityLevelType
   */
  public function setActivityLevelType($activityLevelType)
  {
    $this->activityLevelType = $activityLevelType;
  }
  /**
   * @return self::ACTIVITY_LEVEL_TYPE_*
   */
  public function getActivityLevelType()
  {
    return $this->activityLevelType;
  }
  /**
   * Total duration in the activity level type.
   *
   * @param string $totalDuration
   */
  public function setTotalDuration($totalDuration)
  {
    $this->totalDuration = $totalDuration;
  }
  /**
   * @return string
   */
  public function getTotalDuration()
  {
    return $this->totalDuration;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ActivityLevelRollupByActivityLevelType::class, 'Google_Service_GoogleHealthAPI_ActivityLevelRollupByActivityLevelType');
