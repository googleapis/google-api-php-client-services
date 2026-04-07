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

class ExerciseMetadata extends \Google\Model
{
  /**
   * Optional. Whether the exercise had GPS tracking.
   *
   * @var bool
   */
  public $hasGps;
  /**
   * Optional. Pool length in millimeters. Only present in the swimming
   * exercises.
   *
   * @var string
   */
  public $poolLengthMillimeters;

  /**
   * Optional. Whether the exercise had GPS tracking.
   *
   * @param bool $hasGps
   */
  public function setHasGps($hasGps)
  {
    $this->hasGps = $hasGps;
  }
  /**
   * @return bool
   */
  public function getHasGps()
  {
    return $this->hasGps;
  }
  /**
   * Optional. Pool length in millimeters. Only present in the swimming
   * exercises.
   *
   * @param string $poolLengthMillimeters
   */
  public function setPoolLengthMillimeters($poolLengthMillimeters)
  {
    $this->poolLengthMillimeters = $poolLengthMillimeters;
  }
  /**
   * @return string
   */
  public function getPoolLengthMillimeters()
  {
    return $this->poolLengthMillimeters;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ExerciseMetadata::class, 'Google_Service_GoogleHealthAPI_ExerciseMetadata');
